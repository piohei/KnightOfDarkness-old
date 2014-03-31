<?
global $CFG;
require_once($CFG->katalogStrony.'common.php');
require_once($CFG->katalogStrony."lib/class.User.php");
require_once($CFG->katalogStrony.'koalicja/class.Coalition.php');
require_once($CFG->katalogStrony.'atak/History.class.php');
require_once($CFG->katalogStrony.'budowa/lib.php');
require_once($CFG->katalogStrony.'messages/class.MessageBox.php');
require_once($CFG->katalogStrony.'budynek_koncowy/lib.php');
require_once($CFG->katalogStrony.'pdoInterface.php');

class Attacks{
	static $GOSPODARKA=1;
	static $ZIEMIA=2;
	static $SZPIEGOWANIE=3;
	static $PODPALANIE=4;
	static $BUDYNEK_KONCOWY=5;
	static $KOALICYJNY=6;
	static $KRADZIEZ=7;
	static $MORDOWANIE=8;
	static $ZAMEK=9;
	static $PROPAGANDA=10;
			 
	var $info;
	var $attacks_list;
	var $turns;
	var $constans;
	/**
	 * Domyslny konstruktor
	 *
	 * Inicjalizuje zmienne  $User $info
	 *@access public
	 *@param class $info  informacje o ksiestwie z funkcji infoOksiestwie
	 */
	function Attacks($info){
		$korekta_ataku = 1; // ile skorygowaæ si³e ataku wojska

		$this->constans['wspolczynnikKradziezy'] = 20; // procent skradzionych towarów
		$this->constans['wspolczynnikMordowania'] = 20; // procent zamordowanych ludzikow

		$this->info = $info;
		$this->turns = 8;
		$this->wsp_ataku=2; // okre¶la granice wielko¶ci ksiêstw które mog± byæ zaatakowane
		// parametry jednostek
		$this->constans['archer']['attack']=5/$korekta_ataku;//5
		$this->constans['archer']['defence']=7;
		// charakterystyka jednostek
		$this->constans['archer']['archer']=0.3;
		$this->constans['archer']['infantry']=1;
		$this->constans['archer']['cavalry']=0.5;

		$this->constans['infantry']['attack']=7/$korekta_ataku;//7
		$this->constans['infantry']['defence']=14;
		$this->constans['infantry']['archer']=1;
		$this->constans['infantry']['infantry']=1;
		$this->constans['infantry']['cavalry']=1.5;

		$this->constans['cavalry']['attack']=16/$korekta_ataku;//16
		$this->constans['cavalry']['defence']=18;
		$this->constans['cavalry']['archer']=1;
		$this->constans['cavalry']['infantry']=1;
		$this->constans['cavalry']['cavalry']=1;

		$this->constans['tower']['attack']=10;
		$this->constans['tower']['defence']=7;
		$this->constans['tower']['capacity']=10;
		
		$this->constans["castle"]["defence"] = 50;
		$this->constans["castle"]["archer"] = 666;
		$this->constans["castle"]["infantry"] = 999;
		$this->constans["castle"]["cavalry"] = 1;

	}
	
	function getConstans()
	{
		return($this->constans);
	}
	
	function get_coalition_attack($isRozwiazanieKoalicji=false){
		$this->get_attacks(true,$isRozwiazanieKoalicji);
		$attack['piechota']=0;$attack['lucznicy']=0;$attack['husaria']=0;
		if(count($this->attacks_list)!=0)
		  foreach ($this->attacks_list as $key=>$singel_attack) {
		    if($singel_attack['kogo']!=$this->info['koalicja']){
		    if($singel_attack['tryb'] == Attacks::$KOALICYJNY)
		      {
				$attack['kogo']=$singel_attack['kogo'];
				$attack['kto'] =$singel_attack['kto'];
				$attack['tryb']=$singel_attack['tryb'];
				$attack['id'] +=$singel_attack['id'];
			}
		    }
			$attack['piechota'] +=$singel_attack['piechota'];
			$attack['lucznicy'] +=$singel_attack['lucznicy'];
			$attack['husaria'] +=$singel_attack['husaria'];
		}
		return $attack;
	}
	/**
	 * Funkcja aktualizujaca dane
	 *
	 * Pobiera informacje z bazy o atakach i zapisuje do zmiennej $attacks_list
	 *@access public
	 */
	function get_attacks($coalition=false,$isRozwiazanieKoalicji=false,$getAllCoalitionAttacks=false){
		if(!is_null($this->attacks_list) && !$coalition){
			return $this->attacks_list;
		}
		
		$sql = "SELECT * FROM attacks WHERE kto = '{$this->info['nazwa']}' ORDER BY id ASC";
		if($coalition){
			if ($isRozwiazanieKoalicji || $getAllCoalitionAttacks){
				$sql = "SELECT * FROM attacks WHERE (kto = '{$this->info['nazwa']}' ";
				$sql .= " OR (kogo ='{$this->info['koalicja']}' ))AND tryb=".Attacks::$KOALICYJNY."  ";
				//			} elseif($getAllCoalitionAttacks) {
				//				$sql = "SELECT * FROM attacks WHERE (kto = '{$this->info['nazwa']}' ";
				//				$sql .= " OR (kogo ='{$this->info['koalicja']}' ))AND tryb=".Attacks::$KOALICYJNY."  ";
			} else {
				$sql = "SELECT * FROM attacks WHERE (kto = '{$this->info['nazwa']}' ";
				$sql .= " OR (kogo ='{$this->info['koalicja']}'  AND tury_do_konca =0 ))AND tryb=".Attacks::$KOALICYJNY."  ";
			}
		}
		$i=0;
		unset($this->attacks_list);
		if($rs = mysql_query($sql)){
			while(($row = mysql_fetch_array($rs, MYSQL_ASSOC))!=NULL){
				$this->attacks_list[$i] = $row;
				$i++;
			}
		}else{
			Die("Sql Error line ".__LINE__." class Attacks");
		}
		return $this->attacks_list;

	}
	function is_attack($target,$army = false){
		if($army)
			$sql = "SELECT count(*) as ile FROM attacks WHERE kto = '{$this->info['nazwa']}' and kogo='{$target}' AND szpiedzy=0";
		else
			$sql = "SELECT count(*) as ile FROM attacks WHERE kto = '{$this->info['nazwa']}' and kogo='{$target}'";
		if($rs = mysql_query($sql)){
			$row = mysql_fetch_array($rs, MYSQL_ASSOC);
			if($row['ile']==0){
				return false;
			}else{
				return true;
			}
		}else{
			Die("Sql Error line ".__LINE__." class Attacks");
		}
	}
	function is_coalition_attack(){
		$this->get_attacks();
		if(count($this->attacks_list)!=0){
			foreach ($this->attacks_list as $key=>$singel_attack) {
				if($singel_attack['tryb']==Attacks::$KOALICYJNY){
					return true;
				}
			}
		}
		return false;
	}
	/**
	 * Funkcja szuka ataku o zadanym id w liscie atakow uzytkownika
	 * dla ktorego zostaa stworzona klasa jezeli parametr
	 *
	 *
	 *@access private
	 *@param int $attack_id id szukanego ataku
		*@param int $unset_attack jezeli ustawione na true to usuwa atak z listy ataków przechowywajen przez klase
		*/
	function get_attack($attack_id,$unset_attack=false){
		$this->get_attacks();
		foreach ($this->attacks_list as $key=>$singel_attack) {
			if($singel_attack['id']==$attack_id){
				if($unset_attack){
					unset($this->attacks_list[$key]);
				}
				return $singel_attack;
			}
		}
		return null;
	}


