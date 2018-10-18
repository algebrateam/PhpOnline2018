<?php

include_once 'Opel.php';
include_once 'IZafira.php';

$Z1 = new Opel('Zafira');
$Z1->boja = 'Zelena';
class Zafira extends Opel implements IZafira
{
    
	public function ispis()
    {
        printf($this->brojsjedala   
                );     
    }
	public $brojsjedala=7; // popstavi da vouzilo ima 7 sjedala !
}

$Z1->vozi();
$Z1->stani();
$Z1->skreni();
$Z1->ispis();
$Z1->opcija7();
echo $Z1->brojsjedala;