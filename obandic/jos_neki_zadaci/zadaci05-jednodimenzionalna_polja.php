<?php

// POLJA
// *****************************************************************************
// JEDNODIMENZIONALNO POLJE - 1.način

$ocjene = array('Hrvatski' => 4, 'Matematika' => 5, 'Engleski jezik' => 4);

$prosjek = ( $ocjene['Hrvatski'] + $ocjene['Matematika'] + $ocjene['Engleski jezik'] ) / 3;

echo 'Hrvatski: ' . $ocjene['Hrvatski'] . '<br>';
echo 'Matematika: ' . $ocjene['Matematika'] . '<br>';
echo 'Engleski jezik: ' . $ocjene['Engleski jezik'] . '<br>';
echo 'Prosjek ocjena je: ' . $prosjek;

echo '<hr>';


// *****************************************************************************
// JEDNODIMENZIONALNO POLJE - 2.način: ispis na jednostavniji način

$ocjene = array('Hrvatski' => 4, 'Matematika' => 5, 'Engleski jezik' => 4);

$prosjek = ( $ocjene['Hrvatski'] + $ocjene['Matematika'] + $ocjene['Engleski jezik'] ) / 3;

$zbroj = 0;
foreach ($ocjene as $predmet => $ocjena) {
    echo '$predmet: ' . $ocjena . '<br>';
    $zbroj += $ocjena;
}
echo 'Prosjek ocjena je: ' . $zbroj / 3;

echo '<hr>';