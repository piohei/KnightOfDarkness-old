<?php /* Smarty version 2.6.11, created on 2010-11-05 18:03:42
         compiled from main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'main.tpl', 34, false),array('modifier', 'default', 'main.tpl', 137, false),)), $this); ?>
	


<?php echo smarty_function_config_load(array('file' => 'conf','section' => 'HEAD'), $this);?>


<?php echo $this->_config[0]['vars']['dtd']; ?>

<html>
<head>
<strip>
<?php echo $this->_config[0]['vars']['meta_standard']; ?>

<?php echo $this->_config[0]['vars']['link_css_mainstyle']; ?>

<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style_dir']; ?>
main_style.css"/>
<?php if ($this->_tpl_vars['left_panel'] == "" || $this->_tpl_vars['left_panel'] == "admin/admin_left_panel.tpl"): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style_dir']; ?>
default_left_panel.css">
<?php endif; ?>

<?php if ($this->_tpl_vars['submenu'] != ""): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['style_dir']; ?>
default_submenu.css">
<?php endif; ?>

<script type="text/javascript">
var b1_active = new Image(); b1_active.src = "<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button1_activated.jpg";
var b2_active = new Image(); b2_active.src = "<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button2_activated.jpg";
var b3_active = new Image(); b3_active.src = "<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button3_activated.jpg";
<?php echo '
function swapImg(srcImg, dscImg){
    if(dscImg == "restore")
        srcImg.src = mem;
    else{
        mem = srcImg.src;
        srcImg.src = dscImg.src;
    }
}
'; ?>

</script>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['javascript_dir']; ?>
windows.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['javascript_dir']; ?>
common.js"></script>


<title>Knight of Darkness</title>
</head>
<body>

<center>
<table>
<tr>
<td valign="top">



</td>
<td valign="top" align="left">

<table border="0" cellspacing="0" cellpadding="0" style="width: 755px" >
  <tr>
    <td style="height: 86px" colspan="3">



      <table border="0" style="width: 100%; height: 86px" cellspacing="0" cellpadding="0">
        <tr>
          <td style="width: 107px" rowspan="5"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_part01.jpg" alt="KoD header"></td>
          <td style="width: 297px" rowspan="5"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_part02.jpg" alt="KoD header"></td>
          <td style="width: 280px" rowspan="5"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_part03.jpg" alt="KoD header"></td>
          <td style="width: 71px; height: 8px"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_part04.jpg" alt="KoD header"></td>
        </tr>


                <tr>
          <td style="width: 71px">
			<a href="<?php echo $this->_tpl_vars['root_dir']; ?>
profil/profile.php"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button1.jpg" onMouseOver="swapImg(this,b1_active)" onMouseOut="swapImg(this,'restore')" alt="Profil" border="0"></a>
           </td>
        </tr>
        <tr>
          <td style="width: 71px">
			<a href="<?php echo $this->_tpl_vars['root_dir']; ?>
wyloguj.php"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button2.jpg" onMouseOver="swapImg(this,b2_active)" onMouseOut="swapImg(this,'restore')" alt="Wyloguj" border="0"></a>
            </td>
        </tr>
        <tr>
          <td style="width: 71px">
		    <a href="<?php echo $this->_tpl_vars['root_dir']; ?>
pomoc/pomoc.php"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_button3.jpg" onMouseOver="swapImg(this,b3_active)" onMouseOut="swapImg(this,'restore')" alt="Pomoc" border="0"></a>
          </td>
        </tr>
        

        <tr>
          <td style="width: 71px; height: 9px"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_header_part05.jpg" alt=""></td>
        </tr>
      </table>



    </td>
  </tr>



    <tr>
    <td style="width: 30px; height: 20px"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_decor_left.jpg" alt=""></td>
    <td  style="width: 695px; height: 20px; background: url(<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_bg.jpg) repeat-x">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['main_menu'])) ? $this->_run_mod_handler('default', true, $_tmp, "main_menu.tpl") : smarty_modifier_default($_tmp, "main_menu.tpl")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </td>
    <td style="width: 30px; height: 20px"><img src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_decor_right.jpg" alt=""></td>
    </tr>


  <tr>
    <td colspan="3">
      <table border="0" width="755" cellspacing="0" cellpadding="0">
        <tr>
        <?php if ($this->_tpl_vars['main_panel_expand'] != 'TRUE'): ?>
                        <td style="width: 231; vertical-align: top">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['left_panel'])) ? $this->_run_mod_handler('default', true, $_tmp, "left_panel.tpl") : smarty_modifier_default($_tmp, "left_panel.tpl")), 'smarty_include_vars' => array('left_panel_width' => '231px')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
                        <?php $this->assign('main_panel_width', '524'); ?>
        <?php else: ?>
            <?php $this->assign('main_panel_width', '755'); ?>
        <?php endif; ?>
            <td style="width: <?php echo $this->_tpl_vars['main_panel_width']; ?>
px; vertical-align: top">


<?php if ($this->_tpl_vars['turns_counter'] != 'OFF'): ?>
             <table border="0" width="<?php echo $this->_tpl_vars['main_panel_width']; ?>
" cellpadding="0" cellspacing="0">
                 <tr>

                    <td height="20" width="<?php echo $this->_tpl_vars['main_panel_width']; ?>
" >
                      <table cellspacing="0" cellpadding="0" border="0" background="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_bg.jpg">
                        <tr>
                          <td  width="30"><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
menu-left-kp.jpg"></td>
                          <td width="100" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
walka/spisgraczy.php">spis ksiêstw</a></td>
                          <td width="11"><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_itemseparator.jpg"></td>
                          <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
ranking/ranking.php">rankingi</a></td>
                          <td width="11"><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_itemseparator.jpg"></td>
                          <td width="89" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
ksiestwo/ksiestwo.php">ksiêstwo</a></td>
                          <td width="11"><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
top_menu_itemseparator.jpg"></td>
                          <td width="75" align="center"><a class="mainMenuItem" href="<?php echo $this->_tpl_vars['root_dir']; ?>
forum">forum</a></td>
                          <td  width="30"><img border="0" src="<?php echo $this->_tpl_vars['image_dir']; ?>
menu-right-kp.jpg"></td>
                        </tr>
                      </table>
                    </td>
                     <td height="18" width="70" align="center" style="border: 0 solid #4E4639; border-left-width: 1px; border-bottom-width: 1px">
                      <a href="<?php echo $this->_tpl_vars['root_dir']; ?>
tura/tura.php" class="mainMenuItem" style="color: #C8A27C">tura</a>
                     </td>

                     <td height="18" width="30" align="center" style="color: #979779; background-color: #251F17; border: 0 solid #4E4639; border-right-width: 1px; border-bottom-width: 1px">
                         <?php if ($this->_tpl_vars['turns_counter'] == ""): ?>
                             <?php $this->assign('turns_counter', $this->_tpl_vars['kingdomInfo']['tury']); ?>
                         <?php endif; ?>
                         <?php echo ((is_array($_tmp=@$this->_tpl_vars['turns_counter'])) ? $this->_run_mod_handler('default', true, $_tmp, "<span style='color: red'>\$turns_counter&nbsp;not&nbsp;set</span>") : smarty_modifier_default($_tmp, "<span style='color: red'>\$turns_counter&nbsp;not&nbsp;set</span>")); ?>

                     </td>
                 </tr>
             </table>
<?php endif; ?>


<?php if ($this->_tpl_vars['submenu'] != ""): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['submenu'], 'smarty_include_vars' => array('main_width' => $this->_tpl_vars['main_panel_width'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>


          <table border="0" width="<?php echo $this->_tpl_vars['main_panel_width']; ?>
" cellspacing="0" cellpadding="0">
            <tr>
              <td> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['main_panel'])) ? $this->_run_mod_handler('default', true, $_tmp, "blank.tpl") : smarty_modifier_default($_tmp, "blank.tpl")), 'smarty_include_vars' => array('main_width' => $this->_tpl_vars['main_panel_width'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
            </tr>
          </table>


          </td>
        </tr>
      </table>
    </td>
  </tr>
  <?php if ($this->_tpl_vars['admin_switch'] == 'ON'): ?>
  <tr>
    <td colspan="3" align="center">
        <a href="<?php echo $this->_tpl_vars['root_dir']; ?>
panel/index.php">Panel administracyjny</a>
    </td>
  </tr>
  <?php endif; ?>
 
</table>
</td>
</table>
</center>
</body>
</html>
</strip>