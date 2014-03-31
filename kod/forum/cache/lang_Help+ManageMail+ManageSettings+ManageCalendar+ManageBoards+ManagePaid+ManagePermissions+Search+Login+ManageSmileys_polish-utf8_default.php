<?php
// Version: 2.0 RC3; Help

global $helptxt;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['close_window'] = 'Zamknij okno';

$helptxt['manage_boards'] = '	<strong>Edytuj działy</strong><br />
	W tym menu możesz stworzyć/usunąć/zmienić kolejność działów i kategorii.
	Przykładowo, miałeś stronę o szerokiej tematyce
	takiej jak &quot;Sport&quot;, &quot;Motoryzacja&quot; i &quot;Muzyka&quot;.
	To były by kategorie najwyższego poziomu. Pod każdą z nich chciałbyś
	prawdopodobnie stworzyć hierarhiczne &quot;podkategorie&quot; lub &quot;działy&quot; dla tematów.
	To będzie prosta hierarhia ze strukturą: <br />
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
					&nbsp;- Forum podrzędne dla forum &quot;Motoryzacja&quot;
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

$helptxt['edit_news'] = '<ul class="normallist">  <li>  <strong>Aktualności</strong><br /> Ta sekcja pozwala wprowadzić tekst informacji o nowościach, wyświetlany na stronie głównej forum. Dodaj co tylko chcesz (np. &quot;Nie zapomnijcie o konferencji w najbliższy wtorek&quot;). Informacje te są wyświetlane losowo, każda w osobnej ramce. </li> <li> <strong>Newsletters</strong><br /> Ta sekcja pozwoli Ci na wysłanie masowej korespondencji do użytkowników forum. Najpierw musisz zaznaczyć nazwy grup użytkowników, do których chcesz wysłać newsletter. Jeśli sobie życzysz możesz dodatkowo dodać użytkowników lub adresy email którzy otrzymają newsletter. Ostatecznie możesz zdecydować w jakiej formie korespondencja ma być wysłana do użytkownika, za pomocą wiadomości prywatnej lub też wiadomości email. </li> <li> <strong>Ustawienia</strong><br /> Ta sekcja zawiera kilka ustawień dotyczących aktualności oraz korespondencji takich jak: dodawanie grup które mogą edytować aktualności i wysyłać korespondencję. Istnieje także opcja konfiguracji aktualności za pomocą której możesz je włączyć lub wyłączyć, ustawić długość znaków w wyświetlanej wiadomości. </li> </ul>	';

$helptxt['view_members'] = '	<ul class="normallist">
		<li>
			<strong>Przeglądanie użytkowników</strong><br />
			Przeglądaj wszystkich użytkowników forum. Zostanie wyświetlona lista użytkowników, z których
			każdy jest odnośnikiem do jego profilu. Jako administrator, możesz modyfikować profile
			użytkowników. Masz całkowitą kontrolę nad użytkownikami,
			włącznie z ich usunięciem z forum.<br /><br />
		</li>
		<li>
			<strong>Oczekujący na zatwierdzenie</strong><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja zatwierdzania wszystkich nowych użytkowników. Każdy rejestrujący się
			na forum staje się pełnym użytkownikiem dopiero po zatwierdzeniu przez admina. Ta sekcja wyświetla wszystkich tych użytkowników,
			którzy oczekują na zatwierdzenie. Pokazują się również ich emaile i adres IP. Możesz wybrać czy zatwierdzić, czy odrzucić
			(skasować) każdego użytkownika z listy, poprzez zaznaczenie użytkowników i wybranie odpowiedniej czynności z rozwijanej listy.
			Podczas odrzucania użytkownika możesz wybrać czy po usunięciu poinformować go emailem o swojej decyzji.<br /><br />
		</li>
		<li>
			<strong>Oczekujący na aktywację</strong><br />
			Ta sekcja pokazuje się tylko jeśli włączona jest opcja aktywacji kont użytkownika. Ta lista
			wyświetla wszystkich użytkowników, którzy jeszcze nie aktywowali swojego konta. Możesz wybrać czy aktywować te konta za nich,
			odrzucić, czy też przypomnieć o konieczności aktywacji konta. Tak jak powyżej, możesz poinformować lub nie użytkowników
			o swojej decyzji.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban użytkowników</strong><br />
	SMF pozwala na &quot;ban&quot; użytkowników którzy zakłócają działanie forum
	poprzez spamowanie, floodowanie, itp. Jako admin widzisz podczas przeglądania 
	wiadomości adres IP każdego z użytkowników z którego wysłana została wiadomość. 
	Możesz dodać dane IP do listy banów co zablokuje możliwość pisania wiadomości z 
	tej lokacji. Możesz również banować użytkowników podając ich adres email.';

$helptxt['featuresettings'] = '<strong>Właściwości i Opcje</strong><br />
	Jest tu kilka ustawień, które możesz zmienić wg swoich preferencji.';

$helptxt['securitysettings'] = '<strong>Bezpieczeństwo i Moderacja</strong><br />
	Ta sekcja zawiera ustawienia związane z bezpieczeństwem i moderacją na Twoim forum.';

$helptxt['modsettings'] = '<strong>Opcje forum</strong><br />
	Jest wiele opcji w tej sekcji, które możesz zmienić wedle uznania. Większość opcji modyfikacji, pojawi się również w tym miejscu.';

$helptxt['number_format'] = '<strong>Format liczb</strong><br />
	Możesz użyć tych ustawień do ustalenia formatu, w jakim liczby będą wyświetlane na forum. Format tego ustawienia jest następujący:<br />
	<div style="margin-left: 2ex;">1,234.00</div><br />
	gdzie \',\' to znak używany do oddzielania grup tysięcy, \'.\' to znak używany do oddzielania części dziesiętnej, a liczba zer po nim określa dokładność zaokrągleń.';

