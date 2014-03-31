<?PHP
  require_once("../config.php");
	require_once("../funkcjeBazy.php");
	require_once 'funkcje_sonda.php';
	otworz_polaczenie();
	$login = czyZalogowany();
	$kingdomInfo=infoOksiestwie($login);
 $smarty->assign( 'kingdomInfo', $kingdomInfo );
	
	switch ($_GET["tryb"]) {
  case "wszyscy":
    if(isset($_POST["ileOpcji"])){
      ankieta_form($_GET["tryb"]);
    }else{
      ileOpcji_form($_GET["tryb"]);
    }
  break;
  case "koalicja":
   usunSondeKoalicja();
   if(isset($_POST["ileOpcji"])){
      ankieta_form($_GET["tryb"]);
    }else{
      ileOpcji_form($_GET["tryb"]);
    }
  break;
  case "wybory":
    if(isset($_POST["opcja"])){
      glosuj($_POST["opcja"],$_GET["ankieta"]);
    }
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
  break;
  case "dodaj":
   dodajAnkiete($_POST);
   $text="Dodano ankiete<br>
                <a href=".$CFG->adresSerwera."zalogowany.php>Dalej...  </a>
                ";
    $smarty->assign('message_text', $text);
    $smarty->assign('title', 'Ankiety');
    $smarty->display('page_message.tpl'); //wyswietlenie ok
    exit;
  break;
  case "glosuj":
    if(isset($_POST["opcja"])){
      glosuj($_POST["opcja"],$_GET["ankieta"]);
    }
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
  break;
   case "usun_koalicja":
    usunSondeKoalicja();
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
  break;
  case "wyswietl":
   if(isset($_GET["id"])){
    $out=wyswietlSonde($_GET["id"]);
   }
  break;
  
  default:
 	  
 	break;
 }
 
 zamknij_polaczenie();
  //print date("Y-m-d",time()+5*86400);
?>
