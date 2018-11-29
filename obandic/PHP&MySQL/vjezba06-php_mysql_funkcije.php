<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>1. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT mbrStud, imeStud, prezStud FROM stud WHERE imeStud='Ivan'";

            $result = mysqli_query($link, $query);

            echo 'Studenti koji se zovu Ivan: <br><br>';
            while ($row = mysqli_fetch_row($result)) {
                echo $row[0] . " " . $row[1] . " " . $row[2] . "<br>";
            }
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>