<?php

include './Opel.php';
include './IAstra.php';
class Astra extends Opel implements IAstra
{
    public function stedljiva()
    {
        // postavi da vozilo troši ispod 3 l/100km
    }
}
