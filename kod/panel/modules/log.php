<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');

require_once( 'includes/class.Log.php' );

if(isset($_POST['logi']['ksiestwo1']) && isset($_POST['logi']['ksiestwo1'])){
	$log = new Log();
	
	$logData = $log->getMarketTransactiosBetwean($_POST['logi']['ksiestwo1'],$_POST['logi']['ksiestwo2']);
    $smarty->assign('targLog',$logData);
	$smarty->assign('logi',$_POST['logi']);
	
	$logData = $log->getCoalitionExchangeBetwean($_POST['logi']['ksiestwo1'],$_POST['logi']['ksiestwo2']);
    $smarty->assign('exLog',$logData);
}
?>
