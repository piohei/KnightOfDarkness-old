<?php
// Version: 2.0 RC3; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Na tej stronie mo�esz zmieni� ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">ustawienia styl�w</a> je�li chcesz zmieni� inne opcje.  Kliknij na ikony pomocy, je�li chcesz uzyska� wi�cej informacji o jakim� ustawieniu.';
$txt['security_settings_desc'] = 'Ta strona umo�liwia Ci ustawienie opcji szczeg�lnie zwi�zanych z bezpiecze�stwa i moderowaniem twojego forum, z uwzgl�dnieniem opcji anty-spam.';
$txt['modification_settings_desc'] = 'Ta strona zawiera ustawienie dodane do twojego forum przez modyfikacje';

$txt['modification_no_misc_settings'] = 'Nie ma jeszcze zainstalowanych �adnych modyfikacji, aby m�c doda� jakie� ustawienia.';

$txt['pollMode'] = 'Tryb ankiety';
$txt['disable_polls'] = 'Wy��cz ankiety';
$txt['enable_polls'] = 'W��cz ankiety';
$txt['polls_as_topics'] = 'Wy�wietl istniej�ce ankiety jako w�tki';
$txt['allow_guestAccess'] = 'Pozw�l go�ciom przegl�da� forum';
$txt['userLanguage'] = 'Pozw�l u�ytkownikom wybra� j�zyk forum';
$txt['allow_editDisplayName'] = 'Pozw�l u�ytkownikom na zmian� ich wy�wietlanej nazwy';
$txt['allow_hideOnline'] = 'Pozw�l nie-administratorom ukry� sw�j status online';
$txt['guest_hideContacts'] = 'Nie pokazuj go�ciom danych kontaktowych u�ytkownik�w';
$txt['titlesEnable'] = 'W��cz tytu�y osobiste';
$txt['enable_buddylist'] = 'W��cz list� znajomych/ignorowanych';
$txt['default_personal_text'] = 'Domy�lny tekst osobisty';
$txt['number_format'] = 'Domy�lny format liczb';
$txt['time_format'] = 'Domy�lny format czasu';
$txt['setting_time_offset'] = 'Generalne przesuni�cie czasu<div class="smalltext">(modyfikacja tej warto�ci zmieni ustawienia u wszystkich.)</div>';
$txt['setting_default_timezone'] = 'Serwer czasu';
$txt['failed_login_threshold'] = 'Dopuszczalna ilo�� pr�b zalogowania';
$txt['lastActive'] = 'Ilo�� w minutach do pokazania, �e u�ytkownik jest aktywny';
$txt['trackStats'] = '�led� statystyk� dni';
$txt['hitStats'] = '�led� ilo�� wej�� na dzie� (statystyki musz� by� w��czone)';
$txt['enableCompressedOutput'] = 'W��cz kompresj�';
$txt['disableTemplateEval'] = 'Wy��cz ocen� szablon�w';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezw�l przegl�darkom wraca� do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wyga�ni�cia nieaktywnej sesji';
$txt['enableErrorLogging'] = 'W��cz raportowanie b��d�w';
$txt['enableErrorQueryLogging'] = 'Uwzgl�dnij zapytania bazy danych w dzienniku b��d�w';
$txt['pruningOptions'] = 'W��cz czyszczenie log�w';
$txt['pruneErrorLog'] = 'Usuwaj� logi b��d�w starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['pruneModLog'] = 'Usu� logi moderacji starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['pruneBanLog'] = 'Usu� wpisy ban�w z logu starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['pruneReportLog'] = 'Usu� raporty moderacji starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['pruneScheduledTaskLog'] = 'Usu� logi zaplanowanych zada� starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['pruneSpiderHitLog'] = 'Usu� logi aktywno�ci wyszukiwarek starsze ni�:<div class="smalltext">(0 wy��czone)</div>';
$txt['cookieTime'] = 'Domy�lny czas zalogowania (w minutach)';
$txt['localCookies'] = 'W��cz lokalne przechowywanie plik�w cookie<div class="smalltext">(SSI nie dzia�a z t� opcj�.)</div>';
$txt['globalCookies'] = 'U�ywaj plik�w cookie niezale�nych od subdomeny<div class="smalltext">(najpierw wy��cz lokalne pliki cookie!)</div>';
$txt['secureCookies'] = 'Wymu� ciasteczka w celu bezpiecze�stwa<div class="smalltext">(Mo�liwo�� w��czenia je�li u�ywasz HTTPS - w przeciwnym wypadku nie korzystaj z tej opcji!)</div>';
$txt['securityDisable'] = 'Wy��cz dodatkowe sprawdzanie has�a w centrum administracji';
$txt['send_validation_onChange'] = 'Ponowna aktywacja konta po zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj zgody administratora gdy u�ytkownik chce usun�� swoje konto';
$txt['autoOptMaxOnline'] = 'Maksymalna ilo�� u�ytkownik�w online podczas optymalizacji<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezw�l u�ytkownikom na wy��czenie og�osze�';
$txt['disallow_sendBody'] = 'Wy��cz tre�� wiadomo�ci w powiadomieniach';
$txt['queryless_urls'] = 'Wy�wietlaj adresy przyjazne wyszukiwarkom<div class="smalltext"><strong>dzia�a tylko w Apache!</strong></div>';
$txt['max_image_width'] = 'Maksymalna szeroko�� obrazk�w w wiadomo�ciach (0 = wy��cz)';
$txt['max_image_height'] = 'Maksymalna wysoko�� obrazk�w w wiadomo�ciach (0 = wy��cz)';
$txt['enableReportPM'] = 'W��cz zg�aszanie prywatnych wiadomo�ci administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorc�w przy wysy�aniu prywatnych wiadomo�ci.<div class="smalltext">(0 - bez limitu, nie dotyczy administrator�w)</div>';
$txt['pm_posts_verification'] = 'Liczba wiadomo�ci poni�ej kt�rej u�ytkownik musi wpisa� kod weryfikacyjny, aby wys�a� prywatn� wiadomo��.<div class="smalltext">(0 - bez limitu, nie dotyczy administrator�w)</div>';
$txt['pm_posts_per_hour'] = 'Liczba prywatnych wiadomo�ci jak� u�ytkownik mo�e wys�a� w ci�gu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administrator�w)</div>';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczb� wy�wietlanych odno�nik�w do stron';
$txt['contiguous_page_display'] = 'Ilo�� kolejno wy�wietlanych stron';
$txt['to_display'] = 'wy�wietla';
$txt['todayMod'] = 'W��cz funkcj� &quot;Dzisiaj&quot;';
$txt['today_disabled'] = 'Wy��czona';
$txt['today_only'] = 'Tylko Dzisiaj';
$txt['yesterday_today'] = 'Dzisiaj i Wczoraj';
$txt['topbottomEnable'] = 'W��cz przyciski Id� do g�ry/do do�u';
$txt['onlineEnable'] = 'Pokazuj status online/offline u�ytkownika w wiadomo�ciach i PW';
$txt['enableVBStyleLogin'] = 'Poka� pole szybkiego logowania na ka�dej stronie';
$txt['defaultMaxMembers'] = 'Ilo�� u�ytkownik�w na stron� w li�cie u�ytkownik�w';
$txt['timeLoadPageEnable'] = 'Wy�wietlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wy��cz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'W��cz list� u�ytkownik�w online';
$txt['make_email_viewable'] = 'Zezw�l na wy�wietlanie adresu email.';
$txt['meta_keywords'] = 'Znaczniki Meta powi�zane z forum.<div class="smalltext">Dla wyszukiwarek, zostaw pole puste aby u�y� domy�lnych znacznik�w.</div>';

