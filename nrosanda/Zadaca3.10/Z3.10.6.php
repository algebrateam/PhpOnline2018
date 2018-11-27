<?php

include_once 'db_conn.php';

$query= "SELECT COUNT(prezNastavnik) FROM nastavnik WHERE prezNastavnik LIKE 'M%'";

if($stmt = $mysqli->prepare($query)){
    
    $stmt->execute();
    
    $stmt->bind_result($prez);
    
    while ($stmt->fetch()){
        
        echo 'Broj nastavnika cija prezimena pocinju na slovo M ima: '. $prez;
    }
    
    $stmt->close();
    
} $mysqli->close();
