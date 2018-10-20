<?php

/*
 * Napisati funkciju koja ispisuje HTML tablicu imena i prezimena učenika a
 * kao parametar joj se prosljeđuje polje s imenika i prezimenima
 */
function ispis_tablica($imenaArray)
{
    echo '
    <table border = "1">
            <tr>
            <th>Ime</th>
            <th>Prezime</th>
            </tr>';
    foreach ($imenaArray as $key => $ucenik) {
        echo '
        <tr>
            <td>'.$ucenik['ime'].'</td>
            <td>'.$ucenik['prezime'].'</td>
        </tr>';
    }
}
echo '</table>';
$ucenici = [];
$ucenici[1]['ime'] = 'Petar';
$ucenici[1]['prezime'] = 'Pan';
$ucenici[2]['ime'] = 'Ivan';
$ucenici[2]['prezime'] = 'Franić';
$ucenici[3]['ime'] = 'Joško';
$ucenici[3]['prezime'] = 'Lucić';
$ucenici[4]['ime'] = 'Pan';
$ucenici[4]['prezime'] = 'Pen';
ispis_tablica($ucenici);
