<?php
// ta funkcja wywolywana jest na koncu tego pliku
// sluzy do przedefiniowania wartosc
function ustawNaKoncu(){
	global $ustawienia;
	global $CFG;
	$ustawienia['minimalnyOdKiedyPojawiSieNowaAukcja']=120; //w sekundach
	$ustawienia['maxymalnyDoKiedyPojawiSieNowaAukcja']=240; //w sekundach
	$ustawienia['maksymalnaIloscTur'] = 36;
}


class COSNTANTS {
	var $iluTragarzyNaJednaZiemie = 0.0;
	/***************
	 * Era testowa *
 	 ***************/
	var $eraTestowa = false;
	var $eraTestowa_modyfikacjaCenyJednostek=1;
	var $eraTestowa_modyfikacjaPBBudynkow=1;
}


$cfg = new COSNTANTS();
if($cfg->eraTestowa){
	$cfg->eraTestowa_modyfikacjaCenyJednostek = 4;
	$cfg->eraTestowa_modyfikacjaPBBudynkow = 4;
} else {
	$cfg->eraTestowa_modyfikacjaCenyJednostek = 2;
	$cfg->eraTestowa_modyfikacjaPBBudynkow = 2;
}

$CFG->wspolczynnikKUPZIEME = ((strtotime('2008-10-11 00:12')+3*3600*24) > strtotime("now"))?2:4;

if($cfg->eraTestowa){
	$cfg->eraTestowa_modyfikacjaCenyJednostek = 4;
	$cfg->eraTestowa_modyfikacjaPBBudynkow = 4;
} else {
	$cfg->eraTestowa_modyfikacjaCenyJednostek = 2;
	$cfg->eraTestowa_modyfikacjaPBBudynkow = 2;
}

/******************
 * Okres Ochronny *
 ******************/
if($cfg->eraTestowa)
{
$CFG->iloscDniOkresuOchronnegoNowejEry = 0;
}
else
{
$CFG->iloscDniOkresuOchronnegoNowejEry = 14;
}
$CFG->iloscDniOkresuOchronnegoNowychGraczy = $CFG->iloscDniOkresuOchronnegoNowejEry;
$CFG->iloscZiemiOkresuOchronnego = 100;
$CFG->ileZiemiNaKoszary = 10000;


$CFG->ATAK_TEST = false;
if (isset($CFG->WLACZ_ZASTEPSTWA_ROZWOJOWE)){
	$CFG->WLACZ_ZASTEPSTWA = true;
} else {
	$CFG->WLACZ_ZASTEPSTWA = true;
}
if (isset($CFG->WLACZ_ATAK_TEST)){
	$CFG->ATAK_TEST = true;
} else {
	$CFG->ATAK_TEST = false;
}



/*************
 * Start ery *
 *************/
$CFG->LAST_ERA_START = '2012-03-27 22:00'; //czas startu ostaniej ery, do obliczania konca okresu ochronnego

// czas po ktorym user uznawany jest za niezalogowany [sekundy]
$CFG->czas_uznania_za_wylogowany = 1200; //w sekundach 1200 = 20min
$CFG->max_pub_message = 60; //ilosc wiadomosci w karczmie

/****************************
 * Bonus dla malych ksiestw *
 ****************************/
if($cfg->eraTestowa)
{
	$CFG->small_kingdom_ziemia = 5000; //do tylu ziemi dostaje sie bonus z ziemi.
	$CFG->small_kingdom_bonus_size = 0.7; //wielkosc bonusu, im wieksza liczba tym mniejszy bonus
}
else
{
	$CFG->small_kingdom_ziemia = 500; //do tylu ziemi dostaje sie bonus z ziemi.
	$CFG->small_kingdom_bonus_size = 1.4; //wielkosc bonusu, im wieksza liczba tym mniejszy bonus
}
$CFG->small_kingdom_min_ziemia = 100; //minimalnailosc ziemi od ktorej liczony jest bonus, jak ktos ma mniej to bonus jest liczony od tej wartosci

