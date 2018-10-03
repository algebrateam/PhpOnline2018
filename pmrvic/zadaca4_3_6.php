<?php

/*
 * dvije varijable, 7 i 3 ispiši sve rezultate osnovnih operacija
 */

$a = 7;
$b = 3;
echo $a.'+'.$b.'='.($a + $b).'<br/>';
echo $a.'-'.$b.'='.($a - $b).'<br/>';
echo $a.'*'.$b.'='.($a * $b).'<br/>';
echo $a.'/'.$b.'='.($a / $b).'<br/>';
echo $a.'/'.$b.'=';
printf('%01.2f <br>', ($a / $b)); // $a."/".$b."=".($a/$b)."<br/>";
echo $a.'%'.$b.'='.($a % $b).'<br/>';
