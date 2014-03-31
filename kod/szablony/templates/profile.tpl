{strip}
{include file="main_top.tpl" tytul="Profil w³adcy"}
    <table cellspacing="2" cellpadding="0" border="0" style="width: 100%">


    <form action="{$smarty.server.SCRIPT_NAME}" method="POST" style="margin: 0; padding: 0">
    {* BEGIN: Konto Kod *}
    <tr>
        <td class="header" style="padding: 0px 5px" colspan="2">
        Konto KoD
        </td>
    </tr>
    <tr>
        <td class="row1" colspan="2">
        <table cellspacing="0" cellpadding="0" border="0" style="height: 20px; margin: 3px 0; width: 100%; color: #9a8e76; font-size: 11px">
        <tr>
            <td style="width: 33%; border: 1px solid #4d473b" valign="middle">
                <img src="{$image_dir}ico.coins.gif" alt=" " title="Saldo Twojego konta" style="margin-right: 5px;floar: right; vertical-align: middle">
                Saldo: <b>{$profile_data.money}</b>z³
            </td>
            <td style="width: 3px"></td>
            <td style="width: 33%; border: 1px solid #4d473b">
                <img src="{$image_dir}ico.smspremium.gif" alt=" " title="Do³adowanie konta" style="margin-right: 5px;floar: right; vertical-align: middle">
                Do³adowanie
            </td>
            <td style="width: 3px"></td>
            <td style="width: 33%; border: 1px solid #4d473b">
                <img src="{$image_dir}ico.cart.gif" alt=" " title="Zakup rozszerzeñ" style="margin-right: 5px; floar: right; vertical-align: middle">
                Zakup rozszerzeñ
            </td>
        </tr>
        </table>
        </td>
    </tr>
    {* END: Konto Kod *}


    <tr>
        <td class="header" style="padding: 0px 5px" colspan="2">
         Dane osobowe
        </td>
    </tr>

    {if $_mesg.err != ""}
    <tr>
        <td class="row1" style="padding: 5px 5px; color: #FF0000; font-size: 11px" colspan="2">
        {foreach from=$_mesg.err item="error"}
            {$error}.<br>
        {/foreach}
        </td>
    </tr>
    {/if}
    {if $_mesg.info != ""}
    <tr>
        <td class="row1" style="padding: 5px 5px; color: #13A000; font-size: 11px" colspan="2">
        {foreach from=$_mesg.info item="info"}
            {$info}.<br>
        {/foreach}
        </td>
    </tr>
    {/if}

    <tr class="row2" style="height: 25px">
        <td style="padding: 0px 5px">Imiê</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[name]" value="{$profile_data.imie}">
        </td>
    </tr>
    <tr class="row2" style="height: 25px">
        <td style="padding: 0px 5px">Nazwisko</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[surname]" value="{$profile_data.nazwisko}">
        </td>
    </tr>
    <tr class="row2" style="height: 25px">
        <td style="padding: 0px 5px">Miasto</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[city]" value="{$profile_data.miasto}">
        </td>
    </tr>
    <tr class="row2" style="height: 25px">
        <td style="padding: 0px 5px">Kraj</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[country]" value="{$profile_data.kraj}">
        </td>
    </tr>
    <tr class="row2" style="height: 25px">
        <td style="padding: 0px 5px">Data urodzenia</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[birthday]" value="{$profile_data.wiek}">
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Data rejestracji</td>
        <td style="padding: 0px 5px">
            {$profile_data.data_zalozenia}
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">E-mail</td>
        <td style="padding: 0px 5px">
            {$profile_data.mail}
        </td>
    </tr>
 	<tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Ilo¶æ obrazków</td>
        <td style="padding: 0px 5px">
            {$ile_obrazkow}  <a href="" onclick="openWindow('{$root_dir}upload/upload.php', 500, 400, 'Pomoc')">(wgraj)</a>
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
            <input type="checkbox" name="data[visible]" value="on" {if $profile_data.ujawnic == "true"}checked{/if}> Zgadzam siê aby moje dane by³y widoczne przez innych graczy
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
            <input type="checkbox" name="data[help]" value="on" {if $profile_data.pomoc == "true"}checked{/if}> Wy¶wietlaj pomoc podrêczn±
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
            <input type="submit" name="basic_modify" value="Zapisz" class="button">
        </td>
    </tr>
    </form>
    <form action="{$smarty.server.SCRIPT_NAME}" method="POST" style="margin: 0; padding: 0">
    <tr>
        <td class="header" style="padding: 0px 5px" colspan="2">
        Opcje
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Nowy e-mail<br> <tt style="font-size:9px">(Funkcja nieaktywna z powodów bezpieczeñstwa)</tt></td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[email]" value="" disabled>
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Nowe has³o</td>
        <td style="padding: 0px 5px">
            <input type="password" class="textfield" name="data[pass]" value="">
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
         <input type="checkbox" name="del_account" value="on"> Usuñ konto (<u>nieodwracalnie</u> usuwa konto z gry)
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
            <input type="submit" name="advance_modify" value="Zapisz" class="button"> wpisz aktualne has³o <input type="password" name="pass" class="textfield">
        </td>
    </tr>
    </form>
{if $CFG->WLACZ_ZASTEPSTWA}    
    <form action="{$smarty.server.SCRIPT_NAME}" method="POST" style="margin: 0; padding: 0">
    <tr>
        <td class="header" style="padding: 0px 5px" colspan="2">
        Zastêpstwo
        </td>
    </tr>
    {if count($zastepstwo) == 0}
    <tr class="row1" style="height: 25px">
        <td colspan="2" style="padding: 0px 5px">
        Zastêpstwo mo¿ne trwac maksymalnie {$CFG->max_zastepstwo} dni.<br>
        Nie mo¿na mieæ zastêpstw czê¶ciej ni¿ co {$CFG->odstep_miedzy_kolejnymi_zastepstwami} dni.<br>
        Mo¿na mieæ tylko jedno zaplanowane na przysz³o¶æ zastêpstwo.<br>
        <b>W czasie zastêpstwa osoba zastêpowana nie mo¿e logowaæ siê na swoje konto.</b><br>
        <b><u>Ustawienie zastêpstwa jest nieodwracalne</u></b>
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Kto ma Ciê zastêpowaæ</td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[kto_zastepuje]" value="{$data.kto_zastepuje}">
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Od kiedy (pozostaw puste jak od teraz)<br><tt style="font-size:9px">(Format YYYY-MM-DD GG:MM:SS)</tt></td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[od_kiedy_zastepuje]" value="{$data.od_kiedy_zastepuje}">
        </td>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px">Do kiedy (maksymalnie 14 dni)<br><tt style="font-size:9px">(Format YYYY-MM-DD GG:MM:SS)</tt></td>
        <td style="padding: 0px 5px">
            <input type="text" class="textfield" name="data[do_kiedy_zastepuje]" value="{$data.do_kiedy_zastepuje}">
        </td>
    </tr>
    </tr>
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
            <input type="submit" name="addZastepstwo" value="Zapisz" class="button"> wpisz aktualne has³o <input type="password" name="pass" class="textfield">
        </td>
    </tr>
    {else}
        <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
        Aktualnie masz czynne zastêpstwo
        </td>
    </tr>
    {/if}
    {if count($zastepstwa) > 0 }
    <tr>
        <td class="header" style="padding: 0px 5px" colspan="2">
        Lista Twoich zastêpstw ({$zastepstwa_count})
        </td>
    </tr>
    
    <tr class="row1" style="height: 25px">
        <td style="padding: 0px 5px" colspan="2">
		    <table cellspacing="2" cellpadding="0" border="0" style="width: 100%">
    		<tr class="row1" style="height: 25px">
        		<td style="padding: 0px 5px">Kto</td>
        		<td style="padding: 0px 5px">Kogo</td>
        		<td style="padding: 0px 5px">Od</td>
        		<td style="padding: 0px 5px">Do</td>
        		<td style="padding: 0px 5px"></td>
    		</tr>
		    {foreach from=$zastepstwa item="zas"}
		    {if $zas.bedzie_czynne }
 	   		<tr class="row1" style="height: 25px;color: orange">
		    {elseif $zas.czynne }
    		<tr class="row1" style="height: 25px;color: green">
		    {elseif ! $zas.czynne }
    		<tr class="row1" style="height: 25px;color: red">
		    {else}
    		<tr class="row1" style="height: 25px;">
		    {/if}
        		<td style="padding: 0px 5px">{$zas.kto}</td>
        		<td style="padding: 0px 5px">{$zas.kogo}</td>
        		<td style="padding: 0px 5px">{$zas.od}</td>
        		<td style="padding: 0px 5px">{$zas.do}</td>
			    {if $zas.czynne || $zas.bedzie_czynne }
        		<td style="padding: 0px 5px"><a href="{$smarty.server.SCRIPT_NAME}?zakonczZastepstwo={$zas.id_zastepstwa}">Zakoñcz teraz</a></td>
        		{else}
        		<td style="padding: 0px 5px"></td>
        		{/if}
    		</tr>
        	{/foreach}
    		</table>
        </td>
    </tr>
    {/if}
    </form>
{/if}
    </table>
{include file="main_bottom.tpl"}
{/strip}
