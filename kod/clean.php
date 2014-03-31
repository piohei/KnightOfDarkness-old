<?php

if($_GET['key'] != 'ddffee'){
    header('Location: 404.shtml');
    exit(0);
}

require_once('config.php');
require_once('parametry.php');
require_once($smarty->compile_dir.'/koniec.php');



    // usuwanie u¿ytkowników dawno nie graj±cych
    require_once('const.php');
    require_once('mysql.connection.php');
    require_once("{$CFG->dir_lib}class.User.php");

    // usuwanie u¿ytkowników
    $q = "SELECT login FROM ". TBL_PROFILE ." WHERE (ostatni_log + INTERVAL 90 DAY) < NOW()";
    if($r = mysql_query($q)){
		$i=0;
        while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
            $kingdom = new User($row['login']);
$i++;
			print $i.$row['login']."<br>";
           
// $kingdom->remove();
        }
    }

?>
