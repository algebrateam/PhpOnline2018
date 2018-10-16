<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Ovo je direktan pristup istom primjeru.';

$filename = 'polaznici.txt';
$mode = 'r';
$handle = fopen($filename, $mode);
fclose($handle);
