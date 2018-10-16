<?php
if (isset($_POST['potvrdi'])) {
    $filename = './data.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_POST['broj']."\n");
    fwrite($handle, $_POST['ime']."\n");
    fwrite($handle, $_POST['datum']."\n");
    fwrite($handle, $_POST['odluka']."\n");
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
            Datum: <input type="date" name="datum" value="16.Ožujak.2018.">
            Odluka: <select name="odluka"> 
                <option>Pad</option>
                <option>Prolaz</option>
            </select>
            <input name="potvrdi" type="submit">

            <?php
            if (file_exists($filename)) {
                echo '<table border="1" width="300">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>';
                echo 'Broj';
                echo '</th>';
                echo ' <th>Ime</th>';
                echo '<th>Datum</th>';
                echo '<th>';
                echo 'Odluka';
                echo '</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo ' <tr>';
                echo '<td>';
                echo $_POST['broj'];
                echo '</td>';
                echo '<td>';
                echo $_POST['ime'];
                echo '</td>';
                echo '<td>';
                echo '16.Ožujak.2018.';
                echo '</td>';
                echo '<td>';
                echo $_POST['odluka'];
                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
            }
            ?>
        </form> 

    </body>
</html>



