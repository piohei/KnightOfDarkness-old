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

$txt['paid_username'] = 'Nazwa u¿ytkownika';

$txt['paid_subscriptions_desc'] = 'W tym dziale mo¿esz dodaæ, usun±æ b±d¼ edytowaæ p³atne subskrypcje na twoim forum.';
$txt['paid_subs_settings'] = 'Ustawienia';
$txt['paid_subs_settings_desc'] = 'Tutaj mo¿esz edytowaæ metody p³atno¶ci dostêpne dla u¿ytkowników.';
$txt['paid_subs_view'] = 'Poka¿ Subskrypcje';
$txt['paid_subs_view_desc'] = 'Tutaj mo¿esz przegl±daæ wszystkie dostêpne subskrypcje.';

// Setting type strings.
$txt['paid_enabled'] = 'Aktywuj P³atne Subskrypcje';
$txt['paid_enabled_desc'] = 'Musisz to zaznaczyæ, aby p³atne subskrypcje by³y u¿ywane na forum.';
$txt['paid_email'] = 'Wy¶lij E-maile z powiadomieniem';
$txt['paid_email_desc'] = 'Informuj administratora, gdy subskrypcja zmieni siê automatycznie.';
$txt['paid_email_to'] = 'E-mail do Korespondencji';
$txt['paid_email_to_desc'] = 'Lista adresów, oddzielonych przecinkami, powiadamianych oprócz administratorów forum';
$txt['paidsubs_test'] = 'Aktywuj tryb testowy';
$txt['paidsubs_test_desc'] = 'To ustawia p³atne subskrypcje w tryb &quot;testowy&quot;, który bêdzie, w miarê mo¿liwo¶ci, u¿ywa³ p³atno¶ci sandbox w systemie PayPal, Authorize.net itp. Nie w³±czaj tego, chyba ¿e wiesz co robisz!';
$txt['paid_email_no'] = 'Nie wysy³aj ¿adnych powiadomieñ';
$txt['paid_email_error'] = 'Informuj kiedy subskrypcja siê nie powiedzie';
$txt['paid_email_all'] = 'Informuj o wszystkich automatycznych zmianach subskrypcji';
$txt['paid_currency'] = 'Wybierz walutê';
$txt['paid_currency_code'] = 'Kod Waluty';
$txt['paid_currency_code_desc'] = 'Code used by payment merchants';
$txt['paid_currency_symbol'] = 'Symbol u¿ywany przez metodê zap³aty';
$txt['paid_currency_symbol_desc'] = 'Use \'%1.2f\' to specify where number goes, for example $%1.2f, %1.2fDM etc';
$txt['paypal_email'] = 'Adres e-mail Paypal';
$txt['paypal_email_desc'] = 'Pozostaw puste je¶li nie chcesz u¿yæ paypal.';
$txt['worldpay_id'] = 'Zainstaluj ID WorldPay';
$txt['worldpay_id_desc'] = 'Zainstaluj ID wygenerowane przez WorldPay. Zostaw puste, je¶li nie u¿ywasz WorldPay';
$txt['worldpay_password'] = 'Wywo³ania has³a zwrotne WorldPay';
$txt['worldpay_password_desc'] = 'Upewnij siê przy ustalaniu tego has³a w WorldPay, czy jest ono unikatowe i nie jest takie samo jak te do twojego konta worldpay/administratora!';
$txt['authorize_id'] = 'Zainstaluj ID Authorize.net';
$txt['authorize_id_desc'] = 'Zainstaluj ID wygenerowane przez Authorize.net. Zostaw puste, je¶li nie u¿ywasz Authorize.net';
$txt['authorize_transid'] = 'Transakcja ID Authorize.Net';
$txt['2co_id'] = 'Zainstaluj ID 2co.com';
$txt['2co_id_desc'] = 'Zainstaluj ID wygenerowane przez 2co.com. Zostaw puste, je¶li nie u¿ywasz 2co.com';
$txt['2co_password'] = 'Sekretne s³owo dla 2co.com';
$txt['2co_password_desc'] = 'Twoje sekretne s³owo dla 2checkout.';
$txt['nochex_email'] = 'Adres email Nochex';
$txt['nochex_email_desc'] = 'Email of a merchant account at Nochex. Leave blank if you are not using Nochex';
$txt['paid_settings_save'] = 'Zapisz';

