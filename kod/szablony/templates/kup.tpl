{include file="main_top.tpl"}
<center>
  <br>{$wynik|default:""}  
  <form action="kup.php?co={$co}&od_kogo={$od_kogo}&max={$max}&cena={$smarty.get.cena}&token={$smarty.get.token}&id={$smarty.get.id}" method="post">
    <table bgcolor="#212223">
      <tr class="kp-header" align="center">
        <td style="padding: 0px 20px">
          Kupowane        
        </td>
        <td style="padding: 0px 20px">
          Dostêpny towar        
        </td>
      </tr>
      <tr align="center" class="row2">
        <td style="padding: 0px 20px">
          <input style="height: 19px; width: 50px" type="text"  name="ile">
          &nbsp;/&nbsp;{$max_buy}        
        </td>
        <td>
          {$max}        
        </td>
      </tr>
      <tr >
        <td colspan="2" align="center" class="row1">
          <input type="submit" class='button 'value="  Kupuj  ">
        </td>
      </tr>
    </table>
  </form>
  <a href="{$root_dir}targ/targ.php?tryb={$co}">
    << wróæ do aukcji </a>
</center>
{include file="main_bottom.tpl"}
