<?php

/*
 * 
 * 
 * 
 * 
 */
$var = 'Kristijan';

echo $var;

echo '<br>';

$var = 27;

unset($var);

echo $var;


echo '<br>';


$naziv_var = 'Iznos za plaćanje';
$$naziv_var = 134;
echo $iznos;



$a = 'Kristijan';
$b = &$a;                 //odvodi nas na adresu varijable $a

echo $b;

$a = 27.5;

echo '<br>' . $b;



//Varijabla koja se ne moze ponistavati

define('NAZIV', 'Kristijan');
echo NAZIV;
