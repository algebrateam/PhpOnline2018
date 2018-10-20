<?php

include_once './Opel.php';
include_once './IAstra.php';
$A1 = new Opel('Astra');
$A1->boja = 'Plava';
class Astra extends Opel implements IAstra
{
    public $potrosnja = 3; // popstavi da troši tri litre na 100 km !
}
$A1->skreni();
echo'<br>';
$A1->vozi();
$A1->stani();
echo 'Trošim';
$A1->opcija3();
echo $A1->potrosnja;
echo 'l/km';
