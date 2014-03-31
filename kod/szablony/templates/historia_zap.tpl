{strip}
{include file="main_top.tpl"}
<center>

<table width="100%" cellspacing="1" cellpadding="2">
    <tr>
        <td class="header">
            Ksiêstwo
        </td>
        <td class="header">
            Data
        </td>
        <td class="header">
            Stan
        </td>
        <td class="header">
        		Usuñ
        </td>
    </tr>

    {foreach key=key item=item from=$spisZaproszen}
        {if $key%2==0}
            <tr class="row1">
        {else}
            <tr class="row2">
        {/if}
        <td>
            <a href='../walka/infoGracza.php?name={$item->kogo}'>{$item->kogo}</a>
        </td>
        <td>
            {$item->data}
        </td>
        <td>
            {$item->stan}
         </td>
         <td>
            <a href="{$CFG->adresSerwera}koalicja/historia_zap.php?action=delete&amp;id={$item->id}"><img src="{$image_dir}messagebox_ico_delete.gif" alt="X" tite="Usuñ wie¶æ" style="margin-right: 5px"></a>
        </td>
    </tr>
{/foreach}
</table>

{if $prawo_zmiany==1}	
<br>
<form action='historia_zap.php?koal={$nazwa_koalicji}' method='post'>
<table width="100%" cellspacing="1" cellpadding="2">
    <tr class="row2">
        <td  align="center">
            <input type='checkbox' name='tab[1]'>
            Nieprzeczytane
        </td>
        <td  align="center">
        	<input type='checkbox' name='tab[0]'>
            Przeczytane	
        </td>
        <td  align="center">
            <input type='checkbox' name='tab[3]'>
            Odrzucone
        </td>
        <td  align="center">
            <input type='checkbox' name='tab[2]'>
            Wszystkie
        </td>
</table>

<table width="100%" cellspacing="1" cellpadding="2">
    <tr>
        <td align="center">
            <input class="button" type='submit' value='USUÑ'>
        </td>
    </tr>
</table>
        </form>
{/if}
</center>
{include file="main_bottom.tpl"}
{/strip}
