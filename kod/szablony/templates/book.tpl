<script type="text/javascript">
<!--
var serverAddr = '{$CFG->adresSerwera}';
{literal}
function setRecipient(recipient, openerMode, formName, fieldName){
    if(openerMode){
        form = opener.document.forms[formName];
        if(form) field = form.elements[fieldName];
        if(form && field){
            field.value = recipient;
        }else{
            opener.location.href = serverAddr + 'messages/messagebox.php?mode=3&rcpt='+recipient;
        }
    }
}
{/literal}
//-->
</script>
{strip}
<form action="{$CFG->adresSerwera}messages/book.php?disp={$smarty.get.disp}" method="POST" style="margin: 0; padding: 0">
<table cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #715E46; color: #B0A392; font-size: 11px; width: 100%; height: 100%">
<tr style="background-color: #2D210E; height: 40px;">
    <td style="border-bottom: 1px solid #715E46;">


        {* BEGIN: Panel z opcjami *}
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%;">
        <tr><td style="width: 10px"></td><td>
        
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; color: #B0A392; font-size: 11px">
        <tr>
            <td style="width: 75px">
                Królestwo:&nbsp;
            </td>
            <td style="width: 200px">
                <input class="textFieldType1" style="width: 200px" type="text" name="username" value="">
            </td>
            <td style="width: 11px" align="left">
                <img src="{$image_dir}textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0">
            </td>
            <td>
                <input type="image" src="{$image_dir}book.add.gif" name="add" value="Dodaj" style="margin-left: 10px" title="Zapisz królestwo w ksiêdze">
            </td>
            <td align="right">
            
                <div style="width: 60px; height: 5px; border: 1px solid #947A5C; background-color: #235016; font-size: 5px" align="left">
                    <div style="height: 5px; width: {$procg|default:0}%; background-color: #8C2D10; font-size: 5px"></div>
                </div>

            </td>
            <td align="left">
                &nbsp;{$size}/{$limit}
            </td>
        </tr>
        </table>
        
        </td><td style="width: 10px"></td></tr>
        </table>
        {* END: Panel z opcjami *}


    </td>
</tr>
<tr>
    <td valign="top">


    {* BEGIN: Lista znajomych*}
    <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; color: #B0A392; font-size: 11px; margin: 0px 0px">

    {if $friends_list}
        {foreach from=$friends_list item="friend"}
            <tr style="height: 1px"><td colspan="3"></td></tr>

            <tr style="height: 22px; background-color: #212121">
                <td style="width: 10px"> </td>
                <td><b>{$friend}</b></td>
                <td align="right" style="padding-right: 2px">
                    <a href="javascript:setRecipient('{$friend}',true,'mbox','recipient')"><img src="{$image_dir}ico.message.gif" alt="Wyslij" title="Wy¶lij wie¶æ" style="margin-right: 5px"></a>
                    <a href="{$CFG->adresSerwera}messages/book.php?disp={$smarty.get.disp}&amp;del={$friend}"><img src="{$image_dir}messagebox_ico_delete.gif" alt="X" tite="Usuñ wpis" style="margin-right: 5px"></a>
                </td>
            </tr>

        {/foreach}
        <tr><td colspan="3"> </td></tr>
    {else}
        <tr style="background-color: #212121; color: #B0A392; font-size: 11px">
            <td align="center" valign="middle">
                <b>Twoja ksiêga jest pusta.</b><br>
                Ksiêga, Panie, zosta³a stworzona po to<br>
                aby¶ móg³ w niej zapisywaæ nazwy królestw<br>
                do których wysy³asz wie¶ci.
            </td>
        </tr>
    {/if}

    {* END: Lista znajomych*}
    </table>

    </td>
</tr>
</table>
</form>
{/strip}