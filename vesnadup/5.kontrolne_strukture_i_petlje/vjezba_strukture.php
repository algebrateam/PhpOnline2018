<?php

// if-else - 1. primjer
$a = 1;
if ($a = 10) {
    echo 'Varijabla a je jednaka 2';
}

echo '<hr>';
// 2. primjer
$naziv = 'Algebra';

if ($naziv == 'PHP') {
    echo 'Varijabla ima istu vrijednost';
} else {
    echo 'Varijabla ima neku drugu vrijednost';
}

echo '<hr>';

$a = 1;
if ($a <= 2) {
    echo 'Varijabla a je manja ili jednaka broju 2';
    $a++;
} else {
    echo 'Varijabla je veća od broja 2';
    $a = 1;
}

 //3. primjer endif :

 echo '<hr>';

 $a = 1;
 if ($a <= 2):
 echo 'Varijabla je manja ili jednaka broju 2';
 $a++;
 else:
 echo '<varijabla je veća od broja 2';
 $a = 1;
 endif;

//4. primjer - više if-else iskaza. Naslov koji im od 5-10 znakova.

echo '<hr>';

$naziv = 'Algebra';

if (strlen($naziv) > 10) {
    echo 'Naziv ima više od 10 znakova';
} else {
    if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
        echo 'Duzina naziva je u zadanom nizu';
    } else {
        echo 'Naziv je prekratak';
    }
}

//isti primjer drugačije napisan - optimalnije
echo '<hr>';

$naziv = 'Algebra';

if (strlen($naziv) > 10) {
    echo 'Naziv ima više od 10 znakova';
} elseif (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
    echo 'Dužina naziva je u zadanom nizu';
} else {
    echo 'Naziv je prekratak';
}

 echo '<hr>';
//ternarni uvjetni operator

 $a = 3;

 $b = ($a > 5) ? -1 : 1;

 echo $a + $b;

 echo '<hr>';
 // switch-case - zamjenjuje višestruko ponavljanje ključne riječi elseif

 $naziv = 'algebra';

 switch ($naziv) :

    case 'algebra': //blok koda koji se izvršava
         break;

    case 'php': //blok koji se izvršava
        break;
    case 'tesla': //blok koji se izvršava
        break;
    default: //blok koda koji se izvršava
endswitch;
