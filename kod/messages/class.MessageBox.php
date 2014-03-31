<?php
/**
 * Do poprawnego dzia³ania wymaga zainkludowanego wcze¶niej pliku 'const.php'
 * oraz aktywnego po³±czenia z baz± danych (plik 'mysql.connection.php').
 * @author Micha³ Kozak
 * @version 1.0.1
 */
defined('CONFIG') or die('class.MessageBox.php require: config.php');
defined('CONST') or die('class.MessageBox.php require: const.php');
defined('PARAM.CONSTRAINT') or die('class.MessageBox.php require: param.constraint.php');

/**
 * @ignore
 */
define('CLASS.MESSAGEBOX', true);


/**
 * Definiuje typ wiadomo¶ci - wiadomo¶æ 'standardowa'. Zwyk³a wiadomo¶æ. Ich
 * liczba w skrzynce jest limitowana w zale¿no¶ci od wykupionego pakietu.
 */
define('MESSAGE_STANDARD',  0x10);


/**
 * Definuije typ wiadomo¶ci - wiadomo¶æ 'zaproszenie'. Wiadomo¶æ wysy³ana przez
 * cesarza koalicji zapraszaj±ca królestwo do przy³±czenia siê. Liczba zaproszeñ
 * jest wliczana w limit wiadomo¶ci standardowych, który wyznaczany jest przez
 * wykupiony pakiet.
 */
define('MESSAGE_INVITE',    0x20);


/**
 * Definiuje typ wiadomo¶ci - wiadomo¶æ 'prosty raport'. Wiadomo¶æ ta cechuje
 * siê tym, ¿e niezale¿nie czy zosta³a przeczytana czy nie jest automatycznie
 * czyszczona co pewnien czas, np. raporty z rynku... Dlatego nie posiada
 * ona ¿adnych ograniczeñ na liczbê.
 */
define('MESSAGE_SIMPLE_RAPORT', 0x40);


/**
 * Definiuje typ wiadomo¶ci - wiadomo¶æ 'raport'. Ich liczba jest równie¿
 * ograniczona w zale¿no¶ci od wykupionego pakietu, lecz jest to inny limit ni¿
 * dla wiadomo¶ci 'standardowej' i 'zaproszenia'. Wiadomo¶ci te zawieraj±
 * wszelkiego rodzaju wa¿ne raporty, np. raport z wojny...
 */
define('MESSAGE_RAPORT',    0x80);


/**
 * Definuje stan wiadomo¶ci - wiadomo¶æ wys³ana.
 */
define('MESSAGE_SENT',  0x00);


/**
 * Definuje stan wiadomo¶ci - wiadomo¶æ przeczytana.
 */
define('MESSAGE_READ', 0x01);


/**
 * Definuje stan wiadomo¶ci - okre¶la czy odbiorca usun±³ wiadomo¶æ ze swojej
 * skrzynki czy nie.
 */
define('MESSAGE_RECIPIENT_DELETED', 0x02);


/**
 * Definuje stan wiadomo¶ci - okre¶la czy nadawca usun±³ wiadomo¶æ ze swojej
 * skrzynki czy nie.
 */
define('MESSAGE_SENDER_DELETED',    0x04);


/**
 * Kod b³êdu mówi±cy o tym, ¿e nie ma b³êdu :)
 */
define('MESSAGE_ERR_NONE',      0x00);


/**
 * B³±d wysy³ania - odbiorca nie istnieje, ma zablokwane lub nieaktywowane konto.
 */
define('MESSAGE_ERR_RECIPIENT',  0x01);


/**
 * B³±d wysy³ania - niepoprawny nadawca
 */
define('MESSAGE_ERR_SENDER',    0x02);


/**
 * B³±d wysy³ania - brak wiadomo¶ci do wys³ania
 */
define('MESSAGE_ERR_CONTENT',   0x04);

/**
 * B³±d wysy³ania - odbiorca ma pe³n± skrzynkê.
 */
define('MESSAGE_ERR_RCPTFULL',  0x08);


/**
 * Reprezentuje skrzynkê wiadomo¶ci.
 */
class MessageBox{

	/**
	 * U¿ytkownik do którego nale¿y skrzynka
	 * @access private
	 * @var User
	 */
	var $owner;


	/**
	 * Wiadomo¶æ przygotowywana do wys³ania.
	 * @access private
	 * @var array
	 */
	var $message;


