{strip}
<center>
<h3>{$wynik|default:""}</h3>
<br>
<form action="targ.php?tryb=5" method="post">
<table align="center" bgcolor="#212223">

  <tr>
  <td class="header">Towar</td>
  <td class="header">Ile</td>
  <td class="header">Cena za sztuke</td>
  </tr>

	<tr>
		<td>
		<SELECT NAME="co_sprzedaje" class="textfield">
			<OPTION> zelazo
			<OPTION> jedzenie
			<OPTION> narzedzia
			<OPTION> bronie
		</SELECT>
		</td>
		<td align ="center">
	   <input  type="text" class="textfield"  name="ile" size=5>
    </td>
    <td align ="center">
	   <input  type="text" class="textfield"  name="cena" size=5>   
    </td>
  </tr>	
  <tr>
    <td align="center" colspan="3">  
      <input type="submit" class='button 'value="   Wystaw   ">
    </td>
  </tr>
</table>
</form>
</center>
{/strip}