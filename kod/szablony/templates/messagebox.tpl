{* BEGIN: £adowanie skryptów JavaScript *}
    <script type="text/javascript" src="{$javascript_dir}messagebox.js"></script>
    <script type="text/javascript">
        active_bg = new Image();
        inactive_bg = new Image();

        active_bg.src = '{$image_dir}messagebox_bookmark_bg.gif';
        inactive_bg.src = '{$image_dir}messagebox_bookmark_bgd.gif';

        server = '{$CFG->adresSerwera}';

        {literal}
        function submit_remove(){
            form = document.forms['mbox'];
            form.action += '&action=delete';
            form.submit();
        }

        function read_message(id){
            unset_read_flag(id);
            openWindow(server+'messages/message_reader.php?id='+id,530,520,'Wie¶æ')
        }
        {/literal}
    </script>
{* END: £adowanie skryptów JavaScript *}
{strip}


{* Tabela specjalnie dla IE, który "genialnie" interpretuje style CSS  MATO£! *}
<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; margin-top: 15px">
<tr><td style="width: 8px"></td><td>


<form name="mbox" action="{$SCRIPT_NAME}?mode={$mode}" method="POST" style="margin: 0; padding: 0">
<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">



{* BEGIN: Zak³adki *}
    <tr>
        <td> {include file="messagebox.tabs.tpl"} </td>
    </tr>
{* END: Zak³adki *}




{* BEGIN: Okno g³ówne *}
<tr>
    <td>
    <table cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #715E46; width: 100%;">
    <tr style="background-color: #2D210E; height: 40px;">
        <td>




        {* BEGIN: Menu *}
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
        <tr><td style="width: 10px"></td><td>
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; color: #B0A392; font-size: 11px; {*margin: 0px 2px 0px 10px*}">

        {if $mode == $smarty.const.MBOX_MODE_WRITE}

            <tr style="height: 25px">
                <td style="width: 120px">Nazwa&nbsp;odbiorcy:&nbsp;</td>
                <td style="width: 150px">
                    <input class="textFieldType1" style="width: 100%" type="text" name="recipient" value="{$smarty.get.rcpt|default:"`$smarty.post.recipient`"}">
                </td>
                <td align="left" style="width: 11px">
                    <img src="{$image_dir}textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0">
                </td>
                <td align="right">Ksiêga&nbsp;</td>
                <td style="width: 21px"><a href="javascript:openWindow('{$CFG->adresSerwera}messages/book.php?disp=external',500,400,'Ksiêga')"><img src="{$image_dir}book.gif" alt="" title="Ksiêga znajomych" style="margin: 0; padding: 0"></a></td>
                <td align="right">Nadaj&nbsp;</td>
                <td style="width: 21px;">
                    <input type="hidden" name="action" value="send">
                    <input type="image" src="{$image_dir}messagebox_send.gif" style="margin: 0; padding: 0">
                </td>
                <td></td>
            </tr>
            <tr style="height: 25px">
                <td>Temat:&nbsp;</td>
                <td colspan="6">
                    <input class="textFieldType1" style="width: 100%" type="text" name="subject" value="{$smarty.post.subject}">
                </td>
                <td align="left" style="width: 11px">
                    <img src="{$image_dir}textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0">
                </td>
            </tr>

            {if $kingdomInfo.is_emperor}
            <tr style="height: 25px">
                <td>Wyslij jako:&nbsp;</td>
                <td colspan="6">
                    <select name="message_type" class="textFieldType1" style="width: 100%">
                        <option selected value="{$smarty.const.MESSAGE_STANDARD}">Zwyk³a wie¶æ
                        <option value="{$smarty.const.MESSAGE_INVITE}">Wie¶æ zapraszaj±ca do koalicji
                    </select>
                </td>
                <td align="left" style="width: 11px">
                    <img src="{$image_dir}textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0">
                </td>
            </tr>
            {/if}

        {else}

            {* BEGIN: Standardowe menu wiadomo¶ci *}
                <tr>
                <td>
                    Zajête miejsce: {$proc}%&nbsp;
                    {if $mode == $smarty.const.MBOX_MODE_RAPORT}
                        {include file="help/template.quickhelp.tpl" helpfile="messagebox" req="rap_bar"}
                    {elseif $mode == $smarty.const.MBOX_MODE_SENT || $mode == $smarty.const.MBOX_MODE_RECEIVED}
                        {include file="help/template.quickhelp.tpl" helpfile="messagebox" req="msg_bar"}
                    {/if}
                </td>

                <td style="padding-left: 25px">
                    <a style="color: #B0A392" href="{$CFG->adresSerwera}messages/messagebox.php?mode={$smarty.const.MBOX_MODE_WRITE}" title="Napisz now± wiadomo¶æ">Nowa wiadomo¶æ</a>
                    <img src="{$image_dir}messagebox_ico_message.gif" alt=" " style="vertical-align: middle; margin-left: 7px">
                </td>

                <td align="right">Zaznacz przeczytane</td>
                <td style="width: 27px" align="right"><input type="checkbox" name="selector_read" onclick="select_read(this.form)" {if $mode == $smarty.const.MBOX_MODE_SENT}disabled{/if}></td>
            </tr>
            <tr>
                <td>

                <div style="width: 130px; height: 5px; border: 1px solid #947A5C; background-color: #235016; font-size: 5px" align="left">
                    <div style="height: 5px; width: {$procg}%; background-color: #8C2D10; font-size: 5px"></div>
                </div>

                </td>
                <td style="padding-left: 25px">
                    <a style="color: #B0A392" href="javascript:submit_remove()">Usuñ zaznaczone</a>
                    <img src="{$image_dir}messagebox_ico_delete.gif" alt=" " style="vertical-align: middle; margin-left: 7px">
                </td>
                <td align="right">Odwróæ zaznaczenie</td>
                <td style="width: 27px;" align="right"><input type="checkbox" name="selector_inverse" onclick="select_inverse(this.form)"></td>
                </tr>
            {* END: Standardowe menu wiadomo¶ci *}

        {/if}

        </table>
        </td><td style="width: 2px"></td></tr>
        </table>
        {* END: Menu *}





        </td>
    </tr>

    {if $msg_str}
    <tr>
        <td style="border-top: 1px solid #715E46; background-color: #212121; color: #B0A392; font-size: 11px;">
                <p style="padding: 0; margin: 20px 20px; text-align: center">{$msg_str}</p>
        </td>
    </tr>
    {/if}

    </table>
    </td>
