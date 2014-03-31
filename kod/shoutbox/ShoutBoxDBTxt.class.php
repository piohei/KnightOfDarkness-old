<?php
/**
 * Sterownik TXT dla ShoutBox.
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0 for ShoutBox ver. 1.1
 * @access public
 */
class ShoutBoxDBTxt implements  ShoutBoxDB {
 
	/**
	 * Nazwa pliku z danymi
	 * @var string
	 */
	private $fileName;
	
	/**
	 * Tablica wiadomości
	 * @var array
	 */
	private $messages = array();

	/**
	 * Maksymalna liczba wiadomości jaka może być pliku
	 * @var int 
	 */
	public $MaxCountMessages;
	
	/**
	 * Separator kolejnych danych w wierszu wiadomości. 
	 * Gdy wiadomość lub nick będzie zawierała separator, zostanie on skasowany
	 * @var string
	 */
	public $Separator = '-|-';
	
	/**
	 * Określa jak ma się zachować dana akcja, gdy przekroczono czas oczekiwania na odblokowanie pliku z danymi.
	 * Gdy ustawione na false, to akcja wówczas się nie wykona. Gdy ustawione na true, akcja wykona się tak,
	 * jakgdyby plik nie był zablokowany
	 * 
	 * @var bool
	 */
	public $WaitToLongResult = false;
	
	
	/**
	 * Czas (w sekundach) oczekiwania na odblokowanie pliku
	 * @var int
	 */
	public $WaitTime;
	
	/**
	 * Określamy kolor uźytkownika. Jeśli nie chcemy mieć kolorowych userow, to nie ustawiamy tej właściwości
	 * @var string w postaci RRGGBB
	 */
	public $Color = null;
	
	/**
	 * @var srting $fileName - nazwa pliku z danymi  
	 * @var int $waitTime - czas (w sekundach) oczekiwania na odblokowanie pliku  
	 * @var int $maxCountMessages - maksymalna liczba wiadomości jaka może być pliku  
	 */
	public function __construct($fileName, $waitTime = 2, $maxCountMessages = 100){
		$this->fileName = $fileName;
		$this->WaitTime = (int)$waitTime;
		$this->MaxCountMessages = (int)$maxCountMessages;
	}
	
	/**
	 * Blokuje plik
	 * 
	 * @return bool
	 */
	private function lock(){
		return file_put_contents($this->fileName.'.lck', 'lock');
	}
	
	/**
	 * Odblokowuje plik
	 * 
	 * @return bool
	 */
	private function unlock(){
		$fileName = $this->fileName.'.lck';
		if (file_exists($fileName))
			return unlink($fileName);
		return true;
	}
	
	/**
	 * Sprawdza czy plik jest zablokowany
	 *
	 * @return bool
	 */
	private function isLocked(){
		return file_exists($this->fileName.'.lck');
	}

	private function getmicrotime(){ 
		list($usec, $sec) = explode(" ",microtime()); 
		return ((float)$usec + (float)$sec); 
    }	
    
	/**
	 * Czeka na odblokowanie pliku
	 */
	private function wait(){
		$startWait = $this->getmicrotime();
		while ($this->isLocked()){
			if ($this->getmicrotime() - $startWait > $this->WaitTime)
				return $this->WaitToLongResult;
			usleep(100000);
		}
		
		return true;
	}
	
	/**
	 * Pobiera wiadomości
	 * 
	 * @param int $idMsg - ID wiadomości, którą chcemy pobrać
	 * @return mixed zwracane wartości
	 * - int - maksymalne ID wiadomości
	 * - array - rekord wiadomości. Zwracane gdy $idMsg jest podane
	 * - null - brak wiadomości. Zwracane gdy $idMsg jest podane
	 */
	private function getMsgs($idMsg = 0){
		if (file_exists($this->fileName)){
			$messages = file($this->fileName);
			$this->messages = array();
			$maxId = 0;
			$returnRowMessage = null;
			foreach ($messages as $message){
				$explodeMessage = explode($this->Separator, $message);
				$maxId = $explodeMessage[0];
				$rowMessage = array(
					'ID'=> $maxId,
					'ID_USER'=> $explodeMessage[1],
					'NICK'=> $explodeMessage[2],
					'MESSAGE'=> $explodeMessage[3],
					'TIME'=> trim($explodeMessage[4]),
				);
				if ($idMsg && $maxId == $idMsg)
					$returnRowMessage = $rowMessage;
				$this->messages[$maxId] = $rowMessage; 
			}
			if ($idMsg) 
				return $returnRowMessage;
			else	
				return $maxId;
		}	
		else {
			$this->messages = array();
			if ($idMsg)
				return null;
			else	
				return 0;
		}		
	}
	
