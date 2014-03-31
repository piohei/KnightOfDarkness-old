<?php
require_once('../pdoInterface.php');
require_once('../atak/Attacks.class.php');
require_once('../budowa/lib.php');

class Ksiestwo 
{
	private $attack;
	private $info;
	function __construct($info)
	{
		$this->attack = new Attacks($info);
		$this->info = $info;
	}
	
	public function getTowers()
	{
		$connect = pdoConnect();
		
		$sql = "SELECT lucznicy,wiezyczki FROM KSIESTWA WHERE nazwa = :name";
		$sth = $connect->prepare($sql);
		$sth->bindParam(":name", $this->info["nazwa"],PDO::PARAM_STR);
		$sth->execute();
		$arr = $sth->fetch();
		$archers = $arr["lucznicy"];
		$constans = $this->attack->getConstans();
		$tower["all"] = floor($arr["wiezyczki"]) * $constans['tower']['capacity'];
		$tower["used"] = min($archers, $tower["all"] );
		
		$connect = NULL;
		
		return($tower);
	} 
	
	public function getCastle()
	{
		$connect = pdoConnect();
		
		$sql = "SELECT lucznicy, piechota, zamek FROM KSIESTWA WHERE nazwa = :name";
		$sth = $connect->prepare($sql);
		$sth->bindParam(":name", $this->info["nazwa"],PDO::PARAM_STR);
		$sth->execute();
		$arr = $sth->fetch();
		
		$constans = castle($arr["zamek"],  
				   $this->attack->constans["castle"]["archer"],
				   $this->attack->constans["castle"]["infantry"],
				   $this->attack->constans["castle"]["cavalry"]);

		$castle["infantry_all"]  = $constans["infantry"];
		$castle["infantry_used"] = min ($castle["infantry_all"], $arr["piechota"]);
		$castle["archers_all"] 	= $constans["archer"];
		$castle["archers_used"] = min ($castle["archers_all"], $arr["lucznicy"]);

		$connect = NULL;
	
		return($castle);
	} 
	
	public function getBonus()
	{
	  $bn =  zwrocBonus("atak_obrona_ogolne",$this->info["nazwa"]) - 1;
	  $morale = $this->info["morale"] - 50;
	  
	  $bonus["aa"] = (zwrocBonus("atak_oblezenie",$this->info["nazwa"]) - 1 + $bn)*100  + $morale;
	  $bonus["ad"] = ($bn)* 100   + $morale;
	  $bonus["da"] = (zwrocBonus("atak_zamek",$this->info["nazwa"]) - 1 + $bn) * 100  + $morale;
	  $bonus["dd"] = (zwrocBonus("obrona_zamek",$this->info["nazwa"]) - 1 + $bn) * 100  + $morale;
	  return($bonus);
	}
}
?>