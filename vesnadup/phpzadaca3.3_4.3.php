<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*ZADACI ZA PONAVLJANJE 3.3
 * Definirajte nekoliko razli?itih broj?anih varijabli i ispište ih
 */
$a = 5;
$b = 10;
$c = 15.5;

echo $a;
echo'<br/>';
echo $b;
echo'<br/>';
echo $c;

$a = 3;
$b = 5;

/* Defin. varijablu $a s vrijednoš?u 3 i varijablu $b v vrijednoš?u 5.
 * Korištenjem pomo?ne varijable $pom zamijenite njihove sadržaje.
 */
$pom = $a;
$a = $b;
$b = $pom;
echo'<br/>';
echo $a;
echo'<br/>';
echo $b;

/*Kreirati varijablu s tekstualnom vrijednoscu. Dodijelite joj vrijednost vaseg
 * imena i prezimena. Ispisati vrijednost.
 */
echo'<br/>';
$ime = 'Vesna';
$prezime = 'Duplancic';

echo $ime;
echo'';
echo $prezime;

/*ZADACI ZA PONAVLJANJE 4.3
 * Defirajte 2 varijable $ime i $prezime. Ispisati te dvije varijable
 * koriste?i se operatorom za nastavljanje nizova.
 */
$ime = 'Vesna';
$prezime = 'Duplancic';
echo'<br/>';
echo $ime.''.$prezime;

/*Postaviti vrijednost varijable $a na 5. Korištenjem operatora automatskog
 * pove?avanja i smanjivanja najprije pove?ajte vrijednost varijable $a te
 * ispišite, a nakon toga smanjite vrijednost pa ispišite.
 */
$a = 5;
echo'<br/>';
$a++;
echo $a;

$a--;
echo $a;

/*Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj
 *  s pomi?nim zerezom (float) i ispišite na ekran.
 */
 $a = 5;
 $a = (float) $a;
 echo'<br/>';
 echo $a;

 /*Varijablu  $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom
  * uve?ajte za 5.
  */
 $a = 5;
 $a += 5;
 echo'<br/>';
 echo $a;

 /*Napraviti php stranicu s 2 varijable $a = 7 i $b =3. Zatim na ekranu ispisati
  * rezultate aritmeti?kih operacija na sljede?i na?in:
  * a. 7+3 = 10
  * b. 7-3 = 4
  * c. 7*3 = 21
  * d. 7/3 =2,333333
  * e. 7 % 3 = 1
  */
 $a = 7;
 $b = 3;

 echo $a.' + '.$b.' ='.($a + $b).' <br/>';
 echo $a.' - '.$b.' ='.($a - $b).' <br/>';
 echo $a.' * '.$b.' ='.($a * $b).' <br/>';
 echo $a.' / '.$b.' ='.($a / $b).' <br/>';
 echo $a.' % '.$b.' ='.($a % $b).' <br/>';
