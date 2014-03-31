<?php
/**
	Parser raportów z torturowania szpiegow
	
	Postac danych:
		[typ]&[ksiestwo]
		
	typy:
		att - wojska wyslane na atak
			[brak] - nie ma wojsk wyslanych na atak
			[cel]&[lucznicy]&[piechota]&[husaria]
		def - wojska stajonujace w ksiestwie
			[lucznicy]&[piechota]&[husaria]
		bs - lista budynkow specjalnych jezeli jest mniej niz trzy po ostatnim jest bs brak
			[bs_1]&[bs2]&[bs_3] 
		guard - straznicy broniacy ksiestwa
			[straznicy]
		brak - z jakis powodow nie udalo sie zdobyc informacji
		
*/

function torture_parser($raw_data, &$out, $param = NULL)
{
	if(empty($raw_data))
	{
		$out = "Parser error (code: atk00)";
		return(false);
	}
	
	$data = explode('&', $raw_data);
	
	$typ = $data[0];
	$ksiestwo = $data[1];
	
	$out = "Z dum� donosz� �e naszym oprawcom uda�o si� pozyska� informacjie torturuj�c szpieg�w z ksi�stwa ".$ksiestwo."!<br/>";
				
	if($typ == "att")
	{
		if($data[2] == "brak")
			$out .= "Ksi�stwo ".$ksiestwo." nikogo nie atakuje.";
		else
			$out .= "Ksi�stwo ".$ksiestwo." atakuje ksi�stwo ".$data[2]." armi� w sile "
					.$data[3]." �ucznik�w, ". $data[4] ." piechoty, ". $data[5] ." husarii.";
					
		return(true);
	}
	if($typ == "def")
	{
		$out .= "Ksi�stwo ".$ksiestwo." jest bronione przez "
				.$data[2]." �ucznik�w, ". $data[3] ." piechoty, ". $data[4] ." husarii.";
		return(true);
	}
	if($typ == "bs")
	{
		if($data[2] != "brak")
			$out .= "Budynki Specjalne:<br/>".$data[2];
		else
			$out .= "Ksi�stwo ".$ksiestwo." nie ma budynk�w specjalnych";
		if($data[3] != "brak")
			$out .= $data[3];
		if($data[4] != "brak")
			$out .= $data[4];
			
		return(true);
	}
	if($typ == "guard")
	{
		$out .= "Ksi�stwo ".$ksiestwo." jest bronione przez "
				.$data[2]." stra�nik�w";
		return(true);
	}
	return(false);		
}

?>