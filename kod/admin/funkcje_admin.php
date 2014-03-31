<?

//*****************************************************************************

//  Funkcje obslugujace ADMIN.

//*****************************************************************************

require_once('funkcje_koalicja.php');

//-----------------------------------------------------------------------------

function usunGracza($login){
	
		global $polaczenie;



		$zapytanie="select koalicja from KSIESTWA where nazwa='".$login."';";

		$wynik=mysql_query($zapytanie,$polaczenie);

		$wiersz=mysql_fetch_array($wynik);





		$zapytanie="select czlonek_1 from KOALICJA where nazwa='".$wiersz["koalicja"]."';";

		$wynik=mysql_query($zapytanie);

		$wiersz2=mysql_fetch_array($wynik);





		if ($login==$wiersz2["czlonek_1"]){

			//print "rozwiaz koalicje ".$wiersz["koalicja"];

			rozwiazKoalicje($login,$wiersz["koalicja"]);

		}else{

			//print "odejdz z koalicji ".$wiersz["koalicja"];

			usunZKoalicji($wiersz2["czlonek_1"],$login,$wiersz["koalicja"]);

		}



		//wiadomosci

		$zapytanie="delete from WIADOMOSCI where kto='".$login."' or do_kogo='".$login."';";

		mysql_query($zapytanie,$polaczenie);



		//aukcje

		$zapytanie="delete from AUKCJE where wystawiajacy='".$login."';";

		mysql_query($zapytanie,$polaczenie);

    //INFO
    $zapytanie="select login from PROFIL where czy_aktywowane=1 and login='".$login."';";
    $wynik=mysql_query($zapytanie,$polaczenie);
    if (mysql_num_rows($wynik)==1){
  		$zapytanie="update INFO set liczba_ksiestw=liczba_ksiestw-1;";
  		mysql_query($zapytanie,$polaczenie);
		}

		//PROFIL

		$zapytanie="delete from PROFIL where login='".$login."';";

		mysql_query($zapytanie,$polaczenie);



		//KSIESTWA

		$zapytanie="delete from KSIESTWA where nazwa='".$login."';";

		mysql_query($zapytanie,$polaczenie);



		
		//KSIAZKA

		$zapytanie="delete from KSIAZKA_ADR where login='".$login."' or znajomy='".$login."';";
		mysql_query($zapytanie,$polaczenie);

    $zapytanie="delete from ZALOGOWANI where login='".$login."';";
		mysql_query($zapytanie,$polaczenie);

	}

//---------------------------------------------------------------------------

function spisNieakt($nrStrony,&$error,&$wszystkie_strony){

			global $ustawienia;
			global $polaczenie;
      $licznik=0;
      
			$nrStrony=$nrStrony-1;

	  	$zapytanie="select count(*) AS ile from PROFIL;";
			$wynik = mysql_query($zapytanie, $polaczenie);
			$wiersz = mysql_fetch_array($wynik);
			$ileKsiestw=$wiersz["ile"];
			$ileStron=ceil($ileKsiestw/$ustawienia['iloscKsiestwNaStronie']);
      $wszystkie_strony=$ileStron;
      
			if($ileStron<=$nrStrony){
				$error="Nie ma strony o numerze ".($nrStrony+1)."";
			}else{
				$poczatek=$ustawienia['iloscKsiestwNaStronie']*$nrStrony;
				$koniec=$ustawienia['iloscKsiestwNaStronie'];
				$zapytanie="select * from PROFIL where czy_aktywowane=0 order by login asc LIMIT ".$poczatek.",".$koniec.";";
				$wynik = mysql_query($zapytanie, $polaczenie);
	
				while($wiersz = mysql_fetch_array($wynik)){
				  $nieAktywni[$licznik]->nazwa=$wiersz["login"];
				  $licznik++;
				}
        return $nieAktywni;
			
			}

	}

//-----------------------------------------------------------------------------
function wyciag_dane($login){
    global $polaczenie;
    
    $zapytanie="select * from KSIESTWA where nazwa='".$login."';";
    $wynik=mysql_query($zapytanie,$polaczenie);
    $wiersz=mysql_fetch_array($wynik);
    return $wiersz;
}
//-----------------------------------------------------------------------------

?>
