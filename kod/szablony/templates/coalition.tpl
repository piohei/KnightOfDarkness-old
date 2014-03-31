{strip}
{include file="main_top.tpl" tytul="Koalicja"}
{if $nazwa_koalicji == ""}
    <table cellspacing="1" cellpadding="0" style="width: 100%">
    <tr class="row2">
        <td>
            <p style="text-align: justify; padding: 5px 25px">
            Obecnie nie nale¿ysz do ¿adnej koalicji. Mo¿esz przy³±czyæ siê do jakie¶ istniej±cej ju¿ koalicji kontaktuj±c siê z jej cz³onkowskimi królestwami (najlepiej z cesarzem koalicji). Je¶li zechc± Ciê przyj±æ dostaniesz list zapraszaj±cy, wtedy wystarczy go ju¿ tylko potwierdziæ.<br>
            Zawsze mo¿esz te¿ staæ siê za³o¿ycielem i cesarzem w³asnej koalicji (<a href="nowaKoalicja.php" title="Zak³adanie nowej koalicji">zak³adam&nbsp;koalicjê</a>).
            </p>
            <p style="text-align: justify; padding: 5px 25px">
            <a href="coalition.list.php">Lista koalicji</a>
            </p>
            <p style="text-align: justify; padding: 5px 25px">
            Ka¿da koalicja kiedy stanie siê wystarczaj±co potê¿na próbuje wybudowaæ budynek koalicji{include file="help/template.quickhelp.tpl" helpfile="budynek.koncowy"}. Buduj± go, wspólnymi si³ami wszystkie królestwa cz³onkowskie. Kiedy budowla zostaje ukoñczona koalicja wygrywa grê - nastêpuje koniec ery.<br>
            Mo¿esz tak¿e zaatakowaæ taki budynek aby przeszkodziæ koalicji w ukoñczeniu go i odniesieniu ostatecznego zwyciêstwa.<br>
            </p>
            <p style="text-align: justify; padding: 5px 25px">
            <a href="{$root_dir}budynek_koncowy/">Lista budynków koalicji</a>
            </p>
        </td>
    </tr>
    </table>
{else}
    <table cellspacing="1" cellpadding="0" style="width: 100%">
    {if $mesg != ""}
        <tr>
            <td class="header">Raport</td>
        </tr>
        <tr>
            <td class="row1" style="color: red" align="center">
            {foreach from=$mesg item="message"}
                {$message}<br>
            {/foreach}
            </td>
        </tr>
    {/if}
    <tr>
        <td class="header">Królestwa cz³onkowskie koalicji: <span style="font-weight: bold">{$nazwa_koalicji} ({$ilosc_ludzi_w_koalicji})</span></td>
    </tr>
    <tr>
        <td>


            {* BEGIN: spis czlonkow koalicji *}
            <table cellspacing="1" cellpadding="0" style="width: 100%;">
            <tr>
                <td class="header">Królestwo</td>
                <td class="header">Ziemia</td>
                <td class="header">£ucznicy</td>
                <td class="header">Piechota</td>
                <td class="header">Husaria</td>
                <td class="header">&nbsp;</td>
            </tr>
            {foreach item="kingdom" from=$members}
            {cycle values="row1,row2" assign="row_style"}
            <tr {if $emperor == $kingdom.nazwa}class="row3" style="font-weight: bold; height: 25px"{else}class="{$row_style}" style="height: 25px"{/if}>
                <td style="padding: 0px 5px">
                    <a href='../walka/infoGracza.php?name={$kingdom.nazwa}'>{$kingdom.nazwa}</a>
                </td>
                <td align="center">
                    {$kingdom.ziemia}
                </td>
                <td align="center">
                    {$kingdom.lucznicy}
                </td>
                <td align="center">
                    {$kingdom.piechota}
                </td>
                <td align="center">
                    {$kingdom.husaria}
                </td>
                <td>
                		{if $kingdom.active} <img src="{$image_dir}active.png" height="23" alt="O" title="aktywny" style="margin: 0px 5px">{else} <img src="{$image_dir}not-active.png" height="23"  alt="X" title="nie aktywny" style="margin: 0px 5px">{/if} 
                    {if $emperor == $kingdomInfo.nazwa && $kingdomInfo.nazwa != $kingdom.nazwa}<a href="{$smarty.server.SCRIPT_NAME}?remove={$kingdom.nazwa}"><img src="{$image_dir}icon.delete.gif" alt="Usuñ" title="Usuñ królestwo z koalicji" style="margin: 0px 5px"></a>{/if}
                    {if $kingdomInfo.nazwa != $kingdom.nazwa}<a href='{$CFG->adresSerwera}messages/messagebox.php?mode=3&amp;rcpt={$kingdom.nazwa}'><img src="{$image_dir}list.gif" alt="List" title="Wy¶lij list" style="margin: 0px 5px"></a>{/if}
                </td>
            </tr>
            {/foreach}
            {if $emperor == $kingdomInfo.nazwa}
            <tr class="{cycle print=true}">
                <td colspan="5" style="padding: 0px 5px" align="right">
                    Rozwi±¿ istniej±c± koalicjê
                </td>
                <td>
                    <script type="text/javascript">
                    {literal}
                        function destroyCoalition(){
                            if(confirm("Czy na pewno chcesz rozwi±zaæ koalicjê?")){
                                window.location.href = "koalicja.php?leave";
                            }
                        }
                    {/literal}
                    </script>
                    <a href="javascript: destroyCoalition()"><img src="{$image_dir}icon.delete.gif" alt="Rozwi±¿ koalicjê" title="Rozwi±¿ istniej±c± koalicjê" style="margin: 0px 5px"></a>
                </td>
            </tr>
            {/if}
            </table>
            {* END: spis czlonkow koalicji *}


        </td>
    </tr>
    <tr>
        <td>


        {* BEGIN zak³adki *}
        <script type="text/javascript">
        imgPath = '{$image_dir}';
        {literal}
        function tabMouseOver(tab){
            tab.style.backgroundImage = 'url('+imgPath+'table_header_bg_type01.jpg)';
            tab.style.color = '#C8A27C';
        }
        function tabMouseOut(tab){
            tab.style.backgroundImage = 'url('+imgPath+'table_header_bg_type02.jpg)';
            tab.style.color = '#5C584D';
        }
        function tabLink(title){
            if(title == 'pub'){
                url = 'koalicja.php?tab=0';
            }else if(title == 'manage'){
                url = 'koalicja.php?tab=1';
            }else if(title == 'ageBuilding'){
                url = 'koalicja.php?tab=2';
            }else if(title == 'rynek'){
                url = 'koalicja.php?tab=3';
            }else{
                url = '';
            }

            if(url != '') window.location.href = url;
        }
        {/literal}
        </script>

        <table cellpadding="0" cellspacing="0" border="0" style="width: 100%;">
        <tr>

            {capture assign="inactive_tab"}
            style="border-left: 1px solid #000000; border-right: 1px solid #000000; width: 25%; text-align: left; padding: 0px 5px; color: #5C584D; background: url({$image_dir}table_header_bg_type02.jpg) repeat-x top; cursor: pointer"
            onmouseover="tabMouseOver(this)" onmouseout="tabMouseOut(this)" onclick="tabLink(this.id)"
            {/capture}

            {capture assign="active_tab"}
            style="border-left: 1px solid #000000; border-right: 1px solid #000000; margin: 0 1px; width: 25%; text-align: left; padding: 0px 5px; cursor: pointer" onmouseover="hoverTab(this)"
            {/capture}

            <td class="header" {if $tab == 0 || $tab == ''}{$active_tab}{else}{$inactive_tab}{/if} id="pub">Karczma</td>
            <td class="header" {if $tab == 1}{$active_tab}{else}{$inactive_tab}{/if} id="manage">Zarz±dzanie</td>
            <td class="header" {if $tab == 2}{$active_tab}{else}{$inactive_tab}{/if} id="ageBuilding">Budynek koalicji</td>
            <td class="header" {if $tab == 3}{$active_tab}{else}{$inactive_tab}{/if} id="rynek">Rynek</td>
        </tr>
        </table>
        {* END zak³adki *}


        </td>
    </tr>
    <tr>
        <td>
            {if $tab == 0 || $tab == ''}

            {* BEGIN: karczma *}
            <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
            <tr class="row2">
                <td><iframe name="pub" scrolling="yes" frameborder="0" src="pub.php" style="width: 100%; height: 300px"></iframe></td>
            </tr>
            <tr class="row1">
                <td>
                <div align="center">
                <form name="pub_mesg" action="koalicja.php?pub_add=1" method="Post" style="padding: 0; margin: 0; width: 100%">
                <textarea class="textfield" style="width: 100%; height: 70px" name="mesg"></textarea><br>
                <input type="submit" class="button" name="add_mesg" value="Wy¶lij" style="float: right; margin: 0px 3px">
                <input type="button" class="button" name="refresh_pub" value="Od¶wie¿" style="float: right; margin: 0px 3px" onClick="pub.location.reload()">
                </form>
                </div>
                </td>
            </tr>
            </table>
            {* END: karczma *}

            {elseif $tab == 1}

            {* BEGIN: Zarz±dzanie *}
            <script type="text/javascript" src="{$javascript_dir}coalition.js"></script>
            <table cellspacing="1" cellpadding="0" style="width: 100%">
            <tr>
                <td class="row2" style="width: 33%; border-right: 1px solid #362A1A" valign="top">
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='coalition.list.php'">Lista koalicji</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('leave')">Opuszczenie koalicji</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='raporty.php'">Raporty</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('sonda')">Sondy</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='wybory.php'">Wybory</div>
                    {if $prawa_szefa == 1}
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='{$CFG->adresSerwera}messages/messagebox.php?mode=3'">Zapraszanie</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='historia_zap.php'">Historia zaproszeñ</div>
                    <div style="width: 150px; padding: 0px 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="window.location.href='{$CFG->adresSerwera}koalicja/edit.php'">Edycja opisu</div>
                    {/if}
                </td>
                <td valign="top" class="row1">
                    {* BEGIN: sondy *}
                    <div id="sonda" style="display: none; height: 100%;">
                        <p style="margin: 10px 20px">
                        {if $prawa_szefa == 1 && not $ankieta->czyJest}
                            W tej chwili nie ma ¿adnej sondy.<br>
                            <a href="{$root_dir}sondy/sonda.php?tryb=koalicja">Utwórz now± sondê</a>
                        {elseif $prawa_szefa == 1 && $ankieta->czyJest}
                            <div align="right" style="width: 100%">
                            <a href="{$root_dir}sondy/sonda.php?tryb=usun_koalicja">Usuñ sondê</a>
                            {$ankieta->ankieta}
                            </div>
                        {elseif not $ankieta->czyJest}
                            W tej chwili nie ma ¿adnej sondy.
                        {else}
                            <div align="right"  style="width: 100%">
                            {$ankieta->ankieta}
                            </div>
                        {/if}
                        </p>
                    </div>
                    {* END: sondy *}
                    {* BEGIN: opuszczanie koalicji *}
                    <div id="leave" style="display: none; height: 100%" align="center">
                        <table cellpadding="0" cellspacing="5" border="0">
                        <tr class="row1">
                            <td colspan="2" style="text-align: justify">
                                Czy na pewno chcesz opu¶ciæ koalicjê?<br>
                                {if $kingdomInfo.rynki > 0}
                                Wszystkie wybudowane do tej pory rynki pracowa³y z t± koalicj±. Po odej¶ciu zostan± one wyburzone a tragarze opuszcz± Twoje królestwo z powodu braku miejsc pracy.<br><br>
                                {/if}
                                {if $kingdomInfo.nazwa == $emperor}
                                <b>Jeste¶ cesarzem tej koalicji. Twoje odej¶cie bêdzie równowa¿ne z rozwi±zaniem koalicji.</b>
                                {/if}
                            </td>
                        </tr>
                        <tr class="row1">
                            <td align="center"><a href="{$smarty.server.SCRIPT_NAME}?leave">Odchodzê</a></td>
                            <td align="center"><a href="#">Zostajê</a></td>
                        </tr>
                        </table>
                    </div>
                    {* END: opuszczanie koalicji *}
                    {if $prawa_szefa == 1}
                    {* BEGIN: zapraszanie *}
                    <div id="invite" style="display: none">
                    {*
                        <form name="inviteForm" action="{$smarty.server.SCRIP_NAME}" method="POST" style="margin: 10px 20px; padding: 0">
                        <input type="hidden" name="coalition" value="{$nazwa_koalicji}">
                        <table cellpadding="0" cellspacing="5" border="0">
                        <tr>
                            <td>Nazwa królestwa: </td>
                            <td align="right"><input type="text" name="kingdom" class="textfield" style="width: 120px; height: 20px;"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                            <input class="button" type="submit" name="invite" value="Wy¶lij zaproszenie"><br>
                            <a href="historia_zap.php?koal={$nazwa_koalicji}" style="font-size: 10px">Wys³ane zaproszenia</a>
                            </td>
                        </tr>
                        </table>
                        </form>
                    *}
                    </div>
                    {* END: zapraszanie *}
                    {/if}
                    &nbsp;
                    <script type="text/javascript">loadPanel('sonda')</script>
                    {* WYLACZAM Z POWODU DODANIA ZAKLADKI RYNEK
                    {if $ankieta->czyJest}
                        <script type="text/javascript">loadPanel('sonda')</script>
                    {else}
                        <script type="text/javascript">loadPanel('export')</script>
                    {/if}
                    *}
                </td>
            </tr>
            </table>
            {* END: Zarz±dzanie *}


            {elseif $tab == 2}
            {* BEGIN: budynek koalicji *}
                {if $budynek_koncowy->stan=="rozpoczety" }
                    <table cellpadding="3" cellspacing="1" border="0" style="width: 100%">
                    <tr>
                        <td class="row2" style="width: 33%">
                            <form action="{$smarty.server.SCRIPT_NAME}?tab=2" method="POST">
                            <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">

                            {* budowniczowie *}
                            <tr>
                                <td style="color: #C8C8C8" align="left" valign="bottom">Budowniczowie</td>
                                <td align="right" valign="bottom"><input type="text" style="width: 50px;" class="textField" name="dadawanie[budowniczowie]" value="{$dodawanie.budowniczowie}"></td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top">
                                    {if $dodawanie_bledy.budowniczowie}
                                        <span style="font-size: 9px; color: #FF0000">{$dodawanie_bledy.budowniczowie}</span>
                                    {else}
                                        <span style="font-size: 9px; color: #949492">aktualnie:&nbsp;{$budynek_koncowy->dane.budowniczowie}</span>
                                    {/if}
                                </td>
                            </tr>
                            {* budowniczowie *}

                            {* lucznicy *}
                            <tr>
                                <td style="height: 30px; color: #C8C8C8" align="left" valign="bottom">£ucznicy</td>
                                <td align="right" valign="bottom"><input type="text" style="width: 50px;" class="textField" name="dadawanie[lucznicy]" value="{$dodawanie.lucznicy}"></td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top">
                                    {if $dodawanie_bledy.lucznicy}
                                        <span style="font-size: 9px; color: #FF0000">{$dodawanie_bledy.lucznicy}</span>
                                    {else}
                                        <span style="font-size: 9px; color: #949492">aktualnie:&nbsp;{$budynek_koncowy->dane.lucznicy}</span>
                                    {/if}
                                </td>
                            </tr>
                            {* lucznicy *}

                            {* piechota *}
                            <tr>
                                <td style="height: 30px; color: #C8C8C8" align="left" valign="bottom">Piechota</td>
                                <td align="right" valign="bottom"><input type="text" style="width: 50px;" class="textField" name="dadawanie[piechota]" value="{$dodawanie.piechota}"></td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top">
                                    {if $dodawanie_bledy.piechota}
                                        <span style="font-size: 9px; color: #FF0000">{$dodawanie_bledy.piechota}</span>
                                    {else}
                                        <span style="font-size: 9px; color: #949492">aktualnie:&nbsp;{$budynek_koncowy->dane.piechota}</span>
                                    {/if}
                                </td>
                            </tr>
                            {* piechota *}

                            {* husaria *}
                            <tr>
                                <td style="height: 30px; color: #C8C8C8" align="left" valign="bottom">Husaria</td>
                                <td align="right" valign="bottom"><input type="text" style="width: 50px;" class="textField" name="dadawanie[husaria]" value="{$dodawanie.husaria}"></td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top">
                                    {if $dodawanie_bledy.husaria}
                                        <span style="font-size: 9px; color: #FF0000">{$dodawanie_bledy.husaria}</span>
                                    {else}
                                        <span style="font-size: 9px; color: #949492">aktualnie:&nbsp;{$budynek_koncowy->dane.husaria}</span>
                                    {/if}
                                </td>
                            </tr>
                            {* husaria *}

                            {* jedzenie *}
                            <tr>
                                <td style="height: 30px; color: #C8C8C8" align="left" valign="bottom">Jedzenie</td>
                                <td align="right" valign="bottom"><input type="text" style="width: 50px;" class="textField" name="dadawanie[jedzenie]" value="{$dodawanie.jedzenie}"></td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top">
                                    {if $dodawanie_bledy.jedzenie}
                                        <span style="font-size: 9px; color: #FF0000">{$dodawanie_bledy.jedzenie}</span>
                                    {else}
                                        <span style="font-size: 9px; color: #949492">aktualnie:&nbsp;{$budynek_koncowy->dane.jedzenie}</span>
                                    {/if}
                                </td>
                            </tr>
                            {* jedzenie *}

                            <tr>
                                <td colspan="2" valign="bottom" align="right" style="height: 30px">
                                    <input type="submit" value="Wy¶lij" class="button">
                                </td>
                            </tr>

                            </table>
                            </form>
                        </td>

                        <td class="row1" align="center">
                            "¦wi±tynia&nbsp;Boogla"<br>
                            <img src="{$image_dir}pic.boogiel-temple.gif" alt="Swi±tynia Boogla" title="¦wi±tynia Boogla"><br>
                            {assign var="progress_bar" value="250"}
                            <table cellpadding="0" cellspacing="0" border="0" style="border: 1px solid #493D2F">
                            <tr>
                                <td style="width: {$progress_bar}px; padding: 0px 3px;" align="left" valign="middle">
                                <div style="background-color: #C8A27C; height: 12px; width: {$budynek_koncowy->dane.postep_pr}%">&nbsp;</div>
                                </td>
                                <td style="padding: 3px" align="center" valign="middle">{$budynek_koncowy->dane.postep_pr}%</td>
                            </tr>
                            </table>
                            <a href="{$root_dir}budynek_koncowy/" style="font-size: 9px">Lista budynków koalicji</a>{include file="help/template.quickhelp.tpl" helpfile="budynek.koncowy"}
                        </td>

                    </tr>
                    </table>
                {elseif $budynek_koncowy->stan=="nierozpoczety" || $budynek_koncowy->stan=="nie_mozna_rozpoczac" || $budynek_koncowy->stan=="mozna_rozpoczac"}
                    <table cellpadding="3" cellspacing="1" border="0" style="width: 100%">
                    <tr>
                        <td class="row1">
                        Budynek koalicji nie zosta³ jeszcze rozpoczêty. {include file="help/template.quickhelp.tpl" helpfile="budynek.koncowy"}<br><br>

                        Mo¿esz sprawdziæ postêp budowy tego budynku u innych koalicji, mo¿esz te¿ zaatakowaæ ten budynek utrudniaj±c im ukoñczenie budowy.<br>
                        <a href="{$root_dir}budynek_koncowy/">Lista budynków koalicji</a><br><br>

                        {if $budynek_koncowy->stan=="nie_mozna_rozpoczac" || $budynek_koncowy->stan=="mozna_rozpoczac"}
                            Je¶li jeste¶ w posiadaniu {$parametryBudynekKoncowy.kosztZloto|nice_number} sztuk z³ota mo¿esz rozpocz±æ budowê budynku koalicji.<br>
                            <form action="{$smarty.server.SCRIPT_NAME}?tab=2" method="POST">
                            <input type="hidden" name="rozpocznij_koncowy" value="tak">
                            <input type="submit" value="Rozpocznij budowe" class="button" {if $budynek_koncowy->stan=="nie_mozna_rozpoczac"}disabled{/if}>
                            </form>
                        {/if}
                        </td>
                    </tr>
                    </table>
                {/if}
            {* END: budynek koalicji *}

            {elseif $tab == 3}

            {* BEGIN: Rynek *}
            <script type="text/javascript" src="{$javascript_dir}coalition.js"></script>
            <table cellspacing="1" cellpadding="0" style="width: 100%">
            <tr>
                {if $prawa_szefa == 0}             
                <td class="row2" style="width: 33%; border-right: 1px solid #362A1A" valign="top"><div style="width: 144px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('export')"><b>Wy&#347;lij / W drodze</b></div></td>
                <td class="row2" style="width: 33%; border-right: 1px solid #362A1A" valign="top"><div style="width: 144px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('rimport')"><b>Import</b></div></td>
                <td class="row2" style="width: 33%; border-right: 1px solid #362A1A" valign="top"><div style="width: 144px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('rexport')"><b>Export</b></div></td>
                {/if}
                {if $prawa_szefa == 1}
                <td class="row2" style="width: 17%; border-right: 1px solid #362A1A" valign="top"><div style="width: 130px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('export')"><b>Wy&#347;lij / W drodze</b></div></td>
                <td class="row2" style="width: 17%; border-right: 1px solid #362A1A" valign="top"><div style="width:  92px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('rimport')"><b>Import</b></div></td>
                <td class="row2" style="width: 17%; border-right: 1px solid #362A1A" valign="top"><div style="width:  92px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('rexport')"><b>Export</b></div></td>
                <td class="row2" style="width: 16%; border-right: 1px solid #362A1A" valign="top"><div style="width:  45px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('alli')"><b>All Im</b></div></td>
                <td class="row2" style="width: 16%; border-right: 1px solid #362A1A" valign="top"><div style="width:  45px; padding: 0px 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#121314'" onmouseout="this.style.backgroundColor='#2B2C2D'" onclick="loadPanel('alle')"><b>All Ex</b></div></td>
                {/if}
            </tr>
            <tr>
                {if $prawa_szefa == 0}<td valign="top" colspan="3">{/if}
                {if $prawa_szefa == 1}<td valign="top" colspan="5">{/if}
                    {* BEGIN: rynek eksportowy *}
                    <div id="export" style="display: none;">
                        <form name="exportForm" action="{$smarty.server.SCRIPT_NAME}" method="POST" style="margin: 0; padding: 0">
                        <table cellpadding="2" cellspacing="1" border="0" style="width: 100%">
                            <tr class="row1">
                                <td>Rynki eksportowe:</td>
                                <td style="font-weight: bold;">{$kingdomInfo.rynki}</td>
                            </tr>
                            <tr class="row1">
                                <td>Liczba tragarzy:</td>
                                <td style="font-weight: bold">{$kingdomInfo.tragarze}</td>
                            </tr>
                            <tr class="row1">
                                <td>Królestwo:</td>
                                <td>
                                    <select class="textfield" name="dest_kingdom">
                                        {foreach item="kingdom" from=$members}
                                            {if $kingdomInfo.nazwa != $kingdom.nazwa}
                                            <option value="{$kingdom.nazwa}">{$kingdom.nazwa}&nbsp;&nbsp;
                                            {/if}
                                        {/foreach}
                                    </select>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Jedzenie</td>
                                <td><input name="food" type="text" class="textfield" style="width: 60px" onkeyup="calculateLoad({$kingdomInfo.tragarze}, {$porter.load_scores}, {$porter.food_scores}, {$porter.tool_scores}, {$porter.iron_scores}, {$porter.weapon_scores},  {$porter.cost}, {$kingdomInfo.zloto}, this.form, 'export_out')">
                            </tr>
                            <tr class="row1">
                                <td>Narzêdzia</td>
                                <td><input name="tools" type="text" class="textfield" style="width: 60px" onkeyup="calculateLoad({$kingdomInfo.tragarze}, {$porter.load_scores}, {$porter.food_scores}, {$porter.tool_scores}, {$porter.iron_scores}, {$porter.weapon_scores}, {$porter.cost}, {$kingdomInfo.zloto}, this.form, 'export_out')">
                            </tr>
                            <tr class="row1">
                                <td>¯elazo</td>
                                <td><input name="iron" type="text" class="textfield" style="width: 60px" onkeyup="calculateLoad({$kingdomInfo.tragarze}, {$porter.load_scores}, {$porter.food_scores}, {$porter.tool_scores}, {$porter.iron_scores}, {$porter.weapon_scores}, {$porter.cost}, {$kingdomInfo.zloto}, this.form, 'export_out')">
                            </tr>
                            <tr class="row1">
                                <td>Broñ</td>
                                <td><input name="weapon" type="text" class="textfield" style="width: 60px" onkeyup="calculateLoad({$kingdomInfo.tragarze}, {$porter.load_scores}, {$porter.food_scores}, {$porter.tool_scores}, {$porter.iron_scores}, {$porter.weapon_scores}, {$porter.cost}, {$kingdomInfo.zloto}, this.form, 'export_out')">
                            </tr>
                            <tr class="row1" valign="top">
                                <td>Potrzebni tragarze:<br>Koszt (szt. z³ota):</td>
                                <td><div id="export_out" style="font-weight: bold; display: inline">0<br>0</div></td>
                            </tr>
                            <tr class="row1">
                                <td>&nbsp;</td>
                                <td><input type="submit" name="export" value="Wy¶lij tragarzy" class="button"></td>
                            </tr>
                        </table>
                        </form>
                  {* BEGIN: W drodze *}