$txt['karmaMode'] = 'Tryb reputacji';
$txt['karma_options'] = 'Wy��cz reputacj�|W��cz ca�kowit� reputacj�|W��cz pozytywn�/negatywn� reputacj�';
$txt['karmaMinPosts'] = 'Minimalna ilo�� wiadomo�ci potrzebna do zmiany reputacji';
$txt['karmaWaitTime'] = 'Czas oczekiwania w godzinach';
$txt['karmaTimeRestrictAdmins'] = 'Podporz�dkuj administrator�w czasowi oczekiwania';
$txt['karmaLabel'] = 'Nazwa reputacji';
$txt['karmaApplaudLabel'] = 'Etykieta poparcia';
$txt['karmaSmiteLabel'] = 'Etykieta pot�pienia';

$txt['caching_information'] = '<div align="aligncenter underline"><strong><u>Wa�ne!</u> Przeczytaj to zanim w��czysz poni�sze opcje.</strong></div><br />
	SMF obs�uguje cache u�ywaj�c akcelerator�w. Aktualnie obs�ugiwane akceleratory to:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
                <li>XCache</li>
	</ul>
	Cache b�dzie dzia�a� na Twoim serwerze tylko je�li PHP b�dzie skompilowane z jednym z wy�ej wymienionych akcelerator�w lub z
	w��czonym memcache. Je�li nie posiadasz zainstalowanego �adnego akceleratora, SMF b�dzie polega� na opcji cache w pliku.<br /><br />
	SMF pozwala na aktywacj� cache na r�nych poziomach. Im wy�szy poziom cache, tym wi�cej czasu procesora b�dzie zu�ywane na odczytanie
	informacji cache. Je�li na Twojej maszynie jest uaktywnione cache, zaleca si� rozpocz�� od ustawienia poziomu 1.
	<br /><br />
	Pami�taj, �e je�li u�ywasz memcache, musisz poda� parametry serwera w ustawieniach poni�ej. Powinny by� one podane w formie oddzielonej przecinkami listy,
	tak jak na poni�szym przyk�adzie:<br />
	&quot;serwer1,serwer2,serwer3:port,serwer4&quot;<br /><br />
	Je�li port nie zostanie podany, SMF u�yje portu 11211. SMF b�dzie pr�bowa� wymuszonego lub losowego roz�o�enia obci��enia pomi�dzy serwerami.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF nie jest w stanie wykry� na Twoim serwerze kompatybilnego akceleratora.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany Zend.</strong> ';
