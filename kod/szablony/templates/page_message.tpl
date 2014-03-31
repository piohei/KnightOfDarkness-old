{* nazwa_zmiennej - opis [wartosc_domyslna]                                   *}
{*----------------------------------------------------------------------------*}
{* link_description - nazwa linka                                             *}
{* link_href        - atrybut href powyzszego linka                           *}
{* message_text     - wyswietlany tekst                                       *}
{* title            - tutul strony                                            *}
{* refresh_time     - czas po ktorym nastapi przekierowanie                   *}
{* refresh_href     - stron na ktora nastapi przekierowanie                   *}


{strip}
{config_load file="conf" section="HEAD"}


<html>
<head>
    {if $refresh_time != "" && $refresh_href != ""}
        <meta http-equiv="refresh" content="{$refresh_time}; {$refresh_href}">
    {/if}
    {#meta_standard#}
    <link rel="stylesheet" type="text/css" href="{$style_dir}main_style.css">
    <title>{$page_title|default:"Knight of Darkness"}</title>
</head>
<body>
    <table style="border: 0px; width: 100%; height: 100%">
    <tr>
        <td valign="middle" align="center">


            {* tabelka z tekstem *}
            <table border="0" width="400" cellspacing="0" cellpadding="0">
            <tr>
                <td width="16"  height="28"><img border="0" src="{$image_dir}registerwindow_part01.jpg" width="16" height="28"></td>
                <td width="567" height="28" background="{$image_dir}registerwindow_part08.jpg"></td>
                <td width="16"  height="28"><img border="0" src="{$image_dir}registerwindow_part03.jpg" width="16" height="28"></td>
            </tr>
            <tr>
                <td></td>
                <td style="background-color: #333333; font-size: 15px; color: #C88D53;">
                    <p style="margin-left: 10px; margin-right: 10px; margin-top: 10px; margin-bottom: 10px;">
                        {$message_text}
                    {*Rejestracja przebieg³a pomy¶lnie.<br>
                    Na podany adres e-mail zosta³a wys³ana wiadomo¶æ, w której znajdziesz informacje jak aktywowaæ swoje konto. Prosimy nie zwlekaæ z aktywacj¹ gdy¿ co pewnien czas nieaktywowane konta s¹ usuwane.<br>
                    Dziekujemy i zapraszamy do gry!<br>*}
                    {if $link_description != "" && $link_href != ""}
                        </br><center><a href="{$link_href}">{$link_description}</a></center>
                    {/if}
                    </p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td height="28" width="16"><img border="0" src="{$image_dir}registerwindow_part04.jpg"></td>
                <td height="28" width="567" background="{$image_dir}registerwindow_part07.jpg">&nbsp;</td>
                <td height="28" width="16"><img border="0" src="{$image_dir}registerwindow_part05.jpg"></td>
            </tr>
            </table>


        <td>
    </tr>
    </table>
</body>
</html>


{/strip}
