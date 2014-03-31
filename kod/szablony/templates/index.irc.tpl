<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%; background: url({$image_dir}index.sword.jpg) no-repeat left top">
<tr><td>
{if $login}
<applet code=IRCApplet.class archive="irc.jar,pixx.jar" width=750 height=500>
<param name="CABINETS" value="irc.cab,securedirc.cab,pixx.cab">

<param name="nick" value="{$login}">
<param name="alternatenick" value="Anon???">
<param name="name" value="Java User">
<param name="host" value="irc.ircnet.pl">
<param name="gui" value="pixx">


<param name="command1" value="join #kodowcy">

</applet>
{else}
<table valign="middle" align="center">
	<form action="" method="POST">
		<tr><td>Nick:</td><td><input name="login" class="textField_1"  type="text" style="width: 130px"></td></tr> 
		<tr><td colspan="2"><input type="submit" class="decoratedButton_1" value="Po³±cz"></td></tr> 
		<tr><td colspan="2"><br>Serwer: irc.ircnet.pl <br>Pokój: #kodowcy</td></tr> 
	</form>
</table>
{/if}
</td></tr>
</table>