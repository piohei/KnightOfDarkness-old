<script type="text/javascript" src="{$javascript_dir}attack.js"></script>
{strip}
{if $error!=''}
<div style="color:red">{$error}</div>
{/if}
{if $info!=''}
<div style="color:#dcb373; font-weight:bold">{$info}</div>
{/if}
<form  method="post" name="attack_form">
  <table width="80%" cellspacing="1" cellpadding="3" style="color: #B0A392; font-size: 11px;">
    <tr>
      <td colspan="2"><font color=pink>Je¶li co¶ nie dzia³a jak trzeba od¶wie¿ stronê przez Ctrl+F5</font></td>
    </tr>
    <tr>
      <td colspan="2">Ilo¶æ tur potrzebnych do osi±gniêcia pozycji wroga wynosi: {$tour_to_attack}</td>
    </tr>
    <tr>
      <td>Cel ataku:</td> <td><input  class="textFieldType1" name="attack[kogo]" type="text" value="{$attack.kogo}"></td>
    </tr>
    <tr>
      <td>Rodzja ataku:</td> 
      <td><select  class="textFieldType1" name="attack[type]" onChange="attack_type_change()">
            <option value="1" {if $attack.type==1}selected{/if}>Gospodarka</option>
            <option value="2" {if $attack.type==2}selected{/if}>Ziemia</option>
            <option value="3" {if $attack.type==3}selected{/if}>Szpiegowanie</option>
			<option value="4" {if $attack.type==4}selected{/if}>Podpalanie</option>
			<option value="5" {if $attack.type==5}selected{/if}>Budynek koñcowy</option>
			<option value="6" {if $attack.type==6}selected{/if}>Koalicyjny</option>
			<option value="7" {if $attack.type==7}selected{/if}>Kradzie¿</option>
			<option value="8" {if $attack.type==8}selected{/if}>Skrytobójstwo</option>
			<option value="9" {if $attack.type==9}selected{/if}>Oblê¿enie</option>
			<option value="10" {if $attack.type==10}selected{/if}>Propaganda</option>
          </select></td>
    </tr> 
    <tr>
      <td>³ucznicy:{include file="help/template.quickhelp.tpl" helpfile="archer"}</td> <td><input  class="textFieldType1" name="attack[lucznicy]" type="text" value="{$attack.lucznicy}" onkeyup="koszt({$kingdomInfo.zloto},{$kingdomInfo.jedzenie},{$tour_to_attack})"></td>
    </tr>
    <tr>
      <td>piechota:{include file="help/template.quickhelp.tpl" helpfile="infantry"}</td> <td><input class="textFieldType1"  name="attack[piechota]" type="text" value="{$attack.piechota}" onkeyup="koszt({$kingdomInfo.zloto},{$kingdomInfo.jedzenie},{$tour_to_attack})"></td>
    </tr>
    <tr>
      <td>husaria:{include file="help/template.quickhelp.tpl" helpfile="cavalry"}</td> <td><input class="textFieldType1" name="attack[husaria]" type="text" value="{$attack.husaria}" onkeyup="koszt({$kingdomInfo.zloto},{$kingdomInfo.jedzenie},{$tour_to_attack})"></td>
    </tr> 
    <tr>
      <td>szpiedzy:</td> <td><input class="textFieldType1" name="attack[spy]" type="text" value="{$attack.spy}" onkeyup="koszt({$kingdomInfo.zloto},{$kingdomInfo.jedzenie},{$tour_to_attack})"></td>
    </tr> 
    <tr>
      <td>Koszt z³ota:</td>
      <td><div id="koszt_id" style="font-weight: bold; display: inline">
      0</div>{include file="help/template.quickhelp.tpl" helpfile="attack_cost"}</td>
    </tr>
    <tr>
      <td>Koszt jedzenia:</td>
      <td><div id="koszt_jedzenia_id" style="font-weight: bold; display: inline">
      0</div>{include file="help/template.quickhelp.tpl" helpfile="attack_cost"}</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input class="button" type="submit" value="Wyslij"></td>
    </tr> 
   </table>
</form>


<script type="text/javascript" language="JavaScript">
  attack_type_change();
  koszt({$kingdomInfo.zloto},{$kingdomInfo.jedzenie},{$tour_to_attack});
</script>
{/strip}
