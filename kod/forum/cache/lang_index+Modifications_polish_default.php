<?php
// Version: 2.0 RC3; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

/* Important note about language files in SMF 2.0 upwards:
	1) All language entries in SMF 2.0 are cached. All edits should therefore be made through the admin menu. If you do
	   edit a language file manually you will not see the changes in SMF until the cache refreshes. To manually refresh
	   the cache go to Admin => Maintenance => Clean Cache.

	2) Please also note that strings should use single quotes, not double quotes for enclosing the string
	   except for line breaks.

*/
// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'pl_PL';
$txt['lang_dictionary'] = 'pl';
$txt['lang_spelling'] = '';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'ISO-8859-2';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('Niedziela', 'Poniedzia³ek', 'Wtorek', '¦roda', 'Czwartek', 'Pi±tek', 'Sobota');
$txt['days_short'] = array('Nd', 'Pn', 'Wt', '¦r', 'Cz', 'Pt', 'So');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Styczeñ', 'Luty', 'Marzec', 'Kwiecieñ', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpieñ', 'Wrzesieñ', 'Pa¼dziernik', 'Listopad', 'Grudzieñ');
$txt['months_titles'] = array(1 => 'Styczeñ', 'Luty', 'Marzec', 'Kwiecieñ', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpieñ', 'Wrzesieñ', 'Pa¼dziernik', 'Listopad', 'Grudzieñ');
$txt['months_short'] = array(1 => 'Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa¼', 'Lis', 'Gru');

$txt['newmessages0'] = 'nowa';
$txt['newmessages1'] = 'nowych';
$txt['newmessages3'] = 'Nowych';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Administracja';
$txt['moderate'] = 'Moderuj';

$txt['save'] = 'Zapisz';

$txt['modify'] = 'Modyfikuj';
$txt['forum_index'] = '%1$s - Indeks';
$txt['members'] = 'U¿ytkowników';
$txt['board_name'] = 'Nazwa dzia³u';
$txt['posts'] = 'Wiadomo¶ci';

$txt['member_postcount'] = 'Wiadomo¶ci';
$txt['no_subject'] = '(Bez tematu)';
$txt['view_profile'] = 'Zobacz profil';
$txt['guest_title'] = 'Go¶æ';
$txt['author'] = 'Autor';
$txt['on'] = 'dnia';
$txt['remove'] = 'Usuñ';
$txt['start_new_topic'] = 'Rozpocznij nowy w±tek';

$txt['login'] = 'Zaloguj siê';
// Use numeric entities in the below string.
$txt['username'] = 'Nazwa u¿ytkownika';
$txt['password'] = 'Has³o';

$txt['username_no_exist'] = 'Nazwa u¿ytkownika nie istnieje.';
$txt['no_user_with_email'] = 'Brak u¿ytkowników powi±zanych z tym adresem email.';

$txt['board_moderator'] = 'Moderator dzia³u';
$txt['remove_topic'] = 'Usuñ w±tek';
$txt['topics'] = 'w±tkach,';
$txt['modify_msg'] = 'Modyfikuj wiadomo¶æ';
$txt['name'] = 'Nazwa wy¶wietlana';
$txt['email'] = 'Email';
$txt['subject'] = 'Temat';
$txt['message'] = 'Wiadomo¶æ';
$txt['redirects'] = 'Przekierowania';
$txt['quick_modify'] = 'Szybka edycja';

$txt['choose_pass'] = 'Wybierz has³o';
$txt['verify_pass'] = 'Potwierd¼ has³o';
$txt['position'] = 'Pozycja';

$txt['profile_of'] = 'Zobacz profil';
$txt['total'] = 'W sumie';
$txt['posts_made'] = 'wiadomo¶ci w';
$txt['website'] = 'Strona WWW';
$txt['register'] = 'Rejestracja';
$txt['warning_status'] = 'Status ostrze¿enia';
$txt['user_warn_watch'] = 'U¿ytkownik jest na li¶cie obserwowanych';
$txt['user_warn_moderate'] = 'Wiadomo¶æ u¿ytkownika do³±czy³a do kolejki oczekuj±cych na zatwierdzenie';
$txt['user_warn_mute'] = 'U¿ytkownik jest zbanowany i nie mo¿e wysy³aæ wiadomo¶ci';
$txt['warn_watch'] = 'Obserwowany';
$txt['warn_moderate'] = 'Moderowany';
$txt['warn_mute'] = 'Wyciszony';

$txt['message_index'] = 'Indeks wiadomo¶ci';
$txt['news'] = 'Aktualno¶ci';
$txt['home'] = 'Strona g³ówna';

$txt['lock_unlock'] = 'Zamknij/Otwórz w±tek';
$txt['post'] = 'Wy¶lij wiadomo¶æ';
$txt['error_occured'] = 'Wyst±pi³ b³±d!';
$txt['at'] = 'w';
$txt['logout'] = 'Wyloguj siê';
$txt['started_by'] = 'Zaczêty przez';
$txt['replies'] = 'Odpowiedzi';
$txt['last_post'] = 'Ostatnia wiadomo¶æ';
$txt['admin_login'] = 'Logowanie do administracji';
// Use numeric entities in the below string.
$txt['topic'] = 'W±tek';
$txt['help'] = 'Pomoc';
$txt['notify'] = 'Powiadamiaj';
$txt['unnotify'] = 'Przestañ ¶ledziæ';
$txt['notify_request'] = 'Czy chcesz otrzymywaæ powiadomienia, kiedy kto¶ odpowie na ten w±tek?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Pozdrowienia, Za³oga' . "\n" . $context['forum_name'] .'.';
$txt['notify_replies'] = 'Powiadamiaj o odpowiedziach';
$txt['move_topic'] = 'Przesuñ w±tek';
$txt['move_to'] = 'Przesuñ do';
$txt['pages'] = 'Strony';
$txt['users_active'] = 'U¿ytkownicy aktywni w ci±gu ostatnich %s minut';
$txt['personal_messages'] = 'Prywatne Wiadomo¶ci';
$txt['reply_quote'] = 'Odpowiedz cytuj±c';
$txt['reply'] = 'Odpowiedz';
$txt['reply_noun'] = 'Odpowied¼';
$txt['approve'] = 'Zatwierd¼';
$txt['approve_all'] = 'zatwierd¼ wszystko';
$txt['awaiting_approval'] = 'Oczekuj±ce na zatwierdzenie';
$txt['attach_awaiting_approve'] = 'Za³±czniki oczekuj±ce na zatwierdzenie';
$txt['post_awaiting_approval'] = 'Uwaga: Ta wiadomo¶æ oczekuje na zatwierdzenie przez moderatora.';
$txt['there_are_unapproved_topics'] = 'Jest %1$s w±tków i %2$s wiadomo¶ci oczekuj±cych na zatwierdzenie w tym forum. Kliknij <a href="%3$s">tutaj</a> aby wy¶wietliæ wszystkie.';

$txt['msg_alert_none'] = 'Brak wiadomo¶ci...';
$txt['msg_alert_you_have'] = 'masz';
$txt['msg_alert_messages'] = 'wiadomo¶ci';
$txt['remove_message'] = 'Usun±æ t± wiadomo¶æ';

$txt['online_users'] = 'U¿ytkownicy online';
$txt['personal_message'] = 'Prywatne Wiadomo¶ci';
$txt['jump_to'] = 'Skocz do';
$txt['go'] = 'Id¼';
$txt['are_sure_remove_topic'] = 'Na pewno chcesz usun±æ ten w±tek?';
$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

$txt['search_end_results'] = 'Koniec wyników';
$txt['search_on'] = 'w';

$txt['search'] = 'Szukaj';
$txt['all'] = 'Wszystkie';

$txt['back'] = 'Wróæ';
$txt['password_reminder'] = 'Przypomnienie has³a';
$txt['topic_started'] = 'W±tek zaczêty przez';
$txt['title'] = 'Tytu³';
$txt['post_by'] = 'Wiadomo¶æ wys³ana przez';
$txt['memberlist_searchable'] = 'Lista zarejestrowanych u¿ytkowników.';
$txt['welcome_member'] = 'Witamy';
$txt['admin_center'] = 'Centrum administracji';
$txt['last_edit'] = 'Ostatnia zmiana';
$txt['notify_deactivate'] = 'Czy chcesz wy³±czyæ powiadamianie o tym w±tku?';

$txt['recent_posts'] = 'Ostatnie wiadomo¶ci';

$txt['location'] = 'Miejsce pobytu';
$txt['gender'] = 'P³eæ';
$txt['date_registered'] = 'Data rejestracji';

$txt['recent_view'] = 'Zobacz ostatnio wys³ane wiadomo¶ci';
$txt['recent_updated'] = 'jest najbardziej aktualnym w±tkiem';

$txt['male'] = 'Mê¿czyzna';
$txt['female'] = 'Kobieta';

$txt['error_invalid_characters_username'] = 'Nieprawid³owy znak w nazwie u¿ytkownika.';

$txt['welcome_guest'] = 'Witamy, <strong>%1$s</strong>. <a href="' . $scripturl . '?action=login">Zaloguj siê</a> lub <a href="' . $scripturl . '?action=register">zarejestruj</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">Zaloguj siê</a> lub <a href="' . $scripturl . '?action=register">zarejestruj</a>.';
$txt['welcome_guest_activate'] = 'Czy dotar³ do Ciebie <a href="' . $scripturl . '?action=activate">email aktywacyjny?</a>';
$txt['hello_member'] = 'Hej,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Witamy,';
$txt['welmsg_hey'] = 'Hej,';
$txt['welmsg_welcome'] = 'Witamy,';
$txt['welmsg_please'] = 'Proszê';
$txt['select_destination'] = 'Wybierz cel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Wys³any przez';

$txt['icon_smiley'] = 'U¶miech';
$txt['icon_angry'] = 'Z³o¶æ';
$txt['icon_cheesy'] = 'Chichot';
$txt['icon_laugh'] = '¦miech';
$txt['icon_sad'] = 'Smutny';
$txt['icon_wink'] = 'Mrugniêcie';
$txt['icon_grin'] = 'Du¿y u¶miech';
$txt['icon_shocked'] = 'Szok';
$txt['icon_cool'] = 'Spoko';
$txt['icon_huh'] = 'Co?';
$txt['icon_rolleyes'] = 'Z politowaniem';
$txt['icon_tongue'] = 'Jêzyk';
$txt['icon_embarrassed'] = 'Zawstydzony';
$txt['icon_lips'] = 'Buzia na k³ódkê';
$txt['icon_undecided'] = 'Niezdecydowany';
$txt['icon_kiss'] = 'Buziak';
$txt['icon_cry'] = 'P³acz';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatorzy';

$txt['mark_board_read'] = 'Zaznacz w±tki w tym dziale jako przeczytane';
$txt['views'] = 'Wy¶wietleñ';
$txt['new'] = 'Nowy';

$txt['view_all_members'] = 'Zobacz wszystkich u¿ytkowników';
$txt['view'] = 'Zobacz';

$txt['viewing_members'] = 'Przegl±danie u¿ytkowników %1$s do %2$s';
$txt['of_total_members'] = 'z %1$s wszystkich u¿ytkowników';

$txt['forgot_your_password'] = 'Zapomnia³e¶ has³a?';

$txt['date'] = 'Data';
// Use numeric entities in the below string.
$txt['from'] = 'Od';
$txt['check_new_messages'] = 'Sprawd¼ czy nie ma nowych wiadomo¶ci';
$txt['to'] = 'To';

$txt['board_topics'] = 'W±tków';
$txt['members_title'] = 'U¿ytkownicy';
$txt['members_list'] = 'Lista u¿ytkowników';
$txt['new_posts'] = 'Nowe wiadomo¶ci';
$txt['old_posts'] = 'Brak nowych wiadomo¶ci';
$txt['redirect_board'] = 'Przekieruj forum';

$txt['sendtopic_send'] = 'Wy¶lij';
$txt['report_sent'] = 'Your report has been sent successfully.';

$txt['time_offset'] = 'Przesuniêcie czasu';
$txt['or'] = 'lub';

$txt['no_matches'] = 'Nic nie znaleziono';

$txt['notification'] = 'Powiadomienie';

$txt['your_ban'] = 'Przepraszamy %1$s, zosta³e¶ zbanowany na tym forum!';
$txt['your_ban_expires'] = 'Twój ban wyga¶nie za %1$s.';
$txt['your_ban_expires_never'] = 'Twój ban nie wyga¶nie.';
$txt['ban_continue_browse'] = 'Mo¿esz kontynuowaæ przegl±danie forum jako go¶æ.';

$txt['mark_as_read'] = 'Zaznacz w±tki jako przeczytane';

$txt['hot_topics'] = 'Gor±cy w±tek (Wiêcej ni¿ %s odpowiedzi)';
$txt['very_hot_topics'] = 'Bardzo gor±cy w±tek (Wiêcej ni¿ %s odpowiedzi)';
$txt['locked_topic'] = 'Zamkniêty w±tek';
$txt['normal_topic'] = 'Normalny w±tek';
$txt['participation_caption'] = 'W±tek w którym uczestniczy³e¶';

$txt['go_caps'] = 'ID¬';

$txt['print'] = 'Drukuj';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Podgl±d w±tku';
$txt['not_applicable'] = 'brak';
$txt['message_lowercase'] = 'wiadomo¶æ';
$txt['name_in_use'] = 'Ta nazwa jest ju¿ u¿ywana przez innego u¿ytkownika.';

$txt['total_members'] = 'U¿ytkowników w sumie';
$txt['total_posts'] = 'Wiadomo¶ci w sumie';
$txt['total_topics'] = 'W±tków w sumie';

$txt['mins_logged_in'] = 'Czas zalogowania (w minutach)';

$txt['preview'] = 'Podgl±d';
$txt['always_logged_in'] = 'B±d¼ zawsze zalogowany';

$txt['logged'] = 'Zapisane';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'wys³ana przez';

$txt['hours'] = 'godzin';
$txt['days_word'] = 'dni';

$txt['newest_member'] = ', nasz najnowszy u¿ytkownik.';

$txt['search_for'] = 'Szukaj';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Czesc.+Jestes+tam?';
$txt['aim_title'] = 'B³yskawiczny komunikator AOL';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'Komunikator ICQ';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'Komunikator MSN';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'B³yskawiczny komunikator Yahoo';

$txt['maintain_mode_on'] = 'Pamiêtaj, forum jest tymczasowo zamkniête.';

$txt['read'] = 'Przeczytany';
$txt['times'] = 'razy';

$txt['forum_stats'] = 'Statystyki forum';
$txt['latest_member'] = 'Najnowszy u¿ytkownik';
$txt['total_cats'] = 'Kategorii w sumie';
$txt['latest_post'] = 'Ostatnio wys³ane';

$txt['you_have'] = 'Musisz';
$txt['click'] = 'klikn±æ';
$txt['here'] = 'tu';
$txt['to_view'] = 'aby je zobaczyæ.';

$txt['total_boards'] = 'Dzia³ów w sumie';

$txt['print_page'] = 'Drukuj stronê';

$txt['valid_email'] = 'Podaj prawid³owy adres email.';

$txt['geek'] = 'Jestem ekstra!';
$txt['info_center_title'] = '%1$s - Centrum informacji';

$txt['send_topic'] = 'Wy¶lij ten w±tek';

$txt['sendtopic_title'] = 'Wy¶lij w±tek &quot;%1$s&quot; do znajomego.';
$txt['sendtopic_sender_name'] = 'Twoje imiê';
$txt['sendtopic_sender_email'] = 'Twój adres email';
$txt['sendtopic_receiver_name'] = 'Imiê odbiorcy';
$txt['sendtopic_receiver_email'] = 'Adres email odbiorcy';
$txt['sendtopic_comment'] = 'Dodaj komentarz';

$txt['allow_user_email'] = 'Ukryj adres email';

$txt['check_all'] = 'Zaznacz wszystko';

// Use numeric entities in the below string.
$txt['database_error'] = 'B³ad bazy danych';
$txt['try_again'] = 'Spróbuj ponownie. Je¶li powrócisz do tego komunikatu, zg³o¶ b³±d administratorowi.';
$txt['file'] = 'Plik';
$txt['line'] = 'Linia';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF wykry³o i spróbowa³o automatycznie naprawiæ b³±d w bazie danych. Je¶li nadal bêdziesz napotyka³ problemy, lub otrzymywa³ te listy, skontaktuj siê z w³a¶cicielem serwera.';
$txt['database_error_versions'] = '<strong>Uwaga:</strong> Wygl±da na to, ¿e twoja baza danych wymaga uaktualnienia. Pliki forum maj± obecnie wersjê %1$s, podczas gdy baza danych jest w wersji %2$s. Powiniene¶ uruchomiæ najnowsz± wersjê upgrade.php.';
$txt['template_parse_error'] = 'B³±d parsowania stylu!';
$txt['template_parse_error_message'] = 'Wygl±da na to, ¿e co¶ posz³o nie tak w systemie stylów. Ten problem powinien byæ tylko tymczasowy, spróbuj pó¼niej. Je¶li nadal bêdzie siê pojawia³ ten komunikat, skontaktuj siê z administratorem.<br /><br />Mo¿esz równie¼ spróbowaæ <a href="javascript:location.reload();">od¶wie¿yæ tê stronê</a>.';
$txt['template_parse_error_details'] = 'Wyst±pi³ problem z za³adowaniem pliku stylu lub jêzyka <tt><strong>%1$s</strong></tt> Sprawd¼ sk³adniê i spróbuj ponownie - pamiêtaj, pojedyncze cudzys³owy (<tt>\'</tt>) czêsto musz± byæ poprzedzone uko¶nikiem (<tt>\\</tt>).  Aby zobaczyæ bardziej szczegó³ow± informacjê o b³êdzie z PHP, spróbuj <a href="' . $boardurl . '%1$s">po³±czyæ siê z plikiem bezpo¶rednio</a>.<br /><br />Mo¿esz równie¿ <a href="javascript:location.reload();">od¶wie¿yæ tê stronê</a> lub <a href="' . $scripturl . '?theme=1">u¿yæ domy¶lnego stylu</a>.';

$txt['today'] = '<strong>Dzisiaj</strong> o ';
$txt['yesterday'] = '<strong>Wczoraj</strong> o ';
$txt['new_poll'] = 'Nowa ankieta';
$txt['poll_question'] = 'Pytanie';
$txt['poll_vote'] = 'Zag³osuj';
$txt['poll_total_voters'] = 'G³osów w sumie';
$txt['shortcuts'] = 'Skróty: naci¶nij alt+s aby wys³aæ wiadomo¶æ, alt+p aby j± podejrzeæ';
$txt['shortcuts_firefox'] = 'Skróty: naci¶nij shift+alt+s aby wys³aæ wiadomo¶æ, shift+alt+p aby j± podejrzeæ';
$txt['poll_results'] = 'Zobacz wyniki';
$txt['poll_lock'] = 'Zamknij g³osowanie';
$txt['poll_unlock'] = 'Otwórz g³osowanie';
$txt['poll_edit'] = 'Modyfikuj ankietê';
$txt['poll'] = 'Ankieta';
$txt['one_day'] = '1 Dzieñ';
$txt['one_week'] = '1 Tydzieñ';
$txt['one_month'] = '1 Miesi±c';
$txt['forever'] = 'Zawsze';
$txt['quick_login_dec'] = 'Zaloguj siê podaj±c nazwê u¿ytkownika, has³o i d³ugo¶æ sesji';
$txt['one_hour'] = '1 Godzina';
$txt['moved'] = 'PRZENIESIONY';
$txt['moved_why'] = 'Wprowad¼ krótki opis, t³umacz±cy<br />powód przeniesienia w±tku.';
$txt['board'] = 'Dzia³';
$txt['in'] = 'w';
$txt['sticky_topic'] = 'W±tek przyklejony';

$txt['delete'] = 'Usuñ';

$txt['your_pms'] = 'Twoje prywatne wiadomo¶ci';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Wiêcej statystyk]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Kod';
$txt['code_select'] = '[Zaznacz]';
$txt['quote_from'] = 'Cytat';
$txt['quote'] = 'Cytuj';

