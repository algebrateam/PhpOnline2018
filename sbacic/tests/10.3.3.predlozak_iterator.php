<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Automobile
{
    protected $vehicleMake;
    protected $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
    public function __toString()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel.' <br> ';
   }

}

class Salon implements Iterator
{
 private $pozicija=0;
 
 private $array=array();
 
    public function fill(Automobile $a) {
        $this->array[]=$a;
    }
    public function current() {
        return $this->array[$this->pozicija];
    }

    public function key(): \scalar {
        return $this->pozicija;
    }

    public function next(): void {
        ++$this->pozicija;
    }

    public function rewind(): void {
        $this->pozicija=0;
    }

    public function valid(): bool {
        return isset($this->array[$this->pozicija]);
    }

}

$sal=new Salon();
$sal->fill(new Automobile('Fiat','Tipo'));
$sal->fill(new Automobile('Fiat','Uno'));
$sal->fill(new Automobile('Fiat','Panda'));
$sal->fill(new Automobile('Fiat','Činkvećento'));


// ispisi sve automobile pomocu foreach
foreach ($sal as $a) {
    echo $a;
}

print_r($sal);
echo '<hr>';

$sal->rewind();
echo $sal->current();
echo $sal->current();
echo $sal->next();
echo $sal->current();
echo $sal->next();
echo $sal->current();
echo $sal->next();
echo $sal->current();