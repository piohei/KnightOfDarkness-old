<?php
// Version: 2.0 RC3; ManageSettings

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modSettings_desc'] = 'Na tej stronie mo¿esz zmieniæ ustawienia funkcji i prostych opcji forum. Przejrzyj <a href="' . $scripturl . '?action=admin;area=theme;sa=settings;th=%1$s;%3$s=%2$s">ustawienia stylów</a> je¶li chcesz zmieniæ inne opcje.  Kliknij na ikony pomocy, je¶li chcesz uzyskaæ wiêcej informacji o jakim¶ ustawieniu.';
$txt['security_settings_desc'] = 'Ta strona umo¿liwia Ci ustawienie opcji szczególnie zwi±zanych z bezpieczeñstwa i moderowaniem twojego forum, z uwzglêdnieniem opcji anty-spam.';
$txt['modification_settings_desc'] = 'Ta strona zawiera ustawienie dodane do twojego forum przez modyfikacje';

$txt['modification_no_misc_settings'] = 'Nie ma jeszcze zainstalowanych ¿adnych modyfikacji, aby móc dodaæ jakie¶ ustawienia.';

$txt['pollMode'] = 'Tryb ankiety';
$txt['disable_polls'] = 'Wy³±cz ankiety';
$txt['enable_polls'] = 'W³±cz ankiety';
$txt['polls_as_topics'] = 'Wy¶wietl istniej±ce ankiety jako w±tki';
$txt['allow_guestAccess'] = 'Pozwól go¶ciom przegl±daæ forum';
$txt['userLanguage'] = 'Pozwól u¿ytkownikom wybraæ jêzyk forum';
$txt['allow_editDisplayName'] = 'Pozwól u¿ytkownikom na zmianê ich wy¶wietlanej nazwy';
$txt['allow_hideOnline'] = 'Pozwól nie-administratorom ukryæ swój status online';
$txt['guest_hideContacts'] = 'Nie pokazuj go¶ciom danych kontaktowych u¿ytkowników';
$txt['titlesEnable'] = 'W³±cz tytu³y osobiste';
$txt['enable_buddylist'] = 'W³±cz listê znajomych/ignorowanych';
$txt['default_personal_text'] = 'Domy¶lny tekst osobisty';
$txt['number_format'] = 'Domy¶lny format liczb';
$txt['time_format'] = 'Domy¶lny format czasu';
$txt['setting_time_offset'] = 'Generalne przesuniêcie czasu<div class="smalltext">(modyfikacja tej warto¶ci zmieni ustawienia u wszystkich.)</div>';
$txt['setting_default_timezone'] = 'Serwer czasu';
$txt['failed_login_threshold'] = 'Dopuszczalna ilo¶æ prób zalogowania';
$txt['lastActive'] = 'Ilo¶æ w minutach do pokazania, ¿e u¿ytkownik jest aktywny';
$txt['trackStats'] = '¦led¼ statystykê dni';
$txt['hitStats'] = '¦led¼ ilo¶æ wej¶æ na dzieñ (statystyki musz± byæ w³±czone)';
$txt['enableCompressedOutput'] = 'W³±cz kompresjê';
$txt['disableTemplateEval'] = 'Wy³±cz ocenê szablonów';
$txt['databaseSession_enable'] = 'Informacje o sesjach w bazie danych';
$txt['databaseSession_loose'] = 'Zezwól przegl±darkom wracaæ do stron zachowanych w cache';
$txt['databaseSession_lifetime'] = 'Sekund do wyga¶niêcia nieaktywnej sesji';
$txt['enableErrorLogging'] = 'W³±cz raportowanie b³êdów';
$txt['enableErrorQueryLogging'] = 'Uwzglêdnij zapytania bazy danych w dzienniku b³êdów';
$txt['pruningOptions'] = 'W³±cz czyszczenie logów';
$txt['pruneErrorLog'] = 'Usuwaj± logi b³êdów starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['pruneModLog'] = 'Usuñ logi moderacji starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['pruneBanLog'] = 'Usuñ wpisy banów z logu starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['pruneReportLog'] = 'Usuñ raporty moderacji starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['pruneScheduledTaskLog'] = 'Usuñ logi zaplanowanych zadañ starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['pruneSpiderHitLog'] = 'Usuñ logi aktywno¶ci wyszukiwarek starsze ni¿:<div class="smalltext">(0 wy³±czone)</div>';
$txt['cookieTime'] = 'Domy¶lny czas zalogowania (w minutach)';
$txt['localCookies'] = 'W³±cz lokalne przechowywanie plików cookie<div class="smalltext">(SSI nie dzia³a z t± opcj±.)</div>';
$txt['globalCookies'] = 'U¿ywaj plików cookie niezale¿nych od subdomeny<div class="smalltext">(najpierw wy³±cz lokalne pliki cookie!)</div>';
$txt['secureCookies'] = 'Wymu¶ ciasteczka w celu bezpieczeñstwa<div class="smalltext">(Mo¿liwo¶æ w³±czenia je¶li u¿ywasz HTTPS - w przeciwnym wypadku nie korzystaj z tej opcji!)</div>';
$txt['securityDisable'] = 'Wy³±cz dodatkowe sprawdzanie has³a w centrum administracji';
$txt['send_validation_onChange'] = 'Ponowna aktywacja konta po zmianie adresu email';
$txt['approveAccountDeletion'] = 'Wymagaj zgody administratora gdy u¿ytkownik chce usun±æ swoje konto';
$txt['autoOptMaxOnline'] = 'Maksymalna ilo¶æ u¿ytkowników online podczas optymalizacji<div class="smalltext">(0 dla nieograniczonej)</div>';
$txt['autoFixDatabase'] = 'Automatycznie naprawiaj uszkodzone tabele';
$txt['allow_disableAnnounce'] = 'Zezwól u¿ytkownikom na wy³±czenie og³oszeñ';
$txt['disallow_sendBody'] = 'Wy³±cz tre¶æ wiadomo¶ci w powiadomieniach';
$txt['queryless_urls'] = 'Wy¶wietlaj adresy przyjazne wyszukiwarkom<div class="smalltext"><strong>dzia³a tylko w Apache!</strong></div>';
$txt['max_image_width'] = 'Maksymalna szeroko¶æ obrazków w wiadomo¶ciach (0 = wy³±cz)';
$txt['max_image_height'] = 'Maksymalna wysoko¶æ obrazków w wiadomo¶ciach (0 = wy³±cz)';
$txt['enableReportPM'] = 'W³±cz zg³aszanie prywatnych wiadomo¶ci administracji';
$txt['max_pm_recipients'] = 'Maksymalna dozwolona liczba odbiorców przy wysy³aniu prywatnych wiadomo¶ci.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_verification'] = 'Liczba wiadomo¶ci poni¿ej której u¿ytkownik musi wpisaæ kod weryfikacyjny, aby wys³aæ prywatn± wiadomo¶æ.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['pm_posts_per_hour'] = 'Liczba prywatnych wiadomo¶ci jak± u¿ytkownik mo¿e wys³aæ w ci±gu godziny.<div class="smalltext">(0 - bez limitu, nie dotyczy administratorów)</div>';
$txt['compactTopicPagesEnable'] = 'Ogranicz liczbê wy¶wietlanych odno¶ników do stron';
$txt['contiguous_page_display'] = 'Ilo¶æ kolejno wy¶wietlanych stron';
$txt['to_display'] = 'wy¶wietla';
$txt['todayMod'] = 'W³±cz funkcjê &quot;Dzisiaj&quot;';
$txt['today_disabled'] = 'Wy³±czona';
$txt['today_only'] = 'Tylko Dzisiaj';
$txt['yesterday_today'] = 'Dzisiaj i Wczoraj';
$txt['topbottomEnable'] = 'W³±cz przyciski Id¼ do góry/do do³u';
$txt['onlineEnable'] = 'Pokazuj status online/offline u¿ytkownika w wiadomo¶ciach i PW';
$txt['enableVBStyleLogin'] = 'Poka¿ pole szybkiego logowania na ka¿dej stronie';
$txt['defaultMaxMembers'] = 'Ilo¶æ u¿ytkowników na stronê w li¶cie u¿ytkowników';
$txt['timeLoadPageEnable'] = 'Wy¶wietlaj czas generacji strony';
$txt['disableHostnameLookup'] = 'Wy³±cz sprawdzanie dostawcy internetowego';
$txt['who_enabled'] = 'W³±cz listê u¿ytkowników online';
$txt['make_email_viewable'] = 'Zezwól na wy¶wietlanie adresu email.';
$txt['meta_keywords'] = 'Znaczniki Meta powi±zane z forum.<div class="smalltext">Dla wyszukiwarek, zostaw pole puste aby u¿yæ domy¶lnych znaczników.</div>';

