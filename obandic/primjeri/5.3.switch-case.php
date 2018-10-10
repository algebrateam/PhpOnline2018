<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$naziv = 'magenta';  // paziti na case-sensitive slucaj

switch ($naziv) {
    case 'algebra':   // primjer propadanja
    case 'Algebra':
        echo 'naziv je Algebra';
        break;
    case 'tesla': echo 'naziv je tesla';
        break;
    case 'split': echo 'naziv je split';
        break;
    case 'rijeka': echo 'naziv je rijeka';
        break;
    case 'roza':
    case 'magenta':
    case 'crvena':
    case 'svjetlocrvena':
    case 'svjetloljubicasta':
        echo 'boja je crvena';
        break;
    default: echo 'Naziv nije ni jedan od predlozenih';
        break;
}
