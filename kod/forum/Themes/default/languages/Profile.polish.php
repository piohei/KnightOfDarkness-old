<?php
// Version: 2.0 RC3; Profile

global $scripturl, $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['no_profile_edit'] = 'Nie masz uprawnie� do zmian tego profilu.';
$txt['website_title'] = 'Tytu� strony';
$txt['website_url'] = 'Adres strony';
$txt['signature'] = 'Podpis';
$txt['profile_posts'] = 'Wiadomo�ci';
$txt['change_profile'] = 'Zachowaj zmiany';
$txt['delete_user'] = 'Usu� u�ytkownika';
$txt['current_status'] = 'Obecny status:';
$txt['personal_text'] = 'Tekst osobisty';
$txt['personal_picture'] = 'Awatar';
$txt['choose_avatar_gallery'] = 'Wybierz awatar z galerii';
$txt['picture_text'] = 'Obrazek/tekst';
$txt['reset_form'] = 'Resetuj formularz';
$txt['preferred_language'] = 'Preferowany j�zyk';
$txt['age'] = 'Wiek';
$txt['no_pic'] = '(brak obrazka)';
$txt['latest_posts'] = 'Ostatnie wiadomo�ci: ';
$txt['additional_info'] = 'Dodatkowe informacje';
$txt['avatar_by_url'] = 'Podaj adres do swojego awatara. (np.: <em>http://www.mojastrona.pl/obrazek.gif</em>)';
$txt['my_own_pic'] = 'Podaj adres awatara';
$txt['date_format'] = 'Zmiana tej opcji spowoduje zmian� formatu wy�wietlania daty na ca�ym forum.';
$txt['time_format'] = 'Format czasu';
$txt['display_name_desc'] = 'T� nazw� zobacz� inni u�ytkownicy.';
$txt['personal_time_offset'] = 'Ilo�� dodanych lub odj�tych godzin, aby tw�j czas r�wna� si� czasowi forum.';
$txt['dob'] = 'Data urodzin';
$txt['dob_month'] = 'Miesi�c (MM)';
$txt['dob_day'] = 'Dzie� (DD)';
$txt['dob_year'] = 'Rok (RRRR)';
$txt['password_strength'] = 'Dla zachowania najwi�kszego bezpiecze�stwa, powiniene� u�y� co najmniej sze�ciu znak�w z kombinacj� liter, cyfr i innych znak�w.';
$txt['include_website_url'] = 'Musisz to wype�ni�, je�li dodasz pod spodem adres.';
$txt['complete_url'] = 'Wpisz kompletny adres URL.';
$txt['your_icq'] = 'Tw�j numer ICQ.';
$txt['your_aim'] = 'Tw�j nick na AIM.';
$txt['your_yim'] = 'Tw�j adres Yahoo! Instant Messenger.';
$txt['sig_info'] = 'Podpisy s� wy�wietlane na dole ka�dej normalnej i prywatnej wiadomo�ci. W podpisie mo�e by� u�yty kod BBC, jak i u�mieszki.';
$txt['max_sig_characters'] = 'Maksymalnie: %1$d; pozosta�o znak�w: ';
$txt['send_member_pm'] = 'Wy�lij temu u�ytkownikowi prywatn� wiadomo��';
$txt['hidden'] = 'ukryty';
$txt['current_time'] = 'Obecny czas forum';
$txt['digits_only'] = 'Pole \'liczba wiadomo�ci\' mo�e zawiera� tylko cyfry.';

$txt['language'] = 'J�zyk';
$txt['avatar_too_big'] = 'Awatar jest zbyt du�y, zmniejsz jego wymiary i spr�bowa� ponownie (maksymalnie';
$txt['invalid_registration'] = 'Nieprawid�owa data rejestracji, przyk�ad:';
$txt['msn_email_address'] = 'Adres email MSN Messenger';
$txt['current_password'] = 'Obecne has�o';
// Don't use entities in the below string, except the main ones. (lt, gt, quot.)
$txt['required_security_reasons'] = 'Ze wzgl�d�w bezpiecze�stwa Twoje obecne has�o jest wymagane, aby dokona� modyfikacji Twojego konta.';

$txt['timeoffset_autodetect'] = '(wykryj automatycznie)';

$txt['secret_question'] = 'Sekretne pytanie';
$txt['secret_desc'] = 'Aby pom�c w odzyskaniu swojego has�a, skorzystaj z dodatkowego pytania i odpowiedzi kt�re znasz <strong>tylko</strong>Ty.';
$txt['secret_desc2'] = 'Wybierz z uwag�, nie chcesz przecie�, �eby kto� odgad� twoj� odpowied�!';
$txt['secret_answer'] = 'Odpowied�';
$txt['secret_ask'] = 'Zadaj mi moje pytanie';
$txt['cant_retrieve'] = 'Nie mo�esz otrzyma� swojego has�a ale mo�esz ustawi� nowe. U�yj odno�nika wys�anego do Ciebie mailem. Istnieje r�wnie� mo�liwo�� ustawienia nowego has�a po wpisaniu poprawnej odpowiedzi na (ustawione wcze�niej w profilu) sekretne pytanie.';
$txt['incorrect_answer'] = 'Niestety, nie ustawi�e� w swoim profilu prawid�owej kombinacji sekretnego pytania i odpowiedzi. Kliknij na przycisk powr�t i u�yj domy�lnej metody uzyskania nowego has�a.';
$txt['enter_new_password'] = 'Wprowad� odpowied� na pytanie i nowe has�o, kt�re chcesz u�ywa�. Twoje has�o zostanie zmienione na nowe je�li udzielisz prawid�owej odpowiedzi na swoje pytanie.';
$txt['password_success'] = 'Twoje has�o zosta�o zmienione. <br />kliknij <a href="' . $scripturl . '?action=login">tutaj</a> aby si� zalogowa�.';
$txt['secret_why_blank'] = 'dlaczego to pole jest puste?';

