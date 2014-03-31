{strip} {config_load file="conf" section="HEAD"} {config_load
file="conf" section="PATH"}


<link
	rel="stylesheet" type="text/css" href="{$style_dir}messages.css">
<center><br>
<table>
	<tr>
		<td colspan="5" bgcolor="#362a1a" align="center" valign="baseline">
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="71px"><img border="0"
					src="{$image_dir}table_decor_right_1.jpg"></td>
				<td width="357px" align="center"><FONT color="#c8a27c"
					face="Lucida Calligraphy"><span style="valign: middle">Wystawione aukcje</span></font></b></td>
				<td width="71px"><img border="0"
					src="{$image_dir}table_decor_left_1.jpg"></td>
			</tr>
		</table>
		</td>

	</tr>
	<tr>
		<td class="header">CO:</td>
		<td class="header">CENA:</td>
		<td class="header">ILOSC:</td>
		<td class="header">WARTO¦Æ:</td>
		<td class="header">USUÑ:</td>
	</tr>
	{foreach key=key item=item from=$spisTowaror} 
	{if $item->podsumowanie}
	<!-- WYPISZ PODSUMOWANIE -->
	<tr>
		<td bgcolor="#000000">Razem {$item->co}</td>
		<td bgcolor="#000000"></td>
		<td bgcolor="#000000" align="right">{$item->ile|nice_number}</td>
		<td bgcolor="#000000" align="right">{$item->wartoscAukcji|nice_number}</td>
		<td bgcolor="#000000"></td>
	</tr>
	<tr>
		<td bgcolor="#000000"></td>
		<td bgcolor="#000000"></td>
		<td bgcolor="#000000"></td>
		<td bgcolor="#000000"></td>
		<td bgcolor="#000000"></td>
	</tr>
	{else}
	<!-- NIE PODSUMOWANIE -->
	<tr>
		<td bgcolor="#212223">{$item->co}</td>
		<td bgcolor="#212223" align="right">{$item->cena|nice_number}</td>
		<td bgcolor="#212223" align="right">{$item->ile|nice_number}</td>
		<td bgcolor="#212223" align="right">{$item->wartoscAukcji|nice_number}</td>
		<td bgcolor="#212223" align="right"><a href=usun.php?id={$item->id}>USUÑ</a></td>
	</tr>
	{/if} {/foreach}
	<tr bgcolor="#362a1a">
		<td colspan="5">&nbsp;</td>
	</tr>
</table>

{include file="wystaw.tpl"}</center>

</head>

</html>

{/strip}
