<?php

require_once './Astra.php';
require_once './Zafira.php';

$A1 = new Astra();
$A1->boja = 'Plava';
$Z1 = new Zafira();
$A2 = new Astra();
$Z2 = new Zafira();
echo '<h1>Usporedba vozila</h1>';

echo '<table border=1>'
.'<tr>'
    .'<td>'
    .'Astra'
    .'</td>'
    .'<td>'
    .'Zafira'
    .'</td>'
    .'</tr>'
    .'<tr>'
    .'<td>'
    .$A1->ispis()
    .'</td>'
    .'<td>'
    .$Z1->ispis()
    .'</td>'
    .'</tr>'
        .'<tr>'
    .'<td>'
    .$A2->ispis()
    .'</td>'
    .'<td>'
    .$Z2->ispis()
    .'</td>'
    .'</tr>'
    .'</table>';
