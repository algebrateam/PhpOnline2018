<?php
include_once './dbconn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.10.4</title>
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
          
          $query = "SELECT imeStud,prezStud FROM stud WHERE pbrRod LIKE 'Zag%'";
            if($stmt=$mysqli->prepare($query)) 
            {
              $stmt->execute();
                
              $stmt->bind_result($col1,$col2);
                
          while ($stmt->fetch())
          {
            echo $col1."-".$col2;
            echo '<br/>';
          }
          
          $stmt->close();
            }
            $mysqli->close();
                
