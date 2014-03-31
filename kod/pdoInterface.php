<?php

require_once('config.php');
require_once('parametry.php');

define ('POD_CONNECT',true);
function pdoConnect()
{
	global $CFG;
	
	$sql = 'mysql:host='.$CFG->adresBazy.';dbname='.$CFG->baza;
	
	$polaczenie = new PDO($sql, $CFG->uzytkownik, $CFG->haslo); 
	
	$sth = $polaczenie->prepare("SET CHARACTER SET 'latin2'");
	$sth->execute();
	 


	return($polaczenie);	 
}

?>