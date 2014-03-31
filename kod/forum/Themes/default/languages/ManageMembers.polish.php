<?php
// Version: 2.0 RC3; ManageMembers

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['groups'] = 'Grupy';
$txt['viewing_groups'] = 'Przegl�danie grup u�ytkownik�w';

$txt['membergroups_title'] = 'Zarz�dzaj grupami u�ytkownik�w';
$txt['membergroups_description'] = 'Do grup nale�� u�ytkownicy o takich samych pozwoleniach, wygl�dzie lub prawach dost�pu. Niekt�re grupy u�ytkownik�w bazuj� na liczbie wiadomo�ci wys�anych przez u�ytkownika. Mo�esz przypisa� kogo� do danej grupy zmieniaj�c ustawienia w jego profilu.';
$txt['membergroups_modify'] = 'Zmie�';

$txt['membergroups_add_group'] = 'Dodaj grup�';
$txt['membergroups_regular'] = 'Zwyk�e grupy';
$txt['membergroups_post'] = 'Grupy oparte na ilo�ci wiadomo�ci';

$txt['membergroups_group_name'] = 'Nazwa grupy u�ytkownik�w';
$txt['membergroups_new_board'] = 'Dost�pne dzia�y';
$txt['membergroups_new_board_desc'] = 'Dzia�y, kt�re widzi ta grupa u�ytkownik�w.';
$txt['membergroups_new_board_post_groups'] = '<em>Uwaga! Normalnie, grupy mog�ce si� wypowiada� nie potrzebuj� specjalnie ustawionych praw dost�pu, poniewa� grupa, w kt�rej ju� si� znajduj�, daje im te uprawnienia.';
$txt['membergroups_new_as_inherit'] = 'dziedzicz z';
$txt['membergroups_new_as_type'] = 'wg typu';
$txt['membergroups_new_as_copy'] = 'bazuj�ce na';
$txt['membergroups_new_copy_none'] = '(�adne)';
$txt['membergroups_can_edit_later'] = '(mo�esz zmieni� je p�niej)';

$txt['membergroups_edit_group'] = 'Modyfikuj grup�';
$txt['membergroups_edit_name'] = 'Nazwa grupy';
$txt['membergroups_edit_inherit_permissions'] = 'Zezwolenia dziedziczone';
$txt['membergroups_edit_inherit_permissions_desc'] = 'Wybierz &quot;Nie&quot; aby w��czy� w�asny zestaw zezwole� dla grupy.';
$txt['membergroups_edit_inherit_permissions_no'] = 'Nie - U�yj unikalnych zezwole�';
$txt['membergroups_edit_inherit_permissions_from'] = 'Dziedzicz z';
$txt['membergroups_edit_hidden'] = 'Widzialno��';
$txt['membergroups_edit_hidden_no'] = 'Widzialne';
$txt['membergroups_edit_hidden_boardindex'] = 'Widzialne - Except in Group Key';
$txt['membergroups_edit_hidden_all'] = 'Niewidzialne';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'Czy jeste� pewien �e chcesz zabroni� przypisania u�ytkownik�w do tej grupy jako grupy podstawowej?\\n\\nDoing so will restrict assignment to additional groups only, and will update all current &quot;primary&quot; members to have it as an additional group only.';
$txt['membergroups_edit_desc'] = 'Opis grupy';
$txt['membergroups_edit_group_type'] = 'Typ grupy';
$txt['membergroups_edit_select_group_type'] = 'Wybierz typ grupy';
$txt['membergroups_group_type_private'] = 'Prywatna <span class="smalltext">(Cz�onek musi by� przypisany)</span>';
$txt['membergroups_group_type_request'] = 'Na pro�b� <span class="smalltext">(U�ytkownik musi poprosi� o cz�onkostwo)</span>';
$txt['membergroups_group_type_free'] = 'Otwarta <span class="smalltext">(U�ytkownik mo�e dowolnie do��czy� lub opu�ci� grup�)</span>';
$txt['membergroups_group_type_post'] = 'Bazuj�ca na wiadomo�ciach <span class="smalltext">(Cz�onkowie bazuj�cy na liczbie wiadomo�ci)</span>';
$txt['membergroups_min_posts'] = 'Wymagana liczba wiadomo�ci';
$txt['membergroups_online_color'] = 'Kolor na li�cie u�ytkownik�w online';
$txt['membergroups_star_count'] = 'Ilo�� gwiazdek';
$txt['membergroups_star_image'] = 'Nazwa pliku gwiazdek';
$txt['membergroups_star_image_note'] = '(rozpoczynaj�c od URL/images, mo�esz u�y� $language dla j�zyka danego u�ytkownika.)';
$txt['membergroups_max_messages'] = 'Maks. ilo�� prywatnych wiadomo�ci';
$txt['membergroups_max_messages_note'] = '(0 = nieograniczona)';
$txt['membergroups_edit_save'] = 'Zapisz';
$txt['membergroups_delete'] = 'Usu�';
$txt['membergroups_confirm_delete'] = 'Czy na pewno chcesz usun�� t� grup�?';