$txt['merge_to_topic_id'] = 'ID docelowego w±tku';
$txt['split'] = 'Podziel w±tek';
$txt['merge'] = 'Scal w±tki';
$txt['subject_new_topic'] = 'Temat nowego w±tku';
$txt['split_this_post'] = 'Wydziel tylko tê wiadomo¶æ.';
$txt['split_after_and_this_post'] = 'Wydziel tê wiadomo¶æ i wszystkie nowsze od niej.';
$txt['select_split_posts'] = 'Wybierz wiadomo¶ci do wydzielenia.';
$txt['new_topic'] = 'Nowy w±tek';
$txt['split_successful'] = 'W±tek pomy¶lnie zosta³ podzielony na dwa w±tki.';
$txt['origin_topic'] = 'W±tek oryginalny';
$txt['please_select_split'] = 'Wybierz, które wiadomo¶ci chcesz wydzieliæ.';
$txt['merge_successful'] = 'W±tki zosta³y scalone.';
$txt['new_merged_topic'] = 'Nowo scalony w±tek';
$txt['topic_to_merge'] = 'W±tek do scalenia';
$txt['target_board'] = 'Dzia³ docelowy';
$txt['target_topic'] = 'W±tek docelowy';
$txt['merge_confirm'] = 'Na pewno chcesz scaliæ';
$txt['with'] = 'i';
$txt['merge_desc'] = 'Ta funkcja scali wiadomo¶ci z dwóch w±tków w jeden. Wiadomo¶ci bêd± posortowane wed³ug daty wys³ania. Najwcze¶niej wys³ana wiadomo¶æ bêdzie pierwsz± wiadomo¶ci± w±tku.';

