<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 3; //globalna varijabla

function inc_a()
{
    global $a; //lokalna varijabla

    echo $a;
}

echo $a;
inc_a();
