<?php /* Smarty version 2.6.11, created on 2010-07-21 09:16:55
         compiled from messagebox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'messagebox.tpl', 68, false),)), $this); ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['javascript_dir']; ?>
messagebox.js"></script>
    <script type="text/javascript">
        active_bg = new Image();
        inactive_bg = new Image();

        active_bg.src = '<?php echo $this->_tpl_vars['image_dir']; ?>
messagebox_bookmark_bg.gif';
        inactive_bg.src = '<?php echo $this->_tpl_vars['image_dir']; ?>
messagebox_bookmark_bgd.gif';

        server = '<?php echo $this->_tpl_vars['CFG']->adresSerwera; ?>
';

        <?php echo '
        function submit_remove(){
            form = document.forms[\'mbox\'];
            form.action += \'&action=delete\';
            form.submit();
        }

        function read_message(id){
            unset_read_flag(id);
            openWindow(server+\'messages/message_reader.php?id=\'+id,530,520,\'Wie¶æ\')
        }
        '; ?>

    </script>
<?php echo '';  echo '<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; margin-top: 15px"><tr><td style="width: 8px"></td><td><form name="mbox" action="';  echo $this->_tpl_vars['SCRIPT_NAME'];  echo '?mode=';  echo $this->_tpl_vars['mode'];  echo '" method="POST" style="margin: 0; padding: 0"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">';  echo '<tr><td> ';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.tabs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ' </td></tr>';  echo '';  echo '<tr><td><table cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #715E46; width: 100%;"><tr style="background-color: #2D210E; height: 40px;"><td>';  echo '<table cellspacing="0" cellpadding="0" border="0" style="width: 100%"><tr><td style="width: 10px"></td><td><table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; color: #B0A392; font-size: 11px; ';  echo '">';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_WRITE):  echo '<tr style="height: 25px"><td style="width: 120px">Nazwa&nbsp;odbiorcy:&nbsp;</td><td style="width: 150px"><input class="textFieldType1" style="width: 100%" type="text" name="recipient" value="';  echo ((is_array($_tmp=@$_GET['rcpt'])) ? $this->_run_mod_handler('default', true, $_tmp, ($_POST['recipient'])) : smarty_modifier_default($_tmp, ($_POST['recipient'])));  echo '"></td><td align="left" style="width: 11px"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0"></td><td align="right">Ksiêga&nbsp;</td><td style="width: 21px"><a href="javascript:openWindow(\'';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'messages/book.php?disp=external\',500,400,\'Ksiêga\')"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'book.gif" alt="" title="Ksiêga znajomych" style="margin: 0; padding: 0"></a></td><td align="right">Nadaj&nbsp;</td><td style="width: 21px;"><input type="hidden" name="action" value="send"><input type="image" src="';  echo $this->_tpl_vars['image_dir'];  echo 'messagebox_send.gif" style="margin: 0; padding: 0"></td><td></td></tr><tr style="height: 25px"><td>Temat:&nbsp;</td><td colspan="6"><input class="textFieldType1" style="width: 100%" type="text" name="subject" value="';  echo $_POST['subject'];  echo '"></td><td align="left" style="width: 11px"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0"></td></tr>';  if ($this->_tpl_vars['kingdomInfo']['is_emperor']):  echo '<tr style="height: 25px"><td>Wyslij jako:&nbsp;</td><td colspan="6"><select name="message_type" class="textFieldType1" style="width: 100%"><option selected value="';  echo @MESSAGE_STANDARD;  echo '">Zwyk³a wie¶æ<option value="';  echo @MESSAGE_INVITE;  echo '">Wie¶æ zapraszaj±ca do koalicji</select></td><td align="left" style="width: 11px"><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'textfield_type1_decor.gif" alt="" style="margin: 0; padding: 0"></td></tr>';  endif;  echo '';  else:  echo '';  echo '<tr><td>Zajête miejsce: ';  echo $this->_tpl_vars['proc'];  echo '%&nbsp;';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/template.quickhelp.tpl", 'smarty_include_vars' => array('helpfile' => 'messagebox','req' => 'rap_bar')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  elseif ($this->_tpl_vars['mode'] == @MBOX_MODE_SENT || $this->_tpl_vars['mode'] == @MBOX_MODE_RECEIVED):  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/template.quickhelp.tpl", 'smarty_include_vars' => array('helpfile' => 'messagebox','req' => 'msg_bar')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '';  endif;  echo '</td><td style="padding-left: 25px"><a style="color: #B0A392" href="';  echo $this->_tpl_vars['CFG']->adresSerwera;  echo 'messages/messagebox.php?mode=';  echo @MBOX_MODE_WRITE;  echo '" title="Napisz now± wiadomo¶æ">Nowa wiadomo¶æ</a><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'messagebox_ico_message.gif" alt=" " style="vertical-align: middle; margin-left: 7px"></td><td align="right">Zaznacz przeczytane</td><td style="width: 27px" align="right"><input type="checkbox" name="selector_read" onclick="select_read(this.form)" ';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_SENT):  echo 'disabled';  endif;  echo '></td></tr><tr><td><div style="width: 130px; height: 5px; border: 1px solid #947A5C; background-color: #235016; font-size: 5px" align="left"><div style="height: 5px; width: ';  echo $this->_tpl_vars['procg'];  echo '%; background-color: #8C2D10; font-size: 5px"></div></div></td><td style="padding-left: 25px"><a style="color: #B0A392" href="javascript:submit_remove()">Usuñ zaznaczone</a><img src="';  echo $this->_tpl_vars['image_dir'];  echo 'messagebox_ico_delete.gif" alt=" " style="vertical-align: middle; margin-left: 7px"></td><td align="right">Odwróæ zaznaczenie</td><td style="width: 27px;" align="right"><input type="checkbox" name="selector_inverse" onclick="select_inverse(this.form)"></td></tr>';  echo '';  endif;  echo '</table></td><td style="width: 2px"></td></tr></table>';  echo '</td></tr>';  if ($this->_tpl_vars['msg_str']):  echo '<tr><td style="border-top: 1px solid #715E46; background-color: #212121; color: #B0A392; font-size: 11px;"><p style="padding: 0; margin: 20px 20px; text-align: center">';  echo $this->_tpl_vars['msg_str'];  echo '</p></td></tr>';  endif;  echo '</table></td></tr><tr><td>';  echo '<table cellspacing="0" cellpadding="0" border="0" style="border-style: solid; border-width: 0px 1px 1px 1px; border-color: #715E46; width: 100%;">';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_WRITE):  echo '';  echo '<tr><td><textarea name="message_content" style="width: 100%; border: 0 solid; height: 350px; background-color: #212121; color: #B0A392; font-size: 12px; padding: 20px 15px">';  echo $_POST['message_content'];  echo '</textarea></td></tr>';  echo '';  else:  echo '';  echo '';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_RECEIVED && $this->_tpl_vars['list_received']):  echo '<tr><td>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.received.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  elseif ($this->_tpl_vars['mode'] == @MBOX_MODE_RECEIVED):  echo '<tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px"><td align="center" valign="middle"><b>Nie masz ¿adnych odebranych wiadomo¶ci.</b></td></tr>';  endif;  echo '';  echo '';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_SENT && $this->_tpl_vars['list_sent']):  echo '<tr><td>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.sent.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  elseif ($this->_tpl_vars['mode'] == @MBOX_MODE_SENT):  echo '<tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px"><td align="center" valign="middle"><b>Nie masz ¿adnych wys³anych wiadomo¶ci.</b></td></tr>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT && $this->_tpl_vars['list_raport']):  echo '<tr><td>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.raport.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  elseif ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT):  echo '<tr style="height: 150px; background-color: #212121; color: #B0A392; font-size: 11px"><td align="center" valign="middle"><b>Nie masz ¿adnych raportów.</b></td></tr>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT):  echo '<tr style="height: 25px;"><td><table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 100%; border-top: 1px solid #715E46; border-bottom: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 11px; padding: 0px 10px"><tr><td>Raporty tymczasowe ';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/template.quickhelp.tpl", 'smarty_include_vars' => array('helpfile' => 'messagebox','req' => 'rap_tmp')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table></td></tr>';  endif;  echo '';  if ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT && $this->_tpl_vars['list_tempraport']):  echo '<tr><td>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.tempraport.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr>';  elseif ($this->_tpl_vars['mode'] == @MBOX_MODE_RAPORT):  echo '<tr style="height: 150px; background-color: #212121; color: #B0A392; font-size: 11px"><td align="center" valign="middle"><b>Nie masz ¿adnych raportów tymczasowych.</b></td></tr>';  endif;  echo '';  endif;  echo '<tr><td align="left" valign="middle"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 20px; border-top: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 10px; padding: 0px 10px"><tr><td style="color: #625b51"><span style="color: #7f9792"><b>*</b></span> Wie¶æ nieprzeczytana&nbsp;|&nbsp;Kliknij temat aby przeczytaæ&nbsp;|&nbsp;Kliknij nazwê aby odpisaæ</td></tr></table></td></tr></table>';  echo '</td></tr>';  echo '</table></form></td></tr></table>'; ?>
