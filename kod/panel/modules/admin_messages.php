<?php
$tmp='';

global $CFG;
require_once($CFG->katalogStrony.'panel/includes/class.AdminMessages.php');

foreach ($_POST as $k=>$v) {
	$tmp.="$k = $v <br>";
}
$smarty->assign('postmess', $tmp);

if (isset($_POST['add_new_admin_message'])){
//	$message = mysql_real_escape_string($_POST['admin_message']);
	$message = ($_POST['admin_message']);
	$loginM = mysql_real_escape_string($_POST['login']);
	AdminMessages::addAdminMessage($login,$loginM,$message,$_MESSAGE);
}


$admin_messages = AdminMessages::getAdminMessages($_MESSAGE);
$smarty->assign('admin_messages',$admin_messages);
$smarty->assign('login',$login);
//if($_POST['user_to_block'] != ""){
//
//    $user = new User($_POST['user_to_block']);
//    $user->setProperty(USERPROPERTY_BLOCKED);
//
//}elseif($_POST['user_to_unblock'] != ""){
//
//    $user = new User($_POST['user_to_unblock']);
//    $user->unsetProperty(USERPROPERTY_BLOCKED);
//
//}elseif($_POST['user_to_remove'] != ""){
//
//    $user = new User($_POST['user_to_remove']);
//    $user->remove();
//}
//
//
//
//// wyswietlanie listy u¿ytkowników
//$keyword = strtoupper($_POST['keyword']);
//$sql_condition = "UPPER(".TBL_PROFILE.".{$_POST['field']})".
//    " LIKE '$keyword'";
//$sql_order = TBL_PROFILE.".login ASC";
//
//$result = user_advsearch($sql_condition, $sql_order, $_POST['limit']);
//$smarty->assign('count', $result['COUNT']);
//unset($result['COUNT']);
//$smarty->assign('user_list', $result);

?>