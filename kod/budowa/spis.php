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
  
  $panel_elements['Fachowcy']="hide";
  $panel_elements['Budynki']="hide";
  $panel_elements['Militarne']="hide";
  $panel_elements['Armia']="hide";
  $panel_elements['Magazyn']="hide";
  $smarty->assign('panel_elements', $panel_elements);
  
  $smarty->assign('tytul',"Spis budynków specjalnych");
	$smarty->assign('kingdomInfo',$info);
  $smarty->assign( 'turns_counter', 'OFF' ); 

  if(isset($_GET['strona']))
	$strona = $_GET['strona'];
  else
	$strona = 0;
  if($strona < 0)
        $strona =0;

  $smarty->assign('budynki',spisSpecjalnych($strona));
	$smarty->assign('main_panel','spis_specjalnych.tpl');
	$smarty->assign('page',$strona);
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
