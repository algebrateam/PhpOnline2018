<?php

include_once 'db_conn.php';

$query = "SELECT imeStud, prezStud  FROM stud WHERE pbrRod = 10000";

if ($stmt = $mysqli->prepare($query)) {
    
    $stmt->execute();
    
    $stmt->bind_result($ime, $prez);
    
    while ($stmt->fetch()) {
        
        echo $ime . " " . $prez . '<br>';
    }

    $stmt->close();
    
} $mysqli->close();




