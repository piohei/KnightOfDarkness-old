<?php
require_once('common.php');
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");
require_once($CFG->katalogStrony."login/lib.php");
require_once($CFG->katalogStrony."panel/includes/class.LogowaniaLog.php");

$login = czyZalogowany();
$przelogujNa = mysql_real_escape_string($_GET['login']);
$kogoZastepujesz = Zastepstwa::getZastepstwa($login,$przelogujNa);
$ktoCiebieZastepuje = Zastepstwa::getZastepstwa($przelogujNa,$login);
//die("$przelogujNa $login".count($ktoCiebieZastepuje).' '.count($kogoZastepujesz));
if (count($kogoZastepujesz) > 0 || count($ktoCiebieZastepuje) > 0){
	wyloguj();
	zaloguj($przelogujNa);
	$_SESSION = array();
	$smarty->assign('message_text', "<center>Za chwilê zostaniesz przelogowany na konto: <br><b>$przelogujNa</b></center>");
	$smarty->assign('refresh_time', 2 );
	$smarty->assign('refresh_href', "URL=" . $CFG->adresSerwera."zalogowany.php");
	$smarty->display('page_message.tpl');
} else {
	wyloguj();
	if(!empty($_COOKIE['AUTH'])){
		$auth_cookie = decode_data($_COOKIE['AUTH'], COOKIE_ENCODE_KEY);
		$user_data = explode('&', $auth_cookie);
	}
	LogowaniaLog::addLogowanieBLAD_PRZELOGOWANIA($PHPSESSID,$login,$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1]);
	$smarty->assign('message_text', "<center>Twoje zastêpstow zosta³o zakoñczone.</center>");
	$smarty->assign('refresh_time', 2 );
	$smarty->assign('refresh_href', "URL=" . $CFG->adresSerwera);
	$smarty->display('page_message.tpl');
}


?>