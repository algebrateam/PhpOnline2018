<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './Covjek.php';
include './Kupac.php';

/*
 *   NE MOŽEMO DIREKTNO INSTANCIRATI APSTRAKTNU KLASU
 *
$C1=new Covjek('Aleksandar Makedonski');
//echo $C1->ime;  // protected svojstvo ! ne može!
$C1->set_ime('Aleksandra Makedonski');
//echo $C1->ime;

echo "<hr>";

$C2=new Covjek('Marko Antonije');
//$C2->set_ime('Marko Antonije');
//echo $C2->ime;
*/
echo '<hr>';

$K1 = new Kupac('Ivan');
//echo $K1->ime;
$K1->ispis();

echo '<hr>';
$K2 = new Kupac('Anica');
$K2->ispis();

echo '<hr>';
$K3 = new Kupac('Marija');
//echo $K3->id_kupca;  //id_kupca je private, dohvati sa metodom public get_id()
$K3->ispis();
echo '<br>dohvacamo ime covjeka Kupac::get_ime() --> '.$K3->get_ime();
