<?php
// Version: 2.0 RC3; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Prywatne Wiadomo�ci';
$txt['send_message'] = 'Wy�lij wiadomo��';
$txt['pm_add'] = 'Dodaj';
$txt['make_bcc'] = 'Dodaj UDW';
$txt['pm_to'] = 'Do';
$txt['pm_bcc'] = 'UDW';
$txt['inbox'] = 'Odebrane';
$txt['conversation'] = 'Rozmowa';
$txt['messages'] = 'Wiadomo�ci';
$txt['sent_items'] = 'Wys�ane';
$txt['new_message'] = 'Nowa wiadomo��';
$txt['delete_message'] = 'Usu� wiadomo�ci';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Usu� wszystkie wiadomo�ci w swojej skrzynce.';
$txt['delete_all_confirm'] = 'Czy na pewno chcesz usun�� wszystkie wiadomo�ci?';
$txt['recipient'] = 'Odbiorca';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nowa Prywatna Wiadomo��: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'SENDER z ' . $context['forum_name'] . ' wys�a� do Ciebie wiadomo��.' . "\n\n" . 'nUWAGA: Pami�taj, to jest tylko powiadomienie. Prosz� nie odpowiada� na ten email.' . "\n\n" . 'Wys�ana wiadomo�� brzmi:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(kilku odbiorc�w: \'u�ytkownik1, u�ytkownik2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odpowiedz na t� prywatn� wiadomo�� tutaj:';

$txt['delete_selected_confirm'] = 'Czy na pewno chcesz usun�� wszystkie zaznaczone prywatne wiadomo�ci?';

$txt['sent_to'] = 'Wy�lij do';
$txt['reply_to_all'] = 'Odpowiedz wszystkim';
$txt['delete_conversation'] = 'Usu� rozmow�';

$txt['pm_capacity'] = 'Pojemno��';
$txt['pm_currently_using'] = '%1$s wiadomo�ci, %2$s%% zaj�te.';
$txt['pm_sent'] = 'Twoja wiadomo�� zosta�a pomy�lnie wys�ana.';

$txt['pm_error_user_not_found'] = 'Nie mo�na znale�� u�ytkownika \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'U�ytkownik \'%1$s\' zablokowa� twoj� prywatn� wiadomo��.';
$txt['pm_error_data_limit_reached'] = 'PW nie mo�e zosta� wys�ana do \'%1$s\' Ich skrzynki s� pe�ne!';
$txt['pm_error_user_cannot_read'] = 'U�ytkownik \'%1$s\' nie mo�e odbiera� prywatnych wiadomo�ci.';
$txt['pm_successfully_sent'] = 'PW zosta�a wys�ana do \'%1$s\'.';
$txt['pm_send_report'] = 'Zg�o� niestosown� wiadomo�� adminowi';
$txt['pm_save_outbox'] = 'Zachowaj kopi� w wys�anych';
$txt['pm_undisclosed_recipients'] = 'Ukryci odbiorcy';
$txt['pm_too_many_recipients'] = 'Maksymalna ilo�� u�ytkownik�w do kt�rych mo�esz wys�a� wiadomo�� prywatn� za jednym razem to %1$d.';

$txt['pm_read'] = 'Przeczytane';
$txt['pm_replied'] = 'Wys�ano odpowied�';

// Message Pruning.
$txt['pm_prune'] = 'Usu� wiadomo�ci';
$txt['pm_prune_desc1'] = 'Usu� wszystkie wiadomo�ci starsze ni�';
$txt['pm_prune_desc2'] = 'dni.';
$txt['pm_prune_warning'] = 'Na pewno usun�� stare prywatne wiadomo�ci?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Inne mo�liwo�ci';
$txt['pm_actions_delete_selected'] = 'Usu� zaznaczone';
$txt['pm_actions_filter_by_label'] = 'Przefiltruj wed�ug etykiety';
$txt['pm_actions_go'] = 'Id� do';

