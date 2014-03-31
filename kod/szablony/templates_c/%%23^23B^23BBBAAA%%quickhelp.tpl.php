<?php /* Smarty version 2.6.11, created on 2010-10-12 08:56:31
         compiled from help/quickhelp.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Pomoc - <?php echo $this->_tpl_vars['window_title']; ?>
</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style_dir']; ?>
main_style.css">
    <?php echo '
    <style type="text/css">
        body, table{
            background-color: #212223;
            font: 11px Verdana, Geneva, Arial, Helvetica, sans-serif;
            color: #A3A3A1;
        }
        .example{
            background-color: #2B2C2D;
            margin-left: 25px;
            border: 1px solid #000000;
            padding: 8px;
            width: 80%
        }
        p{
            text-indent: 30px;
            margin-top: 0px;
            margin-bottom: 20px;
        }
    </style>
    '; ?>

</head>
<body>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['help_content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>