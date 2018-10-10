<?php

//Zadatak 5.7.2. Napisati program koji koristi dvije varijable i definirajte 
//vrijednosti. Ako je a veća od b uvećajte a za jedan, a ako je veća b, umanjite
//a za jedan. Na kraju ispišite obje vrijednosti

$a = 32;
$b = 30;
if ($a > $b) {
    $a++;
} else {
    $a--;
}
echo $a.'<br>'.$b;

