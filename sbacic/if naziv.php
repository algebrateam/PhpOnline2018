<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$naziv = 'Algebra';

if($naziv == 'PHP'){
echo 'Varijabla ima vrijednost PHP';

echo 'Varijabla ima neku drugu vrijednost';}
   
echo '<hr>';

$a = 1;
        
if($a <= 2)
{
    echo 'Varijabla a je manja ili jednaka broju 2';
    $a++;
}       
else
{
    echo 'Varijabla a je veća od broja 2';
    $a = 1;
}    

echo '<hr>';

$naziv = 'Algebra';

if(strlen($naziv) > 10)
{
    echo 'Naziv ima više od 10 znakova';
}

echo '<br> nizanje uvjeta && || <br>';
echo 'true && true = true <br>';
echo 'true && false =false <br>';
echo 'false && true =false <br>';
echo 'false $$ false = false <br>';

echo '1 && 1 = 1 <br>';
echo '1 && 0 = 0 <br>';
echo '0 $$ 1 = 0 <br>';
echo '0 && 0 = 0 <br>';

echo 'ili <br>';
echo '1 || 1 = 1 <br>';
echo '1 || 0 = 0 <br>';
echo '0 || 1 = 0 <br>';
echo '0 || 0 = 0 <br>';

echo 'not !<br>';
echo '!1=0<br>';
echo '!0=1<br>';

echo '<hr>';

$naziv= 'AlgebraXXX';
if(strlen($naziv)<5 || strlen($naziv)>=11){
    echo 'lozinka mora imati najmanje 6 znakova i strogo manje od 11';
echo '<br>lozinka '.$naziv.' ima '.strlen($naziv).' znakova!';
    
}
else{
    echo 'lozinka je ispravna';
}
