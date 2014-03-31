<?php
/**
 * Sterownik bazy danych dla ShoutBox.
 * 
 * @package MCM
 * @subpackage independent
 * @author Robert (nospor) Nodzewski (email: nospor at interia dot pl)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0 for ShoutBox ver. 1.1
 * @access public
 */
class ShoutBoxDBMysql implements  ShoutBoxDB {
 
	private static $dbLink = null;
	private $tableName;
	private $extraUser;
	public $Error = null;

	public static function MysqlConnect(){
		global $CFG;
		if (self::$dbLink)
			return self::$dbLink;
		self::$dbLink = @mysql_connect($CFG->adresBazy, $CFG->uzytkownik,$CFG->haslo);
		if (@mysql_select_db($CFG->baza))
			return self::$dbLink;
		else 
			return false;	
	}
	
	public function __construct($dbLink = null, $tableName = 'ShoutBox'){
		$this->tableName = $tableName;
		self::$dbLink = $dbLink;
	}
	
	public function SetExtraUser($tableName,$idName, $fields){
		$this->extraUser['TABLE'] = $tableName;
		$this->extraUser['ID_NAME'] = $idName;
		$this->extraUser['FIELDS'] = $fields;
		return true;
	}
	
	private function isExtraUser(){
		return !empty($this->extraUser['TABLE']) && !empty($this->extraUser['ID_NAME']) && !empty($this->extraUser['FIELDS']) && is_array($this->extraUser['FIELDS']);
	}
	private function getExtraFieldsSql(){
		if (!$this->isExtraUser())
			return '';
		$sql = '';
		foreach ($this->extraUser['FIELDS'] as $fieldName => $aliasName)
			$sql.=',SBU.'.$fieldName.' '.$aliasName	;
		return $sql;	
	}

	private function getExtraUserJoinSql(){
		if (!$this->isExtraUser())
			return '';
		$sql = ' left join '.$this->extraUser['TABLE'].' SBU on SB.FK_USER=SBU.'.$this->extraUser['ID_NAME'];
		return $sql;	
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
		if (self::MysqlConnect() === false)
			return false;
		$sql = 'insert into '.$this->tableName.' (`FK_USER`, `NICK`, `MESSAGE`, `TIME`) values ';
		$sql.= "(".($idUser ? (is_string($idUser) ? "'$idUser'" : $idUser) : 'null').", '$nick', '$message','".date('Y-m-d H:i:s')."')";
		$res = mysql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = mysql_error();		
		return $res ? mysql_insert_id(self::$dbLink) : false;
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
	 *  - reszta indexów określonych przy dodawaniu ExtraUsera
	 * - null - brak wiadomości 
	 * - false - błąd pobierania wiadomości
	 * - string - wiadomość. Zwracane w przypadku gdy parametr $onlyMessage jest ustawiony na true
	 */
	public function GetMessage($idMsg, $onlyMessage = false){
		if (self::MysqlConnect() === false)
			return false;
		if ($onlyMessage)
			$sql = 'select MESSAGE from '.$this->tableName.' where ID='.$idMsg;
		else	
			$sql = 'select SB.ID,SB.FK_USER ID_USER, SB.NICK, SB.MESSAGE, SB.TIME'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' where SB.ID='.$idMsg;
		$res = mysql_query($sql, self::$dbLink);
		if ($res === false){
			$this->Error = mysql_error();			
			return false;
		}	
		if (mysql_num_rows($res) === 0)
			return null;
		$message = mysql_fetch_assoc($res);
		if ($onlyMessage)
			$message = $message['MESSAGE'];
		return $message;			
	}

	/**
	 * Usuwa wiadomość 
	 *
	 * @param int $idMsg - id wiadomości
	 * @return bool 
	 */
	public function DeleteMessage($idMsg){
		if (self::MysqlConnect() === false)
			return false;
		$sql = 'delete from '.$this->tableName.' where ID='.$idMsg;
		$res = mysql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = mysql_error();		
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
		if (self::MysqlConnect() === false)
			return false;
		$sql = 'update '.$this->tableName.' set MESSAGE=\''.$message.'\' where ID='.$idMsg;
		$res = mysql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = mysql_error();
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
		if (self::MysqlConnect() === false)
			return false;
		if (is_null($idMsg))
			$sql = 'select SB.ID,SB.FK_USER, SB.NICK, SB.MESSAGE, SB.TIME'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' order by ID desc limit '.$limit;
		else
			$sql = 'select SB.ID,SB.FK_USER, SB.NICK, SB.MESSAGE, SB.TIME'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' where SB.ID'.($up ? '>' : '<').$idMsg.' order by ID desc limit '.$limit;	
		$res = mysql_query($sql, self::$dbLink);
		if ($res === false){
			$this->Error = mysql_error();
			return false;
		}	
		if (mysql_num_rows($res) == 0)
			return null;
		$messages = array();	
		while($row = mysql_fetch_assoc($res)){		
			$ar = array(
					'TIME'=>strtotime($row['TIME']),
					'ID_USER'=>$row['FK_USER'],
					'NICK'=>$row['NICK'],
					'MESSAGE'=>$row['MESSAGE'],
					'ID' => $row['ID']
				);
			if (($ar['ID']%2)==0){
				$ar['COLOR']='8A8A88';
			} 
			if ($this->isExtraUser())
				foreach ($this->extraUser['FIELDS'] as $alias)
					$ar[$alias] = $row[$alias];
			$messages[] = $ar;		
		}
		return $messages;
	}
}
?>