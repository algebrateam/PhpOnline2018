<?php
include_once './dbconn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.10.5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            li:nth-child(odd) { color:chocolate}
           #mbr1484 {background-color: goldenrod;
           color:red}          
        </style>
    </head>
    <body>
        <div>

            <?php
            $query = "SELECT imeStud FROM stud WHERE imeStud LIKE 'A%'";
        if ($stmt = $mysqli->prepare($query)) {
          
          /* execute query */
    $stmt->execute();
    
    /* store result */
    $stmt->store_result();
    
    printf("Number of rows: %d.\n", $stmt->num_rows);

    /* close statement */
    $stmt->close();

        }
        
        $mysqli->close();

