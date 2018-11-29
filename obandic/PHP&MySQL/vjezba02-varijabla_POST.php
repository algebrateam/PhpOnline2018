<!DOCTYPE html>

<!--
1.6 Zadaci za ponavljanje - 1. zadatak DRUGI NAČIN
-->

<html>

    <head>
        <title>1.6 Zadaci za ponaljanje - 1. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>

            <form method="POST" action="#">

                <?php
                for ($i = 1; $i <= 5; $i++) {

                    echo 'Ime: <input type="text" name="ime' . $i . '"> '
                    . 'Prezime: <input type="text" name="prezime' . $i . '"><br><br>';
                }
                ?>

                <input type="submit" name="submit_btn" value="Obrada">
            </form>


        </div>

        <hr>
        <div>
            <?php
            if (isset($_POST['submit_btn'])) {

                for ($i = 1; $i <= 5; $i++) {
                    echo 'Ime i prezime: ' . $_POST["ime$i"] . ' ' . $_POST["prezime$i"] . '<br>';
                }
            }
            ?>

        </div>
    </body>
</html>