<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'covjek.php';

// $z1=new zivotinja();  // abstraktne klase se ne mogu instancirati
//
$l1 = new Lav();
$l1->glasanje();

$v1 = new Vepar();
$v1->glasanje();

$c1 = new Covjek('Ivica');
$c1->set_ime('Marko');
echo 'dobra dan zovem se '.$c1->get_ime();

class Baseokvir
{
    public $c1;

    public $bojatexta;

    public function __construct(covjek $c1)
    {
        $this->c1 = $c1;
    }

    public function bojatexta($boja)
    {
        $this->bojatexta = $boja;
    }
}

// $k1=new Ikupac();   // Ne možemo INSTANCIRATI interface

$b1 = new Baseokvir(new covjek('Ljubica'));
echo $b1->c1->get_ime();

class Okvir extends Baseokvir
{
    public $height = 100;
    public $width = 100;
    public $position = 'absolute';
    public $top = 100;
    public $left = 100;
    public $bojaokvira = '#4F8FDF';
    public $unutarnji_text = 'neki text';

    public function __construct($boja, $top)
    {
        $this->bojaokvira = $boja;
        $this->top = $top;
    }

    public function crtaj()
    {
        echo "<div 
		id='okvir'
		style='background-color:$this->bojaokvira; 
		width:$this->width; 
		height:$this->height; 
		position:$this->position; 
		top:$this->top;
		left:$this->left'>
		$this->unutarnji_text</div>";
    }
}

$d1 = new Okvir('#4F8FDF', 100);
$d1->crtaj();

$d2 = new Okvir('green', 150);
$d2->crtaj();

for ($i = 0; $i < 10; $i++) {
    (new okvir('green', 150 * $i))->crtaj();
}

$nasarray = [$d1, $d2];

foreach ($nasarray as $key => $value) {
    $value->bojaokvira = 'yellow';
    $value->unutarnji_text = 'xxxxxxxxx';
    $value->left = 250;
    $value->crtaj();
}

?>

<div>lksjdfkljhaws</d