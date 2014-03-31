<?

/**
 * Interfejs markera (znacznika). Nazwa markera ustawianego przez metodê
 * set() musi byæ nazw± unikaln±. Ka¿dy Marker jest dostêpny w ka¿dym momencie
 * na podstawie jego nazwy (czyli w szczególno¶ci musi byæ bezpiecznie dzielony
 * pomiêdzy sesjami).
 * @version 1.0.0
 */
interface Marker{


    /**
     * Ustawia znacznik na podan± warto¶æ.
     * @static
     * @access public
     * @param string $markerName nazwa markera
     * @param mixed $markerValue warto¶æ markera
     * @return boolean
     */
    public static function set($markerName, $markerValue);


    /**
     * Sprawdza czy marker o podanej nazwie istnieje.
     * @static
     * @access public
     * @param string $markerName nazwa markera
     * @return boolean
     */
    public static function exists($markerName);


    /**
     * Zwraca warto¶æ markera o podanej nazwie.
     * @static
     * @access public
     * @param string $markerName nazwa markera
     * @return mixed warto¶æ markera
     */
    public static function getValue($markerName);


    /**
     * Usuwa marker o podanej nazwie
     * @static
     * @access public
     * @param string $markerName nazwa markera
     */
    public static function remove($markerName);
}

?>