<?PHP
  require_once("../funkcjeBazy.php");
  require_once("../targ/funkcje_targ.php");
  exit;
  if(isset($_GET['wersja'])){
    print "0.0.2";
    exit;
  }
  otworz_polaczenie();
  $tmp=infoIloscGraczy();
  echo "<html><body style=\"font-size: 10px\"><center><table cellspacing='1' bgcolor='#efecde' width='120px' valign='top' height='200px'>";
  if(isset($_GET['info'])){
    echo "<tr><td colspan=\"3\" align=\"center\" bgcolor=\"#1941a5\"><font color='white'>Aktywnosc</font></td></tr> <tr bgcolor='#efecde'><td colspan=\"2\">Ilosc graczy</td><td>";
    echo $tmp['liczba_ksiestw']."</td></tr>";
    echo "<tr><td colspan=\"2\">Zalogowanych</td><td>".$tmp['ile_zalogowanych']."</td></tr>";
   // echo "<tr><td><font size=\"2\">Aktywnych</font></td><td>
   // <font size=\"2\">".$wiersz['ile']."</font></td></tr>";
  }
  if(isset($_GET['targ'])){
    $SQL="select co, sum(ile) as ile,min(cena) as cena from AUKCJE group by co ";
    $wynik = mysql_query($SQL, $polaczenie);
    $wiersz=mysql_fetch_array($wynik);
    echo "<tr align=\"center\" bgcolor=\"#1941a5\" style=\"color:white\"><td>Towar</td><td>Cena</td><td>Ile</td></tr>";
    echo "<tr><td>¯elazo</td><td>".$wiersz["cena"]."</td><td>".$wiersz["ile"]."</td></tr>";
    $wiersz=mysql_fetch_array($wynik);
    echo "<tr><td>Bronie</td><td>".$wiersz["cena"]."</td><td>".$wiersz["ile"]."</td></tr>";
    $wiersz=mysql_fetch_array($wynik);
    echo "<tr><td>Narzedzia</td><td>".$wiersz["cena"]."</td><td>".$wiersz["ile"]."</td></tr>";
    $wiersz=mysql_fetch_array($wynik);
    echo "<tr><td>Jedzenie</td><td>".$wiersz["cena"]."</td><td>".$wiersz["ile"]."</td></tr>";
  }
  echo "</table>";
  zamknij_polaczenie();
?>
