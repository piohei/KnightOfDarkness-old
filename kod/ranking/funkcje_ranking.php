<?PHP
/*
 do szablonu ranking przekazuje strukture
 str->oni tablica o indeksach nazwa, ranking, zaznacz(true jezeli wiersz ma byc
 podswietlony)
 str->jestem true jezeli jestem w tablicy oni

 */
//function ranking_gospodarka(){
//	global $polaczenie;
//	global $login;
//	global $info;
//	$SQL="select nazwa , (gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy) as ranking from KSIESTWA order by ranking DESC LIMIT 0,20;";
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$licznik=0;
//	$tmp->jestem= false;
//	while($wiersz=mysql_fetch_array($wynik)){
//		$tmp->oni[$licznik]=$wiersz;
//		if($wiersz['nazwa']==$login){
//			$tmp->jestem= true;
//			$tmp->oni[$licznik]["zaznacz"]= true;
//		}
//		$licznik++;
//	}
//	$mojRanking=$info['gornicy_zlota']+$info['gornicy_zelaza']+$info['budowniczowie']+$info['kowale']+$info['rolnicy'];
//	$SQL="select count(*)+1 as pozycja from KSIESTWA where (gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy) > ".$mojRanking.";";
//
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$tmp->ja=mysql_fetch_array($wynik);
//	$tmp->ja['ranking']=$mojRanking;
//	$tmp->ja['nazwa']=$login;
//	return $tmp;
//}
//function ranking_ziemia(){
//	global $polaczenie;
//	global $login;
//	global $info;
//	$SQL="select nazwa , ziemia as ranking from KSIESTWA order by ranking DESC LIMIT 0,20;";
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$licznik=0;
//	$tmp->jestem= false;
//	while($wiersz=mysql_fetch_array($wynik)){
//		$tmp->oni[$licznik]=$wiersz;
//		if($wiersz['nazwa']==$login){
//			$tmp->jestem= true;
//			$tmp->oni[$licznik]["zaznacz"]= true;
//		}
//		$licznik++;
//	}
//	$mojRanking=$info['ziemia'];
//	$SQL="select count(*)+1 as pozycja from KSIESTWA where ziemia > ".$mojRanking.";";
//
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$tmp->ja=mysql_fetch_array($wynik);
//	$tmp->ja['ranking']=$mojRanking;
//	$tmp->ja['nazwa']=$login;
//	return $tmp;
//}

//function ranking_armia(){
//	global $polaczenie;
//	global $login;
//	global $info;
//	$SQL="select nazwa , (lucznicy+piechota+husaria+szpiedzy+straznicy) as ranking from KSIESTWA order by ranking DESC LIMIT 0,20;";
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$licznik=0;
//	$tmp->jestem= false;
//	while($wiersz=mysql_fetch_array($wynik)){
//		$tmp->oni[$licznik]=$wiersz;
//		if($wiersz['nazwa']==$login){
//			$tmp->jestem= true;
//			$tmp->oni[$licznik]["zaznacz"]= true;
//		}
//		$licznik++;
//	}
//	$mojRanking=$info['lucznicy']+$info['piechota']+$info['husaria']+$info['szpiedzy']+$info['straznicy'];
//	$SQL="select count(*)+1 as pozycja from KSIESTWA where (lucznicy+piechota+husaria+szpiedzy+straznicy) > ".$mojRanking.";";
//
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$tmp->ja=mysql_fetch_array($wynik);
//	$tmp->ja['ranking']=$mojRanking;
//	$tmp->ja['nazwa']=$login;
//	return $tmp;
//}

