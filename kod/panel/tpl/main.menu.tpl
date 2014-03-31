<table cellspacing="0" cellpadding="0" border="0" class="LeftMenu">
	<tr>
		<td
			style="height: 30px; text-align: center; background-color: #C2C2CC"><b><a
			style="color: #000000; text-decoration: none" href="index.php">MENU</a></b></td>
	</tr>
	<tr>
		<td style="height: 15px;">&nbsp;</td>
	</tr>

	<tr>
		<td class="LeftMenuTitle">...:: U¿ytkownicy</td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_MULTI_ANALYSER}">Analizator&nbsp;multikont</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_MULTI_ANALYSER_II}">MH&nbsp;II</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_BLOCKREMOVE}">Blokady
		&amp; Usuwanie</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_CONSTRAINT_MANAGER}">Zarz±dzanie&nbsp;us³ugami</a></td>
	</tr>

	<tr>
		<td class="LeftMenuTitle"><br>
		...:: System</td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_LOG}">Logi targu</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_BS_MANAGE}">BS Manage</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_TO_DO}">Lista zadañ</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_SMS}">Us³uga SMS
		Premium</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_ADMIN_MESSAGES}">Wiadomo¶ci
		administracyjne</a></td>
	</tr>
	<tr>
		<td class="LeftMenuItem"><a
			href="{$SCRIPT_NAME}?mode={$smarty.const.MODE_ADMIN_LOGS}">Operacje adminów</a></td>
	</tr>
	<tr>

		{if strcmp($pokaz_admin_shoutbox,'tak')==0}

		<td class="LeftMenuTitle"><br>
		...:: czat</td>
	</tr>
	<tr>
		<td>
		<div id="sb_main" onload="showShoutbox()" ><script type="text/javascript"
			src="{$javascript_dir}../shoutbox/scripts/advajax.js"></script> <script
			type="text/javascript"
			src="{$javascript_dir}../shoutbox/scripts/ShoutBox.js"></script> <script
			type="text/javascript"
			src="{$javascript_dir}../shoutbox/scripts/ShoutBox_advajax.js"></script>

		<link rel="stylesheet"
			href="{$javascript_dir}../shoutbox/css/ShoutBox.css" type="text/css" />
		{*---- <!--[if IE]>
						<link rel="stylesheet" type="text/css" href="{$javascript_dir}../shoutbox/css/ShoutBox_ie6.css" />
						<![endif]--> -------*}
		{*-----------------------------------------------------------------------------}
		<div id="sb_tools">
		<div id="sb_history" class="sb_history" title="Pobierz wcze¶niejsze"
			onclick="sb.getHistory();"></div>
		<div id="sb_scroll_locking" class="sb_unlocked"
			title="Zablokuj scroll" onclick="ShoutBox.switchScroll();"></div>
		</div>
		{-----------------------------------------------------------------------------*}
		<div id="sb_body"></div>
		<form onsubmit="sb.sendMessage();return false;">
			<input type="text" id="sb_message" maxlength="255" /> 
			<input type="submit"	class="button" id="sb_submit" value="Wy¶lij" /></form>
		</div>

		<script language="javascript">
							var sb = new ShoutBox('sb',10000,'{$javascript_dir}../shoutbox/adminShoutBox/AdminShoutBox.php?');
		  show('sb_main');
		  sb.refreshTime = 10000;
		  sb.getMessages();

					{*-----------------------------------------------------------------------------}
					 /*sb.bind('message',{par1:'wartosc1', par2:'wartosc2'},function(data){
						alert(data.par1 + ' ' + data.par2);
						alert(data.params.actionName);
						//jakis nasz kod 
						return true;	
						});*/
							hide('sb_main');
					{-----------------------------------------------------------------------------*}
						</script></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><a class="key" style="font-size: 8px;"
			href="http://nospor.pl/shoutbox.html">ShoutBox 1.1.1</a> {/if}{*pokaz
		shoutbox *}</td>
	</tr>
</table>
