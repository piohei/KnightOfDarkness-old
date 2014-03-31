<?php /* Smarty version 2.6.11, created on 2010-07-22 09:03:17
         compiled from attack.tpl */ ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['javascript_dir']; ?>
messagebox.js"></script>
    <script type="text/javascript">
        active_bg = new Image();
        inactive_bg = new Image();

        active_bg.src = '<?php echo $this->_tpl_vars['image_dir']; ?>
messagebox_bookmark_bg.gif';
        inactive_bg.src = '<?php echo $this->_tpl_vars['image_dir']; ?>
messagebox_bookmark_bgd.gif';
    </script>
<?php echo '<table cellspacing="0" cellpadding="0" border="0" style="width: 100%; margin-left: 8px; margin-top: 15px">';  echo '<tr><td> ';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "attack.tabs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo ' </td></tr>';  echo '';  echo '<tr><td style="border-top: 1px solid #715E46;">';  echo '<table cellspacing="0" cellpadding="0" border="0" style="border-style: solid; border-width: 0px 1px 1px 1px; border-color: #715E46; width: 100%;"><tr style="height: 300px; background-color: #212121; color: #B0A392; font-size: 11px"><td align="center" valign="middle">';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['attack_tab'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr><tr><td align="left" valign="middle"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%; height: 20px; border-top: 1px solid #715E46; background-color: #2D210E; color: #B0A392; font-size: 10px; padding: 0px 10px"><tr><td style="color: #625b51">Je¿eli masz jakie¶ w±tpliwo¶ci to kliknij tutaj: ';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help/template.quickhelp.tpl", 'smarty_include_vars' => array('helpfile' => 'attack')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</td></tr></table></td></tr></table>';  echo '</td></tr>';  echo '</table>'; ?>
