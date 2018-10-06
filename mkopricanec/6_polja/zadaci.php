<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#prvi zadatak
  
$imena = array('Boeing','Rockefeller','Lockheed','Trump','Musk');

foreach($imena as $ime)
{
    echo $ime;
    echo '<br>';
}

echo '<hr>';

#drugi zadatak
  
$imena = array('ime5' => 'Boeing','ime4' => 'Rockefeller','ime3' => 'Lockheed','ime2' => 'Trump','ime1' => 'Musk');

foreach($imena as $ime)
{
    echo $ime;
    echo '<br>';
}
echo '<hr>';

#treci zadatak

sort($imena);
$j = count($imena);
for($i = 0; $i < $j; $i++) {
    echo $imena[$i];
    echo "<br>";
}

#cetvrti zadatak

sort($imena);
$j = count($imena);
for($i = 0; $i < $j; $i++) {
    echo $imena[$i];
    echo "<br>";
}