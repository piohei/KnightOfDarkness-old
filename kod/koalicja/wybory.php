<?PHP
   /*
  info zawiera nastepujace dane 
  $info["ileDni"] - ile dni bedzie wazna ankieta
  $info["pytanie"] - pytanie 
  $info["tryb"] - tryb sondy 
  $info['tab'] - tablica opcji sondy
  */
 

  require_once("../config.php");
  require_once("../sondy/funkcje_sonda.php");
  require_once("../funkcjeBazy.php");
  require_once("funkcje_koalicja.php");
	require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');
  otworz_polaczenie();
  $login = czyZalogowany();
  $kingdomInfo=infoOksiestwie($login);

  //przeniesc do funkcje sondy.php
  function rozpiszWybory(){
    global $login;
    global $kingdomInfo;
    global $smarty;
    if (czyMoznaNowe()){
      $info["ileDni"]= 3;
      $info["pytanie"]="Wybory cesarza rozpisane przez ".$login;
      $info["tryb"]="wybory";
      $info["akcja"]="wtrakcie";
      $tmp=spisCzlonkow($kingdomInfo['koalicja']);
      $licznik=0;
      foreach($tmp->ksiestwa as $czlonek){
        $info["tab"][$licznik]=$czlonek['nazwa'];
        $licznik++;
      }
      dodajAnkiete($info);
       $smarty->assign('error',"Rozpisano wybory");
    }else{
      $smarty->assign('error',"Nie rozpisano nowych wyborów");
    }
    
    //$info['tab']
  }
  if(isset($_GET['nowe']))
    rozpiszWybory();
  $smarty->assign( 'kingdomInfo', $kingdomInfo );
  $smarty->assign('main_panel',"wybory.tpl");
  $smarty->assign('tytul',"Polityka wewn±trzkoalicyjna");
  $smarty->assign('karta',wyswietlKarteWyborczaWkoalicji());
	
	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
  $smarty->display('main.tpl');
  
  zamknij_polaczenie();

?>
