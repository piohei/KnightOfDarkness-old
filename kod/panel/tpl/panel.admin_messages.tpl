{strip} {$postmess}
<br>
{$a}
<form action="index.php?mode={$smarty.const.MODE_ADMIN_MESSAGES}"
	method="POST"><input type="hidden" name=""value""></input>
<table>
	<tr>
		<td colspan="2">Nowa wiadomo¶æ administracyjna (uwaga mo¿na stosowaæ dowolne tagi
		html):</td>
	</tr>
	<tr>
		<td>Nazwa dodaj±cego (mo¿e byæ pusta):</td>
		<td align="left"><input maxlength="20" type="text" name="login" value="{$login}"></td>
	</tr>
	<tr>
		<td colspan="2"><textarea rows="10" cols="60" name="admin_message">{$admin_messages[0].wiadomosc}</textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="add_new_admin_message"
			value="Dodaj now± wiadomo¶æ"></input></td>
	</tr>
</table>
Aktualne wiadomo¶ci:
<table>
	<tr>
		<td>Id</td>
		<td>Kto</td>
		<td>Kiedy</td>
		<td>Text</td>
	</tr>
	{section loop=$admin_messages name="m" start=0} {cycle
	values="row1,row2" print="false" assign="row"}
	<tr>
		<td class="{$row}">{$admin_messages[m].id_wiadomosci_administracyjne}</td>
		<td class="{$row}">{$admin_messages[m].login}</td>
		<td class="{$row}">{$admin_messages[m].date}</td>
		<td class="{$row}"><textarea readonly="readonly" rows="5" cols="60">{$admin_messages[m].wiadomosc}</textarea></td>
	</tr>
	{/section}
</table>

</form>
{/strip}
