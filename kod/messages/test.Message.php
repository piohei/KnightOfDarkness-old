<?php
exit;
include '../const.php';
include '../config.php';
include '../lib/class.User.php';
include 'class.MessageBox.php';
include '../mysql.connection.php';
include '../lib/class.RaportParser.php';
//header("Content-Type: text/plain");

$user = new User('Cartagina');
$mBox = new MessageBox($user);
print $mBox->count(MESSAGE_STANDARD) . "<br>";
var_dump($mBox->existsUnread());
?>