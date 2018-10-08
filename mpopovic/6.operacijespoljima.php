<?php

/*
 Operacije s poljima
 */

$voce = [0=>'limun', 'a'=>'naranca', 1=>'banana', 'b'=>'jabuka'];

//Prebrojavanje elemenata polja

$br_elem = 0;

foreach ($voce as $val) {
    $br_elem++;
}
echo $br_elem;

echo '<br>';

//Krace:

echo count($voce);

echo '<br>';

//Ispis zadnjeg elementa polja

foreach ($voce as $val => $br_elem) {
}
echo $br_elem;

echo '<br>';

//Ispis zadnjeg elementa polja pomocu end funkcije

echo end($voce);

echo '<br>';

//Pretrazivanje polja

foreach ($voce as $key => $value) {
    if ($value == 'banana') {
        break;
    }
}

echo 'Vrijednost polja '.$value.' se nalazi na kljucu '.$key;

echo '<br>';

//pretrazivanje pomocu funkcije array_search

$key = array_search('banana', $voce);
echo $key;
echo '<br>';
echo 'Vrijednost polja "banana" se nalazi na kljucu '.$key;
echo '<br>';

//Ispisi ako neka vrijednost postoji u polju

if (in_array('naranca', $voce)) {
    echo 'Naranca postoji u polju voce';
}
