{strip}
<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr style="height: 100%">


    {* BEGIN description *}
    <td style="width: 475px; background: url({$image_dir}index.knight2.jpg) no-repeat bottom right" valign="top">
        <p style="padding: 35px 0px; padding-left: 20px; padding-bottom: 5px">
        <img src="{$image_dir}index.K.gif" alt="K" title="Knight of Darkness" style="float: left; margin-right: 3px">
        night of Darkness (w skr�cie nazywana przez nas KoD) to tekstowa gra strategiczna rozgrywana turowo. Aby m�c gra� nie musisz nic instalowa�! Wystarczy tylko przegl�darka internetowa (najlepiej z obs�ug� JavaScript) i z ka�dego miejsca na ziemi, gdzie tylko masz dost�p do internetu, mo�esz rozwija� swoje kr�lestwo i toczy� walki z innymi graczami lub zawi�zywa� z nimi sojusze. Akcja gry jest osadzona w bli�ej nieokre�lonej przesz�o�ci - w czasach kiedy budowano pot�ne warowne zamki, kiedy ci�ko zbrojne armie wrogich sobie kr�lestw walczy�y o swoje miejsce i pozycj� na �wiecie. W�a�nie Ty stajesz si� w�adc� jednego z takich ksi�stw - Ty b�dziesz decydowa� o jego losach. To od Ciebie b�dzie zale�e� czy stanie si� niepokonan� pot�g� zar�wno gospodarcz� jak i militarn�, czy tylko ma�ym kr�lestwem wyzyskiwanym i rabowanym przez innych. Je�li jeste� got�w sprawdzi� si� jako w�adca to zapraszamy do gry.
        </p>
        <p style="padding-left: 20px; padding-right: 25px">
        Aby rozpocz�� gr� musisz najpierw za�o�y� swoje kr�lestwo poprzez rejestracj� i post�powa� zgodnie z instrukcjami. Przeczytaj r�wnie� nasz regulamin, gdy� dokonuj�c rejestracji przyjmujemy, �e zgadzasz si� z ka�dym jego punktem.
        </p>
        <p style="padding-left: 20px; padding-right: 25px">
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FKnight-of-Darkness%2F173076886041602&amp;width=210&amp;colorscheme=dark&amp;connections=0&amp;stream=0&amp;header=0&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:210px; height:80px;" allowTransparency="true"></iframe>
        <br>
    </td>
    <td style="width: 280px; background: url({$image_dir}index.knight1.jpg) no-repeat bottom" valign="top" align="right">
    {* END description *}


        {* BEGIN login form *}
        <form name="loginForm" action="{$loginform_action}" method="POST" style="padding-right: 10px; margin-top: 15px; margin-bottom: 0px">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="left" style="padding-right: 5px;  color: #9c7d26">Kr�lestwo</td>
                <td><input class="textField_1" type="text" name="login" style="width: 105px; margin-bottom: 5px"><br></td>
            </tr>
            <tr>
                <td align="left" style="padding-right: 5px; color: #9c7d26">Piecz��</td>
                <td><input class="textField_1" type="password" name="pass" style="width: 105px"><br></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                <input class="decoratedButton_1" type="submit" value="Zaloguj" style="margin-top: 5px">
                </td>
            </tr>
            </table>
        </form>
        {* END login form *}


        <img src="{$image_dir}index.form_line.jpg" alt="line" style="margin-top: 5px"><br>


        {* BEGIN players info *}
        <table cellspacing="0" cellpadding="0" border="0" style="font-size: 9px; color: #585149; margin-right: 10px">
            <tr>
                <td>Kr�lestwa:</td>
                <td>{$player_quantity.liczba_ksiestw}</td>
            </tr>
            <tr>
                <td>Zalogowanych:&nbsp;&nbsp;</td>
                <td>{$player_quantity.ile_zalogowanych}</td>
            </tr>
        </table>
        {* END players info *}

        {*<a href="http://www.firefox.pl" target="_blank"><img style="vertical-align: " src="{$image_dir}/banner/firefox.png" alt="FireFox" title="FireFox"></a>*}
    </td>
</tr>
</table>
{/strip}
