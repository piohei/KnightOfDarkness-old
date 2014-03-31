<?php
/**
 * License
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * 
 * Dodatkowo, począwszy od wersji 1.0, wymagane jest umieszczenie na stronie wykorzystującej ShoutBox 
 * informacji o autorze wraz z linkiem do jego strony.
 **/

/**
 * Klasa do obsługi ShoutBox'a. 
 *
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @license http://opensource.org/licenses/lgpl-license.php GNU Lesser General Public License
 * @version 1.1
 * @access public
 **/
class ShoutBox {

	/** Użytkownik zablokowany za floodowanie */
	const F_LOCKED = 128;

	/** Użytkownik ostrzeżony za floodowanie */
	const F_WARNED = 256;
	
	/** Nick administratora. Używane przy wyświetlaniu błędów */
	public $adminNick = 'ADMIN';
	
	/** W ciągu x (domyślnie 1) sekund można napisać tylko jedną wiadomość */
	public $floodTime = 1;
	
	/** Ilość ostrzeżeń przed zablokowaniem */
	public $floodCount = 3;
	
	/** Na ile sekund zablokować */
	public $floodLockTime = 30;
	
	/** Na ile jeszcze zablokowany */
	public $floodLockedTimeLeft;

	/** Tryb użytkownika, np. zablokowany. */
	public $userMode = 1;
	
	/** Czy pozwalać na ID użytkownika jako string */
	public $allowStringUserId = false;
	
	/** Lista dostępnych komend */
	public $commands = array();

	/** Ustawienie tego na true spowoduje zniknięcie przycisku przeglądania historii */
	public $noMoreHistory = false;
	
	/** ID wiadomości ostanio pobranej. Gdy nie ma tego ID, znaczy że pierwszy raz wywolujemy shoutboxa. */
	private $_idMsg;

	/** ID wiadomości ostanio pobranej będącej jako pierwsza. */
	private $_idFirstMsg;
	
	/** ID  shoutboxa. */
	private $_id;
	
	/** Ile pobierać ostatnich wiadomości. */
	private $_countLastMessages = 40;

	/** Limit na pobór wiadomości. */
	private $_limitMessages = 100;
	
	/** Wiadomość do wpisania. Gdy null, to żądanie o pobranie wiadomości. */
	public $message;
	
	/** Nazwa użytkownika wysyłającego żądanie. */
	private $_nick;
	
	/** ID użytkownika. Może być null, np. gdy gość. */
	private $_idUser;
	
	/** Czas wykonywania operacji */
	private $_time;
	
	/** Ścieżka, gdzie mają być tworzone pliki pomocnicze */
	private $_mainPath;

	/** Wiadomości do zwrócenia dla użytkownika */
	private $_messages = array();
	
	/**
	 * Sterownik do obługi bazy danych
	 *
	 * @var ShoutBoxDB
	 */
	private $_dbd; 

	/** Obiekt do formatowania danych.*/
	private $_formatter;

	/** Obiekt do zarządzania prawami.*/
	private $_iRights = null;

	/** nazwa akcji*/
	private $_action;

	/** rezultat akcji*/
	private $_actionResult = 0;
	
	/** textowy rezultat akcji, np. wiadomość po edycji*/
	private $_actionResultText = null;
	
	/** id wiadomości, której akcja dotyczy */
	private $_idActMsg;
	
	private $_isFirstCall = false;
	
	/** Teksty błędów dla wyjątków */
	private $_errorMsg = array(
		'create_file' => 'Can\'t create file/catalog: %s',
		'empty_parameter' => 'Parameter "%s" in method "%s" can\'t be empty',
		'parameter_type' => 'Wrong parameter "%s" type in method "%s". Type must be: %s',
		'wrong_instance' => 'Wrong "%s" object instance in function "%s". Should be "%s".',
		'not_callable' => 'Function in parameter "%s" in method "%s" is not callable.',
	);
	
