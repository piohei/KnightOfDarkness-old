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

$txt['paid_username'] = 'Nazwa u�ytkownika';

$txt['paid_subscriptions_desc'] = 'W tym dziale mo�esz doda�, usun�� b�d� edytowa� p�atne subskrypcje na twoim forum.';
$txt['paid_subs_settings'] = 'Ustawienia';
$txt['paid_subs_settings_desc'] = 'Tutaj mo�esz edytowa� metody p�atno�ci dost�pne dla u�ytkownik�w.';
$txt['paid_subs_view'] = 'Poka� Subskrypcje';
$txt['paid_subs_view_desc'] = 'Tutaj mo�esz przegl�da� wszystkie dost�pne subskrypcje.';

// Setting type strings.
$txt['paid_enabled'] = 'Aktywuj P�atne Subskrypcje';
$txt['paid_enabled_desc'] = 'Musisz to zaznaczy�, aby p�atne subskrypcje by�y u�ywane na forum.';
$txt['paid_email'] = 'Wy�lij E-maile z powiadomieniem';
$txt['paid_email_desc'] = 'Informuj administratora, gdy subskrypcja zmieni si� automatycznie.';
$txt['paid_email_to'] = 'E-mail do Korespondencji';
$txt['paid_email_to_desc'] = 'Lista adres�w, oddzielonych przecinkami, powiadamianych opr�cz administrator�w forum';
$txt['paidsubs_test'] = 'Aktywuj tryb testowy';
$txt['paidsubs_test_desc'] = 'To ustawia p�atne subskrypcje w tryb &quot;testowy&quot;, kt�ry b�dzie, w miar� mo�liwo�ci, u�ywa� p�atno�ci sandbox w systemie PayPal, Authorize.net itp. Nie w��czaj tego, chyba �e wiesz co robisz!';
$txt['paid_email_no'] = 'Nie wysy�aj �adnych powiadomie�';
$txt['paid_email_error'] = 'Informuj kiedy subskrypcja si� nie powiedzie';
$txt['paid_email_all'] = 'Informuj o wszystkich automatycznych zmianach subskrypcji';
$txt['paid_currency'] = 'Wybierz walut�';
$txt['paid_currency_code'] = 'Kod Waluty';
$txt['paid_currency_code_desc'] = 'Code used by payment merchants';
$txt['paid_currency_symbol'] = 'Symbol u�ywany przez metod� zap�aty';
$txt['paid_currency_symbol_desc'] = 'Use \'%1.2f\' to specify where number goes, for example $%1.2f, %1.2fDM etc';
$txt['paypal_email'] = 'Adres e-mail Paypal';
$txt['paypal_email_desc'] = 'Pozostaw puste je�li nie chcesz u�y� paypal.';
$txt['worldpay_id'] = 'Zainstaluj ID WorldPay';
$txt['worldpay_id_desc'] = 'Zainstaluj ID wygenerowane przez WorldPay. Zostaw puste, je�li nie u�ywasz WorldPay';
$txt['worldpay_password'] = 'Wywo�ania has�a zwrotne WorldPay';
$txt['worldpay_password_desc'] = 'Upewnij si� przy ustalaniu tego has�a w WorldPay, czy jest ono unikatowe i nie jest takie samo jak te do twojego konta worldpay/administratora!';
$txt['authorize_id'] = 'Zainstaluj ID Authorize.net';
$txt['authorize_id_desc'] = 'Zainstaluj ID wygenerowane przez Authorize.net. Zostaw puste, je�li nie u�ywasz Authorize.net';
$txt['authorize_transid'] = 'Transakcja ID Authorize.Net';
$txt['2co_id'] = 'Zainstaluj ID 2co.com';
$txt['2co_id_desc'] = 'Zainstaluj ID wygenerowane przez 2co.com. Zostaw puste, je�li nie u�ywasz 2co.com';
$txt['2co_password'] = 'Sekretne s�owo dla 2co.com';
$txt['2co_password_desc'] = 'Twoje sekretne s�owo dla 2checkout.';
$txt['nochex_email'] = 'Adres email Nochex';
$txt['nochex_email_desc'] = 'Email of a merchant account at Nochex. Leave blank if you are not using Nochex';
$txt['paid_settings_save'] = 'Zapisz';

