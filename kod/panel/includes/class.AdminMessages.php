<?php
require_once($CFG->katalogStrony.'panel/includes/class.AdminLog.php');


class AdminMessages{
	static public function getAdminMessages($errors=array()){
		$sql = "SELECT * FROM ".TBL_ADMIN_MESSAGES." am ORDER BY date desc LIMIT 10";
		$res = mysql_query($sql) or $errors = array('type'=>'ERROR','test'=> "".__FILE__." ".__LINE__." blad bazy danych:".mysql_error());
		$admin_messages = array();
		while($row=mysql_fetch_array($res)){
			$admin_messages[] = $row;
		}
		return $admin_messages;
	}
	static public function addAdminMessage($login,$messageCreator,$message,$errors=array()){
		$messageCreator = mysql_real_escape_string($messageCreator);
//		$message = mysql_real_escape_string($message);
		$sql = "INSERT INTO ".TBL_ADMIN_MESSAGES." (login,wiadomosc) VALUES ('".$messageCreator."','".$message."')";
		$res = mysql_query($sql) or $errors[] = array('type'=>'ERROR','test'=> "".__FILE__." ".__LINE__." blad bazy danych:".mysql_error());
		AdminLog::addAdminLog_AddAdminMessage($login,$message);
	}
}

?>