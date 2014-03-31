{include file="main_top.tpl"}
 <form method="post" action="{$www_root}admin.php">
 <table width="100%" cellspacing="1" cellpadding="2">
 	<tr>
 		<td>Temat</td>
 		<td><input type="text" name="subject" /></td>
 	</td>
 	<tr>
 		<td>Tre&#347;&#263;</td>
 		<td><textarea name="msg" row="20" cols="20"></textarea></td>
 	</tr>
 </table>
	 <input type="submit" name="mail_send" value="wy&#347;lij" />
 </form>
{include file="main_bottom.tpl"}