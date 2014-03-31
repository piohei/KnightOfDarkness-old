<?php

require_once($CFG->katalogStrony."common.php");
require_once($CFG->katalogStrony."login/lib.php");
require_once($CFG->katalogStrony."panel/includes/class.LogowaniaLog.php");

class Zastepstwa{

	static $PROPERTY_BYLO_PIERSZW_UZYCIE = 0x01;

	private static function setProperty(&$zastepstwo,$property_flag){
		$zastepstwo['property'] = $zastepstwo['property'] | $property_flag;
		$SQL = "update ".TBL_ZASTEPSTWA." set property = {$zastepstwo['property']} where id_zastepstwa=".$zastepstwo['id_zastepstwa']."";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
	}

	static function zakonczZastepstwo(&$error_message,$id_zastepstwa, $login){
		$id_zastepstwa = mysql_real_escape_string($id_zastepstwa);
		$SQL = "update ".TBL_ZASTEPSTWA." set do = now() where id_zastepstwa = $id_zastepstwa and kogo = '$login' and do > now()";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		if (mysql_affected_rows()!=1){
			$error[] = "Prosze nie oszukiwaæ.";
			return false;
		}
		return true;
	}
	
	static function addZastepstwo(&$error_message,$kto,$kogo,$od,$do){
		global $CFG;
		$kto = mysql_real_escape_string($kto);
		$kogo = mysql_real_escape_string($kogo);
		$od = mysql_real_escape_string($od);
		$do = mysql_real_escape_string($do);

		if (strcmp($kto,$kogo)==0){
			$error[] = "Nie mo¿na samemu sobie daæ zastêpstwa";
		}

		$SQL = "select * from ".TBL_KINGDOM." where nazwa = '$kto'";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		if (mysql_num_rows($res) < 1){
			$error[] = "Ksiêstwo $kto nie isteniej.";
		}
		$SQL = "select * from ".TBL_KINGDOM." where nazwa = '$kogo'";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		if (mysql_num_rows($res) < 1){
			$error[] = "Ksiêstwo $kogo nie isteniej.";
		}
		$z_kto = Zastepstwa::getZastepstwa($kto,NULL);
		if (count($z_kto) > 0){
			$error[] = "Ksiêstwo $kto zastêpuje juz ksiestwo ".$z_kto[0]['kogo']." do dnia ".$z_kto[0]['do']."";
		}
		$z_kogo = Zastepstwa::getZastepstwa(NULL,$kogo);
		if (count($z_kogo) > 0){
			$error[] = "Ksiêstwo $kogo jest ju¿ zastêpowane przez ksiêstwo {$z_kto[0]['kto']} do dnia {$z_kto[0]['do']}.";
		}

		if (is_null($od) || strcmp($od,'') == 0){
			$od = NULL;
			$od = date('Y-m-d H:i:s');
		}
		$tmp_od = strtotime($od);
		if (is_bool($tmp_od) && !$$tmp_od){
			$error[] = "Niepoprawny format daty $od";
		} else {
			$od = date('Y-m-d H:i:s',$tmp_od);
		}

		$tmp_do = strtotime($do);
		if (is_bool($tmp_do) && !$$tmp_do){
			$error[] = "Niepoprawny format daty $do";
		} else {
			$do = date('Y-m-d H:i:s',$tmp_do);
		}
		if (!is_bool($tmp_do) && !is_bool($tmp_od)){
			if ($tmp_od >= $tmp_do){
				$error[] = "Data pocz±tku zastêpstwa musi byæ wcze¶niejsza od jego zakoñczenia";
			}
			if ($tmp_od + $CFG->max_zastepstwo*3600*24 < $tmp_do){
				$error[] = "Maksymalna d³ugo¶æ zastêpstwa to $CFG->max_zastepstwo dni";
			}
			if ($tmp_od <= strtotime("now")-30){
				$error[] = "Nie mo¿na zdefiniowaæ zastêpstwa wcze¶niej ni¿ ".date('Y-m-d H:i:s',strtotime("now"));
			}
			Zastepstwa::sprawdzCzyMozeMiecZastepstwo($error,$kto,$kogo,$od,$do);
		}

		if (count($error)>0){
			foreach($error as $lp=>$mess){
				$error_message[] = $mess;
			}
			return false;
		}

		$SQL = "insert into ".TBL_ZASTEPSTWA." (kto, kogo, od, do) values ('$kto','$kogo','$od','$do')";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		return true;
	}

