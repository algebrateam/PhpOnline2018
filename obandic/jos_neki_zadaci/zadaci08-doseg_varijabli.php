<?php

// DOSEG ILI VIDLJIVOST VARIJABLI
// *****************************************************************************
// LOKALNE VARIJABLE

function ispisi()
{
    $a = 2;
    echo $a; // ispisuje 2
}

$a = 5;
ispisi();

echo '<hr>';

// *****************************************************************************
// LOKALNE VARIJABLE

$a = 5;

function inc_a()
{
    $a = 0;
    $a++;
    echo $a; // ispisuje 1
}

// $a=9; onda umjesto 5 ispisuje 9
inc_a();
echo $a; // ispisuje 5, na ovo funkcija ne djeluje

echo '<hr>';

// *****************************************************************************
// GLOBALNE VARIJABLE

$a = 5;

function ispisi2()
{
    global $a;
    echo $a;
}

// $a = 5; varijablu mogu napisati i ovdje
ispisi2();

echo '<hr>';

// *****************************************************************************
// GLOBALNE VARIJABLE

$a = 3;

function inc_a2()
{
    global $a;
    $a++;
    echo $a; // ispisuje 4
}

inc_a2();
inc_a2();
inc_a2();
echo '<br>'.$a;

echo '<hr>';

// *****************************************************************************
// STATIČNE VARIJABLE - bez ključne riječi STATIC

function inc3_a()
{
    $a = 0;
    $a++;
    echo $a;
}

inc3_a();
inc3_a();
inc3_a();

echo '<hr>';

// *****************************************************************************
// STATIČNE VARIJABLE - sa ključnom riječi STATIC

function inc4_a()
{
    static $a = 0;
    $a++;
    echo $a;
}

inc4_a();
inc4_a();
inc4_a();

echo '<hr>';
