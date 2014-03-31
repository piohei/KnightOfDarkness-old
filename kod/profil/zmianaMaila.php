<?PHP
	include "../funkcjeBazy.php";
	require_once('funkcje_profil.php');
	otworz_polaczenie();
	$wynik=zmienMailaPOTW($_GET["login"],$_GET["haslo"],$_GET["mail"]);

	if($wynik==1){
			print "<FONT SIZE='2'>Mail zmieniony<br></FONT>";
	}else
	if($wynik==3){
			print "<FONT SIZE='2'>Nie ³adnie oszukiwac :) <br></FONT>";
	}else
	if($wynik==4){
			print "<font color='red'>Podany mail juz istnieje!</font>";
	}
	zamknij_polaczenie();
?>