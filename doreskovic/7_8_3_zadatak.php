<?php

/*
 * Napisati funkciju za zbrajanje, razliku i umnožak i dijeljenje dva broja. Zatim je
 * potrebno napisati fuknciju koja će pozivati sve te funkcije odjednom.
 */
function sum($a, $b)
{
    return $a + $b;
}
function razlika($a, $b)
{
    return $a - $b;
}
function umnozak($a, $b)
{
    return $a * $b;
}
function djeljenje($a, $b)
{
    return $a / $b;
}
function sveradnje($a, $b)
{
    echo 'Zbrajanje:'.sum($a, $b).'</br>';
    echo 'Oduzimanje:'.razlika($a, $b).'</br>';
    echo 'Množenje:'.umnozak($a, $b).'</br>';
    echo 'Djeljenje'.djeljenje($a, $b).'</br>';
}
$c = 3;
$d = 2;
sveradnje($c, $d);
