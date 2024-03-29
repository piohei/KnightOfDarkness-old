<?php
// Version: 2.0 RC3; Modlog

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'Użytkownik';
$txt['modlog_position'] = 'Pozycja';
$txt['modlog_action'] = 'Akcja';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Wyniki wyszukiwania';
$txt['modlog_total_entries'] = 'Wejść w sumie';
$txt['modlog_ac_approve_topic'] = 'Wątek zatwierdzony &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Wiadomość zatwierdzona &quot;{subject}&quot; w &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zamknięty &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Ostrzeżony {member} za &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Odblokowany &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Przyklejony &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odklejony &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Usunięty &quot;{subject}&quot; przez &quot;{member}&quot; z &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Usunięty użytkonik &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Wątek usunięty &quot;{topic}&quot; z &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Edytowany &quot;{message}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Scal wątki aby utworzyć &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Podziel &quot;{topic}&quot; aby stworzyć &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Przeniesiony &quot;{topic}&quot; z &quot;{board_from}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Edytuj profil &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Wyczyść wiadomości starsze niż {days} dni';
$txt['modlog_ac_news'] = 'Edytuj nowości';
$txt['modlog_enter_comment'] = 'Wejdź w komentarz moderatora';
$txt['modlog_moderation_log'] = 'Mod Log';
$txt['modlog_moderation_log_desc'] = 'Niżej znajduje się lista wszystkich akcji podejmowanych przez moderatorów twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mogą zostać usunięte z tego logu póki nie będą starsze niż 24 godziny.';
$txt['modlog_no_entries_found'] = 'Brak wpisów';
$txt['modlog_remove'] = 'Usuń';
$txt['modlog_removeall'] = 'Usuń wszystkie';
$txt['modlog_go'] = 'Idź';
$txt['modlog_add'] = 'Dodaj';
$txt['modlog_search'] = 'Szybkie wyszukiwanie';
$txt['modlog_by'] = 'przez';
$txt['modlog_id'] = '<em>Skasowane - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Dodany szablon ostrzeżeń: &quot;{template}&quot; ';
$txt['modlog_ac_modify_warn_template'] = 'Edytowany szablon ostrzeżeń: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Skasowany szablon ostrzeżeń: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Ban dodany:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Użytkownik:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nazwa hosta:</em> {hostname}';

$txt['modlog_admin_log'] = 'Admin Log';
$txt['modlog_admin_log_desc'] = 'Niżej znajduje się zapisana lista akcji podejmowanych przez administrację twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mogą zostać usunięte z tego logu póki nie będą starsze niż 24 godziny.';
$txt['modlog_admin_log_no_entries_found'] = 'Brak logów administracyjnych.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Zaktualizowano forum do wersji {version}';
$txt['modlog_ac_install'] = 'Zainstalowano wersję {version}';
$txt['modlog_ac_add_board'] = 'Dodano nowe forum: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Edytowano &quot;{board}&quot; forum';
$txt['modlog_ac_delete_board'] = 'Skasowano &quot;{boardname}&quot; forum';
$txt['modlog_ac_add_cat'] = 'Dodano kategorię, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Edytowano &quot;{catname}&quot; kategorię';
$txt['modlog_ac_delete_cat'] = 'Skasowano &quot;{catname}&quot; kategorię';

$txt['modlog_ac_delete_group'] = 'Skasowano &quot;{group}&quot; grupę';
$txt['modlog_ac_add_group'] = 'Dodano &quot;{group}&quot; grupę';
$txt['modlog_ac_edited_group'] = 'Edytowano &quot;{group}&quot; grupę';
$txt['modlog_ac_added_to_group'] = 'Dodano &quot;{member}&quot; do &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_from_group'] = 'Usunięto &quot;{member}&quot; z &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_all_groups'] = 'Usunięto &quot;{member}&quot; ze wszystkich grup';

$txt['modlog_ac_remind_member'] = 'Wyślij przypomnienie do &quot;{member}&quot; o aktywacji konta';
$txt['modlog_ac_approve_member'] = 'Zatwierdzone/Aktywowane konto &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Wyślij newsletter';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Przywrócono wątek &quot;{topic}&quot; z &quot;{board}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Przywrócono wiadomości z &quot;{subject}&quot; do wątka &quot;{topic}&quot; w &quot;{board}&quot; forum.';

$txt['modlog_parameter_guest'] = '<em>Gość</em>';

?>