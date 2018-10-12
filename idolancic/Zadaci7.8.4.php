<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function param()
{
    $parametars = func_get_args();
    
    foreach($parametars as $param)
    {
        if(is_int($param))
        {
            echo $param.' je broj';
            echo '<br>';
        }
        else
        {
            echo $param.' je string';
            echo '<br>';
        }

   
    }
}

echo param('Ivan',2,4,5);