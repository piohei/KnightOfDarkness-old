{strip}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Zarządzanie plikami</title>
    <link rel="stylesheet" type="text/css" href="{$style_dir}main_style.css">
</head>
<body>
	<table align="center" style="border:1px #715E46 solid">
		<tr>
			<td align="center">
				{include file="message.tpl"}
			</td>
		</tr>
		{foreach from=$files key=id item=file_name}
		<tr align="center">
			<td style="border-bottom:1px #715E46 solid">
				<img src="{$CFG->upload_dir}{$file_name}">
				<br>Kod: [{$id}]
				<br><a href="{$CFG->adresSerwera}upload/upload.php?id={$id}">usuń</a>
			</td>
		</tr>
		{/foreach}
		<tr align="center">
			<td style="font: 11px Verdana, Geneva, Arial, Helvetica, sans-serif;color: #A3A3A1;">
				<form method="post" action="upload.php" enctype="multipart/form-data">
				<input type="hidden" name="MAX_FILE_SIZE" value="30000">
				<input type="file" name="file" size="10" class="textFieldType1">&nbsp;<input type="submit" value="Wgraj plik"class="button">
				</form>
				Aby wstawić obrazek do opisu koalicji, albo do wiadomości użyj w treści kod-u obrazka. Jezeli zmienisz obrazek już po napisaniu tekstu obrazek w nim też sie zmieni. 
			</td>
		</tr>
	</table>

</body>
</html>
{/strip}