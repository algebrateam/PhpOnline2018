<?php

/*Zadatak 1.
 * Napisite program koji upisuje pet imena u polje $imena
 * i ispisuje ih petljom foreach
 */

$imena= array('Adam','Katarina','Marko','Jakov','Lovro');
     foreach ($imena as $ime){
         echo $ime.'<br>';
     }
     
echo'<hr>';

/*Zadatak 2.
 * Polju iz prethodnog zadatka promijenite ključeve tako da umjesto 
 * ključa 1 piše ime 5, umjesto ključa 2 ime4, itd...
 */

$imena= array();
$imena['ime5'] = 'Adam';
$imena['ime4'] = 'Katarina';
$imena['ime3'] = 'Marko';
$imena['ime2'] = 'Jakov';
$imena['ime1'] = 'Lovro'; 





    echo'<pre>';
    print_r($imena);
    echo'</pre>';
     
     
echo'<hr>';

/*Zadatak 3.
 * Posložite imena u polju iz prvog zadatka abecednim redom i ispišite 
 * vrijednost elemenata pomoću petlje for
 */

asort($imena);

    echo'<pre>';
    print_r($imena); //provjer jesu li imena posložena abecednim redom
    echo'</pre>';


for ($i=0; $i<count($imena); $i++) { //NISAM riješio, kako s petljom for ako su ključevi tekstualni?
    echo $imena[$i];
}

echo'<hr>';

/*Zadatak 4.
 * Posložite ključeve u polju iz prvog zadatka abecednim redom i ispišite 
 * vrijednost elemenata u polju zajedno s pripadajućim ključevima
 * pomoću petlje foreach
 */

ksort($imena);

foreach ($imena as $key => $ime) {
    echo 'Osoba pod brojem '.$key.' se zove '.$ime.'<br>';
}

/*Zadatak 5.
 * Napišite program koji će pomoću petlje for automatski stvoriti polje
 * brojeva od 1 do 100 te s petljom foreach ispisati sadržaj polja
 */

echo'<hr>';

for ($i = 0; $i <= 100; $i++) {

$polje[$i] = 'Ovo je element '.$i.' u polju<br>';

echo $polje[$i];

}