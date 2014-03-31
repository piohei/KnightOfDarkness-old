<?php
// Version: 2.0 RC3; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Nastêpuj±ce tematy oczekuj± na zatwierdzenie:';
$txt['scheduled_approval_email_msg'] = 'Nastêpuj±ce wiadomo¶ci oczekuj± na zatwierdzenie:';
$txt['scheduled_approval_email_attach'] = 'Nastêpuj±ce za³±czniki oczekuj± na zatwierdzenie:';
$txt['scheduled_approval_email_event'] = 'Nastêpuj±ce wydarzenia oczekuj± na zatwierdzenie:';

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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to "{USERNAME}". Je¶li zapomnia³e¶ swojego has³a mo¿esz je zresetowaæ za pomoc± {FORGOTPASSWORDLINK}

Zanim bêdziesz móg³ siê zalogowaæ, musisz najpierw aktywowaæ swoje konto. Aby to zrobiæ, kliknij w poni¿szy link:

{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

'body' => '{REALNAME}, otrzymali¶my Twoj± pro¶bê o rejestracjê na {FORUMNAME}.

Nazwa u¿ytkownika, pod któr± siê zarejestrowa³e¶, to {USERNAME}.

Zanim bêdziesz móg³ siê zalogowaæ i u¿ywaæ forum, Twoja pro¶ba o rejestracjê musi zostaæ zatwierdzona. Kiedy to nast±pi, otrzymasz kolejnego maila z tego adresu.

{REGARDS}',

),

'mc_group_approve' => array(

/*
@additional_params: mc_group_approve
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was accepted into.
@description: The request to join a particular membergroup has been accepted.
*/

'subject' => 'Zosta³e¶ dodany do grupy',

'body' => '{USERNAME},

Pragniemy poinformowaæ, ¿e Twoja pro¶ba o do³±czenie do grupy "{GROUPNAME}" na {FORUMNAME} zosta³a przyjêta. Twoje konto zosta³o zaktualizowane i uwzglêdnia teraz cz³onkostwo w tej grupie.

{REGARDS}',

),

'mc_group_reject' => array(

/*
@additional_params: mc_group_reject
USERNAME: The user name for the member receiving the email.
GROUPNAME: The name of the membergroup that the user was rejected from.
@description: The request to join a particular membergroup has been rejected.
*/

'subject' => 'Cz³onkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykro¶ci± informujemy, ¿e Twoja pro¶ba o do³±czenie do "{GROUPNAME}" na {FORUMNAME} zosta³a odrzucona.

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

'subject' => 'Cz³onkostwo w grupie odrzucone',

'body' => '{USERNAME},

Z przykro¶ci± informujemy, ¿e Twoja pro¶ba o do³±czenie do "{GROUPNAME}" na {FORUMNAME} zosta³a odrzucona.

Powód odrzucenia Twojej pro¶by: {REASON}

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

Twoje konto zosta³o aktywowane rêcznie przez Admina. Teraz mo¿esz siê zalogowaæ i korzystaæ z forum. Twoja nazwa u¿ytkownika to: {USERNAME}

Je¶li zapomnia³e¶ swojego has³a mo¿esz je zmieniæ klikaj±c w:
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

Twoje konto na {FORUMNAME} zosta³o zatwierdzone przez administratora i musi zostaæ aktywowane, zanim bêdziesz móg³ korzystaæ z forum. Proszê, u¿yj poni¿szego linku, aby aktywowaæ swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

Przykro nam, ale Twoja pro¶ba o rejestracjê na {FORUMNAME} zosta³a odrzucona.

{REGARDS}',

),

