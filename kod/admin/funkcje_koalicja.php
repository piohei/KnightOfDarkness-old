<?php
//*****************************************************************************
//  Funkcje obslugujace koalicje.
//*****************************************************************************


//---------------------------------------------------------------------------
function wyslij_zap($kto,$doKogo,$koalicja){
	global $polaczenie;

	$zapytanie ="select nazwa,koalicja from KSIESTWA where nazwa='".$doKogo."';";
	$wynik = mysql_query($zapytanie, $polaczenie);
	$wiersz= mysql_fetch_array($wynik);
	if(mysql_num_rows($wynik)==1){
		if ($wiersz["koalicja"]!=$koalicja)
		{
			$zapytanie ="insert into ZAPROSZENIA values('".$doKogo."','".$koalicja."',curdate(),0);";
			$wynik = mysql_query($zapytanie, $polaczenie);
			return $mess="Zaproszono ".$doKogo."";
		}
		else return $mess="Ksiestwo ".$doKogo." jest juz cz³onkiem naszej koalicji!";
	}else{
		return $mess="Nie ma ksiestwa o nazwie ".$doKogo."";
	}
}

//-----------------------------------------------------------------------
function usunZKoalicji($kto,$kogo,$koalicja){
	    global $polaczenie;

	    // sprawdzic czy usuwa szef
	     $zapytanie="select czlonek_1 from KOALICJA where nazwa='".$koalicja."' ;";
	     $wynik = mysql_query($zapytanie,$polaczenie);
	     $wiersz = mysql_fetch_array($wynik);
	     if (($wiersz["czlonek_1"]==$kto)||($kto==$kogo))
	     {

	       $zapytanie="select ilosc_czlonkow from KOALICJA where nazwa='".$koalicja."';";
	       //print $zapytanie;
	       $wynik2 = mysql_query($zapytanie,$polaczenie);
	       $wiersz2= mysql_fetch_array($wynik2);
	       for ($i=1 ; $i<=10 ; $i++)
	       {
	        $zapytanie="select czlonek_".$i." from KOALICJA where nazwa='".$koalicja."';";
	        //print $zapytanie;
	        $wynik = mysql_query($zapytanie,$polaczenie);
	        $wiersz = mysql_fetch_array($wynik);

	        if ($wiersz["czlonek_".$i.""]==$kogo){
	          settype($i,"integer");
		  settype($wiersz2["ilosc_czlonkow"],"integer");
	          if ($i==$wiersz2["ilosc_czlonkow"]){
		      $zapytanie="update KOALICJA set czlonek_".$i."=NULL ,ilosc_czlonkow=".($wiersz2["ilosc_czlonkow"]-1)." where nazwa='".$koalicja."';";
		      //print $zapytanie;
		      mysql_query($zapytanie,$polaczenie);
		      $zapytanie="update KSIESTWA set koalicja=NULL where nazwa='".$kogo."';";
	              mysql_query($zapytanie,$polaczenie);
		  }
		  else{
		   $zapytanie="select czlonek_".$wiersz2["ilosc_czlonkow"]." from KOALICJA where nazwa='".$koalicja."';";
		   $wynik = mysql_query($zapytanie,$polaczenie);
		   $wiersz = mysql_fetch_array($wynik);
	  	   $zapytanie="update KOALICJA set czlonek_".$i."='".$wiersz["czlonek_".$wiersz2["ilosc_czlonkow"].""]."', ilosc_czlonkow=".($wiersz2["ilosc_czlonkow"]-1)." where nazwa='".$koalicja."';";
		   mysql_query($zapytanie,$polaczenie);
		   $zapytanie="update KSIESTWA set koalicja=NULL where nazwa='".$kogo."';";
		   mysql_query($zapytanie,$polaczenie);
		   $zapytanie="update KOALICJA set czlonek_".$wiersz2["ilosc_czlonkow"]."=NULL;";
		   mysql_query($zapytanie,$polaczenie);

		  }
	       }
	      }
	    }
	}
