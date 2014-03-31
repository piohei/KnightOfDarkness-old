<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr class="Header">
<td>Lista zadañ</td>
</tr>
<tr>
<td>
<div style="color : silver; font-size : 8pt; float : right; ">
<br/>Legenda :<br/>
[D] - zadanie ukoñczone <br/>
[P] - zadanie w trakcie <br/>
</div>
<table style="padding: 10px 20px; width : 600px;">
<tr class="Header">
<td>Od kogo</td><td>Dla kogo</td><td>data</td><td>Status</td><td>Opis</td>
</tr>
{foreach from=$list item=event}
<tr>
<td>{$event.kto}</td>
<td>{$event.kogo}</td>
<td width="100px">{$event.data}</td>
<td width="100px" align="center">
{if $login eq $event.kogo && !($event.status eq "done")}
<form action="index.php?mode={$smarty.const.MODE_TO_DO}" method="POST" style="margin: 0; padding: 0">
<input type="hidden" name="co" value={$event.id} />
<input type="submit" name="status" value="D" />
<input type="submit" name="status" value="P" />
</form>
{/if}
<font color="{$event.color}">{$event.status}</font>
</td>
<td>{$event.txt}</td>
</tr>
{/foreach}
</table>


</td>
</tr>
<tr>
	<td>
		<table style="padding: 10px 20px; width : 600px;">
			<tr class="Header"><td>Dodaj zadanie</td></tr>
			<tr>
				<td>
				<form action="index.php?mode={$smarty.const.MODE_TO_DO}" method="POST" style="margin: 0; padding: 0">
				<center>
					Dla kogo : <br/><input type="text" name="komu" /><br/><br/>
					zadanie : <br/>
					<textarea name="txt" cols="64" rows="4"></textarea><br/><br/>
					<input type="submit" name="add" value="dodaj" />
					</center>
				</form>	
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>