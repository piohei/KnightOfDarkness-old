{include file="main_top.tpl"}

<div align="center" style="padding: 5px 20px 10px 20px;color:gray;font-weight:bold">
	<font color="yellow">Obowi�zuje zakaz logowania si� na kilka kont
	<br>(nieprzestrzeganie zakazu jest karane)</font>
	<br>Wyj�tki prosz� zg�asza� na forum (Pregierz)
	<br><font color="red">PROSZ� CZYTA� CO JEST NAPISANE POWY�EJ
	<BR>i nie t�umaczy� si� �e si� nie wiedzia�o albo nie zd��y�o zg�osi�.</font>
</div>

<table width="100%" border="0" cellspacing="1" cellpadding="2">


{* BEGIN: Pole powiadomie� *}
{if $new_messages}
  <tr>
    <td colspan="4">
    <table border="0" cellspacing="0" cellpadding="0" style="width: 100%">
    <tr class="NotifyMesgInfo">
      <td style="width: 45px; height: 30px">
      <img src="{$image_dir}ico.notify.newmesg.gif" alt="" align="right" valign="middle"></td>
      <td>W Twojej skrzynce s� nieprzeczytane wie�ci. 
      (
      	{$count_new_messages_standard}
      /
      	{$count_new_messages_invite}
      /
      	{$count_new_messages_raport}
      /
      	{$count_new_messages_simple_raport}
      )
      </td>
    </tr>
    </table>
    </td>
  </tr>
{/if}
{* END: Pole powiadomie� *}

  <tr>
    <td  class="header" colspan="2">
      bitwa dnia (z ostatnich 24 godzin)
    </td>
    <td  class="header" >
      morale
    </td>
    <td  class="header" >
      bezpiecze�stwo
    </td>
  </tr>
  <tr class="row1">
    <td rowspan="2" colspan="2" align="center">
      <a href="./walka/infoGracza.php?name={$bitwa_dnia.kto}">{$bitwa_dnia.kto}</a> 
      -> <a href="./walka/infoGracza.php?name={$bitwa_dnia.kogo}">{$bitwa_dnia.kogo}</a>
    </td>
    <td rowspan="2" class="row1" align="center">
      {$kingdomInfo.morale+$bon_morale}
    </td>
    <td rowspan="2" class="row1" align="center">
      {$kingdomInfo.poziom_bezp}%
    </td>
  </tr>
  <tr class="row2">
  </tr>
  <tr>
	  <td colspan="4" class="header">
          wie�ci 
  	</td>
  </tr>
    <tr>
    <td colspan="4" class="header">
      {if $markLastChange }
      ( ----&raquo;&raquo;&raquo; <a href="{$root_dir}zalogowany.php?changelog=1"><b>przeczytaj ostatnie zmiany w grze {$lastChangeDate} </b> </a> &laquo;&laquo;&laquo;---- )
      {else}
      ( <a href="{$root_dir}zalogowany.php?changelog=1">zmiany w grze {$lastChangeDate} </a> )
	      
      {/if}
    </td>
  </tr>
  
    <tr class="row2">
    <td colspan="4">
	{if $bk.postep}
	        <div style="background-color: #212223; padding: 5px; margin: 2px 0; text-align: center; color: #c8a27c; font-size: 10px;">
        <b> Najwi�kszy budynek ko�ca ery</b>
      </div>
		<table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
    <tr class="row1">
    <tr class="row2">
    <td width="500px">Koalicja:
    <a href="{$root_dir}koalicja/coalition.desc.php?coal={$bk.koalicja}">{$bk.koalicja}</a> 
      <table width="466px" cellspacing="0" cellpadding="0" border="0">
        <tr class="row1">
        <tr class="row2">
        <td width="50px">Post�p:</td>
        <td width="{$bk.postep*4+1}" bgcolor="#ac6f10">
          &nbsp;
        </td>
        <td>
        &nbsp;{$bk.postep}%
        </td>
      </tr>
      </table>
    </td>
    <td width="24px">
    <a href='{$root_dir}atak/?target={$bk.koalicja}&type=5'><img src="{$image_dir}miecze_male.gif" alt="Atak"></a>
    </td>
  </tr>
		</table>
		{/if}
			        <div style="background-color: #212223; padding: 5px; margin: 2px 0; text-align: center; color: #c8a27c; font-size: 10px;">
      </div>

      <div style="background-color: #212223; padding: 5px; margin: 2px 0; text-align: center; color: #c8a27c; font-size: 10px;">
        <b> ABY WIEDZIE� JAK ZACZ�� GRA� PRZECZYTAJ WST�P <a href="./pomoc/pomoc.php">POMOCY</a></b>
      </div>

      {* BEGIN nowosci *}
      <table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
      {section loop=$admin_messages name="m" start=0} 
 		<tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          	<td>
            	<b>	<span style="color: #c8a27c; font-size: 9px">
                	&raquo;
              		</span>
              	{$admin_messages[m].login}</b>
             </td>
             <td>
              	<small style="margin-left: 15px"> 
              	{$admin_messages[m].date}
              	</small>
          	</td>
        </tr>

        <tr>
          <td colspan="2">
			{$admin_messages[m].wiadomosc}
          </td>
        </tr>
	{/section}
	</table>  
	
  <tr>
    <td colspan="4" class="header">
      {if $CFG->WLACZ_ZASTEPSTWA}
      &nbsp;&nbsp;&nbsp; <a href="{$root_dir}zastepstwa.php">lista zast�pstw</a>
      {/if}
    </td>
  </tr>

	
{*------------KOMENTARZ------------------------------------}

