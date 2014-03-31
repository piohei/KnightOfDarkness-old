{strip}
{include file="main_top.tpl"}
<center>
  <font color='red'>
    {$error}
  </font>
</center>

<form action="nowaKoalicja.php" method="post">
<table border="0" cellspacing="1" width="100%" cellpadding="3">
	<tr class="row1">
    <td class="header">
			Nazwa
    </td>
    <td>
      <input class="textfield" type='text' name='nazwa'>&nbsp;<input class="button" type="submit" value="Za³óz">
    </td>
  </tr>
</table> 
{include file="main_bottom.tpl"}
</center>
{/strip}
</form>
