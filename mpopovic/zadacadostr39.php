<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// stranica 29
echo 2 + 3 * 4;
echo '<br>';
echo(2 + 3) * 4;
echo '<br>';
echo  41 % 2;

// stranica 30,31
$naziv = 'PHP';
echo '<br>';
echo 'Ovo je '.$naziv.' tečaj';
echo '<br>';
$a = 1;
$b = $a++;
echo 'a='.$a.',b='.$b;

echo '<br>';
$a = 1;
$b = ++$a;
echo 'a='.$a.',b='.$b;

//stranice 31,32,33,34
echo '<br>';
$a = 1;
$b = 1;
if ($a == $b) {
    echo 'Jednaki su';
} else {
    echo 'Nisu jednaki';
}

echo '<br>';
$a = 1;
$b = 2;
if ($a >= $b) {
    $a++;
} else {
    $a--;
}
{echo 'a='.$a; }

echo '<br>';
$a = 5;
if ($a > 0 && $a < 10) {
    echo 'Broj je u traženom nizu';
} else {
    echo 'Broj nije u traženom nizu';
}

echo '<br>';
$a = 0;
$b = -2;
if ($a > 0 || $b < 0) {
    echo 'Uvjet je zadovoljen';
} else {
    echo 'Uvjet nije zadovoljen';
}

echo '<br>';
$a = 1;
$b = (int) $a;
$c = (string) $a;
if ($c === $b) {
    echo 'Identični su';
} else {
    echo 'Nisu identični';
}
