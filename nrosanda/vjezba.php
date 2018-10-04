<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// primjer 0

$c = 80;
$d = 100;
echo "$c,$d<br>";

//primjer 1

$naziv = 'Probno';

    echo "$naziv<br>";

// primjer 2

$a = 3;
$b = 5;
$pom = $a = 5;
$pom2 = $b = 3;
echo "$pom, $pom2<br>";
$array = ("$b, $a");
echo "$array";
$b = $a++;
echo $a, $b;

// primjer 3

$ime = 'Nancy';
$prezime = 'Rosanda';
echo ".$ime..$prezime.<br>"; // ne razumijem potrebu tockica

// primjer 4

$z = 5;
$z++;
echo "$z<br>";
$z = 5;
$z--;
echo "$z<br>";

// ma samo dalje

$d = 'ne volim matematiku x 10';
$f = 'zaista ne volim matematiku';

if ($d === $f) {
    echo $d;
} else {
    echo "$f<br>";
}

// tako da cu koristiti rijeci umjesto brojeva

$e = 'obozavam knjige';
$g = 'obozavam/matematiku';

if ($g = !$e) {
    echo $g;
} else {
    echo "$e<br>";
}

if ($g > $e) {
    echo 'vidjet cemo';
} else {
    echo'ne znam sto ce biti<br>';
}

//

$n = 5;
$m = 4;

if ($n >= $m) {
    echo 'ponestaje mi ideja<br>';
} else {
    echo 'sprzit cu si sinapse';
}

if ($n > 3 && $n < 8) {
    echo 'ne znam zasto trazim ovaj niz<br>';
} else {
    echo 'niste pronasli niz, molim pokusajte ponovno';
}

if ($n > 0 || $m < 5) {
    echo 'sto je danas lijep i suncan dan<br>';
} else {
    echo 'nesto nesto nesto';
}

$n = $n * 5;
echo "$n<br>";

while ($i <= 10) {
    $zbroj += $i;
    $i++;
    if ($zbroj = 5);
    break;
}
    echo $zbroj;