$helptxt['time_format'] = '<strong>Format Czasu</strong><br />
	Możesz dostosować sposób wyświetlania daty i czasu do swoich upodobań. Wygląda to na dość skompilowany ciąg literek, ale nie jest specjalnie trudne.
	Konwencja pochodzi z funkcji PHP strftime i została opisana poniżej (więcej szczegółów można znaleźć na stronie <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	Następujące znaki są rozpoznawane w łańcuchu formatującym: <br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - skrócony dzień tygodnia<br />
	&nbsp;&nbsp;%A - pełny dzień tygodnia<br />
	&nbsp;&nbsp;%b - skrócona nazwa miesiąca<br />
	&nbsp;&nbsp;%B - pełna nazwa miesiąca<br />
	&nbsp;&nbsp;%d - dzień miesiąca (01 to 31) <br />
	&nbsp;&nbsp;%D<b>*</b> - to samo, co %m/%d/%y <br />
	&nbsp;&nbsp;%e<b>*</b> - dzień miesiąca (1 to 31) <br />
	&nbsp;&nbsp;%H - godzina (format 24-godziny)<br />
	&nbsp;&nbsp;%I - godzina (format 12-godziny)<br />
	&nbsp;&nbsp;%m - miesiąc jako liczba (01 to 12) <br />
	&nbsp;&nbsp;%M - minuty jako liczba <br />
	&nbsp;&nbsp;%p - &quot;am&quot; albo &quot;pm&quot; zgodnie z aktualnym czasem<br />
	&nbsp;&nbsp;%R<b>*</b> - czas w notacji 24-godzinnej <br />
	&nbsp;&nbsp;%S - sekundy jako liczba dziesiętna <br />
	&nbsp;&nbsp;%T<b>*</b> - aktualny czas, odpowiednik %H:%M:%S <br />
	&nbsp;&nbsp;%y - rok jako liczba dwucyfrowa (00 to 99) <br />
	&nbsp;&nbsp;%Y - rok jako liczba 4-cyfrowa<br />
	&nbsp;&nbsp;%Z - strefa czasowa, nazwa lub skrót <br />
	&nbsp;&nbsp;%% - Znak \'%\' literowy <br />
	<br />
	<em>* Nie działa na serwerach opartych o system Windows.</em></span>';

$helptxt['live_news'] = '<strong>Aktualne ogłoszenia</strong><br />
	Ten boks pokazuje ostatnie ogłoszenia z <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.
	Powinieneś sprawdzać je na bieżąco aby uzyskiwać informacje o aktualizacjach, nowych wydaniach i ważnych informacjach od Simple Machines.';

$helptxt['registrations'] = '<strong>Zarządzanie rejestracją</strong><br />
	Ta sekcja zawiera wszystkie funkcje związane z zarządzaniem nowymi rejestracjami na forum. Jest podzielona na maksymalnie cztery
	działy, które są widoczne zależnie od ustawień Twojego forum:<br /><br />
	<ul class="normallist">
		<li>
			<b>Zarejestruj nowego użytkownika</b><br />
			Tu możesz zarejestrować użytkownika na jego prośbę. Jest to przydatne na zamkniętych forach, 
			lub gdy admin chce stworzyć konto testowe. Jeśli jest włączona opcja aktywacji konta, to 
			do użytkownika zostanie wysłany emailem link aktywacyjny, który będzie musiał być kliknięty, 
			by zacząć korzystać z konta. Ewentualnie można wybrać opcję, by przesłać użytkownikowi hasło na email.<br /><br />
		</li>
		<li>
			<b>Edytuj umowę rejestracyjną</b><br />
			W tym miejscu możesz zmienić umowę rejestracyjną, wyświetlaną podczas tworzenia nowego konta na forum.
			Możesz dodać, usunąć i zmienić wszystko co zostało standardowo zaproponowane przez SMF.<br /><br />
		</li>
		<li>
			<b>Ustal zarezerwowane nazwy</b><br />
			Tu ustalisz jakie wyrazy nie będą mogły być użyte przez użytkowników do stworzenia ich nazwy konta.<br /><br />
		</li>
		<li>
			<b>Ustawienia</b><br />
			Ta sekcja będzie widoczna jedynie, jeśli masz zezwolenie na administrację forum. Tu możesz ustawić sposób rejestracji
      jaki będzie używany na forum, a także inne związane z rejestracją opcje.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Raport moderacji</strong><br />
	Ta sekcja pozwala członkom grupy administratorów śledzić wszystkie czynności moderacyjne, które wykonali moderatorzy. Aby 
	moderatorzy nie mogli usunąć odwołań do akcji, które wykonali, wpisy nie mogą zostać usunięte przed upływem 24 godzin od ich wystąpienia. Kolumna \'obiekty\' pokazuje zmienne powiązane z akcją.';
$helptxt['adminlog'] = '<strong>Raport Administratora</strong><br /> Ta sekcja pozwala członkom grupy Administratorzy, śledzić niektóre czynności administracyjne, które zostały dokonane na forum. Aby się upewnić, że administratorzy nie usuną odnośników do czynności jakie wykonali, wejścia nie mogą zostać usunięte przez 24 godziny po dokonaniu czynności.';
$helptxt['warning_enable'] = '<strong>System Ostrzeżeń Użytkowników</strong><br />
	Ta opcja pozwala administratorom i moderatorom przyznawać użytkownikom ostrzeżenia - oraz używać Poziomu Ostrzeżenia, do określenia 
	ograniczeń w korzystaniu z forum. Po uaktywnieniu te opcji, w sekcji Zezwolenia, możesz określić, które grupy mogą przyznawać
	ostrzeżenia użytkownikom. Poziom ostrzeżenia może być ustawiony w profilu użytkownika. Dostępne są następujące ustawienia:
	<ul class="normallist">
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik jest obserwowany</strong><br />
			To ustawienie pozwala zdefiniować procentowy poziom ostrzeżenia, który musi osiągnąć użytkownik, aby zostać automatycznie wciągniętym na listę obserwowanych użytkowników.
			Każdy użytkownik, który jest &quot;obserwowany&quot; pojawi się w odpowiednim obszarze w centrum moderacji.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Wszystkie wiadomości użytkownika są moderowane</strong><br />
			Każdy użytkownik, który przekroczy ustawioną wartość, bedzie musiał otrzymać zgodę moderatora, na publikację każdego postu na forum
			To ustawienie będzie nadrzędne do wszystkich lokalnych zezwoleń związanych z moderacją postów.
		</li>
		<li>
			<strong>Poziom Ostrzeżenia - Użytkownik nie może pisać postów</strong><br />
			Przekorczenie ustawionego poziomu, spowoduje całkowity brak możliwości pisania postów na forum. 
		</li>
		<li>
			<strong>Maksymalna ilość punktów ostrzeżenia na dzień</strong><br />
			To ustawienie określa całkowitą ilość punktów, które pojedynczemu użytkownikowi, może przyznać lub odebrać moderator w okresie 24 godzin
			To usatwienie pozwala ograniczyć aktywność administratorów w krótkim okresie czasu. Pamiętaj, można wyłączyć tą opcję, ustawiając wartość na zero. 
			Żaden użytkownik z uprawnieniami administratora, nie jest objęty tą regułą.
		</li>
	</ul>';
$helptxt['error_log'] = '<strong>Raport błędów forum</strong><br />
	Każdy błąd, który wystąpił podczas korzystania z forum zostaje zapisany. Domyślnie są sortowane po dacie. 
	Za pomocą strzałek, można zmienić sortowanie, a dodatkowo można włączyć filtr, np. wg użytkownika. 
	Podczas filtrowania, wyświetlą się jedynie te wpisy, które pasują do filtra.';
$helptxt['theme_settings'] = '<strong>Ustawienia stylu</strong><br />
	Ekran ten pozwola na zmianę specyficznych ustawień dla obecnego stylu, włączając w to opcje takie jak 
	katalog oraz adres URL stylu czy ustawienia layoutu forum. Większość stylów posiada rozmaite opcje 
	pozwalające na dostosowanie ustawień do indywidualnych potrzeb forum.';
$helptxt['smileys'] = '<strong>Centrum Uśmieszków</strong><br />
	Tutaj możesz dodawać i usuwać uśmieszki i zestawy uśmieszków. Zauważ, że jeśli uśmieszek znajduje się w jedym zestawie, to istnieje również w pozostałych zestawach - w przeciwnym wypadku 
	mogłoby być to zaskakujące dla użytkowników forum używających różnych zestawów.<br /><br />

	Możesz tutaj również edytować ikony wiadomości, o ile włączyłeś je na stronie ustawień.';
$helptxt['calendar'] = '<strong>Zarządzaj kalendarzem</strong><br />
	Tutaj możesz dodawać i usuwać wpisy oraz zmienić ustawienia kalendarza.';

$helptxt['serversettings'] = '<strong>Ustawienia serwera</strong><br />
	Tu możesz zmienić główne ustawienia forum. W tej sekcji znajdziesz ustawienia bazy danych, ścieżek URL, a także
	tych związanych z pocztą i pamięcią podręczną. Zastanów się przed zmianami w tym miejscu, gdyż błędy mogą spowodować
	brak dostępu do forum';
$helptxt['manage_files'] = '<ul class="normallist">  <li>  <strong>Przeglądaj pliki</strong><br />  Przeglądanie wszystkich załączników, awatarów i miniaturek zgromadzonych przez SMF.<br /><br />  </li><li>  <strong>Ustawienia załączników</strong><br />  Skonfiguruj miejsce przechowywania załączników i ustaw ograniczenia na typy załączników.<br /><br />  </li><li>  <strong>Ustawienia awatarów</strong><br />  Skonfiguruj miejsce przechowywania awatarów i ustaw zmianę wielkości awatarów.<br /><br />  </li><li>  <strong>Zarządzanie plikami</strong><br />  Sprawdź i napraw jakiekolwiek błędy w katalogu załączników i usuń wybrane załączniki.<br /><br />  </li>  </ul>';

$helptxt['topicSummaryPosts'] = 'Ta opcja pozwala ustawić liczbę poprzednich wiadomości widocznych w podsumowaniu wątku podczas odpowiedzi.';
$helptxt['enableAllMessages'] = 'Definiuje <em>maksymalną</em> ilość wiadomości w wąteku, dla którego zostanie wyświetlony link do wszystkich wiadomości. Ustawienie tej ilości na mniej niż &quot;Maksymalna ilość wiadomości do wyświetlenia na stronie wątku&quot; spowoduje, że link nigdy się nie pojawi, a zbyt duża wartość może spowolnić Twoje forum.';
$helptxt['enableStickyTopics'] = 'Przyklejone są wątkami które pozostają stale na górze listy tematów. Zazwyczaj używane są do przekazania ważnych wiadomości. 
		Domyślnie tylko moderatorzy i administratorzy mogą zakładać przyklejone wątki ale możesz to zmienić w zezwoleniach użytkowników.';
$helptxt['allow_guestAccess'] = 'Odznaczenie tej opcji wyłączy gościom wykonywanie większości czynności poza tymi najprostszymi - logowanie, rejestracja, przypominanie hasła, itp. - na Twoim forum. Nie jest to to samo co uniemożliwianie gościom dostępu do działów.';
$helptxt['userLanguage'] = 'Włączenie tej opcji pozwoli użytkownikom wybrać plik językowy z którego będą korzystać. Nie będzie to miało wpływu na 
		ustawienia domyślne.';
$helptxt['trackStats'] = 'Statystyki:<br />To pozwoli na wyświetlanie użytkownikom listy najnowszych wiadomości oraz najbardziej popularnych wątków na Twoim forum. 
		Opcja ta pozwoli również na wyświetlanie różnych statystyk, jak np. najwyższa liczba użytkowników online, nowi użytkownicy czy nowe wątki.<hr />
		Trafienia:<br />Dodaje następną kolumnę na stronie statystyk z ilością trafień na Twoim forum.';
$helptxt['titlesEnable'] = 'Włączenie Tytułów osobistych pozwoli użytkownikom ze stosownymi uprawnieniami na stworzenie własnych tytułów widocznych pod nazwą.<br/>
		<em>Na przykład:</em><br/>Janek<br/>Spoko koleś';
$helptxt['topbottomEnable'] = 'Dodaje przyciski w górę i w dół, przez co użytkownicy mogą przenieś się na koniec i początek strony 
		bez przewijania.';
$helptxt['onlineEnable'] = 'Pokazuje obrazek wskazujący czy użytkownik jest online lub offline';
$helptxt['todayMod'] = 'Będzie pokazywać "Dzisiaj" lub "Wczoraj", jeśli to możliwe, zamiast daty.<br /><br />  <strong>Przykłady:</strong><br /><br />  <dt>  <dt>Wyłączone</dt>  <dd>Październik 3, 2009 at 12:59:18 am</dd>  <dt>Tylko dziś</dt>  <dd>Dziś at 12:59:18 am</dd>  <dt>Dziś i Wczoraj</dt>  <dd>Wczoraj at 09:36:55 pm</dd>  </dt>  ';
$helptxt['disableCustomPerPage'] = 'Zaznacz tę opcję, aby uniemożliwić użytkownikom zmianę ilości wiadomości i wątków pokazywanych odpowiednio na stronach "Indeks Wiadomości"" i "Pokaż wątek".';
$helptxt['enablePreviousNext'] = 'To spowoduje wyświetlanie odnośnika do następnego i poprzedniego wątku.';
$helptxt['pollMode'] = 'Ta opcja włącza lub wyłącza ankiety. Jeśli opcja jest wyłączona, to wszystkie istniejące ankiety zostaną ukryte
		na liście wątków. Możesz wybrać, czy pokazywać wątki, w których były ankiety bez ankiet, przez wybranie
		&quot;Pokaż ankiety jako wątki&quot;.<br /><br />By zdecydować kto może tworzyć ankiety, lub w nich głosować,
		zajrzyj do zarządzania zezwoleniami. Pamiętaj o tym, jeśli komuś nie działają ankiety.';
$helptxt['enableVBStyleLogin'] = 'Włączenie tej opcji spowoduje wyświetlanie małego pola logowania na każdej stronie forum.';
$helptxt['enableCompressedOutput'] = 'Włączenie tej opcji spowoduje kompresowanie wynikowej strony w celu zmniejszenia zużycia przepustowości łącza, ale wymaga 
		zainstalowanej bibloteki zlib.';
$helptxt['disableTemplateEval'] = 'By default, templates are evaluated instead of just included. This helps with showing more useful debug information in case a template contains an error.<br /><br />
		On large forums however, this customised inclusion process may be significantly slower. Therefore, advanced users may wish to disable it.';
$helptxt['databaseSession_enable'] = 'Ta opcja wykorzystuje bazę danych do przechowywania informacji o sesjach - jest to najlepsze rozwiązanie dla serwerów wykorzystujących load-balancing, ale pomaga również przy wszelkich problemach z timeoutem i może przyspieszyć działanie forum.';
$helptxt['databaseSession_loose'] = 'Włączenie tej opcji spowoduje zmniejszenie transferu, jaki generuje Twoje forum, oraz sprawi, że powrót do poprzedniej strony nie będzie skutkować jej przeładowaniem. Minusem jest między innymi to, że ikony nowych wiadomości nie odświeżą się (dopóki nie przejdziesz do niej kliknięciem zamiast przyciskiem powrotu).';
$helptxt['databaseSession_lifetime'] = 'To jest czas bezczynności w sekundach, po którym sesja wygaśnie. Jeśli czas bezczynności użytkownika przekroczy tą wartość kolejna akcja spowoduje wyświetlenie komunikatu &quot;sesja wygasła&quot;. Wartości powyżej 2400 sekund nie są zalecane.';
$helptxt['enableErrorLogging'] = 'To spowoduje logowanie wszystkich błędów, jak np. błędne logowania, tak aby można było zobaczyć, co poszło źle.';
$helptxt['enableErrorQueryLogging'] = 'Uwzględnia pełne zapytanie wysłane do bazy danych z jakimkolwiek błędem bazy. Wymaga włączenia rejestracji błędów.<br /><br /><strong>Uwaga:  Wpłynie to na możliwość filtrowania logu błędów po komunikacie błędu.</strong>';
$helptxt['allow_disableAnnounce'] = 'Ta opcja umożliwi użytkownikom wyłączenie powiadamiania o wątkach, które administrator zaznaczył jako wątki do powiadamiania.';
$helptxt['disallow_sendBody'] = 'Ta opcja usuwa opcję otrzymywania treści odpowiedzi i wiadomości w powiadomieniach wysyłanych na email.<br /><br />Częśto użytkownicy odpowiadają na takie powiadomienia, a to w większości przypadków oznacza, że odpowiedź otrzymuje webmaster.';
$helptxt['compactTopicPagesEnable'] = 'Ta opcja pokazuje jak będzie wyświetlana ilość stron w jednym temacie.<br /><em>Przykład:</em>
		&quot;3&quot; wyświetlaj jako: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; wyświetlaj jako: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'To będzie pokazywać na dole strony forum czas w sekundach jakie SMF zajeło wygenerowanie strony.';
$helptxt['removeNestedQuotes'] = 'Ta opcja wyłączy wklejanie zagnieżdżonych cytatów, podczas cytowania wiadomości.';
$helptxt['simpleSearch'] = 'To wyświetli prosty formularz wyszukiwania i link do bardziej zaawansowanego formularza.';
$helptxt['max_image_width'] = 'To pozwala na ustawienie maksymalnego rozmiaru wysyłanych obrazków. Nie będzie to miało wpływu na obrazki mniejsze niż maksimum.';
$helptxt['mail_type'] = 'To ustawienie pozwala Ci wybrać pomiędzy domyślnymi ustawieniami PHP a zastąpieniem tych ustawień przez SMTP. PHP nie obsługuje autoryzacji SMTP (której wiele serwerów aktualnie wymaga), tak więc jeśli jest ona dla Ciebie konieczna, powinieneś wybrać SMTP. Miej na uwadze, że SMTP może działać wolniej, a niektóre serwery mogą nie przyjmować nazwy użytkownika i hasła.<br /><br />Nie musisz wypełniać ustawień SMTP jeśli zdecydowałeś się na domyślne utawienia PHP.';
$helptxt['attachment_manager_settings'] = 'Załącznik to plik, który może zostać wysłany na serwer przez użytkownika i dodany do wiadomości.<br /><br />
		<strong>Sprawdź rozszerzenie załącznika</strong>:<br /> Czy chcesz sprawdzić rozszerzenie pliku?<br />
		<strong>Dozwolone rozszerzenia załączników</strong>:<br /> Możesz tutaj ustawić jakie rozszerzenia są akceptowane.<br />
		<strong>Katalog załączników</strong>:<br /> Ścieżka do twojego folderu z załącznikiem.<br />(przykład: /home/sites/yoursite/www/forum/attachments)<br />
		<strong>Maksymalny rozmiar folderu z załącznikami</strong> (w KB):<br /> Określ jak duży może być folder z załącznikami, włączając w to pliki już się w nim znajdujące.<br />
		<strong>Maksymalny rozmiar załączników na jedną wiadomość</strong> (w KB):<br /> Określ maksymalny rozmiar wszystkich załączników w wiadomości. Jeśli bedzie on niższy niż rozmiar przypadający na załącznik, ten tutaj będzie ograniczeniem.<br />
		<strong>Maksymalny rozmiar jednego załącznika</strong> (w KB):<br /> Określ maksymalny rozmiar każdego pojedynczego załącznika.<br />
		<strong>Maksymalna liczba załączników na wiadomość</strong>:<br /> Określ ilość załączników jaką można dodać do jednej wiadomości.<br />
		<strong>Wyświetlaj załączniki graficzne jako obrazki pod wiadomością</strong>:<br /> Jeśli wysyłany plik jest obrazkiem, zostanie pokazany na dole wiadomości.<br />
		<strong>Zmień rozmiar obrazka, gdy ten jest wyświetlany pod wiadomością</strong>:<br /> Jeśli powyższa opcja będzie wybrana, to zapisze oddzielny (mniejszy) załącznik jako miniaturkę aby zmniejszyć transfer.<br />
		<strong>Maksymalna szerokość i wysokość miniaturki</strong>:<br /> Stosować tylko z opcją &quot;Zmień wielkość obrazów widocznych pod wiadomościami&quot;, zmniejsza szerokość i wysokość załączników. Zmiana wielkości będzie proporcjonalna.';
$helptxt['karmaMode'] = 'Reputacja (w angielskiej wersji: \'karma\') to możliwość pokazania popularności użytkownika na forum. Użytkownicy, jeśli mają udzielone zezwolenie, mogą zagłosować na innych użytkowników klikając 
		\'popieram\' lub \'potępiam\' (lub inne ustawione w opcjach). Administrator może zmienić minimalną ilość wiadomości napisanych przez użytkownika, powyżej której użytkownik ma prawo zdobywania reputacji, czas pomiędzy 
		głosowaniem na tego samego użytkownika, oraz czy admini również muszą czekać.<br /><br />Zezwolenie na głosowanie jest ustawiane dla grupy, lub użytkownika poprzez zezwolenia. 
		Jeśli ktoś na forum ma problemy, sprawdź jeszcze raz zezwolenia.';
// !!! This should be reused or removed.
$helptxt['cal_enabled'] = 'Kalendarz może być używany do wyświetlania dat urodzin albo ważnych wydarzeń w życiu społeczności.<br /><br />
		<strong>Pokazuj dni jako odnośniki do \'Dodaj wydarzenie\'</strong>:<br />To pozwoli użytkownikowi na dodawanie wydarzenia do tego dnia, którego data została wybrana<br />
		<strong>Pokazuj numery tygodni</strong>:<br />Pokaż, który jest tydzień.<br />
		<strong>Maksymalna liczba dni na przód w indeksie działów</strong>:<br />Jeśli ustawiony jest na 7, zostaną pokazane wydarzenia z następnego tygodnia.<br />
		<strong>Pokazuj święta w indeksie działów</strong>:<br />Pokazuj dzisiajesze święta w tablicy kalendarza w indeksie działów.<br />
		<strong>Pokazuj urodziny w indeksie działów</strong>:<br />Pokazuj dzisiejsze urosziny w tabeli kalendarza w indeksie działów.<br />
		<strong>Pokazuj wydarzenia w indeksie działów</strong>:<br />Pokazuj dzisiejsze wydarzenia w tabeli kalendarza w indeksie działów.<br />
		<strong>Domyślny dział do dodawania wydarzeń</strong>:<br />Jaki jest domyślny dział do dodawania wydarzeń?<br />
		<strong>Zezwól na wydarzenia nie powiązane z wiadomościami</strong>:<br />Zezwól użytkownikom wysyłać wydarzenia bez wymagania, aby były powiązane z wiadomością w dziale.<br />
		<strong>Rok pierwszy</strong>:<br />Zaznacz &quot;pierwszy&quot; rok na liście kalendarza.<br />
		<strong>Rok ostatni</strong>:<br />Zaznacz &quot;ostatni&quot; rok na liście kalendarza<br />
		<strong>Kolor urodzin</strong>:<br />Wybierz kolor tekstu dla urodzin<br />
		<strong>Kolor wydarzeń</strong>:<br />Wybierz kolor tekstu dla wydarzeń<br />
		<strong>Kolor świąt</strong>:<br />Wybierz kolor tekstu dla świąt<br />
		<strong>Zezwól na kilkudniowe wydarzenia</strong>:<br />Zezwól na kilkudniowe wydarzenia.<br />
		<strong>Maksymalna długość trwania wydarzenia (w dniach)</strong>:<br />Wybierz maksymalną ilość dni jaką może trwać dane wydarzenie.<br /><br />
		Pamiętaj, że używanie kalendarza (dodawanie wydarzeń, pokazywanie wydarzeń, etc.) może być kontrolowane za pomocą zezwoleń w panelu zezwoleń.';
$helptxt['localCookies'] = 'SMF używa ciasteczek (cookies) do przechowywania informacji na komputerze użytkownika. Ciasteczka mogą być przechowywane globalnie (mojserwer.com) lub lokalnie (mojserwer.com/sciezka/do/forum).<br />
	Sprawdź tą opcję jeśli występują problemy polegające na automatycznym wylogowywaniu użytkowników.<hr />
	Ciasteczka przechowywane globalnie są mniej bezpieczne jeśli są używane na współdzielonym serwerze (np. Tripod).<hr />
	Ciasteczka lokalne nie działają poza katalogiem forum, tak więc jeśli Twoje forum jest zainstalowane w www.mojserwer.com/forum, strony w stylu www.mojserwer.com/index.php nie będą w stanie uzyskać dostępu do informacji o koncie użytkownika.
	Globalne ciasteczka są szczególnie polecane gdy używasz SSI.php.';
$helptxt['enableBBC'] = 'Zaznaczenie tej opcji pozwoli użytkownikom na korzystanie w wiadomościach z kodów BBC, dzięki czemu będą mogli umieszczać obrazki, formatować tekst, itp.';
$helptxt['time_offset'] = 'Nie wszyscy administratorzy chcą aby forum używało tej samej strefy czasowej co serwer. Użyj tej opcji aby ustawić różnicę (w godzinach) między czasem na serwerze a godziną na forum. Dozwolone są wartości ujemne oraz ułamkowe.';
$helptxt['default_timezone'] = 'Strefa czasowa serwera informuje PHP o tym, gdzie znajduje się twój serwer. Powinieneś upewnić się czy to ustawienie jest poprawne, najlepiej według kraju/miasta w którym znajduje się serwer. Więcej informacji znajdziesz na <a href="http://www.php.net/manual/en/timezones.php" target="_blank">stronie PHP</a>.';
$helptxt['spamWaitTime'] = 'Tutaj możesz ustawić czas po upływie którego można napisać kolejną wiadomość. Ta opcja chroni przed "spamowaniem" ustalając jak często użytkownicy mogą wysyłać wiadomość.';

$helptxt['enablePostHTML'] = 'Włączenie tej opcji umożliwi korzystanie w wiadomościach z podstawowych znaczników HTML:
	<ul class="normallist" style="margin-bottom: 0;">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

$helptxt['themes'] = 'W tej sekcji możesz zadecydować czy użytkownik może wybrać styl domyślny, jaki styl widzą goście
	i inne opcje związane ze stylami. Kliknij na stylu po prawej stronie, by zmienić jego ustawienia.';
$helptxt['theme_install'] = 'Tutaj możesz zainstalować nowe style podając katalog, wgrywając archiwum lub kopiując domyślny styl.<br /><br />Pamiętaj że katalog lub archiwum musi zawierać plik <tt>theme_info.xml</tt>.';
$helptxt['enableEmbeddedFlash'] = 'Ta opcja zezwoli twoim użytkownikom na używanie Flasha bezpośrednio w swoich wiadomościach, tak jak obrazków. 
	Może to być ryzykowne pod względem bezpieczeństwa, chociaż tylko kilku się to udało wykorzystać. 
	UŻYWAJ NA WŁASNĄ ODPOWIEDZIALNOŚĆ!';
// !!! Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Zezwól na łączenie się z <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Ostatnimi aktualnościami</a> itp.
	Polecamy ograniczyć rozmiar liczby ostatnich wiadomości/aktualności ze względu na to, że
	niektóre czytniki RSS, jak np. Trillian, je obetną..';
$helptxt['hotTopicPosts'] = 'Zmienia liczbę wiadomości, która jest wymagana do oznaczenia wątku jako &quot;gorący&quot; lub 
	&quot;bardzo gorący&quot;.';
$helptxt['globalCookies'] = 'Ta opcja włącza ciasteczka działające we wszystkich poddomenach. Na przykład jeśli:<br />
	twoja strona to http://www.simplemachines.org/,<br />
	a Twoje forum to http://forum.simplemachines.org/,<br />
	Włączenie tej opcji umożliwi Ci dostęp do ciasteczek forum ze swojej strony. Nie włączaj tej opcji, jeśli na Twoim serwerze są inne poddomeny (np. hacker.simplemachines.org), których nie kontrolujesz.';
$helptxt['secureCookies'] = 'Enabling this option will force the cookies created for users on your forum to be marked as secure. Only enable this option if you are using HTTPS throughout your site as it will break cookie handling otherwise!';
$helptxt['securityDisable'] = 'To <em>wyłącza</em> dodatkowe sprawdzania hasła przy wchodzeniu do sekcji administracyjne. Nie jest to zalecane!';
$helptxt['securityDisable_why'] = 'Jest to Twoje bieżące hasło. (to samo którego używasz do logowania.)<br /><br />Zmuszając do wpisania tego pomaga upewnić się że chcesz wykonać czynności administracyjne, i że wiesz co <strong>Ty</strong> robisz.';
$helptxt['emailmembers'] = 'W tej wiadomości możesz użyć kilku &quot;zmiennych&quot;. Są to:<br />
	{$board_url} - Adres URL Twojego forum.<br />
	{$current_time} - Aktualny czas.<br />
	{$member.email} - Adres e-mail aktualnego użytkownika.<br />
	{$member.link} - Link do profilu aktualnego użytkownika.<br />
	{$member.id} - Id aktualnego użytkownika.<br />
	{$member.name} - Nazwa aktualnego użytkownika. (do personalizacji)<br />
	{$latest_member.link} - Link do profilu ostatnio zarejestrowanego użytkownika.<br />
	{$latest_member.id} - Id ostatnio zarejestrowanego użytkownika.<br />
	{$latest_member.name} - Nazwa ostatnio zarejestrowanego użytkownika.';
$helptxt['attachmentEncryptFilenames'] = 'Kodowanie nazwy załącznika umożliwia psiadnie więcej niż jednego załącznika o tej samej nazwie, 
	dla bezpieczeństwa użyj plików .php dla załącznika i wzmocnij ochronę. Jednakże może to utrudnić odbudowę bazy danych w pewnych 
	drastycznych przypadkach.';

$helptxt['failed_login_threshold'] = 'Ustawia liczbę nieudanych prób logowania zanim użytkownik zostanie przekierowany do strony z przypominaniem hasła.';
$helptxt['oldTopicDays'] = 'Jeśli ta opcja jest włączona, użytkownik zobaczy ostrzeżenie podczas próby napisania wiadomości w wątku, w którym nikt nic nie napisał w podanym w tym ustawieniu okresie czasu (w dniach). Ustawienie ilości dni na 0 spowoduje wyłączenie pokazywania ostrzeżeń.';
$helptxt['edit_wait_time'] = 'Liczba sekund, w których można jeszcze edytować wiadomość zanim zastanie zapisana informacja o dacie ostatniej modyfikacji.';
$helptxt['edit_disable_time'] = 'Liczba minut po upływie których użytkownik nie będzie mógł edytować napisanej przez siebie wiadomości. Ustaw 0 by wyłączyć.<br /><br /><em>Pamiętaj: Opcja ta nie wpływnie na użytkowników mających pozwolenie na edycję wiadomości pozostałych użytkowników.</em>';
$helptxt['posts_require_captcha'] = 'To ustawienie zmusza użytkowników do przejścia weryfikacji anti-spam bot, za każdym razem, kiedy chcą napisać post na forum. Tylko użytkownicy o ilości napisanych postów, mniejszej niż ustawiona liczba, będą zmuszeni przejść tę procedurę. To powinno pomóc zwalczać spamowanie przez automatyczne skrypty.';
$helptxt['enableSpellChecking'] = 'Włącza sprawdzanie pisowni. Musisz mieć zainstalowaną bibliotekę pspell na serwerze, a Twoja konfiguracja PHP musi być ustawiona do użycia tej biblioteki. Wydaje się że twój serwer ' . (function_exists('pspell_new') ? 'MA skonfigurowany pspell' : 'NIE MA skonfigurowanego pspell\'a') . '.';
$helptxt['disable_wysiwyg'] = 'To ustawienie wyłącza wszystkim użytkownikom możliwość korzystania z edytora WYSIWYG (&quot;What You See Is What You Get&quot;) na stronie edycji wiadomości.';
$helptxt['lastActive'] = 'Ustawia liczbę minut przez które ludzie będą widoczni na głównej stronie forum jako aktywni. Domyślnie 15 minut.';

$helptxt['customoptions'] = 'Ta sekcja definiuje opcje dostępne dla użytkownika z listy rozwijalnej. Jest klika kluczowych punktów do zauważenia w tej sekcji:
	<ul class="normallist">
		<li><b>Opcje Domyślne:</b> Zależnie, które opcje mają &quot;przycisk radio&quot; zaznaczony, będą one domyślnym wyborem użytkownika gdy otworzy swój profil.</li>
		<li><b>Usuwanie Opcji:</b> Aby usunąć opcję po prostu odznacz ją - wszyscy użytkownicy z zaznaczoną daną opcją, będą mieli ją odznaczoną.</li>
		<li><b>Zmiana kolejności Opcji:</b> Możesz zmienić kolejność opcji poprzez przeniesienie tekstu pomiędzy boksami. Jednakże - ważna uwaga - musisz upewnić się, że <b>nie</b> przenosisz tekstu, podczas zmiany kolejności opcji, w innym wypadku dane użytkownika zostaną utracone.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Ta opcja zoptymalizuje bazę danych co zadaną ilość dni. Ustaw 1, aby optymalizować bazę danych codziennie. Możesz również określić maksymalną ilość użytkowników będących online na forum. Dzięki temu nie przeciążysz serwera i nie sprawisz, że użytkownicy będą niezadowoleni z powolnego działania forum.';
$helptxt['autoFixDatabase'] = 'Automatycznie naprawia uszkodzone tabele i przywraca działanie forum tak, jakby nic się nie stało. Może być to użyteczne, ponieważ jedynym sposobem na naprawę jest REPAIR tabeli, a dzięki temu forum nie będzie wyłączone dopóki nie dowiesz się o awarii. Zostaniesz powiadomiony emailem jeśli coś takiego się stanie.';

$helptxt['enableParticipation'] = 'To pokazuje małą ikonę przy wątkach, w których użytkownik napisał.';

$helptxt['db_persist'] = 'Ustal stałe połączenie (persistent connection) z bazą danych aby zwiększyć wydajność. Jeśli nie jesteś na dedykowanym serwera, może to powodować problemy z Twoim hostem.';
$helptxt['ssi_db_user'] = 'Optional setting to use a different database user and password when you are using SSI.php.';

$helptxt['queryless_urls'] = 'Zmienia troszkę format adresów URL tak, aby były one lepiej indeksowane przez wyszukiwarki. Będą one wyglądać mniej więcej tak index.php/topic,1.html.<br /><br />Ta funkcja' . (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? '' : 'nie') . ' będzie działać na Twoim serwerze.';
$helptxt['countChildPosts'] = 'Po włączeniu tej opcji, przy działach zawierających poddziały pojawi się liczba wiadomości będąca sumą poddziałów. <br /><br />Może to znacząco spowolnić forum, ale dzięki temu działy z poddziałami niezawierające wiadomości nie będą pokazywać 0 wiadomości.';
$helptxt['fixLongWords'] = 'Ta opcja spowoduje dzielenie wyrazów dłuższych niż określona ilość znaków na części tak, aby nie psuły one designu forum. (tak bardzo...) Ta opcja nie powinna być ustawiona na wartość poniżej 40. Opcja nie będzie działać na forum gdzie jest używany UTF-8 oraz PHP w wersji niższej niż 4.4.0. To ' . (empty($GLOBALS['context']['utf8']) || version_compare(PHP_VERSION, '4.4.0') != -1 ? 'BĘDZIE' : 'NIE BĘDZIE') . ' działać na twoim serwerze';
$helptxt['allow_ignore_boards'] = 'Zaznaczenie tej opcji umożliwi użytkownikom wybranie działów, które chcieliby ignorować.';

$helptxt['who_enabled'] = 'Ta opcja pozwala Tobie właczyć lub wyłączyć możliwość sprawdzania użytkownikom kto przegląda forum i co kto robi.';

$helptxt['recycle_enable'] = '&quot;Przywraca&quot; usunięte wątki i wiadomości w określonym dziale.';

$helptxt['enableReportPM'] = 'Ta opcja pozwala twoim użytkownikom na zgłaszanie prywatnych wiadomości, które otrzymali, do ekipy administracyjnej. Może być to pomocne przy tropieniu nadużyć systemu prywatnych wiadomości.';
$helptxt['max_pm_recipients'] = 'Ta opcja pozwala na ustawienie maksymalnej ilości odbiorców wiadomości prywatnych, wysyłanych przez użytkownika forum. Może być to użyteczne do powstrzymania spamu wysyłanego przy użyciu systemu PW. Pamiętaj, że użytkownicy z uprawnieniami do wysyłania newsletterów nie są objęci tym ograniczeniem. Wpisanie wartości zerowej spowoduje wyłączenie limitu.';
$helptxt['pm_posts_verification'] = 'Ta opcja wymusi na użytkownikach wprowadzenie kodu z obrazka przy każdym wysyłaniu prywatnej wiadomości. Tylko użytkownicy o liczbie wiadomości poniżej ustawionej liczby będą musieli wpisywać kod. Ta funkcja pomaga w walce z automatycznym spamem.';
$helptxt['pm_posts_per_hour'] = 'Ogranicza liczbę prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny. Nie wpływa na moderatorów i administrację forum.';

$helptxt['default_personal_text'] = 'Ustawia domyślny tekst który użytkownicy będą miali ustawiony w polu &quot;prywatny tekst/podpis.&quot;';

$helptxt['modlog_enabled'] = 'Loguj wszystkie czynności moderacyjne.';

$helptxt['guest_hideContacts'] = 'Jeśli wybierzesz tę opcję, to adresy email i numery kontaktów komunikatorów wszystkich użytkowników 
	będą ukrywane przed gośćmi';

$helptxt['registration_method'] = 'Ta opcja umożliwia wybór metody rejestracji, przez osoby chcące dołączyć do użytkowników forum. Masz wybór pomiędzy:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Rejestracja wyłączona:</strong><br />
				Wyłącza rejestrację, co oznacza, że jedyny sposób na dołączenie do grona użytkowników, to stworzenie konta przez administratora.<br />
		</li><li>
			<strong>Rejestracja natychmiastowa</strong><br />
				Nowi użytkownicy mogą zalogować się i pisać wiadomości bezpośrednio po rejestracji.<br />
		</li><li>
			<strong>Aktywacja użytkownika</strong><br />
				Nowi użytkownicy po rejestracji otrzymają email z odnośnikiem do aktywacji konta. Dopiero po kliknięciu staną się pełnoprawnymi użytkownikami forum. Ta opcja zapobiega podawaniu niepoprawnych adresów email.<br />
		</li><li>
			<strong>Zatwierdzenie użytkownika</strong><br />
				Nowi użytkownicy po rejestracji muszą zaczekać, aż ich rejestrację zatwierdzi administrator.
		</li>
	</ul>';
$helptxt['register_openid'] = '<b>Identyfikacja z OpenID</b><br />
	OpenID oznacza używanie jednej nazwy użytkownika pomiędzy różnymi stronami, w celu ulepszenia doznań z bycia  online. Aby użyć OpenID musisz najpierw stworzyć konto OpenID - listę dostawców znajdziesz na <a href="http://openid.net/" target="_blank">Oficjalnej stronie OpenID</a><br /><br />
	Kiedy już będziesz miał konto OpenID po prostu wpisz swój unikatowy adres identyfikacyjny do pola wprowadzania i wyślij. Zostaniesz przeniesiony na witrynę dostawcy w celu sprawdzenia tożsamości, przed przyznaniem dostępu do strony.<br /><br />
	Podczas pierwszej wizyty na stronie zostaniesz poproszony o potwierdzenia paru detali zanim zostaniesz rozpoznany, po czym będziesz mógł się zalogować na stronę i zmienić swoją konfigurację profilu używając swojego OpenID.<br /><br />
	Po więcej informacji odwiedź <a href="http://openid.net/" target="_blank">Oficjalną stronę OpenID</a>';

$helptxt['send_validation_onChange'] = 'Gdy ta opcja jest zaznaczona wszyscy użytkownicy którzy zmienią swój adres email w profilu będą musieli reaktywować swoje konto poprzez email wysłany na nowy adres';
$helptxt['send_welcomeEmail'] = 'Gdy ta opcja jest włączona nowi użytkownicy otrzymają emaila witającego ich na Twoim forum';
$helptxt['password_strength'] = 'To ustawienie określa wymaganą siłę haseł użytkowników Twojego forum. Im silniejsze jest hasło, tym trudniej je odgadnąć lub złamać. 
	Dostępne są następujące ustawienia dla siły haseł.
	<ul class="normallist">
		<li><strong>Niska:</strong> Hasło musi mieć długość co najmniej czterech znaków.</li>
		<li><strong>Średnia:</strong> Hasło musi mieć długość co najmniej ośmiu znaków i nie może być częścią nazwy użytkownika lub jego adresu email.</li>
		<li><strong>Wysoka:</strong> To samo, co w Średnim, poza tym, że hasło musi składać się z dużych i małych liter oraz conajmniej jednej cyfry.</li>
	</ul>';

$helptxt['coppaAge'] = 'Wartość podana w tym polu określa minimalny wiek użytkownika pozwalający na natychmiastową rejestrację na forum.
	Podczas rejestracji użytkownik będzie musiał potwierdzić, czy przekroczył określony wiek. Jeżeli odpowiedź będzie negatywna rejestracja zostanie odrzucona lub zawieszona do momentu potwierdzenia przez dorosłego opiekuna - w zależności od wybranego trybu.
	Jeżeli zostanie wisane 0 wszelkie restrykcje związane z wiekiem będą ignorowane.';
$helptxt['coppaType'] = 'Jeśli ograniczenia wieku są włączone, to w tym miejscu można wybrać w jaki sposób traktować osoby poniżej wymaganego wieku. Do wyboru są dwa tryby postępowania:
	<ul class="normallist">
		<li>
			<strong>Odrzucenie próby rejestracji:</strong><br />
				Każdy próba rejestracji nowego użytkownika poniżej wymaganego wieku zostanie odrzucona.<br />
		</li><li>
			<strong>Wymóg zatwierdzenia przez rodzica bądź opiekuna</strong><br />
				Każdy nowy użytkownik poniżej wymaganego wieku, musi przesłać zgodę rodziców bądź opiekunów, zanim jego konto zostanie aktywowane. 
				Zostanie też przesłane im standardowy formularz do wypełnienia przez rodziców lub opiekunów, oraz dane kontaktowe, na jaki ma on być wysłany.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'Miejsce na wpisanie danych kontaktowych jest wymagane, tak by rodzice lub opiekunowie małoletnich mogli przesłać formularz ze zgodą. Musi być wypełnione przynajmniej pole adresowe lub numer faksu.';

$helptxt['allow_hideOnline'] = 'Zaznaczając tę opcje pozwolisz użytkownikom na ukrycie swojego statusu online przed innymi uzytkownikami (oprócz administratorów). Jeżeli opcja pozostanie wyłaczona jedynie osoby moderujące forum bedą mogły ukryc swoją obecność. Wyłączenie tej opcji nie zmieni istniejącego statusu użytkownika - powstrzyma ich przed ukrywaniem statusu w przyszłości.';
$helptxt['make_email_viewable'] = 'Jeśli ta opcja jest włączona, adresy email użytkowników zamiast być ukryte dla członków grup i gości będą publicznie widoczne  na forum. Włączenie tego narazi użytkowników na wielkie ryzyko zostania ofiarą spamu jako rezultat mailowych żniwiarzy przeglądających twoje forum. Zauważ, że ta opcja nie nadpisuje ustawień użytkowników o ukrywaniu swoich adresów email przed użytkownikami. Włączanie tej opcji <b>nie</b>jest rekomendowane.';
$helptxt['meta_keywords'] = 'These keywords are sent in the output of every page to indicate to search engines (etc) the key content of your site. They should be a comma seperated list of words, and should not use HTML. If this is left blank the default set is sent. As means of an example the default set is:<br /><div class="smalltext">&quot;PHP, MySQL, bulletin, board, free, open, source, smf, simple, machines, forum&quot;</div>';

$helptxt['latest_support'] = 'Ten panel pokazuje niektóre z najczęstszych problemów i pytań dotyczących konfiguracji Twojego serwera. Nie mart się, te informacje nie są nigdzie zapisywane.<br /><br />Jeśli cały czas pojawia komunikat &quot;Retrieving support information...&quot;, Twój komputer prawdopodobnie nie może połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_packages'] = 'Tutaj możesz zobaczyć kilka z najpopularniejszych i kilka losowych pakietów lub modyfikacji, których instalacja jest szybka i łatwa. <br /><br />Jeśli ta sekcja się nie pojawia, Twój komputer nie może prawdopodobnie połączyć się z <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$helptxt['latest_themes'] = 'Ten dział pokazuje kilka ostatnich i najpopularniejszych szablonów z <a href="http://www.simplemachines.org/">www.simplemachines.org</a>. Może się jednak nie wyświetlić poprawnie, jeśli twój komputer nie jest w stanie znaleźć <a href="http://www.simplemachines.org/">www.simplemachines.org</a>.';

