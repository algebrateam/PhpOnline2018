<?php

/*
 * Nađi x kod kojega je umnižak sa y jednak ili veći 36
 * 0 0 0 0 0 0 0 0 0 0 0
0 1 2 3 4 5 6 7 8 9 10
0 2 4 6 8 10 12 14 16 18 20
0 3 6 9 12 15 18 21 24 27 30
0 4 8 12 16 20 24 28 32 36 40  // <-- Ovaj tražim
0 5 10 15 20 25 30 35 40 45 50
0 6 12 18 24 30 36 42 48 54 60
0 7 14 21 28 35 42 49 56 63 70
0 8 16 24 32 40 48 56 64 72 80
0 9 18 27 36 45 54 63 72 81 90
0 10 20 30 40 50 60 70 80 90 100
 */

echo '<hr> Primjer prekini x čim nadješ umnožak veći od 36<br> ';
$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        // echo '('.$x.','.$y.') ';
        echo $x * $y.' ';
        if (($x * $y) >= 36) {
            break 2;
        }  // break DVIJE PETLJE !!!
        $y++;
    }
    echo '<br>';
    $y = 0;
    $x++;
}

echo '<hr> Primjer bez prekida<br> ';

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        echo $x * $y.' ';
        $y++;
    }
    echo '<br>';
    $y = 0;
    $x++;
}
echo '<hr> Primjer sa continue, izbacimo sve izmedju 15 i 30<br> ';

$x = 0;
$y = 0;

while ($x <= 10) {
    while ($y <= 10) {
        // echo '('.$x.','.$y.') ';

        $y++;
        if (($x * $y) >= 15 && ($x * $y) < 30) {
            continue;
        }
        echo $x * $y.' ';
    }
    echo '<br>';
    $y = 0;
    $x++;
}
