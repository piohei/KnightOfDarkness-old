<?php
/**
 * @ignore
 */
define('CLASS.BOOK', true);

defined('CONST') or die('class.Book.php require: const.php');



/**
 * Kod b³edu oznaczaj±cy, ¿e nie ma b³êdu :)
 */
define('BOOK_OK',           0x00);



/**
 * Definiuje b³±d który mo¿e wyst±piæ podczas dodawania nowego wpisu za
 * pomoc± metody add(). Oznacza tyle, ¿e brak ju¿ miejsaca w ksiêdze
 * (limit zosta³ osi±gniêty)
 */
define('BOOK_ERR_LIMIT',    0x01);



/**
 * Definiuje b³±d bazy danych.
 */
define('BOOK_ERR_DB',        0x02);



/**
 * Definuje "inny b³±d" - nieznany
 */
define('BOOK_ERR_UNKNOWN',   0xFF);



/**
 * Klasa reprezentuj±ca ksi±¿kê znajomych danego uzytkownika.
 * Do poprawnego dzia³ania wymaga aktywnego ju¿ po³±czenia z baz± danych.
 * WYMAGA W£¡CZONYCH PLIKÓW: const.php, config.php
 */
class Book{



    /**
     * Nazwa u¿ytkownika.
     * @access protected
     * @var User
     */
    var $user;



    /**
     * Lista znajomych.
     * @access protected
     * @var array
     */
    var $friends_list;



    /**
     * Tworzy obiek ksi±¿ki znajomych dla danego u¿ytkownika.
     * @access public
     * @param User $user obiekt u¿ytkownika
     */
    function Book(&$user){
        $this->user = $user;
        $this->friends_list = array();
    }



    /**
     * Dodanej u¿ytkownika do ksi±¿ki.
     * @access public
     * @param string $username nazwa u¿ytkownika do dodania do ksiêgi
     * @return integer kod b³êdu (patrz zdefiniowane kody b³êdów)
     */
    function add($username){
        $ownername = $this->user->getName();
        if(!is_null($ownername)){

            $q = "SELECT COUNT(*) AS size FROM ". TBL_BOOK .
                " WHERE login='$ownername'";

            if($r = mysql_query($q)){

                $row = mysql_fetch_array($r, MYSQL_ASSOC);
                $size = $row['size'];
                $constraint = $this->user->getConstraint();
                if($size >= $constraint[C_BOOK_LIMIT]){
                    return BOOK_LIMIT;
                }
            }else{
                return BOOK_ERR_DB;
            }

            $q = "INSERT INTO ". TBL_BOOK ."(`login`, `znajomy`)".
                " VALUES('$ownername', '$username')";
            if(mysql_query($q)){
                return BOOK_OK;
            }else{
                return BOOK_ERR_DB;
            }
        }else{
            return BOOK_ERR_UNKNOWN;
        }
    }



    /**
     * Usuwa wszystkie wpisy z ksiêgi, co jest równowa¿ne z usuniêciem ksiêgi.
     * @access public
     * @return boolean TRUE je¶li siê powiedzie, FALSE w przeciwnym wypadku.
     */
    function clear(){
        $username = $this->user->getName();
        if(!is_null($username)){
            $q = "DELETE FROM ". TBL_BOOK .
                " WHERE login = '$username'";
            if(mysql_query($q)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }



    /**
     * Sprawdza czy u¿ytkownik o podanje nazwie jest zapisany w ksiêdze.
     * @access public
     * @param string $username nazwa u¿ytkownika
     * @return boolean
     */
    function exists($username){
        if(count($this->friends_list) == 0){
            $this->getList();
        }

        return in_array($username, $this->friends_list);
    }



    /**
     * Zwraca aktualny limit ksiêgi go¶ci.
     * @access public
     * @return integer limit wpisów do ksiegi go¶ci
     */
    function getLimit(){
        $constraints = $this->user->getConstraint();
        if(!is_null($constraints)){
            return $constraints[C_BOOK_LIMIT];
        }else{
            return 0;
        }
    }



    /**
     * Zwraca listê znajomych jako warto¶ci w tablicy.
     * @access public
     * @param string $sort dwie mo¿liwo¶æi 'ASC' (domy¶lna), 'DESC'. Oczywi¶cie
     * chodzi o sortowanie ;).
     * @return array lista znajomych u¿ytkownika.
     */
    function getList($sort = 'ASC'){
        $this->friends_list = array();
        $username = $this->user->getName();

        if(!is_null($username)){

            $q = "SELECT `znajomy` FROM `". TBL_BOOK .
                "` WHERE `login`='$username' ORDER BY 1 $sort";
            if($r = mysql_query($q)){

                while($row = mysql_fetch_array($r, MYSQL_ASSOC)){
                    $this->friends_list[] = $row['znajomy'];
                }
            }
        }
        return $this->friends_list;
    }



    /**
     * Zwraca aktualny rozmiar ksiêgi znajomych (liczbê wpisów).
     * @access public
     * @return integer liczba wpisów
     */
    function getSize(){
        $ownername = $this->user->getName();
        if(!is_null($ownername)){

            $q = "SELECT COUNT(*) AS 'size' FROM `". TBL_BOOK .
                "` WHERE `login`='$ownername'";
            if($r = mysql_query($q)){
                $row = mysql_fetch_array($r, MYSQL_ASSOC);
                return $row['size'];
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }



    /**
     * Usuwa podanego u¿ytkoniwka z ksiêgi.
     * @access public
     * @param string $username nazwa u¿ytkownika do usuniêcia z ksiêgi.
     * @return boolean TRUE je¶li wszystko OK w przeciwnym razie FALSE
     */
    function remove($username){
        $ownername = $this->user->getName();
        if(!is_null($ownername)){

            $q = "DELETE FROM `". TBL_BOOK .
                "` WHERE `login`='$ownername' AND znajomy='$username' LIMIT 1";
            if(mysql_query($q)){
                if(count($this->friends_list) > 0){

                   $index = array_search($username, $this->friends_list);
                   if(is_integer($index)){
                       unset($this->friends_list[$index]);
                   }
                }else{

                    $this->getList();
                }
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }



    /**
     * Przycina rozmiar ksiêgi do wielko¶ci zadanje ograniczeniami u¿ytkownika
     * (constraint). Wpisy ucinane s± alfabetycznie od koñca.
     * @access public
     * @return void
     */
    function truncate(){
        $ownername = $this->user->getName();
        $limit = $this->getLimit();
        $size = $this->getSize();
        if(!is_null($ownername)){

            $sql_limit = max(0, $size-$limit);
            $q = "DELETE FROM `". TBL_BOOK ."` WHERE `login`='$ownername'".
                " ORDER BY `znajomy` DESC LIMIT $sql_limit";
            mysql_query($q);
        }
    }
}
?>
