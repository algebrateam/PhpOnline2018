<?php

include './Opel.php';
include './IAstra.php';
class Astra extends Opel implements IAstra
{

  

  public function stedljiva3()
    {
    $this->stedljiva = 3;
    }

  public function brzina100() {
    $this->brzina = 100;
  }

  public function starost10() {
   $this->starost = 10;
  }

  public function brzina() {
    
  }

  public function stedljiva() {
    
  }

   
    
  }