	/**
	 * Konstruktor klasy
	 * 
	 * @param object $formatter - obiekt do formatowania danych
	 * @param object $sbDB - obiekt do obługi bazy danych
	 * @param string $dir - nazwa katalogu na pliki ShoutBox'a
	 * @param string $nick - nazwa użytkownika wysyłającego żądanie
	 * @param mixed $idUser - id użytkownika. Może być null, np. gdy gość
	 * @param mixed $idUser - identyfikator połączenia z bazą
	 */
	public function __construct($formatter,$dbd,$dir, $nick='', $idUser = null) {
		if (!is_object($formatter))
			throw new ShoutBoxException(sprintf($this->_errorMsg['parameter_type'], 'formatter', __FUNCTION__, 'object'));
		if (!$formatter instanceof ShoutBoxFormatter ) 
			throw new ShoutBoxException(sprintf($this->_errorMsg['wrong_instance'], 'formatter', __FUNCTION__, 'ShoutBoxFormatter'));
		if (!$dbd instanceof ShoutBoxDB) 
			throw new ShoutBoxException(sprintf($this->_errorMsg['wrong_instance'], 'dbd', __FUNCTION__, 'ShoutBoxDB'));
		if (!is_string($dir))
			throw new ShoutBoxException(sprintf($this->_errorMsg['parameter_type'], 'dir', __FUNCTION__, 'string'));
		
		$this->_formatter = $formatter;
		$this->_dbd = $dbd;
		$this->_formatter->SetShoutBoxObject($this);
			
		$this->_nick = $nick;
		$this->_idUser = empty($idUser) ? null : $idUser;
		if (!$this->allowStringUserId)
			$this->_idUser = (int) $this->_idUser;
		if (isset($_POST['message']))
			$this->message =  $this->_formatter->AddingMessageFormat($_POST['message']);
		else
			$this->message = null;
		$this->_idMsg = !isset($_GET['sb_idMsg']) ? null : ((int) $_GET['sb_idMsg']);
		$this->_idFirstMsg = empty($_GET['sb_idFirstMsg']) ? null : ((int) $_GET['sb_idFirstMsg']);
		$this->_id = empty($_GET['sb_id']) ? null : $_GET['sb_id'];
		$this->_isFirstCall = is_null($this->_idMsg);
		$this->_action = empty($_GET['sb_a']) ? null : $_GET['sb_a'];
		$this->_idActMsg = empty($_GET['sb_idActMsg']) ? null : ((int)$_GET['sb_idActMsg']);
		if ((($this->_action == 'add' || $this->_action == 'edit') && (is_null($this->message) || $this->message === '')) || (($this->_action == 'edit' || $this->_action == 'delete'  || $this->_action == 'getrfm') && empty($this->_idActMsg)))
			$this->_action = null;
		
		$dir = trim($dir);
		if ($dir !== '' && !file_exists($dir)){
			if (mkdir($dir, 0777) === false)
				throw new ShoutBoxException(sprintf($this->_errorMsg['create_file'], $dir));
		}
		
		if ($dir === '')
			$this->_mainPath = './';
		else {
			$_ls = substr($dir, -1);
			$this->_mainPath = $dir . (($_ls == '/' || $_ls == '\\') ? '' : '/');
		}
		
	}
	
	/**
	 * Czy to pierwsze wywołanie
	 *
	 * @return boolean
	 */
	public function IsFirstCall(){
		return $this->_isFirstCall;
	}

	/**
	 * Ustawienie obiektu do zarządzania prawami
	 *
	 * @param ShoutBoxRights $objRights - obiekt do zarządzania prawami
	 * 
	 * @return boolean
	 */
	public function SetRightsObject($objRights){
		if (!is_object($objRights))
			throw new ShoutBoxException(sprintf($this->_errorMsg['parameter_type'], 'objRights', __FUNCTION__, 'object'));
		if (!$objRights instanceof ShoutBoxRights) 
			throw new ShoutBoxException(sprintf($this->_errorMsg['wrong_instance'], 'objRights', __FUNCTION__, 'ShoutBoxRights'));
		$this->_iRights = $objRights;
		return true;
	}
	