$helptxt['secret_why_blank'] = 'Ze względów bezpieczeństwa odpowiedź na twoje pytanie (tak jak i na twoje hasło) jest zakodowana w taki sposób, że tylko SMF moze go potwierdzić. Nigdy nie powie Ci (ani nikomu innemu) jaka jest Twoja odpowiedz i hasło.';
$helptxt['moderator_why_missing'] = 'Moderatorzy ustalani są poprzez <a href="javascript:window.open(\'%1$s?action=admin;area=manageboards\'); self.close();">zarządzanie działami</a>, dla każdego działu osobno.';

$helptxt['permissions'] = 'Zezwolenia pozwalają administratorom decydować o dostępie grup użytkowników do różnych czynności na forum.<br /><br />Można zarządzać zezwoleniami poprzez działy lub grupy użytkowników klikając w \'Modyfikuj.\'';
$helptxt['permissions_board'] = 'Jeśli dział ma ustawienie \'globalne\', oznacza to, że nie posiada żadnych dodatkowych pozwoleń. Ustawienie \'lokalne\' oznacza, że dział posiada swoje odrębne zezwolenia. Pozwala to na ograniczenie lub zwiększenie dostępu do któregoś z działów, bez konieczności zmian w całym forum.';
$helptxt['permissions_quickgroups'] = 'Ta opcja pozwala na szybkie przyznanie domyślnych zezwoleń dla grup. Standardowe to zwyczajne prawa użytkownika. Restrykcyjne to takie jakie ma gość. Moderatorskie to prawa jakie posiadają moderatorzy. Przynależność do obsługi forum daje prawa bardzo bliskie administratorskim.';
$helptxt['permissions_deny'] = 'Zabronienie jakiejś czynności jest przydatne, jeśli chcesz zmienić pozwolenia konkretnemu użytkownikowi. Możesz też stworzyć grupę użytkowników z odebranymi prawami i oddać tam tych użytkowników.<br /><br />Zalecamy ostrożne stosowanie. Po zabronieniu użytkownikowi wybranych czynności na forum, nie będzie on miał do nich dostępu, niezależnie od grupy, do której przynależy.';
$helptxt['permissions_postgroups'] = 'Zezwolenia dla grup opartych na ilości wiadomości pozwalają na dodanie dodatkowych praw użytkownikom, którzy napisali określoną liczbę wiadomości. Tak by np. nagrodzić wiernych użytkowników forum. Te zezwolenia <em>dodają się</em> do zezwoleń z innych grup, do których należą użytkownicy.';
$helptxt['membergroup_guests'] = 'Grupa Goście to wszyscy użytkownicy, którzy nie są zalogowani.';
$helptxt['membergroup_regular_members'] = 'Użytkownikami bez grupy są wszyscy użytkownicy którzy są zarejestrowani, ale nie mają przydzielonej żadnej grupy.';
$helptxt['membergroup_administrator'] = 'Administrator może z definicji robić wszystko i widzieć wszystkie fora. Nie istnieją ustawienia uprawnień dla administratora.';
$helptxt['membergroup_moderator'] = 'Moderatorzy to specjalna grupa. Pozwolenia i ustawienia dotyczące tej grupy dotyczą się moderatorów, ale <em>tylko w działach, w których moderują</em>. Poza tymi działami, ich prawa nie różnią się od praw zwykłych użytkowników.';
$helptxt['membergroups'] = 'W SMF są dwa rodzaje grup użytkowników:
	<ul class="normallist">
		<li><strong>Zwykłe grupy:</strong> To takie grupy, do których użytkownicy nie są przydzielani automatycznie. By przypisać użytkownika do grupy, administrator musi wejść do jego profilu i kliknąć na &quot;ustawienia konta&quot;. Z tego miejsca można przydzielić go do dowolnej liczby istniejących grup.</li>
		<li><strong>Grupy oparte na ilości wiadomości:</strong> W odróżnieniu od zwykłych grup, do grup opartych na ilości wiadomości napisanych przez użytkownika, nie można przydzielić użytkowników. Użytkownicy są przydzielani do nich automatycznie po osiągnięciu określonej liczby wiadomości.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Możesz edytować te zdarzenia poprzez kliknięcie na czerwonej gwiazdce (*) zaraz obok ich nazw.';

$helptxt['maintenance_backup'] = 'Tutaj możesz zapisać kopię wszystkich wiadomości, ustawień, użytkowników i innych informacji dotyczących Twojego forum w bardzo dużym pliku.<br /><br />Zaleca się, aby dla bezpieczeństwa robić to dość często (np. raz w tygodniu).';
$helptxt['maintenance_rot'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> usunąć stare wątki. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br /><br />Używaj tej opcji z należytą ostrożnością.';
$helptxt['maintenance_members'] = 'Pozwala <strong>całkowicie</strong> i <strong>nieodwracalnie</strong> konta użytkowników Twojego forum. Zaleca się zrobić najpierw kopię na wypadek, gdyby zostało usunięte coś, czego nie chciałeś skasować.<br /><br />Używaj tej opcji z należytą ostrożnością.';

$helptxt['avatar_server_stored'] = 'Ta opcja umożliwia użytkownikom forum na użycie awatarów znajdujących się już na twoim serwerze. Znajdują się one przeważnie w tym samym katalogu co SMF w folderze awatarów.<br />Jako podpowiedź dodamy, że jeśli stworzysz oddzielne katalogi w folderze awatarów, powstaną  &quot;kategorie&quot; awatarów.';
$helptxt['avatar_external'] = 'Kiedy ta funkcja jest włączona, użytkownicy mogą podać własny URL to awatara. Minusem tego jest to, że w niektórych przypadkach, mogą oni użyć awatara zbyt dużego, albo z podobizną, której sobie nie życzysz na swoim forum.';
$helptxt['avatar_download_external'] = 'Jeżeli włączysz tą opcję, będzie możliwe pobranie awatarów z zewnętrznego adresu URL podanego przez użytkownika. Awatar będzie traktowany jak wgrany na serwer.';
$helptxt['avatar_upload'] = 'Ta opcja jest podobna do &quot;Zezwól użytkownikom na posiadanie awatarów z innego serwera&quot;, ale masz lepszą kontrolę nad awatarami, możesz zmieniać ich rozmiar a twoi użytkownicy nie muszą posiadać własnego serwera, na którym trzymaliby swoje awatary.<br /><br />Jednakże  są pewne minusy tej opcji. Musisz posiadać sporo miejsca na serwerze na awatary swoich forumowiczów.';
$helptxt['avatar_download_png'] = 'Pliki PNG są większe, ale oferują lepszą jakość. Jeśli ta opcja jest odznaczona, zostaną użyte pliki JPEG - które są zwykle mniejsze, ale zwykle o mniejszej jakości.';

$helptxt['disableHostnameLookup'] = 'Ta opcja wyłącza sprawdzanie nazwy DNS hosta, które na niektórych serwerach jest bardzo wolne. Zauważ że spowoduje to obniżenie efektywności banowania.';

$helptxt['search_weight_frequency'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na częstości występowania. Zlicza liczbę pasujących do wyszukiwania wiadomości i dzieli je przez liczbę wiadomości w wątku.';
$helptxt['search_weight_age'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela tym większą ważność im nowsza wiadomość.';
$helptxt['search_weight_length'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik bazuje na rozmiarze wątku. Im więcej w nim wiadomości, tym bardziej jest ważny.';
$helptxt['search_weight_subject'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik daje większą wagę wiadomościom, w których wyszukiwana fraza znajduje się w temacie wątku.';
$helptxt['search_weight_first_message'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik sprawdza czy wyszukiwana fraza znajduje się w pierwszej wiadomości wątku.';
$helptxt['search_weight_sticky'] = 'Współczynniki wag są używane do zadecydowania, które wiadomości pasujące do wyszukiwania, są najważniejsze. Możesz zmienić wagi, tak by dopasować wyszukiwanie do tego co uważasz za najważniejsze na swoim forum. Na przykład, jeśli używasz forum głównie do pisania aktualności, to ważniejsza może być data wysłania wiadomości i tam powinna być najwyższa waga. Wszystkie liczby wag powinny być dodatnimi liczbami całkowitymi. Wszystkie wagi są powiązane.<br /><br />Ten współczynnik przydziela większą ważność wątkom przyklejonym.';
$helptxt['search'] = 'Tutaj możesz dostosować wszystkie ustawienia dla funkcji wyszukiwania. Nie możesz tutaj ustawić kto ma do niej dostęp. Aby to zrobić przejdź do ekranu \'zarządzaj zezwoleniami\' w panelu administracyjnym.';
$helptxt['search_why_use_index'] = 'Indeks wyszukiwania w może w znaczny sposób przyspieszyć wyszukiwanie na forum. Szczególnie gdy liczba wiadomości na forum jest bardzo duża, wyszukiwanie bez indeksu może zająć dużo czasu i znacznie obciążać bazę danych. Jeśli ilość wiadomości na Twoim forum wzrośnie powyżej 50 tysięcy, weź pod uwagę stworzenie indeksu, by zwiększyć wydajność Twoje forum.<br /><br />Weź jednak pod uwagę, że indeks wyszukiwania może zająć sporo miejsca. Indeks pełnotekstowy jest wbudowany w indeks MySQL. Jest stosunkowo niewielki (podobnych rozmiarów co tabela wiadomości), lecz nie wszystkie słowa są indeksowane, a niektóre wyszukiwania i tak okazują się wolne. Indeks wybiórczy jest często większy (zależnie od konfiguracji do 3 razy większy niż tabela wiadomości), lecz jego wydajność jest większa od indeksu pełnotekstowego i nie jest zależna od rodzaju wyszukiwań.';

$helptxt['see_admin_ip'] = 'Adresy IP są pokazywane administratorom i moderatorom w celu ułatwienia moderacji i umożliwienia śledzenia osób, które robią złe rzeczy na forum. Pamiętaj, że adresy IP nie zawsze mogą być identyfikowane, a wiele osób zmienia swój adres IP co jakiś czas.<br /><br />Użytkownicy widzą swoje własne adresy IP.';
$helptxt['see_member_ip'] = 'Twój adres IP jest pokazywany jedynie Tobie i moderatorom. Pamiętaj że ta informacja nie identyfikuje jednoznacznie ludzi, ponieważ adresy IP zwykle się zmieniają okresowo<br /><br />Nie możesz sprawdzić adresów IP innych członków, a oni twojego.';
$helptxt['whytwoip'] = 'SMF używa różnorodnych metod detekcji adrsu IP użytkownika. Zwykle metody te, dają ten sam rezultat, czyli jeden adres IP, ale w niektórych sytuacjach, może zostać wykryty więcej niż jeden adres IP. W tym przypadku SMF pokaże oba adresy i uzyje ich do sprawdzenia listy zbanowanych adresów. Możesz kliknać w którykolwiek adres aby go śledzić lub zbanować, jeśli to konieczne.';

$helptxt['ban_cannot_post'] = 'Banowania \'Nie może wysyłać wiadomości\' włącza forum w tryb tylko-do-odczytu dla banowanego użytkownika. Użytkownik nie może tworzyć nowych wątków, odpowiadać na istniejące, wysyłać prywatnych wiadomości oraz oddawać głosów w ankietach. Zbanowany użytkownik może nadal odczytywać prywatne wiadomości oraz wątki.<br /><br />Wiadomość ostrzegawcza jest wyświetlana użytkownikowi jeśli został zbanowany w ten sposób.';

$helptxt['posts_and_topics'] = '	<ul class="normallist">
		<li>
			<strong>Ustawienia wiadomości</strong><br />
			Tu możesz zmienić ustawienia związane z pisaniem wiadomości i sposobem ich wyświetlania, a także włączyć sprawdzanie ortografii (jeśli serwer to umożliwia).
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Tu włączysz możliwość formatowania wiadomości, oraz wybrać które z kodów mają być dostępne dla użytkowników.
		</li><li>
			<strong>Słowa cenzurowane</strong>
			By utrzymać słownictwo forum pod kontrolą, możesz ustawić które słowa zostaną wymienione na ich \'poprawne\' odpowiedniki.
		</li><li>
			<strong>Ustawienia wątków</strong>
			Tu możesz zmieniać ustawienia dotyczące wątków: ilość na stronę, ilość potrzebna na by oznaczyć wątek jako gorący, opcje przyklejonych wątków itp.
		</li>
	</ul>';
$helptxt['spider_group'] = 'Ustawiając uprawnienia wg grupy, spowodujesz, że kiedy gość zostanie rozpoznany jako robot, jego uprawnienia zmienią się ze standardowych gościa, na uprawnienia grupy, którą tu ustawisz. Możesz tego użyć do ograniczenia dostępu silnikom wyszukiwarek. Przykładowo: Stwórz grupę o nazwie &quot;Roboty&quot; i ustaw ją tutaj. Możesz teraz zabrać tej grupie mozliwość oglądania profili użytkowników, co jednocześnie uniemożliwi robotom indeksację profili użytkowników Twojego forum. <br />Uwaga: Detekcja robotów nie jest idealna i może być symulowana przez użytkowników, dlatego nie ma gwarancji, że ograniczenia będą zastosowane tylko do silników wyszukiwarek, które dodałeś.';
$helptxt['show_spider_online'] = 'Te ustawienia pozwilą ci wybrać, czy roboty powinny być wymienione na liście użytkowników online w indeksie działu i stronie &quot;Kto jest online&quot;. Dostępne opcje to:
	<ul class="normallist">
		<li>
			<strong>Wcale</strong><br />
			Roboty będą po prostu wyświetlane jako goście dla wszystkich użytkowników.
		</li><li>
			<strong>Pokaż ilość robotów</strong><br />
			Index działu wyświetli liczbę robotów aktualnie odwiedzających forum.
		</li><li>
			<strong>Pokaż Nazwy Robotów</strong><br />
			Każda nazwa robota będzie wyświetlana, więc użytkownicy mogą zobaczyć ile robotów aktualnie odwiedza forum - efekt odnosi się do Indeksu działu jak i strony Kto jest online.
		</li><li>
			<strong>Pokaż Nazwy Robotów - Tylko dla Administratora</strong><br />
			Jak wyżej z wyjątkiem tego, że tylko Administratorzy mogą zobaczyć status robotów - dla pozostałych użytkowników roboty ukazują się jako goście.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Wybierz schemat mailowych życzeń urodzinowych. Podgląd będzie widoczny w polach Tytuł Maila i w Treść Maila.<br /><strong>Zauważ:</strong> Ustawienie tej opcji nie aktywuje automatycznie mailów urodzinowych. Aby aktywować maile urodzinowe użyj <a href="%1$s?action=admin;area=maintain;sa=tasks;sesc=%2$s" target="_blank" class="new_win">Menadżera Zadań</a> i aktywuj zadanie rozsyłania maili urodzinowych.';
$helptxt['pm_bcc'] = 'Kiedy wysyłasz Prywatną Wiadomość, możesz wybrać odbiorców jako UDW czyli &quot;Ukryte Do Wiadomości&quot;. Odbiorcy oznaczeni UDW, nie będą widoczni dla pozostałych adresatów wiadomości.';

$helptxt['move_topics_maintenance'] = 'To pozwoli Ci na przesunięcie wszystkich postów z wybranego forum na inne forum.';
$helptxt['maintain_reattribute_posts'] = 'Możesz użyć tej funkcji, jeśli chcesz przypisać wiadomości napisane przez gości do zarejestrowanego użytkownika. Jest to przydatne np. w sytuacji, gdy użytkownik usunął swoje konto, później zmienił zdanie i chce, aby jego stare wiadomości, były skojarzone z nowym kontem użytkownika.';
$helptxt['chmod_flags'] = 'Możesz ręcznie ustawić zezwolenia plikom, które zaznaczyłeś. Aby to zrobić, wpisz Chmod jako wartość numeryczną. Pamiętaj - te zmiany nie odniosą skutku w systemach operacyjnych Microsoft Windows.';

$helptxt['postmod'] = 'Ta sekcja pozwala członkom zespołu moderatorskiego (z odpowiednimi zezwoleniami) akceptować odpowiedzi i wątki zanim zostaną pokazane.';

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

// Version: 2.0 RC3; ManageMail

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['mailqueue_desc'] = 'Na tej stronie możesz skonfigurować opcje maili, a także przeglądać i administrować obecną kolejkę maili jeśli opcja ta jest włączona.';

$txt['mail_type'] = 'Typ Emailu';
$txt['mail_type_default'] = '(PHP standardowo)';
$txt['smtp_host'] = 'SMTP serwer';
$txt['smtp_port'] = 'port SMTP';
$txt['smtp_username'] = 'użytkownik SMTP';
$txt['smtp_password'] = 'hasło SMTP';

$txt['mail_queue'] = 'Włącz kolejkę maili';
$txt['mail_limit'] = 'Maksymalna ilość listów wysłanych na minutę';
$txt['mail_limit_desc'] = '(Ustaw 0 by wyłączyć)';
$txt['mail_quantity'] = 'Maksymalna ilość listów wysłanych przy załadowaniu strony';

$txt['mailqueue_stats'] = 'Statystyki kolejki maili';
$txt['mailqueue_oldest'] = 'Najstarszy mail';
$txt['mailqueue_oldest_not_available'] = 'N/A';
$txt['mailqueue_size'] = 'Długość kolejki';

$txt['mailqueue_age'] = 'Wiek';
$txt['mailqueue_priority'] = 'Priorytet';
$txt['mailqueue_recipient'] = 'Odbiorca';
$txt['mailqueue_subject'] = 'Temat';
$txt['mailqueue_clear_list'] = 'Wyślij teraz listy w kolejce';
$txt['mailqueue_no_items'] = 'Kolejka maili jest aktualnie pusta';
// Do not use numeric entities in below string.
$txt['mailqueue_clear_list_warning'] = 'Czy jesteś pewien że chcesz wysłać teraz całą kolejkę listów? Przekroczy to wszystkie ustawione limity.';

$txt['mq_day'] = '%1.1f Dzień';
$txt['mq_days'] = '%1.1f Dni';
$txt['mq_hour'] = '%1.1f Godzina';
$txt['mq_hours'] = '%1.1f Godzin';
$txt['mq_minute'] = '%1$d Minuta';
$txt['mq_minutes'] = '%1$d Minut';
$txt['mq_second'] = '%1$d Sekunda';
$txt['mq_seconds'] = '%1$d Sekund';

$txt['mq_mpriority_5'] = 'Bardzo niski';
$txt['mq_mpriority_4'] = 'Niski';
$txt['mq_mpriority_3'] = 'Normalny';
$txt['mq_mpriority_2'] = 'Wysoki';
$txt['mq_mpriority_1'] = 'Bardzo wysoki';

$txt['birthday_email'] = 'Wiadomość urodzinowa';
$txt['birthday_body'] = 'Zawartość emaila';
$txt['birthday_subject'] = 'Temat emaila';

// Version: 2.0 RC3; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Na tej stronie możesz zmienić ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">ustawienia stylów</a> jeśli chcesz zmienić inne opcje.  Kliknij na ikony pomocy, jeśli chcesz uzyskać więcej informacji o jakimś ustawieniu.';
$txt['security_settings_desc'] = 'Ta strona umożliwia Ci ustawienie opcji szczególnie związanych z bezpieczeństwa i moderowaniem twojego forum, z uwzględnieniem opcji anty-spam.';
$txt['modification_settings_desc'] = 'Ta strona zawiera ustawienie dodane do twojego forum przez modyfikacje';

$txt['modification_no_misc_settings'] = 'Nie ma jeszcze zainstalowanych żadnych modyfikacji, aby móc dodać jakieś ustawienia.';

$txt['pollMode'] = 'Tryb ankiety';
$txt['disable_polls'] = 'Wyłącz ankiety';
$txt['enable_polls'] = 'Włącz ankiety';
$txt['polls_as_topics'] = 'Wyświetl istniejące ankiety jako wątki';
$txt['allow_guestAccess'] = 'Pozwól gościom przeglądać forum';
$txt['userLanguage'] = 'Pozwól użytkownikom wybrać język forum';
$txt['allow_editDisplayName'] = 'Pozwól użytkownikom na zmianę ich wyświetlanej nazwy';
$txt['allow_hideOnline'] = 'Pozwól nie-administratorom ukryć swój status online';
$txt['guest_hideContacts'] = 'Nie pokazuj gościom danych kontaktowych użytkowników';
$txt['titlesEnable'] = 'Włącz tytuły osobiste';
$txt['enable_buddylist'] = 'Włącz listę znajomych/ignorowanych';
$txt['default_personal_text'] = 'Domyślny tekst osobisty';
$txt['number_format'] = 'Domyślny format liczb';
$txt['time_format'] = 'Domyślny format czasu';
$txt['setting_time_offset'] = 'Generalne przesunięcie czasu<div class="smalltext">(modyfikacja tej wartości zmieni ustawienia u wszystkich.)</div>';
$txt['setting_default_timezone'] = 'Serwer czasu';
$txt['failed_login_threshold'] = 'Dopuszczalna ilość prób zalogowania';
$txt['lastActive'] = 'Ilość w minutach do pokazania, że użytkownik jest aktywny';
$txt['trackStats'] = 'Śledź statystykę dni';
$txt['hitStats'] = 'Śledź ilość wejść na dzień (statystyki muszą być włączone)';
$txt['enableCompressedOutput'] = 'Włącz kompresję';
$txt['disableTemplateEval'] = 'Wyłącz ocenę szablonów';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezwól przeglądarkom wracać do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wygaśnięcia nieaktywnej sesji';
$txt['enableErrorLogging'] = 'Włącz raportowanie błędów';
$txt['enableErrorQueryLogging'] = 'Uwzględnij zapytania bazy danych w dzienniku błędów';
$txt['pruningOptions'] = 'Włącz czyszczenie logów';
$txt['pruneErrorLog'] = 'Usuwają logi błędów starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneModLog'] = 'Usuń logi moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneBanLog'] = 'Usuń wpisy banów z logu starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneReportLog'] = 'Usuń raporty moderacji starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneScheduledTaskLog'] = 'Usuń logi zaplanowanych zadań starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['pruneSpiderHitLog'] = 'Usuń logi aktywności wyszukiwarek starsze niż:<div class="smalltext">(0 wyłączone)</div>';
$txt['cookieTime'] = 'Domyślny czas zalogowania (w minutach)';
$txt['localCookies'] = 'Włącz lokalne przechowywanie plików cookie<div class="smalltext">(SSI nie działa z tą opcją.)</div>';
$txt['globalCookies'] = 'Używaj plików cookie niezależnych od subdomeny<div class="smalltext">(najpierw wyłącz lokalne pliki cookie!)</div>';
$txt['secureCookies'] = 'Wymuś ciasteczka w celu bezpieczeństwa<div class="smalltext">(Możliwość włączenia jeśli używasz HTTPS - w przeciwnym wypadku nie korzystaj z tej opcji!)</div>';
$txt['securityDisable'] = 'Wyłącz dodatkowe sprawdzanie hasła w centrum administracji';
$txt['send_validation_onChange'] = 'Ponowna aktywacja konta po zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj zgody administratora gdy użytkownik chce usunąć swoje konto';
$txt['autoOptMaxOnline'] = 'Maksymalna ilość użytkowników online podczas optymalizacji<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezwól użytkownikom na wyłączenie ogłoszeń';
$txt['disallow_sendBody'] = 'Wyłącz treść wiadomości w powiadomieniach';
$txt['queryless_urls'] = 'Wyświetlaj adresy przyjazne wyszukiwarkom<div class="smalltext"><strong>działa tylko w Apache!</strong></div>';
$txt['max_image_width'] = 'Maksymalna szerokość obrazków w wiadomościach (0 = wyłącz)';
$txt['max_image_height'] = 'Maksymalna wysokość obrazków w wiadomościach (0 = wyłącz)';
$txt['enableReportPM'] = 'Włącz zgłaszanie prywatnych wiadomości administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorców przy wysyłaniu prywatnych wiadomości.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_verification'] = 'Liczba wiadomości poniżej której użytkownik musi wpisać kod weryfikacyjny, aby wysłać prywatną wiadomość.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_per_hour'] = 'Liczba prywatnych wiadomości jaką użytkownik może wysłać w ciągu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczbę wyświetlanych odnośników do stron';
$txt['contiguous_page_display'] = 'Ilość kolejno wyświetlanych stron';
$txt['to_display'] = 'wyświetla';
$txt['todayMod'] = 'Włącz funkcję &quot;Dzisiaj&quot;';
$txt['today_disabled'] = 'Wyłączona';
$txt['today_only'] = 'Tylko Dzisiaj';
$txt['yesterday_today'] = 'Dzisiaj i Wczoraj';
$txt['topbottomEnable'] = 'Włącz przyciski Idź do góry/do dołu';
$txt['onlineEnable'] = 'Pokazuj status online/offline użytkownika w wiadomościach i PW';
$txt['enableVBStyleLogin'] = 'Pokaż pole szybkiego logowania na każdej stronie';
$txt['defaultMaxMembers'] = 'Ilość użytkowników na stronę w liście użytkowników';
$txt['timeLoadPageEnable'] = 'Wyświetlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wyłącz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'Włącz listę użytkowników online';
$txt['make_email_viewable'] = 'Zezwól na wyświetlanie adresu email.';
$txt['meta_keywords'] = 'Znaczniki Meta powiązane z forum.<div class="smalltext">Dla wyszukiwarek, zostaw pole puste aby użyć domyślnych znaczników.</div>';

