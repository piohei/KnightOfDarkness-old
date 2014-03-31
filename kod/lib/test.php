<?php
exit;
require_once('../config.php');
require_once('../const.php');
require_once('../mysql.connection.php');
require_once('interface.Marker.php');
require_once('class.FileMarker.php');

FileMarker::remove('x');
//FileMarker::set('x', 129);
var_dump(FileMarker::exists('x'));
?>