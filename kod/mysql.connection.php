<?php
/**
 * Po zainkludowaniu tego pliku mamy aktywne po��czenie z baz� danych.
 * Identyfikator po��czenia to: $mysql_connection.
 * @author Micha� Kozak
 */
 
defined('CONFIG') or die('mysql.connection.php require config.php');

// ��czenie z serweram mysql
$mysql_connection = mysql_connect(
        $CFG->adresBazy,
        $CFG->uzytkownik,
        $CFG->haslo
    );
    
// wyb�r bazy danych
mysql_select_db($CFG->baza, $mysql_connection) or
die('Connection to database refused');

mysql_query("SET NAMES 'latin2'", $mysql_connection);
?>