	/**
	 * Konstruuje skrzynkê wiadomo¶ci dla danego u¿ytkownika. Je¶li wywo³ane
	 * z parametrem User(NULL) tworzona jest skrzynka bez w³a¶ciciela (czasami
	 * mo¿e siê przydaæ :)
	 * @access public
	 * @param User $owner obiekt u¿ytkownika - w³a¶ciciel skrzynki
	 */
	function MessageBox(&$owner){
		$this->owner = $owner;
		$this->message = NULL;
	}



	/**
	 * Zlicza wiadomo¶ci ró¿nych typów. Metoda ma zmienn± liczbê argumentów.
	 * Je¶li nie podamy ¿adnego zawsze zwraca 0. Argumentami s± tytpy wiadomo¶ci:
	 * MESSAGE_STANDARD, MESSAGE_INVITE, MESSAGE_RAPORT, MESSAGE_SIMPLE_RAPORT,
	 * MESSAGE_SENT. Je¶li podamy wiêcej ni¿ jeden typ, metoda zliczy ile
	 * jest tych wiadomo¶ci ³±cznie.
	 * Przyk³adowo:
	 * <code>
	 * $messageBox->count(MESSAGE_STANDARD, MESSAGE_INVITE);
	 * </code>
	 * Otrzymamy liczbê wiadomosci zwyk³ych + liczbê zaproszeñ.
	 * @access public
	 * @param integer zmienna liczba argumentów. Argumentami s± typy wiadomo¶ci.
	 * @return integer ³±czn± liczbê wiadomo¶ci podanych typów. Je¶li nie podamy
	 * ¿adnego typu zawsze zwraca 0;
	 */
	function count(){
		if(func_num_args() > 0){

			$owner_name = $this->owner->getName();
			if(is_null($owner_name)){
				return 0;
			}

			$q = "SELECT COUNT(*) AS 'counter' FROM `". TBL_MESSAGE ."` ".
                "WHERE ";

			$args = func_get_args();
			foreach($args as $mtype){
				if($mtype == MESSAGE_SENT){
					$condition_sent = "`from`='$owner_name' AND ".
                        "(property & ".MESSAGE_SENDER_DELETED.")=0";
				}else{
					$condition .= "(`property` & $mtype)=$mtype OR ";
				}
			}

			if($condition_sent){
				$q .= "($condition_sent)";
				if($condition) $q .= " OR ";
			}
			if($condition){
				$condition = substr($condition, 0, strlen($condition)-3);
				$q.= "(`to`='$owner_name' AND (property & ".
				MESSAGE_RECIPIENT_DELETED . ") = 0 AND ($condition))";
			}

			if($r = mysql_query($q)){
				$row = mysql_fetch_array($r, MYSQL_ASSOC);
				if(settype($row['counter'], 'integer')){
					return $row['counter'];
				}else{
					return 0;
				}
			}else{
				print mysql_error();
				return 0;
			}
		}else{

			return 0;
		}
	}


