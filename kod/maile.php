<?PHP
// RESTART ERY
exit(0);
  include "funkcjeBazy.php";
  otworz_polaczenie();
 
  
  	$SQL = "UPDATE KSIESTWA SET  ziemia=".$poczatek['ziemia'].", domy=".$poczatek['domy'].", warsztaty=".$poczatek['warsztaty'].", koszary=".$poczatek['koszary']."
          , farmy=".$poczatek['farmy'].", wiezyczki=".$poczatek['wiezyczki'].", kopalnie_zlota=".$poczatek['kopalnie_zlota']."
          , kopalnie_zelaza=".$poczatek['kopalnie_zelaza'].", rolnicy=".$poczatek['rolnicy'].", kowale=".$poczatek['kowale'].", bezrobotni=".$poczatek['bezrobotni']."
          , gornicy_zlota=".$poczatek['gornicy_zlota'].", gornicy_zelaza=".$poczatek['gornicy_zelaza'].", budowniczowie=".$poczatek['budowniczowie'].", lucznicy=".$poczatek['lucznicy'].", piechota=".$poczatek['piechota']."
          , husaria=".$poczatek['husaria'].", jedzenie=".$poczatek['jedzenie'].", zloto=".$poczatek['zloto'].", zelazo=".$poczatek['zelazo'].", bronie=".$poczatek['bronie']."
          , narzedzia=".$poczatek['narzedzia'].", co_buduje=".$poczatek['co_buduje'].", tury=".$poczatek['tury']." , morale=". $poczatek['morale'].";";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM BUDYNKI_SPECJALNE;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM HISTORIA;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM AUKCJE;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM attacks;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM BUDYNKI_SPECJALNE;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM CoalitionExchange;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    $SQL="DELETE FROM CoalitionExchange;";
    $wynik = mysql_query($SQL, $polaczenie);
    print mysql_error();
    
    zamknij_polaczenie();
?>
