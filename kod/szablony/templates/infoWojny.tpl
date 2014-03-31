{strip}
{include file="main_top.tpl"}
<center>
  <table cellspacing="1" width="100%">
  <tr>
    <td class="header">
      Atakuj±cy
    </td>
    <td class="header">
      Broni±cy 
    </td>
    <td class="header">
      Data wymarszu wojsk
    </td>
  </tr>
    <tr align='center' class="row1">
      <td>
        {$daneWojny.kto}
      </td>
      <td>
        {$daneWojny.kogo}
      </td>
      <td>
        {$daneWojny.kiedy}
      </td>
    </tr>
  </table>

  <table cellspacing="1" width="100%">
    <tr>
      <td align="center" colspan=2 class="kp-header">
      Armia atakuj±ca  
      </td>
    </tr>
    <tr>
      <td class="header">
        Jednostka
      </td>
      <td class="header">
        Ilo¶æ
      </td>
    </tr>
    
    {foreach key=key item=item from=$wojsko}
    {if key%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
    {/if}
    
      <td>
        {$item->nazwa}
      </td>
      <td>
        {$item->ilosc}
      </td>
    </tr>
    {/foreach}
  </table>
  
  {if $daneWojny.ilosc_tur_do_konca!=-1}{if $kingdomInfo.nazwa==$daneWojny.kto}
  <button class='button' onClick="window.location.href = '../zalogowany.php?id_woj={$daneWojny.id}'">
    Wycofaj wojska
  </button>
  {/if}
  {/if}
  <table cellspacing="1" width="100%">
  <tr>
    <td class="header">
      Opis wojny
    </td>
  </tr>
  <tr class="row1">
    <td>
      Tury do koñca wojny : {if $daneWojny.ilosc_tur_do_konca==-1}Wojna zakoñczona{else}{$daneWojny.ilosc_tur_do_konca}{/if}
    </td>
  </tr>
  <tr class="row2">
    <td>
      {if $szczegoly=="1"}{$daneWojny.opis_s}{else}{$daneWojny.opis}{/if}
    </td>
  </tr>
  <tr class="row1">
    <td align="center">
      <a href='../walka/infoWojny.php?id={$idWojny}&tryb=1'><b>Szczegó³y</b></a>
    </td>
  </tr>  
 </table> 
  
</center>
{include file="main_bottom.tpl"}
{/strip}