$txt['authentication_reminder'] = 'Przypomnienie has�a';
$txt['password_reminder_desc'] = 'Je�li zapomnia�e� swojego loginu lub has�a, nie przejmuj si�, mo�esz je odzyska�. Aby rozpocz�� proces odzyskiwania danych logowania, wpisz poni�ej nazw� u�ytkownika lub has�o.';
$txt['authentication_options'] = 'Wybierz jedn� z dw�ch opcji poni�ej';
$txt['authentication_openid_email'] = 'Wy�lij mi przypomnienie mojego identyfikatora OpenID';
$txt['authentication_openid_secret'] = 'Odpowiedz na &quot;sekretne pytanie&quot; aby zobaczy� m�j identyfikator OpenID';
$txt['authentication_password_email'] = 'Wy�lij mi nowe has�o na adres email.';
$txt['authentication_password_secret'] = 'Pozw�l mi ustawi� nowe has�o przez odpowied� na moje &quot;sekretne pytanie&quot;';
$txt['openid_secret_reminder'] = 'Wpisz poni�ej swoj� odpowied� na pytanie. Je�li zrobisz to prawid�owo, zobaczysz sw�j identyfikator OpenID.';
$txt['reminder_openid_is'] = 'Identyfikator OpenID powi�zany z Twoim kontem to:<br />&nbsp;&nbsp;&nbsp;&nbsp;<b>%1$s</b><br /><br />Nie zapomnij o zapisaniu sobie swojego identyfikatora.';
$txt['reminder_continue'] = 'Kontynuuj.';

$txt['current_theme'] = 'Obecny styl';
$txt['change'] = '(zmie�)';
$txt['theme_preferences'] = 'Ustawienia stylu';
$txt['theme_forum_default'] = 'Domy�lny dla forum lub dzia�u';
$txt['theme_forum_default_desc'] = 'To jest styl domy�lny, tw�j styl b�dzie zmienia� si� razem z ustawieniami administratora i dzia�em, kt�ry b�dziesz przegl�da�.';

$txt['profileConfirm'] = 'Czy na pewno chcesz usun�� konto tego u�ytkownika?';

$txt['custom_title'] = 'W�asny tytu�';

$txt['lastLoggedIn'] = 'Ostatnio aktywny';

$txt['notify_settings'] = 'Ustawienia powiadomie�:';
$txt['notify_save'] = 'Zachowaj ustawienia';
$txt['notify_important_email'] = 'Otrzymuj powiadomienia i wa�ne informacje przez email.';
$txt['notify_regularity'] = 'Dla w�tk�w i dzia��w dla kt�rych za��da�em w��czenia powiadomie�, powiadamiaj mnie';
$txt['notify_regularity_instant'] = 'Natychmiast';
$txt['notify_regularity_first_only'] = 'Natychmiast, ale tylko dla pierwszej nieprzeczytanej odpowiedzi';
$txt['notify_regularity_daily'] = 'Codziennie';
$txt['notify_regularity_weekly'] = 'Co tydzie�';
$txt['auto_notify'] = 'W��cz powiadomienia kiedy wysy�asz nowy w�tek lub wiadomo��.';
$txt['notify_send_types'] = 'Dla w�tk�w i dzia��w dla kt�rych za��da�em w��czenia powiadomie�, powiadamiaj mnie o';
$txt['notify_send_type_everything'] = 'Odpowiedziach i moderacji';
$txt['notify_send_type_everything_own'] = 'Moderacji, je�li to ja rozpocz��em w�tek';
$txt['notify_send_type_only_replies'] = 'Tylko o odpowiedziach';
$txt['notify_send_type_nothing'] = 'Nie powiadamiaj mnie o niczym! ';
$txt['notify_send_body'] = 'Gdy b�dziesz wysy�a� powiadamianie o odpowiedzi na w�tek, wysy�aj tre�� wiadomo�ci w poczcie elektronicznej (ale prosz� nie odpowiada� na tego e-mail\'a.)';

$txt['notifications_topics'] = '�ledzone w�tki';
$txt['notifications_topics_list'] = 'Jeste� powiadamiany o odpowiedziach na nast�puj�ce tematy';
$txt['notifications_topics_none'] = 'Nie jeste� obecnie powiadamiany o �adnym w�tku.';
$txt['notifications_topics_howto'] = 'Aby otrzymywa� powiadomienia o danym w�tku, kliknij przycisk &quot;powiadamiaj&quot; podczas jego przegl�dania.';
$txt['notifications_boards'] = '�ledzone dzia�y';
$txt['notifications_boards_list'] = 'Jeste� powiadamiany o nowych tematach w nast�puj�cych dzia�ach';
$txt['notifications_boards_none'] = 'Nie jeste� obecnie powiadamiany o �adnym dziale.';
$txt['notifications_boards_howto'] = 'Aby otrzymywa� powiadomienia o danym dziale, kliknij przycisk &quot;powiadamiaj&quot; w indeksie w�tk�w tego dzia�u.';
$txt['notifications_update'] = 'Przesta� �ledzi�';