$txt['karmaMode'] = 'Tryb reputacji';
$txt['karma_options'] = 'Wyłącz reputację|Włącz całkowitą reputację|Włącz pozytywną/negatywną reputację';
$txt['karmaMinPosts'] = 'Minimalna ilość wiadomości potrzebna do zmiany reputacji';
$txt['karmaWaitTime'] = 'Czas oczekiwania w godzinach';
$txt['karmaTimeRestrictAdmins'] = 'Podporządkuj administratorów czasowi oczekiwania';
$txt['karmaLabel'] = 'Nazwa reputacji';
$txt['karmaApplaudLabel'] = 'Etykieta poparcia';
$txt['karmaSmiteLabel'] = 'Etykieta potępienia';

$txt['caching_information'] = '<div align="aligncenter underline"><strong><u>Ważne!</u> Przeczytaj to zanim włączysz poniższe opcje.</strong></div><br />
	SMF obsługuje cache używając akceleratorów. Aktualnie obsługiwane akceleratory to:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
                <li>XCache</li>
	</ul>
	Cache będzie działać na Twoim serwerze tylko jeśli PHP będzie skompilowane z jednym z wyżej wymienionych akceleratorów lub z
	włączonym memcache. Jeśli nie posiadasz zainstalowanego żadnego akceleratora, SMF będzie polegać na opcji cache w pliku.<br /><br />
	SMF pozwala na aktywację cache na różnych poziomach. Im wyższy poziom cache, tym więcej czasu procesora będzie zużywane na odczytanie
	informacji cache. Jeśli na Twojej maszynie jest uaktywnione cache, zaleca się rozpocząć od ustawienia poziomu 1.
	<br /><br />
	Pamiętaj, że jeśli używasz memcache, musisz podać parametry serwera w ustawieniach poniżej. Powinny być one podane w formie oddzielonej przecinkami listy,
	tak jak na poniższym przykładzie:<br />
	&quot;serwer1,serwer2,serwer3:port,serwer4&quot;<br /><br />
	Jeśli port nie zostanie podany, SMF użyje portu 11211. SMF będzie próbować wymuszonego lub losowego rozłożenia obciążenia pomiędzy serwerami.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF nie jest w stanie wykryć na Twoim serwerze kompatybilnego akceleratora.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany Zend.</strong> ';
$txt['detected_Memcached'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany Memcached.</strong> ';
$txt['detected_XCache'] = '<strong style="color: green">SMF wykrył, że na Twoim serwerze jest zainstalowany XCache.</strong>';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wyłącz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = 'Ustawienia Memcache';

$txt['loadavg_warning'] = '<span class="error">Uwaga: poniższe ustawienia muszą być edytowane z ostrożnością. Ustawienie ich na niskim poziomie może spowodować że forum będzie źle renderowane i będzie <strong>bezużyteczne</strong>!</span> ';
$txt['loadavg_enable'] = 'Włącz równoważenie obciążenia przez średnie obciążenie';
$txt['loadavg_auto_opt'] = 'Próg automatycznego wyłączenia optymalizacji bazy danych';
$txt['loadavg_search'] = 'Próg wyłączenia wyszukiwania';
$txt['loadavg_allunread'] = 'Próg wyłączenia wszystkich nieprzeczytanych wątków';
$txt['loadavg_unreadreplies'] = 'Próg wyłączenia nieprzeczytanych odpowiedzi';
$txt['loadavg_show_posts'] = 'Próg do wyłączania pokazywanych wiadomości użytkownika';
$txt['loadavg_forum'] = 'Próg <strong>całkowitego</strong> wyłączenia forum';

$txt['setting_password_strength'] = 'Wymagana siła haseł użytkowników';
$txt['setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['setting_password_strength_medium'] = 'Średnia - nie może zawierać nazwy użytkownika';
$txt['setting_password_strength_high'] = 'Wysoka - mieszanka różnych znaków';

$txt['antispam_Settings'] = 'Weryfikacja Anti-Spam';
$txt['antispam_Settings_desc'] = 'Ta sekcja pozwala na ustawienie kontroli weryfikacji aby zapewnić cię że użytkownik to człowiek (a nie bot), i w jaki sposób i gdzie się stosuje.';
$txt['setting_reg_verification'] = 'Wymagaj weryfikacji na stronie rejestracji';
$txt['posts_require_captcha'] = 'Liczba wiadomości, poniżej której użytkownicy muszą przejść weryfikację aby utworzyć wiadomość';
$txt['posts_require_captcha_desc'] = '(0 - bez limitu, nie dotyczy moderatorów)';
$txt['search_enable_captcha'] = 'Wymagaj weryfikacji przy przeszukiwaniu przez wszystkich gości';
$txt['setting_guests_require_captcha'] = 'Goście muszą przejść weryfikację kiedy tworzą wiadomość';
$txt['setting_guests_require_captcha_desc'] = '(Automatycznie ustawione, jeśli określiłeś minimalną liczbę wiadomości poniżej)';

$txt['configure_verification_means'] = 'Konfiguracja metod weryfikacji';
$txt['setting_qa_verification_number'] = 'Liczba pytań weryfikacyjnych na które użytkownik musi odpowiedzieć';
$txt['setting_qa_verification_number_desc'] = '(0 aby wyłączyć; pytania są ustawiane poniżej)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = 'Złożoność obrazka do weryfikacji (CAPTCHA)';
$txt['setting_visual_verification_type_desc'] = 'Im bardziej obraz jest złożony, tym trudniejsze jest obejście go przez boty';
$txt['setting_image_verification_off'] = 'Wyłącz';
$txt['setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['setting_image_verification_simple'] = 'Prosty - Nachodzące na siebie kolorowe litery, bez szumu';
$txt['setting_image_verification_medium'] = 'Średni - Nachodzące na siebie kolorowe litery, z szumem';
$txt['setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['setting_image_verification_extreme'] = 'Ekstremalny - Pochylone litery, szum, linie i kształty.';
$txt['setting_image_verification_sample'] = 'Przykład';
$txt['setting_image_verification_nogd'] = '<strong>Uwaga:</strong> ustawienie złożoności nie ma znaczenia, ponieważ serwer nie ma zainstalowanej biblioteki GD.';
$txt['setup_verification_questions'] = 'Pytania kontrolne';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">If you want users to answer verification questions in order to stop spam bots powinieneś ustawić kilka pytań w tabeli poniżej. You should pick relatively simple questions; answers are not case sensitive. Możesz używać tagów BBC aby sformatować pytania, aby usunąć pytanie poprostu wyczyć zawartość tej linii.</span>';
$txt['setup_verification_question'] = 'Pytanie';
$txt['setup_verification_answer'] = 'Odpowiedź';
$txt['setup_verification_add_more'] = 'Dodaj kolejne pytanie';

$txt['moderation_settings'] = 'Ustawienia moderacji';
$txt['setting_warning_enable'] = 'Włącz system ostrzeżeń użytkownika';
$txt['setting_warning_watch'] = 'Poziom Ostrzeżenia - Użytkownik jest obserwowany<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, użytkownik zostanie dodany do listy obserwowanych użytkowników - 0 aby wyłączyć.</div>';
$txt['setting_warning_moderate'] = 'Poziom Ostrzeżenia - wiadomości użytkownika są moderowane<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, wszystke wiadomości użytkownika są moderowane - 0 aby wyłączyć.</div>';
$txt['setting_warning_mute'] = 'Poziom Ostrzeżenia - Użytkownik nie może pisać postów<div class="smalltext">Wartość poziomu ostrzeżenia, powyżej którego, uzytkownik nie może pisać postów - 0 aby wyłączyć.</div>';
$txt['setting_user_limit'] = 'Maksymalna ilość punktów ostrzeżenia na dzień<div class="smalltext">Ta wartość, to maksymalna ilość punktów ostrzeżenia, jakie jeden moderator może przyznać użytkownikowi w okresie 24 godzin - 0 bez limitu.</div>';
$txt['setting_warning_decrement'] = 'Punkty ostrzeżenia, które mogą przyznać użytkownicy w ciagu 24 godzin<div class="smalltext">dotyczy tylko użytkowników, którzy nie otrzymali zadnego ostrzeżenia przez ostatnie 24H - ustaw na 0 aby wyłączyć.</div>';
$txt['setting_warning_show'] = 'Pokaż stan ostrzeżeń dla wszyskich użytkowników<div class="smalltext">Jeśli wyłączony, tylko moderatorzy widzą stan ostrzeżeń użytkownika.</div>';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['signature_settings'] = 'Ustawienia podpisu';
$txt['signature_settings_desc'] = 'Na tej stronie decydujesz o wyglądzie podpisów użytkowników SMF.';
$txt['signature_settings_warning'] = 'Te ustawienia nie dotyczą isniejących juz podpisów. Kliknij <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">tutaj</a> aby zastosować reguły do wszystkich istniejących podpisów.';
$txt['signature_enable'] = 'Włacz podpisy';
$txt['signature_max_length'] = 'Maksymalna dozwolona ilość znaków<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_lines'] = 'Maksymalna ilość linii<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_images'] = 'Maksymalna liczba obrazków<div class="smalltext">(0=brak limitu - pomija buźki)</div>';
$txt['signature_max_smileys'] = 'Maksymalna liczba emotikon<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_width'] = 'Maksymalna szerokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_height'] = 'Maksymalna wysokość obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_font_size'] = 'Maksymalny rozmiar czcionki dozwolonej w podpisach<div class="smalltext">(0=brak limitu, w pikselach)</div>';
$txt['signature_bbc'] = 'Tagi BBC włączone';

$txt['custom_profile_title'] = 'Własne pola profilu';
$txt['custom_profile_desc'] = 'Na tej stronie możesz tworzyć własne pola profilów dopasowane do Twoich wymagań';
$txt['custom_profile_active'] = 'Aktywne';
$txt['custom_profile_fieldname'] = 'Nazwa pola';
$txt['custom_profile_fieldtype'] = 'Typ pola';
$txt['custom_profile_make_new'] = 'Nowe pole';
$txt['custom_profile_none'] = 'Nie utworzyłeś jeszcze żadnych własnych pól profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'Długi tekst';
$txt['custom_profile_type_select'] = 'Lista wyboru';
$txt['custom_profile_type_radio'] = 'Grupa opcji';
$txt['custom_profile_type_check'] = 'Pole wyboru';

$txt['custom_add_title'] = 'Dodaj pole profilu';
$txt['custom_edit_title'] = 'Edytuj pole profilu';
$txt['custom_edit_general'] = 'Pokaż ustawienia';
$txt['custom_edit_input'] = 'Dane wejściowe';
$txt['custom_edit_advanced'] = 'Zaawansowane ustawienia';
$txt['custom_edit_name'] = 'Nazwa';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Sekcja profilu';
$txt['custom_edit_profile_desc'] = 'Sekcja profilu, gdzie jest edytowany.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Pokaż przy rejestracji';
$txt['custom_edit_registration_disable'] = 'Nie';
$txt['custom_edit_registration_allow'] = 'Tak';
$txt['custom_edit_registration_require'] = 'Tak, i wymagaj wpisania';
$txt['custom_edit_display'] = 'Pokaż w widoku wątku';
$txt['custom_edit_picktype'] = 'Typ pola';

$txt['custom_edit_max_length'] = 'Maksymalna długość';
$txt['custom_edit_max_length_desc'] = '(0=bez limitu)';
$txt['custom_edit_dimension'] = 'Wymiary';
$txt['custom_edit_dimension_row'] = 'Wierszy';
$txt['custom_edit_dimension_col'] = 'Kolumn';
$txt['custom_edit_bbc'] = 'Włącz BBC';
$txt['custom_edit_options'] = 'Opcje';
$txt['custom_edit_options_desc'] = 'Zostaw puste pola aby usunąć. Przełącznik wybiera domyślną opcję.';
$txt['custom_edit_options_more'] = 'Więcej';
$txt['custom_edit_default'] = 'Stan domyślny';
$txt['custom_edit_active'] = 'Aktywne';
$txt['custom_edit_active_desc'] = 'Jeżeli nie zaznaczone to pole nie będzie pokazywane.';
$txt['custom_edit_privacy'] = 'Prywatność';
$txt['custom_edit_privacy_desc'] = 'Kto może widzieć i edytować to pole.';
$txt['custom_edit_privacy_all'] = 'Użytkownicy widzą to pole; właściciel może edytować';
$txt['custom_edit_privacy_see'] = 'Użytkownicy widzą to pole; tylko admini mogą edytować';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'To pole widoczne jest tylko dla adminów';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Prawidłowy Email';
$txt['custom_edit_mask_number'] = 'Numeryczny';
$txt['custom_edit_mask_nohtml'] = 'Brak HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Zaawansowane)';
$txt['custom_edit_enclose'] = 'Pokaż załączony w tekście (opcjonalne)';
$txt['custom_edit_enclose_desc'] = '<strong>Sugerujemy</strong>, aby użyć maski wprowadzania do sprawdzenia danych wprowadzonych przez użytkownika.';

$txt['custom_edit_placement'] = 'Wybierz położenie';
$txt['custom_edit_placement_standard'] = 'Standardowe (z tytułem)';
$txt['custom_edit_placement_withicons'] = 'Z ikonami';
$txt['custom_edit_placement_abovesignature'] = 'Nad sygnaturą';
$txt['custom_profile_placement'] = 'Położenie';
$txt['custom_profile_placement_standard'] = 'Standardowe';
$txt['custom_profile_placement_withicons'] = 'Z ikonami';
$txt['custom_profile_placement_abovesignature'] = 'Nad sygnaturą';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Czy jesteś pewien że chcesz skasować to pole - wszystkie dane związane z tym polem dane zostaną stracone!';

$txt['standard_profile_title'] = 'Standardowe pola profilu';
$txt['standard_profile_field'] = 'Pola';

$txt['core_settings_welcome_msg'] = 'Witaj w Twoim nowym Forum';
$txt['core_settings_welcome_msg_desc'] = 'By w pełni zacząć korzystać z forum sugerujemy wybranie, które z cech podstawowych SMF chcesz włączyć. Polecamy włączenie tylko tych funkcji które potrzebujesz!';
$txt['core_settings_item_cd'] = 'Kalendarz';
$txt['core_settings_item_cd_desc'] = 'Włączenie tej funkcji otworzy nowe opcje wyboru użytkownikom wyświetlającym kalendarz, dodawanie i przeglądanie zdarzeń, pokazywanie urodzin w kalendarzu oraz wiele więcej.';
$txt['core_settings_item_cp'] = 'Zaawansowane Pola Profilu';
$txt['core_settings_item_cp_desc'] = 'Opcja pozwala na ukrycie standardowych pól profilu, dodawanie pól profilu z rejestracją oraz tworzenie nowych pól w profilach twojego forum.';
$txt['core_settings_item_k'] = 'Reputacja';
$txt['core_settings_item_k_desc'] = 'Reputacja jest funkcją pokazującą popularność użytkownika. Użytkownicy, gdy mają do tego prawo, mogą podziękować lub nie drugiemu użytkownikowi, w taki sposób zliczana jest popularność.';
$txt['core_settings_item_ml'] = 'Logi Moderacji';
$txt['core_settings_item_ml_desc'] = 'Włączenie logowania moderacji pomoże Ci w śledzeniu wszystkich akcji podejmowych przez moderatorów na forum.';
$txt['core_settings_item_pm'] = 'Moderowanie Wiadomości';
$txt['core_settings_item_pm_desc'] = 'Moderowanie wiadomości zezwala na wybranie grup oraz działów gdzie wiadomości muszą być zatwierdzone przed ich wyświetleniem. Po włączeniu tej opcji odwiedź sekcję zezwoleń i ustaw odpowiednie zezwolenia danym grupom/użytkownikom.';
$txt['core_settings_item_ps'] = 'Płatna Subskrypcja';
$txt['core_settings_item_ps_desc'] = 'Płatna subskrypcja pozwoli użytkownikom opłacić ich subskrypcję w celu zmiany obecnej grupy do której należy, a także praw dostępu z nią związanych.';
$txt['core_settings_item_rg'] = 'Generowanie Raportów';
$txt['core_settings_item_rg_desc'] = 'Ta opcja administracyjna pozwala na generowanie róznego rodzaju raportów (które mogą być wydrukowane) w celu przywrócenia w łatwy sposób twoich obecnych ustawień forum - szczególnie przydatne na dużych forach.';
$txt['core_settings_item_sp'] = 'Śledzenie Silników Wyszukiwarek';
$txt['core_settings_item_sp_desc'] = 'Włączenie tej funkcji pozwoli administratorowi na śledze silników wyszukiwarek gdy indeksują forum.';
$txt['core_settings_item_w'] = 'System Ostrzeżeń';
$txt['core_settings_item_w_desc'] = 'Funkcja pozwala Administratorom i Moderatorom na wysyłanie ostrzeżeń użytkownikom; zawiera także zaawansowane funkcje dla automatycznego usuwania praw użytkownika gdy poziom ostrzeżenia wzrasta. Uwaga: do pełnego działania wymagana jest funkcja &quot;Moderowanie Wiadomości&quot; i musi być włączona.';
$txt['core_settings_switch_on'] = 'Kliknij aby włączyć';
$txt['core_settings_switch_off'] = 'Kliknij aby wyłączyć';
$txt['core_settings_enabled'] = 'Włączony';
$txt['core_settings_disabled'] = 'Wyłączony';

$txt['languages_lang_name'] = 'Nazwa wyświetlana';
$txt['languages_locale'] = 'Lokalizacja';
$txt['languages_default'] = 'Domyślny';
$txt['languages_character_set'] = 'Strona kodowa';
$txt['languages_users'] = 'Użytkownicy';
$txt['language_settings_writable'] = 'Uwaga: Nie można zapisywać w Settings.php, domyślne ustawienia nie mogą być zapamiętane.';
$txt['edit_languages'] = 'Edycja języków';
$txt['lang_file_not_writable'] = '<strong>Uwaga:</strong> Podstawowy plik języka (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['lang_entries_not_writable'] = '<strong>Uwaga:</strong> Plik języka, który chcesz edytować (%1$s) jest nie zapisywalny. Musisz umożliwić zapis przed dokonaniem zmian.';
$txt['languages_ltr'] = 'Od prawej do lewej';

$txt['add_language'] = 'Dodaj język';
$txt['add_language_smf'] = 'Pobierz z Simple Machines';
$txt['add_language_smf_browse'] = 'Wpisz nazwę poszukiwanego jezyka lub pozostaw puste aby wyszukać wszystkie.';
$txt['add_language_smf_install'] = 'Zainstaluj';
$txt['add_language_smf_found'] = 'Następujące języki zostały znalezione. Kliknij łącze Zainstaluj obok wybranego języka, zostaniesz przeniesiony do menadżera aktualizacji pakietu aby zainstalować.';
$txt['add_language_error_no_response'] = 'Strona Simple Machines nie odpowiada. Proszę spróbuj ponownie później.';
$txt['add_language_error_no_files'] = 'Żadne pliki nie zostały znalezione.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Wersja';

$txt['edit_language_entries_primary'] = 'Poniżej najważniejsze ustawienia dla tej paczki językowej.';
$txt['edit_language_entries'] = 'Edytuj plik językowy';
$txt['edit_language_entries_file'] = 'Wybierz plik do edycji';
$txt['languages_dictionary'] = 'Słownik';
$txt['languages_spelling'] = 'Pisownia';
$txt['languages_for_pspell'] = 'To jest dla <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - jeśli zainstalowany';
$txt['languages_rtl'] = 'Włącz tryb &quot;Od prawej do lewej&quot;';

