<?php

/* 
 * Primjer polja
 * polje,array,kolekcija, hrpa (heap), vektor, matrica
 */


$polje ('Tesla','Edison','Bell');

// echo $polje; Ne mozemo ispisivati polja na ovaj nacin

echo '<hr>Ispis pomocu print_r()<br>';
echo '<pre>';
print_r($polje); // za potrebe debugginga
echo '<pre>';

echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

echo '<hr>Pojedinacni ispis:<br>';
echo $polje[0]; //Ispisuje Tesla
echo $polje[0]; //Ispisuje Tesla
echo $polje[2]; //Ispisuje Bell
echo $polje[1]; //Ispisuje Edison

// Dodajemo jedan element na mjesto 3
$polje[3]='Penkala';
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Brisemo element sa indexa 2
unset($polje[2]);
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';
//echo $polje[2]; //ispisuje Bell //Pokusamo ispisati index 2 (Undefined offset) Ne moze !

// Dodajem novi element na drugi nacin bez specificiranja indexa
$polje[]=3.14;
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Dodajem novi element na treci nacin sa array push
array_push($polje, true);
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Obrisi zadnja dva elementa polja
array_pop($polje);
array_pop($polje);
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Obrisi cijeli array
unset ($polje);

//Kreiram opet array
$polje ('Z1'>'Tesla','Z2'>'Edison','Z3'>'Bell'); //Z1= znanstvenik1
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

//ispis elementa
echo '<br>' .$polje['z2']; //Ispisuje Edison

// Obrisi cijeli array
unset ($polje);

//Kreiram opet array ovaj oput uz pomoc uglatih zagrada sa asocijacijama
$polje=['Z1'>'Tesla','Z2'>'Edison','Z3'>'Bell']; //Z1= znanstvenik1
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Obrisi cijeli array
unset ($polje);

//Kreiram opet array ovaj oput uz pomoc uglatih zagrada sa indexima
$polje=['Tesla', //string
    'Edison',    //string
    'Bell',      //string
    3.14,        //float
    true,        //boolean
    34>true,     //bool
    'budan'>false,  //bool
    55,             //int
    new ArrayObject()]; //objekt
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';

// Obrisi cijeli array
unset ($polje);
// polje unutar polja
$polje=array('Z1'>'Tesla','Z2'>'Edison','stranci'>['Einstein','Bohr','Curie']); //Z1= znanstvenik1
echo '<hr>Ispis pomocu var_dump(): <br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '<pre>';
print_r($polje); // za potrebe debugginga
echo '<pre>';