// Manage Labels Screen.
$txt['pm_apply'] = 'Zastosuj';
$txt['pm_manage_labels'] = 'Zarz�dzaj etykietami';
$txt['pm_labels_delete'] = 'Jeste� pewien, �e chcesz usun�� zaznaczone etykiety?';
$txt['pm_labels_desc'] = 'Tu mo�esz dodawa�, edytowa� i usuwa� etykiety u�yte w Twoim centrum wiadomo��i.';
$txt['pm_label_add_new'] = 'Dodaj now� etykiet�';
$txt['pm_label_name'] = 'Nazwa etykiety';
$txt['pm_labels_no_exist'] = 'Nie masz obecnie ustawie� etykiet!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etykieta';
$txt['pm_msg_label_title'] = 'Oznacz wiadomo�� etykiet�';
$txt['pm_msg_label_apply'] = 'Dodaj etykiet�';
$txt['pm_msg_label_remove'] = 'Usu� etykiet�';
$txt['pm_msg_label_inbox'] = 'Odebrane';
$txt['pm_sel_label_title'] = 'Etykieta zaznaczona';

// Sidebar Headings.
$txt['pm_labels'] = 'Etykiety';
$txt['pm_messages'] = 'Wiadomo�ci';
$txt['pm_actions'] = 'Operacje';
$txt['pm_preferences'] = 'Ustawienia';

$txt['pm_is_replied_to'] = 'Na t� wiadomo�� ju� odpowiedzia�e� lub przes�a�e� j� dalej.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Zg�o� Adminowi';
$txt['pm_report_title'] = 'Zg�oszenie Prywatnej Wiadomo�ci';
$txt['pm_report_desc'] = 'Z tej strony mo�esz zg�osi� odebran� prywatn� wiadomo�� do administracji forum. Prosz� do��czy� informacj� dlaczego zg�aszasz t� wiadomo��, to zg�oszenie zostanie przes�ane razem z wiadomo�ci� oryginaln�.';
$txt['pm_report_admins'] = 'Administrator do kt�rego wys�a� zg�oszenie';
$txt['pm_report_all_admins'] = 'Wy�lij do wszystkich administrator�w forum';
$txt['pm_report_reason'] = 'Pow�d dla kt�rego zg�aszasz t� wiadomo��';
$txt['pm_report_message'] = 'Zg�o� wiadomo��';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ZG�OSZENIE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} zg�osi� nast�puj�c� PW, wys�an� przez {SENDER}, z nast�puj�cych powod�w:';
$txt['pm_report_pm_other_recipients'] = 'Inni odbiorcy tej wiadomo�ci:';
$txt['pm_report_pm_hidden'] = '%1$d ukrytych odbiorc�w';
$txt['pm_report_pm_unedited_below'] = 'Poni�ej znajduje si� oryginalna zawarto�� zg�aszanej wiadomo�ci:';
$txt['pm_report_pm_sent'] = 'Wy�lij:';

$txt['pm_report_done'] = 'Dzi�kujemy za zg�oszenie, w najbli�szym czasie spodziewaj si� odpowiedzi od administracji.';
$txt['pm_report_return'] = 'Wr�� do skrzynki odbiorczej';

$txt['pm_search_title'] = 'Szukaj w Prywatnych Wiadomo�ciach';
$txt['pm_search_bar_title'] = 'Znajd� Wiadomo��';
$txt['pm_search_text'] = 'Szukaj';
$txt['pm_search_go'] = 'Szukaj';
$txt['pm_search_advanced'] = 'Wyszukiwanie zaawansowane';
$txt['pm_search_user'] = 'wys�ane przez';
$txt['pm_search_match_all'] = 'Dopasuj wszystkie s�owa';
$txt['pm_search_match_any'] = 'Dopasuj jakiekolwiek ze s��w';
$txt['pm_search_options'] = 'Opcje';
$txt['pm_search_post_age'] = 'Wiek wiadomo�ci';
$txt['pm_search_show_complete'] = 'Poka� ca�� wiadomo�� w rezultatach wyszukiwania.';
$txt['pm_search_subject_only'] = 'Szukaj tylko wed�ug tematu i autora.';
$txt['pm_search_between'] = 'pomi�dzy';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dni';
$txt['pm_search_order'] = 'Sortowanie wyszukiwania';
$txt['pm_search_choose_label'] = 'Wybierz etykiet� do przeszukania, lub przeszukaj wszystkie';

$txt['pm_search_results'] = 'Rezultaty wyszukiwania';
$txt['pm_search_none_found'] = 'Nie znaleziono wiadomo�ci';

$txt['pm_search_orderby_relevant_first'] = 'Najpierw najbardziej dopasowane';
$txt['pm_search_orderby_recent_first'] = 'Najpierw najnowsze';
$txt['pm_search_orderby_old_first'] = 'Najpierw najstarsze';

$txt['pm_visual_verification_label'] = 'Weryfikacja';
$txt['pm_visual_verification_desc'] = 'Wpisz litery widoczne na obrazku.';

