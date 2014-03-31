<?php

require_once('const.php');
require_once('config.php');
require_once('funkcjeBazy.php');
require_once('pdoInterface.php');
require_once('sondy/funkcje_sonda.php');
require_once('lib/class.User.php');
require_once('messages/class.MessageBox.php');
require_once('mysql.connection.php');
require_once('atak/History.class.php');
require_once($CFG->katalogStrony.'panel/includes/class.AdminMessages.php');
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");
require_once($CFG->katalogStrony."lib/class.ChangeLog.php");

// autoryzacja uzytkownika na podstawie identyfikatora sesji
$kingdom = new User(NULL);
if(!$kingdom->auth_sid()) exit(0); // dodatkowo dla bezpieczeñstwa
$login = $kingdom->getName(); // dla kompatybilno¶ci wstecz
if(!$login)
  exit(0);
$infoOKsiestwie=infoOksiestwie($login);

//require_once($CFG->katalogStrony.'atak/Attacks.class.php');
//$kk = infoOksiestwie("Imaica");
//$aa = new Attacks($kk);
//$aa->tour();

$smarty->assign('kingdomInfo',$infoOKsiestwie);

if (isset($_GET['changelog'])){
	$smarty->assign('tytul','Zamiany');
	$smarty->assign('main_panel','changelog.tpl');
	$smarty->assign('changes',ChangeLog::getChangeLog()->getChanges());
} else {
	
	$kogoZastepujesz = Zastepstwa::getZastepstwa($login,NULL);
	$ktoCiebieZastepuje = Zastepstwa::getZastepstwa(NULL,$login);
	$przelogujLink ='';
	if (count($kogoZastepujesz) > 0){
			$przelogujLink = '(<a href="'.$CFG->adresSerwera."przeloguj.php?login=".$kogoZastepujesz[0]['kogo'].'">';
			$przelogujLink .= 'przeloguj na '.$kogoZastepujesz[0]['kogo'].'</a>)';
	}
	if (count($ktoCiebieZastepuje) > 0){
			$przelogujLink = '(<a href="'.$CFG->adresSerwera."przeloguj.php?login=".$ktoCiebieZastepuje[0]['kto'].'">';
			$przelogujLink .= 'przeloguj na '.$ktoCiebieZastepuje[0]['kto'].'</a>)';
	}

	$smarty->assign('lastChangeDate',ChangeLog::getChangeLog()->getLastChangeDate());
	$smarty->assign('markLastChange',ChangeLog::getChangeLog()->markLastChange());
	
	$smarty->assign('bitwa_dnia',History::getMaxAttack());
	$smarty->assign('bk',History::getBiggestBK());
	$smarty->assign('ankieta',wyswietlSondeLubWynik(699));
	$smarty->assign('bon_morale',$bon_morale["bonus"]);
	$smarty->assign('mess',$mess);
	if (isset($_GET['tryb'])){
		$smarty->assign('tryb',$_GET['tryb']);
	}
	$smarty->assign('tytul',$infoOKsiestwie["nazwa"]." $przelogujLink");
	$smarty->assign('main_panel','glowna.tpl');
}
	// sprawdzenie czy s± nowe wiadomo¶ci
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	$smarty->assign('admin_messages',AdminMessages::getAdminMessages());
$smarty->display('main.tpl');
?>

