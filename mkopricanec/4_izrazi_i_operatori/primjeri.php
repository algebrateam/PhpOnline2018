<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mim = 'Algebra';
$nin = 35;
$nen = ['Algebra', 35];
$nan = '';

echo 2 + 3 * 4;
echo '<br>';
echo 2 * 3 + 4;
echo '<br>';
echo(2 + 3) * 4;
echo '<br>';

$ime = 'PHP';
echo '<br>';

echo 'Ovo je'.$ime.'tecaj';
echo '<br>';

$a = 'Algebra';
$b = &$a;
echo $b;
echo '<br>';

define('NAZIV', 'Algebra');
echo NAZIV;
echo '<br>';

$imen = 'Nikola';
$prezimen = 'Tesla';
echo 'Ime ovog znanstvenika je'.$imen.''.$prezimen;
echo '<br>';

$nin++;
echo $nin;
echo '<br>';

$nin++;
echo $nin;
echo '<br>';

$nin--;
echo $nin;
echo '<br>';

$nin--;
echo $nin;
echo '<br>';

$nun = $nin++;
echo 'nun='.$nun.',nin='.$nin;
echo '<br>';

$non = ++$nin;
echo 'nrn='.$non.',nin='.$nin;
echo '<br>';

if ($non == $nun) {
    echo 'Isti su';
} else {
    echo 'Nisu isti';
}
echo '<br>';

if ($nin != $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin > $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin >= $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin < $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin <= $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin <= $nun) {
    $nin++;
} else {
    $nin--;
}
echo '<br>';
echo 'nin='.$nin;

if ($nin > 0 && $nin < 10) {
    echo 'Broj je u trazenom nizu';
} else {
    echo 'Broj nije iz trazenog niza';
}
echo '<br>';

if ($nin > 0 || $nun < 0) {
    echo 'Brojevi zadovoljavaju uvjete';
} else {
    echo 'Brojevi ne zadovoljavaju uvjete';
}
echo '<br>';

$nfn = 0;

if ($nfn) {
    echo 'Uvjet je istinit';
} else {
    echo 'Uvjet je laz';
}
echo '<br>';

if (!$nfn) {
    echo 'Uvjet je istinit';
} else {
    echo 'Uvjet je laz';
}
echo '<br>';

$kero = 1;
$gero = (int) $a;
$nero = (string) $a;

if ($gero === $nero) {
    echo 'Identicne su';
} else {
    echo 'Nisu identicne';
}
echo '<br>';

$gero += 5;

echo $gero;
echo '<br>';

$gero = $gero + 5;
echo $gero;
echo '<br>';

$gero -= 2;

echo $gero;
echo '<br>';

$gero = $gero - 2;
echo $gero;
echo '<br>';

$gero /= 2;
echo $gero;
echo '<br>';

$gero = $gero / 2;
echo $gero;
echo '<br>';

$gero *= 2;
echo $gero;
echo '<br>';

$gero = $gero * 2;
echo $gero;
echo '<br>';
