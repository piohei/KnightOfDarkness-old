{strip}
{include file="main_top.tpl"}

<center>
<table width="100%" cellspacing="1" cellpadding="2">
<tr>
	<td class="header">Budynek</td>
	<td class="header">Wykorzystne</td>
	<td class="header">Ca³kowite</td>
</tr>
<tr> 
	<td class="row1">Wie¿yczki</td>
	<td class="row1">{$tower.used}</td>
	<td class="row1">{$tower.all}</td>
</tr>
<tr>
	<td class="row2">Zamki(piechota)</td>
	<td class="row2">{$castle.infantry_used}</td>
	<td class="row2">{$castle.infantry_all}</td>
</tr>
<tr>
	<td class="row1">Zamki(³ucznicy)</td>
	<td class="row1">{$castle.archers_used}</td>
	<td class="row1">{$castle.archers_all}</td>
</tr>

</table>

<table width="100%" cellspacing="1" cellpadding="2">
<tr>
	<td class="header">Bonus</td>
	<td class="header">Warto¶æ</td>
</tr>
<tr>
	<td class="row1">Atak armii</td>
	<td class="row1">{$bonus.aa} %</td>
</tr>
<tr>
	<td class="row1">Obrona armii</td>
	<td class="row1">{$bonus.ad} %</td>
</tr>
<tr>
	<td class="row1">Atak zamku</td>
	<td class="row1">{$bonus.da} %</td>
</tr>
<tr>
	<td class="row1">Obrona zamku</td>
	<td class="row1">{$bonus.dd} %</td>
</tr>

</table>

</center>
{include file="main_bottom.tpl"}
{/strip}
