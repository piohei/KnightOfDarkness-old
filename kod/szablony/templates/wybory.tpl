
{include file="main_top.tpl"}
<table width="100%" border="0" cellspacing="1" cellpadding="0" >
<tr class="row2" ><td colspan="2">{$error}</td></tr>
<tr class="row1"><td><a href="?nowe=1">Rozpisz wybory</a>
<br><br>
<span style="font-weight:bold">Prawo wyborcze</span>
<br>
- Nowe wybory mo�e rozpisac ka�dy cz�onek koalicji<br>
- G�osowanie trwa  3 dni od momentu rozpisania wybor�w<br>
- W przypadku uzyskania przez 2 lub wi�cej kandydat�w takiej samej ilosci g�os�w<br>
wybory uznawane s� za nierozstrzygniete i cesarz zostaje niezmieniony<br>
- g�osy os�b kt�re w trakcie wybor�w odesz�y z koalicji nie s� anulowane <br>
- osoby kt�re w trakcie wybor�w przysz�y do koalicji te� maja prawo g�osowa�<br>
</td>
{if $error != ''}
{/if}
{if $karta->czyJest}
<td>{$karta->ankieta}</td></tr>
{else}
<td>Nie by�o jescze wybor�w w tej koalicji</td></tr>
{/if}

</table>
{include file="main_bottom.tpl"}