$txt['karmaMode'] = 'Tryb reputacji';
$txt['karma_options'] = 'Wy³±cz reputacjê|W³±cz ca³kowit± reputacjê|W³±cz pozytywn±/negatywn± reputacjê';
$txt['karmaMinPosts'] = 'Minimalna ilo¶æ wiadomo¶ci potrzebna do zmiany reputacji';
$txt['karmaWaitTime'] = 'Czas oczekiwania w godzinach';
$txt['karmaTimeRestrictAdmins'] = 'Podporz±dkuj administratorów czasowi oczekiwania';
$txt['karmaLabel'] = 'Nazwa reputacji';
$txt['karmaApplaudLabel'] = 'Etykieta poparcia';
$txt['karmaSmiteLabel'] = 'Etykieta potêpienia';

$txt['caching_information'] = '<div align="aligncenter underline"><strong><u>Wa¿ne!</u> Przeczytaj to zanim w³±czysz poni¿sze opcje.</strong></div><br />
	SMF obs³uguje cache u¿ywaj±c akceleratorów. Aktualnie obs³ugiwane akceleratory to:<br />
	<ul class="normallist">
		<li>APC</li>
		<li>eAccelerator</li>
		<li>Turck MMCache</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
                <li>XCache</li>
	</ul>
	Cache bêdzie dzia³aæ na Twoim serwerze tylko je¶li PHP bêdzie skompilowane z jednym z wy¿ej wymienionych akceleratorów lub z
	w³±czonym memcache. Je¶li nie posiadasz zainstalowanego ¿adnego akceleratora, SMF bêdzie polegaæ na opcji cache w pliku.<br /><br />
	SMF pozwala na aktywacjê cache na ró¿nych poziomach. Im wy¿szy poziom cache, tym wiêcej czasu procesora bêdzie zu¿ywane na odczytanie
	informacji cache. Je¶li na Twojej maszynie jest uaktywnione cache, zaleca siê rozpocz±æ od ustawienia poziomu 1.
	<br /><br />
	Pamiêtaj, ¿e je¶li u¿ywasz memcache, musisz podaæ parametry serwera w ustawieniach poni¿ej. Powinny byæ one podane w formie oddzielonej przecinkami listy,
	tak jak na poni¿szym przyk³adzie:<br />
	&quot;serwer1,serwer2,serwer3:port,serwer4&quot;<br /><br />
	Je¶li port nie zostanie podany, SMF u¿yje portu 11211. SMF bêdzie próbowaæ wymuszonego lub losowego roz³o¿enia obci±¿enia pomiêdzy serwerami.
	<br /><br />
	%1$s';

