<?php
if($_GET['key'] != 'Hg84oiudsko56'){
 	header('Location: 404.shtml');
	exit(0);
}

require_once('config.php');
require_once('parametry.php');
require_once($smarty->compile_dir.'/koniec.php');
require_once('lib/class.Bot.php');

$sql = "INSERT INTO task_log (task,date,ip) VALUES ('".$_GET[action]."', NOW(), '".$_SERVER[REMOTE_ADDR]."')";
	mysql_query($sql); $sql = NULL;
switch($_GET['action']){

	case 'bot' :
		$sql = "SELECT login FROM PROFIL WHERE property = 9 ";
		$result = mysql_query($sql);
		
		if(mysql_num_rows($result) > 0)
		while($row = mysql_fetch_array($result,MYSQL_ASSOC))
		{ 
			$bot = new Bot($row["login"]);
			$bot->run();
		}			
	break;
	
 case 'new_era':
   echo 'nowa era';
   $sql = "SELECT mail FROM PROFIL";
   $result = mysql_query( $sql );
   $to = "";
   while( $row = mysql_fetch_array( $result, MYSQL_NUM ) )
     {
       $to .= $row[0] ." ,";
     }
   $text = "Wlasnie rozpoczela sie nowa era w grze Knight of Darkness aby zagrac wejdz na strone http://kod-online.com";
   $subject = "Knitght of Darkness - Nowa era";
   mail( $to, $subject, $text );
   break;

 case 'budynek':
		if(isset($koniecEry)) exit;
		require_once('mysql.connection.php');
		$q ="Update budynki_koncowe set
          jedzenie = greatest(jedzenie - (piechota+lucznicy+husaria),0),
          postep = least(postep+least(jedzenie*10 ,(10*budowniczowie)),".$parametryBudynekKoncowy['kosztPktBudowy']."),
          jedzenie = greatest(jedzenie-budowniczowie,0)";
		mysql_query($q);
		$q ="select * from budynki_koncowe where postep >= ".$parametryBudynekKoncowy['kosztPktBudowy'];
		$wynik=mysql_query($q);
		if(mysql_num_rows($wynik)>0){
			print "ok";
			unlink($smarty->compile_dir."/koniec.php");
			$plik = fopen($smarty->compile_dir."/koniec.php",'a+');
			fwrite($plik,'<? $koniecEry=true; ?>');
			fclose($plik);
			require_once($CFG->katalogStrony."config.mailer.php");
			$mailer->FromName = 'Knight of Darkness';
			$mailer->AddAddress('krzysztof.dziurda@gmail.com');
			$mailer->Subject = 'KoD - KONIEC ERY';
			$message = 'skonczyla sie era trzeba zrestartowac koda';
			$mailer->Body    = $message;
			if(!@$mailer->Send()){
				$mailer->ClearAllRecipients();
				$ok = mail($email, 'KoD - KONIEC ERY', $message, "Knight of Darkness\r\n");
			}
		}
		break;

	case 'addtours':
		echo 'addtours ';
		require_once('mysql.connection.php');
		$q = 'UPDATE KSIESTWA SET tury = tury+1 WHERE tury < '.$ustawienia['maksymalnaIloscTur'].' AND nazwa = ANY (SELECT login FROM PROFIL WHERE NOT property & 2 AND property > 0)';
		$res = mysql_query($q);
//		echo mysql_affected_rows($res)." ".mysql_error();
//		$res = mysql_query($q);
//		echo mysql_affected_rows($res)." ".mysql_error();
//		$res = mysql_query($q);
//		echo mysql_affected_rows($res)." ".mysql_error();
		break;

	case 'cleanLastAttack':
		require_once('mysql.connection.php');
		$q = 'delete from LastAttack where (date + INTERVAL 1 DAY) < NOW()';
		mysql_query($q);
		break;

	case 'fetch_pagerank':
		// pobieranie pagerank, nie dzia³a ju¿ ;)
		require_once("{$CFG->dir_lib}pagerank.php");
		$pagerank = pagerank('http://www.wp.pl'/*$CFG->adresSerwera*/);
		header('Content-Type:  text/plain; charset=iso-8859-2');
		print $pagerank;
		break;

	case 'marketplace_stat':
		// statystyki cenowe dla poszczegolnych produktow na rynku
		require_once('const.php');
		require_once("{$CFG->dir_marketplace}class.MarketplaceStat.php");
		require_once('mysql.connection.php');
		
echo $CFG->dir_data;
		$marketplaceStat = new MarketplaceStat(70, "{$CFG->dir_data}MarketplaceStat");
		$marketplaceStat->fetchData();
		$marketplaceStat->saveData();
		break;

	case 'mbox':

		// zarzadzanie skrzynkami wiadomosci
		require_once('const.php');
		require_once('param.constraint.php');
		require_once('mysql.connection.php');
		require_once("{$CFG->katalogStrony}messages/class.MessageBox.php");

		MessageBox::optimize();
		break;

	case 'user_clean':

		// usuwanie u¿ytkowników dawno nie graj±cych
		require_once('const.php');
		require_once('mysql.connection.php');
		require_once("{$CFG->dir_lib}class.User.php");

		// usuwanie u¿ytkowników
		$q = "SELECT login FROM ". TBL_PROFILE ." WHERE "
        ."(property & 4 ) = 4 AND (property >> 5) <= 1";
		if($r = mysql_query($q)){
			while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
				print_r($row."<br/");
				$kingdom = new User($row['login']);
				$kingdom->remove();
			}
		}

		// zmniejszanie licznika "czyszczenia"
		$q = "UPDATE PROFIL SET ".
        " property = (property & 31) | (((property >> 5)-1) << 5)".
        " WHERE (property & 4) = 4";
		mysql_query($q);

		// ustawianie liczników "czyszczenia" i wysy³anie wiadomo¶ci
		$q = "SELECT * FROM ".TBL_PROFILE." WHERE (ostatni_log + INTERVAL 15 DAY) < NOW()".
        " AND (property & 4)=0 ORDER BY ostatni_log ASC LIMIT 30";
		$r = mysql_query($q);
		if($r = mysql_query($q)){
			$message = file_get_contents('data.task.user_clean.txt');
			while($row = mysql_fetch_array($r, MYSQL_ASSOC)){

				// generowanie tekstu wiadomo¶ci
				$search = array('<<login>>', '<<server_address>>');
				$data = array($row['login'], $CFG->adresSerwera);
				$message_tmp = str_replace($search, $data, $message);

				// wysy³anie wiadomo¶ci
				$from = 'Knight of Darkness';
				$address = $row['mail'];
				$subject = 'Przypomnienie';
				if(mail($address, $subject, $message_tmp, "From: $from\r\n")){
					$kingdom = new User($row['login']);
					$kingdom->setProperty(USERPROPERTY_CLEAN);
				}
			}
		}
		break;
}
?>
