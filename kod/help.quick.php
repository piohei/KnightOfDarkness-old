<?php
require_once('config.php');

// ustawienie katalogu szablonów pomocy
$help_dir = $smarty->template_dir;
if($smarty->template_dir{strlen($smarty->template_dir)-1} == '/'){
    $help_dir .= 'help/';
}else{
    $help_dir .= '/help/';
}

// wybieranie pliku pomocy
if(file_exists("{$help_dir}{$_GET['qhf']}.tpl")){
    $smarty->assign('help_content', "{$help_dir}{$_GET['qhf']}.tpl");
    $smarty->assign('window_title', 'Strona Pomocy');

    // przetwarzanie ¿±dania
    $req = explode(',',$_GET['req']);
    foreach($req as $key => $val){
        $show[$val] = true;
    }
}else{
    $smarty->assign('help_content', 'nofound.tpl');
    $smarty->assign('window_title', 'Nie odnaleziono takiej strony!');
}

$smarty->assign('show', $show);
$smarty->display('help/quickhelp.tpl');
?>
