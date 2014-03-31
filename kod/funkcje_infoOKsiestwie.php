<?php
//*****************************************************************************
//  Funkcje obslugujace INFOOKSIESTWIE.
//*****************************************************************************
//-----------------------------------------------------------------------------
global $CFG;
require_once($CFG->katalogStrony.'listaZalogowanych/class.Zalogowani.php');
//require_once($CFG->katalogStrony.'parametry.php');
//zwraca tablice indeksowana nazwami atrybutow
function infoOksiestwie($login){
            global $budynki;
            $zapytanie = "select KSIESTWA.* from KSIESTWA where nazwa ='".$login."';";
            $wynik = mysql_query($zapytanie);
            $wiersz = mysql_fetch_array($wynik);
            foreach ($wiersz as $klucz => $wartosc){
                if(!is_int($klucz)){
                    $tmp[$klucz]=$wartosc;
                }
            }
            $tmp["rank"] = getRank($login); 
            
            $tmp['kopalnie_zlota_pr']=round($tmp['kopalnie_zlota']-floor($tmp['kopalnie_zlota']),4);
            $tmp['kopalnie_zlota']=floor($tmp['kopalnie_zlota']);
            $tmp['kopalnie_zelaza_pr']=round($tmp['kopalnie_zelaza']-floor($tmp['kopalnie_zelaza']),4);
            $tmp['kopalnie_zelaza']=floor($tmp['kopalnie_zelaza']);
            $tmp['warsztaty_pr']=round($tmp['warsztaty']-floor($tmp['warsztaty']),4);
            $tmp['warsztaty']=floor($tmp['warsztaty']);
            $tmp['farmy_pr']=round($tmp['farmy']-floor($tmp['farmy']),4);
            $tmp['farmy']=floor($tmp['farmy']);
            $tmp['koszary_pr']=round($tmp['koszary']-floor($tmp['koszary']),4);
            $tmp['koszary']=floor($tmp['koszary']);
            $tmp['domy_pr']=round($tmp['domy']-floor($tmp['domy']),4);
            $tmp['domy']=floor($tmp['domy']);
            $tmp['gildie_pr']=round($tmp['gildie']-floor($tmp['gildie']),4);
            $tmp['gildie']=floor($tmp['gildie']);
            $tmp['straznice_pr']=round($tmp['straznice']-floor($tmp['straznice']),4);
            $tmp['straznice']=floor($tmp['straznice']);
            $tmp['wiezyczki_pr']=round($tmp['wiezyczki']-floor($tmp['wiezyczki']),4);
            $tmp['wiezyczki']=floor($tmp['wiezyczki']);
            $tmp['rynki_pr']=round($tmp['rynki']-floor($tmp['rynki']),4);
            $tmp['rynki']=floor($tmp['rynki']);
            $tmp['zamek_pr']=round($tmp['zamek']-floor($tmp['zamek']),6);
            $tmp['zamek']=floor($tmp['zamek']);
            //$tmp['co_buduje']=$budynki[$tmp["co_buduje"]];
            $tmp['ileZalogowanych']=Zalogowani::ileZalogowanych();
            return $tmp;
    }
//-----------------------------------------------------------------------
function ileWiadomosci(){
            global $polaczenie;
            global $login;
            $zapytanie="select * from WIADOMOSCI where do_kogo='".$login."';";
            $wynik=mysql_query($zapytanie,$polaczenie);
            //$wiersz=mysql_fetch_array($wynik);
            $ilosc_wierszy=mysql_num_rows($wynik);
            $zapytanie="select * from ZAPROSZENIA where kogo='".$login."' and stan=0;";
            $wynik=mysql_query($zapytanie,$polaczenie);
            $ilosc_wierszy+=mysql_num_rows($wynik);
            return $ilosc_wierszy;
    }
//----------------------------------------------------------------------
    function ilePrzeczytanych(){
            global $polaczenie;
            global $login;
            $zapytanie="select * from WIADOMOSCI where do_kogo='".$login."' and przeczytane=0;";
            $wynik=mysql_query($zapytanie,$polaczenie);
            $ilosc_wierszy=mysql_num_rows($wynik);
            $zapytanie="select * from ZAPROSZENIA where kogo='".$login."' and stan=0;";
            $wynik=mysql_query($zapytanie,$polaczenie);
            $ilosc_wierszy+=mysql_num_rows($wynik);
            return $ilosc_wierszy;
    }
