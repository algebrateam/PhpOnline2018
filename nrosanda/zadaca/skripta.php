<!DOCTYPE html>

<html>
    <head>
        <title>skripta.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 


            <?php
            for ($i = 1; $i < 6; $i++) {
                echo "<a href='skripta.php?broj=" . $i . "'> $i </a><br>";
            }

            if (isset($_GET['broj'])) {
                echo "Odabrali ste broj: " . $_GET['broj'];
            }
            ?>


        </div>
    </body>
</html>
