<?

//*****************************************************************************

//  Funkcje obslugujace PROFIL.

//*****************************************************************************

require_once('../koalicja/funkcje_koalicja.php');

//-----------------------------------------------------------------------
/*
function usun_konto($haslo){
  global $polaczenie;
  global $login;

  $zapytanie="select haslo from PROFIL where login='".$login."';";
  $wynik=mysql_query($zapytanie,$polaczenie);
  $wiersz=mysql_fetch_array($wynik);

  if ($wiersz["haslo"]==md5($haslo)){

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

		//PROFIL
		$zapytanie="delete from PROFIL where login='".$login."';";
		mysql_query($zapytanie,$polaczenie);

		//KSIESTWA
		$zapytanie="delete from KSIESTWA where nazwa='".$login."';";
		mysql_query($zapytanie,$polaczenie);

		//INFO
		$zapytanie="update INFO set liczba_ksiestw=liczba_ksiestw-1;";
		mysql_query($zapytanie,$polaczenie);

		//KSIAZKA
		$zapytanie="delete from KSIAZKA_ADR where login='".$login."' or znajomy='".$login."';";
	  mysql_query($zapytanie,$polaczenie);

	  //ZALOGOWANI
	  $zapytanie="delete from ZALOGOWANI where login='".$login."';";
		mysql_query($zapytanie,$polaczenie);

    return 1;
  }
  else return 0;

}
*/
//-----------------------------------------------------------------------
function dajHaslo(){
		global $polaczenie;
		global $login;

		$zapytanie="select haslo from PROFIL where login='$login'";
		$wynik=mysql_query($zapytanie,$polaczenie);
		$wiersz=mysql_fetch_array($wynik);

		return $wiersz["haslo"];
	}



//-----------------------------------------------------------------------

	function zmienHaslo($nowe_haslo){
		global $polaczenie;
		global $login;

		$zapytanie="update PROFIL set haslo='".md5($nowe_haslo)."' where login='$login';";
		return mysql_query($zapytanie,$polaczenie);
	}

//-----------------------------------------------------------------------

function zmienMaila($mail){

		global $CFG;

		global $login;

		global $polaczenie;



		$zapytanie="select mail from PROFIL where mail='".$mail."';";

		$wynik=mysql_query($zapytanie,$polaczenie);



		if (mysql_num_rows($wynik)==0){
			$tmp  = md5($login."a");
			$tresc = "Knight of Darkness\n\n".
                "Zmieni³e¶ swój adres e-mail na stronie {$CFG->adresSerwera}\n".
                "Potwierd¼ zmianê klikajac : {$CFG->adresSerwera}profil/zmianaMaila.php?login=$login&haslo=$tmp&mail=$mail\n";
			mail($mail,"Knight of Darkness", $tresc, "From: Knight of Darkness");
			return 1;

		}else return 0;





	}

//-----------------------------------------------------------------------

 function zmienMailaPOTW($login,$haslo,$mail){

    	global $polaczenie;



    	$zapytanie="select mail from PROFIL where mail='".$mail."';";

    	$wynik=mysql_query($zapytanie,$polaczenie);

    	if (mysql_num_rows($wynik)==0){

    		if(md5($login."a")==$haslo){

    			$zapytanie="update PROFIL set mail='".$mail."' where login='".$login."';";

    		    mysql_query($zapytanie,$polaczenie);

    		    return 1;

    		}else return 3;

    	}else return 4;

    }


//-------------------------------------------------------------- wyciag_dane ---
function wyciag_dane(&$dane){
    global $polaczenie;
    global $login;

    $zapytanie = "SELECT * FROM PROFIL WHERE login='".$login."';";
    $wynik = mysql_query($zapytanie, $polaczenie);
    $dane = mysql_fetch_array($wynik);
}


//-----------------------------------------------------------------------

	function zmienDane($dane){

			global $polaczenie;

			global $login;



			if($dane["wiek"]!=""){

				$curdate = date("Y-m-d");

				$timediff=strtotime($curdate)-strtotime($dane["wiek"]);

				if (($timediff>0)&&($timediff<1111273201)){

				$zapytanie="update PROFIL set wiek='".$dane["wiek"]."' where login='".$login."';";

				$wynik=mysql_query($zapytanie,$polaczenie);

				}else $error="ZLE PODANA DATA";

			}

			$zapytanie="update PROFIL set pomoc='".$dane["pomoc"]."', imie='".$dane["imie"]."', nazwisko='".$dane["nazwisko"]."', kraj='".$dane["kraj"]."', miasto='".$dane["miasto"]."', ujawnic='".$dane["ujawnic"]."' where login='".$login."';";

			$wynik=mysql_query($zapytanie,$polaczenie);

			return $error;

	}

function save_basic_data($data){
    global $login;
    $visible = ($data['visible'] == 'on')? 'true' : 'false';
    $help = ($data['help'] == 'on')? 'true' : 'false';

    $query = "UPDATE PROFIL SET imie='{$data['name']}', wiek='{$data['birthday']}',".
        "nazwisko='{$data['surname']}', miasto='{$data['city']}',pomoc='$help',".
        "kraj='{$data['country']}',ujawnic='$visible' WHERE login='$login'";
    return mysql_query($query);
}



//-----------------------------------------------------------------------------

?>
