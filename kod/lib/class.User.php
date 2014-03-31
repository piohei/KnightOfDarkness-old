<?php
defined('CONST') or die('calss.User.php require const.php');
defined('CONFIG') or die('calss.User.php require config.php');

require_once("{$CFG->katalogStrony}param.constraint.php");
require_once("{$CFG->katalogStrony}listaZalogowanych/class.Zalogowani.php");
require_once($CFG->katalogStrony.'common.php');
require_once($CFG->katalogStrony.'panel/includes/class.Log.php');
require_once($CFG->katalogStrony."panel/includes/class.Zastepstwa.php");

/**
 *@ignore
 */
define('CLASS.USER', true);

/**
 * Definuje b³±d podczas uwierzytelniania - u¿ytkownik zablokowany (ustawiony
 * bit USERPROPERTY_BLOCKED, aby to zmieniæ u¿yj metody 'unsetProperty')
 */
define('USERAUTH_BLOCKED', 0x01);


/**
 * Definiuje b³±d podczas uwierzytelniania - u¿ytkownik nie istnieje, podane
 * has³o lub nazwa u¿ytkownika s± niepoprawne.
 */
define('USERAUTH_FAILED', 0x02);


/**
 * Je¶li ustawione, oznacza ¿e dane u¿ytwkonika (a-mail) s± potwierdzone.
 * Konto jest aktywowane.
 */
define('USERPROPERTY_VERIFIED', 0x01);


/**
 * Oznacza, ¿e jest ustawiony bit "blokowania". Konto gracza zosta³o zablokowane.
 */
define('USERPROPERTY_BLOCKED', 0x02);


/**
 * Oznacza, ¿e zosta³ ustawiony bit "czyszczenia". Gracz zostanie usuniêty
 * kiedy licznik "czyszczenia" osi±gnie stan 0.
 */
define('USERPROPERTY_CLEAN', 0x04);

/**
 * gracz to nie gracz ale gracz to bot
 */
define('USERPROPERTY_BOT',0x08);

/**
 * Maska bitowa licznika "czyszczenia".
 * @ignore
 */
define('USERPROPERTY_CLEAN_COUNTER', 224);



/**
 * Klasa reprezentuj±ca u¿ytkownika w systemie.
 *
 * Wymaga aktywnego po³±czenia oraz pliku const.php, config.php
 */
class User{

	/**
	 * Nazwa u¿ytkownika.
	 * @access private
	 * @var string
	 */
	var $username;


	/**
	 * Dane z tabeli TBL_PROFILE uzytkownika.
	 * @access private
	 * @var array
	 */
	var $data_profile;


	/**
	 * Bufor danych z tabeli TBL_KINGDOM.
	 * @access private
	 * @var array
	 */
	var $data_kingdom_buf;


	/**
	 * Tworzy obiekt u¿ytkownika o zadanej nazwie.
	 *
	 * Logowanie u¿ytkownika wykonuje metoda 'auth'.
	 * @access public
	 * @param string $username nazwa u¿ytkownika
	 */
	function User($username){
		$this->username = $username;
		$this->data_profile = NULL;
		$this->data_kingdom_buf = NULL;
	}

	
	/**
	 * Sprawdza lub zmienia kwotê któr± u¿ytkownik posiada na koncie. Je¶li
	 * jako parametr podamy NULL (domy¶lnie, wiêc wywo³anie bezparamterowe)
	 * rezultatem bêdzie aktualny stan konta u¿ytkownika. Natomiast je¶li
	 * parametrem bêdzie liczba zostanie ona DODANA do aktualnego stanu konta
	 * @access public
	 * @param mixed $value je¶li NULL (domyslnie) zwracany jest aktualne saldo
	 * konta gracza. Je¶li jet to liczba jest ona DODAWANA do kwoty na koncie.
	 * @return mixed je¶li parametr jest NULL zwracany jest aktualny stan konta
	 * u¿ytkownika, natomiast je¶li parametrem jest liczba zwracany jest rezultat
	 * próby dodania jej do aktualnego stanu konta: TRUE (wszystko OK), FALSE
	 * (co¶ posz³o nie tak).
	 *
	 */
	function accountBalance($value = NULL){
		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return false;
		}

