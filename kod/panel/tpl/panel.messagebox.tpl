{strip}
<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 400px">
<tr><td align="center" valign="middle">

{foreach from=$_MESSAGE item="message"}
    {if $message.type == "ERROR"}
        <p class="MessageError">{$message.text}</p>
    {elseif $message.type == "INFO"}
        <p class="MessageInfo">{$message.text}</p>
    {else}
        {$message.text}
    {/if}
{/foreach}

<br><a href="{$smarty.server.HTTP_REFERER}" style="font-size: 120%; font-weight: bold">&laquo;&nbsp;powrót</a>
</td></tr>
</table>
{/strip}