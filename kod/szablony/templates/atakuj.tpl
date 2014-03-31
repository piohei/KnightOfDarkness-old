{include file="main_top.tpl"}
{strip}
<center>
  <table width="100%" cellspacing="1" cellpadding="3">
  {if $tryb=='budynek'}
    <form action="../walka/przygotowanie_ataku.php?tryb={$tryb}" method="post">
  {else}
    <form action="../walka/przygotowanie_ataku.php" method="post">
  {/if}
      <tr class="row2">
        <td>
          Nazwa :
        </td>
        <td>
          <input class='textfield' name='kogo_atakujesz' value='{$kogo_atakujesz}'>
        </td>
        <td>
          <a href='spisgraczy.php'>Spis królestw</a>
        </td>
      </tr>
      <tr class="row1">
        <td>
            £ucznicy:
        </td>
        <td>
           <input class='textfield' name='ile_lucznikow' value=0>
       
        </td>
        <td rowspan="3" align="center">
          <img src="{$image_dir}miecze.gif">
        </td>
      </tr>
      <tr class="row2">
        <td>
         Piechota:
        </td>
        <td>
            <input class='textfield' name='ile_piechoty' value=0>
        </td>
      </tr>
      <tr class="row1">
        <td>
          Husaria:
        </td>
        <td>
          <input class='textfield' name='ile_husarow' value=0>
        </td>
      </tr>
      <tr class="row2">
        <td colspan=3>
          &nbsp;
        </td>
      </tr>
      <tr class="row1">
        <td rowspan="3">
          Tryb ataku
        </td>
        
        <td align="center">
          <input type='radio' name='tryb_ataku' value='gospodarka'>
        </td>
        <td>
          gospodarka
        </td>
      </tr>
      
      <tr class="row2">
         <td align="center">
          <input type='radio' name='tryb_ataku' value='ziemia' checked>
        </td>
        <td>
          ziemia
        </td>
      </tr>
      <tr align='center' class="row1">
        <td colspan=3>
          <input class='button' type='submit' value='Atakuj'>
        </td>
      </tr>
    </form>
  </table>
  
   <table width="100%" cellspacing="1" cellpadding="3">
   <form action="../walka/spyattack_prep.php" method="post">
    <tr>
        <td align="center" class="kp-header" colspan="3">
            Atak szpiegowski
        </td>
    </tr>
    <tr class="row1">
        <td>
            Nazwa :
        </td>
        <td>
            <input class='textfield' name='kogo_atakujesz' value='{$kogo_atakujesz}'>
        </td>
        <td rowspan="3">
            <img src="{$image_dir}daggers.gif">
        </td>
    </tr>
    <tr class="row1">
        <td>
            Szpiedzy :
        </td>
        <td>
            <input class='textfield' name='ile_szpiegow' value=0>
        </td>
    </tr>
    <tr class="row2">
        <td colspan="2">
            &nbsp;
        </td>
        
    </tr>
     <tr class="row1">
        <td rowspan="3">
            Tryb ataku
        </td>
        <td align="center">
          <input type='radio' name='tryb_ataku' value='asasynacja' disabled>
        </td>
        <td>
         asasynacja
        </td>
    </tr>
    <tr class="row2">
        <td align="center">
          <input type='radio' name='tryb_ataku' value='podpalenie'>
        </td>
        <td>
         podpalenie
        </td>
    </tr>
    <tr class="row1">
        <td align="center">
          <input type='radio' name='tryb_ataku' value='szpiegostwo' checked>
        </td>
        <td>
         zbieranie informacji
        </td>
    </tr>
    <tr align='center' class="row2">
        <td colspan=3>
        
          <input class='button' type='submit' value='Szpieguj'>
   
        </td>
      </tr>
    </form>
   </table>
  {include file="main_bottom.tpl"}
</center>
{/strip}
