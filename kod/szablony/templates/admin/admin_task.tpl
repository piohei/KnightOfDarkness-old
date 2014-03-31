{include file="main_top.tpl"}
 <table width="100%" cellspacing="1" cellpadding="2">
 <tr class="header"><td>Zadanie</td><td>ip</td><td>data</td></tr>
 	{foreach from=$task_arr item=task}
 	<tr class="row1">
 		<td>{$task.task}</td><td>{$task.ip}</td><td>{$task.date}</td>
 	</tr>
 	{/foreach}
 </table>
{include file="main_bottom.tpl"}
