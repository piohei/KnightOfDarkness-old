{strip}
<table cellpadding="0" cellspacing="0" border="0" style="margin: 10px 0px; color: #d29e70;">


<tr>
    <td style="width: 92px" align="left" valign="top"><img src="{$image_dir}sms.money.gif" alt="" title="Jak do�adowa� Konto KoD"></td>
    <td>
        <b>Jak do�adowa� Konto KoD</b><br>
        Konto KoD mo�na do�adowa� wysy�aj�c SMS o podwy�szonej warto�ci. Obecnie dost�pne s� SMSy w cenie 5 PLN oraz 3 PLN (podane ceny s� cenami netto), kt�re zwi�kszaj� �rodki na Koncie KoD odpowiednio o 5 PLN oraz 3 PLN. Zak�ada si�, �e u�ytkownik korzystajacy z tej us�ugi zapozna� si� i w pe�ni akceptuje jej <a href="{$SCRIPT_NAME}?mode=rules" style="color: #FF0000">regulamin</a>.
    </td>
</tr>
<tr style="height: 40px"><td colspan="2">&nbsp;</td></tr>


<tr>
    <td align="left" valign="top"><img src="{$image_dir}sms.phone.gif" alt="" title="SMS Premium"></td>
    <td>
        <b>SMS Premium</b><br>
        Aby do�adowa� Konto KoD wy�lij odpowiedniego SMSa:<br>
        <b>+ 5 PLN</b>, SMS na numer 7516 (koszt 5 PLN + VAT) o tre�ci: <b>MP&nbsp;4603</b><br>
        <b>+ 3 PLN</b>, SMS na numer 7316 (koszt 3 PLN + VAT) o tre�ci: <b>MP&nbsp;4604</b><br>
        Po chwili otrzymasz SMSa zwrotnego z kodem, kt�ry nale�y wpisa� i zatwierdzi� w poni�szym formularzu.<br>

        <form action="{$SCRIPT_NAME}?mode=smspremium" method="POST" style="margin-top: 10px">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td style="width: 150px"><input type="text" class="textFieldType1" name="charge_code" value="" style="width: 150px"></td>
            <td style="width: 27px"><input type="image" src="{$image_dir}sms.accept.gif" name="charge_code_submit" value="charge" title="Wy�lij kod"></td>
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
                System mikrop�atno�ci powsta� przy wsp�pracy z <a href="http://kody.wapacz.pl">kody.wapacz.pl</a>. Wszelkie reklamacje nale�y kierowa� pod adres reklamacje@wapacz.pl.
            </td>
        </tr>
    </table>

    </td>
</tr>
</table>
{/strip}