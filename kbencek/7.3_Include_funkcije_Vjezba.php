<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $boje = [['#21302', 'bijela', '55%'],
        ['#212202', 'Crvena', '44%'],
        ['#212202', 'zuta', '44%'],
        ['#212202', 'Plava', '44%'],
        ['#212202', 'Crvena', '44%'], ];

    function ispistablice($b)
    {
        echo'<table borfer=1>';
        foreach ($b as $boja) {
            echo '<tr>';
            foreach ($boja as $v) {
                echo '<td>'.$v.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    ispistablice($boje);