$txt['set_sticky'] = 'Przyklej w±tek';
$txt['set_nonsticky'] = 'Odklej w±tek';
$txt['set_lock'] = 'Zamknij w±tek';
$txt['set_unlock'] = 'Otwórz w±tek';

$txt['search_advanced'] = 'Szukanie zaawansowane';

$txt['security_risk'] = 'POWA¯NE RYZYKO BEZPIECZEÑSTWA:';
$txt['not_removed'] = 'Nie usun±³e¶ ';
$txt['not_removed_extra'] = '%1$s jest kopi± %2$s która nie zosta³a wygenerowana przez SMF. Mo¿na uzyskaæ do niej bezpo¶redni dostêp, ¿eby uzyskaæ nieautoryzowany dostêp do forum. Powinna natychmiast zostaæ usuniêta.';

$txt['cache_writable_head'] = 'Alarm wydajno¶ci';
$txt['cache_writable'] = 'Nie mo¿na zapisywaæ w katalogu cache - wp³ywa to niekorzystnie na dzia³anie Twojego forum.';

$txt['page_created'] = 'Strona wygenerowana w ';
$txt['seconds_with'] = ' sekund z ';
$txt['queries'] = ' zapytaniami.';

$txt['report_to_mod_func'] = 'U¿yj tej funkcji aby poinformowaæ moderatorów i administratorów forum o wiadomo¶ci ³ami±cej zasady forum.<br /><em>Twój adres email zostanie odkryty przed moderatorami, je¿eli jej u¿yjesz.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Prywatna wiadomo¶æ (Online)';
$txt['pm_offline'] = 'Prywatna wiadomo¶æ (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Do góry';
$txt['go_down'] = 'Do do³u';

