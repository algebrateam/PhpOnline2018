<?php

include './IAuto.php';
abstract class Auto implements IAuto
{
    protected $potrosnja;
    protected $brojsjedala;

    public function gazi($A1, $Z1)
    {
    }

    public function pali($A1, $Z1)
    {
    }

    public function skreni($A1, $Z1)
    {
    }

    public function stani($A1, $Z1)
    {
    }

    public function vozi($A1, $Z1)
    {
        return $A1->potrosnja;

        return $Z1->brojsjedala;
    }
}
