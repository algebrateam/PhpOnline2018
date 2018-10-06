<?php

/* 
 * Sortiranje vrijednosti polja
 */
echo 'Pocetno stanje array-a';
echo '<br/>';
$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
print_r($fruits);
echo '<br/>';

 echo 'Sa sort';
 echo '<br/>';
sort($fruits);
print_r($fruits);
echo '<br/>';

$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
echo 'Sa rsort';
echo '<br/>';
rsort($fruits);
print_r($fruits);
echo '<br/>';

$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
echo 'Sa asort';
echo '<br/>';
asort($fruits);
print_r($fruits);
echo '<br/>';

$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
echo 'Sa arsort';
echo '<br/>';
arsort($fruits);
print_r($fruits);
echo '<br/>';

$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
echo 'Sa ksort';
echo '<br/>';
ksort($fruits);
print_r($fruits);
echo '<br/>';

$fruits = [0 =>'limun','a' => 'naranca',1 => 'banana','b' => 'jabuka'];
echo 'Sa krsort';
echo '<br/>';
krsort($fruits);
print_r($fruits);
echo '<br/>';