$txt['detected_Memcached'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany Memcached.</strong> ';
$txt['detected_XCache'] = '<strong style="color: green">SMF wykry�, �e na Twoim serwerze jest zainstalowany XCache.</strong>';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wy��cz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = 'Ustawienia Memcache';

$txt['loadavg_warning'] = '<span class="error">Uwaga: poni�sze ustawienia musz� by� edytowane z ostro�no�ci�. Ustawienie ich na niskim poziomie mo�e spowodowa�, �e forum b�dzie �le renderowane i b�dzie <strong>bezu�yteczne</strong>! Obecnie �rednie �adowanie jest <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'W��cz r�wnowa�enie obci��enia przez �rednie obci��enie';
$txt['loadavg_auto_opt'] = 'Pr�g automatycznego wy��czenia optymalizacji bazy danych';
$txt['loadavg_search'] = 'Pr�g wy��czenia wyszukiwania';
$txt['loadavg_allunread'] = 'Pr�g wy��czenia wszystkich nieprzeczytanych w�tk�w';
$txt['loadavg_unreadreplies'] = 'Pr�g wy��czenia nieprzeczytanych odpowiedzi';
$txt['loadavg_show_posts'] = 'Pr�g do wy��czania pokazywanych wiadomo�ci u�ytkownika';
$txt['loadavg_forum'] = 'Pr�g <strong>ca�kowitego</strong> wy��czenia forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Wsparcie dla zbalansowanego �adowania nie jest dost�pne w Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Wsparcie dla zbalansowanego �adowania jest wy��czone w konfiguracji Twojego hosta.</span>';

$txt['setting_password_strength'] = 'Wymagana si�a hase� u�ytkownik�w';
$txt['setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['setting_password_strength_medium'] = '�rednia - nie mo�e zawiera� nazwy u�ytkownika';
$txt['setting_password_strength_high'] = 'Wysoka - mieszanka r�nych znak�w';

$txt['antispam_Settings'] = 'Weryfikacja Anti-Spam';
$txt['antispam_Settings_desc'] = 'Ta sekcja pozwala na ustawienie kontroli weryfikacji aby zapewni� ci� �e u�ytkownik to cz�owiek (a nie bot), i w jaki spos�b i gdzie si� stosuje.';
$txt['setting_reg_verification'] = 'Wymagaj weryfikacji na stronie rejestracji';
$txt['posts_require_captcha'] = 'Liczba wiadomo�ci, poni�ej kt�rej u�ytkownicy musz� przej�� weryfikacj� aby utworzy� wiadomo��';
$txt['posts_require_captcha_desc'] = '(0 - bez limitu, nie dotyczy moderator�w)';
$txt['search_enable_captcha'] = 'Wymagaj weryfikacji przy przeszukiwaniu przez wszystkich go�ci';
$txt['setting_guests_require_captcha'] = 'Go�cie musz� przej�� weryfikacj� kiedy tworz� wiadomo��';
$txt['setting_guests_require_captcha_desc'] = '(Automatycznie ustawione, je�li okre�li�e� minimaln� liczb� wiadomo�ci poni�ej)';
$txt['guests_report_require_captcha'] = 'Go�� musi przej�� przez weryfikacje gdy raportuje wiadomo��';

$txt['configure_verification_means'] = 'Konfiguracja metod weryfikacji';
$txt['setting_qa_verification_number'] = 'Liczba pyta� weryfikacyjnych na kt�re u�ytkownik musi odpowiedzie�';
$txt['setting_qa_verification_number_desc'] = '(0 aby wy��czy�; pytania s� ustawiane poni�ej)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = 'Z�o�ono�� obrazka do weryfikacji (CAPTCHA)';
$txt['setting_visual_verification_type_desc'] = 'Im bardziej obraz jest z�o�ony, tym trudniejsze jest obej�cie go przez boty';
$txt['setting_image_verification_off'] = 'Wy��cz';
$txt['setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['setting_image_verification_simple'] = 'Prosty - Nachodz�ce na siebie kolorowe litery, bez szumu';
$txt['setting_image_verification_medium'] = '�redni - Nachodz�ce na siebie kolorowe litery, z szumem';
$txt['setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['setting_image_verification_extreme'] = 'Ekstremalny - Pochylone litery, szum, linie i kszta�ty.';
$txt['setting_image_verification_sample'] = 'Przyk�ad';
$txt['setting_image_verification_nogd'] = '<strong>Uwaga:</strong> ustawienie z�o�ono�ci nie ma znaczenia, poniewa� serwer nie ma zainstalowanej biblioteki GD.';
$txt['setup_verification_questions'] = 'Pytania kontrolne';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">If you want users to answer verification questions in order to stop spam bots powiniene� ustawi� kilka pyta� w tabeli poni�ej. You should pick relatively simple questions; answers are not case sensitive. Mo�esz u�ywa� tag�w BBC aby sformatowa� pytania, aby usun�� pytanie poprostu wyczy� zawarto�� tej linii.</span>';
$txt['setup_verification_question'] = 'Pytanie';
$txt['setup_verification_answer'] = 'Odpowied�';
$txt['setup_verification_add_more'] = 'Dodaj kolejne pytanie';

$txt['moderation_settings'] = 'Ustawienia moderacji';
$txt['setting_warning_enable'] = 'W��cz system ostrze�e� u�ytkownika';
$txt['setting_warning_watch'] = 'Poziom Ostrze�enia - U�ytkownik jest obserwowany<div class="smalltext">Warto�� poziomu ostrze�enia, powy�ej kt�rego, u�ytkownik zostanie dodany do listy obserwowanych u�ytkownik�w - 0 aby wy��czy�.</div>';
$txt['setting_warning_moderate'] = 'Poziom Ostrze�enia - wiadomo�ci u�ytkownika s� moderowane<div class="smalltext">Warto�� poziomu ostrze�enia, powy�ej kt�rego, wszystke wiadomo�ci u�ytkownika s� moderowane - 0 aby wy��czy�.</div>';
$txt['setting_warning_mute'] = 'Poziom Ostrze�enia - U�ytkownik nie mo�e pisa� post�w<div class="smalltext">Warto�� poziomu ostrze�enia, powy�ej kt�rego, uzytkownik nie mo�e pisa� post�w - 0 aby wy��czy�.</div>';
$txt['setting_user_limit'] = 'Maksymalna ilo�� punkt�w ostrze�enia na dzie�<div class="smalltext">Ta warto��, to maksymalna ilo�� punkt�w ostrze�enia, jakie jeden moderator mo�e przyzna� u�ytkownikowi w okresie 24 godzin - 0 bez limitu.</div>';
$txt['setting_warning_decrement'] = 'Punkty ostrze�enia, kt�re mog� przyzna� u�ytkownicy w ciagu 24 godzin<div class="smalltext">dotyczy tylko u�ytkownik�w, kt�rzy nie otrzymali zadnego ostrze�enia przez ostatnie 24H - ustaw na 0 aby wy��czy�.</div>';
$txt['setting_warning_show'] = 'Poka� stan ostrze�e� dla wszyskich u�ytkownik�w<div class="smalltext">Je�li wy��czony, tylko moderatorzy widz� stan ostrze�e� u�ytkownika.</div>';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['signature_settings'] = 'Ustawienia podpisu';
$txt['signature_settings_desc'] = 'Na tej stronie decydujesz o wygl�dzie podpis�w u�ytkownik�w SMF.';
$txt['signature_settings_warning'] = 'Te ustawienia nie dotycz� isniej�cych juz podpis�w. Kliknij <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">tutaj</a> aby zastosowa� regu�y do wszystkich istniej�cych podpis�w.';
$txt['signature_enable'] = 'W�acz podpisy';
$txt['signature_max_length'] = 'Maksymalna dozwolona ilo�� znak�w<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_lines'] = 'Maksymalna ilo�� linii<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_images'] = 'Maksymalna liczba obrazk�w<div class="smalltext">(0=brak limitu - pomija bu�ki)</div>';
$txt['signature_allow_smileys'] = 'Zezw�l na u�ywanie emotikon w sygnaturach';
$txt['signature_max_smileys'] = 'Maksymalna liczba emotikon<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_width'] = 'Maksymalna szeroko�� obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_height'] = 'Maksymalna wysoko�� obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_font_size'] = 'Maksymalny rozmiar czcionki dozwolonej w podpisach<div class="smalltext">(0=brak limitu, w pikselach)</div>';
$txt['signature_bbc'] = 'Tagi BBC w��czone';

