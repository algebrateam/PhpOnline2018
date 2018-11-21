<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<form method = "POST" action = "">';

if(!isset($_POST["btn_br"]))
{
    echo 'Broj imena za upis';
    echo'<input type = "text" name = "br" value = ""/>';
    echo'<input type = "submit" name = "btn_br" value = "Unesi"/>';
}
else
{
    $br = (int)$_POST["br"];
    
    for($i = 1;$i <= $br;$i++)
    {
        echo 'ime:';
        echo '<input type = "text" name = "imena['.$i.'][ime]"value = ""/>';
        echo 'prezime:';
        echo '<input type = "text" name = "imena['.$i.'][prezime]"value = ""/>';
        echo '<br/>';
    }
    echo '<input type = "submit" name = "btn" value = "Unesi"/>';
}

echo '</form>';

if(isset($_POST["btn"]))
{
    $imena = $_POST["imena"];
    
    foreach ($imena as $key => $value) 
    {
        echo $val["ime"]."".$val["prezime"]."<br/>";
    }
}