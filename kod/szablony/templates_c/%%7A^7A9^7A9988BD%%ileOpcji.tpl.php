<?php /* Smarty version 2.6.11, created on 2010-11-02 20:07:06
         compiled from sondy/ileOpcji.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $this->_tpl_vars['akcja']; ?>
" method="POST">
  Ile opcji ma miec ankieta ?? 
  <input type="text" size="3" name="ileOpcji"  maxlength="1">
  <input type="submit" class="button" value="Ok" >
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>