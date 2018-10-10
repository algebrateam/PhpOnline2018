<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        echo '('.$x.','.$y.')';
        $y++;
    }
    echo '<br>';
    $y = 0;
    $x++;
}

echo '<hr>';

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        //echo '('.$x.','.$y.')';
        echo $x * $y.' ';
        $y++;
    }
    echo '<br>';
    $y = 0;
    $x++;
}

echo '<hr>';
//Nađi x kod kojega je umnožak sa y jdnak ili veći 36

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        echo $x * $y.' ';
        if (($x * $y) >= 36) {
            break 2;
        } //break 2 petlje
        $y++;
    }
    echo '<br>';
    $y = 0;
    $x++;
}

echo '<hr> primjer s continue<br>';

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        $y++;
        if (($x * $y) >= 15 && ($x * $y) < 30) {
            continue;
        }
        echo $x * $y.' ';
    }
    echo '<br>';
    $y = 0;
    $x++;
}
