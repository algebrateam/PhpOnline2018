<?php
if (isset($_POST['potvrdi'])) {
    $filename = './data.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_POST['broj']);
    fwrite($handle, $_POST['ime']);
    fwrite($handle, $_POST['datum']);
    fwrite($handle, $_POST['odluka']);
    fclose($handle);
}
$dat = file('./data.txt');
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
            Datum: <input value="16.Ožujak.2018.">
            Odluka: <select name="odluka"> 
                <option>Pad</option>
                <option>Prolaz</option>
            </select>
            <input name="potvrdi" type="submit">

            <?php
            if (file_exists($filename)) {
                echo '<table border=1>';
                foreach ($dat as $red) {                   
                    echo '<tr><td>'.$red.'</td></td>';
                    }
            }
            echo '</table>';
            ?>
        </form> 

    </body>
</html>



