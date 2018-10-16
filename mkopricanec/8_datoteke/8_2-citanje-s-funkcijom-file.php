<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$filename = './polaznici.txt';
$datoteka = file($filename); //file() cita cijelu datoteku i prebacuje u array()

echo '<pre>';
print_r($datoteka);
echo '</pre>';
echo '<hr>';

foreach ($datoteka as $red) {
    echo $red;
    echo '<br>';
}

echo '<hr>';
echo $datoteka[2];