{if !empty($portersInfo) }
    <table border="0" cellspacing="1" cellpadding="1"
	style="width: 100%; margin-top: 1px">
 	<tr>
	 <td colspan="8" align="center">Towar w drodze:</td>
 	</tr>
	<tr>
		<td class="header">Od</td>
		<td class="header">Do</td>
		<td class="header">Tury</td>
		<td class="header">Tragarze</td>
		<td class="header">Jedzenie</td>
		<td class="header">Narzêdzia</td>
		<td class="header">¯elazo</td>
		<td class="header">Broñ</td>
		<td class="header"></td>
	</tr>
	{section loop=$portersInfo name="porterInfo" start=0}
	{cycle values="row1,row2" print="false" assign="row"}
	<tr>
		<td class="{$row}">
			<a href="{$root_dir}walka/infoGracza.php?name={$portersInfo[porterInfo].source}">{$portersInfo[porterInfo].source}</a>
		</td>
		<td class="{$row}">
			<a href="{$root_dir}walka/infoGracza.php?name={$portersInfo[porterInfo].destination}">{$portersInfo[porterInfo].destination}</a>
		</td>
		<td class="{$row}" align="center">{$portersInfo[porterInfo].time_left}</td>
		<td class="{$row}" align="right">{$portersInfo[porterInfo].porter}</td>
		<td class="{$row}" align="right">{$portersInfo[porterInfo].food}</td>
		<td class="{$row}" align="right">{$portersInfo[porterInfo].tool}</td>
		<td class="{$row}" align="right">{$portersInfo[porterInfo].iron}</td>
		<td class="{$row}" align="right">{$portersInfo[porterInfo].weapon}</td>
		<td class="{$row}" align="right"><a href="?tab=3&wycofaj_tragarzy_id={$portersInfo[porterInfo].id}">Wycofaj</a></td>
	</tr>
	{/section}