$txt['pm_settings'] = 'Zmie� ustawienia';
$txt['pm_change_view'] = 'Zmie� widok';

$txt['pm_manage_rules'] = 'Zarz�dzaj regu�ami';
$txt['pm_manage_rules_desc'] = 'Regu�y wiadomo�ci pozwol� Ci automatycznie sortowa� przychodz�ce wiadomo�ci wg kryteriow jakie zdefiniujesz. Poni�ej s� wszystkie aktualnie ustawione regu�y. Aby edytowa� regu��, po prostu kliknij jej nazw�.';
$txt['pm_rules_none'] = 'Nie masz jeszcze ustawionych �adnych regu� wiadomo�ci.';
$txt['pm_rule_title'] = 'Regu�a';
$txt['pm_add_rule'] = 'Dodaj now� regu��';
$txt['pm_apply_rules'] = 'Zastosuj regu�y teraz';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Czy na pewno chcesz zastosowa� aktualne regu�y do wszystkich prywatnych wiadomo�ci?';
$txt['pm_edit_rule'] = 'Edytuj regu��';
$txt['pm_rule_save'] = 'Zachowaj regu��';
$txt['pm_delete_selected_rule'] = 'Usu� Zaznaczone Regu�y';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Czy na pewno chcesz usun�� zaznaczone regu�y?';
$txt['pm_rule_name'] = 'Nazwa';
$txt['pm_rule_name_desc'] = '�atwa do zapami�tania nazwa dla regu�y';
$txt['pm_rule_name_default'] = '[NAZWA]';
$txt['pm_rule_description'] = 'Opis';
$txt['pm_rule_not_defined'] = 'Dodaj kryteria aby rozpocz�� tworzenie opisu tej regu�y.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Uwaga:</strong> Wydaje si�, �e masz wy��czon� obs�ug� javascript. Aby skorzysta� z tej opcji, konieczne jest w��czenie obs�ugi javascript.</span>';
$txt['pm_rule_criteria'] = 'Kryteria';
$txt['pm_rule_criteria_add'] = 'Dodaj kryterium';
$txt['pm_rule_criteria_pick'] = 'Wybierz kryterium';
$txt['pm_rule_mid'] = 'Nazwa nadawcy';
$txt['pm_rule_gid'] = 'Grupa nadawcy';
$txt['pm_rule_sub'] = 'Temat wiadomo�ci zawiera';
$txt['pm_rule_msg'] = 'Tre�� wiadomo�ci zawiera';
$txt['pm_rule_bud'] = 'Nadawca nale�y do znajomych';
$txt['pm_rule_sel_group'] = 'Wybierz grup�';
$txt['pm_rule_logic'] = 'Podczas przetwarzania regu�y';
$txt['pm_rule_logic_and'] = 'Wszystkie kryteria musz� zosta� spe�nione';
$txt['pm_rule_logic_or'] = 'Jakiekolwiek kryterium musi zosta� spe�nione';
$txt['pm_rule_actions'] = 'Akcje';
$txt['pm_rule_sel_action'] = 'Wybierz akcj�';
$txt['pm_rule_add_action'] = 'Dodaj akcj�';
$txt['pm_rule_label'] = 'Oznacz wiadomo��';
$txt['pm_rule_sel_label'] = 'Wybierz etykiet�';
$txt['pm_rule_delete'] = 'Usu� wiadomo��';
$txt['pm_rule_no_name'] = 'Zapomnia�e� wpisa� nazw� regu�y';
$txt['pm_rule_no_criteria'] = 'Regu�a musi mie� ustawione przynajmniej jedno kryterium i jedn� akcj�.';
$txt['pm_rule_too_complex'] = 'Regu�a, kt�r� tworzysz jest zbyt d�uga by j� zapisa�. Sp�nuj podzieli� j� na mniejsze regu�y.';

$txt['pm_readable_and'] = '<em>i</em>';
$txt['pm_readable_or'] = '<em>lub</em>';
$txt['pm_readable_start'] = 'Je�li';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'wiadomo�� od &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'wysy�aj�cy nale�y do &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = 'temat wiadomo�ci zawiera &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'tre�� wiadomo�ci zawiera &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'wysy�aj�cy nale�y do znajomych';
$txt['pm_readable_label'] = 'akceptuj etykiet� &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'usu� wiadomo��';
$txt['pm_readable_then'] = '<strong>wtedy</strong>';

?>