<?php
/**
 * To jest tylko przykład wykorzystania klasy, by pokazac mniej więcej jak jej używać.
 * Logowanie co tu jest pokazane było tylko na moje proste testowe potrzeby, wiec i jest
 * najbanalniejsze na swiecie. Każdy niech se uzywa swojego (jak ja to robie w normalnym  projekcie), albo niech
 * usunie wogóle :)
 */


//if (!defined('PROJECT_ROOT_PATH')){
//	if (defined('KATALOG_STRONY')){
//		define('PROJECT_ROOT_PATH',KATALOG_STRONY);
//	} else {
//		define('PROJECT_ROOT_PATH','../');
//	}
//}
//
//session_start();
//require_once(PROJECT_ROOT_PATH.'shoutbox/ShoutBox.class.php');
//require_once(PROJECT_ROOT_PATH.'shoutbox/ShoutBoxDBMysql.class.php');
////require_once('ShoutBoxDBTxt.class.php');
//
//require_once(PROJECT_ROOT_PATH.'common.php');

if (!isset($_SESSION)){
	session_start();
}
if (!defined('CONFIG')){
	require_once('../config.php');
}

require_once($CFG->katalogStrony.'shoutbox/ShoutBox.class.php');
require_once($CFG->katalogStrony.'shoutbox/ShoutBoxDBMysql.class.php');
//require_once('ShoutBoxDBTxt.class.php');

require_once($CFG->katalogStrony.'common.php');


class ShoutBoxDefaultFormatter implements ShoutBoxFormatter {

	private $_otherParameters = null;
	private $_today;
	private $_sbObj = null;
	public function SetShoutBoxObject(&$sbObj){
		$this->_sbObj = $sbObj;
	}

	function __construct($otherParameters = null){
		$this->_otherParameters = $otherParameters;
		$this->_today = date('Y-m-d');
	}
	public function GetOtherParameters(){
		return $this->_otherParameters;
	}

	public function TimeFormat($timestamp){
//		posty z dnia aktualnego bedą zawierały tylko godzinę
//		posty poźniejsze niz dziś, bedą zawierały również datę
		$d = date('Y-m-d', $timestamp);
//		return '<span style="font-size: 8px;">['.($d == $this->_today ? '' : ($d.' ')).date('H:i', $timestamp).']</span>';
		return '['.($d == $this->_today ? '' : ($d.' ')).date('H:i', $timestamp).']';
		//				return '';
	}

	public function NickFormat($nick){
		global $CFG;
		//		return '<a href="'.$CFG->adresSerwera.'walka/infoGracza.php?name='.$nick.'>'.$nick.'</a>';//.':<a href="http://localhost">aaa</a>';
		return "<a href=\"$CFG->adresSerwera"."walka/infoGracza.php?name=$nick\">$nick</a>" ;
	}

	public function AddingMessageFormat($message){
		global $CFG;
		if (strlen($message)> 255)
		$message = substr($message,0,255);
		$message = nl2br(htmlspecialchars(trim($message), ENT_QUOTES));
		$search = array (
			'#\[b\](.*?)\[/b\]#si',
			'#\[i\](.*?)\[/i\]#si',
			'#\[u\](.*?)\[/u\]#si',
			'#&lt;\s*a.*?&gt;(.*?)&lt;\s*/\s*a\s*&gt;#si',
			'#([^/]|^)(www\..*?\..*?)(\s|$)#si',
			'#([^">]|^)(http://.*?\..*?)(\s|$)#si'
			);
			$replace = array(
			'<b>\\1</b>',
			'<i>\\1</i>',
			'<u>\\1</u>',
			'\\1',
			'\\1<a href="http://\\2">\\2</a>\\3',
			'\\1<a href="\\2">\\2</a>\\3'
			);

			$message = preg_replace($search, $replace, $message);

			$search = array (
			':lol:',
			':)',
			':(',
			':P',
			'\\'
			);
			$replace = array(
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/lol.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/smile.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/sad.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/P.gif" />',
			'&#92;'
			);

			$message = str_ireplace($search, $replace, $message);
			return $message;
	}

