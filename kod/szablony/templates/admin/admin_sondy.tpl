{include file="main_top.tpl"}
{if $sonda==""}
  <table width="100%" cellspacing="1" cellpadding="2">
    {foreach from=$listaSond item=item key=key}
      {if $key%2==0}
        <tr class="row1">
      {else}
        <tr class="row2">
      {/if}
          <td>
            {$item.pytanie}<br>
             <span style="color:green; font-weight:bold">tryb:</span>{$item.tryb} 
             <span style="color:green; font-weight:bold">wazna do:</span>{$item.data_zakonczenia} 
             <span style="color:green; font-weight:bold">zalozyciel:</span>{$item.zalozyciel}
            <br>
            <a href="{$www_root}sondy.php?id={$item.id}">Zobacz</a>
          </td>
        </tr>
    {/foreach}
  </table>
{else}
  {$sonda}
{/if}
{include file="main_bottom.tpl"}
