<?php

require_once 'autoload.php';

use geometry\Duzina;
use geometry\Tocka;
use geometry\Trokut;

$A = new Tocka(-21, -5);
$B = new Tocka(0, -5);
$C = new Tocka(-15, 3);
$D = new Tocka(-12, -10);

echo '<br>Točka A ima koordinate ' . $A->tostring();
echo '<br>Točka B ima koordinate ' . $B->tostring();
echo '<br>Točka C ima koordinate ' . $C->tostring();
echo '<br>Točka D ima koordinate ' . $D->tostring();

echo '<hr>';

$BC = new Duzina($B, $C);
echo $BC->tostring();

echo '<br><br>';

$AC = new Duzina($A, $C);
echo $AC->tostring();

echo '<br><br>';

$AB = new Duzina($A, $B);
echo $AB->tostring();

echo '<br><br>';

$BD = new Duzina($B, $D);
echo $BD->tostring();

echo '<br><br>';

$AD = new Duzina($A, $D);
echo $AD->tostring();

echo '<hr>';

$trokut1 = new Trokut($A, $B, $C);
echo $trokut1;                      // Jednostavniji ispis pomoću magic metode __toString()

echo '<br><br>';

$trokut2 = new Trokut($A, $D, $B);
echo $trokut2;