$txt['lang_file_desc_index'] = 'Ogólne zestawy znaków';
$txt['lang_file_desc_EmailTemplates'] = 'Szablony email';

$txt['languages_download'] = 'Pobierz pakiet językowy';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Notatka:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Pliki podstawowe';
$txt['languages_download_theme_files'] = 'Pliki związane ze stylem';
$txt['languages_download_filename'] = 'Nazwa pliku';
$txt['languages_download_dest'] = 'Położenie';
$txt['languages_download_writable'] = 'Zapisywalny';
$txt['languages_download_version'] = 'Wersja';
$txt['languages_download_older'] = 'Masz zainstalowaną najnowszą wersję tego pliku, nadpisanie nie jest zalecane.';
$txt['languages_download_exists'] = 'Już istnieje';
$txt['languages_download_exists_same'] = 'Identyczny';
$txt['languages_download_exists_different'] = 'Inny';
$txt['languages_download_copy'] = 'Kopiuj';
$txt['languages_download_not_chmod'] = 'Nie możesz kontynuować instalacji dopóki nie będzie możliwy zapis wszystkich wybranych plików.';
$txt['languages_download_illegal_paths'] = 'Pakiet zawiera nieprawidłowe ścieżki dostępu - skontaktuj się z Simple Machines';
$txt['languages_download_complete'] = 'Instalacja ukończona';
$txt['languages_download_complete_desc'] = 'Pakiet językowy zainstalowany pomyślnie. Kliknij <a href="%1$s">tutaj</a> aby wrócić do strony języków';
$txt['languages_delete_confirm'] = 'Czy jesteś pewien, że chcesz usunąć ten język?';

// Version: 2.0 RC3; ManageCalendar

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['calendar_desc'] = 'Tutaj możesz modyfikować wszystkie opcje kalendarza';

// Calendar Settings
$txt['calendar_settings_desc'] = 'Tutaj możesz włączyć kalendarz i wybrać ustawienia z których będzie korzystał';
$txt['save_settings'] = 'Zapisz ustawienia';
$txt['groups_calendar_view'] = 'Grupy użytkowników mogące przeglądać kalendarz';
$txt['groups_calendar_post'] = 'Grupy użytkowników mogące tworzyć własne wydarzenia';
$txt['groups_calendar_edit_own'] = 'Grupy użytkowników mogące edytować tylko własne wydarzenia';
$txt['groups_calendar_edit_any'] = 'Grupy użytkowników mogące edytować każde wydarzenie';
$txt['setting_cal_enabled'] = 'Włącz kalendarz';
$txt['setting_cal_daysaslink'] = 'Pokazuj dni jako odnośniki do \'Dodaj wydarzenie\'';
$txt['setting_cal_days_for_index'] = 'Maksymalna liczba dni na przód w indeksie działów';
$txt['setting_cal_showholidays'] = 'Pokaż święta';
$txt['setting_cal_showbdays'] = 'Pokaż urodziny';
$txt['setting_cal_showevents'] = 'Pokaż wydarzenia';
$txt['setting_cal_show_never'] = 'Nigdy';
$txt['setting_cal_show_cal'] = 'Tylko w kalendarzu';
$txt['setting_cal_show_index'] = 'Tylko w indeksie działów';
$txt['setting_cal_show_all'] = 'Pokazuj w indeksie działów i kalendarzu';
$txt['setting_cal_defaultboard'] = 'Domyślny dział do dodawania wydarzeń';
$txt['setting_cal_allow_unlinked'] = 'Zezwól na wydarzenia nie powiązane z wiadomościami na forum';
$txt['setting_cal_minyear'] = 'Rok pierwszy';
$txt['setting_cal_maxyear'] = 'Rok ostatni';
$txt['setting_cal_allowspan'] = 'Zezwól na kilkudniowe wydarzenia';
$txt['setting_cal_maxspan'] = 'Maksymalna długość trwania wydarzenia (w dniach)';
$txt['setting_cal_showInTopic'] = 'Pokaż wydarzenie w formie tematu na forum';

// Adding/Editing/Viewing Holidays
$txt['manage_holidays_desc'] = 'Tutaj możesz dodawać i usuwać święta w Twoim kalendarzu';
$txt['current_holidays'] = 'Obecne święta';
$txt['holidays_title'] = 'Święto';
$txt['holidays_title_label'] = 'Nazwa';
$txt['holidays_delete_confirm'] = 'Na pewno usunąć to święto?';
$txt['holidays_add'] = 'Dodaj nowe święto';
$txt['holidays_edit'] = 'Edytuj święta';
$txt['holidays_button_add'] = 'Dodaj';
$txt['holidays_button_edit'] = 'Edytuj';
$txt['holidays_button_remove'] = 'Usuń';
$txt['holidays_no_entries'] = 'Nie ma obecnie skonfigurowanych żadnych zdarzeń.';
$txt['every_year'] = 'Co roku';

// Version: 2.0 RC3; ManageBoards

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['boards_and_cats'] = 'Zarządzaj działami i kategoriami';
$txt['order'] = 'Porządek';
$txt['full_name'] = 'Pełna nazwa';
$txt['name_on_display'] = 'Ta nazwa będzie wyświetlana.';
$txt['boards_and_cats_desc'] = 'Tutaj modyfikuj kategorie i działy twojego forum. Kilku moderatorów wymieniaj w ten sposób: <em>&quot;nazwa_użytkownika&quot;, &quot;nazwa_użytkownika&quot;</em>\'. (to muszą być nazwy użytkowników, a nie nazwy wyświetlane!)<br />Aby utworzyć nowy dział, kliknij przycisk Dodaj dział, dla utworzenia działu podrzędnego wybierz "Podrzędny..." z menu.';
$txt['parent_members_only'] = 'Wszyscy użytkownicy';
$txt['parent_guests_only'] = 'Goście';
$txt['catConfirm'] = 'Czy na pewno chcesz usunąć tę kategorię?';
$txt['boardConfirm'] = 'Czy na pewno chcesz usunąć ten dział?';

$txt['catEdit'] = 'Modyfikuj kategorie';
$txt['collapse_enable'] = 'Zwijane';
$txt['collapse_desc'] = 'Pozwól użytkownikom zwinąć tę kategorię';
$txt['catModify'] = '(modyfikuj)';

$txt['mboards_order_after'] = 'Po ';
$txt['mboards_order_inside'] = 'Wewnątrz ';
$txt['mboards_order_first'] = 'na pierwszym miejscu';

$txt['mboards_new_board'] = 'Dodaj dział';
$txt['mboards_new_cat_name'] = 'Nowa kategoria';
$txt['mboards_add_cat_button'] = 'Dodaj kategorię';
$txt['mboards_new_board_name'] = 'Nowy dział';

$txt['mboards_name'] = 'Nazwa';
$txt['mboards_modify'] = 'modyfikuj';
$txt['mboards_permissions'] = 'Zezwolenia';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Czy na pewno chcesz aby ten dział podlegał lokalnym pozwoleniom?';

$txt['mboards_delete_cat'] = 'Usuń kategorię';
$txt['mboards_delete_board'] = 'Usuń dział';

$txt['mboards_delete_cat_contains'] = 'Usunięcie tej kategorii spowoduje usunięcie działów jej podległych, włącznie ze wszystkimi wątkami, wiadomościami i załącznikami przynależnymi każdemu z tych działów';
$txt['mboards_delete_option1'] = 'Usuń kategorię i wszystkie podległe jej działy.';
$txt['mboards_delete_option2'] = 'Usuń kategorię i przenieś wszystkie podległe jej działy do';
$txt['mboards_delete_board_contains'] = 'Usunięcie tego działu będzie także oznaczało przeniesienie wszystkich poddziałów włącznie z ich tematami, wypowiedziami i załącznikami';
$txt['mboards_delete_board_option1'] = 'Usuń dział a jego poddziały przenieś do poziomu kategorii';
$txt['mboards_delete_board_option2'] = 'Usuń dział i przenieś wszystkie jego poddziały do';
$txt['mboards_delete_what_do'] = 'Zaznacz, co zrobić z tymi działami';
$txt['mboards_delete_confirm'] = 'Potwierdź';
$txt['mboards_delete_cancel'] = 'Anuluj';

$txt['mboards_category'] = 'Kategoria';
$txt['mboards_description'] = 'Opis';
$txt['mboards_description_desc'] = 'Krótki opis tego działu.';
$txt['mboards_groups'] = 'Dozwolone grupy';
$txt['mboards_groups_desc'] = 'Grupy mające dostęp do tego działu.';
$txt['mboards_groups_regular_members'] = 'Grupa zawiera wszystkich użytkowników którzy nie mają przydzielonej podstawowej grupy.';
$txt['mboards_groups_post_group'] = 'Grupa oparta o liczbę wiadomości.';
$txt['mboards_moderators'] = 'Moderatorzy';
$txt['mboards_moderators_desc'] = 'Użytkownicy ze specjalnymi przywilejami w tym dziale.';
$txt['mboards_count_posts'] = 'Licz wiadomości';
$txt['mboards_count_posts_desc'] = 'Odpowiedzi i nowe wątki podwyższają liczbę wiadomości u użytkowników.';
$txt['mboards_unchanged'] = 'Nie zmieniony';
$txt['mboards_theme'] = 'Styl działu';
$txt['mboards_theme_desc'] = 'Tutaj możesz zmienić wygląd forum tylko wewnątrz tego działu.';
$txt['mboards_theme_default'] = '(domyślny styl forum.)';
$txt['mboards_override_theme'] = 'Zignoruj styl wybrany przez użytkownika';
$txt['mboards_override_theme_desc'] = 'Używaj domyślnego stylu tego forum, nawet jeśli użytkownik wybrał inny.';

$txt['mboards_redirect'] = 'Przekieruj na adres w sieci';
$txt['mboards_redirect_desc'] = 'Włącz tą opcję aby przekierować każdego kto kliknie w to forum do innego adresu w sieci.';
$txt['mboards_redirect_url'] = 'Adres przekierowujący użytkowników do';
$txt['mboards_redirect_url_desc'] = 'Na przykład: &quot;http://www.simplemachines.org&quot;.';
$txt['mboards_redirect_reset'] = 'Zresetuj licznik przekierowań';
$txt['mboards_redirect_reset_desc'] = 'Wybranie tej opcji spowoduje zresetowanie do zera liczby przekierowań dla tego forum.';
$txt['mboards_current_redirects'] = 'Obecnie: %1$s';
$txt['mboards_redirect_disabled'] = 'Uwaga: Forum musi być puste i nie może zawierać wątków aby opcja ta była aktywna.';
$txt['mboards_redirect_disabled_recycle'] = 'Uwaga: Nie możesz ustawić forum-kosz jako forum do przekierowań.';

$txt['mboards_order_before'] = 'Przed';
$txt['mboards_order_child_of'] = 'Podrzędny';
$txt['mboards_order_in_category'] = 'W kategorii';
$txt['mboards_current_position'] = 'Obecna pozycja';
$txt['no_valid_parent'] = 'Dział %1$s nie ma działu nadrzędnego. Użyj funkcji \'znajdź i usuń błędy\' aby to naprawić.';

$txt['mboards_recycle_disabled_delete'] = 'Uwaga: Musisz utworzyć alternatywny dział jako kosz przed usunięciem obecnego.';

$txt['mboards_settings_desc'] = 'Edytuj ustawienia działów i kategorii.';
$txt['groups_manage_boards'] = 'Grupy użytkowników którym wolno zarządzać działami i kategoriami';
$txt['mboards_settings_submit'] = 'Zapisz';
$txt['recycle_enable'] = 'Włącz zachowanie usuniętych wątków';
$txt['recycle_board'] = 'Dział dla usuniętych wątków';
$txt['recycle_board_unselected_notice'] = 'Włączyłeś opcję usuwania wątków bez wybrania działu do którego mają być przenoszone. Opcja ta nie zostanie włączona dopóki nie wybierzesz działu oznaczonego jako kosz.';
$txt['countChildPosts'] = 'Uwzględniaj działy podrzędne przy zliczaniu wiadomości';
$txt['allow_ignore_boards'] = 'Zezwól na ignorowanie for';

$txt['mboards_select_destination'] = 'Zaznacz cel dla forum \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Anuluj przenoszenie';
$txt['mboards_move'] = 'przenieś';

$txt['mboards_no_cats'] = 'Nie ma obecnie żadnych skonfigurowanych kategorii lub działów.';

// Version: 2.0 RC3; ManagePaid

global $boardurl;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Inne';

$txt['paid_username'] = 'Nazwa użytkownika';

$txt['paid_subscriptions_desc'] = 'W tym dziale możesz dodać, usunąć bądź edytować płatne subskrypcje na twoim forum.';
$txt['paid_subs_settings'] = 'Ustawienia';
$txt['paid_subs_settings_desc'] = 'Tutaj możesz edytować metody płatności dostępne dla użytkowników.';
$txt['paid_subs_view'] = 'Pokaż Subskrypcje';
$txt['paid_subs_view_desc'] = 'Tutaj możesz przeglądać wszystkie dostępne subskrypcje.';

// Setting type strings.
$txt['paid_enabled'] = 'Aktywuj Płatne Subskrypcje';
$txt['paid_enabled_desc'] = 'Musisz to zaznaczyć, aby płatne subskrypcje były używane na forum.';
$txt['paid_email'] = 'Wyślij E-maile z powiadomieniem';
$txt['paid_email_desc'] = 'Informuj administratora, gdy subskrypcja zmieni się automatycznie.';
$txt['paid_email_to'] = 'E-mail do Korespondencji';
$txt['paid_email_to_desc'] = 'Lista adresów, oddzielonych przecinkami, powiadamianych oprócz administratorów forum';
$txt['paidsubs_test'] = 'Aktywuj tryb testowy';
$txt['paidsubs_test_desc'] = 'To ustawia płatne subskrypcje w tryb &quot;testowy&quot;, który będzie, w miarę możliwości, używał płatności sandbox w systemie PayPal, Authorize.net itp. Nie włączaj tego, chyba że wiesz co robisz!';
$txt['paid_email_no'] = 'Nie wysyłaj żadnych powiadomień';
$txt['paid_email_error'] = 'Informuj kiedy subskrypcja się nie powiedzie';
$txt['paid_email_all'] = 'Informuj o wszystkich automatycznych zmianach subskrypcji';
$txt['paid_currency'] = 'Wybierz walutę';
$txt['paid_currency_code'] = 'Kod Waluty';
$txt['paid_currency_code_desc'] = 'Code used by payment merchants';
$txt['paid_currency_symbol'] = 'Symbol używany przez metodę zapłaty';
$txt['paid_currency_symbol_desc'] = 'Use \'%1.2f\' to specify where number goes, for example $%1.2f, %1.2fDM etc';
$txt['paypal_email'] = 'Adres e-mail Paypal';
$txt['paypal_email_desc'] = 'Pozostaw puste jeśli nie chcesz użyć paypal.';
$txt['worldpay_id'] = 'Zainstaluj ID WorldPay';
$txt['worldpay_id_desc'] = 'Zainstaluj ID wygenerowane przez WorldPay. Zostaw puste, jeśli nie używasz WorldPay';
$txt['worldpay_password'] = 'Wywołania hasła zwrotne WorldPay';
$txt['worldpay_password_desc'] = 'Upewnij się przy ustalaniu tego hasła w WorldPay, czy jest ono unikatowe i nie jest takie samo jak te do twojego konta worldpay/administratora!';
$txt['authorize_id'] = 'Zainstaluj ID Authorize.net';
$txt['authorize_id_desc'] = 'Zainstaluj ID wygenerowane przez Authorize.net. Zostaw puste, jeśli nie używasz Authorize.net';
$txt['authorize_transid'] = 'Transakcja ID Authorize.Net';
$txt['2co_id'] = 'Zainstaluj ID 2co.com';
$txt['2co_id_desc'] = 'Zainstaluj ID wygenerowane przez 2co.com. Zostaw puste, jeśli nie używasz 2co.com';
$txt['2co_password'] = 'Sekretne słowo dla 2co.com';
$txt['2co_password_desc'] = 'Twoje sekretne słowo dla 2checkout.';
$txt['nochex_email'] = 'Adres email Nochex';
$txt['nochex_email_desc'] = 'Email of a merchant account at Nochex. Leave blank if you are not using Nochex';
$txt['paid_settings_save'] = 'Zapisz';

$txt['paid_note'] = '<strong class="alert">Uwaga:</strong><br />Aby subskrypcje były automatycznie aktualizowane dla użytkowników,
	będziesz musiał ustawić URL zwrotny dla każdej metody płatności. Dla każdego typu płatności, ten URL zwrotny powinien wyglądać następująco:
       
	&bull; <strong>' . $boardurl . '/subscriptions.php</strong>

	Możesz edytować link dla paypal bezpośrednio przez kliknięcie <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">tutaj</a>.

	Dla innych bram (Jeśli zainstalowane) możesz znaleźć je w panelach klienta, przeważnie pod terminem "URL zwrotny" lub "Wywołanie zwrotne URL".';

// View subscription strings.
$txt['paid_name'] = 'Nazwa';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Cena';
$txt['paid_duration'] = 'Czas trwania';
$txt['paid_active'] = 'Aktywna';
$txt['paid_pending'] = 'Oczekujące płatności';
$txt['paid_finished'] = 'Zakończone';
$txt['paid_total'] = 'Razem';
$txt['paid_is_active'] = 'Aktywowany';
$txt['paid_none_yet'] = 'Nie ustawiłeś jeszcze żadnych subskrypcji.';
$txt['paid_payments_pending'] = 'Płatności oczekujące';
$txt['paid_order'] = 'Zamów';

$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Dodaj Nową Subskrypcję';
$txt['paid_edit_subscription'] = 'Edytuj Subskrypcje';
$txt['paid_delete_subscription'] = 'Usuń Subskrypcje';

$txt['paid_mod_name'] = 'Nazwa Subskrypcji';
$txt['paid_mod_desc'] = 'Opis';
$txt['paid_mod_reminder'] = 'Wyślij Email przypominający';
$txt['paid_mod_reminder_desc'] = 'Dni przed wygaśnięciem subskrypcji do wysłania przypomnienia. (Ustaw 0 aby dezaktywować)';
$txt['paid_mod_email'] = 'Wyślij email z chwilą zakończenia';
$txt['paid_mod_email_desc'] = 'Gdzie {NAME} jest nazwą członków; {FORUM} jest nazwą społeczności. Temat wiadomości email powinien być na pierwszej linii. Puste dla braku powiadomień email.';
$txt['paid_mod_cost_usd'] = 'Cena (USD)';
$txt['paid_mod_cost_eur'] = 'Cena (EUR)';
$txt['paid_mod_cost_gbp'] = 'Cena (GBP)';
$txt['paid_mod_cost_blank'] = 'Pozostaw puste, aby nie oferować tej waluty.';
$txt['paid_mod_span'] = 'Długość Subskrypcji';
$txt['paid_mod_span_days'] = 'Dni';
$txt['paid_mod_span_weeks'] = 'Tygodnie';
$txt['paid_mod_span_months'] = 'Miesiące';
$txt['paid_mod_span_years'] = 'Lata';
$txt['paid_mod_active'] = 'Aktywna';
$txt['paid_mod_active_desc'] = 'Subskrypcja musi być aktywna, aby nowi użytkownicy mogli dołączyć.';
$txt['paid_mod_prim_group'] = 'Grupa podstawowa oparta na subskrypcji';
$txt['paid_mod_prim_group_desc'] = 'Grupa podstawowa nadawana użytkownikowi w momencie jej subskrypcji.';
$txt['paid_mod_add_groups'] = 'Grupy dodatkowe oparte na subskrypcji';
$txt['paid_mod_add_groups_desc'] = 'Grupy dodatkowe nadawane użytkownikowi po subskrypcji.';
$txt['paid_mod_no_group'] = 'Nie zmieniaj';
$txt['paid_mod_edit_note'] = 'Należy pamiętać, że kiedy grupa posiada istniejących subskrybentów jej ustawienia nie mogą być zmieniane!';
$txt['paid_mod_delete_warning'] = '<strong>OSTRZEŻENIE</strong><br /><br />Jeśli usuniesz tą subskrypcję wszyscy subskrybenci stracą jakikolwiek dostęp do uprawnień przyznanych im przez tą subskrypcję. Jeśli nie jesteś pewien, czy chcesz to zrobić zalecane jest po prostu wyłączyć subskrypcję zamiast ją usuwać.<br />';
$txt['paid_mod_repeatable'] = 'Zezwalaj użytkownikowi na automatyczne odnowienie subskrypcji';
$txt['paid_mod_allow_partial'] = 'Pozwalaj na częściowe subskrypcje';
$txt['paid_mod_allow_partial_desc'] = 'Jeśli ta opcja jest aktywna, w przypadku gdy użytkownik zapłaci mniej, niż jest to wymagane przyznana zostanie subskrypcja na procent od czasu za który zapłacili.';
$txt['paid_mod_fixed_price'] = 'Subscription for fixed price and period';
$txt['paid_mod_flexible_price'] = 'Subscription price varies on duration ordered';
$txt['paid_mod_price_breakdown'] = 'Flexible Price Breakdown';
$txt['paid_mod_price_breakdown_desc'] = 'Define here how much the subscription should cost dependant on the period they subscribe for. For example, it could cost 12USD to subscribe for a month, but only 100USD for a year. If you don\'t want to define a price for a particular period of time leave it blank.';
$txt['flexible'] = 'Elastyczna';

$txt['paid_per_day'] = 'Cena za dzień';
$txt['paid_per_week'] = 'Cena za tydzień';
$txt['paid_per_month'] = 'Cena za miesiąc';
$txt['paid_per_year'] = 'Cena za rok';
$txt['day'] = 'Dzień';
$txt['week'] = 'Tydzień';
$txt['month'] = 'Miesiąc';
$txt['year'] = 'Rok';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Przeglądaj użytkowników';
$txt['view_users_subscribed'] = 'Przeglądaj użytkowników subskrybujących do: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Obecnie niema subskrybentów dla tej subskrypcji!';
$txt['add_subscriber'] = 'Dodaj nowego subskrybenta';
$txt['edit_subscriber'] = 'Edytuj subskrybenta';
$txt['delete_selected'] = 'Usuń zaznaczone';
$txt['complete_selected'] = 'Zakończ zaznaczone';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Czy na pewno chcesz usunąć wszystkie wpisy zaznaczonych subskrypcji?';
$txt['complete_are_sure'] = 'Czy na pewno chcesz zakończyć zaznaczone subskrypcje?';

$txt['start_date'] = 'Data rozpoczęcia';
$txt['end_date'] = 'Data zakończenia';
$txt['start_date_and_time'] = 'Data i czas rozpoczęcia';
$txt['end_date_and_time'] = 'Data i czas zakończenia';
$txt['edit'] = 'EDYTUJ';
$txt['one_username'] = 'Wprowadź tylko jedną nazwę użytkownika.';
$txt['hour'] = 'Godzina';
$txt['minute'] = 'Minuta';
$txt['error_member_not_found'] = 'Nie udało się znaleźć podanego użytkownika';
$txt['member_already_subscribed'] = 'Ten użytkownik już subskrybował tą subskrypcję. Edytuj ich istniejące subskrypcje.';
$txt['search_sub'] = 'Znajdź użytkownika';

