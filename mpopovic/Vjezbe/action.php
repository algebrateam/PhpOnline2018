<?php

$file = file_get_contents('data1.txt'); 
$rows = explode("\n", $file); // napravi array od stringa na svakom novom redu 

$html = "<table>"; // google html table
$html = $html . "<tr><th>Broj</th><th>Ime</th><th>Datum</th><th>Boja</th></tr>";

foreach($rows as $row) {
    $html = $html . "<tr>"; // za svaki unos otvori se table row
    $rowEntry = explode(",", $row); // ovo napravi array od stringa na svakom zarezu
    foreach($rowEntry as $entry) {
        $html = $html . "<td>". $entry ."</td>"; // za svaku vrijednost napravi se jedan table data
    }

    $html = $html . "</tr>"; // zatvorit table row 
}

$html = $html . "</table>"; // zatvorit tablu

echo $html;


