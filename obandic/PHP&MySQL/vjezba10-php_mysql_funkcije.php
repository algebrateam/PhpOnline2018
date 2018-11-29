<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>5. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $query = "SELECT * FROM stud WHERE LEFT(imeStud,1) IN ('A')";

            $result = mysqli_query($link, $query);

            echo 'Broj studenata čije ime počinje slovom A: '.mysqli_num_rows($result);
            
            ?>
        </div>
    </body>
</html>
<?php mysqli_close($link); ?>