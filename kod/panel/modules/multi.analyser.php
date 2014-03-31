<?php
require_once( 'includes/class.Graph_II.php' );

// lista plik�w log do analizy
$logFileListToAnalyse = (array)$_POST['logFileListToAnalyse'];


// pobiera list� plik�w z lgami logowania
$logFileList = array();
$dh  = opendir( 'log' );
while( false !== ($fileName = readdir($dh)) ){
  if( strpos($fileName, 'cookie_auth.log') !== false ){
    list( $name, $ext, $time ) = explode( '.', $fileName );
    $logFileList[] = array(
      $name.'.'.$ext,
      $time ? date('d.m.Y H:i:s', (int)$time) : NULL,
      $fileName );
  }
}


if( $_POST['analyse'] ){
  if( empty($logFileListToAnalyse) ){
    $_MESSAGE[] = array(
      'type' => 'ERROR',
      'text' => 'Nie wybrano plik�w do analizy.');

  }else{
  
    // odczyt plik�w
    
    $mainGraph = new Graph();
    $totalLinesRead = 0; // liczba przeczytanych linii z plik�w log
    foreach( $logFileListToAnalyse as $fileName ){
      if( file_exists('log/'.$fileName) ){
        $fileLines = file( 'log/'.$fileName );
        $totalLinesRead += count( $fileLines );
        foreach( $fileLines as $line ){
          preg_match('/(\d{4}-\d{2}-\d{2}) (\d{2}:\d{2}:\d{2})\s+([a-z0-9_]+) \[(\d+\.\d+\.\d+\.\d+)\]\s+>\s+([a-z0-9_]+) \[(\d+\.\d+\.\d+\.\d+)\]/i', $line, $data);
          if( $data ){
             $mainGraph->addNode( $data[3] ); // nazwa pierwszego konta
             $mainGraph->addNode( $data[5] ); // nazwa drugiego konta
             $mainGraph->addEdge( $data[3], $data[5] ); // po��czenie kont kraw�dzi� w grafie
          }
        }
      }
    }
    $multi = $mainGraph->extractCoherentGraphs();
    //print count( $multi );
    $smarty->assign( 'multi', $multi );
    //print "<pre>";
    //print_r($multi);
    
  }
}

// generowanie wyj�cia
$smarty->assign( 'logFileListToAnalyse', $logFileListToAnalyse );
$smarty->assign( 'logFileList', $logFileList );
?>