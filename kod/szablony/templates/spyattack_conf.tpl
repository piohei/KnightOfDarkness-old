{strip}
{include file="main_top.tpl"}

<center>
{if $error!=""}
<font color='red'>{$error}</font>
{else}

<table width="100%" cellspacing="1" cellpadding="2">
<tr class="row1">
  <td class="header" width="50%">
    Atakowane królestwo
  </td>
  <td>
    {$dane.kogo_atakujesz}
  </td>
</tr>
<tr class="row2">
  <td class="header">
    Szpiedzy
  </td>
  <td>
    {$dane.szpiedzy}
  </td>
</tr>

<tr class="row1">
  <td class="header">
    Tryb ataku
  </td>
  <td>
    {$dane.tryb_ataku}
  </td>
</tr>
<tr class="row2">
  <td class="header">
    Koszt ataku
  </td>
  <td>
    {$dane.cena}
  </td>
</tr>
</table>

<table width="100%" cellspacing="1" cellpadding="2">
<tr class="row1">
  <td align="center">
    Szpiedzy powinni dotrzeæ do celu za {$tury} tur.
  </td>
</tr>
</table>
</center>
{/if}

{include file="main_bottom.tpl"}
{/strip}
