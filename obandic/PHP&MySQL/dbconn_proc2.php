<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fakultet2';

$link2 = mysqli_connect($host, $user, $password, $database);

if ($link2) {
    mysqli_set_charset($link2, 'utf8');
} else {
    echo mysqli_connect_error();
    die('Neuspjela konekcija!');
}