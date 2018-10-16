<?php

// PARAMETRI FUNKCIJE
// *****************************************************************************
// PREDAJA PARAMETARA PUTEM VRIJEDNOSTI

function izracunaj1($a, $b, $c, $x)
{
    echo $a * $x * $x + $b * $x + $c;
}

izracunaj1(1, 5, 6, 4);
echo '<br>';
izracunaj1(1, 5, 6, 5);
echo '<br>';
izracunaj1(1, 5, 6, 5, 10); // može više, ali ne može manje

echo '<hr>';

// *****************************************************************************
// PREDAJA PARAMETARA PUTEM VRIJEDNOSTI - ZADANI PARAMETRI

function izracunaj2($x, $a = 1, $b = 5, $c = 6)
{
    echo $a * $x * $x + $b * $x + $c;
}

izracunaj2(5);
echo '<br>';
izracunaj2(1, 5, 6, 5); // zanemaruje predefinirane i uzima nove
echo '<br>';
izracunaj2(1, 5, 6, 5, 10); // može više, ali ne može manje

echo '<hr>';

// *****************************************************************************
// PREDAJA PARAMETARA PUTEM VRIJEDNOSTI

function povecaj1($a)
{
    $a++;
    echo 'Vrijednost u funkciji: '.$a.'<br>';
}

$broj = 2;
povecaj1($broj);
echo 'Vrijednost nakon povratka iz funkcije: '.$broj;

echo '<hr>';

// *****************************************************************************
// PREDAJA PARAMETARA PUTEM REFERENCE

$a = 1;
$b = &$a;
echo $a.$b.'<br>';
$a++;
echo $a.$b.'<br>';
$b++;
echo $a.$b;

echo '<hr>';

// *****************************************************************************
// PREDAJA PARAMETARA PUTEM REFERENCE

function povecaj2(&$a)
{
    $a++;
    echo 'Vrijednost u funkciji: '.$a.'<br>';
}

$broj = 2;
povecaj2($broj);
echo 'Vrijednost nakon povratka iz funkcije: '.$broj;

echo '<hr>';

// *****************************************************************************
// VRAĆANJE REZULTATA FUNKCIJE

function izracunaj3($a, $b, $c, $x)
{
    return $a * $x * $x + $b * $x + $c;
}

$f1 = izracunaj3(1, 5, 6, 4);
echo $f1.'<br>';
echo izracunaj3(1, 5, 6, 5);

echo '<hr>';

// *****************************************************************************
// VRAĆANJE REZULTATA FUNKCIJE

function izracunaj4($a4, $b4, $c4, $x4)
{
    return $a4 * $x4 * $x4 + $b4 * $x4 + $c4;
}

$a4 = 1;
$b4 = 5;
$c4 = 6;
$x4 = 4;

echo izracunaj4($a4, $b4, $c4, $x4).'<br>';

$a4 = 1;
$b4 = 5;
$c4 = 6;
$x4 = 5;

echo izracunaj4($a4, $b4, $c4, $x4).'<br>';

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function broj_parametara()
{
    echo '<br>Broj poslanih parametra je: '.func_num_args();
}

broj_parametara(5, 7, 3);
broj_parametara(1, 16, 28, 77, 109, 481, 3555);
broj_parametara(11, 222, 333, 4444);

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function sum()
{
    $sum = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $sum += func_get_arg($i);
    }

    return $sum;
}

echo sum(5, 7, 3).'<br>';
echo sum(1, 16, 28, 77, 109, 481, 3555).'<br>';
echo sum(11, 222, 333, 4444).'<br>';

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function zbroj()
{
    $parametri = func_get_args();
    $zbroj = 0;

    foreach ($parametri as $parametar) {
        $zbroj += $parametar;
    }

    return $zbroj;
}

echo zbroj(5, 7, 3).'<br>';
echo zbroj(1, 16, 28, 77, 109, 481, 3555).'<br>';
echo zbroj(11, 222, 333, 4444).'<br>';

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function srednja_vrijednost()
{
    $parametri = func_get_args();
    $zbroj = 0;

    foreach ($parametri as $parametar) {
        $zbroj += $parametar;
    }

    return $zbroj / func_num_args();
}

echo srednja_vrijednost(5, 7, 3).'<br>';
echo srednja_vrijednost(1, 16, 28, 77, 109, 481, 3555).'<br>';
echo srednja_vrijednost(11, 222, 333, 4444).'<br>';

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function minimum()
{
    return min(func_get_args());
}

echo minimum(5, 7, 3).'<br>';
echo minimum(1, 16, 28, 77, 109, 481, 3555).'<br>';
echo minimum(11, 222, 333, 4444).'<br>';

echo '<hr>';

// *****************************************************************************
// VARIJABILNI BROJ PARAMETARA

function maksimum()
{
    return max(func_get_args());
}

echo maksimum(5, 7, 3).'<br>';
echo maksimum(1, 16, 28, 77, 109, 481, 3555).'<br>';
echo maksimum(11, 222, 333, 4444).'<br>';

echo '<hr>';
