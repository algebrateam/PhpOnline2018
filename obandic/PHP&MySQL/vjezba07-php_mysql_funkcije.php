<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>2. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT DISTINCT nazPred FROM pred ORDER BY nazPred ASC";

            $result = mysqli_query($link, $query);

            echo 'Svi predmeti ispisani abecednim redom: <br><br>';
            while ($row = mysqli_fetch_row($result)) {
                echo $row[0] . "<br>";
            }
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>