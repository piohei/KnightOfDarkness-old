<?php
	require_once('../config.php');
	require_once('../funkcjeBazy.php');
	
	//Tworzenie tablicy pol dla mapy
	$k=0;
	for ($i=0; $i<10; $i++) {
        for ($j=0; $j<10; $j++) {
            $pola[$k]['x']=$i;
            $pola[$k]['y']=$j;
            $pola[$k]['id']=$k;
            $k++;
        }
    }
	
	$smarty->assign('turns_counter',"OFF");
    $smarty->assign('main_panel_expand',true);
    
    
    $smarty->assign('map_background','tlo_mapa.jpg');
    $smarty->assign('map_width',10);
    $smarty->assign('map_height',10);
    
	$smarty->assign('main_panel','kod2/mapa/mapa.tpl');
	$smarty->assign('listaPol',$pola);
	
	
    $smarty->display('main.tpl');
?>
