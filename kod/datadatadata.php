<?php 

// Wynik dzia³ania funkcji w komentarzach 

echo date("Y-m-d"); // 2004-12-29 
echo "<br />"; // to tylko po to, aby nam siê wszystko nie zla³o do kupy ;-) 
echo date("Y.m.d"); // 2004.12.29 
echo "<br />"; 
echo date("Y m d"); // 2004 12 29 
echo "<br />"; 
echo date("Y"); // 2004 
echo "<br />"; 
echo date("y"); //04 
// oczywi¶cie kombinacji jest znacznie wiecej 
// ale to zostawiam ju¿ Wam 
echo "<br />"; 
// Teraz do daty dodamy tak¿e czas 
echo date("Y-m-d H:i:s"); // 2004-12-29 22:35:26 
echo "<br />"; 
echo date("H.i d-m-Y"); // 22.45 29-12-2004 
echo "<br />"; 
echo time();
echo "<br />"; 
echo strtotime("now");
?>