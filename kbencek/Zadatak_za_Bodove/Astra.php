<?php

include './Opel.php';
include './IAstra.php';



class Astra extends Opel implements IAstra

{


    public function stedljiva($A1)
    {
        $this->potrosnja = 3/100;
    }
}
