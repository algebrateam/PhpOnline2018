<?php

namespace geometry;

class Trokut {

    private $xy1;
    private $xy2;
    private $xy3;
    private $a;
    private $b;
    private $c;

    public function __construct(Tocka $xy1, Tocka $xy2, Tocka $xy3) {

        $this->xy1 = $xy1;
        $this->xy2 = $xy2;
        $this->xy3 = $xy3;
        $this->a = (new Duzina($xy2, $xy3))->duljina();
        $this->b = (new Duzina($xy1, $xy3))->duljina();
        $this->c = (new Duzina($xy1, $xy2))->duljina();
    }

    public function duljinaStranice($a, $b, $c) {

        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function opseg() {

        return $this->a + $this->b + $this->c;
    }

    public function povrsina() {

        return 0.5 * abs(
                        ($this->xy1->getx()) * ($this->xy2->gety() - $this->xy3->gety()) +
                        ($this->xy2->getx()) * ($this->xy3->gety() - $this->xy1->gety()) +
                        ($this->xy3->getx()) * ($this->xy1->gety() - $this->xy2->gety()));
    }

    public function __toString() {
        return 'Trokut s vrhovima '
                . $this->xy1->tostring()
                . ', '
                . $this->xy2->tostring()
                . ' i '
                . $this->xy3->tostring()
                . ' ima opseg '
                . $this->opseg()
                . ' i površinu '
                . $this->povrsina();
    }
}