	/**
	 * Ustawienie liczby ostatnich wiadomości
	 *
	 * @param int $count 
	 */
	public function SetCountLastMessages($count){
		$this->_countLastMessages = abs((int) $count);
	}

	/**
	 * Ustawienie limitu pobrania naraz wiadomości
	 *
	 * @param int $limit
	 */
	public function SetLimitMessages($limit){
		$this->_limitMessages = abs((int) $limit);
	}
	
	/**
	 * Czy jest to żądanie dodania wiadomości.
	 * 
	 * @deprecated W kolejnych wersjach może zniknąć ta funkcja. Należy wówczas korzystać z GetActionName()
	 * @return boolean
	 */
	public function IsAddingRequest(){
		return !is_null($this->message) && $this->_action=='add';
	}
	
	/**
	 * Zwraca nazwę akcji.
	 * 
	 * @return string
	 */
	public function GetActionName(){
		return $this->_action;
	}
	/**
	 * Dodaje wiadomość do bazy
	 * 
	 * @return boolean
	 */
	public function AddMessage($checkFlooding = true, $adminMessage = false){
		if (is_null($this->message) || $this->message === '')
			return true;
		$this->_time = time();
		if ($checkFlooding){
			$this->checkFlooding();
			if ($this->userMode & self::F_LOCKED || $this->userMode & self::F_WARNED)
				return false;
		}
		if ($adminMessage){
			$_idUser = null;
			$_nick = '';
		} else {
			$_idUser = $this->_idUser;
			$_nick = $this->_nick;
		}
		$_idMsg = $this->_dbd->AddMessage($_idUser, $_nick, $this->message);
		if ($_idMsg === false)
			return false;
		@file_put_contents($this->_mainPath.'lastMsgID.sbx', $_idMsg);
		$this->Read();
		return true;
	}
	
