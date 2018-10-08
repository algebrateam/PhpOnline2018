<?php

/*
 * Visedimenzionalna polja vjezba
 */

$ucenici = ['1'     => ['ime'=>'Ivan', 'prezime'=>'Ivanic'],
                 '2'=> ['ime'=>'Mate', 'prezime'=>'Matic'],
                 '3'=> ['ime'=>'Ante', 'prezime'=>'Antic'], ];

foreach ($ucenici as $broj_ucenika => $podaci) {
    foreach ($podaci as $naziv_podatka => $vrijednost_podatka) {
        echo 'ucenik broj '.$broj_ucenika.' - '.$naziv_podatka.': '.$vrijednost_podatka.'<br>';
    }
}

echo '<hr>';

$marko1 = [1, 5, 7];
$marko2 = [4, 8, 9];
$marko3 = [2, 3, 6];

$multi_array = [$marko1, $marko2, $marko3];

echo'<pre>';
print_r($multi_array);
echo'</pre>';

foreach ($multi_array as $marko) {
    foreach ($marko as $value) {
        echo $value;
    }
}

$elem1 = ['ime'=>'Marko', 'prezime'=>'Popovic', 'OIB'=>'558'];
$elem2 = ['ime'=>'Katarina', 'prezime'=>'Kozina', 'OIB'=>'473'];
$elem3 = ['ime'=>'Adam', 'prezime'=>'Slatki', 'OIB'=>'261'];

$multiarray = ['1'=>$elem1, '2'=>$elem2, '3'=>$elem3];

echo'<pre>';
print_r($multiarray);
echo'</pre>';

foreach ($multiarray as $brojosobe => $podaci) {
    foreach ($podaci as $naziv_podatka => $vrijednost_podatka) {
        echo 'Osoba broj '.$brojosobe.' - '.$naziv_podatka.': '.$vrijednost_podatka.'<br>';
    }
}
echo '<hr>';

echo $multiarray['2']['ime'];

echo '<hr>';
