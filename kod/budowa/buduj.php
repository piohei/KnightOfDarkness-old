<?PHP
require_once("../config.php");
require_once($CFG->katalogStrony."common.php");
require_once("lib.php");
require_once($CFG->katalogStrony."param.constraint.php");
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

function p($zmienna, $typ = 'integer'){
	if (isset($zmienna)){
		$zmienna = strip_tags($zmienna);
		$zmienna = mysql_real_escape_string($zmienna);
		//$zmienna = cast($zmienna,'integer');
		if (strcmp($typ,'integer')==0){
			($zmienna = (integer)$zmienna )or die('Niepoprawny format liczby '.$zmienna);
			//is_int($zmienna) or die('Niepoprawny format liczby '.$zmienna);
		}
		
	}
	return $zmienna;
}

otworz_polaczenie();

$login = czyZalogowany();
$info=infoOksiestwie($login);
//$smarty->debugging=true;
$czyPotrzebujeOdswiezycInfo=false;

$tryb = p($_GET['tryb']);
$id = p($_GET['id']);
$ok = p($_GET['ok']);



if(isset($tryb)&&$tryb==1){
	//rozpoczecie budowy nowego budynku specjalnego
	rozpocznijBudowe($login,$_POST["nowyBudynek"]);
}
if(isset($tryb)&&$tryb==2){
	//buduj budynke specjalny
	$wynikSpec=budujSpecjalny($login,$_POST["idBudynku"],$_POST["budSpec"],$info["co_buduje"]);
	$czyPotrzebujeOdswiezycInfo=true;
}else{
	$tmpq=$_POST;
	$tmpq['pkt']=$info['co_buduje'];
	$tmpq['ziemia']=$info['ziemia'];
	$tmpq['domy'.'_old']=$info['domy'];
	$tmpq['warsztaty'.'_old']=$info['warsztaty'];
	$tmpq['wiezyczki'.'_old']=$info['wiezyczki'];
	$tmpq['koszary'.'_old']=$info['koszary'];
	$tmpq['kopalnie_zlota'.'_old']=$info['kopalnie_zlota'];
	$tmpq['kopalnie_zelaza'.'_old']=$info['kopalnie_zelaza'];
	$tmpq['farmy'.'_old']=$info['farmy'];
	$tmpq['gildie'.'_old']=$info['gildie'];
	$tmpq['straznice'.'_old']=$info['straznice'];
	$tmpq['rynki'.'_old']=$info['rynki'];
	$tmpq['zamek'.'_old']=$info['zamek'];
	//budowanie zwyklych
	
	if(isset($_POST['buduj'])){
		if(!empty($tmpq['rynki']) && !empty($info['koalicja'])){
			$wynik=buduj($login,$tmpq);
			$czyPotrzebujeOdswiezycInfo=true;
		}elseif(empty($tmpq['rynki'])){
			$wynik=buduj($login,$tmpq);
			$czyPotrzebujeOdswiezycInfo=true;
		}
	}
	//buzenie zwyklych
	if(isset($_POST['burz'])){
		if(!empty($tmpq['rynki']) && !empty($info['koalicja'])){
			$wynik=burz($login,$tmpq);
			$czyPotrzebujeOdswiezycInfo=true;
		}elseif(empty($tmpq['rynki'])){
			$wynik=burz($login,$tmpq);
			$czyPotrzebujeOdswiezycInfo=true;
		}
	}
}
if(isset($tryb)&&$tryb==3){
	//rozpoczecie budowy nowego budynku specjalnego
	$wynikSpec=rozbudowa($login,$id);
}
if(isset($tryb)&&$tryb==4){
	//burzenie specjalnego

	if(isset($_GET['ok'])){
		burzSpecjalny($login,$_GET["id"]);
	}else{
		$text="Czy jeste¶ pewien tej operacji?<br>
                <a href='buduj.php?tryb=".$tryb."&id=".$_GET["id"]."&ok=1'>Tak  </a>
                <a href='buduj.php'>Nie  </a>
                ";
		$smarty->assign('message_text', $text);
		$smarty->assign('title', 'Aktywacja konta');
		$smarty->display('page_message.tpl'); //wyswietlenie ok
		exit;
	}
}

if(isset($tryb)&&$tryb==5){
	//Rezygnowanie z budowy
	if(isset($_GET['ok'])){
		rezygnujSpecjalny($login,$_GET["id"]);
	}else{
		$text="Czy jeste¶ pewien tej operacji?<br>
                <a href='buduj.php?tryb=".$tryb."&id=".$_GET["id"]."&ok=1'>Tak  </a>
                <a href='buduj.php'>Nie  </a>
                ";
		$smarty->assign('message_text', $text);
		$smarty->assign('title', 'Aktywacja konta');
		$smarty->display('page_message.tpl'); //wyswietlenie ok
		exit;
	}
}
if($czyPotrzebujeOdswiezycInfo)
$info=infoOksiestwie($login);

//liczenie wolnej ziemi
$niezabudowanaZiemia=getNiezabudowanaZiemia($info);

$panel_elements['Budynki']="hide";
$panel_elements['Militarne']="hide";
$smarty->assign('panel_elements', $panel_elements);


$smarty->assign('kosztZwyklych',$kosztBudowy);
$smarty->assign('kingdomInfo',$info);
$smarty->assign( 'profil', ustawieniaOsobiste() );
$smarty->assign( 'plikPomocy',"pomoc/budowa.tpl");
$smarty->assign('wynik',$wynik);
$smarty->assign('tytul',"Punktów budowy: ".$info["co_buduje"]." , Wolna ziemia: ".$niezabudowanaZiemia);
$smarty->assign('main_panel','budowa.tpl');
//do budynkow specjalnych
$smarty->assign("wynikSpec",$wynikSpec);
$smarty->assign('listaBudSpec',listaBudynkowSpecjalnych("zero"));
$smarty->assign('listaBudow',budowaneIwybudowane($login));

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
