<?php
include_once './dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Podaci o studentu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            
            echo 'PODACI O STUDENTU<br><br>';

            $mbrStud=$_POST['student'];
            echo 'Matični broj: '.$mbrStud.'<br>';

            $query_tpl = "SELECT imeStud, prezStud, datRodStud, "
                        . "m.nazMjesto AS 'Mjesto rođenja', "
                        . "m2.nazMjesto AS 'Mjesto stanovanja', jmbgStud "
                        . "FROM stud s "
                        . "JOIN mjesto m ON m.pbr=s.pbrRod "
                        . "JOIN mjesto m2 ON m2.pbr=s.pbrStan "
                        . "WHERE s.mbrStud=?";
            
            $x = $mbrStud;

            if ($stmt = $mysqli->prepare($query_tpl)) {
                $stmt->bind_param('i', $x);
                $stmt->execute();
                $stmt->bind_result($col1, $col2, $col3, $col4, $col5, $col6);

                while ($stmt->fetch()) {
                    echo 'Ime: '.$col1.'<br>';
                    echo 'Prezime: '.$col2.'<br>';
                    echo 'Datum rođenja: '.$col3.'<br>';
                    echo 'Mjesto rođenja: '.$col4.'<br>';
                    echo 'Mjesto stanovanja: '.$col5.'<br>';
                    echo 'JMBG: '.$col6.'<br><br><br><br>';
                }

                $stmt->close();
            }

            $query_tpl2 = "SELECT DISTINCT nazPred, ocjena "
                        . "FROM stud "
                        . "JOIN ispit ON ispit.mbrStud=stud.mbrStud "
                        . "JOIN pred ON ispit.sifPred=pred.sifPred "
                        . "WHERE stud.mbrStud=$x AND ocjena>?";
            
            echo '<table border="1">
                    <tr>
                        <th>Naziv predmeta</th>
                        <th>Ocjena</th>
                    </tr>';

            $y = 1;

            if ($stmt = $mysqli->prepare($query_tpl2)) {
                $stmt->bind_param('i', $y);
                $stmt->execute();
                $stmt->bind_result($col1, $col2);

                while ($stmt->fetch()) {
                    echo '
                    <tr>
                        <td>' . $col1 . '</td>
                        <td>' . $col2 . '</td>
                    </tr>';
                }
                
                echo 'Broj položenih ispita je '.$stmt->num_rows.'<br><br>';
                
                $stmt->close();
            }
            echo '</table>';
            
            ?>
        </div>
    </body>
</html>
<?php $mysqli->close(); ?>