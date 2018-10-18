<?php

include_once './Auto.php';
include_once './IOpel.php';
// Its not even my final form  :)

class Opel extends Auto implements IOpel
{
    public function korodiraj()
    {
    }

    public function ispis()
    {
        return ' '
      .$this->brojsjedala
      .' '
      .$this->potrosnja // nastaviti
      .' '
      .$this->boja
      .' '
      .$this->kilovata;
    }
}
