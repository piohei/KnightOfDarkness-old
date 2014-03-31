<?php
exit(0);
include('const.php');
include 'config.php';
require_once("funkcjeBazy.php");
require_once('lib/class.User.php');
otworz_polaczenie();
//header("Content-Type: text/plain\n\n");
/*
global $user_constraint;
$constraint = "[".
        chr($user_constraint['MESSAGEBOX_LIMIT']).
        chr($user_constraint['MESSAGEBOX_RAPORT']).
        chr($user_constraint['LOGO_ENABLED']).
        chr($user_constraint['MERKETSTAT_ENABLED']).
        chr($user_constraint['BOOK_LIMIT']).
        "]";
$q = "UPDATE PROFIL SET `constraint`='$constraint'";
print "QUERY: $q<br>";
print "MYSQL_RESULT: " .var_dump($r = mysql_query($q)) . "<br>";
print "MYSQL ERROR: " .mysql_error() ."<br><br>";
*/


$user = new User(NULL);
$user->auth_sid();
print_r($user->getConstraint());
?>