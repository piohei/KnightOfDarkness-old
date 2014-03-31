<?php
// Version: 2.0 RC3; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Prywatne Wiadomo¶ci';
$txt['send_message'] = 'Wy¶lij wiadomo¶æ';
$txt['pm_add'] = 'Dodaj';
$txt['make_bcc'] = 'Dodaj UDW';
$txt['pm_to'] = 'Do';
$txt['pm_bcc'] = 'UDW';
$txt['inbox'] = 'Odebrane';
$txt['conversation'] = 'Rozmowa';
$txt['messages'] = 'Wiadomo¶ci';
$txt['sent_items'] = 'Wys³ane';
$txt['new_message'] = 'Nowa wiadomo¶æ';
$txt['delete_message'] = 'Usuñ wiadomo¶ci';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Usuñ wszystkie wiadomo¶ci w swojej skrzynce.';
$txt['delete_all_confirm'] = 'Czy na pewno chcesz usun±æ wszystkie wiadomo¶ci?';
$txt['recipient'] = 'Odbiorca';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Nowa Prywatna Wiadomo¶æ: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'SENDER z ' . $context['forum_name'] . ' wys³a³ do Ciebie wiadomo¶æ.' . "\n\n" . 'nUWAGA: Pamiêtaj, to jest tylko powiadomienie. Proszê nie odpowiadaæ na ten email.' . "\n\n" . 'Wys³ana wiadomo¶æ brzmi:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(kilku odbiorców: \'u¿ytkownik1, u¿ytkownik2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Odpowiedz na t± prywatn± wiadomo¶æ tutaj:';

$txt['delete_selected_confirm'] = 'Czy na pewno chcesz usun±æ wszystkie zaznaczone prywatne wiadomo¶ci?';

$txt['sent_to'] = 'Wy¶lij do';
$txt['reply_to_all'] = 'Odpowiedz wszystkim';
$txt['delete_conversation'] = 'Usuñ rozmowê';

$txt['pm_capacity'] = 'Pojemno¶æ';
$txt['pm_currently_using'] = '%1$s wiadomo¶ci, %2$s%% zajête.';
$txt['pm_sent'] = 'Twoja wiadomo¶æ zosta³a pomy¶lnie wys³ana.';

$txt['pm_error_user_not_found'] = 'Nie mo¿na znale¼æ u¿ytkownika \'%1$s\'.';
$txt['pm_error_ignored_by_user'] = 'U¿ytkownik \'%1$s\' zablokowa³ twoj± prywatn± wiadomo¶æ.';
$txt['pm_error_data_limit_reached'] = 'PW nie mo¿e zostaæ wys³ana do \'%1$s\' Ich skrzynki s± pe³ne!';
$txt['pm_error_user_cannot_read'] = 'U¿ytkownik \'%1$s\' nie mo¿e odbieraæ prywatnych wiadomo¶ci.';
$txt['pm_successfully_sent'] = 'PW zosta³a wys³ana do \'%1$s\'.';
$txt['pm_send_report'] = 'Zg³o¶ niestosown± wiadomo¶æ adminowi';
$txt['pm_save_outbox'] = 'Zachowaj kopiê w wys³anych';
$txt['pm_undisclosed_recipients'] = 'Ukryci odbiorcy';
$txt['pm_too_many_recipients'] = 'Maksymalna ilo¶æ u¿ytkowników do których mo¿esz wys³aæ wiadomo¶æ prywatn± za jednym razem to %1$d.';

$txt['pm_read'] = 'Przeczytane';
$txt['pm_replied'] = 'Wys³ano odpowied¼';

// Message Pruning.
$txt['pm_prune'] = 'Usuñ wiadomo¶ci';
$txt['pm_prune_desc1'] = 'Usuñ wszystkie wiadomo¶ci starsze ni¿';
$txt['pm_prune_desc2'] = 'dni.';
$txt['pm_prune_warning'] = 'Na pewno usun±æ stare prywatne wiadomo¶ci?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Inne mo¿liwo¶ci';
$txt['pm_actions_delete_selected'] = 'Usuñ zaznaczone';
$txt['pm_actions_filter_by_label'] = 'Przefiltruj wed³ug etykiety';
$txt['pm_actions_go'] = 'Id¼ do';