$txt['paid_note'] = '<strong class="alert">Uwaga:</strong><br />Aby subskrypcje by³y automatycznie aktualizowane dla u¿ytkowników,
	bêdziesz musia³ ustawiæ URL zwrotny dla ka¿dej metody p³atno¶ci. Dla ka¿dego typu p³atno¶ci, ten URL zwrotny powinien wygl±daæ nastêpuj±co:
       
	&bull; <strong>' . $boardurl . '/subscriptions.php</strong>

	Mo¿esz edytowaæ link dla paypal bezpo¶rednio przez klikniêcie <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">tutaj</a>.

	Dla innych bram (Je¶li zainstalowane) mo¿esz znale¼æ je w panelach klienta, przewa¿nie pod terminem "URL zwrotny" lub "Wywo³anie zwrotne URL".';

// View subscription strings.
$txt['paid_name'] = 'Nazwa';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Cena';
$txt['paid_duration'] = 'Czas trwania';
$txt['paid_active'] = 'Aktywna';
$txt['paid_pending'] = 'Oczekuj±ce p³atno¶ci';
$txt['paid_finished'] = 'Zakoñczone';
$txt['paid_total'] = 'Razem';
$txt['paid_is_active'] = 'Aktywowany';
$txt['paid_none_yet'] = 'Nie ustawi³e¶ jeszcze ¿adnych subskrypcji.';
$txt['paid_payments_pending'] = 'P³atno¶ci oczekuj±ce';
$txt['paid_order'] = 'Zamów';

$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Dodaj Now± Subskrypcjê';
$txt['paid_edit_subscription'] = 'Edytuj Subskrypcje';
$txt['paid_delete_subscription'] = 'Usuñ Subskrypcje';

$txt['paid_mod_name'] = 'Nazwa Subskrypcji';
$txt['paid_mod_desc'] = 'Opis';
$txt['paid_mod_reminder'] = 'Wy¶lij Email przypominaj±cy';
$txt['paid_mod_reminder_desc'] = 'Dni przed wyga¶niêciem subskrypcji do wys³ania przypomnienia. (Ustaw 0 aby dezaktywowaæ)';
$txt['paid_mod_email'] = 'Wy¶lij email z chwil± zakoñczenia';
$txt['paid_mod_email_desc'] = 'Gdzie {NAME} jest nazw± cz³onków; {FORUM} jest nazw± spo³eczno¶ci. Temat wiadomo¶ci email powinien byæ na pierwszej linii. Puste dla braku powiadomieñ email.';
$txt['paid_mod_cost_usd'] = 'Cena (USD)';
$txt['paid_mod_cost_eur'] = 'Cena (EUR)';
$txt['paid_mod_cost_gbp'] = 'Cena (GBP)';
$txt['paid_mod_cost_blank'] = 'Pozostaw puste, aby nie oferowaæ tej waluty.';
$txt['paid_mod_span'] = 'D³ugo¶æ Subskrypcji';
$txt['paid_mod_span_days'] = 'Dni';
$txt['paid_mod_span_weeks'] = 'Tygodnie';
$txt['paid_mod_span_months'] = 'Miesi±ce';
$txt['paid_mod_span_years'] = 'Lata';
$txt['paid_mod_active'] = 'Aktywna';
$txt['paid_mod_active_desc'] = 'Subskrypcja musi byæ aktywna, aby nowi u¿ytkownicy mogli do³±czyæ.';
$txt['paid_mod_prim_group'] = 'Grupa podstawowa oparta na subskrypcji';
$txt['paid_mod_prim_group_desc'] = 'Grupa podstawowa nadawana u¿ytkownikowi w momencie jej subskrypcji.';
$txt['paid_mod_add_groups'] = 'Grupy dodatkowe oparte na subskrypcji';
$txt['paid_mod_add_groups_desc'] = 'Grupy dodatkowe nadawane u¿ytkownikowi po subskrypcji.';
$txt['paid_mod_no_group'] = 'Nie zmieniaj';
$txt['paid_mod_edit_note'] = 'Nale¿y pamiêtaæ, ¿e kiedy grupa posiada istniej±cych subskrybentów jej ustawienia nie mog± byæ zmieniane!';
$txt['paid_mod_delete_warning'] = '<strong>OSTRZE¯ENIE</strong><br /><br />Je¶li usuniesz t± subskrypcjê wszyscy subskrybenci strac± jakikolwiek dostêp do uprawnieñ przyznanych im przez t± subskrypcjê. Je¶li nie jeste¶ pewien, czy chcesz to zrobiæ zalecane jest po prostu wy³±czyæ subskrypcjê zamiast j± usuwaæ.<br />';
$txt['paid_mod_repeatable'] = 'Zezwalaj u¿ytkownikowi na automatyczne odnowienie subskrypcji';
$txt['paid_mod_allow_partial'] = 'Pozwalaj na czê¶ciowe subskrypcje';
$txt['paid_mod_allow_partial_desc'] = 'Je¶li ta opcja jest aktywna, w przypadku gdy u¿ytkownik zap³aci mniej, ni¿ jest to wymagane przyznana zostanie subskrypcja na procent od czasu za który zap³acili.';
$txt['paid_mod_fixed_price'] = 'Subscription for fixed price and period';
$txt['paid_mod_flexible_price'] = 'Subscription price varies on duration ordered';
$txt['paid_mod_price_breakdown'] = 'Flexible Price Breakdown';
$txt['paid_mod_price_breakdown_desc'] = 'Define here how much the subscription should cost dependant on the period they subscribe for. For example, it could cost 12USD to subscribe for a month, but only 100USD for a year. If you don\'t want to define a price for a particular period of time leave it blank.';
$txt['flexible'] = 'Elastyczna';

