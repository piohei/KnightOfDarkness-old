<?php
// Version: 2.0 RC3; Modlog

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'U¿ytkownik';
$txt['modlog_position'] = 'Pozycja';
$txt['modlog_action'] = 'Akcja';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Wyniki wyszukiwania';
$txt['modlog_total_entries'] = 'Wej¶æ w sumie';
$txt['modlog_ac_approve_topic'] = 'W±tek zatwierdzony &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Wiadomo¶æ zatwierdzona &quot;{subject}&quot; w &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zamkniêty &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Ostrze¿ony {member} za &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Odblokowany &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Przyklejony &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odklejony &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Usuniêty &quot;{subject}&quot; przez &quot;{member}&quot; z &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Usuniêty u¿ytkonik &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'W±tek usuniêty &quot;{topic}&quot; z &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Edytowany &quot;{message}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Scal w±tki aby utworzyæ &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Podziel &quot;{topic}&quot; aby stworzyæ &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Przeniesiony &quot;{topic}&quot; z &quot;{board_from}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Edytuj profil &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Wyczy¶æ wiadomo¶ci starsze ni¿ {days} dni';
$txt['modlog_ac_news'] = 'Edytuj nowo¶ci';
$txt['modlog_enter_comment'] = 'Wejd¼ w komentarz moderatora';
$txt['modlog_moderation_log'] = 'Mod Log';
$txt['modlog_moderation_log_desc'] = 'Ni¿ej znajduje siê lista wszystkich akcji podejmowanych przez moderatorów twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mog± zostaæ usuniête z tego logu póki nie bêd± starsze ni¿ 24 godziny.';
$txt['modlog_no_entries_found'] = 'Brak wpisów';
$txt['modlog_remove'] = 'Usuñ';
$txt['modlog_removeall'] = 'Usuñ wszystkie';
$txt['modlog_go'] = 'Id¼';
$txt['modlog_add'] = 'Dodaj';
$txt['modlog_search'] = 'Szybkie wyszukiwanie';
$txt['modlog_by'] = 'przez';
$txt['modlog_id'] = '<em>Skasowane - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Dodany szablon ostrze¿eñ: &quot;{template}&quot; ';
$txt['modlog_ac_modify_warn_template'] = 'Edytowany szablon ostrze¿eñ: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Skasowany szablon ostrze¿eñ: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Ban dodany:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>U¿ytkownik:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nazwa hosta:</em> {hostname}';

$txt['modlog_admin_log'] = 'Admin Log';
$txt['modlog_admin_log_desc'] = 'Ni¿ej znajduje siê zapisana lista akcji podejmowanych przez administracjê twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mog± zostaæ usuniête z tego logu póki nie bêd± starsze ni¿ 24 godziny.';
$txt['modlog_admin_log_no_entries_found'] = 'Brak logów administracyjnych.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Zaktualizowano forum do wersji {version}';
$txt['modlog_ac_install'] = 'Zainstalowano wersjê {version}';
$txt['modlog_ac_add_board'] = 'Dodano nowe forum: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Edytowano &quot;{board}&quot; forum';
$txt['modlog_ac_delete_board'] = 'Skasowano &quot;{boardname}&quot; forum';
$txt['modlog_ac_add_cat'] = 'Dodano kategoriê, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Edytowano &quot;{catname}&quot; kategoriê';
$txt['modlog_ac_delete_cat'] = 'Skasowano &quot;{catname}&quot; kategoriê';

$txt['modlog_ac_delete_group'] = 'Skasowano &quot;{group}&quot; grupê';
$txt['modlog_ac_add_group'] = 'Dodano &quot;{group}&quot; grupê';
$txt['modlog_ac_edited_group'] = 'Edytowano &quot;{group}&quot; grupê';
$txt['modlog_ac_added_to_group'] = 'Dodano &quot;{member}&quot; do &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_from_group'] = 'Usuniêto &quot;{member}&quot; z &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_all_groups'] = 'Usuniêto &quot;{member}&quot; ze wszystkich grup';

$txt['modlog_ac_remind_member'] = 'Wy¶lij przypomnienie do &quot;{member}&quot; o aktywacji konta';
$txt['modlog_ac_approve_member'] = 'Zatwierdzone/Aktywowane konto &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Wy¶lij newsletter';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Przywrócono w±tek &quot;{topic}&quot; z &quot;{board}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Przywrócono wiadomo¶ci z &quot;{subject}&quot; do w±tka &quot;{topic}&quot; w &quot;{board}&quot; forum.';

$txt['modlog_parameter_guest'] = '<em>Go¶æ</em>';

?>