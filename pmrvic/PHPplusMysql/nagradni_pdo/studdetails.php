<?php
include_once './dbconn_pdo.php';
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

            $mbrStud = $_POST['student'];
            echo 'Matični broj: ' . $mbrStud . '<br>';

            $query_tpl = "SELECT imeStud, prezStud, datRodStud, "
                . "m.nazMjesto AS 'MjestoRodenja', "
                . "m2.nazMjesto AS 'MjestoStanovanja', jmbgStud "
                . "FROM stud s "
                . "JOIN mjesto m ON m.pbr=s.pbrRod "
                . "JOIN mjesto m2 ON m2.pbr=s.pbrStan "
                . "WHERE s.mbrStud= :maticni";


            $stmt = $conn->prepare($query_tpl, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':maticni' => $mbrStud));
//var_dump($stmt->fetch());

            while ($row = $stmt->fetch()) {
                echo 'Ime: ' . $row['imeStud'] . '<br>';
                echo 'Prezime: ' . $row['prezStud'] . '<br>';
                echo 'Datum rođenja: ' . $row['datRodStud'] . '<br>';
                echo 'Mjesto rođenja: ' . $row['MjestoRodenja'] . '<br>';
                echo 'Mjesto stanovanja: ' . $row['MjestoStanovanja'] . '<br>';
                echo 'JMBG: ' . $row['jmbgStud'] . '<br><br><br><br>';
            }



            $query_tpl2 = "SELECT DISTINCT nazPred, ocjena "
                . "FROM stud "
                . "JOIN ispit ON ispit.mbrStud=stud.mbrStud "
                . "JOIN pred ON ispit.sifPred=pred.sifPred "
                . "WHERE stud.mbrStud=:maticni AND ocjena>1";

            $stmt = $conn->prepare($query_tpl2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':maticni' => $mbrStud));

            echo '<table border="1">
        <tr>
            <th>Naziv predmeta</th>
            <th>Ocjena</th>
        </tr>';

$temp=0;
$brojac=0;
            while ($row = $stmt->fetch()) {
                echo '
                    <tr>
                        <td>' . $row['nazPred'] . '</td>
                        <td>' . $row['ocjena'] . '</td>
                    </tr>';
                $temp+=$row['ocjena'];
                $brojac++;
            }

            echo '</table>';
            echo '<br>Prosjek ocjena je:'.($temp/$brojac);
            ?>
        </div>
    </body>
</html>
<?php $conn = null; ?>