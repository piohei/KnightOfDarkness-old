<?php

//if (!defined('PROJECT_ROOT_PATH')){
//	if (defined('KATALOG_STRONY')){
//		define('PROJECT_ROOT_PATH',KATALOG_STRONY);
//	} else {
//		define('PROJECT_ROOT_PATH','./');
//	}
//}

//require_once(PROJECT_ROOT_PATH.'const.php');
//require_once(PROJECT_ROOT_PATH.'config.php');
//require_once(PROJECT_ROOT_PATH.'parametry.php');
//require_once(PROJECT_ROOT_PATH.'version.php');
////require_once(PROJECT_ROOT_PATH.'db/class.sql_db.php');
//require_once(PROJECT_ROOT_PATH.'login/lib.php');
//require_once(PROJECT_ROOT_PATH.'funkcjeBazy.php');

require_once($CFG->katalogStrony.'const.php');
require_once($CFG->katalogStrony.'config.php');
require_once($CFG->katalogStrony.'parametry.php');
require_once($CFG->katalogStrony.'version.php');
//require_once($CFG->katalogStrony.'db/class.sql_db.php');
require_once($CFG->katalogStrony.'login/lib.php');
require_once($CFG->katalogStrony.'funkcjeBazy.php');


//define('SQL_DB',true);

//$db = new sql_db($CFG->adresBazy,$CFG->uzytkownik,$CFG->haslo,$CFG->baza);
//if (! $db){
//	die('Nie moge polaczyc sie z baza danych');
//}
//$db->sql_query("SET NAMES 'latin2'");

otworz_polaczenie();

function my_fecht_assoc($result){
	$retArray = array();
	while($row=mysql_fetch_assoc($result)){
		$retArray[] = $row;
	}
	return $retArray;
}

function toSQLStringArray($stringArray){
	$ret = NULL;
	if (!empty($stringArray)) {
		foreach ($stringArray as $item) {
			$ret.="'$item',";
		}
		$ret = substr($ret,0,strlen($ret)-1);
	}
	return $ret;
}

function getNiezabudowanaZiemia($info){
	return $info["ziemia"]-$info['domy']-$info['warsztaty']
	-$info['wiezyczki']-$info['koszary']-$info['kopalnie_zlota']
	-$info['kopalnie_zelaza']-$info['farmy']-$info['gildie']
	-$info['straznice']-$info['rynki']-$info['zamek'];
}

?>