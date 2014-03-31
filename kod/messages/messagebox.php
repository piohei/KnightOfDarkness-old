<?php
require_once('../const.php');
require_once('../config.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('class.MessageBox.php');
require_once('../pdoInterface.php');
require_once('../param.constraint.php');


$kingdom = User::createFromSession();

// pobieranie danych u�ytkownika i utworzenie obiektu skrzynki pocztowej
$kingdom_state = $kingdom->getState();
$mBox = new MessageBox($kingdom);



// okre�lenie i zdefiniowanie trybu dzia�ania (odebrane, wys�ane, raporty, itd.)
define('MBOX_MODE_RECEIVED',    0);
define('MBOX_MODE_SENT',        1);
define('MBOX_MODE_RAPORT',      2);
define('MBOX_MODE_WRITE',       3);

if(isset($_GET['mode']) && settype($_GET['mode'], 'integer') && $_GET['mode'] >= MBOX_MODE_RECEIVED && $_GET['mode'] <= MBOX_MODE_WRITE){

    // ustawienie aktualnego trybu dzia�ania
    $mode = $_GET['mode'];
}else{

    // ustawienie domyslnego trybu dzia�ania
    $mode = MBOX_MODE_RECEIVED;
}
$smarty->assign('mode', $mode);




// obs�uga tryb�w: odebrane, wysa�ne, raporty
if($mode == MBOX_MODE_RECEIVED || $mode == MBOX_MODE_SENT || $mode == MBOX_MODE_RAPORT){

    if($_GET['action'] == 'delete'){

        // usuwanie
        if(isset($_GET['id']) && settype($_GET['id'], 'integer')){

            // usuwanie wiadomosci o konkretnym id
            $mBox->delMessage($_GET['id']);
        }elseif(!empty($_POST['delete_list'])){

            // usuwanie listy zaznaczonych wiadomo�ci
            $mBox->delMessage($_POST['delete_list']);
        }
    }elseif($_GET['action'] == 'share')
    {
    	  if(isset($_GET['id']) && settype($_GET['id'], 'integer')){
    	  		$mBox->shareMessage($_GET['id'], $kingdom->getName() );
			}
    		$msg_str = "Raport zosta� udost�pniony";
    	$smarty->assign('msg_str', $msg_str);
    }elseif($_GET['action'] == 'invite'){

        // obs�uga przyjmowania zaproszenia
        if(isset($_GET['id']) && settype($_GET['id'], 'integer')){

            // sprawdzenie czy u�ytkownik jest ju� w jakiej� koalicji
            $coalition_name = $kingdom->getCoalitionName();
            if(is_null($coalition_name)){

                $msg = $mBox->fetchMessage($_GET['id'], false, false);
                if(!is_null($msg)){

                    // sprawdzanie wiarygodno�ci zaproszenia
                    if($msg['to'] == $kingdom->getName() && $msg['type'] == MESSAGE_INVITE){

                        require_once("{$CFG->katalogStrony}koalicja/class.Coalition.php");
                        require_once("{$CFG->katalogStrony}parametry.php");
                        $sender = new User($msg['from']);
                        if($sender->exists() && $sender->isEmperor()){

                            $coalition = new Coalition($sender->getName());
                            if($coalition->membersCount() < $ustawienia['MAX_COALITION_SIZE']){
                                if($coalition->addMember($kingdom->getName())){
                                    $mBox->delMessage($_GET['id'],true);
                                    $msg_str = "Dzi�ki zaproszeniu sta�e� si� ".
                                        "w�a�nie cz�onkiem koalicji <b>".
                                        $coalition->getName().
                                        "</b>, kt�rej obecnym cesarzem jest w�adca ".
                                        "kr�lestwa <b>{$msg['from']}</b>.";
                                }else{
                                    $msg_str = "Panie w�adca koalicji <b>".$coalition->getName()."</b> chcia� Cie oszuka�, jego koalicja jest ju� pe�na.";
                                }
                            }else{
                                $mBox->delMessage($_GET['id']);
                                $msg_str = "Niestety inne kr�lestwa Ci� uprzedzi�y.".
                                    " Obecnie koalicja <b>".$coalition->getName().
                                    "</b> nie mo�e przyj�� wi�cej cz�onk�w.";
                            }
                        }else{
                            $mBox->delMessage($_GET['id']);
                            $msg_str = "W�adca kr�lestwa <b>{$msg['from']}</b>, ".
                                "kt�ry wys�a� Ci zaproszenie, Panie,  obecnie nie ".
                                "jest ju� cesarzem koalicji. W zwi�zku z tym ".
                                "jego zaproszenie nie jest wa�e!<br>".
                                "Skontaktuj si� z aktuanym cesarzem.";
                        }
                    }
                }
            }else{

                $msg_str = "Obecnie nale�ysz ju� do koalicji <b>$coalition_name".
                    "</b>. Jednocze�nie mo�esz nale�e� tylko do jednej!";
            }
            print $info_msg;
            $smarty->assign('msg_str', $msg_str);
        }
    }


    // pobieranie ogranicze� dotycz�cych skrzynki
    $constraint = $kingdom->getConstraint();
    if($mode == MBOX_MODE_RAPORT){
        $limit = $constraint[C_MESSAGEBOX_RAPORT];

    }else{
        $limit = $constraint[C_MESSAGEBOX_LIMIT];
    }
    $smarty->assign('limit', $limit);


    // zliczanie wiadomo�ci/raport�w w skrzynce
    $size = 0;
    if($mode == MBOX_MODE_RAPORT){
        $size = $mBox->count(MESSAGE_RAPORT);
    }else{
        $size = $mBox->count(MESSAGE_STANDARD, MESSAGE_INVITE, MESSAGE_SENT);
    }
    $smarty->assign('size', $size);


    // obliczenie procentowej zaj�to�ci skrzynki
    $proc = round($size/$limit*100);       // procent rzeczywisty
    $procg = min($proc, 100);       // procent dla paska zaj�to�ci
    $smarty->assign('proc', $proc);
    $smarty->assign('procg', $procg);


    // pobieranie listy wiadomo�ci
    switch($mode){
    case MBOX_MODE_RECEIVED:
        $list = $mBox->getMessagesList(MESSAGE_STANDARD | MESSAGE_INVITE);
        $smarty->assign('list_received', $list);
        break;

    case MBOX_MODE_SENT:
        $list = $mBox->getMessagesList(MESSAGE_SENT);
        $smarty->assign('list_sent', $list);
        break;

    case MBOX_MODE_RAPORT:
        $list_tempraport = $mBox->getMessagesList(MESSAGE_SIMPLE_RAPORT);
        $smarty->assign('list_tempraport', $list_tempraport);

        $list_raport = $mBox->getMessagesList(MESSAGE_RAPORT);
        $smarty->assign('list_raport', $list_raport);
        break;
    }
}



// obs�uga trybu write (pisanie wiadomo�ci) - wysy�anie wiadomo�ci
elseif($mode == MBOX_MODE_WRITE){

    // test czy dane kr�lestwo jest cesarzem jakiej� koalicji
    $kingdom_state['is_emperor'] = $kingdom->isEmperor();

    // obs�uga wysy�ania wiadomo�ci
    if($_POST['action'] == 'send'){
        $_POST['recipient'] = trim($_POST['recipient']);
        if(empty($_POST['recipient'])){
            $msg_str = "Aby wys�a� pos�a�ca z wie�ci� musisz poda� jej odbiorc�.";
        }

        if($_POST['recipient'] == $kingdom->getName()){
            $msg_str = "Panie, oszala�e�? Piszesz wie�ci do siebie?!";
        }

        if(empty($_POST['message_content']) && !$msg_str){
            $msg_str = "Pos�aniec nie ma zamiaru wyruszy� z wie�ci� bez tre�ci!";
        }

        if(isset($_POST['message_type'])){
            if($_POST['message_type'] != MESSAGE_INVITE && $_POST['message_type'] != MESSAGE_STANDARD){
                $msg_str = "System wykry� pr�b� oszustwa!";
            }elseif($_POST['message_type'] == MESSAGE_INVITE && !$kingdom_state['is_emperor']){
                $msg_str = "Nie posiadasz uprawnie� do wysy�ania zaprosze�!";
            }
        }

        if(!$msg_str){

            // przygotowanie i wys�anie wiadomo�ci
            $message_type = ($_POST['message_type'] == MESSAGE_INVITE)?
                MESSAGE_INVITE : MESSAGE_STANDARD;

            $mBox->prepareMessage(
                $_POST['subject'],
                $_POST['message_content'],
                $message_type);

            $status = $mBox->sendTo(new User($_POST['recipient']));
            switch($status){
            case MESSAGE_ERR_NONE:
                unset($_POST['recipient']);
                unset($_POST['message_content']);
                unset($_POST['subject']);
                $msg_str = "Pos�aniec wyruszy� do kr�lestwa <b>{$_POST['recipient']}</b>".
                    " aby niezw�ocznie dostarczy� Twoj� wiadomo��, Panie.";
                break;
            case MESSAGE_ERR_RECIPIENT:
                $msg_str = "Pos�aniec nie m�g� odnale�� odbiorcy wiadomo�ci.<br>".
                    "Prawdopodobnie kr�lestwo <b>{$_POST['recipient']}</b> nie ".
                    "istnieje lub gracz ma zablokowane albo nieaktywne konto.";
                break;
            case MESSAGE_ERR_RCPTFULL:
                $msg_str = "Niestety pos�aniec nie m�g� zostawi� Twojej wie�ci Panie ".
                    "w kr�lestwie <b>{$_POST['recipient']}</b> gdy� skrzynka ".
                    "tamtejszego kr�la jest pe�na po brzegi.";
                break;
            case MESSAGE_ERR_CONTENT:
                $msg_str = "Wie�� nie ma tre�ci i nie mo�e by� wys�ana.";
                break;
            case MESSAGE_ERR_SENDER:
                $msg_str = "Nadawca wiadomo�ci nieautoryzowany!";
                break;
            }
            print $info;
        }
        $smarty->assign('msg_str', $msg_str);
    }
}
	// sprawdzenie czy s� nowe wiadomo�ci
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));


// wy�wietlanie storny
$smarty->assign('kingdomInfo', $kingdom_state);
$smarty->assign('main_panel', 'messagebox.tpl');
$smarty->display('main.tpl');
?>