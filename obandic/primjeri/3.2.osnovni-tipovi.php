<?php

//Tipovi podataka
// ------------------------

$a = 987;  // cjelobrojni

$b = 78.45;  // pokretni zarez, decimalni

$nizznakova = 'Ovo je mala voćlak poslije kiše';  // nizovi znakova

// Logičke vrijednosti
$logickaistina = true;

$logickalalaz = false;

if ($logickaistina) {
    echo '<br>Ljudi kazu da je istina!';
}
if ($logickalalaz) {
    echo '<br>ovo se nece vidjeti';   // ovo preskoci
} else {
    echo '<br>ovo se dogodi ako je logicka laz na false'; //ovo ispiše
}

// obrnemo istinu uz pomoć znaka ! ....
if (!$logickalalaz) {
    echo '<br>ovo se nece vidjeti';   // sada ovo ispiše
} else {
    echo '<br>ovo se dogodi ako je logicka laz na false';
}