$txt['paid_note'] = '<strong class="alert">Uwaga:</strong><br />Aby subskrypcje by�y automatycznie aktualizowane dla u�ytkownik�w,
	b�dziesz musia� ustawi� URL zwrotny dla ka�dej metody p�atno�ci. Dla ka�dego typu p�atno�ci, ten URL zwrotny powinien wygl�da� nast�puj�co:
       
	&bull; <strong>' . $boardurl . '/subscriptions.php</strong>

	Mo�esz edytowa� link dla paypal bezpo�rednio przez klikni�cie <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">tutaj</a>.

	Dla innych bram (Je�li zainstalowane) mo�esz znale�� je w panelach klienta, przewa�nie pod terminem "URL zwrotny" lub "Wywo�anie zwrotne URL".';

// View subscription strings.
$txt['paid_name'] = 'Nazwa';
$txt['paid_status'] = 'Status';
$txt['paid_cost'] = 'Cena';
$txt['paid_duration'] = 'Czas trwania';
$txt['paid_active'] = 'Aktywna';
$txt['paid_pending'] = 'Oczekuj�ce p�atno�ci';
$txt['paid_finished'] = 'Zako�czone';
$txt['paid_total'] = 'Razem';
$txt['paid_is_active'] = 'Aktywowany';
$txt['paid_none_yet'] = 'Nie ustawi�e� jeszcze �adnych subskrypcji.';
$txt['paid_payments_pending'] = 'P�atno�ci oczekuj�ce';
$txt['paid_order'] = 'Zam�w';

$txt['yes'] = 'Tak';
$txt['no'] = 'Nie';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Dodaj Now� Subskrypcj�';
$txt['paid_edit_subscription'] = 'Edytuj Subskrypcje';
$txt['paid_delete_subscription'] = 'Usu� Subskrypcje';

$txt['paid_mod_name'] = 'Nazwa Subskrypcji';
$txt['paid_mod_desc'] = 'Opis';
$txt['paid_mod_reminder'] = 'Wy�lij Email przypominaj�cy';
$txt['paid_mod_reminder_desc'] = 'Dni przed wyga�ni�ciem subskrypcji do wys�ania przypomnienia. (Ustaw 0 aby dezaktywowa�)';
$txt['paid_mod_email'] = 'Wy�lij email z chwil� zako�czenia';
$txt['paid_mod_email_desc'] = 'Gdzie {NAME} jest nazw� cz�onk�w; {FORUM} jest nazw� spo�eczno�ci. Temat wiadomo�ci email powinien by� na pierwszej linii. Puste dla braku powiadomie� email.';
$txt['paid_mod_cost_usd'] = 'Cena (USD)';
$txt['paid_mod_cost_eur'] = 'Cena (EUR)';
$txt['paid_mod_cost_gbp'] = 'Cena (GBP)';
$txt['paid_mod_cost_blank'] = 'Pozostaw puste, aby nie oferowa� tej waluty.';
$txt['paid_mod_span'] = 'D�ugo�� Subskrypcji';
$txt['paid_mod_span_days'] = 'Dni';
$txt['paid_mod_span_weeks'] = 'Tygodnie';
$txt['paid_mod_span_months'] = 'Miesi�ce';
$txt['paid_mod_span_years'] = 'Lata';
$txt['paid_mod_active'] = 'Aktywna';
$txt['paid_mod_active_desc'] = 'Subskrypcja musi by� aktywna, aby nowi u�ytkownicy mogli do��czy�.';
$txt['paid_mod_prim_group'] = 'Grupa podstawowa oparta na subskrypcji';
$txt['paid_mod_prim_group_desc'] = 'Grupa podstawowa nadawana u�ytkownikowi w momencie jej subskrypcji.';
$txt['paid_mod_add_groups'] = 'Grupy dodatkowe oparte na subskrypcji';
$txt['paid_mod_add_groups_desc'] = 'Grupy dodatkowe nadawane u�ytkownikowi po subskrypcji.';
$txt['paid_mod_no_group'] = 'Nie zmieniaj';
$txt['paid_mod_edit_note'] = 'Nale�y pami�ta�, �e kiedy grupa posiada istniej�cych subskrybent�w jej ustawienia nie mog� by� zmieniane!';
$txt['paid_mod_delete_warning'] = '<strong>OSTRZE�ENIE</strong><br /><br />Je�li usuniesz t� subskrypcj� wszyscy subskrybenci strac� jakikolwiek dost�p do uprawnie� przyznanych im przez t� subskrypcj�. Je�li nie jeste� pewien, czy chcesz to zrobi� zalecane jest po prostu wy��czy� subskrypcj� zamiast j� usuwa�.<br />';
$txt['paid_mod_repeatable'] = 'Zezwalaj u�ytkownikowi na automatyczne odnowienie subskrypcji';
$txt['paid_mod_allow_partial'] = 'Pozwalaj na cz�ciowe subskrypcje';
$txt['paid_mod_allow_partial_desc'] = 'Je�li ta opcja jest aktywna, w przypadku gdy u�ytkownik zap�aci mniej, ni� jest to wymagane przyznana zostanie subskrypcja na procent od czasu za kt�ry zap�acili.';
$txt['paid_mod_fixed_price'] = 'Subscription for fixed price and period';
$txt['paid_mod_flexible_price'] = 'Subscription price varies on duration ordered';
$txt['paid_mod_price_breakdown'] = 'Flexible Price Breakdown';
$txt['paid_mod_price_breakdown_desc'] = 'Define here how much the subscription should cost dependant on the period they subscribe for. For example, it could cost 12USD to subscribe for a month, but only 100USD for a year. If you don\'t want to define a price for a particular period of time leave it blank.';
$txt['flexible'] = 'Elastyczna';

