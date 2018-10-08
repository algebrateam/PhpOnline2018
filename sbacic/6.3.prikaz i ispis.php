<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<hr> ispis jednog elementa:<br>';
$polje = ['crvena', 'zuta', 'plava'];
// ispis jednog:
echo $polje[1];  // ispisuje zuta
echo '<hr> ispis svih elemenata:<br>';
for ($i = 0; $i <= 2; $i++) {
    echo ' '.$polje[$i];
}
echo '<hr> ispis svih elemenata pomocu duljine polja count()<br>';
for ($i = 0; $i < count($polje); $i++) {  // count trenutno vraca broj 3
    echo ' '.$polje[$i];
}
// brisemo zutu
unset($polje[1]);
// dodajemo dvije nove boje;
$polje[] = 'zelena';
$polje[] = 'crna';
// pokusamo ispis:
echo '<hr> ispis svih elemenata:<br>';
for ($i = 0; $i <= 2; $i++) {
    // echo ' '.$polje[$i];  // NE MOŽE JER NE POSTOJI ELEMENT 1 (Undefined offset: 1)
}
echo '<hr>Ispis pomoću print_r():<br>';
echo '<pre>';
print_r($polje);  // za potrebe debugginga
echo '</pre>';
echo '<hr> ispis svih elemenata pomocu foreach():<br>';
foreach ($polje as $key => $value) {
    echo $value;
    echo ' ';
}
echo '<hr> ispis svih elemenata pomocu foreach() sa kljucevima:<br>';
foreach ($polje as $key => $value) {
    echo $key;
    echo ' --> ';
    echo $value;
    echo '<br>';
}
echo '<hr> ispis svih elemenata pomocu foreach() bez kljuceva:<br>';
foreach ($polje as $value) {
    echo $value;
    echo ' ';
}
// reset kljuceva na defaultni index
echo '<hr>Ispis pomoću print_r() sa starim kljucevima<br>';
echo '<pre>';
print_r($polje);  // za potrebe debugginga
echo '</pre>';
sort($polje);  // resetiramo indexe ovime i sortiramo po vrijednosti
echo '<hr>Ispis pomoću print_r() nakon sort() (brise kljuceve)<br>';
echo '<pre>';
print_r($polje);  // za potrebe debugginga
echo '</pre>';
echo '<hr> ispis svih elemenata pomocu duljine polja count()<br>';
for ($i = 0; $i < count($polje); $i++) {  // count trenutno vraca broj 3
    echo ' '.$polje[$i];
}
