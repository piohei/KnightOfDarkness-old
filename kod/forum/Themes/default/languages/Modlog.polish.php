<?php
// Version: 2.0 RC3; Modlog

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'U�ytkownik';
$txt['modlog_position'] = 'Pozycja';
$txt['modlog_action'] = 'Akcja';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Wyniki wyszukiwania';
$txt['modlog_total_entries'] = 'Wej�� w sumie';
$txt['modlog_ac_approve_topic'] = 'W�tek zatwierdzony &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Wiadomo�� zatwierdzona &quot;{subject}&quot; w &quot;{topic}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Zamkni�ty &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Ostrze�ony {member} za &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Odblokowany &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Przyklejony &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Odklejony &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Usuni�ty &quot;{subject}&quot; przez &quot;{member}&quot; z &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Usuni�ty u�ytkonik &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'W�tek usuni�ty &quot;{topic}&quot; z &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Edytowany &quot;{message}&quot; przez &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Scal w�tki aby utworzy� &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Podziel &quot;{topic}&quot; aby stworzy� &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Przeniesiony &quot;{topic}&quot; z &quot;{board_from}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Edytuj profil &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Wyczy�� wiadomo�ci starsze ni� {days} dni';
$txt['modlog_ac_news'] = 'Edytuj nowo�ci';
$txt['modlog_enter_comment'] = 'Wejd� w komentarz moderatora';
$txt['modlog_moderation_log'] = 'Mod Log';
$txt['modlog_moderation_log_desc'] = 'Ni�ej znajduje si� lista wszystkich akcji podejmowanych przez moderator�w twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mog� zosta� usuni�te z tego logu p�ki nie b�d� starsze ni� 24 godziny.';
$txt['modlog_no_entries_found'] = 'Brak wpis�w';
$txt['modlog_remove'] = 'Usu�';
$txt['modlog_removeall'] = 'Usu� wszystkie';
$txt['modlog_go'] = 'Id�';
$txt['modlog_add'] = 'Dodaj';
$txt['modlog_search'] = 'Szybkie wyszukiwanie';
$txt['modlog_by'] = 'przez';
$txt['modlog_id'] = '<em>Skasowane - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Dodany szablon ostrze�e�: &quot;{template}&quot; ';
$txt['modlog_ac_modify_warn_template'] = 'Edytowany szablon ostrze�e�: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Skasowany szablon ostrze�e�: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Ban dodany:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>U�ytkownik:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Nazwa hosta:</em> {hostname}';

$txt['modlog_admin_log'] = 'Admin Log';
$txt['modlog_admin_log_desc'] = 'Ni�ej znajduje si� zapisana lista akcji podejmowanych przez administracj� twojego forum.<br /><strong>Uwaga:</strong> Wpisy nie mog� zosta� usuni�te z tego logu p�ki nie b�d� starsze ni� 24 godziny.';
$txt['modlog_admin_log_no_entries_found'] = 'Brak log�w administracyjnych.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Zaktualizowano forum do wersji {version}';
$txt['modlog_ac_install'] = 'Zainstalowano wersj� {version}';
$txt['modlog_ac_add_board'] = 'Dodano nowe forum: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Edytowano &quot;{board}&quot; forum';
$txt['modlog_ac_delete_board'] = 'Skasowano &quot;{boardname}&quot; forum';
$txt['modlog_ac_add_cat'] = 'Dodano kategori�, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Edytowano &quot;{catname}&quot; kategori�';
$txt['modlog_ac_delete_cat'] = 'Skasowano &quot;{catname}&quot; kategori�';

$txt['modlog_ac_delete_group'] = 'Skasowano &quot;{group}&quot; grup�';
$txt['modlog_ac_add_group'] = 'Dodano &quot;{group}&quot; grup�';
$txt['modlog_ac_edited_group'] = 'Edytowano &quot;{group}&quot; grup�';
$txt['modlog_ac_added_to_group'] = 'Dodano &quot;{member}&quot; do &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_from_group'] = 'Usuni�to &quot;{member}&quot; z &quot;{group}&quot; grupy';
$txt['modlog_ac_removed_all_groups'] = 'Usuni�to &quot;{member}&quot; ze wszystkich grup';

$txt['modlog_ac_remind_member'] = 'Wy�lij przypomnienie do &quot;{member}&quot; o aktywacji konta';
$txt['modlog_ac_approve_member'] = 'Zatwierdzone/Aktywowane konto &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Wy�lij newsletter';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Przywr�cono w�tek &quot;{topic}&quot; z &quot;{board}&quot; do &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Przywr�cono wiadomo�ci z &quot;{subject}&quot; do w�tka &quot;{topic}&quot; w &quot;{board}&quot; forum.';

$txt['modlog_parameter_guest'] = '<em>Go��</em>';

?>