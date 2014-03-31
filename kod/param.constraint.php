<?php
define('PARAM.CONSTRAINT', true);



/*******************************************************************************
 * Definicje okre¶lanj±ce ograniczenia.
 */
define('C_MESSAGEBOX_LIMIT',            0x01);
define('C_MESSAGEBOX_RAPORT',           0x02);
define('C_LOGO_ENABLED',                0x03);
define('C_MARKETSTAT_ENABLED',          0x04);
define('C_BOOK_LIMIT',                  0x05);



/*******************************************************************************
 * Domyslne ustawienia dla ograniczeñ u¿ytkownika. Je¶li uzytkownik nie ma
 * wykupionych dodatkowych rozszerzeñ zostanie mu przyznane domy¶lne, czyli
 * w³a¶nie to które jest tutaj ustawione.
 */

// limit wiadomo¶ci w skrzynce wiadomo¶ci wys³anych/odebranych
$_DEFAULT_CONSTRAINT[C_MESSAGEBOX_LIMIT]        =   40;

// limit raportów
$_DEFAULT_CONSTRAINT[C_MESSAGEBOX_RAPORT]       =   10;

// w³±czona (1)/wy³±czona (0) mo¿liwo¶c ³adowania logo królestwa
$_DEFAULT_CONSTRAINT[C_LOGO_ENABLED]            =   1;

// w³±czona (1)/wy³±czona (0) us³uga statystyk na targu
$_DEFAULT_CONSTRAINT[C_MARKETSTAT_ENABLED]      =   0;

// limit królestw w ksiêdze znajomych
$_DEFAULT_CONSTRAINT[C_BOOK_LIMIT]              =   10;
?>