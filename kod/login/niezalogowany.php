<?php
global $CFG;
global $smarty;
if (isset($CFG)){
	$path = $CFG->katalogStrony;
} else {
	$path = "../";
}
require_once($path.'config.php');

$smarty->assign('link_description', 'strona&nbsp;g³ówna');
$smarty->assign('link_href', $CFG->adresSerwera);
$smarty->assign('title', 'Knight of Darkness');
if (isset($niezalogowanyMessage)){
	$smarty->assign('message_text',$niezalogowanyMessage);
}else{
	switch($_GET['reason']){
		case 'cookie':
			// nie zalogowany z powodu braku cookie AUTH
			$smarty->assign('message_text', '<center>U¿ytkownik&nbsp;niezalogowany'.
            '<br><br>Spróbuj siê ponownie zalogowaæ. Je¶li to nie pomo¿e '.
            'sprawd¼ czy Twoja przegl±darka ma w³±czon± obs³ugê plików cookie.'.
            '<br><br>Je¶li nadal nie mo¿esz siê zalogowaæ zg³o¶ to na forum!</center>'
            );
            break;
		default:
			$smarty->assign('message_text', '<center>U¿ytkownik&nbsp;niezalogowany</center>');
			$smarty->assign('refresh_time', 2 );
			$smarty->assign('refresh_href', "URL=" . $CFG->adresSerwera);
	}
}
$smarty->display('page_message.tpl');
?>
