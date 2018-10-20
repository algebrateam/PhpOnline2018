<?php

namespace primar;

class Tocka implements ITocka
{
    private $x = 0;  // int
    private $y = 0;  // int

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setx($x)
    {
        $this->x = $x;
    }

    public function sety($y)
    {
        $this->y = $y;
    }

    public function getx()
    {
        return $this->x;
    }

    public function gety()
    {
        return $this->y;
    }

    public function tostring()
    {
        return 'Koordinata:('.$this->x.','.$this->y.')';
    }

    public function toCanvas()
    {
        //  ctx.arc(x,y,r, pocetni kut, krajnji kut)
        printf('ctx.beginPath();
              ctx.arc(%d,%d,%d,0,2*Math.PI);  
              ctx.stroke();', $this->getx(), -$this->gety(), 1);
    }
}