//----------------------------------------------------------------------
    function kogoatakuje(){
        global $login;

        $zapytanie="select * from WOJNY where kto ='".$login."' and historia!=1;";
        $wynik=mysql_query($zapytanie);
        $i=0;
        while($wiersz=mysql_fetch_array($wynik)){
            $tmp[$i]->kogo = $wiersz["kogo"];
            $tmp[$i]->kiedy = $wiersz["kiedy"];
            $tmp[$i]->id = $wiersz["id"];
            $tmp[$i]->tury = $wiersz["ilosc_tur_do_konca"];
            $i++;
        }
        return $tmp;
    }

//----------------------------------------------------------------------
    function kogoSzpieguje(){
        global $login;

        $zapytanie="select * from Spyattack where who ='".$login."' and history!=1;";
        $wynik=mysql_query($zapytanie);
        $i=0;
        while($wiersz=mysql_fetch_array($wynik)){
            $tmp[$i]->kogo = $wiersz["whom"];
            $tmp[$i]->kiedy = $wiersz["date"];
            $tmp[$i]->id = $wiersz["id"];
            $tmp[$i]->tury = $wiersz["turns"];
            $i++;
        }
        return $tmp;
    }
//----------------------------------------------------------------------
    function ktomnieatakuje(){
        global $login;

        $zapytanie="select * from WOJNY where kogo ='".$login."'and historia!=2;";
        $wynik=mysql_query($zapytanie);
        $i=0;
        while($wiersz=mysql_fetch_array($wynik)){
            $tmp[$i]->kto = $wiersz["kto"];
            $tmp[$i]->id = $wiersz["id"];
            $tmp[$i]->kiedy = $wiersz["kiedy"];
            $tmp[$i]->tury = $wiersz["ilosc_tur_do_konca"];
            $i++;
        }
        return $tmp;
    }

//----------------------------------------------------------------------
    function ktomnieSzpieguje(){
        global $login;

        $zapytanie="select * from Spyattack where whom ='".$login."'and history!=2 and success='f';";
        $wynik=mysql_query($zapytanie);
        $i=0;
        while($wiersz=mysql_fetch_array($wynik)){
            $tmp[$i]->kto = $wiersz["who"];
            $tmp[$i]->id = $wiersz["id"];
            $tmp[$i]->kiedy = $wiersz["date"];
            $tmp[$i]->tury = $wiersz["turns"];
            $i++;
        }
        return $tmp;
    }
//-----------------------------------------------------------------------
  function ustawieniaOsobiste(){

    global $login;
    $zapytanie="select * from PROFIL where login='".$login."';";
    $wynik=mysql_query($zapytanie);
    $wiersz=mysql_fetch_array($wynik);
    return $wiersz;
  }
//-----------------------------------------------------------------------
function czyAdmin(){
    global $login;
    $zapytanie="select login,aktywny from ADMINI where login='".$login."';";
    $wynik=mysql_query($zapytanie);
    if (mysql_num_rows($wynik)==1) return 1;
    return 0;
}
//-----------------------------------------------------------------------

function czyCesarz($login, $koalicja = NULL)
{
	$connect = pdoConnect();
	
	if($koalicja == NULL)
		$sql = "SELECT czlonek_1 FROM KOALICJA";
	else
		$sql = "SELECT czlonek_1 FROM KOALICJA WHERE nazwa = :koalicja";

	$sth = $connect->prepare($sql);
	$sth->bindParam(":koalicja", $koalicja, PDO::PARAM_INT);		
	$sth->execute();

	$result = false;	
	foreach($sth->fetchAll() as $value)
		if($value["czlonek_1"] == "$login")
		{
			$result = true;
			break;
		}	
		
	$connect = NULL;
	
	return($result);
}

function getRank($username)
	{
		$sql ="select rank from PROFIL where login = '".$username."'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		
		switch($row["rank"])
		{
			case 1: $rank = "<font color=\"\">szlachcic</font>";	break;	
			case 2: $rank = "<font color=\"\">towarzysz"; break;
			case 3: $rank = "<font color=\"\">chor±¿y</font>"; break;
			case 4: $rank = "<font color=\"\">porucznik</font>"; break;
			case 5: $rank = "<font color=\"\">pu³kownik</font>"; break;
			case 6: $rank = "<font color=\"\">hetman polny</font>"; break;
			case 7: $rank = "<font color=\"\">hetman wielki</font>"; break;	
			case 8: $rank = "<font color=\"\">król</font>"; break;	
			case 10: $rank = "Mentor / Trener Akademii Wojskowej "; break;	
			case 11: $rank = "<font color=\"#410303\">Demon / Multi Hunter</font>"; break;
			case 12: $rank = "<font color=\"#410303\">Lucyfer / Administrator</font>"; break;
		}
		return($rank);
	}
?>
