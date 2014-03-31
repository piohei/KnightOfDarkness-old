<?php

require_once('../config.php');
require_once($CFG->katalogStrony."config.mailer.php");

exit;

//$wynik=mysql_query($SQL,$polaczenie);
function powiadomONowejErze($trescStartu){
	global $mailer;
	global $CFG;

	$SQL = "select login, mail from ".TBL_PROFILE." ";
	$ret = mysql_query($SQL) or $blad=mysql_errno()." ".mysql_error()."<br>".$SQL."<br>";
	if (is_null($blad)){
		$i=0;
		$message_org = file_get_contents('powiadomONowejErze.txt');
		if(!$message_org) die('B³±d odczytu pliku z wiadomo¶ci± powiadomienia');

		while($row=mysql_fetch_array($ret)){
			$login = $row['login'];
			$email = $row['mail'];
			if (true || strcmp($email,'krzonca@gmail.com')==0){
				$message = $message_org;
				$pattern = array('<<login>>','<<server_address>>','<<opis_dnia_startu_ery>>');
				$data = array($login, $CFG->adresSerwera,$trescStartu);
				$message = str_replace($pattern, $data, $message);

				$mailer->FromName = 'Knight of Darkness';
				$mailer->AddAddress($email);
				$mailer->Subject = 'KoD - start nowej ery';
				$mailer->Body    = $message;
				if(!@$mailer->Send()){
					$mailer->ClearAllRecipients();
					// próba wys³ania sendmail'em
					$ok = mail($email, 'KoD - start nowej ery', $message, "From: Knight of Darkness\r\n");
				}
				$mailer->ClearAllRecipients();
				$i++;
				echo $i." powiadomienie wyslane do $login -> $email <br>";
				if ($i%2 == 0){
					sleep(1);
				}
			}
		}
	}


}

powiadomONowejErze("w poniedzialek 2-go marca 2009 okolo godziny 20 (a do tego czasu era specjalna)");

?>