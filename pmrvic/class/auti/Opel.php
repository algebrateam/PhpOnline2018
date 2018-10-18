<?php

include './Auto.php';
include './IOpel.php';
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
            .$this->boja; // nastaviti....
    }
}
