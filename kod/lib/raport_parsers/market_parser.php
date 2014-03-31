<?php
/**
 * Parser raport�w z targu.
 * Posta� danych do parsowania jest nast�puj�ca:
 * <kod towaru>&<ilo�� sprzedana>&<cena za szt.>&<pozosta�o na targu>
 */

function market_parser($raw_data, &$out, $param = NULL){

    // tablica kod�w towaru
    $article_code = array(
        1   =>  '�elazo',
        2   =>  'Bro�',
        3   =>  'Narz�dzia',
        4   =>  'Jedzenie'
    );

    // wyodr�bnienie danych
    if(empty($raw_data)){
        $out = "Parser error (code: mrk00)";
        return false;
    }
    $data = explode('&', $raw_data);

    if(!settype($data[0], 'integer')){
        $out = 'Parser error (code: mrk01)';
        return false;
    }
    $article_name = $article_code[$data[0]];

    if(!settype($data[1], 'integer')){
        $out = 'Parser error (code: mrk02)';
        return false;
    }
    $quantity = $data[1];

    if(!settype($data[2], 'integer')){
        $out = 'Parser error (code: mrk03)';
        return false;
    }
    $price = $data[2];

    if(!settype($data[3], 'integer')){
        $out = 'Parser error (code: mrk04)';
        return false;
    }
    $remain = $data[3];
    
    $kupujacy = $data[4];
    
    $income = $price * $quantity;

    // generowanie wyj�cia
    $out = '<table cellspacing="0" cellpadding="0" border="0">'.
        '<tr><td colspan="2">Panie, Tw�j kupiec informuje,'.
    	'<br>i� w�adca ksi�stwa <b>'.$kupujacy.'</b> zakupi� od Ciebie:<br></td><tr>'.
        '<tr><td><br><b>'.$article_name.'</b><br><br><br></td>'.
        '<td><b>'.$quantity.'&nbsp;szt</b><br><br><br></td></tr>'.
        '<tr><td>Po cenie:&nbsp;</td>'.
        '<td><b>'.$price.' szt. z�ota</b></td></tr>'.
        '<tr><td>Do skarbca wp�yn�o:&nbsp;<br><br><br></td>'.
        '<td><b>'.$income.' szt. z�ota</b><br><br><br></td></tr>';
    
    if($remain == 0){

        $out .= '<tr><td colspan="2">Ten towar zosta� ju� ca�kowicie sprzedany.</td>';
    }else{

        $out .= '<tr><td>Na targu pozosta�o jeszcze:&nbsp;</td>'.
            '<td><b>'.$remain.'&nbsp;szt</b></td></tr>';
    }

    $out .= '</table>';
    return true;
}
?>