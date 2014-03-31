{strip}

{if $messagebox != ""}
    <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%; background: url({$image_dir}index.sword.jpg) no-repeat left top">
    <tr><td align="center" valign="middle">
    
    {capture name="message"}
        <p style="margin: 0px 15px; text-align: center; font-size: 12px">
        {foreach item="line" from=$messagebox}
            {$line}<br>
        {/foreach}
        </p>
    {/capture}
    
    {* wyswietla zawartosc $smarty.capture.message *}
    {include file="index.messagebox.tpl"}
    
    </td></tr>
    </table>

{else}
    {* BEGIN javascript *}
    {literal}
    <script type="text/javascript">
    var rexp_login = /^[a-z0-9_]{3,20}$/i;
    var rexp_pass = /^[a-z0-9_]{5,20}$/i;
    var rexp_email = /^[^@]+@([a-z0-9_-]+\.)+[a-z]{2,4}$/i;
    function checkForm(data){
        if(data.login.value=='' || data.pass.value=='' || data.rpass.value=='' || data.email.value==''){
            alert("Do za³o¿enia królestwa konieczne jest wype³nienie wszystkich pól formularza.");
            return false;
        }
        if(data.pass.value != data.rpass.value){
            alert("Uwaga! Wprowadzone has³a ró¿ni± siê od siebie!\nWprowad¼ je ponownie.");
            return false;
        }
        if(!rexp_login.test(data.login.value)){
            alert("Podana nazwa królestwa jest niedopuszczalna.\nPrzeczytaj uwa¿nie opis pól formularza i wype³nij je ponownie.");
            return false;
        }
        if(!rexp_pass.test(data.pass.value)){
            alert("Podane has³o jest niedopuszczlane.\nPrzeczytaj uwa¿nie opis pól formularza i wype³nij je ponownie.");
            return false;
        }
        if(!rexp_email.test(data.email.value)){
            alert("Podany adres e-mail jest niepoprawny.\nSprawd¼ czy nie pope³ni³e¶ b³êdu lub podaj inny adres e-mail.");
            return false;
        }
        cookieSaveData();
        return true;
    }
    var cookieName = new String("formData");
    function cookieLoadData(){
        var form = document.forms['registrationForm'];
        if((i = document.cookie.indexOf(cookieName)) != -1){
            j = document.cookie.indexOf(";", i);
            if(j == -1){
                data = document.cookie.substring(i+cookieName.length+1);
            }else
                data = document.cookie.substring(i+cookieName.length+1, j);
            if(data != ""){
                data = unescape(data);
                data = data.split("#|#");
                form.login.value = data[0];
                form.email.value = data[1];
            }
        }
    }
    function cookieSaveData(){
        form = document.forms['registrationForm'];
        var data = form.login.value.toString()+"#|#"+form.email.value.toString();
        if(data != ""){
            document.cookie = cookieName +"="+ escape(data) + ";";
        }
    }
    function cookieTruncate(){
        if((i = document.cookie.indexOf(cookieName)) != -1){
            document.cookie = cookieName +"=";
        }
    }
    </script>
    {/literal}
    {* END javascript *}


    <form name="registrationForm" action="{$form_action}" method="POST" style="margin: 0; padding: 0; width: 100%; height: 100%" onSubmit="return checkForm(this)">
    <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%; background: url({$image_dir}index.sword.jpg) no-repeat left top">
    <tr style="height: 20px">
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 30px">
        <td valign="top" style="width: 80px; color: #9c7d26; padding-left: 70px;">Królestwo</td>
        <td valign="top" align="right" style="width: 160px;">
            <input name="login" class="textField_1" type="text" value="{$smarty.post.login}" style="width: 130px">
        </td>
        <td>
            <p style="margin: 0px 45px 20px 15px">
            <img src="{$image_dir}letter.w.gif" alt="w">
            pisz tutaj nazwê królestwa. Mo¿esz u¿ywaæ liter, cyfr oraz znaku podkre¶lenia. Twoja nazwa nie mo¿e mieæ mniej ni¿ 3 znaki i wiêcej ni¿ 20.
            </p>
        </td>
    </tr>
    <tr style="height: 30px">
        <td valign="top" style="width: 80px; color: #9c7d26; padding-left: 70px;">Pieczêæ</td>
        <td valign="top" align="right" style="width: 160px;">
            <input name="pass" class="textField_1" type="password" style="width: 130px">
        </td>
        <td>
            <p style="margin: 0px 45px 20px 15px">
            <img src="{$image_dir}letter.h.gif" alt="w">
            as³o, które bêdzie Ci potrzebne do zalogowania siê. W tym polu mo¿esz u¿yæ liter, cyfr oraz znaku podkre¶lenia. D³ugo¶æ wprowadzonego has³a nie mo¿e mieæ mniej ni¿ 5 i wiêksza ni¿ 20 znaków.
            </p>
        </td>
    </tr>
    <tr style="height: 30px">
        <td valign="top" style="width: 80px; color: #9c7d26; padding-left: 70px;">Pieczêæ</td>
        <td valign="top" align="right" style="width: 160px;">
            <input name="rpass" class="textField_1" type="password" style="width: 130px">
        </td>
        <td>
            <p style="margin: 0px 45px 20px 15px">
            <img src="{$image_dir}letter.w.gif" alt="w">
            &nbsp;celu unikniêcia pomy³ki wprowad¼ ponownie swoje has³o.
            </p>
        </td>
    </tr>
    <tr style="height: 30px">
        <td valign="top" style="width: 80px; color: #9c7d26; padding-left: 70px;">Adres e-mail</td>
        <td valign="top" align="right" style="width: 160px;">
            <input name="email" class="textField_1" value="{$smarty.post.email}" type="text" style="width: 130px">
        </td>
      <td>
            <p style="margin: 0px 45px 20px 15px">
            <img src="{$image_dir}letter.w.gif" alt="w">
            ysy³aj±c ten formularz uznajemy, ¿e przeczyta³e¶ i w pe³ni akceptujesz nasz <a href="{$smarty.server.SCRIPT_NAME}?section=rules" title="Regulamin Knight of Darkness" onClick="cookieSaveData()">regulamin</a> oraz zgadzasz siê na wysy³anie na podany adres e-mail wiadomo¶ci niezbêdnych do poprawnego funkcjonowania konta u¿ytkwnika oraz wiadomo¶ci o charakterze reklamowym.
            </p>
        </td>
    </tr>
        <tr style="height: 30px">
      <!--  <td valign="top" style="width: 100px; color: #9c7d26; padding-left: 70px;">
            <img src="{$root_dir}code/" alt="kod" title="Kod rejestracyjny">
        </td>
        <td valign="top" align="right" style="width: 160px;">
            <input name="code" class="textField_1" value="" type="text" style="width: 130px;">
        </td>
        <td>
            <p style="margin: 0px 45px 20px 15px">
            <img src="{$image_dir}letter.w.gif" alt="w">
            pisz wygenerowany kod rejestracyjny znajduj±cy siê obok, a nastêpnie wy¶lij formularz.
            </p>
        </td>-->
    </tr>
    <tr style="height: 30px">
        <td valign="top" style="width: 100px; color: #9c7d26; padding-left: 50px;">&nbsp;</td>
        <td valign="top" align="right" style="width: 160px;">&nbsp;</td>
        <td align="right" valign="top">
            <input class="decoratedButton_1" type="reset" value="Wyczy¶æ pola" style="margin-right: 25px" onClick="cookieTruncate()">
            <input class="decoratedButton_1" type="submit" name="button" value="Wy¶lij" style="margin-right: 45px">
        </td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    </table>
    </form>
{/if}

{/strip}
