<?php

/* 
 * COOKIE PRIMJER
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "<hr>";

$polje=[1,2,3,4,5,6,7,89,8,4,5,41,55,5,52,5,"545,99",5,1,55,2,5,54,542,5,2];


setcookie('Naziv', 'Algebra', time()+1000);
setcookie('Niz', implode(",",$polje), time()+1000);
setcookie('Niz2', json_encode($polje), time()+1000);