$CFG->limit_opisu_koalicji = 3000;

$CFG->limit_ilosci_atakow_na_jedno_ksiestwo = 5; //limit ilosci atakow na jedno ksiestwo w ciagu 24 godzin
 
$CFG->max_zastepstwo = 14; //maksymalna dlugosc zastepstwa w dniach 
$CFG->odstep_miedzy_kolejnymi_zastepstwami = 10; //maksymalny okres miedzy zastepstwami 

/*******************************************************************************
 * DOMYSLNE USTAWIENIA KONTA UZYTKOWNIKA
 * POMYSL DEPRECATED :) bedzie usuwany powoli, ale skutecznie
 */


/**
 * Ograniczenie na liczbe wiadomosci w skrzynce uzytkownika. Na pojemnosc
 * skrzynki sumuja sie: zaproszenia + wiadomosci wyslane + wiadomosci odebrane.
 */
$user_constraint['MESSAGEBOX_LIMIT'] = 40;
$user_constraint[1] = 40;

/**
 * Ograniczenie liczby wiadomosci typu MESSAGE_RAPORT (tzw. raport wazny, np.
 * z wojny).
 */
$user_constraint['MESSAGEBOX_RAPORT'] = 10;
$user_constraint[2] = 10;

/**
 * Wlacza (1) lub wylacza (0) mozliwosc wlasnego loga uzytkownika.
 */
$user_constraint['LOGO_ENABLED'] = 1;
$user_constraint[3] = 0;

/**
 * Wlacza (1) lub wylacza (0) statystyki targu.
 */
$user_constraint['MERKETSTAT_ENABLED'] = 0;
$user_constraint[4] = 0;

/**
 * Limit królestw w ksiedze znajomych.
 */
$user_constraint['BOOK_LIMIT'] = 10;
$user_constraint[5] = 10;


/*******************************************************************************
 * USTAWIENIE EKSPORTU MIEDZY KOALICJAMI (TRAGARZE)
 */
$porter['load_scores']      = 100;   //liczba punktow ladunkowych posiadanych przez tragarza
$porter['food_scores']      = 1;    //liczba punktow ladunkowych na jedna jednostke jedzenia
$porter['tool_scores']      = 7;    //liczba punktow ladunkowych na jedna jednostke narzedzi
$porter['iron_scores']      = 5;   //liczba punktow ladunkowych na jedna jednostke zelaza
$porter['weapon_scores']    = 10;   //liczba punktow ladunkowych na jedna jednostke broni
$porter['cost']             = 5;    //koszt wyslania jednaego tragarza
$porter['tours']            = 2;    //liczba tur potrzebnych tragarzowi na dotarcie do celu
$porter['market']           = 50;   //liczba tragarzy pracujacych i mieszkajacych w rynku


$produkcja['gornicy_zlota']=100;
$produkcja['gornicy_zelaza']=1;
$produkcja['rolnicy']=5;
$produkcja['kowale']=1;
$produkcja['budowniczowie']=10;



/*******************************************************************************
 * RÓZNE OGÓLNE USTAWIENIA
 */
$ustawienia['ileStraznikowWStraznicy']=10;
$ustawienia['ileStraznikowWStraznicy_jedenStraznikaNaZiemie']=999999; // dodatkowe miesjce straznicach na podana ilosc ziemi
$ustawienia['ileRolnikowPracujeNaFarmie']=5;
$ustawienia['$ileMieszkaWdomach']=5;
$ustawienia['ileWkoszarach']=100;
$ustawienia['ileWGildiach']=50;
$ustawienia['minimalnaEfektywnosc']=0.1;
$ustawienia['iloscKsiestwNaStronie']=20;
$ustawienia['iloscKoalicjiNaStronie']=20;
$ustawienia['iloscTowarowNaStronie']=10;
$ustawienia['zloto_min']=100000;
$ustawienia['ileZnajomych']=20;
$ustawienia['minCenaTarg']=5;
$ustawienia['maxCenaTarg']= 2000;

