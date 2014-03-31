<?php


class History{

	static function add($dane){
		$fileds = array('kto','kogo','kto_koal','kogo_koal','czy_wygral_atakujacy','tryb'
		,'straty_atakujacy','straty_broniacy','straty_budynki',
		'straty_ziemia','straty_zloto','straty_surowce','straty_budowniczowie');
		foreach ($fileds as $k => $v){
			if (isset($dane[$v])){
			}else {
				$dane[$v] = 'NULL';
			}
		}

		$SQL = "INSERT INTO attacks_log
				VALUES(NULL,'".$dane['kto']."'
							,'".$dane['kogo']."'
							,'".$dane['kto_koal']."'
							,'".$dane['kogo_koal']."'
							,now()
							,".$dane['czy_wygral_atakujacy']."
							,".$dane['tryb']."
							,".$dane['straty_atakujacy']."
							,".$dane['straty_broniacy']."
							,".$dane['straty_budynki']."
							,".$dane['straty_ziemia']."
							,".$dane['straty_zloto']."
							,".$dane['straty_surowce']."
							,".$dane['straty_budowniczowie']."
				);";
		mysql_query($SQL) or Die(__FILE__.":".__LINE__." class Attacks".$SQL." ".mysql_error());;
	}

	static function getLastAttack($kto, $kogo){
		$q="select * from attacks_log where kto='{$kto}' and kogo='{$kogo}'  ORDER BY data DESC ";
		$q .= " limit 1";
		$r=mysql_query($q);
		if (mysql_num_rows($r) > 0){
			$row=mysql_fetch_array($r);
		}
		$row['_COUNT_'] = mysql_num_rows($r);
		return $row;
	}

	static function getLastLostDefendCount($kogo){
		$q="select * from attacks_log where kogo='{$kogo}' and czy_wygral_atakujacy = 1 and data > NOW() - INTERVAL 1 DAY ORDER BY data";
		$r = mysql_query($q)or Die(__FILE__.":".__LINE__." class Attacks".$q." ".mysql_error());
		return mysql_num_rows($r);
	}

	static function get($login){
		$SQL="SELECT * FROM attacks_log where kto='{$login}' or kogo='{$login}' order by data DESC limit 10";
		$wynik = mysql_query($SQL);
		$i=0;
		while($wiersz=mysql_fetch_array($wynik)){
			$dane[$i]= $wiersz;$i++;
		}
		return $dane;
	}
	static function getMaxAttack(){
		$SQL="SELECT `straty_atakujacy`+`straty_broniacy` as straty,kto,kogo , data FROM `attacks_log` where DATE_SUB(NOW(),INTERVAL 1 DAY)<=`data` order by straty desc limit 1";
		$wynik = mysql_query($SQL);
		$i=0;
		$wiersz=mysql_fetch_array($wynik);
			
		return $wiersz;
	}

	static function getKoalicja($koalicja){
		$SQL="SELECT * FROM attacks_log where kto_koal='{$koalicja}' or kogo_koal='{$koalicja}' limit 10";
		$wynik = mysql_query($SQL);
		$i=0;
		while($wiersz=mysql_fetch_array($wynik)){
			$dane[$i]= $wiersz;$i++;
		}
		return $dane;
	}
	static function getBiggestBK()
	{
	  $SQL = "SELECT koalicja , postep/100000000*100 as postep from budynki_koncowe order by postep desc limit 1";
	  $wynik = mysql_query($SQL);
	  $dane = NULL;
	  while($wiersz = mysql_fetch_array($wynik,MYSQL_ASSOC))
	    {
	      $dane["koalicja"] = $wiersz["koalicja"];
	      $dane["postep"] = round($wiersz["postep"]);
	    }
	    return($dane);
	}
}
?>
