<?php

include './Astra.php';
include './Zafira.php';

<<<<<<< HEAD
$A1=new Astra();
$A1->boja='Plava';
$Z1= new Zafira();
=======
$A1 = new Astra();
$Z1 = new Zafira();
>>>>>>> 0af81ea12d48467a1829bf8e438a737ae4048a72

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
    .'</table>';
