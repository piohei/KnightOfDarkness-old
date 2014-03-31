<?php /* Smarty version 2.6.11, created on 2010-07-22 17:50:07
         compiled from spis_specjalnych.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'popup_init', 'spis_specjalnych.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_popup_init(array('src' => ($this->_tpl_vars['www_root'])."/js/overlib/overlib.js"), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table  border="0" width="100%" bgcolor="#212223">
<tr>
  <td>
  <table>
    <?php $_from = $this->_tpl_vars['budynki']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['rozbudowa']):
?>
    <tr>
        <?php $_from = $this->_tpl_vars['rozbudowa']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['budynek']):
?>
        <?php if ($this->_tpl_vars['budynek']['poprzedni'] != 0): ?>
          <td valing="middle">
            <img src="<?php echo $this->_tpl_vars['image_dir']; ?>
arrow.gif">
          </td>
        <?php endif; ?>
        <td>
          <img src="<?php echo $this->_tpl_vars['image_dir']; ?>
budynki/<?php echo $this->_tpl_vars['budynek']['img']; ?>
"  title="<?php echo $this->_tpl_vars['budynek']['opis']; ?>
" />
          <div class="podpis">
	    <?php echo $this->_tpl_vars['budynek']['nazwa']; ?>
<br/>
            cena:<?php echo $this->_tpl_vars['budynek']['koszt']; ?>

          </div>
        </td>
        <?php endforeach; endif; unset($_from); ?>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
<center>
 <a href="<?php echo $this->_tpl_vars['root_dir']; ?>
budowa/spis.php?strona=<?php echo $this->_tpl_vars['page']-1; ?>
"><</a> 
 strona 
<a href="<?php echo $this->_tpl_vars['root_dir']; ?>
budowa/spis.php?strona=<?php echo $this->_tpl_vars['page']+1; ?>
">></a>
</center>
  </td>
</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>