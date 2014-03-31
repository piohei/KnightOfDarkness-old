<?php

//*****************************************************************************

//  Funkcje obslugujace koalicje.

//*****************************************************************************





//---------------------------------------------------------------------------
/*
 function wyslij($kto,$doKogo,$tresc){

 global $polaczenie;
 $tresc=strip_tags($tresc);
 $tresc=str_replace("\n","<br>",$tresc);
 $tresc=str_replace(";",":",$tresc);
 $zapytanie ="select nazwa from KSIESTWA where nazwa LIKE BINARY '".$doKogo."';";
 $wynik = mysql_query($zapytanie, $polaczenie);
 if(mysql_num_rows($wynik)==1){
 $zapytanie ="insert into WIADOMOSCI values('".$kto."','".$doKogo."','Koalicja','".$tresc."',null,now(),0);";
 $wynik = mysql_query($zapytanie, $polaczenie);
 $mess="Wiadomosc Wys³ana do ".$doKogo."";
 }else{
 $mess="Nie ma ksiestwa o nazwie ".$doKogo."";
 }
 return $mess;
 }
 */
//-----------------------------------------------------------------------

function wyslij_zap($kto,$doKogo,$koalicja){

	global $polaczenie;



	$zapytanie ="select nazwa,koalicja from KSIESTWA where nazwa LIKE BINARY '".$doKogo."';";

	$wynik = mysql_query($zapytanie, $polaczenie);

	$wiersz= mysql_fetch_array($wynik);

	if(mysql_num_rows($wynik)==1){

		if ($wiersz["koalicja"]!=$koalicja)

		{

			$zapytanie ="insert into ZAPROSZENIA values(NULL,'".$doKogo."','".$koalicja."',curdate(),0);";

			$wynik = mysql_query($zapytanie, $polaczenie);

			return $mess="Zaproszenie do królestwa $doKogo zosta³o wys³ane.";

		}

		else return $mess="Królestwo $doKogo jest ju¿ cz³onkiem koalicji.";

	}else{

		return $mess="Królestwo o nazwie $doKogo nie istnieje.";

	}

}



//-----------------------------------------------------------------------

function usunZKoalicji($kto,$kogo,$koalicja){
	global $polaczenie;
	$zapytanie = "UPDATE KSIESTWA SET koalicja = NULL, rynki=0 WHERE nazwa='$kogo'";
	$wynik = mysql_query($zapytanie,$polaczenie);
	$zapytanie = "UPDATE KOALICJA SET  ilosc_czlonkow=ilosc_czlonkow-1 WHERE nazwa='".$koalicja."';";
	mysql_query($zapytanie, $polaczenie);
}

//----------------------------------------------------------------------
//UWAGA WYMAGA: function.coalition.pub.php
function rozwiazKoalicje($login,$koalicja){
	global $polaczenie;
	$zapytanie="select nazwa from KSIESTWA where koalicja='".$koalicja."'";
	$wynik=mysql_query($zapytanie,$polaczenie);
	while($wiersz=mysql_fetch_array($wynik)){
		$tresc="Koalicja ".$koalicja." zostala rozwiazana przez ".$login.".";
		wyslij($login,$wiersz["nazwa"],$tresc);
	}
	//usuwanie wyborow
	usunWybory($koalicja);
	$zapytanie="UPDATE KSIESTWA
		            SET koalicja=NULL, rynki=0
                WHERE koalicja='".$koalicja."'";
	mysql_query($zapytanie,$polaczenie);
	$zapytanie="delete from KOALICJA where nazwa='".$koalicja."';";
	mysql_query($zapytanie,$polaczenie);
	$zapytanie="update INFO set liczba_koalicji=liczba_koalicji-1;";
	mysql_query($zapytanie,$polaczenie);
	coalition_pub_clear($koalicja);
	//USUWANIE TRWAJACEGO ATAKU KOALICYJNEGO
	$info=infoOksiestwie($login);
	$attacks = new Attacks($info);
	$attacks->delete_coalition_attacks('','',true);
}


//-----------------------------------------------------------------------

function spisCzlonkow($nazwaKoalicji){

	global $ustawienia;
	global $polaczenie;
	$zapytanie="select nazwa,ziemia,lucznicy,piechota,husaria,ziemia/(husaria+piechota+lucznicy+1) from KSIESTWA where koalicja='".$nazwaKoalicji."'
                order by 6 ASC";
	$wynik = mysql_query($zapytanie, $polaczenie);
	$licznik=1;
	while($wiersz=mysql_fetch_array($wynik)){
		$spisCzlonkow->ksiestwa[$licznik] = $wiersz;
		$licznik++;
	}

	$zapytanie="select czlonek_1  from KOALICJA where nazwa='".$nazwaKoalicji."';";
	$wynik = mysql_query($zapytanie, $polaczenie);
	$szef = mysql_fetch_array($wynik);
	$spisCzlonkow->szef=$szef["czlonek_1"];
	//print_r ($spisCzlonkow->ksiestwa); exit;
	return $spisCzlonkow;

}

