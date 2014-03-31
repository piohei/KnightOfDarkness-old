<?php
// Version: 2.0 RC3; Errors

global $scripturl, $modSettings;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['no_access'] = 'Nie masz dostêpu do tej sekcji';
$txt['wireless_error_notyet'] = 'Przepraszamy, w tym momencie ta sekcja nie jest dostêpna dla u¿ytkowników trybu bezprzewodowego.';

$txt['mods_only'] = 'Tylko moderatorzy mog± usuwaæ wiadomo¶ci, wykasuj swoj± wiadomo¶æ u¿ywaj±c funkcji &quot;Zmieñ&quot;.';
$txt['no_name'] = 'Nie wpisa³e¶ nazwy u¿ytkownika - jest to wymagane.';
$txt['no_email'] = 'Nie wpisa³e¶ adresu email - jest to wymagane.';
$txt['topic_locked'] = 'Ten w±tek jest zamkniêty, nie masz zezwolenia na wysy³anie lub modyfikacjê wiadomo¶ci...';
$txt['no_password'] = 'Pole has³a puste';
$txt['already_a_user'] = 'Nazwa u¿ytkownika, której próbowa³e¶ jest ju¿ zajêta.';
$txt['cant_move'] = 'Nie masz zezwolenia na przenoszenie w±tków...';
$txt['login_to_post'] = 'Musisz byæ zalogowany aby wysy³aæ wiadomo¶ci. Je¶li nie masz jeszcze konta, <a href="' . $scripturl . '?action=register">zarejestruj siê</a>.';
$txt['passwords_dont_match'] = 'Has³a nie s± identyczne.';
$txt['register_to_use'] = 'Musisz siê zarejestrowaæ, zanim bêdziesz móg³ korzystaæ z tej opcji.';
$txt['password_invalid_character'] = 'Niedozwolony znak w ha¶le.';
$txt['name_invalid_character'] = 'Niedozwolony znak w nazwie u¿ytkownika.';
$txt['email_invalid_character'] = 'Niedozwolony znak w adresie email.';
$txt['username_reserved'] = 'Nazwa u¿ytkownika, której próbowa³e¶ zawiera zarezerwowan± nazwê %1$s\'. Spróbuj jeszcze raz.';
$txt['numbers_one_to_nine'] = 'W to pole mo¿na wpisywaæ tylko cyfry od 0 do 9';
$txt['not_a_user'] = 'Profil u¿ytkownika, który próbujesz przegl±daæ nie istnieje.';
$txt['not_a_topic'] = 'W±tek nie istnieje.';
$txt['not_approved_topic'] = 'Ten w±tek nie zosta³ jeszcze zaakceptowany.';
$txt['email_in_use'] = 'Podany adres email (%1$s) jest u¿ywany przez innego zarejestrowanego u¿ytkownika. Je¶li to pomy³ka, id¼ do strony z logowaniem i postaraj siê przywróciæ has³o na ten adres email.';

$txt['didnt_select_vote'] = 'Nie wybra³e¶ ¿adnej z opcji ankiety.';
$txt['poll_error'] = 'Ankieta nie istnieje, zosta³a zamkniêta lub próbowa³e¶ zag³osowaæ dwa razy.';
$txt['members_only'] = 'Opcja ta jest dostêpna tylko u¿ytkownikom zarejestrowanym.';
$txt['locked_by_admin'] = 'Ten w±tek zosta³ zamkniêty przez administratora. Nie mo¿esz go otworzyæ.';
$txt['not_enough_posts_karma'] = 'Nie masz wystarczaj±cej ilo¶ci odpowiedzi by móc modyfikowaæ reputacjê - wymagana liczba odpowiedzi to %1$d.';
$txt['cant_change_own_karma'] = 'Nie masz zezwolenia na modyfikacjê swojej reputacji.';
$txt['karma_wait_time'] = 'Przepraszamy, nie mo¿esz powtórzyæ operacji na reputacji, poczekaj %1$s %2$s.';
$txt['feature_disabled'] = 'Ta funkcja jest wy³±czona.';
$txt['cant_access_upload_path'] = 'Nie mo¿na uzyskaæ dostêpu do ¶cie¿ki wysy³ania za³±czników!';
$txt['file_too_big'] = 'Twój plik jest za du¿y. Maksymalna wielko¶æ za³±cznika to %1$d KB.';
$txt['attach_timeout'] = 'Podczas zapisywania twojego za³±cznika wyst±pi³ b³±d, spróbuj jeszcze raz.';
$txt['filename_exists'] = 'Ta nazwa pliku jest ju¿ zajêta. Zmieñ j± i spróbuj ponownie.';
$txt['bad_attachment'] = 'Twój za³±cznik nie przeszed³ testów bezpieczeñstwa i nie mo¿e zostaæ wys³any. Skonsultuj siê z administratorem forum.';
$txt['ran_out_of_space'] = 'Katalog za³±czników jest pe³ny. Spróbuj wys³aæ mniejszy plik i/lub skontaktuj siê z administratorem.';
$txt['couldnt_connect'] = 'Nie mo¿na po³±czyæ siê z serwerem lub nie mo¿na znale¼æ pliku';
$txt['no_board'] = 'Dzia³ nie istnieje';
$txt['cant_split'] = 'Nie masz zezwolenia na dzielenie w±tków';
$txt['cant_merge'] = 'Nie masz zezwolenia na scalanie w±tków';
$txt['no_topic_id'] = 'Poda³e¶ niew³a¶ciwe ID w±tku.';
$txt['split_first_post'] = 'Nie mo¿esz rozdzieliæ w±tku na pierwszej wiadomo¶ci.';
$txt['topic_one_post'] = 'Ten w±tek zawiera tylko jedn± wiadomo¶æ i nie mo¿e byæ rozdzielony.';
$txt['no_posts_selected'] = 'nie wybrano ¿adnej wiadomo¶ci';
$txt['selected_all_posts'] = 'Wybra³e¶ wszystkie wiadomo¶ci - nie mo¿na dokonaæ podzia³u.';
$txt['cant_find_messages'] = 'Nie mo¿na znale¼æ wiadomo¶ci';
$txt['cant_find_user_email'] = 'Nie mo¿na znale¼æ adresu email u¿ytkownika.';
$txt['cant_insert_topic'] = 'Nie mo¿na zamie¶ciæ w±tku';
$txt['already_a_mod'] = 'Wybra³e¶ nazwê u¿ytkownika nale¿±c± do jednego z moderatorów. Spróbuj jeszcze raz';
$txt['session_timeout'] = 'Czas twojej sesji skoñczy³ siê podczas pisania wiadomo¶ci. Powróæ i spróbuj jeszcze raz.';
$txt['session_verify_fail'] = 'Weryfikacja sesji nie powiod³a siê. Wyloguj i zaloguj siê ponownie, a potem spróbuj jeszcze raz.';
$txt['verify_url_fail'] = 'Nie mo¿na zweryfikowaæ URL odnosz±cego. Powróæ i spróbuj jeszcze raz.';
$txt['guest_vote_disabled'] = 'Go¶cie nie mog± g³osowaæ w tej ankiecie.';

