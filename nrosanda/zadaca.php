<?php
if (isset($_POST['potvrdi'])) {
    $filename = './data.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_POST['broj']
            . ', '
            . $_POST['ime']
            . ', '
            . $_POST['datum']
            . ', '
            . $_POST['odluka']
            . "\n");

    fclose($handle);
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Dnevnik</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Finalna odluka:</div>
        <form method="post">
            Broj: <input type="number" name="broj" title="Unesi broj">
            Ime: <input type="text" name="ime" title="Unesi ime">
            Datum: <input type="date" name="datum" value="16.Ožujak.2018.">
            Odluka: <select name="odluka"> 
                <option>Pad</option>
                <option>Prolaz</option>
            </select>
            <input name="potvrdi" type="submit">
        </form>
        <table border="1">

            <tr>

                <th>Broj</th>
                <th>Ime</th>
                <th>Datum</th>
                <th>Odluka</th>
            </tr>
            <?php
            if (file_exists($filename)) {
                $filename = './data.txt';
                $mode = 'rb';
                $handle = fopen($filename, $mode);

                while (!feof($handle)) {

                    $parts = explode('"\n"', $filename);
                    $line = fgets($handle);
                    $part = explode(', ', $line);
                    echo '<tr><td>' . $part[0] . '</td>'
                    . '<td>' . $part[1] . '</td>'
                    . '<td>' . $part[2] . '</td>'
                    . '<td>' . $part[3] . '</td>';
                }
                fclose($handle);
            }
            ?>

        </table>

    </body>
</html>



