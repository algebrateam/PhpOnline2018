<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './ICovjek.php';

abstract class Covjek implements ICovjek
{  // Ime klase prvo veliko slovo

    protected $ime;  // property ili svojstvo

    public function __construct($novo_ime)
    {  // defaultna metoda koja se poziva prilikom kreiranja objekta
        if (isset($novo_ime)) {
            $this->ime = $novo_ime;
        } else {
            $this->ime = 'John Doe';
        }
    }

    public function set_ime($novo_ime)
    {  // funkcija unutar klase naziva se metoda
        $this->ime = $novo_ime;
    }

    public function __destruct()
    {
        echo '<br>RIP '.$this->ime;
    }

    public function get_ime()
    {
        return $this->ime;
    }
}
