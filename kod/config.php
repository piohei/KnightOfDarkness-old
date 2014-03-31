<?php
# nazwe pliku trzeba zmienic na `config.php` i przypisac wartosci zmiennym
error_reporting(0); # dzialajacy server
#error_reporting(E_ALL); # server testowy

define('CONFIG', true);

global $CFG;

if (!isset($_SESSION)){
 session_start();
}
$PHPSESSID = session_id();
//zainicjaizowanie licznika czasu generacji strony

//sciezki podstawowe
if (file_exists("c:/Windows/php.ini")){ # pierwsza czesc tylko na windowsa 
 $CFG->adresSerwera      = 'http://kod-online.comlu.com/';
 $CFG->adresForum        = 'http://kod-online.comlu.com/forum/';
 $CFG->adresKatalogu     = '/kod-online.comlu.com/public_html/';
} else {
 $CFG->adresSerwera      = 'http://kod-online.comlu.com/'; # link do gry `http://10202.serwervps.pl/~kod`
 $CFG->adresForum        = 'http://kod-online.comlu.com/forum/'; # link do forum
 $CFG->adresKatalogu     = 'kod-online.comlu.com/public_html/'; # bezwzgledna sciezka do katalogu
}

# trzeba zmieniac tylko w szczegolnych przypadkach
$CFG->katalogStrony     = $CFG->adresKatalogu . '';
define('KATALOG_STRONY',$CFG->katalogStrony);
$CFG->katalogBibliotek  = $CFG->adresKatalogu . 'lib/';
$CFG->dir_lib           = $CFG->katalogStrony . 'lib/';
$CFG->dir_data          = $CFG->adresKatalogu . 'data/';
$CFG->dir_marketplace   = $CFG->katalogStrony . 'targ/';
$CFG->katalogSzablonow  = $CFG->adresKatalogu . 'szablony/';
$CFG->dir_upload     = $CFG->katalogStrony  . 'upload/files/';
$CFG->dir_admin_panel   = $CFG->katalogStrony  . 'panel/';


//sciezki do poszczegolnych modolow (katalogow)
$CFG->coalition_dir     = $CFG->adresSerwera . 'koalicja/';
$CFG->friends_dir       = $CFG->adresSerwera . 'znajomi/';
$CFG->image_dir         = $CFG->adresSerwera . 'img/';
$CFG->messages_dir      = $CFG->adresSerwera . 'wiadomosci/';
$CFG->style_dir         = $CFG->adresSerwera . 'css/';
$CFG->javascript_dir    = $CFG->adresSerwera . 'js/';
$CFG->marketplace_dir   = $CFG->adresSerwera . 'targ/';
$CFG->upload_dir     = $CFG->adresSerwera . 'upload/files/';


$CFG->full_path_to_marketplace = $CFG->marketplace_dir.'targ.php';

if (file_exists("c:/Windows/php.ini")){ # tylko dla windowsa (poprzedni admin nie chcial pracowac na tym samym pliku `config.php` na ktorym dzialala gra )
 $CFG->adresBazy   = "localhost"; 
} else { # adres bazy danych
 $CFG->adresBazy   = "localhost";
}
# baza danych MySQL ( gra innej nie obsluguje )
$CFG->uzytkownik = "a5401908_admin"; # uzytkownik bazy danych
$CFG->haslo   = "kod3141592"; # haslo bazy danych
$CFG->baza   = "a5401908_kod"; # nazwa bazy danych

//domyslnie wlaczone biblioteki
require_once( $CFG->katalogStrony    . 'version.php');
require_once( $CFG->katalogBibliotek . 'smarty/Smarty.class.php');
require_once( $CFG->katalogStrony    . 'login/lib.php');
require_once( $CFG->katalogStrony    . 'funkcje_infoOKsiestwie.php');
require_once( $CFG->katalogStrony    . 'function.common.php');
require_once( $CFG->katalogStrony    . 'pdoInterface.php');
// inne zmienne konfiguracyjne








//utworzenie i konfiguracja obiektu Smarty
$smarty = new Smarty();
$smarty->template_dir = $CFG->katalogSzablonow . 'templates';
$smarty->compile_dir  = $CFG->katalogSzablonow . 'templates_c';
$smarty->cache_dir    = $CFG->katalogSzablonow . 'cache';
$smarty->config_dir   = $CFG->katalogSzablonow . 'configs';


//domyslnie skojarzone zmienne w szablonach
$smarty->assign( 'root_dir' , $CFG->adresSerwera );
$smarty->assign( 'www_dir', $CFG->katalogStrony);
$smarty->assign( 'image_dir', $CFG->image_dir );
$smarty->assign( 'style_dir', $CFG->style_dir );
$smarty->assign( 'messages_dir', $CFG->messages_dir );
$smarty->assign( 'friends_dir', $CFG->friends_dir );
$smarty->assign( 'coalition_dir', $CFG->coalition_dir );
$smarty->assign( 'javascript_dir', $CFG->javascript_dir );
$smarty->assign('CFG', $CFG);


?>
