<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* primjer polja kada kljucevi polja nisu brojcani vec tekstualni
 */

$ucenik = ['1' => ['naziv' => 'Marko', 'prezime' => 'Cetina'],
    '2' => ['naziv' => 'Ljubica', 'prezime' => 'Ljubicica'],
    '3' => ['naziv' => 'Bica', 'prezime' => 'Bicica'],];

foreach ($ucenik as $br_ljudi => $podaci) {
    foreach ($podaci as $naziv_podataka => $vrijednost_podataka) {
        echo '<br>Ucenik br.' . $br_ljudi . ' - ' . $naziv_podataka . ': ' . $vrijednost_podataka;
    }
}

echo '<hr>';

/* visedimenzionalna polja
 */

$elem1 = [2, 4, 6];
$elem2 = [1, 3, 5];
$elem3 = [7, 9, 8];

$multi_array = [$elem1, $elem2, $elem3];

echo '<pre>';
print_r($multi_array);
echo '</pre>';

echo '<br><hr>';

echo '<br>Ili<br>';

foreach ($multi_array as $elem) {
    foreach ($elem as $val) {
        echo $val . '<br>';
    }
}

echo '<br><hr>';

$element = ['naziv' => 'Marko', 'prezime' => 'Cetina', 'broj' => 5];
$element2 = ['naziv' => 'Ljubica', 'prezime' => 'Ljubicica', 'broj' => 3];

$multi_array2 = ['ucenik1' => $element, 'ucenik2' => $element2];

echo '<pre>';
print_r($multi_array2);
echo '</pre>';
echo '<br><hr><br>';

$voce = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];

echo '<pre>';
print_r($voce);
echo '</pre>';
echo '<br><hr><br>';

sort($voce);
echo '<pre>';
print_r($voce);
echo '</pre>';
unset($voce);

echo '<br><hr><br>';

$voce1 = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];

rsort($voce1);
echo '<pre>';
print_r($voce1);
echo '</pre>';
echo '<br><hr><br>';

unset($voce1);
$voce1 = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];
asort($voce1);
echo 'asort';
echo '<pre>';
print_r($voce1);
echo '</pre>';
echo '<br><hr><br>';

unset($voce1);
$voce1 = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];
arsort($voce1);
echo 'arsort()';
echo '<pre>';
print_r($voce1);
echo '</pre>';
echo '<br><hr><br>';

unset($voce1);
$voce1 = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];
echo 'ksort()';
ksort($voce1, SORT_STRING);
echo '<pre>';
print_r($voce1);
echo '</pre>';
echo '<br><hr><br>';

unset($voce1);
$voce1 = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];
echo 'krsort()';
krsort($voce1, 2);
echo '<pre>';
print_r($voce1);
echo '</pre>';
echo '<br><hr><br>';

unset($voce1);

$fruits = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];

$br_elementa = 0;

foreach ($fruits as $val) {
    $br_elementa++;
}
echo $br_elementa . '<br>';

echo 'Ili<br>';

echo count($fruits);

echo '<br><hr><br>';

/*
 * Prikazivanje zadnjeg elementa polja
 */

foreach ($fruits as $key => $val) {
    
}
echo $val . '<br>';

echo '<br><hr><br>';

/* Pretrazivanje polja */

foreach ($fruits as $key => $val) {
    if ($val == 'banana') {
        break;
    }
}
echo $key . '<br>';

$key = array_search('banana', $fruits);
echo $key . '<br>';

if (in_array('banana', $fruits)) {
    echo 'banana pronadena, misija ispunjena<br>';
}

echo '<br><hr><br>';

echo '<br><hr><br>';

echo '<br><hr><br>';
