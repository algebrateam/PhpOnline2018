<?php

/* 
 * zbrajanje brojeva od 1 do 1000
 * i naći kod kojeg broja je zbroj veći od 80 (str.49)
 */
$zbroj=0;
$i=1;
$konacnibroj=1000;
while ($zbroj<=15 ) {
    $zbroj +=$i;
     echo $i. ' ';
    $i++;  
}
echo "<br>ukupna suma x brojeva = ".$zbroj;

echo'<hr> primjer sa do-while<br>';

$zbroj=0;
$i=1;
do {
    $zbroj +=$i;
     echo $i. ' ';
    $i++;  
}
while (($zbroj<=15));
echo "<br>ukupna suma x brojeva = ".$zbroj;

echo'<hr> primjer sa riješenjem break-om<br>';

$zbroj=0;
$i=1;
$konacnibroj=1000;
$ciljanibroj=80;
while ($i <=$konacnibroj) {
    $zbroj +=$i;
    if ($zbroj>=$ciljanibroj)
        break;
        
     echo $i. ' ';
    $i++;  
}
echo "<br>zbroj svih brojeva od 1 do broja "
        .($i-1)
        .' je manj od '
        .$ciljanibroj;