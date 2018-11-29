<?php include 'db_conn.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Students</title>      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="studdetails.php">
            <div>
                Odaberi studenta: <br>

                <?php
                $query = "SELECT stud.imeStud FROM "
                        . "stud ORDER BY imeStud ASC";
                $q1 = $conn->query($query);
                $q1->setFetchMode(PDO::FETCH_ASSOC);

                echo '<select name="submit">';
                while ($row = $q1->fetch()) {
                    echo '<option>' . $row ['imeStud'] . '</option>';
                }
                echo '<input type="submit" name ="submit" value="submit"</select>';
                
                
                
                ?>

                </form>
        
            </div>
        </form>
    </body>

</html>

<?php 











$conn = null; ?>
