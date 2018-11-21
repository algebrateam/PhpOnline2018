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
            for ($i = 1; $i < 6; $i++) {
                ?>
                <form method="POST" action="">
                    <label for="ime">Ime</label><br>
                    <input type="text" name="ime[]"><br>
                    <label for="prezime">Prezime</label><br>
                    <input type="text" name="prezime[]"><br>

                <?php } ?>
                <input type="submit" name="next"><br>
            </form>

        </div>
    </body>
</html>

<?php
if (isset($_POST['next'])) {
    for ($i = 0; $i < count($_POST['ime']); $i++) {
        echo '<br>Ime: ' . $_POST['ime'][$i] . '<br>' . ' ' . 'Prezime: ' . $_POST['prezime'][$i] . '<br>';
    }
}
?>   