<?php

require_once( 'includes/class.Graph_II.php' );
require_once( 'includes/class.LogowaniaLog.php' );
require_once( 'includes/class.Log.php' );

$mess = "";

if( !($_POST['analyse']) ){
	$smarty->assign('fromDate',date('Y-m-d',time()-60*60*24*  1  ));
	$smarty->assign('toDate',date('Y-m-d',time()+60*60*24*  1  ));
	$smarty->assign('noCookieOlnyNORMAL',0);
	$smarty->assign('suspects',NULL);
	$smarty->assign('olnyBetweenSuspects',1);
	$smarty->assign('BAD_PASS_SUPPORT',1);
} else {
	$log = new Log();
	$fromDate = $_POST['fromDate'];
	$toDate = $_POST['toDate'];
	$suspects = $_POST['suspects'];
	$noCookieOlnyNORMAL = isset($_POST['noCookieOlnyNORMAL']);
	isset($_GET['suspects']) AND $suspects = $_GET['suspects'];
	$olnyBetweenSuspects = isset($_POST['olnyBetweenSuspects']);
	$BAD_PASS_SUPPORT = isset($_POST['BAD_PASS_SUPPORT']);
	$noCookieOlnyNORMAL = $BAD_PASS_SUPPORT;
	
	$smarty->assign('fromDate',$fromDate);
	$smarty->assign('toDate',$toDate);
	$smarty->assign('noCookieOlnyNORMAL',$noCookieOlnyNORMAL);
	$smarty->assign('suspects',$suspects);
	$smarty->assign('olnyBetweenSuspects',$olnyBetweenSuspects);
	$smarty->assign('BAD_PASS_SUPPORT',$BAD_PASS_SUPPORT);
	
	if (strlen(trim($suspects))!=0){
		$suspects = explode(',',$suspects);
		foreach ($suspects as $cnt=>$suspect) {
			$suspects[$cnt]=trim($suspect);
		}
	} else {
		$suspects = NULL;
	}

//	print_r($suspects);
//	var_dump($suspects);
//	var_dump(empty($suspects));
	$cookieGaph = new Graph();
	$sameIPGraph = new Graph();
	$logowania = LogowaniaLog::getLogowania($fromDate,$toDate,$suspects);
	$mess .= count($logowania);
	foreach( $logowania as $logowanie){
		//		$mess.= "<br> ".$logowanie['id_login_log']." ".$logowanie['date']." ";
		//		print_r($logowanie);
		$logowanie['sessionid']=md5($logowanie['sessionid']);
		$logowanie['color_sessionid']=substr($logowanie['sessionid'],0,6);
		$coloredLogowania[]=$logowanie;

		if( ($BAD_PASS_SUPPORT && strcmp($logowanie['type'],'NORMAL')==0 || !$BAD_PASS_SUPPORT) AND strlen($logowanie['cookie_login'])!=0 AND strcmp($logowanie['login'],$logowanie['cookie_login'])!=0 ){
			//			$l[]=$logowanie;
			$cookieGaph->addNode( $logowanie['login'] ); // nazwa pierwszego konta
			$cookieGaph->addNode( $logowanie['cookie_login'] ); // nazwa drugiego konta
			$cookieGaph->addEdge( $logowanie['cookie_login'],  $logowanie['login']); // po³±czenie kont krawêdzi± w grafie
		}
	}
	$sameIP = LogowaniaLog::getLogowaniaSameIP($fromDate,$toDate,$suspects,$BAD_PASS_SUPPORT);
	$colored_sameIP = array();
	foreach( $sameIP as $item){
		$item['color_login']=substr(md5($item['login']),0,6);
		$item['sessionid']=md5($item['sessionid']);
		$colored_sameIP[]=$item;
	}
	foreach( $colored_sameIP as $item){
		$sameIPGraph->addNode($item['ip']);
		$sameIPGraph->addNode($item['login']);
		$sameIPGraph->addEdge($item['ip'],$item['login']);
	}
	if (!empty($suspects)){
		$targLog = $log->getMarketTransactions($fromDate,$toDate,$suspects,$olnyBetweenSuspects);
		$smarty->assign('targLog',$targLog);
		$exLog = $log->getCoalitionExchange($fromDate,$toDate,$suspects,$olnyBetweenSuspects);
	    $smarty->assign('exLog',$exLog);
	}
	$noCookieLogowania = LogowaniaLog::getLogowaniaNoCookie($fromDate,$toDate,$suspects,$noCookieOlnyNORMAL);
	if (!empty($noCookieLogowania)){
		$allNoCookieLogins = "";
		foreach( $noCookieLogowania as $item){
			if (strpos($allNoCookieLogins,$item['login']) === false){
				if (strlen($allNoCookieLogins)===0){
					$allNoCookieLogins = $item['login'];	
				} else {
					$allNoCookieLogins .=','.$item['login'];	
				}
			}
		}
		$smarty->assign('allNoCookieLogins',$allNoCookieLogins);
	}
	//print count( $multi );
	$smarty->assign( 'multi', $cookieGaph->extractCoherentGraphs() );
	$smarty->assign( 'logowania',$coloredLogowania );
	$smarty->assign( 'logowaniaBezCookie', $noCookieLogowania );
	$smarty->assign( 'kontaUsuniete',$log->getDeletedKingdom($fromDate,$toDate));



	$smarty->assign( 'multiIP', $sameIPGraph->extractCoherentGraphs() );

	$smarty->assign( 'logowaniaTenSamIP', $colored_sameIP );
	//print "<pre>";
	//print_r($multi);

}

$smarty->assign( 'message',  $mess);
// generowanie wyj¶cia

?>