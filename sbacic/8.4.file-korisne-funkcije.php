<?php

/*
 * is_file() // bool
 * is_dir()
 * mkdir()
 * rmdir()
 * unset()
 */
if (is_file('./test.txt')) {
    echo 'Datoteka test.txt postoji';
    echo '<br> velicina filea je '.((filesize('./test.txt') / 1000)).' kB';
} else {
    echo 'Datoteka test.txt ne postoji';
}
echo '<hr>';
$filename = '../pmrvic';
if (is_dir($filename)) {
    echo 'Direktorij '.$filename.' postoji';
//echo '<br> velicina filea je '.((filesize('./test.txt')/1000)).' kB';
} else {
    echo 'Direktorij '.$filename.' ne postoji';
}
$dirname = 'Novitempdir';
if (is_dir($dirname)) {
    echo '<br>Direktorij '.$dirname.' već postoji';
} else {
    mkdir($dirname, 0777); //ukoliko vec ne postoji napravi novi
}
$olddirname = 'Novitempdir';
if (is_dir($dirname)) {
    rmdir($olddirname);  // brisanje direktorija
    echo '<br>Direktorij '.$olddirname.' sam upravo obrisao!';
} else {
    echo '<br>direktorij ne postoji, nemam što brisati';
}
//  za brisanje datoteke koristiti unset() ili unlink()

