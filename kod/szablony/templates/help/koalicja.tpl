{include file="main_top.tpl"}
<table>
    <tr class="row1">
        <td>
          Koalicja jest to formalny sojusz pomiêdzy graczami. <br>W ka¿dej koalicji jest cesarz 
          który ma mo¿liwo¶æ zapraszania nowych cz³onków oraz usuwania ju¿
          przyjêtych.<br>Aby koalicja spe³nia³a swoj± rolê wprowadzono ograniczenie
          na liczbê cz³onków do 15.
          <br>
          Je¶li posiadasz wybudowane rynki i wytrenowanych tragarzy to istnieje mo¿liwo¶æ wymiany towarów pomiêdzy królestwami z koalicji. Ka¿dy tragarz posiada {$porter.load_scores} punktów ³adunkowych, a op³ata za jego pracê wynosi {$porter.cost} sztuk z³ota. Poni¿ej przedstawiono liczbê punktów ³adunkowych zajmowanych przez jedn± jednostê przenoszonego towaru:<br><br>
          <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td style="width: 150px">Jedzenie</td><td>{$porter.food_scores} ptk.</td>
          <tr>
          <tr>
            <td>Narzêdzia</td><td>{$porter.tool_scores} ptk.</td>
          <tr>
          <tr>
            <td>¯elazo</td><td>{$porter.iron_scores} ptk.</td>
          <tr>
          <tr>
            <td>Broñ</td><td>{$porter.weapon_scores} ptk.</td>
          <tr>
          </table>
          
          <br><br>
        </td>
    </tr>
</table>
{include file="main_bottom.tpl"}