//-----------------------------------------------------------------------------



function spisKoalicji($kierunek,$sortowanie,$nrStrony,&$error,&$wszystkie_strony){
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
		$zapytanie="select nazwa,ilosc_czlonkow from KOALICJA order by ".$sortowanie." ".$kierunek." LIMIT ".$poczatek.",".$koniec.";";
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

//----------------------------------------------------------------------

function spisZaproszen($cesarz,&$prawo_zmiany){

	global $polaczenie;

	global $login;

	$licznik=0;

	$zapytanie ="select * from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE." ";
	
	$wynik=mysql_query($zapytanie,$polaczenie);

 
	while( $wiersz = mysql_fetch_array($wynik) )
	{
		$spisZaproszen[$licznik]->kogo=$wiersz["to"];

		$spisZaproszen[$licznik]->data=$wiersz["date"];

		$spisZaproszen[$licznik]->id=$wiersz["id"];

		switch($wiersz["property"])
		{
			case MESSAGE_INVITE:
				$spisZaproszen[$licznik]->stan="nieprzeczytane";
				break;				
			case (MESSAGE_INVITE + MESSAGE_READ):
				$spisZaproszen[$licznik]->stan="przeczytane";
				break;
			case (MESSAGE_INVITE + MESSAGE_RECIPIENT_DELETED): 
			case (MESSAGE_INVITE + MESSAGE_RECIPIENT_DELETED + MESSAGE_READ):
				$spisZaproszen[$licznik]->stan="odrzucone";
				break;
			default:
				$spisZaproszen[$licznik]->stan="nieznany";
				break;
		}
		++$licznik; 
	}
	
	return $spisZaproszen;

}

function naprawIloscCzlonkow(){
	global $polaczenie;
	$zapytanie="select nazwa from KOALICJA";
	$wynik=mysql_query($zapytanie,$polaczenie)or Die("Naprawianie Zap -1 ");
	while($wiersz=mysql_fetch_array($wynik)){
	 $zapytanie="select count(*) as ilosc from KSIESTWA where koalicja='".$wiersz['nazwa']."'";
	 print $wiersz['nazwa']."--";
	 $wynik2=mysql_query($zapytanie,$polaczenie)or Die("Naprawianie Zap -2 ");
	 $ile=mysql_fetch_array($wynik2);
	 print $ile['ilosc']."<br>";
	 $zapytanie="update KOALICJA SET ilosc_czlonkow=".$ile['ilosc']." where nazwa='".$wiersz['nazwa']."'";
	 mysql_query($zapytanie,$polaczenie)or Die("Naprawianie Zap -3 ");
	}
}

//-----------------------------------------------------------------------
/**
 * Kod b³êdu mówi±cy o tym, ¿e nie ma b³êdu :)
 */
// 0 - nieprzeczytane
// 1 - przeczytane
// 2 - wszystkie
// 3 - odrzucone
function usunZapr($tryb,$cesarz,$id=null){

	global $polaczenie;
	
	if($id != null)
	{
			$zapytanie="delete from Message where `from`='".$cesarz."' and id=".$id." and property & ".MESSAGE_INVITE." ";
		
 		mysql_query($zapytanie,$polaczenie);
 	}

	switch($tryb){
		// nieprzeczytane czyli wyslane
		case 0: 
			//$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE." and property ! ".MESSAGE_READ." and property ! ".MESSAGE_RECIPIENT_DELETED." ";
			$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE." and property ! ".MESSAGE_READ." and property ! ".MESSAGE_RECIPIENT_DELETED ;
			break;

		// przeczytane 
		case 1: 
			$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE." and property & ".MESSAGE_READ."";
			break;

		// wszystkie
		case 2: 
			//$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE."  and (property &".MESSAGE_READ." or property & ".MESSAGE_RECIPIENT_DELETED.")";
			$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE ;
			break;
		// odrzucone			
		case 3: 
			//$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE."  and (property &".MESSAGE_READ." or property & ".MESSAGE_RECIPIENT_DELETED.")";
			$zapytanie="delete from Message where `from`='".$cesarz."' and property & ".MESSAGE_INVITE." and property & ".MESSAGE_RECIPIENT_DELETED."";
			break;
			
		default:
			break;

	}

	mysql_query($zapytanie,$polaczenie);


}
//-----------------------------------------------------------------------

?>
