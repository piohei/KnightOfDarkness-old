<?php /* Smarty version 2.6.11, created on 2010-07-25 05:50:33
         compiled from panel.multianalyser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'panel.multianalyser.tpl', 16, false),array('modifier', 'replace', 'panel.multianalyser.tpl', 16, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr><td>

<form action="index.php?mode=<?php echo @MODE_MULTI_ANALYSER; ?>
" method="POST">
<table cellpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
<tr class="Header">
  <td colspan="3">Analizator Multikont</td>
</tr>
<tr>
  <?php if ($this->_tpl_vars['logFileList']): ?>
    <td style="width: 50%" valign="top">
      Wybierz pliki <b>log</b> do analizy:<br>
      <select multiple name="logFileListToAnalyse[]" style="width: 100%; height: 150px">
      <?php unset($this->_sections['logFile']);
$this->_sections['logFile']['loop'] = is_array($_loop=$this->_tpl_vars['logFileList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['logFile']['name'] = 'logFile';
$this->_sections['logFile']['show'] = true;
$this->_sections['logFile']['max'] = $this->_sections['logFile']['loop'];
$this->_sections['logFile']['step'] = 1;
$this->_sections['logFile']['start'] = $this->_sections['logFile']['step'] > 0 ? 0 : $this->_sections['logFile']['loop']-1;
if ($this->_sections['logFile']['show']) {
    $this->_sections['logFile']['total'] = $this->_sections['logFile']['loop'];
    if ($this->_sections['logFile']['total'] == 0)
        $this->_sections['logFile']['show'] = false;
} else
    $this->_sections['logFile']['total'] = 0;
if ($this->_sections['logFile']['show']):

            for ($this->_sections['logFile']['index'] = $this->_sections['logFile']['start'], $this->_sections['logFile']['iteration'] = 1;
                 $this->_sections['logFile']['iteration'] <= $this->_sections['logFile']['total'];
                 $this->_sections['logFile']['index'] += $this->_sections['logFile']['step'], $this->_sections['logFile']['iteration']++):
$this->_sections['logFile']['rownum'] = $this->_sections['logFile']['iteration'];
$this->_sections['logFile']['index_prev'] = $this->_sections['logFile']['index'] - $this->_sections['logFile']['step'];
$this->_sections['logFile']['index_next'] = $this->_sections['logFile']['index'] + $this->_sections['logFile']['step'];
$this->_sections['logFile']['first']      = ($this->_sections['logFile']['iteration'] == 1);
$this->_sections['logFile']['last']       = ($this->_sections['logFile']['iteration'] == $this->_sections['logFile']['total']);
?>
        <option value="<?php echo $this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][2]; ?>
" title="<?php if ($this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][1]): ?> Kopia pliku wykonana: <?php echo $this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][1]; ?>
 <?php else: ?> Aktualny plik <?php endif; ?>" <?php if (in_array ( $this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][2] , $this->_tpl_vars['logFileListToAnalyse'] )): ?>selected<?php endif; ?>>
          <?php echo $this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][0]; ?>
  &nbsp;  &nbsp; <?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['logFileList'][$this->_sections['logFile']['index']][1])) ? $this->_run_mod_handler('default', true, $_tmp, 'aktualny') : smarty_modifier_default($_tmp, 'aktualny')))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', " &nbsp; ") : smarty_modifier_replace($_tmp, ' ', " &nbsp; ")); ?>

        </option>
      <?php endfor; endif; ?>
      </select>
    </td>
  <?php else: ?>
    <td style="width: 50%; height: 150px; color: #FF0000" valign="middle" align="center">
        <b>Brak plików log do analizy...</a>
    </td>
  <?php endif; ?>
  <td valign="top" style="width: 15px"><!-- spacer --></td>
  <td valign="top">opcje</td>
</tr>
<tr class="Foot">
  <td colspan="3">
    <input type="submit" name="analyse" value="GO!">
  </td>
</tr>
<?php if ($this->_tpl_vars['multi']): ?>
<tr>
  <td colspan="3">
    <?php $_from = $this->_tpl_vars['multi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['nodes']):
?>
        <hr>
        <?php $_from = $this->_tpl_vars['nodes']->getNode(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user'] => $this->_tpl_vars['targetUsers']):
?>
        <br> <b><?php echo $this->_tpl_vars['user']; ?>
</b> Logowa³ siê te¿ na : 
            <?php $_from = $this->_tpl_vars['targetUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TargetName'] => $this->_tpl_vars['none']):
?>
            <?php echo $this->_tpl_vars['TargetName']; ?>
(<?php echo $this->_tpl_vars['none']; ?>
)| 
                    
            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
  </td>
</tr>
<?php endif; ?>
</table>
</form>

</td></tr>
</table>