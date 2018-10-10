<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function potencija(&$var){
    $var=$var*$var;
}

    $a=5;
    
    echo 'Potencija Broja' .$a. 'jednaka je';
    
    potencija ($a);
    echo $a;

    function velika(&$var){
    $var=strtoupper($var);
}
echo '<br>' , '<hr>';

$naziv='mala škola';
velika($naziv);
echo $naziv;
