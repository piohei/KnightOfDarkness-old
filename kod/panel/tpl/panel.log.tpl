{strip}
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<form action="" method="POST">
	<tr class="Header" >
		<td colspan="3">Przegl±darka logów gry (Podgl±d tranzakcji pomiêdzy graczami)</td>
	</tr>
	<tr>
		<td>
			Ksiêstwo 1
		</td>
		<td>
			<input type="text" name="logi[ksiestwo1]" value="{$logi.ksiestwo1}">
		</td>
		<td rowspan="2">Wys³anie formularza bez danych wyswietli 100 ostatnich tranzakcji<br>Wpisanie tylko pierwszego ksiêstwa wyswietli wszystki jego tranzakcji<br>Wpisanie obu wyswietli tranzakcji pomiêdzy nimi</td>
	</tr>
	<tr>
		<td width="100px">
			Ksiêstwo 2
		</td>
		<td>
			<input type="text" name="logi[ksiestwo2]" value="{$logi.ksiestwo2}">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" value="OK">
		</td>
		
	</tr>
</form>
</table>

{if $targLog}
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
	<tr class="Header" >
		<td colspan="6">Tranzakcje na targu</td>
	</tr>
<tr>
		<td>
			kupiec
		</td>
		<td>
			sprzedawca
		</td>
		<td>
			towar
		</td>
		<td>
			ilo¶æ
		</td>
		<td>
			cena
		</td>
		<td>
			data
		</td>
	</tr>
	{foreach from=$targLog key=key item=transaction}
	<tr>
		<td>
			{$transaction.kto}
		</td>
		<td>
			{$transaction.od_kogo}
		</td>
		<td>
			{$transaction.co}
		</td>
		<td>
			{$transaction.ile}
		</td>
		<td>
			{$transaction.cena}
		</td>
		<td>
			{$transaction.data}
		</td>
	</tr>
	{/foreach}
</table>
{/if}

{if $exLog}
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
	<tr class="Header" >
		<td colspan="6">Rynki w koalicji (jedzenie|narzêdzia|¿elazo|broñ)</td>
	</tr>
<tr>
		<td>
			Wysy³aj±cy
		</td>
		<td>
			Odbieraj±cy
		</td>
		<td>
			towary
		</td>
		<td>
			data
		</td>
	</tr>
	{foreach from=$exLog key=key item=transaction}
	<tr>
		<td>
			{$transaction.source}
		</td>
		<td>
			{$transaction.destination}
		</td>
		<td>
			{$transaction.load}
		</td>
		<td>
			{$transaction.date}
		</td>
	</tr>
	{/foreach}
</table>
{/if}

{/strip}
