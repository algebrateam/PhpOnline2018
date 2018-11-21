<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<form method = "POST" action = "" enctype = "multipart/form-data">';

if(!isset($_POST["btn_br"]))
{
    echo 'Broj datoteka:';
    echo '<input type = "text" name = "br" value = ""/>';
    echo '<input type = "submit" name = "btn_br" value = "Prikazi formu"/>';
}
else
{
    $br = (int)$_POST["br"];
    
    for($i = 1;$i<=$br;$i++)
    {
        echo 'Datoteka'.$i.':';
        echo '<input type = "file" name = "datoteka['.$i.']" value = ""/><br/>';
    }
    echo '<input type = "submit" name = "btn_upload" value = "Upload"/>';
}

echo '</form>';

if(isset($_POST["btn_upload"]))
{
    $uploaddir = '/doc';
    
    for($i= 1;$i<=count($_FILES['datoteka']['name']);$i++)
    {
        $uploadfile = basename($_FILES['datoteka']['name'][$i]);
        $new_file_name = $uploaddir.$uploadfile;
        
        if(move_uploaded_file($_FILES['datoteka']['tmp_name'][$i],$new_file_name))
        {
            echo 'Datoteka'.$i.'je pohranjena<br/>';
        }
    }
}