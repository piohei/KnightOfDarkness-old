<?php



//--------------------------------------------------- coalition_pub_add_mesg ---

// Dodaje wiadomosc do karczmy koalicji $coal od uzytkownika $username

function coalition_pub_add_mesg($coal, $username, $text, $max = 20){

    $query = "SELECT MIN(send_date), COUNT(*) FROM Pub WHERE coalition='$coal' GROUP BY coalition";

    if(!$result = @mysql_query($query)) return false;

    

    $row = mysql_fetch_array($result);

    if(($row[1] >= $max)){

        $date = $row[0];

        $query = "DELETE FROM Pub WHERE coalition='$coal' AND send_date='$date'";

        if(!mysql_query($query)) return false;

    }

    

    $text = addslashes($text);

    $query = "INSERT INTO Pub VALUES('$coal', '$username', '$text', NOW())";

    if(@mysql_query($query)) return true;

    else return false;

}





//------------------------------------------------- coalition_pub_fetch_mesg ---

// Zwraca wiadomosci karczmy dla danej kolaicji

function coalition_pub_fetch_mesg($coal){

    $query = "SELECT * FROM Pub WHERE coalition='$coal' ORDER BY send_date DESC";

    if(!$result = @mysql_query($query)) return NULL;
    
    
    require_once("../upload/class.FileManager.php");
	
    while($mesg = mysql_fetch_array($result, MYSQL_ASSOC)){
        $fm = new FileManager($mesg['username']);
        $fm->insert_images($mesg['message']);
        $mesg_list[] = $mesg;

    }

    return $mesg_list;

}





//------------------------------------------------------- coalition_pub_name ---

// Zwraca nazwe kolaicji w ktorej jest gracz

function coalition_pub_name($username){

    $query = "SELECT koalicja FROM KSIESTWA WHERE nazwa='$username'";

    if(!$result = mysql_query($query)) return NULL;

    else return @mysql_result($result, 0, 0);

}





//------------------------------------------------- coalition_pub_count_mesg ---

// Zlicza ilosc wiadomosci w koalicji $coal lub NULL

function coalition_pub_count_mesg($coal){

    $query = "SELECT COUNT(*) FROM Pub WHERE coalition='$coal'";

    if($result = @mysql_query($query)){

        return @mysql_result($result, 0, 0);

    }else return NULL;

}





//------------------------------------------------------ coalition_pub_clear ---

// Czysci pub danje koalicji

function coalition_pub_clear($coal){

    $query = "DELETE FROM Pub WHERE coalition='$coal'";

    if($result = @mysql_query($query)){

        return true;

    }else return false;

}

?>