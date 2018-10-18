<?php
namespace primar;
class Tocka implements ITocka{
    private $x=0;  // int
    private $y=0;  // int
    
    function __construct($x,$y) {
        $this->x=$x;
        $this->y=$y;
    }
    public function setx($x) {
        $this->x=$x;
    }

    public function sety($y) {
        $this->y=$y;
    }
    public function getx() {
        return $this->x;
    }

    public function gety() {
        return $this->y;
    }
    public function tostring() {
        return 'Koordinata:('.$this->x.','.$this->y.')';
    }

}
