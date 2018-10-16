<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'primjer funkcije <hr>';

echo 'primjer funkcije <hr>';

$timestamp = time();
echo $timestamp;
echo '<hr>';

echo 'Riječ Algebra ima '.strlen('Algebra').' znakova.';
echo '<hr>';

$polje = ['Tesla', 'Bell', 'Edison'];

if (is_array($polje)) {
    foreach ($polje as $key => $value) {
        echo '<br>Riječ '.$value.' ima '.strlen($value).' znakova';
    }
} else {
    echo 'Nije array';
}
echo '<hr>';

echo date('f');
echo '<br>';
echo date('d.m.y');
echo '<br>';
echo date('d.m.Y');
echo '<br>';
echo date('m.Y.d');
echo '<br>';
echo date('F');
echo '<hr>';

function hr_dan()
{
    switch (date('w')) {
        case 0:
            return 'Nedjelja';
            break;
        case 1:
            return 'Ponedjeljak';
            break;
        case 2:
            return 'Utorak';
            break;
        case 3:
            return 'Srijeda';
            break;
        case 4:
            return 'Četvrtak';
            break;
        case 5:
            return 'Petak';
            break;
        default:
            return 'Subota';
            break;
    }
}

echo 'Danas je '.strtolower(hr_dan());

echo '<hr>Ispis HTML tablice pomoću funkcije';

//<table>
//    <tr>
//    <td></td>
//    <td></td>
//    <td></td>
//    </tr>
//    <tr>
//    <td></td>
//    <td></td>
//    <td></td>
//    </tr>
//</table>

echo '<hr>';

$boje = [
    ['#105599', 'Maroon', '55%'],
    ['#FF0000', 'Crvenu', '100%'],
    ['#105599', 'Maroon', '55%', 'QQQQQQQ'],
    ['#105599', 'xfgvx', '70%'],
    ['#34223', 'xfgvx', '90%'],
    ];

function ispistablica($boje)
{
    echo '<table border = 1>';
    foreach ($boje as $boja) {
        echo '<tr>';
        foreach ($boja as $v) {
            echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

ispistablice($boje);
