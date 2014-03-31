{strip}


{* szerokosc tabel z danymi wewnatrz lewego panela *}
{assign var="data_table_width" value="195"}

{* poczatek przycisku tytulowego *}
{capture assign="begin_titlebutton"}
<tr><td colspan="2" height="2px"></td></tr>
<tr>
    <td width="33" height="26"><img src="{$image_dir}left_panel_part01.jpg"></td>
    <td width="198" height="26" background="{$image_dir}left_panel_part02_bg.jpg" class="button_title">
{/capture}

{* koniec przycisku tytulowego *}
{capture assign="end_titlebutton"}
    </td>
</tr>
<tr>
    <td colspan="2" style="width: 231px; height: 3px" background="{$image_dir}left_panel_main_bg_shadow.jpg"></td>
</tr>
{/capture}


{*+ lewy panel z danymi *}
<table border="0" width="{$left_panel_width}" cellspacing="0" cellpadding="0" background="{$image_dir}left_panel_main_bg.jpg">

{$begin_titlebutton}U¿ytkownicy{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
        <tr>
            <td class="key">&nbsp;</td>
            <td align="right" class="value"><b>&nbsp;</b></td>
        </tr>
        </table>
        <br>
    </td>
</tr>

{$begin_titlebutton}System{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
        <tr>
            <td class="key"><a href="{$www_root}sondy.php">Sondy</a></td>
            <td align="right" class="value">&nbsp;</td>
        </tr>
         <tr>
            <td class="key"><a href="{$www_root}statystyki.php">Statystyki</a></td>
            <td align="right" class="value">&nbsp;</td>
        </tr>
        <tr>
            <td class="key"><a href="{$www_root}admin.php?reset=?">Reset</a></td>
            <td align="right" class="value">&nbsp;</td>
        </tr>
        <tr>
            <td class="key"><a href="{$www_root}admin.php?action=task">Task Log</a></td>
            <td align="right" class="value">&nbsp;</td>
        </tr>
  	<tr>
            <td class="key"><a href="{$www_root}admin.php?action=mail">Wiadomo&#347;&#263; zbiorcza</a></td>
            <td align="right" class="value">&nbsp;</td>
        </tr>      
        </table>
        <br>
    </td>
</tr>

{*+ belka konczaca *}
<tr>
    <td style="width: {$left_panel_width}; height: 15px" colspan="3">
        <img src="{$image_dir}left_panel_main_bottom.jpg">
    </td>
</tr>
{*- belka konczaca *}
</table>
{*- lewy panel z danymi *}

{/strip}