$txt['statPanel_showStats'] = 'Statystyki u�ytkownika: ';
$txt['statPanel_users_votes'] = 'Liczba oddanych g�os�w';
$txt['statPanel_users_polls'] = 'Liczba wys�anych ankiet';
$txt['statPanel_total_time_online'] = 'Ca�kowity czas sp�dzony online';
$txt['statPanel_noPosts'] = 'Nie ma �adnych wiadomo�ci!';
$txt['statPanel_generalStats'] = 'Statystyki og�lne';
$txt['statPanel_posts'] = 'wiadomo�ci';
$txt['statPanel_topics'] = 'w�tk�w';
$txt['statPanel_total_posts'] = 'Wszystkich wiadomo�ci';
$txt['statPanel_total_topics'] = 'Wszystkich rozpocz�tych w�tk�w';
$txt['statPanel_votes'] = 'g�os�w';
$txt['statPanel_polls'] = 'ankiet';
$txt['statPanel_topBoards'] = 'Najpopularniejsze dzia�y wg wiadomo�ci';
$txt['statPanel_topBoards_posts'] = '%1$d wiadomo�ci z wybranego dzia�u %2$d wiadomo�ci (%3$01.2f%%)';
$txt['statPanel_topBoards_memberposts'] = '%1$d wiadomo�ci u�ytkownika %2$d (%3$01.2f%%) ';
$txt['statPanel_topBoardsActivity'] = 'Najpopularniejsze dzia�y wg aktywno�ci';
$txt['statPanel_activityTime'] = 'Wysy�anie wiadomo�ci wg czasu';
$txt['statPanel_activityTime_posts'] = '%1$d wiadomo�ci (%2$d%%)';
$txt['statPanel_timeOfDay'] = 'Pora dnia';

$txt['deleteAccount_warning'] = 'Uwaga - te operacje s� nieodwracalne!';
$txt['deleteAccount_desc'] = 'Na tej stronie mo�esz usun�� konto tego u�ytkownika i wiadomo�ci przez niego wys�ane.';
$txt['deleteAccount_member'] = 'Usu� konto tego u�ytkownika';
$txt['deleteAccount_posts'] = 'Wiadomo�ci u�ytkownika podlegaj�ce usuni�ciu';
$txt['deleteAccount_none'] = '�adne';
$txt['deleteAccount_all_posts'] = 'Wszystkie';
$txt['deleteAccount_topics'] = 'W�tki i wiadomo�ci';
$txt['deleteAccount_confirm'] = 'Czy na pewno chcesz usun�� to konto?';
$txt['deleteAccount_approval'] = 'Zauwa�, �e moderatorzy forum b�d� musieli zatwierdzi� usuni�cie tego konta zanim zostanie skasowane.';

$txt['profile_of_username'] = 'Profil u�ytkownika %1$s';
$txt['profileInfo'] = 'Informacja o Profilu';
$txt['showPosts'] = 'Poka� wiadomo�ci';
$txt['showPosts_help'] = 'Ta sekcja pozwala Ci zobaczy� wszystkie wiadomo�ci wys�ane przez tego u�ytkownika. Zwr�� uwag�, �e mo�esz widzie� tylko wiadomo�ci wys�ane w dzia�ach do kt�rych masz aktualnie dost�p.';
$txt['showMessages'] = 'Wiadomo�ci';
$txt['showTopics'] = 'Poka� w�tki';
$txt['showAttachments'] = 'Poka� za��czniki';
$txt['statPanel'] = 'Poka� statystyki';
$txt['editBuddyIgnoreLists'] = 'Lista znajomych/ignorowanych';
$txt['editBuddies'] = 'Edytuj znajomych';
$txt['editIgnoreList'] = 'Edytuj list� ignorowanych';
$txt['trackUser'] = '�led� u�ytkownika';
$txt['trackActivity'] = 'Aktywno��';
$txt['trackIP'] = '�led� adres IP';

$txt['authentication'] = 'Identyfikacja';
$txt['change_authentication'] = 'W tej sekcji mo�esz zmieni� spos�b logowania na na forum. Mo�esz wybra� identyfikator OpenID lub alternatywnie skorzysta� z logowania za pomoc� u�ytkownika i has�a.';

$txt['profileEdit'] = 'Modyfikuj profil';
$txt['account_info'] = 'To s� ustawienia dotycz�ce twojego konta. Strona ta zawiera wszystkie niezb�dne informacje identyfikuj�ce ci� na forum. Ze wzgl�d�w bezpiecze�stwa, b�dziesz musia� poda� swoje obecne has�o aby dokona� zmian w tych informacjach.';
$txt['forumProfile_info'] = 'Tu mo�esz zmieni� informacje dotycz�ce Ciebie. B�d� one publicznie dost�pne w ' . $context['forum_name'] . '. Je�li nie chcesz dzieli� si� niekt�rymi danymi, pomi� je - nic tutaj nie jest wymagane.';
$txt['theme'] = 'Opcje wygl�du';
$txt['theme_info'] = 'Tu mo�esz dostosowa� wygl�d forum do swoich potrzeb.';
$txt['notification'] = 'Powiadomienia';
$txt['notification_info'] = 'SMF mo�e powiadamia� ci� o nowych w�tkach, wiadomo�ciach i og�oszeniach. Tutaj mo�esz zmieni� te ustawienia lub nadzorowa� w�tki i dzia�y, kt�re obecnie �ledzisz.';
$txt['groupmembership'] = 'Grupy u�ytkownik�w';
$txt['groupMembership_info'] = 'W tej sekcji Twojego profilu, mo�esz zmienia� swoje ustawienia cz�onkostwa w grupach.';
$txt['ignoreboards'] = 'Ignoruj Fora - ustawienia';
$txt['ignoreboards_info'] = 'Ta strona pozwala ignorowa� poszczeg�lne dzia�y. Kiedy dzia� jest ignorowany, ikona nowych post�w nie b�dzie si� pokazywa� na stronie g��wnej. Nowe wiadomo�ci nie poka�� si� w�r�d wynik�w wyszukiwania "nieprzeczytanych post�w" (przeszukuj�c nie zwr�ci uwagi na te dzia�y), jednak ignorowane dzia�y dalej b�d� widoczne na stronie g��wnej i podczas ich przegl�dania poka��, kt�re tematy maj� nowe wiadomo�ci. "Nieprzeczytane odpowiedzi" wci�� poka�� nowe wiadomo�ci w ignorowanych dzia�ach.';
$txt['pmprefs'] = 'Prywatne wiadomo�ci';