<table cellpadding="0" cellspacing="0" border="0" style="width: 100%">
  <tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          <td>
            <b>

              <span style="color: #c8a27c; font-size: 9px">
                &raquo;
              </span>
             29 pa�dziernik 2007</b>
            <small style="margin-left: 15px">
              16:10</small>
          </td>
        </tr>

        <tr>
          <td style="padding: 5px 20px 30px 20px;color:#c8a27c;font-weight:bold">
			Witam wszsytkich w nowej erze. Gra wzbogaci�a si� o czat i kilka pomniejszych nowo�ci. 
			W du�ej mierze to zas�uga nowego programisty :). Jeszcze jest kilka b��d�w w czacie, ale b�da one szybko usuni�te.
          </td>
        </tr>
 
 
 <tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          <td>
            <b>

              <span style="color: #c8a27c; font-size: 9px">
                &raquo;
              </span>
             23 pa�dziernik 2007</b>
            <small style="margin-left: 15px">
              15:20</small>
          </td>
        </tr>

        <tr>
          <td style="padding: 5px 20px 30px 20px;color:#c8a27c;font-weight:bold">
			Nowa era rozpocznie si� w poniedzia�ek 29 pa�dziernika oko�o god� 16:00!
          </td>
        </tr>
 
 
<tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          <td>
            <b>
              <span style="color: #c8a27c; font-size: 9px">
                &raquo;
              </span>
             18 pa�dziernik 2007</b>
            <small style="margin-left: 15px">
              12:00</small>
          </td>
        </tr>
        <tr>
          <td style="padding: 5px 20px 30px 20px;color:#c8a27c">
		Kolejna porcja b��d�w spowodowanych zmian� wersji php i mysql naprawiona :). W tej chwili powoli kompletuje zesp� administrator�w i prawdopodobnie w przysz�ym tygodniu wystartuje normalna era, obecnie  zach�cam do testowania gry i swoich taktyk :-)
          </td>
        </tr>


<tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          <td>
            <b>
              <span style="color: #c8a27c; font-size: 9px">
                &raquo;
              </span>
             16 pa�dziernik 2007</b>
            <small style="margin-left: 15px">
              12:00</small>
          </td>
        </tr>
        <tr>
          <td style="padding: 5px 20px 30px 20px;color:#c8a27c">
		Dzi�kuje za zg�oszone b��dy. Budowanie specjalnych i polskie znaki ju� s� i targ te� powinien dzia�a�. Je�eli kto� chcia�by uczestniczy� w tworzeniu tej gry to prosz� o kontakt z ksi�stwem kwarek. Mile widziani s� programi�ci PHP ze znajomo�ci� SQL, graficy, testerzy :). Niestety z orginalnego sk�adu zosta�em tylko ja i dlatego jest tak d�ugi czas reakcji na zg�aszane b�edy nie m�wi�c ju� o nowych funkcjonalno�ciach 
			
          </td>
        </tr>
       <tr class="row1" style="color: #6b6356; text-align: left; padding: 0px 10px">
          <td>
            <b>
              <span style="color: #c8a27c; font-size: 9px">
                &raquo;
              </span>
             12 pa�dziernik 2007</b>
            <small style="margin-left: 15px">
              15:00</small>
          </td>
        </tr>
        <tr>
          <td style="padding: 5px 20px 30px 20px;color:#c8a27c">
		Witam wszsytkich na nowym serwerze. Era zacznie si� za oko�o tydzie� i w tym czasie mo�na gra� atakowac i testowa� wszystko. Wszelkie nieprawid�owo�ci prosz� zg�asza� na maila krzysiek@unikod.com	
			
          </td>
        </tr>

      </table>
{------------KONIEC KOMENTARZ------------------------------------*}
      
      {* END nowosci *}
    </td>
    {if mess!=""}{$mess}{/if}
  </tr>

</table>
{include file="main_bottom.tpl"}
