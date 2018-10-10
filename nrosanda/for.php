<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$zbroj = 0;
for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
}
echo '<br>zbroj je '.$zbroj;

// array

$polje = ['Tesla', 'Edison', 'Bell'];
echo $polje[0];
