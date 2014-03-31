{include file="main_top.tpl"}
  <table width="100%" border="0" cellspacing="1" cellpadding="0" >
    <tr>
      <td valign="top" class="row1">
        <table width="100%"  border="0" cellspacing="1" cellpadding="2" >
        <tr class="row1">
          <td class="header">
            Rankingi
          </td>
        </tr>
        
        <tr>
          <td class="row1">
            <p>&raquo; <a href="ranking.php?tryb=armia">Armia</a></p>
          </td>
        </tr>
        <tr>
          <td class="row2">
            <p>&raquo; <a href="ranking.php?tryb=ziemia">Ziemia</a></p>
          </td>
        </tr>
        <tr>
          <td class="row1" >
            <p>&raquo; <a href="ranking.php?tryb=gospodarka">Gospodarka</a></p>
          </td>
        </tr>
         <tr>
          <td class="row2" >
            <p>&raquo; <a href="ranking.php?tryb=koalicja_ziemia">Koalicje(ziemia)</a></p>
          </td>
        </tr>
        <tr>
          <td class="row1" >
            <p>&raquo; <a href="ranking.php?tryb=koalicja_armia">Koalicje(armia)</a></p>
          </td>
        </tr>
         <tr>
          <td class="row2" >
            <p>&raquo; <a href="ranking.php?tryb=koalicja_gospodarka">Koalicje(gospodarka)</a></p>
          </td>
        </tr>
        <tr>
          <td class="row1" >
            <p>&raquo; <a href="ranking.php?tryb=wojownicy">Wojownicy</a></p>
          </td>
        </tr>
        </table>
      </td>
      <td >
        <table width="100%" border="0" cellspacing="1" cellpadding="2" >
        <tr>
          <td class="header">
            Pozycja
          </td>
          <td class="header">
            Nazwa
          </td>
          <td class="header">
            Punkty
          </td>
        </tr>
        {foreach key=key item=item from=$spisKsiestw->oni}
          {if $item.zaznacz}
            <tr class="row3">
          {else}
            {if $key%2==0}
              <tr class="row1">
            {else}
              <tr class="row2">
            {/if}
          {/if}
              <td align="right">
                {$key+1}
              </td>
              <td>
              {if $mode == 'coalition'}
                <a href="{$root_dir}koalicja/coalition.desc.php?coal={$item.nazwa}">{$item.nazwa}</a>
              {else}
                <a href="{$root_dir}walka/infoGracza.php?name={$item.nazwa}">{$item.nazwa}</a>
              {/if}
              </td>
              <td>
              {if $tryb == 'ziemia' || $tryb == 'koalicja'}
                {$item.ranking}
              {else}
	           	{if $item.zaznacz}
    		           {$item.ranking}
	            {else}
						{$item.ranking} <!--  USUNIECIE TEJ LINII POWODUJE BRAK WYSWIETLENIA RANKINGOW -->
    	        {/if}
              {/if}
              </td>
            </tr>
      {/foreach} 
       
    {if not $spisKsiestw->jestem}
      <tr class="row3">
        <td align="right">
        {$spisKsiestw->ja.pozycja}
      </td>
      <td>
        {$spisKsiestw->ja.nazwa}
      </td>
      <td>
        {$spisKsiestw->ja.ranking}
      </td>
      <tr>
       
    {/if}
     </table>
      </td>
    </tr>
  </table>
{include file="main_bottom.tpl"}
