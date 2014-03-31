{strip}
<center>
  {include file="main_top.tpl"}
  <table width="100%" cellpadding="3" cellspacing="1">
    <tr>
      <td class="header">
        Królestwo
      </td>
      <td class="header">
        Cena (za jednostkê)
      </td>
      <td class="header">
        Liczba towaru
      </td>
      <td class="header">
        &nbsp;
      </td>
    </tr>
    {foreach key=key item=item from=$spisTowaror}
    {if $key%2==0}
      <tr class="row1">
    {else}
      <tr class="row2">
    {/if}
      <td >
        <a href="{$root_dir}walka/infoGracza.php?name={$item->wystawiajacy}">{$item->wystawiajacy}</a>
      </td>
      <td >
        {$item->cena}
      </td>
      <td >
        {$item->ile}
      </td>
      <td >
        <a href="kup.php?co={$id}&od_kogo={$item->wystawiajacy}&max={$item->ile}&cena={$item->cena}&token={$item->token}&id={$item->id}">Kup</a>
      </td>
    </tr>
    {/foreach}
  </table>


  {* BEGIN statystyki *}
  {if $marketstat_enabled}
  <script type="text/javascript" src="{$javascript_dir}dhtml.js"></script>
  <script type="text/javascript">
    {literal}
    <!--
    var value;
    function showValue(val){
        if(!value){
             value = new getObjectById("currentValue");
        }
        if(!value) return;
        value.reference.innerHTML = val;
    }

    function clearValue(){
        if(!value){
             value = new getObjectById("currentValue");
        }
        if(!value) return;

        value.reference.innerHTML = '&nbsp;';
    }
    //-->
    {/literal}
  </script>
  <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
  <tr>
    <td colspan="2" align="center" class="header">Historia najlepszych ofert (od¶wie¿ana co 4 godziny)</td>
  </tr>

  <tr>
    <td style="height: 28px; width: 1%; font-size: 9px; padding-top: 3px" valign="top">{$stat.metadata.max}</td>
    <td rowspan="4" align="right" valign="bottom" style="background: url({$image_dir}marketplace.statgraph_bg.gif) bottom">
        {foreach from=$stat item="price" key="key"}
            {if $key != "metadata"}
            <img src="{$image_dir}marketplace.statgraph.png" style="height: {math equation="p/m*100" p=$price m=$stat.metadata.max format="%d"}px; width: 4px; margin-left: 1px;" width="3" height="{math equation="p/m*100" p=$price m=$stat.metadata.max format="%d"}" title="{$price}" alt="{$price}" onmouseover="showValue(this.title)" onmouseout="clearValue()">
            {/if}
        {/foreach}
    </td>
  </tr>

  <tr>
    {math assign="price_step" equation="max/4" max=$stat.metadata.max format="%d"}
    <td style="height: 25px; font-size: 9px" valign="top">{$price_step*3}</tr>
  </tr>
  <tr>
    <td style="height: 25px; font-size: 9px" valign="top">{$price_step*2}</tr>
  </tr>
  <tr>
    <td style="height: 25px; font-size: 9px" valign="top">{$price_step*1}</tr>
  </tr>
  <tr>
    <td colspan="2" align="right">
        <table cellpadding="0" cellspacing="0" border="0" style="background: url({$image_dir}marketplace.statgraph_bg.gif) repeat-x top; font-size: 9px; color: #8A8A88; margin-right: 5px; width: 100%">
        <tr>
            <td style="width: 100px">odczytów: {$stat.metadata.count|default:"0"}</td>
            <td style="width: 100px">max: {$stat.metadata.max|default:"0"}</td>
            <td style="width: 100px">min: {$stat.metadata.min|default:"0"}</td>
            <td style="width: 100px">¶rednia: {$stat.metadata.avg|default:"0"|string_format:"%d"}</td>
            <td style="width: 100px; text-align: right"><div style="display: inline;" id="currentValue"></div></td>
        </tr>
        </table>
    </td>
  </tr>
  </table>
  {/if}
  {* END statystyki *}


{include file="main_bottom.tpl"}
</center>
{/strip}
