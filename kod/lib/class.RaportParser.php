<?php
/**
 * RaportParser zajmuje siê parsowaniem raportów. Czyli otrzyumje surowe dane
 * (najczê¶ciej liczbowe) pobrane z bazy danych i generuje czytelny dla
 * u¿ytkonika raport.
 *
 * Postaæ ogólna raportu 'surowego' w bazie danych wygl±da nastêpuj±co:
 * <code>
 * <3 literowy identyfikator raportu>: <dane do parsowania>
 * </code>
 *
 * Przyklad:
 * <code>
 * war:Gandalf,Kartagina,100,200
 * </code>
 *
 * Co mo¿e oznaczaæ, ¿e raport nazywa siê 'war' (na podstawie tego identyfikatora
 * wybierany jest parser do parsowania <dane do paroswania>, który trzeba
 * napisaæ i umie¶ciæ w odpowiednim katalogu - o tym ni¿ej), a dane do parsowania:
 * Gandalf,Kartagina,100,200 mog± zostaæ interpretowane tak, ¿e to królestwo
 * Gandalf atakowa³o królestwo Kartagina i Gandalf mia³o 100 ¿o³nierzy a Kartagina
 * 200.
 *
 * Zasady jak tworzyæ w³asny parser:
 * 1. Ka¿dy parser tworzy siê w osobnym pliku, który jest umieszczany w katalogu
 *    lib/raport_parsers/. Nazwa pliku parsera musi byæ zgodna z standardami
 *    w PHP nazw funkcji. Czyli <naza_pliku_parsera>.php.
 *
 * 2. Rejestrujemy nowy plik parsera w klasie class.RaportParser.php. Nale¿y
 *    poprostu wyedytowaæ plik lib/class.RaportParser.php i dodaæ skojarzenie
 *    do tablicy $_PARSERS wi±¿±ce nasz plik parsera z 3 literowym identyfiaktorem
 *    raportu, na przyk³ad:
 *    <code>
 *    $_PARSERS = array(
 *        'war'         => 'war_parser.php'
 *    );
 *    </code>
 *
 * 3. Teraz edytujemy nasz plik parsera umieszczony ju¿ w lib/raport_parsers.
 *    Niech nazywa siê przyk³adowo war_parser.php. W pliku tym musi siê
 *    znajdowaæ jedna funkcja o nazwie war_parser($raw_data, &$out),
 *    która jako argumenty przyjmuje: $raw_data - surowy raport z bazy danych,
 *    referencjê &$out, przez któr± po ukoñczeniu dzia³ania funkcji zostanie
 *    przekazany wynik parsowania (gotowy raport). Ostatnim argumentem jest
 *    $param i jego warto¶æ domy¶lna ustawiona jest NULL. S³uzy on do
 *    przekazania niekiedy dodatkowych parametrów do parsera.
 *    Funkcja dodatkowo powinna
 *    zwracaæ TRUE w przypadku bezb³êdnego parsowania oraz FALSE w przypadku
 *    jakich¶ b³êdów.
 *    W pliku oczywi¶cie mog± znajdowaæ siê inne funkcje pomocnicze, ale zawsze
 *    musi byæ jedna opisana jak wy¿ej o nazwie zgodnej z nazw± pliku, ale
 *    bez rozszerzenia.
 */
 define('CLASS.RAPORTPARSER', true);

 defined('CONFIG') or die('class.RaportParser.php require config.php');




/**
 * Tablica obs³ugiwanych parserów.
 * var array
 */
$_PARSERS = array(
    'cl1' => 'coalition_quit.php',      // parser raportów z rozwi±zania koalicji
    'mrk' => 'market_parser.php',       // parser raportow z rynku
    'atk' => 'attack_parser.php',       // parser raportow z wojen
    'spy' => 'spy_attack_parser.php',       // parser raportow z wojen szpiegowskich
    'bud' => 'building_attack_parser.php',       // parser raportow z wojen szpiegowskich
    'sim' => 'simple_parser.php',       // prosty parser
    'tor' => 'torture_parser.php',		// parser raportow z torturowania szpiegów
    'cst' => 'castle_parser.php'
);



/**
* Klasa obs³uguj±ca parsowanie raportów.
*/
class RaportParser{



    /**
    * Metoda parsuj±ca raport z bazy danych.
    * @access public
    * @param string $raw_data - surowe dane do parsowania
    * @param string $out - dane wyj¶ciowe po parsowaniu
    * @param mixed $param - dodatkowe parametry dla parsera (domyslnie NULL)
    * @return boolean TRUE je¶li zakoñczy siê sukcesem, w przeciwnym razie FALSE
    */
    function parse($raw_data, &$out, $param = NULL){
        global $CFG;
        global $_PARSERS;

        // pobieranie identyfikatora (3 literowego) z $raw_data
        $parser_data = explode(':', $raw_data, 2);

        // wybór odpowiedniego parsera
        $parser_file = $_PARSERS[$parser_data[0]];
        if(!empty($parser_file)){

            // za³adowanie plku parsera
            $full_path = "{$CFG->katalogStrony}lib/raport_parsers/$parser_file";
            if(file_exists($full_path)){

                // za³adowanie i uruchomienie parsera
                require_once($full_path);
                $parser_function = basename($parser_file, '.php');
                if(!function_exists($parser_function)){

                    // nie odnaleziono funkcji parsuj±cej
                    die('Parser file loaded but parser function not found!');
                }

                // parsowanie i zwrócenie rezultatu
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
