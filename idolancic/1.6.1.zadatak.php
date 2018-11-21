<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<form mehod="POST" action="">';

for ($i=1;$i<=5;$i++)
{
    echo 'ime:';
        echo '<input type = "text" name = "imena['.$i.'][ime]" value = ""/>';
        echo 'prezime:';
        echo '<input type = "text" name = "imena['.$i.'][prezime]" value = ""/>';
        echo '<br/>';
}

echo '<input type = "submit" name= "btn" value = "Unesi"/> </form>';

if(isset($_POST["btn"]))
{
    $imena = $_POST["imena"];
    
    foreach ($imena as $key => $value) 
    {
    echo $val["ime"]."".$val["prezime"]."<br/>";    
    }
}
    
