<?php

require_once './Opel.php';
require_once './IZafira.php';
class Zafira extends Opel implements IZafira
{
    public $opis = 'The Opel Zafira, also known as the Zafira Tourer '
            .'since 2011,[1] is a multi-purpose vehicle (MPV) '
            .'produced by the German manufacturer Opel since the beginning of 1999.';
    private $slika = 'zafira.jpg';

    public function ispisslike()
    {
        if (isset($this->slika)) {
            return '<img src="'.$this->slika.'" >';
        }
    }

    public function ispis()
    {
        return ' '

            .' <br>boja: '
            .$this->boja
            .' <strong>'
            .$this->opis
            .'</strong><br> '
            .$this->ispisslike()
            .'<br>broj sjedala:  '
            .$this->brojsjedala;
    }

    public function opcija7()
    {
        // popstavi da vouzilo ima 7 sjedala !
        $this->brojsjedala = 7;
    }
}
