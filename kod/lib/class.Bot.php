<?php

require_once($CFG->katalogStrony."pdoInterface.php");
require_once($CFG->katalogStrony."tura/funkcje_tura.php");
require_once($CFG->katalogStrony."budowa/lib.php");
class Bot
{
	private $connect;
	private $name;
	private $earth;
	private $workers;
	private $bs;
	private $buildings;
	private $gosp;
	private $turns;
	
	public function __construct($name)
	{
		$this->connect = pdoConnect(); 
		$this->name = $name;
		$this->getAll();	
	}
	
	public function __destruct()
	{
		$this->connect = NULL;
	}
	
	public function run()
	{
		while($this->turns > 0)
		{
			if($this->gosp < 300)
				$this->smallAI();
			else
				$this->normalAI();
						
			--$this->turns;
			$this->getGosp();
		}
	}
	
	private function smallAI()
	{
	}
	
	private function normalAI()
	{
	}
	
	private function getEarth()
	{
		$sql = "SELECT ziemia FROM KSIESTWA WHERE nazwa = :nazwa";
		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();
	}
	
	private function getWorkers()
	{
		$sql = "SELECT budowniczowie,kowale,gornicy_zlota,gornicy_zelaza,rolnicy
				FROM KSIESTWA 
				WHERE nazwa = :nazwa";	
	
		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();

		foreach($sth->fetchAll() as $key => $value)
			$this->workers[$key] = $value;

	}
	
	private function getBS()
	{
		
	}

	private function getBuildings()
	{
		$sql = "SELECT domy, warsztaty, farmy, koszary, wiezyczki, 
						kopalnie_zlota, kopalnie_zelaza, rynki, gildie, 
						straznice, zamek 
					FROM KSIESTWA 
					WHERE nazwa = :nazwa";
					
		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();

		foreach($sth->fetchAll() as $key => $value)
			$this->buildings[$key] = $value;

	}
	
	private function getGosp()
	{
		$sql = "SELECT (budowniczowie+kowale+gornicy_zlota+gornicy_zelaza+rolnicy)
					FROM KSIESTWA 
					WHERE nazwa = :nazwa";	

		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();

		foreach($sth->fetchAll() as $key => $value)
			$this->gosp = $value;

	}
	
	private function getTurns()
	{
		$sql = "SELECT tury FROM KSIESTWA WHERE nazwa = :nazwa";
		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();

		foreach($sth->fetchAll() as $key => $value)
			$this->turns = $value;

	}
	
	private function getArmy()
	{
		$sql = "SELECT lucznicy,piechota,husaria,szpiedzy,straznicy FROM KSIESTWA WHERE nazwa = :nazwa";
		$sth = $this->connect->prepare($sql);
		$sth->bindParam(":nazwa",$this->name,PDO::PARAM_STR);
		$sth->execute();
		
		foreach($sth->fetchAll() as $key => $value)
			$this->army[$key] = $value;
		
	}
	
	private function getAll()
	{
		$this->getTurns();
		$this->getGosp();
		$this->getBuildings();
		$this->getEarth();
		$this->getArmy();
	}
}
?>