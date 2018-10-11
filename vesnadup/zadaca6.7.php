<?php

/* 1.Napišite program koji opisuje 5 imena u polje $imena i ispisuje ih pomoću
 * petlje foreach
 */
echo '<hr>';

$polje_imena = ['Ivan', 'Marko', 'Ana', 'Kristina', 'Mia'];
foreach ($polje_imena as $ime) {
    echo $ime.'<br/>';
}

/*2. Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 1
 * piše ime 5, umjesto ključa 2 ime 4 itd.
 */
echo '<hr>';

$polje_imena = [];

$polje_imena['ime5'] = 'Ivan';
$polje_imena['ime4'] = 'Marko';
$polje_imena['ime3'] = 'Ana';
$polje_imena['ime2'] = 'Kristina';
$polje_imena['ime1'] = 'Mia';

foreach ($polje_imena as $key =>$ime) {
    echo $key.'=>'.$ime.'<br>';
}

/*3. Posložite imena u polju iz prvog zadatka abecednim redom i ispišite
 * vrijednosti elementa uz pomoć petlje for.
 */
echo '<hr>';

$polje_imena = [];

$polje_imena[] = 'Ivan';
$polje_imena[] = 'Marko';
$polje_imena[] = 'Ana';
$polje_imena[] = 'Kristina';
$polje_imena[] = 'Mia';

sort($polje_imena);

for ($i = 0; $i < count($polje_imena); $i++) {
    echo $polje_imena[$i].'<br/>';
}

/*4. Posložite ključeve u polju abecednim redom i ispišite vrijednosti elemenata
 * zajedno s pripadajućim ključevima s pomoću petlje foreach.
 */
echo '<hr>';

$polje_imena = [];

$polje_imena['ime5'] = 'Ivan';
$polje_imena['ime4'] = 'Marko';
$polje_imena['ime3'] = 'Ana';
$polje_imena['ime2'] = 'Kristina';
$polje_imena['ime1'] = 'Mia';

ksort($polje_imena);

foreach ($polje_imena as $key => $ime) {
    echo $key.'=>'.$ime.'<br/>';
}

/*5. Napišite program koji će s pomoću petlje for automatski stvoriti polje
 * brojeva od 1 do 100 te s petljom foreach ispisati sadržaj polja.
 */
echo '<hr>';

$polje_brojeva = [];

for ($i = 1; $i <= 100; $i++) {
    $polje_brojeva[] = $i;
}

foreach ($polje_brojeva as $broj) {
    echo $broj.'<br/>';
}
