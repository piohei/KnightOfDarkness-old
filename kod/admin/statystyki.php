<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../login/lib.php');
require_once('../sondy/funkcje_sonda.php');
require_once('../funkcje_infoOKsiestwie.php');

otworz_polaczenie();
$login = czyZalogowany();
if(czyAdmin() != 1){
    header('Location: ../zalogowany.php');
    exit(0);
}
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');
$smarty->assign('tytul', 'Statystyki');
$smarty->assign('left_panel', 'admin/admin_left_panel.tpl');
$smarty->assign('main_panel', 'admin/admin_statystyki.tpl');
$smarty->display('main.tpl');
zamknij_polaczenie();

?>
