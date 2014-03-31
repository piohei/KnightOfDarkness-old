<?php
define('PARAM.CONSTRAINT', true);



/*******************************************************************************
 * Definicje okre�lanj�ce ograniczenia.
 */
define('C_MESSAGEBOX_LIMIT',            0x01);
define('C_MESSAGEBOX_RAPORT',           0x02);
define('C_LOGO_ENABLED',                0x03);
define('C_MARKETSTAT_ENABLED',          0x04);
define('C_BOOK_LIMIT',                  0x05);



/*******************************************************************************
 * Domyslne ustawienia dla ogranicze� u�ytkownika. Je�li uzytkownik nie ma
 * wykupionych dodatkowych rozszerze� zostanie mu przyznane domy�lne, czyli
 * w�a�nie to kt�re jest tutaj ustawione.
 */

// limit wiadomo�ci w skrzynce wiadomo�ci wys�anych/odebranych
$_DEFAULT_CONSTRAINT[C_MESSAGEBOX_LIMIT]        =   40;

// limit raport�w
$_DEFAULT_CONSTRAINT[C_MESSAGEBOX_RAPORT]       =   10;

// w��czona (1)/wy��czona (0) mo�liwo�c �adowania logo kr�lestwa
$_DEFAULT_CONSTRAINT[C_LOGO_ENABLED]            =   1;

// w��czona (1)/wy��czona (0) us�uga statystyk na targu
$_DEFAULT_CONSTRAINT[C_MARKETSTAT_ENABLED]      =   0;

// limit kr�lestw w ksi�dze znajomych
$_DEFAULT_CONSTRAINT[C_BOOK_LIMIT]              =   10;
?>