	private static function sprawdzCzyMozeMiecZastepstwo(&$error_message,$kto,$kogo,$od,$do){
		global $CFG;
		$error = array();


		$SQL = "select max(do) as max_do from ".TBL_ZASTEPSTWA." where 1=1 and kogo = '$kogo' ";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		$row = mysql_fetch_assoc($res);
		if (!is_null($row['max_do']) && (strtotime($row['max_do']) + $CFG->odstep_miedzy_kolejnymi_zastepstwami*3600*24 > strtotime($od))){
			$error[] = "Nie mo¿na mieæ zastêpstw czê¶ciej ni¿ co $CFG->odstep_miedzy_kolejnymi_zastepstwami dni";
		}

		$SQL = "select count(*) ile from ".TBL_ZASTEPSTWA." where 1=1 and (kto = '$kto' or kogo = '$kto') ";
		$SQL .= " and ";
		$SQL .= " (  '$od' between od and do  ";
		$SQL .= " or '$do' between od and do  ";
		$SQL .= " or  od between '$od' and '$do' ";
		$SQL .= " or  do between '$od' and '$do' )";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		$row = mysql_fetch_assoc($res);
		if (!is_null($row['ile']) && $row['ile'] > 0){
			$error[] = "Ksiêstwo $kto zastêpuje lub jest zastêpowane we wskazanym czasie przez inne ksiêstwo";
		}

		$SQL = "select * from ".TBL_ZASTEPSTWA." where 1=1 and kogo = '$kogo' and od > now()";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>'.$SQL);
		if (mysql_num_rows($res) > 0){
			$error[] = "Nie mo¿na mieæ wiêcej ni¿ jedno zaplanowane zastêpstwo";
		}


		if (count($error)>0){
			foreach($error as $lp=>$mess){
				$error_message[] = $mess;
			}
			return false;
		}

	}

	static function getZastepstwa($kto=NULL,$kogo=NULL,$tylkoCzynne=true){
		if ($kto != NULL){
			$kto = mysql_real_escape_string($kto);
		}
		if ($kogo != NULL){
			$kogo = mysql_real_escape_string($kogo);
		}

		$ret = array();
		$SQL = "select * from ".TBL_ZASTEPSTWA." where 1=1 ";
		if (!is_null($kto)){
			$SQL .= " and kto = '$kto' ";
		}
		if (!is_null($kogo)){
			$SQL .= " and kogo = '$kogo' ";
		}
		if ($tylkoCzynne){
			$SQL .= " and now() between od and do ";
		}
		$SQL .= " order by od desc";
		$res = mysql_query($SQL) or die (__FILE__.':'.__LINE__.' '.mysql_error().' <br>');
		if (mysql_num_rows($res) > 0){
			while($row = mysql_fetch_assoc($res)){
				if (strtotime($row['od']) <= strtotime("now") && strtotime("now") <= strtotime($row['do'])){
					$row['czynne'] = true;
				} else {
					$row['czynne'] = false;
				}
				if (strtotime($row['od']) >= strtotime("now")){
					$row['bedzie_czynne'] = true;
				}
				$ret[] = $row;
			}
		}
		return $ret;
	}

	static function logoutIfZastepstwo($login,$remote_addres){
		global $CFG;
		$zastepstwa = Zastepstwa::getZastepstwa(NULL,$login);
		if(count($zastepstwa) > 0){
			if(!empty($_COOKIE['AUTH'])){
				$auth_cookie = decode_data($_COOKIE['AUTH'], COOKIE_ENCODE_KEY);
				$user_data = explode('&', $auth_cookie);
			}
//			LogowaniaLog::addLogowanieZASTEPSTWO($PHPSESSID,$login,$remote_addres,$user_data[2],$user_data[0],$user_data[1]);
			$zastepstwo = $zastepstwa[0];
			Zastepstwa::logout($zastepstwo,$login,$remote_addres);
		}
	}

	private static function logout($zastepstwo,$login,$remote_addres){
		global $CFG;
		$niezalogowanyMessage = '<center>Twoje konto jest zastêpowane przez '.$zastepstwo['kto'].'<br> od '.$zastepstwo['od']."<br> do ".$zastepstwo['do']."";
		$niezalogowanyMessage .= "<br>W tym czasie nie mo¿esz siê logowaæ na swoje konto</center>";
		include($CFG->katalogStrony."login/niezalogowany.php");
		wyloguj();
		exit(0);
	}

	static function logoutIfZastepstwoWithCheckFirstUseFlag($login,$remote_addres){
		$zastepstwa = Zastepstwa::getZastepstwa(NULL,$login);
		if(count($zastepstwa) > 0){
			$zastepstwo = $zastepstwa[0];
			if (! ($zastepstwo['property'] & Zastepstwa::$PROPERTY_BYLO_PIERSZW_UZYCIE)){
				Zastepstwa::setProperty($zastepstwo,Zastepstwa::$PROPERTY_BYLO_PIERSZW_UZYCIE);
				global $CFG;
				$niezalogowanyMessage = '<center>Przepraszamy nast±pi³o wylogowanie z powodu aktywacji zastêpstwa<br>Zaloguj sie ponownie na sowje konto</center>';
				include($CFG->katalogStrony."login/niezalogowany.php");
				wyloguj();
				exit(0);
			}
		}
	}


}
?>