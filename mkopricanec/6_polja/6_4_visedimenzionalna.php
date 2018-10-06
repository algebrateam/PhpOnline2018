<?php

  /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $elem1 = array(1,5,7);
  $elem2 = array(4,8,9);
  $elem3 = array(2,3,6);
  
  $multi_array = array($elem1,$elem2,$elem3);

  echo '<pre>';
  print_r($multi_array);
  echo '</pre>';
  
  echo $multi_array[2][1]; 
  
  foreach($multi_array as $elem)
  {
      foreach($elem as $val)
      {
          echo $val;
      }
  }
  
  $erem1 = array('ime' => 'Petar', 'prezime' => 'Petric', 'MB' => '123');
  $erem2 = array('ime' => 'Ante', 'prezime' => 'Antic', 'MB' => '234');
  
  $multi_array1 = array('ucenik1' => $erem1, 'ucenik2' => $erem2);
  
  
  echo '<pre>';
  print_r($multi_array1);
  echo '</pre>';
  
  echo $multi_array1['ucenik2']['MB'];
  