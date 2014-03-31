<?php
global $CFG;
global $smarty;
if (isset($CFG)){
	$path = $CFG->katalogStrony;
} else {
	$path = "../";
}
require_once($path.'config.php');

$smarty->assign('link_description', 'strona&nbsp;g��wna');
$smarty->assign('link_href', $CFG->adresSerwera);
$smarty->assign('title', 'Knight of Darkness');
if (isset($niezalogowanyMessage)){
	$smarty->assign('message_text',$niezalogowanyMessage);
}else{
	switch($_GET['reason']){
		case 'cookie':
			// nie zalogowany z powodu braku cookie AUTH
			$smarty->assign('message_text', '<center>U�ytkownik&nbsp;niezalogowany'.
            '<br><br>Spr�buj si� ponownie zalogowa�. Je�li to nie pomo�e '.
            'sprawd� czy Twoja przegl�darka ma w��czon� obs�ug� plik�w cookie.'.
            '<br><br>Je�li nadal nie mo�esz si� zalogowa� zg�o� to na forum!</center>'
            );
            break;
		default:
			$smarty->assign('message_text', '<center>U�ytkownik&nbsp;niezalogowany</center>');
			$smarty->assign('refresh_time', 2 );
			$smarty->assign('refresh_href', "URL=" . $CFG->adresSerwera);
	}
}
$smarty->display('page_message.tpl');
?>
