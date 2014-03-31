<?php /* Smarty version 2.6.11, created on 2010-10-28 23:02:39
         compiled from ksiestwo.tpl */ ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<center><table width="100%" cellspacing="1" cellpadding="2"><tr><td class="header">Budynek</td><td class="header">Wykorzystne</td><td class="header">Ca³kowite</td></tr><tr><td class="row1">Wie¿yczki</td><td class="row1">';  echo $this->_tpl_vars['tower']['used'];  echo '</td><td class="row1">';  echo $this->_tpl_vars['tower']['all'];  echo '</td></tr><tr><td class="row2">Zamki(piechota)</td><td class="row2">';  echo $this->_tpl_vars['castle']['infantry_used'];  echo '</td><td class="row2">';  echo $this->_tpl_vars['castle']['infantry_all'];  echo '</td></tr><tr><td class="row1">Zamki(³ucznicy)</td><td class="row1">';  echo $this->_tpl_vars['castle']['archers_used'];  echo '</td><td class="row1">';  echo $this->_tpl_vars['castle']['archers_all'];  echo '</td></tr></table><table width="100%" cellspacing="1" cellpadding="2"><tr><td class="header">Bonus</td><td class="header">Warto¶æ</td></tr><tr><td class="row1">Atak armii</td><td class="row1">';  echo $this->_tpl_vars['bonus']['aa'];  echo ' %</td></tr><tr><td class="row1">Obrona armii</td><td class="row1">';  echo $this->_tpl_vars['bonus']['ad'];  echo ' %</td></tr><tr><td class="row1">Atak zamku</td><td class="row1">';  echo $this->_tpl_vars['bonus']['da'];  echo ' %</td></tr><tr><td class="row1">Obrona zamku</td><td class="row1">';  echo $this->_tpl_vars['bonus']['dd'];  echo ' %</td></tr></table></center>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
