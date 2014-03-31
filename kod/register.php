<?php
session_start();


require_once('config.php');
require_once('const.php');
require_once('config.mailer.php');
require_once('parametry.php');
require_once('mysql.connection.php');
require_once('function.register.php');
require_once('lib/class.User.php');

switch($_GET['mode']){
	case 's':
		$mailer->FromName = 'Knight of Darkness';
		$mailer->AddAddress('bogwiedz@91.203.132.215');
		$mailer->Subject = 'Rejestracja';
		$mailer->Body    = "testowanie";
		if(!@$mailer->Send()){
			$mesg[] = "!mailer->Send() zwr�ci� false ". $mailer->ErrorInfo;
			$mailer->ClearAllRecipients();

			// pr�ba wys�ania sendmail'em
			$ok = mail('krzysztof.dziurda@gmail.com', '2_Rejestracja', 'testowanie', 'From: Knight of Darkness');
			$mesg[] = "wykomuje komende: mail('krzysztof.dziurda@gmail.com', 'Rejestracja', 'testowanie', 'From: Knight of Darkness');";
			$mesg[] = " zwrocila '".$ok."'";
		} else {
			$mesg[] = " mail wys�any poprawnie";
		}
		$mailer->ClearAllRecipients();
		break;
	case 'newuser':
	  
		if(!register($_POST['login'], $_POST['pass'], $_POST['email'], $_POST['code'], $err_mesg)){
			$mesg = $err_mesg;
			
		}else{
		      //    			register_activate( $_POST['login'], md5("{$_POST['login']}a") );
			$kingdom = new User($_POST['login']);
			$kingdom->setProperty(USERPROPERTY_VERIFIED);
			$mesg[] = "Rejestracja Twojego kr�lestwa przebieg�a pomy�lnie.<br>";
			$mesg[] = "Na podany adres e-mail zosta�a wys�ana wiadomo��, kt�ra aktywuje".
            " Twoje kr�lestwo. Prosimy nie zwleka� z aktywacj� gdy� co pewnien czas".
            " nieaktywne kr�lestwa s� usuwane.<br>";
			$mesg[] = "Dzi�kujemy za rejestracj� i �yczymy przyjemnej gry!";

		}
		break;

	case 'activateuser':
		$result = register_activate($_GET['login'], $_GET['key']);
		switch($result){
			case 1:
				$mesg[] = "Aktywacja Twojego kr�lestwa nie powiod�a si�.";
				$mesg[] = "Prawdopodobnie za d�ugo zwleka�e�. Spr�buj zarejestrowa� si� ponownie.";
				break;

			case 2:
				$kingdom = new User($_GET['login']);
				$kingdom->setProperty(USERPROPERTY_VERIFIED);
				$mesg[] = "Aktywacja zako�czy�a si� powodzeniem.";
//				require_once("{$CFG->katalogStrony}koalicja/class.Coalition.php");
//				require_once("{$CFG->katalogStrony}parametry.php");
//				$coalition = new Coalition('Akademia_Wojskowa',true);
//				if($coalition->addMember($kingdom->getName())){
//					$mesg[] = "<br>Poniewa� Twoje ksi�stwo jest nowe i bezbronne zosta�e� przyj�ty w szeregi <b>Akademii_Wojskowej</b> kt�ra na pocz�tku zadba o Twoje bezpiecze�stwo i pomo�e w zapoznaniu si� z z�owrogim �wiatem KoDa.";
//					$mesg[] = "<br>Powodzenia.";
//				}
				$mesg[] = "<br>Przejd� do strony logowania aby rozpocz�� gr�!";
				break;

			case 3:
				$mesg[] = "Aktywacja kr�lestwa nie powiod�a si�.";
				$mesg[] = "System wykry� jakie� nieprawid�owo�ci... oszukujesz?";
				break;

			case 4:
				$mesg[] = "Twoje konto jest ju� aktywne.";
				$mesg[] = "Przejd� do strony logowania aby rozpocz�� gr�!";
				break;

			default:
				$mesg[] = "Wyst�pi�y b��dy podczas aktywacji.";
				$mesg[] = "Spr�buj zarejestrowa� si� ponownie.";
		}
		break;

			case 'removeuser':
				if(register_remove($_GET['login'], $_GET['key'])){
					$mesg[] = "Twoje kr�lestwo i wszystkie dane zosta�y usuni�te.";
				}else{
					$mesg[] = "Usuwanie Twoich danych nie powiod�o si�.";
					$mesg[] = "Prawdopodobnie ju� wcze�niej zosta�y usuni�te lub je�li masz aktywne konto to mo�na je usun�� dopiero po zalogowaniu.";
				}
				break;
			case 'restorepass':
				switch(register_restore_pass($_POST['email'])){
					case 1:
						$mesg[] = "Poda�e� niepoprawny adres e-mail.";
						break;
					case 2:
						$mesg[] = "B��d po stronie serwera!";
						break;
					case 3:
						$mesg[] = "Na ten adres e-mail nie ma zarejestrowanego kr�lestwa!";
						break;
					case 4:
						$mesg[] = "Na podany adres e-mail zosta�a wys�ana nowa piecz��.";
						$mesg[] = "W wys�anej wiadomo�ci znajduj� si� r�wnie� dalsze instrukcje post�powania.";
						break;
				}
				break;

					default:
						header('Location: 404.shtml');
						exit(0);
}



$smarty->assign('messagebox', $mesg);
$smarty->assign('body', 'index.register.tpl');
$smarty->display("index.body.tpl");
?>
