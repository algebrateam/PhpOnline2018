<?php

$naziv = 'geometrija';

switch ($naziv) {
    case 'algebra':
        echo 'Naziv je algebra.';
    break;

    case 'aritmetika':
        echo 'Naziv je aritmetika.';
    break;

    case 'geometrija':
        echo 'Naziv je geometrija.';
    break;

    case 'matematička logika':
        echo 'Naziv je matematička logika.';
    break;
}

echo '<hr>';

// Isto kao gore samo bez vitičastih zagrada i sa endswitch

$naziv2 = 'algebra';

switch ($naziv2):
    case 'algebra':
        echo 'Naziv je algebra.';
    break;

    case 'aritmetika':
        echo 'Naziv je aritmetika.';
    break;

    case 'geometrija':
        echo 'Naziv je geometrija.';
    break;

    case 'matematička logika':
        echo 'Naziv je matematička logika.';
    break;
endswitch;

echo '<hr>';

// isto kao gore, sa default

$naziv3 = 'tirkizna';

switch ($naziv3) {
    case 'svijetlozelena':
    case 'tamnozelenazelena':
    case 'zelena':
    case 'tirkizna':
    case 'teal':
        echo 'Boja je zelena.';
    break;

    case 'žuta':
        echo 'Boja je žuta.';
    break;

    case 'plava':
        echo 'Boja je plava.';
    break;

    case 'ljubičasta':
        echo 'Boja je ljubičasta.';
    break;

    default:
        echo 'Takve boje nema.';
}

echo '<hr>';

// slično kao gore, sa default

$naziv4 = 'crvena';

switch (4) {
    case 'svijetlozelena':
    case 'tamnozelenazelena':
    case 'zelena':
    case 'tirkizna':
    case 'teal':
        echo 'Boja je zelena.';
    break;

    case 'žuta':
        echo 'Boja je žuta.';
    break;

    case 'plava':
        echo 'Boja je plava.';
    break;

    case 'ljubičasta':
        echo 'Boja je ljubičasta.';
    break;

    default:
        echo 'Takve boje nema.';
}

echo '<hr>';
