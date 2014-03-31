<?php /* Smarty version 2.6.11, created on 2010-07-25 05:50:03
         compiled from panel.todo.tpl */ ?>
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr class="Header">
<td>Lista zadañ</td>
</tr>
<tr>
<td>
<div style="color : silver; font-size : 8pt; float : right; ">
<br/>Legenda :<br/>
[D] - zadanie ukoñczone <br/>
[P] - zadanie w trakcie <br/>
</div>
<table style="padding: 10px 20px; width : 600px;">
<tr class="Header">
<td>Od kogo</td><td>Dla kogo</td><td>data</td><td>Status</td><td>Opis</td>
</tr>
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['event']):
?>
<tr>
<td><?php echo $this->_tpl_vars['event']['kto']; ?>
</td>
<td><?php echo $this->_tpl_vars['event']['kogo']; ?>
</td>
<td width="100px"><?php echo $this->_tpl_vars['event']['data']; ?>
</td>
<td width="100px" align="center">
<?php if ($this->_tpl_vars['login'] == $this->_tpl_vars['event']['kogo'] && ! ( $this->_tpl_vars['event']['status'] == 'done' )): ?>
<form action="index.php?mode=<?php echo @MODE_TO_DO; ?>
" method="POST" style="margin: 0; padding: 0">
<input type="hidden" name="co" value=<?php echo $this->_tpl_vars['event']['id']; ?>
 />
<input type="submit" name="status" value="D" />
<input type="submit" name="status" value="P" />
</form>
<?php endif; ?>
<font color="<?php echo $this->_tpl_vars['event']['color']; ?>
"><?php echo $this->_tpl_vars['event']['status']; ?>
</font>
</td>
<td><?php echo $this->_tpl_vars['event']['txt']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>


</td>
</tr>
<tr>
	<td>
		<table style="padding: 10px 20px; width : 600px;">
			<tr class="Header"><td>Dodaj zadanie</td></tr>
			<tr>
				<td>
				<form action="index.php?mode=<?php echo @MODE_TO_DO; ?>
" method="POST" style="margin: 0; padding: 0">
				<center>
					Dla kogo : <br/><input type="text" name="komu" /><br/><br/>
					zadanie : <br/>
					<textarea name="txt" cols="64" rows="4"></textarea><br/><br/>
					<input type="submit" name="add" value="dodaj" />
					</center>
				</form>	
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>