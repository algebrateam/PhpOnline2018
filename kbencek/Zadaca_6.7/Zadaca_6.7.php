 <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 //Zadatak 1
$naziv = ['Mercedes', 'Audi', 'BMW', 'Lexus', 'Fiat'];

    foreach ($naziv as $ime) {
        echo $ime;
        echo '<br>';
    }
     echo '<hr>';

   //Zadatak 2

  $naziv = ['ime5' => 'Mercedes', 'ime4' => 'Audi', 'ime3' => 'BMW', 'ime2' => 'Lexus', 'ime1' => 'Fiat'];

  foreach ($naziv as $ime) {
      echo $ime;
      echo '<br>';
  }
     echo '<hr>';

//Zadatak 3

     $naziv = ['ime5' => 'Mercedes', 'ime1' => 'Audi', 'ime2' => 'BMW', 'ime4' => 'Lexus', 'ime3' => 'Fiat'];
     asort($naziv);

     foreach ($naziv as $ime) {
         echo $ime;
         echo '<br>';
     }
     echo '<hr>';

     //Zadatak 4

         $naziv = ['ime5' => 'Mercedes', 'ime1' => 'Audi', 'ime2' => 'BMW', 'ime4' => 'Lexus', 'ime3' => 'Fiat'];
     asort($naziv);

     foreach ($naziv as $key => $ime) {
         echo $key.'=';
         echo $ime;
         echo '<br>';
     }

    //Zadatak 5

    echo '<hr>';

    for ($i = 1; $i <= 100; $i++) {
        $polje[] = $i;
    }

foreach ($polje as $broj) {
    echo $broj.'<br>';
}
