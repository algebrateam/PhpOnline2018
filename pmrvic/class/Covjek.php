<?php

include './ICovjek.php';

abstract class Covjek implements ICovjek {  // Ime klase prvo veliko slovo

    protected $ime;  // property ili svojstvo

    /**
     * @abstract defaultna metoda koja se poziva prilikom kreiranja objekta
     * @param string $novo_ime
     */
    public function __construct($novo_ime) {  
        if (isset($novo_ime)) {
            $this->ime = $novo_ime;
        } else {
            $this->ime = 'John Doe';
        }
    }

    public function set_ime($novo_ime) {  // funkcija unutar klase naziva se metoda
        $this->ime = $novo_ime;
    }

    public function __destruct() {
        echo '<br>RIP ' . $this->ime;
    }

    public function get_ime() {
        return $this->ime;
    }

}
