<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = 'data.txt';
$mode = 'a+';

$handle = fopen($filename, $mode);
fwrite($handle, $_POST['Broj'].$_POST['Ime'].$_POST['Datum'].$_POST['Prolaz']);
fclose($handle);
