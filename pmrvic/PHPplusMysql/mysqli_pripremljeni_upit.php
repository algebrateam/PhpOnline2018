<?php
include_once './dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Objektni pristup mysqli</title>
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
            
            $naslov='Batman '.random_int(2000, 9999);
     //       $query = "INSERT INTO film(naziv) VALUES ('".$naslov."')";
          $query_tpl = "INSERT INTO film(naziv) VALUES (?)";  
          if($stmt=$mysqli->prepare($query_tpl)){
              $stmt->bind_param('s',$naslov);
              $stmt->execute();
          }
            
            //$result = $mysqli->query($query);

            echo "ispis pomoću asocijacija:<br>";
            echo "Ukupno zapisa:(".$mysqli->affected_rows.")<br>";
            echo "Zadnji unešeni ID od filma:<b>".$mysqli->insert_id."</b><br>";


            echo "<hr>";
            echo "ispis pomoću indexa:<br>";

            $query_tpl = "SELECT * FROM film WHERE naziv LIKE ? ORDER BY sifra_filma ASC LIMIT 50";
            if($stmt=$mysqli->prepare($query_tpl)){
              $naziv='Batman%';
              $stmt->bind_param('s',$naziv);
              $stmt->execute();
              $stmt->bind_result($sif,$naz);
       
          }         
            
            //$result2 = $mysqli->query($query2);

          
            echo "<ul>";
            while ($stmt->fetch()) {
                //echo "<li value='".$sif."'>" . $naz. '</li>';
                printf ("<li value='%d'>%s</li>", $sif, $naz);
            }
            echo "</ul>";
            $stmt->close();
            ?>


        </div>
    </body>
</html>
<?php $mysqli->close(); ?>

