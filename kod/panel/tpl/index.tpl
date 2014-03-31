<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>KoD Panel</title>

{literal}
<script type="text/javascript">
    function openWindow( url ){
        options = "width=780,height=400,location=no,toolbar=no"+
            "status=no,menubar=no,resizable=yes,scrollbars=yes";
        newWindow = window.open(url, "Panel Administracyjny", options );
    }
</script>
{/literal}
</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr>
    <td class="LeftMenu" align="left" valign="top">
    {include file="main.menu.tpl"}
    </td>
    <td class="MainWindow" align="left" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
        <tr>
            <td style="background-color: #e2e9fb; height: 30px; text-align: right; padding-right: 50px; font-weight: bold; font-size: 17px; color: #c2c2cc">PANEL ADMINISTRACYJNY</td>
        </tr>
        <tr>
            <td>{include file=$panel|default:'default.tpl'}</td>
        </tr>
        </table>
    </td>
</tr>
</table>

</body>

</html>
