
{include file="main_top.tpl"}
<table width="100%" border="0" cellspacing="1" cellpadding="0" >
<tr class="row2" ><td colspan="2">{$error}</td></tr>
<tr class="row1"><td><a href="?nowe=1">Rozpisz wybory</a>
<br><br>
<span style="font-weight:bold">Prawo wyborcze</span>
<br>
- Nowe wybory mo¿e rozpisac ka¿dy cz³onek koalicji<br>
- G³osowanie trwa  3 dni od momentu rozpisania wyborów<br>
- W przypadku uzyskania przez 2 lub wiêcej kandydatów takiej samej ilosci g³osów<br>
wybory uznawane s± za nierozstrzygniete i cesarz zostaje niezmieniony<br>
- g³osy osób które w trakcie wyborów odesz³y z koalicji nie s± anulowane <br>
- osoby które w trakcie wyborów przysz³y do koalicji te¿ maja prawo g³osowaæ<br>
</td>
{if $error != ''}
{/if}
{if $karta->czyJest}
<td>{$karta->ankieta}</td></tr>
{else}
<td>Nie by³o jescze wyborów w tej koalicji</td></tr>
{/if}

</table>
{include file="main_bottom.tpl"}