$forum_copyright = '<a href="http://www.simplemachines.org/" title="Simple Machines Forum" target="_blank" class="new_win">Powered by %1$s</a> | <a href="http://www.simplemachines.org/about/copyright.php" title="Free Forum Software" target="_blank" class="new_win">SMF &copy; 2006&ndash;2010, Simple Machines LLC</a>';

$txt['birthdays'] = 'Urodziny:';
$txt['events'] = 'Wydarzenia:';
$txt['birthdays_upcoming'] = 'Nadchodz±ce urodziny:';
$txt['events_upcoming'] = 'Nadchodz±ce wydarzenia:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Miesi±c:';
$txt['calendar_year'] = 'Rok:';
$txt['calendar_day'] = 'Dzieñ:';
$txt['calendar_event_title'] = 'Nazwa wydarzenia:';
$txt['calendar_event_options'] = 'Opcje wydarzenia';
$txt['calendar_post_in'] = 'Dodaj w:';
$txt['calendar_edit'] = 'Modyfikuj wydarzenie';
$txt['event_delete_confirm'] = 'Usun±æ to wydarzenie?';
$txt['event_delete'] = 'Usuñ wydarzenie';
$txt['calendar_post_event'] = 'Dodaj wydarzenie';
$txt['calendar'] = 'Kalendarz';
$txt['calendar_link'] = 'Odno¶nik do kalendarza';
$txt['calendar_upcoming'] = 'Nadchodz±ce wydarzenia';
$txt['calendar_today'] = 'Kalendarz na dzi¶';
$txt['calendar_week'] = 'Tydzieñ';
$txt['calendar_week_title'] = 'Tydzieñ %1$d z %2$d ';
$txt['calendar_numb_days'] = 'Liczba dni:';
$txt['calendar_how_edit'] = 'jak modyfikowaæ wydarzenia?';
$txt['calendar_link_event'] = 'Po³±cz Zdarzenie z Wiadomo¶ci±:';
$txt['calendar_confirm_delete'] = 'Na pewno chcesz usun±æ to zdarzenie?';
$txt['calendar_linked_events'] = 'Po³±czone Zdarzenia';
$txt['calendar_click_all'] = 'Kliknij, by zobaczyæ wszystkie %1$s';

