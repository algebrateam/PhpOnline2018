<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 5.7.1.
 * Koristeci se operatorima usporedbe vece od i manje od i iskazom
 * if-else provjerite odnos varijabli $a = 4 i $b = 2 i ispisite
 * prikladnu poruku
 */

$a = 4;
$b = 2;

if ($a > $b) {
    echo 'vrijednost varijable $a veca je od vrijednosti varijable $b';
} else {
    echo 'vrijednost varijable $b veca je od vrijednosti varijable $a';
}

echo '<br>';

if ($a < $b) {
    echo 'vrijednost varijable $a veca je od vrijednosti varijable $b';
} else {
    echo 'vrijednost varijable $b manja je od vrijednosti varijable $a';
}

echo '<br>';

/* 5.7.2.
 * Napisite program koji rabi dvije varijable $a i $b. Definirajte im
 * proizvoljne brojcane vrijednosti. Ako je $a vece od $b, onda uvecajte
 * vrijednost $a za jedan,a ako je veca varijabla $b, onda je umanjite za jedan
 * koristeci se operatorima automatskog povecavanja i smanjivanja.
 * Ispisite na kraju vrijednosti varijabli.
 */

$a = 10;
$b = 3;

echo 'vrijednost varijable a je '.$a.'<br>';
echo 'vrijednost varijable b je '.$b.'<br>';

if ($a < $b) {
    $b++;
} else {
    $a--;
}

echo 'zavrsna vrijednost varijable a je '.$a.'<br>';
echo 'zavrsna vrijednost varijable b je '.$b.'<br>';

/* 5.7.3.
 * S pomocu petlje while ispisite brojeve od 1 do 50 na ekran, jedan ispod
 * drugoga.
 */

$i = 1;

while ($i <= 50) {
    echo $i.'<br>';
    $i++;
}
echo '<hr>';

/* 5.7.4.
 * S pomocu petlje for zbrojite brojeve od 20 do 30 te zbroj ispisite na
 * ekran.
 */

$zbroj = 0;

for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
}
echo $zbroj;
