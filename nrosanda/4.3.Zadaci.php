<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 4.3.2.
 * Definirajte dvije varijable, $ime i $prezime, u koje cete upisati vase
 * ime i prezime. Ispisite te dvije varijable koristeci se operatorom za
 * nastavljanje nizova.
 */
$ime = 'Nancy';
$prezime = 'Rosanda';

echo $ime.' '.$prezime;
echo '<br>';

/* 4.3.3.
 * Postavite vrijednost varijable $a na 5. Koristenjem operatora automatskog
 * povecavanj i smanjivanja najprije povecajte vrijednost varijable $a te ispisite,
 * a nakon toga smanjite vrijednost i ispisite.
 */

$a = 5;
$a++;
echo $a;
echo '<br>';
$a--;
echo $a - 1;
echo '<br>';

/* 4.4.4.
 * Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj
 * s pomicnim zarezom i ispisite na ekran.
 */

$a = 5;
$a /= (float) 3;
echo $a;
echo '<br>';

/* 4.4.5.
 * Varijablu iz prethodnog zadatka operatorom dodjeljivanja s operacijom
 * uvecajte za 5.
 */

$a = 5;
$a += 5;
echo $a;
echo '<br>';

/* 4.4.6.
 * Napravite stranicu s dvije varijable $a= 7 i $b=4.
 * Zatim ih na ekranu ispisite na sljedeci nacin
 */

$a = 7;
$b = 3;

echo $a.' + '.$b.' = '.($a + $b);
echo '<br>';
echo $a.' - '.$b.' = '.($a - $b);
echo '<br>';
echo $a.' * '.$b.' = '.($a * $b);
echo '<br>';
echo $a.' / '.$b.' = '.($a / $b);
echo '<br>';
echo $a.' % '.$b.' = '.($a % $b);
echo '<br>';
echo '<hr>';

/* 4.4.7.
 * Postavite sada vrijednost varijabla iz prethodnog zadatka na
 * vrijednosti 4 i 2 i pononovno ucitajte stranicu
 */

$a = 4;
$b = 2;

echo $a.' + '.$b.' = '.($a + $b);
echo '<br>';
echo $a.' - '.$b.' = '.($a - $b);
echo '<br>';
echo $a.' * '.$b.' = '.($a * $b);
echo '<br>';
echo $a.' / '.$b.' = '.($a / $b);
echo '<br>';
echo $a.' % '.$b.' = '.($a % $b);
echo '<br>';