//-----------------------------------------------------------------------
function przyjmijZaproszenie($login,$koalicja){
	global $polaczenie;

	$zapytanie="select koalicja from KSIESTWA where nazwa='".$login."';";
	$wynik = mysql_query($zapytanie,$polaczenie);
	$wiersz = mysql_fetch_array($wynik);
	if ($wiersz["koalicja"]==NULL){

	  $zapytanie="select ilosc_czlonkow from KOALICJA where nazwa='".$koalicja."';";
	  $wynik=mysql_query($zapytanie,$polaczenie);
	  $wiersz=mysql_fetch_array($wynik);
	  settype($wieresz["ilosc_czlonkow"],"integer");
	  if ($wiersz["ilosc_czlonkow"]<10){
	      $zapytanie="update KSIESTWA set koalicja='".$koalicja."' where nazwa='".$login."';";
	      mysql_query($zapytanie,$polaczenie);
	      $zapytanie="update KOALICJA set czlonek_".($wiersz["ilosc_czlonkow"]+1)."='".$login."' , ilosc_czlonkow=".($wiersz["ilosc_czlonkow"]+1)." where nazwa='".$koalicja."';";
	      mysql_query($zapytanie,$polaczenie);
	  }
	  else print "<font color='red'>Nie ma juz miejsca w kolaicji na nowego czlonka!</font>";
	  //$zapytanie="delete from ZAPROSZENIA where kogo='".$login."' and nazwa_koalicji='".$koalicja."';";
	  $zapytanie="update ZAPROSZENIA set stan=1 where kogo='".$login."' and nazwa_koalicji='".$koalicja."';";
	  mysql_query($zapytanie,$polaczenie);
	}
	else print "<font color='red'>Jestes juz w jakiejs koalicji!</font>";


}
//----------------------------------------------------------------------
function rozwiazKoalicje($login,$koalicja){
		global $polaczenie;

		// update na KSIESTWACH czlonkow
		// delete na KOALICJI
		for ($i=1 ; $i<=10 ; $i++){
		    $zapytanie="select czlonek_".$i." from KOALICJA where nazwa='".$koalicja."';";
		    $wynik = mysql_query($zapytanie,$polaczenie);
		    $wiersz = mysql_fetch_array($wynik);
		    if ($wiersz["czlonek_".$i.""]!=NULL){
		        $tresc="Koalicja ".$koalicja." zostala rozwiazana przez ".$login.".";
		        wyslij($login,$wiersz["czlonek_".$i.""],$tresc);
		        $zapytanie="update KSIESTWA set koalicja=NULL where nazwa='".$wiersz["czlonek_".$i.""]."';";
			mysql_query($zapytanie,$polaczenie);
		    }

		}
		$zapytanie="delete from KOALICJA where nazwa='".$koalicja."';";
		mysql_query($zapytanie,$polaczenie);
		$zapytanie="update INFO set liczba_koalicji=liczba_koalicji-1;";
		mysql_query($zapytanie,$polaczenie);

	}
//-----------------------------------------------------------------------

function zmienOgloszenie($login,$koalicja,$tresc){
	global $polaczenie;

	$tresc=strip_tags($tresc);
	//$tresc=str_replace("\n","<br>",$tresc);
	$zapytanie = "select czlonek_1 from KOALICJA where nazwa='".$koalicja."';";
	$wynik = mysql_query($zapytanie,$polaczenie);
	$wiersz = mysql_fetch_array($wynik);
	if ($wiersz["czlonek_1"]==$login){
	    $zapytanie="update KOALICJA set ogloszenia='".$tresc."' where nazwa='".$koalicja."';";
	    mysql_query($zapytanie,$polaczenie);
	}
	else
	print "<font color='red'>Nie mozesz zmienic tresci ogloszenia!</font>";
}
//-----------------------------------------------------------------------
function spisCzlonkow($nazwaKoalicji){
		global $ustawienia;
		global $polaczenie;
		$zapytanie="select ilosc_czlonkow from KOALICJA where nazwa='$nazwaKoalicji';";
		$wynik = mysql_query($zapytanie, $polaczenie);
		$wiersz = mysql_fetch_array($wynik);
		$ile_czlonkow = $wiersz["ilosc_czlonkow"];
		for ($i=1 ; $i<=$ile_czlonkow; $i++){
		    $zapytanie="select czlonek_".$i." from KOALICJA where nazwa='$nazwaKoalicji';";
		    $wynik = mysql_query($zapytanie,$polaczenie);
		    $wiersz = mysql_fetch_array($wynik);
		    $spisCzlonkow[$i]=$wiersz["czlonek_".$i];
		}
		return $spisCzlonkow;
	}
//-----------------------------------------------------------------------------

