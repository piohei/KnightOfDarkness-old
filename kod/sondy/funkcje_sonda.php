<?PHP
require_once("{$CFG->katalogStrony}/koalicja/class.Coalition.php");
require_once("{$CFG->katalogStrony}/koalicja/funkcje_koalicja.php");

function nowaSonda($zywatnosc,$pytanie,$tryb){
	global $login;
	global $polaczenie;

}
function ileOpcji_form($tryb){
	global $smarty;
	//wyswietlenie formu.. do ilosci opcji ankiety
	$smarty->assign('main_panel',"sondy/ileOpcji.tpl");
	$smarty->assign('tytul',"Wybór ilosci opcji do ankiety");
	$smarty->assign('akcja',"sonda.php?tryb=".$tryb);
	$smarty->display('main.tpl');
	exit;
}
function ankieta_form($tryb){
	global $smarty;
	global $_POST;

	$smarty->assign('main_panel','sondy/nowa.tpl');
	$smarty->assign('tryb_ankiety',$tryb);
	settype($_POST["ileOpcji"], "integer");
	if($_POST["ileOpcji"]<=0){
		exit;
	}
	for($i=0;$i<$_POST["ileOpcji"];$i++){
		$tab[$i]="opcja".$i;
	}
	$smarty->assign("ileOpcji",$tab);
	$smarty->display('main.tpl');
}
/*
 info zawiera nastepujace dane
 $info["ileDni"] - ile dni bedzie wazna ankieta
 $info["pytanie"] - pytanie
 $info["tryb"] - tryb sondy
 $info['tab'] - tablica opcji sondy
 */
