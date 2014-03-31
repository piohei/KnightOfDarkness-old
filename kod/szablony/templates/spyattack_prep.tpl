{strip}
{include file="main_top.tpl"}

<center>
{if $error!=""}
<font color='red'>{$error}</font>
{else}
<form action='../walka/spyattack_conf.php' method='post'>
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
      Szpiedzy
    </td>
    <td>
      <input class='textfield' name='ile_szpiegow' value='{$dane.szpiedzy}'  readonly>
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
  <tr class="row1">
    <td class="header">
      Potencja³ szpiegowski
    </td>
    <td>
      {$sila_ataku}
    </td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="2">
<tr class="row1" align='center'><td><input class='button' type='submit' value='Szpieguj'></td>
</form>
<td><button class='button' onClick="window.location.href = '../walka/atakuj.php'" >Zaniechaj</button></td></tr>
</table>


</center>
{/if}
{include file="main_bottom.tpl"}
{/strip}