$txt['profileAction'] = 'Inne czynno�ci';
$txt['deleteAccount'] = 'Usu� to konto';
$txt['profileSendIm'] = 'Wy�lij prywatn� wiadomo��';
$txt['profile_sendpm_short'] = 'Wy�lij PW';

$txt['profileBanUser'] = 'Zbanuj u�ytkownika';

$txt['display_name'] = 'Nazwa wy�wietlana';
$txt['enter_ip'] = 'Wprowad� adres IP (lub zakres)';
$txt['errors_by'] = 'Komunikaty b��d�w u�ytkownika';
$txt['errors_desc'] = 'Poni�ej znajduje si� lista wszystkich najnowszych b��d�w, kt�re napotka� u�ytkownik.';
$txt['errors_from_ip'] = 'Komunikaty b��d�w z adresu IP (lub zakresu)';
$txt['errors_from_ip_desc'] = 'Poni�ej znajduje si� lista wszystkich ostatnich komunikat�w o b��dach spowodowanych przez ten adres IP (lub zakres).';
$txt['ip_address'] = 'Adres IP';
$txt['ips_in_errors'] = 'Adresy IP u�yte w komunikatach b��d�w';
$txt['ips_in_messages'] = 'Adresy IP u�yte w ostatnich wiadomo�ciach';
$txt['members_from_ip'] = 'U�ytkownicy adresu IP (lub zakresu)';
$txt['members_in_range'] = 'U�ytkownicy mog�cy znajdowa� si� w tym samym zakresie';
$txt['messages_from_ip'] = 'Wiadomo�ci wys�ane z adresu IP (lub zakresu)';
$txt['messages_from_ip_desc'] = 'Poni�ej znajduje si� lista wszystkich wiadomo�ci wys�anych z tego adresu IP (lub zakresu).';
$txt['most_recent_ip'] = 'Najnowszy adres IP';
$txt['why_two_ip_address'] = 'Dlaczego s� tutaj wypisane dwa adresy IP?';
$txt['no_errors_from_ip'] = 'Brak komunikat�w b��d�w z tego adresu IP (lub zakresu)';
$txt['no_errors_from_user'] = 'Brak komunikat�w b��d�w u tego u�ytkownika';
$txt['no_members_from_ip'] = 'Brak u�ytkownik�w z tego adresu IP (lub zakresu)';
$txt['no_messages_from_ip'] = 'Brak wiadomo�ci z tego adresu IP (lub zakresu)';
$txt['none'] = 'Brak';
$txt['own_profile_confirm'] = 'Na pewno chcesz usun�� swoje konto?';
$txt['view_ips_by'] = 'Zobacz adresy IP u�ywane przez';

$txt['avatar_will_upload'] = 'Wy�lij awatar';

$txt['activate_changed_email_title'] = 'Adres e-mail zmieniony';
$txt['activate_changed_email_desc'] = 'Dokona�e� zmiany adresu e-mail. Aby zweryfikowa� nowy adres otrzymasz e-mail. Kliknij w link znajduj�cy si� w li�cie aby reaktywowa� konto.';

// Use numeric entities in the below three strings.
$txt['no_reminder_email'] = 'Nie mo�na wys�a� emaila z przypomnieniem.';
$txt['send_email'] = 'Wy�lij email do';
$txt['to_ask_password'] = 'aby zapyta� o has�o';

$txt['user_email'] = 'Nazwa u�ytkownika/email';

// Use numeric entities in the below two strings.
$txt['reminder_subject'] = 'Nowe has�o na forum ' . $context['forum_name'];
$txt['reminder_mail'] = 'Ten email zosta� wys�any, poniewa� na Twoim koncie u�yto funkcji \'przypomnij has�o\'. Aby ustawi� nowe has�o kliknij na ten odno�nik';
$txt['reminder_sent'] = 'Na Tw�j adres email zosta�a wys�ana wiadomo��. Kliknij na zawarty w niej odno�nik aby ustawi� nowe has�o.';
$txt['reminder_openid_sent'] = 'Twoja aktualna identyfikacja OpenID zosta�a wys�ana na Tw�j adres email.';
$txt['reminder_set_password'] = 'Ustaw has�o';
$txt['reminder_password_set'] = 'Has�o ustawione poprawnie';
$txt['reminder_error'] = '%1$s udzieli�/a b��dnej odpowiedzi na sekretne pytanie, podczas pr�by zmiany zapomnianego has�a.';

