<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'Aritmeticki operatori <br>';

//   postoje + - * / %

echo 2+3*4;

echo '<br>';

echo (2+3)*4;

echo '<br>';
echo 40%2;  # 40/2=20 ostatak ili modulo je 0

echo '<br>';
echo 41%2;  # 40/2=20 ostatak ili modulo je 1

echo '<br>';
echo 38%13;  # 38/13=2 ostatak ili modulo je 12

echo '<br>';
$brojucenika=150;
$kapacitetucionice=17;
echo 'Ukoliko imamo'
.$brojucenika
        .' učenika, možemo ih smjestiti u '
. (int)($brojucenika/$kapacitetucionice)
        .' učionica po '
        .$kapacitetucionice
        .' učenika, a ostatak nam je'
        .$brojucenika%$kapacitetucionice
        .' učenika neraspoređeno.';
//echo 150%17;  # 38/13=2 ostatak ili modulo je 