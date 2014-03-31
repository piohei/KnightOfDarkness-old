<?php
/**
 * Sterownik bazy danych dla ShoutBox.
 * 
 * @package MCM
 * @subpackage independent
 * @author Michal (mixxx) Macierzynki (email: michal at macierzynski dot net)
 * @copyright 2006-2007 Robert Nodzewski
 * @version 1.0 for ShoutBox ver. 1.1
 * @access public
 * @TODO: poprawic obslluge bledow
 */

/*

function sqlfix($s)
{
	return str_replace("'", "''", $s);
}

*/
class ShoutBoxDBMssql implements  ShoutBoxDB {
 
	private static $dbLink = null;
	private $tableName;
	private $extraUser;
	public $Error = null;

	public static function MssqlConnect(){
		if (self::$dbLink)
			return self::$dbLink;
		self::$dbLink = @mssql_connect('unikod.com', 'kod','0kap1mab2mak3');
		if (@mssql_select_db('shoutbox',self::$dbLink))
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
		if (self::MssqlConnect() === false)
			return false;
		$sql = 'insert into '.$this->tableName.' (FK_USER, NICK, MESSAGE) values ';
		$sql.= "(".($idUser ? (is_string($idUser) ? "'$idUser'" : $idUser) : 'null').", '".sqlfix($nick)."', '".sqlfix($message)."')";
//		debug($sql);
		$res = mssql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = 'add message error!';//mysql_error();
		$sql = 'SELECT @@IDENTITY as newid';
		$res = mssql_query($sql, self::$dbLink);
		$rs = mssql_fetch_assoc($res);
//		debug($rs['newid']);
		
		return $res ? $rs['newid'] : false;
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
		if (self::MssqlConnect() === false)
			return false;
		if ($onlyMessage)
			$sql = 'select MESSAGE from '.$this->tableName.' where ID='.$idMsg;
		else	
			$sql = 'select SB.ID,SB.FK_USER ID_USER, SB.NICK, SB.MESSAGE, SB.[TIME]'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' where SB.ID='.$idMsg;
		$res = mssql_query($sql, self::$dbLink);
		if ($res === false){
			$this->Error = 'get mess error!';//mssql_error();			
			return false;
		}	
		if (mssql_num_rows($res) === 0)
			return null;
		$message = mssql_fetch_assoc($res);
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
		if (self::MssqlConnect() === false)
			return false;
		$sql = 'delete from '.$this->tableName.' where ID='.$idMsg;
		$res = mssql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = 'delete mess error!';//mysql_error();		
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
		if (self::MssqlConnect() === false)
			return false;
		$sql = 'update '.$this->tableName.' set MESSAGE=\''.$message.'\' where ID='.$idMsg;
		$res = mssql_query($sql, self::$dbLink);
		if (!$res)
			$this->Error = 'update mess error!';//mysql_error();
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
		if (self::MssqlConnect() === false)
			return false;
		if (is_null($idMsg))
			$sql = 'select top 40 SB.ID,SB.FK_USER, SB.NICK, SB.MESSAGE, SB.[TIME]'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' order by ID desc ';
		else
			$sql = 'select top 40 SB.ID,SB.FK_USER, SB.NICK, SB.MESSAGE, SB.[TIME]'.$this->getExtraFieldsSql().' from '.$this->tableName.' SB'.$this->getExtraUserJoinSql().' where SB.ID'.($up ? '>' : '<').$idMsg.' order by ID desc ';	

//		debug($sql);
		$res = mssql_query($sql, self::$dbLink);
		if ($res === false){
			$this->Error = 'get messages error';//mysql_error();
			return false;
		}	
		if (mssql_num_rows($res) == 0)
			return null;
		$messages = array();	
		while($row = mssql_fetch_assoc($res)){		
			$ar = array(
					'TIME'=>strtotime($row['TIME']),
					'ID_USER'=>$row['FK_USER'],
					'NICK'=>$row['NICK'],
					'MESSAGE'=>$row['MESSAGE'],
					'ID' => $row['ID']
				);
			if ($this->isExtraUser())
				foreach ($this->extraUser['FIELDS'] as $alias)
					$ar[$alias] = $row[$alias];
			$messages[] = $ar;		
		}
		return $messages;
	}
}
?>