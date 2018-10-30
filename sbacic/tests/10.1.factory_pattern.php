<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Singleton
{
    protected static $instance = null;

    protected function __construct()
    {
        //Thou shalt not construct that which is unconstructable!
    }

    protected function __clone()
    {
        //Me not like clones! Me smash clones!
    }

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
}
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
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
class Bravo extends Automobile{
    public function krci()
    {
        return 'krrrrrrr';
    }
        public function __toString()
    {
        return $this->vehicleMake 
            . ' ' 
            . $this->vehicleModel
            . ' ' 
            . $this->krci();
    }
}
class Croma extends Singleton{
    public $boja="zelena";
     public function __toString()
    {
        return 'Ja sam fiat croma, boja mi je '.$this->boja;
    }
}


class AutomobileFactory
{
    public static function create($make, $model)
    {
        if ($model=='Bravo'){
            return new Bravo($make, $model);
        }
        else{
        return new Automobile($make, $model);
        }
    }
}
// NE MOŽE SE DIREKTNO KREIRATI OBJEKT AKO SE KORISTI SINGLETON
//$autocroma=new Croma();
//echo $autocroma;

$autocroma1 = Croma::getInstance();
echo $autocroma1;
echo '<hr>';
$autocroma1->boja='crvena';
echo $autocroma1;
echo '<hr>';
$autocroma2 = Croma::getInstance();
echo $autocroma2;
echo '<hr>';

$auto1=new Automobile('Fiat', 'Tipo');
echo $auto1;
echo '<hr>';

$auto2=AutomobileFactory::create('Fiat', 'Uno');
echo $auto2;
echo '<hr>';

$auto3=AutomobileFactory::create('Fiat', 'Bravo');
echo $auto3;
echo '<hr>';


// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"

