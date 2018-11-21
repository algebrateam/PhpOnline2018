<!DOCTYPE html>

<html>
    <head>
        <title>Zadatak 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div> 
            <form method="POST" action="#">
                <?php
                if (isset($_REQUEST)) {
                    echo 'Unesite broj željenih datoteka: ';
                    ?>
                <input type="number" name="broj" min="1" max="5" value="<?php echo $_REQUEST['broj']; ?>">   
                <?php } ?>
                <input type="submit" value="Send"><br>
            </form>
            <?php
            if (isset($_REQUEST['broj'])) {
                for ($i = 0; $i < $_REQUEST['broj']; $i++) {
                    ?>
            <ul><form method="POST" action="" enctype="multipart/form-data">
                        File: 
                        <li><input type="file" name="file"><br></li></ul>
                        <?php
                    } echo '<input type="submit" name="next"><br>';
                }
                // echo '<hr>';
                // print_r($_FILES);
                ?>
            </form>
        </div>
    </body>
</html>
