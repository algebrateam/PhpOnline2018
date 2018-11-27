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
            $query = "SELECT * FROM stud LIMIT 5";
            $result = $mysqli->query($query);

            echo "ispis pomoću asocijacija:<br>";
            echo "Ukupno zapisa:(".$mysqli->affected_rows.")<br>";
            while ($row = $result->fetch_assoc()) {
                echo $row['imeStud'] . " " . $row['prezStud'] . '</br>';
            }

            echo "<hr>";
            echo "ispis pomoću indexa:<br>";

            $query2 = "SELECT * FROM stud LIMIT 5";
            $result2 = $mysqli->query($query2);

            echo "<ul>";
            while ($row = $result2->fetch_row()) {
                echo "<li>" . $row[1] . " " . $row[2] . '</li>';
            }
            echo "</ul>";

            // popunjanjavanje dropdown liste
            $query_stud = "select * from stud "
                . "INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud "
                . "ORDER BY ispit.ocjena DESC LIMIT 5";
            $studenti = $mysqli->query($query_stud);
            
            $query_stud1 = "select * from stud "
                . "INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud "
                . "ORDER BY ispit.ocjena DESC LIMIT 5,25";
            $studenti1 = $mysqli->query($query_stud1);
            ?>


        </div>
        <div>
            <form method="GET" action="/delete/65">

                <select name="student">
                    <!-- repeater favoriti studenti -->
                    <optgroup style="background-color: antiquewhite">
                        <?php while ($row = $studenti->fetch_assoc()) { ?>
                            <option name="student"  id="mbr<?= $row['mbrStud'] ?>" 
                                    value="<?= $row['prezStud'] ?>">
                                <?= $row['imeStud'] ?>
                            </option>
                        <?php } ?>
                    </optgroup>
                    <option value disabled>————————</option>
                        <?php while ($row = $studenti1->fetch_assoc()) { ?>
                            <option name="student" id="mbr<?= $row['mbrStud'] ?>" 
                                    value="<?= $row['prezStud'] ?>">
                                <?= $row['imeStud'] ?>
                            </option>
                        <?php } ?>
                </select>


                <input type="submit" name="potvrdi" value="potvrdi">
            </form>

        </div>




    </body>
</html>
<?php $mysqli->close(); ?>

