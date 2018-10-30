<?php

class Covjek {

    public $ime;

    function __construct($novo_ime) {

        $this->ime = $novo_ime;
    }

    function get_ime() {

        return $this->ime;
    }
}

class Kupac extends Covjek {

    public $id_kupca;
    public $potroseni_iznos;

    function __construct($novo_ime) {

        parent::__construct($novo_ime);

        $this->id_kupca = 1234;
    }

    public function get_id() {
        
    }
}

$kupac1 = new Kupac('Duje');
echo $kupac1->ime;
echo $kupac1->id_kupca;

echo '<br><br>';

$kupac2 = new Kupac('Kate');
echo $kupac2->ime;
echo $kupac2->id_kupca;

echo '<hr>';
// *****************************************************************************

class Osoba {

    public $ime;

    public function Osoba() {

        echo 'Osoba je kreirana<br>';
    }
}

class Zaposleni extends Osoba {

    public $placa;

    function opis($ime, $vrijednost) {

        $this->ime = $ime;
        $this->placa = $vrijednost;
        echo $this->ime . ' - ' . $this->placa . ' kn';
    }
}

$zaposleni1 = new Zaposleni();
$zaposleni1->opis('Duje', 10000);

echo '<br><br>';

$zaposleni2 = new Zaposleni();
$zaposleni2->opis('Kate', 15000);