	public function ReformatMessage($message){
		global $CFG;
		$search = array (
			'#\<b\>(.*?)\</b\>#si',
			'#\<i\>(.*?)\</i\>#si',
			'#\<u\>(.*?)\</u\>#si',
			'#\<a href="http://.*?"\>(.*?)\</a\>#si',
		);
		$replace = array(
			'[b]\\1[/b]',
			'[i]\\1[/i]',
			'[u]\\1[/u]',
			'\\1'
			);

			$message = preg_replace($search, $replace, $message);

			$replace = array (
			':lol:',
			':)',
			':(',
			':P',
			'\\'
			);
			$search = array(
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/lol.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/smile.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/sad.gif" />',
			'<img src="'.$CFG->adresSerwera.'shoutbox/images/P.gif" />',
			'&#92;'
			);

			$message = str_replace($search, $replace, $message);
			$message = html_entity_decode($message, ENT_QUOTES);
			return $message;
	}

	public function GettingMessageFormat($message){
		return $message;
	}

	public function GetParameters($row){
		//a ustawmy sobie kolorek dla kazdego usera osobny (taki jaki sobie wybral)
		if (!empty($row['COLOR']))
		return array('stylenick'=>'color:#'.$row['COLOR'].';');
		else
		return null;
	}

	public function GetUsersOnLine($refresh, $reset = false){
		//		if ($reset || !file_exists('online.txt') || filemtime('online.txt') < time() - 120){
		//			//jesli plik nie istnieje lub ostatnio byl aktualizowany 2 minuty temu, to go odswierz
		//			$sql = 'select NICK, COLOR from ShoutBoxUser where DATE_SUB(NOW(),INTERVAL 40 SECOND) <= LAST_ACTIVE_TIME order by NICK';//pobierz userow aktywnych w ciagu ostatnich 40 sekund
		//			ShoutBoxDBMysql::MysqlConnect();
		//			$res = mysql_query($sql);
		//			if ($res){
		//				$online = array();
		//				while ($row=mysql_fetch_array($res)){
		//					//$online[] = $row['NICK'];
		//					$online[$row['NICK']] = array('style'=>'color:#'.$row['COLOR'].';');
		//				}
		//				file_put_contents('online.txt', serialize($online));
		//				return $online;
		//			}
		//		} elseif ($refresh || filemtime('online.txt') > time() - 20) { //jesli plik zmienil sie w ciagu ostatnich 20 sekund, to wczytaj jego zawartosc
		//			$online = unserialize(file_get_contents('online.txt'));
		//			if (is_array($online))
		//			return $online;
		//			return null;
		//		}
		return null; // nic sie nie zmienilo, nie ma co odswierzac
	}