// Make payment.
$txt['paid_confirm_payment'] = 'Potwierdź płatność';
$txt['paid_confirm_desc'] = 'Aby kontynuować do płatności, sprawdź poniższe szczegóły i kliknij &quot;Zamów&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Aby zapłacić używając <a href="http://www.paypal.com">PayPal</a> proszę kliknąć poniższy przycisk. Zostaniesz przekierowany na stronę PayPal w celu wykonania płatności.';
$txt['paid_paypal_order'] = 'Zamów z PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Aby zapłacić używając <a href="http://www.worldpay.com">WorldPay</a> proszę kliknąć poniższy przycisk. Zostaniesz przekierowany na stronę WorldPay w celu wykonania płatności.';
$txt['paid_worldpay_order'] = 'Zamów z WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Aby zapłacić używając <a href="http://www.nochex.com">Nochex</a> proszę kliknąć poniższy przycisk. Zostaniesz przekierowany na stronę Nochex w celu wykonania płatności.';
$txt['paid_nochex_order'] = 'Zamów z Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Aby zapłacić używając <a href="http://www.authorize.net">Authorize.Net</a> proszę kliknąć poniższy przycisk. Zostaniesz przekierowany na stronę Authorize.Net w celu wykonania płatności.';
$txt['paid_authorize_order'] = 'Zamów z Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Aby zapłacić używając <a href="http://www.2com.com">2co.com</a> kliknij poniższy przycisk. Zostaniesz przekierowany na stronę 2co.com w celu wykonania płatności.';
$txt['paid_2co_order'] = 'Zamów z 2co.com';
$txt['paid_done'] = 'Płatność zakończona sukcesem';
$txt['paid_done_desc'] = 'Dziękujemy za twoją opłatę. Kiedy transakcja zostanie zweryfikowana, subskrypcja zostanie aktywowana.';
$txt['paid_sub_return'] = 'Wróć do Subskrypcji';
$txt['paid_current_desc'] = 'Poniżej znajduje się lista wszystkich twoich obecnych i poprzednich subskrypcji. Aby rozszerzyć istniejącą subskrypcję wystarczy wybrać ją z listy powyżej.';
$txt['paid_admin_add'] = 'Dodaj tą subskrypcję';

$txt['paid_not_set_currency'] = 'Nie ustawiłeś jeszcze swojej waluty. Przed kontynuacją ,możesz to zrobić w sekcji <a href="%1$s">Ustawienia</a>.';
$txt['paid_no_cost_value'] = 'Musisz podać cenę i długość subskrypcji.';
$txt['paid_all_freq_blank'] = 'You must enter a cost for at least one of the four durations.';

// Some error strings.
$txt['paid_no_data'] = 'Nieprawidłowe dane wysłane do skryptu.';

$txt['paypal_could_not_connect'] = 'Nie można połączyć się z serwerem PayPal';
$txt['paid_sub_not_active'] = 'Ta subskrypcja nie przyjmuje żadnych nowych użytkowników!';
$txt['paid_disabled'] = 'Subskrypcje są aktualnie wyłączone!';
$txt['paid_unknown_transaction_type'] = 'Nieznany typ transakcji Płatnej Subskrypcji.';
$txt['paid_empty_member'] = 'Paid subscription handler could not recover member ID';
$txt['paid_could_not_find_member'] = 'Paid subscription handler could not find member with ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Paid subscription handler could not find subscription for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Paid subscription handler could not find subscription log entry for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Could not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Przepraszamy, ale administrator nie skończył jeszcze konfigurować płatnych subskrypcji. Spróbuj ponownie później.';
$txt['paid_make_recurring'] = 'Uczyń tą płatność, płatnością powtarzającą się';

$txt['subscriptions'] = 'Subskrypcje';
$txt['subscription'] = 'Subskrypjca';
$txt['paid_subs_desc'] = 'Poniżej znajduje się lista wszystkich subskrypcji dostępnych na forum.';
$txt['paid_subs_none'] = 'Aktualnie niema żadnych dostępnych subskrypcji!';

$txt['paid_current'] = 'Istniejące Subskrypcje';
$txt['pending_payments'] = 'Oczekuję na płatność';
$txt['pending_payments_desc'] = 'Ten użytkownik próbował wykonać następujące płatności dla subskrypcji, ale potwierdzenie nie zostało wysłane przez forum. Jeśli jesteś pewny, że płatność została wysłana kliknij &quot;akceptuj&quot; aby potwierdzić subskrypcję. Ewentualnie możesz klikną  &quot;usuń&quot; aby usunąć wszelkie odnośniki do płatności.';
$txt['pending_payments_value'] = 'Kwota';
$txt['pending_payments_accept'] = 'Akceptuj';
$txt['pending_payments_remove'] = 'Usuń';

// Version: 2.0 RC3; ManagePermissions

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['permissions_title'] = 'Zarządzaj zezwoleniami';
$txt['permissions_modify'] = 'Modyfikuj';
$txt['permissions_view'] = 'Pokaż';
$txt['permissions_allowed'] = 'Zezw.';
$txt['permissions_denied'] = 'Pozb.';
$txt['permission_cannot_edit'] = '<strong>Uwaga:</strong> Nie możesz modyfikować zezwoleń tego profilu jako że jest on predefiniowany i został domyślnie uwzględnionym w oprogramowaniu forum. Jeśli chcesz zmienić zezwolenia tego profilu, musisz najpierw utworzyć jego duplikat. Możesz zrealizować to zadanie poprzez kliknięcie <a href="%1$s">tutaj</a>.';

$txt['permissions_for_profile'] = 'Zezwolenia dla Profilu';
$txt['permissions_boards_desc'] = 'Poniższa lista pokazuje który zestaw zezwoleń został przydzielony do poszczególnych działów na forum. Możesz modyfikować przydzielone profile zezwoleń przez kliknięcie nazwy działu lub wybranie &quot;Modyfikuj Wszystkie&quot; u dołu strony. Zaś aby zmodyfikować sam profil wystarczy kliknąć jego nazwę.';
$txt['permissions_board_all'] = 'Modyfikuj Wszystkie';
$txt['permission_profile'] = 'Profil Zezwoleń';
$txt['permission_profile_desc'] = 'Którego <a href="%1$s">zestawu zezwoleń</a> powinien używać dział.';
$txt['permission_profile_inherit'] = 'Dziedzicz z działu nadrzędnego';

$txt['permissions_profile'] = 'Profil';
$txt['permissions_profiles_desc'] = 'Profile zezwoleń są przypisane do indywidualnych działów aby umożliwić ci łatwiejsze zarządzanie ustawieniami bezpieczeństwa. W tym obszarze możesz tworzyć, modyfikować i usuwać zezwolenia profili.';
$txt['permissions_profiles_change_for_board'] = 'Edytuj Profil Zezwoleń dla: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Standardowy';
$txt['permissions_profile_no_polls'] = 'Brak Ankiet';
$txt['permissions_profile_reply_only'] = 'Tylko Odpowiedzi';
$txt['permissions_profile_read_only'] = 'Tylko Czytaj';

$txt['permissions_profile_rename'] = 'Zmień nazwę';
$txt['permissions_profile_edit'] = 'Edytuj Profile';
$txt['permissions_profile_new'] = 'Nowy Profil';
$txt['permissions_profile_new_create'] = 'Stwórz';
$txt['permissions_profile_name'] = 'Nazwa Profilu';
$txt['permissions_profile_used_by'] = 'Użyty przez';
$txt['permissions_profile_used_by_one'] = 'Jeden Dział';
$txt['permissions_profile_used_by_many'] = '%1$d Działów';
$txt['permissions_profile_used_by_none'] = 'Żaden Dział';
$txt['permissions_profile_do_edit'] = 'Edytuj';
$txt['permissions_profile_do_delete'] = 'Usuń';
$txt['permissions_profile_copy_from'] = 'Kopiuj zezwolenia z';

$txt['permissions_includes_inherited'] = 'Grupy Dziedziczące';

$txt['permissions_all'] = 'wszystkie';
$txt['permissions_none'] = 'żadne';
$txt['permissions_set_permissions'] = 'Ustaw zezwolenia';

$txt['permissions_advanced_options'] = 'Opcje Zaawansowane';
$txt['permissions_with_selection'] = 'Zaznaczone';
$txt['permissions_apply_pre_defined'] = 'Ustaw predefiniowany zestaw zezwoleń';
$txt['permissions_select_pre_defined'] = 'Wybierz zestaw';
$txt['permissions_copy_from_board'] = 'Kopiuj zezwolenia z tego działu';
$txt['permissions_select_board'] = 'Wybierz dział';
$txt['permissions_like_group'] = 'Ustaw zezwolenia jak w tej grupie';
$txt['permissions_select_membergroup'] = 'Wybierz grupę użytkowników';
$txt['permissions_add'] = 'Dodaj zezwolenie';
$txt['permissions_remove'] = 'Usuń zezwolenie';
$txt['permissions_deny'] = 'Pozbaw zezwolenia';
$txt['permissions_select_permission'] = 'Wybierz pozwolenie';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Możesz wybrać tylko jedną akcję do modyfikacji zezwoleń';
$txt['permissions_no_action'] = 'Nie wybrano żadnej akcji';
$txt['permissions_deny_dangerous'] = 'Zamierzasz pozbawić grupę jednego lub kilku zezwoleń.\\nTo może być niebezpieczne i spowodować nieoczekiwane rezultaty jeśli nie upewniłeś się, że nikt nie jest \\"przypadkowo\\" w grupie albo grupach, których pozbawiasz zezwoleń.\\n\\nCzy na pewno chcesz kontynuować?';

$txt['permissions_modify_group'] = 'Modyfikuj grupę';
$txt['permissions_general'] = 'Zezwolenia ogólne';
$txt['permissions_board'] = 'Ogólne zezwolenia działów';
$txt['permissions_board_desc'] = '<strong>Uwaga</strong>: zmiana tych zezwoleń będzie dotyczyć wszystkich działów aktualnie przydzielonych do &quot;Standardowego&quot; profilu zezwoleń. Zaś na działy nie używające &quot;Standardowego&quot; profilu zezwoleń zmiany na tej stronie nie wpłyną.';
$txt['permissions_commit'] = 'Zachowaj zmiany';
$txt['permissions_on'] = 'w dziale';
$txt['permissions_local_for'] = 'Zezwolenia lokalne dla grupy';
$txt['permissions_option_on'] = 'Z';
$txt['permissions_option_off'] = 'N';
$txt['permissions_option_deny'] = 'P';
$txt['permissions_option_desc'] = 'Dla każdego zezwolenia możesz wybrać \'Zezwalaj\' (Z), \'Nie zezwalaj\' (N) lub <span style="color: red;">\'Pozbaw\' (P)</span>.<br /><br />Pamiętaj, że jeśli pozbawisz grupę jakiegoś zezwolenia, każdy z członków - moderatorzy również nie będzie mógł wykonać danej czynności.<br />Dlatego też powinieneś używać zezwoleń bardzo ostrożnie, tylko kiedy jest to <strong>konieczne</strong>. Opcja \'Nie zezwalaj\' zabrania, chyba że użytkownik posiada dane zezwolenie w inny sposób (np. jest moderatorem).';
$txt['permissions_change_view'] = 'Zmień Widok';
$txt['permissions_view_simple'] = 'Prosty';
$txt['permissions_view_classic'] = 'Klasyczny';

$txt['permissiongroup_general'] = 'Ogólne';
$txt['permissionname_view_stats'] = 'Przeglądanie statystyk forum';
$txt['permissionhelp_view_stats'] = 'Ta strona zawiera podsumowanie wszystkich statystyk forum, np. liczba użytkowników, ilość wiadomości na dzień i kilka statystyk 10 najlepszych. Po zezwoleniu na jej przeglądanie, odnośnik (\'[Więcej statystyk]\') zostanie dodany na dole indeksu działów.';
$txt['permissionname_view_mlist'] = 'Przeglądanie listy grup i użytkowników ';
$txt['permissionhelp_view_mlist'] = 'Lista użytkowników pokazuje wszystkich członków twojego forum. Listę tę można sortować i przeszukiwać. Odnośnik do niej jest umieszczony w indeksie działów, można się też do niej dostać poprzez kliknięcie na liczbę zarejestrowanych użytkowników.';
$txt['permissionname_who_view'] = 'Przeglądanie listy użytkowników online';
$txt['permissionhelp_who_view'] = 'Lista ta pokazuje wszystkich użytkowników będących obecnie na forum i czynności przez nich wykonywane. To zezwolenie odniesie skutek tylko w przypadku włączenia listy w \'funkcjach i opcjach\'. Do \'listy użytkowników online\' możesz dostać się klikając na odnośnik w sekcji \'użytkownicy online\' w indeksie działów.';
$txt['permissionname_search_posts'] = 'Szukanie wątków i wiadomości';
$txt['permissionhelp_search_posts'] = 'Użytkownicy będą mogli przeszukiwać działy, do których mają dostęp. Po zezwoleniu na przeszukiwanie, do standardowych przycisków dodany zostanie przycisk \'Szukaj\'.';
$txt['permissionname_karma_edit'] = 'Modyfikacja reputacji innych użytkowników';
$txt['permissionhelp_karma_edit'] = 'Reputacja pokazuje popularność użytkownika. Aby jej używać musisz ją najpierw włączyć w \'Opcjach forum\'. Dzięki temu użytkownicy będą mogli na siebie głosować, zezwolenie to nie daje możliwości głosu gościom.';

$txt['permissiongroup_pm'] = 'Prywatne wiadomości';
$txt['permissionname_pm_read'] = 'Czytanie prywatnych wiadomości';
$txt['permissionhelp_pm_read'] = 'Użytkownicy będą mogli czytać swoje prywatne wiadomości. Użytkownik nie może wysyłać prywatnych wiadomości jeśli to zezwolenie jest wyłączone.';
$txt['permissionname_pm_send'] = 'Wysyłanie prywatnych wiadomości';
$txt['permissionhelp_pm_send'] = 'Użytkownicy będą mogli wysyłać prywatne wiadomości. Wymaga zezwolenia na czytanie prywatnych wiadomości.';

$txt['permissiongroup_calendar'] = 'Kalendarz';
$txt['permissionname_calendar_view'] = 'Przeglądanie kalendarza';
$txt['permissionhelp_calendar_view'] = 'Kalendarz pokazuje urodziny, wydarzenia i święta. Po włączeniu tego zezwolenia użytkownicy uzyskają dostęp do kalendarza. Do standardowych przycisków dodany zostanie przycisk \'Kalendarz\', a na dole strony głównej wyświetlana będzie lista nadchodzących urodzin, wydarzeń i świąt. Musisz najpierw włączyć funkcję kalendarza w \'funkcjach i opcjach\'.';
$txt['permissionname_calendar_post'] = 'Dodawanie wydarzeń do kalendarza';
$txt['permissionhelp_calendar_post'] = 'Wydarzenie jest wątkiem skojarzonym z konkretną datą lub okresem. Dodawanie wydarzeń odbywa się poprzez kalendarz, użytkownik może to zrobić tylko, jeżeli ma zezwolenie na wysyłanie nowych wątków.';
$txt['permissionname_calendar_edit'] = 'Modyfikacja wydarzeń w kalendarzu';
$txt['permissionhelp_calendar_edit'] = 'Wydarzenie jest wątkiem skojarzonym z konkretną datą lub okresem. Wydarzenie może być zmodyfikowane poprzez kliknięcie na czerwoną gwiazdkę (*) obok wydarzenia w kalendarzu. Użytkownik musi mieć zezwolenie na modyfikację pierwszej wiadomości w wątku powiązanego z wydarzeniem, aby mógł je modyfikować.';
$txt['permissionname_calendar_edit_own'] = 'Własne wydarzenia';
$txt['permissionname_calendar_edit_any'] = 'Wszystkie wydarzenia';

$txt['permissiongroup_maintenance'] = 'Administracja forum';
$txt['permissionname_admin_forum'] = 'Administracja forum i bazą danych';
$txt['permissionhelp_admin_forum'] = 'Użytkownik będzie mógł zmieniać ustawienia forum i stylu, zarządzać pakietami i używać narzędzi administracji bazą danych. Uważaj przy dawaniu tego zezwolenia, ponieważ daje ono bardzo duże możliwości.';
$txt['permissionname_manage_boards'] = 'Zarządzanie działami i kategoriami';
$txt['permissionhelp_manage_boards'] = 'Pozwala na dodawanie, modyfikację i usuwanie działów i kategorii.';
$txt['permissionname_manage_attachments'] = 'Zarządzanie załącznikami i awatarami';
$txt['permissionhelp_manage_attachments'] = 'Daje dostęp do centrum zarządzania załącznikami, gdzie znajduje się lista wszystkich załączników i awatarów.';
$txt['permissionname_manage_smileys'] = 'Zarządzanie uśmieszkami';
$txt['permissionhelp_manage_smileys'] = 'To daje dostęp do centrum zarządzania uśmieszkami. Można tam dodawać, modyfikować i usuwać uśmieszki i zestawy uśmieszków.';
$txt['permissionname_edit_news'] = 'Modyfikowanie aktualności';
$txt['permissionhelp_edit_news'] = 'Funkcja aktualności pozwala na wyświetlanie losowo wybranej aktualności na każdej stronie forum. Funkcja ta musi być włączona w ustawieniach forum.';
$txt['permissionname_access_mod_center'] = 'Dostęp do centrum moderacji';
$txt['permissionhelp_access_mod_center'] = 'Z tym uprawnieniem każdy członek grupy ma dostęp do centrum moderacji gdzie będzie miał dostęp do funkcjonalnej i łatwej moderacji. Należy pamiętać, że to samo w sobie nie przyznaje żadnych przywilejów moderacji.';

$txt['permissiongroup_member_admin'] = 'Administracja użytkownikami';
$txt['permissionname_moderate_forum'] = 'Moderacja użytkownikami forum';
$txt['permissionhelp_moderate_forum'] = 'Zakres tego zezwolenia obejmuje wszystkie ważne funkcje moderacji użytkowników:<ul><li>dostęp do zarządzania rejestracją</li><li>dostęp do ekranu przeglądania/usuwania użytkowników</li><li>szczegółowe informacje z profili, włączając w to śledzenie IP/użytkownika i (ukryty) status online</li><li>aktywacja kont</li><li>dostawanie powiadomień o zatwierdzeniu i zatwierdzanie kont</li><li>możliwość wysyłania PW nawet do ignorujących je użytkowników</li><li>kilka innych pomniejszych rzeczy</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Zarządzanie i przyznawanie grup użytkowników';
$txt['permissionhelp_manage_membergroups'] = 'Pozwala na modyfikację i przyznawanie innym grup użytkowników.';
$txt['permissionname_manage_permissions'] = 'Zarządzanie zezwoleniami';
$txt['permissionhelp_manage_permissions'] = 'Pozwala na modyfikację wszystkich zezwoleń grupy użytkowników, globalnie lub dla poszczególnych działów.';
$txt['permissionname_manage_bans'] = 'Zarządzanie listą banów';
$txt['permissionhelp_manage_bans'] = 'Pozwala na dodawanie i usuwanie nazw użytkowników, adresów IP, nazw hostów i adresów email do listy banowanych użytkowników. Pozwala również na przeglądanie i usuwanie wpisów z rejestru banowanych użytkowników, którzy próbowali się zalogować.';
$txt['permissionname_send_mail'] = 'Wysyłanie do użytkowników wiadomości email i PW przez forum';
$txt['permissionhelp_send_mail'] = 'Pozwala na jednoczesne wysyłanie wiadomości email i prywatnych wiadomości do wszystkich użytkowników lub poszczególnych grup użytkowników (wysyłanie PW wymaga udzielenia zezwolenia: \'Wysyłanie prywatnych wiadomości\').';
$txt['permissionname_issue_warning'] = 'Przyznawanie Ostrzeżeń Użytkownikom';
$txt['permissionhelp_issue_warning'] = 'Przyznawanie ostrzeżeń użytkownikom forum i zmiana ich Poziomu Ostrzeżeń. Wymaga aktywacji Systemu Ostrzeżeń Użytkowników.';

$txt['permissiongroup_profile'] = 'Profile użytkowników';
$txt['permissionname_profile_view'] = 'Przeglądanie podsumowania i statystyk profilu';
$txt['permissionhelp_profile_view'] = 'Umożliwia dostęp do podsumowania ustawień profilu, kilku statystyk i wszystkich wysłanych wiadomości, po kliknięciu na nazwę danego użytkownika.';
$txt['permissionname_profile_view_own'] = 'Własny profil';
$txt['permissionname_profile_view_any'] = 'Wszystkie profile';
$txt['permissionname_profile_identity'] = 'Modyfikacja ustawień konta';
$txt['permissionhelp_profile_identity'] = 'Ustawienia konta dotyczą danych takich jak hasło, adres email, grupa użytkowników i preferowany język.';
$txt['permissionname_profile_identity_own'] = 'Własny profil';
$txt['permissionname_profile_identity_any'] = 'Wszystkie profile';
$txt['permissionname_profile_extra'] = 'Modyfikacja dodatkowych ustawień profilu';
$txt['permissionhelp_profile_extra'] = 'Dodatkowe ustawienia dotyczą m.in. awatarów, preferencji stylu, ustawienia powiadomień i prywatnych wiadomości.';
$txt['permissionname_profile_extra_own'] = 'Własny profil';
$txt['permissionname_profile_extra_any'] = 'Wszystkie profile';
$txt['permissionname_profile_title'] = 'Modyfikacja własnych tytułów';
$txt['permissionhelp_profile_title'] = 'Własny tytuł wyświetlany jest w wątku pod nazwami użytkowników, którzy go posiadają.';
$txt['permissionname_profile_title_own'] = 'Własny profil';
$txt['permissionname_profile_title_any'] = 'Wszystkie profile';
$txt['permissionname_profile_remove'] = 'Usuwanie konta';
$txt['permissionhelp_profile_remove'] = 'Zezwala użytkownikowi na usunięcie swojego (lub każdego) konta.';
$txt['permissionname_profile_remove_own'] = 'Własne konto';
$txt['permissionname_profile_remove_any'] = 'Wszystkie konta';
$txt['permissionname_profile_server_avatar'] = 'Wybieranie awatarów z galerii';
$txt['permissionhelp_profile_server_avatar'] = 'Kiedy włączone, umożliwia użytkownikowi wybranie avatara z kolekcji avatarów zainstalowanych na serwerze.';
$txt['permissionname_profile_upload_avatar'] = 'Wysyłanie awatara na serwer';
$txt['permissionhelp_profile_upload_avatar'] = 'To zezwolenie umożliwi użytkownikowi wysłanie własnego avatara na serwer.';
$txt['permissionname_profile_remote_avatar'] = 'Używanie zewnętrznego awatara';
$txt['permissionhelp_profile_remote_avatar'] = 'Awatary z zewnętrznych serwerów mogą wydłużyć czas generowania strony, możliwe jest więc pozbawienie możliwości ich użycia przez pewne grupy użystkowników. ';

$txt['permissiongroup_general_board'] = 'Ogólne';
$txt['permissionname_moderate_board'] = 'Moderacja działu';
$txt['permissionhelp_moderate_board'] = 'Dzięki zezwoleniu na moderację działu, moderator staje się prawdziwym moderatorem, czyli może m.in. odpowiadać na zamknięte wątki, zmieniać czas zakończenia ankiety i obejrzeć jej wyniki.';

