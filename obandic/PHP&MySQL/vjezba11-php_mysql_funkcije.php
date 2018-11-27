<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>6. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT * FROM nastavnik WHERE LEFT(prezNastavnik,1) IN ('M')";

            $result = mysqli_query($link, $query);

            echo 'Broj nastavnika čije prezime počinje slovom M: ' . mysqli_num_rows($result); // Funkcija COUNT?! Koje polje???

            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>