<?php
$connect = pdoConnect();
  
if($connect == NULL)
	exit(0);

$smarty->assign("login", $login);

if($_POST["status"] == "D")
{
	$sql = "UPDATE todo SET status = 'done' WHERE id = :id";
	$sth = $connect->prepare($sql);
	$sth->bindParam(":id", $_POST["co"], PDO::PARAM_INT);
	$sth->execute(); 	$sth = NULL;
}
if($_POST["status"] == "P")
{
	$sql = "UPDATE todo SET status = 'in progress' WHERE id = :id";
	$sth = $connect->prepare($sql);
	$sth->bindParam(":id", $_POST["co"], PDO::PARAM_INT);
	$sth->execute(); 	$sth = NULL;	
}
if($_POST["add"] == "dodaj")
{
 $sql = "INSERT INTO `todo` (kto, kogo, data, status, zadanie) 
 		VALUES
 			(:kto, :kogo, NOW(), 'unknown', :txt) 
 		";
 	$sth = $connect->prepare($sql);
 	$sth->bindParam(":kto", $login, PDO::PARAM_STR);
 	$sth->bindParam(":kogo", $_POST["komu"], PDO::PARAM_STR);
 	$sth->bindParam(":txt", $_POST["txt"], PDO::PARAM_STR);
 	$sth->execute(); 
	print_r($sth->errorInfo()); 	
 	$sth = NULL; 
 	
}

$sql = "SELECT id, kto, kogo, data, status, zadanie FROM `todo` ORDER BY status DESC, data DESC LIMIT 0,25 ";
$sth = $connect->prepare($sql);
$sth->execute();

foreach($sth->fetchAll() as $key => $value)
{
	$list[$key]["id"] = $value["id"];
	$list[$key]["kto"] = $value["kto"];
	$list[$key]["kogo"] = $value["kogo"];
	$list[$key]["data"] = $value["data"];
	switch($value["status"])
	{
		case "in progress" :
		case "w trakcie" :
			$list[$key]["color"] = "red";
		break;
		
		case "done" :
		case "ukonczone" :
			$list[$key]["color"] = "green";
		break; 
		
		default:
			$list[$key]["color"] = "silver";
			break;
	}
	$list[$key]["status"] = $value["status"];
	$list[$key]["txt"] = $value["zadanie"];
}

$smarty->assign('list',$list);

$connect = NULL;
?>