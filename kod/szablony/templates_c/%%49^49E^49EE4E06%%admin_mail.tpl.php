<?php /* Smarty version 2.6.11, created on 2010-11-13 22:16:14
         compiled from admin/admin_mail.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <form method="post" action="<?php echo $this->_tpl_vars['www_root']; ?>
admin.php">
 <table width="100%" cellspacing="1" cellpadding="2">
 	<tr>
 		<td>Temat</td>
 		<td><input type="text" name="subject" /></td>
 	</td>
 	<tr>
 		<td>Tre&#347;&#263;</td>
 		<td><textarea name="msg" row="20" cols="20"></textarea></td>
 	</tr>
 </table>
	 <input type="submit" name="mail_send" value="wy&#347;lij" />
 </form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>