	function getTourAfterBonus(){
		$tour_bonus = min((zwrocBonus('droga',$this->info['nazwa'])-1)*100 ,5);
		return ($this->turns-$tour_bonus);
	}
	/**
	 * Funkcja tworzca nowy atak
	 *
	 * Inicjalizuje zmienne $attacks_list $User
	 *@access public
	 *@param string $target nazwa ksiestwa kt?e jest celem ataku
	 *@param array $jednostki tablica z iloscia jednostek wysyanych na atak indeksowana nazwamu jednostek
	 *@param string $attack_mode informacja o rodzaju ataku moze byc 'land' 'economy' 'spy' 'castel' 'coalition_building'
	 *@param string $castel_name nazwa atakowanego zamku (potrzebna tylko przy trybie 'castel')
	 */
	function new_attack($data){
		global $CFG;

		// sprawdzenie czy jest taki atak, przy dodwaniu nowego atkau trzeba to zmienic bo nie bedzie dzia³a³
		if(($data['type'] < Attacks::$GOSPODARKA) || ($data['type'] > Attacks::$PROPAGANDA) )
		{
			$info->error = "Podaj poprawny typ ataku";
			return($info);		
		} 
//		if($data['type'] == Attacks::$KOALICYJNY)
		{
//			$info->error = "Atak koalicyjny zosta³ zablokowany";
//			return($info);
		}
		
		$connection = pdoConnect();
		// zmienna do wylaczenia kontroli nazwy atakowanego ksiestwa w przypadku gdy wspolkoalicjanci dolaczaja sie do ataku koalicyjnego
		$czyDolaczenieWojskaDoAtakuKoalicyjnego=false;
		$TEST = $CFG->ATAK_TEST;
		if ((strtotime($CFG->LAST_ERA_START)+$CFG->iloscDniOkresuOchronnegoNowejEry*3600*24) > strtotime("now")){
			$info->error="Pierwsze ".$CFG->iloscDniOkresuOchronnegoNowejEry." dni nowej ery jest objête okresem ochronnym. Do koñca tego okresu czyli do ".date('Y-m-d H:i:s',(strtotime($CFG->LAST_ERA_START)+$CFG->iloscDniOkresuOchronnegoNowejEry*3600*24))." nie ma mo¿liwo¶ci atakowania innych.";
			return $info; 
		} 
  		
		if($data['kogo']=='' && $data['type']!=Attacks::$KOALICYJNY){
			$info->error="Wpisz nazwe ksiêtwa";
			return $info;
		}
		$id_wojny=-1;

		if($this->info['nazwa']==$data['kogo']){// sprawdzamy czy nie atakujemy siebie samego
			$info->error="Panie oszala³e¶, nie mo¿esz sam siebie zaatakowaæ.";
			return $info;
		}

		$sql = "SELECT data_zalozenia, login, ostatni_log FROM `PROFIL` WHERE login = :kogo OR login = :kto";
		$sth = $connection->prepare($sql);
		$sth->bindParam(':kogo', $data['kogo'], PDO::PARAM_STR, 20);
		$sth->bindParam(':kto', $this->info['nazwa'], PDO::PARAM_STR, 20);
		$sth->execute();
				
		$array = $sth->fetchAll();
		
		foreach($array as $value)
		{
			$data_zal = $value['data_zalozenia'];
			$ost_log = $value['ostatni_log'];
			$diff=strtotime(date("Y-m-d H:i:s"))-strtotime($data_zal);
			$diff_log=strtotime(date("Y-m-d H:i:s"))-strtotime($ost_log);
			$ilosc_dni=floor($diff / (3600 * 24));
			$ilosc_dni_log=floor($diff_log / (3600 * 24));
			
			if(($this->info['nazwa'] != $value['login']) && ($ilosc_dni_log>10))
			{
					$info->error="Do ksiêstwa ".$data['kogo']." nikt siê nie logowa³ przez 10 dni. Mo¿esz atakowaæ tylko w pe³ni aktywne ksiêstwa";		
			}
			
			if($ilosc_dni < $CFG->iloscDniOkresuOchronnegoNowychGraczy){
				if($this->info['nazwa']==$value['login']){// sprawdzamy atakujacego
					$info->error="Nie mozesz atakowaæ nikogo przez ".$CFG->iloscDniOkresuOchronnegoNowychGraczy." dni od za³o¿enia konta";
					return $info;
				}else{// sprawdzamy atakowanego
					$info->error="Nie mo¿esz atakowaæ ksiêstwa  które jest m³odsze ni¿ ".$CFG->iloscDniOkresuOchronnegoNowychGraczy." dni";
					return $info;
				}
				}

		}
		
		// nie potrzebne juz zmienne
		unset($data_zal);	unset($ost_log);	unset($diff);	unset($diff_log);	unset($ilosc_dni);	unset($ilosc_dni_log);	unset($array);
		
		switch ($data['type']) {
			case Attacks::$GOSPODARKA : // Gospodarka
			case Attacks::$ZIEMIA : // --------------------------------- Armia, walidacja danych
			case Attacks::$BUDYNEK_KONCOWY : // no i jeszcze budynek konczacy gr
			case Attacks::$KOALICYJNY : // atak koalicyjny
			case Attacks::$ZAMEK :
					
				if($this->is_coalition_attack()&& $data['type']==6){
					$info->error="Ju¿ masz atak koalicyjny";
					return $info;
				}

				if($this->is_attack($data['kogo'], true)){
					$info->error="Ju¿ atakujesz ksiêstwo ".$data['kogo'];
					return $info;
				}
				if($this->info['lucznicy']<$data['lucznicy']){
					$data['lucznicy'] = $this->info['lucznicy'];
				}
				if($this->info['piechota']<$data['piechota']){
					$data['piechota'] = $this->info['piechota'];
				}
				if($this->info['husaria']<$data['husaria']){
					$data['husaria'] = $this->info['husaria'];
				}

				if($data['lucznicy'] <= 0 && $data['piechota'] <= 0 && $data['husaria'] <= 0){
					$info->error="Wyslij armie na atak";
					return $info;
				}else{
					if($data['lucznicy'] <= 0) $data['lucznicy']=0;
					if($data['piechota'] <= 0) $data['piechota']=0;
					if($data['husaria'] <= 0) $data['husaria']=0;
				}

					
				if($data['type']==Attacks::$KOALICYJNY){
					$coalition = new Coalition($this->info['nazwa']);
					if($coalition->getName()==NULL){
						$info->error="Nie jestes w koalicji !!!";
						return $info;
					}
					if($coalition->getEmperor()==$this->info['nazwa']){//atakujacy jest cesarzem
						if($data['kogo']==''){
							$info->error="Wpisz nazwe ksiêtwa";
							return $info;
						}
							
						$id_wojny=1;
						$this->turns = $this->turns*2;
						$this->turns = 12;
					}else{
						// Cesarz nie dolacza wojska bo on tworzy atak koalicyjny
						$czyDolaczenieWojskaDoAtakuKoalicyjnego = true;
						$data['kogo']=$coalition->getName();
					}
				}

				$sql = "insert into attacks
              values(null,'".$this->info['nazwa']."',
                          '".$data['kogo']."',
                          ".$data['lucznicy'].",
                          ".$data['piechota'].",
                          ".$data['husaria'].",
                          0,
                          ".$this->getTourAfterBonus().",
                          ".$data['type'].",
                          ".$id_wojny."
                          );";
				$cost = $data['lucznicy']*200+$data['piechota']*100+$data['husaria']*300;
				if($cost>$this->info['zloto']){
					$info->error="Nie masz wystarczaj±cej ilo¶ci z³ota aby wys³ac tak± ilo¶æ wojsk !";
					return $info;
				}
				$cost_food = ($data['lucznicy']+$data['piechota']+$data['husaria'])*$this->getTourAfterBonus();
				if($cost_food>$this->info['jedzenie']){
					$info->error="Nie masz wystarczaj±cej ilo¶ci jedzenia aby wys³aæ tak± ilo¶æ wojsk !";
					return $info;
				}

				$sql2 = "update KSIESTWA
                      set lucznicy = lucznicy - ".$data['lucznicy'].",
                          piechota = piechota - ".$data['piechota'].",
                          husaria = husaria - ".$data['husaria'].",
                          zloto = zloto - $cost,
                          jedzenie = jedzenie - $cost_food
                      where nazwa = '".$this->info['nazwa']."' ;";

				break;
			case Attacks::$SZPIEGOWANIE :
			case Attacks::$PODPALANIE :
			case Attacks::$KRADZIEZ :
			case Attacks::$MORDOWANIE :
			case Attacks::$PROPAGANDA :
				if($this->info['szpiedzy']<$data['spy']){
					$data['spy'] = $this->info['szpiedzy'];
				}
				if($data['spy']<= 0){
					$info->error="Wyslij szpiegów na atak";
					return $info;
				}
				$sql = "insert into attacks
              values(null,'".$this->info['nazwa']."',
                          '".$data['kogo']."',
                          0,
                          0,
                          0,
                          ".$data['spy'].",
                          ".$this->getTourAfterBonus().",
                          ".$data['type'].",
                          -1
                          );";
				$cost = $data['spy']*300;
				if($cost>$this->info['zloto']){
					$info->error="Nie staæ cie na wys³anie takiej ilosci wojsk !";
					return $info;
				}
				$cost_food = ($data['spy'])*$this->getTourAfterBonus();
				if($cost_food>$this->info['jedzenie']){
					$info->error="Nie masz wystarczaj±cej ilo¶ci jedzenia aby wys³ac tak± ilo¶æ wojsk !";
					return $info;
				}

				$sql2 = "update KSIESTWA
                      set szpiedzy = szpiedzy - ".$data['spy'].",
                          zloto = zloto - $cost,
                          jedzenie = jedzenie - $cost_food
                      where nazwa = '".$this->info['nazwa']."' ;";
				break;
			default:
				break;
		}


		if ($data['type'] != Attacks::$BUDYNEK_KONCOWY && ! $czyDolaczenieWojskaDoAtakuKoalicyjnego){
			$target = new User($data['kogo']);
		
			if(!($target->issetProperty(USERPROPERTY_VERIFIED))){
				$info->error="Ksiêstwo o nazwie ".$data['kogo']." nie istnieje ";
				return $info;
			}
			if($target->issetProperty(USERPROPERTY_BLOCKED)){
				$info->error="Ksiêstwo o nazwie ".$data['kogo']." jest zablokowane";
				return $info;
			}
		}

		switch($data['type']){
			case Attacks::$GOSPODARKA:
			case Attacks::$ZIEMIA:
				//			case Attacks::$SZPIEGOWANIE:
			case Attacks::$KOALICYJNY:
			case Attacks::$ZAMEK : 
				if($data['type']==Attacks::$KOALICYJNY && $id_wojny==-1 ) break;

				$target = new User($data['kogo']);

				if(!($target->issetProperty(USERPROPERTY_VERIFIED))){
					$info->error="Ksiêstwo o nazwie ".$data['kogo']." nie istnieje ";
					return $info;
				}
				if($target->issetProperty(USERPROPERTY_BLOCKED)){
					$info->error="Ksiêstwo o nazwie ".$data['kogo']." jest zablokowane";
					return $info;
				}
				if(!$TEST){
					//					$iloscAtakowNaKsiestwo = History::getLastLostDefendCount($data['kogo']);
					//					if ($iloscAtakowNaKsiestwo  >= $CFG->limit_ilosci_atakow_na_jedno_ksiestwo){
					//						$info->error="";//.$CFG->limit_ilosci_atakow_na_jedno_ksiestwo." razy na dob?.<br>";
					//						$info->error.="Ksi?stwo ".$data['kogo']." w ci?gu ostatnich 24 godzin nie obroni?o si? ".$iloscAtakowNaKsiestwo." razy, nie mo?esz go teraz zaatakowa?";
					//						return $info;
					//					}

					// Sprawdzam czy atakujesz sowjego wspó?koalicjanta
					//				if($target->getCoalitionName()==$this->info['koalicja'] && !empty($this->info['koalicja'])){
					//					$info->error="Nie mo?esz atakowa? cz?onka w?asnej koalicji";
					//					return $info;
					//				}

					$target_data = $target->getState();
					if($target_data['ziemia'] < $CFG->iloscZiemiOkresuOchronnego)
			  		{
			  			$info->error="Ksiêstwo ".$data['kogo']." jest obiête okresem ochronnym";
			  			return $info;
  					}
  					
  					if($this->info['ziemia'] < $CFG->iloscZiemiOkresuOchronnego)
			  		{
			  			$info->error="Nie mo¿esz atakowaæ gdy jeste¶ objêty okresem ochronnym";
			  			return $info;
  					}
  					
					if($target_data['ziemia']*$this->wsp_ataku < $this->info['ziemia']){
						$info->error="Ksiêstwo ".$data['kogo']." jest za ma³e aby¶ móg³ je zatakowaæ";
						return $info;
					}
					if($target_data['ziemia'] > $this->info['ziemia']*$this->wsp_ataku)
					  {
					    $info->error="Ksiêstwo ".$data['kogo']." jest za du¿e aby¶ móg³ je zatakowaæ";
					    return $info;
					  }
					if (! $CFG->ATAK_TEST){
						$row = History::getLastAttack($this->info['nazwa'],$data['kogo']);
						if($row['_COUNT_'] > 0){
							$diff=strtotime(date("Y-m-d H:i:s"))-strtotime($row["data"]);
							$ilosc_dni=floor($diff / (3600 * 24));
							if($ilosc_dni<1){
								$info->error="Mozna atakowac dane ksiêstwo co 24 godziny <br> Ksiêstwo ".$data['kogo']." bêdziesz móg³ zatakowaæ za ".gmdate("H:i:s",86400-$diff); 
								return $info;
							}
						}
					}
				}
				//odstep ataku
				break;
			case Attacks::$BUDYNEK_KONCOWY:
				$target = new Coalition($data['kogo'],true);
				if($building_id = $target->budynekKoncowy()==null){
					$info->error="Koalicjia nie istnieje, albo nie bubuje budynku";
					return $info;
				}
				break;
		}
		$r = mysql_query($sql)or Die("Sql Error line ".__LINE__." class Attacks".$sql);
		$r = mysql_query($sql2)or Die("Sql Error line ".__LINE__." class Attacks");
		$info->data = $data;
		return $info;
	}

