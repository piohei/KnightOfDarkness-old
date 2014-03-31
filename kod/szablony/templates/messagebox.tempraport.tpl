{strip}
<table style="width: 100%; color: #b0a392; font-size: 11px" cellpadding="0" cellspacing="0" border="0">
<tr style="height: 1px"><td colspan="4"></td></tr>

{foreach from=$list_tempraport item="message_header"}


    <tr style="height: 1px"><td colspan="4"></td></tr>


    <tr style="height: 22px; background-color: #212121">

        <td style="width: 15px; color: #7f9792" align="center" valign="middle">
            {if not $message_header.is_read}<div id="urflag_{$message_header.id}"><b>*</b></div>{else}&nbsp;{/if}
        </td>

        <td>
            <b>{$message_header.from}:</b>&nbsp;
            <a style="color: #b0a392;" href="javascript:read_message({$message_header.id})">{$message_header.subject}</a>
        </td>
					
        <td style="color: #84796a; width: 150px" align="right">
            {$message_header.date|date_format:"%d-%m-%Y"}&nbsp;<span style="font-size: 0.8em">{$message_header.date|date_format:"%H:%M:%S"}</span>
        </td>

        <td align="right" style="padding-right: 2px">
            <a href="{$CFG->adresSerwera}messages/messagebox.php?mode={$mode}&amp;action=delete&amp;id={$message_header.id}"><img src="{$image_dir}messagebox_ico_delete.gif" alt="X" tite="Usuñ raport" style="margin-right: 5px"></a>
            <a href="{$CFG->adresSerwera}messages/messagebox.php?mode={$mode}&amp;action=share&amp;id={$message_header.id}"><img src="{$image_dir}eye.png" width="16px" alt="S" tite="Udostêpnij raport koalicji" style="margin-right: 5px"></a>
            <input id="{if not $message_header.is_read}un{/if}read_{$message_header.id}" type="checkbox" name="delete_list[]" value="{$message_header.id}">
        </td>
		
    </tr>


    <tr style="height: 1px"><td colspan="4"></td></tr>


{/foreach}

<tr style="height: 1px"><td colspan="4"></td></tr>
</table>
{/strip}