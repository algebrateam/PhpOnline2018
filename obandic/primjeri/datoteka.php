<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Primjer forme za upisivanje u datoteku</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Slijedi forma:</div>
        <div>
            <form>  
                Ime: <input type="txt" name="unos" title="unesi ime"><br>
                Godine: <input type="number" name="broj" title="unesi starost"><br>
                <input name="potvrdi" type="submit">
            </form>
            
            
        </div>
    </body>
</html>
<?php

//print_r($_GET);
if (isset($_GET['potvrdi'])) {
    $filename = './saforme.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_GET['unos'].' ima '.$_GET['broj'].' godina'."\n");
    fclose($handle);  // obavezno zatvori stream
}
