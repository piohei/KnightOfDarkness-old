{include file="main_top.tpl"}
<table>
    <tr class="row1">
        <td>
          Koalicja jest to formalny sojusz pomi�dzy graczami. <br>W ka�dej koalicji jest cesarz 
          kt�ry ma mo�liwo�� zapraszania nowych cz�onk�w oraz usuwania ju�
          przyj�tych.<br>Aby koalicja spe�nia�a swoj� rol� wprowadzono ograniczenie
          na liczb� cz�onk�w do 15.
          <br>
          Je�li posiadasz wybudowane rynki i wytrenowanych tragarzy to istnieje mo�liwo�� wymiany towar�w pomi�dzy kr�lestwami z koalicji. Ka�dy tragarz posiada {$porter.load_scores} punkt�w �adunkowych, a op�ata za jego prac� wynosi {$porter.cost} sztuk z�ota. Poni�ej przedstawiono liczb� punkt�w �adunkowych zajmowanych przez jedn� jednost� przenoszonego towaru:<br><br>
          <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td style="width: 150px">Jedzenie</td><td>{$porter.food_scores} ptk.</td>
          <tr>
          <tr>
            <td>Narz�dzia</td><td>{$porter.tool_scores} ptk.</td>
          <tr>
          <tr>
            <td>�elazo</td><td>{$porter.iron_scores} ptk.</td>
          <tr>
          <tr>
            <td>Bro�</td><td>{$porter.weapon_scores} ptk.</td>
          <tr>
          </table>
          
          <br><br>
        </td>
    </tr>
</table>
{include file="main_bottom.tpl"}
