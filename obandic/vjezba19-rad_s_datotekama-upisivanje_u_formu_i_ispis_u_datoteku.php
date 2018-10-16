<!DOCTYPE html>
<!-- 8.5 Zadatak 2. -->

<html>
    <head>
        <title>Upisivanje u formu i ispis u datoteku</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="width:500px; border:1px solid #A9A9A9;">
            <h2 align="center">Podaci učenika</h2>
            <form method="GET" action="">
                <p align="center">
                    <label for="name">Ime i prezime:</label><br>
                    <input name="name" type="text" size="50" required>
                </p>

                <p align="center">
                    <label for="bdate">Datum rođenja:</label><br>
                    <input name="bdate" type="date" size="20" required>
                </p>

                <p align="center">
                    <input name="submit" type="submit" value="Spremi">
                </p>
            </form>
        </div>
    </body>
</html>

<?php

//print_r($_GET);

if (isset($_GET['submit'])) {

$filename = 'vjezba19-saforme.txt';

$mode='a+';

$handle = fopen($filename, $mode);

fwrite($handle,'Ime i prezime: '.$_GET['name'].' Godina rodenja: '.$_GET['bdate']."\n");

fclose($handle);
}
?>