// Manage Labels Screen.
$txt['pm_apply'] = 'Zastosuj';
$txt['pm_manage_labels'] = 'Zarz±dzaj etykietami';
$txt['pm_labels_delete'] = 'Jeste¶ pewien, ¿e chcesz usun±æ zaznaczone etykiety?';
$txt['pm_labels_desc'] = 'Tu mo¿esz dodawaæ, edytowaæ i usuwaæ etykiety u¿yte w Twoim centrum wiadomo¶æi.';
$txt['pm_label_add_new'] = 'Dodaj now± etykietê';
$txt['pm_label_name'] = 'Nazwa etykiety';
$txt['pm_labels_no_exist'] = 'Nie masz obecnie ustawieñ etykiet!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etykieta';
$txt['pm_msg_label_title'] = 'Oznacz wiadomo¶æ etykiet±';
$txt['pm_msg_label_apply'] = 'Dodaj etykietê';
$txt['pm_msg_label_remove'] = 'Usuñ etykietê';
$txt['pm_msg_label_inbox'] = 'Odebrane';
$txt['pm_sel_label_title'] = 'Etykieta zaznaczona';

// Sidebar Headings.
$txt['pm_labels'] = 'Etykiety';
$txt['pm_messages'] = 'Wiadomo¶ci';
$txt['pm_actions'] = 'Operacje';
$txt['pm_preferences'] = 'Ustawienia';

$txt['pm_is_replied_to'] = 'Na tê wiadomo¶æ ju¿ odpowiedzia³e¶ lub przes³a³e¶ j± dalej.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Zg³o¶ Adminowi';
$txt['pm_report_title'] = 'Zg³oszenie Prywatnej Wiadomo¶ci';
$txt['pm_report_desc'] = 'Z tej strony mo¿esz zg³osiæ odebran± prywatn± wiadomo¶æ do administracji forum. Proszê do³±czyæ informacjê dlaczego zg³aszasz t± wiadomo¶æ, to zg³oszenie zostanie przes³ane razem z wiadomo¶ci± oryginaln±.';
$txt['pm_report_admins'] = 'Administrator do którego wys³aæ zg³oszenie';
$txt['pm_report_all_admins'] = 'Wy¶lij do wszystkich administratorów forum';
$txt['pm_report_reason'] = 'Powód dla którego zg³aszasz t± wiadomo¶æ';
$txt['pm_report_message'] = 'Zg³o¶ wiadomo¶æ';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[ZG£OSZENIE] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} zg³osi³ nastêpuj±c± PW, wys³an± przez {SENDER}, z nastêpuj±cych powodów:';
$txt['pm_report_pm_other_recipients'] = 'Inni odbiorcy tej wiadomo¶ci:';
$txt['pm_report_pm_hidden'] = '%1$d ukrytych odbiorców';
$txt['pm_report_pm_unedited_below'] = 'Poni¿ej znajduje siê oryginalna zawarto¶æ zg³aszanej wiadomo¶ci:';
$txt['pm_report_pm_sent'] = 'Wy¶lij:';

$txt['pm_report_done'] = 'Dziêkujemy za zg³oszenie, w najbli¿szym czasie spodziewaj siê odpowiedzi od administracji.';
$txt['pm_report_return'] = 'Wróæ do skrzynki odbiorczej';

$txt['pm_search_title'] = 'Szukaj w Prywatnych Wiadomo¶ciach';
$txt['pm_search_bar_title'] = 'Znajd¼ Wiadomo¶æ';
$txt['pm_search_text'] = 'Szukaj';
$txt['pm_search_go'] = 'Szukaj';
$txt['pm_search_advanced'] = 'Wyszukiwanie zaawansowane';
$txt['pm_search_user'] = 'wys³ane przez';
$txt['pm_search_match_all'] = 'Dopasuj wszystkie s³owa';
$txt['pm_search_match_any'] = 'Dopasuj jakiekolwiek ze s³ów';
$txt['pm_search_options'] = 'Opcje';
$txt['pm_search_post_age'] = 'Wiek wiadomo¶ci';
$txt['pm_search_show_complete'] = 'Poka¿ ca³± wiadomo¶æ w rezultatach wyszukiwania.';
$txt['pm_search_subject_only'] = 'Szukaj tylko wed³ug tematu i autora.';
$txt['pm_search_between'] = 'pomiêdzy';
$txt['pm_search_between_and'] = 'i';
$txt['pm_search_between_days'] = 'dni';
$txt['pm_search_order'] = 'Sortowanie wyszukiwania';
$txt['pm_search_choose_label'] = 'Wybierz etykietê do przeszukania, lub przeszukaj wszystkie';

$txt['pm_search_results'] = 'Rezultaty wyszukiwania';
$txt['pm_search_none_found'] = 'Nie znaleziono wiadomo¶ci';

$txt['pm_search_orderby_relevant_first'] = 'Najpierw najbardziej dopasowane';
$txt['pm_search_orderby_recent_first'] = 'Najpierw najnowsze';
$txt['pm_search_orderby_old_first'] = 'Najpierw najstarsze';