$txt['permissiongroup_topic'] = 'Wątki';
$txt['permissionname_post_new'] = 'Wysyłanie nowych wątków';
$txt['permissionhelp_post_new'] = 'Użytkownik może wysyłać nowe wątki. Ta opcja nie zawiera zezwolenia na odpowiadanie na wątki.';
$txt['permissionname_merge_any'] = 'Scalanie wszystkich wątków';
$txt['permissionhelp_merge_any'] = 'Scalanie dwóch lub więcej wątków w jeden. Wiadomości zostaną posegregowane według daty wysłania. Użytkownik może scalać tylko wątki z działów,  w których dane mu było zezwolenie scalania. Aby móc scalać wiele wątków jednocześnie, użytkownik musi włączyć szybką moderację w ustawieniach swojego profilu.';
$txt['permissionname_split_any'] = 'Dzielenie wszystkich wątków';
$txt['permissionhelp_split_any'] = 'Rozdzielenie jednego wątku na dwa osobne.';
$txt['permissionname_send_topic'] = 'Wysyłanie wątków znajomym';
$txt['permissionhelp_send_topic'] = 'Użytkownik może wysłać znajomym wątek przez email, poprzez wpisanie ich adresu. Zezwolenie to umożliwia również dodawanie wiadomości.';
$txt['permissionname_make_sticky'] = 'Przyklejanie wątków';
$txt['permissionhelp_make_sticky'] = 'Przyklejone wątki będą zawsze na górze listy wątków. Są one przydatne jako ogłoszenia i inne ważne wiadomości.';
$txt['permissionname_move'] = 'Przenoszenie wątków';
$txt['permissionhelp_move'] = 'Przenoszenie wątku z jednego do drugiego działu. Użytkownik może wybrać tylko działy docelowe, do których ma dostęp.';
$txt['permissionname_move_own'] = 'Własne wątki';
$txt['permissionname_move_any'] = 'Wszystkie wątki';
$txt['permissionname_lock'] = 'Zamykanie wątków';
$txt['permissionhelp_lock'] = 'Użytkownik może zamykać wątek, aby nikt nie mógł na niego odpowiedzieć. Tylko użytkownicy z zezwoleniem \'Moderacja działu\' mogą odpowiadać na zamknięte wątki.';
$txt['permissionname_lock_own'] = 'Własne wątki';
$txt['permissionname_lock_any'] = 'Wszystkie wątki';
$txt['permissionname_remove'] = 'Usuwanie wątków';
$txt['permissionhelp_remove'] = 'Usuwanie całych wątków. Zauważ, że to zezwolenie nie pozwala na usuwanie pojedynczych wiadomości w wątku.';
$txt['permissionname_remove_own'] = 'Własne wiadomości';
$txt['permissionname_remove_any'] = 'Wszystkie wiadomości';
$txt['permissionname_post_reply'] = 'Odpowiadanie na wątki';
$txt['permissionhelp_post_reply'] = 'Pozwala na wysyłanie odpowiadzi na wątki.';
$txt['permissionname_post_reply_own'] = 'Własne wątki';
$txt['permissionname_post_reply_any'] = 'Wszystkie wątki';
$txt['permissionname_modify_replies'] = 'Modyfikowanie odpowiedzi na własne wątki';
$txt['permissionhelp_modify_replies'] = 'Użytkownik może modyfikować wszystkie odpowiedzi w wątku, który sam zaczął.';
$txt['permissionname_delete_replies'] = 'Usuwanie odpowiedzi do własnych tematów';
$txt['permissionhelp_delete_replies'] = 'To zezwolenie umożliwia użytkownikowi który rozpoczął temat usuwać wszelkie odpowiedzi w tym temacie';
$txt['permissionname_announce_topic'] = 'Ogłaszanie wątku';
$txt['permissionhelp_announce_topic'] = 'Pozwala na wysłanie do wszystkich użytkowników lub poszczególnych grup użytkownikó wiadomości email ogłaszającej wysłanie danego wątku.';

$txt['permissiongroup_post'] = 'Wiadomości';
$txt['permissionname_delete'] = 'Usuwanie wiadomości';
$txt['permissionhelp_delete'] = 'Usuwanie wiadomości. Ta opcja nie zezwala na usuwanie pierwszej wiadomości w wątku.';
$txt['permissionname_delete_own'] = 'Własne wątki';
$txt['permissionname_delete_any'] = 'Wszystkie wątki';
$txt['permissionname_modify'] = 'Modyfikowanie wiadomości';
$txt['permissionhelp_modify'] = 'Zmienianie zawartości wiadomości';
$txt['permissionname_modify_own'] = 'Własne wiadomości';
$txt['permissionname_modify_any'] = 'Wszystkie wiadomości';
$txt['permissionname_report_any'] = 'Zgłaszanie wiadomości moderatorom';
$txt['permissionhelp_report_any'] = 'Dodaje do każdej wiadomości odnośnik, pozwalający użytkownikowi zgłosić ją do moderacji. Po zgłoszeniu wszyscy moderatorzy otrzymają wiadomość email z odnośnikiem do danej wiadmości i opisem problemu (danym przez zgłaszającego użytkownika).';

$txt['permissiongroup_poll'] = 'Ankiety';
$txt['permissionname_poll_view'] = 'Oglądanie ankiet';
$txt['permissionhelp_poll_view'] = 'Użytkownik może zobaczyć ankietę. Bez tego zezwolenia, zobaczy tylko wątek.';
$txt['permissionname_poll_vote'] = 'Głosowanie';
$txt['permissionhelp_poll_vote'] = 'Zarejestrowany użytkownik może głosować. To zezwolenie nie odnosi się do gości.';
$txt['permissionname_poll_post'] = 'Wysyłanie ankiet';
$txt['permissionhelp_poll_post'] = 'Użytkownik może wysyłać nowe ankiety. Ponieważ ankiety są specjalnym typem wątków, nie można skorzystać z tego zezwolenia bez posiadania zezwolenia na wysyłanie nowych wątków.';
$txt['permissionname_poll_add'] = 'Dodawanie ankiet do wątków';
$txt['permissionhelp_poll_add'] = 'Użytkownik może dodać ankietę do wcześniej wysłanego wątku. Wymaga posiadania zezwolenia na modyfikację pierwszej wiadomości w wątku.';
$txt['permissionname_poll_add_own'] = 'Własne wątki';
$txt['permissionname_poll_add_any'] = 'Wszystkie wątki';
$txt['permissionname_poll_edit'] = 'Modyfikowanie ankiet';
$txt['permissionhelp_poll_edit'] = 'Użytkownik może modyfikować opcje ankiety i ją resetować. Aby móc zmienić maksymalną liczbę głosów i czas zakończenia ankiety, użytkownik musi posiadać zezwolenie na moderowanie działu.';
$txt['permissionname_poll_edit_own'] = 'Własne ankiety';
$txt['permissionname_poll_edit_any'] = 'Wszystkie ankiety';
$txt['permissionname_poll_lock'] = 'Zamykanie ankiet';
$txt['permissionhelp_poll_lock'] = 'Po zamknięciu, nie możne więcej głosować w danej ankiecie.';
$txt['permissionname_poll_lock_own'] = 'Własne ankiety';
$txt['permissionname_poll_lock_any'] = 'Wszystkie ankiety';
$txt['permissionname_poll_remove'] = 'Usuwanie ankiet';
$txt['permissionhelp_poll_remove'] = 'Pozwala na usuwanie ankiet.';
$txt['permissionname_poll_remove_own'] = 'Własne ankiety';
$txt['permissionname_poll_remove_any'] = 'Wszystkie ankiety';

$txt['permissiongroup_approval'] = 'Moderacja wiadomości';
$txt['permissionname_approve_posts'] = 'Zatwierdź pozycje oczekujące moderacji';
$txt['permissionhelp_approve_posts'] = 'To nadaje użytkownikowi uprawnienia do zatwierdzania wszystkich niezatwierdzonych pozycji w dziale.';
$txt['permissionname_post_unapproved_replies'] = 'Wysyłaj odpowiedzi na wątki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_replies'] = 'To uprawnienie umożliwia użytkownikowi napisanie w wątku odpowiedzi, która nie będzie widoczna dopóki nie zostanie zatwierdzona przez moderatora.';
$txt['permissionname_post_unapproved_replies_own'] = 'Własny wątek';
$txt['permissionname_post_unapproved_replies_any'] = 'Każdy wątek';
$txt['permissionname_post_unapproved_topics'] = 'Wysyłaj nowe wątki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_topics'] = 'To uprawnienie umożliwia użytkownikowi napisanie wątku, który będzie wymagał zatwierdzenia zanim zostanie widoczny.';
$txt['permissionname_post_unapproved_attachments'] = 'Wysyłaj załączniki, ale ukryj dopóki nie zostaną zatwierdzone';
$txt['permissionhelp_post_unapproved_attachments'] = 'To uprawnienie umożliwia użytkownikowi załączanie plików w swoich wiadomościach, które będą wtedy wymagały zatwierdzenia zanim zostaną widoczne dla innych użytkowników.';

$txt['permissiongroup_notification'] = 'Powiadomienia';
$txt['permissionname_mark_any_notify'] = 'Zamawianie powiadomień o odpowiedziach';
$txt['permissionhelp_mark_any_notify'] = 'Użytkownik może być powiadamiany o nowych odpowiedziach na wybrane przez siebie wątki.';
$txt['permissionname_mark_notify'] = 'Zamawianie powiadomień o nowych wątkach';
$txt['permissionhelp_mark_notify'] = 'Użytkownik może być powiadamiany o nowych wątkach wysłanych w wybranych przez siebie działach.';

$txt['permissiongroup_attachment'] = 'Załączniki';
$txt['permissionname_view_attachments'] = 'Oglądanie załączników';
$txt['permissionhelp_view_attachments'] = 'Załączniki to pliki doąłączane do wiadomości. Ta opcja może być włączona i skonfigurowana w \'funkcjach i opcjach\'. Ponieważ dostęp do załączników nie jest bezpośredni, możesz pozbawić dostępu do nich użytkownikom bez tego zezwolenia.';
$txt['permissionname_post_attachment'] = 'Wysyłanie załączników';
$txt['permissionhelp_post_attachment'] = 'Załączniki to pliki dołączane do wiadomości. Jedna wiadomość może zawierać kilka załączników.';

$txt['permissiongroup_simple_view_basic_info'] = 'Podstawowe funkcje forum';
$txt['permissiongroup_simple_use_pm_system'] = 'Kontakt z użytkownikami za pomocą systemu prywatnych wiadomości';
$txt['permissiongroup_simple_post_calendar'] = 'Dodawanie wydarzeń do kalendarza';
$txt['permissiongroup_simple_edit_profile'] = 'Personalizacja profilów';
$txt['permissiongroup_simple_delete_account'] = 'Usuwanie kont';
$txt['permissiongroup_simple_use_avatar'] = 'Wybieranie lub przesyłanie avatarów';
$txt['permissiongroup_simple_moderate_general'] = 'Moderacja całego forum';
$txt['permissiongroup_simple_administrate'] = 'Wykonywanie obowiązków administracyjnych';

$txt['permissionname_simple_calendar_edit_own'] = 'Modyfikowanie własnych wydarzeń w kalendarzu';
$txt['permissionname_simple_calendar_edit_any'] = 'Modyfikowanie cudzych wydarzeń w kalendarzu';
$txt['permissionname_simple_profile_view_own'] = 'Przeglądanie własnego profilu';
$txt['permissionname_simple_profile_view_any'] = 'Przeglądanie innych profili';
$txt['permissionname_simple_profile_identity_own'] = 'Modyfikowanie własnych ustawień konta';
$txt['permissionname_simple_profile_identity_any'] = 'Modyfikowanie ustawień cudzych kont';
$txt['permissionname_simple_profile_extra_own'] = 'Modyfikowanie dodatkowych opcji własnego profilu';
$txt['permissionname_simple_profile_extra_any'] = 'Modyfikowanie dodatkowych opcji cudzych profili';
$txt['permissionname_simple_profile_title_own'] = 'Wybieranie tytułu osobistego';
$txt['permissionname_simple_profile_title_any'] = 'Modyfikowanie tytułów osobistych innych użytkowników';
$txt['permissionname_simple_profile_remove_own'] = 'Usuwanie własnego konta';
$txt['permissionname_simple_profile_remove_any'] = 'Usuwanie cudzego konta';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Wysyłać wątki i odpowiedzi do działów <span style="text-decoration: underline">tylko</span> po ich zatwierdzeniu';
$txt['permissiongroup_simple_make_posts'] = 'Wysyłanie wątków i odpowiedzi do działów';
$txt['permissiongroup_simple_post_polls'] = 'Zakładanie nowych ankiety';
$txt['permissiongroup_simple_participate'] = 'Przeglądanie dodatkowej zawartości działów';
$txt['permissiongroup_simple_modify'] = 'Modyfikowanie własnych wiadomości';
$txt['permissiongroup_simple_notification'] = 'Zamawianie powiadomień';
$txt['permissiongroup_simple_attach'] = 'Wysyłanie załączników';
$txt['permissiongroup_simple_moderate'] = 'Moderacja działów';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Wysyłanie odpowiedzi na wątek - ale wymagaj zatwierdzenia';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Wysyłanie odpowiedzi na każdy wątek - ale wymagaj zatwierdzenia';
$txt['permissionname_simple_post_reply_own'] = 'Wysyłanie odpowiedzi na wątki które zaczeli';
$txt['permissionname_simple_post_reply_any'] = 'Wysyłanie odpowiedzi na każdy wątek';
$txt['permissionname_simple_move_own'] = 'Przesuwanie własnych wątków';
$txt['permissionname_simple_move_any'] = 'Przesuwanie cudzych wątków';
$txt['permissionname_simple_lock_own'] = 'Zamykanie własnych wątków';
$txt['permissionname_simple_lock_any'] = 'Zamykanie cudzych wątków';
$txt['permissionname_simple_remove_own'] = 'Usuwanie własnych wątków';
$txt['permissionname_simple_remove_any'] = 'Usuwanie cudzych wątków';
$txt['permissionname_simple_delete_own'] = 'Usuwanie własnych wiadomości';
$txt['permissionname_simple_delete_any'] = 'Usuwanie cudzych wiadomości';
$txt['permissionname_simple_modify_own'] = 'Modyfikowanie własnych wiadomości';
$txt['permissionname_simple_modify_any'] = 'Modyfikowanie cudzych wiadomości';
$txt['permissionname_simple_poll_add_own'] = 'Dodawanie ankiet do własnego wątku';
$txt['permissionname_simple_poll_add_any'] = 'Dodawanie ankiet do każdego wątku';
$txt['permissionname_simple_poll_edit_own'] = 'Edytowanie własnych ankiet';
$txt['permissionname_simple_poll_edit_any'] = 'Edytowanie cudzych ankiet';
$txt['permissionname_simple_poll_lock_own'] = 'Zamykanie własnych ankiet';
$txt['permissionname_simple_poll_lock_any'] = 'Zamykanie cudzych ankiet';
$txt['permissionname_simple_poll_remove_own'] = 'Usuwanie własnych ankiet';
$txt['permissionname_simple_poll_remove_any'] = 'Usuwanie cudzych ankiet';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Ustawienia uprawnień';
$txt['groups_manage_permissions'] = 'Grupy użytkowników którym wolno zarządzać uprawnieniami';
$txt['permission_settings_submit'] = 'Zapisz';
$txt['permission_settings_enable_deny'] = 'Włącz możliwość odmowy uprawnień';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Włączenie tej opcji zmieni wszystkie uprawnienia zabraniające na nie zezwalające';
$txt['permission_by_board_desc'] = 'Możesz tutaj ustawić czy dział używa uprawnień globalnych czy wymaga ich dostosowania. Używanie uprawnień lokalnych oznacza, że dla tego działu możesz ustawić każdej grupie użytkowników różne prawa';
$txt['permission_settings_desc'] = 'Tutaj możesz zobaczyć uprawnienia poszczególnych użytkowników i je zmienić, a także ustawić stopień zaawansowania systemu uprawnień.';
$txt['permission_settings_enable_postgroups'] = 'Włącz opcję różnych uprawnień dla grup opartych o ilość wypowiedzi';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Wyłączenie tego ustawienia będzie oznaczać usunięcie uprawnień aktualnie przydzielonych grupom automatycznie przydzielanym według ilości wypowiedzi.';

$txt['permissions_post_moderation_desc'] = 'Na tej stronie z łatwością możesz zmienić, które grupy mają moderowane wiadomości dla poszczególnych profili zezwoleń.';
$txt['permissions_post_moderation_deny_note'] = 'Zauważ, że od kiedy masz aktywne uprawnienia zaawansowane, nie możesz zastosować &quot;odmowy&quot; uprawnień z tej strony. Edytuj uprawnienia bezpośrednio, jeśli chcesz zastosować odmowę uprawnień.';
$txt['permissions_post_moderation_select'] = 'Wybierz Profil';
$txt['permissions_post_moderation_new_topics'] = 'Nowe Wątki';
$txt['permissions_post_moderation_replies_own'] = 'Własne Odpowiedzi';
$txt['permissions_post_moderation_replies_any'] = 'Wszystkie Odpowiedzi';
$txt['permissions_post_moderation_attachments'] = 'Załączniki';
$txt['permissions_post_moderation_legend'] = 'Legenda';
$txt['permissions_post_moderation_allow'] = 'Może tworzyć';
$txt['permissions_post_moderation_moderate'] = 'Może tworzyć, ale wymaga zatwierdzenia';
$txt['permissions_post_moderation_disallow'] = 'Nie może tworzyć';
$txt['permissions_post_moderation_group'] = 'Grupa';

$txt['auto_approve_topics'] = 'Wysyłać nowe wątki, bez zatwierdzania';
$txt['auto_approve_replies'] = 'Wysyłać odpowiedzi w wątkach, bez zatwierdzania';
$txt['auto_approve_attachments'] = 'Wysyłać załączniki, bez zatwierdzania';

// Version: 2.0 RC3; Search

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['set_parameters'] = 'Ustaw parametry wyszukiwania';
$txt['choose_board'] = 'Wybierz dział do przeszukania, lub przeszukaj wszystkie';
$txt['all_words'] = 'Szukaj wszystkich słów';
$txt['any_words'] = 'Szukaj jakiegokolwiek słowa';
$txt['by_user'] = 'Wysłane przez';

$txt['search_post_age'] = 'Wiek wiadomości';
$txt['search_between'] = 'Pomiędzy';
$txt['search_and'] = 'a';
$txt['search_options'] = 'Opcje';
$txt['search_show_complete_messages'] = 'Pokaż wyniki jako wiadomości';
$txt['search_subject_only'] = 'Tylko tematy wątków';
$txt['search_relevance'] = 'Trafności';
$txt['search_date_posted'] = 'Data wysłania';
$txt['search_order'] = 'Porządek wyszukiwania';
$txt['search_orderby_relevant_first'] = 'Najpierw najbardziej trafne';
$txt['search_orderby_large_first'] = 'Najpierw najdłuższe wątki';
$txt['search_orderby_small_first'] = 'Najpierw najkrótsze wątki';
$txt['search_orderby_recent_first'] = 'Najpierw najnowsze wątki';
$txt['search_orderby_old_first'] = 'Najpierw najstarsze wątki';
$txt['search_visual_verification_label'] = 'Weryfikacja';
$txt['search_visual_verification_desc'] = 'Wpisz kod z obrazka aby użyć opcji szukaj.';

$txt['search_specific_topic'] = 'Przeszukaj wiadomości tylko w tym wątku';

$txt['mods_cat_search'] = 'Szukaj';
$txt['groups_search_posts'] = 'Grupy użytkowników mające dostęp do funkcji szukania';
$txt['simpleSearch'] = 'Włącz proste przeszukiwanie';
$txt['search_results_per_page'] = 'Ilość wyników na stronę';
$txt['search_weight_frequency'] = 'Relatywna waga wyszukania dla liczby pasujących wiadomości w wątku';
$txt['search_weight_age'] = 'Relatywna waga wyszukania dla wieku ostatniej zgodnej wiadomości';
$txt['search_weight_length'] = 'Relatywna waga wyszukania dla długości wątku';
$txt['search_weight_subject'] = 'Relatywna waga wyszukania dla zgodnego tytułu';
$txt['search_weight_first_message'] = 'Relatywna waga wyszukania dla zgodności z pierwszą wiadomością';
$txt['search_weight_sticky'] = 'Relatywna waga wyszukania dla przyklejonych wątków';

$txt['search_settings_desc'] = 'Tutaj możesz zmienić podstawowe ustawienia wyszukiwania.';
$txt['search_settings_title'] = 'Funkcje szukania - ustawienia';

$txt['search_weights_desc'] = 'Tutaj możesz zmienić pojedyncze komponenty wskaźnika trafności.';
$txt['search_weights_title'] = 'Wyszukiwanie - wagi';
$txt['search_weights_total'] = 'Wszystkie';
$txt['search_weights_save'] = 'Zapisz';

$txt['search_method_desc'] = 'Ustal opcje wyszukiwania';
$txt['search_method_title'] = 'Metoda szukania';
$txt['search_method_save'] = 'Zapisz';
$txt['search_method_messages_table_space'] = 'Miejsce zajmowane w bazie danych przez wiadomości na forach';
$txt['search_method_messages_index_space'] = 'Miejsce zajmowane w bazie danych przez indeks wiadomości';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Indeks pełnotekstowy';
$txt['search_method_no_index_exists'] = 'obecnie nie istnieje';
$txt['search_method_fulltext_create'] = 'utwórz indeks pełnotekstowy';
$txt['search_method_fulltext_cannot_create'] = 'nie można utworzyć, ponieważ długość wiadomości przekracza 64 535 znaków lub tabela nie jest typu MyISAM';
$txt['search_method_index_already_exists'] = 'już stworzone';
$txt['search_method_fulltext_remove'] = 'usuń indeks pełnotekstowy';
$txt['search_method_index_partial'] = 'częściowo utworzony';
$txt['search_index_custom_resume'] = 'wznów';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Aby korzystać z pełnotekstowego wyszukiwania, musisz najpierw stworzyć pełnotekstowy indeks!';

$txt['search_index'] = 'Indeks wyszukiwania';
$txt['search_index_none'] = 'Brak indeksu';
$txt['search_index_custom'] = 'Własny indeks';
$txt['search_index_sphinx'] = 'Sfinks';
$txt['search_index_sphinx_desc'] = 'Panel admina pozwala tylko na przełączanie się pomiędzy indeksami wyszukiwania. Aby dostosować pozostałe ustawienia Sphinx, użyj narzędzia sphinx_config.php.';
$txt['search_index_label'] = 'Indeks';
$txt['search_index_size'] = 'Rozmiar';
$txt['search_index_create_custom'] = 'stwórz własny indeks';
$txt['search_index_custom_remove'] = 'usuń własny indeks';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Aby móc korzystać z wyszukiwania według własnego indeksu, musisz go najpierw utworzyć!';

$txt['search_force_index'] = 'Wymuszaj korzystanie z indeksu wyszukiwania';
$txt['search_match_words'] = 'Uwzględniaj tylko całe słowa';
$txt['search_max_results'] = 'Maksymalna liczba wyników do pokazania';
$txt['search_max_results_disable'] = '(0: brak limitu)';
$txt['search_floodcontrol_time'] = 'Minimalny czas pomiędzy wyszukiwaniem dla tego samego użytkownika';
$txt['search_floodcontrol_time_desc'] = '(0 = brak limitu, w sekundach)';

$txt['search_create_index'] = 'Stwórz indeks';
$txt['search_create_index_why'] = 'Dlaczego tworzyć indeks wyszukiwania?';
$txt['search_create_index_start'] = 'Stwórz';
$txt['search_predefined'] = 'Profil';
$txt['search_predefined_small'] = 'Mały indeks';
$txt['search_predefined_moderate'] = 'Średni indeks';
$txt['search_predefined_large'] = 'Duży indeks';
$txt['search_create_index_continue'] = 'Kontynuować';
$txt['search_create_index_not_ready'] = 'SMF tworzy właśnie indeks wyszukiwania Twoich wiadomości. Aby zapobiec zbytniemu obciążeniu serwera, proces został chwilowo wstrzymany. Powinien wznowić działanie za kilka sekund. Jeśli tak się nie stanie, kliknij Kontynuuj.';
$txt['search_create_index_progress'] = 'Postęp';
$txt['search_create_index_done'] = 'Własny indeks wyszukiwania został utworzony!';
$txt['search_create_index_done_link'] = 'Kontynuuj';
$txt['search_double_index'] = 'Masz aktualnie utworzone dwa indeksy na tabeli wiadomości. Dla osiągnięcia lepszej wydajności, zalecane jest usunięcie jednego z nich.';

$txt['search_error_indexed_chars'] = 'Nieprawidłowa liczba zaindeksowanych znaków. Wymagane są co najmniej 3 znaki do stworzenia użytecznego indeksu.';
$txt['search_error_max_percentage'] = 'Nieprawidłowy procent słów do pominięcia. Użyj co najmniej wartości 5%.';
$txt['error_string_too_long'] = 'Wyszukiwana fraza musi być krótsza niż %1$d znaków.';

