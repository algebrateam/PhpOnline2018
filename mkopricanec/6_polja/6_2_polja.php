<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje = ['Tesla', 'Edison', 'Bell'];

echo '<hr>Ispis pomoću print_r():<br>';
echo '<pre>';
print_r($polje); //za potrebe debugginga
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

$polje[3] = 'Penkala';

echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

unset($polje[2]);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

$polje[] = 3.14;
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

array_push($polje, true);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

array_pop($polje);
array_pop($polje);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

unset($polje);
echo '<hr>Izbrisano polje';

$polje = ['Z1'=>'Tesla', 'Z2'=>'Edison', 'Z3'=>'Bell'];
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

echo '<br>Ispis Z2:'.$polje['Z2'];

unset($polje);
echo '<hr>Izbrisano polje';

$polje = ['Z1'=>'Tesla', 'Z2'=>'Edison', 'Z3'=>'Bell'];
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

$polje = ['Tesla', 'Edison', 'Bell', 3.14, true, 34=>true, 'budan'=>false, 55];
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';

$polje = ['Z1'=>'Tesla', 'Z2'=>'Edison', 'Stranci'=>['Einstein', 'Bohr', 'Curie']];
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje);
echo '</pre>';
