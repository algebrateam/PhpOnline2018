<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//prvi zadatak

$imena = ['Boeing', 'Rockefeller', 'Lockheed', 'Trump', 'Musk'];

foreach ($imena as $ime) {
    echo $ime;
    echo '<br>';
}

echo '<hr>';

//drugi zadatak

$imena = ['ime5' => 'Boeing', 'ime4' => 'Rockefeller', 'ime3' => 'Lockheed', 'ime2' => 'Trump', 'ime1' => 'Musk'];

foreach ($imena as $ime) {
    echo $ime;
    echo '<br>';
}

//treci zadatak

echo '<hr>';

sort($imena);
$j = count($imena);
for ($i = 0; $i < $j; $i++) {
    echo $imena[$i];
    echo '<br>';
}

//cetvrti zadatak

echo '<hr>';

ksort($imena);

$ii = 0;

foreach ($imena as $key => $ime) {
    echo 'Element broj '.$key.' ima vrijednost : '.$ime;
    echo '<br>';
}

//peti zadatak

echo '<hr>';

$polje = [];

for ($iii = 1; $iii <= 100; $iii++) {
    $polje[] = $iii;
}

foreach ($polje as $broj) {
    echo $broj.'<br>';
}
