<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">

<tr>
    <td>
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td>Kod us³ugi</td>
        <td>Warto¶æ kodu SMS</td>
        <td>Liczba w bazie danych</td>
    </tr>
    {if not empty($sms_stat)}
        {foreach from=$sms_stat item="stat_row"}
        <tr>
            <td>{$stat_row.service_code}</td>
            <td>{$stat_row.value} PLN</td>
            <td>{$stat_row.count}</td>
        </tr>
        {/foreach}
    {else}
    <tr style="height: 50px">
        <td colspan="3" valign="middle" align="center" style="color: #FF0000">Nie ma ¿adnego aktywnego kodu sms</td>
    </tr>
    {/if}
    </table>
    </td>
</tr>

<tr style="height: 30px">
    <td>&nbsp;</td>
</tr>

<tr>
    <td>
    <form action="index.php?mode={$smarty.const.MODE_SMS}" method="POST">
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td>Dodawanie kodów sms <span style="font-weight: normal">(wpisz/wklej je w poni¿sze pole, ka¿dy kod w osobnej linii)</span></td>
    </tr>
    <tr style="height: 200px">
        <td>
        <textarea name="new_codes" style="border: 0; width: 100%; height: 100%"></textarea>
        </td>
    </tr>
    <tr class="Foot">
        <td align="right">
          Kod us³ugi (tre¶æ SMSa): <input type="text" name="service_code">&nbsp;
          Warto¶æ dodawanych kodów (PLN): <input type="text" name="new_codes_value">&nbsp;
          <input type="submit" name="new_codes_add" value="Wy¶lij"></td>
    </tr>
    </table>
    </form>
    </td>
</tr>

</table>