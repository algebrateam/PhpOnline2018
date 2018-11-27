<?php

include_once 'db_conn.php';

$query = "SELECT nazPred FROM pred ORDER BY nazPred ASC";

$result = $mysqli -> query($query);

if ($result) {
    
    while ($row = $result -> fetch_assoc()) {

        echo $row ['nazPred'] . '<br>';
    }
}  $mysqli -> close();
