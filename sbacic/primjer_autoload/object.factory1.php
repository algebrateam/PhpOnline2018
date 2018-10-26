<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Example
{
    public static function factory($type)
    {
        if (include_once 'Drivers/'.$type.'.php') {
            $classname = 'Driver_'.$type;

            return new $classname();
        } else {
            throw new Exception('<br>Driver nije pronadjen', 1);
        }
    }
}

$pro = Example::factory('proba');
$pro->pozdravi();
