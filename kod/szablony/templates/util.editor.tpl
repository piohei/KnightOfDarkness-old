{strip}

{literal}
<script type="text/javascript">
<!--
//-->
</script>
{/literal}

{include file="main_top.tpl" tytul="KoD XMLedytor"}
<form name="xmleditor" action="{$smarty.server.SCRIPT_NAME}" method="post" style="margin: 0; padding: 0">


{* BEGIN xmleditor *}
<table cellspacing="1" cellpadding="0" border="0" style="width: 100%">
<tr class="row1">
    <td>
    
    
    {* BEGIN menu *}
    <table cellspacing="1" cellpadding="0" border="0">
    <a href="http://game.unikod.com/help.quick.php?qhf=xmleditor&amp;req=i,b">xxxxxxxxxx</a>
    </table>
    {* END menu *}
    
    
    </td>
</tr>
<tr>
    <td>
    <textarea name="xml_content" style="width: 100%; height: 400px; background-color: #000000; color: #FFFFFF; padding: 5px; border: 0px solid"></textarea>
    </td>
</tr>
</table>
{* END xmleditor *}


</form>
{include file="main_bottom.tpl"}

{/strip}