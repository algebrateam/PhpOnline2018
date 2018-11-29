<!DOCTYPE html>

<!--
1.6 Zadaci za ponavljanje - 4. zadatak
-->

<html>
    <head>
        <title>1.6 Zadaci za ponaljanje - 4. zadatak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div>

            <form method="POST" enctype="multipart/form-data" action="#">

                <p>Upišite broj datoteka koje želite prebaciti na server</p>
                <input type="number" name="broj" max="5">
                <input type="submit" name="submit_num" value="Potvrdi"><br><br>

                <?php
                if (isset($_POST['submit_num'])) {

                    echo 'Datoteka za upload:<br><br>';

                    for ($i = 1; $i <= $_POST['broj']; $i++) {
                        echo '<input type="file" name="datoteka' . $i . '" value=""><br><br>';
                    }
                    echo '<input type="submit" name="submit_btn" value="Upload"><br><br>';
                }
                ?>

            </form>

        </div>
        <hr>
        <div>
            <?php
            if (isset($_POST['submit_btn'])) {

                for ($i = 1; $i <= (count($_FILES)); $i++) {

                    $uploaddir = __DIR__ . '/../upload/';
                    $uploadfile = basename($_FILES["datoteka$i"]['name']);

                    $file_array = explode(".", $uploadfile);
                    $file_ext = end($file_array);

                    $file_on_server = "file_" . time() . "." . $file_ext;

                    $new_file_name = $uploaddir . $file_on_server;

                    if (move_uploaded_file($_FILES["datoteka$i"]['tmp_name'], $new_file_name)) {
                        echo "Datoteka$i prebačena je na server.<br>";
                    }
                }
            }
            ?>

        </div>
    </body>

</html>