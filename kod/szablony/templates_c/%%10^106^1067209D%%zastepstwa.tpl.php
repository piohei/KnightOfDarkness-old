<?php /* Smarty version 2.6.11, created on 2010-07-26 09:43:46
         compiled from zastepstwa.tpl */ ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array('tytul' => "Lista wszystkich zastêpstw")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table cellspacing="2" cellpadding="0" border="0" style="width: 100%"><tr><td class="header" style="padding: 0px 5px" colspan="4">Ilo¶æ zastêpstw (';  echo $this->_tpl_vars['zastepstwa_count'];  echo ')</td></tr><tr class="row1" style="height: 25px"><td style="padding: 0px 5px">Kto</td><td style="padding: 0px 5px">Kogo</td><td style="padding: 0px 5px">Od</td><td style="padding: 0px 5px">Do</td></tr>';  $_from = $this->_tpl_vars['zastepstwa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zas']):
 echo ' ';  if ($this->_tpl_vars['zas']['bedzie_czynne']):  echo '<tr class="row1" style="height: 25px; color: orange">';  elseif ($this->_tpl_vars['zas']['czynne']):  echo '<tr class="row1" style="height: 25px; color: green">';  elseif (! $this->_tpl_vars['zas']['czynne']):  echo '<tr class="row1" style="height: 25px; color: red">';  else:  echo '<tr class="row1" style="height: 25px;">';  endif;  echo '<td style="padding: 0px 5px">';  echo $this->_tpl_vars['zas']['kto'];  echo '</td><td style="padding: 0px 5px">';  echo $this->_tpl_vars['zas']['kogo'];  echo '</td><td style="padding: 0px 5px">';  echo $this->_tpl_vars['zas']['od'];  echo '</td><td style="padding: 0px 5px">';  echo $this->_tpl_vars['zas']['do'];  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
