<?php
defined('CONST') or die('class Coalition require: const.php');
defined('CONFIG') or die('class Coalition require: config.php');

require_once($CFG->katalogStrony."panel/includes/class.Log.php");

/**
 * Klasa zarz±dzaj±ca koalicjami.
 */
class Coalition{
	/**
	 * Nazwa krolestwa dla ktorego zostal utworzony obiekt.
	 * @access private
	 * @var string nazwa krolestwa
	 */
	var $kingdom;

	/**
	 * Nazwa koalicji.
	 *
	 * Wartosc tego pola moze przyjmowac dwa typy: boolean(false), NULL, string.
	 * wartosc: false - dane o nazwie koalicji nie zostaly jeszcze pobrane
	 * wartosc: NULL - krolestwo nie nalezy do zadnej koalicji
	 * wartosc typu: string - nazwa koalicji
	 * @access private
	 * @var mixed
	 */
	var $coalition;

	/**
	 * Wiersz danych z tabeli TBL_COALITION ktory zawiera informacje koalicji.
	 *
	 * Przyjmuje wartosci typow:
	 * boolean(false) - dane nie zostaly jeszcze pobrane
	 * NULL - danych nie odnaleziono (nie istnieja)
	 * array - tablica z danymi
	 * @access private
	 * @var mixed
	 */
	var $data;


	/**
	 * Konstruktor. Jako parametr przyjmuje nazwe królestwa.
	 *
	 * Aby utworzyæ obiekt koalicji na podstawie jej nazwy nale¿y jako drugi
	 * parametr podaæ TRUE. W przeciwnym razie tworzony jest obiekt koalicji
	 * na podstawie jej królestwa cz³onkowskiego.
	 * @param string $param nazwa krolestwa lub nazwa koalicji
	 * @param boolean $coalition_name je¶li TRUE tworzony jest obiekt koalicji na podstawie jej nzawy
	 */
	function Coalition($param, $coalition_name = false){
		if($coalition_name){
			$this->kingdom = NULL;
			$this->data = false;
			$this->coalition = $param;
		}else{
			$this->kingdom = $param;
			$this->data = false;
			$this->coalition = false;
		}
	}


	/**
	 * Dodaje królestwo o podanje nazwie do koalicji.
	 * UWAGA! Wszystkie warunki trzeba sprawdziæ przed wywo³aniem tej metody,
	 * jak np. aktualn± liczbê królestw w koalicji.
	 * @access public
	 * @param string $kingdon_name nazwa królestwa, które ma byæ dodane
	 * @return boolean TRUE je¶li ok, w przeciwnym razie FALSE
	 */
	function addMember($kingdom_name){

		$coal_name = $this->getName();
		$q1 = "UPDATE ". TBL_KINGDOM.
            " SET `koalicja`='$coal_name'".
            " WHERE `nazwa`='$kingdom_name'";

		$q2 = "UPDATE `". TBL_COALITION ."`".
            " SET `ilosc_czlonkow`=`ilosc_czlonkow`+1".
            " WHERE nazwa='$coal_name'";
		if(mysql_query($q1) && mysql_query($q2)) return true;
		else return false;
	}


	/**
	 * Testuje czy królestwo o podanej nazwie nale¿y do koalicji.
	 * @access public
	 * @return boolean
	 */
	function contain($kingdom){
		if($this->kingdom == $kingdom) return true;

		$members = $this->getMemberList();
		if(!is_null($members)){
			foreach($members as $member){
				if($member == $kingdom) return true;
			}
			return false;
		}else{
			return false;
		}
	}

