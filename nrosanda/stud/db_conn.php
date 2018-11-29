<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fakultet';

$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
$conn -> exec("set names utf8");
 
$base = null;

