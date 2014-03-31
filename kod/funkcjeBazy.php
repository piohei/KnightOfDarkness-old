<?php
/*============================================================================*/
/*                                                                            */
/*  Podstawowa obsluga bazy danych                                            */
/*                                                                            */
/*============================================================================*/


require_once('config.php');
require_once('parametry.php');


//-------------------------------------------------------- otworz_polaczenie ---
function otworz_polaczenie(){
	global $polaczenie;
	global $CFG;
	if (is_null($polaczenie)){
		$polaczenie = mysql_connect($CFG->adresBazy,
		$CFG->uzytkownik,
		$CFG->haslo);
		if(!$polaczenie){
			print 'Nie mo¿na uzyskaæ po³±czenia z baz± danych';
			exit(1);
		}else mysql_select_db($CFG->baza, $polaczenie);
		//    mysql_query("SET collation_connection = latin2_general_ci", $polaczenie);
		mysql_query("SET NAMES 'latin2'", $polaczenie);
		mysql_query("SET time_zone='+00:00'", $polaczenie);
	}
}

//------------------------------------------------------- zamknij_polaczenie ---
function zamknij_polaczenie(){
	global $polaczenie;

	mysql_close($polaczenie);
}
//---------------------------- tworzy tablice asocjacyjna z wyniku zapytania ---

function getAsoc($result){
	$i=0;
	$tmp = null;
	while($row = mysql_fetch_array($result)){
		$tmp[$i]=$row;
		$i++;
	}
	return $tmp;
}

?>
