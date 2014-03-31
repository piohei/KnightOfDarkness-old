<?php
/**
 * Parser raportów z targu.
 * Postaæ danych do parsowania jest nastêpuj±ca:
 * <kod towaru>&<ilo¶æ sprzedana>&<cena za szt.>&<pozosta³o na targu>&<kupuj±cy>
 */

function spy_attack_parser($raw_data, &$out, $param = NULL){


	// wyodrêbnienie danych
	if(empty($raw_data)){
		$out = "Parser error (code: atk00)";
		return false;
	}
	$data = explode('&', $raw_data);
	//------------INFO O ATAKUJACYM
	$atacker = $data[0];
	$target = $data[1];
	
	if($target == "podpalanie"){
		$out = "Z dum± donoszê ¿e naszym szpiegom uda³o siê wype³niæ powierzon± misje!<br>
			Uszkodzili oni budynek specjalny: <b>".$data[2]."</b>";
		return true;
	}
	if($target == "kradziez"){
		$out = "Z dum± donoszê ¿e naszym szpiegom uda³o siê wype³niæ powierzon± misje!<br>
			Wykradli¶my z magazynów ksiêstwa {$data[2]} nastêpuj±ce towary:<br> <b>".$data[3]."</b>";
		return true;
	}

	if($target == "infoOKradziezy"){
		$out = "Z przykro¶ci± donoszê ¿e nie uda³o nam siê z³apaæ z³odziejskich szpiegów którzy skradli:<br>
			<b>".$data[2]."</b>";
		return true;
	}

	if($target == "mordowanie"){
		$out = "Z dum± donoszê ¿e naszym szpiegom uda³o siê wype³niæ powierzon± misje!<br>
			wymordowali¶my w ksiêstwie {$data[2]} nastêpuj±cych ludzi:<br> <b>".$data[3]."</b>";
		return true;
	}

	if($target == "infoOMordzie"){
		$out = "Z przykro¶ci± donoszê ¿e nie uda³o nam siê z³apaæ szpiegów którzy zamordowali:<br>
			<b>".$data[2]."</b>";
		return true;
	}
	
	if($target == "propaganda")
	{
		$out = "Propaganda w ksiêstwie ".$data[2]." powiod³a siê!";
		return true;
	}

	if(!settype($data[2], 'float')){
		$out = 'Parser error (code: atk01)';
		return false;
	}
	$probability =$data[2];
	if(!settype($data[3], 'int')){
		$out = 'Parser error (code: atk01)';
		return false;
	}
	$is_success = $data[3];
	if($target=='do_atakowanego'){
		$out='Z³apano i stracono '.$data[4].' szpiegów.';
		return true;
	}
	if($is_success==1){
		$out = "Z dum± donoszê ¿e naszym szpiegom uda³o siê wype³niæ powierzon± misje!<br>
      Oto zebrane przez nich informacje:<br><br>";
		$out  .= "<table cellspacing=\"0\" cellpadding=\"0\"><tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Wynik szpiegowania ksiêstwa ".$target."</td></tr>
      <tr><td>£ucznicy: <td>".$data[4]."</td><td width=\"30%\">&nbsp;</td></tr>
      <tr><td>Piechota: <td>".$data[5]."</td><td width=\"30%\">&nbsp;</td></tr>
      <tr><td>Husaria: <td>".$data[6]."</td><td width=\"30%\">&nbsp;</td></tr>
      <tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Budynki specjalne</td></tr>
      <tr><td colspan=\"2\">";
		if(isset($data[7]) && $data[7]!=0){
			for($i=8 ; $i <(8+$data[7]);$i++){
				$out  .= $data[$i].'<br>';
			}
		}else{
			$out  .=$target. " nie ma ¿adnych budynków specjalnych";
		}
		$out  .="</td><td width=\"30%\">&nbsp;</td></tr></table>";
	}else{
		if($probability <= 50){
			$out = "Z ¿alem informuje ¿e nasze dzia³ania zosta³y wykryte. Ksiêstwo by³o mocniej strze¿one ni¿ siê spodziewali¶my.";
		}else{
			$out = "Z ¿alem informuje ¿e nasze dzia³ania zosta³y wykryte. Misja by³a dobrze zaplanowana
        , ale niestety zostali¶my przypadkiem zdemaskowani";
		}
		$out .= "<br> W trakcie zosta³o schwytanych lub zabitych ".$data[4]." szpiegów";
	}

	return true;
}
?>
