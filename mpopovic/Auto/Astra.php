<?php

include './Opel.php';
include './IAstra.php';
class Astra extends Opel implements IAstra
{
    public function stedljiva()
    {
        $this->potrosnja = 3;
    }
}
