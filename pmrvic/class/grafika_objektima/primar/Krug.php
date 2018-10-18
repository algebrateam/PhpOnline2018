<?php
namespace primar;
//require_once 'ITocka.php';
//require_once 'Tocka.php';

class Krug
{
    private $k1;  // središte
    private $k2;  // koord radijusa
    private $r;

    public function __construct(Tocka $k1, Tocka $k2)
    {
        $this->k1 = $k1;
        $this->k2 = $k2;

        $this->r = (new Linija($k1, $k2))->duljina();
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
}