$txt['pm_visual_verification_label'] = 'Weryfikacja';
$txt['pm_visual_verification_desc'] = 'Wpisz litery widoczne na obrazku.';

$txt['pm_settings'] = 'Zmieñ ustawienia';
$txt['pm_change_view'] = 'Zmieñ widok';

$txt['pm_manage_rules'] = 'Zarz±dzaj regu³ami';
$txt['pm_manage_rules_desc'] = 'Regu³y wiadomo¶ci pozwol± Ci automatycznie sortowaæ przychodz±ce wiadomo¶ci wg kryteriow jakie zdefiniujesz. Poni¿ej s± wszystkie aktualnie ustawione regu³y. Aby edytowaæ regu³ê, po prostu kliknij jej nazwê.';
$txt['pm_rules_none'] = 'Nie masz jeszcze ustawionych ¿adnych regu³ wiadomo¶ci.';
$txt['pm_rule_title'] = 'Regu³a';
$txt['pm_add_rule'] = 'Dodaj now± regu³ê';
$txt['pm_apply_rules'] = 'Zastosuj regu³y teraz';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Czy na pewno chcesz zastosowaæ aktualne regu³y do wszystkich prywatnych wiadomo¶ci?';
$txt['pm_edit_rule'] = 'Edytuj regu³ê';
$txt['pm_rule_save'] = 'Zachowaj regu³ê';
$txt['pm_delete_selected_rule'] = 'Usuñ Zaznaczone Regu³y';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Czy na pewno chcesz usun±æ zaznaczone regu³y?';
$txt['pm_rule_name'] = 'Nazwa';
$txt['pm_rule_name_desc'] = '£atwa do zapamiêtania nazwa dla regu³y';
$txt['pm_rule_name_default'] = '[NAZWA]';
$txt['pm_rule_description'] = 'Opis';
$txt['pm_rule_not_defined'] = 'Dodaj kryteria aby rozpocz±æ tworzenie opisu tej regu³y.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Uwaga:</strong> Wydaje siê, ¿e masz wy³±czon± obs³ugê javascript. Aby skorzystaæ z tej opcji, konieczne jest w³±czenie obs³ugi javascript.</span>';
$txt['pm_rule_criteria'] = 'Kryteria';
$txt['pm_rule_criteria_add'] = 'Dodaj kryterium';
$txt['pm_rule_criteria_pick'] = 'Wybierz kryterium';
$txt['pm_rule_mid'] = 'Nazwa nadawcy';
$txt['pm_rule_gid'] = 'Grupa nadawcy';
$txt['pm_rule_sub'] = 'Temat wiadomo¶ci zawiera';
$txt['pm_rule_msg'] = 'Tre¶æ wiadomo¶ci zawiera';
$txt['pm_rule_bud'] = 'Nadawca nale¿y do znajomych';
$txt['pm_rule_sel_group'] = 'Wybierz grupê';
$txt['pm_rule_logic'] = 'Podczas przetwarzania regu³y';
$txt['pm_rule_logic_and'] = 'Wszystkie kryteria musz± zostaæ spe³nione';
$txt['pm_rule_logic_or'] = 'Jakiekolwiek kryterium musi zostaæ spe³nione';
$txt['pm_rule_actions'] = 'Akcje';
$txt['pm_rule_sel_action'] = 'Wybierz akcjê';
$txt['pm_rule_add_action'] = 'Dodaj akcjê';
$txt['pm_rule_label'] = 'Oznacz wiadomo¶æ';
$txt['pm_rule_sel_label'] = 'Wybierz etykietê';
$txt['pm_rule_delete'] = 'Usuñ wiadomo¶æ';
$txt['pm_rule_no_name'] = 'Zapomnia³e¶ wpisaæ nazwê regu³y';
$txt['pm_rule_no_criteria'] = 'Regu³a musi mieæ ustawione przynajmniej jedno kryterium i jedn± akcjê.';
$txt['pm_rule_too_complex'] = 'Regu³a, któr± tworzysz jest zbyt d³uga by j± zapisaæ. Spónuj podzieliæ j± na mniejsze regu³y.';

$txt['pm_readable_and'] = '<em>i</em>';
$txt['pm_readable_or'] = '<em>lub</em>';
$txt['pm_readable_start'] = 'Je¶li';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'wiadomo¶æ od &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'wysy³aj±cy nale¿y do &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = 'temat wiadomo¶ci zawiera &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'tre¶æ wiadomo¶ci zawiera &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'wysy³aj±cy nale¿y do znajomych';
$txt['pm_readable_label'] = 'akceptuj etykietê &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'usuñ wiadomo¶æ';
$txt['pm_readable_then'] = '<strong>wtedy</strong>';

?>