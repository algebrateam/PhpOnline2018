<?php

/*1.Koristeći se operatorima usporedbe veće od i manje od i iskazom if-else
 * provjerite odnos varijabli $a = 4 i $b =2 i ispišite prikladnu poruku
 */
$a = 4;
$b = 2;

if ($a > $b) {
    echo 'Varijabla a je veca od varijable b';
} else {
    echo 'Varijabla b je veca od varijable a';
}
/*2. Napišite program koji rabi dije varijable $a i $b. Definirajte im proizvoljne
 * brojčane vrijednosti. Ako je $a veće od $b, onda uvečajte vrijednost $a za
 * jedan a ako je veća varijabla $b, onda je umanjite za jedan koristeći se
 * operatorima automatskog povećavanja i smanjivanja.
 * Ispišite na kraju vrijednosti varijable
 */
echo '<hr>';

$a = 2;
$b = 7;
echo 'Početna vrijednost varijable $a je '.$a;
echo '<br>Početna vrijednost varijable $b je '.$b;
if ($a > $b) {
    $a++;
} else {
    $b--;
}
echo '<hr>Završna vrijednost varijable $a je '.$a;
echo '<br>Završna vrijednost varijable $b je '.$b;

/*3. S pomoću while petlje ispišite brojeve od 1 do 50 na ekran,
 * jedan ispod drugog.
 */
echo '<hr>';

$i = 1;
while ($i <= 50) {
    echo $i.'<br/>';
    $i++;
}

/*4.S pomoću petlje for zbrojite brojeve od 20 do 30 te zbroj ispišite na ekran.
 *
 */
echo '<hr>';
$zbroj = 0;
 echo '<hr>';
for ($e = 20; $e >= 20 && $e <= 30;) {
    $zbroj += $e;
    $e++;
}
echo $zbroj;

echo '<hr>';
$zbroj = 0;
// koristiti iterator imena varijabli $i, $j, $k, $ii, $iii, $jj...
for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
}
echo $zbroj;
