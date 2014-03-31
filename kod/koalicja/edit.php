<?PHP
require_once("../config.php");
require_once($CFG->katalogStrony."common.php");
require_once("../funkcjeBazy.php");
require_once('../const.php');
require_once('class.Coalition.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

global $CFG;
otworz_polaczenie();
$login = czyZalogowany();
$kingdomInfo=infoOksiestwie($login);

$limit = $CFG->limit_opisu_koalicji;
$coalition = new Coalition($login);
$emperor = $coalition->getEmperor();

$allowed_tags="<b><span><center><hr><a>";
if($emperor!=$login){
	print "Tylko cesarz ma dostêp do tej strony!"; exit;
}
//zmiana opisu
if(isset($_POST['description'])){
	$_POST['description']=str_replace("\r\n", "\n", $_POST['description']);
	$_POST['description']=str_replace("\r", "\n", $_POST['description']);
	$_POST['description']=str_replace("\\","",$_POST['description']);

	$text_lenght = strlen($_POST['description']);

	$_POST['description']=strip_tags($_POST['description'],$allowed_tags);
	$smarty->assign('description',$_POST['description']);
	$smarty->assign('lenght',$text_lenght);
	if($text_lenght>$limit){
		$smarty->assign('error',"Za d³ugi tekst !!");
	}else{
		$coalition->updateDescription($_POST['description']);
		$smarty->assign('message',"Zmieniono opis");
	}
}else{
	$smarty->assign('description',$coalition->getDescription());
	$smarty->assign('lenght',strlen($coalition->getDescription()));
}
$smarty->assign('maxLenght',$limit);
$smarty->assign('kingdomInfo',$kingdomInfo );
$smarty->assign('main_panel',"edit.tpl");

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
