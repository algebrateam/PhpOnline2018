<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for ($i = 1; $i <= 10; $i++) {
    echo '<br> vrijednost i je jednaka'.$i;
}

echo '<hr>';
//svaki drugi broj
for ($e = 0; $e <= 10; $e += 2) {
    echo '<br> vrijednost e je jednaka'.$e;
}

echo '<hr>';
//svaki drugi neparni
for ($f = 1; $f <= 10; $f += 2) {
    echo '<br> vrijednost f je jednaka'.$f;
}

echo '<hr>';
//preskoci neparne
for ($d = 1; $d <= 10; $d++) {
    if ($i % 2 != 0) {
        continue;
    } //ukoliko naletis na neparan broj ispali van
    echo '<br> vrijednost d je jednaka'.$d;
}
