<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Zivotinja
{
    public function glasanje()
    {
        echo 'roar';
    }
}
class Lav extends Zivotinja
{
}
class Vepar extends Zivotinja
{
    public function glasanje()
    {
        echo 'ghgrgrgh';
    }
}

class Covjek implements Ikupac
{
    // var $ime="moje defaoultno ime";
    public $ime;
    private $prezime = 'Getto';

    // default konstruktor iliti prva funkcija koju klasa poziva prilikom instanciranja
    public function __construct($novoime = '')
    {
        $this->ime = $novoime;
    }

    // ENkapculacija private -> public
    public function set_ime($ime)
    {
        $this->ime = ucfirst($ime);
    }

    public function get_ime()
    {
        return $this->ime;
    }

    private function set_prezime($ime)
    {
        $this->prezime = $ime;
    }

    public function get_prezime()
    {
        return $this->prezime;
    }

    public function __destruct()
    {
        // ovo radi ali mi previse ispisuje po ekranu
//echo "<br>nema više objekta zvanog ".$this->ime;
    }

    public function ispis()
    {
        echo 'hello ja sam ispis() iz COvjek klase';
    }
}

interface Ikupac
{
    public function ispis();
}

//////////KLASA KUPAC///////////////
class Kupac extends Covjek implements Ikupac
{
    //svojstva kupca
    public $id_kupca;
    public $potroseni_iznos;

    // overridamo base/parent __constuct()
    public function __construct($novo_ime)
    {
        parent::__construct($novo_ime);
        $this->id_kupca = 1234;
    }

    public function ispis()
    {
        parent::ispis();
        echo '<br>+++++ '.$this->ime.' ima id:'.$this->id_kupca.' a potrosio je:'.$this->potroseni_iznos;
    }
}
