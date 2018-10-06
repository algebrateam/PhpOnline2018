<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var = 'Algebra';  // postavili smo string

echo $var;  // ispisujemo varijablu

$var = 35;  // postavli cjelobrojnu

echo $var;

unset($var);  // varijablu poništavamo

echo $var;

echo '<br>';
$naziv_var = 'iznos';
$$naziv_var = 99;   // kao da je napisano $iznos=99  // konfuzno !!!, izbjegavati
echo $iznos;

$a = 'Algebra';  // varijabla $a dobija vrijednost stringa
$b = &$a;        // varijabla $b pokazuje na adresu varijable $a

echo $b;

$a = 3.14;

echo '<br>'.$b;   // $b i dalje pokazuje na vrijednost zapisanu u varijabli $a

//----------------------------------

/*
 * Konstante
 */

define('NAZIV', 'Arblegla');  // Kontanta, ne mijenja se, broj pi, PDV, fiksna ip adresa...
echo NAZIV;
// NAZIV='jkbjkbajksbdj';  // Ne prolazi ! ne možemo mijenjati konstante
echo NAZIV;
