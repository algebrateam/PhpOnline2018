<?php

// UGNJEŽĐIVANJE PETLJI
// *****************************************************************************
// DVOSTRUKA PETLJA WHILE
// Vanjska petlja 3 puta poziva izvršavanje unutrašnje petlje koja se izvršava 5 puta.

$i = 1;
$j = 1;
while ($i <= 3) {
    while ($j <= 5) {
        echo "$i.$j ";
        $j++;
    }
    $j = 1;
    $i++;
    echo '<br>';
}

echo '<hr>';

// *****************************************************************************
// DVOSTRUKA PETLJA FOR
// Vanjska petlja 3 puta poziva izvršavanje unutrašnje petlje koja se izvršava 5 puta.

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i.$j ";
    }
    echo '<br>';
}

echo '<hr>';

// *****************************************************************************
// DVOSTRUKA PETLJA FOR
// Vanjska petlja 10 puta poziva izvršavanje unutrašnje petlje koja se izvršava 10 puta.

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j.' ';
    }
    echo '<br />';
}

echo '<hr>';

// *****************************************************************************
// DVOSTRUKA PETLJA FOR sa tablicom
// Vanjska petlja 10 puta poziva izvršavanje unutrašnje petlje koja se izvršava 10 puta.

echo '<table border="1" cellpadding="5">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr align="center" valign="middle">';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>';
        echo $i * $j.' ';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr>';

// *****************************************************************************
// DVOSTRUKA PETLJA FOR sa BREAK
// 11x11=121, kada se ispiše 90 uređeni par: BREAK

$counter = 1; // broji uređene parove
for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        echo '('.$i.', '.$j.') ';
        $counter++;
        if ($counter > 110) {
            break 2;
        }
    }
    echo '<br>';
}

echo '<hr>';

// *****************************************************************************
// DVOSTRUKA PETLJA FOR sa CONTINUE
// x-koordinata poprimit će vrijednosto od 0 do 10, a y-koordinata samo manje od 5.

for ($i = 0; $i <= 10; $i++) {
    echo '<br>';
    for ($j = 0; $j <= 10; $j++) {
        if ($j == 5) {
            continue 2;
        }

        echo '('.$i.', '.$j.') ';
    }
}

echo '<hr>';
