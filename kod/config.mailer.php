<?php
define('CONFIG.MAILER', true);
/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
/* Plik konfiguracyjny dla obiektu wysylajacego wiadomosci e-mail przez       *
/* server SMTP 'mail.kod.dmkproject.net' z uzytkownika 'rejestracja'.         *
/* Po wlaczeniu tego pliku mamy dostepny i skonfigurowany obiekt 'mailer'     *
/*                                                                            *
/*                                                                            *
/* Przyklad wykorzystania                                                     *
/* require_once('config_mailer.php');                                         *
/*                                                                            *
/* $mailer->FromName = 'Knight of Darkness';                                  *
/* $mailer->AddAddress('michal_kozak@o2.pl');                                 *
/*                                                                            *
/* $mailer->Subject = 'Rejestracja';                                          *
/* $mailer->Body    = 'Wiadomo¶æ testowa (iso-8859-2)';                       *
/*                                                                            *
/* if(!$mailer->Send()){                                                      *
/*        print('B³±d: ' . $mailer->ErrorInfo );                              *
/*        exit(1);                                                            *
/* }                                                                          *
/*-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

require_once('config.php');
require_once($CFG->katalogBibliotek . 'phpmailer/class.phpmailer.php');

$mailer = new PHPmailer();

//konfiguracja polaczenia z SMTP
//$mailer->IsSMTP();
//$mailer->Host       = 'mail.kod.dmkproject.net';
//$mailer->SMTPAuth   = true;
//$mailer->Username   = 'administracja+kod.dmkproject.net';
//$mailer->Password   = 'uJf!@fVhDlopLL';
//$mailer->CharSet    = 'iso-8859-2';
//$mailer->From       = 'administracja@kod.dmkproject.net';
//$mailer->Sendmail   = '/usr/sbin/sendmail';
$mailer->IsSMTP();
$mailer->Host       = 'localhost';
$mailer->SMTPAuth   = true;
$mailer->Username   = 'bartek';
$mailer->Password   = 'bartek';
$mailer->CharSet    = 'iso-8859-2';
$mailer->From       = 'bartek';
$mailer->Sendmail   = '/usr/sbin/exim';

?>
