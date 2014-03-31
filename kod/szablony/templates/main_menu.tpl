{capture assign="item_separator"}
<td style="width: 11px"><img src="{$image_dir}top_menu_itemseparator.jpg" alt="|"></td>
{/capture}


<table border="0" cellspacing="0" cellpadding="0" style="width: 695px">
    <tr>
        <td width="12,5%" align="center" ><a class="mainMenuItem" href="{$root_dir}zalogowany.php">g³ówna</a></td>
        {$item_separator}
{if $new_messages}
<td width="26%" align="center"><a class="mainMenuItem" href="{$root_dir}messages/messagebox.php"><font color="#cc0000">wiadomo¶ci
      ({$count_new_messages_standard}/{$count_new_messages_invite}/{$count_new_messages_raport}/{$count_new_messages_simple_raport})</font></a><td>
{else}
<td width="12,5%" align="center"><a class="mainMenuItem" href="{$root_dir}messages/messagebox.php">wiadomo¶ci</a></td>
{/if}
</a></td>
        {$item_separator}
        <td width="12,5%" align="center"><a class="mainMenuItem" href="{$root_dir}budowa/buduj.php">budynki</a></td>
        {$item_separator}
        <td width="12,5%" align="center"><a class="mainMenuItem" href="{$root_dir}trening/trenuj.php">trenowanie</a></td>
        {$item_separator}
        <td width="12,5%" align="center"><a class="mainMenuItem" href="{$root_dir}koalicja/koalicja.php">koalicja</a></td>
        {$item_separator}
        <td width="12%" align="center"><a class="mainMenuItem" href="{$root_dir}targ/targ.php">targ</a></td>
        {$item_separator}
        <td width="12%" align="center"><a class="mainMenuItem" href="{$root_dir}atak/">atak</a></td>
    </tr>
</table>
