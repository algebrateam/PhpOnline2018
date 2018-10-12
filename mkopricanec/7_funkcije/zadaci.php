<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#prvi zadatak
echo 'Prvi zadatak: <br><br>';

function hr_month()
{
    switch(date('m')):
        case '0':
            $month = 'Siječanj';
        break;
        case '1':
            $month = 'Veljača';
        break;
        case '2':
            $month = 'Ožujak';
        break;
        case '3':
            $month = 'Travanj';
        break;
        case '4':
            $month = 'Svibanj';
        break;
        case '5':
            $month = 'Lipanj';
        break;
        case '6':
            $month = 'Srpanj';
        break;
        case '7':
            $month = 'Kolovoz';
        break;
        case '8':
            $month = 'Rujan';
        break;
        case '9':
            $month = 'Listopad';
        break;
        case '10':
            $month = 'Studeni';
        break;
        case '11':
            $month = 'Prosinac';
        break;
    endswitch;
    
    echo $month;
}

hr_month();

#drugi zadatak
echo '<br><br><hr><br>';
echo 'Drugi zadatak: <br><br>';

$ucenici=[
    ['Marko','Marković'],
    ['Mihael','Mihaelović'],
    ['Miško','Mišković'],
    ['Zlatko','Zlatković'],
    ['Zoran','Zoranić'],
    ['Zdravko','Dren']
    ];

function tablica($ucenici){
echo '<table border = 1>';
    foreach ($ucenici as $red) {
        echo '<tr>';
        foreach ($red as $v) {
            echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

tablica($ucenici);

#treci zadatak
echo '<br><br><hr><br>';
echo 'Treci zadatak: <br><br>';

