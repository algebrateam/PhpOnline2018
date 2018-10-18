<?php

require_once './IAuto.php';
abstract class Auto implements IAuto
{
    protected $potrosnja;
    protected $brojsjedala;
    public $boja;

    public function gazi()
    {
    }

    public function pali()
    {
    }

    public function skreni()
    {
    }

    public function stani()
    {
    }

    public function vozi()
    {
    }
}
