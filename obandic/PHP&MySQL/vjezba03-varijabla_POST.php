<!DOCTYPE html>

<!--
1.6 Zadaci za ponavljanje - 2. zadatak
-->

<html>

    <head>
        <title>1.6 Zadaci za ponaljanje - 2. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div>

            <form method="POST" action="#">

                <p>Koliko imena želite upisati?</p>
                <input type="number" name="broj">
                <input type="submit" name="submit_num" value="Potvrdi"><br><br>

                <?php
                if (isset($_POST['submit_num'])) {

                    for ($i = 1; $i <= $_POST['broj']; $i++) {

                        echo 'Ime: <input type="text" name="ime' . $i . '"><br><br>';
                    }

                    echo '<input type="submit" name="submit_btn" value="Obrada">';
                }
                ?>
            </form>


        </div>

        <hr>
        <div>
            <?php
            if (isset($_POST['submit_btn'])) {

                for ($i = 1; $i <= (count($_POST) - 2); $i++) {
                    echo $i . '. ime: ' . $_POST["ime$i"] . '<br>';
                }
            }
            ?>

        </div>

    </body>

</html>