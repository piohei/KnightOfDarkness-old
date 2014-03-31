<?php /* Smarty version 2.6.11, created on 2010-07-21 15:19:08
         compiled from targ.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'targ.tpl', 78, false),array('modifier', 'default', 'targ.tpl', 98, false),array('modifier', 'string_format', 'targ.tpl', 101, false),)), $this); ?>
<?php echo '<center>';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '<table width="100%" cellpadding="3" cellspacing="1"><tr><td class="header">Królestwo</td><td class="header">Cena (za jednostkê)</td><td class="header">Liczba towaru</td><td class="header">&nbsp;</td></tr>';  $_from = $this->_tpl_vars['spisTowaror']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
 echo '';  if ($this->_tpl_vars['key']%2 == 0):  echo '<tr class="row1">';  else:  echo '<tr class="row2">';  endif;  echo '<td ><a href="';  echo $this->_tpl_vars['root_dir'];  echo 'walka/infoGracza.php?name=';  echo $this->_tpl_vars['item']->wystawiajacy;  echo '">';  echo $this->_tpl_vars['item']->wystawiajacy;  echo '</a></td><td >';  echo $this->_tpl_vars['item']->cena;  echo '</td><td >';  echo $this->_tpl_vars['item']->ile;  echo '</td><td ><a href="kup.php?co=';  echo $this->_tpl_vars['id'];  echo '&od_kogo=';  echo $this->_tpl_vars['item']->wystawiajacy;  echo '&max=';  echo $this->_tpl_vars['item']->ile;  echo '&cena=';  echo $this->_tpl_vars['item']->cena;  echo '&token=';  echo $this->_tpl_vars['item']->token;  echo '&id=';  echo $this->_tpl_vars['item']->id;  echo '">Kup</a></td></tr>';  endforeach; endif; unset($_from);  echo '</table>';  echo '';  if ($this->_tpl_vars['marketstat_enabled']):  echo '<script type="text/javascript" src="';  echo $this->_tpl_vars['javascript_dir'];  echo 'dhtml.js"></script><script type="text/javascript">';  echo '
    <!--
    var value;
    function showValue(val){
        if(!value){
             value = new getObjectById("currentValue");
        }
        if(!value) return;
        value.reference.innerHTML = val;
    }

    function clearValue(){
        if(!value){
             value = new getObjectById("currentValue");
        }
        if(!value) return;

        value.reference.innerHTML = \'&nbsp;\';
    }
    //-->
    ';  echo '</script><table cellpadding="0" cellspacing="0" border="0" style="width: 100%"><tr><td colspan="2" align="center" class="header">Historia najlepszych ofert (od¶wie¿ana co 4 godziny)</td></tr><tr><td style="height: 28px; width: 1%; font-size: 9px; padding-top: 3px" valign="top">';  echo $this->_tpl_vars['stat']['metadata']['max'];  echo '</td><td rowspan="4" align="right" valign="bottom" style="background: url(';  echo $this->_tpl_vars['image_dir'];  echo 'marketplace.statgraph_bg.gif) bottom">';  $_from = $this->_tpl_vars['stat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['price']):
 echo '';  if ($this->_tpl_vars['key'] != 'metadata'):  echo '<img src="';  echo $this->_tpl_vars['image_dir'];  echo 'marketplace.statgraph.png" style="height: ';  echo smarty_function_math(array('equation' => "p/m*100",'p' => $this->_tpl_vars['price'],'m' => $this->_tpl_vars['stat']['metadata']['max'],'format' => "%d"), $this); echo 'px; width: 4px; margin-left: 1px;" width="3" height="';  echo smarty_function_math(array('equation' => "p/m*100",'p' => $this->_tpl_vars['price'],'m' => $this->_tpl_vars['stat']['metadata']['max'],'format' => "%d"), $this); echo '" title="';  echo $this->_tpl_vars['price'];  echo '" alt="';  echo $this->_tpl_vars['price'];  echo '" onmouseover="showValue(this.title)" onmouseout="clearValue()">';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</td></tr><tr>';  echo smarty_function_math(array('assign' => 'price_step','equation' => "max/4",'max' => $this->_tpl_vars['stat']['metadata']['max'],'format' => "%d"), $this); echo '<td style="height: 25px; font-size: 9px" valign="top">';  echo $this->_tpl_vars['price_step']*3;  echo '</tr></tr><tr><td style="height: 25px; font-size: 9px" valign="top">';  echo $this->_tpl_vars['price_step']*2;  echo '</tr></tr><tr><td style="height: 25px; font-size: 9px" valign="top">';  echo $this->_tpl_vars['price_step']*1;  echo '</tr></tr><tr><td colspan="2" align="right"><table cellpadding="0" cellspacing="0" border="0" style="background: url(';  echo $this->_tpl_vars['image_dir'];  echo 'marketplace.statgraph_bg.gif) repeat-x top; font-size: 9px; color: #8A8A88; margin-right: 5px; width: 100%"><tr><td style="width: 100px">odczytów: ';  echo ((is_array($_tmp=@$this->_tpl_vars['stat']['metadata']['count'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'));  echo '</td><td style="width: 100px">max: ';  echo ((is_array($_tmp=@$this->_tpl_vars['stat']['metadata']['max'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'));  echo '</td><td style="width: 100px">min: ';  echo ((is_array($_tmp=@$this->_tpl_vars['stat']['metadata']['min'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'));  echo '</td><td style="width: 100px">¶rednia: ';  echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['stat']['metadata']['avg'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d"));  echo '</td><td style="width: 100px; text-align: right"><div style="display: inline;" id="currentValue"></div></td></tr></table></td></tr></table>';  endif;  echo '';  echo '';  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '</center>'; ?>