$txt['custom_profile_title'] = 'W�asne pola profilu';
$txt['custom_profile_desc'] = 'Na tej stronie mo�esz tworzy� w�asne pola profil�w dopasowane do Twoich wymaga�';
$txt['custom_profile_active'] = 'Aktywne';
$txt['custom_profile_fieldname'] = 'Nazwa pola';
$txt['custom_profile_fieldtype'] = 'Typ pola';
$txt['custom_profile_make_new'] = 'Nowe pole';
$txt['custom_profile_none'] = 'Nie utworzy�e� jeszcze �adnych w�asnych p�l profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'D�ugi tekst';
$txt['custom_profile_type_select'] = 'Lista wyboru';
$txt['custom_profile_type_radio'] = 'Grupa opcji';
$txt['custom_profile_type_check'] = 'Pole wyboru';

$txt['custom_add_title'] = 'Dodaj pole profilu';
$txt['custom_edit_title'] = 'Edytuj pole profilu';
$txt['custom_edit_general'] = 'Poka� ustawienia';
$txt['custom_edit_input'] = 'Dane wej�ciowe';
$txt['custom_edit_advanced'] = 'Zaawansowane ustawienia';
$txt['custom_edit_name'] = 'Nazwa';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Sekcja profilu';
$txt['custom_edit_profile_desc'] = 'Sekcja profilu, gdzie jest edytowany.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Poka� przy rejestracji';
$txt['custom_edit_registration_disable'] = 'Nie';
$txt['custom_edit_registration_allow'] = 'Tak';
$txt['custom_edit_registration_require'] = 'Tak, i wymagaj wpisania';
$txt['custom_edit_display'] = 'Poka� w widoku w�tku';
$txt['custom_edit_picktype'] = 'Typ pola';