function spisKoalicji($nrStrony,&$error,&$wszystkie_strony){
		global $ustawienia;
		global $polaczenie;

		$licznik=0;
		$nrStrony=$nrStrony-1;
		//$ustawienia['iloscKoalicjiNaStronie']
		$zapytanie="select liczba_koalicji from INFO;";
		$wynik = mysql_query($zapytanie, $polaczenie);
		$wiersz = mysql_fetch_array($wynik);
		$ileKoalicji=$wiersz["liczba_koalicji"];
		$ileStron=ceil($ileKoalicji/$ustawienia['iloscKoalicjiNaStronie']);
		if($ileStron<=$nrStrony){
			$error="Nie ma strony o numerze ".($nrStrony+1)."";
		}else{
			$poczatek=$ustawienia['iloscKoalicjiNaStronie']*$nrStrony;
			$koniec=$ustawienia['iloscKoalicjiNaStronie'];
			$wszystkie_strony=$ileStron;
			$zapytanie="select nazwa,ilosc_czlonkow from KOALICJA LIMIT ".$poczatek.",".$koniec.";";
			$wynik = mysql_query($zapytanie, $polaczenie);

			while($wiersz = mysql_fetch_array($wynik)){
				$zapytanie2="select czlonek_1 from KOALICJA where nazwa='".$wiersz["nazwa"]."';";
				$wynik2=mysql_query($zapytanie2,$polaczenie);
				$wiersz2 = mysql_fetch_array($wynik2);

				$spisKoalicji[$licznik]->nazwa=$wiersz["nazwa"];
				$spisKoalicji[$licznik]->ilosc_czlonkow=$wiersz["ilosc_czlonkow"];
				$spisKoalicji[$licznik]->szef=$wiersz2["czlonek_1"];
				$licznik++;
			}
		}
		return $spisKoalicji;
	}
//-----------------------------------------------------------------------

function dajTresc($koalicja){
	global $polaczenie;

	$zapytanie="select ogloszenia from KOALICJA where nazwa='".$koalicja."';";
	$wynik=mysql_query($zapytanie,$polaczenie);
	$wiersz=mysql_fetch_array($wynik);
	if ($wiersz["ogloszenia"]!=NULL){
	 return $wiersz["ogloszenia"];
	}
	else return "";
}
//----------------------------------------------------------------------
function spisZaproszen($koalicja,&$prawo_zmiany){
	global $polaczenie;
	global $login;

	$licznik=0;
	$zapytanie="select * from ZAPROSZENIA where nazwa_koalicji='".$koalicja."';";
	$wynik=mysql_query($zapytanie,$polaczenie);

	while($wiersz=mysql_fetch_array($wynik)){
		settype($wiersz["stan"],integer);
		switch($wiersz["stan"]){
			case 0 : $stan_txt="wys³ane";
						break;
			case 1 : $stan_txt="przyjête";
						break;
			case 2 : $stan_txt="odrzucone";
						break;
			default : $stan_txt="error";
		}
		 $spisZaproszen[$licznik]->kogo=$wiersz["kogo"];
		 $spisZaproszen[$licznik]->data=$wiersz["data"];
		 $spisZaproszen[$licznik]->stan=$stan_txt;
		 $licznik++;
		}
	$zapytanie="select czlonek_1 from KOALICJA where nazwa='".$koalicja."';";
	$wynik=mysql_query($zapytanie,$polaczenie);
	$wiersz=mysql_fetch_array($wynik);
	if ($wiersz["czlonek_1"]==$login) $prawo_zmiany=1;
	else $prawo_zmiany=0;

	return $spisZaproszen;
}
//-----------------------------------------------------------------------
function usunZapr($tryb,$koalicja){
	global $polaczenie;
	switch($tryb){
		case 0: $zapytanie="delete from ZAPROSZENIA where nazwa_koalicji='".$koalicja."' and stan=1;";
				break;
		case 1: $zapytanie="delete from ZAPROSZENIA where nazwa_koalicji='".$koalicja."' and stan=2;";
				break;
		case 2: $zapytanie="delete from ZAPROSZENIA where nazwa_koalicji='".$koalicja."';";
				break;
	}
	mysql_query($zapytanie,$polaczenie);
	// 0 - odrzucone
	// 1 - przyjete
	// 2 - wszystkie
}
//-----------------------------------------------------------------------
?>