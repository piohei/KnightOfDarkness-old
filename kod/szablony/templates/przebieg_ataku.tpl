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
    Piechota
  </td>
  <td>
    {$dane.piechota}
  </td>
</tr>
<tr class="row1">
  <td class="header">
    £ucznicy
  </td>
  <td>
    {$dane.lucznicy}
  </td>
</tr>
<tr class="row2">
  <td class="header">
    Husaria
  </td>
  <td>
    {$dane.husaria}
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
    Wojsko dojdzie do zamku za 6 tur.
  </td>
</tr>
</table>
</center>
{/if}

{include file="main_bottom.tpl"}
{/strip}
