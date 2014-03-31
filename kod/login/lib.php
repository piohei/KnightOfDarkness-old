<?php

defined('CONFIG') or die('Wymaga zdefiniowanego pliku konfiguracyjengo');
//require_once(KATALOG_STRONY."common.php");
require_once($CFG->katalogStrony."common.php");
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");

define('AUTH','AUTH_TEST');


/*============================================================================*/

/*                                                                            */

/*  Obsluga logowania, wylogowania itp.                                       */

/*                                                                            */

/*============================================================================*/
function a(){
	echo 'aaaaaaaaa';
}




function zaloguj($login){
	global $PHPSESSID;
	$login_ok = true;
	$zapytanie = "delete from ".TBL_LOGIN." where login='".$login."';";
	$wynik = mysql_query($zapytanie);
	$zapytanie = "insert into ".TBL_LOGIN." values('".$login."','".$PHPSESSID."','{$_SERVER['REMOTE_ADDR']}',NULL);";
	$wynik = mysql_query($zapytanie) or die(__FILE__.":".__LINE__." ".mysql_error());

	$q = "UPDATE PROFIL SET ip='{$_SERVER['REMOTE_ADDR']}' ".
	   "WHERE login='$login'";
	mysql_query($q);
	$_SESSION['login']=$login;
}





//------------------------------------------------------------ czyZalogowany ---

// Jesli uzytkownik jest prawidlowo zalogowany zwraca jego login w przeciwnym

// wypadku konczy wykonywanie skryptu.

function czyZalogowany(){
	global $PHPSESSID;
	global $_SESSION;
	global $CFG;
	$login = NULL;
	if(empty($_COOKIE[AUTH])){
		header("Location: {$CFG->adresSerwera}login/niezalogowany.php?reason=cookie");
		exit(0);
	}

	if($_SESSION['login']!=''){
		ustaw_date_logu2($_SESSION['login']);
		$login = $_SESSION['login'];
	} else {
		//$zapytanie = "SELECT login FROM ".TBL_LOGIN." WHERE sesionId ='".$PHPSESSID."' and ip='{$_SERVER['REMOTE_ADDR']}';";
		$zapytanie = "SELECT login FROM ".TBL_LOGIN." WHERE sesionId ='".$PHPSESSID."'";
		$wynik = mysql_query($zapytanie);
		if($wynik && mysql_num_rows($wynik)>0){
			$wiersz = mysql_fetch_array($wynik);
			ustaw_date_logu2($wiersz['login']);
			$_SESSION['login'] = $wiersz['login'];
			return $wiersz['login'];
		}else{
			include($CFG->katalogStrony."login/niezalogowany.php");
			exit(1);
		}
	}
	Zastepstwa::logoutIfZastepstwoWithCheckFirstUseFlag($login,$_SERVER['REMOTE_ADDR']);
	return $login;
}





function wyloguj(){

	global $polaczenie;

	global $PHPSESSID;

	$zapytanie = "delete from ".TBL_LOGIN." where sesionId ='".$PHPSESSID."' or login ='{$_SESSION['login']}';";
	$_SESSION['login'] ='';

	$wynik = mysql_query($zapytanie, $polaczenie);

}

//---------------------------------------------------------------------------

//Sprawdza czy jest ksiestwo o podanej nazwie i hasle

//0-nie ma ksiestwa 1-jest ale jeszcze nie aktywowane 2- jest aktywowane



function sprawdzHasloLogin($login,$haslo){

	global $polaczenie;

	$zapytanie = "select czy_aktywowane from ".TBL_PROFILE." where login = '$login' and haslo='".md5($haslo)."';";

	$wynik = mysql_query($zapytanie, $polaczenie);

	$wiersz = mysql_fetch_array($wynik);

	if(mysql_num_rows($wynik)==1){

		if($wiersz["czy_aktywowane"]==0)

		return 1;

		if($wiersz["czy_aktywowane"]==1)

		return 2;

	}

	else return 0;



}

function infoIloscGraczy(){
	global $polaczenie;
	global $CFG;

	$SQL="SELECT liczba_ksiestw FROM INFO";
	$wynik=mysql_query($SQL,$polaczenie);
	$wiersz = mysql_fetch_array($wynik);
	$tmp['liczba_ksiestw']=$wiersz['liczba_ksiestw'];

	$SQL = 'SELECT COUNT(*) AS ile_zalogowanych FROM PROFIL P INNER JOIN ZALOGOWANI Z ON Z.login LIKE BINARY P.login WHERE P.ostatni_log + INTERVAL '.$CFG->czas_uznania_za_wylogowany.' SECOND >= NOW()';
	$wynik=mysql_query($SQL,$polaczenie);
	$wiersz = mysql_fetch_array($wynik);
	$tmp['ile_zalogowanych']=$wiersz['ile_zalogowanych'];
	return $tmp;

}

//-----------------------------------------------------------------------

function ustaw_date_logu2($login){
	$zapytanie="update PROFIL set ostatni_log=now() where login='".$login."';";
	mysql_query($zapytanie);
}
function ustaw_date_logu(){
	global $polaczenie;
	global $login;
	$zapytanie="update PROFIL set ostatni_log=now() where login='".$login."';";
	mysql_query($zapytanie,$polaczenie);
}

//-----------------------------------------------------------------------

?>
