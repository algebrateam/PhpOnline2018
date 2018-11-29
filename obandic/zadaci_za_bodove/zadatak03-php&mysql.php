<?php
include_once './dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forma</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query_tpl = "SELECT stud.mbrStud, imeStud, prezStud FROM stud ORDER BY prezStud ASC";

            if ($stmt = $mysqli->prepare($query_tpl)) {
                $stmt->execute();
                $stmt->bind_result($col1, $col2, $col3);
                ?>

                <form method = "POST" action = "studdetails.php">

                    <?php
                    echo 'LISTA STUDENATA<br><br>';
                    ?>

                    <select name = "student">

                        <?php while ($stmt->fetch()) { ?>

                            <option name="<?= $col1 ?>" value="<?= $col1 ?>">
                                <?= $col1 . ' ' . $col2 . ' ' . $col3 ?>
                            </option>

                        <?php } ?>

                    </select>

                    <input type="submit" name="submit_btn" value="Detalji">

                </form>
                <?php
                $stmt->close();
            }
            ?>
        </div>
        
    </body>
</html>
<?php $mysqli->close(); ?>