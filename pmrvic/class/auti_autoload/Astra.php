<?php

require_once './Opel.php';
require_once './IAstra.php';
class Astra extends Opel implements IAstra
{
    public $opis = 'The Opel Astra (Lat: Stars) is a '
        .'compact car/small family car (C-segment in Europe) '
        .'engineered and manufactured by the German automaker Opel since 1991.';
    private $slika = 'astra.jpg';

    public function ispisslike()
    {
        if (isset($this->slika)) {
            return '<img src="'.$this->slika.'" >';
        }
    }

    public function ispis()
    {
        return ' '
        .$this->brojsjedala
            .' '
            .$this->boja
            .' '
            .$this->opis
            .' '
            .$this->ispisslike();
    }

    public function stedljiva3()
    {
        $this->stedljiva = 3;
    }

    public function brzina100()
    {
        $this->brzina = 100;
    }

    public function starost10()
    {
        $this->starost = 10;
    }

    public function brzina()
    {
    }

    public function stedljiva()
    {
    }
}