	static function exchangeCancel($sourceKingdom, $exchangeId,&$_mesg){
		$SQL = "SELECT * FROM ".TBL_COALITION_EXCHANGE." WHERE source = '".$sourceKingdom."' and id = ".$exchangeId.";";
		$res = mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error ".mysql_error());
		if (mysql_num_rows($res) > 0){
			$row = mysql_fetch_array($res, MYSQL_ASSOC);
			
			list($food, $tool, $iron, $weapon) = explode('|', $row['load']);
			$SQL = "UPDATE ". TBL_KINGDOM ." SET jedzenie=jedzenie+$food, "
			."narzedzia=narzedzia+$tool, zelazo=zelazo+$iron, "
			."bronie=bronie+$weapon, tragarze=tragarze+{$row['porter']} WHERE nazwa='{$row['source']}'";
			mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error ".mysql_error());
			
			$SQL = "DELETE FROM ".TBL_COALITION_EXCHANGE;
			$SQL .=" WHERE source = '$sourceKingdom' and id = '$exchangeId' ";
			mysql_query($SQL) or die("".__FILE__.":".__LINE__." mysql error ".mysql_error());
			
			Log::delCoalitionExchange($row['source'],$row['destination'],$row['load'],$row['time_left'],$row['porter']);
			
			$_mesg[] = "Tragarze wys³ani do ksiêstwa ".$row['destination']." na Twoj rozkaz wrócili do Twego ksiêstwa.";
			return true;
		}
		return false;
	}

	/**
	 * Czeka na opis
	 */
	function exchangeBegin($dest_kingdom, $load, $tours, $porters, $cost, &$err){
		if($this->kingdom === NULL) return false;
		$err = 0;

		// Sprawdzanie czy krolestwa sa w tej samej koalicji i maja conajmniej jeden rynek
		$query = "SELECT K1.koalicja, K1.rynki m_src, K2.rynki m_dest FROM ".TBL_KINGDOM
		." K1 LEFT JOIN ".TBL_KINGDOM." K2 ON "
		."K1.koalicja=K2.koalicja AND K1.nazwa!=K2.nazwa "
		."WHERE K1.nazwa='{$this->kingdom}' AND K2.nazwa='$dest_kingdom'";
		if(!$result = mysql_query($query)){
			$err = -1; // Blad systemu
			return false;
		}
		if(!$row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$err = -1; // Blad systemu
			return false;
		}
		if(empty($row['koalicja'])){
			$err = 1; // Krolestwa sa w roznych koalicjach
			return false;
		}
		if($row['m_src'] < 1){
			$err = 2; // Krolestwo wysylajace nie ma rynku
			return false;
		}
		if($row['m_dest'] < 1){
			$err = 3; // Krolestwo docelowe nie posiada rynku
			return false;
		}

		// Wysylanie tragarzy
		$load_str = "{$load['food']}|{$load['tool']}|{$load['iron']}|{$load['weapon']}";
		$query = "INSERT INTO ". TBL_COALITION_EXCHANGE ." VALUES("
		."NULL, '{$this->kingdom}', '$dest_kingdom', '$load_str', $tours, $porters)";
		if(!mysql_query($query)){
			$err = -1; // Blad systemu
			return false;
		}

		// Logowanie zdarzenia
		$log = new Log();
		$log->addCoalitionExchange($this->kingdom,$dest_kingdom,$load_str,$tours,$porters);

		// Pobieranie oplaty ...
		$query = "UPDATE ". TBL_KINGDOM ." SET zloto=zloto-$cost, tragarze=tragarze-$porters, "
		."jedzenie=jedzenie-{$load['food']},narzedzia=narzedzia-{$load['tool']},"
		."zelazo=zelazo-{$load['iron']},bronie=bronie-{$load['weapon']} "
		."WHERE nazwa='{$this->kingdom}'";
		if(!mysql_query($query)){
			$err = -1; // Blad systemu
			return false;
		}
		return true;
	}


