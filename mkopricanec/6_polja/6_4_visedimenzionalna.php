<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $elem1 = [1, 5, 7];
  $elem2 = [4, 8, 9];
  $elem3 = [2, 3, 6];

  $multi_array = [$elem1, $elem2, $elem3];

  echo '<pre>';
  print_r($multi_array);
  echo '</pre>';

  echo $multi_array[2][1];

  foreach ($multi_array as $elem) {
      foreach ($elem as $val) {
          echo $val;
      }
  }

  $erem1 = ['ime' => 'Petar', 'prezime' => 'Petric', 'MB' => '123'];
  $erem2 = ['ime' => 'Ante', 'prezime' => 'Antic', 'MB' => '234'];

  $multi_array1 = ['ucenik1' => $erem1, 'ucenik2' => $erem2];

  echo '<pre>';
  print_r($multi_array1);
  echo '</pre>';

  echo $multi_array1['ucenik2']['MB'];
