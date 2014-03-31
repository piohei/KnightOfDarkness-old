<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr><td>
<script type="text/javascript">
{literal}
function aTS(suspect){
	var tmp = document.getElementById("suspects").value;
	if (tmp.search(suspect) < 0){
		if ((tmp.replace(" ","")).length === 0){
			document.getElementById("suspects").value = suspect;
		} else {
			document.getElementById("suspects").value = tmp+","+ suspect; 
		}
	}
}
function addToSuspected(suspect){
	aTS(suspects);
}
{/literal}
</script>
{$message}
Wszystkie widoczen tu logi pochadz± z okresu (od {$fromDate} do {$toDate})
<form action="index.php?mode={$smarty.const.MODE_MULTI_ANALYSER_II}" method="POST">
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="6">Analizator Multikont II</td>
</tr>
<tr>
  <td>Data pocz±tku (YYYY-MM-DD hh:gg:mm):</td>
  <td>
    <input type="text" name="fromDate" value="{$fromDate}">
  </td>
  <td colspan="4">Mo¿na podaæ sam± godzinê np 2007-11-13 13</td>
</tr>
<tr>
  <td>Data koñca (YYYY-MM-DD hh:gg:mm):</td>
  <td>
    <input type="text" name="toDate" value="{$toDate}">
  </td>
  <td colspan="4">Mo¿na podaæ godzinê z minatami np 2007-11-13 13:25</td>
</tr>
<!-- w kodzie zmiann ustawiana jest na wartosc BAD_PASS_SUPPORT
<tr>
  <td>NoCookie analizator ma pokazaæ tylko udane logowania:</td>
  <td>
    <input type="checkbox" name="noCookieOlnyNORMAL" value="true" {if ($noCookieOlnyNORMAL)}checked="checked"{/if}>
  </td>
</tr>
 -->
<tr>
  <td>Lista podejrzanych (opcjonalnie,loginy oddzielaæ przecinkiem):</td>
  <td colspan="4">
    <input type="text" id="suspects" name="suspects" value="{$suspects}" size="100">
  </td>
</tr>
<tr>
  <td>Czy tranzakcje na targu tylko miêdzy podejrzanymi:</td>
  <td>
    <input type="checkbox" name="olnyBetweenSuspects" value="true" {if ($olnyBetweenSuspects)}checked="checked"{/if}>
  </td>
</tr>
<tr>
  <td>Analizowaæ równie¿ inne ni¿ UDANE logowania:</td>
  <td>
    <input type="checkbox" name="BAD_PASS_SUPPORT" value="true" {if ($BAD_PASS_SUPPORT)}checked="checked"{/if}>
  </td>
</tr>
<tr class="Foot">
  <td colspan="6">
    <input type="submit" name="analyse" value="GO!">
  </td>
</tr>
</table>

{if $kontaUsuniete}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="6">Usuniête konta</td>
</tr>
<tr>
</tr>
<tr class="Header">
  <td >Lp.</td>
  <td >Data</td>
  <td >Login</td>
<tr>
{foreach from=$kontaUsuniete item="usuniete" key="cnt"}
<tr>
  <td >{$cnt}</td>
  <td >{$usuniete.date}</td>
  <td ><font color="red">{$usuniete.login}</font> <a onclick="aTS('{$usuniete.login}')">&#8721;</a></td>
</tr>
{/foreach}
</table>
{/if}


{if $targLog}
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
	<tr class="Header" >
		<td colspan="6">Tranzakcje na targu</td>
	</tr>
<tr class="Header" 	>
		<td>kupiec</td>
		<td>sprzedawca</td>
		<td>towar</td>
		<td>ilo¶æ</td>
		<td>cena</td>
		<td>data</td>
	</tr>
	{foreach from=$targLog key=key item=transaction}
	<tr>
		<td>{$transaction.kto} <a onclick="aTS('{$transaction.kto}')">&#8721;</a></td>
		<td>{$transaction.od_kogo} <a onclick="aTS('{$transaction.od_kogo}')">&#8721;</a></td>
		<td>{$transaction.co}</td>
		<td>{$transaction.ile}</td>
		<td>{$transaction.cena}</td>
		<td>{$transaction.data}</td>
	</tr>
	{/foreach}
</table>
{/if}

{if $exLog}
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
	<tr class="Header" >
		<td colspan="6">Rynki w koalicji (jedzenie|narzêdzia|¿elazo|broñ)</td>
	</tr>
	<tr class="Header">
		<td>Wysy³aj±cy</td>
		<td>Odbieraj±cy</td>
		<td>towary</td>
		<td>data</td>
	</tr>
	{foreach from=$exLog key=key item=transaction}
	<tr>
		<td>{$transaction.source} <a onclick="aTS('{$transaction.source}')">&#8721;</a></td>
		<td>{$transaction.destination} <a onclick="aTS('{$transaction.destination}')">&#8721;</a></td>
		<td>{$transaction.load}</td>
		<td>{$transaction.date}</td>
	</tr>
	{/foreach}
