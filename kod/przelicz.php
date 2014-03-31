
	<?PHP
	function otworz_polaczenie(){
		global $polaczenie;
		$serwer = "127.0.0.1";
		$uzytkownik = "test";
		$haslo = "";
		$polaczenie = mysql_connect($serwer, $uzytkownik, $haslo);
		if(!$polaczenie)print "Nie mozna sie polaczyc z baza";
		$baza = "test";
		mysql_select_db($baza, $polaczenie);
	}
	function zamknij_polaczenie(){
		global $polaczenie;
		mysql_close($polaczenie);
	}
	function przelicz(){
		global $polaczenie;

		$zapytanie = "delete from wyniki;";
		$wynik = mysql_query($zapytanie, $polaczenie);

		$zapytanie = "select * from ataki;";
		$wynik = mysql_query($zapytanie, $polaczenie);
		while($wiersz = mysql_fetch_array($wynik)){
			$kto  = $wiersz['kto'];
			$kogo = $wiersz['kogo'];
			$ileZ = $wiersz['iluZolnierzy'];
			$zapytanie = "select * from ksiestwa where login='".$kogo."';";
		    $wynik = mysql_query($zapytanie, $polaczenie);
		    $atakowany=mysql_fetch_array($wynik);
			print "<br>OBRONA".$atakowany['zolnierze'];
			print "<br>ATAK".$ileZ;
			if($atakowany['zolnierze']>=$ileZ){
				//Wygral broniecy sie
				$zapytanie="insert into wyniki values('".$kogo."','Odparles Atak :".$kto." ');";
				mysql_query($zapytanie, $polaczenie);
				$zapytanie="insert into wyniki values('".$kto."','Nie przelamales obrony :".$kogo." ');";
				mysql_query($zapytanie, $polaczenie);
				print "Atak Obroniony";
			}else{
				$ileZiemi=(int)$atakowany['ziemia']*0.3;
				if(($atakowany['ziemia']-$ileZiemi)<$atakowany['domy'])
					$zniszczoneDomy=$atakowany['domy']-$atakowany['ziemia']+$ileZiemi;
				else
					$zniszczoneDomy=0;
				$zapytanie="update ksiestwa set ziemia=ziemia-".$ileZiemi.", domy=domy-".$zniszczoneDomy." where login='".$kogo."';";
				mysql_query($zapytanie, $polaczenie);
				$zapytanie="update ksiestwa set ziemia=ziemia+".$ileZiemi.", domy=domy+".$zniszczoneDomy." where login='".$kto."';";
				mysql_query($zapytanie, $polaczenie);
				$zapytanie="insert into wyniki values('".$kogo."','Zaatakowa³ cie :".$kto." i stracileœ: ".$ileZiemi." ziemi i: ".$zniszczoneDomy." domow');";
				mysql_query($zapytanie, $polaczenie);
				$zapytanie="insert into wyniki values('".$kto."','Pokona³eœ :".$kogo." i zdoby³eœ ".$ileZiemi." arków ziemi i: ".$zniszczoneDomy." domow');";
				mysql_query($zapytanie, $polaczenie);

			}
		}
		$zapytanie = "delete from ataki;";
		$wynik = mysql_query($zapytanie, $polaczenie);

		$zapytanie="update ksiestwa set tury=12, zloto=zloto+1000;";
		mysql_query($zapytanie, $polaczenie);


	}
	otworz_polaczenie();
	przelicz();
	?>
