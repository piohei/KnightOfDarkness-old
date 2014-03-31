<?php /* Smarty version 2.6.11, created on 2010-07-27 08:33:52
         compiled from listaZalogowanych.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'listaZalogowanych.tpl', 14, false),)), $this); ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array('tytul' => 'Lista zalogowanych')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  if (is_null ( $this->_tpl_vars['blad'] )):  echo '<table border="0" cellspacing="0" cellpadding="1"style="width: 100%; margin-top: 1px"><tr><td class="header">Login</td><td class="header">Czas ostatniej operacji</td><td class="header">&nbsp;</td></tr>';  unset($this->_sections['zalogowany']);
$this->_sections['zalogowany']['loop'] = is_array($_loop=$this->_tpl_vars['zalogowani']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zalogowany']['name'] = 'zalogowany';
$this->_sections['zalogowany']['start'] = (int)0;
$this->_sections['zalogowany']['show'] = true;
$this->_sections['zalogowany']['max'] = $this->_sections['zalogowany']['loop'];
$this->_sections['zalogowany']['step'] = 1;
if ($this->_sections['zalogowany']['start'] < 0)
    $this->_sections['zalogowany']['start'] = max($this->_sections['zalogowany']['step'] > 0 ? 0 : -1, $this->_sections['zalogowany']['loop'] + $this->_sections['zalogowany']['start']);
else
    $this->_sections['zalogowany']['start'] = min($this->_sections['zalogowany']['start'], $this->_sections['zalogowany']['step'] > 0 ? $this->_sections['zalogowany']['loop'] : $this->_sections['zalogowany']['loop']-1);
if ($this->_sections['zalogowany']['show']) {
    $this->_sections['zalogowany']['total'] = min(ceil(($this->_sections['zalogowany']['step'] > 0 ? $this->_sections['zalogowany']['loop'] - $this->_sections['zalogowany']['start'] : $this->_sections['zalogowany']['start']+1)/abs($this->_sections['zalogowany']['step'])), $this->_sections['zalogowany']['max']);
    if ($this->_sections['zalogowany']['total'] == 0)
        $this->_sections['zalogowany']['show'] = false;
} else
    $this->_sections['zalogowany']['total'] = 0;
if ($this->_sections['zalogowany']['show']):

            for ($this->_sections['zalogowany']['index'] = $this->_sections['zalogowany']['start'], $this->_sections['zalogowany']['iteration'] = 1;
                 $this->_sections['zalogowany']['iteration'] <= $this->_sections['zalogowany']['total'];
                 $this->_sections['zalogowany']['index'] += $this->_sections['zalogowany']['step'], $this->_sections['zalogowany']['iteration']++):
$this->_sections['zalogowany']['rownum'] = $this->_sections['zalogowany']['iteration'];
$this->_sections['zalogowany']['index_prev'] = $this->_sections['zalogowany']['index'] - $this->_sections['zalogowany']['step'];
$this->_sections['zalogowany']['index_next'] = $this->_sections['zalogowany']['index'] + $this->_sections['zalogowany']['step'];
$this->_sections['zalogowany']['first']      = ($this->_sections['zalogowany']['iteration'] == 1);
$this->_sections['zalogowany']['last']       = ($this->_sections['zalogowany']['iteration'] == $this->_sections['zalogowany']['total']);
 echo '';  echo smarty_function_cycle(array('values' => "row1,row2",'print' => 'false','assign' => 'row'), $this); echo '<tr><td class="';  echo $this->_tpl_vars['row'];  echo '"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'walka/infoGracza.php?name=';  echo $this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['login'];  echo '">';  echo $this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['login'];  echo '<a><br>';  if ($this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['koalicja']):  echo '<span style="font-size: 10px">koalicja: <a href="';  echo $this->_tpl_vars['root_dir'];  echo 'koalicja/coalition.desc.php?coal=';  echo $this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['koalicja'];  echo '" style="color: #949492">';  echo $this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['koalicja'];  echo '</a></span>';  else:  echo '<span style="font-size: 10px">koalicja: Brak</span>';  endif;  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '" align="center">';  echo $this->_tpl_vars['zalogowani'][$this->_sections['zalogowany']['index']]['ostatni_log'];  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '" class="header">&nbsp;</td></tr>';  endfor; endif;  echo '</table>';  else:  echo '<b>';  echo $this->_tpl_vars['blad'];  echo '<b>';  endif;  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
