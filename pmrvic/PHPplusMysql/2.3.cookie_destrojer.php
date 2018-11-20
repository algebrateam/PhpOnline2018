<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//unset($_COOKIE); // radi li ovo?

setcookie('Niz2', null, 1);  // postavim da je expire date 1.1.1970.
setcookie('Niz', "trallala", 1);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "<hr>";
