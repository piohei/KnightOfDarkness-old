<?php
/**
 * Parser raport�w o rozwi�zaniu koalicji.
 * Posta� danych do parsowania jest nast�puj�ca:
 * <cesarz>&<nazwa koalicji>
 */

function coalition_quit($raw_data, &$out, $param = NULL){

    // wyodr�bnianie danych
    if(empty($raw_data)){
        $out = "Parser error (cl1:00)";
        return false;
    }

    $data = explode('&', $raw_data);

    if(empty($data[0])){
        $out = "Parser error (cl1:01)";
        return false;
    }

    if(empty($data[1])){
        $out = "Parser error (cl1:02)";
        return false;
    }

    $out = "Panie,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informuje Ci�, ".
        "�e w�adca kr�lestwa".
        " <b>{$data[0]}</b> rozwi�za� koalicj� <b>{$data[1]}</b>,".
        " do kt�rej nale�a�e�.<br><br>Tw�j oddany Dyplomata";
    return true;
}
?>