$ustawienia['minimalnyOdKiedyPojawiSieNowaAukcja']=120; //w sekundach
$ustawienia['maxymalnyDoKiedyPojawiSieNowaAukcja']=240; //w sekundach

$ustawienia['maxIloscAukcji']=10;
$ustawienia['maxIloscAukcjiWTejSamejCenie']=2;
/**
 * Maksymalna liczba królestw w koalicji.
 */
$ustawienia['MAX_COALITION_SIZE'] = 10;
// Maksymalna ilosc tur jaka mozna zgromadzic
$ustawienia['maksymalnaIloscTur'] = 36;
/**
 * Maksymalana liczba graczy zerejestrowanych i aktywowanych w systemie.
 */
$ustawienia['MAX_PLAYERS_LIMIT'] = 6500;

/************************
 * numer aktualniej ery *
 ************************/
$nr_ery=26;

//parametry budynku konczacego ere
$parametryBudynekKoncowy['nazwa']='Budynek konca ery';
$parametryBudynekKoncowy['kosztPktBudowy']=100000000;
$parametryBudynekKoncowy['kosztZloto']=200000000;

//stan poczatkowy ksiestwa
  $poczatek['ziemia']=100;
  $poczatek['domy']=30;
  $poczatek['warsztaty']=5;
  $poczatek['koszary']=1;
  $poczatek['farmy']=5;
  $poczatek['wiezyczki']=4;
  $poczatek['kopalnie_zlota']=10;
  $poczatek['kopalnie_zelaza']=2;
  $poczatek['rynki'] = 0;
  $poczatek['zamek'] = 1;
  $poczatek['rolnicy']=10;
  $poczatek['bezrobotni']=0;
  $poczatek['kowale']=10;
  $poczatek['gornicy_zlota']=30;
  $poczatek['gornicy_zelaza']=10;
  $poczatek['tragarze']=0;
  $poczatek['budowniczowie']=20;
  $poczatek['lucznicy']=0;
  $poczatek['piechota']=0;
  $poczatek['husaria']=0;
  $poczatek['jedzenie']=5000;
  $poczatek['zloto']=200000;
