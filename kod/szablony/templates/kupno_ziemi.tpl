{strip}
<link
	rel="stylesheet" type="text/css" href="{$style_dir}messages.css">
{literal}
<script type="text/javascript">
		function kosztKupnaZiemiOdZera(ziemia,wspolczynnik){
//			return Math.floor(ziemia*(ziemia+1)*(2*ziemia+1)/6/100);
//			return Math.floor(Math.pow(ziemia*(ziemia+1)/2,1.50)/100);
			return Math.floor(Math.pow(ziemia*(ziemia+1)/wspolczynnik,1.50)/100);
		}
		
        function przeliczKosztZiemi(ileMozeszKupic,ziemia,form,wspolczynnik){
        	ileKupujesz = (form.ile.value == "")? 0: form.ile.value;
        	if(Math.ceil(ileKupujesz)!=ileKupujesz) ileKupujesz+='a';
        	
        	if (ileKupujesz > ileMozeszKupic+10000){
        		document.getElementById('kosztZiemi').innerHTML="<font color=\"red\">nie masz tyle z³ota</font>";
        	} else {
        		ileKupujesz=Math.ceil(ileKupujesz);
        		kosztZiemi = Math.floor((2*ziemia+ileKupujesz)*ileKupujesz*ziemia*(1/150));
        		kosztZiemi = kosztKupnaZiemiOdZera(ziemia+ileKupujesz,wspolczynnik)-kosztKupnaZiemiOdZera(ziemia,wspolczynnik);
        		if (ileKupujesz > ileMozeszKupic) {
	        		document.getElementById('kosztZiemi').innerHTML="<font color=\"red\">"+kosztZiemi+" z³ota</font>";
        		} else {
	        		document.getElementById('kosztZiemi').innerHTML=kosztZiemi+" z³ota";
        		}
        	}
        }
        
        </script>
{/literal}

<center>{$wynik|default:""}<br>
<form action="kupuj.php" method="post">
<table width="100%" bgcolor="#212223">
	<tr>
		<td colspan="4" bgcolor="#362a1a">
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td width="71px"><img border="0"
					src="{$image_dir}table_decor_right_1.jpg"></td>
				<td width="357px" bgcolor="#362a1a" align="center"><FONT
					color="#c8a27c" face="Lucida Calligraphy"><span
					style="valign: middle">Kupno ziemi</span></font></b></td>
				<td width="71px"><img border="0"
					src="{$image_dir}table_decor_left_1.jpg"></td>
			</tr>
		</table>
		</td>
	</tr>

	<tr>
		<td colspan="4">Maksymalnie mo¿esz kupiæ {$max} ziemi za {$kosztKupnaMax|nice_number} z³ota</td>
	</tr>
	<tr>
		<td width="30%" allign="right">
			<FONT SIZE="1" COLOR="WHITE">ILE ZIEMI KUPUJESZ:</FONT>
		</td>
		<td width="20%" align="left" colspan="1"><input type="text" size="10" class="textfield" name="ile"
			onkeyup="przeliczKosztZiemi({$max},{$kingdomInfo.ziemia},this.form,{$wspolczynnikKUPZIEME})">
		</td>
		<td align="left"> za: </td>
		<td width="50%" align="left" colspan="1" id="kosztZiemi"></td>
	</tr>
<!-- 
	<tr>
		<td>Cena: </td>
		<td align="left" colspan="2" id="kosztZiemi"></td>
	</tr>
-->
	<tr>
		<td colspan="4" align="center"><input type="submit" class='button' value="  Kupuj  "></td>
	</tr>
	<tr bgcolor="#362a1a">
		<td colspan="4">&nbsp;</td>
	</tr>
