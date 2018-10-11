<?php

echo'Prvi primjer print_r';
$polje = ['Tesla', 'Edison', 'Bell'];
echo '<pre>';
print_r($polje);
echo'</pre>';
echo '<hr>';
echo'<br>';
echo'Drugi primjer for: <br>';
echo'<br>';
for ($i = 0; $i <= 2; $i++) {
    echo $polje[$i].'<br>';
}
echo '<hr>';
echo'<br>';
echo'Treći primjer for_count: <br>';
echo'<br>';
for ($i = 0; $i < count($polje); $i++) {
    echo $polje[$i].'<br>';
}
echo '<hr>';
echo'<br>';
echo'Treći primjer foreach: <br>';
echo'<br>';
foreach ($polje as $ime) {
    echo $ime.'<br>';
}
echo '<hr>';
echo'<br>';
echo'Sortiranje vrijednosti polja sort: <br>';
echo'<br>';
$fruits = [0=>'limun', 'a'=>'naranca', 1=>'banana', 'b'=>'jabuka'];
sort($fruits);
echo '<pre>';
print_r($fruits);
echo'</pre>';
    echo '<br>';
echo '<hr>';
echo'<br>';
echo'Sortiranje vrijednosti polja asort: <br>';
echo'<br>';
$fruits = [0=>'limun', 'a'=>'naranca', 1=>'banana', 'b'=>'jabuka'];
asort($fruits);
echo '<pre>';
print_r($fruits);
echo'</pre>';
echo '<hr>';
echo'<br>';
echo'Sortiranje vrijednosti polja rsort: <br>';
echo'<br>';
$fruits = [0=>'limun', 'a'=>'naranca', 1=>'banana', 'b'=>'jabuka'];
rsort($fruits);
echo '<pre>';
print_r($fruits);
echo'</pre>';
echo '<hr>';
echo'<br>';
echo'Sortiranje vrijednosti polja rsort: <br>';
echo'<br>';
$fruits = [0=>'limun', 'a'=>'naranca', 1=>'banana', 'b'=>'jabuka'];
ksort($fruits);
echo '<pre>';
print_r($fruits);
echo'</pre>';
echo '<hr>';
echo'<br>';
echo'Prebrojavanje elemenata polja: <br>';
echo'<br>';
$br_elem = 0;
foreach ($fruits as $key) {
    $br_elem++;
}
echo 'Polje ima:'.' '.$br_elem.' elementa';
echo '<hr>';
echo'<br>';
echo'Pretraživanje polja: <br>';
echo'<br>';
$br_elem = 0;
foreach ($fruits as $key => $value) {
    if ($value == 'banana') {
        break;
    }
}
echo 'U nizu je'.' '.$value.' tražena vrijednost';
echo '<hr>';
echo'<br>';
