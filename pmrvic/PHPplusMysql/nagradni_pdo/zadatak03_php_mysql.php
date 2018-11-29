<?php
include_once './dbconn_pdo.php';
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
$sql = 'SELECT stud.mbrStud, imeStud, prezStud FROM stud ORDER BY prezStud ASC';
$stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
 $stmt->execute();  
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    ?>

                <form method = "POST" action = "studdetails.php">

                    <?php
                    echo 'LISTA STUDENATA<br><br>';
                    ?>

                    <select name = "student">

                        <?php while ($row=$stmt->fetch()) { ?>

                            <option name="<?= $row['mbrStud'] ?>" value="<?= $row['mbrStud'] ?>">
                                <?= $row['mbrStud'] ?> <?= $row['imeStud'] ?> <?= $row['prezStud'] ?>
                            </option>

                        <?php } ?>

                    </select>

                    <input type="submit" name="submit_btn" value="Detalji">

                </form>
        </div>
        
    </body>
</html>
<?php $conn = null; ?>