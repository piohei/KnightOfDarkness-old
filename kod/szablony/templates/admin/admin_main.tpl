{include file="main_top.tpl"}
{if $reset_ask}
	<span>Czy napewno chcesz zresetowa�?
	<form method="post" action="admin.php" >
		<input type="submit" name="reset" value="tak" />
	</form>
	</span> 
{/if}
{if $reset}
	<span>Era zosta�a zresetowana, mi�ej gry</span>
{/if}
{include file="main_bottom.tpl"}
