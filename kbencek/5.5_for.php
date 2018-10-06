<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for ($i=0;$i<=10; $i+=2) {
    echo '<br> vrijednost i je jednaka' .$i;
}

echo '<hr>';

for ($i=0;$i<=10; $i++) {
    if($i&2!=0) continue;
    echo '<br> vrijednost i je jednaka' .$i;
}