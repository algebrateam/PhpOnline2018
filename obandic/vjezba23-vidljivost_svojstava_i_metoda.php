<?php

class Osoba {

    public $imePrezime;
    protected $spol;
    private $datumRodenja;

    function osoba($imePrezime, $spol, $datumRodenja) {
        $this->imePrezime = $imePrezime;
        $this->spol = $spol;
        $this->datumRodenja = $datumRodenja;
    }

    function prikaziPodatke() {
        echo $this->imePrezime;
        echo $this->spol;
        echo $this->datumRodenja;
    }

}

$osoba1 = new Osoba('Katić Kate ', 'žensko ', '01.01.2000.');
echo $osoba1->imePrezime . '<br>';      // Radi
//echo $osoba1->spol;                 // Greška
//echo $osoba1->datumRodenja;         // Greška
$osoba1->prikaziPodatke();            // Prikazuje sve