	public function RunAction(){
		$adminMessage = null;
		$res = true;
		if ($this->_action == 'add' && (!$this->_iRights || ($adminMessage=$this->_iRights->CanAdd())===true)){
			if (isset($_POST['message'])){
				if (!empty($this->commands)){
					$_matches = array();
					if (preg_match_all('#^\s*/('.implode('|',$this->commands).')(\s|$)#si', $_POST['message'], $_matches,PREG_OFFSET_CAPTURE)){
						$_command = strtolower($_matches[1][0][0]);
						$this->_formatter->RunCommand($_command, substr($_POST['message'],($_matches[1][0][1] + strlen($_command) + 1)));
					}
				}
			}
			
			$res = $this->AddMessage();
		
		}	
		elseif ($this->_action == 'delete' && $this->_iRights){
			$adminMessage=$this->_iRights->CanDelete(); //sprawdzenie czy ma prawa moderatora
			if ($adminMessage !== true){//nie ma praw moderatora, patrzymy czy może skasować wybraną wiadomość 
				$rowMessage = $this->_dbd->GetMessage($this->_idActMsg);
				if ($rowMessage === false)
					return false;
				elseif(is_null($rowMessage)){ // nie ma juz wiadomości, pewnie ktoś usunał, wiec walimy, ze jest ok
					$this->_actionResult = $this->_idActMsg;
					return true;	
				}	
				$adminMessage = $this->_iRights->CanDelete($rowMessage);
			}
			if ($adminMessage === true){
				$res = $this->_dbd->DeleteMessage($this->_idActMsg);
				if ($res === false)
					$this->_actionResult = 0;
				else	
					$this->_actionResult = $this->_idActMsg;
			}	
		}
		elseif (($this->_action == 'edit' || $this->_action == 'getrfm') && $this->_iRights){
			$adminMessage=$this->_iRights->CanEdit(); //sprawdzenie czy ma prawa moderatora
			if ($adminMessage !== true){//nie ma praw moderatora, patrzymy czy może edytować wybraną wiadomość 
				$rowMessage = $this->_dbd->GetMessage($this->_idActMsg);
				if (!$rowMessage)
					return false;
				$adminMessage = $this->_iRights->CanEdit($rowMessage);
			}
			if ($adminMessage === true){
				if ($this->_action == 'edit'){
					$res = $this->_dbd->UpdateMessage($this->_idActMsg, $this->message);
				} else
					$res = true;
				if ($res === false)
					$this->_actionResult = 0;
				else {
					$message = $this->_dbd->GetMessage($this->_idActMsg, true);
					if (!$message)
						return false;
					$this->_actionResultText = $this->_action == 'edit' ? $this->_formatter->GettingMessageFormat($message) : $this->_formatter->ReformatMessage($message);
					$this->_actionResult = $this->_idActMsg;
				}	
			}	
		}
		elseif ($this->_action == 'read' && (!$this->_iRights || ($adminMessage=$this->_iRights->CanRead())===true))
			$res = $this->Read();
		elseif ($this->_action == 'history'){
			if ($this->_idFirstMsg && (!$this->_iRights || ($adminMessage=$this->_iRights->CanReadHistory())===true))
				$res = $this->Read(true);
			elseif ($this->_iRights && $adminMessage!==true)
				$this->noMoreHistory = true;	
		}
		if (!empty($adminMessage) && is_string($adminMessage))
			$this->AddAdminMessage($adminMessage);
			
		return $res;	
	}
	/**
	 * Sprawdza, czy użytkownik nie flooduje
	 */
	private function checkFlooding(){
		if (empty($_SESSION['FLOOD']['LAST_MESSAGE_TIME'])) {
			$_SESSION['FLOOD']['COUNT'] = 0;
		} elseif (!empty($_SESSION['FLOOD']['LOCKED'])){//koles byl ostatnio zablokowany
			if ($this->_time - $_SESSION['FLOOD']['LAST_MESSAGE_TIME'] < $this->floodTime){
				$_SESSION['FLOOD']['LOCKED']= $this->_time + $this->floodLockTime; //Przedluzamy blokade, niech sie nauczy niefloodowac
				$this->floodLockedTimeLeft = $this->floodLockTime;
				$this->userMode |= self::F_LOCKED;
				$this->userMode |= self::F_WARNED;
			}	
			else { //jest zablokowany, ale nie flooduje, sprawdzamy wiec czy minął okres kary :)
				if ($this->_time > $_SESSION['FLOOD']['LOCKED'])
					unset($_SESSION['FLOOD']['LOCKED']);
				else {
					$this->userMode |= self::F_LOCKED;
					$this->floodLockedTimeLeft = $_SESSION['FLOOD']['LOCKED'] - $this->_time;
				}	
			}
		} else {
			if ($this->_time - $_SESSION['FLOOD']['LAST_MESSAGE_TIME'] < $this->floodTime){
				$_SESSION['FLOOD']['COUNT'] ++;
				$this->userMode |= self::F_WARNED;
				if ($_SESSION['FLOOD']['COUNT'] > $this->floodCount){
					$this->userMode |= self::F_LOCKED;
					$_SESSION['FLOOD']['LOCKED'] = $this->_time + $this->floodLockTime;
					$this->floodLockedTimeLeft = $this->floodLockTime;
				}	
			}	
		}
		
		$_SESSION['FLOOD']['LAST_MESSAGE_TIME'] = $this->_time;
	}
	/**
	 * Dodaje wiadomość admina dla użytkownika.
	 * @param string $message - wiadomość
	 * @param boolean $forAll - określa czy wiadomość ma być tylko dla danego usera, czy dla wszystkich
	 * 
	 * @return boolean
	 */
	public function AddAdminMessage($message, $forAll = false){
		if ($forAll){
			$_tmpMessage = $this->message;
			$this->message = $message;
			$this->AddMessage(false, true);
			$this->message = $_tmpMessage;
		} else 
			$this->_messages[] = array(
				'TIME'=>time(),
				'ID_USER'=>0,
				'NICK'=>$this->adminNick,
				'MESSAGE'=>$message,
				'ADMIN' => true,
				'ID' => null,
			);
		return true;
	}
	
