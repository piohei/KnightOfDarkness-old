<?php 

function castle_parser($raw_data, &$out, $param = null)
{
	global $login;

	// wyodrêbnienie danych
	if(empty($raw_data)){
		$out = "parser error (code: atk00)";
		return false;
	}
	$data = explode('&', $raw_data);
	$out = "Nasi ¿o³nie¿e zajeli zamek broni±cy ksiêstwa ".$data[0].".<br/>";
	switch($data[1])
	{
		case 1:
			$out .= "Wróg ma jeszcze 1 zamek.";
		break;
		
		case 2:
		case 3:
		case 4:
			$out .= "Wróg ma jeszcze ".$data[1]." zamki.";		
		break;
		
		default:
			$out .= "Wróg ma jeszcze ".$data[1]." zamków.";
		break;
	}	
	return(ture);
}

?>