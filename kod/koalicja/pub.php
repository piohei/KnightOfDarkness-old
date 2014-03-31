<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('function.coalition.pub.php');

otworz_polaczenie();
$username = czyZalogowany();

if(!$coalition = coalition_pub_name($username)) exit(0);
$mesg_list = coalition_pub_fetch_mesg($coalition);
$smarty->assign('pub_mesg', $mesg_list);
$smarty->display('coalition.pub.tpl');
?>