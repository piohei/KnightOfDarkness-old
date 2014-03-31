<?php /* Smarty version 2.6.11, created on 2010-10-12 20:43:25
         compiled from atak/lista.tpl */ ?>
<?php if ($this->_tpl_vars['mode'] != ATTACK_KOALICYJNY_DETAIL): ?>
<table cellspacing="0" cellpadding="0" style="width: 100%; height:100%; color: #B0A392; font-size: 11px;">
  <tr style="background-color:#2D210E; height:25px ;" align="center">
    <td style="border-bottom:1px #715E46 solid">Cel ataku</td>
    <td style="border-bottom:1px #715E46 solid">£ucznicy</td>
    <td style="border-bottom:1px #715E46 solid">Piechota</td>
    <td style="border-bottom:1px #715E46 solid">Husaria</td>
	<td style="border-bottom:1px #715E46 solid">Szpiedzy</td>
    <td style="border-bottom:1px #715E46 solid">Tury</td>
    <td style="border-bottom:1px #715E46 solid">Wycofaj</td>
    <td style="border-bottom:1px #715E46 solid">Szczegó³y</td>
  </tr>
  <?php $_from = $this->_tpl_vars['attacks_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['single_attack']):
?>
  <tr align="center"  onmouseover="this.style.backgroundColor='#544224'" cellpadding="3" onmouseout="this.style.backgroundColor=''" style="border-top: 1px solid #715E46;">
    <?php if ($this->_tpl_vars['single_attack']['tryb'] == 6): ?>
    	<?php if ($this->_tpl_vars['single_attack']['ID_wojny'] == 1): ?>
	     <td style="border-bottom:1px #715E46 solid">Atak koalicyjny na <?php echo $this->_tpl_vars['single_attack']['kogo']; ?>
</td>
    	<?php else: ?>
    	 <td style="border-bottom:1px #715E46 solid">Atak koalicyjny</td>
    	<?php endif; ?>
    <?php else: ?>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['kogo']; ?>
</td>
    <?php endif; ?>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['lucznicy']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['piechota']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['husaria']; ?>
</td>
		<td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['szpiedzy']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['tury_do_konca']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><a href="?mode=1&id=<?php echo $this->_tpl_vars['single_attack']['id']; ?>
">Wycofaj</a></td>
    <?php if ($this->_tpl_vars['single_attack']['tryb'] == 6 && $this->_tpl_vars['single_attack']['ID_wojny'] == 1): ?>
     <td style="border-bottom:1px #715E46 solid"><a href="?mode=3&id=<?php echo $this->_tpl_vars['single_attack']['id']; ?>
">szczegó³y</a></td>
    <?php else: ?>
    <td style="border-bottom:1px #715E46 solid">
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 1): ?> gospodarka <?php endif; ?>
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 2): ?> ziemia <?php endif; ?>
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 3): ?> szpiegowanie <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 4): ?> podpalanie <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 5): ?> budynek koñcowy <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 6): ?> koalicyjny <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 7): ?> kradzie¿ <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 8): ?> skrytobójstwo <?php endif; ?>	
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 9): ?> oblê¿enie <?php endif; ?>
    	<?php if ($this->_tpl_vars['single_attack']['tryb'] == 10): ?> propaganda <?php endif; ?>	
    </td>
    <?php endif; ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
		<tr style="height:100%;border-top: 1px solid #715E46" align="center"><td colspan="6">&nbsp;<b><?php echo $this->_tpl_vars['TEKST']; ?>
</b></td></tr>
</table>

<?php else: ?>

<table cellspacing="0" cellpadding="0" style="width: 100%; height:100%; color: #B0A392; font-size: 11px;">
  <tr style="background-color:#2D210E; height:25px ;" align="center">
    <td style="border-bottom:1px #715E46 solid">Kto atakuje</td>
    <td style="border-bottom:1px #715E46 solid">£ucznicy</td>
    <td style="border-bottom:1px #715E46 solid">Piechota</td>
    <td style="border-bottom:1px #715E46 solid">Husaria</td>
	<td style="border-bottom:1px #715E46 solid">Szpiedzy</td>
    <td style="border-bottom:1px #715E46 solid">Tury</td>
    <td style="border-bottom:1px #715E46 solid">Wycofaj</td>
    <td style="border-bottom:1px #715E46 solid">Szczegó³y</td>
  </tr>
  <?php $_from = $this->_tpl_vars['attacks_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['single_attack']):
?>
  <tr align="center"  onmouseover="this.style.backgroundColor='#544224'" cellpadding="3" onmouseout="this.style.backgroundColor=''" style="border-top: 1px solid #715E46;">
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['kto']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['lucznicy']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['piechota']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['husaria']; ?>
</td>
	<td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['szpiedzy']; ?>
</td>
    <td style="border-bottom:1px #715E46 solid"><?php echo $this->_tpl_vars['single_attack']['tury_do_konca']; ?>
</td>
    <?php if ($this->_tpl_vars['single_attack']['kto'] == $this->_tpl_vars['kingdomInfo']['nazwa']): ?> 
    	<td style="border-bottom:1px #715E46 solid"><a href="?mode=1&id=<?php echo $this->_tpl_vars['single_attack']['id']; ?>
">Wycofaj</a></td>
    <?php else: ?>
    	<td style="border-bottom:1px #715E46 solid">&nbsp;</td>
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['single_attack']['tryb'] == 6 && $this->_tpl_vars['single_attack']['ID_wojny'] == 1): ?>
    	<td style="border-bottom:1px #715E46 solid"><a href="?mode=3&id=<?php echo $this->_tpl_vars['single_attack']['id']; ?>
">szczegó³y</a></td>
    <?php else: ?>
    	<td style="border-bottom:1px #715E46 solid">&nbsp;</td>
    <?php endif; ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
		<tr style="height:100%;border-top: 1px solid #715E46" align="center"><td colspan="6">&nbsp;<b><?php echo $this->_tpl_vars['TEKST']; ?>
</b></td></tr>
</table>
<?php endif; ?>