<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$zbroj = 0;
$i = 1;

$konacnibroj = 100;

while ($i <= $konacnibroj ) {
    $zbroj += $i;
    echo $i.' ';
    $i++;
    
    echo ' ukupna suma'.$zbroj;
}





