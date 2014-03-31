<?php /* Smarty version 2.6.11, created on 2010-07-22 17:47:07
         compiled from panel.constraint.manager.details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'panel.constraint.manager.details.tpl', 68, false),array('modifier', 'default', 'panel.constraint.manager.details.tpl', 168, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>KoD Panel</title>

<?php echo '
<script type="text/javascript">
    var changeValidityMem = Array();

    function changeValidity(checkbox){
        textIndex = checkbox.name;
        textIndex = textIndex.substring(textIndex.indexOf(\'[\')+1, textIndex.indexOf(\']\'));
        text = checkbox.form.elements[\'validity[\'+textIndex+\']\'];

        if(text){
            if(checkbox.checked){
                if(text.value != \'\' && text.value != \'bezterminowo\'){
                    changeValidityMem[textIndex] = text.value;
                }
                text.value = \'bezterminowo\';
                text.disabled = true;
            }else{
                text.value = (changeValidityMem[textIndex]) ? changeValidityMem[textIndex] : \'YYYY-MM-DD [hh:mm:ss]\';
                text.disabled = false;
            }
        }
    }
</script>
'; ?>


</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr>
    <td class="MainWindow" align="left" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
        <tr>
            <td style="background-color: #e2e9fb; height: 30px; text-align: right; padding-right: 50px; font-weight: bold; font-size: 17px; color: #c2c2cc"><?php echo $this->_tpl_vars['username']; ?>
</td>
        </tr>
        <tr>
            <td>


            <form action="index.php?mode=<?php echo @MODE_CONSTRAINT_MANAGER; ?>
&amp;user=<?php echo $this->_tpl_vars['username']; ?>
&amp;action=save" method="POST">
            <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; margin: 20px 20px">



            <tr class="rowStyle1">
                <td style="width: 300px">
                    Limit wiadomości w skrzynce (odebrane+wysłane)
                </td>
                <td align="right" style="width: 60px">
                    <input style="text-align: right; width: 50px" type="text" name="value[<?php echo @C_MESSAGEBOX_LIMIT; ?>
]" value="<?php echo $this->_tpl_vars['constraint'][@C_MESSAGEBOX_LIMIT]['value']; ?>
">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[<?php echo @C_MESSAGEBOX_LIMIT; ?>
]" value="1" <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MESSAGEBOX_LIMIT]['validity'] )): ?>checked<?php endif; ?> onchange="changeValidity(this)">
                    <input name="validity[<?php echo @C_MESSAGEBOX_LIMIT; ?>
]" style="text-align: right; width: 70%" onfocus="this.select()"
                        <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MESSAGEBOX_LIMIT]['validity'] )): ?>
                            value="bezterminowo" disabled="true"
                        <?php else: ?>
                            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['constraint'][@C_MESSAGEBOX_LIMIT]['validity'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
"
                        <?php endif; ?>
                    >
                </td>
            </tr>



            <tr>
                <td>
                    Limit raportów
                </td>
                <td align="right">
                    <input style="text-align: right; width: 50px" type="text" name="value[<?php echo @C_MESSAGEBOX_RAPORT; ?>
]" value="<?php echo $this->_tpl_vars['constraint'][@C_MESSAGEBOX_RAPORT]['value']; ?>
">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[<?php echo @C_MESSAGEBOX_RAPORT; ?>
]" value="1" <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MESSAGEBOX_RAPORT]['validity'] )): ?>checked<?php endif; ?> onchange="changeValidity(this)">
                    <input name="validity[<?php echo @C_MESSAGEBOX_RAPORT; ?>
]" style="text-align: right; width: 70%" onfocus="this.select()"
                        <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MESSAGEBOX_RAPORT]['validity'] )): ?>
                            value="bezterminowo" disabled="true"
                        <?php else: ?>
                            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['constraint'][@C_MESSAGEBOX_RAPORT]['validity'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
"
                        <?php endif; ?>
                    >
                </td>
            </tr>



            <tr class="rowStyle1">
                <td>
                    Logo królestwa
                </td>
                <td align="right">
                    <select name="value[<?php echo @C_LOGO_ENABLED; ?>
]" style="text-align: right; width: 50px">
                        <option value="0" <?php if ($this->_tpl_vars['constraint'][@C_LOGO_ENABLED]['value'] == 0): ?>selected<?php endif; ?>>OFF
                        <option value="1" <?php if ($this->_tpl_vars['constraint'][@C_LOGO_ENABLED]['value'] == 1): ?>selected<?php endif; ?>>ON
                    </select>
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[<?php echo @C_LOGO_ENABLED; ?>
]" value="1" <?php if (is_null ( $this->_tpl_vars['constraint'][@C_LOGO_ENABLED]['validity'] )): ?>checked<?php endif; ?> onchange="changeValidity(this)">
                    <input name="validity[<?php echo @C_LOGO_ENABLED; ?>
]" style="text-align: right; width: 70%" onfocus="this.select()"
                        <?php if (is_null ( $this->_tpl_vars['constraint'][@C_LOGO_ENABLED]['validity'] )): ?>
                            value="bezterminowo" disabled="true"
                        <?php else: ?>
                            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['constraint'][@C_LOGO_ENABLED]['validity'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
"
                        <?php endif; ?>
                    >
                </td>
            </tr>



            <tr>
                <td>
                    Statystyki targu
                </td>
                <td align="right">
                    <select name="value[<?php echo @C_MARKETSTAT_ENABLED; ?>
]" style="text-align: right; width: 50px">
                        <option value="0" <?php if ($this->_tpl_vars['constraint'][@C_MARKETSTAT_ENABLED]['value'] == 0): ?>selected<?php endif; ?>>OFF
                        <option value="1" <?php if ($this->_tpl_vars['constraint'][@C_MARKETSTAT_ENABLED]['value'] == 1): ?>selected<?php endif; ?>>ON
                    </select>
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[<?php echo @C_MARKETSTAT_ENABLED; ?>
]" value="1" <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MARKETSTAT_ENABLED]['validity'] )): ?>checked<?php endif; ?> onchange="changeValidity(this)">
                    <input name="validity[<?php echo @C_MARKETSTAT_ENABLED; ?>
]" style="text-align: right; width: 70%" onfocus="this.select()"
                        <?php if (is_null ( $this->_tpl_vars['constraint'][@C_MARKETSTAT_ENABLED]['validity'] )): ?>
                            value="bezterminowo" disabled="true"
                        <?php else: ?>
                            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['constraint'][@C_MARKETSTAT_ENABLED]['validity'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
"
                        <?php endif; ?>
                    >
                </td>
            </tr>



            <tr class="rowStyle1">
                <td>
                    Limit wpisów w księdze znajomych
                </td>
                <td align="right">
                    <input style="text-align: right; width: 50px" type="text" name="value[<?php echo @C_BOOK_LIMIT; ?>
]" value="<?php echo $this->_tpl_vars['constraint'][@C_BOOK_LIMIT]['value']; ?>
">
                </td>
                <td align="right">
                    <input type="checkbox" name="eternity_checkbox[<?php echo @C_BOOK_LIMIT; ?>
]" value="1" <?php if (is_null ( $this->_tpl_vars['constraint'][@C_BOOK_LIMIT]['validity'] )): ?>checked<?php endif; ?> onchange="changeValidity(this)">
                    <input name="validity[<?php echo @C_BOOK_LIMIT; ?>
]" style="text-align: right; width: 70%" onfocus="this.select()"
                        <?php if (is_null ( $this->_tpl_vars['constraint'][@C_BOOK_LIMIT]['validity'] )): ?>
                            value="bezterminowo" disabled="true"
                        <?php else: ?>
                            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['constraint'][@C_BOOK_LIMIT]['validity'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
"
                        <?php endif; ?>
                    >
                </td>
            </tr>



            <tr>
                <td >
                    <b><?php echo ((is_array($_tmp=@$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</b>
                </td>
                <td align="right" colspan="2">
                <input type="submit" name="save" value="Zapisz">
                </td>
            </tr>
            </table>
            </form>


            </td>
        </tr>
        </table>
    </td>
</tr>
</table>
</body>
</html>