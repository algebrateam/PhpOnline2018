<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function zbroj (){
    $sum=0;
    foreach (func_get_args() as $value){
        
        $sum+=$value;
    }
    return $sum;
}

echo zbroj (4,10);

echo '<br>' , '<hr>';

echo zbroj (5);

echo '<br>' , '<hr>';

echo zbroj ();

echo '<br>' , '<hr>';

echo zbroj(4,7,9);

echo zbroj(2,2,2,2,2,2,2);

echo '<hr>';

function brojpara(){
    echo '<br> Broj poslanih parametara je'. func_num_args();
    
}