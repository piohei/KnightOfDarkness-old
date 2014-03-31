{strip}
<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-bottom: 3px">
<tr style="height: 25px">


    {* BEGIN: Zak³adka planowanie ataku *}
    <td id="attack_planning"
        {if $mode == $smarty.const.ATTACK_PLANNING}
            style="padding-left: 10px; font-size: 11px; font-weight: bold; color: #BFA88A; background: url({$image_dir}messagebox_bookmark_bg.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 1px; border-color: #947A5C"
        {else}
            onmouseover="button_on('attack_planning', active_bg)" onmouseout="button_off('attack_planning', inactive_bg)" style="cursor: pointer; padding-left: 10px; color: #797364; font-size: 11px; background: url({$image_dir}messagebox_bookmark_bgd.gif) repeat-x top; border-style: solid; border-width: 1px 0px 1px 1px; border-color: #947A5C" onclick="window.location.href='{$CFG->adresSerwera}atak/index.php?mode={$smarty.const.ATTACK_PLANNING}'"
        {/if}
    >
        Planowanie ataku
    </td>
    <td id="attack_planningr" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.ATTACK_PLANNING}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_r.gif" alt=" "></td>
    {* END: Zak³adka planowanie ataku *}


    <td style="width: 6px"><img src="{$image_dir}messagebox_bookmark_dot.gif" alt="+"></td>


    {* BEGIN: Zak³adka ataki trwaj±ce *}
    <td id="attack_inprogressl" style="width: 5px; border-style: solid; border-width: 1px 0px 1px 0px; border-color: #947A5C; background: url({$image_dir}messagebox_bookmark_bg{if $mode != $smarty.const.ATTACK_INPROGRESS}d{/if}.gif) repeat-x top;"><img src="{$image_dir}messagebox_bookmark_l.gif" alt=" "></td>
    <td id="attack_inprogress"
        {if $mode == $smarty.const.ATTACK_INPROGRESS}
            style="padding-left: 10px; font-size: 11px; font-weight: bold; color: #BFA88A; background: url({$image_dir}messagebox_bookmark_bg.gif) repeat-x top; border-style: solid; border-width: 1px 1px 1px 0px; border-color: #947A5C"
        {else}
           onmouseover="button_on('attack_inprogress', active_bg)" onmouseout="button_off('attack_inprogress', inactive_bg)"  style="cursor: pointer; padding-left: 10px; color: #797364; font-size: 11px; background: url({$image_dir}messagebox_bookmark_bgd.gif) repeat-x top; border-style: solid; border-width: 1px 1px 1px 0px; border-color: #947A5C" onclick="window.location.href='{$CFG->adresSerwera}atak/index.php?mode={$smarty.const.ATTACK_INPROGRESS}'"
        {/if}
    >
        Trwaj±ce ataki
    </td>
    {* END: Zak³adka ataki trwaj±ce *}


</tr>
</table>
{/strip}
