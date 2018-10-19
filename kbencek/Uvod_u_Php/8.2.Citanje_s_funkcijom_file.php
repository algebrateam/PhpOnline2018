
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = './polaznici.txt';
$datoteka = file($filename);

echo '<pre>';
print_r($datoteka);
echo '</pre>';

foreach ($datoteka as $red) {
    echo $red;
}
echo '<hr>';
echo $datoteka[2];
