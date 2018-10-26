<?php

namespace geometry;

class Tocka implements ITocka {

    private $x = 0;
    private $y = 0;

    public function __construct(int$x, int$y) {

        $this->x = $x;
        $this->y = $y;
    }

    public function setx($x) {

        $this->x = $x;
    }

    public function sety($y) {

        $this->y = $y;
    }

    public function getx() {

        return $this->x;
    }

    public function gety() {

        return $this->y;
    }

    public function tostring() {

        return '(' . $this->x . ', ' . $this->y . ')';
    }

}