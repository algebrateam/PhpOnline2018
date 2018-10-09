<?php
echo'1. Zadatak u poglavlju 6.7.';
//Napisati program koji upisuje 5 imena u polje $imena
//i ispisuje ih s pomoću petlje foreach
echo '<br>';
echo '<br>';
echo 'To su sljedeća imena:<br>';
echo '<br>';
$imena=array('Franko', 'Ana', 'Matija', 'Danijela', 'Goran');
foreach($imena as $key)
{   
 echo $key.'<br>'; 
}

