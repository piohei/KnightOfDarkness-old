<?php
 require_once('../const.php');
 require_once('../config.php'); 
 require_once('../lib/class.User.php');
 require_once('class.MessageBox.php');

    $none = new User(NULL);
			$mBox = new MessageBox($none);
			$recipient = new User('DrthKwas');
			$mBox->sendBeginnersMessage($recipient);
			
?>