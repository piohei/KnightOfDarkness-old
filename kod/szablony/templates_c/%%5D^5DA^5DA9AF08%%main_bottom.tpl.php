<?php /* Smarty version 2.6.11, created on 2010-07-21 09:14:51
         compiled from main_bottom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'main_bottom.tpl', 10, false),)), $this); ?>
    <?php if ($this->_tpl_vars['profil']['pomoc'] == 'true'): ?>
<table width="100%" align="center" cellspacing="1" cellspadding="2">
  <tr >
    <td class="header">
      Pomoc podrêczna (mo¿esz j± wy³±czyæ w profilu)
    </td>
  </tr>
  <tr class="row1">
    <td>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['plikPomocy'])) ? $this->_run_mod_handler('default', true, $_tmp, "blank.tpl") : smarty_modifier_default($_tmp, "blank.tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </td>
  </tr>
</table>
<?php endif; ?>
    </td>
  </tr>
  <tr><td colspan="3">&nbsp;</td></tr>
</table>
