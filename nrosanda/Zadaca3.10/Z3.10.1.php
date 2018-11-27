<?php include_once 'db_conn.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 
            <?php
            $query = "SELECT * FROM stud WHERE imeStud = 'Ivan'";
            $result = $mysqli->query($query);
            ?>
            <table border="1" width="180">
                <tr>
                    <th>Mbr</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                </tr>
                <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $row['mbrStud'] ?></td>
                            <td><?= $row['imeStud'] ?></td>
                            <td><?= $row['prezStud'] ?></td>
                        <?php
                        }
                    }
                    ?>
                </tr>
            </table>
        </div>
    </body>
</html>

<?php $mysqli->close(); ?> 