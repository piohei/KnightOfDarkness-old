{include file="main_top.tpl"}
<form action="tura.php" method='post'>
  {$bledyTura|default:""}
  <table width="100%" border="0" cellspacing="1" cellpadding="2">
    <tr >
      <td  class="header" colspan="2">
        Przygotowania do tury
      </td>
      <td class="header" >
        Nowa tura
      </td>
    </tr>
    <tr class="row1">
      <td>
        Punkty budowy
      </td>
      <td >
        {if $wolneMiejsceWSchowkuBudowlanym > 0}
        <font color="#00ff66">
        	{if $wolneMiejsceWSchowkuBudowlanym > 0 }
        		W schowku budowlanym masz zgormadzone {$kingdomInfo.co_buduje|nice_number} punktów budowy i masz jeszcze miejsce na {$wolneMiejsceWSchowkuBudowlanym|nice_number} punktów budowy. 
        	{else}
          		Wykorzystano wszystkie punkty budowy
            {/if}
        </font>
        {else}
        <font color="red">
        	{if $pojemnoscSchowkaBudowlanego > 0 }
        		Nie starczy Ci miejsca w schowku na nowe punkty budowy. Nadmiarowe punkty budowy przepadn± w nowej turze.
        	{else}
		        Niewykorzystane punkty budowy przy nowej turze przepadn±
            {/if}
        </font>
        {/if}
      </td>
        <td align="center" rowspan="4" width="150">
    
    <INPUT TYPE='hidden' NAME='nowaTura' VALUE="{$kingdomInfo.tury}">
    <input  type='image' src="{$image_dir}klepsydra.gif"  value='Tura' alt="Nowa tura">
  </td>
      </tr>
        <tr class="row2">
          <td >
            Wspó³czynnik produkcji dla kowali (ile % produkcji to broñ)
          </td>
          <td >
            <input type="text" size="3" class="textfield" name="wsp_prod" value="{$kingdomInfo.wsp_prod}">
            % 
          </td>
        </tr>
        <tr class="row1">
          <td >
            Podatek (0-100%)
          </td>
          <td >
            <input type="text" size="3" class="textfield" name="podatek" value="{$kingdomInfo.podatek}">
            % 
          </td>
        </tr>
        <tr class="row2">
          <td >
            Bonusy
          </td>
          <td >
        {if $smallKingdomBonus != 0 }
	        <font color="#00ee66">
          		Panie Twoje ksiêstwo jest ma³e przez co praca jest lepiej zorganizowana i wydajniesza.Dostajesz bonus spcjalnego BS z bonusem do produkcji {$smallKingdomBonus}%
          	</font>
        {else}
        		Panie nie mam Ci nic do obwieszczenia.
        {/if}
          </td>
        </tr>
</table>
</form>
<br>
<br>
<br>
<center>
	<a href="tura.php?raport_z_ostatniej_tury=1">podgl±d raportu z ostatniej tury</a>
</center>
<br>
{include file="main_bottom.tpl"}