</table>
{/if}


{if $multi}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">

<tr class="Header">
  <td colspan="6">Analizator cookie</td>
</tr>
<tr>
  <td colspan="6">
    {foreach from=$multi item="nodes" key="key"}
        <hr>
        {foreach from=$nodes->getNode() item="targetUsers" key="user"}
        <br> <b>{$user}</b> <a onclick="aTS('{$user}')">&#8721;</a> Logowa³ siê te¿ na : 
            {foreach from=$targetUsers  key="TargetName" item="none"}
            {$TargetName} ({$none})<a onclick="aTS('{$TargetName}')">&#8721;</a> | 
                    
            {/foreach}
        {/foreach}
    {/foreach}
  </td>
</tr>
</table>
{/if}

{if $multiIP}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">

<tr class="Header">
  <td colspan="6">Analizator adresow IP</td>
</tr>
<tr>
  <td colspan="6">
    {foreach from=$multiIP item="nodes" key="key"}
        <hr>
        {foreach from=$nodes->getNode() item="targetUsers" key="user"}
        	{if (count($targetUsers) > 0)}
        	<br>Z adresu ip <b>{$user}</b> logowali siê: 
	            {foreach from=$targetUsers  key="TargetName" item="none"}
            	{$TargetName} ({$none}) <a onclick="aTS('{$TargetName}')">&#8721;</a> | 
                    
            	{/foreach}
            {/if}
        {/foreach}
    {/foreach}
  </td>
</tr>
</table>
{/if}

{if $logowaniaBezCookie}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="6">Logowania z komputerów na których nie by³o ciasteczek z poprzednich sesji KoDa (czyli tacy co mog± kasowaæ ciasteczka celowo)
  <br><a onclick="aTS('{$allNoCookieLogins}')">KLIKNIJ TU ABY DODAÆ DO PODEJRZANCH WSZYSTKICH LOGUJ¡CYCH SIÊ BEZ COOKIE</a></td>
</tr>
<tr>
</tr>
<tr class="Header">
  <td >Lp.</td>
  <td >Data</td>
  <td >Login</td>
  <td >Adres IP</td>
  <td >TYP</td>
<tr>
{foreach from=$logowaniaBezCookie item="logowanie" key="cnt"}
<tr>
  <td >{$cnt}</td>
  <td >{$logowanie.date}</td>
  <td >{$logowanie.login} <a onclick="aTS('{$logowanie.login}')">&#8721;</a></td>
  <td >{$logowanie.ip}</td>
  <td >{$logowanie.type}</td>
</tr>
{/foreach}
</table>
{/if}

{if $logowaniaBezCookie}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="6">Logowanie siê z tych sanych IP</td>
</tr>
<tr>
</tr>
<tr class="Header">
  <td >Lp.</td>
  <td >IP</td>
  <td >Login</td>
  <td >Ilosc logowañ</td>
<tr>
{foreach from=$logowaniaTenSamIP item="logowanie" key="cnt"}
<tr>
  <td >{$cnt}</td>
  <td >{$logowanie.ip}</td>
  <td><font style="background-color: {$logowanie.color_login}">{$logowanie.login}</font> <a onclick="aTS('{$logowanie.login}')">&#8721;</a></td>
  <td >{$logowanie.ile}</td>
</tr>
{/foreach}
</table>
{/if}

{if $logowania}
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="6">Logi logowania (BAD_PASS oznacza ¿e kto¶ poda³ b³êdny login lub has³o)</td>
</tr>
<tr>
</tr>
<tr class="Header">
  <td >Lp.</td>
  <td >Data</td>
  <td >Login</td>
  <td >Adres IP</td>
  <td >TYP</td>
  <td >SESSIONID</td>
  <td >CookieLogin</td>
<tr>
{foreach from=$logowania item="logowanie" key="cnt"}
<tr>
  <td >{$cnt}</td>
  <td >{$logowanie.date}</td>
  <td >{$logowanie.login} <a onclick="aTS('{$logowanie.login}')">&#8721;</a></td>
  <td >{$logowanie.ip}</td>
  {if $logowanie.type=='BAD_PASS'}
  <td style="background-color: red">{$logowanie.type}</td>
  {else}
  <td >{$logowanie.type}</td>
  {/if}
  <td><font style="background-color: #{$logowanie.color_sessionid}">{$logowanie.sessionid}</font></td>
  <td >{$logowanie.cookie_login}</td>  
</tr>
{/foreach}
</table>
{/if}

</form>



</td></tr>
</table>
