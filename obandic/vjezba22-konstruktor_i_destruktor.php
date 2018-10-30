<?php

class Osoba {

    public $ime;

    function __construct($novoIme) {

        $this->ime = $novoIme;
    }

    function getIme() {

        return $this->ime;
    }
}

$kupac = new Osoba('Nikola Tesla');     //Instanciranje objekta - prosljećivanje parametra klasi tj. konstruktoru klase
echo $kupac->ime;


echo '<hr>';
//******************************************************************************
// Isto kao gore, ali bez funkcije getIme

class Osoba2 {

    public $ime;

    function __construct($novoIme) {

        $this->ime = $novoIme;
    }
}

$kupac2 = new Osoba2('Nikola Tesla');
echo $kupac2->ime;

echo '<hr>';
//******************************************************************************

class Osoba3 {

    public $ime;

    function __construct() {

        $this->ime = 'Nikola Tesla';        //Ako ovdje postavimo ime, svaka će se osoba zvati Nikola Tesla
    }

    function setIme($novoIme) {

        $this->ime = $novoIme;
    }
}

$kupac3 = new Osoba3();
echo $kupac3->ime;                          //Ispis imena prije nego što smo postavili ime
$kupac3->setIme('Mahatma Gandhi');
echo $kupac3->ime;

echo '<br><br>';

$kupac4 = new Osoba3();
$kupac4->setIme('Blaise Pascal');
echo $kupac4->ime;

echo '<hr>';
//******************************************************************************

class Osoba4 {

    public $ime;

    function __construct() {

        $this->ime = 'Nikola Tesla';
    }

    function setIme($novoIme) {

        $this->ime = $novoIme;
    }
    
    function __destruct() {

        echo '<br>Bonne nuit '.$this->ime;
    }
}

$kupac5 = new Osoba4();
echo $kupac5->ime;
$kupac5->setIme('Mahatma Gandhi');
echo $kupac5->ime;

echo '<br><br>';

$kupac6 = new Osoba4();
$kupac6->setIme('Blaise Pascal');
echo $kupac6->ime;