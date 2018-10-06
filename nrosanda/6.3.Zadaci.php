<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 6.7.1.
 * Napisite program koji upisuje pet imena u polje $imena i ispisuje ih 
 * s pomocu petlje for each
 */

$ime = array ('Marko', 'Matej', 'Luka', 'Ivan', 'Tinkerbell');

foreach ($ime as $value) {
    echo $value.'<br>';
}

echo '<br>';
echo '<pre>';
print_r ($ime);
echo '</pre>';

echo '<br><hr><br>';

/* 6.7.2.
 * Polju iz prethodnog zadatka promjenite kljuceve tako da umjesto kljuca 1 
 * pise ime5 and so on
 */

krsort($ime);
echo '<pre>';
print_r ($ime);
echo '</pre>';

echo '<br><hr><br>';


/* 6.7.3.
 * Poslozite imena u polju iz prvog zadatka abecednim redom i ispisite 
 * vrijednosti elemenata uz pomoc petlje for.
 */

asort ($ime);
echo '<pre>';
print_r ($ime);
echo '</pre><br>';

for ($i = 0; $i < count($ime); $i++) {
   echo ' '.$ime[$i].'<br>';
}

echo '<br><hr><br>';


/* 6.7.4.
 * Poslozite kljuceve u polju abecednim redom i ispisite vrijednosti elemenata 
 * zajedno s pripadajucim kljucevima s pomocu petlje foreach.
 */

ksort ($ime);

foreach ($ime as $key => $value) {
    echo $key.' = '.$value.'<br>';
}

echo '<br><hr><br>';


/* 6.7.5.
 * Napisite program koji ce s pomocu petlje for automatski stvoriti polje 
 * brojeva od 1 do 100 te s petljom foreach ispisati sadrzaj polja.
 */


for ($i = 1; $i <= 100; $i++) {
    $polje[$i] = $i;
}

foreach ($polje as $value) {
      echo '<br>'.$value.' '; 
}

