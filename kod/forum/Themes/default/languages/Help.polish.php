<?php
// Version: 2.0 RC3; Help

global $helptxt;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['close_window'] = 'Zamknij okno';

$helptxt['manage_boards'] = '	<strong>Edytuj dzia³y</strong><br />
	W tym menu mo¿esz stworzyæ/usun±æ/zmieniæ kolejno¶æ dzia³ów i kategorii.
	Przyk³adowo, mia³e¶ stronê o szerokiej tematyce
	takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;.
	To by³y by kategorie najwy¿szego poziomu. Pod ka¿d± z nich chcia³by¶
	prawdopodobnie stworzyæ hierarhiczne &quot;podkategorie&quot; lub &quot;dzia³y&quot; dla tematów.
	To bêdzie prosta hierarhia ze struktur±: <br />
	<ul class="normallist">
		<li>
			<strong>Sport</strong>
			&nbsp;-  &quot;Kategoria&quot;
		</li>
		<ul class="normallist">
			<li>
				<strong>Motoryzacja</strong>
				&nbsp;- Forum w kategorii &quot;Sport&quot;
			</li>
			<ul class="normallist">
				<li>
					<strong>Muzyka</strong>
					&nbsp;- Forum podrzêdne dla forum &quot;Motoryzacja&quot;
				</li>
			</ul>
			<li><strong>Football</strong>
			&nbsp;- Kolejne forum w kategorii &quot;Sport&quot;</li>
		</ul>
	</ul>
	Categories allow you to break down the board into broad topics (&quot;Cars,
	Sports&quot;), and the &quot;Boards&quot; under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under &quot;Cars->Pinto&quot;. Categories allow people to
	quickly find what their interests are: Instead of a &quot;Store&quot; you have
	&quot;Hardware&quot; and &quot;Clothing&quot; stores you can go to. This simplifies your
	search for &quot;pipe joint compound&quot; because you can go to the Hardware
	Store &quot;category&quot; instead of the Clothing Store (where you\'re unlikely
	to find pipe joint compound).<br />
	As noted above, a Board is a key topic underneath a broad category.
	If you want to discuss &quot;Pintos&quot; you\'d go to the &quot;Auto&quot; category and
	jump into the &quot;Pinto&quot; board to post your thoughts in that board.<br />
	Administrative functions for this menu item are to create new boards
	under each category, to reorder them (put &quot;Pinto&quot; behind &quot;Chevy&quot;), or
	to delete the board entirely.';

$helptxt['edit_news'] = '<ul class="normallist">  <li>  <strong>Aktualno¶ci</strong><br /> Ta sekcja pozwala wprowadziæ tekst informacji o nowo¶ciach, wy¶wietlany na stronie g³ównej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbli¿szy wtorek&quot;). Informacje te s± wy¶wietlane losowo, ka¿da w osobnej ramce. </li> <li> <strong>Newsletters</strong><br /> Ta sekcja pozwoli Ci na wys³anie masowej korespondencji do u¿ytkowników forum. Najpierw musisz zaznaczyæ nazwy grup u¿ytkowników, do których chcesz wys³aæ newsletter. Je¶li sobie ¿yczysz mo¿esz dodatkowo dodaæ u¿ytkowników lub adresy email którzy otrzymaj± newsletter. Ostatecznie mo¿esz zdecydowaæ w jakiej formie korespondencja ma byæ wys³ana do u¿ytkownika, za pomoc± wiadomo¶ci prywatnej lub te¿ wiadomo¶ci email. </li> <li> <strong>Ustawienia</strong><br /> Ta sekcja zawiera kilka ustawieñ dotycz±cych aktualno¶ci oraz korespondencji takich jak: dodawanie grup które mog± edytowaæ aktualno¶ci i wysy³aæ korespondencjê. Istnieje tak¿e opcja konfiguracji aktualno¶ci za pomoc± której mo¿esz je w³±czyæ lub wy³±czyæ, ustawiæ d³ugo¶æ znaków w wy¶wietlanej wiadomo¶ci. </li> </ul>';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Przegl±danie u¿ytkowników</strong><br />
			Przegl±daj wszystkich u¿ytkowników forum. Zostanie wy¶wietlona lista u¿ytkowników, z których
			ka¿dy jest odno¶nikiem do jego profilu. Jako administrator, mo¿esz modyfikowaæ profile
			u¿ytkowników. Masz ca³kowit± kontrolê nad u¿ytkownikami,
			w³±cznie z ich usuniêciem z forum.<br /><br />
		</li>
		<li>
			<strong>Oczekuj±cy na zatwierdzenie</strong><br />
			Ta sekcja pokazuje siê tylko je¶li w³±czona jest opcja zatwierdzania wszystkich nowych u¿ytkowników. Ka¿dy rejestruj±cy siê
			na forum staje siê pe³nym u¿ytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wy¶wietla wszystkich tych u¿ytkowników,
			którzy oczekuj± na zatwierdzenie. Pokazuj± siê równie¿ ich emaile i adres IP. Mo¿esz wybraæ czy zatwierdziæ, czy odrzuciæ
			(skasowaæ) ka¿dego u¿ytkownika z listy, poprzez zaznaczenie u¿ytkowników i wybranie odpowiedniej czynno¶ci z rozwijanej listy.
			Podczas odrzucania u¿ytkownika mo¿esz wybraæ czy po usuniêciu poinformowaæ go emailem o swojej decyzji.<br /><br />
		</li>
		<li>
			<strong>Oczekuj±cy na aktywacjê</strong><br />
			Ta sekcja pokazuje siê tylko je¶li w³±czona jest opcja aktywacji kont u¿ytkownika. Ta lista
			wy¶wietla wszystkich u¿ytkowników, którzy jeszcze nie aktywowali swojego konta. Mo¿esz wybraæ czy aktywowaæ te konta za nich,
			odrzuciæ, czy te¿ przypomnieæ o konieczno¶ci aktywacji konta. Tak jak powy¿ej, mo¿esz poinformowaæ lub nie u¿ytkowników
			o swojej decyzji.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban u¿ytkowników</strong><br />
	SMF pozwala na &quot;ban&quot; u¿ytkowników którzy zak³ócaj± dzia³anie forum
	poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przegl±dania 
	wiadomo¶ci adres IP ka¿dego z u¿ytkowników z którego wys³ana zosta³a wiadomo¶æ. 
	Mo¿esz dodaæ dane IP do listy banów co zablokuje mo¿liwo¶æ pisania wiadomo¶ci z 
	tej lokacji. Mo¿esz równie¿ banowaæ u¿ytkowników podaj±c ich adres email.';

$helptxt['featuresettings'] = '<strong>W³a¶ciwo¶ci i Opcje</strong><br />
	Jest tu kilka ustawieñ, które mo¿esz zmieniæ wg swoich preferencji.';

$helptxt['securitysettings'] = '<strong>Bezpieczeñstwo i Moderacja</strong><br />
	Ta sekcja zawiera ustawienia zwi±zane z bezpieczeñstwem i moderacj± na Twoim forum.';

$helptxt['modsettings'] = '<strong>Opcje forum</strong><br />
	Jest wiele opcji w tej sekcji, które mo¿esz zmieniæ wedle uznania. Wiêkszo¶æ opcji modyfikacji, pojawi siê równie¿ w tym miejscu.';

$helptxt['number_format'] = '<strong>Format liczb</strong><br />
	Mo¿esz u¿yæ tych ustawieñ do ustalenia formatu, w jakim liczby bêd± wy¶wietlane na forum. Format tego ustawienia jest nastêpuj±cy:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	gdzie \',\' to znak u¿ywany do oddzielania grup tysiêcy, \'.\' to znak u¿ywany do oddzielania czê¶ci dziesiêtnej, a liczba zer po nim okre¶la dok³adno¶æ zaokr±gleñ.';

