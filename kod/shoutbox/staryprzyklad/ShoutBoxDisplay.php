<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ShoutBox</title>
	<link rel="stylesheet" href="css/ShoutBox.css" type="text/css" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ShoutBox_ie6.css" />
	<![endif]-->
	
	<script type="text/javascript" src="scripts/advajax.js"></script>
	<script type="text/javascript" src="scripts/ShoutBox.js"></script>
	
</head>
<body>
<?php
require_once('ShoutBox.class.php');
require_once('ShoutBoxDBMysql.class.php');
$ssb = !empty($_SESSION['nick']);
$er = array();
if (!empty($_POST)){
	if (empty($_POST['nick']))
		$er[] = 'Podaj nick';
	if (empty($_POST['pass']))
		$er[] = 'Podaj hasło';
	if (empty($_POST['color']))
		$color = '000000';
	else{
		if (preg_match('/^[0-9a-f]{6}$/i',$_POST['color']))
			$color = $_POST['color'];
		else			
			$er[] = 'Podany kolor jest nieprawidłowy';
	}
	if (empty($er)){
		$nick = htmlspecialchars($_POST['nick'], ENT_QUOTES);
		ShoutBoxDBMysql::MysqlConnect();
		$sql = 'select ID, PASS from ShoutBoxUser where NICK=\''.$nick.'\'';
		$res = mysql_query($sql);
		if (!$res)
			$er[] = 'Błąd bazy danych';
		else{	
			if (mysql_numrows($res) > 0){
				$row = mysql_fetch_array($res);
				$pass = $row['PASS'];
				if ($pass == sha1($_POST['pass'])){
					$ssb = true;
					$_SESSION['nick'] = $nick;
					$_SESSION['id'] = $row['ID'];
					if (file_exists('online.txt'))
						unlink('online.txt');
					mysql_query('update ShoutBoxUser set LAST_ACTIVE_TIME=now()'.(isset($_POST['savecolor']) ? ',COLOR=\''.$color.'\'' :''). ' where ID='.$row['ID']);
					$_SESSION['justlogged'] = true;
				}	
				else
					$er[] = 'Taki login już istnieje, a ty podałeś błędne hasło';	
			} else { //brak takiego loginu to dodajemy do bazy i logujemy
				$sql = "insert into ShoutBoxUser values (null,'$nick', '".sha1($_POST['pass'])."','$color', now())";
				$res = mysql_query($sql);
				if (!$res)
					$er[] = 'Błąd bazy danych';
				else {
					$_SESSION['nick'] = $nick;
					$_SESSION['id'] = mysql_insert_id();
					$_SESSION['justlogged'] = true;
					if (file_exists('online.txt'))
						unlink('online.txt');
					$ssb = true;
				}
			}
		}
	}
}

if (!$ssb){
if (!empty($er)){
	echo '<div style="color:red">';
	foreach ($er as $error)
		echo $error.'<br />';
	echo '</div>';
}
?>
<form method="post">
<table>
<tr>
	<td><label>Nick: </label></td>
	<td><input type="text" name="nick" /></td><td> (jesli jestes nowy - podaj nowy nick, jeśli masz już konto - podaj swój nick)</td>
</tr><tr>	
	<td><label>Hasło: </label></td>
	<td><input type="password" name="pass" /></td><td>(jesli jestes nowy - podaj nowe hasło, jeśli masz już konto - podaj swoje hasło)</td>
</tr><tr>
	<td><label>Kolor: </label></td>
	<td><input type="text" name="color" /></td><td>(podaj kolor, pod jakim chcesz być widziany. Kolor w postaci RRGGBB, np: FF00FF)</td>
</tr><tr>	
	<td colspan="3"><input type="checkbox" name="savecolor" checked="checked" />Zapisać kolor w bazie</td>
</tr>
<tr>	
	<td colspan="3"><input type="submit" value="Start" /></td>
</tr>	
</table>
</form>
<p>Nick "blocked" hasło "abcd" nie będzie mógł pisać.</p>
<?php
} else {
?>
<div id="sb_main">
	<div id="sb_online"><div id="sb_online_title">Użytkownicy on-line:</div><div id="sb_online_users"></div></div>
	<div id="sb_tools"><div id="sb_history" class="sb_history" title="Pobierz wcześniejsze" onclick="sb.getHistory();"></div><div id="sb_scroll_locking" class="sb_unlocked" title="Zablokuj scroll" onclick="ShoutBox.switchScroll();"></div></div>
	<div id="sb_body"></div>
	<form onsubmit="sb.sendMessage();return false;">
	<input type="text" id="sb_message" maxlength="255" />
	<input type="submit" id="sb_submit" value="Wyślij" />
	</form>
</div>

<div id="sb_footer"><div id="sb_wait"></div><a href="http://nospor.pl/shoutbox.html">ShoutBox 1.1</a> &copy; Robert (nospor) Nodzewski</div>
<div id="sb_bbcode"><p><b>Bbcode, emotikony, komendy:</b></p>
Na chwilę obecną w przykładzie dostępne jest bbcode: [b] [u] [i]. <br />
Dostępne emotikony: :) :( :lol: :P <br />
Dostępne komendy: /help, /nick, /me, /color
</div>

<div id="sb_bbcode" ><p><b>Oco biega w pokazanym przykładzie:</b></p>
- Każdy użytkownik może zdefiniować swój własny kolor<br />
- Moderatorem jest użytkownik o nick'u <b>nospor</b> (czyli ja :D)<br />
- Każdy użytkownik może moderować swoje własne wiadomości. Usunięcie wiadomości polega na kliknięciu ikonki usuwania przy wiadomości.
Edycja polega na kliknięciu na wiadomości. Pojawi nam się wówczas pole edycji. Zatwierdzenie edycji następuje po wyjściu z tego pola lub też wciśnięciu Entera. 
</div>

	<script language="javascript">
		var sb = new ShoutBox('sb');
		sb.getMessages();
	</script>
<?php
}
?>	
</body>
</html>