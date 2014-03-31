<?php
/**
 * Sprawdza integralno¶æ królestw i koalicji
 */
 
require_once('../config.php');
require_once('../const.php');
require_once('../mysql.connection.php');
header('Content-Type: text/plain; charset=iso-8859-2');

print "-----------------------------------------------------------------\n";
print "Test 1: Poszukiwanie graczy bêd±cych w nieistniej±cych koalicjach\n";
print "-----------------------------------------------------------------\n";
$q = "SELECT nazwa, koalicja FROM ". TBL_KINGDOM ." WHERE koalicja IS NOT NULL";
$r = mysql_query($q);
while($row = mysql_fetch_array($r)){
    $q = "SELECT * FROM ". TBL_COALITION .
        " WHERE nazwa LIKE BINARY '{$row['koalicja']}'";
    $sr = mysql_query($q);
    if(mysql_num_rows($sr) == 0){
        print "{$row['nazwa']} : {$row['koalicja']} -> NIE ISTNIEJE";
        
        //naprawianie
        $q = "UPDATE ". TBL_KINGDOM ." SET koalicja=NULL WHERE nazwa LIKE BINARY '{$row['nazwa']}'";
        if(mysql_query($q)) print "\t OK (naprawiono)\n";
        else print "ERR\n";
    }

}
print "-> ZAKOÑCZONO\n";



print "\n\n\n\n";
print "--------------------------------------------\n";
print "Test 2: Naprawianie ilo¶ci cz³onkow koalicji\n";
print "--------------------------------------------\n";
$q = "SELECT K1.nazwa, K1.ilosc_czlonkow, COUNT(*) AS 'real' FROM ".TBL_COALITION." K1 INNER JOIN ".TBL_KINGDOM." K2 ON K1.nazwa=K2.koalicja GROUP BY K1.nazwa, K1.ilosc_czlonkow HAVING COUNT(*) != K1.ilosc_czlonkow";
$r = mysql_query($q);
if(mysql_num_rows($r) > 0){
    while($row = mysql_fetch_array($r)){
        print "{$row[0]} : ilosc_czlonkow={$row[1]} : zliczono={$row[2]}";
        $q = "UPDATE ". TBL_COALITION ." SET ilosc_czlonkow={$row[2]} WHERE nazwa LIKE BINARY '{$row[0]}'";
        if(mysql_query($q)) print "\t OK (naprawiono)\n";
        else print "\t ERR\n";
    }
}
print "-> ZAKOÑCZONO\n";



print "\n\n\n\n";
print "-------------------------------------------------------\n";
print "Test 3: Usuwanie zaproszeñ do nie istniej±cych koalicji\n";
print "-------------------------------------------------------\n";
$q = "SELECT Z.id, K.nazwa FROM ".TBL_INVITES." Z LEFT JOIN ".TBL_COALITION." K ON Z.nazwa_koalicji LIKE BINARY K.nazwa WHERE K.nazwa IS NULL";
$r = mysql_query($q);
$q = "DELETE FROM ". TBL_INVITES ." WHERE id IN(";
while($row = mysql_fetch_array($r)){
    $q .= "$row[0],";
}
$q = rtrim($q, ',') . ")";
if(mysql_query($q)) print "ZLIKWIDOWANO: ". mysql_affected_rows() ."\n";
print "-> ZAKOÑCZONO\n";



print "\n\n\n\n";
print "-------------------------------------------\n";
print "Test 4: Sprawdzanie zgodno¶ci z tabel± INFO\n";
print "-------------------------------------------\n";
$q = "SELECT COUNT(*) FROM ". TBL_COALITION;
if($r = mysql_query($q)){
    $row = mysql_fetch_array($r);
    $count = $row[0];
    $q = "SELECT liczba_koalicji FROM ". TBL_INFO;
    $r = mysql_query($q);
    $row = mysql_fetch_array($r);
    $info = $row[0];
    if($info != $count){
        $q = "UPDATE ". TBL_INFO ." SET liczba_koalicji=$count";
        if(mysql_query($q)) print "zaktualizowano $info -> $count\n";
        else print "b³±d podczas zmieniania ERR\n";
    }
}
print "-> ZAKOÑCZONO\n";
?>