	/**
	 * Zapisuję wiadomości do pliku. W przypadku gdy jest zadużo wiadomości to usuwa nadmiar
	 * 
	 * @return bool
	 */
	private function saveMessages(){
		//najpierw usuńmy ewentualny nadmiar
		while (count($this->messages) > $this->MaxCountMessages){
			array_shift($this->messages);
		}
		
		//teraz zapiszmy to do pliku
		$str = '';
		foreach ($this->messages as $message){
			if ($str) $str .= "\n";
			$str.= implode($this->Separator, $message);
		}
		
		return @file_put_contents($this->fileName, $str);
	}
	
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
	public function AddMessage($idUser, $nick, $message){
		if (!$this->wait())
			return false;
		$this->lock();
		$nick = str_replace($this->Separator, '', $nick);
		$message = str_replace(array($this->Separator,"\r\n", "\n", "\r"), '', $message);
		$maxId = $this->getMsgs() + 1;
		$this->messages[] = array(
				'ID'=> $maxId,
				'ID_USER'=> $idUser,
				'NICK'=> $this->Color ? '<span style="color:#'.$this->Color.';">'.$nick.'</span>' : $nick,
				'MESSAGE'=> $message,
				'TIME'=> time(),
			);
		$res = $this->saveMessages();
		$this->unlock();		
		return $res ? $maxId : false;
	}

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
	 * - null - brak wiadomości 
	 * - false - błąd pobierania wiadomości
	 * - string - wiadomość. Zwracane w przypadku gdy parametr $onlyMessage jest ustawiony na true
	 */
	public function GetMessage($idMsg, $onlyMessage = false){
		if (!$this->wait())
			return false;
		$this->lock();
		
		$message = $this->getMsgs($idMsg);
		if ($onlyMessage && $message)
			$message = $message['MESSAGE'];
		$this->unlock();	
		return $message;			
	}

	/**
	 * Usuwa wiadomość 
	 *
	 * @param int $idMsg - id wiadomości
	 * @return bool 
	 */
	public function DeleteMessage($idMsg){
		if (!$this->wait())
			return false;
		$this->lock();
		$this->getMsgs();
		if (isset($this->messages[$idMsg]))
			unset($this->messages[$idMsg]);
		$res = $this->saveMessages();	
		$this->unlock();
		return $res;
	}

	/**
	 * Aktualizuje wiadomość 
	 *
	 * @param int $idMsg - id wiadomości
	 * @param string $message - wiadomość
	 * @return bool 
	 */
	public function UpdateMessage($idMsg, $message){
		if (!$this->wait())
			return false;
		$this->lock();
		$message = str_replace(array($this->Separator,"\r\n", "\n", "\r"), '', $message);
		$this->getMsgs();
		if (isset($this->messages[$idMsg]))
			$this->messages[$idMsg]['MESSAGE'] = $message;
		$res = $this->saveMessages();
		$this->unlock();
		return $res;			
	}

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
	public function GetMessages($limit, $idMsg = null, $up = true){
		if (!$this->wait())
			return false;
		$this->lock();
		
		$this->getMsgs();
		$messages = array();
		if (is_null($idMsg)){ //pobieramy ostatnie wiadomości
			$messages = $this->messages;	
		} else {
			foreach ($this->messages as $message){
				if (($up && $message['ID'] > $idMsg) || (!$up && $message['ID'] < $idMsg))
					$messages[] = $message;
			}
		}
		$this->unlock();
		while (count($messages) > $limit)
			array_shift($messages);
		return array_reverse($messages);
	}
}
?>