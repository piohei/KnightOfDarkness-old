{strip}
{include file="main_top.tpl"}
<center>
  {if $error!=""}
  <font color='red'>
    {$error}
  </font>
  {else}
  {if $czy_zablokowany}<span style="color:red">Konto zablokowane z powodu z³amania regulaminu</span>{/if}
  <table border="0" cellspacing="1" cellpaddnig="2" width="100%">
   <tr >
      <td class="row1">
        Tytu³ szlachecki
      </td>
      <td class="row2">
        {$rank}
      </td>
    </tr>
    <tr >
      <td class="row1">
        Nazwa ksiêstwa
      </td>
      <td class="row2">
        {$dane.nazwa}
      </td>
    </tr>
    <tr >
      <td class="row1">
        Ziemia
      </td>
      <td class="row2">
        {$dane.ziemia}
      </td>
      <tr >
        <td class="row1">
          Koalicja
        </td>
        <td class="row2">
          <a href="{$root_dir}koalicja/coalition.desc.php?coal={$dane.koalicja}">{$dane.koalicja}</a>
        </td>
      </tr>
    </tr>
        <tr >
      <td class="row1">
        Poprzednia era: 
      </td>
      <td class="row2">
        {if $historia->czyJest == 'ok'}
          Gospodarka: {$historia->dane.rank_1}&nbsp;
          Ziemia: {$historia->dane.rank_2}&nbsp;
          Armia: {$historia->dane.rank_3}
        {else}
          To jest pierwsza era 
        {/if}
      </td>
    
    </tr>
		</table>
		  <table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
    <tr>
      <td class="header" width="33%">
        Wiadomo¶æ
      </td>
      <td class="header" width="33%">
        Ksiêga znajomych
      </td>
	  <td class="header" width="33%">
        Atak
      </td>
    </tr>
    <tr class="row1">
      <td align="center">
        <a href="{$CFG->adresSerwera}messages/messagebox.php?mode=3&amp;rcpt={$dane.nazwa}">
        <img src="{$image_dir}list.gif" alt="Wy¶lij goñca z listem do ksiêstwa" title="Wy¶lij goñca z listem do ksiêstwa" style="margin: 0px 5px">
        </a>
      </td>
      <td align="center">
        <a href="{$root_dir}znajomi/spisZnajomych.php?ktoD={$dane.nazwa}">
        <img src="{$image_dir}ksiazka.gif" alt="Dodaj ksiêstwo do ksiêgi znajomych" title="Dodaj ksiêstwo do ksiêgi znajomych" style="margin: 0px 5px">
        </a>
      </td>
	  <td align="center">
        <a href='{$root_dir}atak/?target={$dane.nazwa}'><img alt="Atak" title="Atak" src="{$image_dir}miecze_male.gif" alt="Atak">
      </td>
    </tr>
  </table>
  <table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
    <tr>
      <td class="header" >
        data za³o¿enia konta
      </td>
      <td class="header" >
        ostatnio zalogowany
      </td>
    </tr>
    <tr class="row1">
      <td align="center">
        {$dane_gracza.data_zalozenia}
      </td>
      <td align="center">
        {$dane_gracza.ostatni_log}
      </td>
    </tr>
  </table>
  {if $dane_gracza.ujawnic=="true" || $czyAdmin==1}
  <table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
    <tr>
	  <td class="header" width="50%">
        Imiê
      </td>
      <td  class="row1" >
        {$dane_gracza.imie}
      </td>
    </tr>
    <tr>
	  <td class="header" width="50%">
        Nazwisko
      </td>
      <td  class="row1" >
        {$dane_gracza.nazwisko}
      </td>
    </tr>
    <tr>
	  <td class="header" width="50%">
        Kraj
      </td>
      <td  class="row1" >
        {$dane_gracza.kraj}
      </td>
    </tr>
    <tr>
	  <td class="header" width="50%">
        Miasto
      </td>
      <td  class="row1" >
        {$dane_gracza.miasto}
      </td>
    </tr>
    <tr>
	  <td class="header" width="50%">
        Wiek
      </td>
      <td  class="row1" >
        {$wiek}
      </td>
    </tr>
    
  </table>
  {else}
  <center>
    Gracz nie pozwoli³ na ujawnienie danych osobowych.
  </center>
  {/if}
  {/if}
    <table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
    <tr>
      <td  class="header" colspan="3">
        Wojny (10 ostatnich)
      </td>
    </tr>
    <tr >
       <td class="header" >
            Przeciwnik*
       </td> 
        <td class="header">
            {$login}
       </td> 
        <td class="header">
            Data
       </td> 
    </tr>
        {foreach key=key item=item from=$historia_wojen}
    {if $key%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
    {/if}
        {if $item.kto == $login}
            {if $item.czy_wygral_atakujacy==1}
                <td ><a href="infoGracza.php?name={$item.kogo}"><span style="color:green">{$item.kogo}</span></a> </td>
            {else}
                 <td ><a href="infoGracza.php?name={$item.kogo}"><span style="color:red">{$item.kogo}</span></a> </td>
            {/if}
            
            <td>Atakowa³</td>
        {else}
            {if $item.czy_wygral_atakujacy!=1}
                <td><a href="infoGracza.php?name={$item.kto}"><span style="color:green">{$item.kto}</span></a> </td>
            {else}
                 <td ><a href="infoGracza.php?name={$item.kto}"><span style="color:red">{$item.kto}</span></a> </td>
            {/if}
             
             <td>Broni³ siê</td>
        {/if}
        <td>{$item.data}</td>
    </tr>    
    {/foreach}
  <td  colspan="3">
    * Zielony kolor oznacza wygran± ksiêstwa {$login} a czerwony przegran±
    </td>
  </table>
  
  
  {include file="main_bottom.tpl"}
</center>
{/strip}
