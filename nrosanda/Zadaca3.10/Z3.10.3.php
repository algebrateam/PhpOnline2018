<?php

include_once 'db_conn.php';

//$query = "SELECT imeStud, prezStud FROM "
//        . "stud WHERE prezStud LIKE 'B%' "
//        . "ORDER BY prezStud ASC"; 

// HEREDOC
$query = <<<krajteksta
SELECT imeStud, prezStud 
FROM stud 
WHERE prezStud LIKE 'B%' 
ORDER BY prezStud ASC
krajteksta;

$result = $mysqli -> query($query);

if ($result) {
    
    while ($row = $result -> fetch_assoc()) {
        
        echo $row ['prezStud'] . " " 
            . $row ['imeStud'] . "<br>"; 
    }
    
} $mysqli -> close();
