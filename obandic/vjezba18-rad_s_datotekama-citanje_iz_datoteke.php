<?php

//8.5 Zadatak 1.

$filename = 'vjezba18-popis_lektire_za_maturu.txt';

$datoteka = file($filename);

foreach ($datoteka as $brojred => $red) {
    echo ($brojred + 1) . '. ' . $red . '<br>';
}