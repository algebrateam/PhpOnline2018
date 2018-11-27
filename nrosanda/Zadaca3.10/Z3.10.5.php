<?php

include_once 'db_conn.php';

$query = "SELECT imeStud FROM stud WHERE imeStud LIKE 'A%' ";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->execute();

    $stmt->store_result();

    echo "Studenata cija imena pocinju na slovo A ima: " . $stmt->num_rows;

    $stmt->close();
    
} $mysqli->close();
