<?php /* Smarty version 2.6.11, created on 2010-10-12 07:55:47
         compiled from help/moraleOpis.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table>
    <tr class="row1">
        <td>
            Morale poddanych odzwierciedla nastroje panuj�ce w twoim kr�lestwie.
            <br>
            Im s� one wy�sze tym bardziej poddani s� wyrozumiali i sk�onni do pomocy swojemu w�adcy.
            <br>
            <b>Morale bazowe</b> (bez bonusu z budynk�w specjalnych) mo�e wynosi� w granicach od <b>-100</b> do <b>+50</b>.
            <br>
            Przy morale <b>ko�cowym</b> (ze wszystkimi bonusami) r�wnym <b>-40</b> wybucha bunt poddanych.
            <br>
            Morale jest obliczane na pocz�tku ka�dej tury.
            <br>
            Mo�e by� modyfikowane przez polityk� podatkow�, militarna oraz poziom bezpiecze�stwa jaki zapewniasz swoim poddanym.
            <br>
            
            <table width="100%" cellspacing="1" cellpadding="2">
            <tr align="center">
                <td class="kp-header">
                    poziom bezpiecze�stwa
                </td>
                <td class="kp-header">
                    modyfikator morale
                </td>
            </tr>
            <tr class="row1" align="center">
                <td>
                    0% - 20%
                </td>
                <td>
                    -9
                </td>
            </tr>
            <tr class="row2" align="center">
                <td>
                    21% - 30%
                </td>
                <td>
                    -7
                </td>
            </tr>
            <tr class="row1" align="center">
                <td>
                    31% - 50%
                </td>
                <td>
                    -5
                </td>
            </tr>
            <tr class="row2" align="center">
                <td>
                    51% - 60%
                </td>
                <td>
                    0
                </td>
            </tr>
             <tr class="row1" align="center">
                <td>
                    61% - 70%
                </td>
                <td>
                    +2
                </td>
            </tr>
            <tr class="row2" align="center">
                <td>
                    71% - 80%
                </td>
                <td>
                    +4
                </td>
            </tr>
            <tr class="row1" align="center">
                <td>
                    81% - 90%
                </td>
                <td>
                    +8
                </td>
            </tr>
            <tr class="row2" align="center">
                <td>
                    91% - 99%
                </td>
                <td>
                    +16
                </td>
            </tr>
            <tr class="row1" align="center">
                <td>
                    100%
                </td>
                <td>
                    +32
                </td>
            </tr>
            </table>
            <br><br>
            Modyfikator morale pochodz�cy z podatku jest obliczany nast�puj�co:        
             <b>10-ustanowiony podatek</b>.
            <br>
            <br>
            <b>Uwaga! Je�eli w twoim kr�lestwie jest bardzo niski poziom bezpiecze�stwa,
             ustaw podatek na 0% w ten spos�b unikniesz spadku morale.</b>
            <br>
            <br>
            <!-- 
            Na morale ma wp�yw tak�e sytuacja militarna twojego kr�lestwa. Ka�da
             wojna powoduje spadek morale o <b>5</b> u broni�cego i o <b>10</b> u atakuj�cego.
             -->
            <p style="color:#FF0000">
            Wycofanie atakuj�cego wojska lub atakuj�cych szpieg�w jest bardzo negatywnie odbierane przez Twoich ludzi i powoduje spadek morale o 40. 
            </p>
        
            
            
        </td>
    </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>