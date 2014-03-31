<?

require_once($CFG->katalogStrony."const.php");

class Log{


	function Log(){
	}

	function getMarketTransactiosBetwean($kingdom1,$kingdom2){
		global $polaczenie;
		if(empty($kingdom2)){
			if(empty($kingdom1)){
				$sql = "SELECT * 	FROM ".TBL_MARKETPLACE_LOG." order by targ_log.data DESC LIMIT 0,100";
			}else{
				$sql = "SELECT *
					FROM ".TBL_MARKETPLACE_LOG." 
					WHERE kto ='{$kingdom1}' 
						OR od_kogo ='{$kingdom1}' 
					ORDER BY data DESC"; 
			}

		}else{
			$sql = "SELECT *
				FROM ".TBL_MARKETPLACE_LOG." 
				WHERE kto ='{$kingdom1}' 
					AND od_kogo ='{$kingdom2}' 
					OR  kto ='{$kingdom2}' 
					AND od_kogo ='{$kingdom1}'
				ORDER BY data DESC";
		}
		$rs = mysql_query($sql, $polaczenie);
		return getAsoc($rs);
	}

	function getCoalitionExchangeBetwean($kingdom1,$kingdom2){
		global $polaczenie;

		if(empty($kingdom2)){
			if(empty($kingdom1)){
				$sql = "SELECT * 	FROM ".TBL_COALITION_EXCHANGE_LOG." order by date DESC LIMIT 0,100";
			}else{
				$sql = "SELECT *
    					FROM ".TBL_COALITION_EXCHANGE_LOG." 
    					WHERE source ='{$kingdom1}' 
    						OR  destination ='{$kingdom1}' 
    					ORDER BY date DESC";
			}
		}else{
			$sql = "SELECT *
					FROM ".TBL_COALITION_EXCHANGE_LOG." 
					WHERE source ='{$kingdom1}' 
						AND destination ='{$kingdom2}' 
						OR  destination ='{$kingdom2}' 
						AND source ='{$kingdom1}'
					ORDER BY date DESC";
		}

		$rs = mysql_query($sql, $polaczenie);
		return getAsoc($rs);

	}

	function getMarketTransactions($fromDate=NULL,$toDate=NULL,$kingdomArray=NULL,$olnyBetweenKingdom=NULL,$error=NULL){
		if (!empty($kingdomArray) && !empty($fromDate) && !empty($toDate)){
			$SQL = "SELECT * FROM ".TBL_MARKETPLACE_LOG." ";
			$SQL.= " WHERE 1=1 ";
			if (!empty($fromDate)){
				$SQL .= " and data >= '".$fromDate."' ";
			}
			if (!empty($fromDate)){
				$SQL .= " and data <= '".$toDate."' ";
			}
			if (!empty($kingdomArray)){
				$SQL.= " and (";
				$SQL.= "     kto in (".toSQLStringArray($kingdomArray).") ";
				if ($olnyBetweenKingdom){
					$SQL.= " AND ";
				} else {
					$SQL.= " OR ";
				}
				$SQL.= "     od_kogo in (".toSQLStringArray($kingdomArray).")";
				$SQL.= " ) ";
			}
			$SQL.= "ORDER BY data DESC";
			$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
			return my_fecht_assoc($res);
		} else {
			return array();
		}
	}

	function getCoalitionExchange($fromDate=NULL,$toDate=NULL,$kingdomArray=NULL,$olnyBetweenKingdom=NULL,$error=NULL){
		if (!empty($kingdomArray) && !empty($fromDate) && !empty($toDate)){
			$SQL = "SELECT * FROM ".TBL_COALITION_EXCHANGE_LOG." WHERE 1=1 ";
			if (!empty($fromDate)){
				$SQL .= " and date >= '".$fromDate."' ";
			}
			if (!empty($fromDate)){
				$SQL .= " and date <= '".$toDate."' ";
			}
			if (!empty($kingdomArray)){
				$SQL.= " and (";
				$SQL.= "     source in (".toSQLStringArray($kingdomArray).") ";
				if ($olnyBetweenKingdom){
					$SQL.= " AND ";
				} else {
					$SQL.= " OR ";
				}
				$SQL.= "     destination in (".toSQLStringArray($kingdomArray).")";
				$SQL.= " ) ";
			}
			$SQL.= " ORDER BY date DESC";
			$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
			return my_fecht_assoc($res);
		}else {
			return array();
		}
	}

	function addMarketTransaction($login,$sprzedajacy,$coSprzdaje,$ileKupuje,$cenaTowaru){
		$SQL="insert into ".TBL_MARKETPLACE_LOG." values('$login','$sprzedajacy','".$coSprzdaje."',$ileKupuje,$cenaTowaru,now(),'".session_id()."');";
		//if($cenaTowaru<6 || $cenaTowaru>200)
		$wynik = mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error ".mysql_error());
	}

	function delCoalitionExchange($source,$destination,$load_str,$tours,$porter){
		$SQL = "DELETE FROM ".TBL_COALITION_EXCHANGE_LOG;
		$SQL .=" WHERE source = '$source' and destination = '$destination' and `load` = '$load_str' and time_left = $tours and porter = $porter ";
		mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error ".mysql_error()." ".$SQL);
	}
	
	function addCoalitionExchange($source,$destination,$load_str,$tours,$porters){
		$SQL = "INSERT INTO ".TBL_COALITION_EXCHANGE_LOG;
		$SQL .=" VALUES(NULL, '$source', '$destination', '$load_str', $tours, $porters,now(),'".session_id()."')";
		mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error".mysql_error());
	}

	function updateCoalitionExchange($source){
		$SQL = " UPDATE ".TBL_COALITION_EXCHANGE_LOG;
		$SQL.= " SET time_left=time_left-1 ";
		$SQL.= " WHERE source='$source' and time_left > 0";
		mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error".mysql_error());
	}

	function addDeletedKingdom($login){
		$SQL = "insert into ".TBL_KINGDOM_DELTED_LOG." ";
		$SQL.= " values(NULL,'$login', now(),'".session_id()."')";
		mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error".mysql_error());
	}

	function getDeletedKingdom($fromDate=NULL,$toDate=NULL,$error=NULL){
		$SQL = "select * from ".TBL_KINGDOM_DELTED_LOG." where 1=1";
		if (!empty($fromDate)){
			$SQL .= " and date >= '".$fromDate."' ";
		}
		if (!empty($fromDate)){
			$SQL .= " and date <= '".$toDate."' ";
		}
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		return my_fecht_assoc($res);
	}


}
?>
