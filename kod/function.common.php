<?php
/**
 * Tymczasowo tu umieszczone pokazywanie/ukrywanie shoutboxa
 */
if (isset($_GET['pokaz_shoutbox'])){
	$_SESSION['pokaz_shoutbox']=$_GET['pokaz_shoutbox'];
}



/**
 * Zbi�r funkcji includowany automatycznie z plikiem config.php.
 */



/**
 * Domy�lne funkcje przekazywane do metody 'auth_sid' obiektu 'User' wykonywane
 * odpowiednio: auth_success - po poprawnej autoryzacji u�ytkownika,
 * auth_failed - po niepoprawnej autoryzacji.
 */
function auth_success(&$user){
    if(!defined('CLASS.USER')) die('function auth_success require class.User.php');

    // NIC NIE ROBI ;)
}

function auth_filed($err){
    if(!defined('CLASS.USER')) die('function auth_filed require class.User.php');
    global $CFG;
	header("Location: {$CFG->adresSerwera}login/niezalogowany.php?reason=cookie");
    exit(0);
}



/**
 * Funkcja koduj�ca ci�g znak�w za pomoc� podanego klucza
 * @param string $data ci�g znak�w do zakodowania
 * @param string $string_key klucz koduj�cy
 * @return string zakodowany ci�g, lub NULL w przypadku b��du
 */
function encode_data($data, $string_key){
    if(($key_len = strlen($string_key)) <= 0) return NULL;

    $out_string = "";
    $data_len = strlen($data);
    for($i = 0, $j = 0; $i < $data_len; $i++, $j = ($j+1)%$key_len){
        $out_string .= chr((ord($data{$i}) + ord($string_key{$j})) % 255);
    }
    return $out_string;
}



/**
 * Funckja dekoduj�ca ciag znak�w przy uzyciu klucza
 * @param string $data ci�g do rozkodowania
 * @param string $string_key klucz dekoduj�cy
 * @return string rozkodowany ci�g znak�w lub NULL w przypadku b��du
 */
function decode_data($data, $string_key){
    if(($key_len = strlen($string_key)) <= 0) return NULL;

    $out_string = "";
    $data_len = strlen($data);
    for($i = 0, $j = 0; $i < $data_len; $i++, $j = ($j+1)%$key_len){
        $out_string .= chr((255 + ord($data{$i}) - ord($string_key{$j})) % 255);
    }
    return $out_string;
}



/**
 * Dodaje kolejn� lini� to pliku log. Je�li podany plik nie istnieje zostanie
 * utworzony nowy.
 * @param string $filename nazwa pliku
 * @param string $line linia do dodania do pliku (bez znaku ko�ca linii \n)
 * @param integer $max_filesize aksymalna wielko�� pliku w bajtach. Je�li plik
 * log przekroczy t� warto�� robiona jest jego kipia nazywaj�ce si�
 * <$filename>.<znacznik czasu timestamp>. Parametr jest opcjonalny. Je�li go
 * nie podamy to plik nie b�dzie mia� ograniczenia na rozmiar.
 * @return boolean
 */
function logfile_append($filename, $line, $max_filesize = NULL){

    // przygotowanie pliku do zapisu
    if(!file_exists($filename)){

        // pr�ba utworzenia pliku
        if($fh = fopen($filename, 'w')){
            chmod($filename, 0777);
        }else{
            return false;
        }
    }else{
        if(!is_null($max_filesize) && is_int($fsize = filesize($filename))){
            if($max_filesize < $fsize){

                // zmiana nazwy pliku, utworzenie nowego
                $new_filename = "$filename." . time();
                if(rename($filename, $new_filename)){
                    if($fh = fopen($filename, 'w')){
                        chmod($filename, 0777);
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }
        }

        if(!isset($fh)){
            if(!$fh = fopen($filename, 'a')) return false;
        }
    }


    // zapis danych
    if(flock($fh, LOCK_EX)){
        if(fwrite($fh, "$line\n")){
            return true;
        }else{
            return false;
        }
        fclose($fh);
    }else{
        return false;
    }
}
?>