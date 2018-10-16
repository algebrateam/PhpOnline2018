<?php
$filename = 'vjezba20-saforme.txt';

$contents = '';

if (is_file($filename)) {
    $mode = 'r';
    $handle = fopen($filename, $mode);
    $contents = fread($handle, filesize($filename));
    fclose($handle);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Uređivanje sa forme</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="width:600px; border:1px solid #A9A9A9;">
            <h2 align="center">Vaša poruka</h2>
            <form method="POST" action="">
                <p align="center">
                    <textarea name="poruka" cols="75" rows="15"></textarea>
                </p>

                <p align="center">
                    <input name="submit" type="submit" value="Spremi">
                </p>
            </form>
        </div>
    </body>
</html>

<?php
//print_r($_GET);

if (isset($_POST['submit'])) {

    $filename = 'vjezba20-saforme.txt';

    $mode = 'a+';

    $handle = fopen($filename, $mode);

    fwrite($handle, $_POST['poruka'] . "\n \n");

    fclose($handle);
}
?>