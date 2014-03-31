<html>
<link rel=stylesheet href="/style.css" type="text/css">
<body>
	<center>
	<?PHP
	include "../funkcjeBazy.php";
	otworz_polaczenie();
	$login = czyZalogowany();
	?>
	<TABLE ALIGN="left" BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%">
	<TR ALIGN="right">
		<TH bgcolor='#808080' VALIGN="middle" WIDTH="10%">MENU:</TH>
		<TH bgcolor='#808080' VALIGN="middle" WIDTH="90%"><?PHP print "zalogowany: ".$login."  "; ?><a href= '/wyloguj.php'><FONT SIZE="2" color="blue">[wyloguj]</FONT></a></TH>
	</TR>
	<TR ALIGN="center"  VALIGN="top">
		<TD>
			<br><a href= '/zalogowany.php'><FONT SIZE="3">MAIN</FONT></a>
			<br><a href= '/trening/trenuj.php'><FONT SIZE="3">TRENUJ</FONT></a>
			<br><a href= '/budowa/buduj.php'><FONT SIZE="3">BUDUJ</FONT></a>
			<br><a href= '/kupno_ziemi/kupuj.php'><FONT SIZE="3">KUPUJ</FONT></a>
			<br><a href= '/walka/atakuj.php'><FONT SIZE="3">ATAKUJ</FONT></a>
			<br><a href= '/tura/tura.php'><FONT SIZE="3">TURA</FONT></a>
			<br><a href= '/koalicja/koalicja.php'><FONT SIZE="3">KOALICJA</FONT></a>
			<br><a href= '/targ/targ.php'><FONT SIZE="3">TARG</FONT></a>
			<br><a href= '/wiadomosci/wiadomosci.php'><FONT SIZE="3">WIADOMOSCI</FONT></a>
		</TD>
		<TD>
		<?PHP  	$info=infoDlaTreningu($login);

				trenuj($login,$info["bezrobotni"],$info["zloto"],$info["narzedzia"],$_POST["gornicy_zlota"],$_POST["gornicy_zelaza"],
						$_POST["rolnicy"],$_POST["kowale"],$_POST["budowniczowie"]);

				trenujWojsko($login,$info["bezrobotni"],$info["zloto"],$info["bronie"],$_POST["piechota"],$_POST["lucznicy"],$_POST["husaria"]);

				$info=infoDlaTreningu($login);
				print"<br><p>Bezrobotni:<b>".$info["bezrobotni"]."</b>Bronie:<b>".$info["bronie"]."</b> Narzedzia:<b>".$info["narzedzia"]."</b> Zloto<b>".$info["zloto"]."</b></p>";
				print "<p>Gornikow Z³ota :<b>".$info["gornicy_zlota"]."</b> Gornikow zelaza :<b>
						".$info["gornicy_zelaza"]."</b> Rolnicy:<b>".$info["rolnicy"]."</b> Kowale:<b>
						".$info["kowale"]."</b> Budowniczowie: <b>".$info["budowniczowie"]."</b></p>";
		?>
		<form action="trenuj.php" method="post">
		<table>
			<tr>
				<td allign="right">
					<FONT SIZE="1" COLOR="WHITE">GORNICY Z£OTA:</FONT>
				</td>
				<td>
					<input type="text" name="gornicy_zlota"><br>
				</td>
			</tr>
			<tr>
				<td>
					<FONT SIZE="1" COLOR="WHITE">GORNICY ¯ELAZA:</FONT>
				</td>
				<td>
					<input  type="text" name="gornicy_zelaza"><br>
				</td>
			</tr>
			<tr>
				<td>
					<FONT SIZE="1" COLOR="WHITE">ROLNICY:</FONT>
				</td>
				<td>
					<input  type="text" name="rolnicy"><br>
				</td>
			</tr>
			<tr>
				<td>
					<FONT SIZE="1" COLOR="WHITE">KOWALE:</FONT>
				</td>
				<td>
					<input  type="text" name="kowale"><br>
				</td>
			</tr>
			<tr>
				<td>
					<FONT SIZE="1" COLOR="WHITE">BUDOWNICZOWIE:</FONT>
				</td>
				<td>
					<input  type="text" name="budowniczowie"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Trenuj">
				</td>

			</tr>
		</table>
		</form>
		<?PHP
			print "<p>Piechota:<b>".$info["piechota"]."</b> £ucznicy:<b>".$info["lucznicy"]."</b> Husaria:<b>".$info["husaria"]."</b></p>";
			zamknij_polaczenie();
			?>
			<form action="trenuj.php" method="post">
			<table>
				<tr>
					<td allign="right">
						<FONT SIZE="1" COLOR="WHITE">PIECHOTA:</FONT>
					</td>
					<td>
						<input type="text" name="piechota"><br>
					</td>
				</tr>
				<tr>
					<td>
						<FONT SIZE="1" COLOR="WHITE">£UCZNICY:</FONT>
					</td>
					<td>
						<input  type="text" name="lucznicy"><br>
					</td>
				</tr>
				<tr>
					<td>
						<FONT SIZE="1" COLOR="WHITE">HUSARIA:</FONT>
					</td>
					<td>
						<input  type="text" name="husaria"><br>
					</td>
				</tr>


					<td>
						<input type="submit" value="Trenuj">
					</td>

				</tr>
			</table>
		</form>
	</TD>
	</TR>
	</TABLE>

</body>
</html>
