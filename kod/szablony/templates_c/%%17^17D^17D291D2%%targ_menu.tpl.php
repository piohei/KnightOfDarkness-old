<?php /* Smarty version 2.6.11, created on 2010-07-21 15:19:07
         compiled from targ_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'targ_menu.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => 'conf','section' => 'COLORS'), $this);?>



<?php ob_start(); ?>
        onMouseOver="this.style.backgroundColor='<?php echo $this->_config[0]['vars']['submenu_activate_color']; ?>
'; this.style.cursor = 'hand'"
        onMouseOut="this.style.backgroundColor='#000000'; this.style.cursor = 'default';"
<?php $this->_smarty_vars['capture']['jscript'] = ob_get_contents(); ob_end_clean(); ?>


<?php echo '<table width="519" height="18" cellpadding="0" cellspacing="0"><tr><td colspan="5" height="5" style="border: 0px solid #4E4639; border-right-width: 1px; font-size: 9px;">&nbsp;</td></tr><tr><td width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=1\'"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=1" class="submenuItem">¿elazo</a></td><td width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=2\'"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=2" class="submenuItem">bronie</a></td><td width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=3\'"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=3" class="submenuItem">narzêdzia</a></td><td width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=4\'"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=4" class="submenuItem">jedzenie</a></td><td width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'kupno_ziemi/kupuj.php\'"><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'kupno_ziemi/kupuj.php" class="submenuItem">ziemia</a></td></tr><tr><td colspan="5" align="center" width="120" class="submenuItem" ';  echo $this->_smarty_vars['capture']['jscript'];  echo ' onClick="window.location.href=\'';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=5\'"><center><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'targ/targ.php?tryb=5" class="submenuItem">twoje aukcje</a></center></td></tr></table>'; ?>