$txt['copyright_failed'] = 'Przepraszamy - kod, który wpisa³e¶ jest niepoprawny. Upewnij siê, ¿e URL twojego forum zgadza siê z tym, który wpisa³e¶ wykupuj±c subskrypcje.';

$txt['cannot_access_mod_center'] = 'Nie masz zezwoleñ do dostêpu do centrum moderacji.';
$txt['cannot_admin_forum'] = 'Nie masz zezwolenia na administrowanie tym forum.';
$txt['cannot_announce_topic'] = 'Nie masz zezwolenia na og³aszanie w±tków w tym dziele.';
$txt['cannot_approve_posts'] = 'Nie masz zezwoleñ na zatwierdzanie.';
$txt['cannot_post_unapproved_attachments'] = 'Nie masz zezwoleñ na dodawanie niezatwierdzonych za³±czników.';
$txt['cannot_post_unapproved_topics'] = 'Nie masz zezwoleñ na dodawanie niezatwierdzonych w±tków.';
$txt['cannot_post_unapproved_replies_own'] = 'Nie masz zezwoleñ na dodawanie niezatwierdzonych odpowiedzi na w³asne w±tki.';
$txt['cannot_post_unapproved_replies_any'] = 'Nie masz zezwoleñ na dodawanie niezatwierdzonych odpowiedzi na w±tki innych u¿ytkowników.';
$txt['cannot_calendar_edit_any'] = 'Nie mo¿esz dodawaæ wydarzeñ w kalendarzu.';
$txt['cannot_calendar_edit_own'] = 'Nie masz zezwoleñ potrzebnych, aby dodawaæ w³asne wydarzenia w kalendarzu.';
$txt['cannot_calendar_post'] = 'Dodawanie wydarzeñ jest zabronione.';
$txt['cannot_calendar_view'] = 'Nie masz zezwolenia na przegl±danie kalendarza.';
$txt['cannot_remove_any'] = 'Nie masz zezwolenia na usuwanie ka¿dej wiadomo¶ci w tym dziale.';
$txt['cannot_remove_own'] = 'Nie masz zezwolenia na usuwanie swoich wiadomo¶ci w tym dziale.';
$txt['cannot_edit_news'] = 'Nie masz zezwolenia na dodawanie aktualno¶ci.';
$txt['cannot_pm_read'] = 'Nie mo¿esz czytaæ w³asnych prywatnych wiadomo¶ci.';
$txt['cannot_pm_send'] = 'Nie mo¿esz wysy³aæ prywatnych wiadomo¶ci.';
$txt['cannot_karma_edit'] = 'Nie masz zezwolenia na modyfikowanie czyjej¶ reputacji.';
$txt['cannot_lock_any'] = 'Nie masz zezwolenia na zamykanie ka¿dego w±tku.';
$txt['cannot_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich w±tków.';
$txt['cannot_make_sticky'] = 'Nie masz zezwolenia na przyklejenie tego w±tku.';
$txt['cannot_manage_attachments'] = 'Nie masz zezwolenia na zarz±dzanie za³±cznikami i awatarami.';
$txt['cannot_manage_bans'] = 'Nie masz zezwolenia na zmianê listy banów.';
$txt['cannot_manage_boards'] = 'Nie masz zezwolenia na zarz±dzanie dzia³ami i kategoriami.';
$txt['cannot_manage_membergroups'] = 'Nie masz zezwolenia na modyfikacjê lub przyznawanie grupy u¿ytkowników.';
$txt['cannot_manage_permissions'] = 'Nie masz zezwolenia na zarz±dzanie zezwoleniami.';
$txt['cannot_manage_smileys'] = 'Nie masz uprawnieñ na zarz±dzanie u¶mieszkami oraz ikonami w wiadomo¶ciach.';
$txt['cannot_mark_any_notify'] = 'Nie masz zezwoleñ potrzebnych, aby otrzymaæ powiadomienia o tym w±tku.';
$txt['cannot_mark_notify'] = 'Nie masz zezwolenia na otrzymywanie powiadomieñ z tego dzia³u.';
$txt['cannot_merge_any'] = 'Nie masz zezwolenia na scalanie w±tków w jednym z zaznaczonych dzia³ów.';
$txt['cannot_moderate_forum'] = 'Nie masz zezwolenia na moderowanie tego forum.';
$txt['cannot_modify_any'] = 'Nie mo¿esz zmieniaæ ka¿dej wiadomo¶ci.';
$txt['cannot_modify_own'] = 'Nie mo¿esz zmieniaæ swoich wiadomo¶ci.';
$txt['cannot_modify_replies'] = 'Pomimo tego, ¿e ta wiadomo¶æ jest odpowiedzi± na twój w±tek, nie mo¿esz jej modyfikowaæ.';
$txt['cannot_move_own'] = 'Nie masz zezwolenia na przenoszenie w³asnych w±tków w tym dziale.';
$txt['cannot_move_any'] = 'Nie masz zezwolenia na przenoszenie w±tków w tym dziale.';
$txt['cannot_poll_add_own'] = 'Nie masz zezwolenia na dodawanie ankiet do swoich w±tków w tym dziale.';
$txt['cannot_poll_add_any'] = 'Nie masz zezwolenia na dodanie ankiety do tego w±tku.';
$txt['cannot_poll_edit_own'] = 'Pomimo tego, ¿e ta ankieta nale¿y do twojego w±tku, nie mo¿esz jej modyfikowaæ.';
$txt['cannot_poll_edit_any'] = 'Nie masz zezwolenia na modyfikowanie ankiet w tym dziale.';
$txt['cannot_poll_lock_own'] = 'Nie masz zezwolenia na zamykanie swoich ankiet w tym dziale.';
$txt['cannot_poll_lock_any'] = 'Nie masz zezwolenia na zamykanie ka¿dej ankiety.';
$txt['cannot_poll_post'] = 'Nie masz zezwolenia na wysy³anie ankiet w tym dziale.';
$txt['cannot_poll_remove_own'] = 'Nie masz zezwolenia na usuniêcie ankiety ze swojego w±tku.';
$txt['cannot_poll_remove_any'] = 'Nie masz zezwolenia na usuwanie ka¿dej ankiety w tym dziale.';
$txt['cannot_poll_view'] = 'Nie masz zezwolenia na przegl±danie ankiet w tym dziale.';
$txt['cannot_poll_vote'] = 'Nie masz zezwolenia na g³osowanie w tym dziale.';
$txt['cannot_post_attachment'] = 'Nie masz zezwolenia na wysy³anie za³±czników.';
$txt['cannot_post_new'] = 'Nie masz zezwolenia na wysy³anie w±tków w tym dziale.';
$txt['cannot_post_reply_any'] = 'Nie masz zezwolenia na odpowiadanie w tym dziale.';
$txt['cannot_post_reply_own'] = 'Nie masz zezwolenia na odpowiadanie nawet na swoje w±tki w tym dziale.';
$txt['cannot_profile_remove_own'] = 'Nie masz zezwolenia na usuniêcie swojego konta.';
$txt['cannot_profile_remove_any'] = 'Nie masz zezwolenia na usuwanie kont innych u¿ytkowników!';
$txt['cannot_profile_extra_any'] = 'Nie masz zezwolenia na modyfikowanie ustawieñ profilu.';
$txt['cannot_profile_identity_any'] = 'Nie masz zezwolenia na modyfikowanie ustawieñ konta.';
$txt['cannot_profile_title_any'] = 'Nie masz zezwolenia na modyfikowanie tytu³ów osobistych.';
$txt['cannot_profile_extra_own'] = 'Nie masz zezwoleñ potrzebnych, aby modyfikowaæ swój profil.';
$txt['cannot_profile_identity_own'] = 'Nie mo¿esz teraz zmieniæ swojej to¿samo¶ci.';
$txt['cannot_profile_title_own'] = 'Nie masz zezwolenia na modyfikowanie swojego tytu³u osobistego.';
$txt['cannot_profile_server_avatar'] = 'Nie masz uprawnieñ do korzystania z galerii awatarów.';
$txt['cannot_profile_upload_avatar'] = 'Nie masz uprawnieñ do wgrywania awatarów na serwer.';
$txt['cannot_profile_remote_avatar'] = 'Nie masz zezwolenia na u¿ywanie zewnêtrznego awatara.';
$txt['cannot_profile_view_own'] = 'Nie mo¿esz przegl±daæ swojego profilu.';
$txt['cannot_profile_view_any'] = 'Nie mo¿esz przegl±daæ ka¿dego profilu.';
$txt['cannot_delete_own'] = 'Nie mo¿esz usuwaæ w³asnych w±tków w tym dziale.';
$txt['cannot_delete_replies'] = 'Przykro nam, ale nie mo¿esz usuwaæ tych wiadomo¶ci, pomimo ¿e s± odpowiedzi± na twój w±tek.';
$txt['cannot_delete_any'] = 'Nie masz zezwolenia na usuwanie ka¿dego w±tku.';
$txt['cannot_report_any'] = 'Nie masz zezwolenia na zg³aszanie wiadomo¶ci w tym dziale.';
$txt['cannot_search_posts'] = 'Nie masz zezwolenia na wyszukiwanie wiadomo¶ci.';
$txt['cannot_send_mail'] = 'Nie masz zezwolenia na wysy³anie wiadomo¶ci email.';
$txt['cannot_issue_warning'] = 'Przepraszamy, nie masz zezwoleñ na wysy³anie ostrze¿eñ do u¿ytkowników.';
$txt['cannot_send_topic'] = 'Administrator wy³±czy³ mo¿liwo¶æ wysy³ania nowych w±tków w tym dziale.';
$txt['cannot_split_any'] = 'Nie masz zezwolenia na dzielenie ka¿dego w±tku w tym dziale.';
$txt['cannot_view_attachments'] = 'Nie masz zezwolenia na pobieranie i ogl±danie za³±czników w tym dziale.';
$txt['cannot_view_mlist'] = 'Nie masz zezwolenia na przegl±danie listy u¿ytkowników.';
$txt['cannot_view_stats'] = 'Nie masz zezwolenia na przegl±danie statystyk forum.';
$txt['cannot_who_view'] = 'Nie masz zezwolenia na przegl±danie listy u¿ytkowników online.';

$txt['no_theme'] = 'Ten styl nie istnieje.';
$txt['theme_dir_wrong'] = 'Domy¶lny katalog stylów jest z³y, popraw to klikaj±c na ten tekst.';
$txt['registration_disabled'] = 'Rejestracja jest obecnie wy³±czona.';
$txt['registration_no_secret_question'] = 'Ten u¿ytkownik nie ustawi³ sobie sekretnego pytania.';
$txt['poll_range_error'] = 'Ankieta musi byæ otwarta przez wiêcej ni¿ 0 dni.';
$txt['delFirstPost'] = 'Nie mo¿esz usun±æ pierwszej wiadomo¶ci w w±tku.<p>Je¶li chcesz usun±æ w±tek, kliknij na &quot;usuñ w±tek&quot; albo popro¶ o to moderatora lub administratora.</p>';
$txt['parent_error'] = 'Nie mo¿na utworzyæ dzia³u!';
$txt['login_cookie_error'] = 'Nie mo¿esz siê zalogowaæ. Sprawd¼ swoje ustawienia plików cookie.';
$txt['incorrect_answer'] = 'Udzieli³e¶ nieprawid³owej odpowiedzi. Przejd¼ jeden poziom do ty³u, aby spróbowaæ jeszcze raz lub dwa poziomy, aby u¿yæ domy¶lnej metody uzyskiwania hs³a.';
$txt['no_mods'] = 'Nie znaleziono ¿adnych moderatorów!';
$txt['parent_not_found'] = 'Struktura dzia³ów uszkodzona: nie mo¿na znale¼æ dzia³u nadrzêdnego';
$txt['modify_post_time_passed'] = 'Nie mo¿esz edytowaæ tej wiadomo¶æ, poniewa¿ min±³ minimalny czas w którym mog³e¶ to zrobiæ.';

$txt['calendar_off'] = 'Obecnie nie masz dostêpu do kalendarza, poniewa¿ jest wy³±czony.';
$txt['invalid_month'] = 'Niew³a¶ciwy numer miesi±ca.';
$txt['invalid_year'] = 'Niew³a¶ciwy numer roku.';
$txt['invalid_day'] = 'Niepoprawna warto¶æ dnia.';
$txt['event_month_missing'] = 'Brakuje miesi±ca wydarzenia.';
$txt['event_year_missing'] = 'Brakuje roku wydarzenia.';
$txt['event_day_missing'] = 'Brakuje dnia wydarzenia.';
$txt['event_title_missing'] = 'Brakuje nazwy wydarzenia.';
$txt['invalid_date'] = 'Nieprawid³owa data.';
$txt['no_event_title'] = 'nie wprowadzono nazwy wydarzenia.';
$txt['missing_event_id'] = 'Brakuje ID wydarzenia.';
$txt['cant_edit_event'] = 'Nie masz zezwolenia na modyfikowanie tego wydarzenia.';
$txt['missing_board_id'] = 'Brakuje ID dzia³u.';
$txt['missing_topic_id'] = 'Brakuje ID w±tku.';
$txt['topic_doesnt_exist'] = 'W±tek nie istnieje.';
$txt['not_your_topic'] = 'Nie jeste¶ twórc± tego w±tku.';
$txt['board_doesnt_exist'] = 'Dzia³ nie istnieje.';
$txt['no_span'] = 'Funkcja kilkudniowych wydarzeñ jest wy³±czona.';
$txt['invalid_days_numb'] = 'Nieprawid³owa ilo¶æ dni trwania wydarzenia.';

$txt['moveto_noboards'] = 'Dzia³, do którego chcesz przenie¶æ w±tek, nie istnieje!';

$txt['already_activated'] = 'Twoje konto zosta³o ju¿ zaktywowane.';
$txt['still_awaiting_approval'] = 'Twoje konto nadal oczekuje na zatwierdzenie przez administratora.';

$txt['invalid_email'] = 'Nieprawid³owy adres email lub zakres adresów.<br />Przyk³ad prawid³owego adresu: bill.gates@microsoft.com.<br />Przyk³ad prawid³owego zakresu adresów: *@*.microsoft.com';
$txt['invalid_expiration_date'] = 'Nieprawid³owa data wyga¶niêcia';
$txt['invalid_hostname'] = 'Nieprawid³owa nazwa dostawcy lub zakres nazw<br />Przyk³ad prawid³owej nazwy: proxy4.microsoft.com<br />Przyk³ad prawid³owego zakresu nazw: *.microsoft.com';
$txt['invalid_ip'] = 'Nieprawid³owy adres IP lub zakres adresów.<br />Przyk³ad prawid³owego adresu: 127.0.0.1<br />Przyk³ad prawid³owego zakresu: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Nieprawid³owy adres IP lub zakres adresów.<br />Przyk³ad prawid³owego adresu IP: 127.0.0.1<br />Przyk³ad prawid³owego zakresu IP: 127.0.0.*';
$txt['invalid_username'] = 'Nazwa u¿ytkownika nie znaleziona';
$txt['no_ban_admin'] = 'Nie mo¿esz zbanowaæ administratora - najpierw musisz go zdegradowaæ!';
$txt['no_bantype_selected'] = 'Nie wybrano typu bana';
$txt['ban_not_found'] = 'Ban nie znaleziony';
$txt['ban_unknown_restriction_type'] = 'Rodzaj ograniczenia nie znany';
$txt['ban_name_empty'] = 'Nazwa bana jest pusta';
$txt['ban_name_exists'] = 'Podana nazwa bana (%1$s) ju¿ istnieje, wybierz inn±.';
$txt['ban_trigger_already_exists'] = 'Tem ban (%1$s) ju¿ istnieje w %2$s. ';

$txt['recycle_no_valid_board'] = 'Nie wybrano dzia³u do zachowywania w±tków';

$txt['login_threshold_fail'] = 'Wyczerpa³e¶ ilo¶æ prób zalogowania. Spróbuj jeszcze raz pó¼niej.';
$txt['login_threshold_brute_fail'] = 'Wybacz, wyczerpa³e¶ ju¿ ilo¶æ prób zalogowania. Odczekaj 30 sekund i spróbuj ponownie pó¼niej.';

$txt['who_off'] = 'Obecnie nie masz dostêpu do listy u¿ytkowników online, poniewa¿ jest wy³±czona.';

$txt['merge_create_topic_failed'] = 'B³±d podczas tworzenia w±tku.';
$txt['merge_need_more_topics'] = 'Potrzeba co najmniej dwóch w±tków aby je scaliæ.';

$txt['postWaitTime_broken'] = 'Ostatnia odpowied¼ z twojego IP by³a %1$d sekund temu. Spróbuj ponownie.';
$txt['registerWaitTime_broken'] = 'Zarejestrowa³e¶ siê ju¿ %1$d sekund temu!';
$txt['loginWaitTime_broken'] = 'Musisz poczekaæ oko³o %1$d sekund aby ponownie siê zalogowaæ.';
$txt['pmWaitTime_broken'] = 'Ostatnia prywatna wiadomo¶æ z twojego IP by³a %1$d sekund temu. Spróbuj ponownie.';
$txt['reporttmWaitTime_broken'] = 'Ostatni w±tek z twojego IP by³ %1$d sekund temu. Spróbuj ponownie.';
$txt['sendtopcWaitTime_broken'] = 'Ostatni w±tek wys³any z twojego IP by³ %1$d sekund temu. Spróbuj ponownie.';
$txt['sendmailWaitTime_broken'] = 'Ostatni email wys³any z twojego IP by³ %1$d sekund temu. Spróbuj ponownie.';
$txt['searchWaitTime_broken'] = 'Od twojego ostatniego wyszukiwania up³ynê³o mniej ni¿ %1$d. Spróbuj pó¼niej.';

$txt['email_missing_data'] = 'Musisz wpisaæ co¶ w pola tematu i wiadomo¶ci.';

$txt['topic_gone'] = 'W±tek lub dzia³, którego szukasz nie istnieje albo nie masz do niego dostêpu.';
$txt['theme_edit_missing'] = 'Plik który chcesz zmieniæ nie zosta³ znaleziony!';

$txt['attachments_no_write'] = 'Nie mo¿na zapisywaæ w katalogu za³±czników. Twój za³±cznik lub awatar nie mo¿e byæ zapisany.';
$txt['attachments_limit_per_post'] = 'Maksymalna liczba za³±czników na jedn± wiadomo¶æ to: %1$d';

$txt['no_dump_database'] = 'Tylko administratorzy mog± wykonywaæ kopie zapasowe bazy danych!';
$txt['pm_not_yours'] = 'Prywatna wiadomo¶æ, któr± próbujesz cytowaæ nie jest twoja lub nie istnieje, przejd¼ wstecz i spróbuj jeszcze raz.';
$txt['mangled_post'] = 'Uszkodzony formularz danych - przejd¼ wstecz i spróbuj jeszcze raz.';
$txt['quoted_post_deleted'] = 'Wiadomo¶æ, któr± próbujesz zacytowaæ, nie istnieje, zosta³a skasowana lub nie masz uprawnieñ do czytania jej.';
$txt['pm_too_many_per_hour'] = 'Przekroczy³e¶ limit %1$d wiadomo¶ci prywatnych na godzinê.';
$txt['labels_too_many'] = 'Przepraszamy, %1$s wiadomo¶æ posiada maksymaln± liczbê etykiet!';

$txt['register_only_once'] = 'Przepraszamy, ale nie mo¿na rejestrowaæ wielu kont w tym samym czasie z tego samego komputera.';
$txt['admin_setting_coppa_require_contact'] = 'Musisz wpisaæ kod pocztowy lub nr faxu je¶li to konieczne do potwierdzenia twojej wiarygodno¶ci.';

$txt['error_long_name'] = 'Nazwa u¿ytkownika, której u¿y³e¶, by³a za d³uga.';
$txt['error_no_name'] = 'Nie podano nazwy u¿ytkownika.';
$txt['error_bad_name'] = 'Podana przez Ciebie nazwa u¿ytkownika nie mo¿e zostaæ u¿yta, poniewa¿ zawiera nazwê zarezerwowan±.';
$txt['error_no_email'] = 'Nie podano adresu email.';
$txt['error_bad_email'] = 'Podano nieprawid³owy adres email.';
$txt['error_no_event'] = 'Nie podano nazwy wydarzenia.';
$txt['error_no_subject'] = 'Nie wpisano tematu.';
$txt['error_no_question'] = 'Nie wpisano pytania do ankiety.';
$txt['error_no_message'] = 'Nie wpisano tre¶ci wiadomo¶ci.';
$txt['error_long_message'] = 'Wiadomo¶æ przekracza dozwolon± d³ugo¶æ (%s znaków).';
$txt['error_no_comment'] = 'Pole komentarza nie zosta³o uzupe³nione.';
$txt['error_session_timeout'] = 'Twoja sesja dobieg³a koñca podczas pisania. Spróbuj ponownie wys³aæ wiadomo¶æ.';
$txt['error_no_to'] = 'Nie podano odbiorców.';
$txt['error_bad_to'] = 'Nie znaleziono jednego lub wiêcej odbiorców \'do\'.';
$txt['error_bad_bcc'] = 'Nie znaleziono jednego lub wiêcej odbiorców \'kopia do\'.';
$txt['error_form_already_submitted'] = 'Ta wiadomo¶æ zosta³a ju¿ wys³ana! Mo¿e to byæ spowodowane przypadkowym podwójnym klikniêciem lub prób± od¶wie¿enia strony.';
$txt['error_poll_few'] = 'Musisz daæ przynajmniej dwie mo¿liwo¶ci do wyboru!';
$txt['error_need_qr_verification'] = 'Uzupe³nij poni¿sz± sekcjê weryfikacji, aby wys³aæ wiadomo¶æ.';
$txt['error_wrong_verification_code'] = 'Wpisane litery nie pasuj± do liter pokazanych na obrazku.';
$txt['error_wrong_verification_answer'] = 'Odpowiedzia³e¶ b³êdnie na pytanie weryfikacyjne.';
$txt['error_need_verification_code'] = 'Wprowad¼ ni¿ej kod weryfikacyjny aby kontynuowaæ.';
$txt['error_bad_file'] = 'Przepraszamy, podany plik nie mo¿e zostaæ otwarty: %1$s';
$txt['error_bad_line'] = 'Podana linia jest niepoprawna.';

$txt['smiley_not_found'] = 'U¶mieszek nie znaleziony.';
$txt['smiley_has_no_code'] = 'Temu u¶mieszkowi nie przyznano kodu.';
$txt['smiley_has_no_filename'] = 'Nie podano nazwy pliku dla tego u¶mieszku.';
$txt['smiley_not_unique'] = 'U¶mieszek z tym kodem ju¿ istnieje.';
$txt['smiley_set_already_exists'] = 'Zestaw u¶mieszków pod tym adresem URL ju¿ istnieje.';
$txt['smiley_set_not_found'] = 'Zestaw u¶mieszków nie znaleziony';
$txt['smiley_set_path_already_used'] = 'Adres URL tego zestawu u¶mieszków jest ju¿ zajêty przez inny zestaw.';
$txt['smiley_set_unable_to_import'] = 'Nie mo¿na importowaæ zestawu u¶mieszków. Katalog jest niew³a¶ciwy lub nie mo¿na uzyskaæ do niego dostêpu.';

$txt['smileys_upload_error'] = 'B³±d przy wysy³aniu pliku.';
$txt['smileys_upload_error_blank'] = 'Wszystkie zestawy u¶mieszków musz± mieæ obrazek!';
$txt['smileys_upload_error_name'] = 'Wszystkie u¶mieszki musz± mieæ tê sam± nazwê pliku!';
$txt['smileys_upload_error_illegal'] = 'Niew³a¶ciwy typ pliku.';

$txt['search_invalid_weights'] = 'Wagi wyszukiwania nie s± poprawnie skonfigurowane. Przynajmniej jedna musi mieæ warto¶æ inn± ni¿ zero. Zg³o¶ ten b³±d administratorowi.';
$txt['unable_to_create_temporary'] = 'Funkcja wyszukiwania nie mog³a stworzyæ tymczasowych tabel. Spróbuj ponownie.';

$txt['package_no_file'] = 'Nie mo¿na znale¼æ pliku pakietu!';
$txt['packageget_unable'] = 'Nie mo¿na po³±czyæ siê z serwerem. Spróbuj u¿ywaj±c <a href="%1$s" target="_blank" class="new_win">tego adresu</a>.';
$txt['not_on_simplemachines'] = 'Pakiety mog± byæ pobierane w ten sposób tylko z serwera simplemachines.org.';
$txt['package_cant_uninstall'] = 'Ten pakiet nie by³ nigdy zainstalowany lub by³ ju¿ odinstalowany - nie mo¿esz go teraz odinstalowaæ.';
$txt['package_cant_download'] = 'Nie mo¿esz pobieraæ lub instalowaæ nowych pakietów, poniewa¿ nie mo¿na zapisywaæ w katalogu pakietów!';
$txt['package_upload_error_nofile'] = 'Nie zaznaczy³e¶ pakietu do wgrania.';
$txt['package_upload_error_failed'] = 'Nie mo¿na wys³aæ pakietu, sprawd¼ zezwolenie zapisu katalogu.';
$txt['package_upload_error_exists'] = 'Plik, który wysy³asz, jest ju¿ na serwerze. Najpierw go skasuj, a potem wy¶lij ponownie.';
$txt['package_upload_error_supports'] = 'Mened¿er pakietów aktualnie pozawala tylko na takie typy plików: %1$s.';
$txt['package_upload_error_broken'] = 'Pakiet który starasz siê wys³aæ jest nie poprawny lub uszkodzony i powoduje nastêpuj±cy b³±d:<br />&quot;%1$s&quot; .';

$txt['package_get_error_not_found'] = 'Pakiet, który próbujesz zainstalowaæ nie mo¿e zostaæ zlokalizowany. Mo¿esz spróbowaæ rêcznie wgraæ pakiet do katalogu pakietów.';
$txt['package_get_error_missing_xml'] = 'Próbujesz zainstalowaæ pakiet nie posiadaj±cy pliku package-info.xml, który musi byæ w g³ównym katalogu pakietu.';
$txt['package_get_error_is_zero'] = 'Mimo, ¿e pakiet zosta³ pobrany na serwer, wydaje siê byæ pusty. Sprawd¼ czy katalog pakietów oraz podkatalog &quot;temp&quot; s± zapisywalne. Je¿eli problem nie ust±pi, powiniene¶ spróbowaæ rozpakowaæ pakiet na twoim w³asnym komputerze i wgraæ wypakowane pliki do podkatalogu w katalogu pakietów i spróbowaæ jeszcze raz. Na przyk³ad, je¶li pakiet by³ nazwany shout.tar.gz to:<br />1) Pobierz pakiet na twój komputer i rozpakuj<br />2) U¿ywaj±c klienta FTP stwórz nowy katalog w folderze &quot;Packages&quot;, w tym przyk³adzie mo¿esz go nazwaæ "shout".<br />3) Wgraj wszystkie wypakowane pliki pakietu do tego katalogu.<br />4) Wróæ do strony przegl±dania pakietów w menad¿erze, pakiet powinien zostaæ automatycznie znaleziony przez SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF nie mog³o znale¼æ ¿adnych poprawnych informacji w pliku package-info.xml, za³±czonym w pakiecie. Powodem mo¿e byæ b³±d w modyfikacji albo pakiet jest uszkodzony.';

$txt['no_membergroup_selected'] = 'Nie zaznaczono ¿adnej grupy u¿ytkowników';
$txt['membergroup_does_not_exist'] = 'Grupa u¿ytkowników nie istnieje lub jest nieprawid³owa.';

$txt['at_least_one_admin'] = 'Musi istnieæ przynajmniej jeden Administrator forum!';

$txt['error_functionality_not_windows'] = 'Przepraszamy, ta opcja obecnie nie jest dostêpna dla serwerów pracuj±cych na Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Za³±cznik nie znaleziony';

$txt['error_no_boards_selected'] = 'Nie wybrano prawid³owo dzia³ów!';
$txt['error_invalid_search_string'] = 'Czy nie zapomnia³e¶ podaæ co szukaæ?';
$txt['error_invalid_search_string_blacklist'] = 'Twoje wyszukiwane zapytanie zawiera zbyt banalne s³owa. Prosimy spróbuj ponownie z innym zapytaniem.';
$txt['error_search_string_small_words'] = 'Ka¿e s³owo musi sk³adaæ siê przynajmniej z dwóch znaków.';
$txt['error_query_not_specific_enough'] = 'Twoje zapytanie nie jest wystarczaj±co specyficzne. Spróbuj u¿yæ d³u¿szych s³ów.';
$txt['error_no_messages_in_time_frame'] = 'Nie znaleziono ¿adnych pasuj±cych wiadomo¶ci w wybranym przedziale czasowym.';
$txt['error_no_labels_selected'] = 'Nie wybrano etykiety!';
$txt['error_no_search_daemon'] = 'Brak dostêpu do narzêdzia wyszukiwania';

$txt['profile_errors_occurred'] = 'Wyst±pi³y nastêpuj±ce b³êdy podczas próby zapisania twojego profilu';
$txt['profile_error_bad_offset'] = 'Niepoprawnie podana strefa czasowa';
$txt['profile_error_no_name'] = 'Pole z nazw± u¿ytkownika jest puste';
$txt['profile_error_name_taken'] = 'Wybrana nazwa u¿ytkownika/nazwa wy¶wietlana jest ju¿ zajêta';
$txt['profile_error_name_too_long'] = 'Wybrana nazwa u¿ytkownika jest za d³uga. Nie powinna przekraczaæ 60 znaków';
$txt['profile_error_no_email'] = 'Pole email jest puste';
$txt['profile_error_bad_email'] = 'Nie wprowadzi³e¶ poprawnego adresu email';
$txt['profile_error_email_taken'] = 'Inny u¿ytkownik jest ju¿ zarejestrowany z tym adresem email';
$txt['profile_error_no_password'] = 'Has³o nie zosta³o wpisane';
$txt['profile_error_bad_new_password'] = 'Podane has³a nie s± zgodne';
$txt['profile_error_bad_password'] = 'Has³o które wprowadzi³e¶ jest nieprawid³owe';
$txt['profile_error_bad_avatar'] = 'Awatar którego zaznaczy³e¶ jest za du¿y, lub nie jest awatarem';
$txt['profile_error_password_short'] = 'Twoje has³o musi mieæ co najmniej ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' znaków(i) d³ugo¶ci.';
$txt['profile_error_password_restricted_words'] = 'Twoje has³o nie mo¿e zwieraæ Twojej nazwy u¿ytkownika, adresu email ani innych popularnych s³ów.';
$txt['profile_error_password_chars'] = 'Twoje has³o musi zawieraæ mieszankê du¿ych i ma³ych liter, oraz cyfr.';
$txt['profile_error_already_requested_group'] = 'Ju¿ posiadasz pierwszeñstwo do przyznania do tej grupy!';
$txt['profile_error_openid_in_use'] = 'Podany URL weryfikacyjny dla OpenID jest ju¿ u¿ywane przez innego u¿ytkownika.';

$txt['mysql_error_space'] = '- sprawd¼ miejsce zapisu bazy danych lub skontaktuj siê z administratorem serwera.';

$txt['icon_not_found'] = 'Plik ikony nie zosta³a znaleziona w domy¶lnym stylu - upewnij siê ¿e obrazek zosta³ wys³any i spróbuj ponownie.';
$txt['icon_after_itself'] = 'Ikona nie mo¿e byæ pozycjonowana wzglêdem siebie!';
$txt['icon_name_too_long'] = 'Nazwa pliku ikony nie mo¿e byæ d³u¿sza ni¿ 16 znaków';

$txt['name_censored'] = 'Przykro nam, nazwa której próbujesz u¿yæ, %1$s, zawiera s³owa które zosta³y ocenzurowane. U¿yj innej nazwy.';

$txt['poll_already_exists'] = 'W±tek mo¿e mieæ tylko jedn± powi±zan± ze sob± ankietê!';
$txt['poll_not_found'] = 'Nie ma ankiet zwi±zanych z tym w±tkiem!';

$txt['error_while_adding_poll'] = 'Nastêpuj±cy b³±d lub b³êdy wyst±pi³y przy dodawaniu ankiety';
$txt['error_while_editing_poll'] = 'Nastêpuj±cy b³±d lub b³êdy wyst±pi³y przy edycji tej ankiety';

$txt['loadavg_search_disabled'] = 'Z powodu du¿ego obci±¿enia serwera, funkcja wyszukiwania jest tymczasowo wy³±czona.';
$txt['loadavg_generic_disabled'] = 'Przykro nam, z powodu du¿ego obci±¿enia serwera, ta opcja jest obecnie niedostêpna.';
$txt['loadavg_allunread_disabled'] = 'Zasoby serwera s± czasowo pod zbyt du¿ym obci±¿eniem aby znale¼æ wszystkie w±tki których nie czyta³e¶.';
$txt['loadavg_unreadreplies_disabled'] = 'W tej chwili serwer jest przeci±¿ony. Spróbuj ponownie za chwile.';
$txt['loadavg_show_posts_disabled'] = 'Spróbuj jeszcze raz pó¼niej. Z powodu du¿ego obci±¿enia serwera wiadomo¶ci tego u¿ytkownika nie s± w tej chwili dostêpne.';
$txt['loadavg_unread_disabled'] = 'Zasoby serwera s± obecnie zbyt wysokie aby móc wy¶wietliæ pe³n± listê nieprzeczytanych w±tków.';

$txt['cannot_edit_permissions_inherited'] = 'Nie mo¿esz edytowaæ konkretnie dziedziczonych zezwoleñ, musisz edytowaæ albo grupê albo dziedzicz±cego cz³onka grupy.';

$txt['mc_no_modreport_specified'] = 'Musisz sprecyzowaæ który raport chcesz wy¶wietliæ.';
$txt['mc_no_modreport_found'] = 'Podany raport nie istnieje lub jest poza twoim limitem';

$txt['st_cannot_retrieve_file'] = 'Nie mo¿na odzyskaæ pliku %1$s.';
$txt['admin_file_not_found'] = 'Nie mo¿na za³adowaæ wybranego pliku: %1$s.';

$txt['themes_none_selectable'] = 'Przynajmniej jeden styl musi byæ wybrany.';
$txt['themes_default_selectable'] = 'Standardowy styl forum musi byæ stylem wybieralnym.';
$txt['ignoreboards_disallowed'] = 'Opcja ignorowania for nie jest w³±czona.';

$txt['mboards_delete_error'] = 'Nie zaznaczono kategorii!';
$txt['mboards_delete_board_error'] = 'Nie zaznaczono forum!';

$txt['smileys_upload_error_notwritable'] = 'Podana ¶cie¿ka u¶mieszków jest niezapisywalna: %1$s';
$txt['smileys_upload_error_types'] = 'Obrazek mo¿e posiadaæ tylko podane rozszerzenia: %1$s.';

$txt['change_email_success'] = 'Twój adres email zosta³ zmieniony, nowy email z aktywacj± zosta³ wys³any na podany adres.';
$txt['resend_email_success'] = 'Nowy email z aktywacj± zosta³ wys³any pomy¶lnie.';

$txt['custom_option_need_name'] = 'Opcja profilu musi mieæ nazwê!';
$txt['custom_option_not_unique'] = 'Pole nazwy nie jest unikalne!';

$txt['warning_no_reason'] = 'Musisz wpisaæ powód ostrze¿enia u¿ytkownika.';
$txt['warning_notify_blank'] = 'Zaznaczy³e¶ powiadamianie u¿ytkownika lecz nie wype³ni³e¶ pola tematu lub wiadomo¶ci.';

$txt['cannot_connect_doc_site'] = 'Nie mo¿na po³±czyæ siê z Simple Machines Online Manual. Sprawd¼ czy konfiguracja twojego serwera zezwala na przychodz±ce po³±czenia i spróbuj ponownie.';

$txt['movetopic_no_reason'] = 'Musisz wprowadziæ powód przesuniêcia w±tku albo odznaczyæ opcjê \'Wy¶lij w±tek przekierowuj±cy\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'Podany identyfikator nie zwróci³ poprawnych informacji.';
$txt['openid_return_no_mode'] = 'Provider identyfikacji nie odpowiada z opcj± Open ID.';
$txt['openid_not_resolved'] = 'Provider identyfikacji nie zatwierdzi³ twojej pro¶by.';
$txt['openid_no_assoc'] = 'Nie znaleziono ¿±danej wspó³pracy z providerem identyfikacji.';
$txt['openid_sig_invalid'] = 'Sygnatura do providera identyfikacji jest nieprawid³owa.';
$txt['openid_load_data'] = 'Nie mo¿na za³adowaæ danych z twojego ¿±dania o logowanie. Spróbuj ponownie.';
$txt['openid_not_verified'] = 'Adres OpenID nie mo¿e zostaæ zweryfikowany. Prosimy zaloguj siê do weryfikacji.';

$txt['error_custom_field_too_long'] = 'Pole &quot;%1$s&quot; nie mo¿e byæ wiêksze ni¿ %2$d znaków.';
$txt['error_custom_field_invalid_email'] = 'Pole &quot;%1$s&quot; musi zawieraæ prawid³owy adres email.';
$txt['error_custom_field_not_number'] = 'Pole &quot;%1$s&quot; musi byæ numeryczne.';
$txt['error_custom_field_inproper_format'] = 'Pole &quot;%1$s&quot; posiada b³êdny format.';
$txt['error_custom_field_empty'] = 'Pole &quot;%1$s&quot; nie mo¿e byæ puste.';

$txt['email_no_template'] = 'Email &quot;%1$s&quot; nie mo¿e zostaæ znaleziony.';

$txt['search_api_missing'] = 'Wyszukiwanie API nie mo¿e zostaæ znalezione! Skontaktuj siê z administratorem aby sprawdzi³ czy wys³a³ poprawne pliki.';
$txt['search_api_not_compatible'] = 'Forum u¿ywa nieaktualnego wyszukiwania API - przenoszenie do standardowego wyszukiwania. Sprawd¼ plik %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Nie mo¿esz przywróciæ pierwszej wiadomo¶ci w tym w±tku.';
$txt['parent_topic_missing'] = 'W±tek wiadomo¶ci któr± chcesz przywróciæ zosta³ usuniêty.';
$txt['restored_disabled'] = 'Przywracanie w±tków zosta³o wy³±czone.';
$txt['restore_not_found'] = 'Nastêpuj±ce wiadomo¶ci nie zosta³y przywrócone; oryginalny w±tek móg³ zostaæ usuniêty:<ul style="margin-top: 0px;">%1$s</ul> Bêdziesz musia³ przesun±æ je samodzielnie.';

$txt['error_invalid_dir'] = 'Podany katalog jest nieprawid³owy.';

$txt['error_sqlite_optimizing'] = 'Sqlite optymalizuje bazê danych, forum jest niedostêpne dopóki proces nie zostanie ukoñczony. Spróbuj od¶wie¿yæ t± stronê za moment.';

?>