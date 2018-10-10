<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function zbroj($a=0,$b=0){
    return $a+$b;
}

echo zbroj (4,7);
echo '<hr>';
 echo zbroj (7);  // greška! Uncaught ArgumentCountError
echo '<hr>';
// ako se ne preda parametar pretpostavi da je jednak 0

 echo zbroj ();
 echo '<hr>';
 echo zbroj (4,7,9);  // ne radi jer imamo parametar viška
 echo '<hr>';