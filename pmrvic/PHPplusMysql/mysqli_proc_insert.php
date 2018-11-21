<?php
include_once './dbconn_proc.php';
?>
<!DOCTYPE html>
<html>
<body>
 
    
    <?php
       /*
    [mbrStud] => 1120
    [imeStud] => Zdenko
    [prezStud] => Kolac
    [pbrRod] => 31000
    [pbrStan] => 40000
    [datRodStud] => 1985-06-06 00:00:00
    [jmbgStud] => 0606985330186
    */
    
      $query ="INSERT INTO stud(mbrStud,imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud)";
      $query .="VALUES(1521,'George','Washington',10000,10000,'1985-06-06 00:00:00','0606985330177')";
      
      $result= mysqli_query($link, $query);
      
      echo "broj insertanih / update / ili delete redova:". mysqli_affected_rows($link)."<br>";
      
      echo mysqli_errno($link); //	Returns the last error code for the most recent function call
      echo "<pre>";
      print_r( mysqli_error_list($link));//	Returns a list of errors for the most recent function call
       echo "</pre>";
      echo mysqli_error($link); //Returns the last error description for the most recent function call
      
      /**
     * PRIMJER kada se inserta zapis za koji već postoji primary key
     * 
     * broj insertanih / update / ili delete redova:-1
      1062
      Array
      (
      [0] => Array
      (
      [errno] => 1062
      [sqlstate] => 23000
      [error] => Duplicate entry '1521' for key 'PRIMARY'
      )

      )
      Duplicate entry '1521' for key 'PRIMARY'
     */
    ?>
      
</body>

</html>


