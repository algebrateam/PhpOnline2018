<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//zadatak broj 1: Napisati funkciju koja vraca hrvatski naziv za trenutacni mjesec

function hr_mjesec($month){
  $mj_array[1] = 'Sijecanj';
  $mj_array[2] = 'Veljaca';
  $mj_array[3] = 'Ozujak';
  $mj_array[4] = 'Travanj';
  $mj_array[5] = 'Svibanj';
  $mj_array[6] = 'Lipanj';
  $mj_array[7] = 'Srpanj';
  $mj_array[8] = 'Kolovoz';
  $mj_array[9] = 'Rujan';
  $mj_array[10] ='Listopad';
  $mj_array[11] ='Studeni';
  $mj_array[12] ='Prosinac';
  
  return $mj_array[$month];
}
  
  $month = date ('n');
  
  echo hr_mjesec($month); 
  
  echo '<hr>';
  
  // Funkcija za zbrajanje,razliku,umnozak i dijeljenje dva broja,funkcija koja ce pozivati sve te funkcije odjednom
  
  function sum($a,$b){
    return $a+$b;
  }
  
  function raz($a,$b){
    return $a-$b;
  }
  
  function mnoz($a,$b){
    return $a*$b;
  }

  function djel($a,$b){
    return $a/$b;
  }
  
  function sve($a,$b){
    
   echo sum($a,$b);
   echo raz($a,$b);
   echo mnoz($a,$b);
   echo djel($a,$b);
   
   }
   
   $i = 8;
   $j = 4;
   
   sve($i,$j);
   
   echo '<hr>';
   
   //Funkcija koja ispisuje html tablicu imena i prezimena ucenika,kao parametar joj se prosljeduje polje s imenima i prezimenima ucenika
  
   function ispis_tablice($ucenici) {
     echo '<table border=1>';
     foreach ($ucenici as $key => $ime) {
       echo '<tr><td>'
       .$key.'</td>;
           <td>'.$ime.'</td>;
       </tr>';
     }
     echo '</table>';
   }
     
     $ucenici = array('Ana','Andrea','Maja');
     
     ispis_tablice($ucenici);
     
     echo '<hr>';
     
     
     //Funkcija koja prima varijabilni broj parametara.Parametri su kombinirani brojevi i stringovi.
     //Za svaki parametar ispisite kojeg je tipa
     
     function broj(){
   $parametar = func_get_args();
   foreach ($parametar as $broj) {
       if (is_int($broj)) {
           echo $broj.' je broj<br>';
       }
       else {
           echo $broj.' je string <br>';
       }
   }
}
broj(3, 'sedam', 'zadatak', 9, 8);
