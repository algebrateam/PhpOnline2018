<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//zadatak broj 1: Napisati funkciju koja vraća hrvatski naziv za trenutačni mjesec

function mjesec(){
  switch (date('n')) {
    case 1:
      return 'Sijecanj';
    break;
    case 2:
      return 'Veljaca';
    break;
    case 3: 
      return 'Ozujak';
    break;
    case 4: 
      return 'Travanj';
    break;
    case 5: 
      return 'Svibanj';
    break;
    case 6: 
      return 'Lipanj';
    break;
    case 7: 
      return 'Srpanj';
    break;
    case 8: 
      return 'Kolovoz';
    break;
    case 9: 
      return 'Rujan';
    break;
    case 10: 
      return 'Listopad';
    break;
    case 11: 
      return 'Studeni';
    break;
    case 12:
      return 'Prosinac';
      
      echo 'Danas je' .mjesec();

}
              }

