<?php

function mini($a = 5, $b = 7)
{
    echo '<hr>'.min(func_get_args());
}
$ime = 'mini';
switch ($ime){
    case 'mini':
        mini(5, 7);
        break;
}

// Koristili smo funkciju func_get_args a nismo nigdje definirali mini