$txt['registration_not_approved'] = 'To konto nie zosta�o jeszcze zatwierdzone. Je�li chcesz zmieni� adres email, kliknij';
$txt['registration_not_activated'] = 'To konto nie zosta�o jeszcze aktywowane. Je�li chcesz aby ponownie wys�ano email aktywacyjny, kliknij';

$txt['primary_membergroup'] = 'Podstawowa grupa u�ytkownik�w';
$txt['additional_membergroups'] = 'Dodatkowe grupy u�ytkownik�w';
$txt['additional_membergroups_show'] = '[ wy�wietl dodatkowe grupy ]';
$txt['no_primary_membergroup'] = '(brak podstawowej grupy)';
$txt['deadmin_confirm'] = 'Czy na pewno chcesz si� nieodwo�alnie pozbawi� rangi administratora?';

$txt['account_activate_method_2'] = 'Konto wymaga reaktywacji po zmianie adresu poczty elektronicznej';
$txt['account_activate_method_3'] = 'Konto nie zosta�o zatwierdzone';
$txt['account_activate_method_4'] = 'Konto oczekuje na zatwierdzenie do usuni�cia';
$txt['account_activate_method_5'] = 'Konto jest w trakcie zatwierdzania kont &quot;poni�ej wieku&quot;';
$txt['account_not_activated'] = 'Konto nie jest obecnie aktywne';
$txt['account_activate'] = 'aktywuj';
$txt['account_approve'] = 'zatwierd�';
$txt['user_is_banned'] = 'U�ytkownik jest obecnie zbanowany';
$txt['view_ban'] = 'Zobacz';
$txt['user_banned_by_following'] = 'Tego u�ytkownika dotycz� nast�puj�ce bany';
$txt['user_cannot_due_to'] = 'U�ytkownik nie mo�e %1$s w wyniku bana: &quot;%2$s&quot;';
$txt['ban_type_post'] = 'pisa�';
$txt['ban_type_register'] = 'zarejestrowa� si�';
$txt['ban_type_login'] = 'zalogowa� si�';
$txt['ban_type_access'] = 'wej�� na forum';

$txt['show_online'] = 'Poka� innym sw�j status online';

$txt['return_to_post'] = 'Domy�lnie powracaj do w�tk�w po wys�aniu wiadomo�ci.';
$txt['no_new_reply_warning'] = 'Nie ostrzegaj o nowych odpowiedziach w czasie wysy�ania wiadomo�ci.';
$txt['posts_apply_ignore_list'] = 'Ukryj wiadomo�ci wys�ane przez ignorowanych przeze mnie u�ytkownik�w.';
$txt['recent_posts_at_top'] = 'Poka� najnowsze wiadomo�ci na g�rze.';
$txt['recent_pms_at_top'] = 'Pokazuj najnowsze prywatne wiadomo�ci na g�rze.';
$txt['wysiwyg_default'] = 'Domy�lnie poka� edytor WYSIWYG gdy piszesz now�  lub edytujesz wiadomo��.';

$txt['timeformat_default'] = '(Domy�lne dla forum)';
$txt['timeformat_easy1'] = 'Miesi�c Dzie�, Rok, GG:MM:SS am/pm';
$txt['timeformat_easy2'] = 'Miesi�c Dzie�, Rok, GG:MM:SS (24H)';
$txt['timeformat_easy3'] = 'RRRR-MM-DD, GG:MM:SS';
$txt['timeformat_easy4'] = 'DD Miesi�c RRRR, GG:MM:SS';
$txt['timeformat_easy5'] = 'DD-MM-RRRR, GG:MM:SS';

$txt['poster'] = 'Autor';

$txt['board_desc_inside'] = 'Pokazuj opisy dzia��w wewn�trz dzia��w.';
$txt['show_children'] = 'Poka� dzia�y podrz�dne na ka�dej stronie dzia�u nadrz�dnego.';
$txt['use_sidebar_menu'] = 'Je�li to tylko mo�liwe u�yj bocznych menu zamiast rozwijanych.';
$txt['show_no_avatars'] = 'Nie pokazuj awatar�w innych u�ytkownik�w.';
$txt['show_no_signatures'] = 'Nie pokazuj podpis�w innych u�ytkownik�w.';
$txt['show_no_censored'] = 'Pozostaw s�owa nieocenzurowane.';
$txt['topics_per_page'] = 'Ilo�� w�tk�w pokazanych na stronie:';
$txt['messages_per_page'] = 'Ilo�� wiadomo�ci pokazanych na stronie:';
$txt['per_page_default'] = 'domy�lnie dla forum';
$txt['calendar_start_day'] = 'Pierwszy dzie� tygodnia w kalendarzu';
$txt['display_quick_reply'] = 'Tryb u�ycia szybkiej odpowiedzi: ';
$txt['display_quick_reply1'] = 'nie pokazuj';
$txt['display_quick_reply2'] = 'pokazuj, domy�lnie ukryta';
$txt['display_quick_reply3'] = 'pokazuj, domy�lnie w��czona';
$txt['display_quick_mod'] = 'Poka� szybk� moderacj� w indeksie wiadomo�ci jako ';
$txt['display_quick_mod_none'] = 'nie pokazuj';
$txt['display_quick_mod_check'] = 'pola wyboru';
$txt['display_quick_mod_image'] = 'ikony';

