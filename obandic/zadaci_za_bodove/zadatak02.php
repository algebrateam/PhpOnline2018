<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table {border-collapse: collapse;}
            table, th, td {border:1px solid #000;}
            th, td {width:150px;
                    height:30px;}
            td {text-align: center;
                vertical-align: middle;}
        </style>
    </head>
    <body>
        <h2>Ispis podataka u HTML tablici</h2>

        <table>
            <tr>
                <th>OIB</th>
                <th>Ime i prezime</th>
                <th>Datum polaganja</th>
                <th>Rezultat ispita</th>
            </tr>

            <?php
            $filename = 'data.txt';

            if (is_file($filename)) {
                $datoteka = file($filename);

                $x = count($datoteka) / 4;

                for ($i = 0; $i < $x; $i++) {
                    echo '<tr>';
                    echo '<td>'.$datoteka[(4 * $i)].'</td>';
                    echo '<td>'.$datoteka[(4 * $i + 1)].'</td>';
                    echo '<td>'.$datoteka[(4 * $i + 2)].'</td>';
                    echo '<td>'.$datoteka[(4 * $i + 3)].'</td>';
                    echo '</tr>';
                }
            } else {
                echo 'Podaci se ne mogu ispisati u tablicu jer ne postoji datoteka s podacima.<br><br>';
            }
            ?>
        </table>

    </body>
</html>