<?php

  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fruits = [0 => 'limun', 'a' => 'naranca', 1 => 'banana', 'b' => 'jabuka'];

sort($fruits);

echo '<hr>';

rsort($fruits);

echo '<hr>';

asort($fruits);

echo '<hr>';

arsort($fruits);

echo '<hr>';

ksort($fruits);

echo '<hr>';

krsort($fruits);

echo '<hr>';
