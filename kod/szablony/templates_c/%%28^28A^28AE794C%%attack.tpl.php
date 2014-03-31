<?php /* Smarty version 2.6.11, created on 2010-11-11 16:13:58
         compiled from /home/piwnik/domains/kod-online.eu/public_html/szablony/templates/help/attack.tpl */ ?>
<p><b>Typy ataku:</b> W KoD-zie jest dostêpne kilka typ-ów ataku które zostan± poni¿ej wyjasnione:
<p><b>Typ Gospodarka:</b> Atakujesz przy u¿yciu ³uczników piechoty i husari ksiêstwo i je¿eli wys³ane wojsko zdo³a pokonaæ armie
wroga to niszczysz mu czê¶æ budynków i zabierasz troche jego ziemi. 
</p>
<p><b>Typ Ziemia:</b> Ten typ ataku ró¿ni siê od poprzedniego tylko tym ¿e zadajesz mniejsze straty gospodarce wroga, 
ale za to mo¿esz zdobyæ wiêcej ziemi.Ilo¶æ zdobywanej ziemi zale¿y miêdzy innymi od tego jaka jest ró¿nica 
w wielko¶ci pomiêdzy atakowanym i atakujacym dlatego nie op³aca siê atakowaæ znacznie mniejszych ksiêstw bo 
po prostu mo¿emy nic na tym nie zyskaæ <br> <b>UWAGA: Mo¿na zdobywaæ tylko niezabudowan± ziemie !!</b> 
</p>
<p><b>Typ Budynek koalicji:</b> W tym typie ataku celem nie jest pojedyncze ksiêstwo ale po¶rednio cala 
koalicji staraj±ca siê zakoñczyæ ere. Jako cel ataku wpisujesz nazwe koalicji i je¿eli ona buduje "budynek koalicji" to go atakujesz.
</p>
<p><b>Typ Szpiegowanie:</b> Tutaj wysy³asz szpiegów aby zdobyli oni informacje o wrogim ksiêstwie i prawdopodobieñstwo 
sukcesu ro¶nie liniowo i zale¿y od liczby wys³anych szpiegów i stra¿ników w szpiegowanym ksiêstwie. 
<!-- Przy tej samej ilosci szpiegów i stra¿ników prawdopodobieñstow sukcesu wynosi 50%.
 --> 
</p>
<p><b>Typ Podpalanie:</b> Te¿ jest to atak szpiegowski tylko tym razem zamiast zbierac informacje
 szpiedzy bêd± siê starali uszkodziæ jeden z bydynków specjalnych. 
<!-- Przy tej samej ilosci szpiegów i stra¿ników prawdopodobieñstow sukcesu wynosi 25%.
--> 
<br> Watro te¿ przypomnieæ, ¿e nawet minimalnie uszkodzony budynek specjalny nie przynosi zadnego bonusu do czasu odbudowania !!.
</p>
</p>
<p><b>Typ Kradzie¿:</b> Kolejny atak szpiegowski, kradzie¿ s³u¿y do wykradania syrowców i z³ota z okradanego ksiêstwa. 
</p>
<p><b>Typ Skrytobójstwo:</b> Atak szpiegowski polegaj±cy na zabijaniu ludno¶ci zamieszkuj±cej atakowane ksiêstwo.
</p>
<p><b>Typ Koalicyjny:</b> Ten typ umo¿liwia wspólny atak wszystkim cz³onkom koalicji. Je¿eli atak wysy³a koalicjant, 
ale nie cesarz to nie musi wpisywaæ celu bo wojska s± wysy³ane do cesarza, wybieramy tutaj tylko jak± czêsci± swojej armi 
chcemy wspomóc atak naszego w³adcy. Aby nasze wojska uczestnicz³y w ataku nale¿y zrobiæ 8 tur aby na 
liczniku pojawi³a sie warto¶æ 0 wtedy nasze oddznia³y s± ju¿ do dyspozycji cesarza
. Je¿eli atak wysy³a cesarz to musi on wybraæ cel, a atak 
trwa ju¿ nietypowo bo 16 tur (droga nie skraca tego ataku.). Ka¿dy z koalicjantów na li¶cie ataków widzi tylko swój, 
ale w chwili gdy cesarz zrobi 16 ture to zostanie przeprowadzony atak na normalnych zasadach z 3 tylko róznicami:<br>
- Armia atakuj±cego to bêdzie suma wszystkich ataków koalicyjnych w danej koalicji<br>
- W tym typie ataku nie zdobywa siê ziemi<br>
- Strary rozk³adaj± siê proporcjonalnie na wszystkich uczestnikow ataku <br>
Poniewa¿ jest to atak cesarza to brane s± pod uwage tylko bonusy z jego budynków specjalnych i raport z ataku te¿ otrzymuje tylko cesarz
</p>
<p><b>Typ Oblê¿enie:</b> U¿ywaj±c tego ataku mo¿na przej±æ wrogi zamek, ten atak niszczy mniej gospodarki ni¿ atak na gospodarke i
zabiera mniej ziemi ni¿ atak na ziemie.
</p>
<p><b>Typ Propaganda:</b> Udany atak obni¿a morale wrogiego ksiêstwa. Atakuj±ce nie mo¿na obni¿yæ morale poni¿ej -20.
</p>
</p>
<p>Ka¿dy atak ma jeszcze jeden wa¿ny parametr czas dotarcia do celu i wynosi on 8 tur.
 Mo¿e on jednak byæ skrócony nawet do 3  przez budynek specjalny droga.<br>
<b>UWAGA: Minimalny czas dotarcia wojsk do celu to 3 tury !!!!!!!!!!! proszê  uwzglêdniæ 
ten fakt przy budwanie wiêcej jak 1 budynku specjalnego droga</b>
</p>
<p><b>Ograniczenia:</b> Obecnie s± dwa ograniczenia Pierwszym ograniczeniem przy planowaniu 
ataku jest mo¿liwo¶c wys³ania tylko 1 ataku na dane ksiêstwo w danym momêcie, aby móc wys³ac 
kolejny atak poprzedni musi siê skoñczyæ. Ograniczenie to nie dotyczy ataków szpiegowskich 
<br>Drugim jest to ¿e wycofanie ataku zmniejsza morale, a to zkolei wp³ywa na atak i obronê wojsk</p>
