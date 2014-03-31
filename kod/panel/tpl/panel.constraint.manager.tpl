<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr>
    <td>

    {* BEGIN Szukanie gracza *}
    <form action="index.php?mode={$smarty.const.MODE_CONSTRAINT_MANAGER}&amp;action=search" method="POST">
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td colspan="3">Szukaj gracza (% - dowolny ci±g znaków, _ - dowolny znak)</td>
    </tr>
    <tr>
        <td style="width: 120px; padding-left: 10px">Nazwa&nbsp;u¿ytkownika:&nbsp;</td>
        <td style="width: 150px"><input type="text" name="keyword" value="" style="width: 140px"></td>
        <td><input type="submit" name="search" value="OK"></td>
    </tr>
    </table>
    </form>
    {* END Szukanie gracza *}

    </td>
<tr>

<tr style="height: 30px"><td>&nbsp;</td></tr>

{if $user_list}
<tr>
    <td>Znaleziono: <b>{$record_count}</b> rekordów</td>
</tr>
{/if}
<tr>
    <td>

    {* BEGIN Lista u¿ytkowników *}
    {if $user_list}
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td>Nazwa u¿ytkownika</td>
        <td>Data rejestracji</td>
        <td>Data aktywno¶ci</td>
        <td align="right">IP</td>
        <td align="right">Aktywne</td>
    </tr>
    <tr>
        {foreach from=$user_list item="user"}
        <tr style="cursor: pointer" onmouseover="this.style.backgroundColor='#E6EDFF'" onmouseout="this.style.backgroundColor=''" onclick="openWindow('index.php?mode={$smarty.const.MODE_CONSTRAINT_MANAGER}&amp;user={$user.login}')">
            <td style="padding-left: 10px"><i>{$user.login}</i></td>
            <td>&nbsp;&nbsp;&nbsp;{$user.data_zalozenia}&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;{$user.ostatni_log}&nbsp;&nbsp;&nbsp;</td>
            <td align="right">{$user.ip}</td>
            <td style="padding-right: 10px" align="right">
                {if $user.czy_aktywowane}
                    <span class="GreenText">TAK</span>
                {else}
                    <span class="RedText">NIE</span>
                {/if}
            </td>
        </tr>
        {/foreach}
    </tr>
    </table>
    {/if}
    {* END Lista u¿ytkowników *}

    </td>
</tr>
</table>