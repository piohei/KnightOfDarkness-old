<?php
if (!isset($_SESSION)){
	session_start();
}
$PHPSESSID = session_id();
/**
 * Tymczasowo tu umieszczone pokazywanie/ukrywanie shoutboxa
 */

if (isset($_GET['pokaz_shoutbox'])){
	$_SESSION['pokaz_shoutbox']=$_GET['pokaz_shoutbox'];
}
header("Content-type: text/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?><zmienna____></zmienna____>';
?>