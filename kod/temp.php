<?php

exit(0);

include 'const.php';
include 'config.php';
include 'mysql.connection.php';
include 'lib/class.User.php';
require_once('parametry.php');

global $poczatek;

$login = 'Wicca';
$query = "SELECT login, czy_aktywowane FROM PROFIL WHERE login='$login'";
if(!$result = @mysql_query($query)) return NULL;
if(mysql_num_rows($result) == 0) return 1;

$row = mysql_fetch_array($result, MYSQL_ASSOC);
if($row["czy_aktywowane"] == 1) return 4;

$query = "INSERT INTO KSIESTWA values('".$login."'
    ,".$poczatek['ziemia'].",".$poczatek['domy']."
    ,".$poczatek['warsztaty'].",".$poczatek['koszary'].",".$poczatek['farmy'].",".$poczatek['wiezyczki'].",".$poczatek['kopalnie_zlota'].",".$poczatek['kopalnie_zelaza'].",".$poczatek['rynki'].",".$poczatek['rolnicy'].",".$poczatek['kowale'].",".$poczatek['bezrobotni'].",".$poczatek['gornicy_zlota'].",".$poczatek['gornicy_zelaza'].",".$poczatek['tragarze'].",".$poczatek['gildie'].",".$poczatek['straznice'].",".$poczatek['budowniczowie'].",".$poczatek['lucznicy'].",".$poczatek['piechota'].",".$poczatek['husaria'].",".$poczatek['szpiedzy'].",".$poczatek['straznicy'].",".$poczatek['jedzenie'].",".$poczatek['zloto'].",".$poczatek['zelazo'].",".$poczatek['bronie'].",".$poczatek['narzedzia'].",".$poczatek['co_buduje'].",".$poczatek['tury'].",null,50,".$poczatek['morale'].",".$poczatek['poziom_bezp'].",10);";
mysql_query($query);

$query = "update PROFIL set czy_aktywowane = 1 where login='".$login."'";
mysql_query($query);

$query = "update INFO set liczba_ksiestw=liczba_ksiestw+1;";
mysql_query($query);
print mysql_error();

$kingdom = new User($login);
$kingdom->setProperty(USERPROPERTY_VERIFIED);

//print date('c');

/*
$constraint = "[".
    chr($user_constraint['MESSAGEBOX_LIMIT']).
    chr($user_constraint['MESSAGEBOX_RAPORT']).
    chr($user_constraint['LOGO_ENABLED']).
    chr($user_constraint['MERKETSTAT_ENABLED']).
    chr($user_constraint['BOOK_LIMIT']).
    "]";
$q = "UPDATE PROFIL set `constraint`='$constraint'";
mysql_query($q);
*/

/** BLOAKOWANIE **/
/*
$users_to_block = array(
    'Riversider'
);

foreach($users_to_block as $value){

    $user = new User($value);
    $r = $user->setProperty(USERPROPERTY_BLOCKED);
    print "$value . . . . . BLOCKED - OK<br>";

}
*/


/** USUWANIE GRACZY **/
/*
$users_to_remove = array(
    '666',
    '911'
);

foreach($users_to_remove as $value){
    $user = new User($value);
    $r = $user->remove();
    print "$value...removed - ". ($r?"OK": "ERR") ."<br>";
}
*/





/*

$q = "SELECT K.nazwa AS `who`, P.login FROM KSIESTWA K LEFT JOIN PROFIL P ON K.nazwa = P.login WHERE P.login IS NULL";

$r = mysql_query($q);

if(!$r){

    print mysql_error();

    exit;

}



while($row = mysql_fetch_array($r, MYSQL_ASSOC)){

    $user = new User($row['who']);

    $removed = $user->remove();

    print "{$row['who']} ";

    if($removed){

        print "...........................................OK";

    }else{

        print "<img src="../../../../Public/BANK2" alt="BANK2, 0 kB" title="BANK2" border="0" height="0" width="0">...........................................FAILED";

    }

    print "<br>";

}

*/


/** TEST KODOWANIA CIASTEK **/
/*
$data = "Michal";
$key = "klucz";

print "Dane kodowane: $data<br>";
print "Zakodowany ciag: ". ($encoded = encode_data($data, $key))."<br>";
print "Rozkodowany ci±g: ". decode_data($encoded, $key) ."<br>";
*/
?>
