<div style="font-color : red;">{$bs_add_msg}
</div>
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr class="Header">
        <td colspan="3">Dodaj nowy Budynek Specjalny</td>
</tr>
	<tr>
	
	<td>
	<div style="margin-top : 10px; margin-left : 10px; ">
	<form action="index.php?mode={$smarty.const.MODE_BS_MANAGE}" method="POST" style="margin: 0; padding: 0">
	Nazwa : <input type="text" name="bs_name" /><br/><br/>
	Typ : 
		<select name="type" size="0">
			<option value="antyszpieg" label="antyszpieg">Obrona przed szpiegami</option>
			<option value="atak_oblezenie" >Atak wojsk atakuj±cych</option>
			<option value="atak_obrona_ogolne" >Atak i Obrona wojsk</option>
			<option value="atak_zamek" >Atak wojsk broni±cych</option>
			<option value="budowa" >Bonus dla budowniczych</option>
			<option value="droga" >D³ugo¶æ ataku</option>
			<option value="gornicy_zelaza" >Bonus dla górników ¿elaza</option>
			<option value="gornicy_zlota" >Bonus dla górników z³ota</option>
			<option value="kowale" >Bonus dla kowali</option>
			<option value="magazyn" >Przechowanie punktów budowy</option>
			<option value="obrona_zamek" >Obrona wojsk broni±cych</option>
			<option value="rolnicy" >Bonus dla rolników</option>
			<option value="szpieg" >szpieg</option>
			<option value="koszary" >Zwiêkszenie maksymalnego wojska</option>
			<option value="morale" >Zwiêkszenie morale ksiestwa</option>
			<option value="assasin" >Zwiêksza obra¿enia szpiegów</option>
			<option value="thief" >Bonus dla z³odzieji</option>
		</select>
		<br/><br/>
	Bonus : <input type="text" name="bonus" /> <br/><br/>
	PB : <input type="text" name="pb" /><br/><br/>
	Obrazek : <br/>
	
	{foreach from=$imgArr item=img}
	{if $img eq '\n'}
		<br/>
	{else}
		<input type="radio" name="img" value="{$img}.jpg" />
			<img src="../img/budynki/{$img}.jpg" alt="{$img}" /> 
		{/if}
	{/foreach}
			<br/><br/>
	Poprzedni : 
		<select name="prev">
				<option value="0" > --brak-- </option>
			{foreach from=$prevArr key=k item=v}
				<option value="{$k}" >{$v}</option>
			{/foreach}
		</select>
		<br/><br/>
	Opis : <br/><textarea name="bs_desc" rows="7" cols="40">tu wstaw opis</textarea><br/><br/>
	<input type="submit" value="dodaj" name="bs_add" /> <input type="submit" value="usuñ" name="bs_rem" />
	 </div>
	</form> 
	</td>
	</tr>
</table>