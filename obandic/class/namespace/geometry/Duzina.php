<?php

namespace geometry;

class Duzina {

    private $xy1;
    private $xy2;

    public function __construct(Tocka $xy1, Tocka $xy2) {

        $this->xy1 = $xy1;
        $this->xy2 = $xy2;
    }

    public function duljina() {

        $duljx = abs($this->xy2->getx() - $this->xy1->getx());
        $duljy = abs($this->xy2->gety() - $this->xy1->gety());

        return sqrt($duljx * $duljx + $duljy * $duljy);
    }

    public function tostring() {
        return 'Dužina s krajnjim točkama '
                . $this->xy1->tostring()
                . ' i '
                . $this->xy2->tostring()
                . ' ima duljinu '
                . $this->duljina();
    }
}