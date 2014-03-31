<?php /* Smarty version 2.6.11, created on 2010-07-21 09:19:26
         compiled from coalition.desc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'coalition.desc.tpl', 56, false),)), $this); ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array('tytul' => 'Koalicja')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table border="0" cellspacing="1" cellpadding="3" width="100%">';  if ($this->_tpl_vars['mesg'] != ""):  echo '<tr><td ';  if ($this->_tpl_vars['coalition'] != ""):  echo 'colspan="2"';  endif;  echo ' class="row1" style="color: red">';  $_from = $this->_tpl_vars['mesg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
 echo '';  echo $this->_tpl_vars['message'];  echo '<br>';  endforeach; endif; unset($_from);  echo '</td></tr>';  endif;  echo '';  if ($this->_tpl_vars['coalition'] != ""):  echo '<tr class="row1"><td class="header">Nazwa</td><td>';  echo $this->_tpl_vars['coalition'];  echo '</td></tr><tr class="row2" ><td colspan="2">';  echo $this->_tpl_vars['description'];  echo '</td></tr><tr class="row2"><td>Poprzednia era:</td><td>';  if ($this->_tpl_vars['history']->czyJest == 'ok'):  echo 'Ziemia: ';  echo $this->_tpl_vars['history']->dane['rank_1'];  echo ' Armia: ';  echo $this->_tpl_vars['history']->dane['rank_2'];  echo '';  else:  echo 'To jest pierwsza era tej koalicji';  endif;  echo '</td></tr>';  endif;  echo '</table>';  if ($this->_tpl_vars['coalition'] != ""):  echo '<table border="0" cellspacing="1" width="100%" cellpadding="3"><tr><td class="header">Królestwo</td><td class="header" >Ziemia</td></tr>';  $_from = $this->_tpl_vars['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
 echo '<tr ';  if ($this->_tpl_vars['member']['nazwa'] == $this->_tpl_vars['emperor']):  echo 'class="row3" style="font-weight: bold"';  else:  echo 'class="';  echo smarty_function_cycle(array('values' => "row1,row2"), $this); echo '"';  endif;  echo '><td><a href="../walka/infoGracza.php?name=';  echo $this->_tpl_vars['member']['nazwa'];  echo '">';  echo $this->_tpl_vars['member']['nazwa'];  echo '</a></td><td>';  echo $this->_tpl_vars['member']['ziemia'];  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