'admin_approve_delete' => array(

/*
@additional_params: admin_approve_delete
USERNAME: The user name for the member receiving the email.
@description:
*/

'subject' => 'Konto zosta³o usuniête',

'body' => '{USERNAME},

Twoje konto na {FORUMNAME} zosta³o usuniête. Prawdopodbna przyczyna: Nie aktywowa³e¶ swojego konta po rejstracji. Je¶li chcesz korzystaæ z forum, musisz powtórzyæ proces rejestracji.

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
Nie dokona³e¶ aktywacji swojego konta na {FORUMNAME}.

Aby aktywowaæ konto i korzystaæ z forum, kliknij poni¿szy link:
{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME} oraz has³o {PASSWORD}.

Przed zalogowaniem musisz aktywowaæ swoje konto klikaj±c w poni¿szy link:

{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

Aby zrezygnowaæ z powiadomieñ, zaloguj siê na forum i odznacz "Otrzymuj powiadomienia i wa¿ne informacje przez email" w swoim profilu.

Aby zobaczyæ tre¶æ powiadomienia kliknij na poni¿szy link:
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

'subject' => 'Nowy W±tek: {TOPICSUBJECT}',

'body' => 'Nowy w±tek, \'{TOPICSUBJECT}\', powsta³ na forum, które obserwujesz.

Mo¿esz go zobaczyæ tutaj:
{TOPICLINK}

Wiêcej odpowiedzi mo¿e zostaæ wys³ane, ale nie otrzymasz nowych powiadomieñ emailem, dopóki nie przeczytasz w±tku.

Tre¶æ w±tku:
{MESSAGE}

Przestañ ¶ledziæ nowe w±tki na tym forum, klikaj±c tutaj:
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

'subject' => 'Nowy W±tek: {TOPICSUBJECT}',

'body' => 'Nowy w±tek, \'{TOPICSUBJECT}\', powsta³ na forum, które obserwujesz.

Mo¿esz go zobaczyæ tutaj:
{TOPICLINK}

Wiêcej odpowiedzi mo¿e zostaæ wys³ane, ale nie otrzymasz nowych powiadomieñ emailem, dopóki nie przeczytasz w±tku.

Przestañ ¶ledziæ nowe w±tki na tym forum, klikaj±c tutaj:
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

'subject' => 'Nowy W±tek: {TOPICSUBJECT}',

'body' => 'Nowy w±tek, \'{TOPICSUBJECT}\', powsta³ na forum, które obserwujesz.

Mo¿esz go zobaczyæ tutaj:
{TOPICLINK}

Tre¶æ w±tku:
{MESSAGE}

Przestañ ¶ledziæ nowe w±tki na tym forum, klikaj±c tutaj:
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

'subject' => 'Nowy W±tek: {TOPICSUBJECT}',

'body' => 'Nowy w±tek, \'{TOPICSUBJECT}\', powsta³ na forum, które obserwujesz.
Mo¿esz go zobaczyæ tutaj:
{TOPICLINK}

Przestañ ¶ledziæ nowe w±tki na tym forum, klikaj±c tutaj:
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

'subject' => 'Nowe zg³oszenie do grupy',

'body' => '{RECPNAME},

{APPYNAME} poprosi³ o cz³onkostwo w grupie "{GROUPNAME}". U¿ytkownik poda³ nastêpuj±ce uzasadnienie:

{REASON}

Mo¿esz zaakceptowaæ lub odrzuciæ tê pro¶bê, przez klikniêcie w poni¿szy link:

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

'subject' => 'Twoja subskrypcja na {FORUMNAME}, niebawem wyga¶nie',

'body' => '{REALNAME},

Subskrypcja, któr± zaznaczy³e¶ na {FORUMNAME}, wkrótce wyga¶nie. Je¶li chcesz zrezygnowaæ z subskrypcji, po prostu nie rób nic. Zawsze mo¿esz ponownie uruchomiæ subskrypcjê pó¼niej. Szczegó³y poni¿ej:

Nazwa Powiadomienia: {SUBSCRIPTION}
Wygasa: {END_DATE}

¯eby edytowaæ swoje powiadomienia, odwied¼ adres URL:
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

'body' => '¯eby ponownie zatwierdziæ Twój adres email, konto zosta³o zdeaktywowane. Kliknij na poni¿szy link, aby ponownie aktywowaæ swoje konto:
{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

'subject' => 'Nowe has³o dla {FORUMNAME}',

'body' => 'Drogi {REALNAME},
Ten email zosta³ wys³any, poniewa¿ u¿y³e¶ funkcji \'forgot password\'. Aby ustawiæ nowe has³o, kliknij w poni¿szy link:
{REMINDLINK}

IP: {IP}
U¿ytkownik: {MEMBERNAME}

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
Ten email zosta³ wys³any, poniewa¿ u¿y³e¶ funkcji \'forgot OpenID\'. Poni¿ej znajdziesz OpenID, z którym powi±zane jest Twoje konto:
{OPENID}

IP: {IP}
U¿ytkownik: {MEMBERNAME}

{REGARDS}',

),

'scheduled_approval' => array(

/*
@additional_params: scheduled_approval
REALNAME: The real (display) name of the person receiving the email.
BODY: The generated body of the mail.
@description:
*/

'subject' => 'Zestawienie postów oczekuj±cych na zatwierdzenie na {FORUMNAME}',

'body' => '{REALNAME},

Ten email zawiera Zestawienie postów oczekuj±cych na zatwierdzenie na {FORUMNAME}.

{BODY}

Zaloguj siê na forum aby obejrzeæ te pozycje.
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

'subject' => 'W±tek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chcia³bym aby¶ sprawdzi³ "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrzeæ, kliknij na link:

{TOPICLINK}

Dziêki,

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

'subject' => 'W±tek: {TOPICSUBJECT} (Od: {SENDERNAME})',

'body' => 'Drogi {RECPNAME},
Chcia³bym aby¶ sprawdzi³ "{TOPICSUBJECT}" na {FORUMNAME}. Aby go obejrzeæ, kliknij na link:

{TOPICLINK}

Odno¶nie tego tematu, by³ dodany równie¿ komentarz:
{COMMENT}

Dziêki,

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

'subject' => 'Wiadomo¶æ zaraportowana : {TOPICSUBJECT} przez {POSTERNAME}',

'body' => 'Nastêpuj±ca wiadomo¶æ, "{TOPICSUBJECT}" napisana przez {POSTERNAME} zosta³a zaraportowana przez {REPORTERNAME} na forum, które moderujesz:

Temat: {TOPICLINK}
Centrum moderacji: {REPORTLINK}

Raportuj±cy zostawi³ nastêpuj±cy komentarz:
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

'subject' => 'Informacja o Zmianie has³a',

'body' => 'Cze¶æ, {USERNAME}!

Ustawienia Twojego konta na {FORUMNAME} zosta³y zmienione a has³o zosta³o zresetowane. Poni¿ej Twoje nowe dane do logowania.

Twoja nazwa u¿ytkownika to: "{USERNAME}" a Twoje has³o to: "{PASSWORD}".

Mo¿esz zmieniæ te dane w swoim profilu, po zalogowaniu na forum. Mo¿esz te¿ u¿yæ poni¿szego linka, po zalogowaniu na forum:
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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}. Je¶li zapomnia³e¶ has³a, zresetuj je odwiedzaj±c {FORGOTPASSWORDLINK}.

Zanim bêdziesz móg³ siê zalogowaæ, najpierw musisz aktywowaæ swoje konto. Aby to zrobiæ, u¿yj poni¿szego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}. Wybra³e¶ identyfikacjê za pomoc± OpenID:
{OPENID}

Zanim bêdziesz móg³ siê zalogowaæ, najpierw musisz aktywowaæ swoje kontio. Aby to zrobiæ, u¿yj poni¿szego linku:

{ACTIVATIONLINK}

Masz problemy z aktywacj±? Odwied¼ {ACTIVATIONLINKWITHOUTCODE} i wpisz kod aktywacyjny "{ACTIVATIONCODE}".

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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}. Je¶li zapomnia³e¶ swojego has³a mo¿esz je zmieniæ odwiedzaj±c {FORGOTPASSWORDLINK}

