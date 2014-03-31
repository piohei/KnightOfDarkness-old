<?PHP
require_once('../const.php');
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../lib/class.User.php');
require_once('../mysql.connection.php');
require_once('class.Zalogowani.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
// autoryzacja uzytkownika na podstawie identyfikatora sesji
$kingdom = new User(NULL);
if(!$kingdom->auth_sid()) exit(0); // dodatkowo dla bezpieczeñstwa
$login = $kingdom->getName(); // dla kompatybilno¶ci wstecz

$infoOKsiestwie=infoOksiestwie($login);


otworz_polaczenie();
$zalogowani = Zalogowani::getListaZalogowanych();
zamknij_polaczenie();

$smarty->assign('zalogowani',$zalogowani);
$smarty->assign('blad',$zalogowani['blad']);
$smarty->assign('tytul',$infoOKsiestwie["nazwa"]);
$smarty->assign('kingdomInfo',$infoOKsiestwie);
$smarty->assign('main_panel','listaZalogowanych.tpl');	
$smarty->display('main.tpl');
?>

