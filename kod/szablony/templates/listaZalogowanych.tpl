{strip} {include file="main_top.tpl" tytul="Lista zalogowanych"}


{if is_null($blad)}

<table border="0" cellspacing="0" cellpadding="1"
	style="width: 100%; margin-top: 1px">
	<tr>
		<td class="header">Login</td>
		<td class="header">Czas ostatniej operacji</td>
		<td class="header">&nbsp;</td>
	</tr>
	{section loop=$zalogowani name="zalogowany" start=0}
	{cycle values="row1,row2" print="false" assign="row"}
	<tr>
		<td class="{$row}">
			<a href="{$root_dir}walka/infoGracza.php?name={$zalogowani[zalogowany].login}">{$zalogowani[zalogowany].login}<a><br>
			{if $zalogowani[zalogowany].koalicja }
            	<span style="font-size: 10px">koalicja: <a href="{$root_dir}koalicja/coalition.desc.php?coal={$zalogowani[zalogowany].koalicja}" style="color: #949492">{$zalogowani[zalogowany].koalicja}</a></span>
			{else}
				<span style="font-size: 10px">koalicja: Brak</span>
			{/if}
		</td>
		<td class="{$row}" align="center">{$zalogowani[zalogowany].ostatni_log}</td>
		<td class="{$row}" class="header">&nbsp;</td>
	</tr>
	{/section}
</table>
{else}
<b>{$blad}<b>		
{/if}

{include file="main_bottom.tpl"} {/strip}
