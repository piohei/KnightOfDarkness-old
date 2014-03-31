<?php
/**
 * Parser raportów z targu.
 * Postaæ danych do parsowania jest nastêpuj±ca:
 * <kod towaru>&<ilo¶æ sprzedana>&<cena za szt.>&<pozosta³o na targu>&<kupuj±cy>
 */

function building_attack_parser($raw_data, &$out, $param = NULL){


    // wyodrêbnienie danych
    if(empty($raw_data)){
        $out = "Parser error (code: atk00)";
        return false;
    }
    
    $data = explode('&', $raw_data);
    //------------INFO O ATAKUJACYM
    if(!settype($data[2], 'float')){
        $out = 'Parser error (code: atk01)';
        return false;
    }
    $out  = "<table cellspacing=\"0\" cellpadding=\"0\"><tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Atakuj±cy (".$data[0].")</td></tr>
    <tr><td>Bonus do ataku <td>".(($data[2]-1)*100)."%</td><td width=\"30%\">&nbsp;</td></tr>";
    if(!settype($data[3], 'float')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    $out .= "<tr><td>Bonus do obrony&nbsp;&nbsp;<td>".(($data[3]-1)*100)."%</td><td>&nbsp;</td></tr>";
    if(!settype($data[4], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[4]>0)
     $out .= "<tr><td>£ucznicy <td>".$data[4]."</td><td >&nbsp;</td></tr>";
    if(!settype($data[5], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[5]>0)
     $out .= "<tr><td>Piechota <td>".$data[5]."</td><td >&nbsp;</td></tr>";
    if(!settype($data[6], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[6]>0)
      $out .= "<tr><td>Husaria <td>".$data[6]."</td><td >&nbsp;</td></tr>";
    
    //===============INFO O BRONIACYM
    if(!settype($data[7], 'float')){
        $out = 'Parser error (code: atk01)';
        return false;
    }
    $out .="<tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Broni±cy (".$data[1].")</td></tr>";
    $out .= "<tr><td>Bonus do ataku <td>".(($data[7]-1)*100)."%</td><td>&nbsp;</td></tr>";
   if(!settype($data[8], 'float')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    $out .= "<tr><td>Bonus do obrony <td>".(($data[8]-1)*100)."%</td><td>&nbsp;</td></tr>";
    if(!settype($data[9], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[9]>0)
     $out .= "<tr><td>£ucznicy <td>".$data[9]."</td><td>&nbsp;</td></tr>";
    if(!settype($data[10], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[10]>0)
     $out .= "<tr><td>Piechota <td>".$data[10]."</td><td>&nbsp;</td></tr>";
    if(!settype($data[11], 'integer')){
        $out = 'Parser error (code: atk02)';
        return false;
    }
    if($data[11]>0)
      $out .= "<tr><td>Husaria <td>".$data[11]."</td><td>&nbsp;</td></tr>";
    // data 
    $how_many_defender_killed = $data[16]+$data[17]+$data[18];
    $out .="<tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Przebieg walk</td></tr>";
    $out .= "<tr><td colspan=\"3\" style=\"margin:6px\">Bitwa rozpocze³a siê o ".$data[12];
    
    if($data[9]>0)
      $out .=" ostrza³em ³uczników z ksiêstwa  <b>".$data[1]."</b> w wyniku którego zgine³o <br>".$data[13]." piechurów, ".$data[14]." husari i ".$data[15]." ³uczników."; 
    if($how_many_defender_killed>0)
      $out .= "<br>Na reakcje armi ksiêstwa <b>".$data[0]."</b> nie trzeba by³o d³ugo czekaæ, ³ucznicy zabili<br> ".$how_many_defender_killed." obroñców w tym ".$data[16]." piechurów, ".$data[17]." husarów i ".$data[18]." ³uczników.";
		if($data[26]>$data[27]){
				$out .="<br>Bitwe wygra³ <b>".$data[0]."</b> stosunkiem: ".round($data[26])." / ".round($data[27]);
		}else{
				$out .="<br>Bitwe wygra³ <b>".$data[1]."</b> stosunkiem: ".round($data[27])." / ".round($data[26]);
		}
    $out .="<br>Podliczenie strat naszych i wroga po bitwie znajduje siê poni¿ej:</td></tr>";
    //-----------------------------WYNIKI BITWY
    
    $out .="<tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Straty broni±cego</td></tr>";
    $out .= "<tr><td>Piechota<td>".($data[20]+$data[16])."</td><td>&nbsp;</td></tr>";
    $out .= "<tr><td>Husaria<td>".($data[21]+$data[17])."</td><td>&nbsp;</td></tr>";
    $out .= "<tr><td>£ucznicy<td>".($data[22]+$data[18])."</td><td>&nbsp;</td></tr>";
		$out .= "<tr><td>Zniszczenia budynku<td>".$data[28]." pkt-ow</td><td>&nbsp;</td></tr>";
		$out .= "<tr><td>Zabici budowniczowie<td>".($data[29])."</td><td>&nbsp;</td></tr>";
    
    $out .="<tr style=\"background-color:#4c3a14; margin-bottom:6px;font-size:10px;color:#bfa88a;font-weight:bold\"><td colspan=\"3\">Straty atakuj±cego</td></tr>";
    $out .= "<tr><td>Piechota<td>".($data[23]+$data[13])."</td><td>&nbsp;</td></tr>";
    $out .= "<tr><td>Husaria<td>".($data[24]+$data[14])."</td><td>&nbsp;</td></tr>";
    $out .= "<tr><td>£ucznicy<td>".($data[25]+$data[15])."</td><td>&nbsp;</td></tr>";
    $out .= "</table>";
    return true;
}
?>
