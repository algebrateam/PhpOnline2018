<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Zadatak 1.
 * odgovor je pod a.
 * b. je logički operator a c. je operator nastavljanja niza
 */

//Zadatak 2. (za razmak između imena i prezimena ubaciti navodnike s razmakom, između varijabli

echo '<br>';
$a = 'Marko';
$b = 'Popović';
echo 'Moje ime je '.$a.' '.$b;

//Zadatak 3.

echo '<br>'; echo '<br>';
$a = 5;
$a = ++$a;
echo 'a='.$a;
$a = --$a - 1;
echo '<br>';
echo 'a='.$a;

//Zadatak 4.

echo '<br>'; echo '<br>';
$a = (float) $a;
echo 'a='.$a;
$z = 4.365;
echo '<br>';
var_dump($z);

//Zadatak 5.

echo '<br>'; echo '<br>';
$a += 5;
echo 'a='.$a;

//Zadatak 6. da ne otvaram novi php varijable će biti 'x' i 'y' umjesto 'a' i 'b'

echo '<br>'; echo '<br>';
$x = 7;
$y = 3;
echo $x.' + '.$y.' = '; echo $x + $y;
echo '<br>';
echo $x.' - '.$y.' = '; echo $x - $y;
echo '<br>';
echo $x.' * '.$y.' = '; echo $x * $y;
echo '<br>';
echo $x.' / '.$y.' = '; echo $x / $y;
echo '<br>';
echo $x.' % '.$y.' = '; echo $x % $y;

//Zadatak 7. sada su varijable 'x' i 'y' 4 i 2

echo '<br>'; echo '<br>';

$x = 4;
$y = 2;
echo $x.' + '.$y.' = '; echo $x + $y;
echo '<br>';
echo $x.' - '.$y.' = '; echo $x - $y;
echo '<br>';
echo $x.' * '.$y.' = '; echo $x * $y;
echo '<br>';
echo $x.' / '.$y.' = '; echo $x / $y;
echo '<br>';
echo $x.' % '.$y.' = '; echo $x % $y;
