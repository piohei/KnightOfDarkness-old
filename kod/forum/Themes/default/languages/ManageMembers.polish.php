<?php
// Version: 2.0 RC3; ManageMembers

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['groups'] = 'Grupy';
$txt['viewing_groups'] = 'Przegl±danie grup u¿ytkowników';

$txt['membergroups_title'] = 'Zarz±dzaj grupami u¿ytkowników';
$txt['membergroups_description'] = 'Do grup nale¿± u¿ytkownicy o takich samych pozwoleniach, wygl±dzie lub prawach dostêpu. Niektóre grupy u¿ytkowników bazuj± na liczbie wiadomo¶ci wys³anych przez u¿ytkownika. Mo¿esz przypisaæ kogo¶ do danej grupy zmieniaj±c ustawienia w jego profilu.';
$txt['membergroups_modify'] = 'Zmieñ';

$txt['membergroups_add_group'] = 'Dodaj grupê';
$txt['membergroups_regular'] = 'Zwyk³e grupy';
$txt['membergroups_post'] = 'Grupy oparte na ilo¶ci wiadomo¶ci';

$txt['membergroups_group_name'] = 'Nazwa grupy u¿ytkowników';
$txt['membergroups_new_board'] = 'Dostêpne dzia³y';
$txt['membergroups_new_board_desc'] = 'Dzia³y, które widzi ta grupa u¿ytkowników.';
$txt['membergroups_new_board_post_groups'] = '<em>Uwaga! Normalnie, grupy mog±ce siê wypowiadaæ nie potrzebuj± specjalnie ustawionych praw dostêpu, poniewa¿ grupa, w której ju¿ siê znajduj±, daje im te uprawnienia.';
$txt['membergroups_new_as_inherit'] = 'dziedzicz z';
$txt['membergroups_new_as_type'] = 'wg typu';
$txt['membergroups_new_as_copy'] = 'bazuj±ce na';
$txt['membergroups_new_copy_none'] = '(¿adne)';
$txt['membergroups_can_edit_later'] = '(mo¿esz zmieniæ je pó¼niej)';

$txt['membergroups_edit_group'] = 'Modyfikuj grupê';
$txt['membergroups_edit_name'] = 'Nazwa grupy';
$txt['membergroups_edit_inherit_permissions'] = 'Zezwolenia dziedziczone';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Wybierz &quot;Nie&quot; aby w³±czyæ w³asny zestaw zezwoleñ dla grupy.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Nie - U¿yj unikalnych zezwoleñ';
$txt['membergroups_edit_inherit_permissions_from'] = 'Dziedzicz z';
$txt['membergroups_edit_hidden'] = 'Widzialno¶æ';
$txt['membergroups_edit_hidden_no'] = 'Widzialne';
$txt['membergroups_edit_hidden_boardindex'] = 'Widzialne - Except in Group Key';
$txt['membergroups_edit_hidden_all'] = 'Niewidzialne';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Czy jeste¶ pewien ¿e chcesz zabroniæ przypisania u¿ytkowników do tej grupy jako grupy podstawowej?\\n\\nDoing so will restrict assignment to additional groups only, and will update all current &quot;primary&quot; members to have it as an additional group only.';
$txt['membergroups_edit_desc'] = 'Opis grupy';
$txt['membergroups_edit_group_type'] = 'Typ grupy';
$txt['membergroups_edit_select_group_type'] = 'Wybierz typ grupy';
$txt['membergroups_group_type_private'] = 'Prywatna <span class="smalltext">(Cz³onek musi byæ przypisany)</span>';
$txt['membergroups_group_type_request'] = 'Na pro¶bê <span class="smalltext">(U¿ytkownik musi poprosiæ o cz³onkostwo)</span>';
$txt['membergroups_group_type_free'] = 'Otwarta <span class="smalltext">(U¿ytkownik mo¿e dowolnie do³±czyæ lub opu¶ciæ grupê)</span>';
$txt['membergroups_group_type_post'] = 'Bazuj±ca na wiadomo¶ciach <span class="smalltext">(Cz³onkowie bazuj±cy na liczbie wiadomo¶ci)</span>';
$txt['membergroups_min_posts'] = 'Wymagana liczba wiadomo¶ci';
$txt['membergroups_online_color'] = 'Kolor na li¶cie u¿ytkowników online';
$txt['membergroups_star_count'] = 'Ilo¶æ gwiazdek';
$txt['membergroups_star_image'] = 'Nazwa pliku gwiazdek';
$txt['membergroups_star_image_note'] = '(rozpoczynaj±c od URL/images, mo¿esz u¿yæ $language dla jêzyka danego u¿ytkownika.)';
$txt['membergroups_max_messages'] = 'Maks. ilo¶æ prywatnych wiadomo¶ci';
$txt['membergroups_max_messages_note'] = '(0 = nieograniczona)';
$txt['membergroups_edit_save'] = 'Zapisz';
$txt['membergroups_delete'] = 'Usuñ';
$txt['membergroups_confirm_delete'] = 'Czy na pewno chcesz usun±æ tê grupê?';

