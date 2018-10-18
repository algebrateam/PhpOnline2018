<?php

include_once 'Auto.php';
include_once 'IOpel.php';


// Its not even my final form  :)

class Opel extends Auto implements IOpel
{
    public function korodiraj()
    {
    }
	public function opcija7()
    {
        // popstavi da vouzilo ima 7 sjedala !
        $this->brojsjedala = 7;
    }
    public function ispis()
    {
        printf('broj sjedala je:', 
                $this->brojsjedala
                );     
    }
	public function opcija3()
    {
        // troši 3 litre !
        $this->potrosnja = 3;
    }
}


