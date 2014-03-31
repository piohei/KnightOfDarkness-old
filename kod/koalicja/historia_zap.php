<?PHP
require_once('../const.php');
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('funkcje_koalicja.php');
require_once('../param.constraint.php');
require_once('../messages/class.MessageBox.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../pdoInterface.php');

otworz_polaczenie();
$login = czyZalogowany();
$info=infoOksiestwie($login);


if($_GET['action'] == 'delete'){

	// usuwanie
	if(isset($_GET['id']) && settype($_GET['id'], 'integer')){

		// usuwanie wiadomosci o konkretnym id
		usunZapr(-1,$login,$_GET['id']);
	}
}
 
if ($_POST["tab"][2]=="on"){
	usunZapr(2,$login);
}
if ($_POST["tab"][1]=="on"){
	usunZapr(0,$login);
}
if ($_POST["tab"][0]=="on"){
	usunZapr(1,$login);
}
if ($_POST["tab"][3]=="on"){
	usunZapr(3,$login);
}


$zapytanie="select koalicja from KSIESTWA where nazwa='".$login."';";
$wynik = mysql_query($zapytanie,$polaczenie);
$wiersz = mysql_fetch_array($wynik);

$zapytanie="select czlonek_1 from KOALICJA where nazwa='".$wiersz["koalicja"]."';";
$wynik = mysql_query($zapytanie,$polaczenie);
$wiersz2 = mysql_fetch_array($wynik);

if ($wiersz2["czlonek_1"]==$login) $prawo_zmiany=1;
else $prawo_zmiany=0;


$smarty->assign('kingdomInfo',$info);
$smarty->assign('spisZaproszen',spisZaproszen($login,$prawo_zmiany));
$smarty->assign('prawo_zmiany',$prawo_zmiany);
$smarty->assign('nazwa_koalicji',$_GET["koal"]);
$smarty->assign('main_panel','historia_zap.tpl');
$smarty->assign('tytul',"Historia zaproszeñ");

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

