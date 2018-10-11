<?php

/*
 * Polja, predavanje, vježba, pisanje da lakse zapamtim
 */

//Ispis polja br. 1
$polje = ['Tesla', 'Edison', 'Bell'];

echo $polje[1];

echo '<hr>';

//Ispis elemenata polja for
for ($i = 0; $i <= 2; $i++) {
    echo $polje[$i];
    echo ' ';
}

echo '<hr>';

//Ispis elemenata polja foreach
foreach ($polje as $ime) {
    echo $ime;
    echo ' ';
}

echo '<hr>';

//Ispis polja print_r

$polje = ['Tesla', 'ime'=>'Edison', 'Bell', 3.14];
    echo'<pre>';
    print_r($polje);
    echo'</pre>';

echo '<hr>';

//funkcija count

$polje = ['Tesla', 'Edison', 'Bell'];
for ($i = 0; $i < count($polje); $i++) {
    echo $polje[$i];
    echo ' ';
}
echo '<hr>';

foreach ($polje as $key => $ime) {
    echo ' Element broj '.$key.' ima vrijednost '.$ime.'.';
    echo '<br>';
}
