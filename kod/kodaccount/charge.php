<?php
require_once('../config.php');
require_once('../const.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../lib/class.SmsCode.php');


$kingdom = User::createFromSession();


// adres e-mail pod który nale¿y zg³aszaæ k³opoty z dzia³aniem do³adowywania konta
$admin_mail = "krzysiek@unikod.com";


// obs³uga formularza do³adowywania konta
if($_GET['mode'] == 'smspremium'){

    // obs³uga do³adowania przez SMS PREMIUM
    if(isset($_POST['charge_code_submit']) && isset($_POST['charge_code'])){
        if(strlen($_POST['charge_code']) == 8){
            $smsCode = new SmsCode($_POST['charge_code']);

            if($smsCode->isValid()){
                if(is_int($value = $smsCode->getValue())){

                    if($kingdom->accountBalance($value)){
                        $smsCode->remove($kingdom);
                        $mesg = "Stan Twojego konta zosta³ zwiêkszony o: ".
                            "<b>$value</b> PLN.";
                    }else{

                        $mesg = "Twój kod sms jest poprawny. Wyst±pi³y jednak ".
                            "b³êdy podczas do³adowywania Konta KoD.<br>";
                        $mesg .= "Byæ mo¿e to chwilowa niedyspozycja serwera ".
                            "zatem odczekaj chwilkê i spróbuj ponownie wprowadziæ ".
                            "kod.<br>";
                        $mesg .= "Je¶li widzisz ten komunikat ju¿ nie pierwszy ".
                            "raz skontaktuj siê z administracj± $admin_mail.";
                    }
                }else{

                    $mesg = "Wyst±pi³y b³êdy podczas weryfikacji warto¶æi ".
                        "Twojego kodu SMS.<br>";
                    $mesg .= "Zg³o¶ ten problem administracji $admin_mail.";
                }
            }else{

                $mesg = "Ten kod jest niepoprawny lub zosta³ ju¿ wykorzystany ".
                    "i nie jest ju¿ aktywny.";
            }
        }else{
            $mesg = "Prawdopodobnie ¼le wprowadzi³e¶ kod SMS do formularza.<br>";
            $mesg .= "Spróbuj ponownie, upewnij siê, ¿e dok³adnie usun±³e¶ ".
                "wszystie zbêdne znaki z pola tekstowego (tak¿e&nbsp;spacje).<br>";
            $mesg .= "Je¶li ten komunikat siê powtarza zg³o¶ to administracji ".
                "$admin_mail.";
        }


    }else{
        $mesg = "Wpisz kod do weryfikacji.";
    }
    $smarty->assign('mesg', $mesg);
    $smarty->assign('expanded_panel', 'charge.mesg.tpl');

// wy¶wietlenie regulaminu
}elseif($_GET['mode'] == 'rules'){

    // wy¶wietlanie regulaminu do³adowania
    $smarty->assign('expanded_panel', 'charge.rules.tpl');

}elseif($_GET['mode'] == 'gamerules'){

    // wy¶wietlanie regulaminu gry
    $smarty->assign('expanded_panel', 'charge.gamerules.tpl');

}else{

    // wy¶wietlenie storny g³ównej do³adowywania
    $smarty->assign('expanded_panel', 'charge.main.tpl');
}


// wy¶wietlanie strony
$smarty->assign('main_panel_expand', true);
$smarty->assign('main_panel', 'expand.main1.tpl');
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');
$smarty->display('main.tpl');
?>
