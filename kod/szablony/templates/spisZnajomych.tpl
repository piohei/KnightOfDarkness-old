{strip}
{include file="main_top.tpl"}
<center>
  <font color='red'>
    {$error}
  </font>
</center>
  
    
<table border="0" cellspacing="1" cellpsaddnig="2" width="100%">
  <tr  >
    <td  class="header" >
      Nr.
    </td>
    <td  class="header" >
      Nazwa
    </td>
    <td  class="header" >
      Wiadomosæ
    </td>
    <td  class="header" >
      Usuñ
    </td>
  <tr>
  {foreach key=key item=item from=$spisZnajomych}
  {if ($key+1)%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
  {/if}
    <td align="right">
      {$key+1}
    </td>
    <td>
      <a href='../walka/infoGracza.php?name={$item->znajomy}'>{$item->znajomy}</a>
    </td>
    <td>
      <a href='/wiadomosci/nowaWiadomosc.php?do={$item->znajomy}'>wiadomosc</a>
    </td>
    
    <td>
     <a href='spisZnajomych.php?ktoU={$item->znajomy}'>usun</a>
    </td>
       
  </tr>
  {/foreach}
</table>
{include file="main_bottom.tpl"}
</center>
{/strip}
