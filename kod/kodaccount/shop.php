<?php
require_once('../config.php');
require_once('../const.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');

$user = User::createFromSession();

// wy¶wietlanie strony
$smarty->assign('main_panel_expand', true);
$smarty->assign('main_panel', 'expand.main1.tpl');
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');
$smarty->display('main.tpl');
?>