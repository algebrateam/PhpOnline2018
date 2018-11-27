<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 
            <form method="POST" enctype="multipart/form-data" action="#">
                <?php
                if (isset($_REQUEST)) {
                    echo 'Unesite broj željenih datoteka: ';
                    ?>
                    <input type="number" name="broj" min="1" max="5" value=" 
                           <?php echo $_REQUEST['broj']; ?>">   
                       <?php } ?>
                <input type="submit" value="Send"><br>

                <?php
                if (isset($_REQUEST['broj'])) {
                    for ($i = 0; $i < $_REQUEST['broj']; $i++) {
                        ?>
                        <ul>
                            File: 
                            <li><input type="file" name="file"><br></li>
                        </ul>
                        <?php
                    } echo '<input type="submit" name="submit_btn" '
                    . 'value="Upload"><br>';
                }


                if (isset($_REQUEST['submit_btn'])) {

                    $uploaddir = __DIR__ . '/../upload/';
                    $uploadfile = basename($_FILES['file']['name']);

                    $file_array = explode(".", $uploadfile);
                    $file_ext = end($file_array);
                    $file_on_server = "file_" . time() . "." . $file_ext;

                    $new_file_name = $uploaddir . $file_on_server;

                    if (move_uploaded_file($_FILES['file']['tmp_name'], $new_file_name)) {
                        echo "<br>Upload successfully done!<br>";
                    }
                }
                ?>
            </form>
        </div>
    </body>
</html>
