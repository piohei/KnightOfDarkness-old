<?php /* Smarty version 2.6.11, created on 2010-11-02 20:07:17
         compiled from sondy/nowa.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="sonda.php?tryb=dodaj" method="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2" >
<tr><td  class="header" >Nazwa parametru</td>
    <td  class="header" >Warto¶æ</td>
</tr>
<tr><td  class="row1" >Tryb</td>
    <td  class="row1" ><input type="text" value="<?php echo $this->_tpl_vars['tryb_ankiety']; ?>
" name="tryb" readonly="readonly">
                       </td>
</tr>
<tr><td  class="row1" >Pytanie</td>
    <td  class="row1" ><textarea name="pytanie"></textarea></td>
</tr>
<tr><td  class="row1" >Ile dni bêdzie wa¿na</td>
    <td  class="row1" ><input size="3" type="text" name="ileDni"></td>
</tr>
<?php $_from = $this->_tpl_vars['ileOpcji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr><td  class="row1" >Opcja <?php echo $this->_tpl_vars['key']+1; ?>
</td>
    <td  class="row1" ><input size="50" type="text" name="tab[<?php echo $this->_tpl_vars['key']; ?>
]"></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr><td  class="row1" colspan="2" align="center"><input type="submit" class="button" value="Zapisz">
                                  </td>
</tr>
</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>