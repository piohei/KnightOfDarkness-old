<?PHP
	require_once("../config.php");
	require_once("../funkcjeBazy.php");
	require_once("lib.php");
	require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

	otworz_polaczenie();
	$login = czyZalogowany();
	$info=infoOksiestwie($login);
	$budynekKoncowy= new budynekKoncowy();
	$smarty->assign('kingdomInfo',$info);
	$smarty->assign('tytul',"Budynki koñcz±ce gre");
	//print_r(listaBudynkowKoncowych());
	$smarty->assign('parametry',$budynekKoncowy);
	$smarty->assign('budynki',$budynekKoncowy->listaBudynkowKoncowych());
  $smarty->assign('main_panel','budynek_koncowy/spisbudynkow.tpl');
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