$txt['moveTopic1'] = 'Wy¶lij w±tek przekierowuj±cy';
$txt['moveTopic2'] = 'Zmieñ temat w±tku';
$txt['moveTopic3'] = 'Nowy temat';
$txt['moveTopic4'] = 'Zmieñ temat ka¿dej wiadomo¶ci';
$txt['move_topic_unapproved_js'] = 'Uwaga! Ten w±tek nie zosta³ jeszcze zaakceptowany.\\n\\nNie jest zalecane aby¶ przesuwa³ w±tek, chyba ¿e zamierzasz zakceptowaæ wiadomo¶ci natychmiast po tym ruchu.';

$txt['theme_template_error'] = 'Nie mo¿na za³adowaæ szablonu \'%1$s\'.';
$txt['theme_language_error'] = 'Nie mo¿na za³adowaæ pliku jêzyka \'%1$s\'.';

$txt['parent_boards'] = 'Dzia³y podrzêdne';

$txt['smtp_no_connect'] = 'Nie mo¿na po³±czyæ siê z hostem SMTP';
$txt['smtp_port_ssl'] = 'B³êdne ustawienie portu SMTP, powinno byæ 465 dla serwerów SSL.';
$txt['smtp_bad_response'] = 'Nie mo¿na uzyskaæ odpowiedzi z serwera poczty';
$txt['smtp_error'] = 'Wyst±pi³yu b³êdy podczas wysy³ania poczty. B³±d: ';
$txt['mail_send_unable'] = 'Nie mo¿na wys³aæ wiadomo¶ci email na adres \'%1$s\'';