Zanim bêdziesz móg³ siê zalogowaæ, administrator poporosi Twoich rodziców/opiekunów o zgodê na Twoje uczestnictwo w spo³eczno¶ci forum. Wiêcej informacji uzyskasz pod tym adresem:

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

'body' => 'Dziêkujemy za rejestracjê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}.

Wybra³e¶ identyfikacjê za pomoc± OpenID:
{OPENID}

Zanim bêdziesz móg³ siê zalogowaæ, admin poprosi Twoich rodziców/opiekunów o zgodê na Twoje uczestnictwo w spo³eczno¶ci forum. Wiêcej informacji uzyskasz pod tym adresem:

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

'body' => 'Dziêkujemy za zarjestrowanie siê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}. Je¶li zapomnia³e¶ swojego has³a mo¿esz je zmieniæ w {FORGOTPASSWORDLINK}.

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

'body' => 'Dziêkujemy za zarejestrowanie siê na {FORUMNAME}. Twoja nazwa u¿ytkownika to {USERNAME}.

Wybra³e¶ identyfikacjê za pomoc± OpenID:
{OPENID}

Po zalogowaniu na forum, mo¿esz zaktualizowaæ swój profil, odwiedzaj±c tê stronê:

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

'body' => 'Twoja pro¶ba o rejestracjê na {FORUMNAME} zosta³a otrzymana, {REALNAME}. 

