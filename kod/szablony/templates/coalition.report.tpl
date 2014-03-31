{strip}
{include file="main_top.tpl"}

<center>
<table width="100%" cellspacing="1" cellpadding="2">
{if $msg}
<tr>
<td class="header">{$subject}</td>
</tr>
<tr class="row2">
<td>{$msg}</td>
</tr>
{else}
<tr>
	<td class="header">W³a¶ciciel</td>
	<td class="header">Raport</td>
	<td class="header">Data</td>
	<td class="header">Usuñ</td>
</tr>

{foreach from=$reports item=report}
	<tr class="row2">
		<td>{$report.whose}</td>
		<td align="center"><a href="./raporty.php?id={$report.id}">{$report.subject}</a></td>
		<td>{$report.date}</td>
		
		<td>{if $nazwa eq $report.whose || $cesarz}<a href="./raporty.php?id={$report.id}&action=del"><img src="../img/messagebox_ico_delete.gif" alt="del"/></a></td>{/if}</td>
	</tr>
{/foreach}
{/if}
</table>
</center>
{include file="main_bottom.tpl"}
{/strip}
