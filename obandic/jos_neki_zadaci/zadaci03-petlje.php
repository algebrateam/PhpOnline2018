<?php

// PETLJE
// *****************************************************************************
// Petlja WHILE ==== Ispis brojeva manjih od 10.

$i = 0;
while ($i < 10) {
    echo $i . ' ';
    $i++;
}

echo '<hr>';

// *****************************************************************************
// Petlja WHILE ==== Zbroj brojeva manji od 10.

$zbroj = 0;
$i = 1;
while ($i < 10) {
    $zbroj += $i;
    $i++;
}
echo $zbroj;

echo '<hr>';

// *****************************************************************************
// Petlja DO-WHILE ==== Ispis brojeva manjih od 10.

$i = 0;
do {
    echo $i . ' ';
    $i++;
} while ($i < 10);

echo '<hr>';

// *****************************************************************************
// Petlja DO-WHILE ==== Ispis brojeva većih od 10.

$i = 0;
do {
    echo $i . ' ';
    $i++;
} while ($i > 10); // petlja će se izvršiti samo za broj 0!!!

echo '<hr>';

// *****************************************************************************
// Petlja FOR ==== Ispis brojeva manjih od 10.

for ($i = 0; $i < 10; $i++) {
    echo $i . ' ';
}

echo '<hr>';

// *****************************************************************************
// Petlja FOR ==== Zbroj brojeva manjih od 10.

$zbroj = 0;
for ($i = 1; $i < 10; $i++) {
    $zbroj += $i;
}
echo $zbroj;

echo '<hr>';

// *****************************************************************************
// Petlja FOR ==== Ispis parnih brojeva manjih od 10.

for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i . ' ';
}

echo '<hr>';

// *****************************************************************************
// Prijevremeni izlazak iz petlje - WHILE-BREAK ==== Ispis brojeva manjih od 6.

$i = 0;
while ($i < 10) {
    echo $i . ' ';
    $i++;
    if ($i == 6) {
        break;
    }
}

echo '<hr>';

// *****************************************************************************
// Prijevremeni izlazak iz petlje - FOR-BREAK ==== Ispis brojeva manjih od 6.

for ($i = 0; $i < 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo $i . ' ';
}

echo '<hr>';

// *****************************************************************************
// Prijevremeni izlazak iz petlje - WHILE-BREAK ==== Zbroj brojeva manjih od 6.

$zbroj = 0;
$i = 0;
while ($i < 10) {
    $zbroj += $i;
    $i++;
    if ($i == 6) {
        break;
    }
}
echo $zbroj;

echo '<hr>';

// *****************************************************************************
// Preskakanje trenutnog kruga petlje - FOR-CONTINUE

for ($i = 0; $i < 10; $i++) {
    if ($i == 6) { // preskače broj 6
        continue;
    }
    echo $i . ' ';
}

echo '<hr>';