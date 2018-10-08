<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ime = 'mercedes';

switch ($ime) {
    case 'Mercedes':   // primjer propadanja
    case 'Mercedes':
        echo 'ime je Mercedes';
        break;
    case 'Audi': echo 'ime je Audi';
        break;
    case 'Bmw': echo 'ime je Bmw';
        break;
    case 'Lexus': echo 'Ime je Lexus';
        break;
    case 'bjela':
    case 'magenta':
    case 'zuta':
    case 'crvena':
    case 'ljubicasta':
        echo 'boja je crna';
        break;
    default: echo 'Ime nije ni jedno od predlozenih';
        break;
}