$txt['mlist_search'] = 'Szukaj u¿ytkowników';
$txt['mlist_search_again'] = 'Szukaj ponownie';
$txt['mlist_search_email'] = 'Szukaj wg adresu email';
$txt['mlist_search_messenger'] = 'Szukaj wg identyfikatora komunikatora';
$txt['mlist_search_group'] = 'Szukaj wg pozycji';
$txt['mlist_search_name'] = 'Szukaj wg nazwy';
$txt['mlist_search_website'] = 'Szukaj wg strony WWW';
$txt['mlist_search_results'] = 'Szukaj w wynikach';
$txt['mlist_search_by'] = 'Szukaj w %1$s';
$txt['mlist_menu_view'] = 'Widok listy u¿ytkowników';

$txt['attach_downloaded'] = 'pobrany';
$txt['attach_viewed'] = 'wy¶wietlony';
$txt['attach_times'] = 'razy';

$txt['settings'] = 'Konfiguracja';
$txt['never'] = 'Nigdy';
$txt['more'] = 'wiêcej';

$txt['hostname'] = 'Nazwa hosta';
$txt['you_are_post_banned'] = 'Przykro nam %1$s, nie wolno Ci wysy³aæ wiadomo¶ci normalnych i prywatnych na tym forum.';
$txt['ban_reason'] = 'Powód';

$txt['tables_optimized'] = 'Tabele bazy danych zoptymalizowane';

$txt['add_poll'] = 'Dodaj ankietê';
$txt['poll_options6'] = 'Mo¿esz wybraæ maksymalnie %1$s opcji.';
$txt['poll_remove'] = 'Usuñ ankietê';
$txt['poll_remove_warn'] = 'Na pewno chcesz usun±æ ankietê z tego w±tku?';
$txt['poll_results_expire'] = 'Wyniki bêd± pokazane, kiedy g³osowanie bêdzie skoñczone';
$txt['poll_expires_on'] = 'G³osowanie siê koñczy';
$txt['poll_expired_on'] = 'G³osowanie skoñczone';
$txt['poll_change_vote'] = 'Usuñ g³os';
$txt['poll_return_vote'] = 'Opcje g³osowania';
$txt['poll_cannot_see'] = 'Nie mo¿esz obejrzeæ wyników g³osowania w tej chwili.';

$txt['quick_mod_approve'] = 'Akceptuj zaznaczone';
$txt['quick_mod_remove'] = 'Usuñ zaznaczone';
$txt['quick_mod_lock'] = 'Zamknij/otwórz zaznaczone';
$txt['quick_mod_sticky'] = 'Przyklej/odklej zaznaczone';
$txt['quick_mod_move'] = 'Przenie¶ zaznaczone do';
$txt['quick_mod_merge'] = 'Scal zaznaczone';
$txt['quick_mod_markread'] = 'Ustaw zaznaczone jako przeczytane';
$txt['quick_mod_go'] = 'Wykonaj!';
$txt['quickmod_confirm'] = 'Na pewno chcesz to zrobiæ?';

$txt['spell_check'] = 'Sprawd¼ ortografiê';

$txt['quick_reply'] = 'Szybka odpowied¼';
$txt['quick_reply_desc'] = 'W <em>szybkiej odpowiedzi</em> mo¿esz u¿yæ kodów BBC i u¶mieszków tak jak przy normalnej odpowiedzi.';
$txt['quick_reply_warning'] = 'Uwaga: ten w±tek jest obecnie zamkniêty!<br />Tylko administratorzy i moderatorzy mog± wysy³aæ do niego odpowiedzi.';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(wymagany dla wszystkich go¶ci)';
$txt['quick_reply_verification_posts'] = '(wymagany dla wszystkich u¿ytkowników, który maj± mniej ni¿ %1$d postów)';
$txt['wait_for_approval'] = 'Uwaga: ta wiadomo¶æ nie zostanie pokazana dopóki nie bêdzie zaakceptowana przez moderatora.';

$txt['notification_enable_board'] = 'Na pewno chcesz w³±czyæ powiadamianie o nowych w±tkach w tym dziale?';
$txt['notification_disable_board'] = 'Na pewno chcesz wy³±czyæ powiadamianie o nowych w±tkach w tym dziale?';
$txt['notification_enable_topic'] = 'Na pewno chcesz w³±czyæ powiadamianie o nowych odpowiedziach w tym w±tku?';
$txt['notification_disable_topic'] = 'Na pewno chcesz wy³±czyæ powiadamianie o nowych odpowiedziach w tym w±tku?';

$txt['report_to_mod'] = 'Zg³o¶ do moderatora';
$txt['issue_warning_post'] = 'Daj ostrze¿enie z powodu tej wiadomo¶ci';

