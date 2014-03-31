<?php
define('FUNCTION.REGISTER', true);
defined('CONFIG') or
die("<b>function.register.php</b> require: config.mailer.php, config.php");
require_once('param.constraint.php');
require_once('messages/class.MessageBox.php');
//---------------------------------------------------------- register_remove ---
// Usuwa konto przed aktywowaniem
function register_remove($login, $key){
    $query = "SELECT login FROM PROFIL WHERE login='$login' and czy_aktywowane=0";
    if(!$result = @mysql_query($query)) return false;

    if(mysql_num_rows($result) == 1){
        $row = mysql_fetch_array($result, MYSQL_ASSOC);
        if(md5("{$row['login']}a") == $key && $row['czy_aktywowane'] == 0){
            $query = "DELETE FROM PROFIL WHERE login='$login' and czy_aktywowane=0";
            if(@mysql_query($query)) return true;
            else return false;
        }else return NULL;
    }else return false;
}


//-------------------------------------------------------- register_activate ---
// Aktywuje zarejestrowane konto
function register_activate($login, $key){
    global $poczatek;

    $query = "SELECT login, czy_aktywowane FROM PROFIL WHERE login='$login'";
    if(!$result = @mysql_query($query)) return NULL;
    if(mysql_num_rows($result) == 0) return 1;

    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if($row["czy_aktywowane"] == 1) return 4;

    if(md5("{$row['login']}a") == $key){
        $query = "INSERT INTO KSIESTWA values('".$login."'
            ,".$poczatek['ziemia'].",".$poczatek['domy']."
            ,".$poczatek['warsztaty'].",".$poczatek['koszary'].",".$poczatek['farmy'].",".$poczatek['wiezyczki'].",".$poczatek['kopalnie_zlota'].",".$poczatek['kopalnie_zelaza'].",".$poczatek['rynki'].",".$poczatek['rolnicy'].",".$poczatek['kowale'].",".$poczatek['bezrobotni'].",".$poczatek['gornicy_zlota'].",".$poczatek['gornicy_zelaza'].",".$poczatek['tragarze'].",".$poczatek['gildie'].",".$poczatek['straznice'].",".$poczatek['budowniczowie'].",".$poczatek['lucznicy'].",".$poczatek['piechota'].",".$poczatek['husaria'].",".$poczatek['szpiedzy'].",".$poczatek['straznicy'].",".$poczatek['jedzenie'].",".$poczatek['zloto'].",".$poczatek['zelazo'].",".$poczatek['bronie'].",".$poczatek['narzedzia'].",".$poczatek['co_buduje'].",".$poczatek['tury'].",'Akademia_Wojskowa',0,".$poczatek['morale'].",".$poczatek['poziom_bezp'].",10,NULL,0,".$poczatek['zamek'].");";
        mysql_query($query);

        $query = "update PROFIL set czy_aktywowane = 1 where login='".$login."'";
        mysql_query($query);

        $query = "update INFO set liczba_ksiestw=liczba_ksiestw+1;";
        mysql_query($query);
        $none = new User(NULL);
			$mBox = new MessageBox($none);
			$recipient = new User($login);
			$mBox->sendBeginnersMessage($recipient);
        return 2;
    }else return 3;
}


//----------------------------------------------------------------- register ---
// Rejestruje uzytkownika
function register($login, $pass, $email, $code, &$err_mesg){
    global $smarty;
    global $user_constraint;
    global $ustawienia;

    $err_mesg = '';
    if(!isset($login, $pass, $email)) return false;

    // sprawdzenie limitu graczy
	if($login == 'MH' || $login == 'admin' || $login == 'tester')
	$err_mesg[] = "Niedozwolona nazwa";

    //sprawdzenie poprawnosci wpisanych danych
    $smarty->config_load('conf', 'REXP');
    if(!preg_match("/^[a-z0-9_]{3,20}$/i", $login))
        $err_mesg[] = "Nazwa królestwa jest niepoprawna.";
    if(!preg_match("/^[a-z0-9_]{5,20}$/i", $pass))
        $err_mesg[] = "Pieczêæ jest niepoprawna.";
    if(!preg_match("/^[^@]+@([a-z0-9_-]+\.)+[a-z]{2,4}$/i", $email))
        $err_mesg[] = 'Adres e-mail jest niepoprawny.';
//    if($code != $_SESSION['code'])
//        $err_mesg[] = 'Podany kod rejestracyjny jest niepoprawny. Spróbuj ponownie.';
    if(!empty($err_mesg)) return false;

    if(!register_is_login($login)){
        $err_mesg[] = "Królestwo o nazwie '$login' ju¿ istnieje.";
    }
    if(!register_is_email($email)){
        $err_mesg[] = "Podany adres e-mail ju¿ ma zarejestrowane królestwo.";
    }
    if(!empty($err_mesg)) return false;

    if(!register_send_mesg($login, $email, $pass)){
        die("B³±d serwera SMTP podczas wysy³ania wiadomo¶ci...");
    }

    $sql = "SELECT date FROM old_users WHERE ip='{$_SERVER['REMOTE_ADDR']}' OR mail='$email' ORDER BY date ASC LIMIT 1";
    $result = mysql_query($sql);
    $row = mysql_fetch_row($result);
    if($row)
      {
      $q = "INSERT INTO `PROFIL`(".
        "`login`, `haslo`, `mail`, `czy_aktywowane`, `pomoc`, `imie`, `nazwisko`, `kraj`, `miasto`, `wiek`, `ujawnic`, `ostatni_log`, `data_zalozenia`, `ip`, `property`, `money`) ".
        "VALUES('$login','".md5($pass)."','$email',0,'true','','','','',0000-00-00,'false',NOW(),'$row[0]','{$_SERVER['REMOTE_ADDR']}',0,0.00)";
      }
    else
      {
    //budowanie zapytania
    //$query = "INSERT INTO PROFIL VALUES('$login','".md5($pass)."','$email',0,'true','','','','',0000-00-00,'false',NOW(),NOW(),'{$_SERVER['REMOTE_ADDR']}',0,'$constraint')";
    $q = "INSERT INTO `PROFIL`(".
        "`login`, `haslo`, `mail`, `czy_aktywowane`, `pomoc`, `imie`, `nazwisko`, `kraj`, `miasto`, `wiek`, `ujawnic`, `ostatni_log`, `data_zalozenia`, `ip`, `property`, `money`) ".
        "VALUES('$login','".md5($pass)."','$email',0,'true','','','','',0000-00-00,'false',NOW(),NOW(),'{$_SERVER['REMOTE_ADDR']}',0,0.00)";
      }
    //print mysql_error();
    if(mysql_query($q)) { return true;}
    else return false;
}


