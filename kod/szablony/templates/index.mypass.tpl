{strip}
<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%; background: url({$image_dir}index.sword.jpg) no-repeat left top">
<tr><td align="center" valign="middle">

{capture name="message"}
    <p style="margin: 30px 15px 0px 15px">
        <img src="{$image_dir}letter.w.gif" alt="W">pisz adres e-mail na kt�ry zosta�a dokonana rejestracja kr�lestwa. Nie mo�emy odzyska� Twojego aktualnego has�a, dlatego te� zostanie wygenerowane nowe i zostanie wys�ane na podan� skrzynk� e-mail. Nast�pnie aby ustawi� swoje has�o, po zalogowaniu si�, nale�y skorzysta� z opcji "Zmiana has�a" w profilu kr�lestwa.
    </p>
    <form name="myPass" action="{$form_action}" method="POST" style="margin: 0; padding: 0">
    <p style="text-align: right; margin: 30px 30px 30px 30px; color: #9C7D26">
        adres e-mail &nbsp;&nbsp;&nbsp;<input name="email" class="textField_1" type="text" style="width: 150px"><br>
        <input type="submit" class="decoratedButton_1" value="Wy�lij" style="margin-top: 5px">
    </p>
    </form>
{/capture}
{include file="index.messagebox.tpl"}
        
</td></tr>
</table>
{/strip}