<?PHP
  require_once("../config.php");
	require_once("../funkcjeBazy.php");
	require_once("funkcje_ranking.php");
	require_once("../pdoInterface.php");
	require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
	
	otworz_polaczenie();
	$login = czyZalogowany();
	$info=infoOksiestwie($login);
	
	
	$smarty->assign('kingdomInfo',$info);
	if(!isset($_GET["tryb"])) $_GET["tryb"]="armia";
	$smarty->assign('spisKsiestw',ranking($_GET["tryb"]));
	$smarty->assign('tytul',"Ranking (".$_GET["tryb"].")");
	if($_GET['tryb'] == 'koalicja_gospodarka' || $_GET['tryb'] == 'koalicja_ziemia' || $_GET['tryb'] == 'koalicja_armia'){
        $smarty->assign('mode', 'coalition');
    }
    $smarty->assign('tryb', $_GET['tryb']);
    
    $panel_elements['Budynki']="hide";
    $panel_elements['Militarne']="hide";
    $panel_elements['Magazyn']="hide";
    $smarty->assign('panel_elements', $panel_elements);
    
	$smarty->assign('main_panel','ranking.tpl');
		// sprawdzenie czy s¹ nowe wiadomoœci
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
