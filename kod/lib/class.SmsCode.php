<?php
defined('CONST') or die('class.SmsCodeManager.php require const.php');


/**
 * @ignore
 */
define('CLASS.SMSCODE', true);


/**
 * Klasa reprezentuj±ca kod sms z us³ugi SMS PREMIUM.
 * Do poprawnego dzia³ania wymaga otwartego po³±czenia z baz± danych.
 * @author Micha³ Kozak
 * @version 1.0.0
 */
class SmsCode{


    /**
     * Kod sms.
     * @access private
     * @var string
     */
    var $code;


    /**
     * Warto¶æ kodu sms z przedzia³u [0,255]
     * @access private
     * @var integer
     */
    var $value;


    /**
     * Konstruuje obiekt kodu sms. Jako parametr przyjmuje oczywi¶cie kod sms ;).
     * @access public
     */
    function SmsCode($sms_code){
        $this->code = $sms_code;
    }



    /**
     * Sprawdza czy kod jest poprawny i nadaje siê do u¿ycia.
     * @access public
     * @return boolean
     */
    function isValid(){

        $q = "SELECT * FROM `". TBL_SMSCODES ."` ".
            "WHERE `code`='{$this->code}'";
        if($r = mysql_query($q)){
            if($row = mysql_fetch_array($r, MYSQL_ASSOC)){
                if($row['code'] == $this->code){
                    $this->value = $row['value']; // zbuforowanie warto¶ci
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
     * Zwraca warto¶æ dla kodu sms (warto¶æ do³adowania konta).
     * Warto¶æ ta jest liczb± ca³kowit± z przedzia³u [0,255].
     * @access public
     * @return mixed zwraca FALSE je¶li wyst±pi³y jakie¶ b³edy, a je¶li
     * wszystko jest w prz±dku zwraca liczbê ca³kowit± z przedzia³u [0,255]
     * oznaczaj±c± warto¶æ kodu.
     */
    function getValue(){

        if(isset($this->value)){
            settype($this->value, 'integer');
            return $this->value;
        }

        $q = "SELECT * FROM `". TBL_SMSCODES ."` ".
            "WHERE `code`='{$this->code}'";
        if($r = mysql_query($q)){
            if($row = mysql_fetch_array($r, MYSQL_ASSOC)){
                $this->value = $row['value'];
                settype($this->value, 'integer');
                return $this->value;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }



    /**
     * £aduje nowe kdy SMS do bazy danych. Jako argument przyjmuje tablicê
     * kodów. Nie sprawdza ich poprawno¶ci... poprostu ³aduje.
     * @static
     * @access public
     * @param string $service_code kod us³ugi, czyli tre¶æ sms'a wysy³anego
     * jako ¿±danie po kod (max 16 znaków).
     * @param array $codes tablica kodów do dodania
     * @param integer $value warto¶æ kodów w tablicy $codes [0,255]
     * @return boolean
     */
    function load($service_code, $codes, $value){

        if(!settype($value, 'integer') || $value < 0 || $value > 255){
            return false;
        }

        $service_code = (string)$service_code;
        if(empty($service_code)){
            return false;
        }

        if(!empty($codes)){

            $q = "INSERT INTO `". TBL_SMSCODES ."` VALUES";
            foreach($codes as $code){
                $q .= "('$service_code', '$code', $value),";
            }
            $q = substr($q, 0, -1);
            if(mysql_query($q)){
                if(mysql_affected_rows() == count($codes)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return true;
        }
    }


    /**
     * Usuwa poprawny kod sms, czyni±c go tym samym "zu¿ytym". Takiego
     * kodu ju¿ nie mo¿na u¿yæ ponownie, a metoda isValidCode() zwróci
     * dla niego false. Operacja ta jest logowana w bazie danych w tabeli
     * TBL_SMSLOG.
     * @access public
     * @param User $user obiekt u¿ytkownika który wykorzystuje kod sms.
     * @return boolean TRUE je¶li operacja zakoñczy siê bezb³êdnie w przeciwnym
     * razie FALSE
     */
    function remove(&$user){

        $username = $user->getName();
        if(is_null($username)){
            return false;
        }

        $q = "DELETE FROM `". TBL_SMSCODES ."` ".
            "WHERE `code`='{$this->code}'";
        if(mysql_query($q) && mysql_affected_rows() == 1){

            // logowanie do tabeli TBL_SMSLOG
            $q = "INSERT INTO `". TBL_SMSLOG ."` VALUES(".
                "'$username', '{$this->code}', {$this->value}, NOW())";
            mysql_query($q);
            return true;
        }else{
            return false;
        }
    }


    /**
     * Generuje statystyke z dostêpnych i aktywnych kodow.
     * @static
     * @access public
     * @return array
     */
    function stat(){

        $ret_array = array();
        $q = "SELECT `service_code`, `value`, COUNT(*) AS 'count'
            FROM `". TBL_SMSCODES ."` GROUP BY `service_code`, `value`
            ORDER BY `value` DESC";
        if($r = mysql_query($q)){
            while($row = mysql_fetch_array($r)){
                $ret_array[] = $row;
            }
        }

        return $ret_array;
    }
}
?>
