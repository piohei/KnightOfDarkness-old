<?

//*****************************************************************************

//  Funkcje obslugujace KUPNO ZIEMI.

//*****************************************************************************



//-----------------------------------------------------------------------------

function infoDoKupnaZiemi($login){

	global $polaczenie;
	$zapytanie = "select ziemia,zloto from KSIESTWA where nazwa ='".$login."';";
	$wynik = mysql_query($zapytanie, $polaczenie);
	$wiersz = mysql_fetch_array($wynik);
	return $wiersz;

}

//----------- CENA ZIEMI OD ZERA DO Ziemia -------//
function kosztKupnaZiemiOdZera($ziemia){
//	return floor($ziemia*($ziemia+1)*(2*$ziemia+1)/6/100);
//	return floor(pow($ziemia*($ziemia+1)/2,1.50)/100);
	global $CFG;
	return floor(pow($ziemia*($ziemia+1)/$CFG->wspolczynnikKUPZIEME,1.50)/100);
}


//-------------------KUPNO ZIEMI----------------------------------------

function kosztKupna($ileMasz,$ileKupujesz){
//	$w=(1/150)*$ileMasz;
//	$koszt=floor(((2*$ileMasz+$ileKupujesz)*$ileKupujesz)*$w);
//	return $koszt;
	$koszt=kosztKupnaZiemiOdZera($ileMasz+$ileKupujesz)-kosztKupnaZiemiOdZera($ileMasz);
	return $koszt;
}


//------------------------------------------------------------------
//return floor((-2*$ziemia+sqrt(8*$ziemia*$ziemia+(1/2)*$zloto))/2);
function ileKupiszZiemi($zloto,$ziemia){
//	global $login;
//	$w=(1/150)*$ziemia;
//	return min(100,floor((-1*$ziemia*$w+sqrt($ziemia*$ziemia*$w*$w+$w*$zloto))/$w));
	$ileKupisz=0;
	while(kosztKupna($ziemia,$ileKupisz) <= $zloto){
		$ileKupisz++;
	}
	if ($ileKupisz != 0){
		$ileKupisz--;
	}		
	return $ileKupisz;
}

//------------------------------------------------------------------

function kupZiemie($login,$zloto,$ziemia,$ile){
	global $polaczenie;
	$nowyStanZiemi=$ziemia+$ile;
	$koszt=kosztKupna($ziemia,$ile);
	if($koszt>$zloto){
		return "NIE MASZ WYSTARCZAJACEJ ILO¦CI SZTUK Z£OTA BY KUPIÆ ".$ile." ZIEMI";
	}
	$zapytanie = "update KSIESTWA set ziemia=".$nowyStanZiemi.", zloto=zloto-".$koszt." where nazwa='".$login."';";
	$wynik = mysql_query($zapytanie, $polaczenie);
	return "KUPI£E¦ <b>".$ile."</b> ZIEMI ZA <b>".((integer)$koszt)."</b> SZTUK Z£OTA";
}

//-----------------------------------------------------------------------

?>
