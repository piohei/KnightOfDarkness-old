<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>KoD Panel</title>

{literal}
<script type="text/javascript">
    var changeValidityMem = Array();

    function changeValidity(checkbox){
        textIndex = checkbox.name;
        textIndex = textIndex.substring(textIndex.indexOf('[')+1, textIndex.indexOf(']'));
        text = checkbox.form.elements['validity['+textIndex+']'];

        if(text){
            if(checkbox.checked){
                if(text.value != '' && text.value != 'bezterminowo'){
                    changeValidityMem[textIndex] = text.value;
                }
                text.value = 'bezterminowo';
                text.disabled = true;
            }else{
                text.value = (changeValidityMem[textIndex]) ? changeValidityMem[textIndex] : 'YYYY-MM-DD [hh:mm:ss]';
                text.disabled = false;
            }
        }
    }
</script>
{/literal}

</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr>
    <td class="MainWindow" align="left" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
        <tr>
            <td style="background-color: #e2e9fb; height: 30px; text-align: right; padding-right: 50px; font-weight: bold; font-size: 17px; color: #c2c2cc">{$username}</td>
        </tr>
        <tr>
            <td>


            <form action="index.php?mode={$smarty.const.MODE_CONSTRAINT_MANAGER}&amp;user={$username}&amp;action=save" method="POST">
            <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; margin: 20px 20px">



            <tr class="rowStyle1">
                <td style="width: 300px">
                    Limit wiadomości w skrzynce (odebrane+wysłane)
                </td>
                <td align="right" style="width: 60px">
                    <input style="text-align: right; width: 50px" type="text" name="value[{$smarty.const.C_MESSAGEBOX_LIMIT}]" value="{$constraint[$smarty.const.C_MESSAGEBOX_LIMIT].value}">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[{$smarty.const.C_MESSAGEBOX_LIMIT}]" value="1" {if is_null($constraint[$smarty.const.C_MESSAGEBOX_LIMIT].validity)}checked{/if} onchange="changeValidity(this)">
                    <input name="validity[{$smarty.const.C_MESSAGEBOX_LIMIT}]" style="text-align: right; width: 70%" onfocus="this.select()"
                        {if is_null($constraint[$smarty.const.C_MESSAGEBOX_LIMIT].validity)}
                            value="bezterminowo" disabled="true"
                        {else}
                            value="{$constraint[$smarty.const.C_MESSAGEBOX_LIMIT].validity|date_format:"%Y-%m-%d %H:%M:%S"}"
                        {/if}
                    >
                </td>
            </tr>



            <tr>
                <td>
                    Limit raportów
                </td>
                <td align="right">
                    <input style="text-align: right; width: 50px" type="text" name="value[{$smarty.const.C_MESSAGEBOX_RAPORT}]" value="{$constraint[$smarty.const.C_MESSAGEBOX_RAPORT].value}">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[{$smarty.const.C_MESSAGEBOX_RAPORT}]" value="1" {if is_null($constraint[$smarty.const.C_MESSAGEBOX_RAPORT].validity)}checked{/if} onchange="changeValidity(this)">
                    <input name="validity[{$smarty.const.C_MESSAGEBOX_RAPORT}]" style="text-align: right; width: 70%" onfocus="this.select()"
                        {if is_null($constraint[$smarty.const.C_MESSAGEBOX_RAPORT].validity)}
                            value="bezterminowo" disabled="true"
                        {else}
                            value="{$constraint[$smarty.const.C_MESSAGEBOX_RAPORT].validity|date_format:"%Y-%m-%d %H:%M:%S"}"
                        {/if}
                    >
                </td>
            </tr>



            <tr class="rowStyle1">
                <td>
                    Logo królestwa
                </td>
                <td align="right">
                    <select name="value[{$smarty.const.C_LOGO_ENABLED}]" style="text-align: right; width: 50px">
                        <option value="0" {if $constraint[$smarty.const.C_LOGO_ENABLED].value == 0}selected{/if}>OFF
                        <option value="1" {if $constraint[$smarty.const.C_LOGO_ENABLED].value == 1}selected{/if}>ON
                    </select>
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[{$smarty.const.C_LOGO_ENABLED}]" value="1" {if is_null($constraint[$smarty.const.C_LOGO_ENABLED].validity)}checked{/if} onchange="changeValidity(this)">
                    <input name="validity[{$smarty.const.C_LOGO_ENABLED}]" style="text-align: right; width: 70%" onfocus="this.select()"
                        {if is_null($constraint[$smarty.const.C_LOGO_ENABLED].validity)}
                            value="bezterminowo" disabled="true"
                        {else}
                            value="{$constraint[$smarty.const.C_LOGO_ENABLED].validity|date_format:"%Y-%m-%d %H:%M:%S"}"
                        {/if}
                    >
                </td>
            </tr>



            <tr>
                <td>
                    Statystyki targu
                </td>
                <td align="right">
                    <select name="value[{$smarty.const.C_MARKETSTAT_ENABLED}]" style="text-align: right; width: 50px">
                        <option value="0" {if $constraint[$smarty.const.C_MARKETSTAT_ENABLED].value == 0}selected{/if}>OFF
                        <option value="1" {if $constraint[$smarty.const.C_MARKETSTAT_ENABLED].value == 1}selected{/if}>ON
                    </select>
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[{$smarty.const.C_MARKETSTAT_ENABLED}]" value="1" {if is_null($constraint[$smarty.const.C_MARKETSTAT_ENABLED].validity)}checked{/if} onchange="changeValidity(this)">
                    <input name="validity[{$smarty.const.C_MARKETSTAT_ENABLED}]" style="text-align: right; width: 70%" onfocus="this.select()"
                        {if is_null($constraint[$smarty.const.C_MARKETSTAT_ENABLED].validity)}
                            value="bezterminowo" disabled="true"
                        {else}
                            value="{$constraint[$smarty.const.C_MARKETSTAT_ENABLED].validity|date_format:"%Y-%m-%d %H:%M:%S"}"
                        {/if}
                    >
                </td>
            </tr>



            <tr class="rowStyle1">
                <td>
                    Limit wpisów w księdze znajomych
                </td>
                <td align="right">
                    <input style="text-align: right; width: 50px" type="text" name="value[{$smarty.const.C_BOOK_LIMIT}]" value="{$constraint[$smarty.const.C_BOOK_LIMIT].value}">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[{$smarty.const.C_BOOK_LIMIT}]" value="1" {if is_null($constraint[$smarty.const.C_BOOK_LIMIT].validity)}checked{/if} onchange="changeValidity(this)">
                    <input name="validity[{$smarty.const.C_BOOK_LIMIT}]" style="text-align: right; width: 70%" onfocus="this.select()"
                        {if is_null($constraint[$smarty.const.C_BOOK_LIMIT].validity)}
                            value="bezterminowo" disabled="true"
                        {else}
                            value="{$constraint[$smarty.const.C_BOOK_LIMIT].validity|date_format:"%Y-%m-%d %H:%M:%S"}"
                        {/if}
                    >
                </td>
            </tr>



            <tr>
                <td >
                    <b>{$msg|default:"&nbsp;"}</b>
                </td>
                <td align="right" colspan="2">
                <input type="submit" name="save" value="Zapisz">
                </td>
            </tr>
            </table>
            </form>


            </td>
        </tr>
        </table>
    </td>
</tr>
</table>
</body>
</html>