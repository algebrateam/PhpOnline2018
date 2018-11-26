<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.16, stranica 52.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<h1>Zadatak 3.16</h1>
<h2>Napišite program koji s pomoću SQL funkcije COUNT prebrojava nastavnike čije prezime počinje slovom M i ispisuje taj broj.
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

$query="SELECT COUNT(*) FROM nastavnik WHERE LEFT(prezNastavnik, 1) IN ('M')";
if($stmt=$conn->prepare($query)) {
	$stmt->execute();
	$stmt->bind_result($col1);
	while($stmt->fetch()) 
	{
		echo "Broj nastanika čije prezime počinje slovom M je:".$col1;
		echo'<br/>';
	}
	$stmt->close();
}
$conn->close();
?> 
</h3>
</body>
</html>