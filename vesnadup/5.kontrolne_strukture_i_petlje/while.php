<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$zbroj = 0;
$i = 1;
while ($i <= 1000) { //while - dok god je...
    $zbroj += $i;
    $i++;
    echo $i.' ';
}
echo 'ukupan zbroj x brojeva je'.$zbroj;

echo '<hr>';

$zbroj = 0;
$i = 1;
$konacnibroj = 100;
while ($i <= $konacnibroj) {
    $zbroj += $i;
    echo $i.' ';
    $i++;
}
echo '<br>ukupna suma x brojeva = '.$zbroj;
