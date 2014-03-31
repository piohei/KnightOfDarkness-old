<?php
/**
 * Parser raportów o rozwi±zaniu koalicji.
 * Postaæ danych do parsowania jest nastêpuj±ca:
 * <cesarz>&<nazwa koalicji>
 */

function coalition_quit($raw_data, &$out, $param = NULL){

    // wyodrêbnianie danych
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

    $out = "Panie,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Informuje Ciê, ".
        "¿e w³adca królestwa".
        " <b>{$data[0]}</b> rozwi±za³ koalicjê <b>{$data[1]}</b>,".
        " do której nale¿a³e¶.<br><br>Twój oddany Dyplomata";
    return true;
}
?>