<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$datum_polje["Datum"] ="2018-09-24";
function date_trans ($Datum)
{
    $d=explode("-",$Datum);
return  $d[2].'.'.$d[1].'.'.$d[0];         // date ("d.m.Y",);
}  
    echo $date=date_trans($datum_polje["Datum"]);





