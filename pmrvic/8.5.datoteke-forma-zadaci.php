<?php
$filename = './saforme.txt';  // najispravnije
$contents = '';
if (is_file($filename)) {
    $mode = 'r';
    $handle = fopen($filename, $mode);  //$handle je tipa 'Resource'
    $contents = fread($handle, filesize($filename));
    fclose($handle);  // obavezno zatvori stream
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Primjer forme za editiranje datoteke</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Slijedi forma:</div>
        <div>
            <form method="post">  
                Sadržaj: <br>
 <textarea rows="15" cols="50" name="unos" title="uredi text"><?php echo $contents; ?></textarea><br>
                <input name="potvrdi" type="submit">
            </form>
            
            
        </div>
    </body>
</html>
<?php

//print_r($_GET);

if (isset($_POST['potvrdi'])) {
    $filename = './saforme.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_POST['unos']);
    fclose($handle);  // obavezno zatvori stream
}
