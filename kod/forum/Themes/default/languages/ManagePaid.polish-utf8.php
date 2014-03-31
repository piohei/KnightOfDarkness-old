<?php
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

?>