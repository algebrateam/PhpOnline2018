<?php
include_once './dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Prepared statments</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query_tpl = "SELECT stud.mbrStud, imeStud, prezStud, ocjena
                            FROM stud 
                            JOIN ispit ON stud.mbrStud=ispit.mbrStud
                            JOIN pred ON pred.sifPred=ispit.sifPred
                            WHERE pred.nazPred=? AND ispit.ocjena>?";

            echo 'Studenti koji su prošli ispit Osnove baza podataka<br><br>';

            echo '<table border="1">
                    <tr>
                        <th>Matični broj</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Ocjena</th>
                    </tr>';

            $x = "Osnove baza podataka";
            $y = 1;

            if ($stmt = $mysqli->prepare($query_tpl)) {
                $stmt->bind_param('si', $x, $y);
                $stmt->execute();
                $stmt->bind_result($col1, $col2, $col3, $col4);

                while ($stmt->fetch()) {
                    echo '
                    <tr>
                        <td>' . $col1 . '</td>
                        <td>' . $col2 . '</td>
                        <td>' . $col3 . '</td>
                        <td>' . $col4 . '</td>
                    </tr>';
                }

                $stmt->close();
            }
            echo '</table>';
            ?>
        </div>
    </body>
</html>
<?php $mysqli->close(); ?>