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
function mini($a = 2, $b = 7)
{
    /*
     * // @BUG Ovo vraca grešku
     * Warning: min(): Array must contain at least one element in
     */
    //echo '<hr>'.min(func_get_args()); // Ovo vraca grešku Warning: min(): Array must contain at least one element in
    print_r(func_get_args());
    // Ispravno:
    echo '<hr>'.min([$a, $b]);
}
$func_name = 'mini';
// prvi način:
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
// drugi način:
if (function_exists($func_name)) {
    $func_name(13);
}

