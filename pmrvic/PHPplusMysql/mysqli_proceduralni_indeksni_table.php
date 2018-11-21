<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Popis studenata mysqli proceduralnim pristupom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT * FROM stud LIMIT 9";
            $query1 = "SELECT * FROM nastavnik LIMIT 17";

            $result = mysqli_query($link, $query);
            $result1 = mysqli_query($link, $query1);
            echo "<pre>";
            var_dump($result);

            print_r($result);

            // asocijacija
            // $row = mysqli_fetch_assoc($result);
            // indeksno
            $row = mysqli_fetch_row($result);

            print_r($row);
            echo "</pre><hr>";
            echo "<br>Broj redova vraćenih querijem:" . $result->num_rows;
            echo "<br>Broj redova vraćenih querijem:" . mysqli_num_rows($result);

            function vrati_broj_redova($r) {
                return $r->num_rows;
            }

            echo "<br>Broj redova vraćenih querijem:" . vrati_broj_redova($result);
            echo "<hr>";
            /*
              while ($row = mysqli_fetch_row($result)) {
              //echo $row['imeStud']." ".$row['prezStud']. " ".$row['mbrStud']."<br>";
              echo $row[1]." ".$row[2]. " ".$row[0]."<br>";
              }
             */
            ?>
            <table border="1">
<?php while ($row = mysqli_fetch_row($result)) { ?> <!-- START REPEATER -->
                    <tr>
                        <td><?= $row[1] ?></td>  <!-- kao php echo $row[1]  -->
                        <td><?= $row[2] ?></td>
                        <td><?= $row[0] ?></td>
                    </tr>
<?php } ?>  <!-- STOP REPEATER -->
            </table>
            
            <!-- Mogli smo umjesto $result1->field_count koristiti mysqli_num_fields()-->
            <table border="1">
<?php while ($row = mysqli_fetch_row($result1)) { ?> <!-- START REPEATER 1 -->
                    <tr>
                        <?php for($i=0;$i<$result1->field_count;$i++) { ?> <!-- START REPEATER 2 -->
                        <td><?= $row[$i] ?></td
                        <?php } ?>  <!-- STOP REPEATER -->
                    </tr>
<?php } ?>  <!-- STOP REPEATER 1-->
            </table>
            
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>