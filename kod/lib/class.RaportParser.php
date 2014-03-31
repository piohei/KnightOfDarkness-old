<?php
/**
 * RaportParser zajmuje si� parsowaniem raport�w. Czyli otrzyumje surowe dane
 * (najcz�ciej liczbowe) pobrane z bazy danych i generuje czytelny dla
 * u�ytkonika raport.
 *
 * Posta� og�lna raportu 'surowego' w bazie danych wygl�da nast�puj�co:
 * <code>
 * <3 literowy identyfikator raportu>: <dane do parsowania>
 * </code>
 *
 * Przyklad:
 * <code>
 * war:Gandalf,Kartagina,100,200
 * </code>
 *
 * Co mo�e oznacza�, �e raport nazywa si� 'war' (na podstawie tego identyfikatora
 * wybierany jest parser do parsowania <dane do paroswania>, kt�ry trzeba
 * napisa� i umie�ci� w odpowiednim katalogu - o tym ni�ej), a dane do parsowania:
 * Gandalf,Kartagina,100,200 mog� zosta� interpretowane tak, �e to kr�lestwo
 * Gandalf atakowa�o kr�lestwo Kartagina i Gandalf mia�o 100 �o�nierzy a Kartagina
 * 200.
 *
 * Zasady jak tworzy� w�asny parser:
 * 1. Ka�dy parser tworzy si� w osobnym pliku, kt�ry jest umieszczany w katalogu
 *    lib/raport_parsers/. Nazwa pliku parsera musi by� zgodna z standardami
 *    w PHP nazw funkcji. Czyli <naza_pliku_parsera>.php.
 *
 * 2. Rejestrujemy nowy plik parsera w klasie class.RaportParser.php. Nale�y
 *    poprostu wyedytowa� plik lib/class.RaportParser.php i doda� skojarzenie
 *    do tablicy $_PARSERS wi���ce nasz plik parsera z 3 literowym identyfiaktorem
 *    raportu, na przyk�ad:
 *    <code>
 *    $_PARSERS = array(
 *        'war'         => 'war_parser.php'
 *    );
 *    </code>
 *
 * 3. Teraz edytujemy nasz plik parsera umieszczony ju� w lib/raport_parsers.
 *    Niech nazywa si� przyk�adowo war_parser.php. W pliku tym musi si�
 *    znajdowa� jedna funkcja o nazwie war_parser($raw_data, &$out),
 *    kt�ra jako argumenty przyjmuje: $raw_data - surowy raport z bazy danych,
 *    referencj� &$out, przez kt�r� po uko�czeniu dzia�ania funkcji zostanie
 *    przekazany wynik parsowania (gotowy raport). Ostatnim argumentem jest
 *    $param i jego warto�� domy�lna ustawiona jest NULL. S�uzy on do
 *    przekazania niekiedy dodatkowych parametr�w do parsera.
 *    Funkcja dodatkowo powinna
 *    zwraca� TRUE w przypadku bezb��dnego parsowania oraz FALSE w przypadku
 *    jakich� b��d�w.
 *    W pliku oczywi�cie mog� znajdowa� si� inne funkcje pomocnicze, ale zawsze
 *    musi by� jedna opisana jak wy�ej o nazwie zgodnej z nazw� pliku, ale
 *    bez rozszerzenia.
 */
 define('CLASS.RAPORTPARSER', true);

 defined('CONFIG') or die('class.RaportParser.php require config.php');




/**
 * Tablica obs�ugiwanych parser�w.
 * var array
 */
$_PARSERS = array(
    'cl1' => 'coalition_quit.php',      // parser raport�w z rozwi�zania koalicji
    'mrk' => 'market_parser.php',       // parser raportow z rynku
    'atk' => 'attack_parser.php',       // parser raportow z wojen
    'spy' => 'spy_attack_parser.php',       // parser raportow z wojen szpiegowskich
    'bud' => 'building_attack_parser.php',       // parser raportow z wojen szpiegowskich
    'sim' => 'simple_parser.php',       // prosty parser
    'tor' => 'torture_parser.php',		// parser raportow z torturowania szpieg�w
    'cst' => 'castle_parser.php'
);



/**
* Klasa obs�uguj�ca parsowanie raport�w.
*/
class RaportParser{



    /**
    * Metoda parsuj�ca raport z bazy danych.
    * @access public
    * @param string $raw_data - surowe dane do parsowania
    * @param string $out - dane wyj�ciowe po parsowaniu
    * @param mixed $param - dodatkowe parametry dla parsera (domyslnie NULL)
    * @return boolean TRUE je�li zako�czy si� sukcesem, w przeciwnym razie FALSE
    */
    function parse($raw_data, &$out, $param = NULL){
        global $CFG;
        global $_PARSERS;

        // pobieranie identyfikatora (3 literowego) z $raw_data
        $parser_data = explode(':', $raw_data, 2);

        // wyb�r odpowiedniego parsera
        $parser_file = $_PARSERS[$parser_data[0]];
        if(!empty($parser_file)){

            // za�adowanie plku parsera
            $full_path = "{$CFG->katalogStrony}lib/raport_parsers/$parser_file";
            if(file_exists($full_path)){

                // za�adowanie i uruchomienie parsera
                require_once($full_path);
                $parser_function = basename($parser_file, '.php');
                if(!function_exists($parser_function)){

                    // nie odnaleziono funkcji parsuj�cej
                    die('Parser file loaded but parser function not found!');
                }

                // parsowanie i zwr�cenie rezultatu
                if(is_null($param)){
                    return $parser_function($parser_data[1], $out);
                }else{
                    return $parser_function($parser_data[1], $out, $param);
                }
            }else{

                // plik parsera nie istnieje
                die('Parser registered but not found!');
            }
        }else{

            // parser nie jest zarejestrowany w tablicy $_PARSERS
            die("Parser not registered! ({$parser_data[0]})");
        }
    }
}
?>
