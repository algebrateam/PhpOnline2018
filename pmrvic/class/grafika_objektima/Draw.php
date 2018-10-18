<?php

require_once 'autoload.php';
require_once './class/ITocka.php';
require_once './class/Tocka.php';
require_once './class/Linija.php';

use primar\Tocka;

$T1= new Tocka(0,0);
$T2= new Tocka(3,4);

echo "<br>T1:".$T1->tostring();
echo "<br>T2:".$T2->tostring();

echo "<hr>";
$L1= new Linija($T1,$T2);
echo $L1->tostring();


