<?php
require_once('../config.php');
require_once('../const.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../lib/class.SmsCode.php');


$kingdom = User::createFromSession();


// adres e-mail pod kt�ry nale�y zg�asza� k�opoty z dzia�aniem do�adowywania konta
$admin_mail = "krzysiek@unikod.com";


// obs�uga formularza do�adowywania konta
if($_GET['mode'] == 'smspremium'){

    // obs�uga do�adowania przez SMS PREMIUM
    if(isset($_POST['charge_code_submit']) && isset($_POST['charge_code'])){
        if(strlen($_POST['charge_code']) == 8){
            $smsCode = new SmsCode($_POST['charge_code']);

            if($smsCode->isValid()){
                if(is_int($value = $smsCode->getValue())){

                    if($kingdom->accountBalance($value)){
                        $smsCode->remove($kingdom);
                        $mesg = "Stan Twojego konta zosta� zwi�kszony o: ".
                            "<b>$value</b> PLN.";
                    }else{

                        $mesg = "Tw�j kod sms jest poprawny. Wyst�pi�y jednak ".
                            "b��dy podczas do�adowywania Konta KoD.<br>";
                        $mesg .= "By� mo�e to chwilowa niedyspozycja serwera ".
                            "zatem odczekaj chwilk� i spr�buj ponownie wprowadzi� ".
                            "kod.<br>";
                        $mesg .= "Je�li widzisz ten komunikat ju� nie pierwszy ".
                            "raz skontaktuj si� z administracj� $admin_mail.";
                    }
                }else{

                    $mesg = "Wyst�pi�y b��dy podczas weryfikacji warto��i ".
                        "Twojego kodu SMS.<br>";
                    $mesg .= "Zg�o� ten problem administracji $admin_mail.";
                }
            }else{

                $mesg = "Ten kod jest niepoprawny lub zosta� ju� wykorzystany ".
                    "i nie jest ju� aktywny.";
            }
        }else{
            $mesg = "Prawdopodobnie �le wprowadzi�e� kod SMS do formularza.<br>";
            $mesg .= "Spr�buj ponownie, upewnij si�, �e dok�adnie usun��e� ".
                "wszystie zb�dne znaki z pola tekstowego (tak�e&nbsp;spacje).<br>";
            $mesg .= "Je�li ten komunikat si� powtarza zg�o� to administracji ".
                "$admin_mail.";
        }


    }else{
        $mesg = "Wpisz kod do weryfikacji.";
    }
    $smarty->assign('mesg', $mesg);
    $smarty->assign('expanded_panel', 'charge.mesg.tpl');

// wy�wietlenie regulaminu
}elseif($_GET['mode'] == 'rules'){

    // wy�wietlanie regulaminu do�adowania
    $smarty->assign('expanded_panel', 'charge.rules.tpl');

}elseif($_GET['mode'] == 'gamerules'){

    // wy�wietlanie regulaminu gry
    $smarty->assign('expanded_panel', 'charge.gamerules.tpl');

}else{

    // wy�wietlenie storny g��wnej do�adowywania
    $smarty->assign('expanded_panel', 'charge.main.tpl');
}


// wy�wietlanie strony
$smarty->assign('main_panel_expand', true);
$smarty->assign('main_panel', 'expand.main1.tpl');
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');
$smarty->display('main.tpl');
?>
