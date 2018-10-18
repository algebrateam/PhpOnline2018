<?php

include './Auto.php';
include './IOpel.php';
// Its not even my final form  :)

class Opel extends Auto implements IOpel
{
    public function korodiraj($A1 , $Z1)
    {
    }

    public function ispis()
    {
        return ' '
        .$this->brojsjedala
            .' '
            .$this->boja; 
    }
}



