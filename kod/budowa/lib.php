<?PHP
//spis specjalnych
function spisSpecjalnych($strona = 0){
		$limit = 5;
    $podstawowe=listaBudynkowSpecjalnych("zero",$limit*$strona,$limit);
    $budynki=listaBudynkowSpecjalnych("id");
    $i=0;
    
    if(!isset($podstawowe))
    	return;
    	
    foreach($podstawowe as $podst){
      $j=0;
      $tmp[$i][$j]=$podst; 
      while($tmp[$i][$j]["nastepny"]!=0){
        $j++;
        $tmp[$i][$j]=$budynki[$tmp[$i][$j-1]["nastepny"]];
      }
      $i++;
    }
    return $tmp;
    
}  
//budynki specjalne
// tryb nazwa indeksowane nazwa |id indeksowane id |zero tylko podstawowe
function listaBudynkowSpecjalnych($tryb="nazwa", $begin =0, $end =0){
    global $polaczenie;
    if($tryb!="zero")
        $SQL="SELECT * FROM `BUDYNKI_SPECJALNE_WZORY`;";
    elseif($end!=0)
    		$SQL= "SELECT * FROM `BUDYNKI_SPECJALNE_WZORY` WHERE poprzedni=0 LIMIT ".$begin.",".$end."";
    else
        $SQL="SELECT * FROM `BUDYNKI_SPECJALNE_WZORY` WHERE poprzedni=0;";
    $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 1");
    while($wiersz=mysql_fetch_array($wynik)){
      if($tryb=="nazwa")
        $tmp[$wiersz['nazwa']]=$wiersz;
      else
        $tmp[$wiersz['id']]=$wiersz;
     
    }
    return $tmp;
}
function rozbudowa($login,$co){
    global $polaczenie;
    $SQL="SELECT * FROM BUDYNKI_SPECJALNE WHERE id=".$co.";";
    $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania rozbudowa 1");
    $twojBudynek=mysql_fetch_array($wynik);
    if(mysql_num_rows($wynik)!=1){
        return "NIe ladnie hakowac !!!";
    }
    if($twojBudynek["postep"]!=1){
        return "I po co odwie¿asz ta strone :) ";
    }
    $SQL="SELECT * FROM BUDYNKI_SPECJALNE_WZORY WHERE poprzedni=".$twojBudynek["id_budynku"].";";
    $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania rozbudowa 2");
    $nastepny=mysql_fetch_array($wynik);
    $SQL="UPDATE BUDYNKI_SPECJALNE SET id_budynku =".$nastepny['id']." ,postep = 0 
            WHERE czyj='".$login."' AND id=".$co.";";
    $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano rozbudowa 3 update");
    
}

function budujSpecjalny($login,$id,$ile_pkt,$pkty_budowy){
  global $polaczenie;
  $wzory = listaBudynkowSpecjalnych("id");
  $SQL="SELECT * FROM BUDYNKI_SPECJALNE WHERE id=".$id.";";
  $wynik=mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 5");
  $budynek=mysql_fetch_array($wynik);
  $wynik="";
  if($ile_pkt!= ""){
			settype($ile_pkt, "integer");
			if($ile_pkt<=0){
				return "Wprowadz liczbe dodatnia";
	   }
	   if($ile_pkt>$pkty_budowy){
        return "Oj nie masz az tyle punktow budowy";
     }
  }else return "Wpisz cos  !!";
  	if(($budynek["postep"]*($wzory[$budynek["id_budynku"]]["koszt"]) + $ile_pkt) > ($wzory[$budynek["id_budynku"]]["koszt"]))
  		$ile_pkt = 	($wzory[$budynek["id_budynku"]]["koszt"]) - $budynek["postep"]*($wzory[$budynek["id_budynku"]]["koszt"]);
		$budynek["postep"]=$budynek["postep"]+ $ile_pkt/($wzory[$budynek["id_budynku"]]["koszt"])+0.0000001;
	if($budynek["postep"]>=1){ 
    $wynik="Wybudowano budynek specjalny:".$wzory[$budynek["id_budynku"]]["nazwa"];
    $budynek["postep"]=1;
  }
  $wynik="budujesz sobie: ".$wzory[$budynek["id_budynku"]]["nazwa"];
  
  $SQL="UPDATE KSIESTWA SET co_buduje=co_buduje - ".$ile_pkt." WHERE nazwa='".$login."';";
  mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 6");
  
  $SQL="UPDATE BUDYNKI_SPECJALNE SET postep=".$budynek["postep"]." WHERE id=".$id.";";
  mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 5");
  
  return $wynik;
}
function burzSpecjalny($login,$id){
  global $polaczenie;
  $SQL="DELETE FROM BUDYNKI_SPECJALNE WHERE id=".$id." AND czyj='".$login."';";
  mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 6- burzenie");
}

