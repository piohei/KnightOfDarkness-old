<?php
// Version: 2.0 RC3; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Nast�puj�ce tematy oczekuj� na zatwierdzenie:';
$txt['scheduled_approval_email_msg'] = 'Nast�puj�ce wiadomo�ci oczekuj� na zatwierdzenie:';
$txt['scheduled_approval_email_attach'] = 'Nast�puj�ce za��czniki oczekuj� na zatwierdzenie:';
$txt['scheduled_approval_email_event'] = 'Nast�puj�ce wydarzenia oczekuj� na zatwierdzenie:';

$txt['emails'] = array(

'resend_activate_message' => array(

/*
@additional_params: resend_activate_message
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONCODE: The code needed to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to "{USERNAME}". Je�li zapomnia�e� swojego has�a mo�esz je zresetowa� za pomoc� {FORGOTPASSWORDLINK}

Zanim b�dziesz m�g� si� zalogowa�, musisz najpierw aktywowa� swoje konto. Aby to zrobi�, kliknij w poni�szy link:

{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'resend_pending_message' => array(

/*
@additional_params: resend_pending_message
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => '{REALNAME}, otrzymali�my Twoj� pro�b� o rejestracj� na {FORUMNAME}.

Nazwa u�ytkownika, pod kt�r� si� zarejestrowa�e�, to {USERNAME}.

Zanim b�dziesz m�g� si� zalogowa� i u�ywa� forum, Twoja pro�ba o rejestracj� musi zosta� zatwierdzona. Kiedy to nast�pi, otrzymasz kolejnego maila z tego adresu.

{REGARDS}',

),

'mc_group_approve' => array(

/*
@additional_params: mc_group_approve
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was accepted into.
@description: The request to join a particular membergroup has been accepted.
*/

'subject' => 'Zosta�e� dodany do grupy',

'body' => '{USERNAME},

Pragniemy poinformowa�, �e Twoja pro�ba o do��czenie do grupy "{GROUPNAME}" na {FORUMNAME} zosta�a przyj�ta. Twoje konto zosta�o zaktualizowane i uwzgl�dnia teraz cz�onkostwo w tej grupie.

{REGARDS}',

),

'mc_group_reject' => array(

/*
@additional_params: mc_group_reject
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
@description: The request to join a particular membergroup has been rejected.
*/

'subject' => 'Cz�onkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykro�ci� informujemy, �e Twoja pro�ba o do��czenie do "{GROUPNAME}" na {FORUMNAME} zosta�a odrzucona.

{REGARDS}',

),

'mc_group_reject_reason' => array(

/*
@additional_params: mc_group_reject_reason
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
REASON: Reason for the rejection.
@description: The request to join a particular membergroup has been rejected with a reason given.
*/

'subject' => 'Cz�onkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykro�ci� informujemy, �e Twoja pro�ba o do��czenie do "{GROUPNAME}" na {FORUMNAME} zosta�a odrzucona.

Pow�d odrzucenia Twojej pro�by: {REASON}

{REGARDS}',

),

'admin_approve_accept' => array(

/*
@additional_params: admin_approve_accept
NAME: The display name of the member.
USERNAME: The user name for the member receiving the email.
PROFILELINK: The URL of the profile page.
FORGOTPASSWORDLINK: The URL of the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Witaj, {NAME}!

Twoje konto zosta�o aktywowane r�cznie przez Admina. Teraz mo�esz si� zalogowa� i korzysta� z forum. Twoja nazwa u�ytkownika to: {USERNAME}

Je�li zapomnia�e� swojego has�a mo�esz je zmieni� klikaj�c w:
{FORGOTPASSWORDLINK}

{REGARDS}',

),

'admin_approve_activation' => array(

/*
@additional_params: admin_approve_activation
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Witaj, {USERNAME}!

Twoje konto na {FORUMNAME} zosta�o zatwierdzone przez administratora i musi zosta� aktywowane, zanim b�dziesz m�g� korzysta� z forum. Prosz�, u�yj poni�szego linku, aby aktywowa� swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_approve_reject' => array(

/*
@additional_params: admin_approve_reject
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Rejestracja odrzucona',

'body' => '{USERNAME},

Przykro nam, ale Twoja pro�ba o rejestracj� na {FORUMNAME} zosta�a odrzucona.

{REGARDS}',

),

'admin_approve_delete' => array(

/*
@additional_params: admin_approve_delete
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Konto zosta�o usuni�te',

'body' => '{USERNAME},

Twoje konto na {FORUMNAME} zosta�o usuni�te. Prawdopodbna przyczyna: Nie aktywowa�e� swojego konta po rejstracji. Je�li chcesz korzysta� z forum, musisz powt�rzy� proces rejestracji.

{REGARDS}',

),

'admin_approve_remind' => array(

/*
@additional_params: admin_approve_remind
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Przypomnienie o rejestracji',

'body' => '{USERNAME},
Nie dokona�e� aktywacji swojego konta na {FORUMNAME}.

Aby aktywowa� konto i korzysta� z forum, kliknij poni�szy link:
{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_register_activate' => array(

/*
@additional_params:
USERNAME: The user name for the member receiving the email.
ACTIVATIONLINK: The url link to activate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The activation code.
@description:
*/

'subject' => 'Witaj na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME} oraz has�o {PASSWORD}.

Przed zalogowaniem musisz aktywowa� swoje konto klikaj�c w poni�szy link:

{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'admin_register_immediate' => array(

'subject' => 'Welcome to {FORUMNAME}',

'body' => 'Thank you for registering at {FORUMNAME}. Your username is {USERNAME} and your password is {PASSWORD}.

{REGARDS}',

),

'new_announcement' => array(

/*
@additional_params: new_announcement
TOPICSUBJECT: The subject of the topic being announced.
MESSAGE: The message body of the first post of the announced topic.
TOPICLINK: A link to the topic being announced.
@description:
*/

'subject' => 'Powiadomienie: {TOPICSUBJECT}',

'body' => '{MESSAGE}

Aby zrezygnowa� z powiadomie�, zaloguj si� na forum i odznacz "Otrzymuj powiadomienia i wa�ne informacje przez email" w swoim profilu.

Aby zobaczy� tre�� powiadomienia kliknij na poni�szy link:
{TOPICLINK}

{REGARDS}',

),

'notify_boards_once_body' => array(

/*
@additional_params: notify_boards_once_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy W�tek: {TOPICSUBJECT}',

'body' => 'Nowy w�tek, \'{TOPICSUBJECT}\', powsta� na forum, kt�re obserwujesz.

Mo�esz go zobaczy� tutaj:
{TOPICLINK}

Wi�cej odpowiedzi mo�e zosta� wys�ane, ale nie otrzymasz nowych powiadomie� emailem, dop�ki nie przeczytasz w�tku.

Tre�� w�tku:
{MESSAGE}

Przesta� �ledzi� nowe w�tki na tym forum, klikaj�c tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards_once' => array(

/*
@additional_params: notify_boards_once
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy W�tek: {TOPICSUBJECT}',

'body' => 'Nowy w�tek, \'{TOPICSUBJECT}\', powsta� na forum, kt�re obserwujesz.

Mo�esz go zobaczy� tutaj:
{TOPICLINK}

Wi�cej odpowiedzi mo�e zosta� wys�ane, ale nie otrzymasz nowych powiadomie� emailem, dop�ki nie przeczytasz w�tku.

Przesta� �ledzi� nowe w�tki na tym forum, klikaj�c tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards_body' => array(

/*
@additional_params: notify_boards_body
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
MESSAGE: This is the body of the message.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy W�tek: {TOPICSUBJECT}',

'body' => 'Nowy w�tek, \'{TOPICSUBJECT}\', powsta� na forum, kt�re obserwujesz.

Mo�esz go zobaczy� tutaj:
{TOPICLINK}

Tre�� w�tku:
{MESSAGE}

Przesta� �ledzi� nowe w�tki na tym forum, klikaj�c tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'notify_boards' => array(

/*
@additional_params: notify_boards
TOPICSUBJECT: The subject of the topic causing the notification
TOPICLINK: A link to the topic.
UNSUBSCRIBELINK: Link to unsubscribe from notifications.
@description:
*/

'subject' => 'Nowy W�tek: {TOPICSUBJECT}',

'body' => 'Nowy w�tek, \'{TOPICSUBJECT}\', powsta� na forum, kt�re obserwujesz.
Mo�esz go zobaczy� tutaj:
{TOPICLINK}

Przesta� �ledzi� nowe w�tki na tym forum, klikaj�c tutaj:
{UNSUBSCRIBELINK}

{REGARDS}',

),

'request_membership' => array(

/*
@additional_params: request_membership
RECPNAME: The name of the person recieving the email
APPYNAME: The name of the person applying for group membership
GROUPNAME: The name of the group being applied to.
REASON: The reason given by the applicant for wanting to join the group.
MODLINK: Link to the group moderation page.
@description:
*/

'subject' => 'Nowe zg�oszenie do grupy',

'body' => '{RECPNAME},

{APPYNAME} poprosi� o cz�onkostwo w grupie "{GROUPNAME}". U�ytkownik poda� nast�puj�ce uzasadnienie:

{REASON}

Mo�esz zaakceptowa� lub odrzuci� t� pro�b�, przez klikni�cie w poni�szy link:

{MODLINK}

{REGARDS}',

),

'paid_subscription_reminder' => array(

/*
@additional_params: scheduled_approval
REALNAME: The real (display) name of the person receiving the email.
PROFILE_LINK: Link to profile of member receiving email where can renew.
SUBSCRIPTION: Name of the subscription.
END_DATE: Date it expires.
@description:
*/

'subject' => 'Twoja subskrypcja na {FORUMNAME}, niebawem wyga�nie',

'body' => '{REALNAME},

Subskrypcja, kt�r� zaznaczy�e� na {FORUMNAME}, wkr�tce wyga�nie. Je�li chcesz zrezygnowa� z subskrypcji, po prostu nie r�b nic. Zawsze mo�esz ponownie uruchomi� subskrypcj� p�niej. Szczeg�y poni�ej:

Nazwa Powiadomienia: {SUBSCRIPTION}
Wygasa: {END_DATE}

�eby edytowa� swoje powiadomienia, odwied� adres URL:
{PROFILE_LINK}

{REGARDS}',

),

'activate_reactivate' => array(

/*
@additional_params: activate_reactivate
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONCODE: The code needed to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
@description:
*/

'subject' => 'Witamy ponownie na {FORUMNAME}',

'body' => '�eby ponownie zatwierdzi� Tw�j adres email, konto zosta�o zdeaktywowane. Kliknij na poni�szy link, aby ponownie aktywowa� swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'forgot_password' => array(

/*
@additional_params: forgot_password
REALNAME: The real (display) name of the person receiving the reminder.
REMINDLINK: The link to reset the password.
IP: The IP address of the requester.
MEMBERNAME:
@description:
*/

'subject' => 'Nowe has�o dla {FORUMNAME}',

'body' => 'Drogi {REALNAME},
Ten email zosta� wys�any, poniewa� u�y�e� funkcji \'forgot password\'. Aby ustawi� nowe has�o, kliknij w poni�szy link:
{REMINDLINK}

IP: {IP}
U�ytkownik: {MEMBERNAME}

{REGARDS}',

),

'forgot_openid' => array(

/*
@additional_params: forgot_password
REALNAME: The real (display) name of the person receiving the reminder.
IP: The IP address of the requester.
OPENID: The members OpenID identity.
@description:
*/

'subject' => 'OpenID - przypomnienie dla {FORUMNAME}',

'body' => 'Drogi {REALNAME},
Ten email zosta� wys�any, poniewa� u�y�e� funkcji \'forgot OpenID\'. Poni�ej znajdziesz OpenID, z kt�rym powi�zane jest Twoje konto:
{OPENID}

IP: {IP}
U�ytkownik: {MEMBERNAME}

{REGARDS}',

),

'scheduled_approval' => array(

/*
@additional_params: scheduled_approval
REALNAME: The real (display) name of the person receiving the email.
BODY: The generated body of the mail.
@description:
*/

'subject' => 'Zestawienie post�w oczekuj�cych na zatwierdzenie na {FORUMNAME}',

'body' => '{REALNAME},

Ten email zawiera Zestawienie post�w oczekuj�cych na zatwierdzenie na {FORUMNAME}.

{BODY}

Zaloguj si� na forum aby obejrze� te pozycje.
{SCRIPTURL}

{REGARDS}',

),

'send_topic' => array(
/*
@additional_params: send_topic
TOPICSUBJECT: The subject of the topic being sent.
SENDERNAME: The name of the member sending the topic.
RECPNAME: The name of the person receiving the email.
TOPICLINK: A link to the topic being sent.
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chcia�bym aby� sprawdzi� "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrze�, kliknij na link:

{TOPICLINK}

Dzi�ki,

{SENDERNAME}',

),

'send_topic_comment' => array(

/*
@additional_params: send_topic_comment
TOPICSUBJECT: The subject of the topic being sent.
SENDERNAME: The name of the member sending the topic.
RECPNAME: The name of the person receiving the email.
TOPICLINK: A link to the topic being sent.
COMMENT: A comment left by the sender.
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chcia�bym aby� sprawdzi� "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrze�, kliknij na link:

{TOPICLINK}

Odno�nie tego tematu, by� dodany r�wnie� komentarz:
{COMMENT}

Dzi�ki,

{SENDERNAME}',

),
	
'send_email' => array(

/*
@additional_params: send_email
EMAILSUBJECT: The subject the user wants to email.
EMAILBODY: The body the user wants to email.
SENDERNAME: The name of the member sending the email.
RECPNAME: The name of the person receiving the email.
@description:
*/

'subject' => '{EMAILSUBJECT}',

'body' => '{EMAILBODY}',

),

'report_to_moderator' => array(

/*
@additional_params: report_to_moderator
TOPICSUBJECT: The subject of the reported post.
POSTERNAME: The report post's author's name.
REPORTERNAME: The name of the person reporting the post.
TOPICLINK: The url of the post that is being reported.
REPORTLINK: The url of the moderation center report.
COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/

'subject' => 'Wiadomo�� zaraportowana : {TOPICSUBJECT} przez {POSTERNAME}',

'body' => 'Nast�puj�ca wiadomo��, "{TOPICSUBJECT}" napisana przez {POSTERNAME} zosta�a zaraportowana przez {REPORTERNAME} na forum, kt�re moderujesz:

Temat: {TOPICLINK}
Centrum moderacji: {REPORTLINK}

Raportuj�cy zostawi� nast�puj�cy komentarz:
{COMMENT}

{REGARDS}',

),

'change_password' => array(

/*
@additional_params: change_password
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
@description:
*/

'subject' => 'Informacja o Zmianie has�a',

'body' => 'Cze��, {USERNAME}!

Ustawienia Twojego konta na {FORUMNAME} zosta�y zmienione a has�o zosta�o zresetowane. Poni�ej Twoje nowe dane do logowania.

Twoja nazwa u�ytkownika to: "{USERNAME}" a Twoje has�o to: "{PASSWORD}".

Mo�esz zmieni� te dane w swoim profilu, po zalogowaniu na forum. Mo�esz te� u�y� poni�szego linka, po zalogowaniu na forum:
{SCRIPTURL}?action=profile

{REGARDS}',

),

'register_activate' => array(

/*
@additional_params: register_activate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.	
PASSWORD: The password for the member.
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The code needed to reactivate the member's account.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}. Je�li zapomnia�e� has�a, zresetuj je odwiedzaj�c {FORGOTPASSWORDLINK}.

Zanim b�dziesz m�g� si� zalogowa�, najpierw musisz aktywowa� swoje konto. Aby to zrobi�, u�yj poni�szego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'register_openid_activate' => array(

/*
@additional_params: register_activate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
ACTIVATIONLINK: The url link to reactivate the member's account.
ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
ACTIVATIONCODE: The code needed to reactivate the member's account.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}. Wybra�e� identyfikacj� za pomoc� OpenID:
{OPENID}

Zanim b�dziesz m�g� si� zalogowa�, najpierw musisz aktywowa� swoje kontio. Aby to zrobi�, u�yj poni�szego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacj�? Odwied� {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

{REGARDS}',

),

'register_coppa' => array(
/*
@additional_params: register_coppa
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
COPPALINK: The url link to the coppa form.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}. Je�li zapomnia�e� swojego has�a mo�esz je zmieni� odwiedzaj�c {FORGOTPASSWORDLINK}

Zanim b�dziesz m�g� si� zalogowa�, administrator poporosi Twoich rodzic�w/opiekun�w o zgod� na Twoje uczestnictwo w spo�eczno�ci forum. Wi�cej informacji uzyskasz pod tym adresem:

{COPPALINK}

{REGARDS}',

),

'register_openid_coppa' => array(
/*
@additional_params: register_coppa
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
COPPALINK: The url link to the coppa form.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za rejestracj� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}.

Wybra�e� identyfikacj� za pomoc� OpenID:
{OPENID}

Zanim b�dziesz m�g� si� zalogowa�, admin poprosi Twoich rodzic�w/opiekun�w o zgod� na Twoje uczestnictwo w spo�eczno�ci forum. Wi�cej informacji uzyskasz pod tym adresem:

{COPPALINK}

{REGARDS}',

),

'register_immediate' => array(
/*
@additional_params: register_immediate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za zarjestrowanie si� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}. Je�li zapomnia�e� swojego has�a mo�esz je zmieni� w {FORGOTPASSWORDLINK}.

{REGARDS}',

),

'register_openid_immediate' => array(
/*
@additional_params: register_immediate
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Dzi�kujemy za zarejestrowanie si� na {FORUMNAME}. Twoja nazwa u�ytkownika to {USERNAME}.

Wybra�e� identyfikacj� za pomoc� OpenID:
{OPENID}

Po zalogowaniu na forum, mo�esz zaktualizowa� sw�j profil, odwiedzaj�c t� stron�:

{SCRIPTURL}?action=profile

{REGARDS}',

),

'register_pending' => array(

/*
@additional_params: register_pending
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
PASSWORD: The password for the member.
FORGOTPASSWORDLINK: The url to the "forgot password" page.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Twoja pro�ba o rejestracj� na {FORUMNAME} zosta�a otrzymana, {REALNAME}. 

Twoja nazwa u�ytkownika to {USERNAME}. Je�li zapomnia�e� swojego has�a mo�esz je zmieni� w {FORGOTPASSWORDLINK}.

Zanim b�dziesz m�g� si� zalogowa� i korzysta� z forum, Twoja pro�ba musi zosta� rozwa�ona i zatwierdzona. Kiedy to si� stanie, otrzymasz kolejn� wiadomo�� z tego adresu email.

{REGARDS}',

),

'register_openid_pending' => array(

/*
@additional_params: register_pending
REALNAME: The display name for the member receiving the email.
USERNAME: The user name for the member receiving the email.
OPENID: The openID identity for the member.
@description:
*/

'subject' => 'Witamy na {FORUMNAME}',

'body' => 'Twoja pro�ba o rejestracj� na {FORUMNAME} zosta�a otrzymana, {REALNAME}. 

Twoja nazwa u�ytkownika to {USERNAME}.

Wybra�e� identyfikacj� za pomoc� OpenID:
{OPENID}

Zanim b�dziesz m�g� si� zalogowa� i korzysta� z forum, Twoja pro�ba musi zosta� rozwa�ona i zatwierdzona. Kiedy to si� stanie, otrzymasz kolejn� wiadomo�� z tego adresu email.

{REGARDS}',


),

'notification_reply' => array(

/*
@additional_params: notification_reply
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
*/

'subject' => 'Odpowied� na w�tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa� odpowied� na w�tek, kt�ry �ledzisz.

Zobacz j� pod tym adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_reply_body' => array(

/*

@additional_params: notification_reply_body
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
*/

'subject' => 'Odpowied� na w�tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa� odpowied� w w�teku, kt�ry �ledzisz.

Zobacz j� pod tym adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

Tekst odpowiedzi brzmi:
{MESSAGE}

{REGARDS}',

),

'notification_reply_once' => array(

/*
@additional_params: notification_reply_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
@description:
*/

'subject' => 'Odpowied� na w�tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa� odpowied� w w�teku, kt�ry �ledzisz.

Zobacz j� pod tym adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

Wi�cej odpowiedzi mo�e zosta� wys�ane, ale nie otrzymasz nowych powiadomie� emailem, dop�ki nie przeczytasz w�tku.

{REGARDS}',

),

'notification_reply_body_once' => array(

/*
@additional_params: notification_reply_body_once
TOPICSUBJECT:
POSTERNAME:
TOPICLINK:
UNSUBSCRIBELINK:
MESSAGE:
@description:
*/

'subject' => 'Odpowied� na w�tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa� odpowied� w w�teku, kt�ry �ledzisz.

Zobacz j� pod tym adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

Tekst odpowiedzi brzmi:
{MESSAGE}

Wi�cej odpowiedzi mo�e zosta� wys�ane, ale nie otrzymasz nowych powiadomie� emailem, dop�ki nie przeczytasz w�tku.

{REGARDS}',

),

'notification_sticky' => array(

/*
@additional_params: notification_sticky
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� przyklejony',

'body' => 'W�tek kt�ry �ledzisz, zosta� oznaczony jako przyklejony przez {POSTERNAME}.

Obejrzyj w�tek pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_lock' => array(

/*
@additional_params: notification_lock
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� zamkni�ty',

'body' => 'W�tek kt�ry �ledzisz, zosta� zamkni�ty przez {POSTERNAME}.

Obejrzyj w�tek pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_unlock' => array(

/*
@additional_params: notification_unlock
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� otwarty',

'body' => 'W�tek kt�ry �ledzisz, zosta� otwarty przez {POSTERNAME}.

Obejrzyj w�tek pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}
{REGARDS}',

),

'notification_remove' => array(

/*
@additional_params: notification_remove
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� usuni�ty',

'body' => 'W�tek kt�ry �ledzisz, zosta� usuni�ty przez {POSTERNAME}.

{REGARDS}',

),

'notification_move' => array(

/*
@additional_params: notification_move
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� przesuni�ty',

'body' => 'W�tek kt�ry �ledzisz, zosta� przesuni�ty przez {POSTERNAME}.

Obejrzyj w�tek pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_merge' => array(

/*
@additional_params: notification_merged
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT}, zosta� scalony',

'body' => 'W�tek kt�ry �ledzisz, zosta� scalony z innym w�tkiem przez {POSTERNAME}.

Zobacz nowy w�tek pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_split' => array(

/*
@additional_params: notification_split
@description:
*/

'subject' => 'W�tek: {TOPICSUBJECT} zosta� podzielony',

'body' => 'W�tek kt�ry �ledzisz, zosta� podzielony na dwa lub wi�cej w�tk�w, przez {POSTERNAME}.

To co pozosta�o z w�tku, obejrzyj pod adresem: {TOPICLINK}

Przesta� �ledzi� ten w�tek klikaj�c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'admin_notify' => array(

/*
@additional_params: admin_notify
USERNAME:
PROFILELINK:
@description:
*/

'subject' => 'Do��czy� nowy u�ytkownik',

'body' => '{USERNAME} w�a�nie zarejestrowa� si� na Twoim forum. Kliknij w adres poni�ej, aby obejrze� jego profil.
{PROFILELINK}

{REGARDS}',

),

'admin_notify_approval' => array(

/*
@additional_params: admin_notify_approval
USERNAME:
PROFILELINK:
APPROVALLINK:
@description:
*/

'subject' => 'Do��czy� nowy uzytkownik',

'body' => '{USERNAME} w�a�nie zarejestrowa� si� na Twoim forum. Kliknij w adres poni�ej, aby obejrze� jego profil.
{PROFILELINK}

Zanim ten u�ytkownik b�dzie m�g� korzysta� z forum, jego konto musi zosta� zatwierdzone. Kliknij w link poni�ej, aby przej�� ekranu zatwierdzenia konta.
{APPROVALLINK}

{REGARDS}',

),

'admin_attachments_full' => array(

/*
@additional_params: admin_attachments_full
REALNAME:
@description:
*/

'subject' => 'PILNE! Folder za��cznik�w prawie pe�ny!',

'body' => '{REALNAME},

Folder za��cznik�w na {FORUMNAME} jest prawie pe�ny. Odwied� forum aby rozwi�za� ten problem.

Kiedy folder za��cznik�w osiagnie sw�j maksymalny rozmiar, u�ytkownicy nie b�d� mogli dodawa� za��cznik�w do post�w i �adowa� nowych awatar�w (Je�li ta opcja jest aktywna).

{REGARDS}',

),

'paid_subscription_refund' => array(

/*
@additional_params: paid_subscription_refund
NAME: Subscription title.
REALNAME: Recipients name
REFUNDUSER: Username who took out the subscription.
REFUNDNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
*/

'subject' => 'Zwrot p�atnej subskrypcji',

'body' => '{REALNAME},

U�ytkownik otrzyma� zwrot p�atnej subskrypcji. Poni�ej znajdziesz szczeg�y:

Subskrypcja: {NAME}

U�ytkownik: {REFUNDNAME} ({REFUNDUSER})

Data: {DATE}

Mo�esz obejrze� profil tego u�ytkownika przez klikni�cie na link poni�ej:
{PROFILELINK}

{REGARDS}',

),

'paid_subscription_new' => array(

/*
@additional_params: paid_subscription_new
NAME: Subscription title.
REALNAME: Recipients name
SUBEMAIL: Email address of the user who took out the subscription
SUBUSER: Username who took out the subscription.
SUBNAME: User's display name who took out the subscription.
DATE: Today's date.
PROFILELINK: Link to members profile.
@description:
*/

'subject' => 'Nowa p�atna subskrypcja',


'body' => '{REALNAME},

U�ytkownik wybra� now� p�atn� subskrypcj�. Poni�ej znadziesz szczego�y:

Subskrypcja: {NAME}

U�ytkownik: {SUBNAME} ({SUBUSER})

Email u�ytkownika: {SUBEMAIL}

Cena: {PRICE}

Data: {DATE}

Aby obejrze� profil tego u�ytkownika, odwied� adres:
{PROFILELINK}

{REGARDS}',

),

'paid_subscription_error' => array(

/*
@additional_params: paid_subscription_error
ERROR: Error message.
REALNAME: Recipients name
@description:
*/

'subject' => 'Pojawi� si� b��d P�atnej Subskrypcji',

'body' => '{REALNAME},

Nast�puj�cy b��d pojawi� si� podczas tworzenia p�atnej subskrypcji.
---------------------------------------------------------------
{ERROR}

{REGARDS}',

),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => '�yczenia urodzinowe z {FORUMNAME}.',
		'body' => 'Drogi {REALNAME},

Spo�eczno�� {FORUMNAME} pragnie z�o�y� Ci najlepsze �yczenia Urodzinowe! Niech ten dzie� i kolejny rok b�d� pe�ne rado�ci i sukces�w. 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'W dniu Twoich urodzin...',
		'body' => 'Moglismy wys�a� Ci kartk� urodzinow�. Mogli�my wys�a� Ci bukiet kwiat�w lub tort.

Ale tego nie zrobili�my.

Mogli�my nawet wys�a� Ci jedn� z tych automatycznie generowanych wiadomo�ci z �yczeniami urodzinowymi, gdzie nawet nie trzeba umieszcza� Twojego imienia.

Ale tego nie zrobili�my.

Napisali�my te Seredeczne �yczenia Urodzinowe dok�adnie dla Ciebie! 

Chcieliby�my �yczy� Ci naprawd� wyj�tkowych urodzin! 

{REGARDS}

//:: Ta wiadomo�c zosta�a wygenerowana automatycznie :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Wszystkiego Najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, Twoi znajomi na {FORUMNAME} chcieliby zabra� Ci chwil� Twojego czasu i z�o�y� Ci �yczenia Urodzinowe! Je�li nie robi�e� tego ostatnio, odwied� forum, aby inni u�ytkownicy r�wnie� mieli okazj� z�o�y� Ci �yczenia! 

Nawet w dniu Twoich urodzin, {REALNAME}, chcieliby�my aby� pami�ta�, �e Twoje uczestnictwo w naszej spo�eczno�ci, jest najlepsz� rzecz� jaka nas dot�d spotka�a. 

Najlepsze �yczenia,
Za�oga {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => '�yczenia urodzinowe dla {REALNAME}',
		'body' => 'Drogi {REALNAME},

Min�� kolejny rok w Twoim �yciu!  My, na {FORUMNAME} mamy nadziej�, �e by� on przepe�niony szcz�ciem i �yczymy Ci powodzenia na kolejny! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => '{REALNAME}, Wszystkiego najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, czy wiesz, kto dzi� obchodzi urodziny? 

My wiemy... TY! 

Wszystkiego Najlepszego!

Jeste� wszak, o rok starszy, ale �ywimy nadziej�, �e jeste� bardziej szcz�liwy ni� w rok temu! 

{REALNAME}, ciesz si� dzisiejszym dniem!

- Od Twojej rodziny z {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Twoje �yczenia Urodzinowe',
		'body' => 'Czy b�dzie pochmurnie, czy deszczowo, czy jakakolwiek inna aura, �yczymy Ci, aby Twoje urodziny by�y The Best! 
Du�o tort�w urodzinowych, zabawy, aha... i opowiedz nam co wyprawia�e�/a�! 

Mamy nadziej�, �e ta wiadomo�� doda Ci otuchy a� do nast�pnego roku, w tym samym miejscu i czasie! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>