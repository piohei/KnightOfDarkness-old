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
			$mesg[] = "!mailer->Send() zwróci³ false ". $mailer->ErrorInfo;
			$mailer->ClearAllRecipients();

			// próba wys³ania sendmail'em
			$ok = mail('krzysztof.dziurda@gmail.com', '2_Rejestracja', 'testowanie', 'From: Knight of Darkness');
			$mesg[] = "wykomuje komende: mail('krzysztof.dziurda@gmail.com', 'Rejestracja', 'testowanie', 'From: Knight of Darkness');";
			$mesg[] = " zwrocila '".$ok."'";
		} else {
			$mesg[] = " mail wys³any poprawnie";
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
			$mesg[] = "Rejestracja Twojego królestwa przebieg³a pomy¶lnie.<br>";
			$mesg[] = "Na podany adres e-mail zosta³a wys³ana wiadomo¶æ, która aktywuje".
            " Twoje królestwo. Prosimy nie zwlekaæ z aktywacj± gdy¿ co pewnien czas".
            " nieaktywne królestwa s± usuwane.<br>";
			$mesg[] = "Dziêkujemy za rejestracjê i ¿yczymy przyjemnej gry!";

		}
		break;

	case 'activateuser':
		$result = register_activate($_GET['login'], $_GET['key']);
		switch($result){
			case 1:
				$mesg[] = "Aktywacja Twojego królestwa nie powiod³a siê.";
				$mesg[] = "Prawdopodobnie za d³ugo zwleka³e¶. Spróbuj zarejestrowaæ siê ponownie.";
				break;

			case 2:
				$kingdom = new User($_GET['login']);
				$kingdom->setProperty(USERPROPERTY_VERIFIED);
				$mesg[] = "Aktywacja zakoñczy³a siê powodzeniem.";
//				require_once("{$CFG->katalogStrony}koalicja/class.Coalition.php");
//				require_once("{$CFG->katalogStrony}parametry.php");
//				$coalition = new Coalition('Akademia_Wojskowa',true);
//				if($coalition->addMember($kingdom->getName())){
//					$mesg[] = "<br>Poniewa¿ Twoje ksiêstwo jest nowe i bezbronne zosta³e¶ przyjêty w szeregi <b>Akademii_Wojskowej</b> która na pocz±tku zadba o Twoje bezpieczeñstwo i pomo¿e w zapoznaniu siê z z³owrogim ¶wiatem KoDa.";
//					$mesg[] = "<br>Powodzenia.";
//				}
				$mesg[] = "<br>Przejd¼ do strony logowania aby rozpocz±æ grê!";
				break;

			case 3:
				$mesg[] = "Aktywacja królestwa nie powiod³a siê.";
				$mesg[] = "System wykry³ jakie¶ nieprawid³owo¶ci... oszukujesz?";
				break;

			case 4:
				$mesg[] = "Twoje konto jest ju¿ aktywne.";
				$mesg[] = "Przejd¼ do strony logowania aby rozpocz±æ grê!";
				break;

			default:
				$mesg[] = "Wyst±pi³y b³êdy podczas aktywacji.";
				$mesg[] = "Spróbuj zarejestrowaæ siê ponownie.";
		}
		break;

			case 'removeuser':
				if(register_remove($_GET['login'], $_GET['key'])){
					$mesg[] = "Twoje królestwo i wszystkie dane zosta³y usuniête.";
				}else{
					$mesg[] = "Usuwanie Twoich danych nie powiod³o siê.";
					$mesg[] = "Prawdopodobnie ju¿ wcze¶niej zosta³y usuniête lub je¶li masz aktywne konto to mo¿na je usun±æ dopiero po zalogowaniu.";
				}
				break;
			case 'restorepass':
				switch(register_restore_pass($_POST['email'])){
					case 1:
						$mesg[] = "Poda³e¶ niepoprawny adres e-mail.";
						break;
					case 2:
						$mesg[] = "B³±d po stronie serwera!";
						break;
					case 3:
						$mesg[] = "Na ten adres e-mail nie ma zarejestrowanego królestwa!";
						break;
					case 4:
						$mesg[] = "Na podany adres e-mail zosta³a wys³ana nowa pieczêæ.";
						$mesg[] = "W wys³anej wiadomo¶ci znajduj± siê równie¿ dalsze instrukcje postêpowania.";
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
