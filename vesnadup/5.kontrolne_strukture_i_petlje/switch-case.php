<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$naziv='Algebra'; //paziti na case sensitive

switch ($naziv) {
    case 'algebra': // primjer propadanja
    case 'Algebra':
        echo 'naziv je algebra'; 
        break; //ako se ne stavi break napravit će propadanje, break se stavlja kako bi se spriječilo propadanje
    case 'tesla': echo 'naziv je tesla'; 
        break;
    case 'split': echo 'naziv je split'; 
        break;
    case 'rijeka': echo 'naziv je rijeka'; 
        break;
    case 'osijek': echo 'naziv je osijek'; 
        break;
    default: echo 'naziv nije ni jedan od predloženih';
        break;
     }
$naziv='magenta';

echo '<hr>';

switch ($naziv) {
    case 'roza':
    case 'magenta':
    case 'crvena':
    case 'svijetlocrvena':
    case 'svijetloljubičasta':
        echo 'boja je crvena';
        break;

    default: echo 'Naziv nije ni jedan od predloženih';
        break;
}

