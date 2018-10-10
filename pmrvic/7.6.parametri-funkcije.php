<?php

/* 
 * Predaja po vrijednosti i po referenci
 * 
 */

function potencija(&$var){
    $var=$var*$var;
}

$a=5;
echo 'Potencija broja '.$a.' jednaka je ';
potencija($a);
echo $a;


function velika(&$var){
    $var= strtoupper($var);
}
$naziv='mala školica';
velika($naziv);
echo $naziv;