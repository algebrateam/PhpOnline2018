<?php
/*
 * Funkcija za promjenjivim imenom
 */
function sum($a = 5, $b = 7)
{
    echo '<hr>'.($a + $b);
}
function avg($a = 5, $b = 7)
{
    echo '<hr>'.($a + $b) / 2;
}
function mini($a = 5, $b = 7)
{
    echo '<hr>'.(min([$a,$b]));
}
$func_name = 'mini';
switch ($func_name) {
    case 'sum':
sum();
       // break;
    case 'avg':
avg();
        break;
        case 'mini':
mini();
        break;
}
if (function_exists($func_name)) {
    $func_name();
}