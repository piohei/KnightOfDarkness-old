
{literal}
<script type="text/javascript">
function user_block(form, username){
    form.elements['user_to_block'].value = username;
    form.submit();
}

function user_unblock(form, username){
    form.elements['user_to_unblock'].value = username;
    form.submit();
}

function user_activate(form, username){
	form.elements['activate_user'].value = username;
	form.submit();
}

function user_remove(form, username){
    if(confirm('Usun±æ: '+ username + '?')){
        form.elements['user_to_remove'].value = username;
        form.submit();
    }
}

function user_turs_modify(form, username){
    if(confirm('Czy chcesz usun±æ '+form.elements['user_to_turs_modify_ile_tur'].value+' tur z ksiestwa: '+ username + '?')){
        form.elements['user_to_turs_modify'].value = username;
        form.submit();
    }
}
</script>
{/literal}

{strip}

{if $INFO_MESSAGE}
<font color="red">
            {foreach from=$INFO_MESSAGE item="mes"}
            	<br>{$mes}
            {/foreach}
</font>
{/if}

<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr class="Header">
        <td colspan="3">Szukaj gracza (% - dowolny ci±g znaków, _ - dowolny znak, wielko¶æ liter nie ma znaczenia)</td>
</tr>
<tr>
    <td>


    {* BEGIN: Szukanie gracza *}
    <form action="index.php?mode={$smarty.const.MODE_BLOCKREMOVE}" method="POST" style="margin: 0; padding: 0">
    <table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px;">
    <tr>
        <td>Wyszukaj u¿ytkownika&nbsp;</td>
        <td><input type="text" name="keyword" value="{$smarty.post.keyword}">&nbsp;</td>
        <td>
            <select name="field">
                <option value="ip" {if $smarty.post.field == 'ip'}selected{/if}>Adres IP</option>
                <option value="login" {if $smarty.post.field == 'login' || empty($smarty.post.field)}selected{/if}>Nazwa u¿ytkownika</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Limit&nbsp;</td>
        <td><input type="text" name="limit" value="{$smarty.post.limit|default:100}"></td>
        <td><input type="submit" value="OK"></td>
    </tr>
    </table>
    {* END: Szukanie gracza *}


    {* BEGIN: Lista u¿ytkowników *}
    {if $user_list}
    <input type="hidden" name="user_to_block" value="">
    <input type="hidden" name="user_to_unblock" value="">
    <input type="hidden" name="user_to_remove" value="">
    <input type="hidden" name="activate_user" value="" />
    <input type="hidden" name="user_to_turs_modify" value="">
    <table cellspacing="3" cellpadding="3" border="0" style="border: 1px solid #C2C2CC; padding: 10px 20px;">
        <tr>
            <td colspan="6">LICZBA REKORDÓW: {$count}</td>
        </tr>
        <tr class="Header">
            <td>Uzytkownik</td>
            <td>Koalicja</td>
            <td>Aktywno¶æ</td>
            <td>IP</td>
            <td>Aktywne</td>
            <td>Opcje</td>
        </tr>
            {foreach from=$user_list item="user"}
            <tr style="cursor: pointer" onmouseover="this.style.backgroundColor='#E6EDFF'" onmouseout="this.style.backgroundColor=''">
                <td><i>{$user.login}</i></td>
                <td>&nbsp;&nbsp;&nbsp;{$user.koalicja|default:"---"}&nbsp;&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;{$user.ostatni_log}&nbsp;&nbsp;&nbsp;</td>
                <td align="right">{$user.ip|default:"---"}</td>
                <td align="right">{if $user.czy_aktywowane}
                						 	tak
                						{else}
                							{if $mode_activate}
                								<input type="button" name="activate" value="aktywuj" onclick="user_activate(this.form, '{$user.login}')"/>
                							{else}
                								nie
                							{/if}
                							
                						{/if}
                </td>
                <td align="right">
                    {if $user.property & $smarty.const.USERPROPERTY_BLOCKED}
                        <input type="button" name="unblock" value="Unban" onclick="user_unblock(this.form, '{$user.login}')">
                    {else}
                        <input type="button" name="block" value="Ban" onclick="user_block(this.form, '{$user.login}')">
                    {/if}
                	{if $mode_blockremove}
                    	<input type="button" name="remove" value="Remove" onclick="user_remove(this.form, '{$user.login}')">
                    {/if}
                    {if $mode_del_turs}
                        <input type="text" name="user_to_turs_modify_ile_tur" size="3" value="0">
                    	<input type="button" name="turs_modify" value="Usuñ tury" onclick="user_turs_modify(this.form, '{$user.login}')">
                    {/if}
                </td>
            </tr>
            {/foreach}
    </table>
    {/if}
    </form>
    {* END: Lista u¿ytkowników *}


    </td>
</tr>
</table>
{/strip}