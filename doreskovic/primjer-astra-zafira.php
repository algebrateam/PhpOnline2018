<?php

include_once './Astra.php';
include_once './Zafira.php';

$A1 = new Astra();
$A1->boja = 'Plava';
$Z1 = new Zafira();
$Z1->boja = 'Zelena';
echo '<h1>Usporedba vozila</h1>';

echo '<table border=1>'
.'<tr>'
    .'<td>'
    .'Boja Astre'
    .'</td>'
    .'<td>'
    .'Boja Zafire'
    .'</td>'
    .'</tr>'
    .'<tr>'
    .'<td>'
    .$A1->boja
    .'</td>'
    .'<td>'
    .$Z1->boja
    .'</td>'
    .'</tr>'
    .'</table>';

	
	