$txt['custom_edit_max_length'] = 'Maksymalna d�ugo��';
$txt['custom_edit_max_length_desc'] = '(0=bez limitu)';
$txt['custom_edit_dimension'] = 'Wymiary';
$txt['custom_edit_dimension_row'] = 'Wierszy';
$txt['custom_edit_dimension_col'] = 'Kolumn';
$txt['custom_edit_bbc'] = 'W��cz BBC';
$txt['custom_edit_options'] = 'Opcje';
$txt['custom_edit_options_desc'] = 'Zostaw puste pola aby usun��. Prze��cznik wybiera domy�ln� opcj�.';
$txt['custom_edit_options_more'] = 'Wi�cej';
$txt['custom_edit_default'] = 'Stan domy�lny';
$txt['custom_edit_active'] = 'Aktywne';
$txt['custom_edit_active_desc'] = 'Je�eli nie zaznaczone to pole nie b�dzie pokazywane.';
$txt['custom_edit_privacy'] = 'Prywatno��';
$txt['custom_edit_privacy_desc'] = 'Kto mo�e widzie� i edytowa� to pole.';
$txt['custom_edit_privacy_all'] = 'U�ytkownicy widz� to pole; w�a�ciciel mo�e edytowa�';
$txt['custom_edit_privacy_see'] = 'U�ytkownicy widz� to pole; tylko admini mog� edytowa�';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'To pole widoczne jest tylko dla admin�w';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Prawid�owy Email';
$txt['custom_edit_mask_number'] = 'Numeryczny';
$txt['custom_edit_mask_nohtml'] = 'Brak HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Zaawansowane)';
$txt['custom_edit_enclose'] = 'Poka� za��czony w tek�cie (opcjonalne)';
$txt['custom_edit_enclose_desc'] = '<strong>Sugerujemy</strong>, aby u�y� maski wprowadzania do sprawdzenia danych wprowadzonych przez u�ytkownika.';