function uszkodzSpecjalny($id,$uszkodzenie){
  global $polaczenie;
  $SQL="UPDATE BUDYNKI_SPECJALNE SET postep = postep -$uszkodzenie WHERE id=".$id.";";
  mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 6- burzenie".$SQL);
}

function rezygnujSpecjalny($login,$id){
  global $polaczenie;
   
 
  $SQL="SELECT id_budynku FROM BUDYNKI_SPECJALNE WHERE id=".$id." AND czyj='".$login."';";
  $wynik=mysql_query($SQL, $polaczenie);
  $wiersz=mysql_fetch_array($wynik);
  $id_wzorca=$wiersz["id_budynku"];
  
  $SQL="SELECT poprzedni FROM BUDYNKI_SPECJALNE_WZORY WHERE id=".$id_wzorca.";";
  $wynik=mysql_query($SQL, $polaczenie);
  $wiersz=mysql_fetch_array($wynik);
  $poprzednik=$wiersz["poprzedni"];
  
  if ($poprzednik=="0"){
      $SQL="DELETE FROM BUDYNKI_SPECJALNE WHERE id=".$id." AND czyj='".$login."';";
      mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania rezygnowanie/burzenie");
  }
  else{
  
      $SQL="UPDATE BUDYNKI_SPECJALNE SET id_budynku=".$poprzednik.", postep=1 WHERE id=".$id." AND czyj='".$login."';";
       mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania : rezygnowanie");
   }
}
$budynki_bufor;
function budowaneIwybudowane($kto){
  global $budynki_bufor;
  global $polaczenie;
  if(isset($budynki_bufor[$kto])) return $budynki_bufor[$kto];
  $SQL="SELECT * FROM BUDYNKI_SPECJALNE WHERE czyj='".$kto."';";
  $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 3");
  $licznik=1;
  $wzory=listaBudynkowSpecjalnych("id");

  if(mysql_num_rows($wynik)<5)
    $tmp["czyMoznaNowe"]=true;
  else
     $tmp["czyMoznaNowe"]=false;
  
  while($wiersz=mysql_fetch_array($wynik)){
      $postep=floor(($wiersz["postep"]-floor($wiersz["postep"]))*100);
      settype($postep,"integer");
      $wiersz["postepwpr"]=$postep;
      $wiersz["ileJeszczePkt"]=ceil($wzory[$wiersz["id_budynku"]]["koszt"]-$wzory[$wiersz["id_budynku"]]["koszt"]*$wiersz["postep"]);
      $wiersz["nazwa"]=$wzory[$wiersz["id_budynku"]]["nazwa"];
      $wiersz["opis"]=$wzory[$wiersz["id_budynku"]]["opis"];
      $wiersz["nastepny"]=$wzory[$wiersz["id_budynku"]]["nastepny"];
      $wiersz["koszt"]=$wzory[$wiersz["id_budynku"]]["koszt"];
      $wiersz["bonus"]=$wzory[$wiersz["id_budynku"]]["bonus"];
      $wiersz["nazwa_bonusu"]=$wzory[$wiersz["id_budynku"]]["nazwa_bonusu"];
      $wiersz["img"]=$wzory[$wiersz["id_budynku"]]["img"];
      $tmp[$licznik]=$wiersz;
      $licznik++;
  }
     
  $budynki_bufor[$kto] = $tmp;
  return $tmp;
}
function rozpocznijBudowe($kto,$co){
  global $polaczenie;
  $SQL="SELECT * FROM BUDYNKI_SPECJALNE WHERE czyj='".$kto."';";
  $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 3");
  if(mysql_num_rows($wynik)>=5) return;
  $wzory=listaBudynkowSpecjalnych();
  $SQL="INSERT INTO BUDYNKI_SPECJALNE values('".$kto."',".$wzory[$co]['id'].",0,null);";
  $wynik = mysql_query($SQL, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 4");
}
//budynki zwykle budowanie
function budowa($co,$dane){
	global $kosztBudowy;
	$dane["wynik"]="";
		if($dane[$co]!= ""){
			settype($dane[$co], "integer");
			if($dane[$co]<=0){
				$dane["wynik"]="Wprowadz liczbe dodatnia";
				$dane["czyBlad"]=true;
			}
			if($dane["pkt"]<$dane[$co]){
				$dane["wynik"]=$dane["wynik"]."Za ma³o punktow budowy ";
				$dane["czyBlad"]=true;
			}
       		if(!$dane["czyBlad"]){
			     $dane["pkt"]=$dane["pkt"]-$dane[$co];
			     $dane[$co]=$dane[$co]/$kosztBudowy[$co];
			     $ileWybudowano=round($dane[$co],6)*100;
			    $dane["wynik"]="Wybudowano ".$co.":".$ileWybudowano."%.<br>";
			 }

		}else{$dane[$co]=0;}
	return $dane;
}	

function buduj($login,$dane){
		global $polaczenie;
		global $budynki2;

		$dane["wynik"]="";
		$wynikBudowy="";

		$dane["czyBlad"]=false;
    

		$dane=budowa("domy",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("warsztaty",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("farmy",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("kopalnie_zlota",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("kopalnie_zelaza",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("wiezyczki",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("koszary",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=budowa("gildie",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=budowa("straznice",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=budowa("rynki",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=budowa("zamek",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

    $dane["niezabudowanaZiemia"]=$dane["ziemia"]-$dane['domy'.'_old']-$dane['warsztaty'.'_old']
                                  -$dane['wiezyczki'.'_old']-$dane['koszary'.'_old']-$dane['kopalnie_zlota'.'_old']
                                  -$dane['kopalnie_zelaza'.'_old']-$dane['farmy'.'_old']-$dane['gildie'.'_old']
                                  -$dane['straznice'.'_old']-$dane['rynki'.'_old']-$dane['zamek'.'_old']
                                  -$dane['domy']-$dane['warsztaty']-$dane['wiezyczki']-$dane['koszary']
                                  -$dane['kopalnie_zlota']-$dane['kopalnie_zelaza']-$dane['farmy']
                                  -$dane['gildie']-$dane['straznice']                                 -$dane['rynki'] - $dane["zamek"];
		if($dane["niezabudowanaZiemia"]<0) return "Nie masz ju¿ wolnej ziemi do budowania";
    $zapytanie="update KSIESTWA set domy=domy+".$dane['domy'].",
						warsztaty=warsztaty+".$dane['warsztaty'].",
						farmy=farmy+".$dane['farmy'].",
						kopalnie_zlota=kopalnie_zlota+".$dane['kopalnie_zlota'].",
						kopalnie_zelaza=kopalnie_zelaza+".$dane['kopalnie_zelaza'].",
						wiezyczki=wiezyczki+".$dane['wiezyczki'].",
						gildie=gildie+".$dane['gildie'].",
						straznice=straznice+".$dane['straznice'].",
						rynki=rynki+".$dane['rynki'].",
						co_buduje=".$dane['pkt'].",
						koszary=koszary+".$dane['koszary'].",
						zamek=zamek+".$dane["zamek"]." where nazwa='".$login."';";
		$wynik = mysql_query($zapytanie, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 2");
		
		return $wynikBudowy;
	}
	
//budynki zwykle NISZCZENIE
function burzenie($co,$dane){
	global $kosztBudowy;
	$dane["wynik"]="";
		if($dane[$co]!= ""){
			settype($dane[$co], "integer");
			if($dane[$co]<=0){
				$dane["wynik"]="Wprowadz liczbe dodatnia";
				$dane["czyBlad"]=true;
			}
			if($dane["pkt"]<$dane[$co]){
				$dane["wynik"]=$dane["wynik"]."Za ma³o punktow budowy ";
				$dane["czyBlad"]=true;
			}
			if($dane[$co.'_old']<($dane[$co]/$kosztBudowy[$co])){
				$dane["wynik"]=$dane["wynik"]."Chcesz wyburzyæ wiêcej ni¿ masz to nie m±dre :)";
				$dane["czyBlad"]=true;
			}
			if(!$dane["czyBlad"]){
			     $dane["pkt"]=$dane["pkt"]-$dane[$co];
			     $dane[$co]=$dane[$co]/$kosztBudowy[$co];
			     $ileWybudowano=round($dane[$co],6)*100;
			    $dane["wynik"]="Wyburzono ".$co.":".$ileWybudowano."%.<br>";
			 }

		}else{$dane[$co]=0;}
	return $dane;
}	

function burz($login,$dane){
		global $polaczenie;
		global $budynki2;

		$dane["wynik"]="";
		$wynikBudowy="";

		$dane["czyBlad"]=false;


		$dane=burzenie("domy",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("warsztaty",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("farmy",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("kopalnie_zlota",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("kopalnie_zelaza",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("wiezyczki",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("koszary",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=burzenie("gildie",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=burzenie("straznice",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$dane=burzenie("rynki",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];

		$dane=burzenie("zamek",$dane);
    		$wynikBudowy=$wynikBudowy.$dane["wynik"];
		if($dane["czyBlad"]==true) return $dane["wynik"];
		
		$zapytanie="update KSIESTWA set domy=domy-".$dane['domy'].",
						warsztaty=warsztaty-".$dane['warsztaty'].",
						farmy=farmy-".$dane['farmy'].",
						kopalnie_zlota=kopalnie_zlota-".$dane['kopalnie_zlota'].",
						kopalnie_zelaza=kopalnie_zelaza-".$dane['kopalnie_zelaza'].",
						wiezyczki=wiezyczki-".$dane['wiezyczki'].",
						gildie=gildie-".$dane['gildie'].",
						straznice=straznice-".$dane['straznice'].",
						rynki=rynki-".$dane['rynki'].",
						zamek=zamek-".$dane['zamek'].",
						co_buduje=".$dane['pkt'].",
						koszary=koszary-".$dane['koszary']." where nazwa='".$login."';";
		$wynik = mysql_query($zapytanie, $polaczenie)or Die("budowa/lib.php -> nie wykonano zapytania 2- burzenie");
		return $wynikBudowy;
	}
	
	function zwrocBonus($nazwaBonusu,$login){
    $twojeBudynki=budowaneIwybudowane($login);
    $bonus=1;

    foreach($twojeBudynki as $budynek){
        if(($budynek["postep"]==1)&&($budynek["nazwa_bonusu"]==$nazwaBonusu)){
            //$bonus=$bonus*($budynek["bonus"]/100+1);
            $bonus=$bonus+$budynek["bonus"]/100;
        }
    }
    return $bonus;
}
?>
