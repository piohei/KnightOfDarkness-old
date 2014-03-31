<?php /* Smarty version 2.6.11, created on 2010-07-21 09:33:47
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 34, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta http-equiv="Content-Language" content="pl">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>KoD Panel</title>

<?php echo '
<script type="text/javascript">
    function openWindow( url ){
        options = "width=780,height=400,location=no,toolbar=no"+
            "status=no,menubar=no,resizable=yes,scrollbars=yes";
        newWindow = window.open(url, "Panel Administracyjny", options );
    }
</script>
'; ?>

</head>

<body>

<table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%">
<tr>
    <td class="LeftMenu" align="left" valign="top">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main.menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </td>
    <td class="MainWindow" align="left" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
        <tr>
            <td style="background-color: #e2e9fb; height: 30px; text-align: right; padding-right: 50px; font-weight: bold; font-size: 17px; color: #c2c2cc">PANEL ADMINISTRACYJNY</td>
        </tr>
        <tr>
            <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['panel'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default.tpl') : smarty_modifier_default($_tmp, 'default.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        </tr>
        </table>
    </td>
</tr>
</table>

</body>

</html>