//----------------------------------------------------------- register_login ---
// Sprawdza czy podany login jest zarejestrowany
function register_is_login($login){
    $login = strtoupper($login);
    $query = "SELECT login FROM PROFIL WHERE UPPER(login) = '$login'";
    $result = mysql_query($query);
    if(mysql_num_rows($result) > 0) return false;
    else return true;
}


//----------------------------------------------------------- register_email ---
// Sprawdza czy podany email jest zarejestrowany
function register_is_email($email){
    $query = "SELECT * FROM PROFIL WHERE mail='$email'";
    $result = mysql_query($query);
    if(mysql_num_rows($result) > 0) return false;
    else return true;
}


//------------------------------------------------------- register_send_mesg ---
// Wysyla wiadomosc aktywacyjna
function register_send_mesg($login, $email, $pass){
    global $mailer;
    global $CFG;

    //generowanie linkow potwierdzajacego i anulujacego rejestracje
    $key = md5("{$login}a");
    $confirm_link = "{$CFG->adresSerwera}register.php?mode=activateuser&login=$login&key=$key";
    $cancel_link = "{$CFG->adresSerwera}register.php?mode=removeuser&login=$login&key=$key";

    //generowanie i wyslanie wiadomosci e-mail
    $message = file_get_contents('data.register.message.txt');
    if(!$message) die('B³±d odczytu pliku z wiadomo¶ci± aktywacyjn±');

    $pattern = array('<<login>>', '<<pass>>', '<<server_address>>',
        '<<forum_address>>', '<<confirm_link>>', '<<cancel_link>>');
    $data = array($login, $pass, $CFG->adresSerwera, "{$CFG->adresSerwera}forum",
        $confirm_link, $cancel_link);
    $message = str_replace($pattern, $data, $message);

    $mailer->FromName = 'Knight of Darkness';
    $mailer->AddAddress($email);
    $mailer->Subject = 'Rejestracja';
    $mailer->Body    = $message;
    if(!@$mailer->Send()){
        $mailer->ClearAllRecipients();

        // próba wys³ania sendmail'em
        $ok = mail($email, 'Rejestracja', $message, "From: Knight of Darkness\r\n");
        return $ok;
    }
    $mailer->ClearAllRecipients();
    return true;
}


//---------------------------------------------------- register_restore_pass ---
// Generuje nowe haslo dla podanego adresu e-mail
function register_restore_pass($email){
    global $mailer;
    global $CFG;

    if(!preg_match("/^[^@]+@([a-z0-9_-]+\.)+[a-z]{2,4}$/i", $email)){
        // Niepoprawny adres e-mail
        return 1;
    }

    $query = "SELECT login FROM PROFIL WHERE mail='$email'";
    if($result = @mysql_query($query)){
        if(mysql_num_rows($result) == 1){
            $pattern = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
            $max = strlen($pattern)-1;
            do{
                $pass .= $pattern{rand(0, $max)};
            }while(strlen($pass) < 8);
            $login = mysql_result($result, 0, 'login');

            $message = file_get_contents('data.register.restorepass.txt');
            if(!$message) die('B³±d serwera - nie otwarto pliku wiadomo¶ci!');

            $search = array('<<login>>', '<<pass>>', '<<server_addr>>');
            $data = array($login, $pass, $CFG->adresSerwera);
            $message = str_replace($search, $data, $message);

            $mailer->FromName = 'Knight of Darkness';
            $mailer->AddAddress($email);
            $mailer->Subject = 'Nowa pieczêæ';
            $mailer->Body    = $message;
            $ok = true;
            if(!$ok = @$mailer->Send()){
                $mailer->ClearAllRecipients();
                //print $mailer->ErrorInfo;
                $ok = mail($email, 'KoD - Pieczêæ', $message);
                if(!$ok) die('B³±d wysy³ania wiadomo¶ci! B£¡D SERWERA!');

            }
            $mailer->ClearAllRecipients();

            if($ok){
                $query = "UPDATE PROFIL SET haslo='". md5($pass) ."' WHERE login='$login'";
                if(!mysql_query($query)){
                    return 2;
                }
            }
            return 4;
        }else{
            // Adres e-mail nie istnieje w bazie danych
            return 3;
        }
    }else{
        // B³ad zapytania do bazy danych
        return 2;
    }
}
?>
