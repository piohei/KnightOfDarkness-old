<?php
  class budynekKoncowy{
    
    var $dane="";
    
    function listaBudynkowKoncowych(){
      global $polaczenie;
      global $parametryBudynekKoncowy;
      
      $SQL="SELECT * FROM `budynki_koncowe` order by postep desc;";
      $wynik = mysql_query($SQL, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 1");
      $licznik=0;
      while($wiersz=mysql_fetch_array($wynik)){
        $tmp[$licznik]=$wiersz;
        $tmp[$licznik]['postep_pr']=round(($tmp[$licznik]['postep']/$parametryBudynekKoncowy['kosztPktBudowy'])*100);
        $tmp[$licznik]['postep_piksele']=round(($tmp[$licznik]['postep_pr']/100)*360);
        $licznik++;
      }
      return $tmp;
    }
    function wyslijDoBudynku(&$dane,$id_budynku){
      global $login;
      global $polaczenie;
      global $kingdomInfo;
      $SQL_ksiestwa="Update KSIESTWA set";
      $SQL_dudynek="Update budynki_koncowe set ";
      $ileWysyla=0;
      foreach ($dane as $key=>$value) {
      	if($value!=""){
          settype($value, "integer");
    			if($value<=0){
    				$bledy[$key]="Wprowad¼ liczbê (dodatni±)";
    			}else{
            if($kingdomInfo[$key]<$value){
              $bledy[$key]="Brak w królestwie";
            }else{
              //$bledy[$key]="Wys³ano";
              unset($dane[$key]);
              if($ileWysyla!=0){
                $SQL_ksiestwa .= " , ";
                $SQL_dudynek  .= " , ";
              }
              $SQL_ksiestwa .= " $key=$key-$value ";
              $SQL_dudynek  .= " $key=$key+$value ";
              $ileWysyla++;
              // dodaj do zapytania 
            }
          }
        }
      }
      $SQL_ksiestwa .= " where nazwa = '$login'";
      $SQL_dudynek  .= " where id = $id_budynku";
      if($ileWysyla!=0){
        $wynik = mysql_query($SQL_dudynek, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 10");
        $wynik = mysql_query($SQL_ksiestwa, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 11");
      }
      return  $bledy;
    }
    
    function rozpocznijBudoweBudynkuKoncowego($koalicja){
      global $login;
      global $polaczenie;
      global $parametryBudynekKoncowy;
      
      $SQL="Insert into budynki_koncowe values(NULL,'$koalicja',0,0,0,0,0,0);";
      $wynik = mysql_query($SQL, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 2");
      $id = mysql_insert_id($polaczenie);
      
      $SQL="Update KOALICJA set id_budynku_koncowego=$id where nazwa='$koalicja'";
      $wynik = mysql_query($SQL, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 3");
      
      $SQL="Update KSIESTWA set zloto=zloto-".$parametryBudynekKoncowy['kosztZloto']." where nazwa LIKE BINARY '$login'";
      $wynik = mysql_query($SQL, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 4");
      return $id;
    }
		function aktualizujDane($dane){
			global $polaczenie;
			$sql = "Update budynki_koncowe set piechota = piechota - ".$dane['piechota'].",
																				lucznicy = lucznicy - ".$dane['lucznicy'].",
																				husaria = husaria - ".$dane['husaria'].",
																				postep = postep - ".$dane['postep'].",
																				budowniczowie = budowniczowie - ".$dane['budowniczowie']."
																				where id = ".$dane['id']."
			";
			mysql_query($sql, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 324234".$sql);
		}
		function usunBudynek($id){
			global $polaczenie;
			$sql = "delete from budynki_koncowe where id = ".$id;
			mysql_query($sql, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 32546234".$sql);
		  $sql = "update KOALICJA SET id_budynku_koncowego = NULL where id_budynku_koncowego = ".$id;
			mysql_query($sql, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 32546234df".$sql);
    }
    function daneBudynku($id){
      global $polaczenie;
      global $parametryBudynekKoncowy;
      if(isset($this->dane[$id])){
        return $this->dane[$id];
      }else{
         $SQL="Select * from  budynki_koncowe where id = $id";
         $wynik = mysql_query($SQL, $polaczenie)or Die("budynek koncowy/lib.php -> nie wykonano zapytania 5");
         if(mysql_num_rows($wynik)==1){
            $this->dane[$id] = mysql_fetch_array($wynik);
            $this->dane[$id]['postep_pr']=round(($this->dane[$id]['postep']/$parametryBudynekKoncowy['kosztPktBudowy'])*100);
            $this->dane[$id]['postep_piksele']=round(($this->dane[$id]['postep_pr']/100)*280);
            return $this->dane[$id];
         }
      }
    }
  }
?>