	/**
	 * Czyta wiadomości z bazy
	 * 
	 * @param boolean $history - czy to przegląd historii
	 * @return boolean
	 */
	public function Read($history = false){
		$res = true;
		if (!$history && is_null($this->_idMsg)){ //pobranie początkowego zakresu wiadomości
			$res = $this->getMessages($this->_dbd->GetMessages($this->_countLastMessages));
		} elseif (!$history) { //pobieranie tylko nowych wiadomości
			if (file_exists($this->_mainPath.'lastMsgID.sbx'))
				$_lastId = (int)file_get_contents($this->_mainPath.'lastMsgID.sbx');
			else 
				$_lastId = null;
			if (is_null($_lastId) || $_lastId >= $this->_idMsg){ //są nowe wiadomości i trzeba je pobrać
				$res = $this->getMessages($this->_dbd->GetMessages($this->_limitMessages, $this->_idMsg));
				if (is_null($_lastId) || $_lastId >= $this->_idMsg)
					@file_put_contents($this->_mainPath.'lastMsgID.sbx', $this->_idMsg);
			}
		} elseif ($history){
			$res = $this->getMessages($this->_dbd->GetMessages($this->_countLastMessages, $this->_idFirstMsg, false), true);
		}
		return $res;
	}
	
	/**
	 * Przygotowuje wiadomości na podstawie $messages. Zapisuje ostatnie ID
	 * 
	 * @param array $messages - wiadomości
	 * @param boolean $history - czy to przeglądanie historii
	 * @return boolean
	 */
	private function getMessages($messages, $history = false){
		if ($messages === false)
			return false;
		if (is_null($messages))
			$messages = array();
		$saveIdMsg = !$history;
		if ($history && empty($messages))
			$this->noMoreHistory = true;
		foreach ($messages as $message){
			if ($saveIdMsg){
				$this->_idMsg = (int)$message['ID'];
				$saveIdMsg = false;
			}	
			if ($history || $this->_isFirstCall)
				$this->_idFirstMsg = (int)$message['ID'];
		}
		if (!$history)
			$messages = array_reverse($messages);
		$this->_messages = array_merge($this->_messages, $messages);
		return true;	
	}
	/**
	 * Generuje xml'a wiadomości
	 * Struktura:
	 * - znacznik "shoutbox". Parametry:
	 * 	- id - id shoutboxa
	 * 	- last_msg_id - id ostatniej wiadomości
	 * 	- first_msg_id - id pierwszej wiadomości z pobranych
	 * - znaczniki "message" w znaczniku "shoutbox". Parametry:
	 * 	- time - czas dodania wiadomości
	 * 	- owner - właściciel wiadomości. Przyjmuje wartości:
	 * 		- 3 - wiadomość specjalna admina do wszystkich użytkowników
	 * 		- 2 - administrator (wiadomość tylko dla danego użytkownika)
	 * 		- 1 - użytkownik, który pobiera wiadomości
	 * 		- 0 - pozostali użytkownicy
	 * 	- nick - nazwa użytkownika, ktory napisał daną wiadomość
	 * 	Wartością znacznika "message" jest dana wiadomość.
	 */
	public function GenerateXML(){
		$canDelete = ($this->_iRights && $this->_iRights->CanDelete() === true);
		$canEdit = ($this->_iRights && $this->_iRights->CanEdit() === true);
		$ret = '<shoutbox id="'.$this->_id.'"'.($this->userMode & self::F_LOCKED ? ' flooding="'.$this->floodLockTime.'"' : '').($this->noMoreHistory ? ' nomorehistory="1"' : '').($this->_idFirstMsg ? ' first_msg_id="'.$this->_idFirstMsg.'"' : '').' last_msg_id="'.$this->_idMsg.'"'.($canDelete ? ' candelete="1"' :'').($canEdit ? ' canedit="1"' :'').' result="'.$this->_actionResult.'">';
		if ($this->_actionResultText)
			$ret.= '<resulttext><![CDATA['.$this->_actionResultText.']]></resulttext>';
		foreach ($this->_messages as $_message){
			$_canDel = ($this->_iRights && !$canDelete && $this->_iRights->CanDelete($_message)===true);
			$_canEdit = ($this->_iRights && !$canEdit && $this->_iRights->CanEdit($_message)===true);
			$ret.= '<message id="'.$_message['ID'].'" owner="'.(!empty($_message['ADMIN']) ? 2 : ((empty($_message['ID_USER']) && empty($_message['NICK'])) ? 3 : ($_message['ID_USER'] == $this->_idUser ? 1 : 0))).'"'.($_canDel ? ' candelete="1"' :'').($_canEdit ? ' canedit="1"' :'').'>'.
				'<time><![CDATA['.$this->_formatter->TimeFormat($_message['TIME']).']]></time>'.
				'<nick><![CDATA['.$this->_formatter->NickFormat($_message['NICK']).']]></nick>'.
				'<body><![CDATA['.$this->_formatter->GettingMessageFormat($_message['MESSAGE']).']]></body>';
			$par = $this->_formatter->GetParameters($_message);
			if (!empty($par) && is_array($par)){
				$ret.= '<ps>';
					foreach ($par as $_parName=>$_parValue)
						$ret.= "<$_parName><![CDATA[$_parValue]]></$_parName>";
				$ret.= '</ps>';
			}
			$ret.= '</message>';
		}		
		$online = $this->_formatter->GetUsersOnLine($this->_isFirstCall);
		if (is_array($online)){
			$ret.= '<online id="online">';
			foreach ($online as $_key=>$_user){
				if (is_array($_user)){
					$_userNick = $_key;
					$_userStyle = !empty($_user['style']) ? $_user['style'] : null;
					$_userClass = !empty($_user['class']) ? $_user['class'] : null;
				} else {
					$_userNick = $_user;$_userStyle = null;$_userClass = null;
				}
				$ret.= '<ouser'.($_userStyle ? ' style="'.$_userStyle.'"' : '').($_userClass ? ' class="'.$_userClass.'"' : '').'><![CDATA['.$_userNick.']]></ouser>';
			}
			$ret.= '</online>';
		}
		$ret.= '</shoutbox>';
		return $ret;
	}
	
