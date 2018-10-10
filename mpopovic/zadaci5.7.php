<?php

/*
 * Zadatak 2.
 */

$a = 2;
$b = 7;

echo 'Početna vrijednost varijable $a je '.$a;
echo '<br>Početna vrijednost varijable $b je '.$b;

if ($a > $b) {
    $a++;
} else {
    $b--;
}

echo '<hr>Završna vrijednost varijable $a je '.$a;
echo '<br>Završna vrijednost varijable $b je '.$b;
