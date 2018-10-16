<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Forma</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Form</div>
        <div>
            <form>
            <input type="text" name="ime">
            <input type="number" name="broj">
            <input type="date" name="datum"> 
            <input type="submit" name="potvrda">
            <select name="Rezultat">
                <option value="Prolaz">Prolaz</option>
                <option value="Pad">Pad</option>
            </select>
            </form>
        </div>
    </body>
</html>
<?php

//print_r($_GET);
if (isset($_GET['potvrda'])) {
    $filename = './data.txt';
    $mode = 'a+';
    $handle = fopen($filename, $mode);
    fwrite($handle, $_GET['ime'].' '.$_GET['broj'].' '.$_GET['datum'].' '.
            $_GET['Rezultat']."\n");
    fclose($handle);        
}