	/**
	 * Czeka na opis
	 */
	function exchangeGo(&$raport){
		if($this->kingdom === NULL) return false;

		$query = "UPDATE ". TBL_COALITION_EXCHANGE ." SET time_left=time_left-1 "
		."WHERE source='{$this->kingdom}'";
		if(!mysql_query($query)) return false;
		$log = new Log();
		$log->updateCoalitionExchange($this->kingdom);

		$query = "SELECT C.id, C.destination, C.load, C.porter FROM ". TBL_COALITION_EXCHANGE
		." C WHERE source='{$this->kingdom}' AND time_left <= 0";
		if(!$result = mysql_query($query)) return false;
		if(mysql_num_rows($result) > 0){
			$id = "";
			while($row = mysql_fetch_array($result, MYSQL_ASSOC)){

				// zostawianie ladunku tragarzy po dojsciu do celu
				list($food, $tool, $iron, $weapon) = explode('|', $row['load']);
				$query = "UPDATE ". TBL_KINGDOM ." SET jedzenie=jedzenie+$food, "
				."narzedzia=narzedzia+$tool, zelazo=zelazo+$iron, "
				."bronie=bronie+$weapon WHERE nazwa='{$row['destination']}'";
				mysql_query($query);
				$raport[$row['destination']] = array(
                    'food'      => $food,
                    'tool'      => $tool,
                    'iron'      => $iron,
                    'weapon'    => $weapon
				);


				//powrot tragarzy
				$query = "UPDATE ". TBL_KINGDOM ." SET tragarze=tragarze+{$row['porter']}"
				." WHERE nazwa='{$this->kingdom}'";
				mysql_query($query);
				$id .= "{$row['id']},";
			}

			// usuwanie zakonczonych transakcji wymiany
			$id = rtrim($id, ',');
			$query = "DELETE FROM ". TBL_COALITION_EXCHANGE ." WHERE id IN ($id)";
			// TODO dorobic zeby w echange logu pojawiala sie data dostarczenia
			mysql_query($query);
		}
		return true;
	}


