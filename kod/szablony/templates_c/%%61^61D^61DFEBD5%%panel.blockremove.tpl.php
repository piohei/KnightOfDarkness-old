<?php /* Smarty version 2.6.11, created on 2010-07-25 05:48:47
         compiled from panel.blockremove.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'panel.blockremove.tpl', 68, false),)), $this); ?>

<?php echo '
<script type="text/javascript">
function user_block(form, username){
    form.elements[\'user_to_block\'].value = username;
    form.submit();
}

function user_unblock(form, username){
    form.elements[\'user_to_unblock\'].value = username;
    form.submit();
}

function user_activate(form, username){
	form.elements[\'activate_user\'].value = username;
	form.submit();
}

function user_remove(form, username){
    if(confirm(\'Usun±æ: \'+ username + \'?\')){
        form.elements[\'user_to_remove\'].value = username;
        form.submit();
    }
}

function user_turs_modify(form, username){
    if(confirm(\'Czy chcesz usun±æ \'+form.elements[\'user_to_turs_modify_ile_tur\'].value+\' tur z ksiestwa: \'+ username + \'?\')){
        form.elements[\'user_to_turs_modify\'].value = username;
        form.submit();
    }
}
</script>
'; ?>


<?php echo '';  if ($this->_tpl_vars['INFO_MESSAGE']):  echo '<font color="red">';  $_from = $this->_tpl_vars['INFO_MESSAGE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mes']):
 echo '<br>';  echo $this->_tpl_vars['mes'];  echo '';  endforeach; endif; unset($_from);  echo '</font>';  endif;  echo '<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%"><tr class="Header"><td colspan="3">Szukaj gracza (% - dowolny ci±g znaków, _ - dowolny znak, wielko¶æ liter nie ma znaczenia)</td></tr><tr><td>';  echo '<form action="index.php?mode=';  echo @MODE_BLOCKREMOVE;  echo '" method="POST" style="margin: 0; padding: 0"><table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px;"><tr><td>Wyszukaj u¿ytkownika&nbsp;</td><td><input type="text" name="keyword" value="';  echo $_POST['keyword'];  echo '">&nbsp;</td><td><select name="field"><option value="ip" ';  if ($_POST['field'] == 'ip'):  echo 'selected';  endif;  echo '>Adres IP</option><option value="login" ';  if ($_POST['field'] == 'login' || empty ( $_POST['field'] )):  echo 'selected';  endif;  echo '>Nazwa u¿ytkownika</option></select></td></tr><tr><td>Limit&nbsp;</td><td><input type="text" name="limit" value="';  echo ((is_array($_tmp=@$_POST['limit'])) ? $this->_run_mod_handler('default', true, $_tmp, 100) : smarty_modifier_default($_tmp, 100));  echo '"></td><td><input type="submit" value="OK"></td></tr></table>';  echo '';  echo '';  if ($this->_tpl_vars['user_list']):  echo '<input type="hidden" name="user_to_block" value=""><input type="hidden" name="user_to_unblock" value=""><input type="hidden" name="user_to_remove" value=""><input type="hidden" name="activate_user" value="" /><input type="hidden" name="user_to_turs_modify" value=""><table cellspacing="3" cellpadding="3" border="0" style="border: 1px solid #C2C2CC; padding: 10px 20px;"><tr><td colspan="6">LICZBA REKORDÓW: ';  echo $this->_tpl_vars['count'];  echo '</td></tr><tr class="Header"><td>Uzytkownik</td><td>Koalicja</td><td>Aktywno¶æ</td><td>IP</td><td>Aktywne</td><td>Opcje</td></tr>';  $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
 echo '<tr style="cursor: pointer" onmouseover="this.style.backgroundColor=\'#E6EDFF\'" onmouseout="this.style.backgroundColor=\'\'"><td><i>';  echo $this->_tpl_vars['user']['login'];  echo '</i></td><td>&nbsp;&nbsp;&nbsp;';  echo ((is_array($_tmp=@$this->_tpl_vars['user']['koalicja'])) ? $this->_run_mod_handler('default', true, $_tmp, "---") : smarty_modifier_default($_tmp, "---"));  echo '&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;';  echo $this->_tpl_vars['user']['ostatni_log'];  echo '&nbsp;&nbsp;&nbsp;</td><td align="right">';  echo ((is_array($_tmp=@$this->_tpl_vars['user']['ip'])) ? $this->_run_mod_handler('default', true, $_tmp, "---") : smarty_modifier_default($_tmp, "---"));  echo '</td><td align="right">';  if ($this->_tpl_vars['user']['czy_aktywowane']):  echo 'tak';  else:  echo '';  if ($this->_tpl_vars['mode_activate']):  echo '<input type="button" name="activate" value="aktywuj" onclick="user_activate(this.form, \'';  echo $this->_tpl_vars['user']['login'];  echo '\')"/>';  else:  echo 'nie';  endif;  echo '';  endif;  echo '</td><td align="right">';  if ($this->_tpl_vars['user']['property'] & @USERPROPERTY_BLOCKED):  echo '<input type="button" name="unblock" value="Unban" onclick="user_unblock(this.form, \'';  echo $this->_tpl_vars['user']['login'];  echo '\')">';  else:  echo '<input type="button" name="block" value="Ban" onclick="user_block(this.form, \'';  echo $this->_tpl_vars['user']['login'];  echo '\')">';  endif;  echo '';  if ($this->_tpl_vars['mode_blockremove']):  echo '<input type="button" name="remove" value="Remove" onclick="user_remove(this.form, \'';  echo $this->_tpl_vars['user']['login'];  echo '\')">';  endif;  echo '';  if ($this->_tpl_vars['mode_del_turs']):  echo '<input type="text" name="user_to_turs_modify_ile_tur" size="3" value="0"><input type="button" name="turs_modify" value="Usuñ tury" onclick="user_turs_modify(this.form, \'';  echo $this->_tpl_vars['user']['login'];  echo '\')">';  endif;  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  endif;  echo '</form>';  echo '</td></tr></table>'; ?>