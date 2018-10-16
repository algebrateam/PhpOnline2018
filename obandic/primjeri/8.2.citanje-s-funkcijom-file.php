<?php

$filename = './polaznici.txt';
// @greska: Fatal error:  Allowed memory size of 134217728 bytes exhausted
// (tried to allocate 52432896 bytes) in
// C:\Users\Algebra\Code\PhpOnline2018\pmrvic\8.2.citanje-s-funkcijom-file.php
// on line 7
//$filename='./test.txt'; file od 50MB

$datoteka = file($filename); // file() cita cijelu datoteku i prebacuje u array()

echo '<pre>';
print_r($datoteka);
echo '</pre>';

/*
foreach ($datoteka as $red) {
    echo $red;
}
*/
echo '<hr>';
echo 'treci red u datoteci: '.$datoteka[2];