$txt['membergroups_members_title'] = 'Wy¶wietlanie wszystkich u¿ytkowników w grupie';
$txt['membergroups_members_group_members'] = 'U¿ytkownicy grupy';
$txt['membergroups_members_no_members'] = 'Ta grupa jest obecnie pusta';
$txt['membergroups_members_add_title'] = 'Dodaj u¿ytkownika do tej grupy';
$txt['membergroups_members_add_desc'] = 'Lista u¿ytkowników do dodania';
$txt['membergroups_members_add'] = 'Dodaj u¿ytkowników';
$txt['membergroups_members_remove'] = 'Usuñ z grupy';
$txt['membergroups_members_last_active'] = 'Ostatnio aktywny';
$txt['membergroups_members_additional_only'] = 'Dodaj jako tylko jako grupê dodatkow±.';
$txt['membergroups_members_group_moderators'] = 'Moderatorzy grupy';
$txt['membergroups_members_description'] = 'Opis';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Czy jeste¶ pewien ¿e chcesz usun±æ siê z grupy Administracyjnej?';

$txt['membergroups_postgroups'] = 'Grupy wiadomo¶ci';
$txt['membergroups_settings'] = 'Ustawienia grup u¿ytkowników';
$txt['groups_manage_membergroups'] = 'Grupy którym wolno zmieniaæ grupy u¿ytkowników';
$txt['membergroups_select_permission_type'] = 'Wybierz profil uprawnieñ';
$txt['membergroups_images_url'] = '{URL stylu}/images/';
$txt['membergroups_select_visible_boards'] = 'Poka¿ dzia³y';
$txt['membergroups_members_top'] = 'U¿ytkownicy';
$txt['membergroups_name'] = 'Nazwa';
$txt['membergroups_stars'] = 'Gwiazdki';

$txt['admin_browse_approve'] = 'U¿ytkownicy, których konta oczekuj± na zatwierdzenie';
$txt['admin_browse_approve_desc'] = 'Tutaj mo¿esz zarz±dzaæ wszystkimi u¿ytkownikami, którzy czekaj± na zatwierdzenie ich kont.';
$txt['admin_browse_activate'] = 'U¿ytkownicy, których konta oczekuj± na aktywacjê';
$txt['admin_browse_activate_desc'] = 'Tu wymienieni s± wszyscy u¿ytkownicy, którzy jeszcze nie aktywowali swoich kont na twoim forum.';
$txt['admin_browse_awaiting_approval'] = 'Oczekiwanie na zatwierdzenie (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Oczekuj±cy na aktywacjê (%1$d)';

$txt['admin_browse_username'] = 'Nazwa u¿ytkownika';
$txt['admin_browse_email'] = 'Adres email';
$txt['admin_browse_ip'] = 'Adres IP';
$txt['admin_browse_registered'] = 'Zarejestrowany';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Z zaznaczonym';
$txt['admin_browse_no_members_approval'] = 'Aktualnie ¿aden u¿ytkownik nie czeka na zgodê.';
$txt['admin_browse_no_members_activate'] = 'Aktualnie ¿aden u¿ytkownik nie zd±¿y³ aktywowaæ swojego konta.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'wszyscy zaznaczeni u¿ytkownicy?';
$txt['admin_browse_outstanding_warn'] = 'wszyscy dotkniêci u¿ytkownicy?';
$txt['admin_browse_w_approve'] = 'Zatwierd¼';
$txt['admin_browse_w_activate'] = 'Aktywuj';
$txt['admin_browse_w_delete'] = 'Usuñ';
$txt['admin_browse_w_reject'] = 'Odrzuæ';
$txt['admin_browse_w_remind'] = 'Przypomnij';
$txt['admin_browse_w_approve_deletion'] = 'Zatwierd¼ (usuñ konto)';
$txt['admin_browse_w_email'] = 'i wyslij email';
$txt['admin_browse_w_approve_require_activate'] = 'Zatwierd¼ i wymagaj aktywacji';

$txt['admin_browse_filter_by'] = 'Filtruj:';
$txt['admin_browse_filter_show'] = 'Wy¶wietlane';
$txt['admin_browse_filter_type_0'] = 'Nieaktywowane nowe konta';
$txt['admin_browse_filter_type_2'] = 'Nieaktywowane zmiany adresu email';
$txt['admin_browse_filter_type_3'] = 'Niezatwierdzone nowe konta';
$txt['admin_browse_filter_type_4'] = 'Niezatwierdzone pro¶by o skasowanie konta';
$txt['admin_browse_filter_type_5'] = 'Niezatwierdzone konta z restrykcjami wiekowymi';

$txt['admin_browse_outstanding'] = 'Zalegaj±cy u¿ytkownicy';
$txt['admin_browse_outstanding_days_1'] = 'Wszyscy u¿ytkownicy zarejestrowani d³u¿ej ni¿';
$txt['admin_browse_outstanding_days_2'] = 'dni temu';
$txt['admin_browse_outstanding_perform'] = 'Zrób to';
$txt['admin_browse_outstanding_go'] = 'Zrób to';

$txt['check_for_duplicate'] = 'Szukaj duplikatów';
$txt['dont_check_for_duplicate'] = 'Nie szukaj duplikatów';
$txt['duplicates'] = 'Duplikaty';

$txt['not_activated'] = 'Nie aktywny';

?>