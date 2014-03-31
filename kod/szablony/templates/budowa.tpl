{include file="main_top.tpl"}
{strip}
<table width="100%" border="0" cellspacing="1" cellpadding="0" >
  <tr><td  class="header" align="center">BUDYNKI ZWYK£E</td>
  <td class="header" align='center'><a href="spis.php">BUDYNKI SPECJALNE</a></td></tr>
  <tr>
    <td align='center' valign='top' >
  	<form action="buduj.php" method="post">
  		<table  width=100%  border="0" cellspacing="1" cellpadding="3">
  			{if $wynik!=""}
  			<tr class="row1">
  			 <td colspan="5">
  			   {$wynik}
  			 </td>
  			</tr>
  			{/if}
        <tr class="row1">
  				<td class="nb">
  					NAZWA
  				</td>
  				<td  class="nb">
  					ILE PB
  				</td><td class="nb">ZBUDOWANE </td><td class="nb">W TRAKCIE</td>
  				<td class="nb">KOSZT</td>
  			</tr>
  		
        <tr class="row2">
  				<td class="nb">
  					DOMY
  				</td>
  				<td>
  					<input type="text" size="3" class="textfield" name="domy"><br>
  				</td><td>{$kingdomInfo.domy} </td><td> {$kingdomInfo.domy_pr*$kosztZwyklych.domy}</td>
  				<td>{$kosztZwyklych.domy}</td>
  			</tr>
  			<tr class="row1">
  				<td class="nb">
  					KOPALNIE Z£OTA
  				</td>
  				<td>
  					<input type="text" size="3" class="textfield" name="kopalnie_zlota"><br>
  				</td><td>{$kingdomInfo.kopalnie_zlota} </td><td>  {$kingdomInfo.kopalnie_zlota_pr*$kosztZwyklych.kopalnie_zlota}</td>
  			    <td>{$kosztZwyklych.kopalnie_zlota}</td>
              </tr>
  			<tr class="row2">
  				<td class="nb">
  					KOPALNIE ¯ELAZA
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="kopalnie_zelaza"><br>
  				</td><td>{$kingdomInfo.kopalnie_zelaza} </td><td> {$kingdomInfo.kopalnie_zelaza_pr*$kosztZwyklych.kopalnie_zelaza}</td>
  			    <td>{$kosztZwyklych.kopalnie_zelaza}</td>
            </tr>
  			<tr class="row1">
  				<td class="nb">
  					FARMY
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="farmy"><br>
  				</td><td>{$kingdomInfo.farmy} </td><td> {$kingdomInfo.farmy_pr*$kosztZwyklych.farmy}</td>
  				<td>{$kosztZwyklych.farmy}</td>
  			</tr>
  			<tr class="row2">
  				<td class="nb">
  					WARSZTATY
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="warsztaty"><br>
  				</td><td>{$kingdomInfo.warsztaty} </td><td> {$kingdomInfo.warsztaty_pr*$kosztZwyklych.warsztaty}</td>
  				<td>{$kosztZwyklych.warsztaty}</td>
  			</tr>
  			<tr class="row1">
  				<td class="nb">
  					KOSZARY
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="koszary"><br>
  				</td><td>{$kingdomInfo.koszary} </td><td> {$kingdomInfo.koszary_pr*$kosztZwyklych.koszary}</td>
  				<td>{$kosztZwyklych.koszary}</td>
  			</tr>
  			<tr class="row2">
  				<td class="nb">
  					WIE¯YCZKI
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="wiezyczki"><br>
  				</td><td>{$kingdomInfo.wiezyczki} </td><td> {$kingdomInfo.wiezyczki_pr*$kosztZwyklych.wiezyczki}</td>
  				<td>{$kosztZwyklych.wiezyczki}</td>
  			</tr>
  			<tr class="row1">
  				<td class="nb">
  					GILDIE SZPIEGÓW
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="gildie"><br>
  				</td><td>{$kingdomInfo.gildie} </td><td> {$kingdomInfo.gildie_pr*$kosztZwyklych.gildie}</td>
  				<td>{$kosztZwyklych.gildie}</td>
  			</tr>
  			<tr class="row2">
  				<td class="nb">
  					STRA¯NICE
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="straznice"><br>
  				</td><td>{$kingdomInfo.straznice} </td><td> {$kingdomInfo.straznice_pr*$kosztZwyklych.straznice}</td>
  				<td>{$kosztZwyklych.straznice}</td>
  			</tr>
  			{if $kingdomInfo.koalicja != ""}
  			<tr class="row1">
  				<td class="nb">
  					RYNKI
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="rynki"><br>
  				</td><td>{$kingdomInfo.rynki} </td><td> {$kingdomInfo.rynki_pr*$kosztZwyklych.rynki}</td>
  				<td>{$kosztZwyklych.rynki}</td>
  			</tr>
  			{/if}
  			<tr class="row2">
  				<td class="nb">
  					ZAMEK
  				</td>
  				<td>
  					<input  type="text" size="3" class="textfield" name="zamek"><br>
  				</td><td>{$kingdomInfo.zamek} </td><td> {$kingdomInfo.zamek_pr*$kosztZwyklych.zamek}</td>
  				<td>{$kosztZwyklych.zamek}</td>
  			</tr>
  			<tr class="row1">
  				<td  colspan="5" align="center" height=30>
  					<input type="submit"  class="button" name="buduj" value="   Buduj   ">
  					&nbsp;&nbsp;
            <input type="submit"  class="button" name="burz" value= "   Burz   ">
  				</td>
  			</tr>
  		</table>
  		
  		</form>
  </center>
  </td>
  <td align='center' valign="top">
    <table  width=100% align="center" valign="top" cellspacing="1" cellpadding="0" border="0">
          <tr><td colspan=2>{$wynikSpec|default:""}</td></tr>
          {foreach from=$listaBudow item=budynek key=key}
          {if $key != "czyMoznaNowe"}
          <form action="buduj.php?tryb=2" method="post">
              {if $key%2==0}
                <tr class="row1">
              {else}
                 <tr class="row2">
               {/if}
                <td align="center" height="49" width="64"  >
       
       	         <img src="{$image_dir}budynki/{$budynek.img}" alt="{$budynek.nazwa}">
                
                {if $budynek.postep!=1}
                  ({$budynek.ileJeszczePkt})<b> &nbsp;
                 {$budynek.postepwpr}%</b>
                {/if}
                </td>
                <td style="width:100%">
                  {if $budynek.postep==1}
                    {$budynek.opis}
                    <br><a href= buduj.php?tryb=4&id={$budynek.id}>Burzenie&nbsp;</a>
                    {if $budynek.nastepny !=0}
                        <a href= buduj.php?tryb=3&id={$budynek.id}>Rozbudowa</a>
                    {/if}
                  {else}
                    <input  type="text" size="3" class="textfield" name="budSpec">&nbsp;
                    <input type="submit"  class="button"  value="  Buduj  ">
                    <br><a href= buduj.php?tryb=5&id={$budynek.id}>Przerwij budowe</a>
                    <input  type="hidden" value="{$budynek.id}"  name="idBudynku">
                    <br>Koszt budowy: {$budynek.koszt} 
                  {/if}                
                </td>
              </tr>
          </form>
          {/if}
          {/foreach}
      {if $listaBudow.czyMoznaNowe|default:true}
      <tr class="row2">
        <form action="buduj.php?tryb=1" method="post">
        <td valign="center" align="center" colspan=2>
          <SELECT NAME="nowyBudynek" class="textfield">
          {foreach from=$listaBudSpec item=budynek}
              <OPTION>{$budynek.nazwa}
          {/foreach}
          </SELECT>
            <br>
          <input type="submit"  class="button"  value=" Buduj ">
        </td>
      </tr>
      </form>
    {/if}
    </table>
    
    </td>
  </tr>
</table>
{/strip}
{include file="main_bottom.tpl"}