$txt['detected_no_caching'] = '<strong class="alert">SMF nie jest w stanie wykryæ na Twoim serwerze kompatybilnego akceleratora.</strong>';
$txt['detected_APC'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany APC.</strong>';
$txt['detected_eAccelerator'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany eAccelerator.</strong>';
$txt['detected_MMCache'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany MMCache.</strong>';
$txt['detected_Zend'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany Zend.</strong> ';
$txt['detected_Memcached'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany Memcached.</strong> ';
$txt['detected_XCache'] = '<strong style="color: green">SMF wykry³, ¿e na Twoim serwerze jest zainstalowany XCache.</strong>';

$txt['cache_enable'] = 'Poziom cache';
$txt['cache_off'] = 'Wy³±cz cache';
$txt['cache_level1'] = 'Poziom 1';
$txt['cache_level2'] = 'Poziom 2 (nie polecany)';
$txt['cache_level3'] = 'Poziom 3 (nie polecany)';
$txt['cache_memcached'] = 'Ustawienia Memcache';

$txt['loadavg_warning'] = '<span class="error">Uwaga: poni¿sze ustawienia musz± byæ edytowane z ostro¿no¶ci±. Ustawienie ich na niskim poziomie mo¿e spowodowaæ, ¿e forum bêdzie ¼le renderowane i bêdzie <strong>bezu¿yteczne</strong>! Obecnie ¶rednie ³adowanie jest <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'W³±cz równowa¿enie obci±¿enia przez ¶rednie obci±¿enie';
$txt['loadavg_auto_opt'] = 'Próg automatycznego wy³±czenia optymalizacji bazy danych';
$txt['loadavg_search'] = 'Próg wy³±czenia wyszukiwania';
$txt['loadavg_allunread'] = 'Próg wy³±czenia wszystkich nieprzeczytanych w±tków';
$txt['loadavg_unreadreplies'] = 'Próg wy³±czenia nieprzeczytanych odpowiedzi';
$txt['loadavg_show_posts'] = 'Próg do wy³±czania pokazywanych wiadomo¶ci u¿ytkownika';
$txt['loadavg_forum'] = 'Próg <strong>ca³kowitego</strong> wy³±czenia forum';
$txt['loadavg_disabled_windows'] = '<span class="error">Wsparcie dla zbalansowanego ³adowania nie jest dostêpne w Windows.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Wsparcie dla zbalansowanego ³adowania jest wy³±czone w konfiguracji Twojego hosta.</span>';

$txt['setting_password_strength'] = 'Wymagana si³a hase³ u¿ytkowników';
$txt['setting_password_strength_low'] = 'Niska - minimum 4 znaki';
$txt['setting_password_strength_medium'] = '¦rednia - nie mo¿e zawieraæ nazwy u¿ytkownika';
$txt['setting_password_strength_high'] = 'Wysoka - mieszanka ró¿nych znaków';

$txt['antispam_Settings'] = 'Weryfikacja Anti-Spam';
$txt['antispam_Settings_desc'] = 'Ta sekcja pozwala na ustawienie kontroli weryfikacji aby zapewniæ ciê ¿e u¿ytkownik to cz³owiek (a nie bot), i w jaki sposób i gdzie siê stosuje.';
$txt['setting_reg_verification'] = 'Wymagaj weryfikacji na stronie rejestracji';
$txt['posts_require_captcha'] = 'Liczba wiadomo¶ci, poni¿ej której u¿ytkownicy musz± przej¶æ weryfikacjê aby utworzyæ wiadomo¶æ';
$txt['posts_require_captcha_desc'] = '(0 - bez limitu, nie dotyczy moderatorów)';
$txt['search_enable_captcha'] = 'Wymagaj weryfikacji przy przeszukiwaniu przez wszystkich go¶ci';
$txt['setting_guests_require_captcha'] = 'Go¶cie musz± przej¶æ weryfikacjê kiedy tworz± wiadomo¶æ';
$txt['setting_guests_require_captcha_desc'] = '(Automatycznie ustawione, je¶li okre¶li³e¶ minimaln± liczbê wiadomo¶ci poni¿ej)';
$txt['guests_report_require_captcha'] = 'Go¶æ musi przej¶æ przez weryfikacje gdy raportuje wiadomo¶æ';

$txt['configure_verification_means'] = 'Konfiguracja metod weryfikacji';
$txt['setting_qa_verification_number'] = 'Liczba pytañ weryfikacyjnych na które u¿ytkownik musi odpowiedzieæ';
$txt['setting_qa_verification_number_desc'] = '(0 aby wy³±czyæ; pytania s± ustawiane poni¿ej)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Below you can set which anti-spam features you wish to have enabled whenever a user needs to verify they are a human. Note that the user will have to pass <em>all</em> verification so if you enable both a verification image and a question/answer test they need to complete both to proceed.</span>';
$txt['setting_visual_verification_type'] = 'Z³o¿ono¶æ obrazka do weryfikacji (CAPTCHA)';
$txt['setting_visual_verification_type_desc'] = 'Im bardziej obraz jest z³o¿ony, tym trudniejsze jest obej¶cie go przez boty';
$txt['setting_image_verification_off'] = 'Wy³±cz';
$txt['setting_image_verification_vsimple'] = 'Bardzo prosty - Sam tekst';
$txt['setting_image_verification_simple'] = 'Prosty - Nachodz±ce na siebie kolorowe litery, bez szumu';
$txt['setting_image_verification_medium'] = '¦redni - Nachodz±ce na siebie kolorowe litery, z szumem';
$txt['setting_image_verification_high'] = 'Trudny - Pochylone litery, znaczny szum';
$txt['setting_image_verification_extreme'] = 'Ekstremalny - Pochylone litery, szum, linie i kszta³ty.';
$txt['setting_image_verification_sample'] = 'Przyk³ad';
$txt['setting_image_verification_nogd'] = '<strong>Uwaga:</strong> ustawienie z³o¿ono¶ci nie ma znaczenia, poniewa¿ serwer nie ma zainstalowanej biblioteki GD.';
$txt['setup_verification_questions'] = 'Pytania kontrolne';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">If you want users to answer verification questions in order to stop spam bots powiniene¶ ustawiæ kilka pytañ w tabeli poni¿ej. You should pick relatively simple questions; answers are not case sensitive. Mo¿esz u¿ywaæ tagów BBC aby sformatowaæ pytania, aby usun±æ pytanie poprostu wyczyæ zawarto¶æ tej linii.</span>';
$txt['setup_verification_question'] = 'Pytanie';
$txt['setup_verification_answer'] = 'Odpowied¼';
$txt['setup_verification_add_more'] = 'Dodaj kolejne pytanie';

$txt['moderation_settings'] = 'Ustawienia moderacji';
$txt['setting_warning_enable'] = 'W³±cz system ostrze¿eñ u¿ytkownika';
$txt['setting_warning_watch'] = 'Poziom Ostrze¿enia - U¿ytkownik jest obserwowany<div class="smalltext">Warto¶æ poziomu ostrze¿enia, powy¿ej którego, u¿ytkownik zostanie dodany do listy obserwowanych u¿ytkowników - 0 aby wy³±czyæ.</div>';
$txt['setting_warning_moderate'] = 'Poziom Ostrze¿enia - wiadomo¶ci u¿ytkownika s± moderowane<div class="smalltext">Warto¶æ poziomu ostrze¿enia, powy¿ej którego, wszystke wiadomo¶ci u¿ytkownika s± moderowane - 0 aby wy³±czyæ.</div>';
$txt['setting_warning_mute'] = 'Poziom Ostrze¿enia - U¿ytkownik nie mo¿e pisaæ postów<div class="smalltext">Warto¶æ poziomu ostrze¿enia, powy¿ej którego, uzytkownik nie mo¿e pisaæ postów - 0 aby wy³±czyæ.</div>';
$txt['setting_user_limit'] = 'Maksymalna ilo¶æ punktów ostrze¿enia na dzieñ<div class="smalltext">Ta warto¶æ, to maksymalna ilo¶æ punktów ostrze¿enia, jakie jeden moderator mo¿e przyznaæ u¿ytkownikowi w okresie 24 godzin - 0 bez limitu.</div>';
$txt['setting_warning_decrement'] = 'Punkty ostrze¿enia, które mog± przyznaæ u¿ytkownicy w ciagu 24 godzin<div class="smalltext">dotyczy tylko u¿ytkowników, którzy nie otrzymali zadnego ostrze¿enia przez ostatnie 24H - ustaw na 0 aby wy³±czyæ.</div>';
$txt['setting_warning_show'] = 'Poka¿ stan ostrze¿eñ dla wszyskich u¿ytkowników<div class="smalltext">Je¶li wy³±czony, tylko moderatorzy widz± stan ostrze¿eñ u¿ytkownika.</div>';
$txt['setting_warning_show_mods'] = 'Moderators Only';
$txt['setting_warning_show_user'] = 'Moderators and Warned Users';
$txt['setting_warning_show_all'] = 'All Users';

$txt['signature_settings'] = 'Ustawienia podpisu';
$txt['signature_settings_desc'] = 'Na tej stronie decydujesz o wygl±dzie podpisów u¿ytkowników SMF.';
$txt['signature_settings_warning'] = 'Te ustawienia nie dotycz± isniej±cych juz podpisów. Kliknij <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">tutaj</a> aby zastosowaæ regu³y do wszystkich istniej±cych podpisów.';
$txt['signature_enable'] = 'W³acz podpisy';
$txt['signature_max_length'] = 'Maksymalna dozwolona ilo¶æ znaków<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_lines'] = 'Maksymalna ilo¶æ linii<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_images'] = 'Maksymalna liczba obrazków<div class="smalltext">(0=brak limitu - pomija bu¼ki)</div>';
$txt['signature_allow_smileys'] = 'Zezwól na u¿ywanie emotikon w sygnaturach';
$txt['signature_max_smileys'] = 'Maksymalna liczba emotikon<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_width'] = 'Maksymalna szeroko¶æ obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_image_height'] = 'Maksymalna wysoko¶æ obrazka w podpisie (w pikselach)<div class="smalltext">(0=brak limitu)</div>';
$txt['signature_max_font_size'] = 'Maksymalny rozmiar czcionki dozwolonej w podpisach<div class="smalltext">(0=brak limitu, w pikselach)</div>';
$txt['signature_bbc'] = 'Tagi BBC w³±czone';

$txt['custom_profile_title'] = 'W³asne pola profilu';
$txt['custom_profile_desc'] = 'Na tej stronie mo¿esz tworzyæ w³asne pola profilów dopasowane do Twoich wymagañ';
$txt['custom_profile_active'] = 'Aktywne';
$txt['custom_profile_fieldname'] = 'Nazwa pola';
$txt['custom_profile_fieldtype'] = 'Typ pola';
$txt['custom_profile_make_new'] = 'Nowe pole';
$txt['custom_profile_none'] = 'Nie utworzy³e¶ jeszcze ¿adnych w³asnych pól profilu!';
$txt['custom_profile_icon'] = 'Ikona';

$txt['custom_profile_type_text'] = 'Tekst';
$txt['custom_profile_type_textarea'] = 'D³ugi tekst';
$txt['custom_profile_type_select'] = 'Lista wyboru';
$txt['custom_profile_type_radio'] = 'Grupa opcji';
$txt['custom_profile_type_check'] = 'Pole wyboru';

$txt['custom_add_title'] = 'Dodaj pole profilu';
$txt['custom_edit_title'] = 'Edytuj pole profilu';
$txt['custom_edit_general'] = 'Poka¿ ustawienia';
$txt['custom_edit_input'] = 'Dane wej¶ciowe';
$txt['custom_edit_advanced'] = 'Zaawansowane ustawienia';
$txt['custom_edit_name'] = 'Nazwa';
$txt['custom_edit_desc'] = 'Opis';
$txt['custom_edit_profile'] = 'Sekcja profilu';
$txt['custom_edit_profile_desc'] = 'Sekcja profilu, gdzie jest edytowany.';
$txt['custom_edit_profile_none'] = 'None';
$txt['custom_edit_registration'] = 'Poka¿ przy rejestracji';
$txt['custom_edit_registration_disable'] = 'Nie';
$txt['custom_edit_registration_allow'] = 'Tak';
$txt['custom_edit_registration_require'] = 'Tak, i wymagaj wpisania';
$txt['custom_edit_display'] = 'Poka¿ w widoku w±tku';
$txt['custom_edit_picktype'] = 'Typ pola';

$txt['custom_edit_max_length'] = 'Maksymalna d³ugo¶æ';
$txt['custom_edit_max_length_desc'] = '(0=bez limitu)';
$txt['custom_edit_dimension'] = 'Wymiary';
$txt['custom_edit_dimension_row'] = 'Wierszy';
$txt['custom_edit_dimension_col'] = 'Kolumn';
$txt['custom_edit_bbc'] = 'W³±cz BBC';
$txt['custom_edit_options'] = 'Opcje';
$txt['custom_edit_options_desc'] = 'Zostaw puste pola aby usun±æ. Prze³±cznik wybiera domy¶ln± opcjê.';
$txt['custom_edit_options_more'] = 'Wiêcej';
$txt['custom_edit_default'] = 'Stan domy¶lny';
$txt['custom_edit_active'] = 'Aktywne';
$txt['custom_edit_active_desc'] = 'Je¿eli nie zaznaczone to pole nie bêdzie pokazywane.';
$txt['custom_edit_privacy'] = 'Prywatno¶æ';
$txt['custom_edit_privacy_desc'] = 'Kto mo¿e widzieæ i edytowaæ to pole.';
$txt['custom_edit_privacy_all'] = 'U¿ytkownicy widz± to pole; w³a¶ciciel mo¿e edytowaæ';
$txt['custom_edit_privacy_see'] = 'U¿ytkownicy widz± to pole; tylko admini mog± edytowaæ';
$txt['custom_edit_privacy_owner'] = 'Users cannot see this field; owner and admins can edit it.';
$txt['custom_edit_privacy_none'] = 'To pole widoczne jest tylko dla adminów';
$txt['custom_edit_can_search'] = 'Searchable';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list.';
$txt['custom_edit_mask'] = 'Input Mask';
$txt['custom_edit_mask_desc'] = 'For text fields an input mask can be selected to validate the data.';
$txt['custom_edit_mask_email'] = 'Prawid³owy Email';
$txt['custom_edit_mask_number'] = 'Numeryczny';
$txt['custom_edit_mask_nohtml'] = 'Brak HTML';
$txt['custom_edit_mask_regex'] = 'Regex (Zaawansowane)';
$txt['custom_edit_enclose'] = 'Poka¿ za³±czony w tek¶cie (opcjonalne)';
$txt['custom_edit_enclose_desc'] = '<strong>Sugerujemy</strong>, aby u¿yæ maski wprowadzania do sprawdzenia danych wprowadzonych przez u¿ytkownika.';

$txt['custom_edit_placement'] = 'Wybierz po³o¿enie';
$txt['custom_edit_placement_standard'] = 'Standardowe (z tytu³em)';
$txt['custom_edit_placement_withicons'] = 'Z ikonami';
$txt['custom_edit_placement_abovesignature'] = 'Nad sygnatur±';
$txt['custom_profile_placement'] = 'Po³o¿enie';
$txt['custom_profile_placement_standard'] = 'Standardowe';
$txt['custom_profile_placement_withicons'] = 'Z ikonami';
$txt['custom_profile_placement_abovesignature'] = 'Nad sygnatur±';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Czy jeste¶ pewien ¿e chcesz skasowaæ to pole - wszystkie dane zwi±zane z tym polem dane zostan± stracone!';

$txt['standard_profile_title'] = 'Standardowe pola profilu';
$txt['standard_profile_field'] = 'Pola';

$txt['core_settings_welcome_msg'] = 'Witaj w Twoim nowym Forum';
$txt['core_settings_welcome_msg_desc'] = 'By w pe³ni zacz±æ korzystaæ z forum sugerujemy wybranie, które z cech podstawowych SMF chcesz w³±czyæ. Polecamy w³±czenie tylko tych funkcji które potrzebujesz!';
$txt['core_settings_item_cd'] = 'Kalendarz';
$txt['core_settings_item_cd_desc'] = 'W³±czenie tej funkcji otworzy nowe opcje wyboru u¿ytkownikom wy¶wietlaj±cym kalendarz, dodawanie i przegl±danie zdarzeñ, pokazywanie urodzin w kalendarzu oraz wiele wiêcej.';
$txt['core_settings_item_cp'] = 'Zaawansowane Pola Profilu';
$txt['core_settings_item_cp_desc'] = 'Opcja pozwala na ukrycie standardowych pól profilu, dodawanie pól profilu z rejestracj± oraz tworzenie nowych pól w profilach twojego forum.';
$txt['core_settings_item_k'] = 'Reputacja';
$txt['core_settings_item_k_desc'] = 'Reputacja jest funkcj± pokazuj±c± popularno¶æ u¿ytkownika. U¿ytkownicy, gdy maj± do tego prawo, mog± podziêkowaæ lub nie drugiemu u¿ytkownikowi, w taki sposób zliczana jest popularno¶æ.';
$txt['core_settings_item_ml'] = 'Logi Moderacji';
$txt['core_settings_item_ml_desc'] = 'W³±czenie logowania moderacji pomo¿e Ci w ¶ledzeniu wszystkich akcji podejmowych przez moderatorów na forum.';
$txt['core_settings_item_pm'] = 'Moderowanie Wiadomo¶ci';
$txt['core_settings_item_pm_desc'] = 'Moderowanie wiadomo¶ci zezwala na wybranie grup oraz dzia³ów gdzie wiadomo¶ci musz± byæ zatwierdzone przed ich wy¶wietleniem. Po w³±czeniu tej opcji odwied¼ sekcjê zezwoleñ i ustaw odpowiednie zezwolenia danym grupom/u¿ytkownikom.';
$txt['core_settings_item_ps'] = 'P³atna Subskrypcja';
$txt['core_settings_item_ps_desc'] = 'P³atna subskrypcja pozwoli u¿ytkownikom op³aciæ ich subskrypcjê w celu zmiany obecnej grupy do której nale¿y, a tak¿e praw dostêpu z ni± zwi±zanych.';
$txt['core_settings_item_rg'] = 'Generowanie Raportów';
$txt['core_settings_item_rg_desc'] = 'Ta opcja administracyjna pozwala na generowanie róznego rodzaju raportów (które mog± byæ wydrukowane) w celu przywrócenia w ³atwy sposób twoich obecnych ustawieñ forum - szczególnie przydatne na du¿ych forach.';
$txt['core_settings_item_sp'] = '¦ledzenie Silników Wyszukiwarek';
$txt['core_settings_item_sp_desc'] = 'W³±czenie tej funkcji pozwoli administratorowi na ¶ledze silników wyszukiwarek gdy indeksuj± forum.';
$txt['core_settings_item_w'] = 'System Ostrze¿eñ';
$txt['core_settings_item_w_desc'] = 'Funkcja pozwala Administratorom i Moderatorom na wysy³anie ostrze¿eñ u¿ytkownikom; zawiera tak¿e zaawansowane funkcje dla automatycznego usuwania praw u¿ytkownika gdy poziom ostrze¿enia wzrasta. Uwaga: do pe³nego dzia³ania wymagana jest funkcja &quot;Moderowanie Wiadomo¶ci&quot; i musi byæ w³±czona.';
$txt['core_settings_switch_on'] = 'Kliknij aby w³±czyæ';
$txt['core_settings_switch_off'] = 'Kliknij aby wy³±czyæ';
$txt['core_settings_enabled'] = 'W³±czony';
$txt['core_settings_disabled'] = 'Wy³±czony';

$txt['languages_lang_name'] = 'Nazwa wy¶wietlana';
$txt['languages_locale'] = 'Lokalizacja';
$txt['languages_default'] = 'Domy¶lny';
$txt['languages_character_set'] = 'Strona kodowa';
$txt['languages_users'] = 'U¿ytkownicy';
$txt['language_settings_writable'] = 'Uwaga: Nie mo¿na zapisywaæ w Settings.php, domy¶lne ustawienia nie mog± byæ zapamiêtane.';
$txt['edit_languages'] = 'Edycja jêzyków';
$txt['lang_file_not_writable'] = '<strong>Uwaga:</strong> Podstawowy plik jêzyka (%1$s) jest nie zapisywalny. Musisz umo¿liwiæ zapis przed dokonaniem zmian.';
$txt['lang_entries_not_writable'] = '<strong>Uwaga:</strong> Plik jêzyka, który chcesz edytowaæ (%1$s) jest nie zapisywalny. Musisz umo¿liwiæ zapis przed dokonaniem zmian.';
$txt['languages_ltr'] = 'Od prawej do lewej';

$txt['add_language'] = 'Dodaj jêzyk';
$txt['add_language_smf'] = 'Pobierz z Simple Machines';
$txt['add_language_smf_browse'] = 'Wpisz nazwê poszukiwanego jezyka lub pozostaw puste aby wyszukaæ wszystkie.';
$txt['add_language_smf_install'] = 'Zainstaluj';
$txt['add_language_smf_found'] = 'Nastêpuj±ce jêzyki zosta³y znalezione. Kliknij ³±cze Zainstaluj obok wybranego jêzyka, zostaniesz przeniesiony do menad¿era aktualizacji pakietu aby zainstalowaæ.';
$txt['add_language_error_no_response'] = 'Strona Simple Machines nie odpowiada. Proszê spróbuj ponownie pó¼niej.';
$txt['add_language_error_no_files'] = '¯adne pliki nie zosta³y znalezione.';
$txt['add_language_smf_desc'] = 'Opis';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Wersja';

$txt['edit_language_entries_primary'] = 'Poni¿ej najwa¿niejsze ustawienia dla tej paczki jêzykowej.';
$txt['edit_language_entries'] = 'Edytuj plik jêzykowy';
$txt['edit_language_entries_file'] = 'Wybierz plik do edycji';
$txt['languages_dictionary'] = 'S³ownik';
$txt['languages_spelling'] = 'Pisownia';
$txt['languages_for_pspell'] = 'To jest dla <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> - je¶li zainstalowany';
$txt['languages_rtl'] = 'W³±cz tryb &quot;Od prawej do lewej&quot;';

$txt['lang_file_desc_index'] = 'Ogólne zestawy znaków';
$txt['lang_file_desc_EmailTemplates'] = 'Szablony email';

$txt['languages_download'] = 'Pobierz pakiet jêzykowy';
$txt['languages_download_note'] = 'This page lists all the files that are contained within the language pack and some useful information about each one. All files that have their associated check box marked will be copied.';
$txt['languages_download_info'] = '<strong>Notatka:</strong>
	<ul class="normallist">
		<li>Files which have the status &quot;Not Writable&quot; means SMF will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last SMF version which it was updated for. If it is indicated in green then this is a newer version than you have at current. If amber this indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>Where a file already exists on your forum the &quot;Already Exists&quot; column will have one of two values. &quot;Identical&quot; indicates that the file already exists in an identical form and need not be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Pliki podstawowe';
$txt['languages_download_theme_files'] = 'Pliki zwi±zane ze stylem';
$txt['languages_download_filename'] = 'Nazwa pliku';
$txt['languages_download_dest'] = 'Po³o¿enie';
$txt['languages_download_writable'] = 'Zapisywalny';
$txt['languages_download_version'] = 'Wersja';
$txt['languages_download_older'] = 'Masz zainstalowan± najnowsz± wersjê tego pliku, nadpisanie nie jest zalecane.';
$txt['languages_download_exists'] = 'Ju¿ istnieje';
$txt['languages_download_exists_same'] = 'Identyczny';
$txt['languages_download_exists_different'] = 'Inny';
$txt['languages_download_copy'] = 'Kopiuj';
$txt['languages_download_not_chmod'] = 'Nie mo¿esz kontynuowaæ instalacji dopóki nie bêdzie mo¿liwy zapis wszystkich wybranych plików.';
$txt['languages_download_illegal_paths'] = 'Pakiet zawiera nieprawid³owe ¶cie¿ki dostêpu - skontaktuj siê z Simple Machines';
$txt['languages_download_complete'] = 'Instalacja ukoñczona';
$txt['languages_download_complete_desc'] = 'Pakiet jêzykowy zainstalowany pomy¶lnie. Kliknij <a href="%1$s">tutaj</a> aby wróciæ do strony jêzyków';
$txt['languages_delete_confirm'] = 'Czy jeste¶ pewien, ¿e chcesz usun±æ ten jêzyk?';

?>