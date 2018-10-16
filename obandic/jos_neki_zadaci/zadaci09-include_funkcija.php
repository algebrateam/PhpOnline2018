<?php

// Funkcija koja izračunava prosjek ocjena

function prosjek($polje)
{
    $zbroj = 0;
    $i = 0;
    foreach ($polje as $broj) {
        $zbroj += $broj;
        $i++;
    }
    $prosjek = $zbroj / $i;

    return round($prosjek, 2); // PHP funkcija round() zaokružuje prosjek na dvije decimale
}
