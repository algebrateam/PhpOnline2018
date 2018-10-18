<?php

/*
 * Napisati funkciju koja vraća hrvatski naziv trenutnog mjeseca.
 * Parametar koji se prosljeđuje funkciji je rezultat funkcije date('n').
 */

function mjesec_hrvat($mj)
{
    $mj_array = [];
    $mj_array[1] = 'Siječanj';
    $mj_array[2] = 'Veljačaj';
    $mj_array[3] = 'Ožujak';
    $mj_array[4] = 'Travanj';
    $mj_array[5] = 'Svibanj';
    $mj_array[6] = 'Lipanj';
    $mj_array[7] = 'Srpanj';
    $mj_array[8] = 'Kolovoz';
    $mj_array[9] = 'Rujan';
    $mj_array[10] = 'Listopadu';
    $mj_array[11] = 'Studeni';
    $mj_array[12] = 'Prosinac';

    return $mj_array[$mj];
}
$mj = date('n');
echo 'Sada smo u mjesecu'.' '.mjesec_hrvat($mj);
