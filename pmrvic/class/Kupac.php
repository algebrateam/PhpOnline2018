<?php

include './IKupac.php';

class Kupac extends Covjek implements IKupac
{ // NASLJEĐIVANJE // APSTRAKCIJA

    //svojstva kupca
    private $id_kupca;
    public $potroseni_iznos = '33';

    // overridamo base/parent __constuct()
    public function __construct($novo_ime)
    {
        parent::__construct($novo_ime);  // POLIMORFIZAM
        $this->id_kupca = rand(200, 1000);
        $this->potroseni_iznos = rand(10, 100);
    }

    public function ispis()
    {
        //parent::ispis();
        echo '<br>+++++ '
        .$this->ime  // pogledaj Covjek::ime  (protected)
        .' ima id:'
        .$this->get_id()  // public metoda dohvaca private svojstvo ENKAPSULACIJA
        .' a potrosio je:'
        .$this->potroseni_iznos;  // public svojstvo mozemo dohvatiti direktno
    }

    public function get_id()
    {
        return md5($this->id_kupca);
    }
}
