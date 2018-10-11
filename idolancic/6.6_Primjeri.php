<?php

/*
 *Operacije s poljima
 */
$fruits = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];
//Prebrojavanje elemenata polja
echo count($fruits);
echo '<br/>';
//Prikazivanje zadnjeg elementa polja
echo end($fruits);
echo '<br/>';
//Pretraživanje polja

//Za vrijednost ključa traženog elementa
$key = array_search('banana', $fruits);
echo $key;
echo '<br/>';

//Za traženje neke vrijednosti u polju
if (in_array('banana', $fruits)) {
    echo 'banana postoji u polju';
}