	/**
	 * Funkcja aktualizuje liczbe tur potrzebn na dotarcie wojsk
	 *
	 * Funkcja aktualizuje liczbe tur potrzebn na dotarcie wojsk oraz
	 * jezeli wojska juz dotary wywouje funkcje attack dla przeprowadzenia
	 * ataku
	 *@access public
	 */
	function tour()
	{
	  $tmp_attacks = $this->get_attacks();
	  if(count($tmp_attacks)==0) return false;// jezeli nie ma ataków to przerywamy funkcje
	  $sql = "UPDATE  attacks set tury_do_konca=tury_do_konca-1
							WHERE kto = '{$this->info['nazwa']}' and tury_do_konca> 0";
	  $rs = mysql_query($sql) or Die("Sql Error line ".__LINE__." class Attacks");
	  foreach($tmp_attacks as $key=>$single_attack)
	    {
	      if($single_attack['tury_do_konca']==1 || $single_attack['tury_do_konca']==0)
		{
		  if(!($single_attack['tryb']==Attacks::$KOALICYJNY && $single_attack['ID_wojny']!=1))
		    {
		      $this->attack($single_attack['id']);
		    }
		}
	    }
	}
	

	function getWinningProbability($attack,$target_info){
		$potencjal_szpiegowski = $attack['szpiedzy']*zwrocBonus('szpieg',$attack['kto']);
		$zdolnosc_obronna =  ($target_info['straznicy']*($target_info["poziom_bezp"]/100) + 0.1*$target_info['szpiedzy']) * zwrocBonus('antyszpieg',$attack['kogo']); 
		$wining_probability = ($potencjal_szpiegowski)/($zdolnosc_obronna+$potencjal_szpiegowski)*100;
		return ($wining_probability > 95 ? 95 : $wining_probability);
	}
	function getKilledSpy($wining_probability,$attack,$target_info){
		return ceil($attack['szpiedzy']*((100-$wining_probability)*0.01));
	}

