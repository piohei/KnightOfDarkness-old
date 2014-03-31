<?php
require_once('../config.php');
require_once('../const.php');
require_once('../funkcjeBazy.php');
require_once('../sondy/funkcje_sonda.php');
require_once('../budynek_koncowy/lib.php');
require_once('function.coalition.pub.php');
require_once('class.Coalition.php');
require_once('funkcje_koalicja.php');
require_once('../parametry.php');
require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

global $CFG;
require_once($CFG->katalogStrony.'common.php');
require_once($CFG->katalogStrony.'lib/class.User.php');

otworz_polaczenie();

$login = czyZalogowany();
//$kingdomInfo = infoOksiestwie($login);
$loggedUser = new User($login);
$kingdomInfo = $loggedUser->getState();
$wiersz = $kingdomInfo;
$coalition = new Coalition($login);


// Opuszczanie koalicji przez czlonka
if(isset($_GET['leave'])){
	$coalition->quit();
	header('Location: koalicja.php');
	exit;
}

// Pobranie listy czlonkow
$members = $coalition->getMemberList('PRIVATE_LIST');
$emperor = $coalition->getEmperor();

//!WYWALIC
if(!is_null($emperor) && $emperor == $login) $prawa_szefa = 1;
else $prawa_szefa = 0;


// Dodawanie wiadomosci do karczmy
if($_GET['pub_add']){
	$text = strip_tags($_POST['mesg']);
	if(strlen($text) > 0){
		$coal_name = $coalition->getName();
		$text = nl2br(stripslashes($text));
		coalition_pub_add_mesg($coal_name, $login, $text, $CFG->max_pub_message);
	}
}

if (isset($_GET['wycofaj_tragarzy_id'])){
	$_GET['tab'] = 3;
	$wycofaj_tragarzy_id = $_GET['wycofaj_tragarzy_id'];
	$coalition->exchangeCancel($login,$wycofaj_tragarzy_id,$_mesg);
	$kingdomInfo = $loggedUser->getState();
}