function dodajAnkiete($info){
	global $polaczenie;
	global $login;
	global $kingdomInfo;
	settype($info["ileDni"], "integer");
	if(!isset($info['akcja'])){
		$info['akcja']='NULL';
	}
	if($info["ileDni"]<=0){
		return "Podaj prawid³ow± liczbe dni !!!";
	}
	if($info["pytanie"]==""){
		return "Wpisz pytanie !!!";
	}
	$info["pytanie"]=strip_tags($info["pytanie"]);
	$SQL="insert into ankiety
            values(NULL,'".date("Y-m-d-G-i-s",time()+$info["ileDni"]*86400)."','".$info["pytanie"]."',
            '".$info['akcja']."','".$login."','".$info["tryb"]."','".$kingdomInfo['koalicja']."');";
	$wynik= mysql_query($SQL)or Die("sondy blad przy wstawianiu nowej ankiety");
	$forumid=mysql_insert_id();
	foreach( $info['tab'] as $item ){
		$item=strip_tags($item);
		$SQL="insert into opcje
              values(NULL,".$forumid.",'".$item."',0);";
		$wynik= mysql_query($SQL)or Die("sondy blad przy wstawianiu nowej opcji");
	}
	return "Dodano ankiete ";
}
function usunSondeKoalicja(){
	global $polaczenie;
	global $login;
	global $kingdomInfo;
	$SQL="select id from ankiety where koalicja='".$kingdomInfo['koalicja']."'
          and tryb='koalicja'";
	$wynik= mysql_query($SQL)or Die("sondy przy usuwaniu koalicja");
	if(mysql_num_rows($wynik)==1){
		$id=mysql_fetch_array($wynik);
		usunSonde($id['id']);
	}
}
function usunSonde($id){
	global $polaczenie;
	global $login;
	$SQL="delete from ankiety where id=".$id;
	$wynik= mysql_query($SQL)or Die("usuwanie sondy");
	$SQL="delete from opcje where id_ankiety=".$id;
	$wynik= mysql_query($SQL)or Die("usuwanie sondy");
	$SQL="delete from glosy where id_ankiety=".$id;
	$wynik= mysql_query($SQL)or Die("usuwanie sondy");
}
function wyswietlSonde($id){
	global $polaczenie;
	global $login;
	global $smarty;
	global $CFG;
	$SQL="select * from ankiety where id=".$id;
	$wynik= mysql_query($SQL)or Die("sondy wyswietlanie");
	if(mysql_num_rows($wynik)!=1){
		$smarty->assign("sonda_error","Nie odnaleziono danej ankiety");
	}else{
		$ankieta=mysql_fetch_array($wynik);
		//sprawdzenie czy jeszcze jest aktywna
		if ($ankieta['akcja']=='zakonczona'){
			return wyswietlWynik($id);
		}
		$SQL="select * from opcje where id_ankiety=".$id;
		$licznik=0;
		$wynik= mysql_query($SQL)or Die("sondy wyswietlanie");
		while($wiersz=mysql_fetch_array($wynik)){
			$tmp[$licznik]=$wiersz;
			$licznik++;
		}
		$roznica = (strtotime($ankieta['data_zakonczenia'])-time());

		$smarty->assign("ileDoKonca",floor($roznica/86400)." dni ".floor(($roznica % 86400)/3600)." godz i ".ceil(($roznica % 3600)/60)." min");
		$smarty->assign("szerokosc",200);
		$smarty->assign("ankieta",$ankieta);
		$smarty->assign("opcje",$tmp);
		if($ankieta['tryb']=='wybory'){
			$smarty->assign("akcja",$CFG->adresSerwera."sondy/sonda.php?tryb=wybory&ankieta=".$ankieta['id']);
			$smarty->assign("tytul","Karta wyborcza");
		}
		$smarty->assign("akcja",$CFG->adresSerwera."sondy/sonda.php?tryb=glosuj&ankieta=".$ankieta['id']);
		return $smarty->fetch("sondy/sonda.tpl");
	}
}
function wyswietlWynik($id_ankiety,$szerokosc=180){
	global $polaczenie;
	global $login;
	global $smarty;
	$SQL="select *
          from opcje
          where id_ankiety=".$id_ankiety;
	$wynik= mysql_query($SQL)or Die("sondy czy glosowalem");
	$licznik=0;
	$ileGlosow=0;
	while($wiersz=mysql_fetch_array($wynik)){
		$tmp[$licznik]['ilosc']=$wiersz['ilosc'];
		$tmp[$licznik]['opcja']=$wiersz['opcja'];
		$ileGlosow += $wiersz['ilosc'];
		$licznik++;
	}
	foreach($tmp as $klucz=>$opcja){
		$tmp[$klucz]['dlugosc']=round(($opcja["ilosc"]/$ileGlosow)*$szerokosc);
	}
	$SQL="select pytanie
          from ankiety
          where id=".$id_ankiety;
	$wynik= mysql_query($SQL)or Die("sondy czy glosowalem");
	$pytanie=mysql_fetch_array($wynik);
	$smarty->assign("wynik",$tmp);
	$smarty->assign("pytanie",$pytanie['pytanie']);
	$smarty->assign("szerokosc",$szerokosc);
	$smarty->assign("ileGlosow",$ileGlosow);
	return $smarty->fetch("sondy/wynik.tpl");
}
function wyswietlSondeLubWynik($id_ankiety){
	if(czyGlosowalem($id_ankiety)){
		return wyswietlWynik($id_ankiety);
	}else{
		return wyswietlSonde($id_ankiety);
	}
}
function czyGlosowalem($id_ankiety){
	global $login;
	global $polaczenie;
	$SQL = "select * from glosy
            where id_ankiety=".$id_ankiety."
            AND kto='".$login."'";
	$wynik= mysql_query($SQL)or Die("sondy czy glosowalem");
	return (mysql_num_rows($wynik)==1);
}

