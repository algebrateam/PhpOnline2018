<?php
 
require_once './Pasmina.php';

class Dalmatiner extends Pasmina {

  private $breed = 'Dalmatian';
  private $slika = './dalmatiner1.jpg.jpg';
  private $slika2 = './dalmatinerL.jpg.jpg';
  public $opis = 'The Dalmatian’s delightful, eye-catching spots of black or '
          . 'liver adorn one of the most distinctive coats in the animal kingdom. '
          . 'Beneath the spots is a graceful, elegantly proportioned trotting dog '
          . 'standing between 19 and 23 inches at the shoulder.'
          . 'Dalmatians are muscular, built to go the distance; '
          . 'the powerful hindquarters provide the drive behind the smooth, '
          . 'effortless gait.'
          . 'The Dalmatian was originally bred to guard horses and coaches, '
          . 'and some of the old protective instinct remains. Reserved and '
          . 'dignified, Dalmatians can be aloof with strangers and are dependable '
          . 'watchdogs. With their preferred humans, Dalmatians are bright, loyal,'
          . 'and loving house dogs. They are strong, active athletes with great '
          . 'stamina—a wonderful partner for runners and hikers. ';

  public function slika() {
    if (isset($this->slika)) {
      return 'Black and White <img src="' . $this->slika . '">';
    }
  }

  public function slika2() {
    if (isset($this->slika2)) {
      return 'Liver and White <img src="' . $this->slika2 . '">';
    }
  }

  public function print() {
    return ' ' . $this->opis
            . ' <br>'
            . $this->slika() 
            .' <br>'
            . $this->slika2()
            . '<br>';
  }

}
