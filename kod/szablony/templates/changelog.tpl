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
				<td><small style="margin-left: 15px">Kr�tki opis zmian</small></td>
			</tr>

			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>20080619 - dwa razy mniejsze koszty trenowania fachowc�w oraz
					dwa razy mniej PB na budowe budynk�w gospodarczych</li>
					<li>20080619 - bonus dla ma�ych ksi�st tylko do 2k ziemi</li>
					<li>20080619 - zmniejszenie maksymalnego % strat przy ataku na
					gospodark� do 20%</li>
					<li>20080619 - zmniejszenie maksymalnego % strat przy ataku na
					ziemi� do 50% niezabudowanej ziemi</li>

					<li>20080202 - zmiana parametrow Chatki Kata. Teraz daje % do
					obrony przed szpiegami. 1lvl +50% 10kPB, 2lvl +100% 150kPB,3lvl
					+250% 400kPB,</li>
					<li>20080202 - zmiana parametrow ataku koalicyjnego, 1 budenek na 5
					wojska kt�re prze�y�o atak, nie wi�cej ni� 30% budynk�w.</li>
					<li>20080202 - zmiana parametrow ataku na gospe, 1 budenek na 5
					wojska kt�re prze�y�o atak, nie wi�cej ni� 4% dla ataku na ziemie,
					11% na gospe</li>
					<li>20080202 - zmiana parametrow ataku na ziemi, 1 ziemie na 5
					wojska kt�re prze�y�o atak, nie wi�cej ni� niezabudowana ziemia,
					nie wi�cej ni� 75% dla ataku na ziemie, 4% na gospe (nale�y r�nie�
					pami�ta� �e maksymalna ilo�� zabranej ziemi jest dalej zale�na od
					stosunku ilo�ci ziemi atakowanego i broni�cego)</li>
					<li>20080202 - usuniecie blokady na ilosc atakow na dane ksiestow w
					ciagu 24h, oczywi�cie dalej ka�dy mo�e atakowa� ka�dego max raz na
					24h</li>
					<li>20080201 - poprawa drobnrgo bledy z zastepstwami</li>
					<li>20080122 - dodano ranking Kolicja(gospodarka)</li>
					<li>20080121 - BS, "Chata kata" - zmiana cen budowy</li>
					<li>20080121 - poprawa b��du z zamykaniem i otwieraniem shoutboxa
					naniekt�ych stronach</li>
					<li>20080120 - uaktualnienie pomocy</li>
					<li>20080118 - przy bezpiecze�stwie 0-20% morale zmniejsza si� o 9
					a nie o 10, przez to przy zerowych podatkach morale rosnie o 1</li>
					<li>20080118 - dodana zosta�a mo�liwo�� natychmoastowego
					zako�czenia zast�pstwa</li>
					<li>20080118 - tylko na t� er� z powodu b��du, bonus dla ma�ych
					ksi�stw b�dzie do 3000 ziemi</li>
					<li>20080116 - poprawiono b��dy z trenowaniem wojska</li>
					<li>20080115 - tragarze w dordze i wojsko i szpiedzy w drodze s�
					liczeni jako jednostki zajmuj�ce miejsce w domkach swoich
					specjalno�ci</li>
					<li>20080113 - druga cz�� modu�u do obs�ugi zast�pstw, obs�uga z
					menu profil, mo�liwo�� przelogowania na zast�powane konto</li>
					<li>20080113 - likwidacja b��du z rynkami, wysy�aj�cy i odbieraj�cy
					musz� mie� wybudowany rynek w ca�o�ci</li>
					<li>20080113 - zmiana sposobu naliczania bonusu dla ma�ych, teraz
					bonus si� dodaje a nie mno�y przez aktualne bonusy</li>
					<li>20080112 - pierwsza cz�� modu�u do obs�ugi zast�pstw -
					rejestrowanie zast�pstw</li>
					<li>20080112 - po zabanowaniu konta gracz jest automatycznie
					wylogowywany</li>
					<li>20080110 - nowy BS, "Chata kata" - dodano dodatkowe dwa poziomu
					BSa</li>
					<li>20080110 - nowy BS, "Chata kata" - zwi�ksza obron� ksi�stwa
					przed szpiegami</li>
					<li>20080109 - atak SKRYTOB�JSTWO, jeden szpieg kt�ry si� przedrze
					(nie zawsze wszyscy si� przedieraj�) mo�e zabi� tylko jedn� osob� z
					wylosowanej profesji, , ale nie wi�cej 20%+-5%</li>
					<li>20080109 - atak KRADZIE�, jeden szpieg kt�ry si� przedrze (nie
					zawsze wszyscy si� przedieraj�) mo�e ukra�� 4k z��ta, 1k jedzenia i
					po 100 narz�dzi, �elaza i broni, ale nie wi�cej 20%+-5%</li>
					<li>20080108 - nowy atak szpiegowski SKRYTOB�JSTWO, zabija
					20%(+-5%) ludzi z losowej profesji ('rolnicy', 'kowale',
					'bezrobotni', 'gornicy_zlota', 'gornicy_zelaza', 'tragarze',
					'budowniczowie')</li>
					<li>20080108 - nowy atak szpiegowski KRADZIE�, kradnie 20%(+-5%)
					losowego surowca ('zloto', 'jedzenie', 'narzedzia', 'zelazo',
					'bron')</li>
					<li>20080108 - atak SZPIEGOWANIE nie wymaga ju� bycia w zasi�gu
					ziemi</li>
					<li>20080108 - do trenowania stra�nik�w nie potrzeba ju� miejsca w
					koszarach</li>
					<li>20080108 - ilo�� miejsca w stra�nicach ro�nie wraz z ilo�ci�
					ziemi, +1 na 200 ziemi</li>
					<li>20080107 - rozpocz�cie BK kosztuje 200kk</li>
					<li>20080107 - powr�t do poprzednich parametr�w straty ziemi.
					Zabierane jest 1 ziemie na 10 wojska kt�re prze�y�o atak, nie
					wi�cej ni� niezabudowana ziemia, nie wi�cej ni� 30 lub 15%(30% dla
					ataku na ziemie, 15% na gospe) ca�kowitej ziemi</li>
					<li>20080107 - wycofanie wojska powoduje zmniejszenie morale wojska
					o 40</li>
					<li>20080107 - wys�anie wojska kosztuje dodatkowo na ka�dego
					wojownika 1 jedzenie/ture</li>
					<li>20080107 - ka�de 20 sztuk ziemi zwi�ksza ilo�� pojemo�� rynk�w
					o jednego tragarza (czyli maj�c 100 ziemi mo�emy na jednym rynku
					wytrenowa� 55 tragarzy)</li>
					<li>20080107 - dodana zosta�a mo�liwo�� wycofania tragarzy</li>
					<li>20080107 - morale mniejsze ni� 50 obni�a si�e ataku i obrony w
					ataku i w obronie. Morale mniejsz o 40 dale -10% do ataku i obrony.
					Morale 20 daje -30% itd</li>
					<li>20080107 - poniewa� bonus dla ma�ych naprawd� szybko maleje
					dlatego ko�czy� si� ob b�dzie a 1,5k ziemi</li>
					<!--    <li>20080107 - zmniejszenie dwukrotnie si�e ataku wszystkich jednostek przez 2</li>  -->
					<li></li>
					<li>20080105 - mo�na atakowa� ksi�stwa dwa razy wi�ksze od siebie i
					wszystkich kt�rzy mog� nas atakowa�</li>
					<li>20080105 - 10 wygranych �o�nierzy niszczy 1 budynek, zabiera 1
					ziemie i 1000z�ota</li>
					<li>20080105 - zmiana maxymalnych strat w gospodarce, atak na gospe
					10%, atak na ziemie 5%</li>
					<li>20080105 - zmiana maxymalnych strat w ziemi, atak na gospe 5%,
					atak na ziemie 10%</li>
					<li>20080105 - w ataku na gospe i ziemie zosta� dodana grabie�
					z�ota (max na gospe 5%, na ziemi 2,5%)</li>
					<li>20080105 - zwi�kszenie ilo�ci os�b w koalicji do 15</li>
					<li>20080105 - poprawione zosta�o to �e czasem podpalenie nie
					dzia�a�o</li>
					<li>20080104 - dane ksi�stwo mo�e zosta pokonane w obronie
					maksymalnie 5 razy na 24 godziny</li>
					<li>20080104 - mo�liwo�� ataku wsp�koalicjanta</li>
					<li>20080104 - Wyd�u�enie opisu koalicji do 3000 znak�w</li>
					<li>20080104 - bonus do produkcji dla ma�ych ksi�stw</li>
					<li>20080104 - ziemia dro�sza o oko�o 10%</li>
					<li>20080104 - mo�liwo�� kupiwania dowolnej takiej ilo�ci ziemi na
					jak� Cie sta�</li>
					<li></li>
					<li>20071125 - dodano nowe statystyki rynku opisuj�ce ile kto
					dosta� od koalicji i da� koalicji<br>
					dost�pne tylko dla Cesarzy koalicji, Koalicja->Rynek</li>
					<li>20071125 - dodano z�oto w statystykach rynku,
					Koalicja->Rynek->Export/Import</li>
					<li>20071125 - w raporcie sprzeda�y pojawia si� nazwa ksi�stwa
					kupuj�ceto Tw�j towar</li>
					<li></li>
					<li>20071122 - dodano cene za jak� mo�esz kupi� maksymaln� ilo��
					ziemi</li>
					<li>20071121 - nowa zakladka 'Rynek' w menu 'Koalicja'</li>
					<li>20071121 - w nowej zak�adce mo�liwo�� obejrzenia podsumowa�
					wszystkich przesy��w za pomoc� Koalicja->Rynek->Import/Export</li>
					<li>20071114 - poprawienie fukcji aktywujacej konto</li>
					<li>20071114 - uruchomienie zbierania informacji do nowego modu�u
					MH</li>
					<li>20071114 - dodanie limitu wystawionych aukcji tego samego
					towaru w tej samej cenie do 2 jednocze�nie</li>
					<li>20071114 - zmiana limitu wystawionych aukcji do 20</li>
					<li>20071113 - dodanie limitu wystawionych aukcji do 15</li>
					<li>20071112 - zwi�kszenie pojemno�ci karczmy (dodanie zmiennej
					konfiguruj�cej ten parametr)</li>
					<li>20071111 - poprawka raportow z atakow (czasem trafialy jako
					wiadomosc tymczasowa)</li>
					<li>20071111 - usuniecie bledu z wsp�czynnikiem produkcji</li>

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
					<li>poprawiony zosta� raport tury w kwesti opisu PB z schowka</li>
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
				<li>poprawa cz�ci opis�w w pomocy dotycz�cych atak�w i si�
				jednostek (nie jest �atwy problem)</li>
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
					<li>poprawka brzydkiego napisu kiedy kto� klika za du�o targ</li>
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
					<li>wy�wietlanie ilo�ci nieprzeczytanych wiadomo�ci (wiadomo��
					zwyk�a / zaproszenie / raport / nietrwa�y raport)</li>
				</ul>
				</div>
				</td>
			</tr>

			<tr class="row1"
				style="color: #6b6356; text-align: left; padding: 0px 10px">
				<td><b> <span style="color: #c8a27c; font-size: 9px"> &raquo; </span>
				</b></td>
				<td><small style="margin-left: 15px">dawno temu (tzn oko�o tygodnia)</small></td>
			</tr>

			<tr>
				<td colspan="2">
				<div style="padding: 5px 20px 30px 20px; color: gray;">
				<ul>
					<li>lista zalogowanych (strona g��wna)</li>
					<li>podsumowania w twoich wystawionych aukcjach (targ->twoje
					aukcje)</li>
					<li>czat (na ka�dej stronie)</li>
					<li>informacja o tragarzach w drodze(koalicja->zarz�dzanie na dole
					strony)</li>
					<li>ostatnio u�ywany adres ip (lista graczy)</li>
					<li>i pewnie co� jeszcze ale nie pami�tam co:P</li>
				</ul>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
{include file="main_bottom.tpl"}
