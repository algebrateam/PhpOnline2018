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
