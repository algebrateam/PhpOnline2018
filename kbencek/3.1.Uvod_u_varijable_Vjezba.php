<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var = 'Kutina';  // String postavljen

echo $var;  // Ispisujemo

$var = 22760;  // postavili cjelobrojnu

echo $var; // Ispisujemo

unset($var);

echo $var;

echo '<br>';
echo '<hr>';

$naziv_var = 'brojstanovnika';
$$naziv_var = 22760;
echo $brojstanovnika;

$a = 'Kutina';
$b = &$a;

echo $b;

$a = 22.760; // ne znam zasto ne ispisuje 0

echo '<br>'.$b;

define('NAZIV', 'Kutina');
echo NAZIV;