// Exportowanie towarow
if(isset($_POST['export'])){
	$_GET['tab'] = 3;
	$food = (!empty($_POST['food']) && is_numeric($_POST['food']) && $_POST['food'] > 0)? $_POST['food'] : 0;
	$tools = (!empty($_POST['tools']) && is_numeric($_POST['tools']) && $_POST['tools'] > 0)? $_POST['tools'] : 0;
	$iron = (!empty($_POST['iron']) && is_numeric($_POST['iron']) && $_POST['iron'] > 0)? $_POST['iron'] : 0;
	$weapon = (!empty($_POST['weapon']) && is_numeric($_POST['weapon']) && $_POST['weapon'] > 0)? $_POST['weapon'] : 0;
	if (ceil($food)!=$food) $_mesg[]="Nie poprawna warto¶æ ilo¶ci jedzenia $food";
	if (ceil($tools)!=$tools) $_mesg[]="Nie poprawna warto¶æ ilo¶ci narzêdzi $tools";
	if (ceil($iron)!=$iron) $_mesg[]="Nie poprawna warto¶æ ilo¶ci ¿elaza $iron";
	if (ceil($weapon)!=$weapon) $_mesg[]="Nie poprawna warto¶æ ilo¶ci broni $weapon";

	// Obliczanie punktow ladunkowych
	$load_scores = $food*$porter['food_scores'];
	$load_scores += $tools*$porter['tool_scores'];
	$load_scores += $iron*$porter['iron_scores'];
	$load_scores += $weapon*$porter['weapon_scores'];

	$porter_needed = ceil($load_scores/$porter['load_scores']);
	if($porter_needed > 0 && $porter_needed <= $kingdomInfo['tragarze']){
		$exchange_cost = $porter_needed * $porter['cost'];
		if($exchange_cost > $kingdomInfo['zloto']){
			$_mesg[] = "Masz za ma³o z³ota aby op³aciæ tragarzy.";
		}
		if($food > $kingdomInfo['jedzenie']){
			$_mesg[] = "Nie posiadasz tyle jedzenia w magazynie.";
		}

		if($tools > $kingdomInfo['narzedzia']){
			$_mesg[] = "Nie posiadasz tyle narzêdzi w magazynie.";
		}
		if($iron > $kingdomInfo['zelazo']){
			$_mesg[] = "Nie posiadasz tyle ¿elaza w magazynie.";
		}
		if($weapon > $kingdomInfo['bronie']){
			$_mesg[] = "Nie posiadasz tyle broni w magazynie.";
		}
		if(empty($_mesg)){
			$load = array(
                'food'      => $food,
                'tool'      => $tools,
                'iron'      => $iron,
                'weapon'    => $weapon
			);
			$coalition->exchangeBegin($_POST['dest_kingdom'], $load, $porter['tours'], $porter_needed, $exchange_cost, $err);
			if($err == 0){
				$kingdomInfo['zloto'] -= $exchange_cost;
				$kingdomInfo['tragarze'] -= $porter_needed;
				$kingdomInfo['jedzenie'] -= $food;
				$kingdomInfo['narzedzia'] -= $tools;
				$kingdomInfo['zelazo'] -= $iron;
				$kingdomInfo['bronie'] -= $weapon;
				$_mesg[] = "Tragarze wyruszyli. Dotr± do celu za {$porter['tours']} tury.";
			}else{
				switch($err){
					case 1:
						$_mesg[] = "Królestwa musz± nale¿eæ do tej samej koalicji.";
						break;
					case 2:
						$_mesg[] = "Aby wysy³aæ tragarzy musisz wybudowaæ rynek dla tej koalicji.";
						break;
					case 3:
						$_mesg[] = "Królestwo docelowe nie ma jeszcze wybudowanego rynku dla tej koalicji."
						." Tragarze nie wyrusz±!";
						break;
					default:
						$_mesg[] = "Tragarze nie mogli wyruszyæ do tego królestwa...";
				}
			}
		}
	}elseif($porter_needed != 0){
		$_mesg[] = 'W królestwie posiadasz za ma³o tragarzy aby wyeksportowaæ taki ³adunek.';
	}
}
if (! is_null($coalition->getName())){
	// Statystyki Rynku
	//
	//
	foreach ($members as $kingdom=>$kin)
	{
		$king[$kin['nazwa']] = $kin['nazwa'];
		$kingod .= " source='".$kin['nazwa']."' or";
		$kingdo .= " destination='".$kin['nazwa']."' or";
		$kingo .= " kto='".$kin['nazwa']."' or";
		$kingd .= " od_kogo='".$kin['nazwa']."' or";
	}

	$kingdo = substr($kingdo, 0, -3);
	$kingod = substr($kingod, 0, -3);
	$kingd = substr($kingd, 0, -3);
	$kingo = substr($kingo, 0, -3);

	$sql = mysql_query("SELECT * FROM CoalitionExchangeLog WHERE (".$kingod.") AND(".$kingdo.") AND time_left=0");
	while(list($id, $od, $do, $load) = @mysql_fetch_array($sql))
	{
		list($food, $tool, $iron, $weapon) = explode('|', $load);

		$all_im[$do]['food'] += $food;
		$all_im[$do]['tool'] += $tool;
		$all_im[$do]['iron'] += $iron;
		$all_im[$do]['weapon'] += $weapon;

		$all_ex[$od]['food'] += $food;
		$all_ex[$od]['tool'] += $tool;
		$all_ex[$od]['iron'] += $iron;
		$all_ex[$od]['weapon'] += $weapon;

		$Sum['food'] += $food;
		$Sum['tool'] += $tool;
		$Sum['iron'] += $iron;
		$Sum['weapon'] += $weapon;
	}

	$export = array();

	$sql = mysql_query("SELECT * FROM CoalitionExchangeLog WHERE (source='".$login."' or destination='".$login."') AND time_left=0");
	while(list($id, $od, $do, $load) = @mysql_fetch_array($sql))
	{
		list($food, $tool, $iron, $weapon) = explode('|', $load);


		if(($login == $do) && ($king[$od] == $od))
		{
			$import[$od]['food'] += $food;
			$import[$od]['tool'] += $tool;
			$import[$od]['iron'] += $iron;
			$import[$od]['weapon'] += $weapon;
				
			$imSum['food'] += $food;
			$imSum['tool'] += $tool;
			$imSum['iron'] += $iron;
			$imSum['weapon'] += $weapon;
		}
		elseif(($login == $od) && ($king[$do] == $do))
		{
			$export[$do]['food'] += $food;
			$export[$do]['tool'] += $tool;
			$export[$do]['iron'] += $iron;
			$export[$do]['weapon'] += $weapon;
				
			$exSum['food'] += $food;
			$exSum['tool'] += $tool;
			$exSum['iron'] += $iron;
			$exSum['weapon'] += $weapon;
		}
		
	}

	$sql = mysql_query("SELECT * FROM targ_log WHERE (".$kingo.") AND (".$kingd.")");
	while(list($od, $do, $co, $ile, $cena) = @mysql_fetch_array($sql))
	{
		if(($od || $do) !== $login)
		{
			$all_im[$do]['gold'] += ($ile * $cena);
			$all_ex[$od]['gold'] += ($ile * $cena);

			$Sum['gold'] += ($ile * $cena);
		}
	}
	
	$sql = mysql_query("SELECT * FROM targ_log WHERE (kto='".$login."' or od_kogo='".$login."')");
	while(list($od, $do, $co, $ile, $cena) = @mysql_fetch_array($sql))
	{
		if(($login == $do) && ($king[$od] == $od))
		{
			$import[$od]['gold'] += ($ile * $cena);

			$imSum['gold'] += ($ile * $cena);
		}
		else if(($login == $od) && ($king[$do] == $do))
		{
			$export[$do]['gold'] += ($ile * $cena);
			$exSum['gold'] += ($ile * $cena);
		}
	}

	function line($whot, $all)
	{
		if($all != 0) {$ret = ceil((149*($whot/$all))+1);} else {$ret = 1;}
		return $ret;
	}

	function long($whot)
	{
		$long = strlen($whot);
		$precyzja = $long%3==1?1:0;
		if ($long >= 4 && $long < 7){
			$whot = round($whot/1000,$precyzja).'<i>ty¶</i>';
		}else if ($long >= 7 && $long < 10){
			$whot = round($whot/1000000,$precyzja).'<i>mln</i>';
		}else if ($long >= 10 && $long < 13){
			$whot = round($whot/1000000000,$precyzja).'<i>mld</i>';
		}else if(13 <= $long){
			$whot = round($whot/1000000000000,$precyzja).'<i>bil</i>';
		}if($whot == 0){
			$whot = '';
		}
		return $whot;
	}

	function wys($co, $suma, $messageIfEmpty)
	{
		$row = "row1";

		if ($co != NULL)
		{
			$RAZEM='_R_A_Z_E_M_!!!!!';
			$co['_R_A_Z_E_M_!!!!!']=$suma;
			foreach ($co as $exLogin=>$ex)
			{
				if(strcmp($exLogin, $RAZEM)==0){
					$exLogin='<b>RAZEM:</b>';
				}
				$co_view .= '<tr>
                          <td style="width: 140px; padding: 2px 5px;" class="'.$row.'">'.$exLogin.'</td>
                          <td style="width: 140px; padding: 2px 5px;" class="'.$row.'">

                           <table cellspacing="0" cellpadding="0" width="140px">
                            <tbody>
                             <tr><td style="height: 5px;"><div style="width: '.line($ex['food'],   $suma['food']   ).'px; height:  3px; background-color: #34CA00;"></div></td></tr>
                             <tr><td style="height: 5px;"><div style="width: '.line($ex['tool'],   $suma['tool']   ).'px; height:  3px; background-color: #674E19;"></div></td></tr>
                             <tr><td style="height: 5px;"><div style="width: '.line($ex['iron'],   $suma['iron']   ).'px; height:  3px; background-color: #016ABB;"></div></td></tr>
			     			 <tr><td style="height: 5px;"><div style="width: '.line($ex['weapon'], $suma['weapon'] ).'px; height:  3px; background-color: #9B4A02;"></div></td></tr>
                             <tr><td style="height: 5px;"><div style="width: '.line($ex['gold'],   $suma['gold']   ).'px; height:  3px; background-color: #BEC500;"></div></td></tr>
                            </tbody>
                           </table>
			   
			  </td>
			  <td style="width: 45px; text-align: center;" class="'.$row.'">'.long($ex['food']).'</td>
			  <td style="width: 45px; text-align: center;" class="'.$row.'">'.long($ex['tool']).'</td>
			  <td style="width: 45px; text-align: center;" class="'.$row.'">'.long($ex['iron']).'</td>
			  <td style="width: 45px; text-align: center;" class="'.$row.'">'.long($ex['weapon']).'</td>
			  <td style="width: 45px; text-align: center;" class="'.$row.'">'.long($ex['gold']).'</td>
			  </tr>';
				if ($row == "row1") { $row = "row2";} else { $row = "row1";}
			}
		}
		else
		{
			$co_view = '<tr><td class="row1" align="center"><br />'.$messageIfEmpty.'<br /><br /></td></tr>';
		}
		return $co_view;
	}

	$export_view = wys($export, $exSum,"Panie, sk±pisz swoim wspó³koalicjantom.<br>Jeszcze nic im nie wys³a³e¶.");
	$import_view = wys($import, $imSum,"Panie, Twoja koalicja Ciê nie docenia, jeszcze nikt Ci nic nie wys³a³. ");
	$all_ex_view = wys($all_ex, $Sum,"Cesarzu koalicja wogóle nie wymieni± miêdzy sob± towarów.");
	$all_im_view = wys($all_im, $Sum,"Cesarzu koalicja wogóle nie wymieni± miêdzy sob± towarów.");

	// Zapraszanie nowych czlonkow koalicji
	if($prawa_szefa == 1 && isset($_POST['invite'])){
		$res = wyslij_zap($login, $_POST['kingdom'], $_POST['coalition']);
		if(!empty($res)) $_mesg[] = $res;
	}
	// Usuwanie krolestwa z koalicji
	if($emperor == $login && !empty($_GET['remove']) && $login != $_GET['remove']){
		if(czySaWybory()){
			$_mesg[] = "Nie mo¿na usun±æ ksiêstwa z koalicji w trakcie trwania wyborów";
		}else{
			$coal2 = new Coalition($_GET['remove']);
			$coal2->quit();
			header('Location: koalicja.php');
			/*
			 $res = usunZKoalicji($login, $_GET['remove'], $wiersz['koalicja']);
			 if(!empty($res)) $_mesg[] = $res;
			 else header('Location: koalicja.php');
			 */
		}
	}
}
//$portersInfo = array_merge($loggedUser->getPorterDestinations(),$loggedUser->getIncomingPorters(),$loggedUser->getPortersLog());
$portersInfo = array_merge($loggedUser->getPorterDestinations(),$loggedUser->getIncomingPorters());
$smarty->assign('portersInfo',$portersInfo);

