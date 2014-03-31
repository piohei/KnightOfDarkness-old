<?php /* Smarty version 2.6.11, created on 2010-07-21 09:14:51
         compiled from main_menu.tpl */ ?>
<?php ob_start(); ?>
<td style="width: 11px"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_itemseparator.jpg" alt="|"></td>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('item_separator', ob_get_contents());ob_end_clean(); ?>


<table border="0" cellspacing="0" cellpadding="0" style="width: 695px">
    <tr>
        <td width="92" align="center" ><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
zalogowany.php">g³ówna</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="90" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
messages/messagebox.php">wiadomo¶ci</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
budowa/buduj.php">budynki</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="91" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
trening/trenuj.php">trenowanie</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
koalicja/koalicja.php">koalicja</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
targ/targ.php">targ</a></td>
        <?php echo $this->_tpl_vars['item_separator']; ?>

        <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
atak/">atak</a></td>
    </tr>
</table>