$txt['unread_topics_visit'] = 'Ostatnie nieprzeczytane w±tki';
$txt['unread_topics_visit_none'] = 'Brak nieprzeczytanych w±tków od twojej ostatniej wizyty.  <a href="' . $scripturl . '?action=unread;all">Kliknij tu, aby wy¶wietliæ wszystkie nieprzeczytane w±tki</a>.';
$txt['unread_topics_all'] = 'Wszystkie nieprzeczytane w±tki';
$txt['unread_replies'] = 'W±tki z nowymi odpowiedziami';

$txt['who_title'] = 'Kto jest online';
$txt['who_and'] = ' i ';
$txt['who_viewing_topic'] = ' przegl±da ten w±tek.';
$txt['who_viewing_board'] = ' przegl±daj± ten dzia³.';
$txt['who_member'] = 'U¿ytkownik';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Dzia³a na PHP';
$txt['powered_by_mysql'] = 'Dzia³a na MySQL';
$txt['valid_css'] = 'Prawid³owy CSS!';

// Current footer strings
$txt['valid_html'] = 'Prawid³owy HTML 4.01!';
$txt['valid_xhtml'] = 'Prawid³owy XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Go¶æ';
$txt['guests'] = 'Go¶ci';
$txt['user'] = 'U¿ytkownik';
$txt['users'] = 'U¿ytkowników';
$txt['hidden'] = 'Ukrytych';
$txt['buddy'] = 'Znajomy';
$txt['buddies'] = 'Znajomi';
$txt['most_online_ever'] = 'Najwiêcej online';
$txt['most_online_today'] = 'Dzi¶ online';

$txt['merge_select_target_board'] = 'Wybierz dzia³ docelowy dla scalonego w±tku';
$txt['merge_select_poll'] = 'Wybierz, któr± ankietê powinien mieæ scalony w±tek';
$txt['merge_topic_list'] = 'Wybierz w±tki do scalenia';
$txt['merge_select_subject'] = 'Wybierz temat scalonego w±tku';
$txt['merge_custom_subject'] = 'Nowy temat';
$txt['merge_enforce_subject'] = 'Zmieñ temat wszystkich wiadomo¶ci';
$txt['merge_include_notifications'] = 'Do³±cz powiadomienia?';
$txt['merge_check'] = 'Scal?';
$txt['merge_no_poll'] = 'Bez ankiety';

$txt['response_prefix'] = 'Odp: ';
$txt['current_icon'] = 'Obecna ikona';
$txt['message_icon'] = 'Ikona wiadomo¶ci';

$txt['smileys_current'] = 'Obecny zestaw u¶mieszków';
$txt['smileys_none'] = 'Bez u¶mieszków';
$txt['smileys_forum_board_default'] = 'Domy¶lne dla tego forum b±d¼ dzia³u';

$txt['search_results'] = 'Poka¿ wyniki';
$txt['search_no_results'] = 'Nic nie znaleziono';

$txt['totalTimeLogged1'] = 'Czas zalogowania w sumie: ';
$txt['totalTimeLogged2'] = ' dni, ';
$txt['totalTimeLogged3'] = ' godz. ';
$txt['totalTimeLogged4'] = ' min.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'g ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Jest';
$txt['approve_thereare'] = 'Jest';
$txt['approve_member'] = 'u¿ytkownik';
$txt['approve_members'] = 'u¿ytkowników';
$txt['approve_members_waiting'] = 'do zatwierdzenia.';

$txt['notifyboard_turnon'] = 'Czy chcesz byæ powiadamianym przez email o nowych w±tkach w tym dziale?';
$txt['notifyboard_turnoff'] = 'Na pewno nie chcesz byæ ju¿ powiadamianym o nowych w±tkach w tym dziale?';

$txt['activate_code'] = 'Twój kod aktywacyjny to';

$txt['find_members'] = 'Znajd¼ u¿ytkowników';
$txt['find_username'] = 'Nazwa u¿ytkownika lub adres email';
$txt['find_buddies'] = 'Poka¿ tylko znajomych?';
$txt['find_wildcards'] = 'Dozwolone znaki: *, ?';
$txt['find_no_results'] = 'Nic nie znaleziono';
$txt['find_results'] = 'Wyniki';
$txt['find_close'] = 'Zamknij';

$txt['unread_since_visit'] = 'Poka¿ wiadomo¶ci od ostatniej wizyty.';
$txt['show_unread_replies'] = 'Poka¿ nowe odpowiedzi na twoje w±tki.';

$txt['change_color'] = 'Zmieñ kolor';

$txt['quickmod_delete_selected'] = 'Usuñ zaznaczone';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Otrzyma³e¶ jedn± lub wiêcej prywatnych wiadomo¶ci.\\nPokazaæ je teraz (w nowym oknie)?';

$txt['previous_next_back'] = '&laquo; poprzedni';
$txt['previous_next_forward'] = 'nastêpny &raquo;';

$txt['movetopic_auto_board'] = '[DZIA£]';
$txt['movetopic_auto_topic'] = '[ODNO¦NIK DO W¡TKU]';
$txt['movetopic_default'] = 'Ten w±tek zosta³ przeniesiony do ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Zmniejsz lub zwiêksz nag³ówek.';

$txt['mark_unread'] = 'Zaznacz jako nieprzeczytane';

