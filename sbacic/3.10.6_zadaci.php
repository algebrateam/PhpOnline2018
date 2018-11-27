<?php
include_once './dbconn.php';

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
      $query ="SELECT COUNT(sifNastavnik) FROM nastavnik WHERE prezNastavnik LIKE 'M%'";
      
      if($stmt = $mysqli->prepare($query))
      {
        $stmt->execute();
        
        $stmt->bind_result($col1);
        
        while ($stmt->fetch())
        {
         echo "broj nastavnika čije prezime počinje s slovom M je:".$col1;
         echo '<br/>';
         
        }
        
        $stmt->close();
      }
      
      $mysqli->close();
      