$smarty->assign('porter', $porter);
$smarty->assign('mesg', $_mesg);
$smarty->assign('ankieta',wyswietlSondeWkoalicji());
$smarty->assign('nazwa_koalicji', $coalition->getName());
$smarty->assign('ilosc_ludzi_w_koalicji', count($members));
$smarty->assign('kingdomInfo',$kingdomInfo);
$smarty->assign('prawa_szefa',$prawa_szefa); // !WYWALIC
$smarty->assign('main_panel','koalicja.tpl');
$smarty->assign('members', $members);
$smarty->assign('emperor', $emperor);

// Obsluga budynku koncowego
//print_r( $coalition->$data);

if($_GET['tab'] == 2){
	$smarty->assign('parametryBudynekKoncowy',$parametryBudynekKoncowy);
	$budynekKoncowy= new budynekKoncowy();
	$id_budynku_koncowego=$coalition->budynekKoncowy();
	//dodajemy armie i surtowce do budynku koncowego
	if(isset($_POST['dadawanie'])){
		$bledy=$budynekKoncowy->wyslijDoBudynku($_POST['dadawanie'],$id_budynku_koncowego);
		$smarty->assign('dodawanie_bledy',$bledy);
		$smarty->assign('dodawanie',$_POST['dadawanie']);
	}
	if($prawa_szefa){
		if($id_budynku_koncowego==""){
			if($parametryBudynekKoncowy['kosztZloto']>$kingdomInfo['zloto'])
			$budynek_koncowy->stan = "nie_mozna_rozpoczac";
			else
			$budynek_koncowy->stan = "mozna_rozpoczac";
		}else{
			$budynek_koncowy->stan = "rozpoczety";
		}
	}else{
		if($id_budynku_koncowego!=""){
			$budynek_koncowy->stan = "rozpoczety";
		}else{
			$budynek_koncowy->stan = "nierozpoczety";
		}
	}
	//rozpoczynanie budowy
	if(isset($_POST['rozpocznij_koncowy']) && $prawa_szefa
	&& $budynek_koncowy->stan == "mozna_rozpoczac"){
		if($parametryBudynekKoncowy['kosztZloto']<=$kingdomInfo['zloto']){
			//z budynek_koncowy/lib.php
			$id_budynku_koncowego = $budynekKoncowy->rozpocznijBudoweBudynkuKoncowego($coalition->getName());
			$budynek_koncowy->stan = "rozpoczety";
		}
	}
	//pobieranie danych o rozpoczetym budynku
	if($budynek_koncowy->stan == "rozpoczety"){
		$budynek_koncowy->dane=$budynekKoncowy->daneBudynku($id_budynku_koncowego);
	}
}
//koniec obslugi budynku koncowego
//$panel_elements['Budynki']="hide";
//$panel_elements['Militarne']="hide";
$panel_elements['Armia']="hide";
$panel_elements['Budynki']="hide";
$panel_elements['Militarne']="hide";

$smarty->assign('export_view', $export_view);
$smarty->assign('import_view', $import_view);
$smarty->assign('all_ex_view', $all_ex_view);
$smarty->assign('all_im_view', $all_im_view);

$smarty->assign('export', $export);
$smarty->assign('import', $import);
$smarty->assign('all_ex', $all_ex);
$smarty->assign('all_im', $all_im);

$smarty->assign('panel_elements', $panel_elements);

$smarty->assign('budynek_koncowy',$budynek_koncowy);

$smarty->assign('main_panel','coalition.tpl');
$smarty->assign('tab', $_GET['tab']);
	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
$smarty->display('main.tpl');


?>
