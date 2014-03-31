<?php
require_once('../const.php');
require_once('../config.php');
require_once('../mysql.connection.php');
require_once('../param.constraint.php');
require_once('class.MessageBox.php');
require_once('../lib/class.User.php');

// autoryzacja uzytkownika na podstawie identyfikatora sesji
$kingdom = new User(NULL);
global $login;
$login = czyZalogowany();
if(!$kingdom->auth_sid()) exit(0); // dodatkowo dla bezpieczeñstwa


if(!empty($_GET['id']) && settype($_GET['id'], 'integer')){

    $mBox = new MessageBox($kingdom);
    if(!is_null($message = $mBox->fetchMessage($_GET['id']))){
        if($message['type'] == MESSAGE_RAPORT || $message['type'] == MESSAGE_SIMPLE_RAPORT){

            // parsowanie raportów
            require_once('../lib/class.RaportParser.php');
            $rparser = new RaportParser();

            $raport = "";
            $rparser->parse($message['message'], $raport);
            $message['message'] = $raport;
        }
		require_once("../upload/class.FileManager.php");
		$fm = new FileManager($message['from']);
		$fm->insert_images($message['message']);
        $smarty->assign('message_data', $message);
    }
    $smarty->display('message.reader.tpl');
}else{

    header("Loaction: {$CFG->adresSerwera}404.shtml");
    exit(0);
}
?>
