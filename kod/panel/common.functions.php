<?php

/**
 * Proste wyszukiwanie. Korzysta jedynie z tabeli TBL_PROFILE. Wyszukuje jedynie
 * po nazwie uzytkownika.
 * @param string nazwa uzytkownika (mozna stosowaæ _ % jako znaki specjalne)
 * @return array tablica znalezionuch graczy lub NULL
 */
function user_search($keyword){
    $keyword = strtoupper($keyword);
    $q = "SELECT * FROM ". TBL_PROFILE .
        " WHERE UPPER(login) LIKE '$keyword'";
    $r = mysql_query($q);
    while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
        $list[] = $row;
    }
    return $list;
}



/**
 * Zaawansowane wyszukiwanie u¿ytkowników korzystaj±ce ze z³aczenia table
 * TBL_PROFILE oraz TBL_KINGDOM.
 */
function user_advsearch($sql_condition, $sql_order, $limit){

    $q = "SELECT * FROM ". TBL_PROFILE .
        " LEFT JOIN ". TBL_KINGDOM .
        " ON " .TBL_PROFILE . ".login=".TBL_KINGDOM.".nazwa";

    if(!empty($sql_condition)){
        $q .= " WHERE $sql_condition";
    }

    if(!empty($sql_order)){
        $q .= " ORDER BY $sql_order";
    }

    if(!empty($limit)){
        $q .= " LIMIT $limit";
    }

    if($r = mysql_query($q)){
        $list = array();
        while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
            $list[] = $row;
        }
        $list['COUNT'] = mysql_num_rows($r);
        return $list;
    }else{
        return NULL;
    }
}



/**
 * Konwertuje wszystkie mo¿liwe oznaczenia koñca linii (Win, Mac) do jednego
 * standardu - Unix'a (\n).
 * @param string $string ci±g znaków do konwertowania
 * @return string rezultat konwertowania
 */
function fix_nl($string){
  $string = str_replace("\r\n", "\n", $string); // fix Win new line
  $string = str_replace("\r", "\n", $string);   // fix Mac new line
  return $string;
}
?>