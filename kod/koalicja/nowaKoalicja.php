<?PHP

	require_once('../config.php');
	require_once('../funkcjeBazy.php');
	require_once('../mysql.connection.php');
require_once('../lib/class.User.php');
require_once('../messages/class.MessageBox.php');
require_once('../pdoInterface.php');

	otworz_polaczenie();

	$login = czyZalogowany();

	$info=infoOksiestwie($login);







			if ($_POST["nazwa"]!=""){

                            	if (!preg_match("/^[A-Za-z0-9_êó±¶³¿¼æñÊÓ¡¦£¯¬ÆÑ ]{3,20}$/",$_POST["nazwa"])) print "<font color='red'>Niepoprawna nazwa!</font>";

			           else{

			              $zapytanie="select nazwa from KOALICJA where nazwa='".$_POST["nazwa"]."';";

			              $wynik = mysql_query($zapytanie,$polaczenie);

			              if (mysql_num_rows($wynik)!=0) $error="Jest juz koalicja o takiej nazwie!";

			              else{



				       $zapytanie="select koalicja from KSIESTWA where nazwa='".$login."';";

				       $wynik = mysql_query($zapytanie,$polaczenie);

				       $wiersz = mysql_fetch_array($wynik);

				       if ($wiersz["koalicja"]!=NULL) $error="Jestes juz czlonkiem jakiejs koalicji!";

				       else{



				        $zapytanie="insert into KOALICJA values('".$_POST["nazwa"]."','".$login."',1,' ',curdate(),null);";

				        mysql_query($zapytanie,$polaczenie);

				        $zapytanie="select liczba_koalicji from INFO";

				        $wynik = mysql_query($zapytanie,$polaczenie);

				        $wiersz = mysql_fetch_array($wynik);

				        $ile_koalicji = $wiersz["liczba_koalicji"];

				        $zapytanie="update INFO set liczba_koalicji=".($ile_koalicji+1).";";

				        mysql_query($zapytanie,$polaczenie);

				        $zapytanie="update KSIESTWA set koalicja='".$_POST["nazwa"]."' where nazwa='".$login."';";

				        mysql_query($zapytanie,$polaczenie);
					$error = "Za³o¿ono koalicjê <b>".$_POST["nazwa"]."</b>";

			               }

			             }



		                }

		       }



		$smarty->assign('kingdomInfo',$info);

		$smarty->assign('error',$error);

		$smarty->assign('tytul',"Nowa koalicja");

		$smarty->assign('main_panel','nowaKoalicja.tpl');

	// sprawdzenie czy s± nowe wiadomo¶ci
	$kingdom = User::createFromSession();
	$mBox = new MessageBox($kingdom);

	$smarty->assign('new_messages', $mBox->existsUnread());
	$smarty->assign('count_new_messages_standard', $mBox->countUnread(MESSAGE_STANDARD));
	$smarty->assign('count_new_messages_invite', $mBox->countUnread(MESSAGE_INVITE));
	$smarty->assign('count_new_messages_raport', $mBox->countUnread(MESSAGE_RAPORT));
	$smarty->assign('count_new_messages_simple_raport', $mBox->countUnread(MESSAGE_SIMPLE_RAPORT));
	
		$smarty->display('main.tpl');

		zamknij_polaczenie();



?>

