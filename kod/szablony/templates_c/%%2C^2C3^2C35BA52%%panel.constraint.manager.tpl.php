<?php /* Smarty version 2.6.11, created on 2010-07-22 17:46:52
         compiled from panel.constraint.manager.tpl */ ?>
<table cellspacing="0" cellpadding="0" border="0" style="padding: 10px 20px; width: 100%">
<tr>
    <td>

        <form action="index.php?mode=<?php echo @MODE_CONSTRAINT_MANAGER; ?>
&amp;action=search" method="POST">
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td colspan="3">Szukaj gracza (% - dowolny ci±g znaków, _ - dowolny znak)</td>
    </tr>
    <tr>
        <td style="width: 120px; padding-left: 10px">Nazwa&nbsp;u¿ytkownika:&nbsp;</td>
        <td style="width: 150px"><input type="text" name="keyword" value="" style="width: 140px"></td>
        <td><input type="submit" name="search" value="OK"></td>
    </tr>
    </table>
    </form>
    
    </td>
<tr>

<tr style="height: 30px"><td>&nbsp;</td></tr>

<?php if ($this->_tpl_vars['user_list']): ?>
<tr>
    <td>Znaleziono: <b><?php echo $this->_tpl_vars['record_count']; ?>
</b> rekordów</td>
</tr>
<?php endif; ?>
<tr>
    <td>

        <?php if ($this->_tpl_vars['user_list']): ?>
    <table celpadding="0" cellspacing="0" border="0" class="WindowFrame" style="width: 100%">
    <tr class="Header">
        <td>Nazwa u¿ytkownika</td>
        <td>Data rejestracji</td>
        <td>Data aktywno¶ci</td>
        <td align="right">IP</td>
        <td align="right">Aktywne</td>
    </tr>
    <tr>
        <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
        <tr style="cursor: pointer" onmouseover="this.style.backgroundColor='#E6EDFF'" onmouseout="this.style.backgroundColor=''" onclick="openWindow('index.php?mode=<?php echo @MODE_CONSTRAINT_MANAGER; ?>
&amp;user=<?php echo $this->_tpl_vars['user']['login']; ?>
')">
            <td style="padding-left: 10px"><i><?php echo $this->_tpl_vars['user']['login']; ?>
</i></td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['user']['data_zalozenia']; ?>
&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['user']['ostatni_log']; ?>
&nbsp;&nbsp;&nbsp;</td>
            <td align="right"><?php echo $this->_tpl_vars['user']['ip']; ?>
</td>
            <td style="padding-right: 10px" align="right">
                <?php if ($this->_tpl_vars['user']['czy_aktywowane']): ?>
                    <span class="GreenText">TAK</span>
                <?php else: ?>
                    <span class="RedText">NIE</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tr>
    </table>
    <?php endif; ?>
    
    </td>
</tr>
</table>