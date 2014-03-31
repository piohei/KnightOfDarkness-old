<?PHP
  require_once("../config.php");
	require_once("../funkcjeBazy.php");
	require_once("lib.php");
	otworz_polaczenie();
	$SQL="Update KOALICJA set id_budynku_koncowego=null";
	$wynik = mysql_query($SQL, $polaczenie);
	print " zaktualizowano: ".mysql_affected_rows($polaczenie)." z tabeli KOALICJE";
	$SQL="delete from budynki_koncowe";
	$wynik = mysql_query($SQL, $polaczenie);
		print "<br> Usunieto: ".mysql_affected_rows($polaczenie)." z tabeli budynki_koncowe";
	zamknij_polaczenie();
?>
