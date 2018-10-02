<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 5;
$b = 10;
$c = 15.5;

echo $a;
echo'<br/>';
echo $b;
echo'<br/>';
echo $c;

$a = 3;
$b = 5;


$pom =$a;
$a = $b;
$b = $pom;
echo'<br/>';
echo $a;
echo'<br/>';
echo $b;

echo'<br/>';

$ime = "Vesna";
$prezime ="Duplancic";

echo $ime;
echo'';
echo $prezime;


$ime ="Vesna";
$prezime ="Duplancic";
echo'<br/>';
echo $ime."".$prezime;

$a = 5;
echo'<br/>';
$a++;
echo $a;

$a--;
echo $a;


 $a = 5;
 $a = (float)$a;
 echo'<br/>';
 echo $a;
 
 $a=5;
 $a +=5;
 echo'<br/>';
 echo $a;
 
 $a = 7;
 $b = 3;
 
 echo $a." + ".$b." =".($a+$b)." <br/>";
 echo $a." - ".$b." =".($a-$b)." <br/>";
 echo $a." * ".$b." =".($a*$b)." <br/>";
 echo $a." / ".$b." =".($a/$b)." <br/>";
 echo $a." % ".$b." =".($a%$b)." <br/>";
     
 
