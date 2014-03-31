<?php 
require_once('const.php');
require_once('common.functions.php');
require_once('../funkcjeBazy.php');

require_once('../const.php');
require_once('../config.php');
require_once('../mysql.connection.php');
require_once('../pdoInterface.php') ;
require_once('../common.php');
 
otworz_polaczenie();
$login = czyZalogowany();
if (strcmp($login,'DrthKwas' )==0 || strcmp($login,'bogwiedz') == 0 || strcmp($login,'Albertina') == 0)
{ 
	$rights[MODE_MULTI_ANALYSER_II]=1;
	$rights[MODE_BLOCK]=1;
	$rights[MODE_BLOCKREMOVE]=1;
	$rights[MODE_CONSTRAINT_MANAGER]=1;
	$rights[MODE_LOG]=1;
	$rights[MODE_SMS]=1;
	$rights[MODE_MULTI_ANALYSER]=1;
	$rights[MODE_ADMIN_MESSAGES]=1;
	$rights[MODE_SEARCH]=1;
	$rights[MODE_ADMIN_LOGS]=1; 
	$rights[MODE_DELETE_TURS]=1;
	$rights[MODE_ACTIVATE_ACC]=1;
	$rights[MODE_BS_MANAGE]=1;
	$rights[MODE_TO_DO] = 1;
}

else 
{
	exit;
}


function hasRights($module){
	global $rights; 
	if(!isset($rights[$module])){
		return false;
	}
	return true;

}

function checkRights($module){
	global $_MESSAGE;
	global $rights;
	if(! hasRights($module)){
		$_MESSAGE[0]['type'] = "ERROR";
		$_MESSAGE[0]['text']="Brak wymaganych uprawnie�";
		return false; 
	}
	return true;

}
// obs�uga akcji menu
$display = 'index.tpl';
if(isset($_GET['mode']) && is_numeric($_GET['mode'])){

	$panel = 'default.tpl'; // panel domy�lny

	switch($_GET['mode']){
		case MODE_BLOCKREMOVE: 
		case MODE_BLOCK:
			if (hasRights(MODE_BLOCKREMOVE) || hasRights(MODE_BLOCK)){
				$panel = 'panel.blockremove.tpl';
				require_once("{$CFG->katalogStrony}lib/class.User.php");
				require_once('modules/blockremove.php');
			} else {
				$_MESSAGE[0]['type'] = "ERROR";
				$_MESSAGE[0]['text']="Brak wymaganych uprawnie�";
			}
			break;
		case MODE_CONSTRAINT_MANAGER:
			if (checkRights(MODE_CONSTRAINT_MANAGER)){
				$panel = 'panel.constraint.manager.tpl';
				require_once('modules/constraint.manager.php');
			}
			break;
		case MODE_LOG:
			if (checkRights(MODE_LOG)){
				$panel = 'panel.log.tpl';
				require_once('modules/log.php');
			}
			break;
		case MODE_SMS:
			if(checkRights(MODE_SMS)){
				$panel = 'panel.sms.tpl';
				require_once("{$CFG->katalogStrony}lib/class.SmsCode.php");
				require_once('modules/sms.php');
			}
			break;
		case MODE_MULTI_ANALYSER:
			if(checkRights(MODE_MULTI_ANALYSER)){
				$panel = 'panel.multianalyser.tpl';
				require( 'modules/multi.analyser.php' );
			}
			break;
		case MODE_ADMIN_MESSAGES:
			if(checkRights(MODE_ADMIN_MESSAGES)){
				$panel = 'panel.admin_messages.tpl';
				require( 'modules/admin_messages.php' );
			}
			break;
		case MODE_ADMIN_LOGS:
			if(checkRights(MODE_ADMIN_LOGS)){
				$panel = 'panel.admin_logs.tpl';
				require( 'modules/admin_logs.php' );
			}
			break;
		case MODE_MULTI_ANALYSER_II:
			if(checkRights(MODE_MULTI_ANALYSER_II)){
				$panel = 'panel.MH_II.tpl';
				require( 'modules/MH_II.php' );
			}
			break;
		case MODE_BS_MANAGE:
			if(checkRights(MODE_BS_MANAGE))
			{
				$panel = 'panel.bs_manage.tpl';
				require('modules/BS_manage.php');
			}
			break;
		case MODE_TO_DO :
			if(checkRights(MODE_TO_DO))
			{
				$panel = 'panel.todo.tpl';
				require('modules/todo.php');
			}
			break;
		default:
			break;
	}

	if(empty($_MESSAGE)){
		$smarty->assign('panel', $panel);
	}else{
		$smarty->assign('_MESSAGE', $_MESSAGE);
		$smarty->assign('panel', 'panel.messagebox.tpl');
	}
}

if(checkRights(MODE_ACTIVATE_ACC))
	$smarty->assign('mode_activate','true');
	
$smarty->assign('pokaz_admin_shoutbox','tak');
$smarty->template_dir = $CFG->katalogStrony . 'panel/tpl';
$smarty->display($display);

?>