	public function GenerateWholeXML(){
		header("Content-type: text/xml; charset=utf-8");
		echo '<?xml version="1.0" encoding="utf-8"?>'.$this->GenerateXML();
	}	
}

/**
 * Interfejs dla klas formatujących
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0
 * @access public
 */
interface ShoutBoxFormatter {
 
	/**
	 * Ustawia obiekt ShoutBoxa, który go wykorzystuje.
	 * 
	 * @param object $sbObj - obiekt ShoutBoxa
	 * @return boolean
	 */
	public function SetShoutBoxObject(&$sbObj);
	
	
	/**
	 * Formatownie wyświetlanego czasu
	 * 
	 * @param int $timestamp - unixowy znacznik czasu
	 * @return string
	 */
	public function TimeFormat($timestamp);

	/**
	 * Formatownie nick'u
	 * 
	 * @param int $nick - nick
	 * @return string
	 */
	public function NickFormat($nick);

    /**
     * Formatowanie wiadomości przed włożeniem do bazy
     *
     * @param string $message 
     * @return string 
     */
	public function AddingMessageFormat($message);

	/**
     * Przeformatowanie wiadomości tak, by była czytelna przy edycji
     *
     * @param string $message 
     * @return string 
     */
	public function ReformatMessage($message);

	
    /**
     * Formatowanie wiadomości po pobraniu z bazy
     *
     * @param string $message 
     * @return string 
     */
	public function GettingMessageFormat($message);

