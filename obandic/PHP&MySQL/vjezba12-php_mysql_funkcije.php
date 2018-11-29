<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>6. zadatak - 2. način</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT COUNT(sifNastavnik) FROM nastavnik WHERE LEFT(prezNastavnik,1) IN ('M')";

            $result = mysqli_query($link, $query);
            
            $row = mysqli_fetch_assoc($result);

            echo 'Broj nastavnika čije prezime počinje slovom M: ' . $row['COUNT(sifNastavnik)'];
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>