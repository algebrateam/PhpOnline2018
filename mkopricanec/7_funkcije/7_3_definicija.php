<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'primjer funkcije <hr>';

echo ('primjer funkcije <hr>');

$timestamp=time();
echo $timestamp;
echo '<hr>';

echo 'Riječ Algebra ima '.strlen('Algebra').' znakova.';
echo '<hr>';

$polje=array('Tesla','Bell','Edison');

if (is_array($polje)) {
    foreach ($polje as $key => $value) {
        echo '<br>Riječ '.$value.' ima '.strlen($value).' znakova';
    }
} else {
    echo 'Nije array';
}
echo '<hr>';

echo date('f');
echo '<br>';
echo date('d.m.y');
echo '<br>';
echo date('d.m.Y');
echo '<br>';
echo date('m.Y.d');
echo '<br>';
echo date('F');