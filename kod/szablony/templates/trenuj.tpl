{strip} {include file="main_top.tpl"}
<center>
<form action="trenuj.php" method="post">
<table border="0" cellspacing="1" width="100%">
	{if $wynik!=""}
	<tr class="row1" align="center">
		<td colspan="5">{$wynik}</td>
	
	
	<tr>
		{/if}
	
	
	<tr>
		<td align="center" class="header">Nazwa profesji</td>
		<td class="header">Ile</td>
		<td class="header">Wolne miejsce</td>
		<td class="header">Koszt(z³oto)</td>
		<td class="header">Koszt(narzêdzia)</td>

	</tr>
	<tr class="row2" width="40%">
		<td align="center"><FONT SIZE="1"> GORNICY Z³OTA: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="gornicy_zlota">
		</td>
		<td>{$wolneMiejsce.gornicy_zlota} <!--
                  {$ustawienia.ileRolnikowPracujeNaFarmie*$kingdomInfo.kopalnie_zlota-$kingdomInfo.gornicy_zlota}
                     --></td>
		<td>{$ktzlota}</td>
		<td>{$kosztN.gornicy_zlota}</td>
	</tr>
	<tr class="row1">
		<td align="center"><FONT SIZE="1"> GORNICY ¯ELAZA: </FONT></td>
		<td><input type="text" size="3" class="textfield"
			name="gornicy_zelaza"></td>
		<td>{$wolneMiejsce.gornicy_zelaza}
		<!-- 
                    {$ustawienia.ileRolnikowPracujeNaFarmie*$kingdomInfo.kopalnie_zelaza-$kingdomInfo.gornicy_zelaza}
                     --></td>
		<td>{$ktzelaza}</td>
		<td>{$kosztN.gornicy_zelaza}</td>
	</tr>
	<tr class="row2">
		<td align="center"><FONT SIZE="1"> ROLNICY: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="rolnicy"> <br>
		</td>
		<td>{$wolneMiejsce.rolnicy}
		<!-- {$ustawienia.ileRolnikowPracujeNaFarmie*$kingdomInfo.farmy-$kingdomInfo.rolnicy} -->
		</td>
		<td>{$ktrolnicy}</td>
		<td>{$kosztN.rolnicy}</td>
	</tr>
	<tr class="row1">
		<td align="center"><FONT SIZE="1"> KOWALE: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="kowale"> <br>
		</td>
		<td>{$wolneMiejsce.kowale}
		<!-- {$ustawienia.ileRolnikowPracujeNaFarmie*$kingdomInfo.warsztaty-$kingdomInfo.kowale} -->
		</td>
		<td>{$ktkowale}</td>
		<td>{$kosztN.kowale}</td>
	</tr>
	<tr class="row2">
		<td align="center"><FONT SIZE="1"> BUDOWNICZOWIE: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="budowniczowie">
		<br>
		</td>
		<td>Brak limitów</td>
		<td>{$ktbudowniczowie}</td>
		<td>{$kosztN.budowniczowie}</td>
	</tr>
	{if $kingdomInfo.koalicja != ""}
	<tr class="row1">
		<td align="center"><FONT SIZE="1"> TRAGARZE: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="tragarze"> <br>
		</td>
		<td>{$wolneMiejsce.tragarze}
		<!-- {$porter.market*$kingdomInfo.rynki-$kingdomInfo.tragarze} -->
		</td>
		<td>{$train_cost.tragarze}</td>
		<td>{$kosztN.tragarze}</td>
	</tr>
	{/if}
	<tr class="row1">
		<td colspan="5" align="center"><br>
		<input type="submit" class="button" name="trenuj" value="  Trenuj  ">
		&nbsp;&nbsp; <input type="submit" class="button" name="zwolnij"
			value="     Zwolnij     "> <br>
		</td>
	</tr>
	</form>
	<form action="trenuj.php" method="post">
	
	
	<tr>
		<td class="header" align="center">Nazwa jednostki</td>
		<td class="header">Ile</td>
		<td class="header">Wolne miejsce</td>
		<td class="header">Koszt(z³oto)</td>
		<td class="header">Koszt(bronie)</td>
	</tr>


	<tr class="row2">
		<td align="center"><FONT SIZE="1"> £UCZNICY: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="lucznicy"> <br>
		</td>
		<td rowspan="3">{$wolneMiejsce.koszary}
		<!-- {$ustawienia.ileWkoszarach*$kingdomInfo.koszary-$kingdomInfo.husaria-$kingdomInfo.piechota-$kingdomInfo.lucznicy} -->
		</td>
		<td>{$ktlucznicy}</td>
		<td>{$kosztN.lucznicy}</td>
	</tr>
	<tr class="row1">
		<td align="center"><FONT SIZE="1"> PIECHOTA: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="piechota"> <br>
		</td>
		<td>{$ktpiechota}</td>
		<td>{$kosztN.piechota}</td>
	</tr>
	<tr class="row2">
		<td align="center"><FONT SIZE="1"> HUSARIA: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="husaria"></td>
		<td>{$kthusaria}</td>
		<td>{$kosztN.husaria}</td>
	</tr>
	<tr class="row1">
		<td align="center"><FONT SIZE="1"> STRA¯NICY: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="straznicy"></td>
		<td>{$wolneMiejsce.straznicy}
		<!-- {$ustawienia.ileStraznikowWStraznicy*$kingdomInfo.straznice-$kingdomInfo.straznicy} -->
		</td>
		<td>{$ktstraznicy}</td>
		<td>{$kosztN.straznicy}</td>
	</tr>
	<tr class="row2">
		<td align="center"><FONT SIZE="1"> SZPIEDZY: </FONT></td>
		<td><input type="text" size="3" class="textfield" name="szpiedzy"></td>
		<td>{$wolneMiejsce.szpiedzy}
		<!-- {$ustawienia.ileRolnikowPracujeNaFarmie*$kingdomInfo.gildie-$kingdomInfo.szpiedzy} -->
		</td>
		<td>{$ktszpiedzy}</td>
		<td>{$kosztN.szpiedzy}</td>
	</tr>
	<tr>
		<td colspan="5" align="center" class="row1"><br>
		<input type="submit" class="button" name="trenuj" value="  Trenuj  ">
		&nbsp;&nbsp; <input type="submit" class="button" name="zwolnij"
			value="     Zwolnij     "> <br>
		</td>
	</tr>
</table>
</form>
{include file="main_bottom.tpl"}</center>
{/strip}