$txt['custom_edit_placement'] = 'Wybierz po�o�enie';
$txt['custom_edit_placement_standard'] = 'Standardowe (z tytu�em)';
$txt['custom_edit_placement_withicons'] = 'Z ikonami';
$txt['custom_edit_placement_abovesignature'] = 'Nad sygnatur�';
$txt['custom_profile_placement'] = 'Po�o�enie';
$txt['custom_profile_placement_standard'] = 'Standardowe';
$txt['custom_profile_placement_withicons'] = 'Z ikonami';
$txt['custom_profile_placement_abovesignature'] = 'Nad sygnatur�';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Czy jeste� pewien �e chcesz skasowa� to pole - wszystkie dane zwi�zane z tym polem dane zostan� stracone!';

$txt['standard_profile_title'] = 'Standardowe pola profilu';
$txt['standard_profile_field'] = 'Pola';

$txt['core_settings_welcome_msg'] = 'Witaj w Twoim nowym Forum';
$txt['core_settings_welcome_msg_desc'] = 'By w pe�ni zacz�� korzysta� z forum sugerujemy wybranie, kt�re z cech podstawowych SMF chcesz w��czy�. Polecamy w��czenie tylko tych funkcji kt�re potrzebujesz!';
$txt['core_settings_item_cd'] = 'Kalendarz';
$txt['core_settings_item_cd_desc'] = 'W��czenie tej funkcji otworzy nowe opcje wyboru u�ytkownikom wy�wietlaj�cym kalendarz, dodawanie i przegl�danie zdarze�, pokazywanie urodzin w kalendarzu oraz wiele wi�cej.';
$txt['core_settings_item_cp'] = 'Zaawansowane Pola Profilu';
$txt['core_settings_item_cp_desc'] = 'Opcja pozwala na ukrycie standardowych p�l profilu, dodawanie p�l profilu z rejestracj� oraz tworzenie nowych p�l w profilach twojego forum.';
$txt['core_settings_item_k'] = 'Reputacja';
$txt['core_settings_item_k_desc'] = 'Reputacja jest funkcj� pokazuj�c� popularno�� u�ytkownika. U�ytkownicy, gdy maj� do tego prawo, mog� podzi�kowa� lub nie drugiemu u�ytkownikowi, w taki spos�b zliczana jest popularno��.';
$txt['core_settings_item_ml'] = 'Logi Moderacji';
$txt['core_settings_item_ml_desc'] = 'W��czenie logowania moderacji pomo�e Ci w �ledzeniu wszystkich akcji podejmowych przez moderator�w na forum.';
$txt['core_settings_item_pm'] = 'Moderowanie Wiadomo�ci';
$txt['core_settings_item_pm_desc'] = 'Moderowanie wiadomo�ci zezwala na wybranie grup oraz dzia��w gdzie wiadomo�ci musz� by� zatwierdzone przed ich wy�wietleniem. Po w��czeniu tej opcji odwied� sekcj� zezwole� i ustaw odpowiednie zezwolenia danym grupom/u�ytkownikom.';
$txt['core_settings_item_ps'] = 'P�atna Subskrypcja';
$txt['core_settings_item_ps_desc'] = 'P�atna subskrypcja pozwoli u�ytkownikom op�aci� ich subskrypcj� w celu zmiany obecnej grupy do kt�rej nale�y, a tak�e praw dost�pu z ni� zwi�zanych.';
$txt['core_settings_item_rg'] = 'Generowanie Raport�w';
$txt['core_settings_item_rg_desc'] = 'Ta opcja administracyjna pozwala na generowanie r�znego rodzaju raport�w (kt�re mog� by� wydrukowane) w celu przywr�cenia w �atwy spos�b twoich obecnych ustawie� forum - szczeg�lnie przydatne na du�ych forach.';
$txt['core_settings_item_sp'] = '�ledzenie Silnik�w Wyszukiwarek';
$txt['core_settings_item_sp_desc'] = 'W��czenie tej funkcji pozwoli administratorowi na �ledze silnik�w wyszukiwarek gdy indeksuj� forum.';
$txt['core_settings_item_w'] = 'System Ostrze�e�';
$txt['core_settings_item_w_desc'] = 'Funkcja pozwala Administratorom i Moderatorom na wysy�anie ostrze�e� u�ytkownikom; zawiera tak�e zaawansowane funkcje dla automatycznego usuwania praw u�ytkownika gdy poziom ostrze�enia wzrasta. Uwaga: do pe�nego dzia�ania wymagana jest funkcja &quot;Moderowanie Wiadomo�ci&quot; i musi by� w��czona.';
$txt['core_settings_switch_on'] = 'Kliknij aby w��czy�';
$txt['core_settings_switch_off'] = 'Kliknij aby wy��czy�';
$txt['core_settings_enabled'] = 'W��czony';
$txt['core_settings_disabled'] = 'Wy��czony';

