<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function sum($a,$b)
{
    return $a+$b;
}

function raz($a,$b)
{
    return $a-$b;
}

function mnoz($a,$b)
{
    return $a*$b;
}

function djel ($a,$b)
{
    return $a/$b;
}
      
function sve($a,$b)
{
    echo sum($a,$b);
    echo '<br>';
    echo raz($a,$b);
    echo '<br>';
    echo mnoz($a,$b);
    echo '<br>';
    echo djel($a,$b);
}

$j = 8;
$k = 4;

sve($j,$k);