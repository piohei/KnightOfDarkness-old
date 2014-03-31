{strip}
<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr style="height: 100%">


    {* BEGIN description *}
    <td style="width: 475px; background: url({$image_dir}index.knight2.jpg) no-repeat bottom right" valign="top">
        <p style="padding: 35px 0px; padding-left: 20px; padding-bottom: 5px">
        <img src="{$image_dir}index.K.gif" alt="K" title="Knight of Darkness" style="float: left; margin-right: 3px">
        night of Darkness (w skrócie nazywana przez nas KoD) to tekstowa gra strategiczna rozgrywana turowo. Aby móc graæ nie musisz nic instalowaæ! Wystarczy tylko przegl±darka internetowa (najlepiej z obs³ug± JavaScript) i z ka¿dego miejsca na ziemi, gdzie tylko masz dostêp do internetu, mo¿esz rozwijaæ swoje królestwo i toczyæ walki z innymi graczami lub zawi±zywaæ z nimi sojusze. Akcja gry jest osadzona w bli¿ej nieokre¶lonej przesz³o¶ci - w czasach kiedy budowano potê¿ne warowne zamki, kiedy ciê¿ko zbrojne armie wrogich sobie królestw walczy³y o swoje miejsce i pozycjê na ¶wiecie. W³a¶nie Ty stajesz siê w³adc± jednego z takich ksiêstw - Ty bêdziesz decydowa³ o jego losach. To od Ciebie bêdzie zale¿eæ czy stanie siê niepokonan± potêg± zarówno gospodarcz± jak i militarn±, czy tylko ma³ym królestwem wyzyskiwanym i rabowanym przez innych. Je¶li jeste¶ gotów sprawdziæ siê jako w³adca to zapraszamy do gry.
        </p>
        <p style="padding-left: 20px; padding-right: 25px">
        Aby rozpocz±æ grê musisz najpierw za³o¿yæ swoje królestwo poprzez rejestracjê i postêpowaæ zgodnie z instrukcjami. Przeczytaj równie¿ nasz regulamin, gdy¿ dokonuj±c rejestracji przyjmujemy, ¿e zgadzasz siê z ka¿dym jego punktem.
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
                <td align="left" style="padding-right: 5px;  color: #9c7d26">Królestwo</td>
                <td><input class="textField_1" type="text" name="login" style="width: 105px; margin-bottom: 5px"><br></td>
            </tr>
            <tr>
                <td align="left" style="padding-right: 5px; color: #9c7d26">Pieczêæ</td>
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
                <td>Królestwa:</td>
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