</table>
</form>
<!-- 
Ile zap³aci³by¶ za ziemie kupuj±c j± od zera:
<TABLE FRAME=VOID CELLSPACING=0 COLS=2 RULES=NONE BORDER=0>
	<COLGROUP><COL WIDTH=75><COL WIDTH=150 align="right"></COLGROUP>
	<TBODY>
		<TR>

			<TD align="right">100</TD>
			<TD align="right"><FONT >4&nbsp;256</FONT></TD>
		</TR>
		<TR>
			<TD align="right">200</TD>
			<TD align="right"><FONT >34&nbsp;742</FONT></TD>

		</TR>
		<TR>
			<TD align="right">300</TD>
			<TD align="right"><FONT >118&nbsp;872</FONT></TD>
		</TR>
		<TR>
			<TD align="right">400</TD>

			<TD align="right"><FONT >284&nbsp;672</FONT></TD>
		</TR>
		<TR>
			<TD align="right">500</TD>
			<TD align="right"><FONT >560&nbsp;560</FONT></TD>
		</TR>

		<TR>
			<TD align="right">600</TD>
			<TD align="right"><FONT >975&nbsp;244</FONT></TD>
		</TR>
		<TR>
			<TD align="right">700</TD>
			<TD align="right"><FONT >1&nbsp;557&nbsp;668</FONT></TD>

		</TR>
		<TR>
			<TD align="right">800</TD>
			<TD align="right"><FONT >2&nbsp;336&nbsp;967</FONT></TD>
		</TR>
		<TR>
			<TD align="right">900</TD>

			<TD align="right"><FONT >3&nbsp;342&nbsp;448</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1000</TD>
			<TD align="right"><FONT >4&nbsp;603&nbsp;564</FONT></TD>

		</TR>
		<TR>
			<TD align="right">1100</TD>
			<TD align="right"><FONT >6&nbsp;149&nbsp;899</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1200</TD>

			<TD align="right"><FONT >8&nbsp;011&nbsp;158</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1300</TD>
			<TD align="right"><FONT >10&nbsp;217&nbsp;151</FONT></TD>

		</TR>
		<TR>
			<TD align="right">1400</TD>
			<TD align="right"><FONT >12&nbsp;797&nbsp;790</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1500</TD>

			<TD align="right"><FONT >15&nbsp;783&nbsp;081</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1600</TD>
			<TD align="right"><FONT >19&nbsp;203&nbsp;112</FONT></TD>

		</TR>
		<TR>
			<TD align="right">1700</TD>
			<TD align="right"><FONT >23&nbsp;088&nbsp;054</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1800</TD>

			<TD align="right"><FONT >27&nbsp;468&nbsp;153</FONT></TD>
		</TR>
		<TR>
			<TD align="right">1900</TD>
			<TD align="right"><FONT >32&nbsp;373&nbsp;727</FONT></TD>

		</TR>
		<TR>
			<TD align="right">2000</TD>
			<TD align="right"><FONT >37&nbsp;835&nbsp;160</FONT></TD>
		</TR>
		<TR>
			<TD align="right">3000</TD>

			<TD align="right"><FONT >129&nbsp;748&nbsp;703</FONT></TD>
		</TR>
		<TR>
			<TD align="right">4000</TD>
			<TD align="right"><FONT >311&nbsp;072&nbsp;623</FONT></TD>

		</TR>
		<TR>
			<TD align="right">5000</TD>
			<TD align="right"><FONT >612&nbsp;964&nbsp;372</FONT></TD>
		</TR>
		<TR>
			<TD align="right">6000</TD>

			<TD align="right"><FONT >1&nbsp;066&nbsp;901&nbsp;240</FONT></TD>
		</TR>
		<TR>
			<TD align="right">7000</TD>
			<TD align="right"><FONT >1&nbsp;704&nbsp;616&nbsp;726</FONT></TD>

		</TR>
		<TR>
			<TD align="right">8000</TD>
			<TD align="right"><FONT >2&nbsp;558&nbsp;058&nbsp;534</FONT></TD>
		</TR>
		<TR>

			<TD align="right">9000</TD>
			<TD align="right"><FONT >3&nbsp;659&nbsp;358&nbsp;670</FONT></TD>
		</TR>
		<TR>
			<TD align="right">10000</TD>
			<TD align="right"><FONT >5&nbsp;040&nbsp;811&nbsp;020</FONT></TD>

		</TR>
	</TBODY>
</TABLE>
 -->
</center>
{/strip}
