{* BEGIN: £adowanie skryptów JavaScript *}
    <script type="text/javascript" src="{$javascript_dir}messagebox.js"></script>
    <script type="text/javascript">
        active_bg = new Image();
        inactive_bg = new Image();

        active_bg.src = '{$image_dir}messagebox_bookmark_bg.gif';
        inactive_bg.src = '{$image_dir}messagebox_bookmark_bgd.gif';
    </script>
{* END: £adowanie skryptów JavaScript *}
{strip}




<table cellspacing="0" cellpadding="0" border="0" style="width: 100%; margin-left: 8px; margin-top: 15px">



{* BEGIN: Zak³adki *}
    <tr>
        <td> {include file="attack.tabs.tpl"} </td>
    </tr>
{* END: Zak³adki *}




{* BEGIN: Okno g³ówne *}

<tr>
    <td style="border-top: 1px solid #715E46;">


    {* BEGIN: Okno g³ówne *}
    <table cellspacing="0" cellpadding="0" border="0" style="border-style: solid; border-width: 0px 1px 1px 1px; border-color: #715E46; width: 100%;">

    <tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px">
        <td align="center" valign="middle">

        {include file=$attack_tab}
        </td>

    </tr>

    <tr>
        <td align="left" valign="middle">
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 20px; border-top: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 10px; padding: 0px 10px">
        <tr>
            <td style="color: #625b51">
            Je¿eli masz jakie¶ w±tpliwo¶ci to kliknij tutaj: {include file="help/template.quickhelp.tpl" helpfile="attack"}
            </td>
        </tr>
        </table>
        </td>
    </tr>
    </table>
    {* END: Okno g³ówne *}



    </td>
</tr>
{* END: Okno g³ówne *}




</table>

{/strip}