function glosuj($id_opcji,$id_ankiety){
	global $login;
	global $polaczenie;
	if(!czyGlosowalem($id_ankiety)){
		$SQL="insert into glosy
            values(".$id_ankiety.",".$id_opcji.",'".$login."')";
		$wynik= mysql_query($SQL)or Die("sondy glosowanie");
		$SQL="update opcje
            set ilosc=ilosc+1
            where id=".$id_opcji;
		$wynik= mysql_query($SQL)or Die("sondy glosowanie");
	}
}
//obsluga sond koalicyjnych i wyborow
function wyswietlSondeWkoalicji(){
	global $login;
	global $polaczenie;
	global $kingdomInfo;
	$SQL ="select id from ankiety where koalicja='".$kingdomInfo['koalicja']."'
           and tryb='koalicja'";
	$wynik= mysql_query($SQL)or Die("sondy koalicje wyswietl");
	if(mysql_num_rows($wynik)==1){
		$tmp = mysql_fetch_array($wynik);
		$ankieta->czyJest=true;
		$ankieta->ankieta = wyswietlSondeLubWynik($tmp['id']);
		return $ankieta;
	}else{
		$ankieta->czyJest=false;
		return $ankieta;
	}
}
//-----------------------------------WYBORY------------------------------------
//sprawdza czy sa wybory a jezeli sa to usuwa poprzednie
function czyMoznaNowe(){
	global $login;
	global $polaczenie;
	global $kingdomInfo;
	$SQL ="select id, akcja from ankiety where koalicja='".$kingdomInfo['koalicja']."'
           and tryb='wybory'";
	$wynik= mysql_query($SQL)or Die("wybory funkcja czyMoznaNowe");
	if(mysql_num_rows($wynik)==1){
		$tmp = mysql_fetch_array($wynik);
		if($tmp['akcja']=='wtrakcie')
		return false;
		usunSonde($tmp['id']);
		return true;
	}else{
		return true;
	}
}

function usunWybory($koalicja){
	global $polaczenie;
	$SQL ="select id, akcja from ankiety where koalicja='".$koalicja."'
           and tryb='wybory'";
	$wynik= mysql_query($SQL)or Die("wybory funkcja czyMoznaNowe");
	if(mysql_num_rows($wynik)==1){
		$tmp = mysql_fetch_array($wynik);
		usunSonde($tmp['id']);
	}
}