$txt['paid_per_day'] = 'Cena za dzieñ';
$txt['paid_per_week'] = 'Cena za tydzieñ';
$txt['paid_per_month'] = 'Cena za miesi±c';
$txt['paid_per_year'] = 'Cena za rok';
$txt['day'] = 'Dzieñ';
$txt['week'] = 'Tydzieñ';
$txt['month'] = 'Miesi±c';
$txt['year'] = 'Rok';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Przegl±daj u¿ytkowników';
$txt['view_users_subscribed'] = 'Przegl±daj u¿ytkowników subskrybuj±cych do: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Obecnie niema subskrybentów dla tej subskrypcji!';
$txt['add_subscriber'] = 'Dodaj nowego subskrybenta';
$txt['edit_subscriber'] = 'Edytuj subskrybenta';
$txt['delete_selected'] = 'Usuñ zaznaczone';
$txt['complete_selected'] = 'Zakoñcz zaznaczone';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Czy na pewno chcesz usun±æ wszystkie wpisy zaznaczonych subskrypcji?';
$txt['complete_are_sure'] = 'Czy na pewno chcesz zakoñczyæ zaznaczone subskrypcje?';

$txt['start_date'] = 'Data rozpoczêcia';
$txt['end_date'] = 'Data zakoñczenia';
$txt['start_date_and_time'] = 'Data i czas rozpoczêcia';
$txt['end_date_and_time'] = 'Data i czas zakoñczenia';
$txt['edit'] = 'EDYTUJ';
$txt['one_username'] = 'Wprowad¼ tylko jedn± nazwê u¿ytkownika.';
$txt['hour'] = 'Godzina';
$txt['minute'] = 'Minuta';
$txt['error_member_not_found'] = 'Nie uda³o siê znale¼æ podanego u¿ytkownika';
$txt['member_already_subscribed'] = 'Ten u¿ytkownik ju¿ subskrybowa³ t± subskrypcjê. Edytuj ich istniej±ce subskrypcje.';
$txt['search_sub'] = 'Znajd¼ u¿ytkownika';