Twoja nazwa u¿ytkownika to {USERNAME}. Je¶li zapomnia³e¶ swojego has³a mo¿esz je zmieniæ w {FORGOTPASSWORDLINK}.

Zanim bêdziesz móg³ siê zalogowaæ i korzystaæ z forum, Twoja pro¶ba musi zostaæ rozwa¿ona i zatwierdzona. Kiedy to siê stanie, otrzymasz kolejn± wiadomo¶æ z tego adresu email.

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

'body' => 'Twoja pro¶ba o rejestracjê na {FORUMNAME} zosta³a otrzymana, {REALNAME}. 

Twoja nazwa u¿ytkownika to {USERNAME}.

Wybra³e¶ identyfikacjê za pomoc± OpenID:
{OPENID}

Zanim bêdziesz móg³ siê zalogowaæ i korzystaæ z forum, Twoja pro¶ba musi zostaæ rozwa¿ona i zatwierdzona. Kiedy to siê stanie, otrzymasz kolejn± wiadomo¶æ z tego adresu email.

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

'subject' => 'Odpowied¼ na w±tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa³ odpowied¼ na w±tek, który ¶ledzisz.

Zobacz j± pod tym adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

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

'subject' => 'Odpowied¼ na w±tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa³ odpowied¼ w w±teku, który ¶ledzisz.

Zobacz j± pod tym adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

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

'subject' => 'Odpowied¼ na w±tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa³ odpowied¼ w w±teku, który ¶ledzisz.

Zobacz j± pod tym adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

Wiêcej odpowiedzi mo¿e zostaæ wys³ane, ale nie otrzymasz nowych powiadomieñ emailem, dopóki nie przeczytasz w±tku.

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

'subject' => 'Odpowied¼ na w±tek: {TOPICSUBJECT}',

'body' => '{POSTERNAME} napisa³ odpowied¼ w w±teku, który ¶ledzisz.

Zobacz j± pod tym adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

Tekst odpowiedzi brzmi:
{MESSAGE}

Wiêcej odpowiedzi mo¿e zostaæ wys³ane, ale nie otrzymasz nowych powiadomieñ emailem, dopóki nie przeczytasz w±tku.

{REGARDS}',

),