	/**
	 * Wyszukuje koalicjê po nazwie koalicji lub nazwie królestwa
	 * które aktualnie jest cesarstwem.
	 * @access public
	 * @param string $sort parametr wyznaczaj±cy sposób i kolumne sortowania.
	 * Dostêpne mo¿liwo¶ci: {COALITION | MEMBERS}|{ASC | DESC} gdzie:
	 * COALITION - sortowanie po nazwie kalicji
	 * MEMBERS - sortowanie po liczbie c¿³onków  w koalicji
	 * ASC - sortowanie rosn±ce
	 * DESC - sortowanie malej±ce
	 * Przyk³ady: 'COALITION|ASC', 'COALITION|DESC', 'MEMBERS|ASC'
	 * @param integer $row_offset ofset
	 * @param integer $row_limit limit wiersz (liczba wierszy na jednej stronie)
	 * @param string $keyword mo¿eby tutaj podaæ szukan± frazê. Szukanie odbywa
	 * siê po nazwach koalicji i nazwach królestw aktualnie w nich rz±dz±cych.
	 * Domyslnie parametr ten ma warto¶æ NULL co oznacza zwrócenie wyników bez
	 * wyszukiwania.
	 * @return array lista koalicji
	 */
	function getList($sort, $row_offset, $row_limit, $keyword = NULL){
		// ustawianie parametrów sortowania
		list($order_field, $order_type) = explode('|', $sort);

		switch($order_field){
			case 'COALITION': $order_field = 'nazwa'; break;
			case 'MEMBERS': $order_field = 'ilosc_czlonkow'; break;
			default: $order_field = 'nazwa';
		}

		$order_type = strtoupper($order_type);
		if($order_type != 'ASC' && $order_type != 'DESC') $order_type = 'ASC';


		// wybieranie trybu pobierania listy (z wyszukiwaniem lub bez)
		if(is_null($keyword)){
			$q = "SELECT nazwa, czlonek_1, ilosc_czlonkow FROM ".TBL_COALITION.
            " ORDER BY $order_field $order_type ".
            "LIMIT $row_offset, $row_limit";

			$q_count = "SELECT COUNT(nazwa) FROM ".TBL_COALITION;
		}else{

			$keyword = strtoupper($keyword);
			$q = "SELECT nazwa, czlonek_1, ilosc_czlonkow FROM ".
			TBL_COALITION ." WHERE ".
            "UPPER(nazwa) LIKE '%$keyword%' OR UPPER(czlonek_1) LIKE '%$keyword%' ".
            "ORDER BY $order_field $order_type ".
            "LIMIT $row_offset, $row_limit";

			$q_count = "SELECT COUNT(nazwa) FROM ". TBL_COALITION ." WHERE ".
            "UPPER(nazwa) LIKE '%$keyword%' OR UPPER(czlonek_1) LIKE '%$keyword%'";
		}


		// wykonwyanie zapytania i zwracanie wyniku
		$out = array();
		$r = mysql_query($q);
		$r_count = mysql_query($q_count);
		if($r && $r_count){
			$index = 1;
			while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
				$out[$index] = $row;
				$index++;
			}

			if(count($out) > 0){
				$out[0] = array(
                    'total_pages' => ceil(mysql_result($r_count, 0, 0)/$row_limit),
                    'current_page' => ceil(($row_offset+1)/$row_limit));
			}
		}
		return $out;
	}


	/**
	 * Pobiera wiersz z tablicy TBL_COALITION (metoda wewnetrzna!).
	 * @access private
	 * @return void
	 */
	function retriveDataRow(){
		$coal_name = $this->getName();
		mysql_query("SET NAMES 'latin2'");
		if(gettype($this->data) == 'boolean' && !is_null($coal_name)){
			$query = "SELECT * FROM ". TBL_COALITION .
                " WHERE nazwa = '$coal_name'";
			if($result = mysql_query($query)){
				if(mysql_num_rows($result) == 0){
					$this->data = NULL;
					$this->coalition = NULL;
				}else{
					$row = mysql_fetch_array($result, MYSQL_ASSOC);
					$this->data = $row;
				}
			}else{
				$this->data = NULL;
			}
		}
	}


	/**
	 * Pobiera opis koalicji.
	 * @access public
	 * @return string opis koalicji
	 */
	function getDescription(){
		$this->retriveDataRow();
		if(gettype($this->data) != 'NULL'){
			return $this->data['opis'];
		}else{
			return '';
		}
	}


	/**
	 * Zwraca nazwe krolestwa rzadzacego w koalicji.
	 * @access public
	 * @return string nazwa krolestwa rzadzacego w koalicji lub NULL jesli nie istnieje
	 */
	function getEmperor(){
		$this->retriveDataRow();

		if(!is_null($this->data)){
			return $this->data['czlonek_1'];
		}else{
			return NULL;
		}
	}


	/**
	 * Zwraca tablice zawierajaca informacje o wszystkich czlonkach koalicji.
	 *
	 * Parametrem mo¿e byæ ci±g znaków:
	 * - 'SIMPLE_LIST' zwracana jest prosta lista cz³onków czyli tablica
	 * zawieraj±ca tylko nazwy królestw,
	 * - 'PRIVATE_LIST' zwracana jest tablica, która zawiera dane potrzebne
	 * do wy¶wietlenia listy widocznej tylko dla cz³onków koalicji,
	 * - 'PUBLIC_LIST' zwracana jest tablica, która zawiera dane
	 * wy¶wietlane w li¶cie dostêpnej publicznie.
	 * Domyslnym parametrem jest 'SIMPLE_LIST'.
	 * @access public
	 * @param string $mode typ zwracanej listy cz³onków
	 * @return array lista cz³onków kalicji lub NULL w przypadku niepowodzenia.
	 */
	function getMemberList($mode = 'SIMPLE_LIST'){
		$this->getName();

		if(!is_null($this->coalition)){
			switch($mode){
				case 'SIMPLE_LIST':
					$q = "SELECT nazwa FROM ". TBL_KINGDOM .
                    " WHERE koalicja='{$this->coalition}' ORDER BY nazwa";
					if($r = mysql_query($q)){
						while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
							$ret[] = $row['nazwa'];
						}
						return $ret;
					}else{
						return NULL;
					}
					break;
				case 'PRIVATE_LIST':
					$q = "SELECT nazwa, ziemia, piechota, lucznicy, husaria, ziemia/(piechota+lucznicy+husaria+1) AS alfa, IF(ADDTIME(ostatni_log, '0:5:0') > NOW(),1,0) as active ".
                    "FROM ". TBL_KINGDOM ." JOIN PROFIL ON (".TBL_KINGDOM.".nazwa=PROFIL.login) WHERE koalicja='{$this->coalition}' ".
                    "ORDER BY 6 ASC";
					if($r = mysql_query($q)){
						while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
							$ret[] = $row;
						}
						return $ret;
					}else{
						return NULL;
					}
					break;
				case 'PUBLIC_LIST':
					$q = "SELECT nazwa, ziemia FROM ". TBL_KINGDOM ." WHERE koalicja='{$this->coalition}' ".
                    "ORDER BY nazwa ASC";
					if($r = mysql_query($q)){
						while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
							$ret[] = $row;
						}
						return $ret;
					}else{
						return NULL;
					}
					break;
				default:
					return NULL;
			}
		}else{
			return NULL;
		}
	}


	/**
	 * Zwraca nazwe koalicji lub NULL jesli krolestwo nie jest w zadnej koalicji.
	 * @access public
	 * @return string nazwa koalicji
	 */
	function getName(){
		// Jesli nie zostaly pobrane dane o koalicji - pobiera je
		if(gettype($this->coalition) == 'boolean' && $this->coalition == false){
			$query = "SELECT koalicja FROM ". TBL_KINGDOM
			." WHERE nazwa='{$this->kingdom}'";
			if($result = mysql_query($query)){
				$row = mysql_fetch_array($result, MYSQL_ASSOC);
				$this->coalition = $row['koalicja'];
				return $this->coalition;
			}else{
				$this->coalition = NULL;
				return NULL;
			}
			// Zwraca pobrane wczesniej dane
		}else{
			return $this->coalition;
		}
	}


	/**
	 * Zwraca aktualn± liczbê cz³onków koalicji.
	 * @access public
	 * @return mixed - zwraca liczbê ca³kowit± w przypadku kiedy nie ma
	 * b³êdów, w innej sytuacji zwróci NULL
	 */
	function membersCount(){

		$coal_name = $this->getName();
		if(is_null($coal_name)) return NULL;

		$q = "SELECT COUNT(*) AS 'count' FROM ". TBL_KINGDOM.
            " WHERE `koalicja`='$coal_name'";
		if($r = mysql_query($q)){
			$row = mysql_fetch_array($r, MYSQL_ASSOC);
			return $row['count'];
		}else{
			return NULL;
		}
	}
	/**
	 * Aktualizuje opis koalicji
	 * @access public
	 * @return int IDBUDYNKU jezeli jest , null jezeli nie ma
	 */
	function updateDescription($new_descriptoin){
		$coal_name = $this->getName();
		if(is_null($coal_name)) return NULL;
		$new_descriptoin=mysql_real_escape_string($new_descriptoin);
		$q = "UPDATE ". TBL_COALITION.
           " SET opis = '$new_descriptoin' WHERE `nazwa`='$coal_name'";
		mysql_query($q) or Die ("SQL Error ".__FILE__." ".__LINE__."");
	}

	/**
	 * Podaje informacje o budynku koncowym dla danej koalicji
	 * @access public
	 * @return int IDBUDYNKU jezeli jest , null jezeli nie ma
	 */
	function budynekKoncowy(){
		$this->retriveDataRow();
		return $this->data['id_budynku_koncowego'];
	}

	/**
	 * Podaje informacje o miejscach koalicji w rankingach w poprzedniej erze
	 * @access public
	 * @return $wiersz_h->czyJest - info czy jest jakas historia koalicji
	 *         $wiersz_h->dane - dane
	 */
	function getHistory(){
		// pobranie informacji o poprzedniej erze
		$zapytanie="select *  from historia_koalicje where nr_ery = (select max(nr_ery) from historia_koalicje) and nazwa='".$this->getName()."';";
		$historia=mysql_query($zapytanie)or Die("ups :)");
		if(mysql_num_rows($historia)>0){
			$wiersz_h->dane=mysql_fetch_array($historia);
			$wiersz_h->czyJest='ok';
		}else{
			$wiersz_h->czyJest=false;
		}
		return $wiersz_h;
	}

	/**
	 * Usuwa z koalicji królestwo dla którego stworzony zosta³ obiekt Coalition.
	 * Je¶li usuwany jest cesarz koalicji to koalicja jest automatycznie rozwi±zywana.
	 * Rozwi±zanie koalicji obejmuje tak¿e wys³anie wiadomo¶ci do wszystkich
	 * królestw cz³onkowskich o rozwi±zaniu koalicji.
	 * @access public
	 * @return boolean TRUE - wykonano poprawnie, FALSE - b³êdne podczas wykonania
	 */
	function quit(){
		global $CFG;

		$emperor = $this->getEmperor();
		if(is_null($emperor)) return false;

		$coalition_name = $this->getName();
		if(is_null($coalition_name)) return false;

		if($emperor == $this->kingdom){

			// rozwi±zywanie koalicji
			$ok = true;
			$members = $this->getMemberList('SIMPLE_LIST');

			// powiadamianie o rozwi±zaniu koalicji
			require_once("{$CFG->katalogStrony}param.constraint.php");
			require_once("{$CFG->katalogStrony}messages/class.MessageBox.php");
			require_once("{$CFG->katalogStrony}lib/class.User.php");

			$nullUser = new User(NULL);
			$mBox = new MessageBox($nullUser);
			$mBox->prepareMessage(
                "Rozwi±zanie koalicji $coalition_name",
                "cl1:$emperor&$coalition_name",
			MESSAGE_SIMPLE_RAPORT
			);

			foreach($members as $member){
				$recipient = new User($member);
				$mBox->sendRaportTo($recipient, "Dyplomata");
			}
			$q = "DELETE FROM ". TBL_COALITION ." WHERE nazwa='$coalition_name'";
			$ok =  mysql_query($q) && $ok;

			$q = "DELETE FROM budynki_koncowe WHERE id={$this->data['id_budynku_koncowego']}";
			$ok =  mysql_query($q) && $ok;

			$q = "UPDATE ". TBL_KINGDOM ." SET koalicja=NULL, rynki=0 ".
                "WHERE koalicja='$coalition_name'";
			$ok =  mysql_query($q) && $ok;

			$q = "DELETE FROM historia_koalicje WHERE nazwa='$coalition_name'";
			$ok =  mysql_query($q) && $ok;

			$q = "UPDATE ". TBL_INFO ." SET liczba_koalicji=liczba_koalicji-1";
			$ok =  mysql_query($q) && $ok;

			// usuwanie informacji o koalicji z innych modu³ów
			require_once("{$CFG->katalogStrony}koalicja/function.coalition.pub.php");
			coalition_pub_clear($coalition_name);

			require_once("{$CFG->katalogStrony}/sondy/funkcje_sonda.php");
			usunWybory($coalition_name);
			
			require_once("{$CFG->katalogStrony}/koalicja/funkcje_koalicja.php");
			// usun wszystkie zaproszenia
			usunZapr(2,$emperor);
			
			print mysql_error();
			return $ok;
		}else{

			// odej¶cie z koalicji
			$ok = true;
			$q = "UPDATE `". TBL_KINGDOM ."` SET `koalicja`=NULL, `rynki`=0 ".
                "WHERE `nazwa`='{$this->kingdom}'";
			$ok =  mysql_query($q) && $ok;

			$q = "UPDATE `". TBL_COALITION ."` SET  `ilosc_czlonkow`=`ilosc_czlonkow`-1".
                " WHERE `nazwa`='$coalition_name'";
			$ok =  mysql_query($q) && $ok;

			$this->coalition = false;
			$this->data = false;
			return $ok;
		}
	}
}
?>
