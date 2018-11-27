<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fakultet';

$link = mysqli_connect($host, $user, $password, $database);

if ($link) {
    mysqli_set_charset($link, 'utf8');
} else {
    echo mysqli_connect_error();
    die('Neuspjela konekcija!');
}