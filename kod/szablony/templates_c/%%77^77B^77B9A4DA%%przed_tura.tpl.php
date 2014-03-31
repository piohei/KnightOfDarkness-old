<?php /* Smarty version 2.6.11, created on 2010-07-22 09:02:08
         compiled from przed_tura.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'przed_tura.tpl', 3, false),array('modifier', 'nice_number', 'przed_tura.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="tura.php" method='post'>
  <?php echo ((is_array($_tmp=@$this->_tpl_vars['bledyTura'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

  <table width="100%" border="0" cellspacing="1" cellpadding="2">
    <tr >
      <td  class="header" colspan="2">
        Przygotowania do tury
      </td>
      <td class="header" >
        Nowa tura
      </td>
    </tr>
    <tr class="row1">
      <td>
        Punkty budowy
      </td>
      <td >
        <?php if ($this->_tpl_vars['wolneMiejsceWSchowkuBudowlanym'] > 0): ?>
        <font color="#00ff66">
        	<?php if ($this->_tpl_vars['wolneMiejsceWSchowkuBudowlanym'] > 0): ?>
        		W schowku budowlanym masz zgormadzone <?php echo ((is_array($_tmp=$this->_tpl_vars['kingdomInfo']['co_buduje'])) ? $this->_run_mod_handler('nice_number', true, $_tmp) : smarty_modifier_nice_number($_tmp)); ?>
 punktów budowy i masz jeszcze miejsce na <?php echo ((is_array($_tmp=$this->_tpl_vars['wolneMiejsceWSchowkuBudowlanym'])) ? $this->_run_mod_handler('nice_number', true, $_tmp) : smarty_modifier_nice_number($_tmp)); ?>
 punktów budowy. 
        	<?php else: ?>
          		Wykorzystano wszystkie punkty budowy
            <?php endif; ?>
        </font>
        <?php else: ?>
        <font color="red">
        	<?php if ($this->_tpl_vars['pojemnoscSchowkaBudowlanego'] > 0): ?>
        		Nie starczy Ci miejsca w schowku na nowe punkty budowy. Nadmiarowe punkty budowy przepadn± w nowej turze.
        	<?php else: ?>
		        Niewykorzystane punkty budowy przy nowej turze przepadn±
            <?php endif; ?>
        </font>
        <?php endif; ?>
      </td>
        <td align="center" rowspan="4" width="150">
    
    <INPUT TYPE='hidden' NAME='nowaTura' VALUE="<?php echo $this->_tpl_vars['kingdomInfo']['tury']; ?>
">
    <input  type='image' src="<?php echo $this->_tpl_vars['image_dir']; ?>
klepsydra.gif"  value='Tura' alt="Nowa tura">
  </td>
      </tr>
        <tr class="row2">
          <td >
            Wspó³czynnik produkcji dla kowali (ile % produkcji to broñ)
          </td>
          <td >
            <input type="text" size="3" class="textfield" name="wsp_prod" value="<?php echo $this->_tpl_vars['kingdomInfo']['wsp_prod']; ?>
">
            % 
          </td>
        </tr>
        <tr class="row1">
          <td >
            Podatek (0-100%)
          </td>
          <td >
            <input type="text" size="3" class="textfield" name="podatek" value="<?php echo $this->_tpl_vars['kingdomInfo']['podatek']; ?>
">
            % 
          </td>
        </tr>
        <tr class="row2">
          <td >
            Bonusy
          </td>
          <td >
        <?php if ($this->_tpl_vars['smallKingdomBonus'] != 0): ?>
	        <font color="#00ee66">
          		Panie Twoje ksiêstwo jest ma³e przez co praca jest lepiej zorganizowana i wydajniesza.Dostajesz bonus spcjalnego BS z bonusem do produkcji <?php echo $this->_tpl_vars['smallKingdomBonus']; ?>
%
          	</font>
        <?php else: ?>
        		Panie nie mam Ci nic do obwieszczenia.
        <?php endif; ?>
          </td>
        </tr>
</table>
</form>
<br>
<br>
<br>
<center>
	<a href="tura.php?raport_z_ostatniej_tury=1">podgl±d raportu z ostatniej tury</a>
</center>
<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>