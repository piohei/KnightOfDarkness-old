{strip}
{include file="main_top.tpl"}
<center>
  <table cellspacing="1" width="100%">
  <tr>
    <td class="header">
      Atakuj�cy
    </td>
    <td class="header">
      Broni�cy 
    </td>
    <td class="header">
      Data rozpocz�cia
    </td>
    <td class="header">
      Ilo�� szpieg�w
    </td>
  </tr>
    <tr align='center' class="row1">
      <td>
        {$daneWojny.who}
      </td>
      <td>
        {$daneWojny.whom}
      </td>
      <td>
        {$daneWojny.date}
      </td>
      <td>
        {$daneWojny.spies_num}
      </td>
    </tr>
  </table>

  
  
  
  <table cellspacing="1" width="100%">
  <tr>
    <td class="header">
      Przebieg ataku
    </td>
  </tr>
  <tr class="row1">
    <td>
      Tury do ko�ca  : {if $daneWojny.turns==-1}Atak zako�czony{else}{$daneWojny.turns}{/if}
    </td>
  </tr>
  <tr class="row2">
    <td>
      {if $tryb=='at'}
        {$daneWojny.desc_at}
      {/if}
      {if $tryb=='def'}
        {$daneWojny.desc_def}
      {/if}
    </td>
  </tr>
  
 </table> 
  
</center>
{include file="main_bottom.tpl"}
{/strip}
