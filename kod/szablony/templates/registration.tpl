{strip}
{config_load file="conf" section="HEAD"}
{config_load file="conf" section="COLORS"}
{config_load file="conf" section="REXP"}


{* tlo dla niektorych fragmentow tabeli *}
{assign var="table_bg" value=" bgcolor='#333333'"}
<html>
<head>
{#meta_standard#}
{#link_css_mainstyle#}
{#link_js_formserv#}


<title>Knight of Darkness [rejestracja]</title>


{*--- style niektorych elementow ----------------------------------------------*}
<style>
{literal}
<!--
p, li     { font-size: 7pt; color: #AAAAAA; margin-left: 10px; margin-right: 10px; }
li        { margin-bottom: 20px; font-size: 8pt; }
.textfield{ width: 180px; }
-->
{/literal}
</style>
{*--- style niektorych elementow ----------------------------------------------*}


{* skrypt wstepnie sprawdzajacy poprawnosc dancyh w formularzu *}
<script type="text/javascript">
{/strip}
var rexp_login = {#rexp_login#};
var rexp_pass  = {#rexp_pass#};
var rexp_email = {#rexp_email#};
{literal}
function checkRegisterForm(data){
    if(data.login.value==''||data.pass.value==''||data.rpass.value==''||data.email.value==''){
        alert("Musisz wype³niæ wszystkie pola formularza");
        return false;
    }
    if(data.pass.value != data.rpass.value){
        alert("Wprowadzone has³a ró¿ni± siê od siebie");
        return false;
    }
    if(!rexp_login.test(data.login.value)){
        alert("Nieprawid³owy login");
        return false;
    }
    if(!rexp_pass.test(data.pass.value)){
        alert("Nieprawid³owe has³o");
        return false;
    }
    if(!rexp_email.test(data.email.value)){
        alert("Nieprawid³owy adres e-mail");
        return false;
    }
    if(!data.cRules.checked){
        alert("Musisz zapoznaæ siê i zaakceptowaæ regulamin");
        return false;
    }
    if(!data.cEmail.checked){
        alert("Do poprawnego funkcjonowania Twojego konta nizbêdna jest\nmo¿liwo¶æ wysy³ania przez serwis wiadomo¶ci e-mail\nna podany podczes rejestracji adres");
	return false;
    }
    return true;
}
{/literal}
{strip}
</script>


</head>
<body onLoad="document.newUserData.login.focus();">

{if $error != ""} <p align='center' style='font-size: 9pt; color: red;'>{$error}</p> {/if}
<center>


{*--- formularz rejestracji --------------------------------------------------*}
<form name="newUserData" method="POST" action="{$form_action}" onSubmit="return checkRegisterForm(this);">
<table border="0" width="599" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16" height="28"><img border="0" src="img/registerwindow_part01.jpg" width="16" height="28"></td>
    <td width="260" height="28" background="img/registerwindow_part08.jpg"></td>
    <td width="47" height="28"><img border="0" src="img/registerwindow_part02.jpg" width="47" height="28"></td>
    <td width="260" height="28" background="img/registerwindow_part08.jpg"></td>
    <td width="16" height="28"><img border="0" src="img/registerwindow_part03.jpg" width="16" height="28"></td>
  </tr>
  <tr>
    <td colspan="5">
      <table border="0" width="599" cellspacing="0" cellpadding="0">
        <tr>
          <td width="16" height="50"></td>
          <td width="567" {$table_bg} valign="top" colspan="3" height="50"><br><font color="#A8977B">:</font><b>:&nbsp;&nbsp;Wype³nij&nbsp;formularz&nbsp;aby&nbsp;stworzyæ&nbsp;w³asne&nbsp;ksiêstwo</b></td>
          <td width="16" height="50"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg} valign="top"><font color="#A8977B">:</font><b>:&nbsp;&nbsp;login</b></td>
          <td width="180" {$table_bg} valign="top">
            <input class="textfield" type="text" name="login" value="{$login|default:""}" onFocus="setBackground(this, '{#textfield_activate_color#}');" onBlur="setBackground(this, 'restore');">
          </td>
          <td width="307" {$table_bg}><p>Wpisz tutaj unikaln± nazwê swojego
             &nbsp;ksiêstwa. Mo¿esz u¿ywaæ znaków alfanumerycznych i znaku podkre¶lenia.
             &nbsp;Minimalna d³ugo¶æ nazwy to 3 znaki, a maksymalna 20.</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg} valign="top"><font color="#A8977B">:</font><b>:&nbsp;&nbsp;has³o</b></td>
          <td width="180" {$table_bg} valign="top">
            <input class="textfield" type="password" name="pass" onFocus="setBackground(this, '{#textfield_activate_color#}');" onBlur="setBackground(this, 'restore');">
          </td>
          <td width="307" {$table_bg}><p>Has³o, które bêdzie
            &nbsp;potrzebne do zalogowania. Równie¿ mo¿esz u¿ywaæ znaków
            &nbsp;alfanumerycznych i podkre¶lenia. D³ugo¶æ has³a nie mo¿e byæ
            &nbsp;mniejsza ni¿ 5 i wiêksza ni¿ 20 znaków.</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg} valign="top"></td>
          <td width="180" {$table_bg} valign="top"><input class="textfield" type="password" name="rpass" onFocus="setBackground(this, '{#textfield_activate_color#}');" onBlur="setBackground(this, 'restore');"></td>
          <td width="307" {$table_bg}><p>Tutaj powtórz powy¿ej wpisane has³o.</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg} valign="top"><font color="#A8977B">:</font><b>:&nbsp;&nbsp;e-mail</b></td>
          <td width="180" {$table_bg} valign="top">
            <input class="textfield" type="text" name="email" value="{$email|default:""}" onFocus="setBackground(this, '{#textfield_activate_color#}');" onBlur="setBackground(this, 'restore');">
          </td>
          <td width="307" {$table_bg}><p>Wpisz swój aktualny adres
            &nbsp;e-mail. Jest on konieczny do rejestracji i poprawnego dzia³ania
            &nbsp;konta u¿ytkownika. Po zakoñczeniu rejestracji zostanie wys³ana
            &nbsp;wiadomo¶æ aktywuj±ca Twoje konto.</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg} valign="top"></td>
          <td width="180" {$table_bg} valign="top" align="right"><input type="checkbox" name="cRules" value="ON"></td>
          <td width="307" {$table_bg}><p>Przeczyta³em i akceptujê poni¿szy regulamin</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg} valign="top" align="right"><input type="checkbox" name="cEmail" value="ON"></td>
          <td width="307" {$table_bg}><p>Wyra¿am
            &nbsp;zgodê na wysy³anie na podany adres e-mail wiadomo¶ci niezbêdnych
            &nbsp;do poprawnego funkcjonowania konta u¿ytkownika oraz wiadomo¶ci o
            &nbsp;charakterze reklamowym (maksymalnie jedna taka wiadomo¶æ w
            &nbsp;tygodniu).</p></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td width="16"></td>
          <td width="80" {$table_bg}></td>
          <td width="180" {$table_bg}></td>
          <td width="307" {$table_bg}>&nbsp;</td>
          <td width="16"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td colspan="5">
      <table border="0" width="599" cellspacing="0" cellpadding="0" height="71">
        <tr>
          <td width="16" height="43"></td>
          <td width="513" height="43" {$table_bg}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" value="  Zatwierd¼  ">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="reset" value="  Wyczy¶æ  "></td>
          <td width="54" rowspan="2" height="71" valign="bottom" {$table_bg}><img border="0" src="img/registerwindow_part06.jpg"></td>
          <td width="16" height="43"></td>
        </tr>
        <tr>
          <td width="16"  height="28"><img border="0" src="img/registerwindow_part04.jpg"></td>
          <td width="513" height="28" background="img/registerwindow_part07.jpg"></td>
          <td width="16"  height="28"><img border="0" src="img/registerwindow_part05.jpg"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</form>
{*--- formularz rejestracji --------------------------------------------------*}



</center>
<br>


{*--- tabela dla regulaminu --------------------------------------------------*}
<center>
<table border="0" width="599" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16"  height="28"><img border="0" src="img/registerwindow_part01.jpg" width="16" height="28"></td>
    <td width="567" height="28" background="img/registerwindow_part08.jpg" valign="top" align="center"><b>Regulamin</b></td>
    <td width="16"  height="28"><img border="0" src="img/registerwindow_part03.jpg" width="16" height="28"></td>
  </tr>
  <tr>
    <td></td>
    <td {$table_bg}><br>
    {include file="rules.tpl"}
    </td>
    <td></td>
  </tr>
  <tr>
    <td height="28" width="16"><img border="0" src="img/registerwindow_part04.jpg"></td>
    <td height="28" width="567" background="img/registerwindow_part07.jpg"></td>
    <td height="28" width="16"><img border="0" src="img/registerwindow_part05.jpg"></td>
  </tr>
</table>
</center>
{*--- tabela dla regulaminu --------------------------------------------------*}


</body>
</html>
{/strip}

