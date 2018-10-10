<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje_imena = ['Ante', 'Mate', 'Jure', 'Sime', 'Stipe'];

foreach ($polje_imena as $ime) {
    echo $ime.
  '<br>';
}

echo '<hr>';

//drugi zadatak

$polje_imena = [];

$polje_imena['ime5'] = 'Ante';
$polje_imena['ime4'] = 'Mate';
$polje_imena['ime3'] = 'Jure';
$polje_imena['ime2'] = 'Sime';
$polje_imena['ime1'] = 'Stipe';

foreach ($polje_imena as $key => $ime) {
    echo $key.'>'.$ime.
 '<br>';
}

  echo '<hr>';

  //3 zadatak

  $polje_imena = [];

  $polje_imena[] = 'Ante';
  $polje_imena[] = 'Mate';
  $polje_imena[] = 'Jure';
  $polje_imena[] = 'Sime';
  $polje_imena[] = 'Stipe';

  sort($polje_imena);

  for ($i = 0; $i < count($polje_imena); $i++) {
      echo $polje_imena[$i].
    '<br>';
  }

  echo '<hr>';

  //zadatak 4.

  $polje_imena['ime5'] = 'Ante';
  $polje_imena['ime4'] = 'Mate';
  $polje_imena['ime3'] = 'Jure';
  $polje_imena['ime2'] = 'Sime';
  $polje_imena['ime1'] = 'Stipe';

  ksort($polje_imena);

  foreach ($polje_imena as $key => $ime) {
      echo 'Element broj '.$key.' ima vrijednost : '.$ime;
      echo '<br>';
  }

echo '<hr>';

// zadatak 5

$polje_brojeva = [];

for ($i = 1; $i <= 100; $i++) {
    $polje_brojeva[] = $i;
}

foreach ($polje_brojeva as $broj) {
    echo $broj.
  '<br>';
}
