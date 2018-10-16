<?php

// POLJA
// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - zapis 1. način

$ocjene = array('Duje' => array('Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Andrea' => array('Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Vita' => array('Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5),
    'Šime' => array('Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5));

echo '<pre>';
print_r($ocjene);
echo '</pre>';

echo '<hr>';

// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - zapis 2. način

$elem1 = array('Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4);
$elem2 = array('Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4);
$elem3 = array('Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5);
$elem4 = array('Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5);

$ocjene = array('Duje' => $elem1, 'Andrea' => $elem2, 'Vita' => $elem3, 'Šime' => $elem4);

echo '<pre>';
print_r($ocjene);
echo '</pre>';

echo '<hr>';

// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - zapis 3. način

$elem1 = ['Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4];
$elem2 = ['Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4];
$elem3 = ['Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5];
$elem4 = ['Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5];

$ocjene = ['Duje' => $elem1, 'Andrea' => $elem2, 'Vita' => $elem3, 'Šime' => $elem4];

echo '<pre>';
print_r($ocjene);
echo '</pre>';

echo '<hr>';

// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - zapis 4. način

$ocjene['Duje'] = ['Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4];
$ocjene['Andrea'] = ['Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4];
$ocjene['Vita'] = ['Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5];
$ocjene['Šime'] = ['Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5];

echo '<pre>';
print_r($ocjene);
echo '</pre>';

echo '<hr>';

// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - ispis pomoći FOREACH

$ocjene = array('Duje' => array('Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Andrea' => array('Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Vita' => array('Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5),
    'Šime' => array('Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5));

foreach ($ocjene as $ime => $ucenik) {
    echo $ime . '<br>';
    $zbroj = 0;
    foreach ($ucenik as $ocjena) {
        echo $ocjena . ' ';
        $zbroj += $ocjena;
    }
    echo '<br>Prosjek ocjena je: ' . ($zbroj / 3) . '<br><br>';
}

echo '<hr>';

// *****************************************************************************
// VIŠEDIMENZIONALNO POLJE - ispis pomoći FOREACH i tablice

$ocjene = array('Duje' => array('Hrvatski' => 3, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Andrea' => array('Hrvatski' => 4, 'Matematika' => 3, 'Engleski jezik' => 4),
    'Vita' => array('Hrvatski' => 5, 'Matematika' => 4, 'Engleski jezik' => 5),
    'Šime' => array('Hrvatski' => 5, 'Matematika' => 5, 'Engleski jezik' => 5));

echo '<table border="1" cellpadding="5">';
echo '<tr>
<th></th>
<th>Hrvatski</th>
<th>Matematika</th>
<th>Engleski jezik</th>
<th>Prosjek</th>
</tr>';
foreach ($ocjene as $ime => $ucenik) {
    echo "<tr>";
    echo "<th>$ime</th>";
    $zbroj = 0;
    foreach ($ucenik as $ocjena) {
        echo "<td>$ocjena</td>";
        $zbroj += $ocjena;
    }
    echo "<td>" . $zbroj / 3 . "</td>";
    echo "</tr>";
}
echo '</table>';

echo '<hr>';