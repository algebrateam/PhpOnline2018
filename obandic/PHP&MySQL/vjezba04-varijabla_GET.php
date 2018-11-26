<!DOCTYPE html>

<!--
1.6 Zadaci za ponavljanje - 3. zadatak
-->

<html>

    <head>
        <title>1.6 Zadaci za ponaljanje - 3. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>

            <form method="GET" action="#">

                <p>Upišite 5 stringova!</p>

                <?php
                for ($i = 1; $i <= 5; $i++) {

                    echo 'String' . $i . ': <input type="text" name="string' . $i . '"><br><br>';
                }
                ?>

                <input type="submit" name="submit_btn" value="Obrada">
            </form>


        </div>

        <hr>
        <div>
            <?php
            if (isset($_GET['submit_btn'])) {

                for ($i = 1; $i <= 5; $i++) {
                    echo '<a href="skripta.php?broj=' . $i . '">' . $i . '</a> ' . $_GET["string$i"] . '<br>';
                }
            }
            ?>

        </div>
    </body>
</html>