	/**
	 * Usuwa ze skrzynki wiadomo¶æ o danym/danyhc id.
	 * Je¶li jako paramter dana bêdzie tablica z warto¶ciami równymi
	 * identyfiaktorom wiadomo¶ci. Lista tych wiadomo¶ci bêdzie usuwana.
	 *
	 * TODO: Mo¿na zmniejszyæ liczbê zapytañ przy usuwaniu wielu wiadomo¶ci!
	 * @access public
	 * @param mixed $message_id identyfikator wiadomo¶ci lub tablica id
	 * @return boolean w³a¶ciwie jeszcze nic konkretnego to nie okre¶la:)
	 */
	function 	 delMessage($message_id,$realRemove=false){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)){
			return false;
		}

		// budowa odpowiedniego zapytania
		if(is_array($message_id)){

			$q = "SELECT `from`, `to`, `id`, `property` FROM ". TBL_MESSAGE .
                " WHERE `id` IN (";
			foreach($message_id as $id){
				$q .= "$id,";
			}
			$q = rtrim($q, ',') . ")";
		}elseif(is_integer($message_id)){

			$q = "SELECT `from`, `to`, `id`, `property` FROM ". TBL_MESSAGE .
                " WHERE `id`=$message_id";
		}

		if($r = mysql_query($q)){

			while($row = mysql_fetch_array($r, MYSQL_ASSOC)){

				settype($row['property'], 'integer');
				$id = $row['id'];
				if($row['to'] == $owner_name){

					// usuwanie jednej z otrzymanych wiadomo¶ci
					if($realRemove || $row['property'] & MESSAGE_SENDER_DELETED){

						// usuwanie wiadomo¶ci z bazy danych
						$q = "DELETE FROM ". TBL_MESSAGE .
                            " WHERE `id`=$id";
						mysql_query($q);
					}else{

						// ustawienie bitu MESSAGE_RECIPIENT_DELETED
						$q = "UPDATE ". TBL_MESSAGE .
                            " SET property = (property | ". MESSAGE_RECIPIENT_DELETED .")".
                            " WHERE `id`=$id";
						mysql_query($q);
					}

				}elseif($row['from'] == $owner_name){

					// usuwanie jednej z wys³anych wiadomo¶ci
					if($realRemove || $row['property'] & MESSAGE_RECIPIENT_DELETED){

						// usuwanie wiadomo¶ci z bazy danych
						$q = "DELETE FROM ". TBL_MESSAGE .
                            " WHERE `id`=$id";
						mysql_query($q);
					}else{

						// ustawienie bitu MESSAGE_SENDER_DELETED
						$q = "UPDATE ". TBL_MESSAGE .
                            " SET property = (property | ". MESSAGE_SENDER_DELETED .")".
                            " WHERE `id`=$id";
						mysql_query($q);
					}
				}
			}
		}else{
			return false;
		}
	}

	function shareMessage($id, $login)
	{
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)){
			return(false);
		}
		$connect = pdoConnect();
		
		$sql = "SELECT `to`, `subject`, `message` FROM `Message` WHERE `id`=:id AND `to`= :login";
	
		$sth = $connect->prepare($sql);
		$sth->bindParam(':id', $id, PDO::PARAM_INT);
		$sth->bindParam(':login', $login, PDO::PARAM_STR, 30);
		$sth->execute();
		$raport = $sth->fetch();	$sth = NULL;
		
		$sql = "SELECT koalicja FROM KSIESTWA WHERE nazwa = :login ";
		$sth = $connect->prepare($sql);
		$sth->bindParam(':login', $login, PDO::PARAM_STR, 30);
		$sth->execute();
		$coalition = $sth->fetch();	$sth = NULL;
		
				
		$sql = "INSERT INTO `shared_report` (`whose`,`subject`,`msg`,`date`,`coalition`)
					VALUES (:login, :subject, :msg, NOW(), :coal)";

		$sth = $connect->prepare($sql);
		$sth->bindParam(':login', $login, PDO::PARAM_STR, 30);
		$sth->bindParam(':subject', $raport['subject'], PDO::PARAM_STR);
		$sth->bindParam(':msg', $raport['message'], PDO::PARAM_STR);
		$sth->bindParam(':coal', $coalition[0], PDO::PARAM_STR);
		$sth->execute();
		
		$connect = NULL;		
		return(true);
	} 
	
	/**
	 * Sprawdza czy istniej± jakie¶ nieprzeczytane wiadomo¶ci (w ogóle lub
	 * tylko danego typu - MESSAGE_STANDARD, MESSAGE_INVITE itp.). Typ
	 * wiadomo¶ci podaje siê jako parametr. Domy¶lnie ustawiany jest na NULL
	 * co powoduje sprawdzenie czy istnieje jaka¶ nieprzeczytna wiadomo¶æ
	 * dowlnego typu.
	 * @access public
	 * @param integer $message_type jedna ze zdefiniowanych typów wiadomo¶ci:
	 * MESSAGE_STANDARD, MESSAGE_INVITE, itd (domy¶lnie NULL).
	 * @return boolean TRUE je¶li istnieje jaka¶ nieprzeczytana wiadomo¶æ albo
	 * FALSE w przeciwnym razie.
	 */
	function existsUnread($message_type = NULL){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)) return false;

		$q = "SELECT `id` FROM `". TBL_MESSAGE ."` ".
            "WHERE `to`='$owner_name' AND ".
            "(`property` & ". MESSAGE_READ .") = 0 ".
            " AND (`property` & ". MESSAGE_RECIPIENT_DELETED .") = 0 ";
		if(!is_null($message_type)){
			$q .= "AND (`property` & $message_type) = $message_type ";
		}
		$q .= "LIMIT 1";

		if($r = mysql_query($q)){
			if(mysql_num_rows($r) > 0){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	/**
	 * Sprawdza ilo¶æ nieprzeczytanych wiadomo¶ci (w ogóle lub
	 * tylko danego typu - MESSAGE_STANDARD, MESSAGE_INVITE itp.). Typ
	 * wiadomo¶ci podaje siê jako parametr. Domy¶lnie ustawiany jest na NULL
	 * co powoduje sprawdzenie czy istnieje jaka¶ nieprzeczytna wiadomo¶æ
	 * dowlnego typu.
	 * @access public
	 * @param integer $message_type jedna ze zdefiniowanych typów wiadomo¶ci:
	 * MESSAGE_STANDARD, MESSAGE_INVITE, itd (domy¶lnie NULL).
	 * @return boolean TRUE je¶li istnieje jaka¶ nieprzeczytana wiadomo¶æ albo
	 * FALSE w przeciwnym razie.
	 */
	function countUnread($message_type = NULL){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)) return false;

		$q = "SELECT count(*) as ilosc FROM `". TBL_MESSAGE ."` ".
            "WHERE `to`='$owner_name' AND ".
            "(`property` & ". MESSAGE_READ .") = 0 ".
            " AND (`property` & ". MESSAGE_RECIPIENT_DELETED .") = 0 ";
		if(!is_null($message_type)){
			$q .= "AND (`property` & $message_type) = $message_type ";
		}
		$q .= "LIMIT 1";

		if($r = mysql_query($q)){
			if(mysql_num_rows($r) > 0){
				$row = mysql_fetch_array($r);
				return $row['ilosc'];
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}



	/**
	 * Pobiera szczegó³y wiadomo¶ci.
	 * @access public
	 * @param integer $message_id identyfikator wiadomo¶ci
	 * @param boolean $set_read domy¶lnie true czyli metoda ustawi stan
	 * pobranej wiadomo¶ci na przeczytany - bit MESSAGE_READ
	 * @param boolean $fetch_content domy¶lnie ustawione jest TRUE czyli
	 * tre¶æ wiadomo¶ci jest równie¿ pobierana. Ustawione na FALSE zwrócony
	 * wynik nie bêdzie posiada³ tre¶æi.
	 * @return array - aby zobaczyæ co tam jest u¿yj var_dump ;) NULL je¶li by³ b³±d
	 */
	function fetchMessage($message_id, $set_read = true, $fetch_content = true){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)) NULL;

		$fields = "`id`, `from`, `to`, `subject`, `date`, `property`";
		if($fetch_content) $fields .= ", `message`";

		$q = "SELECT $fields FROM ". TBL_MESSAGE .
            " WHERE `id`=$message_id AND (".
            " (`to`='$owner_name' AND (`property` & ".MESSAGE_RECIPIENT_DELETED.") = 0)".
            " OR (`from`='$owner_name' AND (`property` & ".MESSAGE_SENDER_DELETED.") = 0))";
		if($r = @mysql_query($q)){

			$message = mysql_fetch_array($r, MYSQL_ASSOC);
			switch(true){
				case $message['property'] & MESSAGE_STANDARD:
					$message['type'] = MESSAGE_STANDARD;
					break;
				case $message['property'] & MESSAGE_INVITE:
					$message['type'] = MESSAGE_INVITE;
					break;
				case $message['property'] & MESSAGE_SIMPLE_RAPORT:
					$message['type'] = MESSAGE_SIMPLE_RAPORT;
					break;
				case $message['property'] & MESSAGE_RAPORT:
					$message['type'] = MESSAGE_RAPORT;
					break;
			}

			if($set_read){

				// ustawienie flagi przeczytania MESSAGE_READ
				$q = "UPDATE ". TBL_MESSAGE .
                    " SET property = (property | ".MESSAGE_READ.")".
                    " WHERE id={$message['id']}";
				@mysql_query($q);
			}
			return $message;
		}else{
			return NULL;
		}
	}


	/**
	 * Pobiera wiadomo¶ci danego stanu lub typu
	 * (patrz zdefiniowane typy i stany wiadomo¶ci: MESSAGE_xxx). Lista
	 * wiadomo¶ci jest domy¶lnie posortowana pod dacie otrzymania/wys³ania
	 * malej±co.
	 * @access public
	 * @param integer $type typ wiadomo¶ci, moze byæ jeden z MESSAGE_STANDARD,
	 * MESSAGE_INVITE, MESSAGE_SIMPLE_RAPORT, MESSAGE_RAPORT, MESSAGE_SENT.
	 * Wszystkie typy z wyj±tkiem MESSAGE_SENT mo¿na ³±czyæ za pomoc±
	 * operatora sumy bitowej |.
	 * @return array u¿yj var_dump aby zobaczyæ strukturê tablicy :)
	 */
	function getMessagesList($type){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)) return NULL;

		// tworzenie zapytania
		if($type == MESSAGE_SENT){
			$q = "SELECT `id`, `to`, subject, `date`, `property`".
                " FROM ". TBL_MESSAGE .
                " WHERE `from`='$owner_name'".
                " AND (property & ". MESSAGE_SENDER_DELETED .") = 0".
                " ORDER BY `date` DESC";
		}else{

			$type_str = '';
			if($type & MESSAGE_STANDARD){
				$type_str .= "(`property` & ".MESSAGE_STANDARD.")=".
				MESSAGE_STANDARD;
			}

			if($type & MESSAGE_INVITE){
				if(!empty($type_str)) $type_str .= " OR ";
				$type_str .= "(`property` & ".MESSAGE_INVITE.")=".
				MESSAGE_INVITE;
			}

			if($type & MESSAGE_RAPORT){
				if(!empty($type_str)) $type_str .= " OR ";
				$type_str .= "(`property` & ".MESSAGE_RAPORT.")=".
				MESSAGE_RAPORT;
			}

			if($type & MESSAGE_SIMPLE_RAPORT){
				if(!empty($type_str)) $type_str .= " OR ";
				$type_str .= "(`property` & ".MESSAGE_SIMPLE_RAPORT.")=".
				MESSAGE_SIMPLE_RAPORT;
			}
			if(empty($type_str)) die('class.MessageBox.php::getMessagesList(...) argument error!');

			$q = "SELECT `id`, `from`, `subject`, `date`, (property & ".MESSAGE_READ.") AS 'is_read',".
                " `property`".
                " FROM ". TBL_MESSAGE .
                " WHERE `to`='$owner_name'".
                " AND (property & ". MESSAGE_RECIPIENT_DELETED .") = 0".
                " AND ($type_str)".
                " ORDER BY `date` DESC";
		}

		// pobieradnie danych
		if($r = mysql_query($q)){
			$list = NULL;
			while($row = mysql_fetch_array($r, MYSQL_ASSOC)){

				switch(true){
					case $row['property'] & MESSAGE_STANDARD:
						$row['type'] = MESSAGE_STANDARD;
						break;
					case $row['property'] & MESSAGE_INVITE:
						$row['type'] = MESSAGE_INVITE;
						break;
					case $row['property'] & MESSAGE_SIMPLE_RAPORT:
						$row['type'] = MESSAGE_SIMPLE_RAPORT;
						break;
					case $row['property'] & MESSAGE_RAPORT:
						$row['type'] = MESSAGE_RAPORT;
						break;
				}
				$list[] = $row;
			}
			return $list;
		}else{
			return NULL;
		}
	}


	/**
	 * Nie dzia³a dla konkretnego u¿ytkownika. Obecnie jej zadaniem jest:
	 * - usuwane wiadomo¶æi z wszystkich skrzynek typu MESSAGE_SIMPLE_RAPORT
	 * starszych ni¿ 7 dni.
	 * @static
	 * @access public
	 * @return boolean
	 */
	function optimize(){
		$q = "DELETE FROM `". TBL_MESSAGE ."` WHERE (property & ".
		MESSAGE_SIMPLE_RAPORT .") <> 0 AND date + INTERVAL 7 DAY < NOW()";

		if(mysql_query($q)){
			return true;
		}else{
			return false;
		}
	}


	/**
	 * Przygotowuje wiadomo¶æ wychodz±c± ze skrzynki.
	 * (automatycznie wykonuje strip_tags na $subject)
	 * @access public
	 * @param string $subject temat wiadomo¶ci, maksymalnie 64 znaki
	 * @param string $message tre¶æ wiadomo¶ci
	 * @param integer $type typ wiadomo¶ci (patrz zdefiniowane powy¿ej typy MESSAGE_xxx)
	 * @param boolean $strip_tags determinuje czy usuwaæ tagi HTML'a (domy¶lnie TRUE)
	 * @return void
	 */
	function prepareMessage($subject, $message, $type, $strip_tags = true){
		// przygotowanie tematu
		$this->message['subject'] = strip_tags($subject);

		// przygotowanie pola 'property'
		if($type == MESSAGE_RAPORT || $type == MESSAGE_SIMPLE_RAPORT){

			// ustawienie bitu bitu MESSAGE_SENDER_DELETED, nadawca nie istnieje
			$this->message['property'] = ($type | MESSAGE_SENDER_DELETED);
		}elseif($type == MESSAGE_STANDARD || $type == MESSAGE_INVITE){

			// bit MESSAGE_SENDER_DELETED nie jest ustawiany nadawca istnieje
			$this->message['property'] = $type;
		}

		// przygotowanie tre¶ci
		$message = str_replace("\r\n", "\n", $message); // Windows
		$message = str_replace("\r", "\n", $message);   // Mac OS
		if($strip_tags){
			$this->message['text'] = strip_tags($message);
		}else{
			$this->message['text'] = $message;
		}
	}



	/**
	 * Zmienia w³a¶ciwo¶ci wcze¶niej ju¿ przygotowanej wiadomo¶ci za pomoc±
	 * metody prepareMessage(...). To jakia w³asno¶æ wiadomosci bêdzie zmieniona
	 * zale¿y od pierwszego parametru. Obecnie dostêpne s±:
	 * - 'SUBJECT' - zmiana tematu wiadomo¶ci
	 * @param string $edit_type okre¶la edytowan± w³asno¶æ wiadomo¶ci
	 * @param mixed $value nowa warto¶æ w³asno¶ci wiadomo¶ci
	 */
	function preparedMessageEdit($edit_type, $value){

		if(!is_null($this->message)){

			switch($edit_type){
				case 'SUBJECT':
					if(is_string($value)) $this->message['subject'] = $value;
					break;
			}
		}
	}


	/**
	 * Kasuje zawarto¶æ ca³ej skrzynki wiadomo¶ci.
	 * @access public
	 * @return boolean
	 */
	function remove(){
		$owner_name = $this->owner->getName();
		if(is_null($owner_name)){
			return false;
		}

		// usuwanie wiadomosci odebranych (usuwanie z bazy danych)
		$q = "DELETE FROM ". TBL_MESSAGE .
            " WHERE `to`='$owner_name' ".
            " AND `property` & ". MESSAGE_SENDER_DELETED . " <> 0";
		mysql_query($q);

		// usuwanie widomo¶ci odebranych (ustawianie bitu MESSAGE_RECIPIENT_DELETED)
		$q = "UPDATE ". TBL_MESSAGE .
            " SET `property` = `property` | ". MESSAGE_RECIPIENT_DELETED .
            " WHERE `to`='$owner_name'";
		mysql_query($q);

		// usuwanie wiadomosci wys³anych (usuwanie z bazy danych)
		$q = "DELETE FROM ". TBL_MESSAGE .
            " WHERE `from`='$owner_name' ".
            " AND `property` & ". MESSAGE_RECIPIENT_DELETED ." <> 0";
		mysql_query($q);

		// usuwanie wiadomo¶ci wys³anych (ustawianie bitu MESSAGE_SENDER_DELETED)
		$q = "UPDATE ". TBL_MESSAGE .
            " SET `property` = `property` | ". MESSAGE_SENDER_DELETED .
            " WHERE `from`='$owner_name'";
		mysql_query($q);

		return true;
	}


	/**
	 * Wysy³a wiadomo¶æ do danego odbiorcy.
	 * @access public
	 * @param User $recipient u¿ytkownik - odbiorca
	 * @param boolean $clera_buffer domy¶lnie true co oznacza, ¿e przygotowana
	 * wcze¶niej wiadomo¶æ za pomoc± metody prepareMessage(..) zostanie wyczyszczona
	 * z bufora pamiêci. Je¶li ustawimy na false bufor nie zostanie wyczyszczony
	 * i mo¿emy ponownie wys³aæ t± wiadomo¶æ do innego u¿ytkownika wyso³uj±c
	 * ponownie sendTo(...)
	 * @return integer kod b³êdu (patrz zdefiniowane MESSAGE_ERR_xxx)
	 */
	function sendTo(&$recipient, $clear_buffer = true){

		// sprawdzanie odbiorcy
		if($recipient->getName() == $this->owner->getName()){

			// odbiorca i nadawa s± tym samym u¿ytkownikiem
			//return MESSAGE_ERR_RECIPIENT;
		}
		if(!$recipient->isSetProperty(USERPROPERTY_VERIFIED)){

			// odbiorca nie istnieje lub jego konto jest nieaktywowane
			return MESSAGE_ERR_RECIPIENT;
		}
		if($recipient->isSetProperty(USERPROPERTY_BLOCKED)){

			// odbiorca zablokowany
			return MESSAGE_ERR_RECIPIENT;
		}

		// sprawdzanie skrzynki odbiorcy
		$rcptBox = new MessageBox($recipient);
		$rcpt_box_size = $rcptBox->count(MESSAGE_STANDARD, MESSAGE_INVITE, MESSAGE_SENT);

		$rcpt_constraint = $recipient->getConstraint();
		if($rcpt_constraint[C_MESSAGEBOX_LIMIT] <= $rcpt_box_size){

			// skrzynka odbiorcy jest pe³na
			return MESSAGE_ERR_RCPTFULL;
		}

		// sprawdzanie skrzynki nadawcy
		$sender_box_size = $this->count(MESSAGE_STANDARD, MESSAGE_INVITE, MESSAGE_SENT);
		$sender_constraint = $this->owner->getConstraint();

		// je¶li skrzynka nadawcy jest pe³na wys³ana wiadomo¶æ nie
		// zostanie zapisana w wiadomo¶ciach wys³anych.
		if($sender_constraint[C_MESSAGEBOX_LIMIT] <= $sender_box_size){
			$drop_sending_message = true;
		}else{
			$drop_sending_message = false;
		}

		if(!is_null($this->message)){

			// wysy³anie wiadomo¶ci
			$from = $this->owner->getName();
			$to = $recipient->getName();

			if(is_null($from)){

				// niepoprawny nadawca
				return MESSAGE_ERR_SENDER;
			}

			if(!isset($this->message['text'])){

				// brak tre¶ci wiadomo¶ci
				return MESSAGE_ERR_CONTENT;
			}

			if($drop_sending_message){
				$this->message['property'] |= MESSAGE_SENDER_DELETED;
			}else{
				$this->message['property'] &= ~MESSAGE_SENDER_DELETED;
			}

			$q = "INSERT INTO ". TBL_MESSAGE .
                "(`from`, `to`, `subject`, `message`, `date`, `property`) ".
                "VALUES('$from', '$to', '{$this->message['subject']}', ".
                "'{$this->message['text']}', NOW(), {$this->message['property']})";
			mysql_query($q);

			if ($recipient->getName() == 'bogwiedz')
			{
				global $CFG;
				require_once($CFG->katalogStrony."config.mailer.php");
				$mailer->FromName = 'Knight of Darkness';
				$mailer->AddAddress('krzysztof.dziurda@gmail.com');
				$mailer->Subject = 'KoD - WIADOMOSC OD '.$from;
				$message = "FROM: $from\r\nTO: $to\r\nSUBJECT: {$this->message['subject']} \r\n\r\n".$this->message['text'];
				$mailer->Body    = $message;
				if(!@$mailer->Send())
				{
					$mailer->ClearAllRecipients();
					$ok = mail($email, 'KoD - WIADOMOSC '.$this->message['subject'], $message, "Knight of Darkness\r\n");
				}
			}
			else if( $recipient->getName() == 'Pustelnik')
			  {	
			    global $CFG;
			    require_once($CFG->katalogStrony."config.mailer.php");
			    $mailer->FromName = 'Knight of Darkness';
			    $mailer->AddAddress('dammuch@gmail.com');
			    $mailer->Subject = 'KoD - WIADOMOSC OD '.$from;
			    $message = "FROM: $from\r\nTO: $to\r\nSUBJECT: {$this->message['subject']} \r\n\r\n".$this->message['text'];
			    $mailer->Body    = $message;
			    if(!@$mailer->Send())
			      {
				$mailer->ClearAllRecipients();
				$ok = mail($email, 'KoD - WIADOMOSC '.$this->message['subject'], $message, "Knight of Darkness\r\n");
			      }
			  }	
			else if( $recipient->getName() == 'DrthKwas')
			  {	
			    global $CFG;
			    require_once($CFG->katalogStrony."config.mailer.php");
			    $mailer->FromName = 'Knight of Darkness';
			    $mailer->AddAddress('b.piwnik@gmail.com');
			    $mailer->Subject = 'KoD - WIADOMOSC OD '.$from;
			    $message = "FROM: $from\r\nTO: $to\r\nSUBJECT: {$this->message['subject']} \r\n\r\n".$this->message['text'];
			    $mailer->Body    = $message;
			    if(!@$mailer->Send())
			      {
				$mailer->ClearAllRecipients();
				$ok = mail($email, 'KoD - WIADOMOSC '.$this->message['subject'], $message, "Knight of Darkness\r\n");
			      }
			  }	
				
				
			if($clear_buffer){
				$this->message = NULL;
			}
				
			return MESSAGE_ERR_NONE;
		}else{

			// brak wiadomo¶ci
			return MESSAGE_ERR_CONTENT;
		}
	}


	/**
	 * Wysy³a raport (MESSAGE_SIMPLE_RAPORT, MESSAGE_RAPORT) do u¿ytkownika.
	 * @access public
	 * @param User $recipinet obiekt u¿ytkownika odbiorcy raportu
	 * @param string $from nazwa, która bêdzie widoczna jako nadawca raportu (max 20 znaków)
	 * @param boolean $strict_overflow ustawienie na true uruchamia mechanizm
	 * ¶cis³ej kontroli przepe³nienia skrzynki raportów dla wiadomo¶ci typu
	 * MESSAGE_RAPORT. Oznacza to, ¿e je¶li skrzynka bêdzie pe³na raport zostanie
	 * porzucony i metoda zwróci kod b³êdu MESSAGE_ERR_RCPTFULL. Domy¶lnie
	 * mechanizm ten jest wy³±czony (warto¶æ false). W takim przypadku je¶li
	 * skrzynka raportów wiadomo¶ci typu MESSAGE_RAPORT jest pa³na to nastêpuje
	 * automatyczna zmiana typu raportu na MESSAGE_SIMPLE_RAPORT.
	 * @return integer kod b³êdu (patrz zdefiniowane MESSAGE_ERR_xxx)
	 */
	function sendRaportTo(&$recipient, $from, $strict_overflow = false){
		// Zapamietuje stan property poniewaz wiadomosc moze byc kilkukroteni wysylana i
		// jesli ktos ma pelna skrzynke to zmienia na MESSAGE_SIMPLE_RAPORT
		// i nastepni zamiast MESSAGE_RAPORT to dostaj± MESSAGE_SIMPLE_RAPORT
		$messageProperty = $this->message['property'];

		// sprawdzanie odbiorcy
		if(!$recipient->isSetProperty(USERPROPERTY_VERIFIED)){

			// odbiorca nie istnieje lub jego konto jest nieaktywowane
			return MESSAGE_ERR_RECIPIENT;
		}
		if($recipient->isSetProperty(USERPROPERTY_BLOCKED)){

			// odbiorca zablokowany
			return MESSAGE_ERR_RECIPIENT;
		}

		// je¶li wysy³any jest MESSAGE_RAPORT to sprawdzany jest stan skrzynki
		if($this->message['property'] & MESSAGE_RAPORT){

			// sprawdzanie skrzynki odbiorcy
			$rcptBox = new MessageBox($recipient);
			$mbox_size = $rcptBox->count(MESSAGE_RAPORT);
			$constraint = $recipient->getConstraint();

			if($strict_overflow){

				// mechanizm strict_overflow
				if($mbox_size >= $constraint[C_MESSAGEBOX_RAPORT]){

					// skrzynka odbiorcy jest pelna
					return MESSAGE_ERR_RCPTFULL;
				}
			}else{

				// przemianowanie typu raportu na MESSAGE_SIMPLE_RAPORT
				if($mbox_size >= $constraint[C_MESSAGEBOX_RAPORT]){

					$this->message['property'] &= ~MESSAGE_RAPORT;
					$this->message['property'] |= MESSAGE_SIMPLE_RAPORT;
				}
			}
		}

		// wys³anie raportu
		$to = $recipient->getName();
		$q = "INSERT INTO ". TBL_MESSAGE .
            "(`from`, `to`, `subject`, `message`, `date`, `property`) ".
            "VALUES('$from', '$to', '{$this->message['subject']}', ".
            "'{$this->message['text']}', NOW(), {$this->message['property']})";
		mysql_query($q);

		$this->message['property'] = $messageProperty;
		return MESSAGE_ERR_NONE;
	}
	
	function sendBeginnersMessage(&$recipient)
{
	$to = $recipient->getName();
	$from = 'Knight of Darkness';
	$msg = 'Witaj w ¶wiecie Knight of Darkness!
	Aby zaczaæ graæ musisz najpierw kliknaæ pierwsz± ture. W tym celu kliknij przycisk tura, który znajduje sie w prawym górnym rogu.
	Przed kliknieciem tury ustaw podatek (na pocz±tku najlepiej na 1%) i produkcjie kowali (na pocz±tku najlepiej na 0%). 
	Od podatków zale¿± morale twoich poddanych je¶li bêd± zbyt niskie doprowadzi to do buntu. 
	Wspó³czynnikiem produkcji kowali mo¿esz okre¶liæ jaka czê¶æ produkcji to broñ, a jaka narzêdzia.
	Teraz kliknij na klepsydrê.
	
	Wiêcej informacji znajdziesz w pomocy albo u innych graczy.
	Zapraszamy do zak³adki "koalicja", gdzie doswiadczeni gracze pomagaj± rozwijaæ siê nowym ksiêstwom.
	Gdy ju¿ nauczysz siê podstaw bêdziesz móg³ opu¶ciæ koalicjê treningow± i zacz±æ prawdziw± grê.
	Mo¿esz równie¿ pytaæ o pomoc na SB lub PW.
	
	Mi³ej zabawy!';
	$subject = 'Witam w ¶wiecie Knight of Darkness';
	
	$this->prepareMessage($subject,$msg,MESSAGE_STANDARD);
	
	$q = "INSERT INTO ". TBL_MESSAGE .
            "(`from`, `to`, `subject`, `message`, `date`, `property`) ".
            "VALUES('$from', '$to', '{$this->message['subject']}', ".
            "'{$this->message['text']}', NOW(), {$this->message['property']})";
         
	mysql_query($q);
	return MESSAGE_ERR_NONE;
}
}


?>
