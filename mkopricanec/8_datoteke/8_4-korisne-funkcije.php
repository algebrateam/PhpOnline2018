<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (is_file('./test.txt')) {
    echo 'Datoteka test.txt postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize('./test.txt') / 1000)).'kB.';
    echo '<hr>';
} else {
    echo 'Datoteka test.txt ne postoji.';
    echo '<hr>';
}

if (is_dir('./test.txt')) {
    echo 'Direktorij test.txt postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize('./test.txt') / 1000)).'kB.';
    echo '<hr>';
} else {
    echo 'Datoteka test.txt ne postoji.';
    echo '<hr>';
}

$filename = './test.txt';

if (is_file($filename)) {
    echo 'Datoteka '.$filename.' postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize($filename) / 1000)).'kB.';
    echo '<hr>';
} else {
    echo 'Datoteka '.$filename.' ne postoji.';
    echo '<hr>';
}

if (is_dir($filename)) {
    echo 'Direktorij '.$filename.' postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize($filename) / 1000)).'kB.';
    echo '<hr>';
} else {
    echo 'Datoteka '.$filename.' ne postoji.';
    echo '<hr>';
}

$dirname = 'Novitempdir';

if (is_dir($dirname)) {
    echo 'Direktorij '.$dirname.' postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize($filename) / 1000)).'kB.';
    echo '<hr>';
} else {
    mkdir($dirname, 0777);
    echo 'Direktorij '.$dirname.' je napravljen.';
    echo '<hr>';
}

$olddirname = 'Novitempdir';

if (is_dir($olddirname)) {
    echo 'Direktorij '.$olddirname.' je izbrisan.';
    rmdir($olddirname);
    echo '<hr>';
} else {
    echo 'Direktorij '.$olddirname.' ne postoji.';
    echo '<hr>';
}

if (is_dir($dirname)) {
    echo 'Direktorij '.$dirname.' postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize($filename) / 1000)).'kB.';
    echo '<hr>';
} else {
    mkdir($dirname, 0777);
    echo 'Direktorij '.$dirname.' je napravljen.';
    echo '<hr>';
}

if (is_dir($olddirname)) {
    echo 'Datoteka '.$olddirname.' je izbrisana.';
    unset($olddirname);
    echo '<hr>';
} else {
    echo 'Datoteka '.$olddirname.' ne postoji.';
    echo '<hr>';
}

if (is_dir($dirname)) {
    echo 'Direktorij '.$dirname.' postoji.';
    echo '<br>';
    echo 'Velicina datoteke je '.((filesize($filename) / 1000)).'kB.';
    echo '<hr>';
} else {
    mkdir($dirname, 0777);
    echo 'Direktorij '.$dirname.' je napravljen.';
    echo '<hr>';
}

if (is_dir($olddirname)) {
    echo 'Datoteka '.$olddirname.' je izbrisana.';
    unlink($olddirname);
    echo '<hr>';
} else {
    echo 'Datoteka '.$olddirname.' ne postoji.';
    echo '<hr>';
}
