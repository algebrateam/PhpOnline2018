<?php

class Osoba {                   //Definiranje klase

    public $ime = 'Kate';       //Svojstva klase
    public $prezime = 'Katić';
    public $spol = 'žensko';

}

$objekt = new Osoba;            //Definiranje objekta
echo $objekt->ime . '<br>';
echo $objekt->prezime . '<br>';
echo $objekt->spol . '<br>';

echo '<hr>';

// *****************************************************************************

class Osoba1 {                      //Definiranje klase

    public $ime = 'Kate';           //Svojstvo klase

    function pozdrav($prezime) {    //Metoda klase

        echo 'Dobar dan! Ja sam Kate ' . $prezime . '.';
    }

}

$objekt1 = new Osoba1;              //Definiranje objekta
$objekt1->pozdrav('Katić');

echo '<hr>';

// *****************************************************************************

class Osoba2 {

    public $ime = 'Kate';

    function pozdrav($prezime) {

        return 'Dobar dan! Ja sam Kate ' . $prezime . '.';
    }

}

$objekt2 = new Osoba2;
echo $objekt2->pozdrav('Katić');

echo '<hr>';

// *****************************************************************************

class Osoba3 {

    public $ime = 'Kate';

    function pozdrav($ime, $prezime = null) {

        echo 'Dobar dan! Ja sam Kate ' . $prezime . '.<br>';
    }

}

$objekt3 = new Osoba3;
$objekt3->pozdrav('Kate', 'Katić');
$objekt3->pozdrav('Katić');

echo '<hr>';

// *****************************************************************************

class Osoba4 {

    public $ime = 'Kate';
    private $ime_prezime;

    function pozdrav($prezime) {

        $this->ime_prezime = $this->ime . ' ' . $prezime;
        return 'Dobar dan! Ja sam ' . $this->ime_prezime . '.';
    }

}

$objekt4 = new Osoba4;
echo $objekt4->pozdrav('Katić');

echo '<hr>';

// *****************************************************************************

class Osoba5 {

    public $ime = 'Kate';
    private $zanimanje = 'Web dizajner';

    public function setZanimanje($zanimanje) {

        $this->zanimanje = $zanimanje;
    }

    public function getZanimanje() {

        return $this->zanimanje;
    }

}

$objekt5 = new Osoba5;
echo $objekt5->getZanimanje() . '<br>';

$objekt5->setZanimanje('Programer');
echo $objekt5->getZanimanje();

echo '<hr>';

// *****************************************************************************

class Osoba6 {                      //Definiranje klase

    public $ime;                    //Svojstvo klase - varijabla $ime

    function setIme($novoIme) {     //Definiranje 1. metode klase - postavlja vrijednost svojstva ime 
        $this->ime = $novoIme;      //Pomoću pseudovarijable $this svojstvu ime dodjeljujemo vrijednost parametra $novoIme
    }

    function getIme() {             //Definiranje 2. metode klase - vraća vrijednost svojstva ime
        return $this->ime;
    }

}

$kupac = new Osoba6;                //Izrada objekta
$kupac->setIme('Duje');             //Pozivanje 1. metode i predaja tekstualnog parametra
echo $kupac->getIme();              //Ispis vrijednosti koju vrati 2. metoda - Mogli smo staviti i: echo $kupac2->ime;
echo '<hr>';

//******************************************************************************

class Osoba7 {

    public $ime;

    function setIme($novoIme) {

        $this->ime = $novoIme;
    }

    function getIme() {

        return $this->ime;
    }

}

$kupac2 = new Osoba7;
$kupac2->setIme('Duje');
echo $kupac2->ime;

echo '<hr>';