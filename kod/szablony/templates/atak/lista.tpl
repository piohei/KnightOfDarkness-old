{if $mode!=ATTACK_KOALICYJNY_DETAIL }
<table cellspacing="0" cellpadding="0" style="width: 100%; height:100%; color: #B0A392; font-size: 11px;">
  <tr style="background-color:#2D210E; height:25px ;" align="center">
    <td style="border-bottom:1px #715E46 solid">Cel ataku</td>
    <td style="border-bottom:1px #715E46 solid">£ucznicy</td>
    <td style="border-bottom:1px #715E46 solid">Piechota</td>
    <td style="border-bottom:1px #715E46 solid">Husaria</td>
	<td style="border-bottom:1px #715E46 solid">Szpiedzy</td>
    <td style="border-bottom:1px #715E46 solid">Tury</td>
    <td style="border-bottom:1px #715E46 solid">Wycofaj</td>
    <td style="border-bottom:1px #715E46 solid">Szczegó³y</td>
  </tr>
  {foreach from=$attacks_list item=single_attack}
  <tr align="center"  onmouseover="this.style.backgroundColor='#544224'" cellpadding="3" onmouseout="this.style.backgroundColor=''" style="border-top: 1px solid #715E46;">
    {if $single_attack.tryb == 6 }
    	{if $single_attack.ID_wojny==1}
	     <td style="border-bottom:1px #715E46 solid">Atak koalicyjny na {$single_attack.kogo}</td>
    	{else}
    	 <td style="border-bottom:1px #715E46 solid">Atak koalicyjny</td>
    	{/if}
    {else}
    <td style="border-bottom:1px #715E46 solid">{$single_attack.kogo}</td>
    {/if}
    <td style="border-bottom:1px #715E46 solid">{$single_attack.lucznicy}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.piechota}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.husaria}</td>
		<td style="border-bottom:1px #715E46 solid">{$single_attack.szpiedzy}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.tury_do_konca}</td>
    <td style="border-bottom:1px #715E46 solid"><a href="?mode=1&id={$single_attack.id}">Wycofaj</a></td>
    {if $single_attack.tryb == 6 && $single_attack.ID_wojny==1}
     <td style="border-bottom:1px #715E46 solid"><a href="?mode=3&id={$single_attack.id}">szczegó³y</a></td>
    {else}
    <td style="border-bottom:1px #715E46 solid">
    	{if $single_attack.tryb eq 1} gospodarka {/if}
    	{if $single_attack.tryb eq 2} ziemia {/if}
    	{if $single_attack.tryb eq 3} szpiegowanie {/if}	
    	{if $single_attack.tryb eq 4} podpalanie {/if}	
    	{if $single_attack.tryb eq 5} budynek koñcowy {/if}	
    	{if $single_attack.tryb eq 6} koalicyjny {/if}	
    	{if $single_attack.tryb eq 7} kradzie¿ {/if}	
    	{if $single_attack.tryb eq 8} skrytobójstwo {/if}	
    	{if $single_attack.tryb eq 9} oblê¿enie {/if}
    	{if $single_attack.tryb eq 10} propaganda {/if}	
    </td>
    {/if}
  </tr>
  {/foreach}
		<tr style="height:100%;border-top: 1px solid #715E46" align="center"><td colspan="6">&nbsp;<b>{$TEKST}</b></td></tr>
</table>

{else}

<table cellspacing="0" cellpadding="0" style="width: 100%; height:100%; color: #B0A392; font-size: 11px;">
  <tr style="background-color:#2D210E; height:25px ;" align="center">
    <td style="border-bottom:1px #715E46 solid">Kto atakuje</td>
    <td style="border-bottom:1px #715E46 solid">£ucznicy</td>
    <td style="border-bottom:1px #715E46 solid">Piechota</td>
    <td style="border-bottom:1px #715E46 solid">Husaria</td>
	<td style="border-bottom:1px #715E46 solid">Szpiedzy</td>
    <td style="border-bottom:1px #715E46 solid">Tury</td>
    <td style="border-bottom:1px #715E46 solid">Wycofaj</td>
    <td style="border-bottom:1px #715E46 solid">Szczegó³y</td>
  </tr>
  {foreach from=$attacks_list item=single_attack}
  <tr align="center"  onmouseover="this.style.backgroundColor='#544224'" cellpadding="3" onmouseout="this.style.backgroundColor=''" style="border-top: 1px solid #715E46;">
    <td style="border-bottom:1px #715E46 solid">{$single_attack.kto}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.lucznicy}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.piechota}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.husaria}</td>
	<td style="border-bottom:1px #715E46 solid">{$single_attack.szpiedzy}</td>
    <td style="border-bottom:1px #715E46 solid">{$single_attack.tury_do_konca}</td>
    {if $single_attack.kto == $kingdomInfo.nazwa } 
    	<td style="border-bottom:1px #715E46 solid"><a href="?mode=1&id={$single_attack.id}">Wycofaj</a></td>
    {else}
    	<td style="border-bottom:1px #715E46 solid">&nbsp;</td>
    {/if}
    
    {if $single_attack.tryb == 6 && $single_attack.ID_wojny==1}
    	<td style="border-bottom:1px #715E46 solid"><a href="?mode=3&id={$single_attack.id}">szczegó³y</a></td>
    {else}
    	<td style="border-bottom:1px #715E46 solid">&nbsp;</td>
    {/if}
  </tr>
  {/foreach}
		<tr style="height:100%;border-top: 1px solid #715E46" align="center"><td colspan="6">&nbsp;<b>{$TEKST}</b></td></tr>
</table>
{/if}
