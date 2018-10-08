<?php

// Višedimenzionalno polje, ispis pomoću print_r

$elem1 = array('ime' => 'Isabelle', 'prezime' => 'Huppert');
$elem2 = array('ime' => 'Juliette', 'prezime' => 'Binoche');
$elem3 = array('ime' => 'Marion', 'prezime' => 'Cotillard');
$elem4 = array('ime' => 'Andrey', 'prezime' => 'Tautou');
$elem5 = array('ime' => 'Sophie', 'prezime' => 'Marceau');

$multi_array = array('glumica1' => $elem1, 'glumica2' => $elem2, 'glumica3' => $elem3, 'glumica4' => $elem4, 'glumica5' => $elem5);

echo '<pre>';
print_r($multi_array);
echo '</pre>';

echo '<hr>';
# ******************************************************************************
// Isto kao gore samo ispis pomoću petlje foreach

asort($multi_array);

foreach ($multi_array as $key => $elem) {
    echo $key . ' ';
    echo $elem['ime'] . ' ';
    echo $elem['prezime'] . '<br>';
}

echo '<hr>';
# ******************************************************************************
// Isto kao gore samo ispis pomoću petlje foreach u tablici

echo '<table border="1" width="300">';

foreach ($multi_array as $key => $elem) {
    echo '
  
        <tr>
            <td>' . $key . '</td>
            <td>' . $elem['ime'] . '</td>
            <td>' . $elem['prezime'] . '</td>
        </tr>';
}

echo '</table>';

echo '<hr>';
# ******************************************************************************
// Može i ovako

$glumice = array('glumica1' => array('ime' => 'Isabelle', 'prezime' => 'Huppert'),
    'glumica2' => array('ime' => 'Juliette', 'prezime' => 'Binoche'),
    'glumica3' => array('ime' => 'Marion', 'prezime' => 'Cotillard'),
    'glumica4' => array('ime' => 'Andrey', 'prezime' => 'Tautou'),
    'glumica5' => array('ime' => 'Sophie', 'prezime' => 'Marceau'));

arsort($glumice);

foreach ($glumice as $br_glumice => $podaci) {

    echo $br_glumice . '<br>';

    foreach ($podaci as $key => $value) {

        echo $key . ': ' . $value . '<br>';
    }
}