<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje=array('Tesla','Edison','Bell');

echo '<hr>Ispis pomoću print_r():<br>';
echo '<pre>';
print_r($polje); #za potrebe debugginga
echo '</pre>';

echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

echo '<hr>Pojedinačni ispis:<br>';
echo $polje[0];
echo '<br>';
echo $polje[1];
echo '<br>';
echo $polje[2];

$polje[3]='Penkala';

echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

unset($polje[2]);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

$polje[]=3.14;
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';