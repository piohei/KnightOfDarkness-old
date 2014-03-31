{include file="main_top.tpl"}
<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr class="row2">
		<td colspan="4">{* BEGIN nowosci *}
		<table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
		
		{foreach  from=$changes key="changeDate" item="changesInDate" }

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">zmiany z dnia {$changeDate}</small></td>
			</tr>
			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					{foreach from=$changesInDate item="change"}
						<li>{$change.message}</li>
					{/foreach}
				</ul>
				</div>
				</td>
			</tr>
		 {/foreach}

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">Krótki opis zmian</small></td>
			</tr>

			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>20080619 - dwa razy mniejsze koszty trenowania fachowców oraz
					dwa razy mniej PB na budowe budynków gospodarczych</li>
					<li>20080619 - bonus dla ma³ych ksiêst tylko do 2k ziemi</li>
					<li>20080619 - zmniejszenie maksymalnego % strat przy ataku na
					gospodarkê do 20%</li>
					<li>20080619 - zmniejszenie maksymalnego % strat przy ataku na
					ziemiê do 50% niezabudowanej ziemi</li>

					<li>20080202 - zmiana parametrow Chatki Kata. Teraz daje % do
					obrony przed szpiegami. 1lvl +50% 10kPB, 2lvl +100% 150kPB,3lvl
					+250% 400kPB,</li>
					<li>20080202 - zmiana parametrow ataku koalicyjnego, 1 budenek na 5
					wojska które prze¿y³o atak, nie wiêcej ni¿ 30% budynków.</li>
					<li>20080202 - zmiana parametrow ataku na gospe, 1 budenek na 5
					wojska które prze¿y³o atak, nie wiêcej ni¿ 4% dla ataku na ziemie,
					11% na gospe</li>
					<li>20080202 - zmiana parametrow ataku na ziemi, 1 ziemie na 5
					wojska które prze¿y³o atak, nie wiêcej ni¿ niezabudowana ziemia,
					nie wiêcej ni¿ 75% dla ataku na ziemie, 4% na gospe (nale¿y rónie¿
					pamiêtaæ ¿e maksymalna ilo¶æ zabranej ziemi jest dalej zale¿na od
					stosunku ilo¶ci ziemi atakowanego i broni±cego)</li>
					<li>20080202 - usuniecie blokady na ilosc atakow na dane ksiestow w
					ciagu 24h, oczywi¶cie dalej ka¿dy mo¿e atakowaæ ka¿dego max raz na
					24h</li>
					<li>20080201 - poprawa drobnrgo bledy z zastepstwami</li>
					<li>20080122 - dodano ranking Kolicja(gospodarka)</li>
					<li>20080121 - BS, "Chata kata" - zmiana cen budowy</li>
					<li>20080121 - poprawa b³êdu z zamykaniem i otwieraniem shoutboxa
					naniektóych stronach</li>
					<li>20080120 - uaktualnienie pomocy</li>
					<li>20080118 - przy bezpieczeñstwie 0-20% morale zmniejsza siê o 9
					a nie o 10, przez to przy zerowych podatkach morale rosnie o 1</li>
					<li>20080118 - dodana zosta³a mo¿liwo¶æ natychmoastowego
					zakoñczenia zastêpstwa</li>
					<li>20080118 - tylko na t± erê z powodu b³êdu, bonus dla ma³ych
					ksiêstw bêdzie do 3000 ziemi</li>
					<li>20080116 - poprawiono b³êdy z trenowaniem wojska</li>
					<li>20080115 - tragarze w dordze i wojsko i szpiedzy w drodze s±
					liczeni jako jednostki zajmuj±ce miejsce w domkach swoich
					specjalno¶ci</li>
					<li>20080113 - druga czê¶æ modu³u do obs³ugi zastêpstw, obs³uga z
					menu profil, mo¿liwo¶æ przelogowania na zastêpowane konto</li>
					<li>20080113 - likwidacja b³êdu z rynkami, wysy³aj±cy i odbieraj±cy
					musz± mieæ wybudowany rynek w ca³o¶ci</li>
					<li>20080113 - zmiana sposobu naliczania bonusu dla ma³ych, teraz
					bonus siê dodaje a nie mno¿y przez aktualne bonusy</li>
					<li>20080112 - pierwsza czê¶æ modu³u do obs³ugi zastêpstw -
					rejestrowanie zastêpstw</li>
					<li>20080112 - po zabanowaniu konta gracz jest automatycznie
					wylogowywany</li>
					<li>20080110 - nowy BS, "Chata kata" - dodano dodatkowe dwa poziomu
					BSa</li>
					<li>20080110 - nowy BS, "Chata kata" - zwiêksza obronê ksiêstwa
					przed szpiegami</li>
					<li>20080109 - atak SKRYTOBÓJSTWO, jeden szpieg który siê przedrze
					(nie zawsze wszyscy siê przedieraj±) mo¿e zabiæ tylko jedn± osobê z
					wylosowanej profesji, , ale nie wiêcej 20%+-5%</li>
					<li>20080109 - atak KRADZIE¯, jeden szpieg który siê przedrze (nie
					zawsze wszyscy siê przedieraj±) mo¿e ukra¶æ 4k z³óta, 1k jedzenia i
					po 100 narzêdzi, ¿elaza i broni, ale nie wiêcej 20%+-5%</li>
					<li>20080108 - nowy atak szpiegowski SKRYTOBÓJSTWO, zabija
					20%(+-5%) ludzi z losowej profesji ('rolnicy', 'kowale',
					'bezrobotni', 'gornicy_zlota', 'gornicy_zelaza', 'tragarze',
					'budowniczowie')</li>
					<li>20080108 - nowy atak szpiegowski KRADZIE¯, kradnie 20%(+-5%)
					losowego surowca ('zloto', 'jedzenie', 'narzedzia', 'zelazo',
					'bron')</li>
					<li>20080108 - atak SZPIEGOWANIE nie wymaga ju¿ bycia w zasiêgu
					ziemi</li>
					<li>20080108 - do trenowania stra¿ników nie potrzeba ju¿ miejsca w
					koszarach</li>
					<li>20080108 - ilo¶æ miejsca w stra¿nicach ro¶nie wraz z ilo¶ci±
					ziemi, +1 na 200 ziemi</li>
					<li>20080107 - rozpoczêcie BK kosztuje 200kk</li>
					<li>20080107 - powrót do poprzednich parametrów straty ziemi.
					Zabierane jest 1 ziemie na 10 wojska które prze¿y³o atak, nie
					wiêcej ni¿ niezabudowana ziemia, nie wiêcej ni¿ 30 lub 15%(30% dla
					ataku na ziemie, 15% na gospe) ca³kowitej ziemi</li>
					<li>20080107 - wycofanie wojska powoduje zmniejszenie morale wojska
					o 40</li>
					<li>20080107 - wys³anie wojska kosztuje dodatkowo na ka¿dego
					wojownika 1 jedzenie/ture</li>
					<li>20080107 - ka¿de 20 sztuk ziemi zwiêksza ilo¶æ pojemo¶æ rynków
					o jednego tragarza (czyli maj±c 100 ziemi mo¿emy na jednym rynku
					wytrenowaæ 55 tragarzy)</li>
					<li>20080107 - dodana zosta³a mo¿liwo¶æ wycofania tragarzy</li>
					<li>20080107 - morale mniejsze ni¿ 50 obni¿a si³e ataku i obrony w
					ataku i w obronie. Morale mniejsz o 40 dale -10% do ataku i obrony.
					Morale 20 daje -30% itd</li>
					<li>20080107 - poniewa¿ bonus dla ma³ych naprawdê szybko maleje
					dlatego koñczyæ siê ob bêdzie a 1,5k ziemi</li>
					<!--    <li>20080107 - zmniejszenie dwukrotnie si³e ataku wszystkich jednostek przez 2</li>  -->
					<li></li>
					<li>20080105 - mo¿na atakowaæ ksiêstwa dwa razy wiêksze od siebie i
					wszystkich którzy mog± nas atakowaæ</li>
					<li>20080105 - 10 wygranych ¿o³nierzy niszczy 1 budynek, zabiera 1
					ziemie i 1000z³ota</li>
					<li>20080105 - zmiana maxymalnych strat w gospodarce, atak na gospe
					10%, atak na ziemie 5%</li>
					<li>20080105 - zmiana maxymalnych strat w ziemi, atak na gospe 5%,
					atak na ziemie 10%</li>
					<li>20080105 - w ataku na gospe i ziemie zosta³ dodana grabie¿
					z³ota (max na gospe 5%, na ziemi 2,5%)</li>
					<li>20080105 - zwiêkszenie ilo¶ci osób w koalicji do 15</li>
					<li>20080105 - poprawione zosta³o to ¿e czasem podpalenie nie
					dzia³a³o</li>
					<li>20080104 - dane ksiêstwo mo¿e zosta pokonane w obronie
					maksymalnie 5 razy na 24 godziny</li>
					<li>20080104 - mo¿liwo¶æ ataku wspó³koalicjanta</li>
					<li>20080104 - Wyd³u¿enie opisu koalicji do 3000 znaków</li>
					<li>20080104 - bonus do produkcji dla ma³ych ksiêstw</li>
					<li>20080104 - ziemia dro¿sza o oko³o 10%</li>
					<li>20080104 - mo¿liwo¶æ kupiwania dowolnej takiej ilo¶ci ziemi na
					jak± Cie staæ</li>
					<li></li>
					<li>20071125 - dodano nowe statystyki rynku opisuj±ce ile kto
					dosta³ od koalicji i da³ koalicji<br>
					dostêpne tylko dla Cesarzy koalicji, Koalicja->Rynek</li>
					<li>20071125 - dodano z³oto w statystykach rynku,
					Koalicja->Rynek->Export/Import</li>
					<li>20071125 - w raporcie sprzeda¿y pojawia siê nazwa ksiêstwa
					kupuj±ceto Twój towar</li>
					<li></li>
					<li>20071122 - dodano cene za jak± mo¿esz kupiæ maksymaln± ilo¶æ
					ziemi</li>
					<li>20071121 - nowa zakladka 'Rynek' w menu 'Koalicja'</li>
					<li>20071121 - w nowej zak³adce mo¿liwo¶æ obejrzenia podsumowañ
					wszystkich przesy³ów za pomoc± Koalicja->Rynek->Import/Export</li>
					<li>20071114 - poprawienie fukcji aktywujacej konto</li>
					<li>20071114 - uruchomienie zbierania informacji do nowego modu³u
					MH</li>
					<li>20071114 - dodanie limitu wystawionych aukcji tego samego
					towaru w tej samej cenie do 2 jednocze¶nie</li>
					<li>20071114 - zmiana limitu wystawionych aukcji do 20</li>
					<li>20071113 - dodanie limitu wystawionych aukcji do 15</li>
					<li>20071112 - zwiêkszenie pojemno¶ci karczmy (dodanie zmiennej
					konfiguruj±cej ten parametr)</li>
					<li>20071111 - poprawka raportow z atakow (czasem trafialy jako
					wiadomosc tymczasowa)</li>
					<li>20071111 - usuniecie bledu z wspó³czynnikiem produkcji</li>

				</ul>
				</div>
				</td>
			</tr>

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">2007-11-08</small></td>
			</tr>
			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>poprawiony zosta³ raport tury w kwesti opisu PB z schowka</li>
					<li>w zakladce tura dodano link do raportu z ostatnio wykonanej
					tury</li>
				</ul>
				</div>
				</td>
			</tr>

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">2007-11-06</small></td>
			</tr>
			<td colspan="2">
			<div style="padding: 5px 20px 30px 20px; color: gray;">
			<ul>
				<li>poprawa czê¶ci opisów w pomocy dotycz±cych ataków i si³
				jednostek (nie jest ³atwy problem)</li>
			</ul>
			</div>
			</td>
			</tr>

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">2007-11-04</small></td>
			</tr>
			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>poprawka brzydkiego napisu kiedy kto¶ klika za du¿o targ</li>
				</ul>
				</div>
				</td>
			</tr>


			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">2007-11-03</small></td>
			</tr>
			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>wy¶wietlanie ilo¶ci nieprzeczytanych wiadomo¶ci (wiadomo¶æ
					zwyk³a / zaproszenie / raport / nietrwa³y raport)</li>
				</ul>
				</div>
				</td>
			</tr>

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">dawno temu (tzn oko³o tygodnia)</small></td>
			</tr>

			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>lista zalogowanych (strona g³ówna)</li>
					<li>podsumowania w twoich wystawionych aukcjach (targ->twoje
					aukcje)</li>
					<li>czat (na ka¿dej stronie)</li>
					<li>informacja o tragarzach w drodze(koalicja->zarz±dzanie na dole
					strony)</li>
					<li>ostatnio u¿ywany adres ip (lista graczy)</li>
					<li>i pewnie co¶ jeszcze ale nie pamiêtam co:P</li>
				</ul>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
{include file="main_bottom.tpl"}
