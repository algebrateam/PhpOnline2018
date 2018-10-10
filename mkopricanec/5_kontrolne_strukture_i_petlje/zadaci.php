<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//prvi zadatak
$a = 4;
$b = 2;

if ($a > $b) {
    echo 'Varijabla a je veca od varijable b';
} else {
    echo 'Varijabla b je veca od varijable a';
}

//drugi zadatak

if ($a > $b) {
    $a++;
}
if ($b > $a) {
    $b--;
}

//treci zadatak
echo '<hr>';
$i = 0;

while ($i < 50) {
    $i++;
    echo $i.'<br>';
}

//cetvrti zadatak
$zbroj = 0;

echo '<hr>';
for ($e = 20; $e >= 20 && $e <= 30;) {
    $zbroj += $e;
    $e++;
}
echo $zbroj;