</table>
{/if} {*//portersInfo*}                  
</div>
                    {* END: W drodze *}
                    {* END: rynek eksportowy *}
                    {* BEGIN: Rynek *}
                    <div id="rexport" style="display: none;">
                     <table cellspacing="1" cellpadding="0" width="100%">
                      <tbody>
		       		   {if $export != NULL}
            	       <tr>
                		<td class="header">Królestwo</td>
                		<td class="header">Statystyki</td>
                		<td class="header"> J <font color="#34CA00">#</font> </td>
                		<td class="header"> N <font color="#674E19">#</font> </td>
                		<td class="header"> ¯ <font color="#016ABB">#</font> </td>
                		<td class="header"> B <font color="#9B4A02">#</font> </td>
	                	<td class="header"> G <font color="#BEC500">#</font> </td>
	            	   </tr> 
		     		   {/if}           
		      		   {$export_view}
		      		   {if $export != NULL}
		       <tr>
			<td colspan="7" class="header">Pomoc</td>
		       </tr>
                       <tr>
                        <td colspan="7" class="row1" style="padding: 5px 5px;">
Wykres przedstawia ilo&#347;æ towaru<br /> (J - jedzenie, N - narzedzia, ¯ - ¿elazo, B - broñ) wys³anego przez nas za pomoc&#261; rynku do naszych koalicjantów oraz ilo&#347;æ z³ota (G - z³oto) któr&#261; wys³ali&#347;my do nich poprzez skupienie ich aukcji z targu.
 			</td>
                       </tr>
		       		   {/if}
                      </tbody>
                     </table>
                    </div>
                    <div id="rimport" style="display: none;">
                     <table cellspacing="1" cellpadding="0" width="100%">
                      <tbody>
		      		   {if $import != NULL}
            	       <tr>
                		<td class="header">Królestwo</td>
               		 	<td class="header">Statystyki</td>
               		 	<td class="header"> J <font color="#34CA00">#</font> </td>
               		 	<td class="header"> N <font color="#674E19">#</font> </td>
                		<td class="header"> ¯ <font color="#016ABB">#</font> </td>
                		<td class="header"> B <font color="#9B4A02">#</font> </td>
                		<td class="header"> G <font color="#BEC500">#</font> </td>
            	       </tr>
		       		   {/if}
		      		   {$import_view}
		      		   {if $import != NULL}
		       <tr>
			<td colspan="7" class="header">Pomoc</td>
		       </tr>
                       <tr>
                        <td colspan="7" class="row1" style="padding: 5px 5px;">
Wykres przedstawia ilo&#347;æ towaru<br /> (J - jedzenie, N - narzedzia, ¯ - ¿elazo, B - broñ) wys³anego do nas za pomoc&#261; rynku przez naszych koalicjantów oraz ilo&#347;æ z³ota (G - z³oto) któr&#261; otrzymali&#347;my od nich poprzez skupienie naszych aukcji z targu.
 			</td>
                       </tr>
		       		   {/if}
                      </tbody>
                     </table>
                    </div>
                    <div id="alli" style="display: none;">
                     <table cellspacing="1" cellpadding="0" width="100%">
                      <tbody>
		       	  	   {if $all_im != NULL}
            	       <tr>
                		<td class="header">Królestwo</td>
                		<td class="header">Statystyki</td>
                		<td class="header"> J <font color="#34CA00">#</font> </td>
                		<td class="header"> N <font color="#674E19">#</font> </td>
                		<td class="header"> ¯ <font color="#016ABB">#</font> </td>
                		<td class="header"> B <font color="#9B4A02">#</font> </td>
	                	<td class="header"> G <font color="#BEC500">#</font> </td>
	            	   </tr> 
		       		   {/if}           
		       		   {$all_im_view}
		      		   {if $all_im != NULL}
		       <tr>
			<td colspan="7" class="header">Pomoc</td>
		       </tr>
                       <tr>
                        <td colspan="7" class="row1" style="padding: 5px 5px;">
Wykres przedstawia ilo&#347;æ towaru<br /> (J - jedzenie, N - narzedzia, ¯ - ¿elazo, B - broñ) otrzymanego od wszystkich koalicjantów za pomoc&#261; rynku oraz ilo&#347;æ z³ota (G - z³oto) któr&#261; otrzymali od swoich koalicjantów poprzez skupienie ich aukcji z targu.
 			</td>
                       </tr>
		       		   {/if}
                      </tbody>
                     </table>
                    </div>
                    <div id="alle" style="display: none;">
                     <table cellspacing="1" cellpadding="0" width="100%">
                      <tbody>
		       		   {if $all_ex != NULL}
            	       <tr>
                		<td class="header">Królestwo</td>
                		<td class="header">Statystyki</td>
                		<td class="header"> J <font color="#34CA00">#</font> </td>
                		<td class="header"> N <font color="#674E19">#</font> </td>
                		<td class="header"> ¯ <font color="#016ABB">#</font> </td>
                		<td class="header"> B <font color="#9B4A02">#</font> </td>
                		<td class="header"> G <font color="#BEC500">#</font> </td>
            	       </tr> 
		       		   {/if}           
		       		   {$all_ex_view}
		      		   {if $all_ex != NULL}
		       <tr>
			<td colspan="7" class="header">Pomoc</td>
		       </tr>
                       <tr>
                        <td colspan="7" class="row1" style="padding: 5px 5px;">
Wykres przedstawia ilo&#347;æ towaru<br /> (J - jedzenie, N - narzedzia, ¯ - ¿elazo, B - broñ) wys³anego do wszystkich koalicjantów za pomoc&#261; rynku oraz ilo&#347;æ z³ota (G - z³oto) któr&#261; wys³ali do swoich koalicjantów poprzez skupienie ich aukcji z targu.
 			</td>
                       </tr>
		       		   {/if}
                      </tbody>
                     </table>
                    </div>
                    {* END: Rynek *}
                </td>
            </tr>
            </table>
            
            <script type="text/javascript">loadPanel('export')</script>
            
            {* END: Zarz±dzanie *}
            {else}


                <div align="center" style="color: #FF0000">
                Nie ma takiej zak³adki!
                </div>


            {/if}
        </td>
    </tr>
    </table>    
{/if}
{include file="main_bottom.tpl"}
{/strip}
