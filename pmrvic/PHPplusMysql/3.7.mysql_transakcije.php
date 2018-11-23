<?php
include_once './dbconn.php';

$error_num=0;

$query='BEGIN';  // započeli smo transakciju
$result = $mysqli->query($query);  // stari način: $result=mysql_query($query);


$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) "
    . "VALUES ('73001', 'Sunčan Brijeg', '4')";
$result = $mysqli->query($query); 

if(!$result){
    $error_num++;
}

$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) "
    . "VALUES ('73002', 'Sunčan Brijeg', '4')";
$result = $mysqli->query($query); 

if(!$result){
    $error_num++;
}

$query="INSERT INTO `fakultet`.`mjesto` (`pbr`, `nazMjesto`, `sifZupanija`) "
    . "VALUES ('73003', 'Sunčan Brijeg', '4')";
$result = $mysqli->query($query); 
if(!$result){
    $error_num++;
    echo $mysqli->error;
    print_r($mysqli->error_list);
}

if($error_num<=0){
    $query="COMMIT";
}else{
    $query="ROLLBACK";
}
$result = $mysqli->query($query);

    





