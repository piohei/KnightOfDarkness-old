{strip}
<table cellpadding="0" cellspacing="0" border="0" style="margin: 10px 0px; color: #d29e70;">


<tr>
    <td style="width: 92px" align="left" valign="top"><img src="{$image_dir}sms.money.gif" alt="" title="Jak do³adowaæ Konto KoD"></td>
    <td>
        <b>Jak do³adowaæ Konto KoD</b><br>
        Konto KoD mo¿na do³adowaæ wysy³aj±c SMS o podwy¿szonej warto¶ci. Obecnie dostêpne s± SMSy w cenie 5 PLN oraz 3 PLN (podane ceny s± cenami netto), które zwiêkszaj± ¶rodki na Koncie KoD odpowiednio o 5 PLN oraz 3 PLN. Zak³ada siê, ¿e u¿ytkownik korzystajacy z tej us³ugi zapozna³ siê i w pe³ni akceptuje jej <a href="{$SCRIPT_NAME}?mode=rules" style="color: #FF0000">regulamin</a>.
    </td>
</tr>
<tr style="height: 40px"><td colspan="2">&nbsp;</td></tr>


<tr>
    <td align="left" valign="top"><img src="{$image_dir}sms.phone.gif" alt="" title="SMS Premium"></td>
    <td>
        <b>SMS Premium</b><br>
        Aby do³adowaæ Konto KoD wy¶lij odpowiedniego SMSa:<br>
        <b>+ 5 PLN</b>, SMS na numer 7516 (koszt 5 PLN + VAT) o tre¶ci: <b>MP&nbsp;4603</b><br>
        <b>+ 3 PLN</b>, SMS na numer 7316 (koszt 3 PLN + VAT) o tre¶ci: <b>MP&nbsp;4604</b><br>
        Po chwili otrzymasz SMSa zwrotnego z kodem, który nale¿y wpisaæ i zatwierdziæ w poni¿szym formularzu.<br>

        <form action="{$SCRIPT_NAME}?mode=smspremium" method="POST" style="margin-top: 10px">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="width: 150px"><input type="text" class="textFieldType1" name="charge_code" value="" style="width: 150px"></td>
            <td style="width: 27px"><input type="image" src="{$image_dir}sms.accept.gif" name="charge_code_submit" value="charge" title="Wy¶lij kod"></td>
        </tr>
        </table>
        </form>
    </td>
</tr>
<tr style="height: 40px"><td colspan="2">&nbsp;</td></tr>


<tr>
    <td colspan="2">

    <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; color: #d29e70;">
        <tr>
            <td style="width: 160px" align="left" valign="top"><a href="http://kody.wapacz.pl"><img src="{$image_dir}wapacz.gif" alt="WAPACZ" title="kody.wapacz.pl"></a></td>
            <td>
                System mikrop³atno¶ci powsta³ przy wspó³pracy z <a href="http://kody.wapacz.pl">kody.wapacz.pl</a>. Wszelkie reklamacje nale¿y kierowaæ pod adres reklamacje@wapacz.pl.
            </td>
        </tr>
    </table>

    </td>
</tr>
</table>
{/strip}