<?php

/*
 * 
 * 
 */

echo 'Vjeba Aritmetickih Operatoara <br>';

echo 5 + 3 * 2;

echo '<br>';

echo (5 + 3) * 2;


echo '<br>';
echo 20 % 2;

echo '<br>';
echo 27 % 2;

echo '<br>';
echo 35 % 13;

echo '<br>';

$brojgostiju = 27;
$brojsoba = 22;

echo 'Došlo nam je'
 . $brojgostiju
 . 'gostiju, možemo ih smjestiti u'
 . (int) ($brojgostiju / $brojsoba)
 . 'soba po'
 . $brojsoba
 . 'gostiju, a ostalo nam je'
 . $brojgostiju % $brojsoba
 . 'gostiju bez soba.';

