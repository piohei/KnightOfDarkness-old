<?php
require_once("common.php");
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");
require_once('mysql.connection.php');
require_once('lib/class.User.php');
require_once('messages/class.MessageBox.php');
require_once('pdoInterface.php');

$login = czyZalogowany(); 

$infoOKsiestwie=infoOksiestwie($login);


$zastepstwa = Zastepstwa::getZastepstwa(NULL,NULL,false);

$smarty->assign('kingdomInfo',$infoOKsiestwie);
$smarty->assign('zastepstwa',   $zastepstwa );
$smarty->assign('zastepstwa_count',  count($zastepstwa ));
$smarty->assign('main_panel',   'zastepstwa.tpl');

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