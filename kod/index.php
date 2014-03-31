<?php
//w celu zachowania jednolitego identyfikatora sesji
if(eregi("www.kod.dmkproject.net", $_SERVER["HTTP_HOST"])){
   header('Location: http://');
   exit;
}

require_once('config.php');
require_once("funkcjeBazy.php");
otworz_polaczenie();

$section = empty($_GET['section'])? NULL: $_GET['section'];
$body_template = "index.$section.tpl";
switch($section){
case 'about':
    $smarty->assign("player_quantity", infoIloscGraczy());
    $smarty->assign("loginform_action", "login/check.php");
    break;
case 'register':
    // generowanie kodu rejestracyjnego
    $_SESSION['code'] = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $smarty->assign("form_action", "register.php?mode=newuser");
    break;
case 'mypass':
    $smarty->assign("form_action", "register.php?mode=restorepass");
    break;
case 'promotion':
    break;
case 'stats':
    require_once('stats/stats.class.php');
    $stObj = new Stats();
    $smarty->assign("stats",$stObj->getStats());
    break;
case 'irc':
	header("Location:irc/irc.php");
case 'rules':
    $body_template = "index.rules.tpl";
    break;
default:
    $section = 'about';
    $body_template = "index.$section.tpl";
    $smarty->assign("player_quantity", infoIloscGraczy());
    $smarty->assign("loginform_action", "login/check.php");
}

$smarty->assign('body', $body_template);
$smarty->assign('section', $section);
$smarty->display("index.body.tpl");
?>
