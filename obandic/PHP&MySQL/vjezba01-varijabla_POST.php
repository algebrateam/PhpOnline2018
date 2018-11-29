<!DOCTYPE html>

<!--
1.6 Zadaci za ponavljanje - 1. zadatak PRVI NAČIN
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
                $ime_prezime = array('1' => 'Ime', '2' => 'Prezime');

                for ($i = 0; $i < 5; $i++) {
                    foreach ($ime_prezime as $key => $val) {
                        echo $val . ': ' . '<input type="text" name="ime_prezime[]"> ';
                    }
                    echo '<br>' . '<br>';
                }
                ?>

                <input type="submit" name="submit_btn" value="Obrada">
            </form>


        </div>

        <hr>
        <div>
            <?php
            if (isset($_POST['submit_btn'])) {

                for ($i = 0; $i < 5; $i++) {
                    echo 'Ime i prezime: ' . $_POST['ime_prezime'][2 * $i] . ' ' . $_POST['ime_prezime'][2 * $i + 1] . '<br>';
                }
            }
            ?>

        </div>
    </body>
</html>