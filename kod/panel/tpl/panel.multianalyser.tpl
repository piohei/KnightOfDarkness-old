<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr><td>

<form action="index.php?mode={$smarty.const.MODE_MULTI_ANALYSER}" method="POST">
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="3">Analizator Multikont</td>
</tr>
<tr>
  {if $logFileList}
    <td style="width: 50%" valign="top">
      Wybierz pliki <b>log</b> do analizy:<br>
      <select multiple name="logFileListToAnalyse[]" style="width: 100%; height: 150px">
      {section loop=$logFileList name="logFile"}
        <option value="{$logFileList[logFile][2]}" title="{if $logFileList[logFile][1]} Kopia pliku wykonana: {$logFileList[logFile][1]} {else} Aktualny plik {/if}" {if in_array($logFileList[logFile][2], $logFileListToAnalyse)}selected{/if}>
          {$logFileList[logFile][0]}  &nbsp;  &nbsp; {$logFileList[logFile][1]|default:"aktualny"|replace:" ":" &nbsp; "}
        </option>
      {/section}
      </select>
    </td>
  {else}
    <td style="width: 50%; height: 150px; color: #FF0000" valign="middle" align="center">
        <b>Brak plików log do analizy...</a>
    </td>
  {/if}
  <td valign="top" style="width: 15px"><!-- spacer --></td>
  <td valign="top">opcje</td>
</tr>
<tr class="Foot">
  <td colspan="3">
    <input type="submit" name="analyse" value="GO!">
  </td>
</tr>
{if $multi}
<tr>
  <td colspan="3">
    {foreach from=$multi item="nodes" key="key"}
        <hr>
        {foreach from=$nodes->getNode() item="targetUsers" key="user"}
        <br> <b>{$user}</b> Logowa³ siê te¿ na : 
            {foreach from=$targetUsers  key="TargetName" item="none"}
            {$TargetName}({$none})| 
                    
            {/foreach}
        {/foreach}
    {/foreach}
  </td>
</tr>
{/if}
</table>
</form>

</td></tr>
</table>
