<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
{strip}
<html>
<head>
<meta http-equiv="Content-Language" content="pl">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<link rel="stylesheet" type="text/css" href="{$CFG->adresSerwera}css/main_style.css">
<title>MR</title>
</head>
<body>

<table width="100%" border="0">
<tr>
    <td align="center">


        {* wlasciwa wiadomosc *}
        <table border="0" width="480px" cellspacing="0" cellpadding="0" style="background-color: #251f13; color: #B0AFAF; font-size: 12px; line-height: 13px">
        <tr>
            <td colspan="3" height="4px" width="438px" background="{$image_dir}messages_preview_edge_up.jpg"></td>
            <td  colspan="2" rowspan="2" height="49px" width="42px"><img src="{$image_dir}messages_preview_corner.jpg"></td>
        </tr>
        <tr>
            <td rowspan="3" width="4px" background="{$image_dir}messages_preview_edge_left.jpg"></td>
            <td colspan="2" width="434px" height="45px">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3" height="330px" valign="top" style="padding-top: 50px; padding-left: 30px; padding-right: 30px">
                <p>
                {$message_data.message|nl2br}
                </p>
            </td>
            <td rowspan="2" width="4px" background="{$image_dir}messages_preview_edge_right.jpg"></td>
        </tr>
        <tr>
            <td width="414px" style="text-align: right; padding-right: 50px">
               {* <b>{$message_data.from}</b> *}
            </td>
            <td width="20px" height="58px"><img src="{$image_dir}messages_preview_stamp_part1.jpg"></td>
            <td width="38px" height="58px"><img src="{$image_dir}messages_preview_stamp_part2.jpg"></td>
        </tr>
        <tr>
            <td colspan="2" height="4px" background="{$image_dir}messages_preview_edge_down.jpg"></td>
            <td rowspan="2" width="20px" height="22px"><img src="{$image_dir}messages_preview_stamp_part3.jpg"></td>
            <td rowspan="2" width="38" height="22px"><img src="{$image_dir}messages_preview_stamp_part4.jpg"></td>
            <td rowspan="2" width="4px" height="22px" style="background-color: #000000"></td>
        </tr>
        <tr>
            <td colspan="2" width="418px" height="18px" style="background-color: #000000"></td>
        </tr>
        </table>


    </td>
</tr>
</table>

</body>
</html>
{/strip}