// Make payment.
$txt['paid_confirm_payment'] = 'Potwierd¼ p³atno¶æ';
$txt['paid_confirm_desc'] = 'Aby kontynuowaæ do p³atno¶ci, sprawd¼ poni¿sze szczegó³y i kliknij &quot;Zamów&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Aby zap³aciæ u¿ywaj±c <a href="http://www.paypal.com">PayPal</a> proszê klikn±æ poni¿szy przycisk. Zostaniesz przekierowany na stronê PayPal w celu wykonania p³atno¶ci.';
$txt['paid_paypal_order'] = 'Zamów z PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Aby zap³aciæ u¿ywaj±c <a href="http://www.worldpay.com">WorldPay</a> proszê klikn±æ poni¿szy przycisk. Zostaniesz przekierowany na stronê WorldPay w celu wykonania p³atno¶ci.';
$txt['paid_worldpay_order'] = 'Zamów z WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Aby zap³aciæ u¿ywaj±c <a href="http://www.nochex.com">Nochex</a> proszê klikn±æ poni¿szy przycisk. Zostaniesz przekierowany na stronê Nochex w celu wykonania p³atno¶ci.';
$txt['paid_nochex_order'] = 'Zamów z Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Aby zap³aciæ u¿ywaj±c <a href="http://www.authorize.net">Authorize.Net</a> proszê klikn±æ poni¿szy przycisk. Zostaniesz przekierowany na stronê Authorize.Net w celu wykonania p³atno¶ci.';
$txt['paid_authorize_order'] = 'Zamów z Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Aby zap³aciæ u¿ywaj±c <a href="http://www.2com.com">2co.com</a> kliknij poni¿szy przycisk. Zostaniesz przekierowany na stronê 2co.com w celu wykonania p³atno¶ci.';
$txt['paid_2co_order'] = 'Zamów z 2co.com';
$txt['paid_done'] = 'P³atno¶æ zakoñczona sukcesem';
$txt['paid_done_desc'] = 'Dziêkujemy za twoj± op³atê. Kiedy transakcja zostanie zweryfikowana, subskrypcja zostanie aktywowana.';
$txt['paid_sub_return'] = 'Wróæ do Subskrypcji';
$txt['paid_current_desc'] = 'Poni¿ej znajduje siê lista wszystkich twoich obecnych i poprzednich subskrypcji. Aby rozszerzyæ istniej±c± subskrypcjê wystarczy wybraæ j± z listy powy¿ej.';
$txt['paid_admin_add'] = 'Dodaj t± subskrypcjê';

$txt['paid_not_set_currency'] = 'Nie ustawi³e¶ jeszcze swojej waluty. Przed kontynuacj± ,mo¿esz to zrobiæ w sekcji <a href="%1$s">Ustawienia</a>.';
$txt['paid_no_cost_value'] = 'Musisz podaæ cenê i d³ugo¶æ subskrypcji.';
$txt['paid_all_freq_blank'] = 'You must enter a cost for at least one of the four durations.';

// Some error strings.
$txt['paid_no_data'] = 'Nieprawid³owe dane wys³ane do skryptu.';

$txt['paypal_could_not_connect'] = 'Nie mo¿na po³±czyæ siê z serwerem PayPal';
$txt['paid_sub_not_active'] = 'Ta subskrypcja nie przyjmuje ¿adnych nowych u¿ytkowników!';
$txt['paid_disabled'] = 'Subskrypcje s± aktualnie wy³±czone!';
$txt['paid_unknown_transaction_type'] = 'Nieznany typ transakcji P³atnej Subskrypcji.';
$txt['paid_empty_member'] = 'Paid subscription handler could not recover member ID';
$txt['paid_could_not_find_member'] = 'Paid subscription handler could not find member with ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Paid subscription handler could not find subscription for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Paid subscription handler could not find subscription log entry for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Could not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Przepraszamy, ale administrator nie skoñczy³ jeszcze konfigurowaæ p³atnych subskrypcji. Spróbuj ponownie pó¼niej.';
$txt['paid_make_recurring'] = 'Uczyñ t± p³atno¶æ, p³atno¶ci± powtarzaj±c± siê';

$txt['subscriptions'] = 'Subskrypcje';
$txt['subscription'] = 'Subskrypjca';
$txt['paid_subs_desc'] = 'Poni¿ej znajduje siê lista wszystkich subskrypcji dostêpnych na forum.';
$txt['paid_subs_none'] = 'Aktualnie niema ¿adnych dostêpnych subskrypcji!';

$txt['paid_current'] = 'Istniej±ce Subskrypcje';
$txt['pending_payments'] = 'Oczekujê na p³atno¶æ';
$txt['pending_payments_desc'] = 'Ten u¿ytkownik próbowa³ wykonaæ nastêpuj±ce p³atno¶ci dla subskrypcji, ale potwierdzenie nie zosta³o wys³ane przez forum. Je¶li jeste¶ pewny, ¿e p³atno¶æ zosta³a wys³ana kliknij &quot;akceptuj&quot; aby potwierdziæ subskrypcjê. Ewentualnie mo¿esz klikn±  &quot;usuñ&quot; aby usun±æ wszelkie odno¶niki do p³atno¶ci.';
$txt['pending_payments_value'] = 'Kwota';
$txt['pending_payments_accept'] = 'Akceptuj';
$txt['pending_payments_remove'] = 'Usuñ';

?>