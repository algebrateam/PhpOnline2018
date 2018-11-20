<?php
session_start();


echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<hr>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "<hr>";


$_SESSION['mojavarijabla']='neka moja vrijednost';
$_SESSION['mojbroj']='123456';