$txt['paid_per_day'] = 'Cena za dzie�';
$txt['paid_per_week'] = 'Cena za tydzie�';
$txt['paid_per_month'] = 'Cena za miesi�c';
$txt['paid_per_year'] = 'Cena za rok';
$txt['day'] = 'Dzie�';
$txt['week'] = 'Tydzie�';
$txt['month'] = 'Miesi�c';
$txt['year'] = 'Rok';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Przegl�daj u�ytkownik�w';
$txt['view_users_subscribed'] = 'Przegl�daj u�ytkownik�w subskrybuj�cych do: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'Obecnie niema subskrybent�w dla tej subskrypcji!';
$txt['add_subscriber'] = 'Dodaj nowego subskrybenta';
$txt['edit_subscriber'] = 'Edytuj subskrybenta';
$txt['delete_selected'] = 'Usu� zaznaczone';
$txt['complete_selected'] = 'Zako�cz zaznaczone';

// !!! These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Czy na pewno chcesz usun�� wszystkie wpisy zaznaczonych subskrypcji?';
$txt['complete_are_sure'] = 'Czy na pewno chcesz zako�czy� zaznaczone subskrypcje?';

$txt['start_date'] = 'Data rozpocz�cia';
$txt['end_date'] = 'Data zako�czenia';
$txt['start_date_and_time'] = 'Data i czas rozpocz�cia';
$txt['end_date_and_time'] = 'Data i czas zako�czenia';
$txt['edit'] = 'EDYTUJ';
$txt['one_username'] = 'Wprowad� tylko jedn� nazw� u�ytkownika.';
$txt['hour'] = 'Godzina';
$txt['minute'] = 'Minuta';
$txt['error_member_not_found'] = 'Nie uda�o si� znale�� podanego u�ytkownika';
$txt['member_already_subscribed'] = 'Ten u�ytkownik ju� subskrybowa� t� subskrypcj�. Edytuj ich istniej�ce subskrypcje.';
$txt['search_sub'] = 'Znajd� u�ytkownika';

