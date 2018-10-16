<?php

// SLOŽENE UVJETNE STRUKTURE
// *****************************************************************************
// IF-ELSEIF struktura

$a = 7 + 3;
$b = 10;

if ($a > $b) {
    echo 'a je veće od b.';
} elseif ($a < $b) {
    echo 'a je manje od b.';
} else {
    echo 'a je jednako b.';
}

echo '<hr>';

// *****************************************************************************
// IF-ELSEIF struktura

$a = 7;

if ($a == 0) {
    echo 'a je jednako 0.';
} elseif ($a == 1) {
    echo 'a je jednako 1.';
} elseif ($a == 2) {
    echo 'a je jednako 2.';
} else {
    echo 'a nije jednako 0, 1 niti 2.';
}

echo '<hr>';

// *****************************************************************************
// SWITCH-CASE struktura

$a = 7;

switch ($a) {
    case 0:
        echo 'a je jednako 0.';
        break;
    case 1:
        echo 'a je jednako 1.';
        break;
    case 2:
        echo 'a je jednako 2.';
        break;
    default:
        echo 'a nije jednako 0, 1 niti 2.';
}

echo '<hr>';

// *****************************************************************************
// SWITCH-CASE struktura

$a = 7;

switch ($a) {
    case 0:
    case 1:
        echo "a je jednako 0 ili 1.";
        break;
    case 2:
        echo "a je jednako 2.";
        break;
    default:
        echo "a nije jednako 0, 1 niti 2.";
}

echo '<hr>';

// *****************************************************************************
// UGNJEŽĐIVANJE uvjetnih struktura

$pada_kisa = TRUE;
$trava_raste = FALSE;
if ($pada_kisa) {
    if ($trava_raste) {
        echo "Pada kiša, trava raste.";
    } else {
        echo "Pada kiša, ali trava ne raste!?";
    }
} else {
    echo "Ne pada kiša.";
}

echo '<hr>';

// *****************************************************************************
// UGNJEŽĐIVANJE uvjetnih struktura

if ($pada_kisa && $trava_raste) {
    echo "Pada kiša, trava raste.";
} else if ($pada_kisa && !$trava_raste) {
    echo "Pada kiša, ali trava ne raste!?";
} else {
    echo "Ne pada kiša.";
}

echo '<hr>';