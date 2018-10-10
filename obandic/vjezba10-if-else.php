<?php

$a = 4;
$b = 2;

echo 'a = '.$a;
echo '<br><br>b = '.$b;

echo '<br><br>';

if ($a <= $b) {
    echo 'Varijabla a je manja ili jednaka od varijable b.';
    $a++;
    $b--;
} else {
    echo 'Varijabla a je veća od varijable b.';
    $a--;
    $b++;
}

echo '<hr>';

echo 'a = '.$a;
echo '<br><br>b = '.$b;

echo '<br><br>';

if ($a <= $b) {
    echo 'Varijabla a je manja ili jednaka od varijable b.';
    $a--;
    $b++;
} else {
    echo 'Varijabla a je veća od varijable b.';
    $a++;
    $b--;
}

echo '<hr>';

echo 'a = '.$a;
echo '<br><br>b = '.$b;

echo '<br><br>';

if ($a <= $b):

    echo 'Varijabla a je manja ili jednaka od varijable b.';
    $a++;
    $b++;

else:

    echo 'Varijabla a je veća od varijable b.';
    $a--;
    $b--;

endif;

echo '<hr>';

echo 'a = '.$a;
echo '<br><br>b = '.$b;
