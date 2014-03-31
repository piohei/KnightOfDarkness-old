{strip} {include file="main_top.tpl" tytul="Lista wszystkich zastêpstw"}

<table cellspacing="2" cellpadding="0" border="0" style="width: 100%">
    <tr>
        <td class="header" style="padding: 0px 5px" colspan="4">
        Ilo¶æ zastêpstw ({$zastepstwa_count})
        </td>
    </tr>
	<tr class="row1" style="height: 25px">
		<td style="padding: 0px 5px">Kto</td>
		<td style="padding: 0px 5px">Kogo</td>
		<td style="padding: 0px 5px">Od</td>
		<td style="padding: 0px 5px">Do</td>
	</tr>
	{foreach from=$zastepstwa item="zas"} {if $zas.bedzie_czynne }
	<tr class="row1" style="height: 25px; color: orange">
		{elseif $zas.czynne }
	
	
	<tr class="row1" style="height: 25px; color: green">
		{elseif ! $zas.czynne }
	
	
	<tr class="row1" style="height: 25px; color: red">
		{else}
	
	
	<tr class="row1" style="height: 25px;">
		{/if}
		<td style="padding: 0px 5px">{$zas.kto}</td>
		<td style="padding: 0px 5px">{$zas.kogo}</td>
		<td style="padding: 0px 5px">{$zas.od}</td>
		<td style="padding: 0px 5px">{$zas.do}</td>
	</tr>
	{/foreach}
</table>

{include file="main_bottom.tpl"} {/strip}