	/**
     * Ustalenie parametrów dla danej wiadomości. Parametry te zostaną dołączone do xml 
     * i będą mogły zostać obsłużone w kodzie js do np. zmiany wyglądu danej wiadomości. Obecnie obsługiwane parametry to:
     * - classmessage - klasa css dla całej wiadomości
     * - classtime - klasa css dla czasu
     * - classnick - klasa css dla nick'a
     * - classtext - klasa css dla textu wiadomości
     * - stylemessage - styl css dla całej wiadomości
     * - styletime - styl css dla czasu
     * - stylenick - styl css dla nick'a
     * - styletext - styl css dla textu wiadomości
     * Można tworzyć i inne parametry, ale trzeba będzie je samo obsłużyć w kodzie js.
     * Wartość parametru stylu powinna wyglądać następująco:
     * 	nazwa1:war1;nazwa2:war2;..., np: color:red;height:30px;
     *
     * @param array $row 
     * @return mixed zwracane wartości:
     * - array - tablica o indexach będących nazwami wyżej opisanych parametrów oraz o wartościach będącymi wartościami tych parametrów
     * - każdy inny typ (null, false, ....) - oznaczać to będzie brak parametrów
     */
	public function GetParameters($row);
	
	/**
	 * Funkcja ma zwracać tekstową (html) reprezentację użytkowników online. Zawartość ta będzie wkładana do diva.
	 *
	 * @param boolean $refresh - parametr ten będzie mówił, czy należy pobrać bezwględnie użytkowników online
	 * @param boolean $reset - wymuszenie aktualizacji użytkowników
	 * @return mixed zwracane wartości:
	 * - array - wówczas zostanie zmieniona zawartość diva (nawet gdy tablica jest pusta)
	 * - kazdy inny typ (najlepiej false lub null) - div z użytkownikami online nie zostanie odswierzony
	 * Zwrocona tablica może być jednowymiarowa lub dwuwymiarowa.
	 * - jednowymiarowa - jej elementy są nazwami użytkowników
	 * - dwuwymiarowa - indexami są nazwy użytkowników, zaś elementami tablica, o indexach:
	 *  - style - styl dla danego elementu
	 *  - class - nazwa klasy dla danego elementu
	 */
	public function GetUsersOnLine($refresh, $reset = false);

	/**
	 * Funkcja do realizacji komendy użytkownika, np: gdy wpisze /help
	 *
	 * @param string $command - nazwa komendy
	 * @param string $arg - reszta tekstu podana po komendzie
	 * @return boolean 
	 */
	public function RunCommand($command, $arg);
	
}

/**
 * Interfejs dla praw
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0
 * @access public
 */
interface ShoutBoxRights {
 
	/**
	 * Czy może edytować. 
	 * Gdy $message nie jest pusty, to pytamy czy może edytować daną wiadomość.
	 * Gdy $message jest pusty, to pytamy czy może wogóle edytować, np. czy jest moderatorem.
	 * 
	 * @param array $message - tablica reprezentująca wiadomość. Zawierać będzie między innym następujące indexy:ID_USER, NICK, TIME,...
	 * @return mixed zwracane mogą być następujące wartości:
	 *  - true - może edytować
	 *  - false - nie może edytować
	 *  - mixed - nie może edytować. Zwrócony tekst zostanie wyświetlony jako wiadomość od Admina
	 */
	public function CanEdit($message = null);

	/**
	 * Czy może usuwać. 
	 * Gdy $message nie jest pusty, to pytamy czy może usuwać daną wiadomość.
	 * Gdy $message jest pusty, to pytamy czy może wogóle usuwać, np. czy jest moderatorem.
	 * 
	 * @param array $message - tablica reprezentująca wiadomość. Zawierać będzie między innym następujące indexy:ID_USER, NICK, TIME,...
	 * @return mixed podobnie jak dla CanEdit
	 */
	public function CanDelete($message = null);

	/**
	 * Czy może dodawać. 
	 * 
	 * @return mixed podobnie jak dla CanEdit
	 */
	public function CanAdd();

	/**
	 * Czy może czytać. 
	 * 
	 * @return mixed podobnie jak dla CanEdit
	 */
	public function CanRead();

