<?php
require_once('../config.php');              // plik konfiguracyjny
require_once('../const.php');               // plik ze zdefiniowanymi sta³ymi
require_once('../mysql.connection.php');    // po³±czenie do bazy danych
require_once('../funkcjeBazy.php');         // funkcje u¿ytkownika
require_once('class.Coalition.php');        // klasa zarz±dzaj±ca koalicjami
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');


// ustawienia
$item_ppage = 20;


// pobieranie informacji o uzytkowniku
$login = czyZalogowany();
$kingdom_info = infoOksiestwie($login);


// przygotowanie informacji o sortowaniu
switch($_GET['sort']){
case 'coal': $sort_field = 'COALITION'; break;
case 'memb': $sort_field = 'MEMBERS'; break;
default: $sort_field = 'COALITION'; break;
}

switch($_GET['order']){
case 'asc': $sort_order = 'ASC'; break;
case 'desc': $sort_order = 'DESC'; break;
default: $sort_order = 'ASC';
}


// ustawianie wyszukiwanej frazy
$keyword = NULL;
if($_GET['keyword']){
    $keyword = trim($keyword);
    $keyword = str_replace('%', '\%', $_GET['keyword']);
    $keyword = str_replace('_', '\_', $keyword);
    if($_GET['new']) $_GET['page'] = 1;
}


// ustalanie strony listy (offsetu)
$offset = 0;
if($_GET['page'] && settype($_GET['page'], 'integer') && $_GET['page'] > 0){
    $offset = $_GET['page'] * $item_ppage - $item_ppage;
}else{
    $_GET['page'] = 1;
}


// generowanie linkow sortujacych
$img_desc = 'ico.sort.desc.gif';
$img_asc = 'ico.sort.asc.gif';
if($sort_field == 'MEMBERS'){
    $sorting_links['COALITION']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=coal&order=asc";
    if($sort_order == 'ASC'){
        $sorting_links['MEMBERS']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=memb&order=desc";
        $sorting_links['MEMBERS']['img'] = $img_asc;
    }else{
        $sorting_links['MEMBERS']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=memb&order=asc";
        $sorting_links['MEMBERS']['img'] = $img_desc;
    }
}else{
    $sorting_links['MEMBERS']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=memb&order=desc";
    if($sort_order == 'ASC'){
        $sorting_links['COALITION']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=coal&order=desc";
        $sorting_links['COALITION']['img'] = $img_asc;
    }else{
        $sorting_links['COALITION']['link'] = "?page={$_GET['page']}&keyword={$_GET['keyword']}&sort=coal&order=asc";
        $sorting_links['COALITION']['img'] = $img_desc;
    }
}


// pobieranie listy koalicji
$coalition = new Coalition(NULL);
$list = $coalition->getList("$sort_field|$sort_order", $offset, $item_ppage, $keyword);


$smarty->assign('sorting_links', $sorting_links);
$smarty->assign('kingdomInfo', $kingdom_info);
$smarty->assign('coalition_list', $list);
$smarty->assign('main_panel', 'coalition.list.tpl');

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