$txt['languages_lang_name'] = 'Nazwa wy�wietlana';
$txt['languages_locale'] = 'Lokalizacja';
$txt['languages_default'] = 'Domy�lny';
$txt['languages_character_set'] = 'Strona kodowa';
$txt['languages_users'] = 'U�ytkownicy';
$txt['language_settings_writable'] = 'Uwaga: Nie mo�na zapisywa� w Settings.php, domy�lne ustawienia nie mog� by� zapami�tane.';
$txt['edit_languages'] = 'Edycja j�zyk�w';
$txt['lang_file_not_writable'] = '<strong>Uwaga:</strong> Podstawowy plik j�zyka (%1$s) jest nie zapisywalny. Musisz umo�liwi� zapis przed dokonaniem zmian.';
$txt['lang_entries_not_writable'] = '<strong>Uwaga:</strong> Plik j�zyka, kt�ry chcesz edytowa� (%1$s) jest nie zapisywalny. Musisz umo�liwi� zapis przed dokonaniem zmian.';
$txt['languages_ltr'] = 'Od prawej do lewej';

$txt['add_language'] = 'Dodaj j�zyk';
$txt['add_language_smf'] = 'Pobierz z Simple Machines';
$txt['add_language_smf_browse'] = 'Wpisz nazw� poszukiwanego jezyka lub pozostaw puste aby wyszuka� wszystkie.';
$txt['add_language_smf_install'] = 'Zainstaluj';
$txt['add_language_smf_found'] = 'Nast�puj�ce j�zyki zosta�y znalezione. Kliknij ��cze Zainstaluj obok wybranego j�zyka, zostaniesz przeniesiony do menad�era aktualizacji pakietu aby zainstalowa�.';
$txt['add_language_error_no_response'] = 'Strona Simple Machines nie odpowiada. Prosz� spr�buj ponownie p�niej.';
$txt['add_language_error_no_files'] = '�adne pliki nie zosta�y znalezione.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Wersja';