$helptxt['time_format'] = '<strong>Format Czasu</strong><br />
	Mo¿esz dostosowaæ sposób wy¶wietlania daty i czasu do swoich upodobañ. Wygl±da to na do¶æ skompilowany ci±g literek, ale nie jest specjalnie trudne.
	Konwencja pochodzi z funkcji PHP strftime i zosta³a opisana poni¿ej (wiêcej szczegó³ów mo¿na znale¼æ na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Nastêpuj±ce znaki s± rozpoznawane w ³añcuchu formatuj±cym: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - skrócony dzieñ tygodnia<br />
	&nbsp;&nbsp;%A - pe³ny dzieñ tygodnia<br />
	&nbsp;&nbsp;%b - skrócona nazwa miesi±ca<br />
	&nbsp;&nbsp;%B - pe³na nazwa miesi±ca<br />
	&nbsp;&nbsp;%d - dzieñ miesi±ca (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dzieñ miesi±ca (1 to 31) <br />
	&nbsp;&nbsp;%H - godzina (format 24-godziny)<br />
	&nbsp;&nbsp;%I - godzina (format 12-godziny)<br />
	&nbsp;&nbsp;%m - miesi±c jako liczba (01 to 12) <br />
	&nbsp;&nbsp;%M - minuty jako liczba <br />
	&nbsp;&nbsp;%p - &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br />
	&nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br />
	&nbsp;&nbsp;%S - sekundy jako liczba dziesiêtna <br />
	&nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br />
	&nbsp;&nbsp;%y - rok jako liczba dwucyfrowa (00 to 99) <br />
	&nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br />
	&nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skrót <br />
	&nbsp;&nbsp;%% - Znak \'%\' literowy <br />
	<br />
	<em>* Nie dzia³a na serwerach opartych o system Windows.</em></span>';

$helptxt['live_news'] = '<strong>Aktualne og³oszenia</strong><br />
	Ten boks pokazuje ostatnie og³oszenia z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Powiniene¶ sprawdzaæ je na bie¿±co aby uzyskiwaæ informacje o aktualizacjach, nowych wydaniach i wa¿nych informacjach od Simple Machines.';

$helptxt['registrations'] = '<strong>Zarz±dzanie rejestracj±</strong><br />
	Ta sekcja zawiera wszystkie funkcje zwi±zane z zarz±dzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	dzia³y, które s± widoczne zale¿nie od ustawieñ Twojego forum:<br /><br />
	<ul class="normallist">
		<li>
			<b>Zarejestruj nowego u¿ytkownika</b><br />
			Tu mo¿esz zarejestrowaæ u¿ytkownika na jego pro¶bê. Jest to przydatne na zamkniêtych forach, 
			lub gdy admin chce stworzyæ konto testowe. Je¶li jest w³±czona opcja aktywacji konta, to 
			do u¿ytkownika zostanie wys³any emailem link aktywacyjny, który bêdzie musia³ byæ klikniêty, 
			by zacz±æ korzystaæ z konta. Ewentualnie mo¿na wybraæ opcjê, by przes³aæ u¿ytkownikowi has³o na email.<br /><br />
		</li>
		<li>
			<b>Edytuj umowê rejestracyjn±</b><br />
			W tym miejscu mo¿esz zmieniæ umowê rejestracyjn±, wy¶wietlan± podczas tworzenia nowego konta na forum.
			Mo¿esz dodaæ, usun±æ i zmieniæ wszystko co zosta³o standardowo zaproponowane przez SMF.<br /><br />
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br />
			Tu ustalisz jakie wyrazy nie bêd± mog³y byæ u¿yte przez u¿ytkowników do stworzenia ich nazwy konta.<br /><br />
		</li>
		<li>
			<b>Ustawienia</b><br />
			Ta sekcja bêdzie widoczna jedynie, je¶li masz zezwolenie na administracjê forum. Tu mo¿esz ustawiæ sposób rejestracji
      jaki bêdzie u¿ywany na forum, a tak¿e inne zwi±zane z rejestracj± opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Raport moderacji</strong><br />
	Ta sekcja pozwala cz³onkom grupy administratorów ¶ledziæ wszystkie czynno¶ci moderacyjne, które wykonali moderatorzy. Aby 
	moderatorzy nie mogli usun±æ odwo³añ do akcji, które wykonali, wpisy nie mog± zostaæ usuniête przed up³ywem 24 godzin od ich wyst±pienia. Kolumna \'obiekty\' pokazuje zmienne powi±zane z akcj±.';
$helptxt['adminlog'] = '<strong>Raport Administratora</strong><br /> Ta sekcja pozwala cz³onkom grupy Administratorzy, ¶ledziæ niektóre czynno¶ci administracyjne, które zosta³y dokonane na forum. Aby siê upewniæ, ¿e administratorzy nie usun± odno¶ników do czynno¶ci jakie wykonali, wej¶cia nie mog± zostaæ usuniête przez 24 godziny po dokonaniu czynno¶ci.';
$helptxt['warning_enable'] = '<strong>System Ostrze¿eñ U¿ytkowników</strong><br />
	Ta opcja pozwala administratorom i moderatorom przyznawaæ u¿ytkownikom ostrze¿enia - oraz u¿ywaæ Poziomu Ostrze¿enia, do okre¶lenia 
	ograniczeñ w korzystaniu z forum. Po uaktywnieniu te opcji, w sekcji Zezwolenia, mo¿esz okre¶liæ, które grupy mog± przyznawaæ
	ostrze¿enia u¿ytkownikom. Poziom ostrze¿enia mo¿e byæ ustawiony w profilu u¿ytkownika. Dostêpne s± nastêpuj±ce ustawienia:
	<ul class="normallist">
		<li>
			<strong>Poziom Ostrze¿enia - U¿ytkownik jest obserwowany</strong><br />
			To ustawienie pozwala zdefiniowaæ procentowy poziom ostrze¿enia, który musi osi±gn±æ u¿ytkownik, aby zostaæ automatycznie wci±gniêtym na listê obserwowanych u¿ytkowników.
			Ka¿dy u¿ytkownik, który jest &quot;obserwowany&quot; pojawi siê w odpowiednim obszarze w centrum moderacji.
		</li>
		<li>
			<strong>Poziom Ostrze¿enia - Wszystkie wiadomo¶ci u¿ytkownika s± moderowane</strong><br />
			Ka¿dy u¿ytkownik, który przekroczy ustawion± warto¶æ, bedzie musia³ otrzymaæ zgodê moderatora, na publikacjê ka¿dego postu na forum
			To ustawienie bêdzie nadrzêdne do wszystkich lokalnych zezwoleñ zwi±zanych z moderacj± postów.
		</li>
		<li>
			<strong>Poziom Ostrze¿enia - U¿ytkownik nie mo¿e pisaæ postów</strong><br />
			Przekorczenie ustawionego poziomu, spowoduje ca³kowity brak mo¿liwo¶ci pisania postów na forum. 
		</li>
		<li>
			<strong>Maksymalna ilo¶æ punktów ostrze¿enia na dzieñ</strong><br />
			To ustawienie okre¶la ca³kowit± ilo¶æ punktów, które pojedynczemu u¿ytkownikowi, mo¿e przyznaæ lub odebraæ moderator w okresie 24 godzin
			To usatwienie pozwala ograniczyæ aktywno¶æ administratorów w krótkim okresie czasu. Pamiêtaj, mo¿na wy³±czyæ t± opcjê, ustawiaj±c warto¶æ na zero. 
			¯aden u¿ytkownik z uprawnieniami administratora, nie jest objêty t± regu³±.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Raport b³êdów forum</strong><br />
	Ka¿dy b³±d, który wyst±pi³ podczas korzystania z forum zostaje zapisany. Domy¶lnie s± sortowane po dacie. 
	Za pomoc± strza³ek, mo¿na zmieniæ sortowanie, a dodatkowo mo¿na w³±czyæ filtr, np. wg u¿ytkownika. 
	Podczas filtrowania, wy¶wietl± siê jedynie te wpisy, które pasuj± do filtra.';
$helptxt['theme_settings'] = '<strong>Ustawienia stylu</strong><br />
	Ekran ten pozwola na zmianê specyficznych ustawieñ dla obecnego stylu, w³±czaj±c w to opcje takie jak 
	katalog oraz adres URL stylu czy ustawienia layoutu forum. Wiêkszo¶æ stylów posiada rozmaite opcje 
	pozwalaj±ce na dostosowanie ustawieñ do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<strong>Centrum U¶mieszków</strong><br />
	Tutaj mo¿esz dodawaæ i usuwaæ u¶mieszki i zestawy u¶mieszków. Zauwa¿, ¿e je¶li u¶mieszek znajduje siê w jedym zestawie, to istnieje równie¿ w pozosta³ych zestawach - w przeciwnym wypadku 
	mog³oby byæ to zaskakuj±ce dla u¿ytkowników forum u¿ywaj±cych ró¿nych zestawów.<br /><br />

	Mo¿esz tutaj równie¿ edytowaæ ikony wiadomo¶ci, o ile w³±czy³e¶ je na stronie ustawieñ.';
$helptxt['calendar'] = '<strong>Zarz±dzaj kalendarzem</strong><br />
	Tutaj mo¿esz dodawaæ i usuwaæ wpisy oraz zmieniæ ustawienia kalendarza.';

$helptxt['serversettings'] = '<strong>Ustawienia serwera</strong><br />
	Tu mo¿esz zmieniæ g³ówne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, ¶cie¿ek URL, a tak¿e
	tych zwi±zanych z poczt± i pamiêci± podrêczn±. Zastanów siê przed zmianami w tym miejscu, gdy¿ b³êdy mog± spowodowaæ
	brak dostêpu do forum';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <strong>Przegl±daj pliki</strong><br />  Przegl±danie wszystkich za³±czników, awatarów i miniaturek zgromadzonych przez SMF.<br /><br />  </li><li>  <strong>Ustawienia za³±czników</strong><br />  Skonfiguruj miejsce przechowywania za³±czników i ustaw ograniczenia na typy za³±czników.<br /><br />  </li><li>  <strong>Ustawienia awatarów</strong><br />  Skonfiguruj miejsce przechowywania awatarów i ustaw zmianê wielko¶ci awatarów.<br /><br />  </li><li>  <strong>Zarz±dzanie plikami</strong><br />  Sprawd¼ i napraw jakiekolwiek b³êdy w katalogu za³±czników i usuñ wybrane za³±czniki.<br /><br />  </li>  </ul>';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawiæ liczbê poprzednich wiadomo¶ci widocznych w podsumowaniu w±tku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymaln±</em> ilo¶æ wiadomo¶ci w w±teku, dla którego zostanie wy¶wietlony link do wszystkich wiadomo¶ci. Ustawienie tej ilo¶ci na mniej ni¿ &quot;Maksymalna ilo¶æ wiadomo¶ci do wy¶wietlenia na stronie w±tku&quot; spowoduje, ¿e link nigdy siê nie pojawi, a zbyt du¿a warto¶æ mo¿e spowolniæ Twoje forum.';
$helptxt['enableStickyTopics'] = 'Przyklejone s± w±tkami które pozostaj± stale na górze listy tematów. Zazwyczaj u¿ywane s± do przekazania wa¿nych wiadomo¶ci. 
		Domy¶lnie tylko moderatorzy i administratorzy mog± zak³adaæ przyklejone w±tki ale mo¿esz to zmieniæ w zezwoleniach u¿ytkowników.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wy³±czy go¶ciom wykonywanie wiêkszo¶ci czynno¶ci poza tymi najprostszymi - logowanie, rejestracja, przypominanie has³a, itp. - na Twoim forum. Nie jest to to samo co uniemo¿liwianie go¶ciom dostêpu do dzia³ów.';
$helptxt['userLanguage'] = 'W³±czenie tej opcji pozwoli u¿ytkownikom wybraæ plik jêzykowy z którego bêd± korzystaæ. Nie bêdzie to mia³o wp³ywu na 
		ustawienia domy¶lne.';
$helptxt['trackStats'] = 'Statystyki:<br />To pozwoli na wy¶wietlanie u¿ytkownikom listy najnowszych wiadomo¶ci oraz najbardziej popularnych w±tków na Twoim forum. 
		Opcja ta pozwoli równie¿ na wy¶wietlanie ró¿nych statystyk, jak np. najwy¿sza liczba u¿ytkowników online, nowi u¿ytkownicy czy nowe w±tki.<hr />
		Trafienia:<br />Dodaje nastêpn± kolumnê na stronie statystyk z ilo¶ci± trafieñ na Twoim forum.';
$helptxt['titlesEnable'] = 'W³±czenie Tytu³ów osobistych pozwoli u¿ytkownikom ze stosownymi uprawnieniami na stworzenie w³asnych tytu³ów widocznych pod nazw±.<br/>
		<em>Na przyk³ad:</em><br/>Janek<br/>Spoko kole¶';
$helptxt['topbottomEnable'] = 'Dodaje przyciski w górê i w dó³, przez co u¿ytkownicy mog± przenie¶ siê na koniec i pocz±tek strony 
		bez przewijania.';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazuj±cy czy u¿ytkownik jest online lub offline';
$helptxt['todayMod'] = 'Bêdzie pokazywaæ "Dzisiaj" lub "Wczoraj", je¶li to mo¿liwe, zamiast daty.<br /><br />  <strong>Przyk³ady:</strong><br /><br />  <dt>  <dt>Wy³±czone</dt>  <dd>Pa¼dziernik 3, 2009 at 12:59:18 am</dd>  <dt>Tylko dzi¶</dt>  <dd>Dzi¶ at 12:59:18 am</dd>  <dt>Dzi¶ i Wczoraj</dt>  <dd>Wczoraj at 09:36:55 pm</dd>  </dt>  ';
$helptxt['disableCustomPerPage'] = 'Zaznacz tê opcjê, aby uniemo¿liwiæ u¿ytkownikom zmianê ilo¶ci wiadomo¶ci i w±tków pokazywanych odpowiednio na stronach "Indeks Wiadomo¶ci"" i "Poka¿ w±tek".';
$helptxt['enablePreviousNext'] = 'To spowoduje wy¶wietlanie odno¶nika do nastêpnego i poprzedniego w±tku.';
$helptxt['pollMode'] = 'Ta opcja w³±cza lub wy³±cza ankiety. Je¶li opcja jest wy³±czona, to wszystkie istniej±ce ankiety zostan± ukryte
		na li¶cie w±tków. Mo¿esz wybraæ, czy pokazywaæ w±tki, w których by³y ankiety bez ankiet, przez wybranie
		&quot;Poka¿ ankiety jako w±tki&quot;.<br /><br />By zdecydowaæ kto mo¿e tworzyæ ankiety, lub w nich g³osowaæ,
		zajrzyj do zarz±dzania zezwoleniami. Pamiêtaj o tym, je¶li komu¶ nie dzia³aj± ankiety.';
$helptxt['enableVBStyleLogin'] = 'W³±czenie tej opcji spowoduje wy¶wietlanie ma³ego pola logowania na ka¿dej stronie forum.';
$helptxt['enableCompressedOutput'] = 'W³±czenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zu¿ycia przepustowo¶ci ³±cza, ale wymaga 
		zainstalowanej bibloteki zlib.';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br /><br />
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje bazê danych do przechowywania informacji o sesjach - jest to najlepsze rozwi±zanie dla serwerów wykorzystuj±cych load-balancing, ale pomaga równie¿ przy wszelkich problemach z timeoutem i mo¿e przyspieszyæ dzia³anie forum.';
$helptxt['databaseSession_loose'] = 'W³±czenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, ¿e powrót do poprzedniej strony nie bêdzie skutkowaæ jej prze³adowaniem. Minusem jest miêdzy innymi to, ¿e ikony nowych wiadomo¶ci nie od¶wie¿± siê (dopóki nie przejdziesz do niej klikniêciem zamiast przyciskiem powrotu).';
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynno¶ci w sekundach, po którym sesja wyga¶nie. Je¶li czas bezczynno¶ci u¿ytkownika przekroczy t± warto¶æ kolejna akcja spowoduje wy¶wietlenie komunikatu &quot;sesja wygas³a&quot;. Warto¶ci powy¿ej 2400 sekund nie s± zalecane.';
$helptxt['enableErrorLogging'] = 'To spowoduje logowanie wszystkich b³êdów, jak np. b³êdne logowania, tak aby mo¿na by³o zobaczyæ, co posz³o ¼le.';
$helptxt['enableErrorQueryLogging'] = 'Uwzglêdnia pe³ne zapytanie wys³ane do bazy danych z jakimkolwiek b³êdem bazy. Wymaga w³±czenia rejestracji b³êdów.<br /><br /><strong>Uwaga:  Wp³ynie to na mo¿liwo¶æ filtrowania logu b³êdów po komunikacie b³êdu.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umo¿liwi u¿ytkownikom wy³±czenie powiadamiania o w±tkach, które administrator zaznaczy³ jako w±tki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcjê otrzymywania tre¶ci odpowiedzi i wiadomo¶ci w powiadomieniach wysy³anych na email.<br /><br />Czê¶to u¿ytkownicy odpowiadaj± na takie powiadomienia, a to w wiêkszo¶ci przypadków oznacza, ¿e odpowied¼ otrzymuje webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak bêdzie wy¶wietlana ilo¶æ stron w jednym temacie.<br /><em>Przyk³ad:</em>
		&quot;3&quot; wy¶wietlaj jako: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; wy¶wietlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'To bêdzie pokazywaæ na dole strony forum czas w sekundach jakie SMF zaje³o wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wy³±czy wklejanie zagnie¿d¿onych cytatów, podczas cytowania wiadomo¶ci.';
$helptxt['simpleSearch'] = 'To wy¶wietli prosty formularz wyszukiwania i link do bardziej zaawansowanego formularza.';
$helptxt['max_image_width'] = 'To pozwala na ustawienie maksymalnego rozmiaru wysy³anych obrazków. Nie bêdzie to mia³o wp³ywu na obrazki mniejsze ni¿ maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybraæ pomiêdzy domy¶lnymi ustawieniami PHP a zast±pieniem tych ustawieñ przez SMTP. PHP nie obs³uguje autoryzacji SMTP (której wiele serwerów aktualnie wymaga), tak wiêc je¶li jest ona dla Ciebie konieczna, powiniene¶ wybraæ SMTP. Miej na uwadze, ¿e SMTP mo¿e dzia³aæ wolniej, a niektóre serwery mog± nie przyjmowaæ nazwy u¿ytkownika i has³a.<br /><br />Nie musisz wype³niaæ ustawieñ SMTP je¶li zdecydowa³e¶ siê na domy¶lne utawienia PHP.';
$helptxt['attachment_manager_settings'] = 'Za³±cznik to plik, który mo¿e zostaæ wys³any na serwer przez u¿ytkownika i dodany do wiadomo¶ci.<br /><br />
		<strong>Sprawd¼ rozszerzenie za³±cznika</strong>:<br /> Czy chcesz sprawdziæ rozszerzenie pliku?<br />
		<strong>Dozwolone rozszerzenia za³±czników</strong>:<br /> Mo¿esz tutaj ustawiæ jakie rozszerzenia s± akceptowane.<br />
		<strong>Katalog za³±czników</strong>:<br /> ¦cie¿ka do twojego folderu z za³±cznikiem.<br />(przyk³ad: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Maksymalny rozmiar folderu z za³±cznikami</strong> (w KB):<br /> Okre¶l jak du¿y mo¿e byæ folder z za³±cznikami, w³±czaj±c w to pliki ju¿ siê w nim znajduj±ce.<br />
		<strong>Maksymalny rozmiar za³±czników na jedn± wiadomo¶æ</strong> (w KB):<br /> Okre¶l maksymalny rozmiar wszystkich za³±czników w wiadomo¶ci. Je¶li bedzie on ni¿szy ni¿ rozmiar przypadaj±cy na za³±cznik, ten tutaj bêdzie ograniczeniem.<br />
		<strong>Maksymalny rozmiar jednego za³±cznika</strong> (w KB):<br /> Okre¶l maksymalny rozmiar ka¿dego pojedynczego za³±cznika.<br />
		<strong>Maksymalna liczba za³±czników na wiadomo¶æ</strong>:<br /> Okre¶l ilo¶æ za³±czników jak± mo¿na dodaæ do jednej wiadomo¶ci.<br />
		<strong>Wy¶wietlaj za³±czniki graficzne jako obrazki pod wiadomo¶ci±</strong>:<br /> Je¶li wysy³any plik jest obrazkiem, zostanie pokazany na dole wiadomo¶ci.<br />
		<strong>Zmieñ rozmiar obrazka, gdy ten jest wy¶wietlany pod wiadomo¶ci±</strong>:<br /> Je¶li powy¿sza opcja bêdzie wybrana, to zapisze oddzielny (mniejszy) za³±cznik jako miniaturkê aby zmniejszyæ transfer.<br />
		<strong>Maksymalna szeroko¶æ i wysoko¶æ miniaturki</strong>:<br /> Stosowaæ tylko z opcj± &quot;Zmieñ wielko¶æ obrazów widocznych pod wiadomo¶ciami&quot;, zmniejsza szeroko¶æ i wysoko¶æ za³±czników. Zmiana wielko¶ci bêdzie proporcjonalna.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded avatars. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['karmaMode'] = 'Reputacja (w angielskiej wersji: \'karma\') to mo¿liwo¶æ pokazania popularno¶ci u¿ytkownika na forum. U¿ytkownicy, je¶li maj± udzielone zezwolenie, mog± zag³osowaæ na innych u¿ytkowników klikaj±c 
		\'popieram\' lub \'potêpiam\' (lub inne ustawione w opcjach). Administrator mo¿e zmieniæ minimaln± ilo¶æ wiadomo¶ci napisanych przez u¿ytkownika, powy¿ej której u¿ytkownik ma prawo zdobywania reputacji, czas pomiêdzy 
		g³osowaniem na tego samego u¿ytkownika, oraz czy admini równie¿ musz± czekaæ.<br /><br />Zezwolenie na g³osowanie jest ustawiane dla grupy, lub u¿ytkownika poprzez zezwolenia. 
		Je¶li kto¶ na forum ma problemy, sprawd¼ jeszcze raz zezwolenia.';
// !!! This should be reused or removed.
$helptxt['cal_enabled'] = 'Kalendarz mo¿e byæ u¿ywany do wy¶wietlania dat urodzin albo wa¿nych wydarzeñ w ¿yciu spo³eczno¶ci.<br /><br />
		<strong>Pokazuj dni jako odno¶niki do \'Dodaj wydarzenie\'</strong>:<br />To pozwoli u¿ytkownikowi na dodawanie wydarzenia do tego dnia, którego data zosta³a wybrana<br />
		<strong>Pokazuj numery tygodni</strong>:<br />Poka¿, który jest tydzieñ.<br />
		<strong>Maksymalna liczba dni na przód w indeksie dzia³ów</strong>:<br />Je¶li ustawiony jest na 7, zostan± pokazane wydarzenia z nastêpnego tygodnia.<br />
		<strong>Pokazuj ¶wiêta w indeksie dzia³ów</strong>:<br />Pokazuj dzisiajesze ¶wiêta w tablicy kalendarza w indeksie dzia³ów.<br />
		<strong>Pokazuj urodziny w indeksie dzia³ów</strong>:<br />Pokazuj dzisiejsze urosziny w tabeli kalendarza w indeksie dzia³ów.<br />
		<strong>Pokazuj wydarzenia w indeksie dzia³ów</strong>:<br />Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie dzia³ów.<br />
		<strong>Domy¶lny dzia³ do dodawania wydarzeñ</strong>:<br />Jaki jest domy¶lny dzia³ do dodawania wydarzeñ?<br />
		<strong>Zezwól na wydarzenia nie powi±zane z wiadomo¶ciami</strong>:<br />Zezwól u¿ytkownikom wysy³aæ wydarzenia bez wymagania, aby by³y powi±zane z wiadomo¶ci± w dziale.<br />
		<strong>Rok pierwszy</strong>:<br />Zaznacz &quot;pierwszy&quot; rok na li¶cie kalendarza.<br />
		<strong>Rok ostatni</strong>:<br />Zaznacz &quot;ostatni&quot; rok na li¶cie kalendarza<br />
		<strong>Kolor urodzin</strong>:<br />Wybierz kolor tekstu dla urodzin<br />
		<strong>Kolor wydarzeñ</strong>:<br />Wybierz kolor tekstu dla wydarzeñ<br />
		<strong>Kolor ¶wi±t</strong>:<br />Wybierz kolor tekstu dla ¶wi±t<br />
		<strong>Zezwól na kilkudniowe wydarzenia</strong>:<br />Zezwól na kilkudniowe wydarzenia.<br />
		<strong>Maksymalna d³ugo¶æ trwania wydarzenia (w dniach)</strong>:<br />Wybierz maksymaln± ilo¶æ dni jak± mo¿e trwaæ dane wydarzenie.<br /><br />
		Pamiêtaj, ¿e u¿ywanie kalendarza (dodawanie wydarzeñ, pokazywanie wydarzeñ, etc.) mo¿e byæ kontrolowane za pomoc± zezwoleñ w panelu zezwoleñ.';
$helptxt['localCookies'] = 'SMF u¿ywa ciasteczek (cookies) do przechowywania informacji na komputerze u¿ytkownika. Ciasteczka mog± byæ przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br />
	Sprawd¼ t± opcjê je¶li wystêpuj± problemy polegaj±ce na automatycznym wylogowywaniu u¿ytkowników.<hr />
	Ciasteczka przechowywane globalnie s± mniej bezpieczne je¶li s± u¿ywane na wspó³dzielonym serwerze (np. Tripod).<hr />
	Ciasteczka lokalne nie dzia³aj± poza katalogiem forum, tak wiêc je¶li Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie bêd± w stanie uzyskaæ dostêpu do informacji o koncie u¿ytkownika.
	Globalne ciasteczka s± szczególnie polecane gdy u¿ywasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli u¿ytkownikom na korzystanie w wiadomo¶ciach z kodów BBC, dziêki czemu bêd± mogli umieszczaæ obrazki, formatowaæ tekst, itp.';
$helptxt['time_offset'] = 'Nie wszyscy administratorzy chc± aby forum u¿ywa³o tej samej strefy czasowej co serwer. U¿yj tej opcji aby ustawiæ ró¿nicê (w godzinach) miêdzy czasem na serwerze a godzin± na forum. Dozwolone s± warto¶ci ujemne oraz u³amkowe.';
$helptxt['default_timezone'] = 'Strefa czasowa serwera informuje PHP o tym, gdzie znajduje siê twój serwer. Powiniene¶ upewniæ siê czy to ustawienie jest poprawne, najlepiej wed³ug kraju/miasta w którym znajduje siê serwer. Wiêcej informacji znajdziesz na <a href="http://www.php.net/manual/en/timezones.php" target="_blank">stronie PHP</a>.';
$helptxt['spamWaitTime'] = 'Tutaj mo¿esz ustawiæ czas po up³ywie którego mo¿na napisaæ kolejn± wiadomo¶æ. Ta opcja chroni przed "spamowaniem" ustalaj±c jak czêsto u¿ytkownicy mog± wysy³aæ wiadomo¶æ.';

$helptxt['enablePostHTML'] = 'W³±czenie tej opcji umo¿liwi korzystanie w wiadomo¶ciach z podstawowych znaczników HTML:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'W tej sekcji mo¿esz zadecydowaæ czy u¿ytkownik mo¿e wybraæ styl domy¶lny, jaki styl widz± go¶cie
	i inne opcje zwi±zane ze stylami. Kliknij na stylu po prawej stronie, by zmieniæ jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj mo¿esz zainstalowaæ nowe style podaj±c katalog, wgrywaj±c archiwum lub kopiuj±c domy¶lny styl.<br /><br />Pamiêtaj ¿e katalog lub archiwum musi zawieraæ plik <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Ta opcja zezwoli twoim u¿ytkownikom na u¿ywanie Flasha bezpo¶rednio w swoich wiadomo¶ciach, tak jak obrazków. 
	Mo¿e to byæ ryzykowne pod wzglêdem bezpieczeñstwa, chocia¿ tylko kilku siê to uda³o wykorzystaæ. 
	U¯YWAJ NA W£ASN¡ ODPOWIEDZIALNO¦Æ!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Zezwól na ³±czenie siê z <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Ostatnimi aktualno¶ciami</a> itp.
	Polecamy ograniczyæ rozmiar liczby ostatnich wiadomo¶ci/aktualno¶ci ze wzglêdu na to, ¿e
	niektóre czytniki RSS, jak np. Trillian, je obetn±..';
$helptxt['hotTopicPosts'] = 'Zmienia liczbê wiadomo¶ci, która jest wymagana do oznaczenia w±tku jako &quot;gor±cy&quot; lub 
	&quot;bardzo gor±cy&quot;.';
$helptxt['globalCookies'] = 'Ta opcja w³±cza ciasteczka dzia³aj±ce we wszystkich poddomenach. Na przyk³ad je¶li:<br />
	twoja strona to http://www.simplemachines.org/,<br />
	a Twoje forum to http://forum.simplemachines.org/,<br />
	W³±czenie tej opcji umo¿liwi Ci dostêp do ciasteczek forum ze swojej strony. Nie w³±czaj tej opcji, je¶li na Twoim serwerze s± inne poddomeny (np. hacker.simplemachines.org), których nie kontrolujesz.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'To <em>wy³±cza</em> dodatkowe sprawdzania has³a przy wchodzeniu do sekcji administracyjne. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bie¿±ce has³o. (to samo którego u¿ywasz do logowania.)<br /><br />Zmuszaj±c do wpisania tego pomaga upewniæ siê ¿e chcesz wykonaæ czynno¶ci administracyjne, i ¿e wiesz co <strong>Ty</strong> robisz.';
$helptxt['emailmembers'] = 'W tej wiadomo¶ci mo¿esz u¿yæ kilku &quot;zmiennych&quot;. S± to:<br />
	{$board_url} - Adres URL Twojego forum.<br />
	{$current_time} - Aktualny czas.<br />
	{$member.email} - Adres e-mail aktualnego u¿ytkownika.<br />
	{$member.link} - Link do profilu aktualnego u¿ytkownika.<br />
	{$member.id} - Id aktualnego u¿ytkownika.<br />
	{$member.name} - Nazwa aktualnego u¿ytkownika. (do personalizacji)<br />
	{$latest_member.link} - Link do profilu ostatnio zarejestrowanego u¿ytkownika.<br />
	{$latest_member.id} - Id ostatnio zarejestrowanego u¿ytkownika.<br />
	{$latest_member.name} - Nazwa ostatnio zarejestrowanego u¿ytkownika.';
$helptxt['attachmentEncryptFilenames'] = 'Kodowanie nazwy za³±cznika umo¿liwia psiadnie wiêcej ni¿ jednego za³±cznika o tej samej nazwie, 
	dla bezpieczeñstwa u¿yj plików .php dla za³±cznika i wzmocnij ochronê. Jednak¿e mo¿e to utrudniæ odbudowê bazy danych w pewnych 
	drastycznych przypadkach.';

$helptxt['failed_login_threshold'] = 'Ustawia liczbê nieudanych prób logowania zanim u¿ytkownik zostanie przekierowany do strony z przypominaniem has³a.';
$helptxt['oldTopicDays'] = 'Je¶li ta opcja jest w³±czona, u¿ytkownik zobaczy ostrze¿enie podczas próby napisania wiadomo¶ci w w±tku, w którym nikt nic nie napisa³ w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilo¶ci dni na 0 spowoduje wy³±czenie pokazywania ostrze¿eñ.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w których mo¿na jeszcze edytowaæ wiadomo¶æ zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po up³ywie których u¿ytkownik nie bêdzie móg³ edytowaæ napisanej przez siebie wiadomo¶ci. Ustaw 0 by wy³±czyæ.<br /><br /><em>Pamiêtaj: Opcja ta nie wp³ywnie na u¿ytkowników maj±cych pozwolenie na edycjê wiadomo¶ci pozosta³ych u¿ytkowników.</em>';
$helptxt['posts_require_captcha'] = 'To ustawienie zmusza u¿ytkowników do przej¶cia weryfikacji anti-spam bot, za ka¿dym razem, kiedy chc± napisaæ post na forum. Tylko u¿ytkownicy o ilo¶ci napisanych postów, mniejszej ni¿ ustawiona liczba, bêd± zmuszeni przej¶æ tê procedurê. To powinno pomóc zwalczaæ spamowanie przez automatyczne skrypty.';
$helptxt['enableSpellChecking'] = 'W³±cza sprawdzanie pisowni. Musisz mieæ zainstalowan± bibliotekê pspell na serwerze, a Twoja konfiguracja PHP musi byæ ustawiona do u¿ycia tej biblioteki. Wydaje siê ¿e twój serwer ' . (function_exists('pspell_new') ? 'MA skonfigurowany pspell' : 'NIE MA skonfigurowanego pspell\'a') . '.';
$helptxt['disable_wysiwyg'] = 'To ustawienie wy³±cza wszystkim u¿ytkownikom mo¿liwo¶æ korzystania z edytora WYSIWYG (&quot;What You See Is What You Get&quot;) na stronie edycji wiadomo¶ci.';
$helptxt['lastActive'] = 'Ustawia liczbê minut przez które ludzie bêd± widoczni na g³ównej stronie forum jako aktywni. Domy¶lnie 15 minut.';

$helptxt['customoptions'] = 'Ta sekcja definiuje opcje dostêpne dla u¿ytkownika z listy rozwijalnej. Jest klika kluczowych punktów do zauwa¿enia w tej sekcji:
	<ul class="normallist">
		<li><b>Opcje Domy¶lne:</b> Zale¿nie, które opcje maj± &quot;przycisk radio&quot; zaznaczony, bêd± one domy¶lnym wyborem u¿ytkownika gdy otworzy swój profil.</li>
		<li><b>Usuwanie Opcji:</b> Aby usun±æ opcjê po prostu odznacz j± - wszyscy u¿ytkownicy z zaznaczon± dan± opcj±, bêd± mieli j± odznaczon±.</li>
		<li><b>Zmiana kolejno¶ci Opcji:</b> Mo¿esz zmieniæ kolejno¶æ opcji poprzez przeniesienie tekstu pomiêdzy boksami. Jednak¿e - wa¿na uwaga - musisz upewniæ siê, ¿e <b>nie</b> przenosisz tekstu, podczas zmiany kolejno¶ci opcji, w innym wypadku dane u¿ytkownika zostan± utracone.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Ta opcja zoptymalizuje bazê danych co zadan± ilo¶æ dni. Ustaw 1, aby optymalizowaæ bazê danych codziennie. Mo¿esz równie¿ okre¶liæ maksymaln± ilo¶æ u¿ytkowników bêd±cych online na forum. Dziêki temu nie przeci±¿ysz serwera i nie sprawisz, ¿e u¿ytkownicy bêd± niezadowoleni z powolnego dzia³ania forum.';
$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca dzia³anie forum tak, jakby nic siê nie sta³o. Mo¿e byæ to u¿yteczne, poniewa¿ jedynym sposobem na naprawê jest REPAIR tabeli, a dziêki temu forum nie bêdzie wy³±czone dopóki nie dowiesz siê o awarii. Zostaniesz powiadomiony emailem je¶li co¶ takiego siê stanie.';

$helptxt['enableParticipation'] = 'To pokazuje ma³± ikonê przy w±tkach, w których u¿ytkownik napisa³.';

$helptxt['db_persist'] = 'Ustal sta³e po³±czenie (persistent connection) z baz± danych aby zwiêkszyæ wydajno¶æ. Je¶li nie jeste¶ na dedykowanym serwera, mo¿e to powodowaæ problemy z Twoim hostem.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['queryless_urls'] = 'Zmienia troszkê format adresów URL tak, aby by³y one lepiej indeksowane przez wyszukiwarki. Bêd± one wygl±daæ mniej wiêcej tak index.php/topic,1.html.<br /><br />Ta funkcja' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nie') . ' bêdzie dzia³aæ na Twoim serwerze.';
$helptxt['countChildPosts'] = 'Po w³±czeniu tej opcji, przy dzia³ach zawieraj±cych poddzia³y pojawi siê liczba wiadomo¶ci bêd±ca sum± poddzia³ów. <br /><br />Mo¿e to znacz±co spowolniæ forum, ale dziêki temu dzia³y z poddzia³ami niezawieraj±ce wiadomo¶ci nie bêd± pokazywaæ 0 wiadomo¶ci.';
$helptxt['fixLongWords'] = 'Ta opcja spowoduje dzielenie wyrazów d³u¿szych ni¿ okre¶lona ilo¶æ znaków na czê¶ci tak, aby nie psu³y one designu forum. (tak bardzo...) Ta opcja nie powinna byæ ustawiona na warto¶æ poni¿ej 40. Opcja nie bêdzie dzia³aæ na forum gdzie jest u¿ywany UTF-8 oraz PHP w wersji ni¿szej ni¿ 4.4.0. To ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'BÊDZIE' : 'NIE BÊDZIE') . ' dzia³aæ na twoim serwerze';
$helptxt['allow_ignore_boards'] = 'Zaznaczenie tej opcji umo¿liwi u¿ytkownikom wybranie dzia³ów, które chcieliby ignorowaæ.';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie w³aczyæ lub wy³±czyæ mo¿liwo¶æ sprawdzania u¿ytkownikom kto przegl±da forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usuniête w±tki i wiadomo¶ci w okre¶lonym dziale.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala twoim u¿ytkownikom na zg³aszanie prywatnych wiadomo¶ci, które otrzymali, do ekipy administracyjnej. Mo¿e byæ to pomocne przy tropieniu nadu¿yæ systemu prywatnych wiadomo¶ci.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilo¶ci odbiorców wiadomo¶ci prywatnych, wysy³anych przez u¿ytkownika forum. Mo¿e byæ to u¿yteczne do powstrzymania spamu wysy³anego przy u¿yciu systemu PW. Pamiêtaj, ¿e u¿ytkownicy z uprawnieniami do wysy³ania newsletterów nie s± objêci tym ograniczeniem. Wpisanie warto¶ci zerowej spowoduje wy³±czenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na u¿ytkownikach wprowadzenie kodu z obrazka przy ka¿dym wysy³aniu prywatnej wiadomo¶ci. Tylko u¿ytkownicy o liczbie wiadomo¶ci poni¿ej ustawionej liczby bêd± musieli wpisywaæ kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczbê prywatnych wiadomo¶ci jak± u¿ytkownik mo¿e wys³aæ w ci±gu godziny. Nie wp³ywa na moderatorów i administracjê forum.';

$helptxt['default_personal_text'] = 'Ustawia domy¶lny tekst który u¿ytkownicy bêd± miali ustawiony w polu &quot;prywatny tekst/podpis.&quot;';

$helptxt['modlog_enabled'] = 'Loguj wszystkie czynno¶ci moderacyjne.';

$helptxt['guest_hideContacts'] = 'Je¶li wybierzesz tê opcjê, to adresy email i numery kontaktów komunikatorów wszystkich u¿ytkowników 
	bêd± ukrywane przed go¶æmi';

$helptxt['registration_method'] = 'Ta opcja umo¿liwia wybór metody rejestracji, przez osoby chc±ce do³±czyæ do u¿ytkowników forum. Masz wybór pomiêdzy:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Rejestracja wy³±czona:</strong><br />
				Wy³±cza rejestracjê, co oznacza, ¿e jedyny sposób na do³±czenie do grona u¿ytkowników, to stworzenie konta przez administratora.<br />
		</li><li>
			<strong>Rejestracja natychmiastowa</strong><br />
				Nowi u¿ytkownicy mog± zalogowaæ siê i pisaæ wiadomo¶ci bezpo¶rednio po rejestracji.<br />
		</li><li>
			<strong>Aktywacja u¿ytkownika</strong><br />
				Nowi u¿ytkownicy po rejestracji otrzymaj± email z odno¶nikiem do aktywacji konta. Dopiero po klikniêciu stan± siê pe³noprawnymi u¿ytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adresów email.<br />
		</li><li>
			<strong>Zatwierdzenie u¿ytkownika</strong><br />
				Nowi u¿ytkownicy po rejestracji musz± zaczekaæ, a¿ ich rejestracjê zatwierdzi administrator.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Identyfikacja z OpenID</b><br />
	OpenID oznacza u¿ywanie jednej nazwy u¿ytkownika pomiêdzy ró¿nymi stronami, w celu ulepszenia doznañ z bycia  online. Aby u¿yæ OpenID musisz najpierw stworzyæ konto OpenID - listê dostawców znajdziesz na <a href="http://openid.net/" target="_blank">Oficjalnej stronie OpenID</a><br /><br />
	Kiedy ju¿ bêdziesz mia³ konto OpenID po prostu wpisz swój unikatowy adres identyfikacyjny do pola wprowadzania i wy¶lij. Zostaniesz przeniesiony na witrynê dostawcy w celu sprawdzenia to¿samo¶ci, przed przyznaniem dostêpu do strony.<br /><br />
	Podczas pierwszej wizyty na stronie zostaniesz poproszony o potwierdzenia paru detali zanim zostaniesz rozpoznany, po czym bêdziesz móg³ siê zalogowaæ na stronê i zmieniæ swoj± konfiguracjê profilu u¿ywaj±c swojego OpenID.<br /><br />
	Po wiêcej informacji odwied¼ <a href="http://openid.net/" target="_blank">Oficjaln± stronê OpenID</a>';

$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona wszyscy u¿ytkownicy którzy zmieni± swój adres email w profilu bêd± musieli reaktywowaæ swoje konto poprzez email wys³any na nowy adres';
$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest w³±czona nowi u¿ytkownicy otrzymaj± emaila witaj±cego ich na Twoim forum';
$helptxt['password_strength'] = 'To ustawienie okre¶la wymagan± si³ê hase³ u¿ytkowników Twojego forum. Im silniejsze jest has³o, tym trudniej je odgadn±æ lub z³amaæ. 
	Dostêpne s± nastêpuj±ce ustawienia dla si³y hase³.
	<ul class="normallist">
		<li><strong>Niska:</strong> Has³o musi mieæ d³ugo¶æ co najmniej czterech znaków.</li>
		<li><strong>¦rednia:</strong> Has³o musi mieæ d³ugo¶æ co najmniej o¶miu znaków i nie mo¿e byæ czê¶ci± nazwy u¿ytkownika lub jego adresu email.</li>
		<li><strong>Wysoka:</strong> To samo, co w ¦rednim, poza tym, ¿e has³o musi sk³adaæ siê z du¿ych i ma³ych liter oraz conajmniej jednej cyfry.</li>
	</ul>';

$helptxt['coppaAge'] = 'Warto¶æ podana w tym polu okre¶la minimalny wiek u¿ytkownika pozwalaj±cy na natychmiastow± rejestracjê na forum.
	Podczas rejestracji u¿ytkownik bêdzie musia³ potwierdziæ, czy przekroczy³ okre¶lony wiek. Je¿eli odpowied¼ bêdzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez doros³ego opiekuna - w zale¿no¶ci od wybranego trybu.
	Je¿eli zostanie wisane 0 wszelkie restrykcje zwi±zane z wiekiem bêd± ignorowane.';
$helptxt['coppaType'] = 'Je¶li ograniczenia wieku s± w³±czone, to w tym miejscu mo¿na wybraæ w jaki sposób traktowaæ osoby poni¿ej wymaganego wieku. Do wyboru s± dwa tryby postêpowania:
	<ul class="normallist">
		<li>
			<strong>Odrzucenie próby rejestracji:</strong><br />
				Ka¿dy próba rejestracji nowego u¿ytkownika poni¿ej wymaganego wieku zostanie odrzucona.<br />
		</li><li>
			<strong>Wymóg zatwierdzenia przez rodzica b±d¼ opiekuna</strong><br />
				Ka¿dy nowy u¿ytkownik poni¿ej wymaganego wieku, musi przes³aæ zgodê rodziców b±d¼ opiekunów, zanim jego konto zostanie aktywowane. 
				Zostanie te¿ przes³ane im standardowy formularz do wype³nienia przez rodziców lub opiekunów, oraz dane kontaktowe, na jaki ma on byæ wys³any.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie ma³oletnich mogli przes³aæ formularz ze zgod±. Musi byæ wype³nione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczaj±c tê opcje pozwolisz u¿ytkownikom na ukrycie swojego statusu online przed innymi uzytkownikami (oprócz administratorów). Je¿eli opcja pozostanie wy³aczona jedynie osoby moderuj±ce forum bed± mog³y ukryc swoj± obecno¶æ. Wy³±czenie tej opcji nie zmieni istniej±cego statusu u¿ytkownika - powstrzyma ich przed ukrywaniem statusu w przysz³o¶ci.';
$helptxt['make_email_viewable'] = 'Je¶li ta opcja jest w³±czona, adresy email u¿ytkowników zamiast byæ ukryte dla cz³onków grup i go¶ci bêd± publicznie widoczne  na forum. W³±czenie tego narazi u¿ytkowników na wielkie ryzyko zostania ofiar± spamu jako rezultat mailowych ¿niwiarzy przegl±daj±cych twoje forum. Zauwa¿, ¿e ta opcja nie nadpisuje ustawieñ u¿ytkowników o ukrywaniu swoich adresów email przed u¿ytkownikami. W³±czanie tej opcji <b>nie</b>jest rekomendowane.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma seperated list of words, and should not use HTML. If this is left blank the default set is sent. As means of an example the default set is:<br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Ten panel pokazuje niektóre z najczêstszych problemów i pytañ dotycz±cych konfiguracji Twojego serwera. Nie mart siê, te informacje nie s± nigdzie zapisywane.<br /><br />Je¶li ca³y czas pojawia komunikat &quot;Retrieving support information...&quot;, Twój komputer prawdopodobnie nie mo¿e po³±czyæ siê z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Tutaj mo¿esz zobaczyæ kilka z najpopularniejszych i kilka losowych pakietów lub modyfikacji, których instalacja jest szybka i ³atwa. <br /><br />Je¶li ta sekcja siê nie pojawia, Twój komputer nie mo¿e prawdopodobnie po³±czyæ siê z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Ten dzia³ pokazuje kilka ostatnich i najpopularniejszych szablonów z <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Mo¿e siê jednak nie wy¶wietliæ poprawnie, je¶li twój komputer nie jest w stanie znale¼æ <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze wzglêdów bezpieczeñstwa odpowied¼ na twoje pytanie (tak jak i na twoje has³o) jest zakodowana w taki sposób, ¿e tylko SMF moze go potwierdziæ. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i has³o.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani s± poprzez <a href="javascript:window.open(\'%1$s?action=admin;area=manageboards\'); self.close();">zarz±dzanie dzia³ami</a>, dla ka¿dego dzia³u osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalaj± administratorom decydowaæ o dostêpie grup u¿ytkowników do ró¿nych czynno¶ci na forum.<br /><br />Mo¿na zarz±dzaæ zezwoleniami poprzez dzia³y lub grupy u¿ytkowników klikaj±c w \'Modyfikuj.\'';
$helptxt['permissions_board'] = 'Je¶li dzia³ ma ustawienie \'globalne\', oznacza to, ¿e nie posiada ¿adnych dodatkowych pozwoleñ. Ustawienie \'lokalne\' oznacza, ¿e dzia³ posiada swoje odrêbne zezwolenia. Pozwala to na ograniczenie lub zwiêkszenie dostêpu do którego¶ z dzia³ów, bez konieczno¶ci zmian w ca³ym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie domy¶lnych zezwoleñ dla grup. Standardowe to zwyczajne prawa u¿ytkownika. Restrykcyjne to takie jakie ma go¶æ. Moderatorskie to prawa jakie posiadaj± moderatorzy. Przynale¿no¶æ do obs³ugi forum daje prawa bardzo bliskie administratorskim.';
$helptxt['permissions_deny'] = 'Zabronienie jakiej¶ czynno¶ci jest przydatne, je¶li chcesz zmieniæ pozwolenia konkretnemu u¿ytkownikowi. Mo¿esz te¿ stworzyæ grupê u¿ytkowników z odebranymi prawami i oddaæ tam tych u¿ytkowników.<br /><br />Zalecamy ostro¿ne stosowanie. Po zabronieniu u¿ytkownikowi wybranych czynno¶ci na forum, nie bêdzie on mia³ do nich dostêpu, niezale¿nie od grupy, do której przynale¿y.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilo¶ci wiadomo¶ci pozwalaj± na dodanie dodatkowych praw u¿ytkownikom, którzy napisali okre¶lon± liczbê wiadomo¶ci. Tak by np. nagrodziæ wiernych u¿ytkowników forum. Te zezwolenia <em>dodaj± siê</em> do zezwoleñ z innych grup, do których nale¿± u¿ytkownicy.';
$helptxt['membergroup_guests'] = 'Grupa Go¶cie to wszyscy u¿ytkownicy, którzy nie s± zalogowani.';
$helptxt['membergroup_regular_members'] = 'U¿ytkownikami bez grupy s± wszyscy u¿ytkownicy którzy s± zarejestrowani, ale nie maj± przydzielonej ¿adnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator mo¿e z definicji robiæ wszystko i widzieæ wszystkie fora. Nie istniej± ustawienia uprawnieñ dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to specjalna grupa. Pozwolenia i ustawienia dotycz±ce tej grupy dotycz± siê moderatorów, ale <em>tylko w dzia³ach, w których moderuj±</em>. Poza tymi dzia³ami, ich prawa nie ró¿ni± siê od praw zwyk³ych u¿ytkowników.';
$helptxt['membergroups'] = 'W SMF s± dwa rodzaje grup u¿ytkowników:
	<ul class="normallist">
		<li><strong>Zwyk³e grupy:</strong> To takie grupy, do których u¿ytkownicy nie s± przydzielani automatycznie. By przypisaæ u¿ytkownika do grupy, administrator musi wej¶æ do jego profilu i klikn±æ na &quot;ustawienia konta&quot;. Z tego miejsca mo¿na przydzieliæ go do dowolnej liczby istniej±cych grup.</li>
		<li><strong>Grupy oparte na ilo¶ci wiadomo¶ci:</strong> W odró¿nieniu od zwyk³ych grup, do grup opartych na ilo¶ci wiadomo¶ci napisanych przez u¿ytkownika, nie mo¿na przydzieliæ u¿ytkowników. U¿ytkownicy s± przydzielani do nich automatycznie po osi±gniêciu okre¶lonej liczby wiadomo¶ci.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Mo¿esz edytowaæ te zdarzenia poprzez klikniêcie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_backup'] = 'Tutaj mo¿esz zapisaæ kopiê wszystkich wiadomo¶ci, ustawieñ, u¿ytkowników i innych informacji dotycz±cych Twojego forum w bardzo du¿ym pliku.<br /><br />Zaleca siê, aby dla bezpieczeñstwa robiæ to do¶æ czêsto (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <strong>ca³kowicie</strong> i <strong>nieodwracalnie</strong> usun±æ stare w±tki. Zaleca siê zrobiæ najpierw kopiê na wypadek, gdyby zosta³o usuniête co¶, czego nie chcia³e¶ skasowaæ.<br /><br />U¿ywaj tej opcji z nale¿yt± ostro¿no¶ci±.';
$helptxt['maintenance_members'] = 'Pozwala <strong>ca³kowicie</strong> i <strong>nieodwracalnie</strong> konta u¿ytkowników Twojego forum. Zaleca siê zrobiæ najpierw kopiê na wypadek, gdyby zosta³o usuniête co¶, czego nie chcia³e¶ skasowaæ.<br /><br />U¿ywaj tej opcji z nale¿yt± ostro¿no¶ci±.';

$helptxt['avatar_server_stored'] = 'Ta opcja umo¿liwia u¿ytkownikom forum na u¿ycie awatarów znajduj±cych siê ju¿ na twoim serwerze. Znajduj± siê one przewa¿nie w tym samym katalogu co SMF w folderze awatarów.<br />Jako podpowied¼ dodamy, ¿e je¶li stworzysz oddzielne katalogi w folderze awatarów, powstan±  &quot;kategorie&quot; awatarów.';
$helptxt['avatar_external'] = 'Kiedy ta funkcja jest w³±czona, u¿ytkownicy mog± podaæ w³asny URL to awatara. Minusem tego jest to, ¿e w niektórych przypadkach, mog± oni u¿yæ awatara zbyt du¿ego, albo z podobizn±, której sobie nie ¿yczysz na swoim forum.';
$helptxt['avatar_download_external'] = 'Je¿eli w³±czysz t± opcjê, bêdzie mo¿liwe pobranie awatarów z zewnêtrznego adresu URL podanego przez u¿ytkownika. Awatar bêdzie traktowany jak wgrany na serwer.';
$helptxt['avatar_upload'] = 'Ta opcja jest podobna do &quot;Zezwól u¿ytkownikom na posiadanie awatarów z innego serwera&quot;, ale masz lepsz± kontrolê nad awatarami, mo¿esz zmieniaæ ich rozmiar a twoi u¿ytkownicy nie musz± posiadaæ w³asnego serwera, na którym trzymaliby swoje awatary.<br /><br />Jednak¿e  s± pewne minusy tej opcji. Musisz posiadaæ sporo miejsca na serwerze na awatary swoich forumowiczów.';
$helptxt['avatar_download_png'] = 'Pliki PNG s± wiêksze, ale oferuj± lepsz± jako¶æ. Je¶li ta opcja jest odznaczona, zostan± u¿yte pliki JPEG - które s± zwykle mniejsze, ale zwykle o mniejszej jako¶ci.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wy³±cza sprawdzanie nazwy DNS hosta, które na niektórych serwerach jest bardzo wolne. Zauwa¿ ¿e spowoduje to obni¿enie efektywno¶ci banowania.';

$helptxt['search_weight_frequency'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik bazuje na czêsto¶ci wystêpowania. Zlicza liczbê pasuj±cych do wyszukiwania wiadomo¶ci i dzieli je przez liczbê wiadomo¶ci w w±tku.';
$helptxt['search_weight_age'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik przydziela tym wiêksz± wa¿no¶æ im nowsza wiadomo¶æ.';
$helptxt['search_weight_length'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik bazuje na rozmiarze w±tku. Im wiêcej w nim wiadomo¶ci, tym bardziej jest wa¿ny.';
$helptxt['search_weight_subject'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik daje wiêksz± wagê wiadomo¶ciom, w których wyszukiwana fraza znajduje siê w temacie w±tku.';
$helptxt['search_weight_first_message'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik sprawdza czy wyszukiwana fraza znajduje siê w pierwszej wiadomo¶ci w±tku.';
$helptxt['search_weight_sticky'] = 'Wspó³czynniki wag s± u¿ywane do zadecydowania, które wiadomo¶ci pasuj±ce do wyszukiwania, s± najwa¿niejsze. Mo¿esz zmieniæ wagi, tak by dopasowaæ wyszukiwanie do tego co uwa¿asz za najwa¿niejsze na swoim forum. Na przyk³ad, je¶li u¿ywasz forum g³ównie do pisania aktualno¶ci, to wa¿niejsza mo¿e byæ data wys³ania wiadomo¶ci i tam powinna byæ najwy¿sza waga. Wszystkie liczby wag powinny byæ dodatnimi liczbami ca³kowitymi. Wszystkie wagi s± powi±zane.<br /><br />Ten wspó³czynnik przydziela wiêksz± wa¿no¶æ w±tkom przyklejonym.';
$helptxt['search'] = 'Tutaj mo¿esz dostosowaæ wszystkie ustawienia dla funkcji wyszukiwania. Nie mo¿esz tutaj ustawiæ kto ma do niej dostêp. Aby to zrobiæ przejd¼ do ekranu \'zarz±dzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania w mo¿e w znaczny sposób przyspieszyæ wyszukiwanie na forum. Szczególnie gdy liczba wiadomo¶ci na forum jest bardzo du¿a, wyszukiwanie bez indeksu mo¿e zaj±æ du¿o czasu i znacznie obci±¿aæ bazê danych. Je¶li ilo¶æ wiadomo¶ci na Twoim forum wzro¶nie powy¿ej 50 tysiêcy, we¼ pod uwagê stworzenie indeksu, by zwiêkszyæ wydajno¶æ Twoje forum.<br /><br />We¼ jednak pod uwagê, ¿e indeks wyszukiwania mo¿e zaj±æ sporo miejsca. Indeks pe³notekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiarów co tabela wiadomo¶ci), lecz nie wszystkie s³owa s± indeksowane, a niektóre wyszukiwania i tak okazuj± siê wolne. Indeks wybiórczy jest czêsto wiêkszy (zale¿nie od konfiguracji do 3 razy wiêkszy ni¿ tabela wiadomo¶ci), lecz jego wydajno¶æ jest wiêksza od indeksu pe³notekstowego i nie jest zale¿na od rodzaju wyszukiwañ.';

$helptxt['see_admin_ip'] = 'Adresy IP s± pokazywane administratorom i moderatorom w celu u³atwienia moderacji i umo¿liwienia ¶ledzenia osób, które robi± z³e rzeczy na forum. Pamiêtaj, ¿e adresy IP nie zawsze mog± byæ identyfikowane, a wiele osób zmienia swój adres IP co jaki¶ czas.<br /><br />U¿ytkownicy widz± swoje w³asne adresy IP.';
$helptxt['see_member_ip'] = 'Twój adres IP jest pokazywany jedynie Tobie i moderatorom. Pamiêtaj ¿e ta informacja nie identyfikuje jednoznacznie ludzi, poniewa¿ adresy IP zwykle siê zmieniaj± okresowo<br /><br />Nie mo¿esz sprawdziæ adresów IP innych cz³onków, a oni twojego.';
$helptxt['whytwoip'] = 'SMF u¿ywa ró¿norodnych metod detekcji adrsu IP u¿ytkownika. Zwykle metody te, daj± ten sam rezultat, czyli jeden adres IP, ale w niektórych sytuacjach, mo¿e zostaæ wykryty wiêcej ni¿ jeden adres IP. W tym przypadku SMF poka¿e oba adresy i uzyje ich do sprawdzenia listy zbanowanych adresów. Mo¿esz kliknaæ w którykolwiek adres aby go ¶ledziæ lub zbanowaæ, je¶li to konieczne.';

$helptxt['ban_cannot_post'] = 'Banowania \'Nie mo¿e wysy³aæ wiadomo¶ci\' w³±cza forum w tryb tylko-do-odczytu dla banowanego u¿ytkownika. U¿ytkownik nie mo¿e tworzyæ nowych w±tków, odpowiadaæ na istniej±ce, wysy³aæ prywatnych wiadomo¶ci oraz oddawaæ g³osów w ankietach. Zbanowany u¿ytkownik mo¿e nadal odczytywaæ prywatne wiadomo¶ci oraz w±tki.<br /><br />Wiadomo¶æ ostrzegawcza jest wy¶wietlana u¿ytkownikowi je¶li zosta³ zbanowany w ten sposób.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Ustawienia wiadomo¶ci</strong><br />
			Tu mo¿esz zmieniæ ustawienia zwi±zane z pisaniem wiadomo¶ci i sposobem ich wy¶wietlania, a tak¿e w³±czyæ sprawdzanie ortografii (je¶li serwer to umo¿liwia).
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Tu w³±czysz mo¿liwo¶æ formatowania wiadomo¶ci, oraz wybraæ które z kodów maj± byæ dostêpne dla u¿ytkowników.
		</li><li>
			<strong>S³owa cenzurowane</strong>
			By utrzymaæ s³ownictwo forum pod kontrol±, mo¿esz ustawiæ które s³owa zostan± wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<strong>Ustawienia w±tków</strong>
			Tu mo¿esz zmieniaæ ustawienia dotycz±ce w±tków: ilo¶æ na stronê, ilo¶æ potrzebna na by oznaczyæ w±tek jako gor±cy, opcje przyklejonych w±tków itp.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Ustawiaj±c uprawnienia wg grupy, spowodujesz, ¿e kiedy go¶æ zostanie rozpoznany jako robot, jego uprawnienia zmieni± siê ze standardowych go¶cia, na uprawnienia grupy, któr± tu ustawisz. Mo¿esz tego u¿yæ do ograniczenia dostêpu silnikom wyszukiwarek. Przyk³adowo: Stwórz grupê o nazwie &quot;Roboty&quot; i ustaw j± tutaj. Mo¿esz teraz zabraæ tej grupie mozliwo¶æ ogl±dania profili u¿ytkowników, co jednocze¶nie uniemo¿liwi robotom indeksacjê profili u¿ytkowników Twojego forum. <br />Uwaga: Detekcja robotów nie jest idealna i mo¿e byæ symulowana przez u¿ytkowników, dlatego nie ma gwarancji, ¿e ograniczenia bêd± zastosowane tylko do silników wyszukiwarek, które doda³e¶.';
$helptxt['show_spider_online'] = 'Te ustawienia pozwil± ci wybraæ, czy roboty powinny byæ wymienione na li¶cie u¿ytkowników online w indeksie dzia³u i stronie &quot;Kto jest online&quot;. Dostêpne opcje to:
	<ul class="normallist">
		<li>
			<strong>Wcale</strong><br />
			Roboty bêd± po prostu wy¶wietlane jako go¶cie dla wszystkich u¿ytkowników.
		</li><li>
			<strong>Poka¿ ilo¶æ robotów</strong><br />
			Index dzia³u wy¶wietli liczbê robotów aktualnie odwiedzaj±cych forum.
		</li><li>
			<strong>Poka¿ Nazwy Robotów</strong><br />
			Ka¿da nazwa robota bêdzie wy¶wietlana, wiêc u¿ytkownicy mog± zobaczyæ ile robotów aktualnie odwiedza forum - efekt odnosi siê do Indeksu dzia³u jak i strony Kto jest online.
		</li><li>
			<strong>Poka¿ Nazwy Robotów - Tylko dla Administratora</strong><br />
			Jak wy¿ej z wyj±tkiem tego, ¿e tylko Administratorzy mog± zobaczyæ status robotów - dla pozosta³ych u¿ytkowników roboty ukazuj± siê jako go¶cie.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Wybierz schemat mailowych ¿yczeñ urodzinowych. Podgl±d bêdzie widoczny w polach Tytu³ Maila i w Tre¶æ Maila.<br /><strong>Zauwa¿:</strong> Ustawienie tej opcji nie aktywuje automatycznie mailów urodzinowych. Aby aktywowaæ maile urodzinowe u¿yj <a href="%1$s?action=admin;area=maintain;sa=tasks;sesc=%2$s" target="_blank" class="new_win">Menad¿era Zadañ</a> i aktywuj zadanie rozsy³ania maili urodzinowych.';
$helptxt['pm_bcc'] = 'Kiedy wysy³asz Prywatn± Wiadomo¶æ, mo¿esz wybraæ odbiorców jako UDW czyli &quot;Ukryte Do Wiadomo¶ci&quot;. Odbiorcy oznaczeni UDW, nie bêd± widoczni dla pozosta³ych adresatów wiadomo¶ci.';

$helptxt['move_topics_maintenance'] = 'To pozwoli Ci na przesuniêcie wszystkich postów z wybranego forum na inne forum.';
$helptxt['maintain_reattribute_posts'] = 'Mo¿esz u¿yæ tej funkcji, je¶li chcesz przypisaæ wiadomo¶ci napisane przez go¶ci do zarejestrowanego u¿ytkownika. Jest to przydatne np. w sytuacji, gdy u¿ytkownik usun±³ swoje konto, pó¼niej zmieni³ zdanie i chce, aby jego stare wiadomo¶ci, by³y skojarzone z nowym kontem u¿ytkownika.';
$helptxt['chmod_flags'] = 'Mo¿esz rêcznie ustawiæ zezwolenia plikom, które zaznaczy³e¶. Aby to zrobiæ, wpisz Chmod jako warto¶æ numeryczn±. Pamiêtaj - te zmiany nie odnios± skutku w systemach operacyjnych Microsoft Windows.';

$helptxt['postmod'] = 'Ta sekcja pozwala cz³onkom zespo³u moderatorskiego (z odpowiednimi zezwoleniami) akceptowaæ odpowiedzi i w±tki zanim zostan± pokazane.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or html.  This will allow you to add more instant message providers, images or an embed etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.gif" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		Note that you can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - Url to images folder in the users current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - Url to the images folder in the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'The input mask is important for your forum\'s security. Validating the input from a user can help ensure that data is not used in a way you do not expect. We have provided some simple regular expressions as hints.<br /><br />
	<span class="smalltext">
		&nbsp;&nbsp;"[A-Za-z]+" - Match all upper and lower case alphabet characters.<br />
		&nbsp;&nbsp;"[0-9]+" - Match all numeric characters.<br />
		&nbsp;&nbsp;"[A-Za-z0-9]{7}" - Match all upper and loser case alphabet and numeric characters seven times.<br />
		&nbsp;&nbsp;"[^0-9]?" - Forbid any number from being matched.<br />
		&nbsp;&nbsp;"^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$" - Only allow 3 or 6 character hexcodes.<br />
	</span><br /><br />
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<span class="smalltext">
		&nbsp;&nbsp;? - None or one match of previous expression.<br />
		&nbsp;&nbsp;+ - One or more of previous expression.<br />
		&nbsp;&nbsp;* - None or more of previous expression.e<br />
		&nbsp;&nbsp;{xx} - An exact number from previous expression.<br />
		&nbsp;&nbsp;{xx,} - An exact number or more from previous expression.<br />
		&nbsp;&nbsp;{,xx} - An exact number or less from previous expression.<br />
		&nbsp;&nbsp;{xx,yy} - An exact match between the two numbers from previous expression.<br />
		&nbsp;&nbsp;$ - Start of string.<br />
		&nbsp;&nbsp;^ - End of string.<br />
		&nbsp;&nbsp;\\ - Escapes the next character.<br />
	</span><br /><br />
	More information and advanced techniques may be found on the internet.';

?>