		if(is_null($value)){

			// pobieranie aktualnego salda
			return $this->data_profile['money'];
		}elseif(is_numeric($value)){

			// zmiana salda
			$q = "UPDATE `". TBL_PROFILE . "` ".
                "SET `money`=`money`+$value ".
                "WHERE `login`='{$this->username}'";
			if(mysql_query($q)){
				$this->data_profile['money'] += $value;
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	/**
	 * Sprawdza czy u¿ytkownik istnieje w systemie. Zwraca TRUE wtedy gdy
	 * istnieje wiersz w tabeli TBL_PROFILE odpowiadaj±cy nazwie u¿ytkownika
	 * (tak¿e zwraca TRUE gdy uzytkownik nie jest aktywowany) w przeciwnym
	 * razie zwraca FALSE.
	 * @access public
	 * @return boolean
	 */
	function exists(){
		if($this->fetchProfileData()){
			return true;
		}else{
			return false;
		}
	}


	/**
	 * Pobiera dane z tabeli TBL_KINGDOM danego u¿ytkownika. Dane pobierane
	 * s± do prywatnego pola $data_kingdom_buf.
	 * @access private
	 * @return boolean
	 */
	function fetchKingdomData(){
		if(is_null($this->username)) return false;

		$q = "SELECT * FROM `". TBL_KINGDOM . "` ".
            "WHERE `nazwa`='{$this->username}'";
		$this->data_kingdom_buf = NULL;
		if($r = mysql_query($q)){
			if($row = mysql_fetch_array($r, MYSQL_ASSOC)){
				if(isset($row['nazwa'])){
					$this->data_kingdom_buf = $row;
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	/**
	 * Pobiera dane z tabeli TBL_PROFILE u¿ytkownika.
	 * @access private
	 * @return boolean
	 */
	function fetchProfileData(){
		if(is_null($this->username)) return false;
		
		$q = "SELECT * FROM ". TBL_PROFILE .
            " WHERE login = '{$this->username}'";

		$this->data_profile = NULL;
		if($r = mysql_query($q)){
			if($this->data_profile = mysql_fetch_array($r, MYSQL_ASSOC)){
				if(isset($this->data_profile['login'])){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	/**
	 * Konstruuje obiekt u¿ytkownika z danych sesji.
	 *
	 * Pierwszym opcjonalnym parametrem jest wska¿nik do funkcji, która jest
	 * wykonywana po poprawnej autoryzacji u¿ytkownika. Drugi (równie¿ opcjonalny)
	 * parametr to wska¼nik do funkcji, która jest wykonywana po niepoprawnej
	 * autoryzacji. Pomijaæ opcjonalne parametry mo¿na ustawiaj±c je na warto¶æ NULL.
	 *
	 * Pierwsza funkcja jako parametr przyjmowaæ powinna referencjê do obiektu
	 * User (zautoryzowanego w³a¶nie u¿ytkownika), druga natomiast powinna
	 * przyjmowaæ parametr typu integer opisuj±cy, który opisuje powód
	 * niepoprawnego zalogowania (patrz sta³e: USERAUTH_xxx).
	 * @static
	 * @access public
	 * @param resource $on_success wska¼nik funkcji, wykonywanej po udanej autoryzacji.
	 * Domy¶lnie jest wykonywana funkcja auth_success() z pliku function.common.php.
	 * @param resource $on_fail wska¼nik funkcji, wykonywanej po nieudanej autoryzacji.
	 * Domy¶lnie jest wykonywana funkcja auth_failed() z pliku function.common.php.
	 * @return User lub NULL w przypadku niepowodzenia.
	 */
	function createFromSession($on_success = 'auth_success', $on_fail = 'auth_filed'){
		$sid = session_id();

		if(!$sid){
			$on_fail(USERAUTH_FAILED);
			return NULL;
		}

		$q = "SELECT * FROM ". TBL_LOGIN ." WHERE sesionId = '$sid'";
		$r = @mysql_query($q);
		if(!$r){
			$on_fail(USERAUTH_FAILED);
			return NULL;
		}

		$row = mysql_fetch_array($r, MYSQL_ASSOC);
		if(!$row){
			$on_fail(USERAUTH_FAILED);
			return NULL;
		}

		if(empty($row['login'])){
			$on_fail(USERAUTH_FAILED);
			return NULL;
		}else{
			$user = new User($row['login']);
			return $user;
		}
	}


	/**
	 * Pobiera nazwê koalicji do której nale¿y u¿ytkownik. Je¶li nie nale¿y
	 * do ¿adnej zwraca NULL.
	 * @access public
	 * @return string nazwa koalicji lub NULL je¶li nie nale¿y do ¿adnej.
	 */
	function getCoalitionName(){
		if(is_null($this->data_kingdom_buf)){
			if(!$this->fetchKingdomData()) return NULL;
		}

		return $this->data_kingdom_buf['koalicja'];
	}



	/**
	 * Zwraca tablicê ograniczeñ konta (constraints). Kluczami s± sta³e z pliku
	 * param.constraint.php (Uwaga: nie trzeba go dodatkowo inkludowaæ, dzieje
	 * siê to automatycznie w class.User.php).
	 * @access public
	 * @param boolean $with_validity domy¶lnie FALSE. Je¶li TRUE w zwracanej
	 * tablicy bêd± tak¿e daty wa¿no¶ci dla ka¿dego ograniczenia.
	 * @param boolean $session_buffer TRUE (domy¶lnie) oznacza, ¿e wyniki bêd±
	 * buforowane w sesji. Przy¶piesza to dzia³anie. FALSE wy³±cza takie buforowanie.
	 * Nale¿y u¿yæ ustawienia FALSE je¶li pobierane ograniczenia nie dotycz±
	 * aktualnie zalogowanego u¿ytkownika (nie za¶mieca siê wtedy niepotrzebnie
	 * tablicy sesji - $_SESSION).
	 * @return array - w przypadku niepowodzenia zwróci NULL.
	 */
	function getConstraint($with_validity = false, $session_buffer = true){
		global $_DEFAULT_CONSTRAINT;
		global $CFG;

		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return NULL;
		}

		// sprawdzenie czy istnieje plik wymuszaj±cy prze³adowanie danych z bufora sesji
		$reload_buffer = file_exists("{$CFG->dir_admin_panel}tmp/constraint_buffer_reload_{$this->username}");
		if($session_buffer && $reload_buffer){
			unset($_SESSION["{$this->username}_constraints"]);
			@unlink("{$CFG->dir_admin_panel}tmp/constraint_buffer_reload_{$this->username}");
		}

		if(isset($_SESSION["{$this->username}_constraints"])){
			$constraints = &$_SESSION["{$this->username}_constraints"];
			if(empty($constraints)){

				// zwraca domy¶lne ograniczenia
				return $this->buildConstraintTable($_DEFAULT_CONSTRAINT, $with_validity);
			}else{

				// buduje ograniczenia na podstawie danych z sesji
				return $this->buildConstraintTable($constraints, $with_validity);
			}
		}else{
			// usuwanie nie wa¿nych ju¿ ograniczeñ z bazy danych
			$q = "DELETE FROM `". TBL_CONSTRAINTS ."` ".
                "WHERE `validity` IS NOT NULL AND `validity` < NOW()";
			mysql_query($q);

			// pobieranie danych z bazy i zapisanie informacji w sesji
			$q = "SELECT `constraint`, `value`, `validity` ".
                "FROM `". TBL_CONSTRAINTS ."` WHERE `login`='{$this->username}'";

			// przetwarzanie danych i ich buforowanie w sesji
			if($r = mysql_query($q)){
				$constraints = $_DEFAULT_CONSTRAINT;
				while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
					$constraints[(int)$row['constraint']] = array(
                        'value'     => (int)$row['value'],
                        'validity'  => is_null($row['validity']) ? NULL : strtotime($row['validity'])
					);
				}

				// buforowanie wyników w sesji
				if($session_buffer){
					$_SESSION["{$this->username}_constraints"] = $constraints;
				}

				return $this->buildConstraintTable($constraints, $with_validity);
			}else{

				// zwraca domyslne ograniczenia
				return $this->buildConstraintTable($_DEFAULT_CONSTRAINT, $with_validity);
			}
		}
	}


	/**
	 * Metoda pomocnicza dla getConstraint(). Formatuje odpowiednio zwracan±
	 * tablicê ograniczeñ u¿ytkownika.
	 * @access private
	 * @param array $constraint_array tablica ¼ród³owa do formatowania
	 * @param boolean $with_validity to samo co w getConstraint()
	 * @return array
	 */
	function buildConstraintTable(&$constraint_array, $with_validity){
		global $_DEFAULT_CONSTRAINT;
		if(count($constraint_array)!=0)
		foreach($constraint_array as $constraint => $record){
			if(is_array($record)){
				if(!is_null($record['validity']) && $record['validity'] < time()){
					$constraint_array[$constraint] = $_DEFAULT_CONSTRAINT[$constraint];
					$ret_constraints[$constraint] = ($with_validity) ?
					array('value' => $constraint_array[$constraint], 'validity' => NULL) : $constraint_array[$constraint];
				}else{
					$ret_constraints[$constraint] = ($with_validity) ?
					array('value' => $constraint_array[$constraint]['value'], 'validity' => $constraint_array[$constraint]['validity']) : $constraint_array[$constraint]['value'];
				}
			}else{
				$ret_constraints[$constraint] = ($with_validity) ?
				array('value' => $constraint_array[$constraint], 'validity' => NULL) : $constraint_array[$constraint];
			}
		}
		return $ret_constraints;
	}


	/**
	 * Zwraca nazwê u¿ytkownika.
	 * @access public
	 * @return string lub NULL w przypadku niepowodzenia.
	 */
	function getName(){
		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return NULL;
		}

		return $this->data_profile['login'];
	}


	/**
	 * Zwraca informacjê o królestwie. Dane z tabeli TBL_KINGDOM
	 * @access public
	 * @return array
	 */
	function getState(){
		if(is_null($this->username)) return NULL;

		$q = "SELECT * FROM ". TBL_KINGDOM .
            " WHERE nazwa = '{$this->username}'";
		if($r = mysql_query($q)){
			if($row = mysql_fetch_array($r, MYSQL_ASSOC)){
				$row['kopalnie_zlota_pr']=round($row['kopalnie_zlota']-floor($row['kopalnie_zlota']),2)*100;
				$row['kopalnie_zlota']=floor($row['kopalnie_zlota']);
				$row['kopalnie_zelaza_pr']=round($row['kopalnie_zelaza']-floor($row['kopalnie_zelaza']),2)*100;
				$row['kopalnie_zelaza']=floor($row['kopalnie_zelaza']);
				$row['warsztaty_pr']=round($row['warsztaty']-floor($row['warsztaty']),2)*100;
				$row['warsztaty']=floor($row['warsztaty']);
				$row['farmy_pr']=round($row['farmy']-floor($row['farmy']),2)*100;
				$row['farmy']=floor($row['farmy']);
				$row['koszary_pr']=round($row['koszary']-floor($row['koszary']),2)*100;
				$row['koszary']=floor($row['koszary']);
				$row['domy_pr']=round($row['domy']-floor($row['domy']),2)*100;
				$row['gildie_pr']=round($row['gildie']-floor($row['gildie']),2)*100;
				$row['gildie']=floor($row['gildie']);
				$row['straznice_pr']=round($row['straznice']-floor($row['straznice']),2)*100;
				$row['straznice']=floor($row['straznice']);
				$row['domy']=floor($row['domy']);
				$row['wiezyczki_pr']=round($row['wiezyczki']-floor($row['wiezyczki']),2)*100;
				$row['wiezyczki']=floor($row['wiezyczki']);
				$row['rynki_pr']=round($row['rynki']-floor($row['rynki']),2)*100;
				$row['rynki']=floor($row['rynki']);
				$row['zamek_pr']=round($row['zamek']-floor($row['zamek']),2)*100;
				$row['zamek']=floor($row['zamek']);
				$row['ileZalogowanych']=Zalogowani::ileZalogowanych();

				return $row;
			}else{
				return NULL;
			}
		}else{
			return NULL;
		}
	}


	/**
	 * Testuje czy jest cesarzem koalicji.
	 * @access public
	 * @return boolean TRUE lub FALSE - wiadomo kiedy ;)
	 */
	function isEmperor(){

		$q = "SELECT `nazwa` FROM ". TBL_COALITION .
            " WHERE czlonek_1 = '{$this->username}'";
		if($r = mysql_query($q)){
			if(mysql_num_rows($r) == 1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	/**
	 * Testuje czy u¿ytkownik jest aktualnie on-line. (To tylko przybli¿enie!)
	 * @access public
	 * @return boolean
	 */
	function isOnline(){
		$q = "SELECT P.login FROM ".TBL_PROFILE." P INNER JOIN ".TBL_LOGIN." ".
            "Z ON Z.login = P.login ".
            "WHERE P.ostatni_log + INTERVAL ".$CFG->czas_uznania_za_wylogowany." SECUNDE >= NOW() ".
            "AND P.login = '{$this->username}'";
		if($r = mysql_query($q)){
			if(mysql_num_rows($r) == 1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	/**
	 * Testuje czy w³asno¶æ jest ustawiona. Patrz zdefiniowane USERPROPERTY.
	 * @access public
	 * @return boolean
	 */
	function isSetProperty($property){
		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return false;
		}
	
		$property_bits = $this->data_profile['property'];
		settype($property_bits, 'integer');
	
		if(($property_bits & $property) == $property){
			return true;
		}else{
			return false;
		}

	}


	/**
	 * >>>>>> NIE U¯YWAÆ! ZDEPRECJONOWANE!
	 * >>>>>> DO WYWALENIA
	 */
	function auth_sid($on_success = 'auth_success', $on_fail = 'auth_filed'){
		if (($login=czyZalogowany())!=''){
			$this->username = $login;
			$on_success($this);
			return true;
					} else {
			$on_fail(USERAUTH_FAILED);
			return false;
		}
		$sid = session_id();

		if(!$sid){
			$on_fail(USERAUTH_FAILED);
			return false;
		}

		$q = "SELECT * FROM ". TBL_LOGIN ." WHERE sesionId = '$sid'";
		$r = mysql_query($q);
		if(!$r){
			$on_fail(USERAUTH_FAILED);
			return false;
		}

		$row = mysql_fetch_array($r, MYSQL_ASSOC);
		if(!$row){
			$on_fail(USERAUTH_FAILED);
			return false;
		}

		if(empty($row['login'])){
			$on_fail(USERAUTH_FAILED);
			return false;
		}else{
			$this->username = $row['login'];
			$on_success($this);
			return true;
		}
	}


	/**
	 * Usuwa u¿ytkownika z systemu.
	 * @access public
	 * @return boolean
	 */
	function remove(){
		global $CFG;


		// usuwanie u¿ytkownika nie aktywowanego
		if(!$this->isSetProperty(USERPROPERTY_VERIFIED)){
			$q = "DELETE FROM ". TBL_PROFILE ." WHERE login = '{$this->username}'";
			mysql_query($q);
			return true;
		}

		// jesli konto bylo aktywne to zaloguj fakt jego usuniecia
		$log = new Log();
		$log->addDeletedKingdom($this->getName());

		// sprawdza czy u¿ytkownik istnieje w systemie
		$q = "SELECT nazwa FROM ".TBL_KINGDOM." WHERE nazwa='{$this->username}'";
		if(!$r = mysql_query($q)) return false;
		if(mysql_num_rows($r) != 1) return false;
		$status = true;

		// usuwanie plików flag u¿ytkownika

		if(file_exists("{$CFG->dir_admin_panel}tmp/constraint_buffer_reload_{$this->username}")){
			@unlink("{$CFG->dir_admin_panel}tmp/constraint_buffer_reload_{$this->username}");
		}
		// zachowanie informacji o usunietym uzytkowniku, wykorzystywane przy tworzeniu nowego konta
		    $sql = "INSERT INTO old_users (login,mail,ip,date) VALUES ('{$this->username}','{$this->data_profile[mail]}','{$this->data_profile[ip]}','{$this->data_profile[data_zalozenia]}')";
		mysql_query($sql);
		$sql = null;

		// usuwanie z koalicji
		require_once("{$CFG->katalogStrony}koalicja/class.Coalition.php");
		$coalition = new Coalition($this->username);
		$coalition->quit();

		// usuwanie skrzynki wiadomo¶ci
		require_once("{$CFG->katalogStrony}messages/class.MessageBox.php");
		$mBox = new MessageBox($this);
		$mBox->remove();

		// tabela: INFO
		$q = "UPDATE INFO SET liczba_ksiestw = liczba_ksiestw - 1";
		$status &= mysql_query($q);

		// tabela: ZALOGOWANI
		$q = "DELETE FROM ZALOGOWANI WHERE login='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: BUDYNKI_SPECJALNE
		$q = "DELETE FROM BUDYNKI_SPECJALNE WHERE czyj='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: AUKCJE
		$q = "DELETE FROM AUKCJE WHERE wystawiajacy='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: CoalitionExchange
		$q = "DELETE FROM CoalitionExchange ".
            "WHERE source='{$this->username}' OR destination='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: KSIAZKA_ADR (DODAÆ CZYSZCZENIE KSI¡¯KI PRZEZ OBIEKT)
		$q = "DELETE FROM KSIAZKA_ADR WHERE login='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: ADMINI
		$q = "DELETE FROM ADMINI WHERE login='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: ZALOGOWANI
		$q = "DELETE FROM ". TBL_LOGIN ." WHERE login = '{$this->username}'";
		$status &= mysql_query($q);

		// tabela: KSIESTWA
		$q = "DELETE FROM ". TBL_KINGDOM ." WHERE nazwa  = '{$this->username}'";
		$status &= mysql_query($q);

		// tabela: PROFIL
		$q = "DELETE FROM ". TBL_PROFILE ." WHERE login = '{$this->username}'";
		$status &= mysql_query($q);

		// tabela: historia_ksiestwa
		$q = "DELETE FROM `historia_ksiestwa` WHERE `login`='{$this->username}'";
		$status &= mysql_query($q);

		// tabela: Attacks
		$q = "DELETE FROM `attacks` WHERE `kto`='{$this->username}'";
		mysql_query($q);

		return $status;
	}


	/**
	 * Ustawia odpowienie ograniczenia dla u¿ytkownika.
	 * @access public
	 * @param array $constraint_array kluczami tej tablicy s± sta³e zdefiniowne
	 * w pliku param.constraint.php (jest on automatycznie
	 * inkludowany w class.User.php). Warto¶ci± dla poszczególych kluczy w
	 * przekazywanej tablicy musi byæ tablica dwuelementowa:
	 * array( 'value' => <wartosc>, 'validity'  => <waznosc> );
	 * Gdzie 'warto¶æ' jest liczb± ca³kowit± [0-255] okre¶laj±c± warto¶æ
	 * ograniczenia, a 'wa¿no¶æ' jest unixowym stêplem czasowym okre¶laj±cym
	 * date wa¿no¶ci tego ograniczenia (ustawienie na 0 powoduje przywrócenie
	 * warto¶ci domy¶lnej dla ograniczenia). Je¶li 'wa¿no¶æ' bêdzie ustawiona na NULL
	 * ograniczenie nie bêdzie mieæ daty wa¿no¶ci (wa¿no¶æ nieskoñczona).
	 * @return boolean
	 */
	function setConstraint(&$constraint_array){
		global $_DEFAULT_CONSTRAINT;

		if(empty($constraint_array)) return true;

		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return false;
		}

		// czyszczenie bufora (informacji o ograniczeniach z sesji)
		unset($_SESSION["{$this->username}_constraints"]);

		// usuwanie wszystkich nowo ustawianych rekordów
		$q1 = "DELETE FROM `". TBL_CONSTRAINTS ."` ".
            "WHERE `login`='{$this->username}' AND `constraint` IN (";

		// wstawianie nowych rekordów
		$q2 = "INSERT INTO `". TBL_CONSTRAINTS ."`".
            "(`login`, `constraint`, `value`, `validity`) ".
            "VALUES";
		$do_insert = false;
		foreach($constraint_array as $constraint => $record){
			$q1 .= "$constraint,";

			if($record['value'] == $_DEFAULT_CONSTRAINT[$constraint]){
				if(!is_null($record['validity']) && $record['validity'] >= time()){
					$q2 .= "('{$this->username}', $constraint, {$record['value']},";
					$q2 .= "'". date("Y-m-d H:i:s", $record['validity']). "'),";
					$do_insert = true;
				}
			}else{
				if(is_null($record['validity'])){
					$q2 .= "('{$this->username}', $constraint, {$record['value']}, NULL),";
					$do_insert = true;
				}elseif($record['validity'] >= time()){
					$q2 .= "('{$this->username}', $constraint, {$record['value']},";
					$q2 .= "'".date("Y-m-d H:i:s", $record['validity'])."'),";
					$do_insert = true;
				}
			}
		}

		$q1 = substr($q1, 0, -1). ")";
		if($do_insert){
			$q2 = substr($q2, 0, -1);
			// print "$q1<br>$q2<br><br>";
			return  mysql_query($q1) && mysql_query($q2);
		}else{
			// print "$q1<br><br>";
			return  mysql_query($q1);
		}
	}


	/**
	 * Ustawia w³asno¶æ gracza. Patrz zdefiniowane USERPROPERTY
	 * @access public
	 * @return void
	 */
	function setProperty($property){
		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return;
		}

		$property_bits = $this->data_profile['property'];
		settype($property_bits, 'integer');
		$property_bits = $property_bits | $property;

		if($property == USERPROPERTY_CLEAN){
			// ustawienie warto¶ci licznika "czyszczenia"
			$value = 7; // liczba dni po ktorych konto zostanie usuniete - [0,7]
			$property_bits = $property_bits & 31;
			$property_bits = $property_bits | ($value*32);
		}

		$q = "UPDATE ". TBL_PROFILE ." SET property=$property_bits ".
            "WHERE login = '{$this->username}'";
		if(mysql_query($q)) $this->data_profile['property'] = $property_bits;
	}


	/**
	 * Kasuje ustawion± w³asno¶æ gracza. Patrz zdefiniowane USERPROPERTY
	 * @access public
	 * @return void
	 */
	function unsetProperty($property){
		if(is_null($this->data_profile)){
			if(!$this->fetchProfileData()) return;
		}

		$property_bits = $this->data_profile['property'];
		settype($property_bits, 'integer');
		$property_bits = $property_bits & ~$property;

		$q = "UPDATE ". TBL_PROFILE ." SET property=$property_bits ".
            "WHERE login = '{$this->username}'";
		if(mysql_query($q)) $this->data_profile['property'] = $property_bits;
	}

	/*
	 * Pobiera listê tragarzy wychodz±cych z ksiestwa
	 */
	function getPorterDestinations(){
		$sql = "SELECT * FROM ".TBL_COALITION_EXCHANGE." ce WHERE ce.source='".$this->getName()."' order by ce.destination, ce.time_left";
		//		$sql = "SELECT * FROM ".TBL_COALITION_EXCHANGE." ce WHERE ce.source='".$this->getName()."'";
		$res = mysql_query($sql) or die(__FILE__.':'.__LINE__."blad bazy danych".mysql_error());
		$i=0;
		$porterDestinatios=array();
		while ($row=mysql_fetch_array($res)) {
			$porterDestinatios[$i]['id'] = $row['id'];
			$porterDestinatios[$i]['source'] = $row['source'];
			$porterDestinatios[$i]['destination'] = $row['destination'];
			list($food, $tool, $iron, $weapon) = explode('|', $row['load']);
			$porterDestinatios[$i]['load'] = $row['load'];
			$porterDestinatios[$i]['food'] = $food;
			$porterDestinatios[$i]['tool'] = $tool;
			$porterDestinatios[$i]['iron'] = $iron;
			$porterDestinatios[$i]['weapon'] = $weapon;
			$porterDestinatios[$i]['time_left'] = $row['time_left'];
			$porterDestinatios[$i]['porter'] = $row['porter'];
			$i++;
		}
		return $porterDestinatios;
	}

	/*
	 * Pobiera listê tragarzy przychodz±cych do ksiêstwa
	 */
	function getIncomingPorters(){
		$sql = "SELECT * FROM ".TBL_COALITION_EXCHANGE." ce WHERE ce.destination='".$this->getName()."' order by ce.source, ce.time_left";
		//		$sql = "SELECT * FROM ".TBL_COALITION_EXCHANGE." ce WHERE ce.destination='".$this->getName()."' ";
		$res = mysql_query($sql) or die(__FILE__.':'.__LINE__."blad bazy danych".mysql_error());
		$i=0;
		$incomingPorters=array();
		while ($row=mysql_fetch_array($res)) {
			$incomingPorters[$i]['id'] = $row['id'];
			$incomingPorters[$i]['source'] = $row['source'];
			$incomingPorters[$i]['destination'] = $row['destination'];
			list($food, $tool, $iron, $weapon) = explode('|', $row['load']);
			$incomingPorters[$i]['load'] = $row['load'];
			$incomingPorters[$i]['food'] = $food;
			$incomingPorters[$i]['tool'] = $tool;
			$incomingPorters[$i]['iron'] = $iron;
			$incomingPorters[$i]['weapon'] = $weapon;
			$incomingPorters[$i]['time_left'] = $row['time_left'];
			$incomingPorters[$i]['porter'] = $row['porter'];
			$i++;
		}
		return $incomingPorters;
	}

	/*
	 * Pobiera historiê tragarzy
	 */
	function getPortersLog(){
		$sql = "SELECT * FROM ".TBL_COALITION_EXCHANGE_LOG." cel WHERE (cel.source='".$this->getName()."' OR cel.destination='".$this->getName()."') and cel.date + INTERVAL 1 DAY >= now() ";
		$res = mysql_query($sql) or die(__FILE__.':'.__LINE__."blad bazy danych".mysql_error());
		$i=0;
		$portersLog = array();
		while ($row=mysql_fetch_array($res)) {
			$portersLog[$i]['id'] = $row['id'];
			$portersLog[$i]['source'] = $row['source'];
			$portersLog[$i]['destination'] = $row['destination'];
			list($food, $tool, $iron, $weapon) = explode('|', $row['load']);
			$portersLog[$i]['load'] = $row['load'];
			$portersLog[$i]['food'] = $food;
			$portersLog[$i]['tool'] = $tool;
			$portersLog[$i]['iron'] = $iron;
			$portersLog[$i]['weapon'] = $weapon;
			$portersLog[$i]['time_left'] = $row['time_left'];
			$portersLog[$i]['porter'] = $row['porter'];
			$portersLog[$i]['date'] = $row['date'];
			$i++;
		}
		return $portersLog;
	}

	/*
	 * zwraca liste czynnych zastepst konta (czyli kto zastepuje to koto)
	 */
	function getZastepstwa(){
		return Zastepstwa::getZastepstwa(NULL,$this->getName());
	}
	
	/*
	 * zwraca liste zastepstw czynnych w ktorych to konto jest zastepujacym
	 */
	function getKogoZastepuje(){
		return Zastepstwa::getZastepstwa($this->getName(),NULL);
	}
}
?>