$txt['edit_language_entries_primary'] = 'Poni�ej najwa�niejsze ustawienia dla tej paczki j�zykowej.';
$txt['edit_language_entries'] = 'Edytuj plik j�zykowy';
$txt['edit_language_entries_file'] = 'Wybierz plik do edycji';
$txt['languages_dictionary'] = 'S�ownik';
$txt['languages_spelling'] = 'Pisownia';
$txt['languages_for_pspell'] = 'To jest dla <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - je�li zainstalowany';
$txt['languages_rtl'] = 'W��cz tryb &quot;Od prawej do lewej&quot;';

$txt['lang_file_desc_index'] = 'Og�lne zestawy znak�w';
$txt['lang_file_desc_EmailTemplates'] = 'Szablony email';

$txt['languages_download'] = 'Pobierz pakiet j�zykowy';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Notatka:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Pliki podstawowe';
$txt['languages_download_theme_files'] = 'Pliki zwi�zane ze stylem';
$txt['languages_download_filename'] = 'Nazwa pliku';
$txt['languages_download_dest'] = 'Po�o�enie';
$txt['languages_download_writable'] = 'Zapisywalny';
$txt['languages_download_version'] = 'Wersja';
$txt['languages_download_older'] = 'Masz zainstalowan� najnowsz� wersj� tego pliku, nadpisanie nie jest zalecane.';
$txt['languages_download_exists'] = 'Ju� istnieje';
$txt['languages_download_exists_same'] = 'Identyczny';
$txt['languages_download_exists_different'] = 'Inny';
$txt['languages_download_copy'] = 'Kopiuj';
$txt['languages_download_not_chmod'] = 'Nie mo�esz kontynuowa� instalacji dop�ki nie b�dzie mo�liwy zapis wszystkich wybranych plik�w.';
$txt['languages_download_illegal_paths'] = 'Pakiet zawiera nieprawid�owe �cie�ki dost�pu - skontaktuj si� z Simple Machines';
$txt['languages_download_complete'] = 'Instalacja uko�czona';
$txt['languages_download_complete_desc'] = 'Pakiet j�zykowy zainstalowany pomy�lnie. Kliknij <a href="%1$s">tutaj</a> aby wr�ci� do strony j�zyk�w';
$txt['languages_delete_confirm'] = 'Czy jeste� pewien, �e chcesz usun�� ten j�zyk?';

?>