<?PHP
require_once("../config.php");
require_once("../funkcjeBazy.php");
require_once('funkcje_kupno_ziemi.php');
require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

otworz_polaczenie();
$login = czyZalogowany();
$info=infoOksiestwie($login);

$smarty->assign( 'kingdomInfo',$info);
$smarty->assign('main_panel','kupno_ziemi.tpl');
if($_POST["ile"]!=""){
	settype($_POST["ile"], "integer");
	if($_POST["ile"]<=0){
		$smarty->assign('wynik',"Wprowadz liczbe dodatnia");
	}else{
		if(false && $_POST["ile"]>100){
			$smarty->assign('wynik',"Mo¿esz kupiæ max 100 ziemi za jednym razem");
		}else{
			$kosztKupna=kupZiemie($login,$info["zloto"],$info["ziemia"],$_POST["ile"]);
			$smarty->assign('wynik',$kosztKupna);
		}
		$info=infoOksiestwie($login);
	}
}
$ileKupiszZiemi = ileKupiszZiemi($info['zloto'],$info['ziemia']);
global $CFG;
$smarty->assign('wspolczynnikKUPZIEME',$CFG->wspolczynnikKUPZIEME);
$smarty->assign('max',$ileKupiszZiemi);
$smarty->assign('kosztKupnaMax',kosztKupna($info['ziemia'],$ileKupiszZiemi));
$smarty->assign('submenu','targ_menu.tpl');
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