$txt['whois_title'] = 'Szukaj IP na regionalnym serwerze whois';
$txt['whois_afrinic'] = 'AfriNIC (Afryka)';
$txt['whois_apnic'] = 'APNIC (Azja i Pacyfik)';
$txt['whois_arin'] = 'ARIN (Ameryka Pn., cz�� Karaib�w, Afryka Pn.)';
$txt['whois_lacnic'] = 'LACNIC (Ameryka �aci�ska i Karaiby)';
$txt['whois_ripe'] = 'RIPE (Europa, �rodkowy Wsch�d i cz�ci Afryki i Azji)';

$txt['moderator_why_missing'] = 'dlaczego nie ma tu moderatora?';
$txt['username_change'] = 'zmie�';
$txt['username_warning'] = 'Aby zmieni� nazw� tego u�ytkownika, forum musi r�wnie� resetowa� jego has�o. Zostanie ono do niego wys�ane, wraz z now� nazw� u�ytkownika.';

$txt['show_member_posts'] = 'Zobacz wiadomo�ci u�ytkownika';
$txt['show_member_topics'] = 'Zobacz w�tki u�ytkownika';
$txt['show_member_attachments'] = 'Zobacz za��czniki u�ytkownika';
$txt['show_posts_none'] = 'U�ytkownik nie napisa� jeszcze �adnych wiadomo�ci.';
$txt['show_topics_none'] = 'Nie zosta� jeszcze utworzony �aden w�tek.';
$txt['show_attachments_none'] = 'U�ytkownik nie doda� jeszcze �adnych za��cznik�w.';
$txt['show_attach_filename'] = 'Nazwa pliku';
$txt['show_attach_downloads'] = 'Pobra�';
$txt['show_attach_posted'] = 'Opublikowany';

$txt['showPermissions'] = 'Poka� zezwolenia';
$txt['showPermissions_status'] = 'Status zezwolenia';
$txt['showPermissions_help'] = 'Ta sekcja pozwala Ci wy�wietli� wszystkie zezwolenia dla tego u�ytkownika (zabronione pozwolenia s� <del>wykre�lone</del>).';
$txt['showPermissions_given'] = 'Wydane przez';
$txt['showPermissions_denied'] = 'Zabroniony przez';
$txt['showPermissions_permission'] = 'Zezwolenie (nie posiadane zezwolenia s� <del>przekre�lone</del>)';
$txt['showPermissions_none_general'] = 'Ten u�ytkownik nie posiada �adnych zezwole� og�lnych.';
$txt['showPermissions_none_board'] = 'Ten u�ytkownik nie posiada �adnych zezwole� dot. konkretnego dzia�u.';
$txt['showPermissions_all'] = 'Jako administrator, ten u�ytkownik posiada wszystkie mo�liwe zezwolenia.';
$txt['showPermissions_select'] = 'Zezwolenia dla dzia�u';
$txt['showPermissions_general'] = 'Zezwolenia og�lne';
$txt['showPermissions_global'] = 'Wszystkie dzia�y';
$txt['showPermissions_restricted_boards'] = 'Ograniczenia dzia��w';
$txt['showPermissions_restricted_boards_desc'] = 'Nast�puj�ce dzia�y nie s� dost�pne dla tego u�ytkownika';

$txt['local_time'] = 'Czas lokalny';
$txt['posts_per_day'] = 'na dzie�';

$txt['buddy_ignore_desc'] = 'Ta sekcja pozwala na zarz�dzanie list� znajomych i ignorowanych na tym forum. Dodawanie cz�onk�w do tych list mi�dzy innymi pomo�e Ci kontrolowa� nap�yw maili i prywatnych wiadomo�ci, w zale�no�ci od twoich preferencji.';

$txt['buddy_add'] = 'Dodaj do listy znajomych';
$txt['buddy_remove'] = 'Usu� z listy znajomych';
$txt['buddy_add_button'] = 'Dodaj';
$txt['no_buddies'] = 'Twoja lista znajomych jest pusta';

$txt['ignore_add'] = 'Dodaj do listy ignorowanych';
$txt['ignore_remove'] = 'Usu� z listy ignorowanych';
$txt['ignore_add_button'] = 'Dodaj';
$txt['no_ignore'] = 'Twoja lista ignorowanych jest obecnie pusta';

$txt['regular_members'] = 'Zarejestrowani u�ytkownicy';
$txt['regular_members_desc'] = 'Ka�dy zarejestrowany u�ytkownik forum nale�y do tej grupy.';
$txt['group_membership_msg_free'] = 'Operacja zako�czona powodzeniem. Do��czy�e� do grupy.';
$txt['group_membership_msg_request'] = 'Twoja pro�ba zosta�a wys�ana ale musi zosta� rozpatrzona. B�d� cierpliwy prosz�.';
$txt['group_membership_msg_primary'] = 'Twoja podstawowa grupa zosta�a zmieniona';
$txt['current_membergroups'] = 'Aktualnie nale�ysz do:';
$txt['available_groups'] = 'Pozosta�e dost�pne grupy:';
$txt['join_group'] = 'Do��cz do grupy';
$txt['leave_group'] = 'Opu�� grup�';
$txt['request_group'] = 'Popro� o cz�onkostwo';
$txt['approval_pending'] = 'Oczekuje na zatwierdzenie';
$txt['make_primary'] = 'Ustaw jako podstawow�';

$txt['request_group_membership'] = 'Pro�ba o cz�onkostwo w grupie';
$txt['request_group_membership_desc'] = 'Zanim b�dziesz m�g� do��czy� do tej grupy, Twoja pro�ba musi zosta� zaakceptowana przez moderatora. Prosz�, uzasadnij swoj� pro�b� o do��czenie do grupy';
$txt['submit_request'] = 'Wy�lij';

