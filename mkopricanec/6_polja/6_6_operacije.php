<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fruits = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];

$br_elem = 0;

foreach ($fruits as $val) {
    $br_elem++;
}
echo $br_elem;
echo '<hr>';

echo count($fruits);
echo '<hr>';

foreach ($fruits as $key => $val) {
}
echo $val;
echo '<hr>';

echo end($fruits);
echo '<hr>';

foreach ($fruits as $key => $val) {
    if ($val == 'banana') {
        break;
    }
}

echo $key;
echo '<hr>';

$key = array_search('banana', $fruits);
echo $key;

if (in_array('banana', $fruits)) {
    echo 'banana postoji u polju';
}
