<?php /* Smarty version 2.6.11, created on 2010-07-21 09:18:29
         compiled from coalition.list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'coalition.list.tpl', 61, false),)), $this); ?>
<?php echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array('tytul' => 'Koalicje')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<form action="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '" method="GET" style="padding: 0; margin: 0"><input type="hidden" name="sort" value="';  echo $_GET['sort'];  echo '"><input type="hidden" name="order" value="';  echo $_GET['order'];  echo '"><table border="0" cellspacing="0" cellpadding="1" style="width: 100%; margin-top: 1px"><tr style="height: 55px"><td class="row1" style="width: 50%; padding: 0px 5px"><span style="font-size: 10px">strona&nbsp;</span>';  if ($this->_tpl_vars['coalition_list']):  echo '<b>';  echo $this->_tpl_vars['coalition_list'][0]['current_page'];  echo '</b> / ';  echo $this->_tpl_vars['coalition_list'][0]['total_pages'];  echo '<br>';  if ($this->_tpl_vars['coalition_list'][0]['current_page'] < $this->_tpl_vars['coalition_list'][0]['total_pages']):  echo '';  $this->assign('page_jump', ($this->_tpl_vars['coalition_list'][0]['current_page']+1));  echo '';  else:  echo '';  $this->assign('page_jump', '1');  echo '';  endif;  echo '';  else:  echo '<b>niedostêpna</b><br>';  endif;  echo '<input type="text" name="page" class="textField" value="';  echo $this->_tpl_vars['page_jump'];  echo '" style="margin-right: 20px"><input type="submit" class="button" value="Przejd¼"></td>';  echo '<td class="row1" style="padding: 0px 5px"><span style="font-size: 10px">poszukiwana fraza: ';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/template.quickhelp.tpl", 'smarty_include_vars' => array('helpfile' => "coalition.list")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</span><br><input type="text" class="textField" name="keyword" value="';  echo $_GET['keyword'];  echo '" style="margin-right: 20px"><input type="submit" class="button" name="new" value="Szukaj"></td>';  echo '';  echo '<tr><td colspan="2"><table cellspacing="1" cellpadding="0" border="0" style="width: 100%"><tr><td class="header">';  if ($this->_tpl_vars['sorting_links']['COALITION']['img']):  echo '<img src="';  echo $this->_tpl_vars['image_dir'];  echo '';  echo $this->_tpl_vars['sorting_links']['COALITION']['img'];  echo '" style="margin-right: 10px">';  endif;  echo '<a href="';  echo $_SERVER['SCRIPT_NAME'];  echo '';  echo $this->_tpl_vars['sorting_links']['COALITION']['link'];  echo '" style="color: #C8A27C">Koalicja</a></td><td class="header">';  if ($this->_tpl_vars['sorting_links']['MEMBERS']['img']):  echo '<img src="';  echo $this->_tpl_vars['image_dir'];  echo '';  echo $this->_tpl_vars['sorting_links']['MEMBERS']['img'];  echo '" style="margin-right: 10px">';  endif;  echo '<a href="';  echo $_SERVER['SCRIPT_NAME'];  echo '';  echo $this->_tpl_vars['sorting_links']['MEMBERS']['link'];  echo '" style="color: #C8A27C">Liczba królestw</a></td><td class="header">&nbsp;</td></tr>';  if ($this->_tpl_vars['coalition_list']):  echo '';  unset($this->_sections['coal']);
$this->_sections['coal']['loop'] = is_array($_loop=$this->_tpl_vars['coalition_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['coal']['name'] = 'coal';
$this->_sections['coal']['start'] = (int)1;
$this->_sections['coal']['show'] = true;
$this->_sections['coal']['max'] = $this->_sections['coal']['loop'];
$this->_sections['coal']['step'] = 1;
if ($this->_sections['coal']['start'] < 0)
    $this->_sections['coal']['start'] = max($this->_sections['coal']['step'] > 0 ? 0 : -1, $this->_sections['coal']['loop'] + $this->_sections['coal']['start']);
else
    $this->_sections['coal']['start'] = min($this->_sections['coal']['start'], $this->_sections['coal']['step'] > 0 ? $this->_sections['coal']['loop'] : $this->_sections['coal']['loop']-1);
if ($this->_sections['coal']['show']) {
    $this->_sections['coal']['total'] = min(ceil(($this->_sections['coal']['step'] > 0 ? $this->_sections['coal']['loop'] - $this->_sections['coal']['start'] : $this->_sections['coal']['start']+1)/abs($this->_sections['coal']['step'])), $this->_sections['coal']['max']);
    if ($this->_sections['coal']['total'] == 0)
        $this->_sections['coal']['show'] = false;
} else
    $this->_sections['coal']['total'] = 0;
if ($this->_sections['coal']['show']):

            for ($this->_sections['coal']['index'] = $this->_sections['coal']['start'], $this->_sections['coal']['iteration'] = 1;
                 $this->_sections['coal']['iteration'] <= $this->_sections['coal']['total'];
                 $this->_sections['coal']['index'] += $this->_sections['coal']['step'], $this->_sections['coal']['iteration']++):
$this->_sections['coal']['rownum'] = $this->_sections['coal']['iteration'];
$this->_sections['coal']['index_prev'] = $this->_sections['coal']['index'] - $this->_sections['coal']['step'];
$this->_sections['coal']['index_next'] = $this->_sections['coal']['index'] + $this->_sections['coal']['step'];
$this->_sections['coal']['first']      = ($this->_sections['coal']['iteration'] == 1);
$this->_sections['coal']['last']       = ($this->_sections['coal']['iteration'] == $this->_sections['coal']['total']);
 echo '';  echo smarty_function_cycle(array('values' => "row1,row2",'print' => 'false','assign' => 'row'), $this); echo '<tr><td class="';  echo $this->_tpl_vars['row'];  echo '" style="padding: 5px 5px; width: 50%"><a href="coalition.desc.php?coal=';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['nazwa'];  echo '">';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['nazwa'];  echo '</a><br><span style="font-size: 10px">cesarstwo: <a href="';  echo $this->_tpl_vars['root_dir'];  echo 'walka/infoGracza.php?name=';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['czlonek_1'];  echo '" style="color: #949492">';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['czlonek_1'];  echo '</a></span></td><td class="';  echo $this->_tpl_vars['row'];  echo '" align="center" style="font-size: 14px; font-weight: bold">';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['ilosc_czlonkow'];  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '" align="center"><a href="';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'messages/messagebox.php?mode=3&amp;rcpt=';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['czlonek_1'];  echo '"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'list.gif" alt="Wy¶lij goñca z listem do cesarza" title="Wy¶lij goñca z listem do cesarza" style="margin: 0px 5px"></a><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'znajomi/spisZnajomych.php?ktoD=';  echo $this->_tpl_vars['coalition_list'][$this->_sections['coal']['index']]['czlonek_1'];  echo '"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'ksiazka.gif" alt="Dodaj cesarza do ksiêgi znajomych" title="Dodaj cesarza do ksiêgi znajomych" style="margin: 0px 5px"></a></td></tr>';  endfor; endif;  echo '';  else:  echo '<tr><td align="center" colspan="3">Nie odnaleziono ¿adnej koalicji</td></tr>';  endif;  echo '<tr><td align="center" colspan="3" class="header">';  if ($this->_tpl_vars['coalition_list']):  echo 'strona ';  echo $this->_tpl_vars['coalition_list'][0]['current_page'];  echo ' / ';  echo $this->_tpl_vars['coalition_list'][0]['total_pages'];  echo '';  else:  echo '';  endif;  echo '</td></tr></table></td></tr>';  echo '</tr></table></form>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ''; ?>