$txt['profile_updated_own'] = 'Tw�j profil zosta� pomy�lnie zaktualizowany';
$txt['profile_updated_else'] = 'Profil u�ytkownika %1$s zosta� pomy�lnie zaktualizowany';

$txt['profile_error_signature_max_length'] = 'Tw�j podpis nie mo�e by� wi�kszy ni� %1$d znak�w';
$txt['profile_error_signature_max_lines'] = 'Tw�j podpis nie mo�e by� d�u�szy ni� %1$d linii';
$txt['profile_error_signature_max_image_size'] = 'Obrazy w Twoim podpisie nie mog� by� wi�ksze ni� %1$dx%2$d pikseli';
$txt['profile_error_signature_max_image_width'] = 'Obrazy w Twoim podpisie nie mog� by� szersze ni� %1$d pikseli';
$txt['profile_error_signature_max_image_height'] = 'Obrazy w Twoim podpisie nie mog� by� wy�sze ni� %1$d pikseli';
$txt['profile_error_signature_max_image_count'] = 'Nie mo�esz mie� wi�cej ni� %1$d obraz�w w swoim podpisie';
$txt['profile_error_signature_max_font_size'] = 'Tekst w Twoim podpisie nie mo�e by� wi�kszy ni� %1$d pikseli';
$txt['profile_error_signature_allow_smileys'] = 'Nie mo�esz u�ywa� emotikon w swojej sygnauturze';
$txt['profile_error_signature_max_smileys'] = 'Nie wolno Ci u�y� wi�cej ni� %1$d emotikon w Twoim podpisie';
$txt['profile_error_signature_disabled_bbc'] = 'Nast�puj�cy tag BBC nie jest dozwolony w Twoim podpisie: %1$d';

$txt['profile_view_warnings'] = 'Poka� ostrze�enia';
$txt['profile_issue_warning'] = 'Przyznaj ostrze�enie';
$txt['profile_warning_level'] = 'Poziom ostrze�enia';
$txt['profile_warning_desc'] = 'W tej sekcji mo�esz ustawi� u�ytkownikowi Poziom Ostrze�enia i je�li to konieczne, wys�a� pisemne ostrze�enie. Mo�esz te� �ledzi� jego histori� ostrze�e� oraz sprawdzi�, czym skutkuje dla niego obecny poziom ostrze�enia.';
$txt['profile_warning_name'] = 'Nazwa U�ytkownika';
$txt['profile_warning_impact'] = 'Rezultat';
$txt['profile_warning_reason'] = 'Pow�d ostrze�enia';
$txt['profile_warning_reason_desc'] = 'To jest obowi�zkowe i zostanie zapisane w logu.';
$txt['profile_warning_effect_none'] = 'Brak.';
$txt['profile_warning_effect_watch'] = 'U�ytkownik zostanie dodany do listy obserwowanych u�ytkownik�w.';
$txt['profile_warning_effect_own_watched'] = 'Jeste� na li�cie obserwowanych moderatora.';
$txt['profile_warning_is_watch'] = 'U�ytkownik jest obserwowany';
$txt['profile_warning_effect_moderation'] = 'Wszystkie wiadomo�ci u�ytkownika b�d� moderowane.';
$txt['profile_warning_effect_own_moderated'] = 'Wszystkie twoje wiadomo�ci b�d� moderowane.';
$txt['profile_warning_is_moderation'] = 'Wszystkie wiadomo�ci u�ytkownika s� moderowane';
$txt['profile_warning_effect_mute'] = 'U�ytkownik nie b�dzie m�g� pisa� post�w.';
$txt['profile_warning_effect_own_muted'] = 'Nie b�dziesz w stanie wysy�a� wiadomo�ci.';
$txt['profile_warning_is_muted'] = 'U�ytkownik nie mo�e pisa� post�w';
$txt['profile_warning_effect_text'] = 'Poziom >= %1$d: %2$s';
$txt['profile_warning_notify'] = 'Wy�lij powiadomienie';
$txt['profile_warning_notify_template'] = 'Wybierz szablon:';
$txt['profile_warning_notify_subject'] = 'Temat powiadomienia';
$txt['profile_warning_notify_body'] = 'Tre�� wiadomo�ci';
$txt['profile_warning_notify_template_subject'] = 'Otrzyma�e� Ostrze�enie';
// Use numeric entities in below string.
$txt['profile_warning_notify_template_outline'] = '{MEMBER},' . "\n\n" . 'Otrzyma�e� ostrze�enie za %1$s. Prosz�, zaniechaj tego i podporz�dkuj si� regu�om panuj�cym na forum. W przeciwnym wypadku poczynimy dalsze kroki.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_template_outline_post'] = '{MEMBER},' . "\n\n" . 'Otrzyma�e� ostrze�enie za %1$s in regards to the message:' . "\n" . '{MESSAGE}.' . "\n\n" . 'Prosz�, zaniechaj tego i podporz�dkuj si� regu�om panuj�cym na forum. W przeciwnym wypadku poczynimy dalsze kroki.' . "\n\n" . '{REGARDS}';
$txt['profile_warning_notify_for_spamming'] = 'spamowanie';
$txt['profile_warning_notify_title_spamming'] = 'Spamowanie';
$txt['profile_warning_notify_for_offence'] = 'zamieszczanie obra�liwych, nieprzyzwoitych tre�ci';
$txt['profile_warning_notify_title_offence'] = 'Zamieszczanie obra�liwych, nieprzyzwoitych tre�ci';
$txt['profile_warning_notify_for_insulting'] = 'Obra�anie innych u�ytkownik�w i/lub administracji';
$txt['profile_warning_notify_title_insulting'] = 'Obra�anie U�ytkownik�w/Administracji';
$txt['profile_warning_issue'] = 'Przyznaj Ostrze�enie';
$txt['profile_warning_max'] = '(Max 100)';
$txt['profile_warning_limit_attribute'] = 'Pami�taj, �e nie mo�esz ustawi� poziomu tego u�ytkownika na wi�cej ni� %1$d%% w odst�pie 24 godzin.';
$txt['profile_warning_errors_occured'] = 'Ostrze�enie nie zosta�o wys�ane z powodu nast�puj�cych b��d�w';
$txt['profile_warning_success'] = 'Ostrze�enie zosta�o przyznane';
$txt['profile_warning_new_template'] = 'Nowy szablon';

