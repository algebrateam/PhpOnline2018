<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$i=0;
$konacnibroj=100;
$ciljanizbroj=16;

while ($i <= $konacnibroj) 
{
    $zbroj += $i;
    $i++;
    
if($zbroj >= $ciljanizbroj) 
              
    break;
    
    echo $i.' ';
    
    
}
echo "<br>zbroj svih brojeva od 1 do broja "
     .$i
     .' je manji od '
     .$ciljanizbroj;