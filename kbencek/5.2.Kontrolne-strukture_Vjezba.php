<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 5;

if ($a <=8) {
    echo 'varijabla a je jednaka ili manja od 8';
}

else {
    echo 'varijabla a je veca od 8';
    echo 'ovdje vijezbam do mraka';
}

$ime = 'facebook';
if (strlen($ime) > 10) {
    echo 'ime ima više od 10 znakova';
} else {
    echo 'ime ima manje ili jednako 10 znakova';
}

echo '<br> nizanje uvijeta && || <br>';
echo   'true && true   = true <br>'
     .'true && false  = false <br>'
     .'false && true  = false <br>'
     .'false && false = false <br>';

echo 'i &&<br>';
echo ' 1 && 1 = 1 <br>';
echo ' 1 && 0 = 0 <br>';
echo ' 0 && 1 = 0 <br>';
echo ' 0 && 0 = 0 <br>';

echo 'ili ||<br>';
echo ' 1 || 1 = 1 <br>';  
echo ' 1 || 0 = 1 <br>';
echo ' 0 || 1 = 1 <br>';
echo ' 0 || 0 = 0 <br>';

echo 'not !<br>';
echo '!1=0<br>';
echo '!0=1<br>';

echo '<hr>';

$ime = 'Facebook';
if (strlen($ime) < 5 || strlen($ime) >= 11) {
    echo 'lozinka mora imati najmanje 6 znakova i strogo manje od 11';
    echo '<br>lozinka '.ime.' ima '.strlen($ime).' znakova!';
} else {
echo 'lozinka je ispravna'; }