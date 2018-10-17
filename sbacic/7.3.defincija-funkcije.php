<?php

/*
 * Funkcije u PHP-u
 */
echo 'primjer funkcije<br>';
echo 'primjer funkcije<br>';
$timestamp = time();
echo $timestamp;  // broj milisekundi od 01.01.1970. ? provjeri!
echo '<br>Riječ Algebra ima '.strlen('Algebra').' znakova';
echo '<hr>';
$polje = ['Tesla', 'Bell', 'Edison'];
//$polje='jhjhsd';
if (is_array($polje)) {
    foreach ($polje as $key => $value) {
        echo '<br>Riječ '.$value.' ima '.strlen($value).' znakova';
    }
} else {
    echo 'nije array!';
}
echo '<br>'.date('F');
echo '<br>'.date('d.m.y');
echo '<br>'.date('d.m.Y');
echo '<br>'.date('m.Y.d');
function hr_dan()
{  // naša prilagođena funkcija
switch (date('w')) {      // vraća broj dana u tjednu 0-6
case 0: return 'Nedjelja';
break;
case 1: return 'Ponedjeljak';
break;
case 2: return 'Utorak';
break;
case 3: return 'Srijeda';
break;
case 4: return 'Četvrtak';
break;
case 5: return 'Petak';
break;
default: return 'Subota';
break;
}
}
echo '<br>Danas je '.strtolower(hr_dan());
echo '<hr>Ispis HTML tablice pomoću funkcije';
/*
 * // Tablica sa 2 reda i 3 stupca
 * <table>
 *   <tr>
 *    <td></td>
 *    <td></td>
 *    <td></td>
 *   </tr>
 *   <tr>
 *    <td></td>
 *    <td></td>
 *    <td></td>
 *   </tr>
 * </table>
 */
$boje = [['#105599', 'Maroon', '55%'],
 ['#FF0000', 'Crvena', '100%'],
  ['#105599', 'Maroon', '55%', 'QQQQQQQ'],
 ['#FF0000', 'xfgvx', '70%'],
  ['#105599', 'xcvbsd', '45%'],
 ['#34223', 'Crvdddena', '0%'],
  ['#2342', 'sss', '5%'],
 ['#32424', 'ssasa', '10%'],
  ['#23423', 'cccw', '45%'],
 ['#FF0000', 'uiuz', '100%'], ];
function ispistablice($b)
{
    echo '<table border=1>';
    foreach ($b as $boja) {
        echo '<tr>';
        foreach ($boja as $v) {
            echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
ispistablice($boje);
echo '<br>';
ispistablice($boje);
echo '<br>';
ispistablice($boje);
echo '<br>';
ispistablice($boje);
echo '<br>';
ispistablice($boje);
echo '<br>';

