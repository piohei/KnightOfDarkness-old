{strip}
{include file="main_top.tpl"}

<center>
{if $error!=""}
<font color='red'>{$error}</font>
{else}
<form action='../walka/przebieg_ataku.php' method='post'>
<table width="100%" cellspacing="1" cellpadding="2">
  <tr class="row1">
    <td class="header">
      Atakowane królestwo
    </td>
    <td>
      <input class='textfield' name='kogo_atakujesz' value='{$dane.kogo_atakujesz}' readonly>
    </td>
  </tr>
  <tr class="row2">
    <td class="header">
      Piechota
    </td>
    <td>
      <input class='textfield' name='ile_piechoty' value='{$dane.piechota}'  readonly>
    </td>
  </tr>
   <tr class="row1">
    <td class="header">
      £ucznicy
    </td>
    <td>
      <input class='textfield' name='ile_lucznikow' value='{$dane.lucznicy}'  readonly>
    </td>
  </tr>
  <tr class="row2">
    <td class="header">
      Husaria
    </td>
    <td>
      <input class='textfield' name='ile_husarow' value='{$dane.husaria}'  readonly>
    </td>
  </tr>
  <tr class="row1">
    <td class="header">
      Tryb ataku
    </td>
    <td>
      <input class='textfield' name='tryb_ataku' value='{$dane.tryb_ataku}' readonly>
    </td>
  </tr>
  <tr class="row2">
    <td class="header">
      Cena ataku
    </td>
    <td>
      <input class='textfield' name='cena' value='{$dane.cena}' readonly>
    </td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="2">
<tr class="row1" align='center'><td><input class='button' type='submit' value='Atakuj'></td>
</form>
<td><button class='button' onClick="window.location.href = '../walka/atakuj.php'">Zaniechaj</button></td></tr>
</table>


<table width="100%" cellspacing="1" cellpadding="2">
<tr>
  <td class="header" colspan=2>
    Obecna si³a twojej armii
  </td>
</tr>
<tr class="row1">
  <td class="header" width="50%">
    Atak z dystansu
  </td>
  <td class="header">
    Atak wrêcz
  </td>
</tr>
<tr class="row1">
  <td align="center">
    {$sila_ataku1}
  </td>
  <td align="center">
    {$sila_ataku2}
  </td>
</tr>
</table>
</center>
{/if}
{include file="main_bottom.tpl"}
{/strip}
