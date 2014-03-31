<?php
require_once('../config.php');
require_once('../funkcjeBazy.php');
require_once('../funkcje_infoOKsiestwie.php');


function era_reset()
{
  global $poczatek;
  global $smarty;
  global $nr_ery;

unlink($smarty->compile_dir."/koniec.php");
$plik = fopen($smarty->compile_dir."/koniec.php",'a+');
fclose($plik);

$SQL="delete from BUDYNKI_SPECJALNE";
$wynik=mysql_query($SQL)or Die("z1");

$SQL="delete from AUKCJE";
$wynik=mysql_query($SQL)or Die("z2");

$SQL="delete from CoalitionExchange";
$wynik=mysql_query($SQL)or Die("z3");

$SQL="delete from CoalitionExchangeLog";
$wynik=mysql_query($SQL)or Die("z3-a");

$SQL="delete from attacks";
$wynik=mysql_query($SQL)or Die("z4");

$SQL="delete from attacks_log";
$wynik=mysql_query($SQL)or Die("z4-a");

$SQL="delete from spy_log";
$wynik=mysql_query($SQL)or Die("z4-a");

$SQL="delete from AUKCJE";
$wynik=mysql_query($SQL)or Die("z5");

$SQL="delete from budynki_koncowe";
$wynik=mysql_query($SQL)or Die("z6");

$SQL="update KOALICJA SET id_budynku_koncowego=NULL";
$wynik=mysql_query($SQL)or Die("z7");

$SQL="delete from targ_log";
$wynik=mysql_query($SQL)or Die("z9");

//$SQL="delete from login_log";
//$wynik=mysql_query($SQL,$polaczenie)or Die("z10");

 $SQL="insert into log (era,name,value) VALUES ('$nr_ery','gornicy_zlota',0), ('$nr_ery','gornicy_zelaza',0), ('$nr_ery','kowale',0), ('$nr_ery','rolnicy',0)
 ,('$nr_ery','straznicy',0), ('$nr_ery','budowniczowie',0), ('$nr_ery','lucznicy',0), ('$nr_ery','piechota',0), ('$nr_ery','husaria',0), ('$nr_ery','tragarze',0),
    ('$nr_ery','szpiedzy',0)";
 // echo $SQL;
 $wynik=mysql_query($SQL) or Die("log");

$SQL="update KSIESTWA set ziemia=".$poczatek['ziemia'].",
                          domy=".$poczatek['domy'].", 
                          warsztaty=".$poczatek['warsztaty'].",
                          koszary=".$poczatek['koszary'].",
                          farmy=".$poczatek['farmy'].",
                          wiezyczki=".$poczatek['wiezyczki'].",
                          kopalnie_zlota=".$poczatek['kopalnie_zlota'].",
                          kopalnie_zelaza=".$poczatek['kopalnie_zelaza'].",
                          zamek=".$poczatek['zamek'].",
                          rynki=".$poczatek['rynki'].",
                          rolnicy=".$poczatek['rolnicy'].",
                          bezrobotni=".$poczatek['bezrobotni'].",
                          kowale=".$poczatek['kowale'].",
                          gornicy_zlota=".$poczatek['gornicy_zlota'].",
                          gornicy_zelaza=".$poczatek['gornicy_zelaza'].",
                          tragarze=".$poczatek['tragarze'].",
                          budowniczowie=".$poczatek['budowniczowie'].",
                          lucznicy=".$poczatek['lucznicy'].",
                          piechota=".$poczatek['piechota'].",
                          husaria=".$poczatek['husaria'].",
                          jedzenie=".$poczatek['jedzenie'].",
                          zloto=".$poczatek['zloto'].",
                          zelazo=".$poczatek['zelazo'].",
                          bronie=".$poczatek['bronie'].",
                          narzedzia=".$poczatek['narzedzia'].",
                          co_buduje=".$poczatek['co_buduje'].",
                          tury=".$poczatek['tury'].",
                          morale=".$poczatek['morale'].",
                          poziom_bezp=".$poczatek['poziom_bezp'].",
                          gildie=".$poczatek['gildie'].",
                          szpiedzy=".$poczatek['szpiedzy'].",
                          straznice=".$poczatek['straznice'].",
                          straznicy=".$poczatek['straznicy'].",
                          rapotr_z_ostatniej_tury=''".""."
                          ";
                   echo $SQL;
$wynik=mysql_query($SQL);

return 1;
}
?>
