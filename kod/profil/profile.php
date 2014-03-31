<?php
ob_start();
require_once('../config.php');
require_once('../const.php');
require_once("{$CFG->dir_lib}class.User.php");
require_once('../funkcjeBazy.php');
require_once('funkcje_profil.php');
require_once('funkcje_profil.php');
require_once("../upload/class.FileManager.php");
require_once("../common.php");
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

otworz_polaczenie();
$login = czyZalogowany();
$kingdom_info = infoOksiestwie($login);
$is_admin = czyAdmin();
$_mesg = array('err' => NULL, 'info'  => NULL);
$kingdom = new User($login);
$fm = new FileManager($login);
$smarty->assign('ile_obrazkow',count($fm->get_files()));
// pobieranie danych profilu uzytkownika
wyciag_dane($profile_data);


// podstawowa zmiana danych nie wymagaj±ca potwierdzenia has³em
if(isset($_POST['basic_modify'])){
	// sprawdzanie poprawno¶æi danych
	$data = $_POST['data'];
	if(strlen($data['name']) > 20){
		$_mesg['err'][] = 'Imiê mo¿e sk³adaæ siê z 20 znaków';
	}
	if(strlen($data['surname']) > 20){
		$_mesg['err'][] = 'Nazwisko mo¿e sk³adaæ siê z 20 znaków';
	}
	if(strlen($data['city']) > 20){
		$_mesg['err'][] = 'Nazwa miasta nie mo¿e byæ d³u¿sza ni¿ 20 znaków';
	}
	if(strlen($data['country']) > 20){
		$_mesg['err'][] = 'Nazwa karaju nie moe¿e byæ d³u¿sza ni¿ 20 znaków';
	}
	if(!preg_match('/^\d{4}-\d{2}-\d{2}$/i', $data['birthday'])){
		$_mesg['err'][] = 'Wymagany format daty to YYYY-MM-DD';
	}else{
		list($b_year) = explode('-', $data['birthday']);
		$c_year = date('Y');
		if($b_year{0} == '0'){
			$_mesg['err'][] = 'Niepoprawna data';
		}else{
			settype($c_year, 'integer');
			settype($b_year, 'integer');
			if($b_year > $c_year || $b_year < 1905){
				$_mesg['err'][] = 'Niepoprawna data';
			}
		}
	}

	// zapisanie danych
	if(is_null($_mesg['err'])){
		if(save_basic_data($data)){
			$profile_data['imie'] = $data['name'];
			$profile_data['nazwisko'] = $data['surname'];
			$profile_data['miasto'] = $data['city'];
			$profile_data['kraj'] = $data['country'];
			$profile_data['wiek'] = $data['birthday'];
			$profile_data['ujawnic'] = ($data['visible'] == 'on')? 'true' : 'false';
			$profile_data['pomoc'] = ($data['help'] == 'on')? 'true' : 'false';
			$_mesg['info'] = 'Dane zosta³y zapisane';
		}
	}
}


// zmiana danych wymagaj±ca potwierdzenia has³em
if(isset($_POST['advance_modify'])){
	if($_POST['del_account'] == 'on'){
		// usuwanie konta
		if($profile_data['haslo'] == md5($_POST['pass'])){
			$kingdom->remove();
			session_destroy();
			global $CFG;
			header("Location: $CFG->adresSerwera");
			exit(0);
		}else{
			$_mesg['err'][] = 'Podane aktualne has³o jest niepoprawne';
		}
	}else{
		// sprawdzanie poprawnosci danych
		$data = $_POST['data'];

		//dezaktywacja mo¿liwo¶ci zmiany adresy e-mail
		$data['email']='';
		if(!empty($data['email']) && !preg_match('/^[^@]+@([a-z0-9_-]+\.)+[a-z]{2,4}$/i', $data['email'])){
			$_mesg['err'][] = 'Niepoprawny adres e-mail';
		}
		if(!empty($data['pass']) && !preg_match('/^[a-z0-9_]{5,20}$/i', $data['pass'])){
			$_mesg['err'][] = 'Has³o powinno sk³daæ siê z 5-20 znaków alfanumerycznych w³±czj±c znak _';
		}

		// zapisanie danych
		if(is_null($_mesg['err']) && (!empty($data['email']) || !empty($data['pass']))){
			if($profile_data['haslo'] == md5($_POST['pass'])){
				if(!empty($data['pass'])){
					if(zmienHaslo($data['pass'])){
						$_mesg['info'][] = 'Has³o zosta³o zmienione';
					}else{
						$_mesg['err'][] = 'Has³o nie zosta³o zmienione (b³±d serwera)';
					}
				}
				if(!empty($data['email'])){
					if(zmienMaila($data['email'])){
						$_mesg['info'][] = 'Na podany adres e-mail wys³ano wiadomo¶æ potwierdzaj±c±';
					}else{
						$_mesg['err'][] = 'Podany adres e-mail jest zarejestrowany w systemie';
					}
				}
			}else{
				$_mesg['err'] = 'Podane aktualne has³o jest niepoprawne';
			}
		}
	}
}
if(isset($_POST['addZastepstwo'])){
	$data = $_POST['data'];
	if(! ($profile_data['haslo'] == md5($_POST['pass']))){
		$_mesg['err'][] = 'Podane aktualne has³o jest niepoprawne';
	}else{
		$ok = Zastepstwa::addZastepstwo($_mesg['err'],$data['kto_zastepuje'],$login,$data[od_kiedy_zastepuje],$data[do_kiedy_zastepuje]);
		if ($ok){
			$_mesg['info'][] = "Zastepstwo zosta³o dodane.";
			$data = array();
		} else {

		}
	}
	$smarty->assign('data',  $data);
}

if(isset($_GET['zakonczZastepstwo'])){
	$idZastepstwa = $_GET['zakonczZastepstwo'];
	$ok = Zastepstwa::zakonczZastepstwo($_mesg['err'],$idZastepstwa,$login);
	if ($ok){
		global $CFG;
		$niezalogowanyMessage = '<center>';
		$niezalogowanyMessage .= "Zastepstwo zosta³o zakoñczone, zosta³e¶ wylogowany.</center>";
		include($CFG->katalogStrony."login/niezalogowany.php");
		wyloguj();
		exit(0);
	}
}


$zastep = array_merge(Zastepstwa::getZastepstwa(NULL,$login,false),Zastepstwa::getZastepstwa($login,NULL,false));
$smarty->assign('kingdomInfo',  $kingdom_info);
$smarty->assign('profile_data', $profile_data);
$smarty->assign('_mesg',        $_mesg);
$smarty->assign('zastepstwo',   Zastepstwa::getZastepstwa(NULL,$login));
$smarty->assign('zastepstwa',   $zastep);
$smarty->assign('zastepstwa_count',  count($zastep));
$smarty->assign('main_panel',   'profile.tpl');

	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
$smarty->display('main.tpl');
ob_end_flush();
?>
