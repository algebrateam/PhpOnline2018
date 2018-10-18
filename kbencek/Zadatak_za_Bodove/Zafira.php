<?php

include './Opel.php';
include './IZafira.php';



class Zafira extends Opel implements IZafira

{
    public function opcija7($Z1)
    {
        // popstavi da vouzilo ima 7 sjedala !
        $this->brojsjedala = 7;
    }
}
