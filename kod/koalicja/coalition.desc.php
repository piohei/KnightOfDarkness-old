<?php
require_once('../config.php');
require_once('../const.php');
require_once('../funkcjeBazy.php');
require_once('class.Coalition.php');
require_once('../mysql.connection.php');
require_once("../lib/class.User.php");
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');


$login = czyZalogowany();
$info = infoOksiestwie($login);

// tablica informacji dla u¿ytkownika (pocz±tkowo zainicjalizowana na NULL)
$_mesg = NULL;


if(empty($_GET['coal'])){
    header('Location: '. $CFG->adresServera . '404.shtml');
    exit;
}


$coalition = new Coalition($_GET['coal'], true);
$members = $coalition->getMemberList('PUBLIC_LIST');
$emperor = $coalition->getEmperor();
$description = $coalition->getDescription();
$description=str_replace("\n","<br>",$description);
//jezeli cesarz ma wykupiony pakiet rozszezen
require_once("../upload/class.FileManager.php");
$fm = new FileManager($emperor);
$fm->insert_images($description);
$name = $coalition->getName();


if(empty($name)){
    $_mesg[] = 'Koalicja nie istnieje.';
}

$smarty->assign('history',$coalition->getHistory());
$smarty->assign('kingdomInfo', $info);
$smarty->assign('members', $members);
$smarty->assign('emperor', $emperor);
$smarty->assign('description', $description);
$smarty->assign('coalition', $name);
$smarty->assign('mesg', $_mesg);
$smarty->assign('main_panel', 'coalition.desc.tpl');
	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
$smarty->display('main.tpl');
?>
