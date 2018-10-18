<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function zbroj($a = 0, $bb = 5, $ccc = 7)
{
    $sum = 0;
    foreach (func_get_args() as $value) {
        $sum += $value;
    }

    return $sum;
}
echo zbroj(4, 7);
echo '<hr>';
 echo zbroj(7);  // greška! Uncaught ArgumentCountError
echo '<hr>';
// ako se ne preda parametar pretpostavi da je jednak 0
 echo zbroj();
 echo '<hr>';
 echo zbroj(4, 7, 9);  // ne radi jer imamo parametar viška
 echo '<hr>';
  echo zbroj(2, 2, 2, 2, 2, 2, 2, 2, 2, 2);  // ne radi jer imamo parametar viška
 echo '<hr>';
 function brojpara()
 {
     echo '<br>broj poslanih parametra je: '.func_num_args();
     echo '<br>parametar na indexu 5 je:'.func_get_arg(5);
 }
brojpara(2, 3, 45, 43, 88, 33, 123, 99, 11, 100);
brojpara(2, 3, 45, 43, 88);
