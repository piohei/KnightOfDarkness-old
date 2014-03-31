<?php

defined('CONFIG') or die(__FILE__.' Wymaga zdefiniowanego pliku konfiguracyjengo');
require_once($CFG->katalogStrony."common.php");
//defined('SQL_DB') or die('Wymaga bazy danych');

class Zalogowani{


	static private function getQueryZalogowani(){
		global $CFG;
		return 'select P.login,P.ostatni_log,K.koalicja FROM '.TBL_PROFILE.' P JOIN '.TBL_LOGIN.' Z ON (Z.login = P.login) JOIN '.TBL_KINGDOM.' K ON (K.nazwa = P.login) WHERE P.ostatni_log + INTERVAL '.$CFG->czas_uznania_za_wylogowany.' SECOND >= NOW() order by ostatni_log desc';
	}

	static private function getQueryCountZalogowani(){
		global $CFG;
		return 'select count(*) as ile_zalogowanych FROM '.TBL_PROFILE.' P INNER JOIN '.TBL_LOGIN.' Z ON Z.login = P.login WHERE P.ostatni_log + INTERVAL '.$CFG->czas_uznania_za_wylogowany.' SECOND >= NOW() order by ostatni_log desc';
	}

	static public function getListaZalogowanych(){
		//		global $db;
		$asdasdasd = 1;
		$blad = NULL;
		$SQL = Zalogowani::getQueryZalogowani();
		$ret = mysql_query($SQL) or $blad=mysql_errno()." ".mysql_error()."<br>".$SQL."<br>";
		//		$db->sql_query($SQL);
		if (is_null($blad)){
			$i=0;
			while($row=mysql_fetch_array($ret)){
				//			while($row=$db->sql_fetchrow()){
				$zalogowani[$i] = $row;
				$i++;
			}
		} else {
			die($blad);
			$zalogowani['blad']=$blad;
		}
		return $zalogowani;
	}

	static public function ilezalogowanych(){
		//		global $db; co jest
//		return "";  
		$AasdasdasdasdA=0;
		$blad = NULL;
		$SQL = Zalogowani::getQueryCountZalogowani();
		$ret = mysql_query($SQL) or $blad=mysql_errno()." ".mysql_error()."<br>".$SQL."<br>";
		//		$db->sql_query($SQL );
		if (is_null($blad)){ 
			$row=mysql_fetch_array($ret);
			$ileZalogowanych = $row['ile_zalogowanych'];
			//			$ileZalogowanych = $db->sql_fetchfield('ile_zalogowanych');
		} else {
			die($blad);
			$ileZalogowanych['blad']=$blad;
		}
		return $ileZalogowanych;
	}
}


?>