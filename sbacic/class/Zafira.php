<?php

include './Opel.php';
include './IZafira.php';
class Zafira extends Opel implements IZafira
{
    public function opcija7()
    {
        // popstavi da vouzilo ima 7 sjedala !
        $this->brojsjedala = 7;
    }

    public function potrosnja5() 
    {
        $this->potrosnja = 5;
  }
    public function gume4() 
    {
        $this->gume = 4;
    }
    public function brisaci2() 
    {
        $this->brisaci = 2;
}

   
    
  }





