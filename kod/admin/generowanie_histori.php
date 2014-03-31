<?php

require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../funkcje_infoOKsiestwie.php');



otworz_polaczenie();
$login = czyZalogowany();
if(czyAdmin() != 1){
   header('Location: ../zalogowany.php');
    exit(0);
 }
$nr_ery = 22; //ta era wystartowa³a 2010-01-02 oko³o 21:20
//exit;


//$SQL="select nazwa , (gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy) as ranking from KSIESTWA order by ranking DESC ;";
//  $SQL="insert into historia_ksiestwa values('".$wiersz['nazwa']."',1,$licznik,0,0)";
//$SQL="select nazwa , ziemia as ranking from KSIESTWA order by ranking DESC;";
$SQL = "delete from historia_ksiestwa where nr_ery = ".$nr_ery;
 $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
$SQL = "delete from historia_koalicje where nr_ery = ".$nr_ery;
 $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
//$SQL="select nazwa , (lucznicy+piechota+husaria+szpiedzy+straznicy) as ranking from KSIESTWA order by ranking DESC;";
    $SQL="select nazwa , (gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy) as ranking from KSIESTWA order by ranking DESC ;";
    $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
    $licznik=1;
    while($wiersz=mysql_fetch_array($wynik)){
      $SQL="insert into historia_ksiestwa values('".$wiersz['nazwa']."',".$nr_ery.",$licznik,0,0)";
      mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :( - k_g");
      $licznik++; 
    }
    
    $SQL="select nazwa , ziemia as ranking from KSIESTWA order by ranking DESC;";
    $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
    $licznik=1;
    while($wiersz=mysql_fetch_array($wynik)){
      $SQL="update  historia_ksiestwa set rank_2=$licznik where nr_ery = ".$nr_ery." and login = '".$wiersz['nazwa']."'";
      mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :( - k_z");
      $licznik++; 
    }
    
    $SQL="select nazwa , (lucznicy+piechota+husaria+szpiedzy+straznicy) as ranking from KSIESTWA order by ranking DESC;";
    $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
    $licznik=1;
    while($wiersz=mysql_fetch_array($wynik)){
      $SQL="update  historia_ksiestwa set rank_3=$licznik where nr_ery = ".$nr_ery." and login = '".$wiersz['nazwa']."'";
      mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :( - k_a");
    $licznik++; 
    }
    
    $SQL=" SELECT `koalicja` as nazwa , sum( gornicy_zlota+gornicy_zelaza+budowniczowie+kowale+rolnicy ) AS ranking
          FROM `KSIESTWA`
          GROUP BY `koalicja`
          ORDER BY ranking DESC";
  $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
  $licznik=1;
  while($wiersz=mysql_fetch_array($wynik)){
    $SQL="insert into historia_koalicje values('".$wiersz['nazwa']."',".$nr_ery.",$licznik,0,0)";
    //$SQL="update  historia_koalicje set rank_2=$licznik where nazwa = '".$wiersz['nazwa']."'";
    mysql_query($SQL, $polaczenie) or Die("koalicja gospodarka blad");
     $licznik++; 
  }
  
   $SQL="SELECT `koalicja` as nazwa , sum( ziemia ) AS ranking
          FROM `KSIESTWA`
          WHERE koalicja IS NOT NULL
          GROUP BY `koalicja`
          ORDER BY ranking DESC";
  
  $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
  $licznik=1;
  while($wiersz=mysql_fetch_array($wynik)){
    //$SQL="insert into historia_koalicje values('".$wiersz['nazwa']."',".$nr_ery.",$licznik,0)";
    $SQL="update  historia_koalicje set rank_2=$licznik where nr_ery = ".$nr_ery." and nazwa = '".$wiersz['nazwa']."'";
    mysql_query($SQL, $polaczenie)or Die("koalicja ziemia blad");
     $licznik++; 
  }

   $SQL="SELECT `koalicja` as nazwa , sum( lucznicy )+sum( piechota )+sum( husaria )+ sum( szpiedzy ) AS ranking
          FROM `KSIESTWA`
          WHERE koalicja IS NOT NULL
          GROUP BY `koalicja`
          ORDER BY ranking DESC";
  $wynik = mysql_query($SQL, $polaczenie)or Die("blad w pierwszym zapytaniu :(");
  $licznik=1;
  while($wiersz=mysql_fetch_array($wynik)){
    //$SQL="insert into historia_koalicje values('".$wiersz['nazwa']."',".$nr_ery.",$licznik,0)";
    $SQL="update  historia_koalicje set rank_3='$licznik' where nr_ery = ".$nr_ery." and nazwa = '".$wiersz['nazwa']."'";
    mysql_query($SQL, $polaczenie)or Die("koalicja armia blad");
     ++$licznik; 
  }
  
zamknij_polaczenie();

echo ":ASDASDASD:";
?>