$txt['search_adjust_query'] = 'Dostosuj parametry wyszukiwania';
$txt['search_adjust_submit'] = 'Ponów wyszukiwanie';
$txt['search_did_you_mean'] = 'Może chodziło Ci o';

$txt['search_example'] = '<em>np.</em> Orwell "Folwark Zwierzęcy" -film';

$txt['search_engines_description'] = 'W tej części możesz zdecydować, w jakim stopniu życzysz sobie śledzić silniki wyszukiwarek gdy indeksują twoje forum.';
$txt['spider_mode'] = 'Poziom śledzenia wyszukiwarek <div class="smalltext">Gdy poziom śledzenia jest wysoki, obciążenie serwera wzrasta.</div>';
$txt['spider_mode_off'] = 'Wyłączone';
$txt['spider_mode_standard'] = 'Standardowe - minimalne logowanie aktywności robotów.';
$txt['spider_mode_high'] = 'Wysokie - Pokazuje bardziej zaawansowane statystyki.';
$txt['spider_mode_vhigh'] = 'Bardzo wysokie - Tak jak &quot;Wysokie&quot;, dodatkowo zapisuje informacje o odwiedzinach każdej strony.';
$txt['spider_settings_desc'] = 'Z tej strony możesz zmienić opcje śledzenia robotów indeksujących forum. Jeśli życzysz sobie włączenia automatycznego czyszczenia logów, możesz ustawić to <a href="%1$s">tutaj</a>';

$txt['spider_group'] = 'Użyj uprawnień grupy<div class="smalltext">Aby wyłączyć indeksowanie wybranych stron.</div>';
$txt['spider_group_none'] = 'Wyłącz';

$txt['show_spider_online'] = 'Pokaż roboty na liście osób online';
$txt['show_spider_online_no'] = 'W ogóle';
$txt['show_spider_online_summary'] = 'Pokaż liczbę robotów';
$txt['show_spider_online_detail'] = 'Pokaż roboty';
$txt['show_spider_online_detail_admin'] = 'Pokaż roboty - tylko administracja';

$txt['spider_name'] = 'Nazwa robota';
$txt['spider_last_seen'] = 'Ostatnio widziany';
$txt['spider_last_never'] = 'Nigdy';
$txt['spider_agent'] = 'User Agent robota';
$txt['spider_ip_info'] = 'Adresy IP';
$txt['spiders_add'] = 'Dodaj robota';
$txt['spiders_edit'] = 'Edytuj robota';
$txt['spiders_remove_selected'] = 'Usuń zaznaczone roboty';
$txt['spider_remove_selected_confirm'] = 'Czy jesteś pewien, że chcesz usunąć tego robota?\\n\\nWszystkie powiązane z nim statystyki zostaną skasowane!';
$txt['spiders_no_entries'] = 'Brak skonfigurowanych robotów.';

$txt['add_spider_desc'] = 'Z tej strony możesz edytować parametry, według których roboty są klasyfikowane. Jeśli User Agent/adres IP użytkownika pasuje do tych wpisanych poniżej, zostanie wykryty jako robot i zacznie być śledzony.';
$txt['spider_name_desc'] = 'Nazwa, pod która będzie wyświetlany robot.';
$txt['spider_agent_desc'] = 'User Agent robota.';
$txt['spider_ip_info_desc'] = 'Lista adresów IP powiązanych z robotem (rozdziel przecinkiem).';

$txt['spider'] = 'Robot';
$txt['spider_time'] = 'Czas';
$txt['spider_viewing'] = 'Przegląda';
$txt['spider_logs_empty'] = 'Brak logów.';
$txt['spider_logs_info'] = 'Każdej akcja robota jest logowana gdy Poziom śledzenia jest ustawiony na &quot;Wysoki&quot; lub &quot;Bardzo Wysoki&quot;. Dokładne akcje robotów są logowane gdy śledzenie jest ustawione na &quot;Bardzo wysokie&quot;.';
$txt['spider_disabled'] = 'Wyłącz';

$txt['spider_logs_delete'] = 'Skasuj wpisy';
$txt['spider_logs_delete_older'] = 'Skasuj wszystkie wpisy starsze niż';
$txt['spider_logs_delete_day'] = 'dni.';
$txt['spider_logs_delete_submit'] = 'Skasuj';
// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Czy jesteś pewien że chcesz usunąć wszystkie wpisy w logu?';

$txt['spider_stats_select_month'] = 'Skocz do miesiąca';
$txt['spider_stats_page_hits'] = 'Odsłon strony';
$txt['spider_stats_no_entries'] = 'Brak statystyk robotów.';

// Version: 2.0 RC3; Login

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Registration agreement page.
$txt['registration_agreement'] = 'Licencja rejestracji';
$txt['agreement_agree'] = 'Akceptuję licencję.';
$txt['agreement_agree_coppa_above'] = 'Akceptuję licencję i mam powyżej %1$d lat.';
$txt['agreement_agree_coppa_below'] = 'Akceptuję licencję i mam mniej niż %1$d lat.';

// Registration form.
$txt['registration_form'] = 'Formularz rejestracji';
$txt['need_username'] = 'Powinieneś podać nazwę użytkownika.';
$txt['no_password'] = 'Pole hasła jest puste';
$txt['incorrect_password'] = 'Hasło niewłaściwe';
$txt['choose_username'] = 'Wybierz nazwę użytkownika';
$txt['maintain_mode'] = 'Forum chwilowo niedostępne';
$txt['registration_successful'] = 'Rejestracja zakończona pomyślnie';
$txt['now_a_member'] = 'Jesteś teraz członkiem forum.';
// Use numeric entities in the below string.
$txt['your_password'] = 'twoje hasło to';
$txt['valid_email_needed'] = 'Wpisz prawidłowy adres email, %1$s.';
$txt['required_info'] = 'Informacje wymagane';
$txt['identification_by_smf'] = 'Używane do identyfikacji przez SMF. Możesz używać znaków specjalnych po zalogowaniu, zmieniając wyświetlaną nazwę użytkownika w profilu.';
$txt['additional_information'] = 'Informacje dodatkowe';
$txt['warning'] = 'Uwaga!';
$txt['only_members_can_access'] = 'Tylko zarejestrowani użytkownicy mają dostęp do tej sekcji.';
$txt['login_below'] = 'Zaloguj się lub';
$txt['register_an_account'] = 'zarejestruj konto';
$txt['login_with_forum'] = 'z %1$s.';
// Use numeric entities in the below two strings.
$txt['may_change_in_profile'] = 'Możesz je zmienić po zalogowaniu wchodząc do profilu lub odwiedzając tę stronę:';
$txt['your_username_is'] = 'Twoja nazwa użytkownika to: ';

$txt['login_hash_error'] = 'Ustawienia bezpieczeństwa zostały podniesione. Proszę ponownie wpisać hasło.';

$txt['ban_register_prohibited'] = 'Przykro nam, nie możesz zarejestrować się na tym forum';
$txt['under_age_registration_prohibited'] = 'Przykro nam, ale użytkownicy poniżej %1$d nie mają pozwolenia na rejestrację na tym forum.';

$txt['activate_account'] = 'Aktywacja konta';
$txt['activate_success'] = 'Twoje konto zostało aktywowane. Teraz możesz się zalogować.';
$txt['activate_not_completed1'] = 'Twój adres email musi zostać zweryfikowany, zanim będziesz mógł się zalogować.';
$txt['activate_not_completed2'] = 'Potrzebujesz następnego emaila aktywacyjnego?';
$txt['activate_after_registration'] = 'Dziękujemy za rejestrację. Wkrótce otrzymasz email z odnośnikiem potrzebnym do aktywacji konta.';
$txt['invalid_userid'] = 'Użytkownik nie istnieje';
$txt['invalid_activation_code'] = 'Nieprawidłowy kod aktywacyjny';
$txt['invalid_activation_username'] = 'Nazwa użytkownika lub email';
$txt['invalid_activation_new'] = 'Jeśli zarejestrowałeś się ze złym adresem wpisz właściwy adres i twoje hasło tutaj.';
$txt['invalid_activation_new_email'] = 'Nowy adres email';
$txt['invalid_activation_password'] = 'Stare hasło';
$txt['invalid_activation_resend'] = 'Wyślij kod aktywacyjny ponownie';
$txt['invalid_activation_known'] = 'Jeśli już znasz twój kod aktywacyjny, wpisz go tutaj.';
$txt['invalid_activation_retry'] = 'Kod aktywacyjny';
$txt['invalid_activation_submit'] = 'Aktywuj';

$txt['coppa_no_concent'] = 'Administrator wciąż nie otrzymał zgody twojego rodzica bądź opiekuna';
$txt['coppa_need_more_details'] = 'Więcej szczegółów?';

$txt['awaiting_delete_account'] = 'Twoje konto zostało zaznaczone jako do usunięcia! Jeśli chcesz je odzyskać, proszę zaznaczyć "Reaktywuj moje konto" i zaloguj się ponownie.';
$txt['undelete_account'] = 'Reaktywuj moje konto';

// Use numeric entities in the below three strings.
$txt['change_password'] = 'Nowe hasło';
$txt['change_password_login'] = 'Informacje o logowaniu na';
$txt['change_password_new'] = 'zostały zmienione, a twoje hasło zostało zresetowane. Poniżej znajdują się informacje o twoim nowym loginie i haśle.';

$txt['in_maintain_mode'] = 'To forum jest w trybie obsługi.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Proszę przeczytaj i zaakceptuj warunki aby wysłać formularz.';
$txt['register_passwords_differ_js'] = 'Wpisane hasła nie są takie same !';

$txt['approval_after_registration'] = 'Dziękujemy za rejestrację. Administrator musi zatwierdzić Twoją rejestrację zanim będziesz mógł używać swojego konta. Wkrótce otrzymasz email z decyzją administratora.';

$txt['admin_settings_desc'] = 'Możesz tutaj zmienić rozmaite ustawienia dotyczące rejestracji nowych użytkowników.';

$txt['setting_enableOpenID'] = 'Zezwól użytkownikom na rejestrację używając OpenID';

$txt['setting_registration_method'] = 'Metoda rejestracji dla nowych użytkowników';
$txt['setting_registration_disabled'] = 'Rejestracja wyłączona';
$txt['setting_registration_standard'] = 'Natychmiastowa rejestracja';
$txt['setting_registration_activate'] = 'Aktywacja email';
$txt['setting_registration_approval'] = 'Zatwierdzenie użytkownika';
$txt['setting_notify_new_registration'] = 'Powiadom administrację gdy nowy użytkownik się dołącza';
$txt['setting_send_welcomeEmail'] = 'Wysyłaj emaile powitalne nowym użytkownikom';

$txt['setting_coppaAge'] = 'Wiek poniżej którego należy dać ograniczenia związane z rejestracją';
$txt['setting_coppaAge_desc'] = '(Ustaw 0 aby wyłączyć)';
$txt['setting_coppaType'] = 'Co należy zrobić z użytkownikami próbującymi się zarejestrować poniżej wymaganego wieku';
$txt['setting_coppaType_reject'] = 'Odrzuć ich próbę rejestracji';
$txt['setting_coppaType_approval'] = 'Wymaga zatwierdzenia przez rodzica bądź opiekuna';
$txt['setting_coppaPost'] = 'Adres pocztowy na który należy wysyłać formularze zatwierdzające';
$txt['setting_coppaPost_desc'] = 'Ma sens tylko gdy rejestracja jest ograniczona wiekowo';
$txt['setting_coppaFax'] = 'Numer faksu na jaki mają być przesłane formularze zatwierdzające';
$txt['setting_coppaPhone'] = 'Numer kontaktowy dla rodziców w sprawie ograniczeń wiekowych';

$txt['admin_register'] = 'Rejestracja nowego użytkownika';
$txt['admin_register_desc'] = 'Tutaj możesz zarejestrować nowych użytkowników i jeśli chcesz wysłać im szczegóły emailem.';
$txt['admin_register_username'] = 'Nowa nazwa użytkownika';
$txt['admin_register_email'] = 'Adres email';
$txt['admin_register_password'] = 'Hasło';
$txt['admin_register_username_desc'] = 'Nazwa użytkownika dla nowego członka';
$txt['admin_register_email_desc'] = 'Adres email użytkownika<br />(wymagany jeśli zechcesz wysłać szczegóły rejestracji)';
$txt['admin_register_password_desc'] = 'Nowe hasło dla użytkownika';
$txt['admin_register_email_detail'] = 'Wyślij hasło użytkownikowi';
$txt['admin_register_email_detail_desc'] = 'Adres email wymagany nawet, gdy nie zaznaczono tej opcji';
$txt['admin_register_email_activate'] = 'Użytkownik musi aktywować konto';
$txt['admin_register_group'] = 'Podstawowa grupa użytkowników';
$txt['admin_register_group_desc'] = 'Podstawowa grupa, do której będzie należał nowy użytkownik';
$txt['admin_register_group_none'] = '(brak podstawowej grupy użytkowników)';
$txt['admin_register_done'] = 'Użytkownik %1$s został zarejestrowany!';

$txt['coppa_title'] = 'Forum ograniczone wiekowo';
$txt['coppa_after_registration'] = 'Dziękujemy za rejestrację w ' . $context['forum_name_html_safe'] . '.<br /><br />Ponieważ nie masz jeszcze {MINIMUM_AGE} lat, prawnym wymogiem jest otrzymanie zgody twojego rodzica bądź opiekuna zanim będziesz mógł użyć swojego konta. Aby ją zdobyć proszę wydrukować poniższy formularz:';
$txt['coppa_form_link_popup'] = 'Pokaż formularz w nowym oknie';
$txt['coppa_form_link_download'] = 'Ściągnij formularz jako plik tekstowy';
$txt['coppa_send_to_one_option'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz na adres:';
$txt['coppa_send_to_two_options'] = 'Potem poproś swojego rodzica bądź opiekuna aby wysłał wypełniony formularz:';
$txt['coppa_send_by_post'] = 'Wyślij na następujący adres:';
$txt['coppa_send_by_fax'] = 'Prześlij fax na następujący numer:';
$txt['coppa_send_by_phone'] = 'Alternatywnie możesz skontaktować się poprzez numer telefonu {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formularz dotyczący zgody na rejestrację w ' . $context['forum_name_html_safe'];
$txt['coppa_form_address'] = 'Adres';
$txt['coppa_form_date'] = 'Data';
$txt['coppa_form_body'] = 'Ja, {PARENT_NAME},<br /><br />Daję pozwolenie {CHILD_NAME} (imię i nazwisko dziecka) aby stał się pełnym użytkownikiem forum: ' . $context['forum_name_html_safe'] . ', z nazwą użytkownika: {USER_NAME}.<br /><br />Rozumiem, że informacje osobiste wpisane przez {USER_NAME} mogą być widoczne dla innych jego użytkowników.<br /><br />Podpisano:<br />{PARENT_NAME} (Rodzic/Opiekun).';

$txt['visual_verification_sound_again'] = 'Odtwórz';
$txt['visual_verification_sound_close'] = 'Zamknij okno';
$txt['visual_verification_sound_direct'] = 'Masz problem z odsłuchaniem? Spróbuj pobrać plik bezpośrednio.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Nazwa użytkownika jest dostępna';
$txt['registration_username_unavailable'] = 'Nazwa użytkownika jest niedostępna';
$txt['registration_username_check'] = 'Sprawdź czy nazwa użytkownika jest dostępna';
$txt['registration_password_short'] = 'Hasło jest za krótkie';
$txt['registration_password_reserved'] = 'Hasło zawiera twoją nazwę użytkownika/email';
$txt['registration_password_numbercase'] = 'Hasło musi zawierać wielkie i małe litery oraz cyfry';
$txt['registration_password_no_match'] = 'Hasła nie są takie same';
$txt['registration_password_valid'] = 'Hasło jest poprawne';

$txt['registration_errors_occurred'] = 'Następujące błędy zostały wykryte podczas rejestracji. Popraw je aby kontynuować:';

$txt['authenticate_label'] = 'Używając bezpiecznego połączenia';
$txt['authenticate_password'] = 'Hasło';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL uwierzytelnienia OpenID';

// Version: 2.0 RC3; ManageSmileys

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['smiley_sets_save'] = 'Zachowaj zmiany';
$txt['smiley_sets_add'] = 'Nowy zestaw emotikon';
$txt['smiley_sets_delete'] = 'Usuń zaznaczone';
$txt['smiley_sets_confirm'] = 'Czy na pewno chcesz usunąć ten zestaw emotikon?\\n\\nUwaga: pliki nie zostaną usunięte, tylko nie będą mogły być wybrane.';

$txt['setting_smiley_sets_default'] = 'Standardowy zestaw uśmieszków';
$txt['setting_smiley_sets_enable'] = 'Włącz możliwość wyboru zestawu emotikon przez użytkowników.';
$txt['setting_smiley_enable'] = 'Włącz niestandardowe emotikony';
$txt['setting_smileys_url'] = 'Bazowy URL do wszystkich zestawów emotikon';
$txt['setting_smileys_dir'] = 'Ścieżka dostępu do wszystkich zestawów emotikon';
$txt['setting_messageIcons_enable'] = 'Włącz niestandardowe ikony wiadomości';
$txt['setting_messageIcons_enable_note'] = '(w przeciwnym wypadku zostaną użyte domyślne ikony)';
$txt['groups_manage_smileys'] = 'Grupy mogące zarządzać uśmieszkami i ikonami wiadomości';

$txt['smiley_sets_name'] = 'Ustal nazwę';
$txt['smiley_sets_url'] = 'URL';
$txt['smiley_sets_default'] = 'Domyślne';

$txt['smiley_sets_latest'] = 'Najnowsze emotikony';
$txt['smiley_sets_latest_fetch'] = 'Ładowanie informacji o emotikonach z simplemachines.org...';

$txt['smileys_add_method'] = 'Źródło obrazka';
$txt['smileys_add_existing'] = 'Użyj istniejącego pliku';
$txt['smileys_add_upload'] = 'Wyślij nową emotikonę';
$txt['smileys_add_upload_choose'] = 'Plik do wysłania';
$txt['smileys_add_upload_choose_desc'] = 'Obrazek do użycia we wszystkich zestawach.';
$txt['smileys_add_upload_all'] = 'Ten sam obrazek dla wszystkich zestawów';
$txt['smileys_add_upload_for1'] = 'Obrazek dla zestawu';
$txt['smileys_add_upload_for2'] = '';

$txt['smileys_enable_note'] = '(w innym przypadku zostaną użyte domyślne emotikony.)';
$txt['smileys_code'] = 'Kod';
$txt['smileys_filename'] = 'Nazwa pliku';
$txt['smileys_description'] = 'Opis';
$txt['smileys_remove'] = 'Usuń';
$txt['smileys_save'] = 'Zapisz zmiany';
$txt['smileys_delete'] = 'Usuń emotikonę';
// Don't use entities in the below string.
$txt['smileys_delete_confirm'] = 'Czy jesteś pewien że chcesz usunąć tą emotikonę?';
$txt['smileys_with_selected'] = 'Zaznaczone';
$txt['smileys_make_hidden'] = 'Ukryj';
$txt['smileys_show_on_post'] = 'Pokaż w formularzu wiadomości';
$txt['smileys_show_on_popup'] = 'Pokazuj w wyskakującym okienku';

$txt['smiley_settings_explain'] = 'Te ustawienia umożliwiają zmianę domyślnego zestawu emotikon, pozwalają użytkownikom wybrać ich własne emotikony i ustalić ścieżki oraz dane konfiguracji.';
$txt['smiley_editsets_explain'] = 'Zestawy i grupy emotikon, pomiędzy którymi mogą wybierać użytkownicy. Na przykład, możesz mieć żółte i czerwone emotikony.<br />Tu możesz zmienić nazwę i lokalizację każdego zestawu uśmieszków, pamiętaj jednak, że wszystkie zestawy dzielą te same emotikony.';
$txt['smiley_editsmileys_explain'] = 'Zmień swoje emotikony poprzez kliknięcie na te, które chcesz modyfikować. Pamiętaj, że te emotikony muszą istnieć we wszystkich zestawach, inaczej niektóre z nich nie będą się wyświetlały! Nie zapomnij zapisać wprowadzonych zmian!';
$txt['smiley_setorder_explain'] = 'Zmień kolejność emotikon.';
$txt['smiley_addsmiley_explain'] = 'Tu możesz dodać emotikonę - z istniejącego pliku lub poprzez wysłanie nowej.';

$txt['smiley_set_select_default'] = 'Domyślny zestaw emotikon';
$txt['smiley_set_new'] = 'Utwórz nowy zestaw emotikon';
$txt['smiley_set_modify_existing'] = 'Modyfikuj istniejący zestaw emotikon';
$txt['smiley_set_modify'] = 'Modyfikuj';
$txt['smiley_set_import_directory'] = 'Importuj emotikony już znajdujące się w tym katalogu';
$txt['smiley_set_import_single'] = 'W tym zestawie znajduje się jeszcze nie zaimportowana emotikona. Kliknij';
$txt['smiley_set_import_multiple'] = 'Niezaimportowanych emotikon w zestawie: %1$d. Kliknij';
$txt['smiley_set_to_import_single'] = 'aby go teraz importować.';
$txt['smiley_set_to_import_multiple'] = 'aby je teraz importować.';

$txt['smileys_location'] = 'Lokalizacja';
$txt['smileys_location_form'] = 'Formularz wysyłania wiadomości';
$txt['smileys_location_hidden'] = 'Ukryty';
$txt['smileys_location_popup'] = 'Wyskakujące okienko';
$txt['smileys_modify'] = 'modyfikuj';
$txt['smileys_not_found_in_set'] = 'Emotikony nie znalezione w zestawie/wach';
$txt['smileys_default_description'] = '(Umieść opis)';
$txt['smiley_new'] = 'Dodaj nową emotikonę';
$txt['smiley_modify_existing'] = 'Modyfikuj emotikonę';
$txt['smiley_preview'] = 'Podgląd';
$txt['smiley_preview_using'] = 'używając zestawu emotikon';
$txt['smileys_confirm'] = 'Na pewno chcesz usunąć te emotikony?\\n\\nUwaga: to nie usunie plików, tylko ustawienia.';
$txt['smileys_location_form_description'] = 'Te emotikony pojawią się nad obszarem wprowadzania tekstu, podczas wysyłania nowej wiadomości zwykłej lub prywatnej.';
$txt['smileys_location_popup_description'] = 'Te emotikony pojawią się w wyskakującym okienku, wywoływanym poprzez kliknięcie na \'[więcej]\'';
$txt['smileys_move_select_destination'] = 'Ustal docelowe miejsce emotikony';
$txt['smileys_move_select_smiley'] = 'Wybierz emotikonę do przeniesienia';
$txt['smileys_move_here'] = 'Przenieś emotikonę w to miejsce';
$txt['smileys_no_entries'] = 'Obecnie nie ma skonfigurowanych emotikon.';

$txt['icons_edit_icons_explain'] = 'Tutaj możesz zmienić które ikony wiadomości będą dostępne w dziale. Możesz dodawać, edytować i usuwać ikony a także ograniczyć ich miejsce występowania do poszczególnych działów';
$txt['icons_edit_icons_all_boards'] = 'Dostępne we wszystkich działach';
$txt['icons_board'] = 'Dział';
$txt['icons_confirm'] = 'Czy jesteś pewien, że chcesz usunąć te ikony?\\n\\n Nie będą dostępne przy pisaniu nowych wiadomości, ale obrazek zostanie.';
$txt['icons_add_new'] = 'Dodaj nową ikonę';

$txt['icons_edit_icon'] = 'Edytuj ikonę wiadomości';
$txt['icons_new_icon'] = 'Nowa ikona wiadomości';
$txt['icons_location_first_icon'] = 'jako pierwsza ikona';
$txt['icons_location_after'] = 'po';
$txt['icons_filename_all_gif'] = 'Wszystkie pliki muszą być w formacie "gif"';
$txt['icons_no_entries'] = 'Obecnie nie ma skonfigurowanych ikon wiadomości.';

?>