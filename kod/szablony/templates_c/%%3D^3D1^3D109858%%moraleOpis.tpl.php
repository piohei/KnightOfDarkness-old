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
            Morale poddanych odzwierciedla nastroje panuj±ce w twoim królestwie.
            <br>
            Im s± one wy¿sze tym bardziej poddani s± wyrozumiali i sk³onni do pomocy swojemu w³adcy.
            <br>
            <b>Morale bazowe</b> (bez bonusu z budynków specjalnych) mo¿e wynosiæ w granicach od <b>-100</b> do <b>+50</b>.
            <br>
            Przy morale <b>koñcowym</b> (ze wszystkimi bonusami) równym <b>-40</b> wybucha bunt poddanych.
            <br>
            Morale jest obliczane na pocz±tku ka¿dej tury.
            <br>
            Mo¿e byæ modyfikowane przez politykê podatkow±, militarna oraz poziom bezpieczeñstwa jaki zapewniasz swoim poddanym.
            <br>
            
            <table width="100%" cellspacing="1" cellpadding="2">
            <tr align="center">
                <td class="kp-header">
                    poziom bezpieczeñstwa
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
            Modyfikator morale pochodz±cy z podatku jest obliczany nastêpuj±co:        
             <b>10-ustanowiony podatek</b>.
            <br>
            <br>
            <b>Uwaga! Je¿eli w twoim królestwie jest bardzo niski poziom bezpieczeñstwa,
             ustaw podatek na 0% w ten sposób unikniesz spadku morale.</b>
            <br>
            <br>
            <!-- 
            Na morale ma wp³yw tak¿e sytuacja militarna twojego królestwa. Ka¿da
             wojna powoduje spadek morale o <b>5</b> u broni±cego i o <b>10</b> u atakuj±cego.
             -->
            <p style="color:#FF0000">
            Wycofanie atakuj±cego wojska lub atakuj±cych szpiegów jest bardzo negatywnie odbierane przez Twoich ludzi i powoduje spadek morale o 40. 
            </p>
        
            
            
        </td>
    </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "main_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>