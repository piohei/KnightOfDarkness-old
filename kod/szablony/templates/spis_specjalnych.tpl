{popup_init src="$www_root/js/overlib/overlib.js"}
{include file="main_top.tpl"}
<table  border="0" width="100%" bgcolor="#212223">
<tr>
  <td>
  <table>
    {foreach from=$budynki item =  rozbudowa key=key}
    <tr>
        {foreach from = $rozbudowa item=budynek key=key}
        {if $budynek.poprzedni!=0 }
          <td valing="middle">
            <img src="{$image_dir}arrow.gif">
          </td>
        {/if}
        <td>
          <img src="{$image_dir}budynki/{$budynek.img}"  title="{$budynek.opis}" />
          <div class="podpis">
	    {$budynek.nazwa}<br/>
            cena:{$budynek.koszt}
          </div>
        </td>
        {/foreach}
    </tr>
    {/foreach}
  </table>
<center>
 <a href="{$root_dir}budowa/spis.php?strona={$page-1}"><</a> 
 strona 
<a href="{$root_dir}budowa/spis.php?strona={$page+1}">></a>
</center>
  </td>
</tr>
</table>
{include file="main_bottom.tpl"}
