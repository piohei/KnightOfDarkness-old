	{* nazwa_zmiennej = wartosc_domyslna                                          *}
{*-----------------------------------------------------------------------------}
 $admin_switch
        Jesli ustawiona na 'ON' pokazuje link dajacy dostep do panelu admini-
        stracyjnego

 $left_panel = left_panel.tpl
        nazwa/sciezka do template'a lewego panela

 $main_menu = main_menu.tpl
        nazwa/sciezka do template'a menu glownego

 $main_panel = blank.tpl
        nazwa/sciezka do template'a glownego panela

 $main_panel_expand
        jesli 'TRUE' main_panel rozszerza sie do szerokosci calej
        strony glownej

 $page_foot
        jesli ustawione na 'OFF' stopka strony nie jest wyswietlana

 $submenu
        nazwa/sciezka do template'a menu dodatkowego (podemnu). Jesli nie
        zostanie ustawiona nic nie zostanie wyswietlone.

 $turns_counter
        licznik pozostalych tur. Jesli nie jest ustawiony proboje uzyskac
        informacje z $kingdomInfo. Wartosc 'OFF' wylacza wyswietlanie licznika.
{-----------------------------------------------------------------------------*}



{config_load file="conf" section="HEAD"}

{#dtd#}
<html>
<head>
<strip>
{#meta_standard#}
{#link_css_mainstyle#}
<link rel="stylesheet" type="text/css" href="{$style_dir}main_style.css"/>
{if $left_panel == "" || $left_panel == "admin/admin_left_panel.tpl"}
    <link rel="stylesheet" type="text/css" href="{$style_dir}default_left_panel.css">
{/if}

{if $submenu != ""}
    <link rel="stylesheet" type="text/css" href="{$style_dir}default_submenu.css">
{/if}

<script type="text/javascript">
var b1_active = new Image(); b1_active.src = "{$image_dir}top_header_button1_activated.jpg";
var b2_active = new Image(); b2_active.src = "{$image_dir}top_header_button2_activated.jpg";
var b3_active = new Image(); b3_active.src = "{$image_dir}top_header_button3_activated.jpg";
{literal}
function swapImg(srcImg, dscImg){
    if(dscImg == "restore")
        srcImg.src = mem;
    else{
        mem = srcImg.src;
        srcImg.src = dscImg.src;
    }
}
{/literal}
</script>

<script type="text/javascript" src="{$javascript_dir}windows.js"></script>
<script type="text/javascript" src="{$javascript_dir}common.js"></script>


<title>Knight of Darkness</title>
</head>
<body>

<center>
<table>
<tr>
<td valign="top">



</td>
<td valign="top" align="left">

<table border="0" cellspacing="0" cellpadding="0" style="width: 755px" >
  <tr>
    <td style="height: 86px" colspan="3">



{*- naglowek -----------------------------------------------------------------*}
      <table border="0" style="width: 100%; height: 86px" cellspacing="0" cellpadding="0">
        <tr>
          <td style="width: 107px" rowspan="5"><img src="{$image_dir}top_header_part01.jpg" alt="KoD header"></td>
          <td style="width: 297px" rowspan="5"><img src="{$image_dir}top_header_part02.jpg" alt="KoD header"></td>
          <td style="width: 280px" rowspan="5"><img src="{$image_dir}top_header_part03.jpg" alt="KoD header"></td>
          <td style="width: 71px; height: 8px"><img src="{$image_dir}top_header_part04.jpg" alt="KoD header"></td>
        </tr>


        {*- menu personalne --------------------------------------------------*}
        <tr>
          <td style="width: 71px">
			<a href="{$root_dir}profil/profile.php"><img src="{$image_dir}top_header_button1.jpg" onMouseOver="swapImg(this,b1_active)" onMouseOut="swapImg(this,'restore')" alt="Profil" border="0"></a>
           </td>
        </tr>
        <tr>
          <td style="width: 71px">
			<a href="{$root_dir}wyloguj.php"><img src="{$image_dir}top_header_button2.jpg" onMouseOver="swapImg(this,b2_active)" onMouseOut="swapImg(this,'restore')" alt="Wyloguj" border="0"></a>
            </td>
        </tr>
        <tr>
          <td style="width: 71px">
		    <a href="{$root_dir}pomoc/pomoc.php"><img src="{$image_dir}top_header_button3.jpg" onMouseOver="swapImg(this,b3_active)" onMouseOut="swapImg(this,'restore')" alt="Pomoc" border="0"></a>
          </td>
        </tr>
        {*--------------------------------------------------------------------*}


        <tr>
          <td style="width: 71px; height: 9px"><img src="{$image_dir}top_header_part05.jpg" alt=""></td>
        </tr>
      </table>
{*----------------------------------------------------------------------------*}



    </td>
  </tr>



{*- menu glowne  -------------------------------------------------------------*}
    <tr>
    <td style="width: 30px; height: 20px"><img src="{$image_dir}top_menu_decor_left.jpg" alt=""></td>
    <td  style="width: 695px; height: 20px; background: url({$image_dir}top_menu_bg.jpg) repeat-x">
        {include file=$main_menu|default:"main_menu.tpl"}
    </td>
    <td style="width: 30px; height: 20px"><img src="{$image_dir}top_menu_decor_right.jpg" alt=""></td>
    </tr>
{*----------------------------------------------------------------------------*}


  <tr>
    <td colspan="3">
      <table border="0" width="755" cellspacing="0" cellpadding="0">
        <tr>
        {if $main_panel_expand != "TRUE"}
            {*+ lewy panel *}
            <td style="width: 231; vertical-align: top">
                {include file=$left_panel|default:"left_panel.tpl" left_panel_width="231px"}
            </td>
            {*- lewy panel *}
            {assign var="main_panel_width" value="524"}
        {else}
            {assign var="main_panel_width" value="755"}
        {/if}
            <td style="width: {$main_panel_width}px; vertical-align: top">


{*- przycisk tury ------------------------------------------------------------*}
{if $turns_counter != "OFF"}
             <table border="0" width="{$main_panel_width}" cellpadding="0" cellspacing="0">
                 <tr>

                    <td height="20" width="{$main_panel_width - 100}" >
                      <table cellspacing="0" cellpadding="0" border="0" background="{$image_dir}top_menu_bg.jpg">
                        <tr>
                          <td  width="30"><img border="0" src="{$image_dir}menu-left-kp.jpg"></td>
                          <td width="100" align="center"><a class="mainMenuItem" href="{$root_dir}walka/spisgraczy.php">spis ksiêstw</a></td>
                          <td width="11"><img border="0" src="{$image_dir}top_menu_itemseparator.jpg"></td>
                          <td width="89" align="center"><a class="mainMenuItem" href="{$root_dir}ranking/ranking.php">rankingi</a></td>
                          <td width="11"><img border="0" src="{$image_dir}top_menu_itemseparator.jpg"></td>
                          <td width="89" align="center"><a class="mainMenuItem" href="{$root_dir}ksiestwo/ksiestwo.php">ksiêstwo</a></td>
                          <td width="11"><img border="0" src="{$image_dir}top_menu_itemseparator.jpg"></td>
                          <td width="75" align="center"><a class="mainMenuItem" href="{$root_dir}forum">forum</a></td>
                          <td  width="30"><img border="0" src="{$image_dir}menu-right-kp.jpg"></td>
                        </tr>
                      </table>
                    </td>
                     <td height="18" width="70" align="center" style="border: 0 solid #4E4639; border-left-width: 1px; border-bottom-width: 1px">
                      <a href="{$root_dir}tura/tura.php" class="mainMenuItem" style="color: #C8A27C">tura</a>
                     </td>

                     <td height="18" width="30" align="center" style="color: #979779; background-color: #251F17; border: 0 solid #4E4639; border-right-width: 1px; border-bottom-width: 1px">
                         {if $turns_counter == ""}
                             {assign var="turns_counter" value=$kingdomInfo.tury}
                         {/if}
                         {$turns_counter|default:"<span style='color: red'>\$turns_counter&nbsp;not&nbsp;set</span>"}
                     </td>
                 </tr>
             </table>
{/if}
{*----------------------------------------------------------------------------*}


{*- submenu ------------------------------------------------------------------*}
{* Dodatkowe menu (podemnu).                                                  *}
{if $submenu != ""}
    {include file=$submenu main_width=$main_panel_width}
{/if}
{*----------------------------------------------------------------------------*}


{*- panel glowny -------------------------------------------------------------*}
          <table border="0" width="{$main_panel_width}" cellspacing="0" cellpadding="0">
            <tr>
              <td> {include file=$main_panel|default:"blank.tpl" main_width=$main_panel_width}</td>
            </tr>
          </table>
{*----------------------------------------------------------------------------*}


          </td>
        </tr>
      </table>
    </td>
  </tr>
  {if $admin_switch == "ON"}
  <tr>
    <td colspan="3" align="center">
        <a href="{$root_dir}panel/index.php">Panel administracyjny</a>
    </td>
  </tr>
  {/if}
 
</table>
</td>
</table>
</center>
</body>
</html>
</strip>
