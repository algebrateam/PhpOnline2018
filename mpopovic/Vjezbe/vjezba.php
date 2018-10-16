<!DOCTYPE html>

<!-- 
 Zadatak 1:
Napraviti formu koja prima :
Broj (input type number)
Ime (input type text)
Datum (input type date)
Prolaz/Pad (padajući izbornik)
Forma sprema podatke u datoteku data.txt
-->

<html>
    <head>
        <title>Zadaci za bodove</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Zadatak 1:</div>
        <div>
            <form method="post">  
                Upiši broj: <input type="number" name="broj" title="unesi starost"><br>
                Upiši text: <input type="text" name="unos" title="unesi ime"><br>                
                Upiši datum: <input type="date" name="datum" title="unesi datum"><br>
                Izaberi boju:   <select name="boje">
                    <option value="plava">plava</option>
                    <option value="crvena">crvena</option>
                    <option value="zelena">zelena</option>
                    <option value="žuta">žuta</option>
                </select><br>
                <input name="potvrdi" type="submit">
            </form>


        </div>
    </body>
</html>
<?php
//print_r($_GET);

if (isset($_POST['potvrdi'])) {
    $filename = './data.txt';

    /*
    *Ovaj dio sam izbacio i sve stavio u jednu funkciju file_put_contents jer mi je
    * ova opcija (fwrite(...."/n") stalno otvarala novi red u data.txt fileu,
    * što mi je stvaralo probleme u idućim zadacima
    * $mode = 'a+';
    * $handle = fopen($filename, $mode);
    * fwrite($handle, $_POST['broj'].', '.$_POST['unos'].', '.$_POST['datum'].', '.$_POST['boje']."\n");
    * fclose($handle);
    */
    file_put_contents($filename, $_POST['broj'].', '.$_POST['unos'].', '.$_POST['datum'].', '.$_POST['boje']."\r\n", FILE_APPEND);
}

/*
 * Zadatak 2.
 * Stranica provjerava postoji li datoteka data.txt
 * Ukoliko postoji, generira HTML tablicu u kojoj izlistava podatke u 4 stupca.
 */
echo '<hr>Zadatak 2.<br>';

$filename = './data.txt';
if (is_file($filename)) {
    $file = file_get_contents($filename);
    $rows = explode("\n", $file);

    $html = '<table border =1>';
    $html = $html.'<tr><th>Broj</th><th>Tekst</th><th>Datum</th><th>Boja</th></tr>';

    foreach ($rows as $row) {
        $html = $html.'<tr>';
        $rowEntry = explode(',', $row);
        foreach ($rowEntry as $entry) {
            $html = $html.'<td>'.$entry.'</td>';
        }

        $html = $html.'</tr>';
    }

    $html = $html.'</table>';

    echo $html;
} else {
    echo 'Datoteka data.txt ne postoji.';
}

/* Zadatak 3:
 * Uneseni datum prikazati kao 16. ožujak, 2018.
 */

echo '<hr>Zadatak 3.<br>';

if (is_file($filename)) {
    $file = file_get_contents($filename);
    $rows = explode("\n", $file);

    foreach ($rows as $row) {
        $rowEntry = explode(',', $row);
        //echo $rowEntry[2];
        if (is_null($rowEntry)) {
            break;
        } else {
            setlocale(LC_TIME, 'hr_HR');
            echo '<br>';
            echo strftime(' %d. %B, %Y.', strtotime($rowEntry[2]));
            echo '<br>';
        }
    }
} else {
    echo 'Datoteka data.txt ne postoji.';
}
