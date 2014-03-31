<?php /* Smarty version 2.6.11, created on 2010-10-20 09:24:49
         compiled from help/koalicja.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table>
    <tr class="row1">
        <td>
          Koalicja jest to formalny sojusz pomiêdzy graczami. <br>W ka¿dej koalicji jest cesarz 
          który ma mo¿liwo¶æ zapraszania nowych cz³onków oraz usuwania ju¿
          przyjêtych.<br>Aby koalicja spe³nia³a swoj± rolê wprowadzono ograniczenie
          na liczbê cz³onków do 15.
          <br>
          Je¶li posiadasz wybudowane rynki i wytrenowanych tragarzy to istnieje mo¿liwo¶æ wymiany towarów pomiêdzy królestwami z koalicji. Ka¿dy tragarz posiada <?php echo $this->_tpl_vars['porter']['load_scores']; ?>
 punktów ³adunkowych, a op³ata za jego pracê wynosi <?php echo $this->_tpl_vars['porter']['cost']; ?>
 sztuk z³ota. Poni¿ej przedstawiono liczbê punktów ³adunkowych zajmowanych przez jedn± jednostê przenoszonego towaru:<br><br>
          <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td style="width: 150px">Jedzenie</td><td><?php echo $this->_tpl_vars['porter']['food_scores']; ?>
 ptk.</td>
          <tr>
          <tr>
            <td>Narzêdzia</td><td><?php echo $this->_tpl_vars['porter']['tool_scores']; ?>
 ptk.</td>
          <tr>
          <tr>
            <td>¯elazo</td><td><?php echo $this->_tpl_vars['porter']['iron_scores']; ?>
 ptk.</td>
          <tr>
          <tr>
            <td>Broñ</td><td><?php echo $this->_tpl_vars['porter']['weapon_scores']; ?>
 ptk.</td>
          <tr>
          </table>
          
          <br><br>
        </td>
    </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>