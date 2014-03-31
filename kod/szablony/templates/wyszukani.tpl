{strip}
{include file="main_top.tpl"}
<center>
  <font color='red'>
    {$error}
  </font>
</center>
{$mess}
  <table border="0" cellspacing="1" width="100%" cellpadding="3">
   <form action="wyszukani.php" method="post">
    <tr  >
      <td align="center" class="header" colspan="3">
          Zmiana strony (jeste na &nbsp;{$biezacaStrona}&nbsp; stronie z &nbsp;{$ileStron})
       </td>
        <td align="center" class="header" colspan="2">
          Wyszukaj ksiêstwo
        </td>
      <tr>
    <tr class="row1">
      <td allign="center">  
          Numer strony:
      </td>
      <td>
        <input type="text" name="numer" size=2>
        <br>
      </td>
      <td align="center">
        <input type="submit" value="skocz" class='button'>
        <input type='hidden' name='sortowanie' value='{if $biezacy_check=="nazwa"}nazwa{else}{if $biezacy_check=="ziemia"}ziemia{/if}{/if}'>
        <input type='hidden' name='kierunek' value='{$kierunek}'>
      
      </td>
      </form>
      <form action='wyszukani.php' method='post'>
      <td>
        <input class='textfield' name='kogo'>
      </td>
      <td>
        <input class='button' type='submit' value='Szukaj'>
      </td>
    </tr>
  </form>
  <tr>
  </table>
  
<table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
  <tr  >
    <td  class="header" >
      Nr.
    </td>
    <td  class="header" >
      Nazwa
    </td>
    <td  class="header" >
      Ziemia
    </td>
    <td  class="header" >
      Atakuj
    </td>
    <td  class="header" >
      Wiadomo¶æ
    </td>
    <td  class="header" >
      Do ks.
    </td>
  {if $czyAdmin==1}
    <td  class="header" >
      Usuñ
    </td>
  {/if}
  <tr>
  {foreach key=key item=item from=$wyszukani}
  {if $key%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
    {/if}
    <td align="right">
      {$key+1+$biezacaStrona*$ileNaStronie-1*$ileNaStronie}
    </td>
    <td>
      <a href='infoGracza.php?name={$item->nazwa}'>{$item->nazwa}</a>
    </td>
    <td>
      {$item->ziemia}
    </td>
    
    <td>
      <a href='/walka/atakuj.php?kogo_atakujesz={$item->nazwa}'>atak</a>
    </td>
    <td>
      <a href='/wiadomosci/nowaWiadomosc.php?do={$item->nazwa}'>wiadomosæ</a>
    </td>
    <td>
      <a href='../znajomi/spisZnajomych.php?ktoD={$item->nazwa}'>dodaj do ks.</a>
    </td>
    {if $czyAdmin==1}
    <td>
      <a href='spisgraczy.php?kogoU={$item->nazwa}'>usuñ</a>
    </td>
    {/if}
  </tr>
  {/foreach}
</table>

<table border="0" cellspacing="1" width="100%">
  <tr class="row1" >
    <td >
      {$link_strzalkaL}
    </td>
    <td align="right">
      {$link_strzalkaP}
    </td>
  </tr>
</table>



{include file="main_bottom.tpl"}
</center>
{/strip}
