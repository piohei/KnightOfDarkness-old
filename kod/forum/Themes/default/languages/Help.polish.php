<?php
// Version: 2.0 RC3; Help

global $helptxt;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['close_window'] = 'Zamknij okno';

$helptxt['manage_boards'] = '	<strong>Edytuj dzia�y</strong><br />
	W tym menu mo�esz stworzy�/usun��/zmieni� kolejno�� dzia��w i kategorii.
	Przyk�adowo, mia�e� stron� o szerokiej tematyce
	takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;.
	To by�y by kategorie najwy�szego poziomu. Pod ka�d� z nich chcia�by�
	prawdopodobnie stworzy� hierarhiczne &quot;podkategorie&quot; lub &quot;dzia�y&quot; dla temat�w.
	To b�dzie prosta hierarhia ze struktur�: <br />
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
					&nbsp;- Forum podrz�dne dla forum &quot;Motoryzacja&quot;
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

$helptxt['edit_news'] = '<ul class="normallist">  <li>  <strong>Aktualno�ci</strong><br /> Ta sekcja pozwala wprowadzi� tekst informacji o nowo�ciach, wy�wietlany na stronie g��wnej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbli�szy wtorek&quot;). Informacje te s� wy�wietlane losowo, ka�da w osobnej ramce. </li> <li> <strong>Newsletters</strong><br /> Ta sekcja pozwoli Ci na wys�anie masowej korespondencji do u�ytkownik�w forum. Najpierw musisz zaznaczy� nazwy grup u�ytkownik�w, do kt�rych chcesz wys�a� newsletter. Je�li sobie �yczysz mo�esz dodatkowo doda� u�ytkownik�w lub adresy email kt�rzy otrzymaj� newsletter. Ostatecznie mo�esz zdecydowa� w jakiej formie korespondencja ma by� wys�ana do u�ytkownika, za pomoc� wiadomo�ci prywatnej lub te� wiadomo�ci email. </li> <li> <strong>Ustawienia</strong><br /> Ta sekcja zawiera kilka ustawie� dotycz�cych aktualno�ci oraz korespondencji takich jak: dodawanie grup kt�re mog� edytowa� aktualno�ci i wysy�a� korespondencj�. Istnieje tak�e opcja konfiguracji aktualno�ci za pomoc� kt�rej mo�esz je w��czy� lub wy��czy�, ustawi� d�ugo�� znak�w w wy�wietlanej wiadomo�ci. </li> </ul>';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Przegl�danie u�ytkownik�w</strong><br />
			Przegl�daj wszystkich u�ytkownik�w forum. Zostanie wy�wietlona lista u�ytkownik�w, z kt�rych
			ka�dy jest odno�nikiem do jego profilu. Jako administrator, mo�esz modyfikowa� profile
			u�ytkownik�w. Masz ca�kowit� kontrol� nad u�ytkownikami,
			w��cznie z ich usuni�ciem z forum.<br /><br />
		</li>
		<li>
			<strong>Oczekuj�cy na zatwierdzenie</strong><br />
			Ta sekcja pokazuje si� tylko je�li w��czona jest opcja zatwierdzania wszystkich nowych u�ytkownik�w. Ka�dy rejestruj�cy si�
			na forum staje si� pe�nym u�ytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wy�wietla wszystkich tych u�ytkownik�w,
			kt�rzy oczekuj� na zatwierdzenie. Pokazuj� si� r�wnie� ich emaile i adres IP. Mo�esz wybra� czy zatwierdzi�, czy odrzuci�
			(skasowa�) ka�dego u�ytkownika z listy, poprzez zaznaczenie u�ytkownik�w i wybranie odpowiedniej czynno�ci z rozwijanej listy.
			Podczas odrzucania u�ytkownika mo�esz wybra� czy po usuni�ciu poinformowa� go emailem o swojej decyzji.<br /><br />
		</li>
		<li>
			<strong>Oczekuj�cy na aktywacj�</strong><br />
			Ta sekcja pokazuje si� tylko je�li w��czona jest opcja aktywacji kont u�ytkownika. Ta lista
			wy�wietla wszystkich u�ytkownik�w, kt�rzy jeszcze nie aktywowali swojego konta. Mo�esz wybra� czy aktywowa� te konta za nich,
			odrzuci�, czy te� przypomnie� o konieczno�ci aktywacji konta. Tak jak powy�ej, mo�esz poinformowa� lub nie u�ytkownik�w
			o swojej decyzji.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban u�ytkownik�w</strong><br />
	SMF pozwala na &quot;ban&quot; u�ytkownik�w kt�rzy zak��caj� dzia�anie forum
	poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przegl�dania 
	wiadomo�ci adres IP ka�dego z u�ytkownik�w z kt�rego wys�ana zosta�a wiadomo��. 
	Mo�esz doda� dane IP do listy ban�w co zablokuje mo�liwo�� pisania wiadomo�ci z 
	tej lokacji. Mo�esz r�wnie� banowa� u�ytkownik�w podaj�c ich adres email.';

$helptxt['featuresettings'] = '<strong>W�a�ciwo�ci i Opcje</strong><br />
	Jest tu kilka ustawie�, kt�re mo�esz zmieni� wg swoich preferencji.';

$helptxt['securitysettings'] = '<strong>Bezpiecze�stwo i Moderacja</strong><br />
	Ta sekcja zawiera ustawienia zwi�zane z bezpiecze�stwem i moderacj� na Twoim forum.';

$helptxt['modsettings'] = '<strong>Opcje forum</strong><br />
	Jest wiele opcji w tej sekcji, kt�re mo�esz zmieni� wedle uznania. Wi�kszo�� opcji modyfikacji, pojawi si� r�wnie� w tym miejscu.';

$helptxt['number_format'] = '<strong>Format liczb</strong><br />
	Mo�esz u�y� tych ustawie� do ustalenia formatu, w jakim liczby b�d� wy�wietlane na forum. Format tego ustawienia jest nast�puj�cy:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	gdzie \',\' to znak u�ywany do oddzielania grup tysi�cy, \'.\' to znak u�ywany do oddzielania cz�ci dziesi�tnej, a liczba zer po nim okre�la dok�adno�� zaokr�gle�.';

