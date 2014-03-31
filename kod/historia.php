<?PHP
	require_once("config.php");
	
  $smarty->assign('turns_counter',"OFF");
  $smarty->assign('main_panel_expand',true);
  $smarty->assign('main_panel','historia.tpl');
  $smarty->display('main.tpl');

?>
