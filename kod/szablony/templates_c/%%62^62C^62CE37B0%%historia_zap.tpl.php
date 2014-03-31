<?php /* Smarty version 2.6.11, created on 2010-07-24 17:25:31
         compiled from historia_zap.tpl */ ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<center><table width="100%" cellspacing="1" cellpadding="2"><tr><td class="header">Ksiêstwo</td><td class="header">Data</td><td class="header">Stan</td><td class="header">Usuñ</td></tr>';  $_from = $this->_tpl_vars['spisZaproszen']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
 echo '';  if ($this->_tpl_vars['key']%2 == 0):  echo '<tr class="row1">';  else:  echo '<tr class="row2">';  endif;  echo '<td><a href=\'../walka/infoGracza.php?name=';  echo $this->_tpl_vars['item']->kogo;  echo '\'>';  echo $this->_tpl_vars['item']->kogo;  echo '</a></td><td>';  echo $this->_tpl_vars['item']->data;  echo '</td><td>';  echo $this->_tpl_vars['item']->stan;  echo '</td><td><a href="';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'koalicja/historia_zap.php?action=delete&amp;id=';  echo $this->_tpl_vars['item']->id;  echo '"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'messagebox_ico_delete.gif" alt="X" tite="Usuñ wie¶æ" style="margin-right: 5px"></a></td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  if ($this->_tpl_vars['prawo_zmiany'] == 1):  echo '<br><form action=\'historia_zap.php?koal=';  echo $this->_tpl_vars['nazwa_koalicji'];  echo '\' method=\'post\'><table width="100%" cellspacing="1" cellpadding="2"><tr class="row2"><td  align="center"><input type=\'checkbox\' name=\'tab[1]\'>Nieprzeczytane</td><td  align="center"><input type=\'checkbox\' name=\'tab[0]\'>Przeczytane</td><td  align="center"><input type=\'checkbox\' name=\'tab[3]\'>Odrzucone</td><td  align="center"><input type=\'checkbox\' name=\'tab[2]\'>Wszystkie</td></table><table width="100%" cellspacing="1" cellpadding="2"><tr><td align="center"><input class="button" type=\'submit\' value=\'USUÑ\'></td></tr></table></form>';  endif;  echo '</center>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
