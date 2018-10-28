<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'autoload.php';
use primar\Krug;
use primar\Linija;
use primar\Tocka;

//require_once 'ITocka.php';
//require_once 'Tocka.php';
//require_once 'Linija.php';
//require_once 'Krug.php';

$T1 = new Tocka(0, 0);
$T2 = new Tocka(4, 0);
$T3 = new Tocka(3, 4);

echo '<br>T1:'.$T1->tostring();
echo '<br>T2:'.$T2->tostring();

echo '<hr>';
$L1 = new Linija($T1, $T2);
echo $L1->tostring();

echo '<hr>';
$L2 = new Linija($T1, $T3);
echo $L2->tostring();

echo '<hr>';
$L3 = new Linija($T2, $T3);
echo $L3->tostring();
echo '<br>Ispis pomoći magic metode __toString():<br>';
echo $L3;

echo '<hr>';
$Krug1 = new Krug($T1, $T2);  // 0,0-4,0
echo $Krug1;

echo '<hr>';
$Krug2 = new Krug($T2, $T3);  // 0,0-4,0
echo $Krug2;

echo '<hr>';
$Krug3 = new Krug($T1, 5);  // središte: 0,0  redijus:5
echo $Krug3;

echo '<hr>';
echo new Krug($T1, 7);  // središte: 0,0  redijus:5
