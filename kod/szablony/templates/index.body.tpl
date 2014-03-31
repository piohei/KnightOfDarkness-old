<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
{strip}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<meta name="Robots" content="all">
<meta name="Keywords" content="Knight of Darkness, kod, MMORPG, MMOG, gra, gra przeglądarkowa, gry przeglądarkowe, gry, online, on-line, kod-online">
<meta name="Description" content="Knight of Darkness (KoD) to polska gra przeglądarkowa typu MMOG (Massive Multiplayer Online Game). Akcja gry osadzona jest w średniowieczu. Gracz tworzy i rozwija autonomiczne królestwo pod względem militarnym i gospodarczym.">
<meta name="Title" content="Knight of Darkness - darmowa gra przeglądarkowa online" >
<link rel="stylesheet" type="text/css" href="{$style_dir}index.css">
<title>Knight of Darkness - darmowa gra przeglądarkowa online</title>

</head>
{if $section == "register"}
    {assign var="onload_script" value="document.forms['registrationForm'].elements['login'].focus(); cookieLoadData(); cookieTruncate()"}
{elseif $section == "about"}
    {assign var="onload_script" value="document.forms['loginForm'].elements['login'].focus()"}
{/if}
<body onLoad="{$onload_script}">
<div align="center">
    <table cellpadding="0" cellspacing="0" border="0" style="width: 757px; height: 550px; background-color: #91877E">
    <tr>
        <td style="width: 1px; height: 280px; background: url({$image_dir}index.vertical_border_part1.jpg) no-repeat top"></td>
        <td rowspan="3" style="width: 755px; background-color: #000000" valign="top">
            <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 560px">
            <tr style="height: 41px">
                <td style="width: 252px; background: url({$image_dir}index.header1_1.jpg) no-repeat top">&nbsp;</td>
                <td style="width: 251px; background: url({$image_dir}index.header1_2.jpg) no-repeat top">&nbsp;</td>
                <td style="width: 252px; background: url({$image_dir}index.header1_3.jpg) no-repeat top">&nbsp;</td>
            </tr>
            <tr style="height: 103px">
                <td style="background: url({$image_dir}index.header2_1.jpg) no-repeat top">&nbsp;</td>
                <td style="background: url({$image_dir}index.header2_2.jpg) no-repeat top">&nbsp;</td>
                <td style="background: url({$image_dir}index.header2_3.jpg) no-repeat top">&nbsp;</td>
            </tr>
            <tr style="height: 19px">
                <td colspan="3" style="background: url({$image_dir}index.menu_gradient.jpg) repeat-y top; padding-left: 20px">
                    <a class={if $section == "about"}"menuCurrent"{else}"menu"{/if} href="{$root_dir}index.php?section=about">Strona główna</a>
                    <a class={if $section == "register"}"menuCurrent"{else}"menu"{/if} href="{$root_dir}index.php?section=register">Rejestracja</a>
                    <a class={if $section == "mypass"}"menuCurrent"{else}"menu"{/if} href="{$root_dir}index.php?section=mypass">Zgubiłem pieczęć</a>
                    <a class={if $section == "promotion"}"menuCurrent"{else}"menu"{/if} href="{$root_dir}index.php?section=promotion">Promocja</a>
                    <a class={if $section == "forum"}"menuCurrent"{else}"menu"{/if} href="{$root_dir}forum">Forum</a>
                </td>
            </tr>
            <tr style="height: 2px">
                <td colspan="3" style="background: url({$image_dir}index.menu_shadow.jpg) no-repeat top"></td>
            </tr>
            <tr>
                <td colspan="3" valign="top">


                {* BEGIN body*}
                {include file=$body}

                {* END body *}


                </td>
            </tr>
            <tr style="height: 1px"><td colspan="3" style="background: url({$image_dir}index.foot_topline.jpg) no-repeat top"></td></tr>
            <tr style="height: 19px">
                <td colspan="3">
                <table style="width: 100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="foot" style="width: 70%; text-align: left; padding-left: 8px">
                        Darmowa gra Massive Multiplayer Online RPG
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        PageRank {include file="`$www_dir`PAGERANK"}/10
                        </td>
                        <td class="foot" style="width: 30%; text-align: right; padding-right:8px">
                        Wersja {$smarty.const.KOD_VERSION}
                        </td>
                    </tr>
                </table>
                </td>
            </tr>
            <tr style="height: 1px"><td colspan="3" style="background: url({$image_dir}index.foot_bottomline.jpg) no-repeat top"></td></tr>
            </table>
        </td>
        <td style="width: 1px; height: 280px; background: url({$image_dir}index.vertical_border_part1.jpg) no-repeat top"></td>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td style="width: 1px; height: 280px; background: url({$image_dir}index.vertical_border_part2.jpg) no-repeat bottom"></td>
        <td style="width: 1px; height: 280px; background: url({$image_dir}index.vertical_border_part2.jpg) no-repeat bottom"></td>
    </tr>
    </table>
		<a href="http://rpgtextowe.topka.pl/?we=drthkwas"><img src="http://www.top-rpg.yoyo.pl/152x52ver1.png" width=155 height=50 border=0 alt="Toplista-Gier"></a>
		<a href="http://mmorpg.toplista.pl/?we=drthkwas"><img src="http://s207272909.onlinehome.us/tm.gif" width=120 height=50 border=0 alt="MMORPG Top50"></a>
		<a href="http://gryprzegladarkowe.topka.pl/?we=drthkwas"><img src="{$image_dir}glosujnagre2.jpg" alt="gra przeglądarkowa" width=92 height=50 border=0</a>
		<a href="http://top50.com.pl/"><img src="http://top50.com.pl/button.php?u=DrthKwas&t=3" alt="TOP50 Gry" width=90 height=50 border=0 ></a>
		<a href="http://graonline.toplista.pl/?we=drthkwas"><img src="{$image_dir}glosujnagre.jpg" alt="gra przeglądarkowa" width=90 height=50 border=0</a>
	<br/>
</div>
</body>
</html>
{/strip}
