<?php

/* 
 * Pozivamo includanu funkciju
 */

include_once './7.3.include-funkcije.php';

$elem1 = ['ime' => 'Isabelle', 'prezime' => 'Huppert'];
$elem2 = ['ime' => 'Juliette', 'prezime' => 'Binoche'];
$elem3 = ['ime' => 'Marion', 'prezime' => 'Cotillard'];
$elem4 = ['ime' => 'Andrey', 'prezime' => 'Tautou'];
$elem5 = ['ime' => 'Sophie', 'prezime' => 'Marceau'];

$multi_array = ['glumica1' => $elem1, 'glumica2' => $elem2, 'glumica3' => $elem3, 'glumica4' => $elem4, 'glumica5' => $elem5];

ispistablice($multi_array);

