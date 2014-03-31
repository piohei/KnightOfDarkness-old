<?php

class AdminLog {

	
	const LOGIN = 'LOGIN';
	const BAN = 'BAN';
	const UNBAN = 'UNBAN';
	const REMOVE = 'REMOVE';
	const ADD_ADMIN_MESSAGE = 'ADD_ADMIN_MESSAGE';
	const DEL_TURS = 'DEL_TURS';
	const INNE = 'OTHER';
	
	static function addAdminLog_DEL_TURS($login,$ileTur){
		AdminLog::addAdminLog($login,"$ileTur",AdminLog::DEL_TURS);
	}
	
	static function addAdminLog_Login($login){
		AdminLog::addAdminLog($login,"",AdminLog::LOGIN);
	}

	static function addAdminLog_Ban($login,$banned){
		AdminLog::addAdminLog($login,$banned,AdminLog::BAN);
	}

	static function addAdminLog_Unban($login,$unBanned){
		AdminLog::addAdminLog($login,$unBanned,AdminLog::UNBAN);
	}
	
	static function addAdminLog_Remove($login,$removed){
		AdminLog::addAdminLog($login,$removed,AdminLog::REMOVE);
	}
	
	static function addAdminLog_AddAdminMessage($login,$message){
		AdminLog::addAdminLog($login,substr($message,0,20)."...",AdminLog::ADD_ADMIN_MESSAGE);
	}
	
	/**
	 * Enter description here...
	 *
	 * @package
	 * @param timestamp $fromTimeStamp
	 * @return unknown
	 */
	static function getAdminLogs($fromTimeStamp = NULL){
		$adminLogs = array();
		$SQL = 'select * from '.TBL_ADMIN_LOG.'';
		if ($fromTimeStamp){
			$SQL.=" where date > '".$fromTimeStamp."'";
		}
		else
		{
		$SQL .= " ORDER BY date DESC LIMIT 50";	
		}
		$ret = mysql_query($SQL) or die ($SQL."<br>".mysql_error()."<br> jesli ten komuniakt bedzie sie powtarzal prosze go skopiowac i wys³aæ do admina (1)");
		while($row=mysql_fetch_array($ret)){
			$adminLogs[] = $row;
		}
		return $adminLogs;
	}

	private static function addAdminLog($login,$message,$type=INNE){
		$login = mysql_real_escape_string($login);
		$message = mysql_real_escape_string($message);
		$type = mysql_real_escape_string($type);
		$SQL = "insert into ".TBL_ADMIN_LOG." (login, message, type) values ('".$login."','".$message."','$type')";
		mysql_query($SQL) or die ($SQL."<br>".mysql_error()."<br> jesli ten komuniakt bedzie sie powtarzal prosze go skopiowac i wys³aæ do admina (2)");
	}
}


//update `PROFIL` set czy_aktywowane=0 where login in (select P.login login FROM `PROFIL` P left join `KSIESTWA` K on (P.login = K.nazwa) where P.czy_aktywowane = 1 and K.nazwa is NULL)
//update `PROFIL` set czy_aktywowane=0 where login in (select P.login login FROM `PROFIL` P left join `KSIESTWA` K on (P.login = K.nazwa) where P.czy_aktywowane = 1 and K.nazwa is NULL)
?>