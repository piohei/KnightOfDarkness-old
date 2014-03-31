<?php 

function castle_parser($raw_data, &$out, $param = null)
{
	global $login;

	// wyodr�bnienie danych
	if(empty($raw_data)){
		$out = "parser error (code: atk00)";
		return false;
	}
	$data = explode('&', $raw_data);
	$out = "Nasi �o�nie�e zajeli zamek broni�cy ksi�stwa ".$data[0].".<br/>";
	switch($data[1])
	{
		case 1:
			$out .= "Wr�g ma jeszcze 1 zamek.";
		break;
		
		case 2:
		case 3:
		case 4:
			$out .= "Wr�g ma jeszcze ".$data[1]." zamki.";		
		break;
		
		default:
			$out .= "Wr�g ma jeszcze ".$data[1]." zamk�w.";
		break;
	}	
	return(ture);
}

?>