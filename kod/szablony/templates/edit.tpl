<script type="text/javascript" src="{$javascript_dir}edit.js"></script>
{strip}
{include file="message.tpl"}
<form action="" method="POST">
<table cellspacing="0" cellpadding="0" border="0" style="width: 100%; margin-left: 8px; margin-top: 15px">
 <tr style="height: 40px;">
        <td style="border:1px #715e46 solid;background-color: #2d210e;padding:5px">
          <table style="color: #B0A392; font-size: 11px;">
            <tr>
            	<td style="width:100%">
            	Aby umie¶ciæ obrazek w opisie koalicji trzeba w tre¶æ opisu wpisaæ odpowiedni kod obrazka z 'Profilu' cesarza (np:[0])
            	</td>
            </tr>
            <tr>
              <td style="width:20%">
                ile zosta³o:
              </td>
              <td align="left" style="width:70%">
                <div id="lenght_field">{$maxLenght-$lenght}</div>
              </td>
              <td style="width:10%">
                <input type="submit" value="zmieñ" class="button">
              </td>
            </tr>
          </table>
          
        </td>
  </tr>

{* BEGIN: Okno g³ówne *}
<tr>
    <td>

    {* BEGIN: Okno g³ówne *}
    <table cellspacing="0" cellpadding="0" border="0" style="border-style: solid; border-width: 0px 1px 1px 1px; border-color: #715E46; width: 100%;">
    <tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px">
        <td align="center" valign="middle">
          <textarea name="description" style="width: 100%; border: 0 solid; height: 350px; background-color: #212121; color: #B0A392; font-size: 12px; padding: 20px 15px"  onKeyUp="text_lenght(this,{$maxLenght})" onKeyPress="text_lenght(this,{$maxLenght})">{$description}</textarea>
        </td>
    </tr>
    <tr>
        <td align="left" valign="middle">
        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 20px; border-top: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 10px; padding: 0px 10px">
        <tr>
            <td style="color: #625b51">
            Pomoc dotycz±ca edytora {include file="help/template.quickhelp.tpl" helpfile="edit"}
            </td>
        </tr>
        </table>
        </td>
    </tr>
    </table>
    {* END: Okno g³ówne *}
    </td>
</tr>
{* END: Okno g³ówne *}
</table>
</form>
{/strip}
