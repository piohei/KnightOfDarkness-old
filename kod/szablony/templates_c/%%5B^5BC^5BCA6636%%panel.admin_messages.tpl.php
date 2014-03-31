<?php /* Smarty version 2.6.11, created on 2010-07-22 09:32:33
         compiled from panel.admin_messages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'panel.admin_messages.tpl', 31, false),)), $this); ?>
<?php echo '';  echo $this->_tpl_vars['postmess'];  echo '<br>';  echo $this->_tpl_vars['a'];  echo '<form action="index.php?mode=';  echo @MODE_ADMIN_MESSAGES;  echo '"method="POST"><input type="hidden" name=""value""></input><table><tr><td colspan="2">Nowa wiadomo¶æ administracyjna (uwaga mo¿na stosowaæ dowolne tagihtml):</td></tr><tr><td>Nazwa dodaj±cego (mo¿e byæ pusta):</td><td align="left"><input maxlength="20" type="text" name="login" value="';  echo $this->_tpl_vars['login'];  echo '"></td></tr><tr><td colspan="2"><textarea rows="10" cols="60" name="admin_message">';  echo $this->_tpl_vars['admin_messages'][0]['wiadomosc'];  echo '</textarea></td></tr><tr><td><input type="submit" name="add_new_admin_message"value="Dodaj now± wiadomo¶æ"></input></td></tr></table>Aktualne wiadomo¶ci:<table><tr><td>Id</td><td>Kto</td><td>Kiedy</td><td>Text</td></tr>';  unset($this->_sections['m']);
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['admin_messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['start'] = (int)0;
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
if ($this->_sections['m']['start'] < 0)
    $this->_sections['m']['start'] = max($this->_sections['m']['step'] > 0 ? 0 : -1, $this->_sections['m']['loop'] + $this->_sections['m']['start']);
else
    $this->_sections['m']['start'] = min($this->_sections['m']['start'], $this->_sections['m']['step'] > 0 ? $this->_sections['m']['loop'] : $this->_sections['m']['loop']-1);
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = min(ceil(($this->_sections['m']['step'] > 0 ? $this->_sections['m']['loop'] - $this->_sections['m']['start'] : $this->_sections['m']['start']+1)/abs($this->_sections['m']['step'])), $this->_sections['m']['max']);
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
 echo ' ';  echo smarty_function_cycle(array('values' => "row1,row2",'print' => 'false','assign' => 'row'), $this); echo '<tr><td class="';  echo $this->_tpl_vars['row'];  echo '">';  echo $this->_tpl_vars['admin_messages'][$this->_sections['m']['index']]['id_wiadomosci_administracyjne'];  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '">';  echo $this->_tpl_vars['admin_messages'][$this->_sections['m']['index']]['login'];  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '">';  echo $this->_tpl_vars['admin_messages'][$this->_sections['m']['index']]['date'];  echo '</td><td class="';  echo $this->_tpl_vars['row'];  echo '"><textarea readonly="readonly" rows="5" cols="60">';  echo $this->_tpl_vars['admin_messages'][$this->_sections['m']['index']]['wiadomosc'];  echo '</textarea></td></tr>';  endfor; endif;  echo '</table></form>'; ?>