$txt['membergroups_members_title'] = 'Wy�wietlanie wszystkich u�ytkownik�w w grupie';
$txt['membergroups_members_group_members'] = 'U�ytkownicy grupy';
$txt['membergroups_members_no_members'] = 'Ta grupa jest obecnie pusta';
$txt['membergroups_members_add_title'] = 'Dodaj u�ytkownika do tej grupy';
$txt['membergroups_members_add_desc'] = 'Lista u�ytkownik�w do dodania';
$txt['membergroups_members_add'] = 'Dodaj u�ytkownik�w';
$txt['membergroups_members_remove'] = 'Usu� z grupy';
$txt['membergroups_members_last_active'] = 'Ostatnio aktywny';
$txt['membergroups_members_additional_only'] = 'Dodaj jako tylko jako grup� dodatkow�.';
$txt['membergroups_members_group_moderators'] = 'Moderatorzy grupy';
$txt['membergroups_members_description'] = 'Opis';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'Czy jeste� pewien �e chcesz usun�� si� z grupy Administracyjnej?';

$txt['membergroups_postgroups'] = 'Grupy wiadomo�ci';
$txt['membergroups_settings'] = 'Ustawienia grup u�ytkownik�w';
$txt['groups_manage_membergroups'] = 'Grupy kt�rym wolno zmienia� grupy u�ytkownik�w';
$txt['membergroups_select_permission_type'] = 'Wybierz profil uprawnie�';
$txt['membergroups_images_url'] = '{URL stylu}/images/';
$txt['membergroups_select_visible_boards'] = 'Poka� dzia�y';
$txt['membergroups_members_top'] = 'U�ytkownicy';
$txt['membergroups_name'] = 'Nazwa';
$txt['membergroups_stars'] = 'Gwiazdki';

$txt['admin_browse_approve'] = 'U�ytkownicy, kt�rych konta oczekuj� na zatwierdzenie';
$txt['admin_browse_approve_desc'] = 'Tutaj mo�esz zarz�dza� wszystkimi u�ytkownikami, kt�rzy czekaj� na zatwierdzenie ich kont.';
$txt['admin_browse_activate'] = 'U�ytkownicy, kt�rych konta oczekuj� na aktywacj�';
$txt['admin_browse_activate_desc'] = 'Tu wymienieni s� wszyscy u�ytkownicy, kt�rzy jeszcze nie aktywowali swoich kont na twoim forum.';
$txt['admin_browse_awaiting_approval'] = 'Oczekiwanie na zatwierdzenie (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'Oczekuj�cy na aktywacj� (%1$d)';

$txt['admin_browse_username'] = 'Nazwa u�ytkownika';
$txt['admin_browse_email'] = 'Adres email';
$txt['admin_browse_ip'] = 'Adres IP';
$txt['admin_browse_registered'] = 'Zarejestrowany';
$txt['admin_browse_id'] = 'ID';
$txt['admin_browse_with_selected'] = 'Z zaznaczonym';
$txt['admin_browse_no_members_approval'] = 'Aktualnie �aden u�ytkownik nie czeka na zgod�.';
$txt['admin_browse_no_members_activate'] = 'Aktualnie �aden u�ytkownik nie zd��y� aktywowa� swojego konta.';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'wszyscy zaznaczeni u�ytkownicy?';
$txt['admin_browse_outstanding_warn'] = 'wszyscy dotkni�ci u�ytkownicy?';
$txt['admin_browse_w_approve'] = 'Zatwierd�';
$txt['admin_browse_w_activate'] = 'Aktywuj';
$txt['admin_browse_w_delete'] = 'Usu�';
$txt['admin_browse_w_reject'] = 'Odrzu�';
$txt['admin_browse_w_remind'] = 'Przypomnij';
$txt['admin_browse_w_approve_deletion'] = 'Zatwierd� (usu� konto)';
$txt['admin_browse_w_email'] = 'i wyslij email';
$txt['admin_browse_w_approve_require_activate'] = 'Zatwierd� i wymagaj aktywacji';

$txt['admin_browse_filter_by'] = 'Filtruj:';
$txt['admin_browse_filter_show'] = 'Wy�wietlane';
$txt['admin_browse_filter_type_0'] = 'Nieaktywowane nowe konta';
$txt['admin_browse_filter_type_2'] = 'Nieaktywowane zmiany adresu email';
$txt['admin_browse_filter_type_3'] = 'Niezatwierdzone nowe konta';
$txt['admin_browse_filter_type_4'] = 'Niezatwierdzone pro�by o skasowanie konta';
$txt['admin_browse_filter_type_5'] = 'Niezatwierdzone konta z restrykcjami wiekowymi';

$txt['admin_browse_outstanding'] = 'Zalegaj�cy u�ytkownicy';
$txt['admin_browse_outstanding_days_1'] = 'Wszyscy u�ytkownicy zarejestrowani d�u�ej ni�';
$txt['admin_browse_outstanding_days_2'] = 'dni temu';
$txt['admin_browse_outstanding_perform'] = 'Zr�b to';
$txt['admin_browse_outstanding_go'] = 'Zr�b to';

$txt['check_for_duplicate'] = 'Szukaj duplikat�w';
$txt['dont_check_for_duplicate'] = 'Nie szukaj duplikat�w';
$txt['duplicates'] = 'Duplikaty';

$txt['not_activated'] = 'Nie aktywny';

?>