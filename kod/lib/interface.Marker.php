<?

/**
 * Interfejs markera (znacznika). Nazwa markera ustawianego przez metod�
 * set() musi by� nazw� unikaln�. Ka�dy Marker jest dost�pny w ka�dym momencie
 * na podstawie jego nazwy (czyli w szczeg�lno�ci musi by� bezpiecznie dzielony
 * pomi�dzy sesjami).
 * @version 1.0.0
 */
interface Marker{


    /**
     * Ustawia znacznik na podan� warto��.
     * @static
     * @access public
     * @param string $markerName nazwa markera
     * @param mixed $markerValue warto�� markera
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
     * Zwraca warto�� markera o podanej nazwie.
     * @static
     * @access public
     * @param string $markerName nazwa markera
     * @return mixed warto�� markera
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