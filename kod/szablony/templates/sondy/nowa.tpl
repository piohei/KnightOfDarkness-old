{include file="main_top.tpl"}
<form action="sonda.php?tryb=dodaj" method="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2" >
<tr><td  class="header" >Nazwa parametru</td>
    <td  class="header" >Warto¶æ</td>
</tr>
<tr><td  class="row1" >Tryb</td>
    <td  class="row1" ><input type="text" value="{$tryb_ankiety}" name="tryb" readonly="readonly">
                       </td>
</tr>
<tr><td  class="row1" >Pytanie</td>
    <td  class="row1" ><textarea name="pytanie"></textarea></td>
</tr>
<tr><td  class="row1" >Ile dni bêdzie wa¿na</td>
    <td  class="row1" ><input size="3" type="text" name="ileDni"></td>
</tr>
{foreach key=key item=item from=$ileOpcji }
<tr><td  class="row1" >Opcja {$key+1}</td>
    <td  class="row1" ><input size="50" type="text" name="tab[{$key}]"></td>
</tr>
{/foreach}
<tr><td  class="row1" colspan="2" align="center"><input type="submit" class="button" value="Zapisz">
                                  </td>
</tr>
</table>
</form>
{include file="main_bottom.tpl"}
