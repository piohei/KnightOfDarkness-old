<?PHP
	include "funkcjeBazy.php";

	function usunZbazySessioID(){
		global $PHPSESSID;
		$zapytanie = "delete from ZALOGOWANI where sesionId ='$PHPSESSID'";
		$wynik = mysql_query($zapytanie);
	}

	unset($_SESSION);
	otworz_polaczenie();
	usunZbazySessioID();
	zamknij_polaczenie();
	header("Location: index.php");
	exit;
	?>
