<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = './test.txt';
$mode = 'a+';

$handle = fopen($filename, $mode);

for ($i = 0; $i <= 200; $i++) {
    fwrite($handle, $i.'Ovo smo upisali u datoteku test'."\n");
}

fclose($handle);
