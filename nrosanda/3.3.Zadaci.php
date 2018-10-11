<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 3.3.1. Definirajte nekoliko razlicitih brojcanih varijabli i ispisite ih./
 */

$a = 5;
$b = 8;
$c = 11;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';

/* 3.3.2. Definirajte varijablu $a = 3 i $b = 5. Koristenjem pomocne
* varijable $pom zamijenite njihove sadrzaje
*/

$a = 3;
$b = 5;
$pom = $a;
$a = $b;
$b = $pom;

echo $a;
echo '<br>';
echo $b;
echo '<br>';

/* 3.3.3. Kreirajte varijablu s tekstualnom vrijednoscu. Dodijelite joj vrijednost
 vaseg imena i prezimena. Ispisite vrijednost tih varijabli */

$ime = 'Nancy';
$prezime = 'Rosanda';

echo $ime;
echo '<br>';
echo $prezime;
