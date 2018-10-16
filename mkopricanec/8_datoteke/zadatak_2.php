<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$filename = 'data.txt';

function ispistablica($ucenici)
{
    echo '<table border = 1>';
    foreach ($ucenici as $ucenik) {
        echo '<tr>';
        $podatci = explode(',', $ucenik);
        foreach ($podatci as $podatak) {
            echo '<td>'.$podatak.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

if (is_file($filename)) {
    $raw = file_get_contents($filename);
    $ucenici = explode("\n", $raw);

    if (empty($ucenici[count($ucenici) - 1])) {
        unset($ucenici[count($ucenici) - 1]);
    } //Ružno izgleda kad je zadnji red prazan a nisam imao bolju ideju

    ispistablica($ucenici);
} else {
    echo 'Datoteka data.txt ne postoji.';
}
