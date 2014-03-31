{strip}


{* szerokosc tabel z danymi wewnatrz lewego panela *}
{assign var="data_table_width" value="195"}

{* poczatek przycisku tytulowego *}
{capture assign="begin_titlebutton"}
<tr><td colspan="2" height="2px"></td></tr>
<tr>
    <td width="33" height="26"><img src="{$image_dir}left_panel_part01.jpg"></td>
    <td width="198" height="26" background="{$image_dir}left_panel_part02_bg.jpg" class="button_title">
{/capture}

{* koniec przycisku tytulowego *}
{capture assign="end_titlebutton"}
    </td>
</tr>
<tr>
    <td colspan="2" style="width: 231px; height: 3px" background="{$image_dir}left_panel_main_bg_shadow.jpg"></td>
</tr>
{/capture}


{*+ lewy panel z danymi *}
<table border="0" width="{$left_panel_width}" cellspacing="0" cellpadding="0" background="{$image_dir}left_panel_main_bg.jpg">

<tr>
    <td colspan="3" align="center">
        <table border="0" width="100%">
        <tr>
            <td colspan="4" align="right" style="font-size: 9px; font-weight: italic; letter-spacing: 2px; color: #000000">{$kingdomInfo.rank}</td>
        </tr>
        <tr>
            <td colspan="4" align="right" style="font-size: 11px; font-weight: bold; letter-spacing: 2px; color: #000000">{$kingdomInfo.nazwa}{if not $kingdomInfo.koalicja}<br><br>{/if}</td>
        </tr>
        {if $kingdomInfo.koalicja}
        <tr>
            <td colspan="4" align="right" style="font-size: 10px; padding-right: 2px; color: #000000">{$kingdomInfo.koalicja}<br><br></td>
        </tr>
        {/if}
        <tr>
            <td class="value" align="right">{$kingdomInfo.ziemia|nice_number}</td>
            <td style="width:40px"><img src="{$image_dir}panel.left.ico.area.gif" alt="Ziemia" title="Ziemia"></td>
            <td class="value" align="right">{$kingdomInfo.zloto|nice_number}</td>
            <td style="width:40px"><img src="{$image_dir}panel.left.ico.gold.gif" alt="Z³oto" title="Z³oto"></td>
        </tr>
        <tr>
            <td class="value" align="right">{$kingdomInfo.domy|nice_number}</td>
            <td style="width:40px"><img src="{$image_dir}panel.left.ico.house.gif" alt="Domy" title="Domy"></td>
            {assign var="population" value="`$kingdomInfo.bezrobotni+$kingdomInfo.rolnicy+$kingdomInfo.kowale+$kingdomInfo.gornicy_zlota+$kingdomInfo.gornicy_zelaza+$kingdomInfo.budowniczowie+$kingdomInfo.lucznicy+$kingdomInfo.piechota+$kingdomInfo.husaria+$kingdomInfo.szpiedzy+$kingdomInfo.straznicy+$kingdomInfo.tragarze`"}
            <td class="value" align="right"><b>{$kingdomInfo.bezrobotni}</b>/{$population}</td>
            <td style="width:40px"><img src="{$image_dir}panel.left.ico.unemployee.gif" alt="Bezrobotni / Mieszkañcy" title="Bezrobotni / Mieszkañcy"></td>
        </tr>
        </table>
        <br>
    </td>
</tr>

