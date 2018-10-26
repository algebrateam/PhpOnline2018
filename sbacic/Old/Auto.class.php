<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'IAuto.class.php';

abstract class Auto implements IAuto
{
    public $brojvrata = 5;
    public $kilovata = 100;
    public $boja = 'crna';

    //put your code here
    public function gazi()
    {
        echo '<br>Gazim!';
    }

    public function skreni()
    {
        echo '<br>skrećem!';
    }

    public function stani()
    {
        echo '<br>stajem!';
    }

    public function vozi()
    {
        echo '<br>vozim!';
    }

    public function pali()
    {
        // makar bila prazna
    }
}