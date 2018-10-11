<?php

/* 
zadatak 1
 */

function hr_mjesec()
{  // 
switch (date('n')) {    
case 0: return 'Prosinac';
break;
case 1: return 'Siječanj';
break;
case 2: return 'Veljača';
break;
case 3: return 'Ožujak';
break;
case 4: return 'Travanj';
break;
case 5: return 'Svibanj';
break;
case 6: return 'Lipanj';
break;
case 7: return 'Srpank';
break;
case 8: return 'Kolovoz';
break;
case 9: return 'Rujan';
break;
case 10: return 'Listopad';
break;
case 11: return 'Studeni';
break;
}
}
echo '<br>Ovo je mjesec ' .strtolower(hr_mjesec());


/* 
zadatak 2
 */

$učenici= [['Kristijan' , 'Bencek'], 
    ['Marko' , 'Bencek'],
    ['Josipa' , 'Bencek'], 
    ['Gordana' , 'Bencek'],
    ['Ines' , 'Bencek'],
    ['Dragutin' , 'Bencek'],];

function ispistablice($b)
{
    echo '<table border=1>';
    foreach ($b as $učenici) {
        echo '<tr>';
        foreach ($učenici as $v) {
            echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

ispistablice($učenici);
echo '<br>';