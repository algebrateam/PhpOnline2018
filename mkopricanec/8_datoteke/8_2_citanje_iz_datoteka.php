<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = 'dummytext.php';
$mode = 'r';

$handle = fopen($filename, $mode);

echo '<br> "echo $handle" je beskorisan:';
echo $handle;

$contents = fread($handle, filesize($filename));
fclose($handle);

echo $contents;
echo '<br>';
echo '<hr>';
