<?php

// if-else unutar if-else

$naziv = 'Geometrija';

if (strlen($naziv) > 10) {
    echo 'Naziv ima više od 10 slova.';
} else {
    if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
        echo 'Dužina naziva je u zadanom nizu.';
    } else {
        echo 'Naziv je prekratak.';
    }
}

echo '<hr>';

// Slično kao gore samo jednostavnije uz elseif

$naziv2 = 'Otorinolaringologija';

if (strlen($naziv2) > 10) {
    echo 'Naziv ima više od 10 slova.';
} elseif (strlen($naziv2) >= 5 && strlen($naziv2) <= 10) {
    echo 'Dužina naziva je u zadanom nizu.';
} else {
    echo 'Naziv je prekratak.';
}
