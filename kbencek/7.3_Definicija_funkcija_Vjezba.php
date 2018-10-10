<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Primjer funkcija<br>'; 

echo ('Primjer funkcija<br>'); 

$timestamp= time();
  echo $timestamp ; 

  echo '<br>';
  
echo 'Ime Kristijan ima' .strlen ('Kristijan'). 'slova';

echo '<br>';

$polje=array('Audi' , 'Bmw', 'Fiat');

    if (is_array ($polje)) {

        
foreach ($polje as $key => $value) {
    echo '<br>Riječ' .$value. 'ima' . strlen($value). 'znakova';
}
    } else {
        echo 'Nije array';   
}

echo '<br>?' .date('F');
echo '<br>?' .date('d.m.Y');
echo '<br>?' .date('d.m.Y');
echo '<br>?' .date('m.Y.d');

function hr_dan(){
    switch (date('W')) {
        case 0: return 'Nedjelja';
            break;
            case 1: return 'Pon';
                break;
                case 2: return 'Uto';
                    break;
                    case 3: return 'Sri';
                        break;
        case 4: return 'Cet';
            break;
            case 5: return 'Pet';
            echo '<br>danas je'.strtolower(hr_dan());
                
}
}

echo '<hr>Ispis HTML tablice pomocu funkcije';

$boje = [['#21302' , 'bijela' , '55%'],
        ['#212202' , 'Crvena' , '44%'],
        ['#212202' , 'zuta' , '44%'],
        ['#212202' , 'Plava' , '44%'],
        ['#212202' , 'Crvena' , '44%']];

    function ispistablice($b){
        echo'<table borfer=1>';
        foreach ($b as $boja){
        echo '<tr>';
        foreach ($boja as $v){
            echo '<td>' .$v. '</td>';
        }
        echo '</tr>';
        
        }
        echo '</table>';
    }

    ispistablice($boje);

    
        
    
   
 
