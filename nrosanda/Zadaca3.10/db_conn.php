<?php
$host ='localhost';  
$user ='root';
$password ='';
$database ='fakultet';
$mysqli = new mysqli($host, $user, $password, $database);
$mysqli-> set_charset('utf8');

if ($mysqli) {

} else {
    echo mysqli_connect_error();
    die('Neuspjela konekcija!');
}