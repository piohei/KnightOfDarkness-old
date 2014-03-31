<?php /* Smarty version 2.6.11, created on 2010-11-13 22:15:40
         compiled from admin/admin_main.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['reset_ask']): ?>
	<span>Czy napewno chcesz zresetowaæ?
	<form method="post" action="admin.php" >
		<input type="submit" name="reset" value="tak" />
	</form>
	</span> 
<?php endif;  if ($this->_tpl_vars['reset']): ?>
	<span>Era zosta³a zresetowana, mi³ej gry</span>
<?php endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>