$helptxt['time_format'] = '<strong>Format Czasu</strong><br />
	Mo�esz dostosowa� spos�b wy�wietlania daty i czasu do swoich upodoba�. Wygl�da to na do�� skompilowany ci�g literek, ale nie jest specjalnie trudne.
	Konwencja pochodzi z funkcji PHP strftime i zosta�a opisana poni�ej (wi�cej szczeg��w mo�na znale�� na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Nast�puj�ce znaki s� rozpoznawane w �a�cuchu formatuj�cym: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - skr�cony dzie� tygodnia<br />
	&nbsp;&nbsp;%A - pe�ny dzie� tygodnia<br />
	&nbsp;&nbsp;%b - skr�cona nazwa miesi�ca<br />
	&nbsp;&nbsp;%B - pe�na nazwa miesi�ca<br />
	&nbsp;&nbsp;%d - dzie� miesi�ca (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dzie� miesi�ca (1 to 31) <br />
	&nbsp;&nbsp;%H - godzina (format 24-godziny)<br />
	&nbsp;&nbsp;%I - godzina (format 12-godziny)<br />
	&nbsp;&nbsp;%m - miesi�c jako liczba (01 to 12) <br />
	&nbsp;&nbsp;%M - minuty jako liczba <br />
	&nbsp;&nbsp;%p - &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br />
	&nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br />
	&nbsp;&nbsp;%S - sekundy jako liczba dziesi�tna <br />
	&nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br />
	&nbsp;&nbsp;%y - rok jako liczba dwucyfrowa (00 to 99) <br />
	&nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br />
	&nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skr�t <br />
	&nbsp;&nbsp;%% - Znak \'%\' literowy <br />
	<br />
	<em>* Nie dzia�a na serwerach opartych o system Windows.</em></span>';

$helptxt['live_news'] = '<strong>Aktualne og�oszenia</strong><br />
	Ten boks pokazuje ostatnie og�oszenia z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Powiniene� sprawdza� je na bie��co aby uzyskiwa� informacje o aktualizacjach, nowych wydaniach i wa�nych informacjach od Simple Machines.';

$helptxt['registrations'] = '<strong>Zarz�dzanie rejestracj�</strong><br />
	Ta sekcja zawiera wszystkie funkcje zwi�zane z zarz�dzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	dzia�y, kt�re s� widoczne zale�nie od ustawie� Twojego forum:<br /><br />
	<ul class="normallist">
		<li>
			<b>Zarejestruj nowego u�ytkownika</b><br />
			Tu mo�esz zarejestrowa� u�ytkownika na jego pro�b�. Jest to przydatne na zamkni�tych forach, 
			lub gdy admin chce stworzy� konto testowe. Je�li jest w��czona opcja aktywacji konta, to 
			do u�ytkownika zostanie wys�any emailem link aktywacyjny, kt�ry b�dzie musia� by� klikni�ty, 
			by zacz�� korzysta� z konta. Ewentualnie mo�na wybra� opcj�, by przes�a� u�ytkownikowi has�o na email.<br /><br />
		</li>
		<li>
			<b>Edytuj umow� rejestracyjn�</b><br />
			W tym miejscu mo�esz zmieni� umow� rejestracyjn�, wy�wietlan� podczas tworzenia nowego konta na forum.
			Mo�esz doda�, usun�� i zmieni� wszystko co zosta�o standardowo zaproponowane przez SMF.<br /><br />
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br />
			Tu ustalisz jakie wyrazy nie b�d� mog�y by� u�yte przez u�ytkownik�w do stworzenia ich nazwy konta.<br /><br />
		</li>
		<li>
			<b>Ustawienia</b><br />
			Ta sekcja b�dzie widoczna jedynie, je�li masz zezwolenie na administracj� forum. Tu mo�esz ustawi� spos�b rejestracji
      jaki b�dzie u�ywany na forum, a tak�e inne zwi�zane z rejestracj� opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Raport moderacji</strong><br />
	Ta sekcja pozwala cz�onkom grupy administrator�w �ledzi� wszystkie czynno�ci moderacyjne, kt�re wykonali moderatorzy. Aby 
	moderatorzy nie mogli usun�� odwo�a� do akcji, kt�re wykonali, wpisy nie mog� zosta� usuni�te przed up�ywem 24 godzin od ich wyst�pienia. Kolumna \'obiekty\' pokazuje zmienne powi�zane z akcj�.';
$helptxt['adminlog'] = '<strong>Raport Administratora</strong><br /> Ta sekcja pozwala cz�onkom grupy Administratorzy, �ledzi� niekt�re czynno�ci administracyjne, kt�re zosta�y dokonane na forum. Aby si� upewni�, �e administratorzy nie usun� odno�nik�w do czynno�ci jakie wykonali, wej�cia nie mog� zosta� usuni�te przez 24 godziny po dokonaniu czynno�ci.';
$helptxt['warning_enable'] = '<strong>System Ostrze�e� U�ytkownik�w</strong><br />
	Ta opcja pozwala administratorom i moderatorom przyznawa� u�ytkownikom ostrze�enia - oraz u�ywa� Poziomu Ostrze�enia, do okre�lenia 
	ogranicze� w korzystaniu z forum. Po uaktywnieniu te opcji, w sekcji Zezwolenia, mo�esz okre�li�, kt�re grupy mog� przyznawa�
	ostrze�enia u�ytkownikom. Poziom ostrze�enia mo�e by� ustawiony w profilu u�ytkownika. Dost�pne s� nast�puj�ce ustawienia:
	<ul class="normallist">
		<li>
			<strong>Poziom Ostrze�enia - U�ytkownik jest obserwowany</strong><br />
			To ustawienie pozwala zdefiniowa� procentowy poziom ostrze�enia, kt�ry musi osi�gn�� u�ytkownik, aby zosta� automatycznie wci�gni�tym na list� obserwowanych u�ytkownik�w.
			Ka�dy u�ytkownik, kt�ry jest &quot;obserwowany&quot; pojawi si� w odpowiednim obszarze w centrum moderacji.
		</li>
		<li>
			<strong>Poziom Ostrze�enia - Wszystkie wiadomo�ci u�ytkownika s� moderowane</strong><br />
			Ka�dy u�ytkownik, kt�ry przekroczy ustawion� warto��, bedzie musia� otrzyma� zgod� moderatora, na publikacj� ka�dego postu na forum
			To ustawienie b�dzie nadrz�dne do wszystkich lokalnych zezwole� zwi�zanych z moderacj� post�w.
		</li>
		<li>
			<strong>Poziom Ostrze�enia - U�ytkownik nie mo�e pisa� post�w</strong><br />
			Przekorczenie ustawionego poziomu, spowoduje ca�kowity brak mo�liwo�ci pisania post�w na forum. 
		</li>
		<li>
			<strong>Maksymalna ilo�� punkt�w ostrze�enia na dzie�</strong><br />
			To ustawienie okre�la ca�kowit� ilo�� punkt�w, kt�re pojedynczemu u�ytkownikowi, mo�e przyzna� lub odebra� moderator w okresie 24 godzin
			To usatwienie pozwala ograniczy� aktywno�� administrator�w w kr�tkim okresie czasu. Pami�taj, mo�na wy��czy� t� opcj�, ustawiaj�c warto�� na zero. 
			�aden u�ytkownik z uprawnieniami administratora, nie jest obj�ty t� regu��.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Raport b��d�w forum</strong><br />
	Ka�dy b��d, kt�ry wyst�pi� podczas korzystania z forum zostaje zapisany. Domy�lnie s� sortowane po dacie. 
	Za pomoc� strza�ek, mo�na zmieni� sortowanie, a dodatkowo mo�na w��czy� filtr, np. wg u�ytkownika. 
	Podczas filtrowania, wy�wietl� si� jedynie te wpisy, kt�re pasuj� do filtra.';
$helptxt['theme_settings'] = '<strong>Ustawienia stylu</strong><br />
	Ekran ten pozwola na zmian� specyficznych ustawie� dla obecnego stylu, w��czaj�c w to opcje takie jak 
	katalog oraz adres URL stylu czy ustawienia layoutu forum. Wi�kszo�� styl�w posiada rozmaite opcje 
	pozwalaj�ce na dostosowanie ustawie� do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<strong>Centrum U�mieszk�w</strong><br />
	Tutaj mo�esz dodawa� i usuwa� u�mieszki i zestawy u�mieszk�w. Zauwa�, �e je�li u�mieszek znajduje si� w jedym zestawie, to istnieje r�wnie� w pozosta�ych zestawach - w przeciwnym wypadku 
	mog�oby by� to zaskakuj�ce dla u�ytkownik�w forum u�ywaj�cych r�nych zestaw�w.<br /><br />

	Mo�esz tutaj r�wnie� edytowa� ikony wiadomo�ci, o ile w��czy�e� je na stronie ustawie�.';
$helptxt['calendar'] = '<strong>Zarz�dzaj kalendarzem</strong><br />
	Tutaj mo�esz dodawa� i usuwa� wpisy oraz zmieni� ustawienia kalendarza.';

$helptxt['serversettings'] = '<strong>Ustawienia serwera</strong><br />
	Tu mo�esz zmieni� g��wne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, �cie�ek URL, a tak�e
	tych zwi�zanych z poczt� i pami�ci� podr�czn�. Zastan�w si� przed zmianami w tym miejscu, gdy� b��dy mog� spowodowa�
	brak dost�pu do forum';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <strong>Przegl�daj pliki</strong><br />  Przegl�danie wszystkich za��cznik�w, awatar�w i miniaturek zgromadzonych przez SMF.<br /><br />  </li><li>  <strong>Ustawienia za��cznik�w</strong><br />  Skonfiguruj miejsce przechowywania za��cznik�w i ustaw ograniczenia na typy za��cznik�w.<br /><br />  </li><li>  <strong>Ustawienia awatar�w</strong><br />  Skonfiguruj miejsce przechowywania awatar�w i ustaw zmian� wielko�ci awatar�w.<br /><br />  </li><li>  <strong>Zarz�dzanie plikami</strong><br />  Sprawd� i napraw jakiekolwiek b��dy w katalogu za��cznik�w i usu� wybrane za��czniki.<br /><br />  </li>  </ul>';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawi� liczb� poprzednich wiadomo�ci widocznych w podsumowaniu w�tku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymaln�</em> ilo�� wiadomo�ci w w�teku, dla kt�rego zostanie wy�wietlony link do wszystkich wiadomo�ci. Ustawienie tej ilo�ci na mniej ni� &quot;Maksymalna ilo�� wiadomo�ci do wy�wietlenia na stronie w�tku&quot; spowoduje, �e link nigdy si� nie pojawi, a zbyt du�a warto�� mo�e spowolni� Twoje forum.';
$helptxt['enableStickyTopics'] = 'Przyklejone s� w�tkami kt�re pozostaj� stale na g�rze listy temat�w. Zazwyczaj u�ywane s� do przekazania wa�nych wiadomo�ci. 
		Domy�lnie tylko moderatorzy i administratorzy mog� zak�ada� przyklejone w�tki ale mo�esz to zmieni� w zezwoleniach u�ytkownik�w.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wy��czy go�ciom wykonywanie wi�kszo�ci czynno�ci poza tymi najprostszymi - logowanie, rejestracja, przypominanie has�a, itp. - na Twoim forum. Nie jest to to samo co uniemo�liwianie go�ciom dost�pu do dzia��w.';
$helptxt['userLanguage'] = 'W��czenie tej opcji pozwoli u�ytkownikom wybra� plik j�zykowy z kt�rego b�d� korzysta�. Nie b�dzie to mia�o wp�ywu na 
		ustawienia domy�lne.';
$helptxt['trackStats'] = 'Statystyki:<br />To pozwoli na wy�wietlanie u�ytkownikom listy najnowszych wiadomo�ci oraz najbardziej popularnych w�tk�w na Twoim forum. 
		Opcja ta pozwoli r�wnie� na wy�wietlanie r�nych statystyk, jak np. najwy�sza liczba u�ytkownik�w online, nowi u�ytkownicy czy nowe w�tki.<hr />
		Trafienia:<br />Dodaje nast�pn� kolumn� na stronie statystyk z ilo�ci� trafie� na Twoim forum.';
$helptxt['titlesEnable'] = 'W��czenie Tytu��w osobistych pozwoli u�ytkownikom ze stosownymi uprawnieniami na stworzenie w�asnych tytu��w widocznych pod nazw�.<br/>
		<em>Na przyk�ad:</em><br/>Janek<br/>Spoko kole�';
$helptxt['topbottomEnable'] = 'Dodaje przyciski w g�r� i w d�, przez co u�ytkownicy mog� przenie� si� na koniec i pocz�tek strony 
		bez przewijania.';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazuj�cy czy u�ytkownik jest online lub offline';
$helptxt['todayMod'] = 'B�dzie pokazywa� "Dzisiaj" lub "Wczoraj", je�li to mo�liwe, zamiast daty.<br /><br />  <strong>Przyk�ady:</strong><br /><br />  <dt>  <dt>Wy��czone</dt>  <dd>Pa�dziernik 3, 2009 at 12:59:18 am</dd>  <dt>Tylko dzi�</dt>  <dd>Dzi� at 12:59:18 am</dd>  <dt>Dzi� i Wczoraj</dt>  <dd>Wczoraj at 09:36:55 pm</dd>  </dt>  ';
$helptxt['disableCustomPerPage'] = 'Zaznacz t� opcj�, aby uniemo�liwi� u�ytkownikom zmian� ilo�ci wiadomo�ci i w�tk�w pokazywanych odpowiednio na stronach "Indeks Wiadomo�ci"" i "Poka� w�tek".';
$helptxt['enablePreviousNext'] = 'To spowoduje wy�wietlanie odno�nika do nast�pnego i poprzedniego w�tku.';
$helptxt['pollMode'] = 'Ta opcja w��cza lub wy��cza ankiety. Je�li opcja jest wy��czona, to wszystkie istniej�ce ankiety zostan� ukryte
		na li�cie w�tk�w. Mo�esz wybra�, czy pokazywa� w�tki, w kt�rych by�y ankiety bez ankiet, przez wybranie
		&quot;Poka� ankiety jako w�tki&quot;.<br /><br />By zdecydowa� kto mo�e tworzy� ankiety, lub w nich g�osowa�,
		zajrzyj do zarz�dzania zezwoleniami. Pami�taj o tym, je�li komu� nie dzia�aj� ankiety.';
$helptxt['enableVBStyleLogin'] = 'W��czenie tej opcji spowoduje wy�wietlanie ma�ego pola logowania na ka�dej stronie forum.';
$helptxt['enableCompressedOutput'] = 'W��czenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zu�ycia przepustowo�ci ��cza, ale wymaga 
		zainstalowanej bibloteki zlib.';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br /><br />
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje baz� danych do przechowywania informacji o sesjach - jest to najlepsze rozwi�zanie dla serwer�w wykorzystuj�cych load-balancing, ale pomaga r�wnie� przy wszelkich problemach z timeoutem i mo�e przyspieszy� dzia�anie forum.';
$helptxt['databaseSession_loose'] = 'W��czenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, �e powr�t do poprzedniej strony nie b�dzie skutkowa� jej prze�adowaniem. Minusem jest mi�dzy innymi to, �e ikony nowych wiadomo�ci nie od�wie�� si� (dop�ki nie przejdziesz do niej klikni�ciem zamiast przyciskiem powrotu).';
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynno�ci w sekundach, po kt�rym sesja wyga�nie. Je�li czas bezczynno�ci u�ytkownika przekroczy t� warto�� kolejna akcja spowoduje wy�wietlenie komunikatu &quot;sesja wygas�a&quot;. Warto�ci powy�ej 2400 sekund nie s� zalecane.';
$helptxt['enableErrorLogging'] = 'To spowoduje logowanie wszystkich b��d�w, jak np. b��dne logowania, tak aby mo�na by�o zobaczy�, co posz�o �le.';
$helptxt['enableErrorQueryLogging'] = 'Uwzgl�dnia pe�ne zapytanie wys�ane do bazy danych z jakimkolwiek b��dem bazy. Wymaga w��czenia rejestracji b��d�w.<br /><br /><strong>Uwaga:  Wp�ynie to na mo�liwo�� filtrowania logu b��d�w po komunikacie b��du.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umo�liwi u�ytkownikom wy��czenie powiadamiania o w�tkach, kt�re administrator zaznaczy� jako w�tki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcj� otrzymywania tre�ci odpowiedzi i wiadomo�ci w powiadomieniach wysy�anych na email.<br /><br />Cz�to u�ytkownicy odpowiadaj� na takie powiadomienia, a to w wi�kszo�ci przypadk�w oznacza, �e odpowied� otrzymuje webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak b�dzie wy�wietlana ilo�� stron w jednym temacie.<br /><em>Przyk�ad:</em>
		&quot;3&quot; wy�wietlaj jako: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; wy�wietlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'To b�dzie pokazywa� na dole strony forum czas w sekundach jakie SMF zaje�o wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wy��czy wklejanie zagnie�d�onych cytat�w, podczas cytowania wiadomo�ci.';
$helptxt['simpleSearch'] = 'To wy�wietli prosty formularz wyszukiwania i link do bardziej zaawansowanego formularza.';
$helptxt['max_image_width'] = 'To pozwala na ustawienie maksymalnego rozmiaru wysy�anych obrazk�w. Nie b�dzie to mia�o wp�ywu na obrazki mniejsze ni� maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybra� pomi�dzy domy�lnymi ustawieniami PHP a zast�pieniem tych ustawie� przez SMTP. PHP nie obs�uguje autoryzacji SMTP (kt�rej wiele serwer�w aktualnie wymaga), tak wi�c je�li jest ona dla Ciebie konieczna, powiniene� wybra� SMTP. Miej na uwadze, �e SMTP mo�e dzia�a� wolniej, a niekt�re serwery mog� nie przyjmowa� nazwy u�ytkownika i has�a.<br /><br />Nie musisz wype�nia� ustawie� SMTP je�li zdecydowa�e� si� na domy�lne utawienia PHP.';
$helptxt['attachment_manager_settings'] = 'Za��cznik to plik, kt�ry mo�e zosta� wys�any na serwer przez u�ytkownika i dodany do wiadomo�ci.<br /><br />
		<strong>Sprawd� rozszerzenie za��cznika</strong>:<br /> Czy chcesz sprawdzi� rozszerzenie pliku?<br />
		<strong>Dozwolone rozszerzenia za��cznik�w</strong>:<br /> Mo�esz tutaj ustawi� jakie rozszerzenia s� akceptowane.<br />
		<strong>Katalog za��cznik�w</strong>:<br /> �cie�ka do twojego folderu z za��cznikiem.<br />(przyk�ad: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Maksymalny rozmiar folderu z za��cznikami</strong> (w KB):<br /> Okre�l jak du�y mo�e by� folder z za��cznikami, w��czaj�c w to pliki ju� si� w nim znajduj�ce.<br />
		<strong>Maksymalny rozmiar za��cznik�w na jedn� wiadomo��</strong> (w KB):<br /> Okre�l maksymalny rozmiar wszystkich za��cznik�w w wiadomo�ci. Je�li bedzie on ni�szy ni� rozmiar przypadaj�cy na za��cznik, ten tutaj b�dzie ograniczeniem.<br />
		<strong>Maksymalny rozmiar jednego za��cznika</strong> (w KB):<br /> Okre�l maksymalny rozmiar ka�dego pojedynczego za��cznika.<br />
		<strong>Maksymalna liczba za��cznik�w na wiadomo��</strong>:<br /> Okre�l ilo�� za��cznik�w jak� mo�na doda� do jednej wiadomo�ci.<br />
		<strong>Wy�wietlaj za��czniki graficzne jako obrazki pod wiadomo�ci�</strong>:<br /> Je�li wysy�any plik jest obrazkiem, zostanie pokazany na dole wiadomo�ci.<br />
		<strong>Zmie� rozmiar obrazka, gdy ten jest wy�wietlany pod wiadomo�ci�</strong>:<br /> Je�li powy�sza opcja b�dzie wybrana, to zapisze oddzielny (mniejszy) za��cznik jako miniaturk� aby zmniejszy� transfer.<br />
		<strong>Maksymalna szeroko�� i wysoko�� miniaturki</strong>:<br /> Stosowa� tylko z opcj� &quot;Zmie� wielko�� obraz�w widocznych pod wiadomo�ciami&quot;, zmniejsza szeroko�� i wysoko�� za��cznik�w. Zmiana wielko�ci b�dzie proporcjonalna.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have SMF try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded avatars. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static. <br /> This feature is only possible if the GD module is installed on your server.';
$helptxt['karmaMode'] = 'Reputacja (w angielskiej wersji: \'karma\') to mo�liwo�� pokazania popularno�ci u�ytkownika na forum. U�ytkownicy, je�li maj� udzielone zezwolenie, mog� zag�osowa� na innych u�ytkownik�w klikaj�c 
		\'popieram\' lub \'pot�piam\' (lub inne ustawione w opcjach). Administrator mo�e zmieni� minimaln� ilo�� wiadomo�ci napisanych przez u�ytkownika, powy�ej kt�rej u�ytkownik ma prawo zdobywania reputacji, czas pomi�dzy 
		g�osowaniem na tego samego u�ytkownika, oraz czy admini r�wnie� musz� czeka�.<br /><br />Zezwolenie na g�osowanie jest ustawiane dla grupy, lub u�ytkownika poprzez zezwolenia. 
		Je�li kto� na forum ma problemy, sprawd� jeszcze raz zezwolenia.';
// !!! This should be reused or removed.
$helptxt['cal_enabled'] = 'Kalendarz mo�e by� u�ywany do wy�wietlania dat urodzin albo wa�nych wydarze� w �yciu spo�eczno�ci.<br /><br />
		<strong>Pokazuj dni jako odno�niki do \'Dodaj wydarzenie\'</strong>:<br />To pozwoli u�ytkownikowi na dodawanie wydarzenia do tego dnia, kt�rego data zosta�a wybrana<br />
		<strong>Pokazuj numery tygodni</strong>:<br />Poka�, kt�ry jest tydzie�.<br />
		<strong>Maksymalna liczba dni na prz�d w indeksie dzia��w</strong>:<br />Je�li ustawiony jest na 7, zostan� pokazane wydarzenia z nast�pnego tygodnia.<br />
		<strong>Pokazuj �wi�ta w indeksie dzia��w</strong>:<br />Pokazuj dzisiajesze �wi�ta w tablicy kalendarza w indeksie dzia��w.<br />
		<strong>Pokazuj urodziny w indeksie dzia��w</strong>:<br />Pokazuj dzisiejsze urosziny w tabeli kalendarza w indeksie dzia��w.<br />
		<strong>Pokazuj wydarzenia w indeksie dzia��w</strong>:<br />Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie dzia��w.<br />
		<strong>Domy�lny dzia� do dodawania wydarze�</strong>:<br />Jaki jest domy�lny dzia� do dodawania wydarze�?<br />
		<strong>Zezw�l na wydarzenia nie powi�zane z wiadomo�ciami</strong>:<br />Zezw�l u�ytkownikom wysy�a� wydarzenia bez wymagania, aby by�y powi�zane z wiadomo�ci� w dziale.<br />
		<strong>Rok pierwszy</strong>:<br />Zaznacz &quot;pierwszy&quot; rok na li�cie kalendarza.<br />
		<strong>Rok ostatni</strong>:<br />Zaznacz &quot;ostatni&quot; rok na li�cie kalendarza<br />
		<strong>Kolor urodzin</strong>:<br />Wybierz kolor tekstu dla urodzin<br />
		<strong>Kolor wydarze�</strong>:<br />Wybierz kolor tekstu dla wydarze�<br />
		<strong>Kolor �wi�t</strong>:<br />Wybierz kolor tekstu dla �wi�t<br />
		<strong>Zezw�l na kilkudniowe wydarzenia</strong>:<br />Zezw�l na kilkudniowe wydarzenia.<br />
		<strong>Maksymalna d�ugo�� trwania wydarzenia (w dniach)</strong>:<br />Wybierz maksymaln� ilo�� dni jak� mo�e trwa� dane wydarzenie.<br /><br />
		Pami�taj, �e u�ywanie kalendarza (dodawanie wydarze�, pokazywanie wydarze�, etc.) mo�e by� kontrolowane za pomoc� zezwole� w panelu zezwole�.';
$helptxt['localCookies'] = 'SMF u�ywa ciasteczek (cookies) do przechowywania informacji na komputerze u�ytkownika. Ciasteczka mog� by� przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br />
	Sprawd� t� opcj� je�li wyst�puj� problemy polegaj�ce na automatycznym wylogowywaniu u�ytkownik�w.<hr />
	Ciasteczka przechowywane globalnie s� mniej bezpieczne je�li s� u�ywane na wsp�dzielonym serwerze (np. Tripod).<hr />
	Ciasteczka lokalne nie dzia�aj� poza katalogiem forum, tak wi�c je�li Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie b�d� w stanie uzyska� dost�pu do informacji o koncie u�ytkownika.
	Globalne ciasteczka s� szczeg�lnie polecane gdy u�ywasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli u�ytkownikom na korzystanie w wiadomo�ciach z kod�w BBC, dzi�ki czemu b�d� mogli umieszcza� obrazki, formatowa� tekst, itp.';
$helptxt['time_offset'] = 'Nie wszyscy administratorzy chc� aby forum u�ywa�o tej samej strefy czasowej co serwer. U�yj tej opcji aby ustawi� r�nic� (w godzinach) mi�dzy czasem na serwerze a godzin� na forum. Dozwolone s� warto�ci ujemne oraz u�amkowe.';
$helptxt['default_timezone'] = 'Strefa czasowa serwera informuje PHP o tym, gdzie znajduje si� tw�j serwer. Powiniene� upewni� si� czy to ustawienie jest poprawne, najlepiej wed�ug kraju/miasta w kt�rym znajduje si� serwer. Wi�cej informacji znajdziesz na <a href="http://www.php.net/manual/en/timezones.php" target="_blank">stronie PHP</a>.';
$helptxt['spamWaitTime'] = 'Tutaj mo�esz ustawi� czas po up�ywie kt�rego mo�na napisa� kolejn� wiadomo��. Ta opcja chroni przed "spamowaniem" ustalaj�c jak cz�sto u�ytkownicy mog� wysy�a� wiadomo��.';

$helptxt['enablePostHTML'] = 'W��czenie tej opcji umo�liwi korzystanie w wiadomo�ciach z podstawowych znacznik�w HTML:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'W tej sekcji mo�esz zadecydowa� czy u�ytkownik mo�e wybra� styl domy�lny, jaki styl widz� go�cie
	i inne opcje zwi�zane ze stylami. Kliknij na stylu po prawej stronie, by zmieni� jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj mo�esz zainstalowa� nowe style podaj�c katalog, wgrywaj�c archiwum lub kopiuj�c domy�lny styl.<br /><br />Pami�taj �e katalog lub archiwum musi zawiera� plik <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Ta opcja zezwoli twoim u�ytkownikom na u�ywanie Flasha bezpo�rednio w swoich wiadomo�ciach, tak jak obrazk�w. 
	Mo�e to by� ryzykowne pod wzgl�dem bezpiecze�stwa, chocia� tylko kilku si� to uda�o wykorzysta�. 
	U�YWAJ NA W�ASN� ODPOWIEDZIALNO��!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Zezw�l na ��czenie si� z <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Ostatnimi aktualno�ciami</a> itp.
	Polecamy ograniczy� rozmiar liczby ostatnich wiadomo�ci/aktualno�ci ze wzgl�du na to, �e
	niekt�re czytniki RSS, jak np. Trillian, je obetn�..';
$helptxt['hotTopicPosts'] = 'Zmienia liczb� wiadomo�ci, kt�ra jest wymagana do oznaczenia w�tku jako &quot;gor�cy&quot; lub 
	&quot;bardzo gor�cy&quot;.';
$helptxt['globalCookies'] = 'Ta opcja w��cza ciasteczka dzia�aj�ce we wszystkich poddomenach. Na przyk�ad je�li:<br />
	twoja strona to http://www.simplemachines.org/,<br />
	a Twoje forum to http://forum.simplemachines.org/,<br />
	W��czenie tej opcji umo�liwi Ci dost�p do ciasteczek forum ze swojej strony. Nie w��czaj tej opcji, je�li na Twoim serwerze s� inne poddomeny (np. hacker.simplemachines.org), kt�rych nie kontrolujesz.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'To <em>wy��cza</em> dodatkowe sprawdzania has�a przy wchodzeniu do sekcji administracyjne. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bie��ce has�o. (to samo kt�rego u�ywasz do logowania.)<br /><br />Zmuszaj�c do wpisania tego pomaga upewni� si� �e chcesz wykona� czynno�ci administracyjne, i �e wiesz co <strong>Ty</strong> robisz.';
$helptxt['emailmembers'] = 'W tej wiadomo�ci mo�esz u�y� kilku &quot;zmiennych&quot;. S� to:<br />
	{$board_url} - Adres URL Twojego forum.<br />
	{$current_time} - Aktualny czas.<br />
	{$member.email} - Adres e-mail aktualnego u�ytkownika.<br />
	{$member.link} - Link do profilu aktualnego u�ytkownika.<br />
	{$member.id} - Id aktualnego u�ytkownika.<br />
	{$member.name} - Nazwa aktualnego u�ytkownika. (do personalizacji)<br />
	{$latest_member.link} - Link do profilu ostatnio zarejestrowanego u�ytkownika.<br />
	{$latest_member.id} - Id ostatnio zarejestrowanego u�ytkownika.<br />
	{$latest_member.name} - Nazwa ostatnio zarejestrowanego u�ytkownika.';
$helptxt['attachmentEncryptFilenames'] = 'Kodowanie nazwy za��cznika umo�liwia psiadnie wi�cej ni� jednego za��cznika o tej samej nazwie, 
	dla bezpiecze�stwa u�yj plik�w .php dla za��cznika i wzmocnij ochron�. Jednak�e mo�e to utrudni� odbudow� bazy danych w pewnych 
	drastycznych przypadkach.';

$helptxt['failed_login_threshold'] = 'Ustawia liczb� nieudanych pr�b logowania zanim u�ytkownik zostanie przekierowany do strony z przypominaniem has�a.';
$helptxt['oldTopicDays'] = 'Je�li ta opcja jest w��czona, u�ytkownik zobaczy ostrze�enie podczas pr�by napisania wiadomo�ci w w�tku, w kt�rym nikt nic nie napisa� w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilo�ci dni na 0 spowoduje wy��czenie pokazywania ostrze�e�.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w kt�rych mo�na jeszcze edytowa� wiadomo�� zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po up�ywie kt�rych u�ytkownik nie b�dzie m�g� edytowa� napisanej przez siebie wiadomo�ci. Ustaw 0 by wy��czy�.<br /><br /><em>Pami�taj: Opcja ta nie wp�ywnie na u�ytkownik�w maj�cych pozwolenie na edycj� wiadomo�ci pozosta�ych u�ytkownik�w.</em>';
$helptxt['posts_require_captcha'] = 'To ustawienie zmusza u�ytkownik�w do przej�cia weryfikacji anti-spam bot, za ka�dym razem, kiedy chc� napisa� post na forum. Tylko u�ytkownicy o ilo�ci napisanych post�w, mniejszej ni� ustawiona liczba, b�d� zmuszeni przej�� t� procedur�. To powinno pom�c zwalcza� spamowanie przez automatyczne skrypty.';
$helptxt['enableSpellChecking'] = 'W��cza sprawdzanie pisowni. Musisz mie� zainstalowan� bibliotek� pspell na serwerze, a Twoja konfiguracja PHP musi by� ustawiona do u�ycia tej biblioteki. Wydaje si� �e tw�j serwer ' . (function_exists('pspell_new') ? 'MA skonfigurowany pspell' : 'NIE MA skonfigurowanego pspell\'a') . '.';
$helptxt['disable_wysiwyg'] = 'To ustawienie wy��cza wszystkim u�ytkownikom mo�liwo�� korzystania z edytora WYSIWYG (&quot;What You See Is What You Get&quot;) na stronie edycji wiadomo�ci.';
$helptxt['lastActive'] = 'Ustawia liczb� minut przez kt�re ludzie b�d� widoczni na g��wnej stronie forum jako aktywni. Domy�lnie 15 minut.';

$helptxt['customoptions'] = 'Ta sekcja definiuje opcje dost�pne dla u�ytkownika z listy rozwijalnej. Jest klika kluczowych punkt�w do zauwa�enia w tej sekcji:
	<ul class="normallist">
		<li><b>Opcje Domy�lne:</b> Zale�nie, kt�re opcje maj� &quot;przycisk radio&quot; zaznaczony, b�d� one domy�lnym wyborem u�ytkownika gdy otworzy sw�j profil.</li>
		<li><b>Usuwanie Opcji:</b> Aby usun�� opcj� po prostu odznacz j� - wszyscy u�ytkownicy z zaznaczon� dan� opcj�, b�d� mieli j� odznaczon�.</li>
		<li><b>Zmiana kolejno�ci Opcji:</b> Mo�esz zmieni� kolejno�� opcji poprzez przeniesienie tekstu pomi�dzy boksami. Jednak�e - wa�na uwaga - musisz upewni� si�, �e <b>nie</b> przenosisz tekstu, podczas zmiany kolejno�ci opcji, w innym wypadku dane u�ytkownika zostan� utracone.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Ta opcja zoptymalizuje baz� danych co zadan� ilo�� dni. Ustaw 1, aby optymalizowa� baz� danych codziennie. Mo�esz r�wnie� okre�li� maksymaln� ilo�� u�ytkownik�w b�d�cych online na forum. Dzi�ki temu nie przeci��ysz serwera i nie sprawisz, �e u�ytkownicy b�d� niezadowoleni z powolnego dzia�ania forum.';
$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca dzia�anie forum tak, jakby nic si� nie sta�o. Mo�e by� to u�yteczne, poniewa� jedynym sposobem na napraw� jest REPAIR tabeli, a dzi�ki temu forum nie b�dzie wy��czone dop�ki nie dowiesz si� o awarii. Zostaniesz powiadomiony emailem je�li co� takiego si� stanie.';

$helptxt['enableParticipation'] = 'To pokazuje ma�� ikon� przy w�tkach, w kt�rych u�ytkownik napisa�.';

$helptxt['db_persist'] = 'Ustal sta�e po��czenie (persistent connection) z baz� danych aby zwi�kszy� wydajno��. Je�li nie jeste� na dedykowanym serwera, mo�e to powodowa� problemy z Twoim hostem.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['queryless_urls'] = 'Zmienia troszk� format adres�w URL tak, aby by�y one lepiej indeksowane przez wyszukiwarki. B�d� one wygl�da� mniej wi�cej tak index.php/topic,1.html.<br /><br />Ta funkcja' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nie') . ' b�dzie dzia�a� na Twoim serwerze.';
$helptxt['countChildPosts'] = 'Po w��czeniu tej opcji, przy dzia�ach zawieraj�cych poddzia�y pojawi si� liczba wiadomo�ci b�d�ca sum� poddzia��w. <br /><br />Mo�e to znacz�co spowolni� forum, ale dzi�ki temu dzia�y z poddzia�ami niezawieraj�ce wiadomo�ci nie b�d� pokazywa� 0 wiadomo�ci.';
$helptxt['fixLongWords'] = 'Ta opcja spowoduje dzielenie wyraz�w d�u�szych ni� okre�lona ilo�� znak�w na cz�ci tak, aby nie psu�y one designu forum. (tak bardzo...) Ta opcja nie powinna by� ustawiona na warto�� poni�ej 40. Opcja nie b�dzie dzia�a� na forum gdzie jest u�ywany UTF-8 oraz PHP w wersji ni�szej ni� 4.4.0. To ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'B�DZIE' : 'NIE B�DZIE') . ' dzia�a� na twoim serwerze';
$helptxt['allow_ignore_boards'] = 'Zaznaczenie tej opcji umo�liwi u�ytkownikom wybranie dzia��w, kt�re chcieliby ignorowa�.';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie w�aczy� lub wy��czy� mo�liwo�� sprawdzania u�ytkownikom kto przegl�da forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usuni�te w�tki i wiadomo�ci w okre�lonym dziale.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala twoim u�ytkownikom na zg�aszanie prywatnych wiadomo�ci, kt�re otrzymali, do ekipy administracyjnej. Mo�e by� to pomocne przy tropieniu nadu�y� systemu prywatnych wiadomo�ci.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilo�ci odbiorc�w wiadomo�ci prywatnych, wysy�anych przez u�ytkownika forum. Mo�e by� to u�yteczne do powstrzymania spamu wysy�anego przy u�yciu systemu PW. Pami�taj, �e u�ytkownicy z uprawnieniami do wysy�ania newsletter�w nie s� obj�ci tym ograniczeniem. Wpisanie warto�ci zerowej spowoduje wy��czenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na u�ytkownikach wprowadzenie kodu z obrazka przy ka�dym wysy�aniu prywatnej wiadomo�ci. Tylko u�ytkownicy o liczbie wiadomo�ci poni�ej ustawionej liczby b�d� musieli wpisywa� kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczb� prywatnych wiadomo�ci jak� u�ytkownik mo�e wys�a� w ci�gu godziny. Nie wp�ywa na moderator�w i administracj� forum.';

$helptxt['default_personal_text'] = 'Ustawia domy�lny tekst kt�ry u�ytkownicy b�d� miali ustawiony w polu &quot;prywatny tekst/podpis.&quot;';

$helptxt['modlog_enabled'] = 'Loguj wszystkie czynno�ci moderacyjne.';

$helptxt['guest_hideContacts'] = 'Je�li wybierzesz t� opcj�, to adresy email i numery kontakt�w komunikator�w wszystkich u�ytkownik�w 
	b�d� ukrywane przed go��mi';

$helptxt['registration_method'] = 'Ta opcja umo�liwia wyb�r metody rejestracji, przez osoby chc�ce do��czy� do u�ytkownik�w forum. Masz wyb�r pomi�dzy:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Rejestracja wy��czona:</strong><br />
				Wy��cza rejestracj�, co oznacza, �e jedyny spos�b na do��czenie do grona u�ytkownik�w, to stworzenie konta przez administratora.<br />
		</li><li>
			<strong>Rejestracja natychmiastowa</strong><br />
				Nowi u�ytkownicy mog� zalogowa� si� i pisa� wiadomo�ci bezpo�rednio po rejestracji.<br />
		</li><li>
			<strong>Aktywacja u�ytkownika</strong><br />
				Nowi u�ytkownicy po rejestracji otrzymaj� email z odno�nikiem do aktywacji konta. Dopiero po klikni�ciu stan� si� pe�noprawnymi u�ytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adres�w email.<br />
		</li><li>
			<strong>Zatwierdzenie u�ytkownika</strong><br />
				Nowi u�ytkownicy po rejestracji musz� zaczeka�, a� ich rejestracj� zatwierdzi administrator.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Identyfikacja z OpenID</b><br />
	OpenID oznacza u�ywanie jednej nazwy u�ytkownika pomi�dzy r�nymi stronami, w celu ulepszenia dozna� z bycia  online. Aby u�y� OpenID musisz najpierw stworzy� konto OpenID - list� dostawc�w znajdziesz na <a href="http://openid.net/" target="_blank">Oficjalnej stronie OpenID</a><br /><br />
	Kiedy ju� b�dziesz mia� konto OpenID po prostu wpisz sw�j unikatowy adres identyfikacyjny do pola wprowadzania i wy�lij. Zostaniesz przeniesiony na witryn� dostawcy w celu sprawdzenia to�samo�ci, przed przyznaniem dost�pu do strony.<br /><br />
	Podczas pierwszej wizyty na stronie zostaniesz poproszony o potwierdzenia paru detali zanim zostaniesz rozpoznany, po czym b�dziesz m�g� si� zalogowa� na stron� i zmieni� swoj� konfiguracj� profilu u�ywaj�c swojego OpenID.<br /><br />
	Po wi�cej informacji odwied� <a href="http://openid.net/" target="_blank">Oficjaln� stron� OpenID</a>';

$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona wszyscy u�ytkownicy kt�rzy zmieni� sw�j adres email w profilu b�d� musieli reaktywowa� swoje konto poprzez email wys�any na nowy adres';
$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest w��czona nowi u�ytkownicy otrzymaj� emaila witaj�cego ich na Twoim forum';
$helptxt['password_strength'] = 'To ustawienie okre�la wymagan� si�� hase� u�ytkownik�w Twojego forum. Im silniejsze jest has�o, tym trudniej je odgadn�� lub z�ama�. 
	Dost�pne s� nast�puj�ce ustawienia dla si�y hase�.
	<ul class="normallist">
		<li><strong>Niska:</strong> Has�o musi mie� d�ugo�� co najmniej czterech znak�w.</li>
		<li><strong>�rednia:</strong> Has�o musi mie� d�ugo�� co najmniej o�miu znak�w i nie mo�e by� cz�ci� nazwy u�ytkownika lub jego adresu email.</li>
		<li><strong>Wysoka:</strong> To samo, co w �rednim, poza tym, �e has�o musi sk�ada� si� z du�ych i ma�ych liter oraz conajmniej jednej cyfry.</li>
	</ul>';

$helptxt['coppaAge'] = 'Warto�� podana w tym polu okre�la minimalny wiek u�ytkownika pozwalaj�cy na natychmiastow� rejestracj� na forum.
	Podczas rejestracji u�ytkownik b�dzie musia� potwierdzi�, czy przekroczy� okre�lony wiek. Je�eli odpowied� b�dzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez doros�ego opiekuna - w zale�no�ci od wybranego trybu.
	Je�eli zostanie wisane 0 wszelkie restrykcje zwi�zane z wiekiem b�d� ignorowane.';
$helptxt['coppaType'] = 'Je�li ograniczenia wieku s� w��czone, to w tym miejscu mo�na wybra� w jaki spos�b traktowa� osoby poni�ej wymaganego wieku. Do wyboru s� dwa tryby post�powania:
	<ul class="normallist">
		<li>
			<strong>Odrzucenie pr�by rejestracji:</strong><br />
				Ka�dy pr�ba rejestracji nowego u�ytkownika poni�ej wymaganego wieku zostanie odrzucona.<br />
		</li><li>
			<strong>Wym�g zatwierdzenia przez rodzica b�d� opiekuna</strong><br />
				Ka�dy nowy u�ytkownik poni�ej wymaganego wieku, musi przes�a� zgod� rodzic�w b�d� opiekun�w, zanim jego konto zostanie aktywowane. 
				Zostanie te� przes�ane im standardowy formularz do wype�nienia przez rodzic�w lub opiekun�w, oraz dane kontaktowe, na jaki ma on by� wys�any.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie ma�oletnich mogli przes�a� formularz ze zgod�. Musi by� wype�nione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczaj�c t� opcje pozwolisz u�ytkownikom na ukrycie swojego statusu online przed innymi uzytkownikami (opr�cz administrator�w). Je�eli opcja pozostanie wy�aczona jedynie osoby moderuj�ce forum bed� mog�y ukryc swoj� obecno��. Wy��czenie tej opcji nie zmieni istniej�cego statusu u�ytkownika - powstrzyma ich przed ukrywaniem statusu w przysz�o�ci.';
$helptxt['make_email_viewable'] = 'Je�li ta opcja jest w��czona, adresy email u�ytkownik�w zamiast by� ukryte dla cz�onk�w grup i go�ci b�d� publicznie widoczne  na forum. W��czenie tego narazi u�ytkownik�w na wielkie ryzyko zostania ofiar� spamu jako rezultat mailowych �niwiarzy przegl�daj�cych twoje forum. Zauwa�, �e ta opcja nie nadpisuje ustawie� u�ytkownik�w o ukrywaniu swoich adres�w email przed u�ytkownikami. W��czanie tej opcji <b>nie</b>jest rekomendowane.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma seperated list of words, and should not use HTML. If this is left blank the default set is sent. As means of an example the default set is:<br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Ten panel pokazuje niekt�re z najcz�stszych problem�w i pyta� dotycz�cych konfiguracji Twojego serwera. Nie mart si�, te informacje nie s� nigdzie zapisywane.<br /><br />Je�li ca�y czas pojawia komunikat &quot;Retrieving support information...&quot;, Tw�j komputer prawdopodobnie nie mo�e po��czy� si� z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Tutaj mo�esz zobaczy� kilka z najpopularniejszych i kilka losowych pakiet�w lub modyfikacji, kt�rych instalacja jest szybka i �atwa. <br /><br />Je�li ta sekcja si� nie pojawia, Tw�j komputer nie mo�e prawdopodobnie po��czy� si� z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Ten dzia� pokazuje kilka ostatnich i najpopularniejszych szablon�w z <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Mo�e si� jednak nie wy�wietli� poprawnie, je�li tw�j komputer nie jest w stanie znale�� <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze wzgl�d�w bezpiecze�stwa odpowied� na twoje pytanie (tak jak i na twoje has�o) jest zakodowana w taki spos�b, �e tylko SMF moze go potwierdzi�. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i has�o.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani s� poprzez <a href="javascript:window.open(\'%1$s?action=admin;area=manageboards\'); self.close();">zarz�dzanie dzia�ami</a>, dla ka�dego dzia�u osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalaj� administratorom decydowa� o dost�pie grup u�ytkownik�w do r�nych czynno�ci na forum.<br /><br />Mo�na zarz�dza� zezwoleniami poprzez dzia�y lub grupy u�ytkownik�w klikaj�c w \'Modyfikuj.\'';
$helptxt['permissions_board'] = 'Je�li dzia� ma ustawienie \'globalne\', oznacza to, �e nie posiada �adnych dodatkowych pozwole�. Ustawienie \'lokalne\' oznacza, �e dzia� posiada swoje odr�bne zezwolenia. Pozwala to na ograniczenie lub zwi�kszenie dost�pu do kt�rego� z dzia��w, bez konieczno�ci zmian w ca�ym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie domy�lnych zezwole� dla grup. Standardowe to zwyczajne prawa u�ytkownika. Restrykcyjne to takie jakie ma go��. Moderatorskie to prawa jakie posiadaj� moderatorzy. Przynale�no�� do obs�ugi forum daje prawa bardzo bliskie administratorskim.';
$helptxt['permissions_deny'] = 'Zabronienie jakiej� czynno�ci jest przydatne, je�li chcesz zmieni� pozwolenia konkretnemu u�ytkownikowi. Mo�esz te� stworzy� grup� u�ytkownik�w z odebranymi prawami i odda� tam tych u�ytkownik�w.<br /><br />Zalecamy ostro�ne stosowanie. Po zabronieniu u�ytkownikowi wybranych czynno�ci na forum, nie b�dzie on mia� do nich dost�pu, niezale�nie od grupy, do kt�rej przynale�y.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilo�ci wiadomo�ci pozwalaj� na dodanie dodatkowych praw u�ytkownikom, kt�rzy napisali okre�lon� liczb� wiadomo�ci. Tak by np. nagrodzi� wiernych u�ytkownik�w forum. Te zezwolenia <em>dodaj� si�</em> do zezwole� z innych grup, do kt�rych nale�� u�ytkownicy.';
$helptxt['membergroup_guests'] = 'Grupa Go�cie to wszyscy u�ytkownicy, kt�rzy nie s� zalogowani.';
$helptxt['membergroup_regular_members'] = 'U�ytkownikami bez grupy s� wszyscy u�ytkownicy kt�rzy s� zarejestrowani, ale nie maj� przydzielonej �adnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator mo�e z definicji robi� wszystko i widzie� wszystkie fora. Nie istniej� ustawienia uprawnie� dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to specjalna grupa. Pozwolenia i ustawienia dotycz�ce tej grupy dotycz� si� moderator�w, ale <em>tylko w dzia�ach, w kt�rych moderuj�</em>. Poza tymi dzia�ami, ich prawa nie r�ni� si� od praw zwyk�ych u�ytkownik�w.';
$helptxt['membergroups'] = 'W SMF s� dwa rodzaje grup u�ytkownik�w:
	<ul class="normallist">
		<li><strong>Zwyk�e grupy:</strong> To takie grupy, do kt�rych u�ytkownicy nie s� przydzielani automatycznie. By przypisa� u�ytkownika do grupy, administrator musi wej�� do jego profilu i klikn�� na &quot;ustawienia konta&quot;. Z tego miejsca mo�na przydzieli� go do dowolnej liczby istniej�cych grup.</li>
		<li><strong>Grupy oparte na ilo�ci wiadomo�ci:</strong> W odr�nieniu od zwyk�ych grup, do grup opartych na ilo�ci wiadomo�ci napisanych przez u�ytkownika, nie mo�na przydzieli� u�ytkownik�w. U�ytkownicy s� przydzielani do nich automatycznie po osi�gni�ciu okre�lonej liczby wiadomo�ci.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Mo�esz edytowa� te zdarzenia poprzez klikni�cie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_backup'] = 'Tutaj mo�esz zapisa� kopi� wszystkich wiadomo�ci, ustawie�, u�ytkownik�w i innych informacji dotycz�cych Twojego forum w bardzo du�ym pliku.<br /><br />Zaleca si�, aby dla bezpiecze�stwa robi� to do�� cz�sto (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <strong>ca�kowicie</strong> i <strong>nieodwracalnie</strong> usun�� stare w�tki. Zaleca si� zrobi� najpierw kopi� na wypadek, gdyby zosta�o usuni�te co�, czego nie chcia�e� skasowa�.<br /><br />U�ywaj tej opcji z nale�yt� ostro�no�ci�.';
$helptxt['maintenance_members'] = 'Pozwala <strong>ca�kowicie</strong> i <strong>nieodwracalnie</strong> konta u�ytkownik�w Twojego forum. Zaleca si� zrobi� najpierw kopi� na wypadek, gdyby zosta�o usuni�te co�, czego nie chcia�e� skasowa�.<br /><br />U�ywaj tej opcji z nale�yt� ostro�no�ci�.';

$helptxt['avatar_server_stored'] = 'Ta opcja umo�liwia u�ytkownikom forum na u�ycie awatar�w znajduj�cych si� ju� na twoim serwerze. Znajduj� si� one przewa�nie w tym samym katalogu co SMF w folderze awatar�w.<br />Jako podpowied� dodamy, �e je�li stworzysz oddzielne katalogi w folderze awatar�w, powstan�  &quot;kategorie&quot; awatar�w.';
$helptxt['avatar_external'] = 'Kiedy ta funkcja jest w��czona, u�ytkownicy mog� poda� w�asny URL to awatara. Minusem tego jest to, �e w niekt�rych przypadkach, mog� oni u�y� awatara zbyt du�ego, albo z podobizn�, kt�rej sobie nie �yczysz na swoim forum.';
$helptxt['avatar_download_external'] = 'Je�eli w��czysz t� opcj�, b�dzie mo�liwe pobranie awatar�w z zewn�trznego adresu URL podanego przez u�ytkownika. Awatar b�dzie traktowany jak wgrany na serwer.';
$helptxt['avatar_upload'] = 'Ta opcja jest podobna do &quot;Zezw�l u�ytkownikom na posiadanie awatar�w z innego serwera&quot;, ale masz lepsz� kontrol� nad awatarami, mo�esz zmienia� ich rozmiar a twoi u�ytkownicy nie musz� posiada� w�asnego serwera, na kt�rym trzymaliby swoje awatary.<br /><br />Jednak�e  s� pewne minusy tej opcji. Musisz posiada� sporo miejsca na serwerze na awatary swoich forumowicz�w.';
$helptxt['avatar_download_png'] = 'Pliki PNG s� wi�ksze, ale oferuj� lepsz� jako��. Je�li ta opcja jest odznaczona, zostan� u�yte pliki JPEG - kt�re s� zwykle mniejsze, ale zwykle o mniejszej jako�ci.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wy��cza sprawdzanie nazwy DNS hosta, kt�re na niekt�rych serwerach jest bardzo wolne. Zauwa� �e spowoduje to obni�enie efektywno�ci banowania.';

$helptxt['search_weight_frequency'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik bazuje na cz�sto�ci wyst�powania. Zlicza liczb� pasuj�cych do wyszukiwania wiadomo�ci i dzieli je przez liczb� wiadomo�ci w w�tku.';
$helptxt['search_weight_age'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik przydziela tym wi�ksz� wa�no�� im nowsza wiadomo��.';
$helptxt['search_weight_length'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik bazuje na rozmiarze w�tku. Im wi�cej w nim wiadomo�ci, tym bardziej jest wa�ny.';
$helptxt['search_weight_subject'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik daje wi�ksz� wag� wiadomo�ciom, w kt�rych wyszukiwana fraza znajduje si� w temacie w�tku.';
$helptxt['search_weight_first_message'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik sprawdza czy wyszukiwana fraza znajduje si� w pierwszej wiadomo�ci w�tku.';
$helptxt['search_weight_sticky'] = 'Wsp�czynniki wag s� u�ywane do zadecydowania, kt�re wiadomo�ci pasuj�ce do wyszukiwania, s� najwa�niejsze. Mo�esz zmieni� wagi, tak by dopasowa� wyszukiwanie do tego co uwa�asz za najwa�niejsze na swoim forum. Na przyk�ad, je�li u�ywasz forum g��wnie do pisania aktualno�ci, to wa�niejsza mo�e by� data wys�ania wiadomo�ci i tam powinna by� najwy�sza waga. Wszystkie liczby wag powinny by� dodatnimi liczbami ca�kowitymi. Wszystkie wagi s� powi�zane.<br /><br />Ten wsp�czynnik przydziela wi�ksz� wa�no�� w�tkom przyklejonym.';
$helptxt['search'] = 'Tutaj mo�esz dostosowa� wszystkie ustawienia dla funkcji wyszukiwania. Nie mo�esz tutaj ustawi� kto ma do niej dost�p. Aby to zrobi� przejd� do ekranu \'zarz�dzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania w mo�e w znaczny spos�b przyspieszy� wyszukiwanie na forum. Szczeg�lnie gdy liczba wiadomo�ci na forum jest bardzo du�a, wyszukiwanie bez indeksu mo�e zaj�� du�o czasu i znacznie obci��a� baz� danych. Je�li ilo�� wiadomo�ci na Twoim forum wzro�nie powy�ej 50 tysi�cy, we� pod uwag� stworzenie indeksu, by zwi�kszy� wydajno�� Twoje forum.<br /><br />We� jednak pod uwag�, �e indeks wyszukiwania mo�e zaj�� sporo miejsca. Indeks pe�notekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiar�w co tabela wiadomo�ci), lecz nie wszystkie s�owa s� indeksowane, a niekt�re wyszukiwania i tak okazuj� si� wolne. Indeks wybi�rczy jest cz�sto wi�kszy (zale�nie od konfiguracji do 3 razy wi�kszy ni� tabela wiadomo�ci), lecz jego wydajno�� jest wi�ksza od indeksu pe�notekstowego i nie jest zale�na od rodzaju wyszukiwa�.';

$helptxt['see_admin_ip'] = 'Adresy IP s� pokazywane administratorom i moderatorom w celu u�atwienia moderacji i umo�liwienia �ledzenia os�b, kt�re robi� z�e rzeczy na forum. Pami�taj, �e adresy IP nie zawsze mog� by� identyfikowane, a wiele os�b zmienia sw�j adres IP co jaki� czas.<br /><br />U�ytkownicy widz� swoje w�asne adresy IP.';
$helptxt['see_member_ip'] = 'Tw�j adres IP jest pokazywany jedynie Tobie i moderatorom. Pami�taj �e ta informacja nie identyfikuje jednoznacznie ludzi, poniewa� adresy IP zwykle si� zmieniaj� okresowo<br /><br />Nie mo�esz sprawdzi� adres�w IP innych cz�onk�w, a oni twojego.';
$helptxt['whytwoip'] = 'SMF u�ywa r�norodnych metod detekcji adrsu IP u�ytkownika. Zwykle metody te, daj� ten sam rezultat, czyli jeden adres IP, ale w niekt�rych sytuacjach, mo�e zosta� wykryty wi�cej ni� jeden adres IP. W tym przypadku SMF poka�e oba adresy i uzyje ich do sprawdzenia listy zbanowanych adres�w. Mo�esz klikna� w kt�rykolwiek adres aby go �ledzi� lub zbanowa�, je�li to konieczne.';

$helptxt['ban_cannot_post'] = 'Banowania \'Nie mo�e wysy�a� wiadomo�ci\' w��cza forum w tryb tylko-do-odczytu dla banowanego u�ytkownika. U�ytkownik nie mo�e tworzy� nowych w�tk�w, odpowiada� na istniej�ce, wysy�a� prywatnych wiadomo�ci oraz oddawa� g�os�w w ankietach. Zbanowany u�ytkownik mo�e nadal odczytywa� prywatne wiadomo�ci oraz w�tki.<br /><br />Wiadomo�� ostrzegawcza jest wy�wietlana u�ytkownikowi je�li zosta� zbanowany w ten spos�b.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Ustawienia wiadomo�ci</strong><br />
			Tu mo�esz zmieni� ustawienia zwi�zane z pisaniem wiadomo�ci i sposobem ich wy�wietlania, a tak�e w��czy� sprawdzanie ortografii (je�li serwer to umo�liwia).
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Tu w��czysz mo�liwo�� formatowania wiadomo�ci, oraz wybra� kt�re z kod�w maj� by� dost�pne dla u�ytkownik�w.
		</li><li>
			<strong>S�owa cenzurowane</strong>
			By utrzyma� s�ownictwo forum pod kontrol�, mo�esz ustawi� kt�re s�owa zostan� wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<strong>Ustawienia w�tk�w</strong>
			Tu mo�esz zmienia� ustawienia dotycz�ce w�tk�w: ilo�� na stron�, ilo�� potrzebna na by oznaczy� w�tek jako gor�cy, opcje przyklejonych w�tk�w itp.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Ustawiaj�c uprawnienia wg grupy, spowodujesz, �e kiedy go�� zostanie rozpoznany jako robot, jego uprawnienia zmieni� si� ze standardowych go�cia, na uprawnienia grupy, kt�r� tu ustawisz. Mo�esz tego u�y� do ograniczenia dost�pu silnikom wyszukiwarek. Przyk�adowo: Stw�rz grup� o nazwie &quot;Roboty&quot; i ustaw j� tutaj. Mo�esz teraz zabra� tej grupie mozliwo�� ogl�dania profili u�ytkownik�w, co jednocze�nie uniemo�liwi robotom indeksacj� profili u�ytkownik�w Twojego forum. <br />Uwaga: Detekcja robot�w nie jest idealna i mo�e by� symulowana przez u�ytkownik�w, dlatego nie ma gwarancji, �e ograniczenia b�d� zastosowane tylko do silnik�w wyszukiwarek, kt�re doda�e�.';
$helptxt['show_spider_online'] = 'Te ustawienia pozwil� ci wybra�, czy roboty powinny by� wymienione na li�cie u�ytkownik�w online w indeksie dzia�u i stronie &quot;Kto jest online&quot;. Dost�pne opcje to:
	<ul class="normallist">
		<li>
			<strong>Wcale</strong><br />
			Roboty b�d� po prostu wy�wietlane jako go�cie dla wszystkich u�ytkownik�w.
		</li><li>
			<strong>Poka� ilo�� robot�w</strong><br />
			Index dzia�u wy�wietli liczb� robot�w aktualnie odwiedzaj�cych forum.
		</li><li>
			<strong>Poka� Nazwy Robot�w</strong><br />
			Ka�da nazwa robota b�dzie wy�wietlana, wi�c u�ytkownicy mog� zobaczy� ile robot�w aktualnie odwiedza forum - efekt odnosi si� do Indeksu dzia�u jak i strony Kto jest online.
		</li><li>
			<strong>Poka� Nazwy Robot�w - Tylko dla Administratora</strong><br />
			Jak wy�ej z wyj�tkiem tego, �e tylko Administratorzy mog� zobaczy� status robot�w - dla pozosta�ych u�ytkownik�w roboty ukazuj� si� jako go�cie.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Wybierz schemat mailowych �ycze� urodzinowych. Podgl�d b�dzie widoczny w polach Tytu� Maila i w Tre�� Maila.<br /><strong>Zauwa�:</strong> Ustawienie tej opcji nie aktywuje automatycznie mail�w urodzinowych. Aby aktywowa� maile urodzinowe u�yj <a href="%1$s?action=admin;area=maintain;sa=tasks;sesc=%2$s" target="_blank" class="new_win">Menad�era Zada�</a> i aktywuj zadanie rozsy�ania maili urodzinowych.';
$helptxt['pm_bcc'] = 'Kiedy wysy�asz Prywatn� Wiadomo��, mo�esz wybra� odbiorc�w jako UDW czyli &quot;Ukryte Do Wiadomo�ci&quot;. Odbiorcy oznaczeni UDW, nie b�d� widoczni dla pozosta�ych adresat�w wiadomo�ci.';

$helptxt['move_topics_maintenance'] = 'To pozwoli Ci na przesuni�cie wszystkich post�w z wybranego forum na inne forum.';
$helptxt['maintain_reattribute_posts'] = 'Mo�esz u�y� tej funkcji, je�li chcesz przypisa� wiadomo�ci napisane przez go�ci do zarejestrowanego u�ytkownika. Jest to przydatne np. w sytuacji, gdy u�ytkownik usun�� swoje konto, p�niej zmieni� zdanie i chce, aby jego stare wiadomo�ci, by�y skojarzone z nowym kontem u�ytkownika.';
$helptxt['chmod_flags'] = 'Mo�esz r�cznie ustawi� zezwolenia plikom, kt�re zaznaczy�e�. Aby to zrobi�, wpisz Chmod jako warto�� numeryczn�. Pami�taj - te zmiany nie odnios� skutku w systemach operacyjnych Microsoft Windows.';

$helptxt['postmod'] = 'Ta sekcja pozwala cz�onkom zespo�u moderatorskiego (z odpowiednimi zezwoleniami) akceptowa� odpowiedzi i w�tki zanim zostan� pokazane.';

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