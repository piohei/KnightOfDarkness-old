<?php
$connect = pdoConnect();
  
if($connect == NULL)
	exit(0);

$can_add = true;
$bs_add_msg = "";

if($_POST['pb'] < 0)
{
	$can_add = false;
	$bs_add_msg += "Ten budynek jest zbyt tani<br/>";
}
if($_POST['pb'] > 10000000)
{
	$can_add = false;
	$bs_add_msg += "Ten budynek jest za drogi<br/>";
}
if(!isset($_POST["img"]))
{
	$can_add = false;
	$bs_add_msg += "Zdjêcie by siê przyda³o<br/>";
}
if(!$can_add)
	$smarty->assign('bs_add_msg', $bs_add_msg);
	
if( ($_POST['bs_add'] == 'dodaj') &&  
	(strlen($_POST['bs_name']) > 2) && 
	(strlen($_POST['bs_desc']) > 2) && 
	(strlen($_POST['type']) > 2 ) &&
	($_POST['prev'] >= 0 && $_POST['prev'] < 1000) && 
	($_POST['bonus'] > 0 && $_POST['bonus'] < 100000000) &&
	$can_add )
{  

	$sql = "INSERT INTO `BUDYNKI_SPECJALNE_WZORY` 
			(`nazwa`,`nastepny`,`poprzedni`,`koszt`,`opis`,`nazwa_bonusu`,`bonus`,`img`) 
		VALUES
			(:name,0,:prev,:pb,:desc,:type,:bonus,:img)";
 
	$sth = $connect->prepare($sql);
	$sth->bindParam(':name', $_POST['bs_name'], PDO::PARAM_STR, 25);
	$sth->bindParam(':prev', $_POST['prev'], PDO::PARAM_INT);
	$sth->bindParam(':pb', $_POST['pb'], PDO::PARAM_INT);
	$sth->bindParam(':desc', $_POST['bs_desc'], PDO::PARAM_STR, 200);
	$sth->bindParam(':type', $_POST['type'], PDO::PARAM_STR, 50);
	$sth->bindParam(':img', $_POST['img'], PDO::PARAM_STR);
	$sth->bindParam(':bonus', $_POST['bonus'], PDO::PARAM_INT);
	$sth->execute();

	if($_POST['prev'] > 0)
	{	
		$sql = "SELECT id FROM `BUDYNKI_SPECJALNE_WZORY` WHERE `nazwa`=:name";
		$sth = $connect->prepare($sql);
		$sth->bindParam(':name', $_POST['bs_name'], PDO::PARAM_STR, 25);
		$sth->execute();
 
		$arr = $sth->fetch();	$sth = NULL;
	 
		$sql = "UPDATE `BUDYNKI_SPECJALNE_WZORY` SET `nastepny`=:next WHERE `id`=:prev";
		$sth = $connect->prepare($sql);
		$sth->bindParam(':prev', $_POST['prev'], PDO::PARAM_INT);
		$sth->bindParam(':next', $arr['id'], PDO::PARAM_INT);
		$sth->execute();
	}
	$msg = "poprzedni : ".$_POST['prev']."\tnastêpny : ".$arr['id'];
	$smarty->assign('bs_add_msg',$msg);
 
} else if(isset($_POST['bs_rem']) )
{
	$sql = "DELETE FROM `BUDYNKI_SPECJALNE_WZORY` WHERE `id`=:prev";
	$sth = $connect->prepare($sql);
	$sth->bindParam(':prev', $_POST['prev'], PDO::PARAM_INT);
	$sth->execute();	
	
	$sth = NULL;
	$sql = "UPDATE `BUDYNKI_SPECJALNE_WZORY` SET nastepny = 0 WHERE nastepny = :prev";	
	$sth = $connect->prepare($sql);
	$sth->bindParam(':prev', $_POST['prev'], PDO::PARAM_INT);
	$sth->execute(); $sth = NULL;
}

    
$sql = "SELECT `id`, `nazwa` FROM `BUDYNKI_SPECJALNE_WZORY` WHERE nastepny = 0";
$sth = $connect->prepare($sql);
$sth->execute();
         
foreach($sth->fetchAll() as $key)
	$bslist[ $key['id'] ] = $key['nazwa'];

$imgArr = array('spichlerz', 'droga', 'droga_2','droga_3', 'kosciol', 'kuznia', 
					'magazyn', 'magazyn_2', '\n', 'mur', 'palisada', 'schowek',
					'smola', 'szkola', 'szyb_zelaza', 'szyb_zlota', 'trybuchet', '\n' ,
					'wielki_mur', 'magazyn_3', 'kat', 'katapulta', 'balista', 'dzwig'					 
							);

$smarty->assign('imgArr',$imgArr);     
$smarty->assign('prevArr',$bslist);

$bslist = NULL;
$imgArr = NULL;
       

$connect = NULL;
?>