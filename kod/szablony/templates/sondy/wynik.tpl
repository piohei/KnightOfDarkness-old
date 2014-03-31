<table width="{$szerokosc+25}" border="0" align="right" style="border:1px solid #3e382c" bgcolor="black" cellspacing="1">
  <tr>
    <td class="header">
      Wyniki
    </td>
  </tr>
   <tr>
    <td class="row1">
      {$pytanie}
    </td>
  </tr>
  {foreach key=key item=item from=$wynik}
    {if $key%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
    {/if}
    <td  align="left">
      <div align="right">{$item.opcja}</div>
      <table align="left" border="0">
        <tr>
          <td width="{$item.dlugosc}" bgcolor="#006600" height="8px">
          </td>
        </tr>
      </table>
      <div align="left">{$item.ilosc}</div>
    </td>
  </tr>
  {/foreach}
  <tr>
    <td class="row1" align="center">
      <div class="sonda_data">G³osów: {$ileGlosow}</div>
    </td>
  </tr>
</table>
