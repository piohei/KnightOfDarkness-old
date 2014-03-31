<?php
// Version: 2.0 RC3; Errors

global $scripturl, $modSettings;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['no_access'] = 'Nie masz dost�pu do tej sekcji';
$txt['wireless_error_notyet'] = 'Przepraszamy, w tym momencie ta sekcja nie jest dost�pna dla u�ytkownik�w trybu bezprzewodowego.';

$txt['mods_only'] = 'Tylko moderatorzy mog� usuwa� wiadomo�ci, wykasuj swoj� wiadomo�� u�ywaj�c funkcji &quot;Zmie�&quot;.';
$txt['no_name'] = 'Nie wpisa�e� nazwy u�ytkownika - jest to wymagane.';
$txt['no_email'] = 'Nie wpisa�e� adresu email - jest to wymagane.';
$txt['topic_locked'] = 'Ten w�tek jest zamkni�ty, nie masz zezwolenia na wysy�anie lub modyfikacj� wiadomo�ci...';
$txt['no_password'] = 'Pole has�a puste';
$txt['already_a_user'] = 'Nazwa u�ytkownika, kt�rej pr�bowa�e� jest ju� zaj�ta.';
$txt['cant_move'] = 'Nie masz zezwolenia na przenoszenie w�tk�w...';
$txt['login_to_post'] = 'Musisz by� zalogowany aby wysy�a� wiadomo�ci. Je�li nie masz jeszcze konta, <a href="' . $scripturl . '?action=register">zarejestruj si�</a>.';
$txt['passwords_dont_match'] = 'Has�a nie s� identyczne.';
$txt['register_to_use'] = 'Musisz si� zarejestrowa�, zanim b�dziesz m�g� korzysta� z tej opcji.';
$txt['password_invalid_character'] = 'Niedozwolony znak w ha�le.';
$txt['name_invalid_character'] = 'Niedozwolony znak w nazwie u�ytkownika.';
$txt['email_invalid_character'] = 'Niedozwolony znak w adresie email.';
$txt['username_reserved'] = 'Nazwa u�ytkownika, kt�rej pr�bowa�e� zawiera zarezerwowan� nazw� %1$s\'. Spr�buj jeszcze raz.';
$txt['numbers_one_to_nine'] = 'W to pole mo�na wpisywa� tylko cyfry od 0 do 9';
$txt['not_a_user'] = 'Profil u�ytkownika, kt�ry pr�bujesz przegl�da� nie istnieje.';
$txt['not_a_topic'] = 'W�tek nie istnieje.';
$txt['not_approved_topic'] = 'Ten w�tek nie zosta� jeszcze zaakceptowany.';
$txt['email_in_use'] = 'Podany adres email (%1$s) jest u�ywany przez innego zarejestrowanego u�ytkownika. Je�li to pomy�ka, id� do strony z logowaniem i postaraj si� przywr�ci� has�o na ten adres email.';

$txt['didnt_select_vote'] = 'Nie wybra�e� �adnej z opcji ankiety.';
$txt['poll_error'] = 'Ankieta nie istnieje, zosta�a zamkni�ta lub pr�bowa�e� zag�osowa� dwa razy.';
$txt['members_only'] = 'Opcja ta jest dost�pna tylko u�ytkownikom zarejestrowanym.';
$txt['locked_by_admin'] = 'Ten w�tek zosta� zamkni�ty przez administratora. Nie mo�esz go otworzy�.';
$txt['not_enough_posts_karma'] = 'Nie masz wystarczaj�cej ilo�ci odpowiedzi by m�c modyfikowa� reputacj� - wymagana liczba odpowiedzi to %1$d.';
$txt['cant_change_own_karma'] = 'Nie masz zezwolenia na modyfikacj� swojej reputacji.';
$txt['karma_wait_time'] = 'Przepraszamy, nie mo�esz powt�rzy� operacji na reputacji, poczekaj %1$s %2$s.';
$txt['feature_disabled'] = 'Ta funkcja jest wy��czona.';
$txt['cant_access_upload_path'] = 'Nie mo�na uzyska� dost�pu do �cie�ki wysy�ania za��cznik�w!';
$txt['file_too_big'] = 'Tw�j plik jest za du�y. Maksymalna wielko�� za��cznika to %1$d KB.';
$txt['attach_timeout'] = 'Podczas zapisywania twojego za��cznika wyst�pi� b��d, spr�buj jeszcze raz.';
$txt['filename_exists'] = 'Ta nazwa pliku jest ju� zaj�ta. Zmie� j� i spr�buj ponownie.';
$txt['bad_attachment'] = 'Tw�j za��cznik nie przeszed� test�w bezpiecze�stwa i nie mo�e zosta� wys�any. Skonsultuj si� z administratorem forum.';
$txt['ran_out_of_space'] = 'Katalog za��cznik�w jest pe�ny. Spr�buj wys�a� mniejszy plik i/lub skontaktuj si� z administratorem.';
$txt['couldnt_connect'] = 'Nie mo�na po��czy� si� z serwerem lub nie mo�na znale�� pliku';
$txt['no_board'] = 'Dzia� nie istnieje';
$txt['cant_split'] = 'Nie masz zezwolenia na dzielenie w�tk�w';
$txt['cant_merge'] = 'Nie masz zezwolenia na scalanie w�tk�w';
$txt['no_topic_id'] = 'Poda�e� niew�a�ciwe ID w�tku.';
$txt['split_first_post'] = 'Nie mo�esz rozdzieli� w�tku na pierwszej wiadomo�ci.';
$txt['topic_one_post'] = 'Ten w�tek zawiera tylko jedn� wiadomo�� i nie mo�e by� rozdzielony.';
$txt['no_posts_selected'] = 'nie wybrano �adnej wiadomo�ci';
$txt['selected_all_posts'] = 'Wybra�e� wszystkie wiadomo�ci - nie mo�na dokona� podzia�u.';
$txt['cant_find_messages'] = 'Nie mo�na znale�� wiadomo�ci';
$txt['cant_find_user_email'] = 'Nie mo�na znale�� adresu email u�ytkownika.';
$txt['cant_insert_topic'] = 'Nie mo�na zamie�ci� w�tku';
$txt['already_a_mod'] = 'Wybra�e� nazw� u�ytkownika nale��c� do jednego z moderator�w. Spr�buj jeszcze raz';
$txt['session_timeout'] = 'Czas twojej sesji sko�czy� si� podczas pisania wiadomo�ci. Powr�� i spr�buj jeszcze raz.';
$txt['session_verify_fail'] = 'Weryfikacja sesji nie powiod�a si�. Wyloguj i zaloguj si� ponownie, a potem spr�buj jeszcze raz.';
$txt['verify_url_fail'] = 'Nie mo�na zweryfikowa� URL odnosz�cego. Powr�� i spr�buj jeszcze raz.';
$txt['guest_vote_disabled'] = 'Go�cie nie mog� g�osowa� w tej ankiecie.';

