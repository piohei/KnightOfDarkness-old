<?php
/**
 * KLASA OBSLUGUJ¡CA LOGOWANIE LOGOWANIA U¯YTKOWNIKÓW
 */
if ($CFG->katalogStrony){
	require_once($CFG->katalogStrony."common.php");
} else {
	require_once("../../common.php");
}

class LogowaniaLog {

	const NORMAL = 'NORMAL';
	const BLOCKED = 'BLOCKED';
	const NO_USER = 'NO_USER'; 	// NARAZIE NIE WYKORZYSTYWANE
	const BAD_PASS = 'BAD_PASS';
	const NOT_ACTIVE = 'NOT_ACTIVE';
	const OTHER = 'OTHER';
	const ZASTEPSTWO = 'ZASTEPSTWO';
	const BLAD_PRZELOGOWANIA = 'BLAD_PRZELOGOWANIA';

	static function addLogowanieBLAD_PRZELOGOWANIA($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::BLAD_PRZELOGOWANIA,$sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieNO_USER($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::NO_USER,$sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieNORMAL($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::NORMAL,$sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp, $host);
	}

	static function addLogowanieBLOCKED($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::BLOCKED, $sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieBAD_PASS($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::BAD_PASS,$sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieNOT_ACTIVE($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::NOT_ACTIVE, $sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieOTHER($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::OTHER, $sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	static function addLogowanieZASTEPSTWO($sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $host=NULL){
		LogowaniaLog::addLogowanie(LogowaniaLog::ZASTEPSTWO, $sessionid, $login, $ip, $cookieTimeDate, $cookieLogin, $cookieIp);
	}

	private static function addLogowanie($type, $sessionid, $login, $ip, $cookieTimeDate=NULL, $cookieLogin=NULL, $cookieIp=NULL, $proxyIp = NULL, $host = NULL){
		$login = mysql_real_escape_string($login);
		$SQL = "insert into ".TBL_LOGIN_LOG." (type,sessionid,login,ip,cookie_date,cookie_login,cookie_ip,proxy,name) ";
		$SQL .=" values ('$type','$sessionid','$login','$ip','".date('Y-m-d H:i:s',$cookieTimeDate)."','$cookieLogin','$cookieIp', '$proxyIP', '$host') ";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
	}

	static function getLogowania($fromDate=NULL,$toDate=NULL,$loginArray=NULL,$error=NULL){
		$fromDate = mysql_real_escape_string($fromDate);
		$toDate = mysql_real_escape_string($toDate);
		$SQL = "select * from ".TBL_LOGIN_LOG."  where 1=1 ";
		if (!empty($fromDate)){
			$SQL .= " and date > '".$fromDate."' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and date < '".$toDate."' ";
		}
		if (!empty($loginArray)){
			$SQL .= " and login in (".toSQLStringArray($loginArray).") ";
		}
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		return my_fecht_assoc($res);
	}

	static function getLogowaniaNoCookie($fromDate=NULL,$toDate=NULL,$loginArray=NULL,$olnyNORMAL=NULL,$error=NULL){
		$fromDate = mysql_real_escape_string($fromDate);
		$toDate = mysql_real_escape_string($toDate);
		$SQL = "select * from ".TBL_LOGIN_LOG."  where (cookie_login is NULL or cookie_login = '')";
		if (!empty($fromDate)){
			$SQL .= " and date >= '".$fromDate."' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and date <= '".$toDate."' ";
		}
		if (!empty($loginArray)){
			$SQL .= " and login in (".toSQLStringArray($loginArray).") ";
		}
		if (!empty($olnyNORMAL)){
			$SQL .= " and type = '".LogowaniaLog::NORMAL."' ";
		}
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		return my_fecht_assoc($res);
	}

	static function getLogowaniaSameIP($fromDate=NULL,$toDate=NULL,$loginArray=NULL,$BAD_PASS_SUPPORT=false,$error=NULL){
		$fromDate = mysql_real_escape_string($fromDate);
		$toDate = mysql_real_escape_string($toDate);
		$SQL = "select L1.ip,L1.login,count(*) as ile from ".TBL_LOGIN_LOG." L1 join (";
		$SQL.= "select ip from (";
		$SQL.= "select distinct ip,login from ".TBL_LOGIN_LOG." where 1=1 ";
		if ($BAD_PASS_SUPPORT){
			$SQL.= " and type='NORMAL' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and date >= '".$fromDate."' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and date <= '".$toDate."' ";
		}
		if (!empty($loginArray)){
			$SQL .= " and login in (".toSQLStringArray($loginArray).") ";
		}
		$SQL.= " group by ip, login ";
		$SQL.= ") LL group by ip having (count(*)>1) ";
		$SQL.= " ) as L2 on (L1.ip = L2.ip) ";
		$SQL.= " where type='NORMAL' ";
		if (!empty($fromDate)){
			$SQL .= " and L1.date >= '".$fromDate."' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and L1.date <= '".$toDate."' ";
		}
		$SQL.= " group by L1.ip, L1.login ";
		$SQL.= " order by L1.ip, L1.login";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		return my_fecht_assoc($res);
	}


}

?>