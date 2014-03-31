{strip}
{include file="main_top.tpl" tytul="Koalicje"}


<form action="{$SCRIPT_NAME}" method="GET" style="padding: 0; margin: 0">
<input type="hidden" name="sort" value="{$smarty.get.sort}">
<input type="hidden" name="order" value="{$smarty.get.order}">

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
        <input type="text" name="page" class="textField" value="{$page_jump}" style="margin-right: 20px">
        <input type="submit" class="button" value="Przejd¼">
    </td>


    {* BEGIN: wyszukiwanie *}
    <td class="row1" style="padding: 0px 5px">
        <span style="font-size: 10px">poszukiwana fraza: {include file="help/template.quickhelp.tpl" helpfile="coalition.list"}</span><br>
        <input type="text" class="textField" name="keyword" value="{$smarty.get.keyword}" style="margin-right: 20px">
        <input type="submit" class="button" name="new" value="Szukaj">
    </td>
    {* END: wyszukiwanie *}


    {* BEGIN: lista*}
    <tr>
        <td colspan="2">
            <table cellspacing="1" cellpadding="0" border="0" style="width: 100%">
            <tr>
                <td class="header">
                    {if $sorting_links.COALITION.img}
                    <img src="{$image_dir}{$sorting_links.COALITION.img}" style="margin-right: 10px">
                    {/if}
                    <a href="{$smarty.server.SCRIPT_NAME}{$sorting_links.COALITION.link}" style="color: #C8A27C">Koalicja</a>
                </td>
                <td class="header">
                    {if $sorting_links.MEMBERS.img}
                    <img src="{$image_dir}{$sorting_links.MEMBERS.img}" style="margin-right: 10px">
                    {/if}

                    <a href="{$smarty.server.SCRIPT_NAME}{$sorting_links.MEMBERS.link}" style="color: #C8A27C">Liczba królestw</a>
                </td>
                <td class="header">&nbsp;</td>
            </tr>

            {if $coalition_list}
                {section loop=$coalition_list name="coal" start=1}
                {cycle values="row1,row2" print="false" assign="row"}
                <tr>
                    <td class="{$row}" style="padding: 5px 5px; width: 50%">
                        <a href="coalition.desc.php?coal={$coalition_list[coal].nazwa}">{$coalition_list[coal].nazwa}</a><br>
                        <span style="font-size: 10px">cesarstwo: <a href="{$root_dir}walka/infoGracza.php?name={$coalition_list[coal].czlonek_1}" style="color: #949492">{$coalition_list[coal].czlonek_1}</a></span>
                    </td>
                    <td class="{$row}" align="center" style="font-size: 14px; font-weight: bold">{$coalition_list[coal].ilosc_czlonkow}</td>
                    <td class="{$row}" align="center">
                        <a href="{$CFG->adresSerwera}messages/messagebox.php?mode=3&amp;rcpt={$coalition_list[coal].czlonek_1}">
                        <img src="{$image_dir}list.gif" alt="Wy¶lij goñca z listem do cesarza" title="Wy¶lij goñca z listem do cesarza" style="margin: 0px 5px">
                        </a>

                        <a href="{$root_dir}znajomi/spisZnajomych.php?ktoD={$coalition_list[coal].czlonek_1}">
                        <img src="{$image_dir}ksiazka.gif" alt="Dodaj cesarza do ksiêgi znajomych" title="Dodaj cesarza do ksiêgi znajomych" style="margin: 0px 5px">
                        </a>
                    </td>
                </tr>
                {/section}
            {else}
            <tr>
                <td align="center" colspan="3">Nie odnaleziono ¿adnej koalicji</td>
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
</form>


{include file="main_bottom.tpl"}
{/strip}
