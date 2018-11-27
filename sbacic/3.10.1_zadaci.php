<?php
include_once './dbconn_proc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Zadatak 3.10.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <?php
      
      $query = "SELECT * FROM stud WHERE imeStud LIKE '%Ivan'";

      $result= mysqli_query($link, $query);
      echo "<pre>";
      var_dump($result);
      
      print_r($result);
      
      $row = mysqli_fetch_assoc($result);
       print_r($row);
      echo "</pre><hr>";
       echo "<br>Broj redova vracenih querijem:".$result->num_rows;
       echo "<br>Broj redova vracenih querijem:".mysqli_num_rows($result);
       
       function vrati_broj_redova($r){
           return $r->num_rows;
       }
       echo "<br>Broj redova vracenih querijem:".vrati_broj_redova($result);
       echo "<hr>";
       
       while ($row = mysqli_fetch_assoc($result)) {
       echo $row["mbrStud"]." ".$row["prezStud"]."<br>";
       }
       ?>
       
       </div>
  </body>
</html>
<?php mysqli_close($link); ?>