<?php

require_once './Pasmina.php';

class Doberman extends Pasmina {

  private $breed = 'Doberman';
  private $slika = './doberman.jpg.jpg';
  private $slika2 = './dobermanL.jpg';

  public function slika() {
    if (isset($this->slika)) {
      return 'Black and Tan <img src="' . $this->slika . '">';
    }
  }

  public function slika2() {
    if (isset($this->slika2)) {
      return 'Liver and Tan<img src="' . $this->slika2 . '">';
    }
  }

  private $opis = 'The Doberman Pinscher was developed in Germany during the late'
          . ' 19th century, primarily as a guard dog. His exact ancestry is unknown,'
          . ' but he’s believed to be a mixture of many dog breeds, including the'
          . ' Rottweiler, Black and Tan Terrier, and German Pinscher.'
          . ' With his sleek coat, athletic build, and characteristic cropped'
          . ' ears and docked tail, the Doberman Pinscher looks like an aristocrat.'
          . ' He is a highly energetic and intelligent dog, suited for police'
          . ' and military work, canine sports, and as a family guardian and companion.'
          . '<br>';

  public function print() {
    return ' ' . $this->opis
            . ' <br>'
            . $this->slika() 
            .' <br>'
            . $this->slika2()
            . '<br>';
  }

}
