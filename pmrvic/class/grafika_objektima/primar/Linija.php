<?php
namespace primar;
//require_once 'ITocka.php';
//require_once 'Tocka.php';

class Linija
{
    private $k1;  // Tocka
    private $k2;  // Tocka

    //public function __construct($k1,$k2) // mozemo ubaciti bilo koji tip 
    public function __construct(Tocka $k1, Tocka $k2)  // moramo predati objekt tipa Tocka
    {
        $this->k1 = $k1;
        $this->k2 = $k2;
    }

    public function duljina()
    {
        $duljx = $this->k2->getx() - $this->k1->getx();
        $duljy = $this->k2->gety() - $this->k1->gety();

        return sqrt($duljx * $duljx + $duljy * $duljy);
    }

    public function tostring()
    {
        return 'ispis linije return '
        .$this->k1->tostring()
            .' '
            .$this->k2->tostring()
            .' Duljina:'
            .$this->duljina();
    }
    public function __toString()
    {
        return 'ispis linije return '
        .$this->k1->tostring()
            .' '
            .$this->k2->tostring()
            .' Duljina:'
            .$this->duljina();
    }
        public function toCanvas()
    {
     //  ctx.arc(x,y,r, pocetni kut, krajnji kut)
         printf ('ctx.beginPath();
              ctx.moveTo(%d, %d);
               ctx.lineTo(%d, %d);
              ctx.stroke();',$this->k1->getx(),-$this->k1->gety(),$this->k2->getx(),-$this->k2->gety());
         /*
      ctx.beginPath();
      ctx.moveTo(-200, 0);
      ctx.lineTo(200, 0);
      ctx.stroke(); */
    }
}
