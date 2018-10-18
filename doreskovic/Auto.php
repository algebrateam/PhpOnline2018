<?php

include_once 'IAuto.php';
abstract class Auto implements IAuto
{
    public $potrosnja;
    public $brojsjedala;
	

    public function gazi()
    {
        echo '<br>Gazim!';
    }

    public function pali()
    {
        echo '<br>Palim odmah!';
    }

    public function skreni()
    {
        echo '<br>Skrecem polako!';
    }

    public function stani()
    {
        echo '<br>Stanem odmah, imam ABS!';
    }

    public function vozi()
    {
        echo '<br>Vozim pametno!';
    }
}
