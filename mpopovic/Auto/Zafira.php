<?php

include './Opel.php';
include './IZafira.php';
class Zafira extends Opel implements IZafira
{
    public function opcija7()
    {
        $this->brojsjedala = 7;
    }
}
