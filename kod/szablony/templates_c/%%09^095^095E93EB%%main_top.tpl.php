<?php /* Smarty version 2.6.11, created on 2010-07-21 09:14:51
         compiled from main_top.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'main_top.tpl', 4, false),)), $this); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style_dir']; ?>
krzysiek.css">
<br>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['reklama'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

<br>
<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="main_table">
  <tr height="20">
    <td he><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
table_decor_right_1.jpg"></td>
    <td width="300px" class="title" align="center"><?php echo $this->_tpl_vars['tytul']; ?>
</td>
    <td align="right" ><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
table_decor_left_1.jpg"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="black">