'notification_sticky' => array(

/*
@additional_params: notification_sticky
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ przyklejony',

'body' => 'W±tek który ¶ledzisz, zosta³ oznaczony jako przyklejony przez {POSTERNAME}.

Obejrzyj w±tek pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_lock' => array(

/*
@additional_params: notification_lock
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ zamkniêty',

'body' => 'W±tek który ¶ledzisz, zosta³ zamkniêty przez {POSTERNAME}.

Obejrzyj w±tek pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_unlock' => array(

/*
@additional_params: notification_unlock
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ otwarty',

'body' => 'W±tek który ¶ledzisz, zosta³ otwarty przez {POSTERNAME}.

Obejrzyj w±tek pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}
{REGARDS}',

),

'notification_remove' => array(

/*
@additional_params: notification_remove
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ usuniêty',

'body' => 'W±tek który ¶ledzisz, zosta³ usuniêty przez {POSTERNAME}.

{REGARDS}',

),

'notification_move' => array(

/*
@additional_params: notification_move
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ przesuniêty',

'body' => 'W±tek który ¶ledzisz, zosta³ przesuniêty przez {POSTERNAME}.

Obejrzyj w±tek pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_merge' => array(

/*
@additional_params: notification_merged
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT}, zosta³ scalony',

'body' => 'W±tek który ¶ledzisz, zosta³ scalony z innym w±tkiem przez {POSTERNAME}.

Zobacz nowy w±tek pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'notification_split' => array(

/*
@additional_params: notification_split
@description:
*/

'subject' => 'W±tek: {TOPICSUBJECT} zosta³ podzielony',

'body' => 'W±tek który ¶ledzisz, zosta³ podzielony na dwa lub wiêcej w±tków, przez {POSTERNAME}.

To co pozosta³o z w±tku, obejrzyj pod adresem: {TOPICLINK}

Przestañ ¶ledziæ ten w±tek klikaj±c tutaj: {UNSUBSCRIBELINK}

{REGARDS}',

),

'admin_notify' => array(

/*
@additional_params: admin_notify
USERNAME:
PROFILELINK:
@description:
*/

'subject' => 'Do³±czy³ nowy u¿ytkownik',

'body' => '{USERNAME} w³a¶nie zarejestrowa³ siê na Twoim forum. Kliknij w adres poni¿ej, aby obejrzeæ jego profil.
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

'subject' => 'Do³±czy³ nowy uzytkownik',

'body' => '{USERNAME} w³a¶nie zarejestrowa³ siê na Twoim forum. Kliknij w adres poni¿ej, aby obejrzeæ jego profil.
{PROFILELINK}

Zanim ten u¿ytkownik bêdzie móg³ korzystaæ z forum, jego konto musi zostaæ zatwierdzone. Kliknij w link poni¿ej, aby przej¶æ ekranu zatwierdzenia konta.
{APPROVALLINK}

{REGARDS}',

),

