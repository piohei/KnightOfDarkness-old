<?PHP
	require_once('../config.php');
	require_once('../funkcjeBazy.php');
	otworz_polaczenie();
	wyloguj();
	zamknij_polaczenie();
	header("Location: index.php");
	exit;
	?>