$txt['ssi_not_direct'] = 'Nie ³±cz siê z SSI.php bezpo¶rednio; powiniene¶ u¿yæ ¶cie¿ki (%1$s) lub dodaæ ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php nie mog³o za³adowaæ sesji!  Mo¿e to powodowaæ problemy z wylogowaniem i innymi funkcjami - upewnij siê, ¿e SSI.php jest "includowane" w kodzie przed *czymkolwiek* innym we wszystkich Twoich skryptach!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Podgl±d';
$txt['preview_fetch'] = 'Generowanie podgl±du...';
$txt['preview_new'] = 'Nowa wiadomo¶æ';
$txt['error_while_submitting'] = 'Podczas wysy³ania wiadomo¶ci, pojawi³y siê nastêpuj±ce b³êdy:';
$txt['error_old_topic'] = 'Uwaga: W tym w±tku nie pisano od %1$d dni.<br />Je¿eli nie masz pewno¶ci, ¿e chcesz tu odpowiedzieæ, rozwa¿ rozpoczêcie nowego w±tku.';

$txt['split_selected_posts'] = 'Zaznaczone wiadomo¶ci';
$txt['split_selected_posts_desc'] = 'Poni¿sze wypowiedzi utworz± nowy temat po podziale.';
$txt['split_reset_selection'] = 'anuluj zaznaczenie';

$txt['modify_cancel'] = 'Anuluj';
$txt['mark_read_short'] = 'Zaznacz jako przeczytane';

$txt['pm_short'] = 'Moje wiadomo¶ci';
$txt['pm_menu_read'] = 'Przeczytaj wiadomo¶ci';
$txt['pm_menu_send'] = 'Wy¶lij wiadomo¶æ';

$txt['hello_member_ndt'] = 'Witaj';

$txt['unapproved_posts'] = 'Niezaakceptowane wiadomo¶ci (W±tków: %1$d, Wiadomo¶ci: %2$d)';

$txt['ajax_in_progress'] = '£adowanie...';

$txt['mod_reports_waiting'] = 'Aktualnie otwarte s± %1$d raporty moderatora.';

$txt['view_unread_category'] = 'Nieprzeczytane wiadomo¶ci';
$txt['verification'] = 'Weryfikacja';
$txt['visual_verification_description'] = 'Wpisz litery widoczne na obrazku';
$txt['visual_verification_sound'] = 'Pos³uchaj liter';
$txt['visual_verification_request_new'] = 'Pro¶ba o inny obrazek';

// Sub menu labels
$txt['summary'] = 'Podsumowanie';
$txt['account'] = 'Ustawienia konta';
$txt['forumprofile'] = 'Profil Forum';

$txt['modSettings_title'] = 'W³a¶ciwo¶ci i Opcje';
$txt['package'] = 'Pakiety';
$txt['errlog'] = 'Log b³êdów';
$txt['edit_permissions'] = 'Zezwolenia';
$txt['mc_unapproved_attachments'] = 'Niezatwierdzone za³±czniki';
$txt['mc_unapproved_poststopics'] = 'Niezatwierdzone wiadomo¶ci i w±tki';
$txt['mc_reported_posts'] = 'Raportowane wiadomo¶ci';
$txt['modlog_view'] = 'Log moderacji';
$txt['calendar_menu'] = 'Poka¿ kalendarz';

//!!! Send email strings - should move?
$txt['send_email'] = 'Wy¶lij e-mail';
$txt['send_email_disclosed'] = 'Ta tre¶æ bêdzie widoczna u odbiorcy.';
$txt['send_email_subject'] = 'Temat email';

$txt['ignoring_user'] = 'Ignorujesz tego u¿ytkownika.';
$txt['show_ignore_user_post'] = 'Poka¿ mi wiadomo¶æ.';

$txt['spider'] = 'Robot';
$txt['spiders'] = 'Roboty';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Pobieranie';
$txt['filesize'] = 'Rozmiar pliku';
$txt['subscribe_webslice'] = 'Subscribe to Webslice';

// Restore topic
$txt['restore_topic'] = 'Przywróæ w±tek';
$txt['restore_message'] = 'Przywróæ wiadomo¶æ';
$txt['quick_mod_restore'] = 'Przywróæ zaznaczone';

// Editor prompt.
$txt['prompt_text_email'] = 'Wpisz adres email.';
$txt['prompt_text_ftp'] = 'Wpisz adres ftp.';
$txt['prompt_text_url'] = 'Wpisz adres URL.';
$txt['prompt_text_img'] = 'Wpisz lokalizacjê obrazka';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Usuñ przedmiot';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Style:';
$txt['debug_subtemplates'] = 'Pod-szablony:';
$txt['debug_language_files'] = 'Pliki jêzykowe:';
$txt['debug_stylesheets'] = 'Arkusze stylów:';
$txt['debug_files_included'] = 'Uwzglêdnione pliki:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'poka¿';
$txt['debug_cache_hits'] = 'Cache hits:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bajtów';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss dla %2$s bajtów';
$txt['debug_queries_used'] = 'U¿ytych zapytañ: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'U¿ytych zapytañ:: %1$d, %2$d ostrze¿eñ';
$txt['debug_query_in_line'] = 'w <em>%1$s</em> linia <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'co zajê³o %1$s sekund.';
$txt['debug_query_which_took_at'] = 'które zajê³o %1$s sekund w %2$s na ¿±danie.';
$txt['debug_show_queries'] = '[Poka¿ zapytania]';
$txt['debug_hide_queries'] = '[Ukryj zapytania]';

// Version: 2.0 RC3; Modifications


?>