<?php /* Smarty version 2.6.11, created on 2010-10-14 20:58:41
         compiled from budynek_koncowy/spisbudynkow.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table cellspacing="1" cellpadding="3" border="0" style="margin:2px">';  $_from = $this->_tpl_vars['budynki']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['budynek']):
 echo '';  if ($this->_tpl_vars['key']%2 == 0):  echo '<tr class="row1">';  else:  echo '<tr class="row2">';  endif;  echo '<td width="500px">Koalicja:<a href="';  echo $this->_tpl_vars['root_dir'];  echo 'koalicja/coalition.desc.php?coal=';  echo $this->_tpl_vars['budynek']['koalicja'];  echo '">';  echo $this->_tpl_vars['budynek']['koalicja'];  echo '</a><table width="466px" cellspacing="0" cellpadding="0" border="0">';  if ($this->_tpl_vars['key']%2 == 0):  echo '<tr class="row1">';  else:  echo '<tr class="row2">';  endif;  echo '<td width="50px">Postêp:</td><td width="';  echo $this->_tpl_vars['budynek']['postep_piksele']+1;  echo '" bgcolor="#ac6f10">&nbsp;</td><td>&nbsp;';  echo $this->_tpl_vars['budynek']['postep_pr'];  echo '%</td></tr></table></td><td width="24px"><a href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'atak/?target=';  echo $this->_tpl_vars['budynek']['koalicja'];  echo '&type=5\'><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'miecze_male.gif" alt="Atak"></a></td></tr>';  endforeach; endif; unset($_from);  echo '</table>'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>