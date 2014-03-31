<?php

require_once('../config.php');
require_once('../parametry.php');
require_once("../lib/class.User.php");
require_once('../mysql.connection.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

$smarty->assign('left_panel', 'help/menu.tpl');
switch($_GET["strona"]){
  case 1:
    $smarty->assign('main_panel', 'help/zaleznosci.tpl');
    $smarty->assign('tytul','Zale¿no¶ci');
  break;
  case 'opisyBudynkow':
    $smarty->assign('porter', $porter);
    $smarty->assign('main_panel', 'help/budynkiOpisy.tpl');
    $smarty->assign('tytul','Budynki (opisy)');
  break;
  case 'budowa':
    $smarty->assign('main_panel', 'help/budowa.tpl');
    $smarty->assign('tytul','Budowa');
  break;
  
  case 'moraleOpis':
    $smarty->assign('main_panel', 'help/moraleOpis.tpl');
    $smarty->assign('tytul','Morale');
  break;
  
  case 'moraleKons':
    $smarty->assign('main_panel', 'help/moraleKons.tpl');
    $smarty->assign('tytul','Morale');
  break;
  
  case 'podatekOpis':
    $smarty->assign('main_panel', 'help/podatekOpis.tpl');
    $smarty->assign('tytul','Morale');
  break;
  
  case 'podatekKons':
    $smarty->assign('main_panel', 'help/podatekKons.tpl');
    $smarty->assign('tytul','Morale');
  break;
  
  case 'poziomOpis':
    $smarty->assign('main_panel', 'help/poziomOpis.tpl');
    $smarty->assign('tytul','Poziom bezpieczeñstwa');
  break;
  
  case 'poziomKons':
    $smarty->assign('main_panel', 'help/poziomKons.tpl');
    $smarty->assign('tytul','Poziom bezpieczeñstwa');
  break;
  
  case 'atakFazy':
    $smarty->assign('main_panel', 'help/atakFazy.tpl');
    $smarty->assign('tytul','Fazy ataku');
  break;
  
  case 'atakSzpiedzy':
    $smarty->assign('main_panel', 'help/atakSzpiedzy.tpl');
    $smarty->assign('tytul','Atak szpiegowski');
  break;
    
  case 'atakKoszt':
    $smarty->assign('main_panel', 'help/atakKoszt.tpl');
    $smarty->assign('tytul','Koszt ataku');
  break;
  
  case 'atakKons':
    $smarty->assign('main_panel', 'help/atakKons.tpl');
    $smarty->assign('tytul','Konsekwencje ataku');
  break;
  
  case 'atakJednostki':
    $smarty->assign('main_panel', 'help/atakJednostki.tpl');
    $smarty->assign('tytul','Opis jednostek');
  break;
  case 'koalicja':
    $smarty->assign('porter', $porter);
    $smarty->assign('main_panel', 'help/koalicja.tpl');
    $smarty->assign('tytul','Koalicja');
  break;

  case 'attackType':
    $smarty->assign('main_panel', 'help/attackType.tpl');
    $smarty->assign('tytul','Typy ataków');
  break;
  
  
  default:
    $smarty->assign('main_panel', 'help/main.tpl');
    $smarty->assign('tytul','Wstêp');
  break;
}
$smarty->assign('turns_counter', 'OFF');
$smarty->assign('page_foot', 'OFF');

	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
$smarty->display('main.tpl');

?>