	public function RunCommand($command, $arg){
		if (empty($_SESSION['nick'])){
			$this->_sbObj->AddAdminMessage('By móc wykonywać komendy musisz być zalogowany');
			$this->_sbObj->message = null;
			return true;
		}

		switch ($command){
			case 'help':
				$this->_sbObj->AddAdminMessage('<u>Dostępne komendy:</u><br /><b>/help</b> - pomoc<br />
					<b>/nick</b> <i>nowynick</i> - zmiana nicka na <i>nowynick</i><br />
					<b>/me</b> <i>tekst</i> - wszyscy zobaczą zobaczą Twoj nick a obok tekst co podałeś<br />
					<b>/color</b> <i>XXXXXX</i> - zmiana koloru (X to cyfry 0-9 lub litery a-f)<br />
					<u>Dostępne emotikony:</u> :) :( :lol: :P<br />
					<u>Dostępne bbcode:</u> [b] [u] [i] oraz linki<br />
					<u>Bajery:</u><br />
					<b>tabulator</b> - wpisz część czyjegoś nicka, kto jest online, i wciśnij tabulator<br />
					(można też nie wpisywać nicka, będziemy wówczas skakać po wszystkich użytkownikach online)');

				//no i wyzerujmy wiadomość, by nie szedl tekst "/help" do wszystkich, bo i poco
				$this->_sbObj->message = null;
				break;
			case 'nick':
				$_nick = trim($arg);
				//no i wyzerujmy wiadomość, by nie szedl tekst "/nick" do wszystkich, bo i poco
				$this->_sbObj->message = null;
				//				if (empty($_nick)){
				//					$this->_sbObj->AddAdminMessage('Musisz podać nowy nick');
				//					break;
				//				}
				//				$_nick = htmlspecialchars($_nick, ENT_QUOTES);
				//				if ($_nick == $_SESSION['nick']){
				//					$this->_sbObj->AddAdminMessage('Musisz podać inny nick niż masz obecnie');
					//					break;
					//				}
					//
					//				//zmiana nazwy usera
					//				ShoutBoxDBMysql::MysqlConnect();
					//				$sql = "update ShoutBoxUser set NICK='$_nick' where ID=".$_SESSION['id'];
					//				$res = mysql_query($sql);
					//				if (!$res || mysql_affected_rows()!==1){
					//					if (mysql_errno() == 1062)
					//					$this->_sbObj->AddAdminMessage('Taki nick już istnieje');
					//					else
					//					$this->_sbObj->AddAdminMessage('Nie udało się zmienić nick\'a');
					//					break;
					//				}
					//				//zapisanie w sesji nowego nicka
					//				$_oldNick = $_SESSION['nick'];
					//				$_SESSION['nick'] = $_nick;
					//				//wymuszenie aktualizacji użytkowników
					//				$this->GetUsersOnLine(true, true);
					//				//danie komunikatu dla wszystkich, że koleś zmienił nicka
					//				$this->_sbObj->AddAdminMessage('<u>'.$_oldNick.'</u> znany jest teraz jako <u>'.$_nick.'</u>', true);
					//
					break;
					case 'color':
						$_color = trim($arg);
						//no i wyzerujmy wiadomość, by nie szedl tekst "/nick" do wszystkich, bo i poco
						$this->_sbObj->message = null;
						//				if (empty($_color)){
						//					$this->_sbObj->AddAdminMessage('Musisz podać nowy kolor');
						//					break;
						//				}
						//				if (!preg_match('/^[0-9a-f]{6}$/i',$_color)){
						//					$this->_sbObj->AddAdminMessage('Niepoprawny kolor. Musi być XXXXXX, gdzie X to cyfry 0-9 lub litery a-f');
						//					break;
						//				}
						//
						//				//zmiana nazwy usera
						//				ShoutBoxDBMysql::MysqlConnect();
						//				$sql = "update ShoutBoxUser set COLOR='$_color' where ID=".$_SESSION['id'];
						//				$res = mysql_query($sql);
						//				if (!$res || mysql_affected_rows()!==1){
						//					$this->_sbObj->AddAdminMessage('Nie udało się zmienić koloru');
						//					break;
						//				}
						//
						//				//wymuszenie aktualizacji użytkowników
						//				$this->GetUsersOnLine(true, true);
						$this->_sbObj->AddAdminMessage('Kolor zmieniony');

						break;
					case 'me':
						$_msg = trim($arg);
						//no i wyzerujmy wiadomość, by nie szedl tekst "/me" do wszystkich, bo i poco
						$this->_sbObj->message = null;
						if (empty($_msg)){
							$this->_sbObj->AddAdminMessage('Musisz podać jeszcze tekst');
							break;
						}
						//normalnie komunikaty admina nie są formatowane, ale z racji ze walniemy teraz wiadomosc usera
						//to trzeba ją sformatowac
						$_msg = $this->AddingMessageFormat($_msg);

						//danie tego, co koles powiedział
						$this->_sbObj->AddAdminMessage('<u>'.$_SESSION['nick'].'</u> '.$_msg, true);
						break;
		}
		return true;
	}
}
class ShoutBoxDefaultRights implements ShoutBoxRights {

	/** W przykładzie prawa bede rozpoznawał na podstawie id i nicku */
	/** Oczywiście w waszych aplikacjach prawa rozpoznawajcie lepiej juz normalnie :) */
	private $_nick;
	private $_id;
	private $logged;
	function __construct($id, $nick){
		$this->_id = $id;
		$this->_nick = $nick;
		$this->logged = true;
	}
	public function CanEdit($message = null){
		//		if ($this->logged && $this->_nick == 'nospor') //nospor jest moderatorem.
		//			return true;
		if ($message && !empty($this->_id) &&  $message['ID_USER']==$this->_id) //można edytowac wiadomość, ktorą się napisało
		return true;
		return 'Nie masz praw do edytowania tej wiadomości';
	}

	public function CanDelete($message = null) {
		//		if ($this->logged && $this->_nick == 'nospor') //nospor jest moderatorem
		//			return true;
		if ($message && !empty($this->_id) && $message['ID_USER']==$this->_id) //można usunąć wiadomość, ktorą się napisało
		return true;
		return 'Nie masz praw do usunięcia tej wiadomości';
	}

