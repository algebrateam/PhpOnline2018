<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//prvi zadatak
echo 'Prvi zadatak: <br><br>';

function hr_month()
{
    switch (date('m')):
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

//drugi zadatak
echo '<br><br><hr><br>';
echo 'Drugi zadatak: <br><br>';

$ucenici = [
    ['Marko', 'Marković'],
    ['Mihael', 'Mihaelović'],
    ['Miško', 'Mišković'],
    ['Zlatko', 'Zlatković'],
    ['Zoran', 'Zoranić'],
    ['Zdravko', 'Dren'],
    ];

function tablica($ucenici)
{
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

//treci zadatak
echo '<br><br><hr><br>';
echo 'Treci zadatak: <br><br>';

function zbrajanje($a, $b)
{
    return $a + $b;
}

  function oduzimanje($a, $b)
  {
      return $a - $b;
  }

  function mnozenje($a, $b)
  {
      return $a * $b;
  }

  function djeljenje($a, $b)
  {
      return $a / $b;
  }

  function sve_skupa($a, $b)
  {
      echo zbrajanje($a, $b);
      echo oduzimanje($a, $b);
      echo mnozenje($a, $b);
      echo djeljenje($a, $b);
  }

   echo 'Pozivanje funkcije sve_skupa s a=1 i b=2: <br>';
   $a = 1;
   $b = 2;
   sve_skupa($a, $b);
   echo '<br>';

   echo 'Pozivanje funkcije sve_skupa s c=2 i d=3: <br>';
   $c = 2;
   $d = 3;
   sve_skupa($c, $d);
   echo '<br>';

   echo 'Pozivanje funkcije sve_skupa s e=4 i f=5: <br>';
   $e = 4;
   $f = 5;
   sve_skupa($e, $f);
   echo '<br>';

//cetvrti zadatak
echo '<br><br><hr><br>';
echo 'Cetvrti zadatak: <br><br>';

function odredi_parametar()
{
    $parametar = func_get_args();
    foreach ($parametar as $varijabla) {
        if (is_int($varijabla)) {
            echo $varijabla.' je broj<br>';
        } else {
            echo $varijabla.' je string <br>';
        }
    }
}
odredi_parametar('test', 'jen dva tri', 'dva dva tri', 1, 2, 3, 2, 2, 3);