'admin_attachments_full' => array(

/*
@additional_params: admin_attachments_full
REALNAME:
@description:
*/

'subject' => 'PILNE! Folder za³±czników prawie pe³ny!',

'body' => '{REALNAME},

Folder za³±czników na {FORUMNAME} jest prawie pe³ny. Odwied¼ forum aby rozwi±zaæ ten problem.

Kiedy folder za³±czników osiagnie swój maksymalny rozmiar, u¿ytkownicy nie bêd± mogli dodawaæ za³±czników do postów i ³adowaæ nowych awatarów (Je¶li ta opcja jest aktywna).

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

'subject' => 'Zwrot p³atnej subskrypcji',

'body' => '{REALNAME},

U¿ytkownik otrzyma³ zwrot p³atnej subskrypcji. Poni¿ej znajdziesz szczegó³y:

Subskrypcja: {NAME}

U¿ytkownik: {REFUNDNAME} ({REFUNDUSER})

Data: {DATE}

Mo¿esz obejrzeæ profil tego u¿ytkownika przez klikniêcie na link poni¿ej:
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

'subject' => 'Nowa p³atna subskrypcja',


'body' => '{REALNAME},

U¿ytkownik wybra³ now± p³atn± subskrypcjê. Poni¿ej znadziesz szczego³y:

Subskrypcja: {NAME}

U¿ytkownik: {SUBNAME} ({SUBUSER})

Email u¿ytkownika: {SUBEMAIL}

Cena: {PRICE}

Data: {DATE}

Aby obejrzeæ profil tego u¿ytkownika, odwied¼ adres:
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

'subject' => 'Pojawi³ siê b³±d P³atnej Subskrypcji',

'body' => '{REALNAME},

Nastêpuj±cy b³±d pojawi³ siê podczas tworzenia p³atnej subskrypcji.
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
		'subject' => '¯yczenia urodzinowe z {FORUMNAME}.',
		'body' => 'Drogi {REALNAME},

Spo³eczno¶æ {FORUMNAME} pragnie z³o¿yæ Ci najlepsze ¯yczenia Urodzinowe! Niech ten dzieñ i kolejny rok bêd± pe³ne rado¶ci i sukcesów. 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'W dniu Twoich urodzin...',
		'body' => 'Moglismy wys³aæ Ci kartkê urodzinow±. Mogli¶my wys³aæ Ci bukiet kwiatów lub tort.

Ale tego nie zrobili¶my.

Mogli¶my nawet wys³aæ Ci jedn± z tych automatycznie generowanych wiadomo¶ci z ¿yczeniami urodzinowymi, gdzie nawet nie trzeba umieszczaæ Twojego imienia.

Ale tego nie zrobili¶my.

Napisali¶my te Seredeczne ¯yczenia Urodzinowe dok³adnie dla Ciebie! 

Chcieliby¶my ¿yczyæ Ci naprawdê wyj±tkowych urodzin! 

{REGARDS}

//:: Ta wiadomo¶c zosta³a wygenerowana automatycznie :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'Wszystkiego Najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, Twoi znajomi na {FORUMNAME} chcieliby zabraæ Ci chwilê Twojego czasu i z³o¿yæ Ci ¯yczenia Urodzinowe! Je¶li nie robi³e¶ tego ostatnio, odwied¼ forum, aby inni u¿ytkownicy równie¿ mieli okazjê z³o¿yæ Ci ¯yczenia! 

Nawet w dniu Twoich urodzin, {REALNAME}, chcieliby¶my aby¶ pamiêta³, ¿e Twoje uczestnictwo w naszej spo³eczno¶ci, jest najlepsz± rzecz± jaka nas dot±d spotka³a. 

Najlepsze ¯yczenia,
Za³oga {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => '¯yczenia urodzinowe dla {REALNAME}',
		'body' => 'Drogi {REALNAME},

Min±³ kolejny rok w Twoim ¿yciu!  My, na {FORUMNAME} mamy nadziejê, ¿e by³ on przepe³niony szczê¶ciem i ¿yczymy Ci powodzenia na kolejny! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => '{REALNAME}, Wszystkiego najlepszego z okazji urodzin!',
		'body' => '{REALNAME}, czy wiesz, kto dzi¶ obchodzi urodziny? 

My wiemy... TY! 

Wszystkiego Najlepszego!

Jeste¶ wszak, o rok starszy, ale ¿ywimy nadziejê, ¿e jeste¶ bardziej szczê¶liwy ni¿ w rok temu! 

{REALNAME}, ciesz siê dzisiejszym dniem!

- Od Twojej rodziny z {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Twoje ¯yczenia Urodzinowe',
		'body' => 'Czy bêdzie pochmurnie, czy deszczowo, czy jakakolwiek inna aura, ¿yczymy Ci, aby Twoje urodziny by³y The Best! 
Du¿o tortów urodzinowych, zabawy, aha... i opowiedz nam co wyprawia³e¶/a¶! 

Mamy nadziejê, ¿e ta wiadomo¶æ doda Ci otuchy a¿ do nastêpnego roku, w tym samym miejscu i czasie! 

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>