//  $poczatek['zloto']=1000000;
  $poczatek['zelazo']=100;
  $poczatek['bronie']=10;
  $poczatek['narzedzia']=500;
  $poczatek['co_buduje']=0;
  $poczatek['tury']=20;
  $poczatek['morale']=50;
  $poczatek['poziom_bezp']=0;

  $poczatek['gildie']=0;
  $poczatek['szpiedzy']=0;
  $poczatek['straznice']=1;
  $poczatek['straznicy']=5;

	//1-domy2-kopalnie_zelaza 3-zlota4-warsztaty 5-wierzyszki6-koszary7- farmy 8- targ
	$kosztTreningu["gornicy_zlota"]=4000/$cfg->eraTestowa_modyfikacjaCenyJednostek;
	$kosztTreningu["gornicy_zelaza"]=4000/$cfg->eraTestowa_modyfikacjaCenyJednostek;
	$kosztTreningu["rolnicy"]=3000/$cfg->eraTestowa_modyfikacjaCenyJednostek;
	$kosztTreningu["kowale"]=7000/$cfg->eraTestowa_modyfikacjaCenyJednostek;
	$kosztTreningu["budowniczowie"]=5000/$cfg->eraTestowa_modyfikacjaCenyJednostek;
	$kosztTreningu["piechota"]=15000;
	$kosztTreningu["lucznicy"]=15000;
	$kosztTreningu["husaria"]=30000;
	$kosztTreningu["szpiedzy"]=10000;
	$kosztTreningu["straznicy"]=5000;
	$kosztTreningu["tragarze"]=700/$cfg->eraTestowa_modyfikacjaCenyJednostek;

	$kosztTreningu_ekwipunek["gornicy_zlota"]=15;
	$kosztTreningu_ekwipunek["gornicy_zelaza"]=15;
	$kosztTreningu_ekwipunek["rolnicy"]=5;
	$kosztTreningu_ekwipunek["kowale"]=10;
	$kosztTreningu_ekwipunek["budowniczowie"]=20;
	$kosztTreningu_ekwipunek["piechota"]=10;
	$kosztTreningu_ekwipunek["lucznicy"]=5;
	$kosztTreningu_ekwipunek["husaria"]=20;
	$kosztTreningu_ekwipunek["tragarze"]=2;

	$kosztTreningu_ekwipunek["szpiedzy"]=5;
	$kosztTreningu_ekwipunek["straznicy"]=10;



	$kosztBudowy[1]=100/$cfg->eraTestowa_modyfikacjaPBBudynkow;		//domu
	$kosztBudowy[2]=1000/$cfg->eraTestowa_modyfikacjaPBBudynkow;		//kopalni zelaza
	$kosztBudowy[3]=1000/$cfg->eraTestowa_modyfikacjaPBBudynkow;		//kopalni zlota
	$kosztBudowy[4]=100/$cfg->eraTestowa_modyfikacjaPBBudynkow;		//warsztaty
	$kosztBudowy[5]=1000;		//wiezyczki
	$kosztBudowy[6]=2000;	//koszary
	$kosztBudowy[7]=200/$cfg->eraTestowa_modyfikacjaPBBudynkow;		//farmy
	$kosztBudowy[8]=500;	//targ

	$kosztBudowy[9]=1000;	//gildie
	$kosztBudowy[10]=1000;	//straznice
	$kosztBudowy[11]= 10000;
	$kosztBudowy['domy']               =   100/$cfg->eraTestowa_modyfikacjaPBBudynkow;
	$kosztBudowy['kopalnie_zelaza']    =   1000/$cfg->eraTestowa_modyfikacjaPBBudynkow;
	$kosztBudowy['kopalnie_zlota']     =   1000/$cfg->eraTestowa_modyfikacjaPBBudynkow;
	$kosztBudowy['warsztaty']          =   100/$cfg->eraTestowa_modyfikacjaPBBudynkow;
	$kosztBudowy['wiezyczki']          =   1000;
	$kosztBudowy['koszary']            =   2000;
	$kosztBudowy['farmy']              =   200/$cfg->eraTestowa_modyfikacjaPBBudynkow;
	$kosztBudowy['gildie']             =   1000;
	$kosztBudowy['straznice']          =   1000;
	$kosztBudowy['rynki']              =   500;
	$kosztBudowy["zamek"]				  =	100000;
//------------------------------------------------------------------------
//------------------------------------------------------------------------

	$towary[1]="zelazo";

	$towary[2]="bronie";

	$towary[3]="narzedzia";

	$towary[4]="jedzenie";

	$towary["zelazo"]=1;

	$towary["bronie"]=2;

	$towary["narzedzia"]=3;

	$towary["jedzenie"]=4;



	$budynki[0]="nic";

	$budynki[1]="domy";

	$budynki[2]="kopalnie_zlota";

	$budynki[3]="kopalnie_zelaza";

	$budynki[4]="warsztaty";

	$budynki[5]="wierzyczki";

	$budynki[6]="koszary";

	$budynki[7]="farmy";

	$budynki[8]="targ";

	$budynki[9]="gildie";

	$budynki[10]="straznice";

	$budynki[11]="zamek";


	$budynki2["nic"]=0;

	$budynki2["domy"]=1;

	$budynki2["kopalnie_zlota"]=2;

	$budynki2["kopalnie_zelaza"]=3;

	$budynki2["warsztaty"]=4;

	$budynki2["wiezyczki"]=5;

	$budynki2["koszary"]=6;

	$budynki2["farmy"]=7;

	$budynki2["targ"]=8;

	$budynki2["gildie"]=9;
	
	$budynki2["straznice"]=10;
	
	$budynki2["zamek"]=11;


ustawNaKoncu();

?>
