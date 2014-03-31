<?php
require_once("../config.php");
require_once($CFG->katalogStrony."common.php");
require_once("class.Ksiestwo.php");
require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');
 
$login = czyZalogowany();
$info=infoOksiestwie($login);
$ksiestwo = new Ksiestwo($info);
//$smarty->debugging=true;
$czyPotrzebujeOdswiezycInfo=false;
 
$smarty->assign('tower',$ksiestwo->getTowers());
$smarty->assign('castle',$ksiestwo->getCastle());
$smarty->assign('bonus',$ksiestwo->getBonus());

$smarty->assign('kingdomInfo',$info);
$smarty->assign( 'profil', ustawieniaOsobiste() );
$smarty->assign('tytul','Info o Ksiêstwie');
$smarty->assign('main_panel','ksiestwo.tpl');
	// sprawdzenie czy s¹ nowe wiadomoœci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
$smarty->display('main.tpl');

?>