$txt['copyright_failed'] = 'Przepraszamy - kod, kt�ry wpisa�e� jest niepoprawny. Upewnij si�, �e URL twojego forum zgadza si� z tym, kt�ry wpisa�e� wykupuj�c subskrypcje.';

$txt['cannot_access_mod_center'] = 'Nie masz zezwole� do dost�pu do centrum moderacji.';
$txt['cannot_admin_forum'] = 'Nie masz zezwolenia na administrowanie tym forum.';
$txt['cannot_announce_topic'] = 'Nie masz zezwolenia na og�aszanie w�tk�w w tym dziele.';
$txt['cannot_approve_posts'] = 'Nie masz zezwole� na zatwierdzanie.';
$txt['cannot_post_unapproved_attachments'] = 'Nie masz zezwole� na dodawanie niezatwierdzonych za��cznik�w.';
$txt['cannot_post_unapproved_topics'] = 'Nie masz zezwole� na dodawanie niezatwierdzonych w�tk�w.';
$txt['cannot_post_unapproved_replies_own'] = 'Nie masz zezwole� na dodawanie niezatwierdzonych odpowiedzi na w�asne w�tki.';
$txt['cannot_post_unapproved_replies_any'] = 'Nie masz zezwole� na dodawanie niezatwierdzonych odpowiedzi na w�tki innych u�ytkownik�w.';
$txt['cannot_calendar_edit_any'] = 'Nie mo�esz dodawa� wydarze� w kalendarzu.';
$txt['cannot_calendar_edit_own'] = 'Nie masz zezwole� potrzebnych, aby dodawa� w�asne wydarzenia w kalendarzu.';
$txt['cannot_calendar_post'] = 'Dodawanie wydarze� jest zabronione.';
$txt['cannot_calendar_view'] = 'Nie masz zezwolenia na przegl�danie kalendarza.';
$txt['cannot_remove_any'] = 'Nie masz zezwolenia na usuwanie ka�dej wiadomo�ci w tym dziale.';
$txt['cannot_remove_own'] = 'Nie masz zezwolenia na usuwanie swoich wiadomo�ci w tym dziale.';
$txt['cannot_edit_news'] = 'Nie masz zezwolenia na dodawanie aktualno�ci.';
$txt['cannot_pm_read'] = 'Nie mo�esz czyta� w�asnych prywatnych wiadomo�ci.';
$txt['cannot_pm_send'] = 'Nie mo�esz wysy�a� prywatnych wiadomo�ci.';
$txt['cannot_karma_edit'] = 'Nie masz zezwolenia na modyfikowanie czyjej� reputacji.';
$txt['cannot_lock_any'] = 'Nie masz zezwolenia na zamykanie ka�dego w�tku.';
$txt['cannot_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich w�tk�w.';
$txt['cannot_make_sticky'] = 'Nie masz zezwolenia na przyklejenie tego w�tku.';
$txt['cannot_manage_attachments'] = 'Nie masz zezwolenia na zarz�dzanie za��cznikami i awatarami.';
$txt['cannot_manage_bans'] = 'Nie masz zezwolenia na zmian� listy ban�w.';
$txt['cannot_manage_boards'] = 'Nie masz zezwolenia na zarz�dzanie dzia�ami i kategoriami.';
$txt['cannot_manage_membergroups'] = 'Nie masz zezwolenia na modyfikacj� lub przyznawanie grupy u�ytkownik�w.';
$txt['cannot_manage_permissions'] = 'Nie masz zezwolenia na zarz�dzanie zezwoleniami.';
$txt['cannot_manage_smileys'] = 'Nie masz uprawnie� na zarz�dzanie u�mieszkami oraz ikonami w wiadomo�ciach.';
$txt['cannot_mark_any_notify'] = 'Nie masz zezwole� potrzebnych, aby otrzyma� powiadomienia o tym w�tku.';
$txt['cannot_mark_notify'] = 'Nie masz zezwolenia na otrzymywanie powiadomie� z tego dzia�u.';
$txt['cannot_merge_any'] = 'Nie masz zezwolenia na scalanie w�tk�w w jednym z zaznaczonych dzia��w.';
$txt['cannot_moderate_forum'] = 'Nie masz zezwolenia na moderowanie tego forum.';
$txt['cannot_modify_any'] = 'Nie mo�esz zmienia� ka�dej wiadomo�ci.';
$txt['cannot_modify_own'] = 'Nie mo�esz zmienia� swoich wiadomo�ci.';
$txt['cannot_modify_replies'] = 'Pomimo tego, �e ta wiadomo�� jest odpowiedzi� na tw�j w�tek, nie mo�esz jej modyfikowa�.';
$txt['cannot_move_own'] = 'Nie masz zezwolenia na przenoszenie w�asnych w�tk�w w tym dziale.';
$txt['cannot_move_any'] = 'Nie masz zezwolenia na przenoszenie w�tk�w w tym dziale.';
$txt['cannot_poll_add_own'] = 'Nie masz zezwolenia na dodawanie ankiet do swoich w�tk�w w tym dziale.';
$txt['cannot_poll_add_any'] = 'Nie masz zezwolenia na dodanie ankiety do tego w�tku.';
$txt['cannot_poll_edit_own'] = 'Pomimo tego, �e ta ankieta nale�y do twojego w�tku, nie mo�esz jej modyfikowa�.';
$txt['cannot_poll_edit_any'] = 'Nie masz zezwolenia na modyfikowanie ankiet w tym dziale.';
$txt['cannot_poll_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich ankiet w tym dziale.';
$txt['cannot_poll_lock_any'] = 'Nie masz zezwolenia na zamykanie ka�dej ankiety.';
$txt['cannot_poll_post'] = 'Nie masz zezwolenia na wysy�anie ankiet w tym dziale.';
$txt['cannot_poll_remove_own'] = 'Nie masz zezwolenia na usuni�cie ankiety ze swojego w�tku.';
$txt['cannot_poll_remove_any'] = 'Nie masz zezwolenia na usuwanie ka�dej ankiety w tym dziale.';
$txt['cannot_poll_view'] = 'Nie masz zezwolenia na przegl�danie ankiet w tym dziale.';
$txt['cannot_poll_vote'] = 'Nie masz zezwolenia na g�osowanie w tym dziale.';
$txt['cannot_post_attachment'] = 'Nie masz zezwolenia na wysy�anie za��cznik�w.';
$txt['cannot_post_new'] = 'Nie masz zezwolenia na wysy�anie w�tk�w w tym dziale.';
$txt['cannot_post_reply_any'] = 'Nie masz zezwolenia na odpowiadanie w tym dziale.';
$txt['cannot_post_reply_own'] = 'Nie masz zezwolenia na odpowiadanie nawet na swoje w�tki w tym dziale.';
$txt['cannot_profile_remove_own'] = 'Nie masz zezwolenia na usuni�cie swojego konta.';
$txt['cannot_profile_remove_any'] = 'Nie masz zezwolenia na usuwanie kont innych u�ytkownik�w!';
$txt['cannot_profile_extra_any'] = 'Nie masz zezwolenia na modyfikowanie ustawie� profilu.';
$txt['cannot_profile_identity_any'] = 'Nie masz zezwolenia na modyfikowanie ustawie� konta.';
$txt['cannot_profile_title_any'] = 'Nie masz zezwolenia na modyfikowanie tytu��w osobistych.';
$txt['cannot_profile_extra_own'] = 'Nie masz zezwole� potrzebnych, aby modyfikowa� sw�j profil.';
$txt['cannot_profile_identity_own'] = 'Nie mo�esz teraz zmieni� swojej to�samo�ci.';
$txt['cannot_profile_title_own'] = 'Nie masz zezwolenia na modyfikowanie swojego tytu�u osobistego.';
$txt['cannot_profile_server_avatar'] = 'Nie masz uprawnie� do korzystania z galerii awatar�w.';
$txt['cannot_profile_upload_avatar'] = 'Nie masz uprawnie� do wgrywania awatar�w na serwer.';
$txt['cannot_profile_remote_avatar'] = 'Nie masz zezwolenia na u�ywanie zewn�trznego awatara.';
$txt['cannot_profile_view_own'] = 'Nie mo�esz przegl�da� swojego profilu.';
$txt['cannot_profile_view_any'] = 'Nie mo�esz przegl�da� ka�dego profilu.';
$txt['cannot_delete_own'] = 'Nie mo�esz usuwa� w�asnych w�tk�w w tym dziale.';
$txt['cannot_delete_replies'] = 'Przykro nam, ale nie mo�esz usuwa� tych wiadomo�ci, pomimo �e s� odpowiedzi� na tw�j w�tek.';
$txt['cannot_delete_any'] = 'Nie masz zezwolenia na usuwanie ka�dego w�tku.';
$txt['cannot_report_any'] = 'Nie masz zezwolenia na zg�aszanie wiadomo�ci w tym dziale.';
$txt['cannot_search_posts'] = 'Nie masz zezwolenia na wyszukiwanie wiadomo�ci.';
$txt['cannot_send_mail'] = 'Nie masz zezwolenia na wysy�anie wiadomo�ci email.';
$txt['cannot_issue_warning'] = 'Przepraszamy, nie masz zezwole� na wysy�anie ostrze�e� do u�ytkownik�w.';
$txt['cannot_send_topic'] = 'Administrator wy��czy� mo�liwo�� wysy�ania nowych w�tk�w w tym dziale.';
$txt['cannot_split_any'] = 'Nie masz zezwolenia na dzielenie ka�dego w�tku w tym dziale.';
$txt['cannot_view_attachments'] = 'Nie masz zezwolenia na pobieranie i ogl�danie za��cznik�w w tym dziale.';
$txt['cannot_view_mlist'] = 'Nie masz zezwolenia na przegl�danie listy u�ytkownik�w.';
$txt['cannot_view_stats'] = 'Nie masz zezwolenia na przegl�danie statystyk forum.';
$txt['cannot_who_view'] = 'Nie masz zezwolenia na przegl�danie listy u�ytkownik�w online.';

$txt['no_theme'] = 'Ten styl nie istnieje.';
$txt['theme_dir_wrong'] = 'Domy�lny katalog styl�w jest z�y, popraw to klikaj�c na ten tekst.';
$txt['registration_disabled'] = 'Rejestracja jest obecnie wy��czona.';
$txt['registration_no_secret_question'] = 'Ten u�ytkownik nie ustawi� sobie sekretnego pytania.';
$txt['poll_range_error'] = 'Ankieta musi by� otwarta przez wi�cej ni� 0 dni.';
$txt['delFirstPost'] = 'Nie mo�esz usun�� pierwszej wiadomo�ci w w�tku.<p>Je�li chcesz usun�� w�tek, kliknij na &quot;usu� w�tek&quot; albo popro� o to moderatora lub administratora.</p>';
$txt['parent_error'] = 'Nie mo�na utworzy� dzia�u!';
$txt['login_cookie_error'] = 'Nie mo�esz si� zalogowa�. Sprawd� swoje ustawienia plik�w cookie.';
$txt['incorrect_answer'] = 'Udzieli�e� nieprawid�owej odpowiedzi. Przejd� jeden poziom do ty�u, aby spr�bowa� jeszcze raz lub dwa poziomy, aby u�y� domy�lnej metody uzyskiwania hs�a.';
$txt['no_mods'] = 'Nie znaleziono �adnych moderator�w!';
$txt['parent_not_found'] = 'Struktura dzia��w uszkodzona: nie mo�na znale�� dzia�u nadrz�dnego';
$txt['modify_post_time_passed'] = 'Nie mo�esz edytowa� tej wiadomo��, poniewa� min�� minimalny czas w kt�rym mog�e� to zrobi�.';

$txt['calendar_off'] = 'Obecnie nie masz dost�pu do kalendarza, poniewa� jest wy��czony.';
$txt['invalid_month'] = 'Niew�a�ciwy numer miesi�ca.';
$txt['invalid_year'] = 'Niew�a�ciwy numer roku.';
$txt['invalid_day'] = 'Niepoprawna warto�� dnia.';
$txt['event_month_missing'] = 'Brakuje miesi�ca wydarzenia.';
$txt['event_year_missing'] = 'Brakuje roku wydarzenia.';
$txt['event_day_missing'] = 'Brakuje dnia wydarzenia.';
$txt['event_title_missing'] = 'Brakuje nazwy wydarzenia.';
$txt['invalid_date'] = 'Nieprawid�owa data.';
$txt['no_event_title'] = 'nie wprowadzono nazwy wydarzenia.';
$txt['missing_event_id'] = 'Brakuje ID wydarzenia.';
$txt['cant_edit_event'] = 'Nie masz zezwolenia na modyfikowanie tego wydarzenia.';
$txt['missing_board_id'] = 'Brakuje ID dzia�u.';
$txt['missing_topic_id'] = 'Brakuje ID w�tku.';
$txt['topic_doesnt_exist'] = 'W�tek nie istnieje.';
$txt['not_your_topic'] = 'Nie jeste� tw�rc� tego w�tku.';
$txt['board_doesnt_exist'] = 'Dzia� nie istnieje.';
$txt['no_span'] = 'Funkcja kilkudniowych wydarze� jest wy��czona.';
$txt['invalid_days_numb'] = 'Nieprawid�owa ilo�� dni trwania wydarzenia.';

$txt['moveto_noboards'] = 'Dzia�, do kt�rego chcesz przenie�� w�tek, nie istnieje!';

$txt['already_activated'] = 'Twoje konto zosta�o ju� zaktywowane.';
$txt['still_awaiting_approval'] = 'Twoje konto nadal oczekuje na zatwierdzenie przez administratora.';

$txt['invalid_email'] = 'Nieprawid�owy adres email lub zakres adres�w.<br />Przyk�ad prawid�owego adresu: bill.gates@microsoft.com.<br />Przyk�ad prawid�owego zakresu adres�w: *@*.microsoft.com';
$txt['invalid_expiration_date'] = 'Nieprawid�owa data wyga�ni�cia';
$txt['invalid_hostname'] = 'Nieprawid�owa nazwa dostawcy lub zakres nazw<br />Przyk�ad prawid�owej nazwy: proxy4.microsoft.com<br />Przyk�ad prawid�owego zakresu nazw: *.microsoft.com';
$txt['invalid_ip'] = 'Nieprawid�owy adres IP lub zakres adres�w.<br />Przyk�ad prawid�owego adresu: 127.0.0.1<br />Przyk�ad prawid�owego zakresu: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Nieprawid�owy adres IP lub zakres adres�w.<br />Przyk�ad prawid�owego adresu IP: 127.0.0.1<br />Przyk�ad prawid�owego zakresu IP: 127.0.0.*';
$txt['invalid_username'] = 'Nazwa u�ytkownika nie znaleziona';
$txt['no_ban_admin'] = 'Nie mo�esz zbanowa� administratora - najpierw musisz go zdegradowa�!';
$txt['no_bantype_selected'] = 'Nie wybrano typu bana';
$txt['ban_not_found'] = 'Ban nie znaleziony';
$txt['ban_unknown_restriction_type'] = 'Rodzaj ograniczenia nie znany';
$txt['ban_name_empty'] = 'Nazwa bana jest pusta';
$txt['ban_name_exists'] = 'Podana nazwa bana (%1$s) ju� istnieje, wybierz inn�.';
$txt['ban_trigger_already_exists'] = 'Tem ban (%1$s) ju� istnieje w %2$s. ';

$txt['recycle_no_valid_board'] = 'Nie wybrano dzia�u do zachowywania w�tk�w';

$txt['login_threshold_fail'] = 'Wyczerpa�e� ilo�� pr�b zalogowania. Spr�buj jeszcze raz p�niej.';
$txt['login_threshold_brute_fail'] = 'Wybacz, wyczerpa�e� ju� ilo�� pr�b zalogowania. Odczekaj 30 sekund i spr�buj ponownie p�niej.';

$txt['who_off'] = 'Obecnie nie masz dost�pu do listy u�ytkownik�w online, poniewa� jest wy��czona.';

$txt['merge_create_topic_failed'] = 'B��d podczas tworzenia w�tku.';
$txt['merge_need_more_topics'] = 'Potrzeba co najmniej dw�ch w�tk�w aby je scali�.';

$txt['postWaitTime_broken'] = 'Ostatnia odpowied� z twojego IP by�a %1$d sekund temu. Spr�buj ponownie.';
$txt['registerWaitTime_broken'] = 'Zarejestrowa�e� si� ju� %1$d sekund temu!';
$txt['loginWaitTime_broken'] = 'Musisz poczeka� oko�o %1$d sekund aby ponownie si� zalogowa�.';
$txt['pmWaitTime_broken'] = 'Ostatnia prywatna wiadomo�� z twojego IP by�a %1$d sekund temu. Spr�buj ponownie.';
$txt['reporttmWaitTime_broken'] = 'Ostatni w�tek z twojego IP by� %1$d sekund temu. Spr�buj ponownie.';
$txt['sendtopcWaitTime_broken'] = 'Ostatni w�tek wys�any z twojego IP by� %1$d sekund temu. Spr�buj ponownie.';
$txt['sendmailWaitTime_broken'] = 'Ostatni email wys�any z twojego IP by� %1$d sekund temu. Spr�buj ponownie.';
$txt['searchWaitTime_broken'] = 'Od twojego ostatniego wyszukiwania up�yn�o mniej ni� %1$d. Spr�buj p�niej.';

$txt['email_missing_data'] = 'Musisz wpisa� co� w pola tematu i wiadomo�ci.';

$txt['topic_gone'] = 'W�tek lub dzia�, kt�rego szukasz nie istnieje albo nie masz do niego dost�pu.';
$txt['theme_edit_missing'] = 'Plik kt�ry chcesz zmieni� nie zosta� znaleziony!';

$txt['attachments_no_write'] = 'Nie mo�na zapisywa� w katalogu za��cznik�w. Tw�j za��cznik lub awatar nie mo�e by� zapisany.';
$txt['attachments_limit_per_post'] = 'Maksymalna liczba za��cznik�w na jedn� wiadomo�� to: %1$d';

$txt['no_dump_database'] = 'Tylko administratorzy mog� wykonywa� kopie zapasowe bazy danych!';
$txt['pm_not_yours'] = 'Prywatna wiadomo��, kt�r� pr�bujesz cytowa� nie jest twoja lub nie istnieje, przejd� wstecz i spr�buj jeszcze raz.';
$txt['mangled_post'] = 'Uszkodzony formularz danych - przejd� wstecz i spr�buj jeszcze raz.';
$txt['quoted_post_deleted'] = 'Wiadomo��, kt�r� pr�bujesz zacytowa�, nie istnieje, zosta�a skasowana lub nie masz uprawnie� do czytania jej.';
$txt['pm_too_many_per_hour'] = 'Przekroczy�e� limit %1$d wiadomo�ci prywatnych na godzin�.';
$txt['labels_too_many'] = 'Przepraszamy, %1$s wiadomo�� posiada maksymaln� liczb� etykiet!';

$txt['register_only_once'] = 'Przepraszamy, ale nie mo�na rejestrowa� wielu kont w tym samym czasie z tego samego komputera.';
$txt['admin_setting_coppa_require_contact'] = 'Musisz wpisa� kod pocztowy lub nr faxu je�li to konieczne do potwierdzenia twojej wiarygodno�ci.';

$txt['error_long_name'] = 'Nazwa u�ytkownika, kt�rej u�y�e�, by�a za d�uga.';
$txt['error_no_name'] = 'Nie podano nazwy u�ytkownika.';
$txt['error_bad_name'] = 'Podana przez Ciebie nazwa u�ytkownika nie mo�e zosta� u�yta, poniewa� zawiera nazw� zarezerwowan�.';
$txt['error_no_email'] = 'Nie podano adresu email.';
$txt['error_bad_email'] = 'Podano nieprawid�owy adres email.';
$txt['error_no_event'] = 'Nie podano nazwy wydarzenia.';
$txt['error_no_subject'] = 'Nie wpisano tematu.';
$txt['error_no_question'] = 'Nie wpisano pytania do ankiety.';
$txt['error_no_message'] = 'Nie wpisano tre�ci wiadomo�ci.';
$txt['error_long_message'] = 'Wiadomo�� przekracza dozwolon� d�ugo�� (%s znak�w).';
$txt['error_no_comment'] = 'Pole komentarza nie zosta�o uzupe�nione.';
$txt['error_session_timeout'] = 'Twoja sesja dobieg�a ko�ca podczas pisania. Spr�buj ponownie wys�a� wiadomo��.';
$txt['error_no_to'] = 'Nie podano odbiorc�w.';
$txt['error_bad_to'] = 'Nie znaleziono jednego lub wi�cej odbiorc�w \'do\'.';
$txt['error_bad_bcc'] = 'Nie znaleziono jednego lub wi�cej odbiorc�w \'kopia do\'.';
$txt['error_form_already_submitted'] = 'Ta wiadomo�� zosta�a ju� wys�ana! Mo�e to by� spowodowane przypadkowym podw�jnym klikni�ciem lub pr�b� od�wie�enia strony.';
$txt['error_poll_few'] = 'Musisz da� przynajmniej dwie mo�liwo�ci do wyboru!';
$txt['error_need_qr_verification'] = 'Uzupe�nij poni�sz� sekcj� weryfikacji, aby wys�a� wiadomo��.';
$txt['error_wrong_verification_code'] = 'Wpisane litery nie pasuj� do liter pokazanych na obrazku.';
$txt['error_wrong_verification_answer'] = 'Odpowiedzia�e� b��dnie na pytanie weryfikacyjne.';
$txt['error_need_verification_code'] = 'Wprowad� ni�ej kod weryfikacyjny aby kontynuowa�.';
$txt['error_bad_file'] = 'Przepraszamy, podany plik nie mo�e zosta� otwarty: %1$s';
$txt['error_bad_line'] = 'Podana linia jest niepoprawna.';

$txt['smiley_not_found'] = 'U�mieszek nie znaleziony.';
$txt['smiley_has_no_code'] = 'Temu u�mieszkowi nie przyznano kodu.';
$txt['smiley_has_no_filename'] = 'Nie podano nazwy pliku dla tego u�mieszku.';
$txt['smiley_not_unique'] = 'U�mieszek z tym kodem ju� istnieje.';
$txt['smiley_set_already_exists'] = 'Zestaw u�mieszk�w pod tym adresem URL ju� istnieje.';
$txt['smiley_set_not_found'] = 'Zestaw u�mieszk�w nie znaleziony';
$txt['smiley_set_path_already_used'] = 'Adres URL tego zestawu u�mieszk�w jest ju� zaj�ty przez inny zestaw.';
$txt['smiley_set_unable_to_import'] = 'Nie mo�na importowa� zestawu u�mieszk�w. Katalog jest niew�a�ciwy lub nie mo�na uzyska� do niego dost�pu.';

$txt['smileys_upload_error'] = 'B��d przy wysy�aniu pliku.';
$txt['smileys_upload_error_blank'] = 'Wszystkie zestawy u�mieszk�w musz� mie� obrazek!';
$txt['smileys_upload_error_name'] = 'Wszystkie u�mieszki musz� mie� t� sam� nazw� pliku!';
$txt['smileys_upload_error_illegal'] = 'Niew�a�ciwy typ pliku.';

$txt['search_invalid_weights'] = 'Wagi wyszukiwania nie s� poprawnie skonfigurowane. Przynajmniej jedna musi mie� warto�� inn� ni� zero. Zg�o� ten b��d administratorowi.';
$txt['unable_to_create_temporary'] = 'Funkcja wyszukiwania nie mog�a stworzy� tymczasowych tabel. Spr�buj ponownie.';

$txt['package_no_file'] = 'Nie mo�na znale�� pliku pakietu!';
$txt['packageget_unable'] = 'Nie mo�na po��czy� si� z serwerem. Spr�buj u�ywaj�c <a href="%1$s" target="_blank" class="new_win">tego adresu</a>.';
$txt['not_on_simplemachines'] = 'Pakiety mog� by� pobierane w ten spos�b tylko z serwera simplemachines.org.';
$txt['package_cant_uninstall'] = 'Ten pakiet nie by� nigdy zainstalowany lub by� ju� odinstalowany - nie mo�esz go teraz odinstalowa�.';
$txt['package_cant_download'] = 'Nie mo�esz pobiera� lub instalowa� nowych pakiet�w, poniewa� nie mo�na zapisywa� w katalogu pakiet�w!';
$txt['package_upload_error_nofile'] = 'Nie zaznaczy�e� pakietu do wgrania.';
$txt['package_upload_error_failed'] = 'Nie mo�na wys�a� pakietu, sprawd� zezwolenie zapisu katalogu.';
$txt['package_upload_error_exists'] = 'Plik, kt�ry wysy�asz, jest ju� na serwerze. Najpierw go skasuj, a potem wy�lij ponownie.';
$txt['package_upload_error_supports'] = 'Mened�er pakiet�w aktualnie pozawala tylko na takie typy plik�w: %1$s.';
$txt['package_upload_error_broken'] = 'Pakiet kt�ry starasz si� wys�a� jest nie poprawny lub uszkodzony i powoduje nast�puj�cy b��d:<br />&quot;%1$s&quot; .';

$txt['package_get_error_not_found'] = 'Pakiet, kt�ry pr�bujesz zainstalowa� nie mo�e zosta� zlokalizowany. Mo�esz spr�bowa� r�cznie wgra� pakiet do katalogu pakiet�w.';
$txt['package_get_error_missing_xml'] = 'Pr�bujesz zainstalowa� pakiet nie posiadaj�cy pliku package-info.xml, kt�ry musi by� w g��wnym katalogu pakietu.';
$txt['package_get_error_is_zero'] = 'Mimo, �e pakiet zosta� pobrany na serwer, wydaje si� by� pusty. Sprawd� czy katalog pakiet�w oraz podkatalog &quot;temp&quot; s� zapisywalne. Je�eli problem nie ust�pi, powiniene� spr�bowa� rozpakowa� pakiet na twoim w�asnym komputerze i wgra� wypakowane pliki do podkatalogu w katalogu pakiet�w i spr�bowa� jeszcze raz. Na przyk�ad, je�li pakiet by� nazwany shout.tar.gz to:<br />1) Pobierz pakiet na tw�j komputer i rozpakuj<br />2) U�ywaj�c klienta FTP stw�rz nowy katalog w folderze &quot;Packages&quot;, w tym przyk�adzie mo�esz go nazwa� "shout".<br />3) Wgraj wszystkie wypakowane pliki pakietu do tego katalogu.<br />4) Wr�� do strony przegl�dania pakiet�w w menad�erze, pakiet powinien zosta� automatycznie znaleziony przez SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF nie mog�o znale�� �adnych poprawnych informacji w pliku package-info.xml, za��czonym w pakiecie. Powodem mo�e by� b��d w modyfikacji albo pakiet jest uszkodzony.';

$txt['no_membergroup_selected'] = 'Nie zaznaczono �adnej grupy u�ytkownik�w';
$txt['membergroup_does_not_exist'] = 'Grupa u�ytkownik�w nie istnieje lub jest nieprawid�owa.';

$txt['at_least_one_admin'] = 'Musi istnie� przynajmniej jeden Administrator forum!';

$txt['error_functionality_not_windows'] = 'Przepraszamy, ta opcja obecnie nie jest dost�pna dla serwer�w pracuj�cych na Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Za��cznik nie znaleziony';

$txt['error_no_boards_selected'] = 'Nie wybrano prawid�owo dzia��w!';
$txt['error_invalid_search_string'] = 'Czy nie zapomnia�e� poda� co szuka�?';
$txt['error_invalid_search_string_blacklist'] = 'Twoje wyszukiwane zapytanie zawiera zbyt banalne s�owa. Prosimy spr�buj ponownie z innym zapytaniem.';
$txt['error_search_string_small_words'] = 'Ka�e s�owo musi sk�ada� si� przynajmniej z dw�ch znak�w.';
$txt['error_query_not_specific_enough'] = 'Twoje zapytanie nie jest wystarczaj�co specyficzne. Spr�buj u�y� d�u�szych s��w.';
$txt['error_no_messages_in_time_frame'] = 'Nie znaleziono �adnych pasuj�cych wiadomo�ci w wybranym przedziale czasowym.';
$txt['error_no_labels_selected'] = 'Nie wybrano etykiety!';
$txt['error_no_search_daemon'] = 'Brak dost�pu do narz�dzia wyszukiwania';

$txt['profile_errors_occurred'] = 'Wyst�pi�y nast�puj�ce b��dy podczas pr�by zapisania twojego profilu';
$txt['profile_error_bad_offset'] = 'Niepoprawnie podana strefa czasowa';
$txt['profile_error_no_name'] = 'Pole z nazw� u�ytkownika jest puste';
$txt['profile_error_name_taken'] = 'Wybrana nazwa u�ytkownika/nazwa wy�wietlana jest ju� zaj�ta';
$txt['profile_error_name_too_long'] = 'Wybrana nazwa u�ytkownika jest za d�uga. Nie powinna przekracza� 60 znak�w';
$txt['profile_error_no_email'] = 'Pole email jest puste';
$txt['profile_error_bad_email'] = 'Nie wprowadzi�e� poprawnego adresu email';
$txt['profile_error_email_taken'] = 'Inny u�ytkownik jest ju� zarejestrowany z tym adresem email';
$txt['profile_error_no_password'] = 'Has�o nie zosta�o wpisane';
$txt['profile_error_bad_new_password'] = 'Podane has�a nie s� zgodne';
$txt['profile_error_bad_password'] = 'Has�o kt�re wprowadzi�e� jest nieprawid�owe';
$txt['profile_error_bad_avatar'] = 'Awatar kt�rego zaznaczy�e� jest za du�y, lub nie jest awatarem';
$txt['profile_error_password_short'] = 'Twoje has�o musi mie� co najmniej ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' znak�w(i) d�ugo�ci.';
$txt['profile_error_password_restricted_words'] = 'Twoje has�o nie mo�e zwiera� Twojej nazwy u�ytkownika, adresu email ani innych popularnych s��w.';
$txt['profile_error_password_chars'] = 'Twoje has�o musi zawiera� mieszank� du�ych i ma�ych liter, oraz cyfr.';
$txt['profile_error_already_requested_group'] = 'Ju� posiadasz pierwsze�stwo do przyznania do tej grupy!';
$txt['profile_error_openid_in_use'] = 'Podany URL weryfikacyjny dla OpenID jest ju� u�ywane przez innego u�ytkownika.';

$txt['mysql_error_space'] = '- sprawd� miejsce zapisu bazy danych lub skontaktuj si� z administratorem serwera.';

$txt['icon_not_found'] = 'Plik ikony nie zosta�a znaleziona w domy�lnym stylu - upewnij si� �e obrazek zosta� wys�any i spr�buj ponownie.';
$txt['icon_after_itself'] = 'Ikona nie mo�e by� pozycjonowana wzgl�dem siebie!';
$txt['icon_name_too_long'] = 'Nazwa pliku ikony nie mo�e by� d�u�sza ni� 16 znak�w';

$txt['name_censored'] = 'Przykro nam, nazwa kt�rej pr�bujesz u�y�, %1$s, zawiera s�owa kt�re zosta�y ocenzurowane. U�yj innej nazwy.';

$txt['poll_already_exists'] = 'W�tek mo�e mie� tylko jedn� powi�zan� ze sob� ankiet�!';
$txt['poll_not_found'] = 'Nie ma ankiet zwi�zanych z tym w�tkiem!';

$txt['error_while_adding_poll'] = 'Nast�puj�cy b��d lub b��dy wyst�pi�y przy dodawaniu ankiety';
$txt['error_while_editing_poll'] = 'Nast�puj�cy b��d lub b��dy wyst�pi�y przy edycji tej ankiety';

$txt['loadavg_search_disabled'] = 'Z powodu du�ego obci��enia serwera, funkcja wyszukiwania jest tymczasowo wy��czona.';
$txt['loadavg_generic_disabled'] = 'Przykro nam, z powodu du�ego obci��enia serwera, ta opcja jest obecnie niedost�pna.';
$txt['loadavg_allunread_disabled'] = 'Zasoby serwera s� czasowo pod zbyt du�ym obci��eniem aby znale�� wszystkie w�tki kt�rych nie czyta�e�.';
$txt['loadavg_unreadreplies_disabled'] = 'W tej chwili serwer jest przeci��ony. Spr�buj ponownie za chwile.';
$txt['loadavg_show_posts_disabled'] = 'Spr�buj jeszcze raz p�niej. Z powodu du�ego obci��enia serwera wiadomo�ci tego u�ytkownika nie s� w tej chwili dost�pne.';
$txt['loadavg_unread_disabled'] = 'Zasoby serwera s� obecnie zbyt wysokie aby m�c wy�wietli� pe�n� list� nieprzeczytanych w�tk�w.';

$txt['cannot_edit_permissions_inherited'] = 'Nie mo�esz edytowa� konkretnie dziedziczonych zezwole�, musisz edytowa� albo grup� albo dziedzicz�cego cz�onka grupy.';

$txt['mc_no_modreport_specified'] = 'Musisz sprecyzowa� kt�ry raport chcesz wy�wietli�.';
$txt['mc_no_modreport_found'] = 'Podany raport nie istnieje lub jest poza twoim limitem';

$txt['st_cannot_retrieve_file'] = 'Nie mo�na odzyska� pliku %1$s.';
$txt['admin_file_not_found'] = 'Nie mo�na za�adowa� wybranego pliku: %1$s.';

$txt['themes_none_selectable'] = 'Przynajmniej jeden styl musi by� wybrany.';
$txt['themes_default_selectable'] = 'Standardowy styl forum musi by� stylem wybieralnym.';
$txt['ignoreboards_disallowed'] = 'Opcja ignorowania for nie jest w��czona.';

$txt['mboards_delete_error'] = 'Nie zaznaczono kategorii!';
$txt['mboards_delete_board_error'] = 'Nie zaznaczono forum!';

$txt['smileys_upload_error_notwritable'] = 'Podana �cie�ka u�mieszk�w jest niezapisywalna: %1$s';
$txt['smileys_upload_error_types'] = 'Obrazek mo�e posiada� tylko podane rozszerzenia: %1$s.';

$txt['change_email_success'] = 'Tw�j adres email zosta� zmieniony, nowy email z aktywacj� zosta� wys�any na podany adres.';
$txt['resend_email_success'] = 'Nowy email z aktywacj� zosta� wys�any pomy�lnie.';

$txt['custom_option_need_name'] = 'Opcja profilu musi mie� nazw�!';
$txt['custom_option_not_unique'] = 'Pole nazwy nie jest unikalne!';

$txt['warning_no_reason'] = 'Musisz wpisa� pow�d ostrze�enia u�ytkownika.';
$txt['warning_notify_blank'] = 'Zaznaczy�e� powiadamianie u�ytkownika lecz nie wype�ni�e� pola tematu lub wiadomo�ci.';

$txt['cannot_connect_doc_site'] = 'Nie mo�na po��czy� si� z Simple Machines Online Manual. Sprawd� czy konfiguracja twojego serwera zezwala na przychodz�ce po��czenia i spr�buj ponownie.';

$txt['movetopic_no_reason'] = 'Musisz wprowadzi� pow�d przesuni�cia w�tku albo odznaczy� opcj� \'Wy�lij w�tek przekierowuj�cy\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'Podany identyfikator nie zwr�ci� poprawnych informacji.';
$txt['openid_return_no_mode'] = 'Provider identyfikacji nie odpowiada z opcj� Open ID.';
$txt['openid_not_resolved'] = 'Provider identyfikacji nie zatwierdzi� twojej pro�by.';
$txt['openid_no_assoc'] = 'Nie znaleziono ��danej wsp�pracy z providerem identyfikacji.';
$txt['openid_sig_invalid'] = 'Sygnatura do providera identyfikacji jest nieprawid�owa.';
$txt['openid_load_data'] = 'Nie mo�na za�adowa� danych z twojego ��dania o logowanie. Spr�buj ponownie.';
$txt['openid_not_verified'] = 'Adres OpenID nie mo�e zosta� zweryfikowany. Prosimy zaloguj si� do weryfikacji.';

$txt['error_custom_field_too_long'] = 'Pole &quot;%1$s&quot; nie mo�e by� wi�ksze ni� %2$d znak�w.';
$txt['error_custom_field_invalid_email'] = 'Pole &quot;%1$s&quot; musi zawiera� prawid�owy adres email.';
$txt['error_custom_field_not_number'] = 'Pole &quot;%1$s&quot; musi by� numeryczne.';
$txt['error_custom_field_inproper_format'] = 'Pole &quot;%1$s&quot; posiada b��dny format.';
$txt['error_custom_field_empty'] = 'Pole &quot;%1$s&quot; nie mo�e by� puste.';

$txt['email_no_template'] = 'Email &quot;%1$s&quot; nie mo�e zosta� znaleziony.';

$txt['search_api_missing'] = 'Wyszukiwanie API nie mo�e zosta� znalezione! Skontaktuj si� z administratorem aby sprawdzi� czy wys�a� poprawne pliki.';
$txt['search_api_not_compatible'] = 'Forum u�ywa nieaktualnego wyszukiwania API - przenoszenie do standardowego wyszukiwania. Sprawd� plik %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Nie mo�esz przywr�ci� pierwszej wiadomo�ci w tym w�tku.';
$txt['parent_topic_missing'] = 'W�tek wiadomo�ci kt�r� chcesz przywr�ci� zosta� usuni�ty.';
$txt['restored_disabled'] = 'Przywracanie w�tk�w zosta�o wy��czone.';
$txt['restore_not_found'] = 'Nast�puj�ce wiadomo�ci nie zosta�y przywr�cone; oryginalny w�tek m�g� zosta� usuni�ty:<ul style="margin-top: 0px;">%1$s</ul> B�dziesz musia� przesun�� je samodzielnie.';

$txt['error_invalid_dir'] = 'Podany katalog jest nieprawid�owy.';

$txt['error_sqlite_optimizing'] = 'Sqlite optymalizuje baz� danych, forum jest niedost�pne dop�ki proces nie zostanie uko�czony. Spr�buj od�wie�y� t� stron� za moment.';

?>