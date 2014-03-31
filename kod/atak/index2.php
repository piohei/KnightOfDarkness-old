<?php
require_once('../config.php');


// definicje zak�adek
define('ATTACK_INPROGRESS',    1);
define('ATTACK_PLANNING',      2);


// ustawianie domy�lnej zak�adki
if($_GET['mode'] < 1 || $_GET['mode'] > 2){
    $mode = ATTACK_PLANNING;
}else{
    $mode = $_GET['mode'];
}


// obs�uga poszczeg�lnych zak�adek
if($mode == ATTACK_PLANNING){
    $smarty->assign('TEKST', 'planowanko');

}elseif($mode == ATTACK_INPROGRESS){

    $smarty->assign('TEKST', 'ataki w trakcie');
}


// wy�wietlanie storny
$smarty->assign('mode', $mode);
$smarty->assign('main_panel','attack.tpl');
$smarty->display('main.tpl');
?>