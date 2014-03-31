<?php /* Smarty version 2.6.11, created on 2010-07-26 08:54:14
         compiled from coalition.report.tpl */ ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<center><table width="100%" cellspacing="1" cellpadding="2">';  if ($this->_tpl_vars['msg']):  echo '<tr><td class="header">';  echo $this->_tpl_vars['subject'];  echo '</td></tr><tr class="row2"><td>';  echo $this->_tpl_vars['msg'];  echo '</td></tr>';  else:  echo '<tr><td class="header">W³a¶ciciel</td><td class="header">Raport</td><td class="header">Data</td><td class="header">Usuñ</td></tr>';  $_from = $this->_tpl_vars['reports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
 echo '<tr class="row2"><td>';  echo $this->_tpl_vars['report']['whose'];  echo '</td><td align="center"><a href="./raporty.php?id=';  echo $this->_tpl_vars['report']['id'];  echo '">';  echo $this->_tpl_vars['report']['subject'];  echo '</a></td><td>';  echo $this->_tpl_vars['report']['date'];  echo '</td><td>';  if ($this->_tpl_vars['nazwa'] == $this->_tpl_vars['report']['whose'] || $this->_tpl_vars['cesarz']):  echo '<a href="./raporty.php?id=';  echo $this->_tpl_vars['report']['id'];  echo '&action=del"><img src="../img/messagebox_ico_delete.gif" alt="del"/></a></td>';  endif;  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '';  endif;  echo '</table></center>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
