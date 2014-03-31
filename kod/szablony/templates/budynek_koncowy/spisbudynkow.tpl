{include file="main_top.tpl"}
{strip}
<table cellspacing="1" cellpadding="3" border="0" style="margin:2px">
  {foreach from=$budynki item=budynek key=key}
  {if $key%2==0}
    <tr class="row1">
  {else}
    <tr class="row2">
  {/if}
    <td width="500px">Koalicja:
    <a href="{$root_dir}koalicja/coalition.desc.php?coal={$budynek.koalicja}">{$budynek.koalicja}</a> 
      <table width="466px" cellspacing="0" cellpadding="0" border="0">
      {if $key%2==0}
        <tr class="row1">
      {else}
        <tr class="row2">
      {/if}
        <td width="50px">Postêp:</td>
        <td width="{$budynek.postep_piksele+1}" bgcolor="#ac6f10">
          &nbsp;
        </td>
        <td>
        &nbsp;{$budynek.postep_pr}%
        </td>
      </tr>
      </table>
    </td>
    <td width="24px">
    <a href='{$root_dir}atak/?target={$budynek.koalicja}&type=5'><img src="{$image_dir}miecze_male.gif" alt="Atak"></a>
    </td>
  </tr>
  {/foreach}
</table>
{/strip}
{include file="main_bottom.tpl"}
