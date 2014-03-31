<?PHP
ob_start();

require_once('../const.php');
require_once("../config.php");
require_once('../lib/class.User.php');
require_once("../funkcjeBazy.php");
require_once('lib.php');
require_once($CFG->katalogStrony."panel/includes/class.LogowaniaLog.php");
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");

otworz_polaczenie();


$antyAntyMultiDlaAdminow = array (
	'bogwiedz'=>'157.25.122.85'
	,'CarlSheppards' => '172.16.49.69'
	,'Robert_J_Sullivan' => '241.23.57.89'
	,'Tinwertuth' => 'Error'
);

$blockedIp = '10.0.0.1';

if(empty($PHPSESSID)){

	include($CFG->katalogStrony."login/niezalogowany.php");
	exit(0);
}

define('COOKIE_ENCODE_KEY','XcjUyh@mmlkoi7Y');

if(!empty($_COOKIE[AUTH])){
	$auth_cookie = decode_data($_COOKIE[AUTH], COOKIE_ENCODE_KEY);
	$user_data = explode('&', $auth_cookie);
}


$result = sprawdzHasloLogin($_POST["login"], $_POST["pass"]);

$proxyIP = $_SERVER['HTTP_X_FORWARDED_FOR'];

foreach ($antyAntyMultiDlaAdminow as $adminLogin=>$changeToIP){
	if (strcmp($_POST["login"],$adminLogin)==0){
		$proxyIP = $_SERVER['REMOTE_ADDR'];		
		$_SERVER['REMOTE_ADDR'] = $changeToIP;
		session_regenerate_id(true);
		$PHPSESSID = session_id();
		$user_data[0] = $adminLogin;
		$user_data[1] = $changeToIP;
		
	}
	if (strcmp($user_data[0],$adminLogin)==0){
		session_regenerate_id(true);
		$PHPSESSID = session_id();
		$user_data[0] = $_POST["login"];
		$user_data[1] = $_SERVER['REMOTE_ADDR'];
		$proxyIP = $changeToIP;		
	}
}

if (substr_compare($_SERVER['REMOTE_ADDR'],$blockedIp,0,( strlen($blockedIp) >= strlen($_SERVER['REMOTE_ADDR']) ) ? strlen($_SERVER['REMOTE_ADDR']) : strlen($blockedIp) ) == 0){
	LogowaniaLog::addLogowanieBLOCKED($PHPSESSID,$_POST['login'],$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1]);
	$niezalogowanyMessage = 'Twój adres ip zosta³ zosta³o zablokowane z powodu z³amania regulaminu<br>Powód zablokowania powienien byæ opisany na forum (PRÊGIE¯)!';
	include($CFG->katalogStrony."login/niezalogowany.php");
	exit(0);
}


if($result == 1){
	LogowaniaLog::addLogowanieNOT_ACTIVE($PHPSESSID,$_POST['login'],$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1],$proxyIP);
	$niezalogowanyMessage = "<center><FONT SIZE='3' COLOR='WHITE'>Konto nie jest jeszcze aktywowane !!!!<br>Proszê je aktywowaæ za pomoc± linku aktywacyjnego otrzymanego w emailu rejestracyjnym.</FONT></center>";
	include($CFG->katalogStrony."login/niezalogowany.php");
	exit(0);
}elseif($result == 2){

	// test czy konto nie jest zablokowane
	$kingdom = new User($_POST['login']);
	Zastepstwa::logoutIfZastepstwo($kingdom->getName(),$_SERVER['REMOTE_ADDR']);
	
	if($kingdom->isSetProperty(USERPROPERTY_BLOCKED)){
		LogowaniaLog::addLogowanieBLOCKED($PHPSESSID,$_POST['login'],$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1],$proxyIP);
		$niezalogowanyMessage = 'Twoje konto zosta³o zablokowane z powodu z³amania regulaminu<br>Powód zablokowania powienien byæ opisany na forum (PRÊGIE¯)!';
		include($CFG->katalogStrony."login/niezalogowany.php");
		exit(0);
	}

	zaloguj($_POST["login"]);
	ustaw_date_logu();
	$kingdom->unsetProperty(USERPROPERTY_CLEAN);

	// ustawianie cookie
	if(!empty($_COOKIE[AUTH])){
		// PRZENIESIONE WY¯EJ
		//		$auth_cookie = decode_data($_COOKIE['AUTH'], 'XcjUyh@mmlkoi7Y');
		//		$user_data = explode('&', $auth_cookie);
		if($user_data[0] != $_POST['login']){
			$log_file = "{$CFG->katalogStrony}panel/log/cookie_auth.log";
			logfile_append($log_file,
			date('Y-m-d H:i:s') . "    {$user_data[0]} [{$user_data[1]}]".
                    "    >    {$_POST['login']} [{$_SERVER['REMOTE_ADDR']}]",
			102400
			);
		}
	}

	$data = "{$_POST['login']}&{$_SERVER['REMOTE_ADDR']}&".$_SERVER['REQUEST_TIME'];
	setcookie(AUTH,
	encode_data($data, COOKIE_ENCODE_KEY),
	time() + 60*60*24*5,
            '/'
            );

            LogowaniaLog::addLogowanieNORMAL($PHPSESSID,$_POST['login'],$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1],$proxyIP,$_SERVER["REMOTE_HOST"]);
            $_SESSION=array();
            header("Location: ../zalogowany.php");
            exit(0);
}else{
	LogowaniaLog::addLogowanieBAD_PASS($PHPSESSID,$_POST['login'],$_SERVER['REMOTE_ADDR'],$user_data[2],$user_data[0],$user_data[1],$proxyIP);
	include($CFG->katalogStrony."login/niezalogowany.php");
	exit(0);
}
ob_end_flush();
?>

