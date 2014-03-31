{strip}
<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-bottom: 3px">
<tr style="height: 25px">


    {* BEGIN: Zak³adka odebrane *}
    <td id="mbox_rcv"
        {if $mode == $smarty.const.MBOX_MODE_RECEIVED}
            style="padding-left: 10px; font-size: 11px; font-weight: bold; color: #BFA88A; background: url({$image_dir}messagebox_bookmark_bg.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 1px; border-color: #947A5C"
        {else}
            onmouseover="button_on('mbox_rcv', active_bg)" onmouseout="button_off('mbox_rcv', inactive_bg)" style="cursor: pointer; padding-left: 10px; color: #797364; font-size: 11px; background: url({$image_dir}messagebox_bookmark_bgd.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 1px; border-color: #947A5C" onclick="window.location.href='{$CFG->adresSerwera}messages/messagebox.php?mode={$smarty.const.MBOX_MODE_RECEIVED}'"
        {/if}
    >
        Odebrane
    </td>
    <td id="mbox_rcvr" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.MBOX_MODE_RECEIVED}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_r.gif" alt=" "></td>
    {* END: Zak³adka odebrane *}


    <td style="width: 6px"><img src="{$image_dir}messagebox_bookmark_dot.gif" alt=" "></td>


    {* BEGIN: Zak³±dka wys³ane *}
    <td id="mbox_sentl" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.MBOX_MODE_SENT}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_l.gif" alt=" "></td>
    <td id="mbox_sent"
        {if $mode == $smarty.const.MBOX_MODE_SENT}
            style="padding-left: 10px; font-size: 11px; font-weight: bold; color: #BFA88A; background: url({$image_dir}messagebox_bookmark_bg.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C"
        {else}
            onmouseover="button_on('mbox_sent', active_bg)" onmouseout="button_off('mbox_sent', inactive_bg)"  style="cursor: pointer; padding-left: 10px; color: #797364; font-size: 11px; background: url({$image_dir}messagebox_bookmark_bgd.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C" onclick="window.location.href='{$CFG->adresSerwera}messages/messagebox.php?mode={$smarty.const.MBOX_MODE_SENT}'"
        {/if}
    >
        Wys³ane
    </td>
    <td id="mbox_sentr" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.MBOX_MODE_SENT}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_r.gif" alt=" "></td>
    {* END: Zak³±dka wys³ane *}


    <td style="width: 6px"><img src="{$image_dir}messagebox_bookmark_dot.gif" alt=" "></td>


    {* BEGIN: Zak³adka raport*}
    <td id="mbox_raportl" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.MBOX_MODE_RAPORT}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_l.gif" alt=" "></td>
    <td id="mbox_raport"
        {if $mode == $smarty.const.MBOX_MODE_RAPORT}
            style="padding-left: 10px; font-size: 11px; font-weight: bold; color: #BFA88A; background: url({$image_dir}messagebox_bookmark_bg.gif) repeat-x top; border-style: solid; border-width: 1px 1px 1px 0px; border-color: #947A5C"
        {else}
           onmouseover="button_on('mbox_raport', active_bg)" onmouseout="button_off('mbox_raport', inactive_bg)"  style="cursor: pointer; padding-left: 10px; color: #797364; font-size: 11px; background: url({$image_dir}messagebox_bookmark_bgd.gif) repeat-x top; border-style: solid; border-width: 1px 1px 1px 0px; border-color: #947A5C" onclick="window.location.href='{$CFG->adresSerwera}messages/messagebox.php?mode={$smarty.const.MBOX_MODE_RAPORT}'"
        {/if}
    >
        Raporty
    </td>
    {* END: Zak³adka raport *}


</tr>
</table>
{/strip}