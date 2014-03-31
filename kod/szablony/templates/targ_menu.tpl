{config_load file="conf" section="COLORS"}


{capture name="jscript"}
        onMouseOver="this.style.backgroundColor='{#submenu_activate_color#}'; this.style.cursor = 'hand'"
        onMouseOut="this.style.backgroundColor='#000000'; this.style.cursor = 'default';"
{/capture}


{strip}
<table width="519" height="18" cellpadding="0" cellspacing="0">
    <tr><td colspan="5" height="5" style="border: 0px solid #4E4639; border-right-width: 1px; font-size: 9px;">&nbsp;</td></tr>
    <tr>
        
        <td width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}targ/targ.php?tryb=1'">
            <a href="{$root_dir}targ/targ.php?tryb=1" class="submenuItem">¿elazo</a>
        </td>
        <td width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}targ/targ.php?tryb=2'">
            <a href="{$root_dir}targ/targ.php?tryb=2" class="submenuItem">broñ</a>
        </td>
         <td width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}targ/targ.php?tryb=3'">
            <a href="{$root_dir}targ/targ.php?tryb=3" class="submenuItem">narzêdzia</a>
        </td>
        <td width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}targ/targ.php?tryb=4'">
            <a href="{$root_dir}targ/targ.php?tryb=4" class="submenuItem">jedzenie</a>
        </td>
        <td width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}kupno_ziemi/kupuj.php'">
            <a href="{$root_dir}kupno_ziemi/kupuj.php" class="submenuItem">ziemia</a>
        </td>
    </tr>
    <tr>
      <td colspan="5" align="center" width="120" class="submenuItem" {$smarty.capture.jscript} onClick="window.location.href='{$root_dir}targ/targ.php?tryb=5'">
            <center><a href="{$root_dir}targ/targ.php?tryb=5" class="submenuItem">twoje aukcje</a></center>
        </td>
    </tr>
</table>
{/strip}
