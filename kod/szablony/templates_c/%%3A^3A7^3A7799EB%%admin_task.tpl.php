<?php /* Smarty version 2.6.11, created on 2010-10-12 02:06:56
         compiled from admin/admin_task.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table width="100%" cellspacing="1" cellpadding="2">
 <tr class="header"><td>Zadanie</td><td>ip</td><td>data</td></tr>
 	<?php $_from = $this->_tpl_vars['task_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['task']):
?>
 	<tr class="row1">
 		<td><?php echo $this->_tpl_vars['task']['task']; ?>
</td><td><?php echo $this->_tpl_vars['task']['ip']; ?>
</td><td><?php echo $this->_tpl_vars['task']['date']; ?>
</td>
 	</tr>
 	<?php endforeach; endif; unset($_from); ?>
 </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>