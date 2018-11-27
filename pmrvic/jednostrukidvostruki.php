<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ime="Marko";
$prezime="O'Hara";
$prezime= addslashes($prezime);

$query="INSERT INTO ..   ".$ime.' , '.$prezime;
echo $query;

//$query="INSERT INTO ..   ? , ?";
//mysql---Prepare(query)
// mysqli_bind($ime,$prezime)