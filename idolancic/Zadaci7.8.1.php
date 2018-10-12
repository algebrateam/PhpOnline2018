<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function hr_mjesec($mj)
{
    $mj_array = array();
    $mj_array[1] = 'Sijecanj';
    $mj_array[2] = 'Veljaca';
    $mj_array[3] = 'Ozujak';
    $mj_array[4] = 'Travanj';
    $mj_array[5] = 'Svibanj';
    $mj_array[6] = 'Lipanj';
    $mj_array[7] = 'Srpanj';
    $mj_array[8] = 'Kolovoz';
    $mj_array[9] = 'Rujan';
    $mj_array[10] = 'Listopad';
    $mj_array[11] = 'Studeni';
    $mj_array[12] = 'Prosinac';
    
    return $mj_array[$mj];
}

$mj = date('n');

echo hr_mjesec($mj);

