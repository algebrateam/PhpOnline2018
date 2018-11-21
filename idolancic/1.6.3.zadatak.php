<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
for($i=1;$i<=5;$i++)
{
    echo'<a href = "skripta.php?broj = '.$i.'">';
    echo $i;
    echo '</a><br/>';
}

if((int)$_GET["broj"] > 0)
{
    echo'Odabrali ste broj:'.$_GET["broj"];
}
