<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$i = 0;
$konacnibroj = 100;
$ciljanizbroj = 20;
while ($i <= $konacnibroj) {
    if ($zbroj >= $ciljanizbroj) {
        break;
    }

    $zbroj += $i;
    $i++;
    echo $i,'';
}
echo '<br>zbroj svih brojeva od 1 do broja '
     .$i
     .' je manji od '
     .$ciljanizbroj;


//zadatak 5.7.4.