	/**
	 * Czy może czytać wcześniejsze wpisy. 
	 * 
	 * @return mixed podobnie jak dla CanEdit
	 */
	public function CanReadHistory();
}

/**
 * Interfejs dla obsługi bazy danych
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0
 * @access public
 */
interface ShoutBoxDB {
 
	/**
	 * Dodaje wiadomość 
	 *
	 * @param mixed $idUser - id użytkownika. Moży być typu:
	 * - int - podany liczbowy identyfikator
	 * - string - tekstowy identyfikator
	 * - null - użytkownik nie posiada identyfikatora, np. gość
	 * @param string $nick - nick/nazwa użytkownika
	 * @param string $message - wiadomość
	 * @return mixed - zwracane wartości
	 * - int - numer/id dodanej wiadomości. Ważne by każda kolejna wiadomość miała numer/id większe od poprzedniej.
	 * - false - w przypadku błędu podczas dodawania
	 */
	public function AddMessage($idUser, $nick, $message);

	/**
	 * Pobiera rekord wiadomości 
	 *
	 * @param int $idMsg - id wiadomości
	 * @param bool $onlyMessage - czy pobrać tylko wiadomość
	 * @return mixed - zwracane wartości
	 * - array - wiersz wiadomości. Tablica powinna zawierać następujące indexy:
	 *  - ID - id wiadomości
	 *  - ID_USER - identyfikator użytkownika, który napisał wiadomość
	 *  - NICK - nazwa użytkownika
	 *  - MESSAGE - wiadomość
	 *  - TIME - czas napisania wiadomości
	 *  - reszta indexów określonych przy dodawaniu ExtraUsera
	 * - null - brak wiadomości 
	 * - false - błąd pobierania wiadomości
	 * - string - wiadomość. Zwracane w przypadku gdy parametr $onlyMessage jest ustawiony na true
	 */
	public function GetMessage($idMsg, $onlyMessage = false);

	/**
	 * Usuwa wiadomość 
	 *
	 * @param int $idMsg - id wiadomości
	 * @return bool 
	 */
	public function DeleteMessage($idMsg);

	/**
	 * Aktualizuje wiadomość 
	 *
	 * @param int $idMsg - id wiadomości
	 * @param string $message - wiadomość
	 * @return bool 
	 */
	public function UpdateMessage($idMsg, $message);

	/**
	 * Pobiera wiadomości. Niezależnie od parametrów wywołania funkcji, 
	 * rekordy należy zwrócić w porządku malejącym.
	 *
	 * @param int $limit - max. ilość wiadomości do pobrania
	 * @param mixed $idMsg - id wiadomości, względem której będą pobierane pozostałe. Może przyjąć wartości
	 *  - int - id wiadomości
	 *  - null - należy pobrać wówczas ostanie wiadomości
	 * @param bool $up - ważny tylko gdy określone jest $idMsg.
	 * Określa które wiadomości należy pobrać, względem $idMsg. 
	 * Jeśli $up jest ustawiony na true, należy pobrać wiadomości o ID większym od $idMsg. 
	 * Jeśli $up jest ustawiony na false, należy pobrać wiadomości o ID mniejszym od $idMsg. 
	 * @return mixed - zwracane wartości
	 * - array - tablica wiadomości. Wartościami tablicy powinna być tablica zawierająca następujące indexy.
	 *  - ID - id wiadomości
	 *  - ID_USER - identyfikator użytkownika, który napisał wiadomość
	 *  - NICK - nazwa użytkownika
	 *  - MESSAGE - wiadomość
	 *  - TIME - czas napisania wiadomości (w formacie unixtimestamp)
	 *  - reszta indexów określonych przy dodawaniu ExtraUsera
	 * - null - brak wiadomości 
	 * - false - błąd pobierania wiadomości
	 */
	public function GetMessages($limit, $idMsg = null, $up = true);
}

/**
 * Klasa wyjątków dla ShoutBox
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0
 * @access private
 **/
class ShoutBoxException extends Exception  {
	public function __construct($message, $code = 0) {
		parent::__construct($message, $code);
	}
}

?>