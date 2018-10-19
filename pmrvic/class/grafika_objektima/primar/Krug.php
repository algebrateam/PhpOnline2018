<?php

namespace primar;

//require_once 'ITocka.php';
//require_once 'Tocka.php';

class Krug
{
    private $k1;  // središte        // tip Tocka
    private $k2;  // koord radijusa  // tip Tocka
    private $r;

    public function __construct(Tocka $k1, $k2)
    {
        $this->k1 = $k1;

        if ($k2 instanceof Tocka) {
            $this->k2 = $k2;
            $this->r = (new Linija($k1, $k2))->duljina();
        } elseif (gettype($k2) == 'integer') {
            $this->r = $k2;
            $this->k2 = new Tocka($this->k1->getx() + $this->r, $this->k1->gety());
        }
    }

    public function constructr(Tocka $k1, int $r)
    {
        $this->k1 = $k1;
        $this->r = $r;
    }

    public function opseg()
    {
        return 2 * $this->r * pi();
    }

    public function povrsina()
    {
        return $this->r * $this->r * pi();
    }

    public function __toString()
    {
        return 'ispis kruznice '
        .$this->k1->tostring()
            .' '
            .$this->k2->tostring()
            .' Opseg:'
            .$this->opseg()
        .' Povrsina:'
            .$this->povrsina();
    }

    public function toCanvas()
    {
        //  ctx.arc(x,y,r, pocetni kut, krajnji kut)
        printf('ctx.beginPath();
              ctx.arc(%d,%d,%d,0,2*Math.PI);  
              ctx.stroke();', $this->k1->getx(), -$this->k1->gety(), $this->r);
    }
}
