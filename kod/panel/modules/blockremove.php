<?php

require_once($CFG->katalogStrony."panel/includes/class.AdminLog.php");
require_once('../config.mailer.php');
require_once('../messages/class.MessageBox.php');
require_once('../param.constraint.php');
require_once('../function.register.php');

$INFO_MESSAGE = NULL;

function getBlockedUsers(){
	global $CFG;
	$SQL = "SELECT * FROM ". TBL_PROFILE .
        " LEFT JOIN ". TBL_KINGDOM .
        " ON " .TBL_PROFILE . ".login=".TBL_KINGDOM.".nazwa";
	$SQL .= " WHERE ".TBL_PROFILE.".property & ".USERPROPERTY_BLOCKED;
	$res = mysql_query($SQL) or die(__FILE__.":".__LINE__." blad sql");
	$ret = array();
	while($row = mysql_fetch_array($res)){
		$ret[] = $row;
	}
	return $ret;
}


if($_POST['user_to_block'] != ""){
	$user = new User($_POST['user_to_block']);
	$user->setProperty(USERPROPERTY_BLOCKED);
	$zapytanie = "delete from ".TBL_LOGIN." where login ='".$_POST['user_to_unblock']."';";
	$wynik = mysql_query($zapytanie) or die (__FILE__.":".__LINE__." ".mysql_error()." ".$zapytanie);
	AdminLog::addAdminLog_Ban($login,$user->getName());
}elseif($_POST['user_to_unblock'] != ""){
	$user = new User($_POST['user_to_unblock']);
	$user->unsetProperty(USERPROPERTY_BLOCKED);
	AdminLog::addAdminLog_Unban($login,$user->getName());
}elseif($_POST['user_to_remove'] != ""){
	if (checkRights(MODE_BLOCKREMOVE)){
		$user = new User($_POST['user_to_remove']);
		$user->remove();
		AdminLog::addAdminLog_Remove($login,$user->getName());
	}
}elseif($_POST['user_to_turs_modify'] != ""){
	if (checkRights(MODE_DELETE_TURS)){
		if (is_numeric($_POST['user_to_turs_modify_ile_tur'])){
			$ileTur = ((integer)$_POST['user_to_turs_modify_ile_tur']);
			if ($ileTur != 0){
				$ileTur = mysql_real_escape_string($ileTur);
				$user = mysql_real_escape_string($_POST['user_to_turs_modify']);
				
				$SQL = "UPDATE ".TBL_KINGDOM." SET tury = tury-$ileTur WHERE nazwa = '".$user."'";
				
				mysql_query($SQL) or die(__FILE__.":".__LINE__." ".mysql_error());
				AdminLog::addAdminLog_DEL_TURS($login,"$user DELETE $ileTur TURS");
			} else {
				$INFO_MESSAGE[]="Musisz podac wiecej ni¿ zero tur";
			}
		} else {
			$INFO_MESSAGE[]="Musisz podac warto¶æ liczbow±";
		}
	}
}elseif($_POST['activate_user'] != "")
{
	$result = register_activate($_POST['activate_user'], md5("{$_POST['activate_user']}a") );
	if($result == 2)
	{
		$kingdom = new User($_POST['activate_user']);
		$kingdom->setProperty(USERPROPERTY_VERIFIED);
	}
		
}



// wyswietlanie listy u¿ytkowników
$keyword = strtoupper($_POST['keyword']);
$sql_condition = "UPPER(".TBL_PROFILE.".".mysql_real_escape_string($_POST['field']).")".
    " LIKE '".mysql_real_escape_string($keyword)."'";
$sql_order = TBL_PROFILE.".login ASC";

$result = user_advsearch($sql_condition, $sql_order, mysql_real_escape_string($_POST['limit']));
$smarty->assign('count', $result['COUNT']);
$smarty->assign('mode_blockremove',hasRights(MODE_BLOCKREMOVE));
$smarty->assign('mode_del_turs',hasRights(MODE_DELETE_TURS));
$smarty->assign('INFO_MESSAGE',$INFO_MESSAGE);
unset($result['COUNT']);
if ($result){
	$smarty->assign('user_list', $result);
} else {
	$smarty->assign('user_list', getBlockedUsers());
}

?>