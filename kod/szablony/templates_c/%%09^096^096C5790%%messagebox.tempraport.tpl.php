<?php /* Smarty version 2.6.11, created on 2010-08-17 22:41:24
         compiled from messagebox.tempraport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'messagebox.tempraport.tpl', 23, false),)), $this); ?>
<?php echo '<table style="width: 100%; color: #b0a392; font-size: 11px" cellpadding="0" cellspacing="0" border="0"><tr style="height: 1px"><td colspan="4"></td></tr>';  $_from = $this->_tpl_vars['list_tempraport']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message_header']):
 echo '<tr style="height: 1px"><td colspan="4"></td></tr><tr style="height: 22px; background-color: #212121"><td style="width: 15px; color: #7f9792" align="center" valign="middle">';  if (! $this->_tpl_vars['message_header']['is_read']):  echo '<div id="urflag_';  echo $this->_tpl_vars['message_header']['id'];  echo '"><b>*</b></div>';  else:  echo '&nbsp;';  endif;  echo '</td><td><b>';  echo $this->_tpl_vars['message_header']['from'];  echo ':</b>&nbsp;<a style="color: #b0a392;" href="javascript:read_message(';  echo $this->_tpl_vars['message_header']['id'];  echo ')">';  echo $this->_tpl_vars['message_header']['subject'];  echo '</a></td><td style="color: #84796a; width: 150px" align="right">';  echo ((is_array($_tmp=$this->_tpl_vars['message_header']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d-%m-%Y") : smarty_modifier_date_format($_tmp, "%d-%m-%Y"));  echo '&nbsp;<span style="font-size: 0.8em">';  echo ((is_array($_tmp=$this->_tpl_vars['message_header']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : smarty_modifier_date_format($_tmp, "%H:%M:%S"));  echo '</span></td><td align="right" style="padding-right: 2px"><a href="';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'messages/messagebox.php?mode=';  echo $this->_tpl_vars['mode'];  echo '&amp;action=delete&amp;id=';  echo $this->_tpl_vars['message_header']['id'];  echo '"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'messagebox_ico_delete.gif" alt="X" tite="Usu� raport" style="margin-right: 5px"></a><a href="';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'messages/messagebox.php?mode=';  echo $this->_tpl_vars['mode'];  echo '&amp;action=share&amp;id=';  echo $this->_tpl_vars['message_header']['id'];  echo '"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'eye.png" width="16px" alt="S" tite="Udost�pnij raport koalicji" style="margin-right: 5px"></a><input id="';  if (! $this->_tpl_vars['message_header']['is_read']):  echo 'un';  endif;  echo 'read_';  echo $this->_tpl_vars['message_header']['id'];  echo '" type="checkbox" name="delete_list[]" value="';  echo $this->_tpl_vars['message_header']['id'];  echo '"></td></tr><tr style="height: 1px"><td colspan="4"></td></tr>';  endforeach; endif; unset($_from);  echo '<tr style="height: 1px"><td colspan="4"></td></tr></table>'; ?>