	/**
	 * Funkcja wylicza przebieg ataku i wysy?a raporty do ksi?stw
	 *@access private
	 *@param int $attack_id id ataku do przeprowadzenia
	 */
	function spy_attack($attack_id){
		if(($attack= $this->get_attack($attack_id,false))!=null){
			$target = new User($attack['kogo']);
			if($target->issetProperty(USERPROPERTY_BLOCKED)){
				$info->error="Ksiêstwo ".$attack['kogo']." nie istnieje";
				return $info;
			}
			
			
			$target_info = $target->getState();
			$sql = "INSERT INTO spy_log (kto,kogo,typ,data) values 
			('".$this->info[nazwa]."','".$target_info[nazwa]."', ".$attack[tryb].", NOW())";

			mysql_query($sql);
			//wysylanie raportu
			// tworzymy skrzynk? która nie nale?y do nikogo
			$none = new User(NULL);
			$mBox = new MessageBox($none);
			// tworzymy nadawc?, wiadomo?? i wysy?amy raport
			$recipient = new User($this->info['nazwa']);
				
			switch ($attack['tryb']) {
				case Attacks::$SZPIEGOWANIE: // zbieranie informacji
					$wining_probability = $this->getWinningProbability($attack,$target_info);
					if(rand(1,100)<$wining_probability){
						// szpiedzy si? przedarli
						$result = true;
						$buildings = budowaneIwybudowane($attack['kogo']);
						$how_many = count($buildings)-1;
						$tmp = '&'.$how_many;
						if($how_many!=0){
							for($i=1;$i<=$how_many;$i++){
								$tmp .= '&'.$buildings[$i]['nazwa'];
							}
						}
						$i = rand(0,1);
						switch($i)
						{
						case 0: // wojsko
						$mBox->prepareMessage(
                    'Raport ze szpiegowania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&1'.
                    '&'.$target_info['lucznicy'].'&'.$target_info['piechota'].'&'.$target_info['husaria'].'&?',
						MESSAGE_RAPORT);
						break;
						
						case 1: // bs
						$mBox->prepareMessage(
                    'Raport ze szpiegowania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&1'.
                    '&?&?&?'.$tmp,
						MESSAGE_RAPORT);
						
						break;
						}
						$mBox->sendRaportTo($recipient, 'Szpieg');
						$this->delete_attak($attack['id']); //
					}else{
						//szpiedzy zostali nakryci
						$killed_spy = $this->getKilledSpy($wining_probability,$attack,$target_info);
						$attack['szpiedzy'] -= $killed_spy;
						$mBox->prepareMessage(
                    'Raport ze szpiegowania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto szpiegów z ksiêstwa '.$attack['kto'] ,
                    'spy:'.$attack['kto'].'&do_atakowanego&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');
						$this->delete_attak($attack['id'],$attack); //
						
						// torturowanie szpiegów
												
						$torture_msg = torture($attack['kto']);
						$mBox->prepareMessage(
                    'Raport z torturowania szpiegów ', 
                    $torture_msg,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Kat');
											
					}
					break;
				case Attacks::$PODPALANIE:// podpalanie
					$wining_probability = $this->getWinningProbability($attack,$target_info);
					if(rand(1,100)<$wining_probability){
						// szpiedzy si? przedarli
						$result = true;
						$buildings = budowaneIwybudowane($attack['kogo']);
						$random = rand(1,count($buildings)-1);
						if(count($buildings)!=1){
							if($buildings[$random]['postep']!=0){
								$damage = $buildings[$random]['postep']*rand(1,10)*0.03;
								uszkodzSpecjalny($buildings[$random]['id'],$damage);
							}else{

							}

						}else{
							$buildings[$random]['nazwa']="atakowany nie mia³ ¿adnych budynków";
						}
						$mBox->prepareMessage(
                    'Raport z podpalania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&podpalanie&'.$buildings[$random]['nazwa'],
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');
						$this->delete_attak($attack['id']); //
					}else{
						//szpiedzy zostali nakryci
						$killed_spy = $this->getKilledSpy($wining_probability,$attack,$target_info);
						$attack['szpiedzy'] -=$killed_spy;
						$mBox->prepareMessage(
                    'Raport ze szpiegowania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto szpiegów z ksiêstwa '.$attack['kto'] ,
                    'spy:'.$attack['kto'].'&do_atakowanego&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');
						
						// torturowanie szpiegów
						$torture_msg = torture($attack['kto']);
						$mBox->prepareMessage(
                    'Raport z torturowania szpiegów ', 
                    $torture_msg,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Kat');
						
						$this->delete_attak($attack['id'],$attack); 
					}
					break;
				case Attacks::$KRADZIEZ:// kradziez
					$wining_probability = $this->getWinningProbability($attack,$target_info);
					if(rand(1,100)<$wining_probability){
						// szpiedzy si? przedarli
						$result = true;
						$sprzeta = array ('zloto','jedzenie','narzedzia','zelazo','bronie');
						$max = array ('zloto'=>10000,'jedzenie'=>1000,'narzedzia'=>250,'zelazo'=>250,'bronie'=>250);
						$ofiara = new User($attack["kogo"]);
						$surowce = $ofiara->getState();

						$random = rand(0,count($sprzeta)-1);
						foreach($sprzeta as $key=>$sprzet){
							$strata[$sprzet] = 0;
						}
						$strata[$sprzeta[$random]] = round($target_info[$sprzeta[$random]]*(($this->constans['wspolczynnikKradziezy']+rand(-5,5))/100 + zwrocBonus("thief",$attack["kto"]) ));

						$strata[$sprzeta[$random]] = round(min($strata[$sprzeta[$random]],$surowce[$sprzeta[$random]]*0.3 ) );
						//$ofiara = NULL; // usuniecie zbednego obiektu mam nadzieje ze za chwile nie jest tworzony taki sam znowu :)

						$sql = "UPDATE KSIESTWA SET ";
						foreach($sprzeta as $key=>$sprzet){
							$sql .= "$sprzet = $sprzet + {$strata[$sprzet]},";
						}
						$sql .= "ziemia = ziemia ";
						$sql .= "where nazwa = '".$attack['kto']."'";
						mysql_query($sql)or Die(__FILE__.":".__LINE__." ".mysql_error());

						$sql = "UPDATE KSIESTWA SET ";
						foreach($sprzeta as $key=>$sprzet){
							$sql .= "$sprzet = $sprzet - {$strata[$sprzet]},";
						}
						$sql .= "ziemia = ziemia ";
						$sql .= "where nazwa = '".$target_info['nazwa']."'";
						mysql_query($sql)or Die(__FILE__.":".__LINE__." ".mysql_error());

						$mess="";
						foreach($sprzeta as $key=>$sprzet){
							$mess .= $sprzet." w ilo¶ci ".$strata[$sprzet]."<br>";
						}

						$mBox->prepareMessage(
                    'Raport z okradania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&kradziez&'.$attack['kogo']."&".$mess,
						MESSAGE_RAPORT,false);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto kradzie¿ zapasów!' ,
                    'spy:'.$attack['kto'].'&infoOKradziezy&'.$mess,
						MESSAGE_RAPORT,false);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');

						$this->delete_attak($attack['id']);
					} else {
						//szpiedzy zostali nakryci
						$killed_spy = $this->getKilledSpy($wining_probability,$attack,$target_info);
						$attack['szpiedzy'] -=$killed_spy;
						$mBox->prepareMessage(
                    'Raport z okradania ksiêstwa '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto szpiegów z ksiêstwa '.$attack['kto'] ,
                    'spy:'.$attack['kto'].'&do_atakowanego&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');
						
						// torturowanie szpiegów

						$torture_msg = torture($attack['kto']);
						$mBox->prepareMessage(
                    'Raport z torturowania szpiegów ', 
                    $torture_msg,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Kat');

						$this->delete_attak($attack['id'],$attack);
					}
					break;
				case Attacks::$MORDOWANIE:// mordowanie
					$wining_probability = $this->getWinningProbability($attack,$target_info);
					if(rand(1,100)<$wining_probability){
						// szpiedzy si? przedarli
						$result = true;
						$sprzeta = array ('rolnicy','kowale','gornicy_zlota','gornicy_zelaza','budowniczowie');

						$random = rand(0,count($sprzeta)-1);
						
						foreach($sprzeta as $key=>$sprzet){
							$strata[$sprzet] = 0;
						}
						$strata[$sprzeta[$random]] = round($target_info[$sprzeta[$random]]*($this->constans['wspolczynnikMordowania']+rand(-5,5))/100*(zwrocBonus("assasin",$attack["kto"])));
						$strata[$sprzeta[$random]] = round(min($strata[$sprzeta[$random]],$attack['szpiedzy']*10));
	
											
						// Mordujemy wi?c nic nie zyskujemy
						//						$sql = "UPDATE KSIESTWA SET ";
						//						foreach($sprzeta as $key=>$sprzet){
						//							$sql .= "$sprzet += {$strata[$sprzet]},";
						//						}
						//						$sql .= "ziemia = ziemia ";
						//						$sql .= "where nazwa = '".$attack['kogo']."'";
						//						mysql_query($sql)or Die(__FILE__.":".__LINE__." ".mysql_error());

						$sql = "UPDATE KSIESTWA SET ";
						foreach($sprzeta as $key=>$sprzet){
							$sql .= "$sprzet = $sprzet - {$strata[$sprzet]},";
						}
						$sql .= "ziemia = ziemia ";
						$sql .= "where nazwa = '".$target_info['nazwa']."'";
						mysql_query($sql)or Die(__FILE__.":".__LINE__." ".mysql_error());

						$mess="";
						foreach($sprzeta as $key=>$sprzet){
							$mess .= $sprzet." w ilo¶ci ".$strata[$sprzet]."<br>";
						}

						$mBox->prepareMessage(
                    'Raport z skrytobójstwa w ksiêstwie '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&mordowanie&'.$attack['kogo']."&".$mess,
						MESSAGE_RAPORT,false);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto skrytobójstwo w¶ród naszych ludzi!' ,
                    'spy:'.$attack['kto'].'&infoOMordzie&'.$mess,
						MESSAGE_RAPORT,false);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');

						$this->delete_attak($attack['id']);
					} else {
						//szpiedzy zostali nakryci
						$killed_spy = $this->getKilledSpy($wining_probability,$attack,$target_info);
						$attack['szpiedzy'] -=$killed_spy;

						$mBox->prepareMessage(
                    'Raport z skrytobójstwa w ksiêstwie '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');
						//						$attackerMBox = new MessageBox(new User($attack['kto']));
						//						$attackerMBox->getMessagesList();

						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto szpiegów z ksiêstwa '.$attack['kto'] ,
                    'spy:'.$attack['kto'].'&do_atakowanego&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');
	
						// torturowanie szpiegów

						$torture_msg = torture($attack['kto']);
						$mBox->prepareMessage(
                    'Raport z torturowania szpiegów ', 
                    $torture_msg,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Kat');

						$this->delete_attak($attack['id'],$attack);
					}
					break;
				case Attacks::$PROPAGANDA : // atak obnizajacy morale przeciwnika
					$wining_probability = $this->getWinningProbability($attack,$target_info);
					if(rand(1,100)<$wining_probability) // misja szpiegow powiodla sie
					{ 
						$morale = floor(min($wining_probability/10+rand(0,5),10));
						$connect = pdoConnect();
						
						$sql = "UPDATE `KSIESTWA` SET morale = :morale WHERE nazwa = :nazwa";
						$sth = $connect->prepare($sql);
						$morale = $target_info["morale"] - $morale;
						$sth->bindParam(":morale", max($morale,-20), PDO::PARAM_INT);
						$sth->bindParam(":nazwa",$attack["kogo"],PDO::PARAM_STR);
						$sth->execute();
						$connect = NULL;
						$recipient = new User($attack['kto']);
						$mBox->prepareMessage(
                    'Propaganda powiod³a siê!' ,
                    'spy:'.$attack['kto'].'&propaganda&'.$attack["kogo"],
						MESSAGE_RAPORT,false);
						$mBox->sendRaportTo($recipient, 'Szpieg');

						$this->delete_attak($attack['id']);
					}
					else // szpiedzy zostali zlapani
					{
						$killed_spy = $this->getKilledSpy($wining_probability,$attack,$target_info);
						$attack['szpiedzy'] -=$killed_spy;

						$mBox->prepareMessage(
                    'Raport z dezinformacji w ksiêstwie '.$attack['kogo'] ,
                    'spy:'.$attack['kto'].'&'.$attack['kogo'].'&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Szpieg');
						
						$recipient = new User($attack['kogo']);
						$mBox->prepareMessage(
                    'Wykryto szpiegów z ksiêstwa '.$attack['kto'] ,
                    'spy:'.$attack['kto'].'&do_atakowanego&'.$wining_probability.'&0&'.$killed_spy,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Dowódca stra¿y');
	
						// torturowanie szpiegów

						$torture_msg = torture($attack['kto']);
						$mBox->prepareMessage(
                    'Raport z torturowania szpiegów ', 
                    $torture_msg,
						MESSAGE_RAPORT);
						$mBox->sendRaportTo($recipient, 'Kat');

						$this->delete_attak($attack['id'],$attack);
						
					}
					break;
				default:
					break;
			}
			/*$sth->bindParam(":result",$result,POD::PARAM_INT):
			if(!$result)
				$sth->bindParam(":kills", $killed_spy, PDO::PARAM_INT);
			else if($attack["tryb"] == Attacks::$MORDOWANIE)
				$sth->bindParam(":kills",,PDO::PARAM_INT);
			else
				$sth->bindParam(":kills",0,PDO::PARAM_INT);*/
		}else{
			return false;
		}
	}


	/**
	 * Funkcja wylicza przebieg ataku i wysy?a raporty do ksi?stw
	 *@access private
	 *@param int $attack_id id ataku do przeprowadzenia
	 */
	function attack($attack_id){
		if(($attack= $this->get_attack($attack_id,false))!=null){
			if($attack['tryb']==Attacks::$MORDOWANIE || $attack['tryb']==Attacks::$KRADZIEZ || $attack['tryb']==Attacks::$SZPIEGOWANIE || $attack['tryb']==Attacks::$PODPALANIE || $attack['tryb']==Attacks::$PROPAGANDA){// Ten typ ataku (szpiegowski) jest zupelnie inny to go rozpatrzymy osobno
				return $this->spy_attack($attack_id);
			}
			//Tablice s?ownikowe dla pó?niejszych p?tli foreach
			$dictionary['infantry']="piechota";
			$dictionary['cavalry']="husaria";
			$dictionary['archer']="lucznicy";

			$buildings['domy']=20;
			$buildings['warsztaty']=1;
			$buildings['koszary']=1;
			$buildings['farmy']=2;
			$buildings['wiezyczki']=4;
			$buildings['kopalnie_zlota']=4;
			$buildings['kopalnie_zelaza']=1;
			$buildings['rynki'] = 0;
			$buildings['straznice'] = 0;
			$buildings['gildie']=4;
			$buildings['zamek']=0;

			$workers['rolnicy']=10;
			$workers['bezrobotni']=0;
			$workers['kowale']=5;
			$workers['gornicy_zlota']=15;
			$workers['gornicy_zelaza']=5;
			$workers['tragarze']=0;
			$workers['budowniczowie']=10;
			$attack['land']=0;
			$attack['gold']=0;
			$building_id=0;
			
			if($attack['tryb']==Attacks::$BUDYNEK_KONCOWY)
			{// atak na budynek koncowy
				$target = new Coalition($attack['kogo'],true);
				if(($building_id = $target->budynekKoncowy())==null)
				{
					$info->error="Nie ma juz budynku do atakowania";
					$this->delete_attak($attack['id']);
					return $info;
				}
				$building = new budynekKoncowy();
				$target_info =$building->daneBudynku($building_id);
				//tworze kopie
				$attack_copy =  $attack;

				$target_info_copy =  $target_info;
			}
			else
			{
				$target = new User($attack['kogo']);

				if($target->issetProperty(USERPROPERTY_BLOCKED)){
					$info->error="Ksiêstwo ".$attack['kogo']." nie istnieje";
					$this->delete_attak($attack['id']);
					return $info;
				}
				$target_info = $target->getState();
				//tworze kopie

				if($attack['tryb']==Attacks::$KOALICYJNY){
					$attack = $this->get_coalition_attack();

				}

				$attack_copy =  $attack;
				$target_info_copy =  $target_info;
			}
			if (!isset($target_info['morale']))
			{
				$target_info['morale']=50;
			}




			// pobranie informacji o bonusach atakujacego
			$attacker_bonus['attack'] = zwrocBonus('atak_obrona_ogolne',$this->info['nazwa'])+rand(1,10)*0.01;
			$attacker_bonus['defence'] = $attacker_bonus['attack']+rand(1,10)*0.01;
			$attacker_bonus['attack'] = $attacker_bonus['attack']+(zwrocBonus('atak_oblezenie',$this->info['nazwa'])-1);
			//$attacker_bonus['defence'] =$attacker_bonus['defence']+(zwrocBonus('obrona_oblezenie',$attack['kogo'])-1);

			if($attack['tryb']==Attacks::$BUDYNEK_KONCOWY){// atak na budynek koncowy
				$defender_bonus['attack'] =1;
				$defender_bonus['defence'] =1;
			}else{// pobranie informacji o bonusach bronoacego
				$defender_bonus['attack'] = zwrocBonus('atak_obrona_ogolne',$attack['kogo'])+rand(1,20)*0.01;
				$defender_bonus['defence'] = $defender_bonus['attack']+rand(1,20)*0.01;
				$defender_bonus['attack'] =$defender_bonus['attack']+(zwrocBonus('atak_zamek',$attack['kogo'])-1);
				$defender_bonus['defence'] =$defender_bonus['defence']+(zwrocBonus('obrona_zamek',$attack['kogo'])-1);
			}

			$attacker_bonus_mod = ($this->info['morale'] - 50)/100;
			//$attacker_bonus_mod = ($attacker_bonus_mod<0?$attacker_bonus_mod/2:$attacker_bonus_mod);
			$attacker_bonus['defence']+=$attacker_bonus_mod;
			$attacker_bonus['attack']+=$attacker_bonus_mod;
			$defender_bonus_mod = ($target_info['morale'] - 50)/100;
			//$defender_bonus_mod = ($defender_bonus_mod<0?$defender_bonus_mod/2:$defender_bonus_mod);
			$defender_bonus['attack']+=$defender_bonus_mod;
			$defender_bonus['defence']+=$defender_bonus_mod;

			if($defender_bonus['attack'] <= 0)
				$defender_bonus['attack'] = 0.01;
			if($defender_bonus['defence'] <= 0)
				$defender_bonus['defence'] = 0.01;
			if($attacker_bonus['attack'] <= 0)
				$attacker_bonus['attack'] = 0.01;
			if($attacker_bonus['defence'] <= 0)
				$attacker_bonus['defence'] = 0.01;
			
			$castle_capacity = castle($target_info["zamek"],
						  $this->constans["castle"]["archer"],
						  $this->constans["castle"]["infantry"],
						  $this->constans["castle"]["cavalry"]);

			// faza 1a atak ?uczników broni?cego
			if($target_info['lucznicy']>0){
				$attack_power = max(0.01, (
				(  $target_info['lucznicy'] * $this->constans['archer']['attack'])
				+ min($target_info['wiezyczki']*$this->constans['tower']['capacity'],$target_info['lucznicy'])*$this->constans['tower']['attack']
				) * $defender_bonus['attack'] );
				$attaker_ilosc_wojska_atakujacego = 0;
				// obliczenie udzialu danego rodzaju wojsk w ataku
				// chodzi o to ze jesli atakujacy atakuje tylko husari? to husaria obrywa ca?y atak ?uczników a nie tylko 33%
				foreach($dictionary as $key=>$value){// infantry => piechota
					$attaker_ilosc_wojska += $attack[$value];
				}
				foreach($dictionary as $key=>$value){// infantry => piechota
					if ( $attaker_ilosc_wojska != 0){
						$attaker_udzial_wojska_w_ataku[$key] = $attack[$value]/$attaker_ilosc_wojska;
					} else {
						$attaker_udzial_wojska_w_ataku[$key] = 0;
					}
				}
				  
				foreach($dictionary as $key=>$value){// infantry => piechota
					//					$killed['attacker'][1][$key] =round(min(($attack_power*$this->constans['archer'][$key]*0.33)/($this->constans[$key]['defence']*$attacker_bonus['defence']) ,$attack[$value]));
					$killed['attacker'][1][$key] =max( 0, round(min(
					($attack_power*$this->constans['archer'][$key]*$attaker_udzial_wojska_w_ataku[$key])/
					($this->constans[$key]['defence']*$attacker_bonus['defence']) ,$attack[$value])) );
					$attack[$value] = $attack[$value] - $killed['attacker'][1][$key];
				}
			}else{
				$killed['attacker'][1]['infantry']=0;
				$killed['attacker'][1]['cavalry']=0;
				$killed['attacker'][1]['archer']=0;
			}
			// faza 1b atak ?uczników atakujacego
			if($attack['lucznicy']>0){
				$attack_power = max(0.01, ($attack['lucznicy'] * $this->constans['archer']['attack'])*  $attacker_bonus['attack'] );

				// obliczenie udzialu danego rodzaju wojsk w ataku
				// chodzi o to ze jesli atakujacy atakuje tylko husari? to husaria obrywa ca?y atak ?uczników a nie tylko 33%
				foreach($dictionary as $key=>$value){// infantry => piechota
					$defender_ilosc_wojska += $target_info[$value];
				}
				foreach($dictionary as $key=>$value){// infantry => piechota
					if ( $defender_ilosc_wojska != 0){
						$defender_udzial_wojska_w_ataku[$key] = $target_info[$value]/$defender_ilosc_wojska;
					} else {
						$defender_udzial_wojska_w_ataku[$key] = 0;
					}
				}

				foreach($dictionary as $key=>$value){// infantry => piechota
					//$killed['defender'][2][$key] =floor(min(($attack_power*$this->constans['archer'][$key]*0.33)/($this->constans[$key]['defence']*$defender_bonus['defence']) ,$target_info[$value]*0.5));
					$killed['defender'][2][$key] =max(0, floor(min(($attack_power*$this->constans['archer'][$key]*$defender_udzial_wojska_w_ataku[$key])/($defender_bonus['defence'] *($this->constans[$key]['defence'] + $this->constans["castle"]["defence"]/100*min($target_info[$value], $castle_capacity[$key]))) ,$target_info[$value]*0.5)) );
					$target_info[$value] = $target_info[$value] - $killed['defender'][2][$key];
				}
			}else{
				$killed['attacker'][2]['infantry']=0;
				$killed['attacker'][2]['cavalry']=0;
				$killed['attacker'][2]['archer']=0;
			}

			// ----------------------------FAZA 2 WALKA W RECZ
			// wyliczenie parametrów wojsk
			// tymczasowe parametry ustalane na oko :)
			$how_many_archers_in_second_part=0.33;// parametr ten jest wprowadzont po ta aby nie zgine?o za duzo ?uczników po prostu wieksza czesc ataku idzie na pozosta?e typy jednostek
			$border_of_looses = 1.5459;// poniewaz mozna stracic max 50% armi w jednej bitwie
			foreach($dictionary as $key=>$value){// infantry => piechota
				// obliczanie parametrów wojak atakujacych
				$attacker[$key]['attack'] = ($attack[$value]*$this->constans[$key]['attack'])*$attacker_bonus['attack'];
				$attacker[$key]['defence'] = ($attack[$value]*$this->constans[$key]['defence'])*$attacker_bonus['defence'];
				// to samo co wyzej tylko dla broni?cego
				$defender[$key]['attack'] = ($target_info[$value]*$this->constans[$key]['attack'])*$defender_bonus['attack'];
				$defender[$key]['defence'] = ($target_info[$value]*$this->constans[$key]['defence'])*$defender_bonus['defence'];
				// obliczanie proporcji ilosci poszczególnych typów oddzia?ów
				if($target_info['husaria']+$target_info['piechota']+$target_info['lucznicy']*$how_many_archers_in_second_part == 0){
					$how_many_attacks['attacker'][$key]=0;
				}else{
					$how_many_attacks['attacker'][$key] = $target_info[$value]/($target_info['husaria']+$target_info['piechota']+$target_info['lucznicy']*$how_many_archers_in_second_part);
				}
				if($attack['husaria']+$attack['piechota']+$attack['lucznicy']*$how_many_archers_in_second_part == 0){
					$how_many_attacks['defender'][$key]=0;
				}else{
					$how_many_attacks['defender'][$key] = $attack[$value]/($attack['husaria']+$attack['piechota']+$attack['lucznicy']*$how_many_archers_in_second_part);
				}
				if($key=='archer'){
					$how_many_attacks['attacker'][$key] *= $how_many_archers_in_second_part;
					$how_many_attacks['defender'][$key] *= $how_many_archers_in_second_part;
				}
			}

			$attacker_attack_and_defence =1;
			$defender_attack_and_defence =1;
			// obliczanie strat broniacego  infantry => udzial rodzaju wojsk w ataku
			foreach ($how_many_attacks['attacker'] as $key=>$value) {
			  $attack_power = $value*
			    ($attacker['infantry']['attack'] * $this->constans['infantry'][$key]
			     + $attacker['cavalry']['attack']* $this->constans['cavalry'][$key]);
			  
			  $attacker_attack_and_defence +=$attack_power;
			  $defender_attack_and_defence +=$defender[$key]['defence'];
			  
			  if($defender[$key]['defence']==0){
			    $killed['defender'][3][$key]=0;
			  }else{
			    $tmp =$attack_power/($defender[$key]['defence'] + $this->constans["castle"]["defence"]/100*min($target_info[$value], $castle_capacity[$key]));
			    // obliczanie strat w gospodarce
			    if($tmp >$border_of_looses){
			      $killed['defender'][3][$key] = max(0, ceil(0.5 * $target_info[$dictionary[$key]]) );
			    }else{
			      $killed['defender'][3][$key] =max(0, ceil(
									((0.4*$tmp*$tmp+$tmp)/5.0)*$target_info[$dictionary[$key]]) );
			    }
			    $target_info[$dictionary[$key]] -=$killed['defender'][3][$key];
			  }
			}
			// obliczanie strat atakujacego
			foreach ($how_many_attacks['defender'] as $key=>$value) {
			  $attack_power = max(0, $value*
					      ($defender['infantry']['attack'] * $this->constans['infantry'][$key]
					       + $defender['cavalry']['attack']* $this->constans['cavalry'][$key]) );
			  
			  $attacker_attack_and_defence +=$attacker[$key]['defence'];
			  $defender_attack_and_defence +=$attack_power;
			  if($attacker[$key]['defence']==0){
			    $killed['attacker'][3][$key]=0;
			  }else{
			    
			    $tmp =$attack_power/$attacker[$key]['defence'];
			    if($tmp >$border_of_looses){
			      $killed['attacker'][3][$key] = max(0, ceil(0.5 * $attack[$dictionary[$key]]));
				}else{
			      $killed['attacker'][3][$key] =max(0,ceil(
								       ((0.4*$tmp*$tmp+$tmp)/5.0)*$attack[$dictionary[$key]]) );
			    }
			    $attack[$dictionary[$key]] -=$killed['attacker'][3][$key];
			  }
			}
			$attacker_army = $attack['piechota']+$attack['lucznicy']+$attack['husaria'];
			  $damage =0;
			  if($attacker_army>$target_info['straznicy']*0.1){
			    $damage =min(max($attacker_attack_and_defence/$defender_attack_and_defence,1),2)-1;
			  }else{
			    $damage =0;
			      }
			    
			    // 1 Gospodarka 2 ziemia
			    
			    $attack_parameters['ile_wojakow_na_jedna_ziemie'] = 2;
			      $attack_parameters['ile_wojakow_na_jednen_budynek'] = 4;
				$attack_parameters['ile_zlota_jeden_wojak'] = 4000;
				  
				  $attack_type_parameters[Attacks::$GOSPODARKA]['max_buildings_destroyed'] = 0.20;
				    $attack_type_parameters[Attacks::$GOSPODARKA]['max_land_lost'] = 0.10;
			$attack_type_parameters[Attacks::$GOSPODARKA]['max_gold_lost'] = 0.08;
			$attack_type_parameters[Attacks::$ZIEMIA]['max_buildings_destroyed'] = 0.05;
			$attack_type_parameters[Attacks::$ZIEMIA]['max_land_lost'] = 0.500;
			$attack_type_parameters[Attacks::$ZIEMIA]['max_gold_lost'] = 0.025;
			$attack_type_parameters[Attacks::$KOALICYJNY]['max_buildings_destroyed'] = 0.50;
			$attack_type_parameters[Attacks::$KOALICYJNY]['max_land_lost'] = 0;
			$attack_type_parameters[Attacks::$KOALICYJNY]['max_gold_lost'] = 0;
			$attack_type_parameters[Attacks::$ZAMEK]['max_buildings_destroyed'] = 0.05;
			$attack_type_parameters[Attacks::$ZAMEK]['max_land_lost'] = 0.10;
			$attack_type_parameters[Attacks::$ZAMEK]['max_gold_lost'] = 0.1;
			
			$history_data['tryb'] = $attack['tryb'];
			$history_data['straty_atakujacy'] = 0;
			$history_data['straty_broniacy'] = 0;
			$history_data['straty_budynki'] = 0;
			$history_data['straty_ziemia'] = 0;
			$history_data['straty_zloto'] = 0;
			$history_data['straty_surowce'] = 0;
			$history_data['straty_budowniczowie'] = 0;
			$history_data['kogo_koal']=$target_info['koalicja'];
			$history_data['kto_koal']=$this->info['koalicja'];
			$history_data['kto']=$attack['kto'];
			$history_data['kogo']=$attack['kogo'];

			switch ($attack['tryb']) {
				case Attacks::$GOSPODARKA : // Gospodarka
				case Attacks::$ZIEMIA :// Ziemia
				case Attacks::$KOALICYJNY :// Koalicyjny
				case Attacks::$ZAMEK :
					$suma_wojsk_zwycieskich=0;
					foreach ($dictionary as $key=>$value){
						$suma_wojsk_zwycieskich+=$attack[$value];
					}
					// BUDYNKI
					$how_many_buildings = $attack_type_parameters[$attack['tryb']]['max_buildings_destroyed']*$damage;
					$how_many_buildings_left =0;
					$history_data['strarty_budynki']=0;
					$suma_zniszczonych_budynkow = 0;
					foreach($buildings as $key=>$value){
						$suma_zniszczonych_budynkow += round($target_info[$key]*$how_many_buildings);
					}
					if ($suma_zniszczonych_budynkow != 0){
						$wspolczynnik_zniszczenia_budynkow = min(
						floor($suma_wojsk_zwycieskich/$attack_parameters['ile_wojakow_na_jednen_budynek'])
						,$suma_zniszczonych_budynkow
						)/$suma_zniszczonych_budynkow;
						$how_many_buildings = $how_many_buildings * $wspolczynnik_zniszczenia_budynkow;
					}
					foreach($buildings as $key=>$value){
					if($key != 'zamek')
						{						
						$buildingLost = round($target_info[$key]*$how_many_buildings);
						$target_info[$key] -= $buildingLost;
						}
						$how_many_buildings_left += $target_info[$key];						
						$history_data['strarty_budynki']+=round($buildingLost);
					}
					
					// ZIEMIA
					$how_many_land=0;
					if ($CFG->ATAK_TEST){
						$how_many_land =max(round( min($target_info['ziemia']*$attack_type_parameters[$attack['tryb']]['max_land_lost']*$damage,$target_info['ziemia'] - $how_many_buildings_left)),0);
					} else {
						$how_many_land =max(round( min($target_info['ziemia']*$attack_type_parameters[$attack['tryb']]['max_land_lost']*(min(max($target_info['ziemia']/$this->info['ziemia'],0.5),1.5)-0.5)*$damage
						,$target_info['ziemia'] - $how_many_buildings_left)),0);
					}
					$how_many_land = min(floor($suma_wojsk_zwycieskich/$attack_parameters['ile_wojakow_na_jedna_ziemie']),$how_many_land);
					$attack['land']= $how_many_land;

					// ZLOTO
					$how_many_gold_lost = 0;
					$how_many_gold_lost = $attack_type_parameters[$attack['tryb']]['max_gold_lost']*$damage*$target_info['zloto'];
					$how_many_gold_lost = min($suma_wojsk_zwycieskich*$attack_parameters['ile_zlota_jeden_wojak'],$how_many_gold_lost);
					$attack['gold'] = $how_many_gold_lost;



					//					$how_many_buildings = $attack_type_parameters[$attack['tryb']]['max_buildings_destroyed']*$damage;
					//					$how_many_buildings_left =0;
					//					$history_data['strarty_budynki']=0;
					//					foreach($buildings as $key=>$value){
					//						$target_info[$key] -= round($target_info[$key]*$how_many_buildings);
					//						$how_many_buildings_left += $target_info[$key];
					//						$history_data['strarty_budynki']+=round($target_info[$key]*$how_many_buildings);
					//					}
					//					$how_many_land=0;
					//					$how_many_land =max(round( min($target_info['ziemia']*$attack_type_parameters[$attack['tryb']]['max_land_lost']*(min(max($target_info['ziemia']/$this->info['ziemia'],0.5),1.5)-0.5)*$damage
					//					,$target_info['ziemia'] - $how_many_buildings_left)),0);
					//					$attack['land']=$how_many_land;

					//dodawanie do histori==============================================================================
					//==================================================================================================

					for($i = 1; $i < 4; ++$i)
						{	
							if($killed['attacker'][$i]['cavalry'] < 0)
								$killed['attacker'][$i]['cavalry'] = 0;
								
							if($killed['attacker'][$i]['infantry'] < 0)
								$killed['attacker'][$i]['infantry'] = 0;
								
							if($killed['attacker'][$i]['archer'] < 0)
								$killed['attacker'][$i]['archer'] = 0;
							
							if($killed['defender'][$i]['cavalry'] < 0)
								$killed['defender'][$i]['cavalry'] = 0;
								
							if($killed['defender'][$i]['infantry'] < 0)
								$killed['defender'][$i]['infantry'] = 0;
								
							if($killed['defender'][$i]['archer'] < 0)
								$killed['defender'][$i]['archer'] = 0;	
						}					
						
					$history = new History();
					$history_data['straty_ziemia']=$attack['land'];
					$history_data['straty_zloto']=$attack['gold'];
					$history_data['straty_atakujacy']=
					$killed['attacker'][1]['cavalry']+
					$killed['attacker'][1]['infantry']+
					$killed['attacker'][1]['archer']+
					$killed['attacker'][2]['cavalry']+
					$killed['attacker'][2]['infantry']+
					$killed['attacker'][2]['archer']+
					$killed['attacker'][3]['cavalry']+
					$killed['attacker'][3]['infantry']+
					$killed['attacker'][3]['archer'];
					$history_data['straty_broniacy']=
					$killed['defender'][1]['cavalry']+
					$killed['defender'][1]['infantry']+
					$killed['defender'][1]['archer']+
					$killed['defender'][2]['cavalry']+
					$killed['defender'][2]['infantry']+
					$killed['defender'][2]['archer']+
					$killed['defender'][3]['cavalry']+
					$killed['defender'][3]['infantry']+
					$killed['defender'][3]['archer'];
					if($attacker_attack_and_defence>$defender_attack_and_defence){
						$history_data['czy_wygral_atakujacy']=1;
					}else{
						$history_data['czy_wygral_atakujacy']=0;
					}
					$history->add($history_data);
					
					if(($attack["tryb"] == Attacks::$ZAMEK) && $history_data['czy_wygral_atakujacy'] && $target_info["zamek"] >= 1)
					{
						--$target_info["zamek"];
						++$how_many_land;
						$sql =" UPDATE KSIESTWA set ziemia=ziemia+1, zamek=zamek+1 WHERE nazwa='".$attack['kto']."'";
						mysql_query($sql);
						$sql ="UPDATE KSIESTWA set ziemia=(ziemia-1), zamek=(zamek-1) WHERE nazwa='".$attack['kogo']."'";
						mysql_query($sql);
		
						$recipient = new User($this->info['nazwa']);
						$mBox = new MessageBox($none);
						$mBox->prepareMessage(
							'Raport z oblê¿enia ksiêstwa '.$attack['kogo'] 
							,'cst:'.$attack["kogo"]."&".($target_info["zamek"])
							,MESSAGE_RAPORT
							);
						$mBox->sendRaportTo($recipient, 'Genera³');
				
					}	
					//wysylanie raportu=================================================================================
					//==================================================================================================
					// tworzymy skrzynk? która nie nale?y do nikogo
					$none = new User(NULL);
					$mBox = new MessageBox($none);
					// tworzymy nadawc?, wiadomo?? i wysy?amy raport

					$recipient = new User($this->info['nazwa']);
					$mBox->prepareMessage(
                'Raport z ataku na ksiêstwo '.$attack['kogo'] ,
                 'atk:'.$attack['kto'].'&'.$attack['kogo'].'&'.$attacker_bonus['attack'].'&'.$attacker_bonus['defence'].'&'.$attack_copy['lucznicy'].'&'.$attack_copy['piechota'].'&'.$attack_copy['husaria']
					.'&'.$defender_bonus['attack'].'&'.$defender_bonus['defence'].'&'.$target_info_copy['lucznicy'].'&'.$target_info_copy['piechota'].'&'.$target_info_copy['husaria']
					.'&'.date('G:i').'&'.$killed['attacker'][1]['infantry'].'&'.$killed['attacker'][1]['cavalry'].'&'.$killed['attacker'][1]['archer']
					.'&'.$killed['defender'][2]['infantry'].'&'.$killed['defender'][2]['cavalry'].'&'.$killed['defender'][2]['archer'].'&jeszcze nie wiem co&'
					.$killed['defender'][3]['infantry'].'&'.$killed['defender'][3]['cavalry'].'&'.$killed['defender'][3]['archer'].'&'
					.$killed['attacker'][3]['infantry'].'&'.$killed['attacker'][3]['cavalry'].'&'.$killed['attacker'][3]['archer'].'&'
					.$attacker_attack_and_defence.'&'.$defender_attack_and_defence.'&'.$how_many_buildings.'&'.$how_many_land
					.'&'./*30*/$how_many_gold_lost
					,MESSAGE_RAPORT);
					$mBox->sendRaportTo($recipient, 'Genera³');
					$recipient = new User($attack['kogo']);
					$mBox->sendRaportTo($recipient, 'Genera³');
					// aktualizowanie stanu ksi?stwa broniacego
					$sql = "UPDATE KSIESTWA SET ";
					foreach($buildings as $name=>$min_value){
						$tmp = round($target_info[$name]*$how_many_buildings);
						$sql .= "$name = {$target_info[$name]},";
					}
					foreach($dictionary as $english=>$polish){
						$tmp = $killed['defender'][3][$english]+$killed['defender'][2][$english];
						$sql .= "$polish = $polish - $tmp,";
					}
					$sql .= "ziemia = ziemia -$how_many_land ";
					$sql .= ", zloto = zloto - $how_many_gold_lost ";
					if ($CFG->ATAK_TEST){
						$bonus_przegranych = pow(1.2,$how_many_buildings/2);
						$sql .= ", bonus_przegranych = bonus_przegranych + $bonus_przegranych ";
					}
					$sql .= "where nazwa = '".$attack['kogo']."'";
					mysql_query($sql)or Die("Sql Error line".__LINE__." class Attacks");
					break;
				case Attacks::$BUDYNEK_KONCOWY:// BUDYNEK KOALICJI
					$building_damage = round(1000000*$damage);
					$workers_damage = round($target_info['budowniczowie']*0.3*$damage);

					if($damage == 0){
						$history_data['czy_wygral_atakujacy']=0;
					}else{
						$history_data['czy_wygral_atakujacy']=1;
					}

					for($i = 1; $i < 4; ++$i)
						{
							if($killed['attacker'][$i]['cavalry'] < 0)
								$killed['attacker'][$i]['cavalry'] = 0;
								
							if($killed['attacker'][$i]['infantry'] < 0)
								$killed['attacker'][$i]['infantry'] = 0;
								
							if($killed['attacker'][$i]['archer'] < 0)
								$killed['attacker'][$i]['archer'] = 0;
							
							if($killed['defender'][$i]['cavalry'] < 0)
								$killed['defender'][$i]['cavalry'] = 0;
								
							if($killed['defender'][$i]['infantry'] < 0)
								$killed['defender'][$i]['infantry'] = 0;
								
							if($killed['defender'][$i]['archer'] < 0)
								$killed['defender'][$i]['archer'] = 0;	
						}
					//HISTORIA
					$history_data['straty_atakujacy']=
					$killed['attacker'][1]['cavalry']+
					$killed['attacker'][1]['infantry']+
					$killed['attacker'][1]['archer']+
					$killed['attacker'][2]['cavalry']+
					$killed['attacker'][2]['infantry']+
					$killed['attacker'][2]['archer']+
					$killed['attacker'][3]['cavalry']+
					$killed['attacker'][3]['infantry']+
					$killed['attacker'][3]['archer'];
					$history_data['straty_broniacy']=
					$killed['defender'][1]['cavalry']+
					$killed['defender'][1]['infantry']+
					$killed['defender'][1]['archer']+
					$killed['defender'][2]['cavalry']+
					$killed['defender'][2]['infantry']+
					$killed['defender'][2]['archer']+
					$killed['defender'][3]['cavalry']+
					$killed['defender'][3]['infantry']+
					$killed['defender'][3]['archer'];
					$history_data['strarty_budynki']=$building_damage;
					$history_data['straty_budowniczowie']=$workers_damage;
					History::add($history_data);


					//wysylanie raportu
					// tworzymy skrzynk? która nie nale?y do nikogo
					$none = new User(NULL);
					$mBox = new MessageBox($none);
					// tworzymy nadawc?, wiadomo?? i wysy?amy raport

					$recipient = new User($this->info['nazwa']);
					$mBox->prepareMessage(
                'Raport z ataku na budynek koalicji '.$attack['kogo'] ,
                 'bud:'.$attack['kto'].'&'.$attack['kogo'].'&'.$attacker_bonus['attack'].'&'.$attacker_bonus['defence'].'&'.$attack_copy['lucznicy'].'&'.$attack_copy['piechota'].'&'.$attack_copy['husaria']
					.'&'.$defender_bonus['attack'].'&'.$defender_bonus['defence'].'&'.$target_info_copy['lucznicy'].'&'.$target_info_copy['piechota'].'&'.$target_info_copy['husaria']
					.'&'.date('G:i').'&'.$killed['attacker'][1]['infantry'].'&'.$killed['attacker'][1]['cavalry'].'&'.$killed['attacker'][1]['archer']
					.'&'.$killed['defender'][2]['infantry'].'&'.$killed['defender'][2]['cavalry'].'&'.$killed['defender'][2]['archer'].'&jeszcze nie wiem co&'
					.$killed['defender'][3]['infantry'].'&'.$killed['defender'][3]['cavalry'].'&'.$killed['defender'][3]['archer'].'&'
					.$killed['attacker'][3]['infantry'].'&'.$killed['attacker'][3]['cavalry'].'&'.$killed['attacker'][3]['archer'].'&'
					.$attacker_attack_and_defence.'&'.$defender_attack_and_defence.'&'.$building_damage.'&'.$workers_damage,
					MESSAGE_RAPORT);
					$mBox->sendRaportTo($recipient, 'Genera³');
					$recipient = new User($target->getEmperor());
					$mBox->sendRaportTo($recipient, 'Genera³');

					//aktualizowanie danych w bazie
					foreach($dictionary as $english=>$polish){
						$coalition_building_damage[$polish] = $killed['defender'][3][$english]+$killed['defender'][2][$english];
					}
					$coalition_building_damage['postep']=$building_damage;
					$coalition_building_damage['budowniczowie']=$workers_damage;
					$coalition_building_damage['id']=$building_id;
					if($coalition_building_damage['postep']>$target_info['postep']){
						//$building->usunBudynek($building_id);
						$coalition_building_damage['postep'] = $target_info['postep'];
						$building->aktualizujDane($coalition_building_damage);
					}else{
						$building->aktualizujDane($coalition_building_damage);
					}
					break;
			}
			// usuniecie ataku wraz z zauktualizowaniem armi atakujacego
			if($attack['tryb']!=Attacks::$KOALICYJNY){
			  // usuwa odpowiedni
				$this->delete_attak($attack['id'],$attack);
			}else{
				$this->delete_coalition_attacks($attack,$attack_copy);
			}

		}

	}


	function delete_coalition_attacks($attack_after,$attack_before,$isRozwiazanieKoalicji=false){
		if ($isRozwiazanieKoalicji){
			$attack = $this->get_coalition_attack(true);
			if(count($this->attacks_list)!=0){
				foreach ($this->attacks_list as $key=>$single_attack) {
					$this->delete_attak($single_attack['id']);
				}
			}
		} else {
			$killed['lucznicy']=$attack_before['lucznicy'] - $attack_after['lucznicy'];
			$killed['piechota']=$attack_before['piechota'] - $attack_after['piechota'];
			$killed['husaria']=$attack_before['husaria'] - $attack_after['husaria'];
			$raportZKoalicyjnego = '';
			if(count($this->attacks_list)!=0){
				foreach ($this->attacks_list as $key=>$single_attack) {
				if($single_attack["tryb"] != Attacks::$KOALICYJNY)
					{
						break;
					}
					$raportZKoalicyjnego .= "<br>".$single_attack['kto']." wys³ano - piech: ".$single_attack['piechota']." ³ucz: ".$single_attack['lucznicy']." hus: ".$single_attack['husaria'];
					foreach($killed as $name=>$kills){
						if($attack_before[$name]!=0){
							$tmp = ($attack_before[$name] - $attack_after[$name])/$attack_before[$name];
						} else{
							$tmp =0;
						}
						$looses= min(ceil($tmp*$single_attack[$name]),$killed[$name]);
						//print "<br>".$name." : ".$single_attack[$name]." ".$looses;
						//print_r($killed);

						$single_attack[$name] -=$looses;
						$killed[$name] -= $looses;

					}
					$raportZKoalicyjnego .= "<br>Do ".$single_attack['kto']." wróci³o - pi: ".$single_attack['piechota']." ³ucz: ".$single_attack['lucznicy']." hus: ".$single_attack['husaria']."";
					$raportZKoalicyjnego .= "<br>";
					$this->delete_attak($single_attack['id'],$single_attack);
				}
			}
			$none = new User(NULL);
			$mBox = new MessageBox($none);
		    $mBox->prepareMessage("Raport z ataku kalicyjnego na ksiestwo ".$attack_after['kogo'],"sim:$raportZKoalicyjnego",MESSAGE_RAPORT,false);
			$recipient = new User($this->info['nazwa']);
		    $mBox->sendRaportTo($recipient, 'Genera³');
			return false;
		}
	}
	function delete_attak($attack_id,$attack=null,$wycofanie=false){
			if($attack==null){
			if(($attack = $this->get_attack($attack_id,true))==null){
				return false;
			}
		}
		if(!isset($attack['land'])){
			$attack['land'] =0;
		}
		if(!isset($attack['gold'])){
			$attack['gold'] =0;
		}
		$kara_morale_za_wycofanie = 0;
		if ($wycofanie){
			$kara_morale_za_wycofanie = 40;
		}

		$sql="delete from attacks where id = $attack_id";
		mysql_query($sql)or Die("Sql Error line ".__LINE__." class Attacks");
		switch ($attack['tryb']) {
			case Attacks::$GOSPODARKA : // Gospodarka
			case Attacks::$ZIEMIA :
			case Attacks::$KOALICYJNY :
			case Attacks::$ZAMEK : 
				$sql = "update KSIESTWA
                     set lucznicy = lucznicy + ".$attack['lucznicy'].",
                         piechota = piechota + ".$attack['piechota'].",
                     	 husaria = husaria + ".$attack['husaria'].",
						 ziemia = ziemia + ".$attack['land'].",
						 zloto = zloto + ".$attack['gold'].",
						 morale = morale - $kara_morale_za_wycofanie
						 where nazwa = '".$attack['kto']."' ;";
				mysql_query($sql)or Die("Sql Error line".__LINE__." class Attacks");
				break;
			case Attacks::$SZPIEGOWANIE :
			case Attacks::$PODPALANIE :
			case Attacks::$KRADZIEZ :
			case Attacks::$MORDOWANIE :
			case Attacks::$PROPAGANDA :
				$sql = "update KSIESTWA
                      set szpiedzy = szpiedzy + ".$attack['szpiedzy'].",
						 morale = morale - $kara_morale_za_wycofanie
                      where nazwa = '".$this->info['nazwa']."' ;";
				mysql_query($sql)or Die("Sql Error line ".__LINE__." class Attacks ");//.$sql." ".mysql_error());
				break;
			case Attacks::$BUDYNEK_KONCOWY :
				$sql = "update KSIESTWA
                     set lucznicy = lucznicy + ".$attack['lucznicy'].",
                         piechota = piechota + ".$attack['piechota'].",
                         husaria = husaria + ".$attack['husaria'].",
                         morale = morale - $kara_morale_za_wycofanie
                     where nazwa = '".$this->info['nazwa']."' ;";
				mysql_query($sql)or Die("Sql Error line ".__LINE__." class Attacks");
			default:
				break;
		}
	}
	
	
}

function castle($castle,$bowmen,$infanty,$riders)
{
  $capacity = array ( "archer" => castle_capasity($bowmen), 
		      "infantry" => castle_capasity($infanty), 
		      "cavalry" => castle_capasity($riders);
  return($capacity);
}

function castle_capasity($units)
{
	return floor((exp(0.04*$castle)-1)*$units);
}

// funkcja przygotowuje raport z torturowania zlapanych szpiegow

function torture($kogo) 
{
	$co = rand(1,3);

	switch($co)
	{
		case 1: // budynki specjalne
			$get = " SELECT BUDYNKI_SPECJALNE_WZORY.nazwa 
						FROM `BUDYNKI_SPECJALNE` , BUDYNKI_SPECJALNE_WZORY
						WHERE BUDYNKI_SPECJALNE_WZORY.id = BUDYNKI_SPECJALNE.id_budynku
						AND czyj = '".$kogo."'";
			$bs = mysql_query($get);
			$pierwszy = rand(0,4);
			$drugi = $pierwszy;
			$trzeci = $pierwszy;		
			$max = mysql_num_rows($bs);
			
			if($max >= 3)	
			{
				while( $pierwszy == $drugi ) 
					$drugi = rand(0,$max - 1);
				while( $drugi == $trzeci || $trzeci == $pierwszy )
					$trzeci = rand(0,$max - 1);
			}			
			$i = 0;
			while( $row = mysql_fetch_array($bs,MYSQL_ASSOC))
			{
				$data[$i] = $row['nazwa'];
				++$i;
			} 
			switch( $max )
			{
				case 0:
					return("tor:bs&".$kogo."&brak");
				case 1:
					return("tor:bs&".$kogo."&".$data[0]."&brak");
				case 2:
					return("tor:bs&".$kogo."&".$data[0]."&".$data[1]."&brak");
				case 3:
				case 4:
				case 5:
					return("tor:bs&".$kogo."
										&".$data[$pierwszy]."
										&".$data[$drugi]."
										&".$data[$trzeci]);			
			} 
		break;
		
		case 2: // wojsko
			$gdzie = rand(1,2);
			if($gdzie == 1) // wojsko w ksiestwie
				{
					$get = 	"SELECT lucznicy, piechota, husaria
								 FROM `KSIESTWA`
								 WHERE nazwa = '".$kogo."'";
					$army = mysql_query($get);
					$row = mysql_fetch_array($army,MYSQL_ASSOC);
					return("tor:def&".$kogo."&"	
											.$row['lucznicy']."&"
											.$row['piechota']."&"
											.$row['husaria']."&");
				}
			if($gdzie == 2) // wojsko atakujace
			{
				$get = "	SELECT lucznicy,piechota,husaria,kogo 
							FROM `attacks` 
							WHERE kto='".$kogo."' 
							AND (lucznicy > 0 
							OR piechota > 0
							OR husaria > 0) ";  
				$army = mysql_query($get);
				$i = 0;
				while( $row = mysql_fetch_array($army,MYSQL_ASSOC) )
				{
					$data[$i]['kogo'] = $row['kogo'];
					$data[$i]['lucznicy'] = $row['lucznicy'];
					$data[$i]['piechota'] = $row['piechota'];
					$data[$i]['husaria'] = $row['husaria'];
					++$i;
				}
				
				$max = mysql_num_rows($army);
				
				if($max > 0)
					$ktory = rand(0, $max - 1);
				else
					return("tor:att&".$kogo."&brak"); 
				
				return("tor:att&".$kogo."&"
										.$data[$ktory]['kogo']."&"
										.$data[$ktory]['lucznicy']."&"
										.$data[$ktory]['piechota']."&" 
										.$data[$ktory]['husaria']);     
			} 
		break;
			
		case 3: // straznicy 
			$get = "	SELECT straznicy
						FROM `KSIESTWA`
						WHERE nazwa = '".$kogo."' ";  
			$guard = mysql_query($get);
			while( $row = mysql_fetch_array($guard,MYSQL_ASSOC) )
				$data = $row['straznicy']; 
			return("tor:guard&".$kogo."&".$data);  
			
		break;
	}
	
	return("tor:brak&".$kogo);    
}
?>
