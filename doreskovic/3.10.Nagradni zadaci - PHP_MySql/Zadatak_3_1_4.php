<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.14, stranica 52.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<h1>Zadatak 3.14</h1>
<h2>Napišite program koji će iz baze fakultet dohvatiti sve studente koji su rođeni u Zagrebu i ispisanti njihova imena i prezimena.
</h2>
<h3><p>Rješenje je:</p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakultet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query="SELECT imeStud, prezStud  FROM stud WHERE pbrRod LIKE 10000 LIMIT 50";
if($stmt=$conn->prepare($query)) {
	$stmt->execute();
	$stmt->bind_result($col1,$col2);
	while($stmt->fetch()) 
	{
		echo $col1."-".$col2;
		echo'<br/>';
	}
	$stmt->close();
}
$conn->close();
?> 
</h3>
</body>
</html>