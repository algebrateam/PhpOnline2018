<?php
include_once './dbconn_proc.php';
include_once './dbconn_proc2.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Višestruke veze prema bazi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query1 = "SELECT imeStud, prezStud FROM stud WHERE pbrRod=21000";
            $query2 = "SELECT imeStudenta, prezimeStudenta FROM student WHERE pbrRodenja=21000";

            $result1 = mysqli_query($link, $query1);
            $result2 = mysqli_query($link2, $query2);

            echo 'Studenti rođeni u Splitu<br><br>';

            echo '<table border="1">
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                    </tr>';

            while ($row = mysqli_fetch_array($result1)) {
                echo '
                    <tr>
                        <td>' . $row['imeStud'] . '</td>
                        <td>' . $row['prezStud'] . '</td>
                    </tr>';
            }
            while ($row = mysqli_fetch_array($result2)) {
                echo '
                    <tr>
                        <td>' . $row['imeStudenta'] . '</td>
                        <td>' . $row['prezimeStudenta'] . '</td>
                    </tr>';
            }
            echo '</table>';
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>