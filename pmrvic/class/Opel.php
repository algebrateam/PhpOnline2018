<?php

include './Auto.php';
include './IOpel.php';
// Its not even my final form  :)
<<<<<<< HEAD
class Opel extends Auto implements IOpel{
    
    public function korodiraj() {
        
    }

    public function ispis() {
        return ' '
        .$this->brojsjedala
            .' '
            .$this->boja; // nastaviti....
    }

=======
abstract class Opel extends Auto implements IOpel
{
    public function korodiraj()
    {
    }
>>>>>>> 0af81ea12d48467a1829bf8e438a737ae4048a72
}
