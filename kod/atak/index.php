<?php
require_once("../config.php");
require_once("../funkcjeBazy.php");
require_once("../const.php");
require_once("Attacks.class.php");
require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

otworz_polaczenie();

define('ATTACK_INPROGRESS',    1);
define('ATTACK_PLANNING',      2);
define('ATTACK_KOALICYJNY_DETAIL',      3);

//pobieranie informacji z bazy -----------------------------------------------
$login = czyZalogowany();
$info=infoOksiestwie($login);
$profil = ustawieniaOsobiste();
$attacks = new Attacks($info);
 
// ustawianie domy¶lnej zak³adki
if($_GET['mode'] < 1 || $_GET['mode'] > 3){
	$mode = ATTACK_PLANNING;
}else{
	$mode = $_GET['mode'];
}


// obs³uga poszczególnych zak³adek
if($mode == ATTACK_PLANNING){
	$smarty->assign('attack_tab', 'atak/index.tpl');
	$smarty->assign('TEKST', 'Zak³adka do wysy³ania ataków');
}elseif($mode == ATTACK_INPROGRESS){
	// usuwanie ataku
	if(isset($_GET['id'])){
		$attacks->delete_attak($_GET['id'],NULL,true);
		$smarty->assign('TEKST', 'Wycofano wojska <br><font color=red>Morale spad³o o 40</font>');
	}else{
		$smarty->assign('TEKST', 'ataki w trakcie');
	}
	$smarty->assign('attack_tab', 'atak/lista.tpl');
	$smarty->assign( 'attacks_list',$attacks->get_attacks() );
}elseif($mode == ATTACK_KOALICYJNY_DETAIL){
	$user = new User($login);
	if (isset($_GET['id'])){
		$id = intval($_GET['id']);
		$attack = $attacks->get_attack($id);
		if ($user->getName() == $attack['kto']){
			if ($user->isEmperor()){
				$smarty->assign('TEKST', 'Szczegó³y ataku koalicyjnego na ksiêstwo '.$attack['kogo']);
				$smarty->assign('attack_tab', 'atak/lista.tpl');
				$smarty->assign( 'attacks_list',$attacks->get_attacks(true,false,true));
			} else {
				$smarty->assign('attack_tab', 'atak/lista.tpl');
				$smarty->assign('TEKST', 'Tylko cesarze mog± ogl±daæ szczegó³y ataków koalicyjnych');
			}
		} else {
			$smarty->assign('attack_tab', 'atak/lista.tpl');
			$smarty->assign('TEKST', 'Nie próbuj oszukiwaæ');
		}
	} else {
		$smarty->assign('attack_tab', 'atak/lista.tpl');
		$smarty->assign('TEKST', 'Nie próbuj oszukiwaæ');
	}
}

// Ukrywanie czêsci elemetów lewego panelu -----------------------------------
$panel_elements['Fachowcy']="hide";
$panel_elements['Budynki']="hide";
$panel_elements['Militarne']="hide";
//$panel_elements['Magazyn']="hide";
$smarty->assign('panel_elements', $panel_elements);




if(isset($_GET['target'])){
	$tmp['type'] = $_GET['type'];
	$tmp['kogo'] = $_GET['target'];
	$smarty->assign('attack',$tmp);
}

// nowy atak
if(isset($_POST['attack'])){
	$wynik = $attacks->new_attack($_POST['attack']);
	$smarty->assign('attack',$_POST['attack']);
	if(isset($wynik->error)){
		$smarty->assign('error',$wynik->error);
			
	}else{
		$smarty->assign('attack',$wynik->data);
		$smarty->assign('info',"Wys³ano atak");
	}
}

// odswie¿enie danych po wys³aniu ataku
$info=infoOksiestwie($login);

// definicje zak³adek


// generowanie i wyswietlanie strony -----------------------------------------

$smarty->assign('tour_to_attack', $attacks->getTourAfterBonus());
$smarty->assign( 'profil',$profil );
$smarty->assign( 'plikPomocy',"pomoc/atak.tpl");
$smarty->assign('kingdomInfo',$info);
$smarty->assign('tytul',"Atakuj");
$smarty->assign('kogo_atakujesz',$_GET["kogo_atakujesz"]);
$smarty->assign('mode', $mode);
$smarty->assign('main_panel','attack.tpl');
	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
$smarty->display('main.tpl');

zamknij_polaczenie();
?>
