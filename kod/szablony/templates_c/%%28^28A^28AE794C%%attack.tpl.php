<?php /* Smarty version 2.6.11, created on 2010-11-11 16:13:58
         compiled from /home/piwnik/domains/kod-online.eu/public_html/szablony/templates/help/attack.tpl */ ?>
<p><b>Typy ataku:</b> W KoD-zie jest dost�pne kilka typ-�w ataku kt�re zostan� poni�ej wyjasnione:
<p><b>Typ Gospodarka:</b> Atakujesz przy u�yciu �ucznik�w piechoty i husari ksi�stwo i je�eli wys�ane wojsko zdo�a pokona� armie
wroga to niszczysz mu cz�� budynk�w i zabierasz troche jego ziemi. 
</p>
<p><b>Typ Ziemia:</b> Ten typ ataku r�ni si� od poprzedniego tylko tym �e zadajesz mniejsze straty gospodarce wroga, 
ale za to mo�esz zdoby� wi�cej ziemi.Ilo�� zdobywanej ziemi zale�y mi�dzy innymi od tego jaka jest r�nica 
w wielko�ci pomi�dzy atakowanym i atakujacym dlatego nie op�aca si� atakowa� znacznie mniejszych ksi�stw bo 
po prostu mo�emy nic na tym nie zyska� <br> <b>UWAGA: Mo�na zdobywa� tylko niezabudowan� ziemie !!</b> 
</p>
<p><b>Typ Budynek koalicji:</b> W tym typie ataku celem nie jest pojedyncze ksi�stwo ale po�rednio cala 
koalicji staraj�ca si� zako�czy� ere. Jako cel ataku wpisujesz nazwe koalicji i je�eli ona buduje "budynek koalicji" to go atakujesz.
</p>
<p><b>Typ Szpiegowanie:</b> Tutaj wysy�asz szpieg�w aby zdobyli oni informacje o wrogim ksi�stwie i prawdopodobie�stwo 
sukcesu ro�nie liniowo i zale�y od liczby wys�anych szpieg�w i stra�nik�w w szpiegowanym ksi�stwie. 
<!-- Przy tej samej ilosci szpieg�w i stra�nik�w prawdopodobie�stow sukcesu wynosi 50%.
 --> 
</p>
<p><b>Typ Podpalanie:</b> Te� jest to atak szpiegowski tylko tym razem zamiast zbierac informacje
 szpiedzy b�d� si� starali uszkodzi� jeden z bydynk�w specjalnych. 
<!-- Przy tej samej ilosci szpieg�w i stra�nik�w prawdopodobie�stow sukcesu wynosi 25%.
--> 
<br> Watro te� przypomnie�, �e nawet minimalnie uszkodzony budynek specjalny nie przynosi zadnego bonusu do czasu odbudowania !!.
</p>
</p>
<p><b>Typ Kradzie�:</b> Kolejny atak szpiegowski, kradzie� s�u�y do wykradania syrowc�w i z�ota z okradanego ksi�stwa. 
</p>
<p><b>Typ Skrytob�jstwo:</b> Atak szpiegowski polegaj�cy na zabijaniu ludno�ci zamieszkuj�cej atakowane ksi�stwo.
</p>
<p><b>Typ Koalicyjny:</b> Ten typ umo�liwia wsp�lny atak wszystkim cz�onkom koalicji. Je�eli atak wysy�a koalicjant, 
ale nie cesarz to nie musi wpisywa� celu bo wojska s� wysy�ane do cesarza, wybieramy tutaj tylko jak� cz�sci� swojej armi 
chcemy wspom�c atak naszego w�adcy. Aby nasze wojska uczestnicz�y w ataku nale�y zrobi� 8 tur aby na 
liczniku pojawi�a sie warto�� 0 wtedy nasze oddznia�y s� ju� do dyspozycji cesarza
. Je�eli atak wysy�a cesarz to musi on wybra� cel, a atak 
trwa ju� nietypowo bo 16 tur (droga nie skraca tego ataku.). Ka�dy z koalicjant�w na li�cie atak�w widzi tylko sw�j, 
ale w chwili gdy cesarz zrobi 16 ture to zostanie przeprowadzony atak na normalnych zasadach z 3 tylko r�znicami:<br>
- Armia atakuj�cego to b�dzie suma wszystkich atak�w koalicyjnych w danej koalicji<br>
- W tym typie ataku nie zdobywa si� ziemi<br>
- Strary rozk�adaj� si� proporcjonalnie na wszystkich uczestnikow ataku <br>
Poniewa� jest to atak cesarza to brane s� pod uwage tylko bonusy z jego budynk�w specjalnych i raport z ataku te� otrzymuje tylko cesarz
</p>
<p><b>Typ Obl�enie:</b> U�ywaj�c tego ataku mo�na przej�� wrogi zamek, ten atak niszczy mniej gospodarki ni� atak na gospodarke i
zabiera mniej ziemi ni� atak na ziemie.
</p>
<p><b>Typ Propaganda:</b> Udany atak obni�a morale wrogiego ksi�stwa. Atakuj�ce nie mo�na obni�y� morale poni�ej -20.
</p>
</p>
<p>Ka�dy atak ma jeszcze jeden wa�ny parametr czas dotarcia do celu i wynosi on 8 tur.
 Mo�e on jednak by� skr�cony nawet do 3  przez budynek specjalny droga.<br>
<b>UWAGA: Minimalny czas dotarcia wojsk do celu to 3 tury !!!!!!!!!!! prosz�  uwzgl�dni� 
ten fakt przy budwanie wi�cej jak 1 budynku specjalnego droga</b>
</p>
<p><b>Ograniczenia:</b> Obecnie s� dwa ograniczenia Pierwszym ograniczeniem przy planowaniu 
ataku jest mo�liwo�c wys�ania tylko 1 ataku na dane ksi�stwo w danym mom�cie, aby m�c wys�ac 
kolejny atak poprzedni musi si� sko�czy�. Ograniczenie to nie dotyczy atak�w szpiegowskich 
<br>Drugim jest to �e wycofanie ataku zmniejsza morale, a to zkolei wp�ywa na atak i obron� wojsk</p>
