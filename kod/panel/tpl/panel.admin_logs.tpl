{strip}
<table width="100%">

	<tr class="Header">
		<td>Logi operacji wykonywanych przez adminów</td>
	</tr>
</table>
<table>

	<tr>
		<td>
		<table celpadding="0" cellspacing="1" border="0" class="WindowFrame"
			style="width: 100%">
			<tr class="Header">
				<td>Kto</td>
				<td>Kiedy</td>
				<td>Typ</td>
				<td>Co</td>
			</tr>
			{foreach from=$admin_logs key=key item=log}
			<tr>
				<td>{$log.login}&nbsp;&nbsp;&nbsp;</td>
				<td>{$log.date}&nbsp;&nbsp;</td>
				<td>{$log.type}&nbsp;&nbsp;</td>
				<td>{$log.message}</td>
			</tr>
			{/foreach}
		</table>
		</td>
	</tr>
</table>

{/strip}
