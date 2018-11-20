<?php

/* 
 * COOKIE PRIMJER
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "<hr>";

echo 'Ime ove obrazovne ustanove je: '.$_COOKIE['Naziv'];

$polje=explode(",",$_COOKIE['Niz']);
echo "<pre>";
print_r($polje);
echo "</pre>";
echo "<hr>";

echo $_COOKIE['Niz2'];

echo "<hr>";

$polje2=json_decode($_COOKIE['Niz2']);
echo "<pre>";
print_r($polje2);
echo "</pre>";
echo "<hr>";





