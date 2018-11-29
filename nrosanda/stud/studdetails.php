<?php

include_once 'db_conn.php';



if (isset($_POST["submit"])) {
    
    $query = "SELECT mbrStud. imeStud, prezStud, pbr.Rod, pbr.Stan, datRodStud, "
            . "jmbgStud FROM stud WHERE imeStud= :imeStud";


    $q1 = $conn->prepare($query);
    
    $q1-> execute([':imeStud' => $_POST["submit"]]);
    $q1->setFetchMode(PDO::FETCH_ASSOC);
    
}while ($row = $q1->fetchAll()) {
    echo $row['mbrStud'].' '.$row['imeStud'] ;
}


?>



<?php $conn = null; ?>