function rankingKsiestwa($SUMA_SQL,$mojRanking){
	global $polaczenie;
	global $login;
	global $info;
	$SQL="select nazwa , ($SUMA_SQL) as ranking from KSIESTWA order by ranking DESC LIMIT 0,20;";
	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(".mysql_error());
	$licznik=0;
	$tmp->jestem= false;
	while($wiersz=mysql_fetch_array($wynik)){
		$tmp->oni[$licznik]=$wiersz;
		if($wiersz['nazwa']==$login){
			$tmp->jestem= true;
			$tmp->oni[$licznik]["zaznacz"]= true;
		}
		$licznik++;
	}
	$SQL="select count(*)+1 as pozycja from KSIESTWA where ($SUMA_SQL) > ".$mojRanking.";";

	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(".$SQL.mysql_error());
	$tmp->ja=mysql_fetch_array($wynik);
	$tmp->ja['ranking']=$mojRanking;
	$tmp->ja['nazwa']=$login;
	return $tmp;
}


function ranking_gospodarka(){
	global $info;
	$mojRanking = $info['gornicy_zlota']+$info['gornicy_zelaza']+$info['budowniczowie']+$info['kowale']+$info['rolnicy'];
	$SUMA_SQL = 'gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy';
	return rankingKsiestwa($SUMA_SQL,$mojRanking);
}

function ranking_wojownicy()
{
	$tmp;
	global $login;
	$connect = pdoConnect();
	
	$sql = "SELECT kills, who as kto from sum_all order by kills desc limit 10";
				
	$sth = $connect->prepare($sql);
	$sth->execute();
		
	$tmp->jestem = false;
	$licznik = 0;
	
	foreach($sth->fetchAll() as $value)
	{
		$tmp->oni[$licznik]["nazwa"]=$value["kto"];	
		$tmp->oni[$licznik]["ranking"]=$value["kills"];
		if($value["kto"] == $login)
		{
			$tmp->jestem = true;
			$tmp->oni[$licznik]["zaznacz"]= true;
		}
		++$licznik;
	}
					
	$connect = NULL;
	return($tmp);
}

function ranking_ziemia(){
	global $info;
	$mojRanking = $info['ziemia'];
	$SUMA_SQL = 'ziemia';
	return rankingKsiestwa($SUMA_SQL,$mojRanking);
}

function ranking_armia(){
	global $info;
	$mojRanking = $info['lucznicy']+$info['piechota']+$info['husaria']+$info['szpiedzy']+$info['straznicy'];
	$SUMA_SQL = 'lucznicy+piechota+husaria+szpiedzy+straznicy';
	return rankingKsiestwa($SUMA_SQL,$mojRanking);
}



function rankignKoalicja($SUMA_SQL){
	global $polaczenie;
	global $login;
	global $info;
	$mojaKoalicja=$info['koalicja'];
	$SQL="SELECT `koalicja` as nazwa , sum($SUMA_SQL) AS ranking
          FROM `KSIESTWA`
          WHERE koalicja IS NOT NULL
          GROUP BY `koalicja`
          ORDER BY ranking DESC
          LIMIT 10 ";
	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
	$licznik=0;
	$tmp->jestem= false;
	while($wiersz=mysql_fetch_array($wynik)){
		$tmp->oni[$licznik]=$wiersz;
		if($wiersz['nazwa']==$mojaKoalicja){
			$tmp->jestem= true;
			$tmp->oni[$licznik]["zaznacz"]= true;
		}
		$licznik++;
	}
	if($mojaKoalicja==""){
		$tmp->ja['pozycja']="brak";
		$tmp->ja['ranking']="brak";
		$tmp->ja['nazwa']="Nie jeste�<br> w 풹dnej koalicji";
	}else{
		if(!$tmp->jestem){
			$SQL ="SELECT sum($SUMA_SQL) AS pow FROM KSIESTWA WHERE koalicja='".$mojaKoalicja."';";
			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu1 :(");
			$powKoalicji=mysql_fetch_array($wynik);
			$mojRanking=$powKoalicji['pow'];
			$SQL="SELECT  koalicja
                FROM KSIESTWA where koalicja IS NOT NULL
                GROUP BY koalicja 
                having sum($SUMA_SQL) > ".$mojRanking.";";
			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu2 :(");
			$tmp->ja['pozycja']=mysql_num_rows($wynik)+1;
			$tmp->ja['ranking']=$mojRanking;
			$tmp->ja['nazwa']=$mojaKoalicja;
		}
	}
	return $tmp;
}


//function ranking_koalicja_ziemia(){
//	global $polaczenie;
//	global $login;
//	global $info;
//	$mojaKoalicja=$info['koalicja'];
//	$SQL="SELECT `koalicja` as nazwa , sum( ziemia ) AS ranking
//          FROM `KSIESTWA`
//          WHERE koalicja IS NOT NULL
//          GROUP BY `koalicja`
//          ORDER BY ranking DESC
//          LIMIT 10 ";
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$licznik=0;
//	$tmp->jestem= false;
//	while($wiersz=mysql_fetch_array($wynik)){
//		$tmp->oni[$licznik]=$wiersz;
//		if($wiersz['nazwa']==$mojaKoalicja){
//			$tmp->jestem= true;
//			$tmp->oni[$licznik]["zaznacz"]= true;
//		}
//		$licznik++;
//	}
//	if($mojaKoalicja==""){
//		$tmp->ja['pozycja']="brak";
//		$tmp->ja['ranking']="brak";
//		$tmp->ja['nazwa']="Nie jeste�<br> w 풹dnej koalicji";
//	}else{
//		if(!$tmp->jestem){
//			$SQL ="SELECT sum( ziemia ) AS pow FROM KSIESTWA WHERE koalicja='".$mojaKoalicja."';";
//			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu1 :(");
//			$powKoalicji=mysql_fetch_array($wynik);
//			$mojRanking=$powKoalicji['pow'];
//			$SQL="SELECT  koalicja
//                FROM KSIESTWA where koalicja IS NOT NULL
//                GROUP BY koalicja 
//                having sum( ziemia )>".$mojRanking.";";
//			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu2 :(");
//			$tmp->ja['pozycja']=mysql_num_rows($wynik)+1;
//			$tmp->ja['ranking']=$mojRanking;
//			$tmp->ja['nazwa']=$mojaKoalicja;
//		}
//	}
//	return $tmp;
//}
//function ranking_koalicja_armia(){
//	global $polaczenie;
//	global $login;
//	global $info;
//	$mojaKoalicja=$info['koalicja'];
//	$SQL="SELECT `koalicja` as nazwa , sum( lucznicy )+sum( piechota )+sum( husaria )+ sum( szpiedzy ) AS ranking
//          FROM `KSIESTWA`
//          WHERE koalicja IS NOT NULL
//          GROUP BY `koalicja`
//          ORDER BY ranking DESC
//          LIMIT 10 ";
//	$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//	$licznik=0;
//	$tmp->jestem= false;
//	while($wiersz=mysql_fetch_array($wynik)){
//		$tmp->oni[$licznik]=$wiersz;
//		if($wiersz['nazwa']==$mojaKoalicja){
//			$tmp->jestem= true;
//			$tmp->oni[$licznik]["zaznacz"]= true;
//		}
//		$licznik++;
//	}
//	if($mojaKoalicja==""){
//		$tmp->ja['pozycja']="brak";
//		$tmp->ja['ranking']="brak";
//		$tmp->ja['nazwa']="Nie jeste�<br> w 풹dnej koalicji";
//	}else{
//		if(!$tmp->jestem){
//			$SQL ="SELECT sum( lucznicy )+sum( piechota )+sum( husaria )+ sum( szpiedzy ) AS pow FROM KSIESTWA WHERE koalicja='".$mojaKoalicja."';";
//			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu1 :(");
//			$powKoalicji=mysql_fetch_array($wynik);
//			$mojRanking=$powKoalicji['pow'];
//			$SQL="SELECT  koalicja
//                FROM KSIESTWA where koalicja IS NOT NULL
//                GROUP BY koalicja 
//                having sum( lucznicy )+sum( piechota )+sum( husaria )+ sum( szpiedzy )>".$mojRanking.";";
//			$wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu2 :(");
//			$tmp->ja['pozycja']=mysql_num_rows($wynik)+1;
//			$tmp->ja['ranking']=$mojRanking;
//			$tmp->ja['nazwa']=$mojaKoalicja;
//		}
//	}
//	return $tmp;
//}

function  ranking_koalicja_armia(){
	$SUMA_SQL = ' lucznicy + piechota + husaria + szpiedzy ';
	return rankignKoalicja($SUMA_SQL);
}

function  ranking_koalicja_ziemia(){
	$SUMA_SQL = ' ziemia ';
	return rankignKoalicja($SUMA_SQL);
}

function  ranking_koalicja_gospodarka(){
	$SUMA_SQL = ' gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy ';
	return rankignKoalicja($SUMA_SQL);
}


function ranking($tryb){

	switch ($tryb) {
		case 'armia':
			return ranking_armia();
			break;
		case 'gospodarka':
			return ranking_gospodarka();
			break;
		case 'koalicja_ziemia':
			return ranking_koalicja_ziemia();
			break;
		case 'ziemia':
			return ranking_ziemia();
			break;
		case 'koalicja_armia':
			return ranking_koalicja_armia();
			break;
		case 'koalicja_gospodarka':
			return ranking_koalicja_gospodarka();
			break;
		case 'wojownicy' :
			return( ranking_wojownicy() );
			break;
	}

}
?>
