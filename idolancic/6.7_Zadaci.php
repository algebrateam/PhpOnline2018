<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//1.zadatak
$imena = ['Ivan','Tomislav','Pavo','Marko','Ruzica'];
foreach($imena as $val){
    echo $val;
    echo ' ';
}
echo '<br/>';

//2.zadatak
$imena = ['ime0' => 'Ivan','ime1' => 'Tomislav','ime2' => 'Pavo',
    'ime3' => 'Marko','ime4' => 'Ruzica'];

//3.Zadatak
sort($imena);
for($i=0;$i < count($imena);$i++){
    echo $imena[$i];
}
echo '<br/>';
//4.Zadatak
ksort($imena);
foreach ($imena as $key => $value) {
    echo $key.'=>'.$value;
}
echo '<br/>';
//5.zadatak
$polje = [];
for($i=0;$i <= 100;$i++){
    $polje[] = $i;
}
foreach($polje as $val){
    echo $val;
    echo '<br/>';
}

