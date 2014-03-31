<?php
require_once('../const.php');
require_once('../config.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('class.Book.php');


// utworzenie obiektu ksiêgi
$kingdom = User::createFromSession();
$book = new Book($kingdom);


// obs³uga ksiêgi
if(isset($_POST['add'])){

    // dodawanie nowego wpisu
    $_POST['username'] = trim($_POST['username']);
    if($_POST['username'] != '')  $book->add($_POST['username']);
}elseif(isset($_GET['del'])){

    // usuwanie wpisu
    $book->remove($_GET['del']);
}



// pobieranie listy znajomych z ksiêgi i obliczanie wska¼ników zajêtego miejsca
$list = $book->getList();
$limit = $book->getLimit();
$size = count($list);
if($size > $limit){
    $book->truncate();
    $list = $book->getList();
    $size = count($list);
}
$procg = min(100 , $size/$limit*100);
settype($procg, 'integer');

$smarty->assign('procg', $procg);
$smarty->assign('limit', $limit);
$smarty->assign('size', $size);
$smarty->assign('friends_list', $list);


// wyswietlanie storny
$smarty->assign('main_panel', 'book.tpl');

switch($_GET['disp']){

case 'external':

    // wy¶wietlanie w osobnym oknie popup
    $smarty->display('book.external.tpl');
    break;

case 'internal':
default:

    // wy¶wietlanie wbudowane w stornê (jeszcze nie doracowane ;) )
    $smarty->assign('kingdomInfo', $kingdom->getState());
    $smarty->display('main.tpl');
}
?>