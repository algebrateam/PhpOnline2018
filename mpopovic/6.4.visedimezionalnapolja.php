<?php

/* 
 * Visedimenzionalna polja vjezba
 */
    
$ucenici = array('1'=>array('ime'=>'Ivan','prezime'=>'Ivanic'),
                 '2'=>array('ime'=>'Mate','prezime'=>'Matic'),
                 '3'=>array('ime'=>'Ante','prezime'=>'Antic'));

foreach($ucenici as $broj_ucenika => $podaci){
    foreach($podaci as $naziv_podatka => $vrijednost_podatka){
        echo 'ucenik broj '.$broj_ucenika.' - '.$naziv_podatka.': '.$vrijednost_podatka.'<br>';
    }
}

echo '<hr>';

$marko1=array(1,5,7);
$marko2=array(4,8,9);
$marko3=array(2,3,6);

$multi_array=array($marko1,$marko2,$marko3);

echo'<pre>';
print_r($multi_array);
echo'</pre>';

foreach ($multi_array as $marko) {
    foreach ($marko as $value) {
        echo $value;
    }
}

$elem1=array('ime'=>'Marko','prezime'=>'Popovic','OIB'=>'558');
$elem2=array('ime'=>'Katarina','prezime'=>'Kozina','OIB'=>'473');
$elem3=array('ime'=>'Adam','prezime'=>'Slatki','OIB'=>'261');

$multiarray=array('1'=>$elem1,'2'=>$elem2,'3'=>$elem3);

echo'<pre>';
print_r($multiarray);
echo'</pre>';

foreach($multiarray as $brojosobe => $podaci){
    foreach($podaci as $naziv_podatka => $vrijednost_podatka){
        echo 'Osoba broj '.$brojosobe.' - '.$naziv_podatka.': '.$vrijednost_podatka.'<br>';
    }
}
echo '<hr>';

echo $multiarray['2']['ime'];

echo '<hr>';
