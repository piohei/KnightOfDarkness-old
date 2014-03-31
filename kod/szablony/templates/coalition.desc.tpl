{strip}
{include file="main_top.tpl" tytul="Koalicja"}
<table border="0" cellspacing="1" cellpadding="3" width="100%">
  {if $mesg != ""}
  <tr>
    <td {if $coalition != ""}colspan="2"{/if} class="row1" style="color: red">
      {foreach item="message" from=$mesg}
      {$message}
      <br>
      {/foreach}
    </td>
  </tr>
  {/if}
  
  {if $coalition != ""}
  <tr class="row1">
    <td class="header">
      Nazwa
    </td>
    <td>
      {$coalition}
    </td>
  </tr>
  <tr class="row2" >
    <td colspan="2">
      {$description}
    </td>
  </tr>
  
   <tr class="row2">
    <td>
      Poprzednia era:
    </td>
    <td>
    {if $history->czyJest=='ok'}
      Ziemia: {$history->dane.rank_1} Armia: {$history->dane.rank_2}
    {else}
      To jest pierwsza era tej koalicji
    {/if}
    </td>
  </tr>
  
  {/if}
</table>
{if $coalition != ""}
<table border="0" cellspacing="1" width="100%" cellpadding="3">
  <tr>
    <td class="header">
      Królestwo
    </td>
    <td class="header" >
      Ziemia
    </td>
  </tr>
  {foreach item="member" from=$members}
  <tr {if $member.nazwa == $emperor}class="row3" style="font-weight: bold"{else}class="{cycle values="row1,row2"}"{/if}>
    <td>
      <a href="../walka/infoGracza.php?name={$member.nazwa}">{$member.nazwa}</a>
    </td>
    <td>
      {$member.ziemia}
    </td>
  </tr>
  {/foreach}
</table>
{/if}
{include file="main_bottom.tpl"}
{/strip}
