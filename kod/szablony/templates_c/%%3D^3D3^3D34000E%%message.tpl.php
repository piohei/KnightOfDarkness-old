<?php /* Smarty version 2.6.11, created on 2010-07-22 13:30:31
         compiled from message.tpl */ ?>
<?php if ($this->_tpl_vars['message']): ?>
<br>
<center>
<div align="center"  style="width:70%; border:2px green solid;color:green;font-size:11px;padding:4px">
  <b><?php echo $this->_tpl_vars['message']; ?>
</b>
</div>
</center>
<?php endif; ?>

<?php if ($this->_tpl_vars['error']): ?>
<br>
<center>
<div align="center"  style="width:70%; border:2px red solid;color:red;font-size:11px;padding:4px">
  <b><?php echo $this->_tpl_vars['error']; ?>
</b>
</div>
</center>
<?php endif; ?>