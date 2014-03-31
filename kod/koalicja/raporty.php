<?php
require_once("../common.php");
require_once("../pdoInterface.php");
require_once("../lib/raport_parsers/spy_attack_parser.php");
require_once("../lib/raport_parsers/attack_parser.php");
require_once("../lib/raport_parsers/torture_parser.php");
require_once("../lib/raport_parsers/building_attack_parser.php");
require_once("../lib/raport_parsers/coalition_quit.php");
require_once("../lib/raport_parsers/market_parser.php");
require_once("../lib/raport_parsers/simple_parser.php");
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');

$login = czyZalogowany();
$info=infoOksiestwie($login);

$connect = pdoConnect();
if($_GET['action'] == "del")
{
	$sql = "DELETE FROM shared_report WHERE id = :id";
	$sth = $connect->prepare($sql);
	$sth->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$sth->execute();	$sth = NULL;
}

if(isset($_GET['id']))
{
	$sql = "SELECT subject,msg FROM shared_report WHERE id = :id AND coalition = :coal";
	$sth = $connect->prepare($sql);
	$sth->bindParam(':coal', $info['koalicja'], PDO::PARAM_STR);
	$sth->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$sth->execute();
	$msg = $sth->fetch();	$sth = NULL;
	
	$data = explode(':', $msg['msg']);
	
	switch($data[0])
	{
		case "spy" :
			spy_attack_parser( substr($msg['msg'], 4) , $out);
		break;
		
		case "tor" :
			torture_parser( substr($msg['msg'], 4), $out);			
		break;
		
		case "atk" :
			attack_parser( substr($msg['msg'], 4), $out);			
		break;
		
		case "mrk" :
			market_parser( substr($msg['msg'], 4), $out);
		break; 
		
		case "bud" :
			building_attack_parser( substr($msg['msg'], 4), $out);
		break;
		
		case "sim" : 
			simple_parser( substr($msg['msg'], 4), $out);
		break;
		
		case "cl1" :
			coalition_quit( substr($msg['msg'], 4), $out);
		break;
	}

	$smarty->assign('subject',$msg['subject']);
	$smarty->assign('msg',$out);
	
}	
	$sql = "SELECT id,whose, subject,date FROM shared_report WHERE coalition = :coal ORDER BY date DESC LIMIT 0,10";
	$sth = $connect->prepare($sql);
	$sth->bindParam(':coal', $info['koalicja'], PDO::PARAM_STR);
	$sth->execute();
	$array = $sth->fetchAll();
	$smarty->assign('nazwa',$login);
	$smarty->assign('reports',$array);
	$smarty->assign('cesarz',czyCesarz($login,$info["koalicja"]));
	
$connect = NULL;

$smarty->assign('kingdomInfo',$info);
$smarty->assign('tytul',"Raporty Koalicyjne");
$smarty->assign('main_panel','coalition.report.tpl');

	// sprawdzenie czy s¹ nowe wiadomoœci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
$smarty->display('main.tpl');
?>