	public function CanAdd() {
		if (empty($this->_nick))
		return 'Musisz sie zalogowa� �eby dodwa� wiadomo�ci';
		//		elseif ($this->_nick == 'blocked') //w tym przykładzie koles o nicku "blocked" nie może nic pisać
		//			return 'Nie możesz dodawać wiadomości';
		return true;
	}

	public function CanRead() {
		//if (empty($this->_nick)) //goście nie mogą czytać
		//	return false;
		return true;
	}

	public function CanReadHistory() {
		if (!$this->logged) //goście nie mogą czytać
		return false;
		//		if ($this->logged && $this->_nick == 'nospor') //nospor może przeglądać historię do bólu :)
		//			return true;
		//pozostali użytkownicy tylko 2 razy mogą się cofnąć
		//		if ($_SESSION['history'] >= 2)
		//			return "Tylko nospor może przeglądać całą historię :P";
		//		$_SESSION['history']++;
		return true;
	}

}

error_reporting(E_ALL);
set_error_handler('errorHandler');
date_default_timezone_set('Europe/Warsaw');


//if (empty($_SESSION['nick']))
//	exit;

//	if (!empty($_SESSION['nick'])){
//		$nick = $_SESSION['nick'];
//		$id = $_SESSION['id'];
//	} else {
//		$nick = empty($_POST['nick']) ? null : htmlspecialchars($_POST['nick'], ENT_QUOTES);
//		$id = null;
//	}


$login = czyZalogowany();
if (is_null($login)){
	die ('musisz byc zalogowany');
}

$nick = $login;
$id = $nick;

try {
	//sterowni MySQL
	global $polaczenie;
	$dbd = new ShoutBoxDBMysql($polaczenie);
	//	$dbd->SetExtraUser('ShoutBoxUser', 'ID', array('COLOR'=>'COLOR'));

	//sterownik TXT
	//	$dbd = new ShoutBoxDBTxt('shoutbox.txt');
	//$dbd->Color = skadspobieranykolor; - gdy macie np. w sesji zapamietany kolor usera to mozecie go wstawic to bedziecie mieli kolorowo


	$sb = new ShoutBox(new ShoutBoxDefaultFormatter(),$dbd,'./', $nick, $id);
	$sb->SetLimitMessages(300);

	//określenie dozwolonych komand
	$sb->commands = array('help','nick', 'me','color');
	if ($sb->IsFirstCall()) //zerujemy licznik historii
	$_SESSION['history'] = 0;
	$sb->SetRightsObject(new ShoutBoxDefaultRights($id, $nick));
	$sb->RunAction();
	if ($sb->userMode & ShoutBox::F_LOCKED)
	$sb->AddAdminMessage('Ban za floodowanie zablokowany za floodowanie.');
	elseif ($sb->userMode & ShoutBox::F_WARNED)
	$sb->AddAdminMessage('Nie floodowa� mi tu!!!');
	//	$now = time();
	//	if (!empty($_SESSION['id']) && (empty($_SESSION['last_active_time']) || $_SESSION['last_active_time'] < $now - 30)) {
	//		//co 30 sekund zapisujmy aktywnosc usera
	//		$sql = 'update ShoutBoxUser set LAST_ACTIVE_TIME=now() where ID='.$_SESSION['id'];
	//		ShoutBoxDBMysql::MysqlConnect();
	//		$res = mysql_query($sql);
	//		if ($res !== false)
	//		$_SESSION['last_active_time'] = $now;
	//	}
	//	if (!empty($_SESSION['justlogged'])){ //dodanie komunikatu, że dany user właśnie się zalogował
	//		$_SESSION['justlogged'] = false;
	//		$sb->AddAdminMessage('<u>'.$_SESSION['nick'].'</u> dołączył', true);
	//	}
	$sb->GenerateWholeXML();

	//odpalać tylko dla sterownika Mysql. Sterownik txt nie ma pola Error
	if ($dbd->Error)
	trigger_error($dbd->Error);
}
catch (ShoutBoxException $ex){
	//i tu se cos z wyjatkiem róbcie, jago dla testow wywalam do triggera by mi sie w logach zapisalo :)
	trigger_error($ex->getMessage());
}

//Prosty handler do logowania błędów
function errorHandler($errNo, $errStr, $errFile, $errLine){
	$_msg = "Plik: $errFile \n Linia: $errLine \n $errStr \n";
	$log = fopen('ShoutBox.log', 'a');
	fwrite($log, $_msg);
	fclose($log);
	return true;
}
?>