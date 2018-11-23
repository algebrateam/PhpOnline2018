<?php
include_once './dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Objektni pristup mysqli</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            li:nth-child(odd) { color:chocolate}
           #mbr1484 {background-color: goldenrod;
           color:red}          
        </style>
    </head>
    <body>
        <div>
            <?php
            $naslov='Batman '.random_int(2000, 9999);
            $query = "DELETE FROM film WHERE naziv LIKE 'Batman%'";
            $result = $mysqli->query($query);

            echo "ispis pomoću asocijacija:<br>";
            echo "Ukupno obrisano zapisa:(affected rows)(".$mysqli->affected_rows.")<br>";
            echo "Zadnji unešeni ID od filma:<b>".$mysqli->insert_id."</b><br>";


            echo "<hr>";
            echo "ispis pomoću indexa:<br>";

            $query2 = "SELECT * FROM film ORDER BY sifra_filma ASC LIMIT 50";
            $result2 = $mysqli->query($query2);

            echo "<ul>";
            while ($row = $result2->fetch_row()) {
                echo "<li value='".$row[0]."'>" . $row[1]. '</li>';
            }
            echo "</ul>";
            ?>


        </div>
    </body>
</html>
<?php $mysqli->close(); ?>

