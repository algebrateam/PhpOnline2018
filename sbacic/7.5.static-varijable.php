<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inc_a()
{
    static $a = 0;
    $a++;  // lokalna varijabla funkcije
    echo $a;
}
inc_a();
inc_a();
inc_a();

