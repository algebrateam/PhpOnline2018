<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 3;  // "globalna" varijabla

function inc_a()
{
    //$a=7;  // lokalna varijabla funkcije
    global $a;  // ovime prebacujemo globalne varijable unutar lokalnog scopea funkcije

    echo $a;
}

echo $a;

inc_a();