</tr>
<tr>
    <td>


    {* BEGIN: Okno g³ówne *}
    <table cellspacing="0" cellpadding="0" border="0" style="border-style: solid; border-width: 0px 1px 1px 1px; border-color: #715E46; width: 100%;">

    {if $mode == $smarty.const.MBOX_MODE_WRITE}

        {* BEGIN: Edytor wiadomo¶ci *}
        <tr>
            <td>
            <textarea name="message_content" style="width: 100%; border: 0 solid; height: 350px; background-color: #212121; color: #B0A392; font-size: 12px; padding: 20px 15px">{$smarty.post.message_content}</textarea>
            </td>
        </tr>
        {* END: Edytor wiadomo¶ci *}

    {else}



        {* BEGIN: Lista wiadomo¶ci odebranych *}
        {if $mode == $smarty.const.MBOX_MODE_RECEIVED && $list_received}
            <tr>
                <td>
                {include file="messagebox.received.tpl"}
                </td>
            </tr>
        {elseif $mode == $smarty.const.MBOX_MODE_RECEIVED}
            <tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px">
                <td align="center" valign="middle"><b>Nie masz ¿adnych odebranych wiadomo¶ci.</b></td>
            </tr>
        {/if}
        {* END: Lista wiadomo¶ci odebranych *}



        {if $mode == $smarty.const.MBOX_MODE_SENT && $list_sent}
            <tr>
                <td>
                {include file="messagebox.sent.tpl"}
                </td>
            </tr>
        {elseif $mode == $smarty.const.MBOX_MODE_SENT}
            <tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px">
                <td align="center" valign="middle"><b>Nie masz ¿adnych wys³anych wiadomo¶ci.</b></td>
            </tr>
        {/if}



        {if $mode == $smarty.const.MBOX_MODE_RAPORT && $list_raport}
            <tr>
                <td>
                {include file="messagebox.raport.tpl"}
                </td>
            </tr>
        {elseif $mode == $smarty.const.MBOX_MODE_RAPORT}
            <tr style="height: 150px; background-color: #212121; color: #B0A392; font-size: 11px">
                <td align="center" valign="middle"><b>Nie masz ¿adnych raportów.</b></td>
            </tr>
        {/if}

        {if $mode == $smarty.const.MBOX_MODE_RAPORT}
        <tr style="height: 25px;">
            <td>
                <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; border-top: 1px solid #715E46; border-bottom: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 11px; padding: 0px 10px">
                <tr>
                    <td>
                    Raporty tymczasowe {include file="help/template.quickhelp.tpl" helpfile="messagebox" req="rap_tmp"}
                    </td>
                </tr>
                </table>
            </td>
        </tr>
        {/if}

        {if $mode == $smarty.const.MBOX_MODE_RAPORT && $list_tempraport}
            <tr>
                <td>
                {include file="messagebox.tempraport.tpl"}
                </td>
            </tr>
        {elseif $mode == $smarty.const.MBOX_MODE_RAPORT}
            <tr style="height: 150px; background-color: #212121; color: #B0A392; font-size: 11px">
                <td align="center" valign="middle"><b>Nie masz ¿adnych raportów tymczasowych.</b></td>
            </tr>
        {/if}

    {/if}
    <tr>
        <td align="left" valign="middle">
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 20px; border-top: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 10px; padding: 0px 10px">
        <tr>
            <td style="color: #625b51">
            <span style="color: #7f9792"><b>*</b></span> Wie¶æ nieprzeczytana&nbsp;|&nbsp;
            Kliknij temat aby przeczytaæ&nbsp;|&nbsp;
            Kliknij nazwê aby odpisaæ
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
</form>


</td></tr>
</table>
{/strip}
