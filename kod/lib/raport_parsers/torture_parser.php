<?php
/**
	Parser raportÃ³w z torturowania szpiegow
	
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
	
	$out = "Z dum± donoszê ¿e naszym oprawcom uda³o siê pozyskaæ informacjie torturuj±c szpiegów z ksiêstwa ".$ksiestwo."!<br/>";
				
	if($typ == "att")
	{
		if($data[2] == "brak")
			$out .= "Ksiêstwo ".$ksiestwo." nikogo nie atakuje.";
		else
			$out .= "Ksiêstwo ".$ksiestwo." atakuje ksiêstwo ".$data[2]." armi± w sile "
					.$data[3]." ³uczników, ". $data[4] ." piechoty, ". $data[5] ." husarii.";
					
		return(true);
	}
	if($typ == "def")
	{
		$out .= "Ksiêstwo ".$ksiestwo." jest bronione przez "
				.$data[2]." ³uczników, ". $data[3] ." piechoty, ". $data[4] ." husarii.";
		return(true);
	}
	if($typ == "bs")
	{
		if($data[2] != "brak")
			$out .= "Budynki Specjalne:<br/>".$data[2];
		else
			$out .= "Ksiêstwo ".$ksiestwo." nie ma budynków specjalnych";
		if($data[3] != "brak")
			$out .= $data[3];
		if($data[4] != "brak")
			$out .= $data[4];
			
		return(true);
	}
	if($typ == "guard")
	{
		$out .= "Ksiêstwo ".$ksiestwo." jest bronione przez "
				.$data[2]." stra¿ników";
		return(true);
	}
	return(false);		
}

?>