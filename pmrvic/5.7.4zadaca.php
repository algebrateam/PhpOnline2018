
<?php
 /*
 * pomocu for ispisati zbroj svih brojeva od 20 do 30
  * 20+21+22+...+29+30=
 */
//cetvrti zadatak  Od MarkoKop
$zbroj = 0;
 echo '<hr>';
for ($e = 20; $e >= 20 && $e <= 30;) {
    $zbroj += $e;
    $e++;
}
echo $zbroj;

// Moj prijedlog
echo '<hr>';
$zbroj = 0;
// koristiti iterator imena varijabli $i, $j, $k, $ii, $iii, $jj...
for ($i = 20; $i <= 30; $i++) {
    $zbroj += $i;
}
echo $zbroj;
