<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 22760; //cjelobrojni
        
$b = 22.760; // decimalni
        
        $nizznakova = 'Nedjelja je dan za odmor';

//Logicke vrijednosti

$logickaistina = true;
$logickalalaz = false;


if ($logickaistina) {
    echo '<br> Istina, odmaram se cijelu nedjelju';
}

if ($logickaistina) {
    echo '<br>ovo se nece vidjeti';
    }
 else {
        echo '<br>ovo se dogodi ako je logicka laz na false';        
}

if (!$logickalalaz) {
    echo '<br>ovo se nece vidjeti';  
} else {
    echo '<br>ovo se dogodi ako je logicka laz na false';
}
    
