<?php
require_once('../pdoInterface.php') ;
require_once('../parametry.php');

class MyLog
{
	static function addLog($name, $value)
	{
		global $nr_ery;
		$connection = pdoConnect();
		$sql = "UPDATE log SET value = value + :value WHERE name = :name AND era = :era";
		$sth = $connection->prepare($sql);
		$sth->bindParam(":value", $value, PDO::PARAM_INT);
		$sth->bindParam(":name",$name, PDO::PARAM_STR);
		$sth->bindParam(":era",$nr_ery, PDO::PARAM_INT);
		$sth->execute();
	}
}

?>