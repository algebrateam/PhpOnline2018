<?php

/* 
 * Primjer polja
 * polje, array, kolekcija, hrpa (heap), vektor, matrica, 
 */

$polje=array('Tesla','Edison','Bell');

// echo $polje;  Ne možemo ispisivati polja na ovaj način

echo '<hr>Ispis pomoću print_r():<br>';
echo '<pre>';
print_r($polje);  // za potrebe debugginga
echo '</pre>';


echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';


echo '<hr>Pojedinačni ispis:<br>';
echo $polje[0];  // ispisuje Tesla
echo $polje[0];  // ispisuje Tesla
echo $polje[2];  // ispisuje Bell
echo $polje[1];  // ispisuje Edison


// Dodajemo jedan element na mjesto 33
$polje[33]='Penkala';
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';

// Brišemo element sa indexa 2
unset($polje[2]);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';
//echo $polje[2];  // Pokusamo ispisati index 2 (Undefined offset) NE MOZE !

// Dodajem novi element na drugi način bez specificiranja index
$polje[]=3.14;
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';


// Dodajem novi element na treci način sa array_push
array_push($polje, true);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';

// Obrisi zadnja dva elementa polja 
array_pop($polje);
array_pop($polje);
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';

// Obrisi cijeli array
unset($polje);

// Kreiram opet array
$polje=array('Z1'=>'Tesla','Z2'=>'Edison','Z3'=>'Bell'); // z1=znanstvenik1
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';

// ispis elementa
echo '<br>'.$polje['Z2'];  // ispisuje Edison

// Obrisi cijeli array
unset($polje);

// Kreiram opet array ovaj puta uz pomoć uglatih zagrada sa asocijacijama
$polje=['Z1'=>'Tesla','Z2'=>'Edison','Z3'=>'Bell'];
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';

// Obrisi cijeli array
unset($polje);

// Kreiram opet array ovaj puta uz pomoć uglatih zagrada sa indexima
$polje=['Tesla',  //string
  'Edison',  //string
  'Bell',  //string
  3.14,   // float
  true,  //boolean
  34=>true,  //bool
  'budan'=>false, //bool
  55, // int
  new ArrayObject()];  // objekt
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';


// Obrisi cijeli array
unset($polje);

// polje unutar polja
$polje=array('Z1'=>'Tesla','Z2'=>'Edison','stranci'=>['Einstein','Bohr','Curie']); // z1=znanstvenik1
echo '<hr>Ispis pomoću var_dump():<br>';
echo '<pre>';
var_dump($polje); // za potrebe debugginga
echo '</pre>';
echo '<pre>';
print_r($polje);  // za potrebe debugginga
echo '</pre>';