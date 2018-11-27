<!DOCTYPE html>
<html>
    <head>
        <title>Zadatak 3.15, stranica 52.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<h1>Zadatak 3.15</h1>
<h2>Napravite aplikaciju koja će s pomoću PHP funkcije mysql_num_rows ispisati koliko sudenata iz tablice stud ima ime koje počinje slovom A
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

$query = "SELECT imeStud FROM stud WHERE imeStud LIKE 'A%'";
if ($stmt = mysqli_prepare($conn, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    printf("Broj studenata je: %d.\n", mysqli_stmt_num_rows($stmt));

    /* close statement */
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
 ?> 
 </h3>
</body>
</html>