$txt['profile_warning_previous'] = 'Poprzednie ostrze�enia';
$txt['profile_warning_previous_none'] = 'Ten u�ytkownik nie otrzyma� wcze�niej �adnych ostrze�e�.';
$txt['profile_warning_previous_issued'] = 'Dodane przez';
$txt['profile_warning_previous_time'] = 'Czas';
$txt['profile_warning_previous_level'] = 'Punkty';
$txt['profile_warning_previous_reason'] = 'Pow�d';
$txt['profile_warning_previous_notice'] = 'Zobacz wiadomo�� wys�an� u�ytkownikowi';

$txt['viewwarning'] = 'Poka� ostrze�enia';
$txt['profile_viewwarning_for_user'] = 'Ostrze�enia dla %1$s';
$txt['profile_viewwarning_no_warnings'] = 'Nie przydzielono jeszcze �adnego ostrze�enia.';
$txt['profile_viewwarning_desc'] = 'Poni�ej znajduje si� podsumowanie wszystkich ostrze�e� przydzielonych przez zesp� moderuj�cy.';
$txt['profile_viewwarning_previous_warnings'] = 'Poprzednie ostrze�enia';
$txt['profile_viewwarning_impact'] = 'Rezultat Ostrze�enia';

$txt['subscriptions'] = 'Subskrypcja p�atna';

$txt['pm_settings_desc'] = 'Na tej stronie mo�esz zmieni� r�ne opcje prywatnych wiadomo�ci - w tym jak s� wy�wietlane. Mo�esz r�wnie� utworzy� list� os�b, od kt�rych wiadomo�ci b�dziesz ignorowa�.';
$txt['email_notify'] = 'Powiadom przez email, kiedy otrzymujesz prywatn� wiadomo��:';
$txt['email_notify_never'] = 'Nigdy';
$txt['email_notify_buddies'] = 'Tylko od znajomych';
$txt['email_notify_always'] = 'Zawsze';

$txt['pm_receive_from'] = 'Odbieraj prywatne wiadomo�ci od:';
$txt['pm_receive_from_everyone'] = 'Wszystkich u�ytkownik�w';
$txt['pm_receive_from_ignore'] = 'Wszystkich u�ytkownik�w, z wyj�tkiem ignorowanych';
$txt['pm_receive_from_admins'] = 'Tylko administrator�w';
$txt['pm_receive_from_buddies'] = 'Tylko od znajomych i administrator�w';

$txt['copy_to_outbox'] = 'Domy�lnie zachowuj kopi� ka�dej prywatnej wiadomo�ci w wys�anych.';
$txt['popup_messages'] = 'Poka� wyskakuj�ce okienko gdy otrzymasz prywatn� wiadomo��.';
$txt['pm_remove_inbox_label'] = 'Oznaczaj�c etykiet�, usu� etykiet� odebranych.';
$txt['pm_display_mode'] = 'Pokazuj prywatne wiadomo�ci';
$txt['pm_display_mode_all'] = 'jednocze�nie wszystko';
$txt['pm_display_mode_one'] = 'jednocze�nie jedn�';
$txt['pm_display_mode_linked'] = 'jako rozmowa';
// Use entities in the below string.
$txt['pm_recommend_enable_outbox'] = 'To make the most of this setting we suggest you enable &quot;Save a copy of each Personal Message in my outbox by default&quot;\\n\\nThis will help ensure that the conversations flow better as you can see both sides of the conversation.';

$txt['tracking'] = '�ledzenie';
$txt['tracking_description'] = 'Ta sekcja pozwala na przegl�danie niekt�rych dzia�a� wykonanych przez profil u�ytkownika, jak r�wnie� na �ledzenie jego IP.';

$txt['trackEdits'] = 'Edycje profilu';
$txt['trackEdit_deleted_member'] = 'Usuni�ci u�ytkownicy';
$txt['trackEdit_no_edits'] = '�adne zmiany tego u�ytkownika nie zosta�y zarejestrowane.';
$txt['trackEdit_action'] = 'Pole';
$txt['trackEdit_before'] = 'Warto�� przed';
$txt['trackEdit_after'] = 'Warto�� po';
$txt['trackEdit_applicator'] = 'Zmieniony przez';

$txt['trackEdit_action_real_name'] = 'Nazwa wy�wietlana';
$txt['trackEdit_action_usertitle'] = 'Obecny tytu�';
$txt['trackEdit_action_member_name'] = 'Nazwa u�ytkownika';
$txt['trackEdit_action_email_address'] = 'Adres email';
$txt['trackEdit_action_id_group'] = 'Podstawowa grupa';
$txt['trackEdit_action_additional_groups'] = 'Dodatkowe grupy';

?>