{if $panel_elements.InfoGry|default:"show" != "hide"}
{$begin_titlebutton}Statystyki gry i czat{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
                <tr>
                    <td class="key">Zalogowani (<a class="key" href ="{$root_dir}listaZalogowanych/listaZalogowanych.php">lista</a>)</td>
                    <td align="right" class="value">{$kingdomInfo.ileZalogowanych}</td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<input class="button" type=button name="ukryj_shoutbox" onclick="hideSchoutbox();" value="Ukryj czat">&nbsp;
						<input class="button" type=button name="pokaz_shoutbox" onclick="showSchoutbox();" value="Poka¿ czat">
						<div id="sb_main">
						<script type="text/javascript" src="{$javascript_dir}../shoutbox/scripts/advajax.js"></script>
						<script type="text/javascript" src="{$javascript_dir}../shoutbox/scripts/ShoutBox.js"></script>
						<script type="text/javascript" src="{$javascript_dir}../shoutbox/scripts/ShoutBox_advajax.js"></script>
						
						<link rel="stylesheet" href="{$javascript_dir}../shoutbox/css/ShoutBox.css" type="text/css" />
						{*----
						<!--[if IE]>
						<link rel="stylesheet" type="text/css" href="{$javascript_dir}../shoutbox/css/ShoutBox_ie6.css" />
						<![endif]-->
						-------*}
						{*-----------------------------------------------------------------------------}
						<div id="sb_tools">
							<div id="sb_history" class="sb_history" title="Pobierz wcze¶niejsze" onclick="sb.getHistory();"></div>
							<div id="sb_scroll_locking" class="sb_unlocked" title="Zablokuj scroll" onclick="ShoutBox.switchScroll();"></div>
						</div>
					{-----------------------------------------------------------------------------*}
						<div id="sb_body"></div>
						<form onsubmit="sb.sendMessage();return false;">
							<input type="text" id="sb_message" maxlength="255" />
							<input type="submit" class="button" id="sb_submit" value="Wy¶lij" />
						</form>
					</div>
					
					{*-----------------------------------------------------------------------------}
						<script language="javascript">
							var sb = new ShoutBox('sb',10000,'{$javascript_dir}../shoutbox/ShoutBox.php?');
							sb.getMessages();
					 /*sb.bind('message',{par1:'wartosc1', par2:'wartosc2'},function(data){
						alert(data.par1 + ' ' + data.par2);
						alert(data.params.actionName);
						//jakis nasz kod 
						return true;	
						});*/
							hide('sb_main');
					{-----------------------------------------------------------------------------*}
						</script>
                    </td>
                </tr>
                <tr>
                	<td colspan="2"  align="center">
<div id="sb_prawa_autorskie">						
						<a class="key" style="font-size: 8px;" href="http://nospor.pl/shoutbox.html">ShoutBox 1.1.1</a>
<div>                
                    </td>
                </tr>
            </table>
        <br>
    </td>
</tr>
<script type="text/javascript" >
var urlTak = '{$www_root}/pokazShoutbox.php?pokaz_shoutbox=tak';
var urlNie = '{$www_root}/pokazShoutbox.php?pokaz_shoutbox=nie';
var sb = new ShoutBox('sb',10000,'{$javascript_dir}../shoutbox/ShoutBox.php?');

{literal}
function hideSchoutbox(){
    	var request = new advAJAX();
    	request.handleArguments({
			url: urlNie,
		});
    	request.run();

		sb.refreshTime = 10000;
		hide('sb_main');
		hide('sb_prawa_autorskie');		
}
function showSchoutbox(){
    	var request = new advAJAX();
    	request.handleArguments({
			url: urlTak,
		});
    	request.run();
    	
		show('sb_main');
		show('sb_prawa_autorskie');
		sb.refreshTime = 10000;
		sb.getMessages();
}
{/literal}
{if strcmp($smarty.session.pokaz_shoutbox,'tak')==0}
showSchoutbox();
{else}                
hideSchoutbox();
{/if}</script>
{/if}


{if $panel_elements.Magazyn|default:"show" != "hide"}
{$begin_titlebutton}Magazyn{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
                <tr>
                    <td class="key">jedzenie</td>
                    <td align="right" class="value">{$kingdomInfo.jedzenie}</td>
                </tr>
                <tr>
                    <td class="key">narzêdzia</td>
                    <td align="right" class="value">{$kingdomInfo.narzedzia}</td>
                </tr>
                <tr>
                    <td class="key">¿elazo</td>
                    <td align="right" class="value">{$kingdomInfo.zelazo}</td>
                </tr>
                <tr>
                    <td class="key">broñ</td>
                    <td align="right" class="value">{$kingdomInfo.bronie}</td>
                </tr>
            </table>
        <br>
    </td>
</tr>
{/if}
{if $panel_elements.Fachowcy|default:"show" != "hide"}
{$begin_titlebutton}Fachowcy{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
            <tr>
                <td class="key">rolnicy</td>
                <td align="right" class="value">{$kingdomInfo.rolnicy}</td>
            </tr>
            <tr>
                <td class="key">budowniczowie</td>
                <td align="right" class="value">{$kingdomInfo.budowniczowie}</td>
            </tr>
            <tr>
                <td class="key">kowale</td>
                <td align="right" class="value">{$kingdomInfo.kowale}</td>
            </tr>
            <tr>
                <td class="key">górnicy&nbsp;z³ota</td>
                <td align="right" class="value">{$kingdomInfo.gornicy_zlota}</td>
            </tr>
            <tr>
                <td class="key">górnicy&nbsp;¿elaza</td>
                <td align="right" class="value">{$kingdomInfo.gornicy_zelaza}</td>
            </tr>
            {if $kingdomInfo.koalicja != ""}
            <tr>
                <td class="key">tragarze</td>
                <td align="right" class="value">{$kingdomInfo.tragarze}</td>
            </tr>
            {/if}
        </table>
        <br>
    </td>
</tr>
{/if}
{if $panel_elements.Budynki|default:"show" != "hide"}
{$begin_titlebutton}Budynki&nbsp;przemys³owe{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
            <tr>
                <td class="key">farmy</td>
                <td align="right" class="value">{$kingdomInfo.farmy}</td>
            </tr>
            {if $kingdomInfo.koalicja != ""}
            <tr>
                <td class="key">rynki</td>
                <td align="right" class="value">{$kingdomInfo.rynki}</td>
            </tr>
            {/if}
            <tr>
                <td class="key">warsztaty</td>
                <td align="right" class="value">{$kingdomInfo.warsztaty}</td>
            </tr>
            <tr>
                <td class="key">kopalnie&nbsp;z³ota</td>
                <td align="right" class="value">{$kingdomInfo.kopalnie_zlota}</td>
            </tr>
            <tr>
                <td class="key">kopalnie&nbsp;¿elaza</td>
                <td align="right" class="value">{$kingdomInfo.kopalnie_zelaza}</td>
            </tr>
        </table>
        <br>
    </td>
</tr>
{/if}
{if $panel_elements.Armia|default:"show" != "hide"}
{$begin_titlebutton}Armia{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
            <tr>
                <td class="key">³ucznicy</td>
                <td align="right" class="value">{$kingdomInfo.lucznicy}</td>
            </tr>
            <tr>
                <td class="key">piechota</td>
                <td align="right" class="value">{$kingdomInfo.piechota}</td>
            </tr>
            <tr>
                <td class="key">husaria</td>
                <td align="right" class="value">{$kingdomInfo.husaria}</td>
            </tr>
            <tr>
                <td class="key">stra¿nicy</td>
                <td align="right" class="value">{$kingdomInfo.straznicy}</td>
            </tr>
            <tr>
                <td class="key">szpiedzy</td>
                <td align="right" class="value">{$kingdomInfo.szpiedzy}</td>
            </tr>
        </table>
        <br>
    </td>
</tr>
{/if}
{if $panel_elements.Militarne|default:"show" != "hide"}
{$begin_titlebutton}Budynki&nbsp;militarne{$end_titlebutton}
<tr>
    <td colspan="3" align="center">
        <table border="0" width="{$data_table_width}">
            <tr>
                <td class="key">koszary</td>
                <td align="right" class="value">{$kingdomInfo.koszary}</td>
            </tr>
            <tr>
                <td class="key">wie¿yczki</td>
                <td align="right" class="value">{$kingdomInfo.wiezyczki}</td>
            </tr>
            <tr>
                <td class="key">gildie szpiegów</td>
                <td align="right" class="value">{$kingdomInfo.gildie}</td>
            </tr>
            <tr>
                <td class="key">stra¿nice</td>
                <td align="right" class="value">{$kingdomInfo.straznice}</td>
            </tr>
        </table>
        <br>
    </td>
</tr>
{/if}
{*+ belka konczaca *}
<tr>
    <td style="width: {$left_panel_width}; height: 15px" colspan="3">
        <img src="{$image_dir}left_panel_main_bottom.jpg">
    </td>
</tr>
{*- belka konczaca *}
</table>
{*- lewy panel z danymi *}

{/strip}

