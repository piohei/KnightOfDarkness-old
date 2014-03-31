{strip}
{include file="main_top.tpl" tytul="Spis ksiêstw"}


<table border="0" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 1px">
<tr style="height: 55px">
    <td class="row1" style="width: 50%; padding: 0px 5px">

        <span style="font-size: 10px">strona&nbsp;</span>
        {if $coalition_list}
            <b>{$coalition_list[0].current_page}</b> / {$coalition_list[0].total_pages}<br>
            {if $coalition_list[0].current_page < $coalition_list[0].total_pages}
                {assign var="page_jump" value="`$coalition_list[0].current_page+1`"}
            {else}
                {assign var="page_jump" value="1"}
            {/if}
        {else}
            <b>niedostêpna</b><br>
        {/if}
		<form action="{$SCRIPT_NAME}" method="GET" style="padding: 0; margin: 0">
			<input type="hidden" name="sort" value="{$smarty.get.sort}">
			<input type="hidden" name="order" value="{$smarty.get.order}">
        	<input type="text" name="page" class="textField" value="{$page_jump}" style="margin-right: 20px">
        	<input type="submit" class="button" value="Przejd¼">
		</form>
    </td>

    {* BEGIN: wyszukiwanie *}
    <td class="row1" style="padding: 0px 5px">
        <span style="font-size: 10px">poszukiwana fraza: {include file="help/template.quickhelp.tpl" helpfile="coalition.list"}</span><br>
		<form action="{$SCRIPT_NAME}" method="GET" style="padding: 0; margin: 0">
			<input type="hidden" name="sort" value="{$smarty.get.sort}">
			<input type="hidden" name="order" value="{$smarty.get.order}">
        	<input type="text" class="textField" name="keyword" value="{$smarty.get.keyword}" style="margin-right: 20px">
        	<input type="submit" class="button" name="new" value="Szukaj">
		</form>
    </td>
    {* END: wyszukiwanie *}


    {* BEGIN: lista*}
    <tr>
        <td colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" style="width: 100%">
            <tr>
                <td class="header">
                    {if $sorting_links.NAME.img}
                    <img src="{$image_dir}{$sorting_links.NAME.img}" style="margin-right: 10px">
                    {/if}
                    <a href="{$smarty.server.SCRIPT_NAME}{$sorting_links.NAME.link}" style="color: #C8A27C">Nazwa</a>
                </td>
                <td class="header">
                    {if $sorting_links.LAND.img}
                    <img src="{$image_dir}{$sorting_links.LAND.img}" style="margin-right: 10px">
                    {/if}

                    <a href="{$smarty.server.SCRIPT_NAME}{$sorting_links.LAND.link}" style="color: #C8A27C">Ziemia</a>
                </td>
                <td class="header">&nbsp;</td>
            </tr>
            
            {if $coalition_list}
                {section loop=$coalition_list name="coal" start=1}
                {cycle values="row1,row2" print="false" assign="row"}
                <tr>
                    <td class="{$row}" style="padding: 5px 5px; width: 50%">
                        <a href="{$root_dir}walka/infoGracza.php?name={$coalition_list[coal].nazwa}">{$coalition_list[coal].nazwa}</a><br>
						{if $coalition_list[coal].koalicja}
                        	<span style="font-size: 10px">koalicja: <a href="{$root_dir}koalicja/coalition.desc.php?coal={$coalition_list[coal].koalicja}" style="color: #949492">{$coalition_list[coal].koalicja}</a></span>
						{else}
							<span style="font-size: 10px">koalicja: Brak</span>
						{/if}
							<br><span style="font-size: 10px">Ostatnio by³: {$coalition_list[coal].ostatni_log}</span>
                    </td>
                    <td class="{$row}" align="center" style="font-size: 14px; font-weight: bold">{$coalition_list[coal].ziemia}</td>
                    <td class="{$row}" align="center">
                        <a href="{$CFG->adresSerwera}messages/messagebox.php?mode=3&amp;rcpt={$coalition_list[coal].nazwa}">
                        <img src="{$image_dir}list.gif" alt="Wy¶lij goñca z listem do ksiêstwa" title="Wy¶lij goñca z listem do ksiêstwa" style="margin: 0px 5px">
                        </a>

                        <a href="{$root_dir}znajomi/spisZnajomych.php?ktoD={$coalition_list[coal].nazwa}">
                        <img src="{$image_dir}ksiazka.gif" alt="Dodaj ksiêstwo do ksiêgi znajomych" title="Dodaj ksiêstwo do ksiêgi znajomych" style="margin: 0px 5px">
                        </a>
						<a href='{$root_dir}atak/?target={$coalition_list[coal].nazwa}'><img alt="Atak" title="Atak" src="{$image_dir}miecze_male.gif" alt="Atak">
                    </td>
                </tr>
                {/section}
            {else}
            <tr>
                <td align="center" colspan="3">Nie odnaleziono ¿adnego ksiêstwa</td>
            </tr>
            {/if}

            <tr>
                <td align="center" colspan="3" class="header">{if $coalition_list}strona {$coalition_list[0].current_page} / {$coalition_list[0].total_pages}{else}{/if}</td>
            </tr>
            </table>
        </td>
    </tr>
    {* END: lista *}


</tr>
</table>


{include file="main_bottom.tpl"}
{/strip}
