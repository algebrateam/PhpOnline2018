<?php

include_once 'IAuto.php';
abstract class Auto implements IAuto
{
    protected $potrosnja;
    protected $brojsjedala;
    protected $kilovata;

    public function gazi()
    {
        echo '<br>Gazim!';
    }

    public function pali()
    {
        echo '<br>Zapalio!';
    }

    public function skreni()
    {
        echo '<br>Skrecem!';
    }

    public function stani()
    {
        echo '<br>Stajem!';
    }

    public function vozi()
    {
        echo '<br>Vozim!';
    }
}