// Make payment.
$txt['paid_confirm_payment'] = 'Potwierd� p�atno��';
$txt['paid_confirm_desc'] = 'Aby kontynuowa� do p�atno�ci, sprawd� poni�sze szczeg�y i kliknij &quot;Zam�w&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Aby zap�aci� u�ywaj�c <a href="http://www.paypal.com">PayPal</a> prosz� klikn�� poni�szy przycisk. Zostaniesz przekierowany na stron� PayPal w celu wykonania p�atno�ci.';
$txt['paid_paypal_order'] = 'Zam�w z PayPal';
$txt['worldpay'] = 'WorldPay';
$txt['paid_confirm_worldpay'] = 'Aby zap�aci� u�ywaj�c <a href="http://www.worldpay.com">WorldPay</a> prosz� klikn�� poni�szy przycisk. Zostaniesz przekierowany na stron� WorldPay w celu wykonania p�atno�ci.';
$txt['paid_worldpay_order'] = 'Zam�w z WorldPay';
$txt['nochex'] = 'Nochex';
$txt['paid_confirm_nochex'] = 'Aby zap�aci� u�ywaj�c <a href="http://www.nochex.com">Nochex</a> prosz� klikn�� poni�szy przycisk. Zostaniesz przekierowany na stron� Nochex w celu wykonania p�atno�ci.';
$txt['paid_nochex_order'] = 'Zam�w z Nochex';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Aby zap�aci� u�ywaj�c <a href="http://www.authorize.net">Authorize.Net</a> prosz� klikn�� poni�szy przycisk. Zostaniesz przekierowany na stron� Authorize.Net w celu wykonania p�atno�ci.';
$txt['paid_authorize_order'] = 'Zam�w z Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Aby zap�aci� u�ywaj�c <a href="http://www.2com.com">2co.com</a> kliknij poni�szy przycisk. Zostaniesz przekierowany na stron� 2co.com w celu wykonania p�atno�ci.';
$txt['paid_2co_order'] = 'Zam�w z 2co.com';
$txt['paid_done'] = 'P�atno�� zako�czona sukcesem';
$txt['paid_done_desc'] = 'Dzi�kujemy za twoj� op�at�. Kiedy transakcja zostanie zweryfikowana, subskrypcja zostanie aktywowana.';
$txt['paid_sub_return'] = 'Wr�� do Subskrypcji';
$txt['paid_current_desc'] = 'Poni�ej znajduje si� lista wszystkich twoich obecnych i poprzednich subskrypcji. Aby rozszerzy� istniej�c� subskrypcj� wystarczy wybra� j� z listy powy�ej.';
$txt['paid_admin_add'] = 'Dodaj t� subskrypcj�';

$txt['paid_not_set_currency'] = 'Nie ustawi�e� jeszcze swojej waluty. Przed kontynuacj� ,mo�esz to zrobi� w sekcji <a href="%1$s">Ustawienia</a>.';
$txt['paid_no_cost_value'] = 'Musisz poda� cen� i d�ugo�� subskrypcji.';
$txt['paid_all_freq_blank'] = 'You must enter a cost for at least one of the four durations.';

// Some error strings.
$txt['paid_no_data'] = 'Nieprawid�owe dane wys�ane do skryptu.';

$txt['paypal_could_not_connect'] = 'Nie mo�na po��czy� si� z serwerem PayPal';
$txt['paid_sub_not_active'] = 'Ta subskrypcja nie przyjmuje �adnych nowych u�ytkownik�w!';
$txt['paid_disabled'] = 'Subskrypcje s� aktualnie wy��czone!';
$txt['paid_unknown_transaction_type'] = 'Nieznany typ transakcji P�atnej Subskrypcji.';
$txt['paid_empty_member'] = 'Paid subscription handler could not recover member ID';
$txt['paid_could_not_find_member'] = 'Paid subscription handler could not find member with ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Paid subscription handler could not find subscription for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Paid subscription handler could not find subscription log entry for member ID: %1$s, subscription ID: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Could not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Przepraszamy, ale administrator nie sko�czy� jeszcze konfigurowa� p�atnych subskrypcji. Spr�buj ponownie p�niej.';
$txt['paid_make_recurring'] = 'Uczy� t� p�atno��, p�atno�ci� powtarzaj�c� si�';

$txt['subscriptions'] = 'Subskrypcje';
$txt['subscription'] = 'Subskrypjca';
$txt['paid_subs_desc'] = 'Poni�ej znajduje si� lista wszystkich subskrypcji dost�pnych na forum.';
$txt['paid_subs_none'] = 'Aktualnie niema �adnych dost�pnych subskrypcji!';

$txt['paid_current'] = 'Istniej�ce Subskrypcje';
$txt['pending_payments'] = 'Oczekuj� na p�atno��';
$txt['pending_payments_desc'] = 'Ten u�ytkownik pr�bowa� wykona� nast�puj�ce p�atno�ci dla subskrypcji, ale potwierdzenie nie zosta�o wys�ane przez forum. Je�li jeste� pewny, �e p�atno�� zosta�a wys�ana kliknij &quot;akceptuj&quot; aby potwierdzi� subskrypcj�. Ewentualnie mo�esz klikn�  &quot;usu�&quot; aby usun�� wszelkie odno�niki do p�atno�ci.';
$txt['pending_payments_value'] = 'Kwota';
$txt['pending_payments_accept'] = 'Akceptuj';
$txt['pending_payments_remove'] = 'Usu�';

?>