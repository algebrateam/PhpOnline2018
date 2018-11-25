<?php
include_once './dbconn_proc.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Zadatak 3.10.6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>

      <?php
      $query ="SELECT COUNT(sifNastavnik) FROM prezNastavnik LIKE 'M%'";
      
      if($stmt = $mysqli->prepare($query))
      {
        $stmt->execute();
        
        $stmt->bind_result($col1,$col2);
        
        while ($stmt->fetch())
        {
         echo $col1." - ".$col2;
         echo '<br/>';
         
        }
        
        $stmt->close();
      }
      
      $mysqli->close();
      