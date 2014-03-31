<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
{strip}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<meta http-equiv="Refresh" content="5; url=pub.php">
<style type="text/css">
{literal}
    body, table{
        background-color: #2B2C2D;
        color: #949492;
        font: 11px Verdana, Geneva, Arial, Helvetica, sans-serif;
    }
    body{
        scrollbar-face-color: #372C1B;
    	scrollbar-track-color: #36322D;
    	scrollbar-arrow-color: #937B59;
    	scrollbar-3dlight-color: #937B59;
    	scrollbar-highlight-color: #33291B;
    	scrollbar-shadow-color: #372C1B;
    	scrollbar-darkshadow-color: #937B59;
    }
{/literal}
</style>
</head>
<body>
{if $pub_mesg != ""}
<table cellspacing="0" cellpadding="0" border="0" style="width: 460px">
{foreach name="displayer" from=$pub_mesg item="mesg"}
    <tr style="background-color: #212223; color: #6B6356">
        <td style="font-size: 13px; font-weight: bold; padding: 3px 5px">
            {$mesg.username}
        </td>
        <td align="right" style="padding: 3px 5px">
            <span style="font-weight: bold">{$mesg.send_date|date_format:"%d-%m-%Y"}</span>&nbsp;
            <span style="font-size: 10px">{$mesg.send_date|date_format:"%H:%M:%S"}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style="padding: 0; margin: 5px 15px 10px 15px">{$mesg.message}</p>
        </td>
    </tr>
{/foreach}
</table>
<a name="last">&nbsp</a>
{/if}
</body>

</html>
{/strip}