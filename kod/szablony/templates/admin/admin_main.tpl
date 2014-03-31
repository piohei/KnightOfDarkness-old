{include file="main_top.tpl"}
{if $reset_ask}
	<span>Czy napewno chcesz zresetowaæ?
	<form method="post" action="admin.php" >
		<input type="submit" name="reset" value="tak" />
	</form>
	</span> 
{/if}
{if $reset}
	<span>Era zosta³a zresetowana, mi³ej gry</span>
{/if}
{include file="main_bottom.tpl"}
