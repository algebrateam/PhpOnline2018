<?php

// 7.8 Zadatak 1.

function hr_mjesec($mj)
{
    $mjeseci = ['1' => 'siječanj', '2' => 'veljača', '3' => 'ožujak', '4' => 'travanj', '5' => 'svibanj', '6' => 'lipanj', '7' => 'srpanj', '8' => 'kolovoz', '9' => 'rujan', '10' => 'listopad', '11' => 'studeni', '12' => 'prosinac'];

    return $mjeseci[$mj];
}

$mj = date('n');
echo 'Ovo je mjesec '.hr_mjesec($mj);

// ******************************************************************************
echo '<hr>';

// 7.8 Zadatak 2.

$ucenici = [['Petar', 'Petrović'], ['Maja', 'Majić'], ['Duje', 'Dujmović'], ['Iva', 'Ivančić'], ['Marko', 'Marković'], ['Ana', 'Anić'], ['Jerolim', 'Jerković'], ['Kristina', 'Kristić'], ['Luka', 'Lukić'], ['Marija', 'Marić']];

function ispis_tablice($u)
{
    echo '<table border="1" width="250">';

    foreach ($u as $ucenik) {
        echo '<tr>';

        foreach ($ucenik as $name) {
            echo '<td>';
            echo $name;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

ispis_tablice($ucenici);

// ******************************************************************************
echo '<hr>';

// 7.8 Zadatak 3.

function zbroj($a, $b)
{
    return $a + $b;
}

function razlika($a, $b)
{
    return $a - $b;
}

function umnozak($a, $b)
{
    return $a * $b;
}

function kolicnik($a, $b)
{
    return $a / $b;
}

function izracunaj($a, $b)
{
    echo '<br>Zbroj je '.zbroj($a, $b);
    echo '<br>Razlika je '.razlika($a, $b);
    echo '<br>Umnožak je '.umnozak($a, $b);
    echo '<br>Količnik je '.kolicnik($a, $b);
}

$x = 5;
$y = 8;

izracunaj($x, $y);

// ******************************************************************************
echo '<hr>';

// 7.8 Zadatak 4.

function vrsta_parametra()
{
    $parametri = func_get_args();

    foreach ($parametri as $param) {
        if (is_string($param)) {
            echo $param.' je string<br>';
        } else {
            echo $param.' je broj<br>';
        }
    }
}

echo vrsta_parametra('Duje', 'Marijeta', 20, 'Temperatura mora', 25, 'Temperatura zraka', 'Pi', 3.14);
