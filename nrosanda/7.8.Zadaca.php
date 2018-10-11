<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*  7.8.1.
 * Napisite funkciju koja vraca hrvatski naziv za trenutacni mjesec.
 * Parametar koji prosljeduje funkciju je rezultat funkcije date('n').
 */

function mjesec() {
    switch (date('n')) {
        case 1:
            return 'Siječanj';
            break;
        case 2:
            return 'Veljača';
            break;
        case 3:
            return 'Ožujak';
            break;
        case 4:
            return 'Travanj';
            break;
        case 5:
            return 'Svibanj';
            break;
        case 6:
            return 'Lipanj';
            break;
        case 7:
            return 'Srpanj';
            break;
        case 8:
            return 'Kolovoz';
            break;
        case 9:
            return 'Rujan';
            break;
        case 10:
            return 'Listopad';
            break;
        case 11:
            return 'Studeni';
            break;
        case 12:
            return 'Prosinac';
            break;
    }
}
    echo 'Danas je '.mjesec();

echo '<br><hr>';

/* 7.8.2.
 * Napisite funkciju koja ispisuje HTML tablicu imena i prezimena 
 * ucenika. Kao parametar joj se prosljeduje polje s imenima i prezimenima.
 */

 $ucenici = ['1' => ['naziv' => 'Ivan', 'prezime' => 'Gundulic'],
    '2' => ['naziv' => 'Tin', 'prezime' => 'Ujevic'],
    '3' => ['naziv' => 'Ante', 'prezime' => 'Sosa']];

function tablica($ucenici) {
    echo '<table border=1>';
    foreach ($ucenici as $imena) {
        echo '<tr>';
        foreach ($imena as $red) {
            echo '<td>' . $red . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

tablica($ucenici);
echo '<br>';
echo '<br><hr>';


/* 7.8.3.
 * Napisite funkcije za zbrajanje, razliku, umnozak i dijeljenje dva broja.
 * Zatim napisite funkciju koja ce povezivati sve te funkcije odjednom.
 */

function zbrajanje($a, $b) {
    return $a + $b;
}
function oduzimanje ($a, $b) {
    return $a - $b;
}
function mnozenje ($a, $b) {
    return $a * $b;
}
function djeljenje ($a, $b) {
    return $a / $b;
}

function operacijevaljdaupale ($a, $b) {
    echo zbrajanje ($a, $b).'<br>';
    echo oduzimanje ($a, $b).'<br>';
    echo mnozenje ($a, $b).'<br>';
    echo djeljenje ($a, $b).'<br>';
}
operacijevaljdaupale(5, 8);

echo '<br>';
echo '<br><hr>';

/* 7.8.4.
 * Npisite funkciju koja prima varijabilni broj parametra. Parametri su 
 * kombinirani brojevi i stringovi. Za svaki parametar ispisite kojeg je tipa.
 */

function broj(){
   $parametar = func_get_args();
   foreach ($parametar as $nesto) {
       if (is_int($nesto)) {
           echo $nesto.' je broj<br>';
       }
       else {
           echo $nesto.' je string <br>';
       }
   }
}
broj(1, 'osam', 'svi', 5, 2);

        
