{if $sonda_error!=""}
{$sonda_error}
{else}
<form method="post" action="{$akcja}">
  <table width="{$szerokosc}" align="right" style="border:1px solid #3e382c" bgcolor="black" cellspacing="1">
    <tr>
      <td class="header">
        {$tytul|default:"Ankieta"}
      </td>
    </tr>
    <tr class="row2">
      <td>
        {$ankieta.pytanie}
      </td>
    </tr>
    {foreach key=key item=item from=$opcje}
    {if $key%2==0}
    <tr class="row1">
      {else}
      <tr class="row2">
        {/if}
        <td>
          <INPUT TYPE="radio" NAME="opcja" VALUE="{$item.id}" >
          {$item.opcja}
        </td>
      </tr>
      {/foreach}
      <tr>
        <td align="center" class="row1">
          <div class="sonda_data">
            Mo¿esz jeszcze g³osowaæ przez <br>{$ileDoKonca}
          </div>
        </td>
      </tr>
      <tr>
        <td align="center" class="row2">
          <input type="submit" class="button" value="G³osuj">
        </td>
      </tr>
  </table>
</form>
{/if}