function zmienCesarza($koalicja,$nowyCesarz){
	global $polaczenie;

	$coal = new Coalition($koalicja,true);
	$emparor = $coal->getEmperor();
	//usun wszystkie zaproszenia
	usunZapr(2,$emparor);

	$zapytanie = "UPDATE KOALICJA SET czlonek_1 ='$nowyCesarz' where nazwa='".$koalicja."'";
	$wynik = mysql_query($zapytanie);
}
function wyswietlWynikWyborów($id_ankiety,$szerokosc=180){
	global $polaczenie;
	global $login;
	global $smarty;
	$SQL="select *
          from opcje
          where id_ankiety=".$id_ankiety;
	$wynik= mysql_query($SQL)or Die("sondy czy glosowalem");
	$licznik=0;
	$ileGlosow=0;

	$ktoWygral="nikt";
	$zIlomaGlosami=-1;
	$czyRozstrzygniete=false;
	while($wiersz=mysql_fetch_array($wynik)){
		$tmp[$licznik]['ilosc']=$wiersz['ilosc'];
		$tmp[$licznik]['opcja']=$wiersz['opcja'];
		$ileGlosow += $wiersz['ilosc'];
		if($zIlomaGlosami==$wiersz['ilosc']){
			$czyRozstrzygniete=false;
		}
		if($wiersz['ilosc']>$zIlomaGlosami){
			$czyRozstrzygniete=true;
			$ktoWygral=$wiersz['opcja'];
			$zIlomaGlosami=$wiersz['ilosc'];
		}
		$licznik++;
	}
	foreach($tmp as $klucz=>$opcja){
		$tmp[$klucz]['dlugosc']=round(($opcja["ilosc"]/$ileGlosow)*$szerokosc);
	}
	$SQL="select pytanie,data_zakonczenia , akcja,koalicja
          from ankiety
          where id=".$id_ankiety;
	$wynik= mysql_query($SQL)or Die("sondy czy glosowalem");
	$pytanie=mysql_fetch_array($wynik);


	if($czyRozstrzygniete)
	$ileZostalo="<br>Wybory zakonczone<br>Wygra³ je ".$ktoWygral;
	else
	$ileZostalo="<br>Wybory nierozstrzygniête";

	//sprawdzenie czy zwyciazca jest jeszcze w koalicji
	$SQL="select koalicja
          from KSIESTWA
          where nazwa ='".$ktoWygral."'
          and koalicja='".$pytanie['koalicja']."'";
	$wynik= mysql_query($SQL)or Die("czy zwyciezca jest");
	if(mysql_num_rows($wynik)==1){
		$zwyciazcaOdszedl=false;
	}else{
		$zwyciazcaOdszedl=true;
		$ileZostalo="<br>Wybory nierozstrzygniête<br> Nie ma ju¿ zwyciêzcy w koalicji";
	}

	if($pytanie['akcja']=='wtrakcie'){
		$roznica = (strtotime($pytanie['data_zakonczenia'])-time());
		if($roznica<10){
			$SQL="UPDATE ankiety set akcja='zakonczona' where id=".$id_ankiety;
			$wynik= mysql_query($SQL)or Die("sondy zamykanie aglosowania");
			if($czyRozstrzygniete)
			if(!$zwyciazcaOdszedl)
			zmienCesarza($pytanie['koalicja'],$ktoWygral);
		}else{
			$ileZostalo="<br>do koñca wyborów zostalo<br>".
			floor($roznica/86400)." dni ".floor(($roznica % 86400)/3600)." godz i ".ceil(($roznica % 3600)/60)." min";
		}
	}

	$smarty->assign("wynik",$tmp);
	$smarty->assign("pytanie",$pytanie['pytanie']);
	$smarty->assign("szerokosc",$szerokosc);
	$smarty->assign("tytul","Karta wyborcza");
	$smarty->assign("ileGlosow",$ileGlosow.$ileZostalo);
	return $smarty->fetch("sondy/wynik.tpl");
}
//obsluga wyborow
function wyswietlKarteWyborczaWkoalicji(){
	global $login;
	global $polaczenie;
	global $kingdomInfo;
	$SQL ="select id, akcja from ankiety where koalicja='".$kingdomInfo['koalicja']."'
           and tryb='wybory'";
	$wynik= mysql_query($SQL)or Die("sondy koalicje wyswietl");
	if(mysql_num_rows($wynik)==1){
		$tmp = mysql_fetch_array($wynik);
		if($tmp['akcja']=='wtrakcie'){
			$ankieta->czyWtrakcie=true;
		}else{
			$ankieta->czyWtrakcie=false;
		}
		$ankieta->czyJest=true;
		if(czyGlosowalem($tmp['id'])){
			$ankieta->ankieta = wyswietlWynikWyborów($tmp['id']);
		}else{
			if($tmp['akcja']=='wtrakcie')
			$ankieta->ankieta =  wyswietlSonde($tmp['id']);
			else
			$ankieta->ankieta = wyswietlWynikWyborów($tmp['id']);
		}
		return $ankieta;
	}else{
		$ankieta->czyJest=false;
		return $ankieta;
	}
}
function czySaWybory(){
	global $polaczenie;
	global $kingdomInfo;
	$SQL ="select id, akcja from ankiety where koalicja='".$kingdomInfo['koalicja']."'
           and tryb='wybory'";
	$wynik= mysql_query($SQL)or Die("sondy koalicje wyswietl");
	if(mysql_num_rows($wynik)==1){
		$tmp = mysql_fetch_array($wynik);
		if($tmp['akcja']=='wtrakcie'){
			return true;
		}else{
			return false;
		}
	}return false;
}
//-----------------------------------Administracja------------------------------------
//funckje typowe dla administracji
function listaSond(){
	global $login;
	global $polaczenie;
	$SQL="select * from ankiety order by tryb";
	$wynik= mysql_query($SQL)or Die("sondy lista sond");
	while($wiersz=mysql_fetch_array($wynik)){
		$tmp[$licznik]=$wiersz;
		$licznik++;
	}
	return $tmp;
}

?>
